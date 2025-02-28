<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmailTemplate;
use Carerix\Api\Rest\Entity\CRStatusInfo;
use Carerix\Api\Rest\Entity\CRStatusInfoName;
use Carerix\Api\Rest\Entity\CRTemplateReference;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:57:59 +0000
 * @method AbstractCRStatusInfo setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRStatusInfo setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRStatusInfo setIsFinal() setIsFinal(integer $value)
 * @method integer getIsFinal getIsFinal()
 * @method AbstractCRStatusInfo setStatusName() setStatusName(string $value)
 * @method string getStatusName getStatusName()
 * @method AbstractCRStatusInfo setDisplayName() setDisplayName(string $value)
 * @method string getDisplayName getDisplayName()
 * @method AbstractCRStatusInfo setStatusValue() setStatusValue(integer $value)
 * @method integer getStatusValue getStatusValue()
 * @method AbstractCRStatusInfo setStatusInfoID() setStatusInfoID(integer $value)
 * @method integer getStatusInfoID getStatusInfoID()
 * @method AbstractCRStatusInfo setIndicationColor() setIndicationColor(string $value)
 * @method string getIndicationColor getIndicationColor()
 * @method AbstractCRStatusInfo setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRStatusInfo setSortOrder() setSortOrder(integer $value)
 * @method integer getSortOrder getSortOrder()
 * @method AbstractCRStatusInfo setNotActive() setNotActive(integer $value)
 * @method integer getNotActive getNotActive()
 * @method AbstractCRStatusInfo setIsDefault() setIsDefault(integer $value)
 * @method integer getIsDefault getIsDefault()
 * @method AbstractCRStatusInfo setIsJobDefault() setIsJobDefault(integer $value)
 * @method integer getIsJobDefault getIsJobDefault()
 * @method AbstractCRStatusInfo setNotes() setNotes(string $value)
 * @method string getNotes getNotes()
 * @method AbstractCRStatusInfo setStatusGroupID() setStatusGroupID(string $value)
 * @method string getStatusGroupID getStatusGroupID()
 * @method AbstractCRStatusInfo setIsSuccessfullyFilled() setIsSuccessfullyFilled(integer $value)
 * @method integer getIsSuccessfullyFilled getIsSuccessfullyFilled()
 * @method AbstractCRStatusInfo setIsScreening() setIsScreening(integer $value)
 * @method integer getIsScreening getIsScreening()
 * @method AbstractCRStatusInfo setIsProposedCandidate() setIsProposedCandidate(integer $value)
 * @method integer getIsProposedCandidate getIsProposedCandidate()
 * @method AbstractCRStatusInfo setIsInterviewWithClient() setIsInterviewWithClient(integer $value)
 * @method integer getIsInterviewWithClient getIsInterviewWithClient()
 * @method AbstractCRStatusInfo setSla() setSla(integer $value)
 * @method integer getSla getSla()
 * @method AbstractCRStatusInfo setTemplateReferences() setTemplateReferences(array|Collection $values)
 * @method Collection|CRTemplateReference getTemplateReferences getTemplateReferences()
 * @method AbstractCRStatusInfo setEmailTemplates() setEmailTemplates(array|Collection $values)
 * @method Collection|CREmailTemplate getEmailTemplates getEmailTemplates()
 * @method AbstractCRStatusInfo setToProductGroupNode() setToProductGroupNode(array|CRDataNode $value)
 * @method CRDataNode getToProductGroupNode getToProductGroupNode($index = null)
 * @method AbstractCRStatusInfo setToCategoryNode() setToCategoryNode(array|CRDataNode $value)
 * @method CRDataNode getToCategoryNode getToCategoryNode($index = null)
 * @method AbstractCRStatusInfo setParents() setParents(array|Collection $values)
 * @method Collection|CRStatusInfo getParents getParents()
 * @method AbstractCRStatusInfo setChildren() setChildren(array|Collection $values)
 * @method Collection|CRStatusInfo getChildren getChildren()
 * @method AbstractCRStatusInfo setToStatusInfoGroupNode() setToStatusInfoGroupNode(array|CRDataNode $value)
 * @method CRDataNode getToStatusInfoGroupNode getToStatusInfoGroupNode($index = null)
 * @method AbstractCRStatusInfo setNames() setNames(array|Collection $values)
 * @method Collection|CRStatusInfoName getNames getNames()
 */
abstract class AbstractCRStatusInfo extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRStatusInfo';

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isFinal = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000
     */
    public $statusName = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $displayName = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $statusValue = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $statusInfoID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 20
     */
    public $indicationColor = null;

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
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $sortOrder = null;

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isJobDefault = null;

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
     * @width 32
     */
    public $statusGroupID = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isSuccessfullyFilled = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isScreening = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isProposedCandidate = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isInterviewWithClient = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $sla = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRTemplateReference")
     * @mandatory 0
     * @destination_entity CRTemplateReference
     * @to_many 1
     * @name templateReferences
     */
    public $templateReferences = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CREmailTemplate")
     * @mandatory 0
     * @destination_entity CREmailTemplate
     * @to_many 1
     * @name emailTemplates
     */
    public $emailTemplates = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductGroupNode
     * @default 0
     * @nodeType Productgroep
     */
    public $toProductGroupNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCategoryNode
     * @default 0
     * @nodeType Kandidaat-categorie
     */
    public $toCategoryNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRStatusInfo")
     * @mandatory 0
     * @destination_entity CRStatusInfo
     * @to_many 1
     * @name parents
     */
    public $parents = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRStatusInfo")
     * @mandatory 0
     * @destination_entity CRStatusInfo
     * @to_many 1
     * @name children
     */
    public $children = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toStatusInfoGroupNode
     */
    public $toStatusInfoGroupNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRStatusInfoName")
     * @mandatory 0
     * @destination_entity CRStatusInfoName
     * @to_many 1
     * @name names
     */
    public $names = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("statusInfoID");
        $entityConfiguration->setName("CRStatusInfo");
    }
}
