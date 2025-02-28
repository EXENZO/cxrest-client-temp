<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\Entity\CRDataNode;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:57:58 +0000
 * @method AbstractCRNodeType setTypeID() setTypeID(integer $value)
 * @method integer getTypeID getTypeID()
 * @method AbstractCRNodeType setName() setName(string $value)
 * @method string getName getName()
 * @method AbstractCRNodeType setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRNodeType setIsEnumerated() setIsEnumerated(integer $value)
 * @method integer getIsEnumerated getIsEnumerated()
 * @method AbstractCRNodeType setCurrentEnumerationID() setCurrentEnumerationID(integer $value)
 * @method integer getCurrentEnumerationID getCurrentEnumerationID()
 * @method AbstractCRNodeType setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRNodeType setIsEditable() setIsEditable(integer $value)
 * @method integer getIsEditable getIsEditable()
 * @method AbstractCRNodeType setLocalizedName() setLocalizedName(string $value)
 * @method string getLocalizedName getLocalizedName()
 * @method AbstractCRNodeType setIsExtracted() setIsExtracted(integer $value)
 * @method integer getIsExtracted getIsExtracted()
 * @method AbstractCRNodeType setIdentifier() setIdentifier(string $value)
 * @method string getIdentifier getIdentifier()
 * @method AbstractCRNodeType setNotesDescription() setNotesDescription(string $value)
 * @method string getNotesDescription getNotesDescription()
 * @method AbstractCRNodeType setIsMultiLanguage() setIsMultiLanguage(integer $value)
 * @method integer getIsMultiLanguage getIsMultiLanguage()
 * @method AbstractCRNodeType setCustomType() setCustomType(string $value)
 * @method string getCustomType getCustomType()
 * @method AbstractCRNodeType setDataNodes() setDataNodes(array|Collection $values)
 * @method Collection|CRDataNode getDataNodes getDataNodes()
 */
abstract class AbstractCRNodeType extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRNodeType';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $typeID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 0
     * @width 32
     */
    public $name = null;

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isEnumerated = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $currentEnumerationID = null;

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
    public $isEditable = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $localizedName = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isExtracted = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 32
     */
    public $identifier = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $notesDescription = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isMultiLanguage = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $customType = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 1
     * @name dataNodes
     */
    public $dataNodes = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("nodeTypeID");
        $entityConfiguration->setName("CRNodeType");
    }
}
