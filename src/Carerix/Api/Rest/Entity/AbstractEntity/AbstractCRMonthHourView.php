<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CREmployee;
use Carerix\Api\Rest\Entity\CRMonthHourJobView;
use Carerix\Api\Rest\Entity\CRWeekHour;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:58:08 +0000
 * @method AbstractCRMonthHourView setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRMonthHourView setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRMonthHourView setEmployeeID() setEmployeeID(integer $value)
 * @method integer getEmployeeID getEmployeeID()
 * @method AbstractCRMonthHourView setMonthString() setMonthString(string $value)
 * @method string getMonthString getMonthString()
 * @method AbstractCRMonthHourView setIsEmpty() setIsEmpty(integer $value)
 * @method integer getIsEmpty getIsEmpty()
 * @method AbstractCRMonthHourView setToEmployee() setToEmployee(array|CREmployee $value)
 * @method CREmployee getToEmployee getToEmployee($index = null)
 * @method AbstractCRMonthHourView setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 * @method AbstractCRMonthHourView setWeekhoursWithMonthString() setWeekhoursWithMonthString(array|Collection $values)
 * @method Collection|CRWeekHour getWeekhoursWithMonthString getWeekhoursWithMonthString()
 * @method AbstractCRMonthHourView setMonthHourJobViews() setMonthHourJobViews(array|Collection $values)
 * @method Collection|CRMonthHourJobView getMonthHourJobViews getMonthHourJobViews()
 * @method AbstractCRMonthHourView setInvoiceableWeekHours() setInvoiceableWeekHours(array|Collection $values)
 * @method Collection|CRWeekHour getInvoiceableWeekHours getInvoiceableWeekHours()
 */
abstract class AbstractCRMonthHourView extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRMonthHourView';

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
     * @allows_null 0
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
    public $employeeID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 0
     * @width 8
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
    public $isEmpty = null;

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
     * @OneToMany (targetEntity="CRWeekHour")
     * @mandatory 0
     * @destination_entity CRWeekHour
     * @to_many 1
     * @name weekhoursWithMonthString
     */
    public $weekhoursWithMonthString = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRMonthHourJobView")
     * @mandatory 0
     * @destination_entity CRMonthHourJobView
     * @to_many 1
     * @name monthHourJobViews
     */
    public $monthHourJobViews = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRWeekHour")
     * @mandatory 0
     * @destination_entity CRWeekHour
     * @to_many 1
     * @name invoiceableWeekHours
     */
    public $invoiceableWeekHours = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("monthHourViewID");
        $entityConfiguration->setName("CRMonthHourView");
    }
}
