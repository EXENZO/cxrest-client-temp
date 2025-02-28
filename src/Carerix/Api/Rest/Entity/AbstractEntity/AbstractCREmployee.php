<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSArray;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CRAttributeChange;
use Carerix\Api\Rest\Entity\CRCompany;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmployeeDocument;
use Carerix\Api\Rest\Entity\CREmployeeEducation;
use Carerix\Api\Rest\Entity\CREmployeeLanguage;
use Carerix\Api\Rest\Entity\CREmployeeSkill;
use Carerix\Api\Rest\Entity\CREmployeeTraining;
use Carerix\Api\Rest\Entity\CRFinance;
use Carerix\Api\Rest\Entity\CRJob;
use Carerix\Api\Rest\Entity\CRMatch;
use Carerix\Api\Rest\Entity\CRMatchCriteria;
use Carerix\Api\Rest\Entity\CRMedium;
use Carerix\Api\Rest\Entity\CRMonthHourView;
use Carerix\Api\Rest\Entity\CRTalentPoolMatch;
use Carerix\Api\Rest\Entity\CRToDo;
use Carerix\Api\Rest\Entity\CRToDoUser;
use Carerix\Api\Rest\Entity\CRUser;
use Carerix\Api\Rest\Entity\CRUserRole;
use Carerix\Api\Rest\Entity\CRWeekHour;
use Carerix\Api\Rest\Entity\CRWeekHourView;
use Carerix\Api\Rest\Entity\CRWorkHistory;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:57:53 +0000
 * @method AbstractCREmployee setMaxDistance() setMaxDistance(integer $value)
 * @method integer getMaxDistance getMaxDistance()
 * @method AbstractCREmployee setMinSalary() setMinSalary(float $value)
 * @method float getMinSalary getMinSalary()
 * @method AbstractCREmployee setEmployeeID() setEmployeeID(integer $value)
 * @method integer getEmployeeID getEmployeeID()
 * @method AbstractCREmployee setAvailableFromDate() setAvailableFromDate(string $value)
 * @method string getAvailableFromDate getAvailableFromDate()
 * @method AbstractCREmployee setMatchCountMO() setMatchCountMO(integer $value)
 * @method integer getMatchCountMO getMatchCountMO()
 * @method AbstractCREmployee setFriWorkMinutes() setFriWorkMinutes(float $value)
 * @method float getFriWorkMinutes getFriWorkMinutes()
 * @method AbstractCREmployee setMonWorkMinutes() setMonWorkMinutes(float $value)
 * @method float getMonWorkMinutes getMonWorkMinutes()
 * @method AbstractCREmployee setSatWorkMinutes() setSatWorkMinutes(float $value)
 * @method float getSatWorkMinutes getSatWorkMinutes()
 * @method AbstractCREmployee setSunWorkMinutes() setSunWorkMinutes(float $value)
 * @method float getSunWorkMinutes getSunWorkMinutes()
 * @method AbstractCREmployee setThuWorkMinutes() setThuWorkMinutes(float $value)
 * @method float getThuWorkMinutes getThuWorkMinutes()
 * @method AbstractCREmployee setTueWorkMinutes() setTueWorkMinutes(float $value)
 * @method float getTueWorkMinutes getTueWorkMinutes()
 * @method AbstractCREmployee setWedWorkMinutes() setWedWorkMinutes(float $value)
 * @method float getWedWorkMinutes getWedWorkMinutes()
 * @method AbstractCREmployee setDaysPerWeek() setDaysPerWeek(integer $value)
 * @method integer getDaysPerWeek getDaysPerWeek()
 * @method AbstractCREmployee setAvailableDate() setAvailableDate(string $value)
 * @method string getAvailableDate getAvailableDate()
 * @method AbstractCREmployee setDocumentBits() setDocumentBits(string $value)
 * @method string getDocumentBits getDocumentBits()
 * @method AbstractCREmployee setStartDate() setStartDate(string $value)
 * @method string getStartDate getStartDate()
 * @method AbstractCREmployee setMaxFte() setMaxFte(float $value)
 * @method float getMaxFte getMaxFte()
 * @method AbstractCREmployee setLearnDutyDays() setLearnDutyDays(float $value)
 * @method float getLearnDutyDays getLearnDutyDays()
 * @method AbstractCREmployee setHasCar() setHasCar(integer $value)
 * @method integer getHasCar getHasCar()
 * @method AbstractCREmployee setPhaseChainSystemKey() setPhaseChainSystemKey(integer $value)
 * @method integer getPhaseChainSystemKey getPhaseChainSystemKey()
 * @method AbstractCREmployee setPhaseSystemStartDate() setPhaseSystemStartDate(string $value)
 * @method string getPhaseSystemStartDate getPhaseSystemStartDate()
 * @method AbstractCREmployee setPhase1StartDate() setPhase1StartDate(string $value)
 * @method string getPhase1StartDate getPhase1StartDate()
 * @method AbstractCREmployee setPhase2StartDate() setPhase2StartDate(string $value)
 * @method string getPhase2StartDate getPhase2StartDate()
 * @method AbstractCREmployee setPhase3StartDate() setPhase3StartDate(string $value)
 * @method string getPhase3StartDate getPhase3StartDate()
 * @method AbstractCREmployee setPhase4StartDate() setPhase4StartDate(string $value)
 * @method string getPhase4StartDate getPhase4StartDate()
 * @method AbstractCREmployee setEmployeeInformation() setEmployeeInformation(string $value)
 * @method string getEmployeeInformation getEmployeeInformation()
 * @method AbstractCREmployee setIdentificationValidUntilDate() setIdentificationValidUntilDate(string $value)
 * @method string getIdentificationValidUntilDate getIdentificationValidUntilDate()
 * @method AbstractCREmployee setNotes() setNotes(string $value)
 * @method string getNotes getNotes()
 * @method AbstractCREmployee setWorkingPermitValidUntilDate() setWorkingPermitValidUntilDate(string $value)
 * @method string getWorkingPermitValidUntilDate getWorkingPermitValidUntilDate()
 * @method AbstractCREmployee setAmbition() setAmbition(string $value)
 * @method string getAmbition getAmbition()
 * @method AbstractCREmployee setContractEndDate() setContractEndDate(string $value)
 * @method string getContractEndDate getContractEndDate()
 * @method AbstractCREmployee setEducationInformation() setEducationInformation(string $value)
 * @method string getEducationInformation getEducationInformation()
 * @method AbstractCREmployee setLanguageNotes() setLanguageNotes(string $value)
 * @method string getLanguageNotes getLanguageNotes()
 * @method AbstractCREmployee setSkillNotes() setSkillNotes(string $value)
 * @method string getSkillNotes getSkillNotes()
 * @method AbstractCREmployee setTrainingNotes() setTrainingNotes(string $value)
 * @method string getTrainingNotes getTrainingNotes()
 * @method AbstractCREmployee setZiekengeldPercentage() setZiekengeldPercentage(float $value)
 * @method float getZiekengeldPercentage getZiekengeldPercentage()
 * @method AbstractCREmployee setWorkingPermitCode() setWorkingPermitCode(string $value)
 * @method string getWorkingPermitCode getWorkingPermitCode()
 * @method AbstractCREmployee setMedicalInsurancePolicyCode() setMedicalInsurancePolicyCode(string $value)
 * @method string getMedicalInsurancePolicyCode getMedicalInsurancePolicyCode()
 * @method AbstractCREmployee setIdentificationCode() setIdentificationCode(string $value)
 * @method string getIdentificationCode getIdentificationCode()
 * @method AbstractCREmployee setSpaarPolicyCode() setSpaarPolicyCode(string $value)
 * @method string getSpaarPolicyCode getSpaarPolicyCode()
 * @method AbstractCREmployee setSpaarOrganisation() setSpaarOrganisation(string $value)
 * @method string getSpaarOrganisation getSpaarOrganisation()
 * @method AbstractCREmployee setSpaarAccountName() setSpaarAccountName(string $value)
 * @method string getSpaarAccountName getSpaarAccountName()
 * @method AbstractCREmployee setSpaarAccount() setSpaarAccount(string $value)
 * @method string getSpaarAccount getSpaarAccount()
 * @method AbstractCREmployee setPremieAccountName() setPremieAccountName(string $value)
 * @method string getPremieAccountName getPremieAccountName()
 * @method AbstractCREmployee setPremieAccount() setPremieAccount(string $value)
 * @method string getPremieAccount getPremieAccount()
 * @method AbstractCREmployee setPhaseSystemFileNumber() setPhaseSystemFileNumber(string $value)
 * @method string getPhaseSystemFileNumber getPhaseSystemFileNumber()
 * @method AbstractCREmployee setPaymentAccountName() setPaymentAccountName(string $value)
 * @method string getPaymentAccountName getPaymentAccountName()
 * @method AbstractCREmployee setPaymentAccountOld() setPaymentAccountOld(string $value)
 * @method string getPaymentAccountOld getPaymentAccountOld()
 * @method AbstractCREmployee setContactInfo() setContactInfo(string $value)
 * @method string getContactInfo getContactInfo()
 * @method AbstractCREmployee setHolidayDays() setHolidayDays(float $value)
 * @method float getHolidayDays getHolidayDays()
 * @method AbstractCREmployee setHoursPerWeek() setHoursPerWeek(float $value)
 * @method float getHoursPerWeek getHoursPerWeek()
 * @method AbstractCREmployee setExperienceInformation() setExperienceInformation(string $value)
 * @method string getExperienceInformation getExperienceInformation()
 * @method AbstractCREmployee setBirthName() setBirthName(string $value)
 * @method string getBirthName getBirthName()
 * @method AbstractCREmployee setIdentificationCity() setIdentificationCity(string $value)
 * @method string getIdentificationCity getIdentificationCity()
 * @method AbstractCREmployee setIdentificationDate() setIdentificationDate(string $value)
 * @method string getIdentificationDate getIdentificationDate()
 * @method AbstractCREmployee setBirthCity() setBirthCity(string $value)
 * @method string getBirthCity getBirthCity()
 * @method AbstractCREmployee setHolidayCorrectionsString() setHolidayCorrectionsString(string $value)
 * @method string getHolidayCorrectionsString getHolidayCorrectionsString()
 * @method AbstractCREmployee setDriversLicenseCity() setDriversLicenseCity(string $value)
 * @method string getDriversLicenseCity getDriversLicenseCity()
 * @method AbstractCREmployee setDriversLicenseCode() setDriversLicenseCode(string $value)
 * @method string getDriversLicenseCode getDriversLicenseCode()
 * @method AbstractCREmployee setDriversLicenseValidUntilDate() setDriversLicenseValidUntilDate(string $value)
 * @method string getDriversLicenseValidUntilDate getDriversLicenseValidUntilDate()
 * @method AbstractCREmployee setCoordX() setCoordX(integer $value)
 * @method integer getCoordX getCoordX()
 * @method AbstractCREmployee setCoordY() setCoordY(integer $value)
 * @method integer getCoordY getCoordY()
 * @method AbstractCREmployee setCurrentSalary() setCurrentSalary(float $value)
 * @method float getCurrentSalary getCurrentSalary()
 * @method AbstractCREmployee setCurrentConditions() setCurrentConditions(string $value)
 * @method string getCurrentConditions getCurrentConditions()
 * @method AbstractCREmployee setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCREmployee setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCREmployee setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCREmployee setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCREmployee setHobbies() setHobbies(string $value)
 * @method string getHobbies getHobbies()
 * @method AbstractCREmployee setSisKaartNumber() setSisKaartNumber(string $value)
 * @method string getSisKaartNumber getSisKaartNumber()
 * @method AbstractCREmployee setChecklistBits() setChecklistBits(string $value)
 * @method string getChecklistBits getChecklistBits()
 * @method AbstractCREmployee setMinFte() setMinFte(float $value)
 * @method float getMinFte getMinFte()
 * @method AbstractCREmployee setSourceInfo() setSourceInfo(string $value)
 * @method string getSourceInfo getSourceInfo()
 * @method AbstractCREmployee setIsConfidential() setIsConfidential(integer $value)
 * @method integer getIsConfidential getIsConfidential()
 * @method AbstractCREmployee setExperienceSinceDate() setExperienceSinceDate(string $value)
 * @method string getExperienceSinceDate getExperienceSinceDate()
 * @method AbstractCREmployee setAdminSyncDate() setAdminSyncDate(string $value)
 * @method string getAdminSyncDate getAdminSyncDate()
 * @method AbstractCREmployee setBonusNotes() setBonusNotes(string $value)
 * @method string getBonusNotes getBonusNotes()
 * @method AbstractCREmployee setStudyNotes() setStudyNotes(string $value)
 * @method string getStudyNotes getStudyNotes()
 * @method AbstractCREmployee setPartnerBirthCity() setPartnerBirthCity(string $value)
 * @method string getPartnerBirthCity getPartnerBirthCity()
 * @method AbstractCREmployee setPartnerBirthDate() setPartnerBirthDate(string $value)
 * @method string getPartnerBirthDate getPartnerBirthDate()
 * @method AbstractCREmployee setPartnerFirstName() setPartnerFirstName(string $value)
 * @method string getPartnerFirstName getPartnerFirstName()
 * @method AbstractCREmployee setPartnerFullFirstNames() setPartnerFullFirstNames(string $value)
 * @method string getPartnerFullFirstNames getPartnerFullFirstNames()
 * @method AbstractCREmployee setPartnerInitials() setPartnerInitials(string $value)
 * @method string getPartnerInitials getPartnerInitials()
 * @method AbstractCREmployee setPartnerLastName() setPartnerLastName(string $value)
 * @method string getPartnerLastName getPartnerLastName()
 * @method AbstractCREmployee setPartnerLastNamePrefix() setPartnerLastNamePrefix(string $value)
 * @method string getPartnerLastNamePrefix getPartnerLastNamePrefix()
 * @method AbstractCREmployee setCostCenter() setCostCenter(string $value)
 * @method string getCostCenter getCostCenter()
 * @method AbstractCREmployee setCostUnit() setCostUnit(string $value)
 * @method string getCostUnit getCostUnit()
 * @method AbstractCREmployee setMaritalStatus() setMaritalStatus(NSDictionary|array $value)
 * @method NSDictionary|array getMaritalStatus getMaritalStatus()
 * @method AbstractCREmployee setChildren() setChildren(NSArray|array $value)
 * @method NSArray|array getChildren getChildren()
 * @method AbstractCREmployee setCostPrice() setCostPrice(float $value)
 * @method float getCostPrice getCostPrice()
 * @method AbstractCREmployee setSellingPrice() setSellingPrice(float $value)
 * @method float getSellingPrice getSellingPrice()
 * @method AbstractCREmployee setReviewInfo() setReviewInfo(string $value)
 * @method string getReviewInfo getReviewInfo()
 * @method AbstractCREmployee setPurchaseRate() setPurchaseRate(float $value)
 * @method float getPurchaseRate getPurchaseRate()
 * @method AbstractCREmployee setSalesFactor() setSalesFactor(float $value)
 * @method float getSalesFactor getSalesFactor()
 * @method AbstractCREmployee setPartnerPersonalNumber() setPartnerPersonalNumber(string $value)
 * @method string getPartnerPersonalNumber getPartnerPersonalNumber()
 * @method AbstractCREmployee setPaymentBicCode() setPaymentBicCode(string $value)
 * @method string getPaymentBicCode getPaymentBicCode()
 * @method AbstractCREmployee setPaymentIbanCode() setPaymentIbanCode(string $value)
 * @method string getPaymentIbanCode getPaymentIbanCode()
 * @method AbstractCREmployee setAdditionalInfo() setAdditionalInfo(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfo getAdditionalInfo()
 * @method AbstractCREmployee setAdditionalInfoPartial() setAdditionalInfoPartial(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfoPartial getAdditionalInfoPartial()
 * @method AbstractCREmployee setFlags() setFlags(integer $value)
 * @method integer getFlags getFlags()
 * @method AbstractCREmployee setPaymentAccount() setPaymentAccount(string $value)
 * @method string getPaymentAccount getPaymentAccount()
 * @method AbstractCREmployee setExternalInfo() setExternalInfo(NSDictionary|array $value)
 * @method NSDictionary|array getExternalInfo getExternalInfo()
 * @method AbstractCREmployee setTimesheetTypeKey() setTimesheetTypeKey(integer $value)
 * @method integer getTimesheetTypeKey getTimesheetTypeKey()
 * @method AbstractCREmployee setPrivacyApprovalDate() setPrivacyApprovalDate(string $value)
 * @method string getPrivacyApprovalDate getPrivacyApprovalDate()
 * @method AbstractCREmployee setConsentExpiryDate() setConsentExpiryDate(string $value)
 * @method string getConsentExpiryDate getConsentExpiryDate()
 * @method AbstractCREmployee setTrackingModificationDate() setTrackingModificationDate(string $value)
 * @method string getTrackingModificationDate getTrackingModificationDate()
 * @method AbstractCREmployee setWorkidCandidateUuid() setWorkidCandidateUuid(string $value)
 * @method string getWorkidCandidateUuid getWorkidCandidateUuid()
 * @method AbstractCREmployee setWorkidPermissionUuid() setWorkidPermissionUuid(string $value)
 * @method string getWorkidPermissionUuid getWorkidPermissionUuid()
 * @method AbstractCREmployee setWorkidPermissionStatus() setWorkidPermissionStatus(string $value)
 * @method string getWorkidPermissionStatus getWorkidPermissionStatus()
 * @method AbstractCREmployee setWorkidPermissionStartValidityDate() setWorkidPermissionStartValidityDate(string $value)
 * @method string getWorkidPermissionStartValidityDate getWorkidPermissionStartValidityDate()
 * @method AbstractCREmployee setWorkidPermissionEndValidityDate() setWorkidPermissionEndValidityDate(string $value)
 * @method string getWorkidPermissionEndValidityDate getWorkidPermissionEndValidityDate()
 * @method AbstractCREmployee setConfidentialIamRole() setConfidentialIamRole(string $value)
 * @method string getConfidentialIamRole getConfidentialIamRole()
 * @method AbstractCREmployee setMatchCriteriaID() setMatchCriteriaID(integer $value)
 * @method integer getMatchCriteriaID getMatchCriteriaID()
 * @method AbstractCREmployee setMatches() setMatches(array|Collection $values)
 * @method Collection|CRMatch getMatches getMatches()
 * @method AbstractCREmployee setToUser() setToUser(array|CRUser $value)
 * @method CRUser getToUser getToUser($index = null)
 * @method AbstractCREmployee setWorkHistories() setWorkHistories(array|Collection $values)
 * @method Collection|CRWorkHistory getWorkHistories getWorkHistories()
 * @method AbstractCREmployee setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 * @method AbstractCREmployee setToMedium() setToMedium(array|CRMedium $value)
 * @method CRMedium getToMedium getToMedium($index = null)
 * @method AbstractCREmployee setToExperienceNode() setToExperienceNode(array|CRDataNode $value)
 * @method CRDataNode getToExperienceNode getToExperienceNode($index = null)
 * @method AbstractCREmployee setJobs() setJobs(array|Collection $values)
 * @method Collection|CRJob getJobs getJobs()
 * @method AbstractCREmployee setToProductNode() setToProductNode(array|CRDataNode $value)
 * @method CRDataNode getToProductNode getToProductNode($index = null)
 * @method AbstractCREmployee setToProductType1Node() setToProductType1Node(array|CRDataNode $value)
 * @method CRDataNode getToProductType1Node getToProductType1Node($index = null)
 * @method AbstractCREmployee setToLevel1Function1() setToLevel1Function1(array|CRDataNode $value)
 * @method CRDataNode getToLevel1Function1 getToLevel1Function1($index = null)
 * @method AbstractCREmployee setToLevel1Function2() setToLevel1Function2(array|CRDataNode $value)
 * @method CRDataNode getToLevel1Function2 getToLevel1Function2($index = null)
 * @method AbstractCREmployee setToLevel1Function3() setToLevel1Function3(array|CRDataNode $value)
 * @method CRDataNode getToLevel1Function3 getToLevel1Function3($index = null)
 * @method AbstractCREmployee setToLevel1Function4() setToLevel1Function4(array|CRDataNode $value)
 * @method CRDataNode getToLevel1Function4 getToLevel1Function4($index = null)
 * @method AbstractCREmployee setToLevel1Function5() setToLevel1Function5(array|CRDataNode $value)
 * @method CRDataNode getToLevel1Function5 getToLevel1Function5($index = null)
 * @method AbstractCREmployee setToLevel1Function6() setToLevel1Function6(array|CRDataNode $value)
 * @method CRDataNode getToLevel1Function6 getToLevel1Function6($index = null)
 * @method AbstractCREmployee setToLevel2Function1() setToLevel2Function1(array|CRDataNode $value)
 * @method CRDataNode getToLevel2Function1 getToLevel2Function1($index = null)
 * @method AbstractCREmployee setToLevel2Function2() setToLevel2Function2(array|CRDataNode $value)
 * @method CRDataNode getToLevel2Function2 getToLevel2Function2($index = null)
 * @method AbstractCREmployee setToLevel2Function3() setToLevel2Function3(array|CRDataNode $value)
 * @method CRDataNode getToLevel2Function3 getToLevel2Function3($index = null)
 * @method AbstractCREmployee setToLevel2Function4() setToLevel2Function4(array|CRDataNode $value)
 * @method CRDataNode getToLevel2Function4 getToLevel2Function4($index = null)
 * @method AbstractCREmployee setToLevel2Function5() setToLevel2Function5(array|CRDataNode $value)
 * @method CRDataNode getToLevel2Function5 getToLevel2Function5($index = null)
 * @method AbstractCREmployee setToLevel2Function6() setToLevel2Function6(array|CRDataNode $value)
 * @method CRDataNode getToLevel2Function6 getToLevel2Function6($index = null)
 * @method AbstractCREmployee setEducations() setEducations(array|Collection $values)
 * @method Collection|CREmployeeEducation getEducations getEducations()
 * @method AbstractCREmployee setAllWeekHours() setAllWeekHours(array|Collection $values)
 * @method Collection|CRWeekHour getAllWeekHours getAllWeekHours()
 * @method AbstractCREmployee setLanguages() setLanguages(array|Collection $values)
 * @method Collection|CREmployeeLanguage getLanguages getLanguages()
 * @method AbstractCREmployee setSkills() setSkills(array|Collection $values)
 * @method Collection|CREmployeeSkill getSkills getSkills()
 * @method AbstractCREmployee setTrainings() setTrainings(array|Collection $values)
 * @method Collection|CREmployeeTraining getTrainings getTrainings()
 * @method AbstractCREmployee setToFunction1Level1Node() setToFunction1Level1Node(array|CRDataNode $value)
 * @method CRDataNode getToFunction1Level1Node getToFunction1Level1Node($index = null)
 * @method AbstractCREmployee setToFunction1Level2Node() setToFunction1Level2Node(array|CRDataNode $value)
 * @method CRDataNode getToFunction1Level2Node getToFunction1Level2Node($index = null)
 * @method AbstractCREmployee setToDriverLicenceNode() setToDriverLicenceNode(array|CRDataNode $value)
 * @method CRDataNode getToDriverLicenceNode getToDriverLicenceNode($index = null)
 * @method AbstractCREmployee setToAvailableWithinNode() setToAvailableWithinNode(array|CRDataNode $value)
 * @method CRDataNode getToAvailableWithinNode getToAvailableWithinNode($index = null)
 * @method AbstractCREmployee setToMeansOfTransportNode() setToMeansOfTransportNode(array|CRDataNode $value)
 * @method CRDataNode getToMeansOfTransportNode getToMeansOfTransportNode($index = null)
 * @method AbstractCREmployee setToCategoryNode() setToCategoryNode(array|CRDataNode $value)
 * @method CRDataNode getToCategoryNode getToCategoryNode($index = null)
 * @method AbstractCREmployee setToSalaryScaleLevel1Node() setToSalaryScaleLevel1Node(array|CRDataNode $value)
 * @method CRDataNode getToSalaryScaleLevel1Node getToSalaryScaleLevel1Node($index = null)
 * @method AbstractCREmployee setToSalaryScaleLevel2Node() setToSalaryScaleLevel2Node(array|CRDataNode $value)
 * @method CRDataNode getToSalaryScaleLevel2Node getToSalaryScaleLevel2Node($index = null)
 * @method AbstractCREmployee setToBrancheLevel1() setToBrancheLevel1(array|CRDataNode $value)
 * @method CRDataNode getToBrancheLevel1 getToBrancheLevel1($index = null)
 * @method AbstractCREmployee setToBrancheLevel2() setToBrancheLevel2(array|CRDataNode $value)
 * @method CRDataNode getToBrancheLevel2 getToBrancheLevel2($index = null)
 * @method AbstractCREmployee setToFunction2Level1Node() setToFunction2Level1Node(array|CRDataNode $value)
 * @method CRDataNode getToFunction2Level1Node getToFunction2Level1Node($index = null)
 * @method AbstractCREmployee setToFunction2Level2Node() setToFunction2Level2Node(array|CRDataNode $value)
 * @method CRDataNode getToFunction2Level2Node getToFunction2Level2Node($index = null)
 * @method AbstractCREmployee setToFunction3Level1Node() setToFunction3Level1Node(array|CRDataNode $value)
 * @method CRDataNode getToFunction3Level1Node getToFunction3Level1Node($index = null)
 * @method AbstractCREmployee setToFunction3Level2Node() setToFunction3Level2Node(array|CRDataNode $value)
 * @method CRDataNode getToFunction3Level2Node getToFunction3Level2Node($index = null)
 * @method AbstractCREmployee setToMinSalaryCurrencyNode() setToMinSalaryCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToMinSalaryCurrencyNode getToMinSalaryCurrencyNode($index = null)
 * @method AbstractCREmployee setToContractTypeNode() setToContractTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToContractTypeNode getToContractTypeNode($index = null)
 * @method AbstractCREmployee setWeekHourViews() setWeekHourViews(array|Collection $values)
 * @method Collection|CRWeekHourView getWeekHourViews getWeekHourViews()
 * @method AbstractCREmployee set_todos() set_todos(array|Collection $values)
 * @method Collection|CRToDo get_todos get_todos()
 * @method AbstractCREmployee setToWorkUnitNode() setToWorkUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToWorkUnitNode getToWorkUnitNode($index = null)
 * @method AbstractCREmployee setFinances() setFinances(array|Collection $values)
 * @method Collection|CRFinance getFinances getFinances()
 * @method AbstractCREmployee setToIdentificationTypeNode() setToIdentificationTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToIdentificationTypeNode getToIdentificationTypeNode($index = null)
 * @method AbstractCREmployee setToMaritalStatusNode() setToMaritalStatusNode(array|CRDataNode $value)
 * @method CRDataNode getToMaritalStatusNode getToMaritalStatusNode($index = null)
 * @method AbstractCREmployee setToMedicalInsuranceCompanyNode() setToMedicalInsuranceCompanyNode(array|CRDataNode $value)
 * @method CRDataNode getToMedicalInsuranceCompanyNode getToMedicalInsuranceCompanyNode($index = null)
 * @method AbstractCREmployee setToMedicalInsuranceTypeNode() setToMedicalInsuranceTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToMedicalInsuranceTypeNode getToMedicalInsuranceTypeNode($index = null)
 * @method AbstractCREmployee setToNationalityNode() setToNationalityNode(array|CRDataNode $value)
 * @method CRDataNode getToNationalityNode getToNationalityNode($index = null)
 * @method AbstractCREmployee setToOptional1Node() setToOptional1Node(array|CRDataNode $value)
 * @method CRDataNode getToOptional1Node getToOptional1Node($index = null)
 * @method AbstractCREmployee setToPaymentModeNode() setToPaymentModeNode(array|CRDataNode $value)
 * @method CRDataNode getToPaymentModeNode getToPaymentModeNode($index = null)
 * @method AbstractCREmployee setToPrefBranche1Level1Node() setToPrefBranche1Level1Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche1Level1Node getToPrefBranche1Level1Node($index = null)
 * @method AbstractCREmployee setToPrefBranche1Level2Node() setToPrefBranche1Level2Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche1Level2Node getToPrefBranche1Level2Node($index = null)
 * @method AbstractCREmployee setToPrefBranche2Level1Node() setToPrefBranche2Level1Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche2Level1Node getToPrefBranche2Level1Node($index = null)
 * @method AbstractCREmployee setToPrefBranche2Level2Node() setToPrefBranche2Level2Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche2Level2Node getToPrefBranche2Level2Node($index = null)
 * @method AbstractCREmployee setToPrefBranche3Level1Node() setToPrefBranche3Level1Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche3Level1Node getToPrefBranche3Level1Node($index = null)
 * @method AbstractCREmployee setToPrefBranche3Level2Node() setToPrefBranche3Level2Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche3Level2Node getToPrefBranche3Level2Node($index = null)
 * @method AbstractCREmployee setToPrefBranche4Level1Node() setToPrefBranche4Level1Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche4Level1Node getToPrefBranche4Level1Node($index = null)
 * @method AbstractCREmployee setToPrefBranche4Level2Node() setToPrefBranche4Level2Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche4Level2Node getToPrefBranche4Level2Node($index = null)
 * @method AbstractCREmployee setToPrefBranche5Level1Node() setToPrefBranche5Level1Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche5Level1Node getToPrefBranche5Level1Node($index = null)
 * @method AbstractCREmployee setToPrefBranche5Level2Node() setToPrefBranche5Level2Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche5Level2Node getToPrefBranche5Level2Node($index = null)
 * @method AbstractCREmployee setToPrefBranche6Level1Node() setToPrefBranche6Level1Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche6Level1Node getToPrefBranche6Level1Node($index = null)
 * @method AbstractCREmployee setToPrefBranche6Level2Node() setToPrefBranche6Level2Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche6Level2Node getToPrefBranche6Level2Node($index = null)
 * @method AbstractCREmployee setToPrefContractTypeNode() setToPrefContractTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToPrefContractTypeNode getToPrefContractTypeNode($index = null)
 * @method AbstractCREmployee setToPrefRegion1Node() setToPrefRegion1Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefRegion1Node getToPrefRegion1Node($index = null)
 * @method AbstractCREmployee setToPrefRegion2Node() setToPrefRegion2Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefRegion2Node getToPrefRegion2Node($index = null)
 * @method AbstractCREmployee setToPrefRegion3Node() setToPrefRegion3Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefRegion3Node getToPrefRegion3Node($index = null)
 * @method AbstractCREmployee setToPrefRegion4Node() setToPrefRegion4Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefRegion4Node getToPrefRegion4Node($index = null)
 * @method AbstractCREmployee setToPrefRegion5Node() setToPrefRegion5Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefRegion5Node getToPrefRegion5Node($index = null)
 * @method AbstractCREmployee setToPrefRegion6Node() setToPrefRegion6Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefRegion6Node getToPrefRegion6Node($index = null)
 * @method AbstractCREmployee setToWorkLevelNode() setToWorkLevelNode(array|CRDataNode $value)
 * @method CRDataNode getToWorkLevelNode getToWorkLevelNode($index = null)
 * @method AbstractCREmployee setToPrefCountry1Node() setToPrefCountry1Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefCountry1Node getToPrefCountry1Node($index = null)
 * @method AbstractCREmployee setToPrefCountry2Node() setToPrefCountry2Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefCountry2Node getToPrefCountry2Node($index = null)
 * @method AbstractCREmployee setToPrefCountry3Node() setToPrefCountry3Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefCountry3Node getToPrefCountry3Node($index = null)
 * @method AbstractCREmployee setToPrefCountry4Node() setToPrefCountry4Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefCountry4Node getToPrefCountry4Node($index = null)
 * @method AbstractCREmployee setToPrefCountry5Node() setToPrefCountry5Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefCountry5Node getToPrefCountry5Node($index = null)
 * @method AbstractCREmployee setToPrefCountry6Node() setToPrefCountry6Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefCountry6Node getToPrefCountry6Node($index = null)
 * @method AbstractCREmployee setToIdentificationCountryNode() setToIdentificationCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToIdentificationCountryNode getToIdentificationCountryNode($index = null)
 * @method AbstractCREmployee setToBirthCountryNode() setToBirthCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToBirthCountryNode getToBirthCountryNode($index = null)
 * @method AbstractCREmployee setToDoUsers() setToDoUsers(array|Collection $values)
 * @method Collection|CRToDoUser getToDoUsers getToDoUsers()
 * @method AbstractCREmployee setAttributeChanges() setAttributeChanges(array|Collection $values)
 * @method Collection|CRAttributeChange getAttributeChanges getAttributeChanges()
 * @method AbstractCREmployee setToCurrentSalaryCurrencyNode() setToCurrentSalaryCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToCurrentSalaryCurrencyNode getToCurrentSalaryCurrencyNode($index = null)
 * @method AbstractCREmployee setToCurrentSalaryPeriodNode() setToCurrentSalaryPeriodNode(array|CRDataNode $value)
 * @method CRDataNode getToCurrentSalaryPeriodNode getToCurrentSalaryPeriodNode($index = null)
 * @method AbstractCREmployee setCreatedBy() setCreatedBy(array|CRUser $value)
 * @method CRUser getCreatedBy getCreatedBy($index = null)
 * @method AbstractCREmployee setModifiedBy() setModifiedBy(array|CRUser $value)
 * @method CRUser getModifiedBy getModifiedBy($index = null)
 * @method AbstractCREmployee setToMinSalaryUnitNode() setToMinSalaryUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToMinSalaryUnitNode getToMinSalaryUnitNode($index = null)
 * @method AbstractCREmployee setToSourceNode() setToSourceNode(array|CRDataNode $value)
 * @method CRDataNode getToSourceNode getToSourceNode($index = null)
 * @method AbstractCREmployee setToConfidentialUserRole() setToConfidentialUserRole(array|CRUserRole $value)
 * @method CRUserRole getToConfidentialUserRole getToConfidentialUserRole($index = null)
 * @method AbstractCREmployee setDocuments() setDocuments(array|Collection $values)
 * @method Collection|CREmployeeDocument getDocuments getDocuments()
 * @method AbstractCREmployee setToPartnerGenderNode() setToPartnerGenderNode(array|CRDataNode $value)
 * @method CRDataNode getToPartnerGenderNode getToPartnerGenderNode($index = null)
 * @method AbstractCREmployee setToCostPriceUnitNode() setToCostPriceUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToCostPriceUnitNode getToCostPriceUnitNode($index = null)
 * @method AbstractCREmployee setToCostPriceCurrencyNode() setToCostPriceCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToCostPriceCurrencyNode getToCostPriceCurrencyNode($index = null)
 * @method AbstractCREmployee setToSellingPriceUnitNode() setToSellingPriceUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToSellingPriceUnitNode getToSellingPriceUnitNode($index = null)
 * @method AbstractCREmployee setToSellingPriceCurrencyNode() setToSellingPriceCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToSellingPriceCurrencyNode getToSellingPriceCurrencyNode($index = null)
 * @method AbstractCREmployee setToMedicalInsuranceAgencyNode() setToMedicalInsuranceAgencyNode(array|CRDataNode $value)
 * @method CRDataNode getToMedicalInsuranceAgencyNode getToMedicalInsuranceAgencyNode($index = null)
 * @method AbstractCREmployee setToPurchaseRateCurrencyNode() setToPurchaseRateCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToPurchaseRateCurrencyNode getToPurchaseRateCurrencyNode($index = null)
 * @method AbstractCREmployee setToPurchaseRateUnitNode() setToPurchaseRateUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToPurchaseRateUnitNode getToPurchaseRateUnitNode($index = null)
 * @method AbstractCREmployee setToProductTypeNode1() setToProductTypeNode1(array|CRDataNode $value)
 * @method CRDataNode getToProductTypeNode1 getToProductTypeNode1($index = null)
 * @method AbstractCREmployee setToProductTypeNode2() setToProductTypeNode2(array|CRDataNode $value)
 * @method CRDataNode getToProductTypeNode2 getToProductTypeNode2($index = null)
 * @method AbstractCREmployee setToProductTypeNode3() setToProductTypeNode3(array|CRDataNode $value)
 * @method CRDataNode getToProductTypeNode3 getToProductTypeNode3($index = null)
 * @method AbstractCREmployee setToProductTypeNode4() setToProductTypeNode4(array|CRDataNode $value)
 * @method CRDataNode getToProductTypeNode4 getToProductTypeNode4($index = null)
 * @method AbstractCREmployee setToProductTypeNode5() setToProductTypeNode5(array|CRDataNode $value)
 * @method CRDataNode getToProductTypeNode5 getToProductTypeNode5($index = null)
 * @method AbstractCREmployee setToProductTypeNode6() setToProductTypeNode6(array|CRDataNode $value)
 * @method CRDataNode getToProductTypeNode6 getToProductTypeNode6($index = null)
 * @method AbstractCREmployee setToProductType2Node() setToProductType2Node(array|CRDataNode $value)
 * @method CRDataNode getToProductType2Node getToProductType2Node($index = null)
 * @method AbstractCREmployee setToProductType3Node() setToProductType3Node(array|CRDataNode $value)
 * @method CRDataNode getToProductType3Node getToProductType3Node($index = null)
 * @method AbstractCREmployee setToCurrentWorkHistory() setToCurrentWorkHistory(array|CRWorkHistory $value)
 * @method CRWorkHistory getToCurrentWorkHistory getToCurrentWorkHistory($index = null)
 * @method AbstractCREmployee setToCurrentBrancheLevel1() setToCurrentBrancheLevel1(array|CRDataNode $value)
 * @method CRDataNode getToCurrentBrancheLevel1 getToCurrentBrancheLevel1($index = null)
 * @method AbstractCREmployee setToCurrentBrancheLevel2() setToCurrentBrancheLevel2(array|CRDataNode $value)
 * @method CRDataNode getToCurrentBrancheLevel2 getToCurrentBrancheLevel2($index = null)
 * @method AbstractCREmployee setToCurrentFunctionLevel2() setToCurrentFunctionLevel2(array|CRDataNode $value)
 * @method CRDataNode getToCurrentFunctionLevel2 getToCurrentFunctionLevel2($index = null)
 * @method AbstractCREmployee setToFreelanceCompany() setToFreelanceCompany(array|CRCompany $value)
 * @method CRCompany getToFreelanceCompany getToFreelanceCompany($index = null)
 * @method AbstractCREmployee setMonthHourViews() setMonthHourViews(array|Collection $values)
 * @method Collection|CRMonthHourView getMonthHourViews getMonthHourViews()
 * @method AbstractCREmployee setToCurrentFunctionLevel1() setToCurrentFunctionLevel1(array|CRDataNode $value)
 * @method CRDataNode getToCurrentFunctionLevel1 getToCurrentFunctionLevel1($index = null)
 * @method AbstractCREmployee setTalentPoolMatches() setTalentPoolMatches(array|Collection $values)
 * @method Collection|CRTalentPoolMatch getTalentPoolMatches getTalentPoolMatches()
 * @method AbstractCREmployee setToConsentStageNode() setToConsentStageNode(array|CRDataNode $value)
 * @method CRDataNode getToConsentStageNode getToConsentStageNode($index = null)
 * @method AbstractCREmployee setToConsentPeriodNode() setToConsentPeriodNode(array|CRDataNode $value)
 * @method CRDataNode getToConsentPeriodNode getToConsentPeriodNode($index = null)
 * @method AbstractCREmployee setToMatchCriteria() setToMatchCriteria(array|CRMatchCriteria $value)
 * @method CRMatchCriteria getToMatchCriteria getToMatchCriteria($index = null)
 */
abstract class AbstractCREmployee extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CREmployee';

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
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $minSalary = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $employeeID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $availableFromDate = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $matchCountMO = null;

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $daysPerWeek = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $availableDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class PRBitVector
     * @allows_null 1
     * @width 64
     */
    public $documentBits = null;

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
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $maxFte = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $learnDutyDays = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $hasCar = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $phaseChainSystemKey = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $phaseSystemStartDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $phase1StartDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $phase2StartDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $phase3StartDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $phase4StartDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $employeeInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $identificationValidUntilDate = null;

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
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $workingPermitValidUntilDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $ambition = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $contractEndDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $educationInformation = null;

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
     * @width 1000000
     */
    public $trainingNotes = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $ziekengeldPercentage = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 20
     */
    public $workingPermitCode = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 20
     */
    public $medicalInsurancePolicyCode = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 25
     */
    public $identificationCode = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 15
     */
    public $spaarPolicyCode = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 80
     */
    public $spaarOrganisation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 80
     */
    public $spaarAccountName = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 15
     */
    public $spaarAccount = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 80
     */
    public $premieAccountName = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 15
     */
    public $premieAccount = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $phaseSystemFileNumber = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 80
     */
    public $paymentAccountName = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $paymentAccountOld = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 80
     */
    public $contactInfo = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $holidayDays = null;

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
     * @width 1000000
     */
    public $experienceInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $birthName = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $identificationCity = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $identificationDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $birthCity = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $holidayCorrectionsString = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $driversLicenseCity = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 20
     */
    public $driversLicenseCode = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $driversLicenseValidUntilDate = null;

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
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $currentSalary = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $currentConditions = null;

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
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $hobbies = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $sisKaartNumber = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class PRBitVector
     * @allows_null 1
     * @width 64
     */
    public $checklistBits = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $minFte = null;

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
    public $isConfidential = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $experienceSinceDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $adminSyncDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $bonusNotes = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $studyNotes = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $partnerBirthCity = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $partnerBirthDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $partnerFirstName = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $partnerFullFirstNames = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 12
     */
    public $partnerInitials = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $partnerLastName = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $partnerLastNamePrefix = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $costCenter = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $costUnit = null;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $maritalStatus = null;

    /**
     * @cx_field true
     * @access private
     * @var NSArray|array
     * @value_class NSArray
     * @allows_null 1
     */
    public $children = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $costPrice = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $sellingPrice = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $reviewInfo = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $purchaseRate = null;

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
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $partnerPersonalNumber = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $paymentBicCode = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $paymentIbanCode = null;

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
    public $flags = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $paymentAccount = null;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $externalInfo = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $timesheetTypeKey = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $privacyApprovalDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $consentExpiryDate = null;

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
     * @width 1000000
     */
    public $workidCandidateUuid = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $workidPermissionUuid = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $workidPermissionStatus = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $workidPermissionStartValidityDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $workidPermissionEndValidityDate = null;

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
     * @mandatory 1
     * @destination_entity CRUser
     * @to_many 0
     * @name toUser
     */
    public $toUser = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRWorkHistory")
     * @mandatory 0
     * @destination_entity CRWorkHistory
     * @to_many 1
     * @name workHistories
     */
    public $workHistories = null;

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
     * @var CRMedium
     * @OneToOne (targetEntity="CRMedium")
     * @mandatory 0
     * @destination_entity CRMedium
     * @to_many 0
     * @name toMedium
     */
    public $toMedium = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toExperienceNode
     * @default 1
     * @nodeType Ervaring
     */
    public $toExperienceNode = null;

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
     * @name toProductType1Node
     * @default 1
     * @nodeType Product
     */
    public $toProductType1Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel1Function1
     * @default 0
     * @nodeType Functie0
     */
    public $toLevel1Function1 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel1Function2
     * @default 0
     * @nodeType Functie0
     */
    public $toLevel1Function2 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel1Function3
     * @default 0
     * @nodeType Functie0
     */
    public $toLevel1Function3 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel1Function4
     * @default 0
     * @nodeType Functie0
     */
    public $toLevel1Function4 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel1Function5
     * @default 0
     * @nodeType Functie0
     */
    public $toLevel1Function5 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel1Function6
     * @default 0
     * @nodeType Functie0
     */
    public $toLevel1Function6 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel2Function1
     * @default 0
     * @nodeType Functie1
     */
    public $toLevel2Function1 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel2Function2
     * @default 0
     * @nodeType Functie1
     */
    public $toLevel2Function2 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel2Function3
     * @default 0
     * @nodeType Functie1
     */
    public $toLevel2Function3 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel2Function4
     * @default 0
     * @nodeType Functie1
     */
    public $toLevel2Function4 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel2Function5
     * @default 0
     * @nodeType Functie1
     */
    public $toLevel2Function5 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel2Function6
     * @default 0
     * @nodeType Functie1
     */
    public $toLevel2Function6 = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CREmployeeEducation")
     * @mandatory 0
     * @destination_entity CREmployeeEducation
     * @to_many 1
     * @name educations
     */
    public $educations = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRWeekHour")
     * @mandatory 0
     * @destination_entity CRWeekHour
     * @to_many 1
     * @name allWeekHours
     */
    public $allWeekHours = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CREmployeeLanguage")
     * @mandatory 0
     * @destination_entity CREmployeeLanguage
     * @to_many 1
     * @name languages
     */
    public $languages = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CREmployeeSkill")
     * @mandatory 0
     * @destination_entity CREmployeeSkill
     * @to_many 1
     * @name skills
     */
    public $skills = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CREmployeeTraining")
     * @mandatory 0
     * @destination_entity CREmployeeTraining
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
     * @name toFunction1Level1Node
     * @default 1
     * @nodeType Functie0
     */
    public $toFunction1Level1Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunction1Level2Node
     * @default 1
     * @nodeType Functie1
     */
    public $toFunction1Level2Node = null;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toAvailableWithinNode
     * @default 1
     * @nodeType Opzegtermijn
     */
    public $toAvailableWithinNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toMeansOfTransportNode
     * @default 1
     * @nodeType Woon-werkvervoer
     */
    public $toMeansOfTransportNode = null;

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
     * @nodeType Kandidaat-categorie
     */
    public $toCategoryNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSalaryScaleLevel1Node
     * @default 1
     * @nodeType Salarisschaal0
     */
    public $toSalaryScaleLevel1Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSalaryScaleLevel2Node
     * @default 0
     * @nodeType Salarisschaal1
     */
    public $toSalaryScaleLevel2Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toBrancheLevel1
     * @default 1
     * @nodeType Branche0
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
     * @default 1
     * @nodeType Branche1
     */
    public $toBrancheLevel2 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunction2Level1Node
     * @default 0
     * @nodeType Functie0
     */
    public $toFunction2Level1Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunction2Level2Node
     * @default 0
     * @nodeType Functie1
     */
    public $toFunction2Level2Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunction3Level1Node
     * @default 0
     * @nodeType Functie0
     */
    public $toFunction3Level1Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunction3Level2Node
     * @default 0
     * @nodeType Functie1
     */
    public $toFunction3Level2Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toMinSalaryCurrencyNode
     * @default 1
     * @nodeType Valuta
     */
    public $toMinSalaryCurrencyNode = null;

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
     * @nodeType Kandidaat-Contract-type
     */
    public $toContractTypeNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRWeekHourView")
     * @mandatory 0
     * @destination_entity CRWeekHourView
     * @to_many 1
     * @name weekHourViews
     */
    public $weekHourViews = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRToDo")
     * @mandatory 0
     * @destination_entity CRToDo
     * @to_many 1
     * @name _todos
     * @inverseName toEmployee
     */
    public $_todos = null;

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
     * @var Collection
     * @OneToMany (targetEntity="CRFinance")
     * @mandatory 0
     * @destination_entity CRFinance
     * @to_many 1
     * @name finances
     */
    public $finances = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toIdentificationTypeNode
     * @default 1
     * @nodeType Identiteitsbewijs
     */
    public $toIdentificationTypeNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toMaritalStatusNode
     * @default 1
     * @nodeType Burgelijke-staat
     */
    public $toMaritalStatusNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toMedicalInsuranceCompanyNode
     * @default 1
     * @nodeType Zorgverzekeraar0
     */
    public $toMedicalInsuranceCompanyNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toMedicalInsuranceTypeNode
     * @default 1
     * @nodeType Zorgverzekeraar-type
     */
    public $toMedicalInsuranceTypeNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toNationalityNode
     * @default 1
     * @nodeType Nationaliteit
     */
    public $toNationalityNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toOptional1Node
     * @default 1
     * @nodeType Optioneel1
     */
    public $toOptional1Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPaymentModeNode
     * @default 1
     * @nodeType Betaalwijze
     */
    public $toPaymentModeNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche1Level1Node
     * @default 1
     * @nodeType Branche0
     */
    public $toPrefBranche1Level1Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche1Level2Node
     * @default 1
     * @nodeType Branche1
     */
    public $toPrefBranche1Level2Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche2Level1Node
     * @default 1
     * @nodeType Branche0
     */
    public $toPrefBranche2Level1Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche2Level2Node
     * @default 1
     * @nodeType Branche1
     */
    public $toPrefBranche2Level2Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche3Level1Node
     * @default 1
     * @nodeType Branche0
     */
    public $toPrefBranche3Level1Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche3Level2Node
     * @default 1
     * @nodeType Branche1
     */
    public $toPrefBranche3Level2Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche4Level1Node
     * @default 1
     * @nodeType Branche0
     */
    public $toPrefBranche4Level1Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche4Level2Node
     * @default 1
     * @nodeType Branche1
     */
    public $toPrefBranche4Level2Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche5Level1Node
     * @default 1
     * @nodeType Branche0
     */
    public $toPrefBranche5Level1Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche5Level2Node
     * @default 1
     * @nodeType Branche1
     */
    public $toPrefBranche5Level2Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche6Level1Node
     * @default 1
     * @nodeType Branche0
     */
    public $toPrefBranche6Level1Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche6Level2Node
     * @default 1
     * @nodeType Branche1
     */
    public $toPrefBranche6Level2Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefContractTypeNode
     * @default 1
     * @nodeType Dienstverband
     */
    public $toPrefContractTypeNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefRegion1Node
     * @default 0
     * @nodeType Regio
     */
    public $toPrefRegion1Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefRegion2Node
     * @default 0
     * @nodeType Regio
     */
    public $toPrefRegion2Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefRegion3Node
     * @default 0
     * @nodeType Regio
     */
    public $toPrefRegion3Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefRegion4Node
     * @default 0
     * @nodeType Regio
     */
    public $toPrefRegion4Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefRegion5Node
     * @default 0
     * @nodeType Regio
     */
    public $toPrefRegion5Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefRegion6Node
     * @default 0
     * @nodeType Regio
     */
    public $toPrefRegion6Node = null;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefCountry1Node
     * @default 1
     * @nodeType Land
     */
    public $toPrefCountry1Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefCountry2Node
     * @default 1
     * @nodeType Land
     */
    public $toPrefCountry2Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefCountry3Node
     * @default 1
     * @nodeType Land
     */
    public $toPrefCountry3Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefCountry4Node
     * @default 1
     * @nodeType Land
     */
    public $toPrefCountry4Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefCountry5Node
     * @default 1
     * @nodeType Land
     */
    public $toPrefCountry5Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefCountry6Node
     * @default 1
     * @nodeType Land
     */
    public $toPrefCountry6Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toIdentificationCountryNode
     * @default 1
     * @nodeType Land
     */
    public $toIdentificationCountryNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toBirthCountryNode
     * @default 1
     * @nodeType Land
     */
    public $toBirthCountryNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRToDoUser")
     * @mandatory 0
     * @destination_entity CRToDoUser
     * @to_many 1
     * @name toDoUsers
     * @inverseName toEmployee
     */
    public $toDoUsers = null;

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
     * @name toCurrentSalaryCurrencyNode
     * @default 1
     * @nodeType Valuta
     */
    public $toCurrentSalaryCurrencyNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCurrentSalaryPeriodNode
     * @default 1
     * @nodeType Salarisperiode
     */
    public $toCurrentSalaryPeriodNode = null;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toMinSalaryUnitNode
     * @default 1
     * @nodeType Inkooptarief-eenheid
     */
    public $toMinSalaryUnitNode = null;

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
     * @nodeType Bron-Kandidaat
     */
    public $toSourceNode = null;

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
     * @var Collection
     * @OneToMany (targetEntity="CREmployeeDocument")
     * @mandatory 0
     * @destination_entity CREmployeeDocument
     * @to_many 1
     * @name documents
     */
    public $documents = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPartnerGenderNode
     */
    public $toPartnerGenderNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCostPriceUnitNode
     */
    public $toCostPriceUnitNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCostPriceCurrencyNode
     */
    public $toCostPriceCurrencyNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSellingPriceUnitNode
     */
    public $toSellingPriceUnitNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSellingPriceCurrencyNode
     */
    public $toSellingPriceCurrencyNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toMedicalInsuranceAgencyNode
     * @default 0
     * @nodeType Zorgverzekeraar1
     */
    public $toMedicalInsuranceAgencyNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPurchaseRateCurrencyNode
     */
    public $toPurchaseRateCurrencyNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPurchaseRateUnitNode
     */
    public $toPurchaseRateUnitNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductTypeNode1
     * @default 1
     * @nodeType Product
     */
    public $toProductTypeNode1 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductTypeNode2
     * @default 1
     * @nodeType Product
     */
    public $toProductTypeNode2 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductTypeNode3
     * @default 1
     * @nodeType Product
     */
    public $toProductTypeNode3 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductTypeNode4
     * @default 1
     * @nodeType Product
     */
    public $toProductTypeNode4 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductTypeNode5
     * @default 1
     * @nodeType Product
     */
    public $toProductTypeNode5 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductTypeNode6
     * @default 1
     * @nodeType Product
     */
    public $toProductTypeNode6 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductType2Node
     * @default 1
     * @nodeType Product
     */
    public $toProductType2Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductType3Node
     * @default 1
     * @nodeType Product
     */
    public $toProductType3Node = null;

    /**
     * @cx_field true
     * @access private
     * @var CRWorkHistory
     * @OneToOne (targetEntity="CRWorkHistory")
     * @mandatory 0
     * @destination_entity CRWorkHistory
     * @to_many 0
     * @name toCurrentWorkHistory
     */
    public $toCurrentWorkHistory = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCurrentBrancheLevel1
     */
    public $toCurrentBrancheLevel1 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCurrentBrancheLevel2
     */
    public $toCurrentBrancheLevel2 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCurrentFunctionLevel2
     */
    public $toCurrentFunctionLevel2 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toFreelanceCompany
     */
    public $toFreelanceCompany = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRMonthHourView")
     * @mandatory 0
     * @destination_entity CRMonthHourView
     * @to_many 1
     * @name monthHourViews
     */
    public $monthHourViews = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCurrentFunctionLevel1
     */
    public $toCurrentFunctionLevel1 = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRTalentPoolMatch")
     * @mandatory 0
     * @destination_entity CRTalentPoolMatch
     * @to_many 1
     * @name talentPoolMatches
     */
    public $talentPoolMatches = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toConsentStageNode
     * @default 1
     * @nodeType Consent-stage
     */
    public $toConsentStageNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toConsentPeriodNode
     * @default 1
     * @nodeType Consent-period
     */
    public $toConsentPeriodNode = null;

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
        $entityConfiguration->setIdentifierKey("employeeID");
        $entityConfiguration->setName("CREmployee");
    }
}
