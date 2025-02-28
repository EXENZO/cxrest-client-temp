<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRLeadStage;
use Carerix\Api\Rest\Entity\CRObjectCheckpoint;
use Carerix\Api\Rest\Entity\CROpportunityStage;
use Carerix\Api\Rest\Entity\CRStatusInfo;
use Carerix\Api\Rest\Entity\CRTalentPoolMatchStage;
use Carerix\Api\Rest\Entity\CRUser;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:57:53 +0000
 * @method AbstractCREmailTemplate setName() setName(string $value)
 * @method string getName getName()
 * @method AbstractCREmailTemplate setBodyText() setBodyText(string $value)
 * @method string getBodyText getBodyText()
 * @method AbstractCREmailTemplate setIndex() setIndex(integer $value)
 * @method integer getIndex getIndex()
 * @method AbstractCREmailTemplate setAltText() setAltText(string $value)
 * @method string getAltText getAltText()
 * @method AbstractCREmailTemplate setEmailTemplateID() setEmailTemplateID(integer $value)
 * @method integer getEmailTemplateID getEmailTemplateID()
 * @method AbstractCREmailTemplate setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCREmailTemplate setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCREmailTemplate setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCREmailTemplate setTargetEntityName() setTargetEntityName(string $value)
 * @method string getTargetEntityName getTargetEntityName()
 * @method AbstractCREmailTemplate setIsScript() setIsScript(integer $value)
 * @method integer getIsScript getIsScript()
 * @method AbstractCREmailTemplate setFromKeyPath() setFromKeyPath(string $value)
 * @method string getFromKeyPath getFromKeyPath()
 * @method AbstractCREmailTemplate setToKeyPath() setToKeyPath(string $value)
 * @method string getToKeyPath getToKeyPath()
 * @method AbstractCREmailTemplate setIsMultiRecord() setIsMultiRecord(integer $value)
 * @method integer getIsMultiRecord getIsMultiRecord()
 * @method AbstractCREmailTemplate setIsActive() setIsActive(integer $value)
 * @method integer getIsActive getIsActive()
 * @method AbstractCREmailTemplate setCode() setCode(string $value)
 * @method string getCode getCode()
 * @method AbstractCREmailTemplate setIsHTML() setIsHTML(integer $value)
 * @method integer getIsHTML getIsHTML()
 * @method AbstractCREmailTemplate setSortOrder() setSortOrder(integer $value)
 * @method integer getSortOrder getSortOrder()
 * @method AbstractCREmailTemplate setAddressTypeKey() setAddressTypeKey(integer $value)
 * @method integer getAddressTypeKey getAddressTypeKey()
 * @method AbstractCREmailTemplate setUseAlternativeAddress() setUseAlternativeAddress(integer $value)
 * @method integer getUseAlternativeAddress getUseAlternativeAddress()
 * @method AbstractCREmailTemplate setIsDefault() setIsDefault(integer $value)
 * @method integer getIsDefault getIsDefault()
 * @method AbstractCREmailTemplate setLibraryID() setLibraryID(string $value)
 * @method string getLibraryID getLibraryID()
 * @method AbstractCREmailTemplate setUserRolesString() setUserRolesString(string $value)
 * @method string getUserRolesString getUserRolesString()
 * @method AbstractCREmailTemplate setSelectionsEntitiesString() setSelectionsEntitiesString(string $value)
 * @method string getSelectionsEntitiesString getSelectionsEntitiesString()
 * @method AbstractCREmailTemplate setAddAttachments() setAddAttachments(integer $value)
 * @method integer getAddAttachments getAddAttachments()
 * @method AbstractCREmailTemplate setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCREmailTemplate setDelay() setDelay(integer $value)
 * @method integer getDelay getDelay()
 * @method AbstractCREmailTemplate setLanguagesString() setLanguagesString(string $value)
 * @method string getLanguagesString getLanguagesString()
 * @method AbstractCREmailTemplate setIsSystem() setIsSystem(integer $value)
 * @method integer getIsSystem getIsSystem()
 * @method AbstractCREmailTemplate setShowInHintsBar() setShowInHintsBar(integer $value)
 * @method integer getShowInHintsBar getShowInHintsBar()
 * @method AbstractCREmailTemplate setIsConfidential() setIsConfidential(integer $value)
 * @method integer getIsConfidential getIsConfidential()
 * @method AbstractCREmailTemplate setLocalizedEntityName() setLocalizedEntityName(string $value)
 * @method string getLocalizedEntityName getLocalizedEntityName()
 * @method AbstractCREmailTemplate setSystemCode() setSystemCode(string $value)
 * @method string getSystemCode getSystemCode()
 * @method AbstractCREmailTemplate setPackageID() setPackageID(string $value)
 * @method string getPackageID getPackageID()
 * @method AbstractCREmailTemplate setConfigInfo() setConfigInfo(NSDictionary|array $value)
 * @method NSDictionary|array getConfigInfo getConfigInfo()
 * @method AbstractCREmailTemplate setEmailTemplateTypeKey() setEmailTemplateTypeKey(integer $value)
 * @method integer getEmailTemplateTypeKey getEmailTemplateTypeKey()
 * @method AbstractCREmailTemplate setPackageConfig() setPackageConfig(NSDictionary|array $value)
 * @method NSDictionary|array getPackageConfig getPackageConfig()
 * @method AbstractCREmailTemplate setTemplateLibraryConfig() setTemplateLibraryConfig(NSDictionary|array $value)
 * @method NSDictionary|array getTemplateLibraryConfig getTemplateLibraryConfig()
 * @method AbstractCREmailTemplate setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 * @method AbstractCREmailTemplate setOwner() setOwner(array|CRUser $value)
 * @method CRUser getOwner getOwner($index = null)
 * @method AbstractCREmailTemplate setToDelayUnitNode() setToDelayUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToDelayUnitNode getToDelayUnitNode($index = null)
 * @method AbstractCREmailTemplate setStatusInfos() setStatusInfos(array|Collection $values)
 * @method Collection|CRStatusInfo getStatusInfos getStatusInfos()
 * @method AbstractCREmailTemplate setLeadStages() setLeadStages(array|Collection $values)
 * @method Collection|CRLeadStage getLeadStages getLeadStages()
 * @method AbstractCREmailTemplate setOpportunityStages() setOpportunityStages(array|Collection $values)
 * @method Collection|CROpportunityStage getOpportunityStages getOpportunityStages()
 * @method AbstractCREmailTemplate setCheckpoints() setCheckpoints(array|Collection $values)
 * @method Collection|CRObjectCheckpoint getCheckpoints getCheckpoints()
 * @method AbstractCREmailTemplate setTalentPoolMatchStages() setTalentPoolMatchStages(array|Collection $values)
 * @method Collection|CRTalentPoolMatchStage getTalentPoolMatchStages getTalentPoolMatchStages()
 */
abstract class AbstractCREmailTemplate extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CREmailTemplate';

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $name = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $bodyText = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $index = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $altText = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $emailTemplateID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
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
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $targetEntityName = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isScript = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $fromKeyPath = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $toKeyPath = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isMultiRecord = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isActive = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 64
     */
    public $code = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isHTML = null;

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
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $addressTypeKey = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $useAlternativeAddress = null;

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
     * @width 64
     */
    public $libraryID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000
     */
    public $userRolesString = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $selectionsEntitiesString = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $addAttachments = null;

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
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $delay = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $languagesString = null;

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $showInHintsBar = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isConfidential = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $localizedEntityName = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 64
     */
    public $systemCode = null;

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
    public $configInfo = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $emailTemplateTypeKey = null;

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
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $templateLibraryConfig = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRAttachment")
     * @mandatory 0
     * @destination_entity CRAttachment
     * @to_many 1
     * @name attachments
     */
    public $attachments = null;

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
     * @name toDelayUnitNode
     * @default 0
     * @nodeType Uitstel-eenheid
     */
    public $toDelayUnitNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRStatusInfo")
     * @mandatory 0
     * @destination_entity CRStatusInfo
     * @to_many 1
     * @name statusInfos
     */
    public $statusInfos = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRLeadStage")
     * @mandatory 0
     * @destination_entity CRLeadStage
     * @to_many 1
     * @name leadStages
     */
    public $leadStages = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CROpportunityStage")
     * @mandatory 0
     * @destination_entity CROpportunityStage
     * @to_many 1
     * @name opportunityStages
     */
    public $opportunityStages = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRObjectCheckpoint")
     * @mandatory 0
     * @destination_entity CRObjectCheckpoint
     * @to_many 1
     * @name checkpoints
     */
    public $checkpoints = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRTalentPoolMatchStage")
     * @mandatory 0
     * @destination_entity CRTalentPoolMatchStage
     * @to_many 1
     * @name talentPoolMatchStages
     */
    public $talentPoolMatchStages = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("emailTemplateID");
        $entityConfiguration->setName("CREmailTemplate");
    }
}
