<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRVacancy;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:58:02 +0000
 * @method AbstractCRVacancyEducation setVacancyEducationID() setVacancyEducationID(integer $value)
 * @method integer getVacancyEducationID getVacancyEducationID()
 * @method AbstractCRVacancyEducation setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRVacancyEducation setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRVacancyEducation setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRVacancyEducation setToVacancy() setToVacancy(array|CRVacancy $value)
 * @method CRVacancy getToVacancy getToVacancy($index = null)
 * @method AbstractCRVacancyEducation setToLevel1Education1() setToLevel1Education1(array|CRDataNode $value)
 * @method CRDataNode getToLevel1Education1 getToLevel1Education1($index = null)
 * @method AbstractCRVacancyEducation setToLevel1Education2() setToLevel1Education2(array|CRDataNode $value)
 * @method CRDataNode getToLevel1Education2 getToLevel1Education2($index = null)
 * @method AbstractCRVacancyEducation setToLevel1Education3() setToLevel1Education3(array|CRDataNode $value)
 * @method CRDataNode getToLevel1Education3 getToLevel1Education3($index = null)
 */
abstract class AbstractCRVacancyEducation extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRVacancyEducation';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $vacancyEducationID = null;

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
     * @var CRVacancy
     * @OneToOne (targetEntity="CRVacancy")
     * @mandatory 0
     * @destination_entity CRVacancy
     * @to_many 0
     * @name toVacancy
     */
    public $toVacancy = null;

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

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("vacancyEducationID");
        $entityConfiguration->setName("CRVacancyEducation");
    }
}
