<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\WfrENFCa5aAItemModel;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrENFCa5aACollection;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrENFCa5aAItem;
use Przeslijmi\Shortquery\Data\Instance;
use Przeslijmi\Shortquery\Exceptions\Data\CollectionSliceNotPossibleException;
use Przeslijmi\Shortquery\Tools\InstancesFactory;
use stdClass;

/**
 * ShortQuery Instance Core class for WfrENFCa5aAItem Model.
 *
 * This is a `<shortquery-role:instance-core>`.
 */
class WfrENFCa5aAItemCore extends Instance
{

    /**
     * Field `id`.
     *
     * @var integer
     */
    private $id;

    /**
     * Field `date`.
     *
     * @var null|string
     */
    private $date;

    /**
     * Field `amount`.
     *
     * @var null|float
     */
    private $amount;

    /**
     * Field `unit_agreement_id`.
     *
     * @var null|integer
     */
    private $unitAgreementId;

    /**
     * Constructor.
     *
     * @param string $database Optional, `null`. In which database this field is defined.
     */
    public function __construct(?string $database = null)
    {

        // Get model Instance.
        $this->model = WfrENFCa5aAItemModel::getInstance();

        // Set database if given.
        $this->database = $database;
    }

    /**
     * Fast data injector.
     *
     * @param array $inject Data to be injected to object.
     *
     * @return self
     */
    public function injectData(array $inject): self
    {

        // Inject properties.
        if (isset($inject['id']) === true && $inject['id'] !== null) {
            $this->id = (int) $inject['id'];
        }
        if (isset($inject['date']) === true && $inject['date'] !== null) {
            $this->date = (string) $inject['date'];
        }
        if (isset($inject['amount']) === true && $inject['amount'] !== null) {
            $this->amount = (float) $inject['amount'];
        }
        if (isset($inject['unit_agreement_id']) === true && $inject['unit_agreement_id'] !== null) {
            $this->unitAgreementId = (int) $inject['unit_agreement_id'];
        }

        // Mark all fields set.
        $this->setFields = array_keys($inject);

        return $this;
    }

    /**
     * Returns info if primary key for this record has been given.
     *
     * @return boolean
     */
    public function hasPrimaryKey(): bool
    {

        if ($this->id === null) {
            return false;
        }

        return true;
    }

    /**
     * Resets primary key into null - like the record is not existing in DB.
     *
     * @return self
     */
    protected function resetPrimaryKey(): self
    {

        $this->id = null;

        $noInSet = array_search('id', $this->setFields);

        if (is_int($noInSet) === true) {
            unset($this->setFields[$noInSet]);
        }

        return $this;
    }

    /**
     * Getter for `id` field value.
     *
     * @return integer
     */
    public function getId(): int
    {

        return $this->getCoreId(...func_get_args());
    }

    /**
     * Core getter for `id` field value.
     *
     * @return integer
     */
    public function getCoreId(): int
    {

        return $this->id;
    }


    /**
     * Setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return WfrENFCa5aAItem
     */
    public function setId(int $id): WfrENFCa5aAItem
    {

        return $this->setCoreId($id);
    }

    /**
     * Core setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return WfrENFCa5aAItem
     */
    public function setCoreId(int $id): WfrENFCa5aAItem
    {

        // Test value.
        $this->grabField('id')->isValueValid($id);

        // If there is nothing to be changed.
        if ($this->id === $id) {
            return $this;
        }

        // Save.
        $this->id = $id;

        // Note that was set.
        $this->setFields[]     = 'id';
        $this->changedFields[] = 'id';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['id']) === false) {
            $this->fieldsValuesHistory['id'] = [];
        }
        $this->fieldsValuesHistory['id'][] = $id;

        return $this;
    }

    /**
     * Getter for `date` field value.
     *
     * @return null|string
     */
    public function getDate(): ?string
    {

        return $this->getCoreDate(...func_get_args());
    }

    /**
     * Core getter for `date` field value.
     *
     * @return null|string
     */
    public function getCoreDate(): ?string
    {

        if (empty($this->date) === true) {
            $this->date = null;
        }

        if ($this->date !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('date')
                ->formatToExcel($this->date);
        }

        return $this->date;
    }


    /**
     * Setter for `date` field value.
     *
     * @param null|string $date Value to be set.
     *
     * @return WfrENFCa5aAItem
     */
    public function setDate(?string $date): WfrENFCa5aAItem
    {

        return $this->setCoreDate($date);
    }

    /**
     * Core setter for `date` field value.
     *
     * @param null|string $date Value to be set.
     *
     * @return WfrENFCa5aAItem
     */
    public function setCoreDate(?string $date): WfrENFCa5aAItem
    {

        // Test value.
        $this->grabField('date')->isValueValid($date);

        // If there is nothing to be changed.
        if ($this->date === $date) {
            return $this;
        }

        // Save.
        $this->date = $date;

        // Note that was set.
        $this->setFields[]     = 'date';
        $this->changedFields[] = 'date';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['date']) === false) {
            $this->fieldsValuesHistory['date'] = [];
        }
        $this->fieldsValuesHistory['date'][] = $date;

        return $this;
    }

    /**
     * Getter for `amount` field value.
     *
     * @return null|float
     */
    public function getAmount(): ?float
    {

        return $this->getCoreAmount(...func_get_args());
    }

    /**
     * Core getter for `amount` field value.
     *
     * @return null|float
     */
    public function getCoreAmount(): ?float
    {

        return $this->amount;
    }


    /**
     * Setter for `amount` field value.
     *
     * @param null|float $amount Value to be set.
     *
     * @return WfrENFCa5aAItem
     */
    public function setAmount(?float $amount): WfrENFCa5aAItem
    {

        return $this->setCoreAmount($amount);
    }

    /**
     * Core setter for `amount` field value.
     *
     * @param null|float $amount Value to be set.
     *
     * @return WfrENFCa5aAItem
     */
    public function setCoreAmount(?float $amount): WfrENFCa5aAItem
    {

        // Test value.
        $this->grabField('amount')->isValueValid($amount);

        // If there is nothing to be changed.
        if (
            $this->amount === $amount
            || (string) $this->amount === (string) $amount
        ) {
            return $this;
        }

        // Save.
        $this->amount = $amount;

        // Note that was set.
        $this->setFields[]     = 'amount';
        $this->changedFields[] = 'amount';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['amount']) === false) {
            $this->fieldsValuesHistory['amount'] = [];
        }
        $this->fieldsValuesHistory['amount'][] = $amount;

        return $this;
    }

    /**
     * Getter for `unit_agreement_id` field value.
     *
     * @return null|integer
     */
    public function getUnitAgreementId(): ?int
    {

        return $this->getCoreUnitAgreementId(...func_get_args());
    }

    /**
     * Core getter for `unit_agreement_id` field value.
     *
     * @return null|integer
     */
    public function getCoreUnitAgreementId(): ?int
    {

        return $this->unitAgreementId;
    }


    /**
     * Setter for `unit_agreement_id` field value.
     *
     * @param null|integer $unitAgreementId Value to be set.
     *
     * @return WfrENFCa5aAItem
     */
    public function setUnitAgreementId(?int $unitAgreementId): WfrENFCa5aAItem
    {

        return $this->setCoreUnitAgreementId($unitAgreementId);
    }

    /**
     * Core setter for `unit_agreement_id` field value.
     *
     * @param null|integer $unitAgreementId Value to be set.
     *
     * @return WfrENFCa5aAItem
     */
    public function setCoreUnitAgreementId(?int $unitAgreementId): WfrENFCa5aAItem
    {

        // Test value.
        $this->grabField('unit_agreement_id')->isValueValid($unitAgreementId);

        // If there is nothing to be changed.
        if ($this->unitAgreementId === $unitAgreementId) {
            return $this;
        }

        // Save.
        $this->unitAgreementId = $unitAgreementId;

        // Note that was set.
        $this->setFields[]     = 'unit_agreement_id';
        $this->changedFields[] = 'unit_agreement_id';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['unit_agreement_id']) === false) {
            $this->fieldsValuesHistory['unit_agreement_id'] = [];
        }
        $this->fieldsValuesHistory['unit_agreement_id'][] = $unitAgreementId;

        return $this;
    }
}
