<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSArray;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRAgency;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CRAttributeChange;
use Carerix\Api\Rest\Entity\CRCompany;
use Carerix\Api\Rest\Entity\CRConfigProfile;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmailAddress;
use Carerix\Api\Rest\Entity\CREmployee;
use Carerix\Api\Rest\Entity\CRJob;
use Carerix\Api\Rest\Entity\CRLeadUser;
use Carerix\Api\Rest\Entity\CROpportunityUser;
use Carerix\Api\Rest\Entity\CRTalentPoolUser;
use Carerix\Api\Rest\Entity\CRToDo;
use Carerix\Api\Rest\Entity\CRToDoUser;
use Carerix\Api\Rest\Entity\CRUrl;
use Carerix\Api\Rest\Entity\CRUser;
use Carerix\Api\Rest\Entity\CRUserCompany;
use Carerix\Api\Rest\Entity\CRUserHash;
use Carerix\Api\Rest\Entity\CRUserRole;
use Carerix\Api\Rest\Entity\CRUserStatus;
use Carerix\Api\Rest\Entity\CRVacancy;
use Carerix\Api\Rest\Entity\CRVacancyUser;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:58:14 +0000
 * @method AbstractCRAdmin setPhoto() setPhoto(string $value)
 * @method string getPhoto getPhoto()
 * @method AbstractCRAdmin setCompanyInformation() setCompanyInformation(string $value)
 * @method string getCompanyInformation getCompanyInformation()
 * @method AbstractCRAdmin setVisitAddress() setVisitAddress(string $value)
 * @method string getVisitAddress getVisitAddress()
 * @method AbstractCRAdmin setAddress() setAddress(string $value)
 * @method string getAddress getAddress()
 * @method AbstractCRAdmin setContactID() setContactID(integer $value)
 * @method integer getContactID getContactID()
 * @method AbstractCRAdmin setEmailAddress() setEmailAddress(string $value)
 * @method string getEmailAddress getEmailAddress()
 * @method AbstractCRAdmin setHomeEmailAddress() setHomeEmailAddress(string $value)
 * @method string getHomeEmailAddress getHomeEmailAddress()
 * @method AbstractCRAdmin setBusinessEmailAddress() setBusinessEmailAddress(string $value)
 * @method string getBusinessEmailAddress getBusinessEmailAddress()
 * @method AbstractCRAdmin setPrivateEmailAddress() setPrivateEmailAddress(string $value)
 * @method string getPrivateEmailAddress getPrivateEmailAddress()
 * @method AbstractCRAdmin setBusinessOrPrivateEmailAddress() setBusinessOrPrivateEmailAddress(string $value)
 * @method string getBusinessOrPrivateEmailAddress getBusinessOrPrivateEmailAddress()
 * @method AbstractCRAdmin setPrivateOrBusinessEmailAddress() setPrivateOrBusinessEmailAddress(string $value)
 * @method string getPrivateOrBusinessEmailAddress getPrivateOrBusinessEmailAddress()
 * @method AbstractCRAdmin setBirthDay() setBirthDay(string $value)
 * @method string getBirthDay getBirthDay()
 * @method AbstractCRAdmin setHasPhoto() setHasPhoto(integer $value)
 * @method integer getHasPhoto getHasPhoto()
 * @method AbstractCRAdmin setSystemLanguage() setSystemLanguage(string $value)
 * @method string getSystemLanguage getSystemLanguage()
 * @method AbstractCRAdmin setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRAdmin setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRAdmin setFirstName() setFirstName(string $value)
 * @method string getFirstName getFirstName()
 * @method AbstractCRAdmin setInitials() setInitials(string $value)
 * @method string getInitials getInitials()
 * @method AbstractCRAdmin setLastName() setLastName(string $value)
 * @method string getLastName getLastName()
 * @method AbstractCRAdmin setPassword() setPassword(string $value)
 * @method string getPassword getPassword()
 * @method AbstractCRAdmin setUserName() setUserName(string $value)
 * @method string getUserName getUserName()
 * @method AbstractCRAdmin setWantsCookie() setWantsCookie(integer $value)
 * @method integer getWantsCookie getWantsCookie()
 * @method AbstractCRAdmin setUserID() setUserID(integer $value)
 * @method integer getUserID getUserID()
 * @method AbstractCRAdmin setLastNamePrefix() setLastNamePrefix(string $value)
 * @method string getLastNamePrefix getLastNamePrefix()
 * @method AbstractCRAdmin setCity() setCity(string $value)
 * @method string getCity getCity()
 * @method AbstractCRAdmin setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRAdmin setBirthDate() setBirthDate(string $value)
 * @method string getBirthDate getBirthDate()
 * @method AbstractCRAdmin setHouseNumber() setHouseNumber(string $value)
 * @method string getHouseNumber getHouseNumber()
 * @method AbstractCRAdmin setJobTitle() setJobTitle(string $value)
 * @method string getJobTitle getJobTitle()
 * @method AbstractCRAdmin setPostalCode() setPostalCode(string $value)
 * @method string getPostalCode getPostalCode()
 * @method AbstractCRAdmin setStreet() setStreet(string $value)
 * @method string getStreet getStreet()
 * @method AbstractCRAdmin setIsNewUser() setIsNewUser(integer $value)
 * @method integer getIsNewUser getIsNewUser()
 * @method AbstractCRAdmin setAbbreviation() setAbbreviation(string $value)
 * @method string getAbbreviation getAbbreviation()
 * @method AbstractCRAdmin setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRAdmin setHouseNumberSuffix() setHouseNumberSuffix(string $value)
 * @method string getHouseNumberSuffix getHouseNumberSuffix()
 * @method AbstractCRAdmin setSuffix() setSuffix(string $value)
 * @method string getSuffix getSuffix()
 * @method AbstractCRAdmin setFullAddress() setFullAddress(string $value)
 * @method string getFullAddress getFullAddress()
 * @method AbstractCRAdmin setExportID() setExportID(integer $value)
 * @method integer getExportID getExportID()
 * @method AbstractCRAdmin setVisitCity() setVisitCity(string $value)
 * @method string getVisitCity getVisitCity()
 * @method AbstractCRAdmin setVisitNumber() setVisitNumber(string $value)
 * @method string getVisitNumber getVisitNumber()
 * @method AbstractCRAdmin setVisitPostalCode() setVisitPostalCode(string $value)
 * @method string getVisitPostalCode getVisitPostalCode()
 * @method AbstractCRAdmin setVisitStreet() setVisitStreet(string $value)
 * @method string getVisitStreet getVisitStreet()
 * @method AbstractCRAdmin setVisitFullAddress() setVisitFullAddress(string $value)
 * @method string getVisitFullAddress getVisitFullAddress()
 * @method AbstractCRAdmin setVisitNumberSuffix() setVisitNumberSuffix(string $value)
 * @method string getVisitNumberSuffix getVisitNumberSuffix()
 * @method AbstractCRAdmin setSourceInfo() setSourceInfo(string $value)
 * @method string getSourceInfo getSourceInfo()
 * @method AbstractCRAdmin setIsLoginBlocked() setIsLoginBlocked(integer $value)
 * @method integer getIsLoginBlocked getIsLoginBlocked()
 * @method AbstractCRAdmin setForwardEmail() setForwardEmail(integer $value)
 * @method integer getForwardEmail getForwardEmail()
 * @method AbstractCRAdmin setExternalIdentifier() setExternalIdentifier(string $value)
 * @method string getExternalIdentifier getExternalIdentifier()
 * @method AbstractCRAdmin setTrialPeriodAmount() setTrialPeriodAmount(integer $value)
 * @method integer getTrialPeriodAmount getTrialPeriodAmount()
 * @method AbstractCRAdmin setConditionsInformation() setConditionsInformation(string $value)
 * @method string getConditionsInformation getConditionsInformation()
 * @method AbstractCRAdmin setFaxNumber() setFaxNumber(string $value)
 * @method string getFaxNumber getFaxNumber()
 * @method AbstractCRAdmin setFaxNumberBusiness() setFaxNumberBusiness(string $value)
 * @method string getFaxNumberBusiness getFaxNumberBusiness()
 * @method AbstractCRAdmin setInternalAddress() setInternalAddress(string $value)
 * @method string getInternalAddress getInternalAddress()
 * @method AbstractCRAdmin setLastContactDate() setLastContactDate(string $value)
 * @method string getLastContactDate getLastContactDate()
 * @method AbstractCRAdmin setMobileNumber() setMobileNumber(string $value)
 * @method string getMobileNumber getMobileNumber()
 * @method AbstractCRAdmin setMobileNumberBusiness() setMobileNumberBusiness(string $value)
 * @method string getMobileNumberBusiness getMobileNumberBusiness()
 * @method AbstractCRAdmin setOrganisationInformation() setOrganisationInformation(string $value)
 * @method string getOrganisationInformation getOrganisationInformation()
 * @method AbstractCRAdmin setPhoneNumber() setPhoneNumber(string $value)
 * @method string getPhoneNumber getPhoneNumber()
 * @method AbstractCRAdmin setPhoneNumberBusiness() setPhoneNumberBusiness(string $value)
 * @method string getPhoneNumberBusiness getPhoneNumberBusiness()
 * @method AbstractCRAdmin setTitle() setTitle(string $value)
 * @method string getTitle getTitle()
 * @method AbstractCRAdmin setUserInformation() setUserInformation(string $value)
 * @method string getUserInformation getUserInformation()
 * @method AbstractCRAdmin setIsTokenWorkActive() setIsTokenWorkActive(integer $value)
 * @method integer getIsTokenWorkActive getIsTokenWorkActive()
 * @method AbstractCRAdmin setTokenWork() setTokenWork(string $value)
 * @method string getTokenWork getTokenWork()
 * @method AbstractCRAdmin setTokenWorkValidUntilDate() setTokenWorkValidUntilDate(string $value)
 * @method string getTokenWorkValidUntilDate getTokenWorkValidUntilDate()
 * @method AbstractCRAdmin setTokenHome() setTokenHome(string $value)
 * @method string getTokenHome getTokenHome()
 * @method AbstractCRAdmin setIsTokenHomeActive() setIsTokenHomeActive(integer $value)
 * @method integer getIsTokenHomeActive getIsTokenHomeActive()
 * @method AbstractCRAdmin setTokenHomeValidUntilDate() setTokenHomeValidUntilDate(string $value)
 * @method string getTokenHomeValidUntilDate getTokenHomeValidUntilDate()
 * @method AbstractCRAdmin setTokenRoad() setTokenRoad(string $value)
 * @method string getTokenRoad getTokenRoad()
 * @method AbstractCRAdmin setIsTokenRoadActive() setIsTokenRoadActive(integer $value)
 * @method integer getIsTokenRoadActive getIsTokenRoadActive()
 * @method AbstractCRAdmin setTokenEmailAddress() setTokenEmailAddress(string $value)
 * @method string getTokenEmailAddress getTokenEmailAddress()
 * @method AbstractCRAdmin setIsTbaActive() setIsTbaActive(integer $value)
 * @method integer getIsTbaActive getIsTbaActive()
 * @method AbstractCRAdmin setPasswordValidUntilDate() setPasswordValidUntilDate(string $value)
 * @method string getPasswordValidUntilDate getPasswordValidUntilDate()
 * @method AbstractCRAdmin setOutOfOfficeDate() setOutOfOfficeDate(string $value)
 * @method string getOutOfOfficeDate getOutOfOfficeDate()
 * @method AbstractCRAdmin setMailboxURLString() setMailboxURLString(string $value)
 * @method string getMailboxURLString getMailboxURLString()
 * @method AbstractCRAdmin setMailboxDate() setMailboxDate(string $value)
 * @method string getMailboxDate getMailboxDate()
 * @method AbstractCRAdmin setMailboxFlags() setMailboxFlags(integer $value)
 * @method integer getMailboxFlags getMailboxFlags()
 * @method AbstractCRAdmin setOutOfOfficeText() setOutOfOfficeText(string $value)
 * @method string getOutOfOfficeText getOutOfOfficeText()
 * @method AbstractCRAdmin setTimeZoneName() setTimeZoneName(string $value)
 * @method string getTimeZoneName getTimeZoneName()
 * @method AbstractCRAdmin setIsActive() setIsActive(integer $value)
 * @method integer getIsActive getIsActive()
 * @method AbstractCRAdmin setHomeCity() setHomeCity(string $value)
 * @method string getHomeCity getHomeCity()
 * @method AbstractCRAdmin setHomeFullAddress() setHomeFullAddress(string $value)
 * @method string getHomeFullAddress getHomeFullAddress()
 * @method AbstractCRAdmin setHomeNumber() setHomeNumber(string $value)
 * @method string getHomeNumber getHomeNumber()
 * @method AbstractCRAdmin setHomeNumberSuffix() setHomeNumberSuffix(string $value)
 * @method string getHomeNumberSuffix getHomeNumberSuffix()
 * @method AbstractCRAdmin setHomePostalCode() setHomePostalCode(string $value)
 * @method string getHomePostalCode getHomePostalCode()
 * @method AbstractCRAdmin setHomeStreet() setHomeStreet(string $value)
 * @method string getHomeStreet getHomeStreet()
 * @method AbstractCRAdmin setAlternativeCity() setAlternativeCity(string $value)
 * @method string getAlternativeCity getAlternativeCity()
 * @method AbstractCRAdmin setAlternativeFullAddress() setAlternativeFullAddress(string $value)
 * @method string getAlternativeFullAddress getAlternativeFullAddress()
 * @method AbstractCRAdmin setAlternativeNumber() setAlternativeNumber(string $value)
 * @method string getAlternativeNumber getAlternativeNumber()
 * @method AbstractCRAdmin setAlternativeNumberSuffix() setAlternativeNumberSuffix(string $value)
 * @method string getAlternativeNumberSuffix getAlternativeNumberSuffix()
 * @method AbstractCRAdmin setAlternativePostalCode() setAlternativePostalCode(string $value)
 * @method string getAlternativePostalCode getAlternativePostalCode()
 * @method AbstractCRAdmin setAlternativeStreet() setAlternativeStreet(string $value)
 * @method string getAlternativeStreet getAlternativeStreet()
 * @method AbstractCRAdmin setIsEmailInConfidential() setIsEmailInConfidential(integer $value)
 * @method integer getIsEmailInConfidential getIsEmailInConfidential()
 * @method AbstractCRAdmin setMailboxSettings() setMailboxSettings(NSDictionary|array $value)
 * @method NSDictionary|array getMailboxSettings getMailboxSettings()
 * @method AbstractCRAdmin setUrl() setUrl(string $value)
 * @method string getUrl getUrl()
 * @method AbstractCRAdmin setIsEmailOutConfidential() setIsEmailOutConfidential(integer $value)
 * @method integer getIsEmailOutConfidential getIsEmailOutConfidential()
 * @method AbstractCRAdmin setFullFirstNames() setFullFirstNames(string $value)
 * @method string getFullFirstNames getFullFirstNames()
 * @method AbstractCRAdmin setUserBonuses() setUserBonuses(NSArray|array $value)
 * @method NSArray|array getUserBonuses getUserBonuses()
 * @method AbstractCRAdmin setSofiNumber() setSofiNumber(string $value)
 * @method string getSofiNumber getSofiNumber()
 * @method AbstractCRAdmin setGoals() setGoals(NSArray|array $value)
 * @method NSArray|array getGoals getGoals()
 * @method AbstractCRAdmin setPromoText() setPromoText(string $value)
 * @method string getPromoText getPromoText()
 * @method AbstractCRAdmin setState() setState(NSDictionary|array $value)
 * @method NSDictionary|array getState getState()
 * @method AbstractCRAdmin setAdditionalInfo() setAdditionalInfo(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfo getAdditionalInfo()
 * @method AbstractCRAdmin setAdditionalInfoPartial() setAdditionalInfoPartial(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfoPartial getAdditionalInfoPartial()
 * @method AbstractCRAdmin setPasswordHash() setPasswordHash(string $value)
 * @method string getPasswordHash getPasswordHash()
 * @method AbstractCRAdmin setPreviewDelay() setPreviewDelay(integer $value)
 * @method integer getPreviewDelay getPreviewDelay()
 * @method AbstractCRAdmin setEncryptedPassword() setEncryptedPassword(string $value)
 * @method string getEncryptedPassword getEncryptedPassword()
 * @method AbstractCRAdmin setEmailNotificationPopup() setEmailNotificationPopup(integer $value)
 * @method integer getEmailNotificationPopup getEmailNotificationPopup()
 * @method AbstractCRAdmin setVisitAddressUseCompanyVisitAddress() setVisitAddressUseCompanyVisitAddress(integer $value)
 * @method integer getVisitAddressUseCompanyVisitAddress getVisitAddressUseCompanyVisitAddress()
 * @method AbstractCRAdmin setAddressUseCompanyMailingAddress() setAddressUseCompanyMailingAddress(integer $value)
 * @method integer getAddressUseCompanyMailingAddress getAddressUseCompanyMailingAddress()
 * @method AbstractCRAdmin setMultiRoleUserID() setMultiRoleUserID(integer $value)
 * @method integer getMultiRoleUserID getMultiRoleUserID()
 * @method AbstractCRAdmin setRoleName() setRoleName(string $value)
 * @method string getRoleName getRoleName()
 * @method AbstractCRAdmin setIndicationColor() setIndicationColor(string $value)
 * @method string getIndicationColor getIndicationColor()
 * @method AbstractCRAdmin setIsMasterUser() setIsMasterUser(integer $value)
 * @method integer getIsMasterUser getIsMasterUser()
 * @method AbstractCRAdmin setIsOutOfOfficeForward() setIsOutOfOfficeForward(integer $value)
 * @method integer getIsOutOfOfficeForward getIsOutOfOfficeForward()
 * @method AbstractCRAdmin setOutOfOfficeForwardAddress() setOutOfOfficeForwardAddress(string $value)
 * @method string getOutOfOfficeForwardAddress getOutOfOfficeForwardAddress()
 * @method AbstractCRAdmin setAdditionalAgenciesIDs() setAdditionalAgenciesIDs(NSArray|array $value)
 * @method NSArray|array getAdditionalAgenciesIDs getAdditionalAgenciesIDs()
 * @method AbstractCRAdmin setLoginAttemptCount() setLoginAttemptCount(integer $value)
 * @method integer getLoginAttemptCount getLoginAttemptCount()
 * @method AbstractCRAdmin setLastLoginAttemptDate() setLastLoginAttemptDate(string $value)
 * @method string getLastLoginAttemptDate getLastLoginAttemptDate()
 * @method AbstractCRAdmin setMailboxOAuth2Settings() setMailboxOAuth2Settings(NSDictionary|array $value)
 * @method NSDictionary|array getMailboxOAuth2Settings getMailboxOAuth2Settings()
 * @method AbstractCRAdmin setHashKey() setHashKey(string $value)
 * @method string getHashKey getHashKey()
 * @method AbstractCRAdmin setHashDate() setHashDate(string $value)
 * @method string getHashDate getHashDate()
 * @method AbstractCRAdmin setTrackingModificationDate() setTrackingModificationDate(string $value)
 * @method string getTrackingModificationDate getTrackingModificationDate()
 * @method AbstractCRAdmin setIntercomUserHash() setIntercomUserHash(string $value)
 * @method string getIntercomUserHash getIntercomUserHash()
 * @method AbstractCRAdmin setIamUser() setIamUser(string $value)
 * @method string getIamUser getIamUser()
 * @method AbstractCRAdmin setUserRoleType() setUserRoleType(string $value)
 * @method string getUserRoleType getUserRoleType()
 * @method AbstractCRAdmin setGroups() setGroups(array|Collection $values)
 * @method Collection|CRDataNode getGroups getGroups()
 * @method AbstractCRAdmin setToDos() setToDos(array|Collection $values)
 * @method Collection|CRToDo getToDos getToDos()
 * @method AbstractCRAdmin setJobs() setJobs(array|Collection $values)
 * @method Collection|CRJob getJobs getJobs()
 * @method AbstractCRAdmin setToCompany() setToCompany(array|CRCompany $value)
 * @method CRCompany getToCompany getToCompany($index = null)
 * @method AbstractCRAdmin setVacancies() setVacancies(array|Collection $values)
 * @method Collection|CRVacancy getVacancies getVacancies()
 * @method AbstractCRAdmin setClients() setClients(array|Collection $values)
 * @method Collection|CRUser getClients getClients()
 * @method AbstractCRAdmin setAccounts() setAccounts(array|Collection $values)
 * @method Collection|CRCompany getAccounts getAccounts()
 * @method AbstractCRAdmin setCreatedBy() setCreatedBy(array|CRUser $value)
 * @method CRUser getCreatedBy getCreatedBy($index = null)
 * @method AbstractCRAdmin setModifiedBy() setModifiedBy(array|CRUser $value)
 * @method CRUser getModifiedBy getModifiedBy($index = null)
 * @method AbstractCRAdmin setSingleOwner() setSingleOwner(array|CRUser $value)
 * @method CRUser getSingleOwner getSingleOwner($index = null)
 * @method AbstractCRAdmin setAgency() setAgency(array|CRAgency $value)
 * @method CRAgency getAgency getAgency($index = null)
 * @method AbstractCRAdmin setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 * @method AbstractCRAdmin setToProvinceNode() setToProvinceNode(array|CRDataNode $value)
 * @method CRDataNode getToProvinceNode getToProvinceNode($index = null)
 * @method AbstractCRAdmin setToSingleStatusNode() setToSingleStatusNode(array|CRDataNode $value)
 * @method CRDataNode getToSingleStatusNode getToSingleStatusNode($index = null)
 * @method AbstractCRAdmin setToFunctionNode() setToFunctionNode(array|CRDataNode $value)
 * @method CRDataNode getToFunctionNode getToFunctionNode($index = null)
 * @method AbstractCRAdmin setToLanguageNode() setToLanguageNode(array|CRDataNode $value)
 * @method CRDataNode getToLanguageNode getToLanguageNode($index = null)
 * @method AbstractCRAdmin setToProductNode() setToProductNode(array|CRDataNode $value)
 * @method CRDataNode getToProductNode getToProductNode($index = null)
 * @method AbstractCRAdmin setToGenderNode() setToGenderNode(array|CRDataNode $value)
 * @method CRDataNode getToGenderNode getToGenderNode($index = null)
 * @method AbstractCRAdmin setToCountryNode() setToCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToCountryNode getToCountryNode($index = null)
 * @method AbstractCRAdmin setToVisitCountryNode() setToVisitCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToVisitCountryNode getToVisitCountryNode($index = null)
 * @method AbstractCRAdmin setToVisitProvinceNode() setToVisitProvinceNode(array|CRDataNode $value)
 * @method CRDataNode getToVisitProvinceNode getToVisitProvinceNode($index = null)
 * @method AbstractCRAdmin setToSourceNode() setToSourceNode(array|CRDataNode $value)
 * @method CRDataNode getToSourceNode getToSourceNode($index = null)
 * @method AbstractCRAdmin setStatuses() setStatuses(array|Collection $values)
 * @method Collection|CRUserStatus getStatuses getStatuses()
 * @method AbstractCRAdmin setToTrialPeriodUnitNode() setToTrialPeriodUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToTrialPeriodUnitNode getToTrialPeriodUnitNode($index = null)
 * @method AbstractCRAdmin setToSalutationNode() setToSalutationNode(array|CRDataNode $value)
 * @method CRDataNode getToSalutationNode getToSalutationNode($index = null)
 * @method AbstractCRAdmin setToDoUsers() setToDoUsers(array|Collection $values)
 * @method Collection|CRToDoUser getToDoUsers getToDoUsers()
 * @method AbstractCRAdmin setEmployees() setEmployees(array|Collection $values)
 * @method Collection|CREmployee getEmployees getEmployees()
 * @method AbstractCRAdmin setGroupNodes() setGroupNodes(array|Collection $values)
 * @method Collection|CRDataNode getGroupNodes getGroupNodes()
 * @method AbstractCRAdmin setToUser() setToUser(array|CRUser $value)
 * @method CRUser getToUser getToUser($index = null)
 * @method AbstractCRAdmin setEmailAddresses() setEmailAddresses(array|Collection $values)
 * @method Collection|CREmailAddress getEmailAddresses getEmailAddresses()
 * @method AbstractCRAdmin setToUserRole() setToUserRole(array|CRUserRole $value)
 * @method CRUserRole getToUserRole getToUserRole($index = null)
 * @method AbstractCRAdmin setUserCompanies() setUserCompanies(array|Collection $values)
 * @method Collection|CRUserCompany getUserCompanies getUserCompanies()
 * @method AbstractCRAdmin setToSmtpServerNode() setToSmtpServerNode(array|CRDataNode $value)
 * @method CRDataNode getToSmtpServerNode getToSmtpServerNode($index = null)
 * @method AbstractCRAdmin setToSupplier() setToSupplier(array|CRCompany $value)
 * @method CRCompany getToSupplier getToSupplier($index = null)
 * @method AbstractCRAdmin setToHomeCountryNode() setToHomeCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToHomeCountryNode getToHomeCountryNode($index = null)
 * @method AbstractCRAdmin setToHomeProvinceNode() setToHomeProvinceNode(array|CRDataNode $value)
 * @method CRDataNode getToHomeProvinceNode getToHomeProvinceNode($index = null)
 * @method AbstractCRAdmin setToAlternativeCountryNode() setToAlternativeCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToAlternativeCountryNode getToAlternativeCountryNode($index = null)
 * @method AbstractCRAdmin setToAlternativeProvinceNode() setToAlternativeProvinceNode(array|CRDataNode $value)
 * @method CRDataNode getToAlternativeProvinceNode getToAlternativeProvinceNode($index = null)
 * @method AbstractCRAdmin setUrls() setUrls(array|Collection $values)
 * @method Collection|CRUrl getUrls getUrls()
 * @method AbstractCRAdmin setAttributeChanges() setAttributeChanges(array|Collection $values)
 * @method Collection|CRAttributeChange getAttributeChanges getAttributeChanges()
 * @method AbstractCRAdmin setToConfigProfile() setToConfigProfile(array|CRConfigProfile $value)
 * @method CRConfigProfile getToConfigProfile getToConfigProfile($index = null)
 * @method AbstractCRAdmin setToMultiRoleUser() setToMultiRoleUser(array|CRUser $value)
 * @method CRUser getToMultiRoleUser getToMultiRoleUser($index = null)
 * @method AbstractCRAdmin setAdditionalRoles() setAdditionalRoles(array|Collection $values)
 * @method Collection|CRUser getAdditionalRoles getAdditionalRoles()
 * @method AbstractCRAdmin setUserLeads() setUserLeads(array|Collection $values)
 * @method Collection|CRLeadUser getUserLeads getUserLeads()
 * @method AbstractCRAdmin setUserVacancies() setUserVacancies(array|Collection $values)
 * @method Collection|CRVacancyUser getUserVacancies getUserVacancies()
 * @method AbstractCRAdmin setUserOpportunities() setUserOpportunities(array|Collection $values)
 * @method Collection|CROpportunityUser getUserOpportunities getUserOpportunities()
 * @method AbstractCRAdmin setTalentPoolUsers() setTalentPoolUsers(array|Collection $values)
 * @method Collection|CRTalentPoolUser getTalentPoolUsers getTalentPoolUsers()
 * @method AbstractCRAdmin setUserHashes() setUserHashes(array|Collection $values)
 * @method Collection|CRUserHash getUserHashes getUserHashes()
 */
abstract class AbstractCRAdmin extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRAdmin';

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $photo = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $companyInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $visitAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $address = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $contactID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $emailAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $homeEmailAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $businessEmailAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $privateEmailAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $businessOrPrivateEmailAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $privateOrBusinessEmailAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $birthDay = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $hasPhoto = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $systemLanguage = null;

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
     * @width 40
     */
    public $firstName = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 12
     */
    public $initials = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $lastName = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $password = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $userName = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $wantsCookie = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $userID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $lastNamePrefix = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $city = null;

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
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $birthDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $houseNumber = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $jobTitle = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 30
     */
    public $postalCode = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $street = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $isNewUser = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 100
     */
    public $abbreviation = null;

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
     * @width 10
     */
    public $houseNumberSuffix = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 32
     */
    public $suffix = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $fullAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $exportID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $visitCity = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $visitNumber = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 30
     */
    public $visitPostalCode = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $visitStreet = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $visitFullAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $visitNumberSuffix = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $sourceInfo = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isLoginBlocked = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $forwardEmail = null;

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $trialPeriodAmount = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $conditionsInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $faxNumber = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $faxNumberBusiness = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $internalAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $lastContactDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $mobileNumber = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $mobileNumberBusiness = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $organisationInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $phoneNumber = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $phoneNumberBusiness = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 32
     */
    public $title = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $userInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isTokenWorkActive = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $tokenWork = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $tokenWorkValidUntilDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $tokenHome = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isTokenHomeActive = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $tokenHomeValidUntilDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $tokenRoad = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isTokenRoadActive = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $tokenEmailAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isTbaActive = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $passwordValidUntilDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $outOfOfficeDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $mailboxURLString = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $mailboxDate = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $mailboxFlags = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $outOfOfficeText = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $timeZoneName = null;

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
     * @width 40
     */
    public $homeCity = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $homeFullAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $homeNumber = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $homeNumberSuffix = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 30
     */
    public $homePostalCode = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $homeStreet = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $alternativeCity = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $alternativeFullAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $alternativeNumber = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $alternativeNumberSuffix = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 30
     */
    public $alternativePostalCode = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $alternativeStreet = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isEmailInConfidential = null;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $mailboxSettings = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 100
     */
    public $url = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isEmailOutConfidential = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $fullFirstNames = null;

    /**
     * @cx_field true
     * @access private
     * @var NSArray|array
     * @value_class NSArray
     * @allows_null 1
     */
    public $userBonuses = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $sofiNumber = null;

    /**
     * @cx_field true
     * @access private
     * @var NSArray|array
     * @value_class NSArray
     * @allows_null 1
     */
    public $goals = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $promoText = null;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $state = null;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 0
     */
    public $additionalInfo = null;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 0
     */
    public $additionalInfoPartial = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $passwordHash = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $previewDelay = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 32
     */
    public $encryptedPassword = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $emailNotificationPopup = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $visitAddressUseCompanyVisitAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $addressUseCompanyMailingAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $multiRoleUserID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $roleName = null;

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isMasterUser = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isOutOfOfficeForward = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $outOfOfficeForwardAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var NSArray|array
     * @value_class NSArray
     * @allows_null 1
     */
    public $additionalAgenciesIDs = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $loginAttemptCount = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $lastLoginAttemptDate = null;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $mailboxOAuth2Settings = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $hashKey = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $hashDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $trackingModificationDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 64
     */
    public $intercomUserHash = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     * @isUnique 1
     */
    public $iamUser = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 25
     */
    public $userRoleType = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 1
     * @name groups
     */
    public $groups = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRToDo")
     * @mandatory 0
     * @destination_entity CRToDo
     * @to_many 1
     * @name toDos
     */
    public $toDos = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRJob")
     * @mandatory 0
     * @destination_entity CRJob
     * @to_many 1
     * @name jobs
     */
    public $jobs = null;

    /**
     * @cx_field true
     * @access private
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toCompany
     */
    public $toCompany = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRVacancy")
     * @mandatory 0
     * @destination_entity CRVacancy
     * @to_many 1
     * @name vacancies
     */
    public $vacancies = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 1
     * @name clients
     */
    public $clients = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 1
     * @name accounts
     */
    public $accounts = null;

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
     * @name singleOwner
     */
    public $singleOwner = null;

    /**
     * @cx_field true
     * @access private
     * @var CRAgency
     * @OneToOne (targetEntity="CRAgency")
     * @mandatory 0
     * @destination_entity CRAgency
     * @to_many 0
     * @name agency
     */
    public $agency = null;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProvinceNode
     * @default 1
     * @nodeType Regio
     */
    public $toProvinceNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSingleStatusNode
     * @default 1
     * @nodeType ${label}-status
     */
    public $toSingleStatusNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunctionNode
     * @default 1
     * @nodeType Contact-functie
     */
    public $toFunctionNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLanguageNode
     * @default 1
     * @nodeType Taal
     */
    public $toLanguageNode = null;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toGenderNode
     * @default 1
     * @nodeType Geslacht
     */
    public $toGenderNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCountryNode
     * @default 1
     * @nodeType Land
     */
    public $toCountryNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toVisitCountryNode
     * @default 1
     * @nodeType Land
     */
    public $toVisitCountryNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toVisitProvinceNode
     * @default 1
     * @nodeType Regio
     */
    public $toVisitProvinceNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSourceNode
     * @default 0
     * @nodeType Bron-Contactpersoon
     */
    public $toSourceNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRUserStatus")
     * @mandatory 0
     * @destination_entity CRUserStatus
     * @to_many 1
     * @name statuses
     */
    public $statuses = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toTrialPeriodUnitNode
     * @default 1
     * @nodeType Proeftijd-eenheid
     */
    public $toTrialPeriodUnitNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSalutationNode
     * @default 1
     * @nodeType Aanspreekvorm
     */
    public $toSalutationNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRToDoUser")
     * @mandatory 0
     * @destination_entity CRToDoUser
     * @to_many 1
     * @name toDoUsers
     * @inverseName toUser
     */
    public $toDoUsers = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CREmployee")
     * @mandatory 0
     * @destination_entity CREmployee
     * @to_many 1
     * @name employees
     */
    public $employees = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 1
     * @name groupNodes
     */
    public $groupNodes = null;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toUser
     */
    public $toUser = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CREmailAddress")
     * @mandatory 0
     * @destination_entity CREmailAddress
     * @to_many 1
     * @name emailAddresses
     */
    public $emailAddresses = null;

    /**
     * @cx_field true
     * @access private
     * @var CRUserRole
     * @OneToOne (targetEntity="CRUserRole")
     * @mandatory 0
     * @destination_entity CRUserRole
     * @to_many 0
     * @name toUserRole
     */
    public $toUserRole = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRUserCompany")
     * @mandatory 0
     * @destination_entity CRUserCompany
     * @to_many 1
     * @name userCompanies
     */
    public $userCompanies = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSmtpServerNode
     * @default 1
     * @nodeType SMTP-server
     */
    public $toSmtpServerNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toSupplier
     */
    public $toSupplier = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toHomeCountryNode
     * @default 1
     * @nodeType Land
     */
    public $toHomeCountryNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toHomeProvinceNode
     * @default 1
     * @nodeType Regio
     */
    public $toHomeProvinceNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toAlternativeCountryNode
     * @default 1
     * @nodeType Land
     */
    public $toAlternativeCountryNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toAlternativeProvinceNode
     * @default 1
     * @nodeType Regio
     */
    public $toAlternativeProvinceNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRUrl")
     * @mandatory 0
     * @destination_entity CRUrl
     * @to_many 1
     * @name urls
     */
    public $urls = null;

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
     * @var CRConfigProfile
     * @OneToOne (targetEntity="CRConfigProfile")
     * @mandatory 0
     * @destination_entity CRConfigProfile
     * @to_many 0
     * @name toConfigProfile
     */
    public $toConfigProfile = null;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toMultiRoleUser
     */
    public $toMultiRoleUser = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 1
     * @name additionalRoles
     */
    public $additionalRoles = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRLeadUser")
     * @mandatory 0
     * @destination_entity CRLeadUser
     * @to_many 1
     * @name userLeads
     */
    public $userLeads = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRVacancyUser")
     * @mandatory 0
     * @destination_entity CRVacancyUser
     * @to_many 1
     * @name userVacancies
     */
    public $userVacancies = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CROpportunityUser")
     * @mandatory 0
     * @destination_entity CROpportunityUser
     * @to_many 1
     * @name userOpportunities
     */
    public $userOpportunities = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRTalentPoolUser")
     * @mandatory 0
     * @destination_entity CRTalentPoolUser
     * @to_many 1
     * @name talentPoolUsers
     */
    public $talentPoolUsers = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRUserHash")
     * @mandatory 0
     * @destination_entity CRUserHash
     * @to_many 1
     * @name userHashes
     */
    public $userHashes = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("adminID");
        $entityConfiguration->setName("CRAdmin");
    }
}
