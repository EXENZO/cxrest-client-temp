<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSArray;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRAgency;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CRAttributeChange;
use Carerix\Api\Rest\Entity\CRCompany;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRInvoiceLine;
use Carerix\Api\Rest\Entity\CRJob;
use Carerix\Api\Rest\Entity\CRLead;
use Carerix\Api\Rest\Entity\CRMatch;
use Carerix\Api\Rest\Entity\CRMatchCriteria;
use Carerix\Api\Rest\Entity\CROpportunity;
use Carerix\Api\Rest\Entity\CRPublication;
use Carerix\Api\Rest\Entity\CRUser;
use Carerix\Api\Rest\Entity\CRUserRole;
use Carerix\Api\Rest\Entity\CRVacancyCompanyUserView;
use Carerix\Api\Rest\Entity\CRVacancyEducation;
use Carerix\Api\Rest\Entity\CRVacancyLanguage;
use Carerix\Api\Rest\Entity\CRVacancySkill;
use Carerix\Api\Rest\Entity\CRVacancyTraining;
use Carerix\Api\Rest\Entity\CRVacancyUser;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:58:02 +0000
 * @method AbstractCRVacancy setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRVacancy setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRVacancy setMaxDistance() setMaxDistance(integer $value)
 * @method integer getMaxDistance getMaxDistance()
 * @method AbstractCRVacancy setVacancyID() setVacancyID(integer $value)
 * @method integer getVacancyID getVacancyID()
 * @method AbstractCRVacancy setWorkPostalCode() setWorkPostalCode(string $value)
 * @method string getWorkPostalCode getWorkPostalCode()
 * @method AbstractCRVacancy setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRVacancy setJobTitle() setJobTitle(string $value)
 * @method string getJobTitle getJobTitle()
 * @method AbstractCRVacancy setStartDate() setStartDate(string $value)
 * @method string getStartDate getStartDate()
 * @method AbstractCRVacancy setEndDate() setEndDate(string $value)
 * @method string getEndDate getEndDate()
 * @method AbstractCRVacancy setNumberOfVacancies() setNumberOfVacancies(integer $value)
 * @method integer getNumberOfVacancies getNumberOfVacancies()
 * @method AbstractCRVacancy setMatchCountMO() setMatchCountMO(integer $value)
 * @method integer getMatchCountMO getMatchCountMO()
 * @method AbstractCRVacancy setActivePublicationsCount() setActivePublicationsCount(integer $value)
 * @method integer getActivePublicationsCount getActivePublicationsCount()
 * @method AbstractCRVacancy setMinSalary() setMinSalary(float $value)
 * @method float getMinSalary getMinSalary()
 * @method AbstractCRVacancy setMaxSalary() setMaxSalary(float $value)
 * @method float getMaxSalary getMaxSalary()
 * @method AbstractCRVacancy setVacancyNo() setVacancyNo(string $value)
 * @method string getVacancyNo getVacancyNo()
 * @method AbstractCRVacancy setHoursPerWeek() setHoursPerWeek(float $value)
 * @method float getHoursPerWeek getHoursPerWeek()
 * @method AbstractCRVacancy setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRVacancy setStatusChangedDate() setStatusChangedDate(string $value)
 * @method string getStatusChangedDate getStatusChangedDate()
 * @method AbstractCRVacancy setIsVirtual() setIsVirtual(integer $value)
 * @method integer getIsVirtual getIsVirtual()
 * @method AbstractCRVacancy setCopyID() setCopyID(integer $value)
 * @method integer getCopyID getCopyID()
 * @method AbstractCRVacancy setFte() setFte(float $value)
 * @method float getFte getFte()
 * @method AbstractCRVacancy setIsHidden() setIsHidden(integer $value)
 * @method integer getIsHidden getIsHidden()
 * @method AbstractCRVacancy setIsOpenApplication() setIsOpenApplication(integer $value)
 * @method integer getIsOpenApplication getIsOpenApplication()
 * @method AbstractCRVacancy setRotationOff() setRotationOff(float $value)
 * @method float getRotationOff getRotationOff()
 * @method AbstractCRVacancy setRotationOn() setRotationOn(float $value)
 * @method float getRotationOn getRotationOn()
 * @method AbstractCRVacancy setFriWorkMinutes() setFriWorkMinutes(float $value)
 * @method float getFriWorkMinutes getFriWorkMinutes()
 * @method AbstractCRVacancy setMonWorkMinutes() setMonWorkMinutes(float $value)
 * @method float getMonWorkMinutes getMonWorkMinutes()
 * @method AbstractCRVacancy setSatWorkMinutes() setSatWorkMinutes(float $value)
 * @method float getSatWorkMinutes getSatWorkMinutes()
 * @method AbstractCRVacancy setSunWorkMinutes() setSunWorkMinutes(float $value)
 * @method float getSunWorkMinutes getSunWorkMinutes()
 * @method AbstractCRVacancy setThuWorkMinutes() setThuWorkMinutes(float $value)
 * @method float getThuWorkMinutes getThuWorkMinutes()
 * @method AbstractCRVacancy setTueWorkMinutes() setTueWorkMinutes(float $value)
 * @method float getTueWorkMinutes getTueWorkMinutes()
 * @method AbstractCRVacancy setWedWorkMinutes() setWedWorkMinutes(float $value)
 * @method float getWedWorkMinutes getWedWorkMinutes()
 * @method AbstractCRVacancy setSuccessRatePercentage() setSuccessRatePercentage(float $value)
 * @method float getSuccessRatePercentage getSuccessRatePercentage()
 * @method AbstractCRVacancy setEstimatedAmount() setEstimatedAmount(float $value)
 * @method float getEstimatedAmount getEstimatedAmount()
 * @method AbstractCRVacancy setRealizedAmount() setRealizedAmount(float $value)
 * @method float getRealizedAmount getRealizedAmount()
 * @method AbstractCRVacancy setEstimatedDays() setEstimatedDays(float $value)
 * @method float getEstimatedDays getEstimatedDays()
 * @method AbstractCRVacancy setRealizedDays() setRealizedDays(float $value)
 * @method float getRealizedDays getRealizedDays()
 * @method AbstractCRVacancy setArboRequirements() setArboRequirements(string $value)
 * @method string getArboRequirements getArboRequirements()
 * @method AbstractCRVacancy setInvoiceAttention() setInvoiceAttention(string $value)
 * @method string getInvoiceAttention getInvoiceAttention()
 * @method AbstractCRVacancy setInvoiceCity() setInvoiceCity(string $value)
 * @method string getInvoiceCity getInvoiceCity()
 * @method AbstractCRVacancy setInvoiceNumber() setInvoiceNumber(string $value)
 * @method string getInvoiceNumber getInvoiceNumber()
 * @method AbstractCRVacancy setInvoicePostalCode() setInvoicePostalCode(string $value)
 * @method string getInvoicePostalCode getInvoicePostalCode()
 * @method AbstractCRVacancy setInvoiceStreet() setInvoiceStreet(string $value)
 * @method string getInvoiceStreet getInvoiceStreet()
 * @method AbstractCRVacancy setVacancyInformation() setVacancyInformation(string $value)
 * @method string getVacancyInformation getVacancyInformation()
 * @method AbstractCRVacancy setWorkCity() setWorkCity(string $value)
 * @method string getWorkCity getWorkCity()
 * @method AbstractCRVacancy setAdditionalInformation() setAdditionalInformation(string $value)
 * @method string getAdditionalInformation getAdditionalInformation()
 * @method AbstractCRVacancy setApplicationContactInformation() setApplicationContactInformation(string $value)
 * @method string getApplicationContactInformation getApplicationContactInformation()
 * @method AbstractCRVacancy setCompanyInformation() setCompanyInformation(string $value)
 * @method string getCompanyInformation getCompanyInformation()
 * @method AbstractCRVacancy setContactInformation() setContactInformation(string $value)
 * @method string getContactInformation getContactInformation()
 * @method AbstractCRVacancy setContractPeriod() setContractPeriod(string $value)
 * @method string getContractPeriod getContractPeriod()
 * @method AbstractCRVacancy setHasBonus() setHasBonus(integer $value)
 * @method integer getHasBonus getHasBonus()
 * @method AbstractCRVacancy setHasCompanyCar() setHasCompanyCar(integer $value)
 * @method integer getHasCompanyCar getHasCompanyCar()
 * @method AbstractCRVacancy setInvoiceFullAddress() setInvoiceFullAddress(string $value)
 * @method string getInvoiceFullAddress getInvoiceFullAddress()
 * @method AbstractCRVacancy setInvoiceNumberSuffix() setInvoiceNumberSuffix(string $value)
 * @method string getInvoiceNumberSuffix getInvoiceNumberSuffix()
 * @method AbstractCRVacancy setNotes() setNotes(string $value)
 * @method string getNotes getNotes()
 * @method AbstractCRVacancy setOfferInformation() setOfferInformation(string $value)
 * @method string getOfferInformation getOfferInformation()
 * @method AbstractCRVacancy setReactionEndDate() setReactionEndDate(string $value)
 * @method string getReactionEndDate getReactionEndDate()
 * @method AbstractCRVacancy setRequirements() setRequirements(string $value)
 * @method string getRequirements getRequirements()
 * @method AbstractCRVacancy setSalaryScale() setSalaryScale(string $value)
 * @method string getSalaryScale getSalaryScale()
 * @method AbstractCRVacancy setTrainingInformation() setTrainingInformation(string $value)
 * @method string getTrainingInformation getTrainingInformation()
 * @method AbstractCRVacancy setSourceInfo() setSourceInfo(string $value)
 * @method string getSourceInfo getSourceInfo()
 * @method AbstractCRVacancy setCoordX() setCoordX(integer $value)
 * @method integer getCoordX getCoordX()
 * @method AbstractCRVacancy setCoordY() setCoordY(integer $value)
 * @method integer getCoordY getCoordY()
 * @method AbstractCRVacancy setIsAnonymous() setIsAnonymous(integer $value)
 * @method integer getIsAnonymous getIsAnonymous()
 * @method AbstractCRVacancy setFeePercentage() setFeePercentage(float $value)
 * @method float getFeePercentage getFeePercentage()
 * @method AbstractCRVacancy setInvoiceDiscountPercentage() setInvoiceDiscountPercentage(float $value)
 * @method float getInvoiceDiscountPercentage getInvoiceDiscountPercentage()
 * @method AbstractCRVacancy setWorkLocation() setWorkLocation(string $value)
 * @method string getWorkLocation getWorkLocation()
 * @method AbstractCRVacancy setTitleInformation() setTitleInformation(string $value)
 * @method string getTitleInformation getTitleInformation()
 * @method AbstractCRVacancy setIntroInformation() setIntroInformation(string $value)
 * @method string getIntroInformation getIntroInformation()
 * @method AbstractCRVacancy setInvoiceSubject() setInvoiceSubject(string $value)
 * @method string getInvoiceSubject getInvoiceSubject()
 * @method AbstractCRVacancy setCustomerReference() setCustomerReference(string $value)
 * @method string getCustomerReference getCustomerReference()
 * @method AbstractCRVacancy setNumberOfInvoicePrints() setNumberOfInvoicePrints(integer $value)
 * @method integer getNumberOfInvoicePrints getNumberOfInvoicePrints()
 * @method AbstractCRVacancy setInvoiceEmailAddress() setInvoiceEmailAddress(string $value)
 * @method string getInvoiceEmailAddress getInvoiceEmailAddress()
 * @method AbstractCRVacancy setIsTemplate() setIsTemplate(integer $value)
 * @method integer getIsTemplate getIsTemplate()
 * @method AbstractCRVacancy setIsConfidential() setIsConfidential(integer $value)
 * @method integer getIsConfidential getIsConfidential()
 * @method AbstractCRVacancy setUserBonuses() setUserBonuses(NSArray|array $value)
 * @method NSArray|array getUserBonuses getUserBonuses()
 * @method AbstractCRVacancy setInvoiceCompanyName() setInvoiceCompanyName(string $value)
 * @method string getInvoiceCompanyName getInvoiceCompanyName()
 * @method AbstractCRVacancy setSalesFactor() setSalesFactor(float $value)
 * @method float getSalesFactor getSalesFactor()
 * @method AbstractCRVacancy setCreateCollectiveInvoices() setCreateCollectiveInvoices(integer $value)
 * @method integer getCreateCollectiveInvoices getCreateCollectiveInvoices()
 * @method AbstractCRVacancy setAdditionalInfo() setAdditionalInfo(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfo getAdditionalInfo()
 * @method AbstractCRVacancy setAdditionalInfoPartial() setAdditionalInfoPartial(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfoPartial getAdditionalInfoPartial()
 * @method AbstractCRVacancy setCommitmentLevelNode() setCommitmentLevelNode(integer $value)
 * @method integer getCommitmentLevelNode getCommitmentLevelNode()
 * @method AbstractCRVacancy setSignDate() setSignDate(string $value)
 * @method string getSignDate getSignDate()
 * @method AbstractCRVacancy setDeadline() setDeadline(string $value)
 * @method string getDeadline getDeadline()
 * @method AbstractCRVacancy setLanguageNotes() setLanguageNotes(string $value)
 * @method string getLanguageNotes getLanguageNotes()
 * @method AbstractCRVacancy setSkillNotes() setSkillNotes(string $value)
 * @method string getSkillNotes getSkillNotes()
 * @method AbstractCRVacancy setExternalIdentifier() setExternalIdentifier(string $value)
 * @method string getExternalIdentifier getExternalIdentifier()
 * @method AbstractCRVacancy setWorkStreet() setWorkStreet(string $value)
 * @method string getWorkStreet getWorkStreet()
 * @method AbstractCRVacancy setWorkNumber() setWorkNumber(string $value)
 * @method string getWorkNumber getWorkNumber()
 * @method AbstractCRVacancy setWorkNumberSuffix() setWorkNumberSuffix(string $value)
 * @method string getWorkNumberSuffix getWorkNumberSuffix()
 * @method AbstractCRVacancy setWorkFullAddress() setWorkFullAddress(string $value)
 * @method string getWorkFullAddress getWorkFullAddress()
 * @method AbstractCRVacancy setSharingAgenciesIDs() setSharingAgenciesIDs(NSArray|array $value)
 * @method NSArray|array getSharingAgenciesIDs getSharingAgenciesIDs()
 * @method AbstractCRVacancy setIsSalaryPublic() setIsSalaryPublic(integer $value)
 * @method integer getIsSalaryPublic getIsSalaryPublic()
 * @method AbstractCRVacancy setTrackingModificationDate() setTrackingModificationDate(string $value)
 * @method string getTrackingModificationDate getTrackingModificationDate()
 * @method AbstractCRVacancy setConfidentialIamRole() setConfidentialIamRole(string $value)
 * @method string getConfidentialIamRole getConfidentialIamRole()
 * @method AbstractCRVacancy setMatchCriteriaID() setMatchCriteriaID(integer $value)
 * @method integer getMatchCriteriaID getMatchCriteriaID()
 * @method AbstractCRVacancy setMatches() setMatches(array|Collection $values)
 * @method Collection|CRMatch getMatches getMatches()
 * @method AbstractCRVacancy setToUser() setToUser(array|CRUser $value)
 * @method CRUser getToUser getToUser($index = null)
 * @method AbstractCRVacancy setCreatedBy() setCreatedBy(array|CRUser $value)
 * @method CRUser getCreatedBy getCreatedBy($index = null)
 * @method AbstractCRVacancy setModifiedBy() setModifiedBy(array|CRUser $value)
 * @method CRUser getModifiedBy getModifiedBy($index = null)
 * @method AbstractCRVacancy setOwner() setOwner(array|CRUser $value)
 * @method CRUser getOwner getOwner($index = null)
 * @method AbstractCRVacancy setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 * @method AbstractCRVacancy setPublications() setPublications(array|Collection $values)
 * @method Collection|CRPublication getPublications getPublications()
 * @method AbstractCRVacancy setToStatusNode() setToStatusNode(array|CRDataNode $value)
 * @method CRDataNode getToStatusNode getToStatusNode($index = null)
 * @method AbstractCRVacancy setToSalaryPeriodNode() setToSalaryPeriodNode(array|CRDataNode $value)
 * @method CRDataNode getToSalaryPeriodNode getToSalaryPeriodNode($index = null)
 * @method AbstractCRVacancy setToExperienceLevelNode() setToExperienceLevelNode(array|CRDataNode $value)
 * @method CRDataNode getToExperienceLevelNode getToExperienceLevelNode($index = null)
 * @method AbstractCRVacancy setToProvince1Node() setToProvince1Node(array|CRDataNode $value)
 * @method CRDataNode getToProvince1Node getToProvince1Node($index = null)
 * @method AbstractCRVacancy setToProductNode() setToProductNode(array|CRDataNode $value)
 * @method CRDataNode getToProductNode getToProductNode($index = null)
 * @method AbstractCRVacancy setToProductTypeNode() setToProductTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToProductTypeNode getToProductTypeNode($index = null)
 * @method AbstractCRVacancy setEducations() setEducations(array|Collection $values)
 * @method Collection|CRVacancyEducation getEducations getEducations()
 * @method AbstractCRVacancy setToVacancyHolder() setToVacancyHolder(array|CRUser $value)
 * @method CRUser getToVacancyHolder getToVacancyHolder($index = null)
 * @method AbstractCRVacancy setToFunctionLevel1() setToFunctionLevel1(array|CRDataNode $value)
 * @method CRDataNode getToFunctionLevel1 getToFunctionLevel1($index = null)
 * @method AbstractCRVacancy setToFunctionLevel2() setToFunctionLevel2(array|CRDataNode $value)
 * @method CRDataNode getToFunctionLevel2 getToFunctionLevel2($index = null)
 * @method AbstractCRVacancy setToContractTypeNode() setToContractTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToContractTypeNode getToContractTypeNode($index = null)
 * @method AbstractCRVacancy setToDriverLicenceNode() setToDriverLicenceNode(array|CRDataNode $value)
 * @method CRDataNode getToDriverLicenceNode getToDriverLicenceNode($index = null)
 * @method AbstractCRVacancy setToSignAuthority() setToSignAuthority(array|CRUser $value)
 * @method CRUser getToSignAuthority getToSignAuthority($index = null)
 * @method AbstractCRVacancy setTrainings() setTrainings(array|Collection $values)
 * @method Collection|CRVacancyTraining getTrainings getTrainings()
 * @method AbstractCRVacancy setToFunctionTypeNode() setToFunctionTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToFunctionTypeNode getToFunctionTypeNode($index = null)
 * @method AbstractCRVacancy setToCountry1Node() setToCountry1Node(array|CRDataNode $value)
 * @method CRDataNode getToCountry1Node getToCountry1Node($index = null)
 * @method AbstractCRVacancy setToSalaryCurrencyNode() setToSalaryCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToSalaryCurrencyNode getToSalaryCurrencyNode($index = null)
 * @method AbstractCRVacancy setToWorkUnitNode() setToWorkUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToWorkUnitNode getToWorkUnitNode($index = null)
 * @method AbstractCRVacancy setToRotationOnUnitNode() setToRotationOnUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToRotationOnUnitNode getToRotationOnUnitNode($index = null)
 * @method AbstractCRVacancy setToRotationOffUnitNode() setToRotationOffUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToRotationOffUnitNode getToRotationOffUnitNode($index = null)
 * @method AbstractCRVacancy setToCompetitor() setToCompetitor(array|CRCompany $value)
 * @method CRCompany getToCompetitor getToCompetitor($index = null)
 * @method AbstractCRVacancy setToResultNode() setToResultNode(array|CRDataNode $value)
 * @method CRDataNode getToResultNode getToResultNode($index = null)
 * @method AbstractCRVacancy setToEstimatedAmountCurrencyNode() setToEstimatedAmountCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToEstimatedAmountCurrencyNode getToEstimatedAmountCurrencyNode($index = null)
 * @method AbstractCRVacancy setToRealizedAmountCurrencyNode() setToRealizedAmountCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToRealizedAmountCurrencyNode getToRealizedAmountCurrencyNode($index = null)
 * @method AbstractCRVacancy setToInvoiceCountryNode() setToInvoiceCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToInvoiceCountryNode getToInvoiceCountryNode($index = null)
 * @method AbstractCRVacancy setToInvoiceProvinceNode() setToInvoiceProvinceNode(array|CRDataNode $value)
 * @method CRDataNode getToInvoiceProvinceNode getToInvoiceProvinceNode($index = null)
 * @method AbstractCRVacancy setToSalaryScaleCurrencyNode() setToSalaryScaleCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToSalaryScaleCurrencyNode getToSalaryScaleCurrencyNode($index = null)
 * @method AbstractCRVacancy setToSalaryScaleNode() setToSalaryScaleNode(array|CRDataNode $value)
 * @method CRDataNode getToSalaryScaleNode getToSalaryScaleNode($index = null)
 * @method AbstractCRVacancy setToWorkCountryNode() setToWorkCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToWorkCountryNode getToWorkCountryNode($index = null)
 * @method AbstractCRVacancy setToWorkLevelNode() setToWorkLevelNode(array|CRDataNode $value)
 * @method CRDataNode getToWorkLevelNode getToWorkLevelNode($index = null)
 * @method AbstractCRVacancy setToCompany() setToCompany(array|CRCompany $value)
 * @method CRCompany getToCompany getToCompany($index = null)
 * @method AbstractCRVacancy setToSourceNode() setToSourceNode(array|CRDataNode $value)
 * @method CRDataNode getToSourceNode getToSourceNode($index = null)
 * @method AbstractCRVacancy setJobs() setJobs(array|Collection $values)
 * @method Collection|CRJob getJobs getJobs()
 * @method AbstractCRVacancy setToLevel3User() setToLevel3User(array|CRUser $value)
 * @method CRUser getToLevel3User getToLevel3User($index = null)
 * @method AbstractCRVacancy setToLevel3Company() setToLevel3Company(array|CRCompany $value)
 * @method CRCompany getToLevel3Company getToLevel3Company($index = null)
 * @method AbstractCRVacancy setToLevel2Company() setToLevel2Company(array|CRCompany $value)
 * @method CRCompany getToLevel2Company getToLevel2Company($index = null)
 * @method AbstractCRVacancy setToLevel2User() setToLevel2User(array|CRUser $value)
 * @method CRUser getToLevel2User getToLevel2User($index = null)
 * @method AbstractCRVacancy setBroughtInBy() setBroughtInBy(array|CRUser $value)
 * @method CRUser getBroughtInBy getBroughtInBy($index = null)
 * @method AbstractCRVacancy setAttributeChanges() setAttributeChanges(array|Collection $values)
 * @method Collection|CRAttributeChange getAttributeChanges getAttributeChanges()
 * @method AbstractCRVacancy setToTaxRateNode() setToTaxRateNode(array|CRDataNode $value)
 * @method CRDataNode getToTaxRateNode getToTaxRateNode($index = null)
 * @method AbstractCRVacancy setToPaymentPeriodNode() setToPaymentPeriodNode(array|CRDataNode $value)
 * @method CRDataNode getToPaymentPeriodNode getToPaymentPeriodNode($index = null)
 * @method AbstractCRVacancy setInvoiceLines() setInvoiceLines(array|Collection $values)
 * @method Collection|CRInvoiceLine getInvoiceLines getInvoiceLines()
 * @method AbstractCRVacancy setToCountry2Node() setToCountry2Node(array|CRDataNode $value)
 * @method CRDataNode getToCountry2Node getToCountry2Node($index = null)
 * @method AbstractCRVacancy setToCountry3Node() setToCountry3Node(array|CRDataNode $value)
 * @method CRDataNode getToCountry3Node getToCountry3Node($index = null)
 * @method AbstractCRVacancy setToProvince2Node() setToProvince2Node(array|CRDataNode $value)
 * @method CRDataNode getToProvince2Node getToProvince2Node($index = null)
 * @method AbstractCRVacancy setToProvince3Node() setToProvince3Node(array|CRDataNode $value)
 * @method CRDataNode getToProvince3Node getToProvince3Node($index = null)
 * @method AbstractCRVacancy setToInvoiceUser() setToInvoiceUser(array|CRUser $value)
 * @method CRUser getToInvoiceUser getToInvoiceUser($index = null)
 * @method AbstractCRVacancy setToInvoiceCompany() setToInvoiceCompany(array|CRCompany $value)
 * @method CRCompany getToInvoiceCompany getToInvoiceCompany($index = null)
 * @method AbstractCRVacancy setToVacancyTypeNode() setToVacancyTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToVacancyTypeNode getToVacancyTypeNode($index = null)
 * @method AbstractCRVacancy setToInvoiceHandlingNode() setToInvoiceHandlingNode(array|CRDataNode $value)
 * @method CRDataNode getToInvoiceHandlingNode getToInvoiceHandlingNode($index = null)
 * @method AbstractCRVacancy setToInvoiceLineLabelNode() setToInvoiceLineLabelNode(array|CRDataNode $value)
 * @method CRDataNode getToInvoiceLineLabelNode getToInvoiceLineLabelNode($index = null)
 * @method AbstractCRVacancy setToPaymentPeriodStartDateNode() setToPaymentPeriodStartDateNode(array|CRDataNode $value)
 * @method CRDataNode getToPaymentPeriodStartDateNode getToPaymentPeriodStartDateNode($index = null)
 * @method AbstractCRVacancy setToCreditMethodNode() setToCreditMethodNode(array|CRDataNode $value)
 * @method CRDataNode getToCreditMethodNode getToCreditMethodNode($index = null)
 * @method AbstractCRVacancy setGroupNodes() setGroupNodes(array|Collection $values)
 * @method Collection|CRDataNode getGroupNodes getGroupNodes()
 * @method AbstractCRVacancy setToCategoryNode() setToCategoryNode(array|CRDataNode $value)
 * @method CRDataNode getToCategoryNode getToCategoryNode($index = null)
 * @method AbstractCRVacancy setVacancyUsers() setVacancyUsers(array|Collection $values)
 * @method Collection|CRVacancyUser getVacancyUsers getVacancyUsers()
 * @method AbstractCRVacancy setToProjectNode() setToProjectNode(array|CRDataNode $value)
 * @method CRDataNode getToProjectNode getToProjectNode($index = null)
 * @method AbstractCRVacancy setToConfidentialUserRole() setToConfidentialUserRole(array|CRUserRole $value)
 * @method CRUserRole getToConfidentialUserRole getToConfidentialUserRole($index = null)
 * @method AbstractCRVacancy setAgency() setAgency(array|CRAgency $value)
 * @method CRAgency getAgency getAgency($index = null)
 * @method AbstractCRVacancy setToCommitmentLevelNode() setToCommitmentLevelNode(array|CRDataNode $value)
 * @method CRDataNode getToCommitmentLevelNode getToCommitmentLevelNode($index = null)
 * @method AbstractCRVacancy setToBrancheLevel1() setToBrancheLevel1(array|CRDataNode $value)
 * @method CRDataNode getToBrancheLevel1 getToBrancheLevel1($index = null)
 * @method AbstractCRVacancy setToBrancheLevel2() setToBrancheLevel2(array|CRDataNode $value)
 * @method CRDataNode getToBrancheLevel2 getToBrancheLevel2($index = null)
 * @method AbstractCRVacancy setToLead() setToLead(array|CRLead $value)
 * @method CRLead getToLead getToLead($index = null)
 * @method AbstractCRVacancy setToOpportunity() setToOpportunity(array|CROpportunity $value)
 * @method CROpportunity getToOpportunity getToOpportunity($index = null)
 * @method AbstractCRVacancy setSkills() setSkills(array|Collection $values)
 * @method Collection|CRVacancySkill getSkills getSkills()
 * @method AbstractCRVacancy setLanguages() setLanguages(array|Collection $values)
 * @method Collection|CRVacancyLanguage getLanguages getLanguages()
 * @method AbstractCRVacancy setVacancyCompanyUsers() setVacancyCompanyUsers(array|Collection $values)
 * @method Collection|CRVacancyCompanyUserView getVacancyCompanyUsers getVacancyCompanyUsers()
 * @method AbstractCRVacancy setToWorkplaceTypeNode() setToWorkplaceTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToWorkplaceTypeNode getToWorkplaceTypeNode($index = null)
 * @method AbstractCRVacancy setToMatchCriteria() setToMatchCriteria(array|CRMatchCriteria $value)
 * @method CRMatchCriteria getToMatchCriteria getToMatchCriteria($index = null)
 */
abstract class AbstractCRVacancy extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRVacancy';

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $maxDistance = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $vacancyID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 30
     */
    public $workPostalCode = null;

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
     * @width 200
     */
    public $jobTitle = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $startDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $endDate = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $numberOfVacancies = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $matchCountMO = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $activePublicationsCount = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $minSalary = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $maxSalary = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 45
     */
    public $vacancyNo = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $hoursPerWeek = null;

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
    public $statusChangedDate = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isVirtual = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $copyID = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $fte = null;

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
    public $isOpenApplication = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $rotationOff = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $rotationOn = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $friWorkMinutes = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $monWorkMinutes = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $satWorkMinutes = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $sunWorkMinutes = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $thuWorkMinutes = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $tueWorkMinutes = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $wedWorkMinutes = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $successRatePercentage = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $estimatedAmount = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $realizedAmount = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $estimatedDays = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $realizedDays = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $arboRequirements = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $invoiceAttention = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $invoiceCity = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $invoiceNumber = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 30
     */
    public $invoicePostalCode = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $invoiceStreet = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $vacancyInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $workCity = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $additionalInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $applicationContactInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $companyInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $contactInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 120
     */
    public $contractPeriod = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $hasBonus = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $hasCompanyCar = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $invoiceFullAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $invoiceNumberSuffix = null;

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
     * @width 1000000
     */
    public $offerInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $reactionEndDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $requirements = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 80
     */
    public $salaryScale = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $trainingInformation = null;

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
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $coordX = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $coordY = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isAnonymous = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $feePercentage = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $invoiceDiscountPercentage = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 100
     */
    public $workLocation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $titleInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $introInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $invoiceSubject = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $customerReference = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $numberOfInvoicePrints = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $invoiceEmailAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isTemplate = null;

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
     * @width 255
     */
    public $invoiceCompanyName = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $salesFactor = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $createCollectiveInvoices = null;

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $commitmentLevelNode = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $signDate = null;

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
     * @width 1000000
     */
    public $languageNotes = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $skillNotes = null;

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
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $workStreet = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $workNumber = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $workNumberSuffix = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $workFullAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var NSArray|array
     * @value_class NSArray
     * @allows_null 1
     */
    public $sharingAgenciesIDs = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isSalaryPublic = null;

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
     * @width 128
     */
    public $confidentialIamRole = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $matchCriteriaID = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRMatch")
     * @mandatory 0
     * @destination_entity CRMatch
     * @to_many 1
     * @name matches
     */
    public $matches = null;

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
     * @var Collection
     * @OneToMany (targetEntity="CRPublication")
     * @mandatory 0
     * @destination_entity CRPublication
     * @to_many 1
     * @name publications
     */
    public $publications = null;

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
     * @nodeType Vacature-status
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
     * @name toSalaryPeriodNode
     * @default 1
     * @nodeType Salarisperiode
     */
    public $toSalaryPeriodNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toExperienceLevelNode
     * @default 1
     * @nodeType Ervaring
     */
    public $toExperienceLevelNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProvince1Node
     */
    public $toProvince1Node = null;

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
     * @nodeType Productgroep
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
     * @name toProductTypeNode
     * @default 1
     * @nodeType Product
     */
    public $toProductTypeNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRVacancyEducation")
     * @mandatory 0
     * @destination_entity CRVacancyEducation
     * @to_many 1
     * @name educations
     */
    public $educations = null;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toVacancyHolder
     */
    public $toVacancyHolder = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunctionLevel1
     * @default 1
     * @nodeType Functie0
     */
    public $toFunctionLevel1 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunctionLevel2
     * @default 1
     * @nodeType Functie1
     */
    public $toFunctionLevel2 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toContractTypeNode
     * @default 1
     * @nodeType Dienstverband
     */
    public $toContractTypeNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toDriverLicenceNode
     * @default 1
     * @nodeType Rijbewijs
     */
    public $toDriverLicenceNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toSignAuthority
     */
    public $toSignAuthority = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRVacancyTraining")
     * @mandatory 0
     * @destination_entity CRVacancyTraining
     * @to_many 1
     * @name trainings
     */
    public $trainings = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunctionTypeNode
     */
    public $toFunctionTypeNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCountry1Node
     * @default 1
     * @nodeType Land
     */
    public $toCountry1Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSalaryCurrencyNode
     * @default 1
     * @nodeType Valuta
     */
    public $toSalaryCurrencyNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toWorkUnitNode
     * @default 1
     * @nodeType Werktijden-eenheid
     */
    public $toWorkUnitNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toRotationOnUnitNode
     * @default 1
     * @nodeType Werkschema-eenheid
     */
    public $toRotationOnUnitNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toRotationOffUnitNode
     * @default 1
     * @nodeType Werkschema-eenheid
     */
    public $toRotationOffUnitNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toCompetitor
     */
    public $toCompetitor = null;

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
     * @nodeType Project-resultaat
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
     * @name toEstimatedAmountCurrencyNode
     * @default 1
     * @nodeType Valuta
     */
    public $toEstimatedAmountCurrencyNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toRealizedAmountCurrencyNode
     * @default 1
     * @nodeType Valuta
     */
    public $toRealizedAmountCurrencyNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toInvoiceCountryNode
     * @default 1
     * @nodeType Land
     */
    public $toInvoiceCountryNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toInvoiceProvinceNode
     * @default 1
     * @nodeType Regio
     */
    public $toInvoiceProvinceNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSalaryScaleCurrencyNode
     * @default 1
     * @nodeType Valuta
     */
    public $toSalaryScaleCurrencyNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSalaryScaleNode
     * @default 1
     * @nodeType Salarisschaal
     */
    public $toSalaryScaleNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toWorkCountryNode
     * @default 1
     * @nodeType Land
     */
    public $toWorkCountryNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toWorkLevelNode
     * @default 1
     * @nodeType Functieniveau
     */
    public $toWorkLevelNode = null;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSourceNode
     * @default 1
     * @nodeType Bron-Vacature
     */
    public $toSourceNode = null;

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
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toLevel3User
     */
    public $toLevel3User = null;

    /**
     * @cx_field true
     * @access private
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toLevel3Company
     */
    public $toLevel3Company = null;

    /**
     * @cx_field true
     * @access private
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toLevel2Company
     */
    public $toLevel2Company = null;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toLevel2User
     */
    public $toLevel2User = null;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name broughtInBy
     */
    public $broughtInBy = null;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toTaxRateNode
     * @default 1
     * @nodeType BTW-tarief
     */
    public $toTaxRateNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPaymentPeriodNode
     * @default 1
     * @nodeType Betalingstermijn
     */
    public $toPaymentPeriodNode = null;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCountry2Node
     * @default 0
     * @nodeType Land
     */
    public $toCountry2Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCountry3Node
     * @default 0
     * @nodeType Land
     */
    public $toCountry3Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProvince2Node
     */
    public $toProvince2Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProvince3Node
     */
    public $toProvince3Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toInvoiceUser
     */
    public $toInvoiceUser = null;

    /**
     * @cx_field true
     * @access private
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toInvoiceCompany
     */
    public $toInvoiceCompany = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toVacancyTypeNode
     * @default 1
     * @nodeType Vacature-type
     */
    public $toVacancyTypeNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toInvoiceHandlingNode
     * @default 1
     * @nodeType Factuurafhandeling
     */
    public $toInvoiceHandlingNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toInvoiceLineLabelNode
     * @default 1
     * @nodeType Factuurregel-label
     */
    public $toInvoiceLineLabelNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPaymentPeriodStartDateNode
     * @default 1
     * @nodeType Betalingstermijn-startdatum
     */
    public $toPaymentPeriodStartDateNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCreditMethodNode
     * @default 1
     * @nodeType Crediteringsmethode
     */
    public $toCreditMethodNode = null;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCategoryNode
     * @default 1
     * @nodeType Vacature-categorie
     */
    public $toCategoryNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRVacancyUser")
     * @mandatory 0
     * @destination_entity CRVacancyUser
     * @to_many 1
     * @name vacancyUsers
     */
    public $vacancyUsers = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProjectNode
     */
    public $toProjectNode = null;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCommitmentLevelNode
     * @default 1
     * @nodeType Commitment-level
     */
    public $toCommitmentLevelNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toBrancheLevel1
     */
    public $toBrancheLevel1 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toBrancheLevel2
     */
    public $toBrancheLevel2 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRLead
     * @OneToOne (targetEntity="CRLead")
     * @mandatory 0
     * @destination_entity CRLead
     * @to_many 0
     * @name toLead
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
     */
    public $toOpportunity = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRVacancySkill")
     * @mandatory 0
     * @destination_entity CRVacancySkill
     * @to_many 1
     * @name skills
     */
    public $skills = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRVacancyLanguage")
     * @mandatory 0
     * @destination_entity CRVacancyLanguage
     * @to_many 1
     * @name languages
     */
    public $languages = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRVacancyCompanyUserView")
     * @mandatory 0
     * @destination_entity CRVacancyCompanyUserView
     * @to_many 1
     * @name vacancyCompanyUsers
     */
    public $vacancyCompanyUsers = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toWorkplaceTypeNode
     */
    public $toWorkplaceTypeNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRMatchCriteria
     * @OneToOne (targetEntity="CRMatchCriteria")
     * @mandatory 0
     * @destination_entity CRMatchCriteria
     * @to_many 0
     * @name toMatchCriteria
     */
    public $toMatchCriteria = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("vacancyID");
        $entityConfiguration->setName("CRVacancy");
    }
}
