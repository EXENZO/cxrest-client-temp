<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CRAttachmentData;
use Carerix\Api\Rest\Entity\CRAttributeChange;
use Carerix\Api\Rest\Entity\CRCompany;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREditionArticle;
use Carerix\Api\Rest\Entity\CREmailTemplate;
use Carerix\Api\Rest\Entity\CREmployee;
use Carerix\Api\Rest\Entity\CRFetchSpecification;
use Carerix\Api\Rest\Entity\CRInvoice;
use Carerix\Api\Rest\Entity\CRInvoiceLine;
use Carerix\Api\Rest\Entity\CRJob;
use Carerix\Api\Rest\Entity\CRLead;
use Carerix\Api\Rest\Entity\CRMonthHourJobView;
use Carerix\Api\Rest\Entity\CRMonthHourView;
use Carerix\Api\Rest\Entity\CRObjectImport;
use Carerix\Api\Rest\Entity\CROpportunity;
use Carerix\Api\Rest\Entity\CRPublication;
use Carerix\Api\Rest\Entity\CRResource;
use Carerix\Api\Rest\Entity\CRStatusInfo;
use Carerix\Api\Rest\Entity\CRTalentPool;
use Carerix\Api\Rest\Entity\CRTemplateReference;
use Carerix\Api\Rest\Entity\CRToDo;
use Carerix\Api\Rest\Entity\CRToDoNotes;
use Carerix\Api\Rest\Entity\CRToDoUser;
use Carerix\Api\Rest\Entity\CRUser;
use Carerix\Api\Rest\Entity\CRUserRole;
use Carerix\Api\Rest\Entity\CRVacancy;
use Carerix\Api\Rest\Entity\CRWeekHourJobView;
use Carerix\Api\Rest\Entity\CRWeekHourView;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:57:59 +0000
 * @method AbstractCRToDo setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRToDo setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRToDo setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRToDo setStatus() setStatus(integer $value)
 * @method integer getStatus getStatus()
 * @method AbstractCRToDo setTodoTypeKey() setTodoTypeKey(integer $value)
 * @method integer getTodoTypeKey getTodoTypeKey()
 * @method AbstractCRToDo setDeadline() setDeadline(string $value)
 * @method string getDeadline getDeadline()
 * @method AbstractCRToDo setSubject() setSubject(string $value)
 * @method string getSubject getSubject()
 * @method AbstractCRToDo setTodoID() setTodoID(integer $value)
 * @method integer getTodoID getTodoID()
 * @method AbstractCRToDo setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRToDo setEndTime() setEndTime(string $value)
 * @method string getEndTime getEndTime()
 * @method AbstractCRToDo setReminderMinutes() setReminderMinutes(integer $value)
 * @method integer getReminderMinutes getReminderMinutes()
 * @method AbstractCRToDo setRepeatRate() setRepeatRate(integer $value)
 * @method integer getRepeatRate getRepeatRate()
 * @method AbstractCRToDo setFromObjectKeyPath() setFromObjectKeyPath(string $value)
 * @method string getFromObjectKeyPath getFromObjectKeyPath()
 * @method AbstractCRToDo setToObjectKeyPath() setToObjectKeyPath(string $value)
 * @method string getToObjectKeyPath getToObjectKeyPath()
 * @method AbstractCRToDo setUniqueID() setUniqueID(string $value)
 * @method string getUniqueID getUniqueID()
 * @method AbstractCRToDo setLocation() setLocation(string $value)
 * @method string getLocation getLocation()
 * @method AbstractCRToDo setAttendees() setAttendees(string $value)
 * @method string getAttendees getAttendees()
 * @method AbstractCRToDo setToAddress() setToAddress(string $value)
 * @method string getToAddress getToAddress()
 * @method AbstractCRToDo setCcAddress() setCcAddress(string $value)
 * @method string getCcAddress getCcAddress()
 * @method AbstractCRToDo setFromAddress() setFromAddress(string $value)
 * @method string getFromAddress getFromAddress()
 * @method AbstractCRToDo setOwnerKeyPath() setOwnerKeyPath(string $value)
 * @method string getOwnerKeyPath getOwnerKeyPath()
 * @method AbstractCRToDo setIsHTML() setIsHTML(integer $value)
 * @method integer getIsHTML getIsHTML()
 * @method AbstractCRToDo setBccAddress() setBccAddress(string $value)
 * @method string getBccAddress getBccAddress()
 * @method AbstractCRToDo setExpiryDate() setExpiryDate(string $value)
 * @method string getExpiryDate getExpiryDate()
 * @method AbstractCRToDo setPriority() setPriority(integer $value)
 * @method integer getPriority getPriority()
 * @method AbstractCRToDo setReminderDate() setReminderDate(string $value)
 * @method string getReminderDate getReminderDate()
 * @method AbstractCRToDo setReplyToAddress() setReplyToAddress(string $value)
 * @method string getReplyToAddress getReplyToAddress()
 * @method AbstractCRToDo setRecurrence() setRecurrence(integer $value)
 * @method integer getRecurrence getRecurrence()
 * @method AbstractCRToDo setAttachmentCount() setAttachmentCount(integer $value)
 * @method integer getAttachmentCount getAttachmentCount()
 * @method AbstractCRToDo setIsConfidential() setIsConfidential(integer $value)
 * @method integer getIsConfidential getIsConfidential()
 * @method AbstractCRToDo setOtherRelationships() setOtherRelationships(NSDictionary|array $value)
 * @method NSDictionary|array getOtherRelationships getOtherRelationships()
 * @method AbstractCRToDo setRemind() setRemind(integer $value)
 * @method integer getRemind getRemind()
 * @method AbstractCRToDo setOtherInfo() setOtherInfo(NSDictionary|array $value)
 * @method NSDictionary|array getOtherInfo getOtherInfo()
 * @method AbstractCRToDo setHoursRealized() setHoursRealized(integer $value)
 * @method integer getHoursRealized getHoursRealized()
 * @method AbstractCRToDo setDateString() setDateString(string $value)
 * @method string getDateString getDateString()
 * @method AbstractCRToDo setExternalIdentifier() setExternalIdentifier(string $value)
 * @method string getExternalIdentifier getExternalIdentifier()
 * @method AbstractCRToDo setAdditionalInfo() setAdditionalInfo(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfo getAdditionalInfo()
 * @method AbstractCRToDo setAdditionalInfoPartial() setAdditionalInfoPartial(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfoPartial getAdditionalInfoPartial()
 * @method AbstractCRToDo setMonthString() setMonthString(string $value)
 * @method string getMonthString getMonthString()
 * @method AbstractCRToDo setIsTemplateVisible() setIsTemplateVisible(integer $value)
 * @method integer getIsTemplateVisible getIsTemplateVisible()
 * @method AbstractCRToDo setConfidentialIamRole() setConfidentialIamRole(string $value)
 * @method string getConfidentialIamRole getConfidentialIamRole()
 * @method AbstractCRToDo setCreatedBy() setCreatedBy(array|CRUser $value)
 * @method CRUser getCreatedBy getCreatedBy($index = null)
 * @method AbstractCRToDo setModifiedBy() setModifiedBy(array|CRUser $value)
 * @method CRUser getModifiedBy getModifiedBy($index = null)
 * @method AbstractCRToDo setOwner() setOwner(array|CRUser $value)
 * @method CRUser getOwner getOwner($index = null)
 * @method AbstractCRToDo setToCompany() setToCompany(array|CRCompany $value)
 * @method CRCompany getToCompany getToCompany($index = null)
 * @method AbstractCRToDo setToVacancy() setToVacancy(array|CRVacancy $value)
 * @method CRVacancy getToVacancy getToVacancy($index = null)
 * @method AbstractCRToDo setToEmployee() setToEmployee(array|CREmployee $value)
 * @method CREmployee getToEmployee getToEmployee($index = null)
 * @method AbstractCRToDo setToContact() setToContact(array|CRUser $value)
 * @method CRUser getToContact getToContact($index = null)
 * @method AbstractCRToDo setToStatusInfo() setToStatusInfo(array|CRStatusInfo $value)
 * @method CRStatusInfo getToStatusInfo getToStatusInfo($index = null)
 * @method AbstractCRToDo setToEmailTemplate() setToEmailTemplate(array|CREmailTemplate $value)
 * @method CREmailTemplate getToEmailTemplate getToEmailTemplate($index = null)
 * @method AbstractCRToDo setToActivityTypeNode() setToActivityTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToActivityTypeNode getToActivityTypeNode($index = null)
 * @method AbstractCRToDo setToPreviousToDo() setToPreviousToDo(array|CRToDo $value)
 * @method CRToDo getToPreviousToDo getToPreviousToDo($index = null)
 * @method AbstractCRToDo setToTemplateReference() setToTemplateReference(array|CRTemplateReference $value)
 * @method CRTemplateReference getToTemplateReference getToTemplateReference($index = null)
 * @method AbstractCRToDo setToFetchSpecification() setToFetchSpecification(array|CRFetchSpecification $value)
 * @method CRFetchSpecification getToFetchSpecification getToFetchSpecification($index = null)
 * @method AbstractCRToDo setToPublication() setToPublication(array|CRPublication $value)
 * @method CRPublication getToPublication getToPublication($index = null)
 * @method AbstractCRToDo setToJob() setToJob(array|CRJob $value)
 * @method CRJob getToJob getToJob($index = null)
 * @method AbstractCRToDo setToWeekHourView() setToWeekHourView(array|CRWeekHourView $value)
 * @method CRWeekHourView getToWeekHourView getToWeekHourView($index = null)
 * @method AbstractCRToDo setToRecruiter() setToRecruiter(array|CRUser $value)
 * @method CRUser getToRecruiter getToRecruiter($index = null)
 * @method AbstractCRToDo setToResultNode() setToResultNode(array|CRDataNode $value)
 * @method CRDataNode getToResultNode getToResultNode($index = null)
 * @method AbstractCRToDo setToStatusNode() setToStatusNode(array|CRDataNode $value)
 * @method CRDataNode getToStatusNode getToStatusNode($index = null)
 * @method AbstractCRToDo setToFolderNode() setToFolderNode(array|CRDataNode $value)
 * @method CRDataNode getToFolderNode getToFolderNode($index = null)
 * @method AbstractCRToDo setToRepeatUnitNode() setToRepeatUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToRepeatUnitNode getToRepeatUnitNode($index = null)
 * @method AbstractCRToDo setToWeekHourJobView() setToWeekHourJobView(array|CRWeekHourJobView $value)
 * @method CRWeekHourJobView getToWeekHourJobView getToWeekHourJobView($index = null)
 * @method AbstractCRToDo setToDoUsers() setToDoUsers(array|Collection $values)
 * @method Collection|CRToDoUser getToDoUsers getToDoUsers()
 * @method AbstractCRToDo setNextToDos() setNextToDos(array|Collection $values)
 * @method Collection|CRToDo getNextToDos getNextToDos()
 * @method AbstractCRToDo setAttributeChanges() setAttributeChanges(array|Collection $values)
 * @method Collection|CRAttributeChange getAttributeChanges getAttributeChanges()
 * @method AbstractCRToDo setToNotes() setToNotes(array|CRToDoNotes $value)
 * @method CRToDoNotes getToNotes getToNotes($index = null)
 * @method AbstractCRToDo setToLanguageNode() setToLanguageNode(array|CRDataNode $value)
 * @method CRDataNode getToLanguageNode getToLanguageNode($index = null)
 * @method AbstractCRToDo setToInvoice() setToInvoice(array|CRInvoice $value)
 * @method CRInvoice getToInvoice getToInvoice($index = null)
 * @method AbstractCRToDo setToInvoiceLine() setToInvoiceLine(array|CRInvoiceLine $value)
 * @method CRInvoiceLine getToInvoiceLine getToInvoiceLine($index = null)
 * @method AbstractCRToDo setEditionArticles() setEditionArticles(array|Collection $values)
 * @method Collection|CREditionArticle getEditionArticles getEditionArticles()
 * @method AbstractCRToDo setToProductNode() setToProductNode(array|CRDataNode $value)
 * @method CRDataNode getToProductNode getToProductNode($index = null)
 * @method AbstractCRToDo setInvoiceLines() setInvoiceLines(array|Collection $values)
 * @method Collection|CRInvoiceLine getInvoiceLines getInvoiceLines()
 * @method AbstractCRToDo setResources() setResources(array|Collection $values)
 * @method Collection|CRResource getResources getResources()
 * @method AbstractCRToDo setToConfidentialUserRole() setToConfidentialUserRole(array|CRUserRole $value)
 * @method CRUserRole getToConfidentialUserRole getToConfidentialUserRole($index = null)
 * @method AbstractCRToDo setToTransferData() setToTransferData(array|CRAttachmentData $value)
 * @method CRAttachmentData getToTransferData getToTransferData($index = null)
 * @method AbstractCRToDo setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 * @method AbstractCRToDo setToObjectImport() setToObjectImport(array|CRObjectImport $value)
 * @method CRObjectImport getToObjectImport getToObjectImport($index = null)
 * @method AbstractCRToDo setToLead() setToLead(array|CRLead $value)
 * @method CRLead getToLead getToLead($index = null)
 * @method AbstractCRToDo setToOpportunity() setToOpportunity(array|CROpportunity $value)
 * @method CROpportunity getToOpportunity getToOpportunity($index = null)
 * @method AbstractCRToDo setToMonthHourView() setToMonthHourView(array|CRMonthHourView $value)
 * @method CRMonthHourView getToMonthHourView getToMonthHourView($index = null)
 * @method AbstractCRToDo setToMonthHourJobView() setToMonthHourJobView(array|CRMonthHourJobView $value)
 * @method CRMonthHourJobView getToMonthHourJobView getToMonthHourJobView($index = null)
 * @method AbstractCRToDo setToTalentPool() setToTalentPool(array|CRTalentPool $value)
 * @method CRTalentPool getToTalentPool getToTalentPool($index = null)
 */
abstract class AbstractCRToDo extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRToDo';

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
    public $status = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $todoTypeKey = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $deadline = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000
     */
    public $subject = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $todoID = null;

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
    public $endTime = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $reminderMinutes = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $repeatRate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $fromObjectKeyPath = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $toObjectKeyPath = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $uniqueID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1024
     */
    public $location = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10000
     */
    public $attendees = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $toAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $ccAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $fromAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $ownerKeyPath = null;

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
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $bccAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $expiryDate = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $priority = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $reminderDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $replyToAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $recurrence = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $attachmentCount = null;

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
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $otherRelationships = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $remind = null;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $otherInfo = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $hoursRealized = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 8
     */
    public $dateString = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $externalIdentifier = null;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $additionalInfo = null;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $additionalInfoPartial = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 6
     */
    public $monthString = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isTemplateVisible = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $confidentialIamRole = null;

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
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toCompany
     * @inverseName _todos
     */
    public $toCompany = null;

    /**
     * @cx_field true
     * @access private
     * @var CRVacancy
     * @OneToOne (targetEntity="CRVacancy")
     * @mandatory 0
     * @destination_entity CRVacancy
     * @to_many 0
     * @name toVacancy
     * @inverseName _todos
     */
    public $toVacancy = null;

    /**
     * @cx_field true
     * @access private
     * @var CREmployee
     * @OneToOne (targetEntity="CREmployee")
     * @mandatory 0
     * @destination_entity CREmployee
     * @to_many 0
     * @name toEmployee
     * @inverseName _todos
     */
    public $toEmployee = null;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toContact
     * @inverseName _todos
     */
    public $toContact = null;

    /**
     * @cx_field true
     * @access private
     * @var CRStatusInfo
     * @OneToOne (targetEntity="CRStatusInfo")
     * @mandatory 0
     * @destination_entity CRStatusInfo
     * @to_many 0
     * @name toStatusInfo
     */
    public $toStatusInfo = null;

    /**
     * @cx_field true
     * @access private
     * @var CREmailTemplate
     * @OneToOne (targetEntity="CREmailTemplate")
     * @mandatory 0
     * @destination_entity CREmailTemplate
     * @to_many 0
     * @name toEmailTemplate
     */
    public $toEmailTemplate = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toActivityTypeNode
     * @default 1
     * @nodeType ${label}-type
     */
    public $toActivityTypeNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRToDo
     * @OneToOne (targetEntity="CRToDo")
     * @mandatory 0
     * @destination_entity CRToDo
     * @to_many 0
     * @name toPreviousToDo
     */
    public $toPreviousToDo = null;

    /**
     * @cx_field true
     * @access private
     * @var CRTemplateReference
     * @OneToOne (targetEntity="CRTemplateReference")
     * @mandatory 0
     * @destination_entity CRTemplateReference
     * @to_many 0
     * @name toTemplateReference
     */
    public $toTemplateReference = null;

    /**
     * @cx_field true
     * @access private
     * @var CRFetchSpecification
     * @OneToOne (targetEntity="CRFetchSpecification")
     * @mandatory 0
     * @destination_entity CRFetchSpecification
     * @to_many 0
     * @name toFetchSpecification
     */
    public $toFetchSpecification = null;

    /**
     * @cx_field true
     * @access private
     * @var CRPublication
     * @OneToOne (targetEntity="CRPublication")
     * @mandatory 0
     * @destination_entity CRPublication
     * @to_many 0
     * @name toPublication
     */
    public $toPublication = null;

    /**
     * @cx_field true
     * @access private
     * @var CRJob
     * @OneToOne (targetEntity="CRJob")
     * @mandatory 0
     * @destination_entity CRJob
     * @to_many 0
     * @name toJob
     * @inverseName _todos
     */
    public $toJob = null;

    /**
     * @cx_field true
     * @access private
     * @var CRWeekHourView
     * @OneToOne (targetEntity="CRWeekHourView")
     * @mandatory 0
     * @destination_entity CRWeekHourView
     * @to_many 0
     * @name toWeekHourView
     */
    public $toWeekHourView = null;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toRecruiter
     */
    public $toRecruiter = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toResultNode
     * @default 1
     * @nodeType ${label}-resultaat
     */
    public $toResultNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toStatusNode
     * @default 1
     * @nodeType ${label}-status
     */
    public $toStatusNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFolderNode
     */
    public $toFolderNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toRepeatUnitNode
     * @default 0
     * @nodeType Herhalings-eenheid
     */
    public $toRepeatUnitNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRWeekHourJobView
     * @OneToOne (targetEntity="CRWeekHourJobView")
     * @mandatory 0
     * @destination_entity CRWeekHourJobView
     * @to_many 0
     * @name toWeekHourJobView
     */
    public $toWeekHourJobView = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRToDoUser")
     * @mandatory 0
     * @destination_entity CRToDoUser
     * @to_many 1
     * @name toDoUsers
     * @inverseName toToDo
     */
    public $toDoUsers = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRToDo")
     * @mandatory 0
     * @destination_entity CRToDo
     * @to_many 1
     * @name nextToDos
     */
    public $nextToDos = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRAttributeChange")
     * @mandatory 0
     * @destination_entity CRAttributeChange
     * @to_many 1
     * @name attributeChanges
     */
    public $attributeChanges = null;

    /**
     * @cx_field true
     * @access private
     * @var CRToDoNotes
     * @OneToOne (targetEntity="CRToDoNotes")
     * @mandatory 0
     * @destination_entity CRToDoNotes
     * @to_many 0
     * @name toNotes
     */
    public $toNotes = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLanguageNode
     * @default 0
     * @nodeType Systeemtaal
     */
    public $toLanguageNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRInvoice
     * @OneToOne (targetEntity="CRInvoice")
     * @mandatory 0
     * @destination_entity CRInvoice
     * @to_many 0
     * @name toInvoice
     */
    public $toInvoice = null;

    /**
     * @cx_field true
     * @access private
     * @var CRInvoiceLine
     * @OneToOne (targetEntity="CRInvoiceLine")
     * @mandatory 0
     * @destination_entity CRInvoiceLine
     * @to_many 0
     * @name toInvoiceLine
     */
    public $toInvoiceLine = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CREditionArticle")
     * @mandatory 0
     * @destination_entity CREditionArticle
     * @to_many 1
     * @name editionArticles
     */
    public $editionArticles = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductNode
     * @default 1
     * @nodeType Product
     */
    public $toProductNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRInvoiceLine")
     * @mandatory 0
     * @destination_entity CRInvoiceLine
     * @to_many 1
     * @name invoiceLines
     */
    public $invoiceLines = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRResource")
     * @mandatory 0
     * @destination_entity CRResource
     * @to_many 1
     * @name resources
     */
    public $resources = null;

    /**
     * @cx_field true
     * @access private
     * @var CRUserRole
     * @OneToOne (targetEntity="CRUserRole")
     * @mandatory 0
     * @destination_entity CRUserRole
     * @to_many 0
     * @name toConfidentialUserRole
     */
    public $toConfidentialUserRole = null;

    /**
     * @cx_field true
     * @access private
     * @var CRAttachmentData
     * @OneToOne (targetEntity="CRAttachmentData")
     * @mandatory 0
     * @destination_entity CRAttachmentData
     * @to_many 0
     * @name toTransferData
     */
    public $toTransferData = null;

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
     * @var CRObjectImport
     * @OneToOne (targetEntity="CRObjectImport")
     * @mandatory 0
     * @destination_entity CRObjectImport
     * @to_many 0
     * @name toObjectImport
     */
    public $toObjectImport = null;

    /**
     * @cx_field true
     * @access private
     * @var CRLead
     * @OneToOne (targetEntity="CRLead")
     * @mandatory 0
     * @destination_entity CRLead
     * @to_many 0
     * @name toLead
     * @inverseName _todos
     */
    public $toLead = null;

    /**
     * @cx_field true
     * @access private
     * @var CROpportunity
     * @OneToOne (targetEntity="CROpportunity")
     * @mandatory 0
     * @destination_entity CROpportunity
     * @to_many 0
     * @name toOpportunity
     * @inverseName _todos
     */
    public $toOpportunity = null;

    /**
     * @cx_field true
     * @access private
     * @var CRMonthHourView
     * @OneToOne (targetEntity="CRMonthHourView")
     * @mandatory 0
     * @destination_entity CRMonthHourView
     * @to_many 0
     * @name toMonthHourView
     */
    public $toMonthHourView = null;

    /**
     * @cx_field true
     * @access private
     * @var CRMonthHourJobView
     * @OneToOne (targetEntity="CRMonthHourJobView")
     * @mandatory 0
     * @destination_entity CRMonthHourJobView
     * @to_many 0
     * @name toMonthHourJobView
     */
    public $toMonthHourJobView = null;

    /**
     * @cx_field true
     * @access private
     * @var CRTalentPool
     * @OneToOne (targetEntity="CRTalentPool")
     * @mandatory 0
     * @destination_entity CRTalentPool
     * @to_many 0
     * @name toTalentPool
     * @inverseName _todos
     */
    public $toTalentPool = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("toDoID");
        $entityConfiguration->setName("CRToDo");
    }
}
