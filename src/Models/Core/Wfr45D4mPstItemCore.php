<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\Wfr45D4mPstItemModel;
use Przeslijmi\AgileDataWfrSystemPlug\Models\Wfr45D4mPstCollection;
use Przeslijmi\AgileDataWfrSystemPlug\Models\Wfr45D4mPstItem;
use Przeslijmi\Shortquery\Data\Instance;
use Przeslijmi\Shortquery\Exceptions\Data\CollectionSliceNotPossibleException;
use Przeslijmi\Shortquery\Tools\InstancesFactory;
use stdClass;

/**
 * ShortQuery Instance Core class for Wfr45D4mPstItem Model.
 *
 * This is a `<shortquery-role:instance-core>`.
 */
class Wfr45D4mPstItemCore extends Instance
{

    /**
     * Field `id`.
     *
     * @var integer
     */
    private $id;

    /**
     * Field `contest_number`.
     *
     * @var null|string
     */
    private $contestNumber;

    /**
     * Field `number`.
     *
     * @var null|string
     */
    private $number;

    /**
     * Field `product_type`.
     *
     * @var null|string
     */
    private $productType;

    /**
     * Field `start_date`.
     *
     * @var null|string
     */
    private $startDate;

    /**
     * Field `ob_term_date`.
     *
     * @var null|string
     */
    private $obTermDate;

    /**
     * Field `acceptance_date`.
     *
     * @var null|string
     */
    private $acceptanceDate;

    /**
     * Field `end_date`.
     *
     * @var null|string
     */
    private $endDate;

    /**
     * Field `wallet_period`.
     *
     * @var null|integer
     */
    private $walletPeriod;

    /**
     * Field `unit_agreement_max_length`.
     *
     * @var null|integer
     */
    private $unitAgreementMaxLength;

    /**
     * Field `global_limit`.
     *
     * @var null|float
     */
    private $globalLimit;

    /**
     * Field `beneficiary_amount_limit`.
     *
     * @var null|float
     */
    private $beneficiaryAmountLimit;

    /**
     * Field `obp_percent_cost_limit`.
     *
     * @var null|float
     */
    private $obpPercentCostLimit;

    /**
     * Field `owp_percent_cost_limit`.
     *
     * @var null|float
     */
    private $owpPercentCostLimit;

    /**
     * Field `entity_id`.
     *
     * @var null|integer
     */
    private $entityId;

    /**
     * Constructor.
     *
     * @param string $database Optional, `null`. In which database this field is defined.
     */
    public function __construct(?string $database = null)
    {

        // Get model Instance.
        $this->model = Wfr45D4mPstItemModel::getInstance();

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
        if (isset($inject['contest_number']) === true && $inject['contest_number'] !== null) {
            $this->contestNumber = (string) $inject['contest_number'];
        }
        if (isset($inject['number']) === true && $inject['number'] !== null) {
            $this->number = (string) $inject['number'];
        }
        if (isset($inject['product_type']) === true && $inject['product_type'] !== null) {
            $this->productType = (string) $inject['product_type'];
        }
        if (isset($inject['start_date']) === true && $inject['start_date'] !== null) {
            $this->startDate = (string) $inject['start_date'];
        }
        if (isset($inject['ob_term_date']) === true && $inject['ob_term_date'] !== null) {
            $this->obTermDate = (string) $inject['ob_term_date'];
        }
        if (isset($inject['acceptance_date']) === true && $inject['acceptance_date'] !== null) {
            $this->acceptanceDate = (string) $inject['acceptance_date'];
        }
        if (isset($inject['end_date']) === true && $inject['end_date'] !== null) {
            $this->endDate = (string) $inject['end_date'];
        }
        if (isset($inject['wallet_period']) === true && $inject['wallet_period'] !== null) {
            $this->walletPeriod = (int) $inject['wallet_period'];
        }
        if (isset($inject['unit_agreement_max_length']) === true && $inject['unit_agreement_max_length'] !== null) {
            $this->unitAgreementMaxLength = (int) $inject['unit_agreement_max_length'];
        }
        if (isset($inject['global_limit']) === true && $inject['global_limit'] !== null) {
            $this->globalLimit = (float) $inject['global_limit'];
        }
        if (isset($inject['beneficiary_amount_limit']) === true && $inject['beneficiary_amount_limit'] !== null) {
            $this->beneficiaryAmountLimit = (float) $inject['beneficiary_amount_limit'];
        }
        if (isset($inject['obp_percent_cost_limit']) === true && $inject['obp_percent_cost_limit'] !== null) {
            $this->obpPercentCostLimit = (float) $inject['obp_percent_cost_limit'];
        }
        if (isset($inject['owp_percent_cost_limit']) === true && $inject['owp_percent_cost_limit'] !== null) {
            $this->owpPercentCostLimit = (float) $inject['owp_percent_cost_limit'];
        }
        if (isset($inject['entity_id']) === true && $inject['entity_id'] !== null) {
            $this->entityId = (int) $inject['entity_id'];
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
     * @return Wfr45D4mPstItem
     */
    public function setId(int $id): Wfr45D4mPstItem
    {

        return $this->setCoreId($id);
    }

    /**
     * Core setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setCoreId(int $id): Wfr45D4mPstItem
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
     * Getter for `contest_number` field value.
     *
     * @return null|string
     */
    public function getContestNumber(): ?string
    {

        return $this->getCoreContestNumber(...func_get_args());
    }

    /**
     * Core getter for `contest_number` field value.
     *
     * @return null|string
     */
    public function getCoreContestNumber(): ?string
    {

        return $this->contestNumber;
    }


    /**
     * Setter for `contest_number` field value.
     *
     * @param null|string $contestNumber Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setContestNumber(?string $contestNumber): Wfr45D4mPstItem
    {

        return $this->setCoreContestNumber($contestNumber);
    }

    /**
     * Core setter for `contest_number` field value.
     *
     * @param null|string $contestNumber Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setCoreContestNumber(?string $contestNumber): Wfr45D4mPstItem
    {

        // Test value.
        $this->grabField('contest_number')->isValueValid($contestNumber);

        // If there is nothing to be changed.
        if ($this->contestNumber === $contestNumber) {
            return $this;
        }

        // Save.
        $this->contestNumber = $contestNumber;

        // Note that was set.
        $this->setFields[]     = 'contest_number';
        $this->changedFields[] = 'contest_number';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['contest_number']) === false) {
            $this->fieldsValuesHistory['contest_number'] = [];
        }
        $this->fieldsValuesHistory['contest_number'][] = $contestNumber;

        return $this;
    }

    /**
     * Getter for `number` field value.
     *
     * @return null|string
     */
    public function getNumber(): ?string
    {

        return $this->getCoreNumber(...func_get_args());
    }

    /**
     * Core getter for `number` field value.
     *
     * @return null|string
     */
    public function getCoreNumber(): ?string
    {

        return $this->number;
    }


    /**
     * Setter for `number` field value.
     *
     * @param null|string $number Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setNumber(?string $number): Wfr45D4mPstItem
    {

        return $this->setCoreNumber($number);
    }

    /**
     * Core setter for `number` field value.
     *
     * @param null|string $number Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setCoreNumber(?string $number): Wfr45D4mPstItem
    {

        // Test value.
        $this->grabField('number')->isValueValid($number);

        // If there is nothing to be changed.
        if ($this->number === $number) {
            return $this;
        }

        // Save.
        $this->number = $number;

        // Note that was set.
        $this->setFields[]     = 'number';
        $this->changedFields[] = 'number';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['number']) === false) {
            $this->fieldsValuesHistory['number'] = [];
        }
        $this->fieldsValuesHistory['number'][] = $number;

        return $this;
    }

    /**
     * Getter for `product_type` field value.
     *
     * @return null|string
     */
    public function getProductType(): ?string
    {

        return $this->getCoreProductType(...func_get_args());
    }

    /**
     * Core getter for `product_type` field value.
     *
     * @return null|string
     */
    public function getCoreProductType(): ?string
    {

        return $this->productType;
    }


    /**
     * Setter for `product_type` field value.
     *
     * @param null|string $productType Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setProductType(?string $productType): Wfr45D4mPstItem
    {

        return $this->setCoreProductType($productType);
    }

    /**
     * Core setter for `product_type` field value.
     *
     * @param null|string $productType Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setCoreProductType(?string $productType): Wfr45D4mPstItem
    {

        // Test value.
        $this->grabField('product_type')->isValueValid($productType);

        // If there is nothing to be changed.
        if ($this->productType === $productType) {
            return $this;
        }

        // Save.
        $this->productType = $productType;

        // Note that was set.
        $this->setFields[]     = 'product_type';
        $this->changedFields[] = 'product_type';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['product_type']) === false) {
            $this->fieldsValuesHistory['product_type'] = [];
        }
        $this->fieldsValuesHistory['product_type'][] = $productType;

        return $this;
    }

    /**
     * Getter for `start_date` field value.
     *
     * @return null|string
     */
    public function getStartDate(): ?string
    {

        return $this->getCoreStartDate(...func_get_args());
    }

    /**
     * Core getter for `start_date` field value.
     *
     * @return null|string
     */
    public function getCoreStartDate(): ?string
    {

        if (empty($this->startDate) === true) {
            $this->startDate = null;
        }

        if ($this->startDate !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('start_date')
                ->formatToExcel($this->startDate);
        }

        return $this->startDate;
    }


    /**
     * Setter for `start_date` field value.
     *
     * @param null|string $startDate Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setStartDate(?string $startDate): Wfr45D4mPstItem
    {

        return $this->setCoreStartDate($startDate);
    }

    /**
     * Core setter for `start_date` field value.
     *
     * @param null|string $startDate Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setCoreStartDate(?string $startDate): Wfr45D4mPstItem
    {

        // Test value.
        $this->grabField('start_date')->isValueValid($startDate);

        // If there is nothing to be changed.
        if ($this->startDate === $startDate) {
            return $this;
        }

        // Save.
        $this->startDate = $startDate;

        // Note that was set.
        $this->setFields[]     = 'start_date';
        $this->changedFields[] = 'start_date';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['start_date']) === false) {
            $this->fieldsValuesHistory['start_date'] = [];
        }
        $this->fieldsValuesHistory['start_date'][] = $startDate;

        return $this;
    }

    /**
     * Getter for `ob_term_date` field value.
     *
     * @return null|string
     */
    public function getObTermDate(): ?string
    {

        return $this->getCoreObTermDate(...func_get_args());
    }

    /**
     * Core getter for `ob_term_date` field value.
     *
     * @return null|string
     */
    public function getCoreObTermDate(): ?string
    {

        if (empty($this->obTermDate) === true) {
            $this->obTermDate = null;
        }

        if ($this->obTermDate !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('ob_term_date')
                ->formatToExcel($this->obTermDate);
        }

        return $this->obTermDate;
    }


    /**
     * Setter for `ob_term_date` field value.
     *
     * @param null|string $obTermDate Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setObTermDate(?string $obTermDate): Wfr45D4mPstItem
    {

        return $this->setCoreObTermDate($obTermDate);
    }

    /**
     * Core setter for `ob_term_date` field value.
     *
     * @param null|string $obTermDate Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setCoreObTermDate(?string $obTermDate): Wfr45D4mPstItem
    {

        // Test value.
        $this->grabField('ob_term_date')->isValueValid($obTermDate);

        // If there is nothing to be changed.
        if ($this->obTermDate === $obTermDate) {
            return $this;
        }

        // Save.
        $this->obTermDate = $obTermDate;

        // Note that was set.
        $this->setFields[]     = 'ob_term_date';
        $this->changedFields[] = 'ob_term_date';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['ob_term_date']) === false) {
            $this->fieldsValuesHistory['ob_term_date'] = [];
        }
        $this->fieldsValuesHistory['ob_term_date'][] = $obTermDate;

        return $this;
    }

    /**
     * Getter for `acceptance_date` field value.
     *
     * @return null|string
     */
    public function getAcceptanceDate(): ?string
    {

        return $this->getCoreAcceptanceDate(...func_get_args());
    }

    /**
     * Core getter for `acceptance_date` field value.
     *
     * @return null|string
     */
    public function getCoreAcceptanceDate(): ?string
    {

        if (empty($this->acceptanceDate) === true) {
            $this->acceptanceDate = null;
        }

        if ($this->acceptanceDate !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('acceptance_date')
                ->formatToExcel($this->acceptanceDate);
        }

        return $this->acceptanceDate;
    }


    /**
     * Setter for `acceptance_date` field value.
     *
     * @param null|string $acceptanceDate Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setAcceptanceDate(?string $acceptanceDate): Wfr45D4mPstItem
    {

        return $this->setCoreAcceptanceDate($acceptanceDate);
    }

    /**
     * Core setter for `acceptance_date` field value.
     *
     * @param null|string $acceptanceDate Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setCoreAcceptanceDate(?string $acceptanceDate): Wfr45D4mPstItem
    {

        // Test value.
        $this->grabField('acceptance_date')->isValueValid($acceptanceDate);

        // If there is nothing to be changed.
        if ($this->acceptanceDate === $acceptanceDate) {
            return $this;
        }

        // Save.
        $this->acceptanceDate = $acceptanceDate;

        // Note that was set.
        $this->setFields[]     = 'acceptance_date';
        $this->changedFields[] = 'acceptance_date';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['acceptance_date']) === false) {
            $this->fieldsValuesHistory['acceptance_date'] = [];
        }
        $this->fieldsValuesHistory['acceptance_date'][] = $acceptanceDate;

        return $this;
    }

    /**
     * Getter for `end_date` field value.
     *
     * @return null|string
     */
    public function getEndDate(): ?string
    {

        return $this->getCoreEndDate(...func_get_args());
    }

    /**
     * Core getter for `end_date` field value.
     *
     * @return null|string
     */
    public function getCoreEndDate(): ?string
    {

        if (empty($this->endDate) === true) {
            $this->endDate = null;
        }

        if ($this->endDate !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('end_date')
                ->formatToExcel($this->endDate);
        }

        return $this->endDate;
    }


    /**
     * Setter for `end_date` field value.
     *
     * @param null|string $endDate Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setEndDate(?string $endDate): Wfr45D4mPstItem
    {

        return $this->setCoreEndDate($endDate);
    }

    /**
     * Core setter for `end_date` field value.
     *
     * @param null|string $endDate Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setCoreEndDate(?string $endDate): Wfr45D4mPstItem
    {

        // Test value.
        $this->grabField('end_date')->isValueValid($endDate);

        // If there is nothing to be changed.
        if ($this->endDate === $endDate) {
            return $this;
        }

        // Save.
        $this->endDate = $endDate;

        // Note that was set.
        $this->setFields[]     = 'end_date';
        $this->changedFields[] = 'end_date';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['end_date']) === false) {
            $this->fieldsValuesHistory['end_date'] = [];
        }
        $this->fieldsValuesHistory['end_date'][] = $endDate;

        return $this;
    }

    /**
     * Getter for `wallet_period` field value.
     *
     * @return null|integer
     */
    public function getWalletPeriod(): ?int
    {

        return $this->getCoreWalletPeriod(...func_get_args());
    }

    /**
     * Core getter for `wallet_period` field value.
     *
     * @return null|integer
     */
    public function getCoreWalletPeriod(): ?int
    {

        return $this->walletPeriod;
    }


    /**
     * Setter for `wallet_period` field value.
     *
     * @param null|integer $walletPeriod Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setWalletPeriod(?int $walletPeriod): Wfr45D4mPstItem
    {

        return $this->setCoreWalletPeriod($walletPeriod);
    }

    /**
     * Core setter for `wallet_period` field value.
     *
     * @param null|integer $walletPeriod Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setCoreWalletPeriod(?int $walletPeriod): Wfr45D4mPstItem
    {

        // Test value.
        $this->grabField('wallet_period')->isValueValid($walletPeriod);

        // If there is nothing to be changed.
        if ($this->walletPeriod === $walletPeriod) {
            return $this;
        }

        // Save.
        $this->walletPeriod = $walletPeriod;

        // Note that was set.
        $this->setFields[]     = 'wallet_period';
        $this->changedFields[] = 'wallet_period';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['wallet_period']) === false) {
            $this->fieldsValuesHistory['wallet_period'] = [];
        }
        $this->fieldsValuesHistory['wallet_period'][] = $walletPeriod;

        return $this;
    }

    /**
     * Getter for `unit_agreement_max_length` field value.
     *
     * @return null|integer
     */
    public function getUnitAgreementMaxLength(): ?int
    {

        return $this->getCoreUnitAgreementMaxLength(...func_get_args());
    }

    /**
     * Core getter for `unit_agreement_max_length` field value.
     *
     * @return null|integer
     */
    public function getCoreUnitAgreementMaxLength(): ?int
    {

        return $this->unitAgreementMaxLength;
    }


    /**
     * Setter for `unit_agreement_max_length` field value.
     *
     * @param null|integer $unitAgreementMaxLength Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setUnitAgreementMaxLength(?int $unitAgreementMaxLength): Wfr45D4mPstItem
    {

        return $this->setCoreUnitAgreementMaxLength($unitAgreementMaxLength);
    }

    /**
     * Core setter for `unit_agreement_max_length` field value.
     *
     * @param null|integer $unitAgreementMaxLength Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setCoreUnitAgreementMaxLength(?int $unitAgreementMaxLength): Wfr45D4mPstItem
    {

        // Test value.
        $this->grabField('unit_agreement_max_length')->isValueValid($unitAgreementMaxLength);

        // If there is nothing to be changed.
        if ($this->unitAgreementMaxLength === $unitAgreementMaxLength) {
            return $this;
        }

        // Save.
        $this->unitAgreementMaxLength = $unitAgreementMaxLength;

        // Note that was set.
        $this->setFields[]     = 'unit_agreement_max_length';
        $this->changedFields[] = 'unit_agreement_max_length';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['unit_agreement_max_length']) === false) {
            $this->fieldsValuesHistory['unit_agreement_max_length'] = [];
        }
        $this->fieldsValuesHistory['unit_agreement_max_length'][] = $unitAgreementMaxLength;

        return $this;
    }

    /**
     * Getter for `global_limit` field value.
     *
     * @return null|float
     */
    public function getGlobalLimit(): ?float
    {

        return $this->getCoreGlobalLimit(...func_get_args());
    }

    /**
     * Core getter for `global_limit` field value.
     *
     * @return null|float
     */
    public function getCoreGlobalLimit(): ?float
    {

        return $this->globalLimit;
    }


    /**
     * Setter for `global_limit` field value.
     *
     * @param null|float $globalLimit Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setGlobalLimit(?float $globalLimit): Wfr45D4mPstItem
    {

        return $this->setCoreGlobalLimit($globalLimit);
    }

    /**
     * Core setter for `global_limit` field value.
     *
     * @param null|float $globalLimit Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setCoreGlobalLimit(?float $globalLimit): Wfr45D4mPstItem
    {

        // Test value.
        $this->grabField('global_limit')->isValueValid($globalLimit);

        // If there is nothing to be changed.
        if (
            $this->globalLimit === $globalLimit
            || (string) $this->globalLimit === (string) $globalLimit
        ) {
            return $this;
        }

        // Save.
        $this->globalLimit = $globalLimit;

        // Note that was set.
        $this->setFields[]     = 'global_limit';
        $this->changedFields[] = 'global_limit';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['global_limit']) === false) {
            $this->fieldsValuesHistory['global_limit'] = [];
        }
        $this->fieldsValuesHistory['global_limit'][] = $globalLimit;

        return $this;
    }

    /**
     * Getter for `beneficiary_amount_limit` field value.
     *
     * @return null|float
     */
    public function getBeneficiaryAmountLimit(): ?float
    {

        return $this->getCoreBeneficiaryAmountLimit(...func_get_args());
    }

    /**
     * Core getter for `beneficiary_amount_limit` field value.
     *
     * @return null|float
     */
    public function getCoreBeneficiaryAmountLimit(): ?float
    {

        return $this->beneficiaryAmountLimit;
    }


    /**
     * Setter for `beneficiary_amount_limit` field value.
     *
     * @param null|float $beneficiaryAmountLimit Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setBeneficiaryAmountLimit(?float $beneficiaryAmountLimit): Wfr45D4mPstItem
    {

        return $this->setCoreBeneficiaryAmountLimit($beneficiaryAmountLimit);
    }

    /**
     * Core setter for `beneficiary_amount_limit` field value.
     *
     * @param null|float $beneficiaryAmountLimit Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setCoreBeneficiaryAmountLimit(?float $beneficiaryAmountLimit): Wfr45D4mPstItem
    {

        // Test value.
        $this->grabField('beneficiary_amount_limit')->isValueValid($beneficiaryAmountLimit);

        // If there is nothing to be changed.
        if (
            $this->beneficiaryAmountLimit === $beneficiaryAmountLimit
            || (string) $this->beneficiaryAmountLimit === (string) $beneficiaryAmountLimit
        ) {
            return $this;
        }

        // Save.
        $this->beneficiaryAmountLimit = $beneficiaryAmountLimit;

        // Note that was set.
        $this->setFields[]     = 'beneficiary_amount_limit';
        $this->changedFields[] = 'beneficiary_amount_limit';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['beneficiary_amount_limit']) === false) {
            $this->fieldsValuesHistory['beneficiary_amount_limit'] = [];
        }
        $this->fieldsValuesHistory['beneficiary_amount_limit'][] = $beneficiaryAmountLimit;

        return $this;
    }

    /**
     * Getter for `obp_percent_cost_limit` field value.
     *
     * @return null|float
     */
    public function getObpPercentCostLimit(): ?float
    {

        return $this->getCoreObpPercentCostLimit(...func_get_args());
    }

    /**
     * Core getter for `obp_percent_cost_limit` field value.
     *
     * @return null|float
     */
    public function getCoreObpPercentCostLimit(): ?float
    {

        return $this->obpPercentCostLimit;
    }


    /**
     * Setter for `obp_percent_cost_limit` field value.
     *
     * @param null|float $obpPercentCostLimit Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setObpPercentCostLimit(?float $obpPercentCostLimit): Wfr45D4mPstItem
    {

        return $this->setCoreObpPercentCostLimit($obpPercentCostLimit);
    }

    /**
     * Core setter for `obp_percent_cost_limit` field value.
     *
     * @param null|float $obpPercentCostLimit Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setCoreObpPercentCostLimit(?float $obpPercentCostLimit): Wfr45D4mPstItem
    {

        // Test value.
        $this->grabField('obp_percent_cost_limit')->isValueValid($obpPercentCostLimit);

        // If there is nothing to be changed.
        if (
            $this->obpPercentCostLimit === $obpPercentCostLimit
            || (string) $this->obpPercentCostLimit === (string) $obpPercentCostLimit
        ) {
            return $this;
        }

        // Save.
        $this->obpPercentCostLimit = $obpPercentCostLimit;

        // Note that was set.
        $this->setFields[]     = 'obp_percent_cost_limit';
        $this->changedFields[] = 'obp_percent_cost_limit';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['obp_percent_cost_limit']) === false) {
            $this->fieldsValuesHistory['obp_percent_cost_limit'] = [];
        }
        $this->fieldsValuesHistory['obp_percent_cost_limit'][] = $obpPercentCostLimit;

        return $this;
    }

    /**
     * Getter for `owp_percent_cost_limit` field value.
     *
     * @return null|float
     */
    public function getOwpPercentCostLimit(): ?float
    {

        return $this->getCoreOwpPercentCostLimit(...func_get_args());
    }

    /**
     * Core getter for `owp_percent_cost_limit` field value.
     *
     * @return null|float
     */
    public function getCoreOwpPercentCostLimit(): ?float
    {

        return $this->owpPercentCostLimit;
    }


    /**
     * Setter for `owp_percent_cost_limit` field value.
     *
     * @param null|float $owpPercentCostLimit Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setOwpPercentCostLimit(?float $owpPercentCostLimit): Wfr45D4mPstItem
    {

        return $this->setCoreOwpPercentCostLimit($owpPercentCostLimit);
    }

    /**
     * Core setter for `owp_percent_cost_limit` field value.
     *
     * @param null|float $owpPercentCostLimit Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setCoreOwpPercentCostLimit(?float $owpPercentCostLimit): Wfr45D4mPstItem
    {

        // Test value.
        $this->grabField('owp_percent_cost_limit')->isValueValid($owpPercentCostLimit);

        // If there is nothing to be changed.
        if (
            $this->owpPercentCostLimit === $owpPercentCostLimit
            || (string) $this->owpPercentCostLimit === (string) $owpPercentCostLimit
        ) {
            return $this;
        }

        // Save.
        $this->owpPercentCostLimit = $owpPercentCostLimit;

        // Note that was set.
        $this->setFields[]     = 'owp_percent_cost_limit';
        $this->changedFields[] = 'owp_percent_cost_limit';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['owp_percent_cost_limit']) === false) {
            $this->fieldsValuesHistory['owp_percent_cost_limit'] = [];
        }
        $this->fieldsValuesHistory['owp_percent_cost_limit'][] = $owpPercentCostLimit;

        return $this;
    }

    /**
     * Getter for `entity_id` field value.
     *
     * @return null|integer
     */
    public function getEntityId(): ?int
    {

        return $this->getCoreEntityId(...func_get_args());
    }

    /**
     * Core getter for `entity_id` field value.
     *
     * @return null|integer
     */
    public function getCoreEntityId(): ?int
    {

        return $this->entityId;
    }


    /**
     * Setter for `entity_id` field value.
     *
     * @param null|integer $entityId Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setEntityId(?int $entityId): Wfr45D4mPstItem
    {

        return $this->setCoreEntityId($entityId);
    }

    /**
     * Core setter for `entity_id` field value.
     *
     * @param null|integer $entityId Value to be set.
     *
     * @return Wfr45D4mPstItem
     */
    public function setCoreEntityId(?int $entityId): Wfr45D4mPstItem
    {

        // Test value.
        $this->grabField('entity_id')->isValueValid($entityId);

        // If there is nothing to be changed.
        if ($this->entityId === $entityId) {
            return $this;
        }

        // Save.
        $this->entityId = $entityId;

        // Note that was set.
        $this->setFields[]     = 'entity_id';
        $this->changedFields[] = 'entity_id';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['entity_id']) === false) {
            $this->fieldsValuesHistory['entity_id'] = [];
        }
        $this->fieldsValuesHistory['entity_id'][] = $entityId;

        return $this;
    }
}
