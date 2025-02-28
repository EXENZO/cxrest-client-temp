<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmployee;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:57:55 +0000
 * @method AbstractCREmployeeTraining setEmployeeTrainingID() setEmployeeTrainingID(integer $value)
 * @method integer getEmployeeTrainingID getEmployeeTrainingID()
 * @method AbstractCREmployeeTraining setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCREmployeeTraining setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCREmployeeTraining setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCREmployeeTraining setStartDate() setStartDate(string $value)
 * @method string getStartDate getStartDate()
 * @method AbstractCREmployeeTraining setEndDate() setEndDate(string $value)
 * @method string getEndDate getEndDate()
 * @method AbstractCREmployeeTraining setTrainer() setTrainer(string $value)
 * @method string getTrainer getTrainer()
 * @method AbstractCREmployeeTraining setName() setName(string $value)
 * @method string getName getName()
 * @method AbstractCREmployeeTraining setToEmployee() setToEmployee(array|CREmployee $value)
 * @method CREmployee getToEmployee getToEmployee($index = null)
 * @method AbstractCREmployeeTraining setToTraining() setToTraining(array|CRDataNode $value)
 * @method CRDataNode getToTraining getToTraining($index = null)
 * @method AbstractCREmployeeTraining setToTrainingLevel2() setToTrainingLevel2(array|CRDataNode $value)
 * @method CRDataNode getToTrainingLevel2 getToTrainingLevel2($index = null)
 */
abstract class AbstractCREmployeeTraining extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CREmployeeTraining';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $employeeTrainingID = null;

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
     * @width 128
     */
    public $trainer = null;

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
     * @name toTraining
     * @default 0
     * @nodeType Cursus0
     */
    public $toTraining = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toTrainingLevel2
     * @default 0
     * @nodeType Cursus1
     */
    public $toTrainingLevel2 = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("employeeTrainingID");
        $entityConfiguration->setName("CREmployeeTraining");
    }
}
