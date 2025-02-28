<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSArray;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRLeadStage;
use Carerix\Api\Rest\Entity\CROpportunityStage;
use Carerix\Api\Rest\Entity\CRStatusInfo;
use Carerix\Api\Rest\Entity\CRTalentPoolMatchStage;
use Carerix\Api\Rest\Entity\CRUser;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:58:00 +0000
 * @method AbstractCRTemplateReference setTemplateReferenceID() setTemplateReferenceID(integer $value)
 * @method integer getTemplateReferenceID getTemplateReferenceID()
 * @method AbstractCRTemplateReference setTargetEntityName() setTargetEntityName(string $value)
 * @method string getTargetEntityName getTargetEntityName()
 * @method AbstractCRTemplateReference setUrl() setUrl(string $value)
 * @method string getUrl getUrl()
 * @method AbstractCRTemplateReference setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRTemplateReference setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRTemplateReference setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRTemplateReference setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRTemplateReference setName() setName(string $value)
 * @method string getName getName()
 * @method AbstractCRTemplateReference setIsMultiRecord() setIsMultiRecord(integer $value)
 * @method integer getIsMultiRecord getIsMultiRecord()
 * @method AbstractCRTemplateReference setIsActive() setIsActive(integer $value)
 * @method integer getIsActive getIsActive()
 * @method AbstractCRTemplateReference setCode() setCode(string $value)
 * @method string getCode getCode()
 * @method AbstractCRTemplateReference setSortOrder() setSortOrder(integer $value)
 * @method integer getSortOrder getSortOrder()
 * @method AbstractCRTemplateReference setIsDefault() setIsDefault(integer $value)
 * @method integer getIsDefault getIsDefault()
 * @method AbstractCRTemplateReference setLibraryID() setLibraryID(string $value)
 * @method string getLibraryID getLibraryID()
 * @method AbstractCRTemplateReference setUserRolesString() setUserRolesString(string $value)
 * @method string getUserRolesString getUserRolesString()
 * @method AbstractCRTemplateReference setShowInMenu() setShowInMenu(integer $value)
 * @method integer getShowInMenu getShowInMenu()
 * @method AbstractCRTemplateReference setLanguagesString() setLanguagesString(string $value)
 * @method string getLanguagesString getLanguagesString()
 * @method AbstractCRTemplateReference setIsEmbedded() setIsEmbedded(integer $value)
 * @method integer getIsEmbedded getIsEmbedded()
 * @method AbstractCRTemplateReference setIsSystem() setIsSystem(integer $value)
 * @method integer getIsSystem getIsSystem()
 * @method AbstractCRTemplateReference setShowInHintsBar() setShowInHintsBar(integer $value)
 * @method integer getShowInHintsBar getShowInHintsBar()
 * @method AbstractCRTemplateReference setIsPDF() setIsPDF(integer $value)
 * @method integer getIsPDF getIsPDF()
 * @method AbstractCRTemplateReference setLocalizedEntityName() setLocalizedEntityName(string $value)
 * @method string getLocalizedEntityName getLocalizedEntityName()
 * @method AbstractCRTemplateReference setConfig() setConfig(NSDictionary|array $value)
 * @method NSDictionary|array getConfig getConfig()
 * @method AbstractCRTemplateReference setShowAsKey() setShowAsKey(integer $value)
 * @method integer getShowAsKey getShowAsKey()
 * @method AbstractCRTemplateReference setSystemCode() setSystemCode(string $value)
 * @method string getSystemCode getSystemCode()
 * @method AbstractCRTemplateReference setContent() setContent(string $value)
 * @method string getContent getContent()
 * @method AbstractCRTemplateReference setTemplateTypeKey() setTemplateTypeKey(integer $value)
 * @method integer getTemplateTypeKey getTemplateTypeKey()
 * @method AbstractCRTemplateReference setConfigInfo() setConfigInfo(NSArray|array $value)
 * @method NSArray|array getConfigInfo getConfigInfo()
 * @method AbstractCRTemplateReference setPackageID() setPackageID(string $value)
 * @method string getPackageID getPackageID()
 * @method AbstractCRTemplateReference setFileName() setFileName(string $value)
 * @method string getFileName getFileName()
 * @method AbstractCRTemplateReference setPackageConfig() setPackageConfig(NSDictionary|array $value)
 * @method NSDictionary|array getPackageConfig getPackageConfig()
 * @method AbstractCRTemplateReference setTemplateLibraryConfig() setTemplateLibraryConfig(NSDictionary|array $value)
 * @method NSDictionary|array getTemplateLibraryConfig getTemplateLibraryConfig()
 * @method AbstractCRTemplateReference setCreatedBy() setCreatedBy(array|CRUser $value)
 * @method CRUser getCreatedBy getCreatedBy($index = null)
 * @method AbstractCRTemplateReference setModifiedBy() setModifiedBy(array|CRUser $value)
 * @method CRUser getModifiedBy getModifiedBy($index = null)
 * @method AbstractCRTemplateReference setOwner() setOwner(array|CRUser $value)
 * @method CRUser getOwner getOwner($index = null)
 * @method AbstractCRTemplateReference setStatusInfos() setStatusInfos(array|Collection $values)
 * @method Collection|CRStatusInfo getStatusInfos getStatusInfos()
 * @method AbstractCRTemplateReference setLeadStages() setLeadStages(array|Collection $values)
 * @method Collection|CRLeadStage getLeadStages getLeadStages()
 * @method AbstractCRTemplateReference setOpportunityStages() setOpportunityStages(array|Collection $values)
 * @method Collection|CROpportunityStage getOpportunityStages getOpportunityStages()
 * @method AbstractCRTemplateReference setTalentPoolMatchStages() setTalentPoolMatchStages(array|Collection $values)
 * @method Collection|CRTalentPoolMatchStage getTalentPoolMatchStages getTalentPoolMatchStages()
 */
abstract class AbstractCRTemplateReference extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRTemplateReference';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $templateReferenceID = null;

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
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $url = null;

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
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $name = null;

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $showInMenu = null;

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
    public $isEmbedded = null;

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
    public $isPDF = null;

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
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $config = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $showAsKey = null;

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
     * @width 1000000
     */
    public $content = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $templateTypeKey = null;

    /**
     * @cx_field true
     * @access private
     * @var NSArray|array
     * @value_class NSArray
     * @allows_null 1
     */
    public $configInfo = null;

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
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000
     */
    public $fileName = null;

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
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name createdBy
     */
    public $createdBy = null;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name modifiedBy
     */
    public $modifiedBy = null;

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
        $entityConfiguration->setIdentifierKey("templateReferenceID");
        $entityConfiguration->setName("CRTemplateReference");
    }
}
