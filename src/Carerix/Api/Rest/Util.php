<?php
namespace Carerix\Api\Rest;

use Adbar\Dot;
use Carerix\Api\Rest\DataType\DataTypeInterface;

class Util
{

    private static $instance;

    public static function getInstance()
    {
        if (! self::$instance) {
            self::$instance = new Util();
        }

        return self::$instance;
    }

    // returns 0-degree diff, like array_diff_assoc but with nested arrays
    public function array_diff_assoc_recursive($arr1, $arr2)
    {
        $dot1 = dot($this->mixedToArray($arr1))->flatten();
        $dot2 = dot($this->mixedToArray($arr2))->flatten();
        $outputDiff = array_udiff_assoc($dot1, $dot2, function ($a, $b) {
            return intval($a != $b);
        });

        $res = $this->restoreDiffValues(array_keys($this->dottedDiffToArray($outputDiff)), $arr1);
        return $res;
    }

    private function mixedToArray(array $array): array
    {
        $result = [];
        foreach ($array as $key => $val) {
            if (is_object($val) && method_exists($val, 'toArray')) {
                $result[$key] = $val->toArray();
            } else {
                $result[$key] = $val;
            }
        }
        return $result;
    }

    private function dottedDiffToArray(array $diffArray): array
    {
        $dot = dot([]);
        foreach ($diffArray as $key => $val) {
            $dot->add($key, $val);
        }

        return $dot->all();
    }

    private function restoreDiffValues(array $keys, array $valueHolder): array
    {
        $result = [];
        foreach ($keys as $key) {
            if (isset($valueHolder[$key])) {
                $result[$key] = $valueHolder[$key];
            }
        }
        return $result;
    }

    /*
     * Decide SimpleXmlElement structure in depend on the passed var type
     * @TODO: sxe's are passing by reference everywhere, it has to be refactored to a proper factory/trait, towards with:
     * NSArray::toSimpleXMLElement
     * Entity::toSimpleXMLElement
     * NSDictionary::toSimpleXMLElement
     */
    public function xmlFactory($varInstance, &$sxeInstancePath, $keyPath, $dirty = false, $forArray = false): self
    {
        // no assignment for nulls
        if ($varInstance === null) {
            return $this;
        }

        if (! is_object($sxeInstancePath)) {
            throw new \ErrorException("SimpleXmlElement undefined");
        }

        // ===complex types===
        if ($varInstance instanceof Collection) {
            foreach ($varInstance as $vv) {
                // ignore non Entity in Collections (as of original code)
                if ($vv instanceof Entity) {
                    $this->xmlFactory($vv, $sxeInstancePath, $keyPath, $dirty, true);
                }
            }
            return $this;
        }
        if (is_array($varInstance)) {
            foreach ($varInstance as $kk => $vv) {
                if (is_string($kk)) {
                    $this->xmlFactory($vv, $sxeInstancePath->{$keyPath}, $kk, $dirty, $forArray);
                } else {
                    // plain arrays should not be named in xml
                    $this->xmlFactory($vv, $sxeInstancePath, $keyPath, $dirty, $forArray);
                }
            }
            return $this;
        }
        // ===simple types===
        if ($varInstance instanceof DataTypeInterface) {
            if ($forArray) {
                $varInstance->toSimpleXMLElement($sxeInstancePath->{$keyPath}[]);
            } else {
                $varInstance->toSimpleXMLElement($sxeInstancePath->{$keyPath});
            }
            return $this;
        }
        if ($varInstance instanceof Entity) {
            $entityName = Entity::getEntityFromObject($varInstance);
            if ($forArray) {
                $varInstance->toSimpleXMLElement($sxeInstancePath->{$keyPath}->{$entityName}[], $varInstance, $dirty);
            } else {
                $varInstance->toSimpleXMLElement($sxeInstancePath->{$keyPath}->{$entityName}, $varInstance, $dirty);
            }
            return $this;
        }

        // if none of the above, treat it as plain key-val
        if ($forArray) {
            $sxeInstancePath->{$keyPath}[] = $varInstance;
        } else {
            $sxeInstancePath->{$keyPath} = $varInstance;
        }
        return $this;
    }
}