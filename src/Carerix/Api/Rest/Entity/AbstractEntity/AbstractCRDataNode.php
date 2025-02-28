<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRDataNodeValue;
use Carerix\Api\Rest\Entity\CRNodeType;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:57:52 +0000
 * @method AbstractCRDataNode setDataNodeID() setDataNodeID(integer $value)
 * @method integer getDataNodeID getDataNodeID()
 * @method AbstractCRDataNode setNotActive() setNotActive(integer $value)
 * @method integer getNotActive getNotActive()
 * @method AbstractCRDataNode setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRDataNode setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRDataNode setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRDataNode setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRDataNode setIsHidden() setIsHidden(integer $value)
 * @method integer getIsHidden getIsHidden()
 * @method AbstractCRDataNode setIsDefault() setIsDefault(integer $value)
 * @method integer getIsDefault getIsDefault()
 * @method AbstractCRDataNode setNotes() setNotes(string $value)
 * @method string getNotes getNotes()
 * @method AbstractCRDataNode setExportCode() setExportCode(string $value)
 * @method string getExportCode getExportCode()
 * @method AbstractCRDataNode setIsSystem() setIsSystem(integer $value)
 * @method integer getIsSystem getIsSystem()
 * @method AbstractCRDataNode setListType() setListType(string $value)
 * @method string getListType getListType()
 * @method AbstractCRDataNode setPackageID() setPackageID(string $value)
 * @method string getPackageID getPackageID()
 * @method AbstractCRDataNode setPackageConfig() setPackageConfig(NSDictionary|array $value)
 * @method NSDictionary|array getPackageConfig getPackageConfig()
 * @method AbstractCRDataNode setType() setType(array|CRNodeType $value)
 * @method CRNodeType getType getType($index = null)
 * @method AbstractCRDataNode setChildrenNodes() setChildrenNodes(array|Collection $values)
 * @method Collection|CRDataNode getChildrenNodes getChildrenNodes()
 * @method AbstractCRDataNode setParentNodes() setParentNodes(array|Collection $values)
 * @method Collection|CRDataNode getParentNodes getParentNodes()
 * @method AbstractCRDataNode setValues() setValues(array|Collection $values)
 * @method Collection|CRDataNodeValue getValues getValues()
 */
abstract class AbstractCRDataNode extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRDataNode';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $dataNodeID = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $notActive = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 0
     */
    public $creationDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     * @isUnique 1
     */
    public $importID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $modificationDate = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $deleted = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isHidden = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isDefault = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $notes = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     * @isUnique 1
     */
    public $exportCode = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isSystem = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $listType = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $packageID = null;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $packageConfig = null;

    /**
     * @cx_field true
     * @access private
     * @var CRNodeType
     * @OneToOne (targetEntity="CRNodeType")
     * @mandatory 1
     * @destination_entity CRNodeType
     * @to_many 0
     * @name type
     */
    public $type = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 1
     * @name childrenNodes
     */
    public $childrenNodes = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 1
     * @name parentNodes
     */
    public $parentNodes = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRDataNodeValue")
     * @mandatory 0
     * @destination_entity CRDataNodeValue
     * @to_many 1
     * @name values
     * @inverseName toDataNode
     */
    public $values = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("dataNodeID");
        $entityConfiguration->setName("CRDataNode");
    }
}
