<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRAttachmentData;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRUser;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:57:51 +0000
 * @method AbstractCRAttachment setAttachmentID() setAttachmentID(integer $value)
 * @method integer getAttachmentID getAttachmentID()
 * @method AbstractCRAttachment setLabel() setLabel(string $value)
 * @method string getLabel getLabel()
 * @method AbstractCRAttachment setValid() setValid(integer $value)
 * @method integer getValid getValid()
 * @method AbstractCRAttachment setFilePath() setFilePath(string $value)
 * @method string getFilePath getFilePath()
 * @method AbstractCRAttachment setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRAttachment setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRAttachment setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRAttachment setRanking() setRanking(integer $value)
 * @method integer getRanking getRanking()
 * @method AbstractCRAttachment setContentID() setContentID(string $value)
 * @method string getContentID getContentID()
 * @method AbstractCRAttachment setMetaData() setMetaData(NSDictionary|array $value)
 * @method NSDictionary|array getMetaData getMetaData()
 * @method AbstractCRAttachment setSize() setSize(integer $value)
 * @method integer getSize getSize()
 * @method AbstractCRAttachment setSortOrder() setSortOrder(integer $value)
 * @method integer getSortOrder getSortOrder()
 * @method AbstractCRAttachment setToTypeNode() setToTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToTypeNode getToTypeNode($index = null)
 * @method AbstractCRAttachment setToAttachmentData() setToAttachmentData(array|CRAttachmentData $value)
 * @method CRAttachmentData getToAttachmentData getToAttachmentData($index = null)
 * @method AbstractCRAttachment setOwner() setOwner(array|CRUser $value)
 * @method CRUser getOwner getOwner($index = null)
 * @method AbstractCRAttachment setToStatusNode() setToStatusNode(array|CRDataNode $value)
 * @method CRDataNode getToStatusNode getToStatusNode($index = null)
 */
abstract class AbstractCRAttachment extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRAttachment';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $attachmentID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $label = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $valid = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 0
     * @width
     */
    public $filePath = null;

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
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $modificationDate = null;

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
     * @allows_null 1
     * @value_type d
     * @value_type_human
     */
    public $ranking = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $contentID = null;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $metaData = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $size = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $sortOrder = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toTypeNode
     * @default 0
     * @nodeType Document-type
     */
    public $toTypeNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRAttachmentData
     * @OneToOne (targetEntity="CRAttachmentData")
     * @mandatory 0
     * @destination_entity CRAttachmentData
     * @to_many 0
     * @name toAttachmentData
     */
    public $toAttachmentData = null;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name owner
     */
    public $owner = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toStatusNode
     */
    public $toStatusNode = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("attachmentID");
        $entityConfiguration->setName("CRAttachment");
    }
}
