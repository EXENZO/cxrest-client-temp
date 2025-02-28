<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 09:45:58 +0000
 * @method AbstractCRMatchCriteria setPositiveJobFunctions() setPositiveJobFunctions(string $value)
 * @method string getPositiveJobFunctions getPositiveJobFunctions()
 * @method AbstractCRMatchCriteria setPositiveJobFunctionsModificationDate() setPositiveJobFunctionsModificationDate(string $value)
 * @method string getPositiveJobFunctionsModificationDate getPositiveJobFunctionsModificationDate()
 * @method AbstractCRMatchCriteria setNegativeJobFunctions() setNegativeJobFunctions(string $value)
 * @method string getNegativeJobFunctions getNegativeJobFunctions()
 * @method AbstractCRMatchCriteria setNegativeJobFunctionsModificationDate() setNegativeJobFunctionsModificationDate(string $value)
 * @method string getNegativeJobFunctionsModificationDate getNegativeJobFunctionsModificationDate()
 * @method AbstractCRMatchCriteria setPositiveSkills() setPositiveSkills(string $value)
 * @method string getPositiveSkills getPositiveSkills()
 * @method AbstractCRMatchCriteria setPositiveSkillsModificationDate() setPositiveSkillsModificationDate(string $value)
 * @method string getPositiveSkillsModificationDate getPositiveSkillsModificationDate()
 * @method AbstractCRMatchCriteria setNegativeSkills() setNegativeSkills(string $value)
 * @method string getNegativeSkills getNegativeSkills()
 * @method AbstractCRMatchCriteria setNegativeSkillsModificationDate() setNegativeSkillsModificationDate(string $value)
 * @method string getNegativeSkillsModificationDate getNegativeSkillsModificationDate()
 * @method AbstractCRMatchCriteria setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRMatchCriteria setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRMatchCriteria setMatchCriteriaID() setMatchCriteriaID(integer $value)
 * @method integer getMatchCriteriaID getMatchCriteriaID()
 */
abstract class AbstractCRMatchCriteria extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRMatchCriteria';

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $positiveJobFunctions = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $positiveJobFunctionsModificationDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $negativeJobFunctions = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $negativeJobFunctionsModificationDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $positiveSkills = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $positiveSkillsModificationDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $negativeSkills = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $negativeSkillsModificationDate = null;

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
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $matchCriteriaID = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("matchCriteriaID");
        $entityConfiguration->setName("CRMatchCriteria");
    }
}
