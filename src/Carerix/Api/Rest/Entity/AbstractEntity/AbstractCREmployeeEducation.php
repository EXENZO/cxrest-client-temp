<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmployee;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:57:54 +0000
 * @method AbstractCREmployeeEducation setHasCertificate() setHasCertificate(integer $value)
 * @method integer getHasCertificate getHasCertificate()
 * @method AbstractCREmployeeEducation setInstitute() setInstitute(string $value)
 * @method string getInstitute getInstitute()
 * @method AbstractCREmployeeEducation setEmployeeEducationID() setEmployeeEducationID(integer $value)
 * @method integer getEmployeeEducationID getEmployeeEducationID()
 * @method AbstractCREmployeeEducation setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCREmployeeEducation setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCREmployeeEducation setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCREmployeeEducation setStartDate() setStartDate(string $value)
 * @method string getStartDate getStartDate()
 * @method AbstractCREmployeeEducation setEndDate() setEndDate(string $value)
 * @method string getEndDate getEndDate()
 * @method AbstractCREmployeeEducation setDiplomaTitle() setDiplomaTitle(string $value)
 * @method string getDiplomaTitle getDiplomaTitle()
 * @method AbstractCREmployeeEducation setName() setName(string $value)
 * @method string getName getName()
 * @method AbstractCREmployeeEducation setToEmployee() setToEmployee(array|CREmployee $value)
 * @method CREmployee getToEmployee getToEmployee($index = null)
 * @method AbstractCREmployeeEducation setToLevel1Education1() setToLevel1Education1(array|CRDataNode $value)
 * @method CRDataNode getToLevel1Education1 getToLevel1Education1($index = null)
 * @method AbstractCREmployeeEducation setToLevel1Education2() setToLevel1Education2(array|CRDataNode $value)
 * @method CRDataNode getToLevel1Education2 getToLevel1Education2($index = null)
 * @method AbstractCREmployeeEducation setToLevel1Education3() setToLevel1Education3(array|CRDataNode $value)
 * @method CRDataNode getToLevel1Education3 getToLevel1Education3($index = null)
 * @method AbstractCREmployeeEducation setToCountryNode() setToCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToCountryNode getToCountryNode($index = null)
 */
abstract class AbstractCREmployeeEducation extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CREmployeeEducation';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $hasCertificate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $institute = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $employeeEducationID = null;

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
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $diplomaTitle = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $name = null;

    /**
     * @cx_field true
     * @access private
     * @var CREmployee
     * @OneToOne (targetEntity="CREmployee")
     * @mandatory 0
     * @destination_entity CREmployee
     * @to_many 0
     * @name toEmployee
     */
    public $toEmployee = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel1Education1
     * @default 0
     * @nodeType Opleiding0
     */
    public $toLevel1Education1 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel1Education2
     * @default 0
     * @nodeType Opleiding1
     */
    public $toLevel1Education2 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel1Education3
     * @default 0
     * @nodeType Opleiding2
     */
    public $toLevel1Education3 = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCountryNode
     */
    public $toCountryNode = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("employeeEducationID");
        $entityConfiguration->setName("CREmployeeEducation");
    }
}
