<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\Wfry98gtXStItemModel;
use Przeslijmi\AgileDataWfrSystemPlug\Models\Wfry98gtXStCollection;
use Przeslijmi\AgileDataWfrSystemPlug\Models\Wfry98gtXStItem;
use Przeslijmi\Shortquery\Data\Instance;
use Przeslijmi\Shortquery\Exceptions\Data\CollectionSliceNotPossibleException;
use Przeslijmi\Shortquery\Tools\InstancesFactory;
use stdClass;

/**
 * ShortQuery Instance Core class for Wfry98gtXStItem Model.
 *
 * This is a `<shortquery-role:instance-core>`.
 */
class Wfry98gtXStItemCore extends Instance
{

    /**
     * Field `id`.
     *
     * @var integer
     */
    private $id;

    /**
     * Field `operation_date`.
     *
     * @var null|string
     */
    private $operationDate;

    /**
     * Field `currency_date`.
     *
     * @var null|string
     */
    private $currencyDate;

    /**
     * Field `contractor`.
     *
     * @var null|string
     */
    private $contractor;

    /**
     * Field `operation_name`.
     *
     * @var null|string
     */
    private $operationName;

    /**
     * Field `operation_amount`.
     *
     * @var null|float
     */
    private $operationAmount;

    /**
     * Field `bank_account_id`.
     *
     * @var null|integer
     */
    private $bankAccountId;

    /**
     * Field `accounting_date`.
     *
     * @var null|string
     */
    private $accountingDate;

    /**
     * Field `contractor_iban`.
     *
     * @var null|string
     */
    private $contractorIban;

    /**
     * Constructor.
     *
     * @param string $database Optional, `null`. In which database this field is defined.
     */
    public function __construct(?string $database = null)
    {

        // Get model Instance.
        $this->model = Wfry98gtXStItemModel::getInstance();

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
        if (isset($inject['operation_date']) === true && $inject['operation_date'] !== null) {
            $this->operationDate = (string) $inject['operation_date'];
        }
        if (isset($inject['currency_date']) === true && $inject['currency_date'] !== null) {
            $this->currencyDate = (string) $inject['currency_date'];
        }
        if (isset($inject['contractor']) === true && $inject['contractor'] !== null) {
            $this->contractor = (string) $inject['contractor'];
        }
        if (isset($inject['operation_name']) === true && $inject['operation_name'] !== null) {
            $this->operationName = (string) $inject['operation_name'];
        }
        if (isset($inject['operation_amount']) === true && $inject['operation_amount'] !== null) {
            $this->operationAmount = (float) $inject['operation_amount'];
        }
        if (isset($inject['bank_account_id']) === true && $inject['bank_account_id'] !== null) {
            $this->bankAccountId = (int) $inject['bank_account_id'];
        }
        if (isset($inject['accounting_date']) === true && $inject['accounting_date'] !== null) {
            $this->accountingDate = (string) $inject['accounting_date'];
        }
        if (isset($inject['contractor_iban']) === true && $inject['contractor_iban'] !== null) {
            $this->contractorIban = (string) $inject['contractor_iban'];
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
     * @return Wfry98gtXStItem
     */
    public function setId(int $id): Wfry98gtXStItem
    {

        return $this->setCoreId($id);
    }

    /**
     * Core setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return Wfry98gtXStItem
     */
    public function setCoreId(int $id): Wfry98gtXStItem
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
     * Getter for `operation_date` field value.
     *
     * @return null|string
     */
    public function getOperationDate(): ?string
    {

        return $this->getCoreOperationDate(...func_get_args());
    }

    /**
     * Core getter for `operation_date` field value.
     *
     * @return null|string
     */
    public function getCoreOperationDate(): ?string
    {

        if (empty($this->operationDate) === true) {
            $this->operationDate = null;
        }

        if ($this->operationDate !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('operation_date')
                ->formatToExcel($this->operationDate);
        }

        return $this->operationDate;
    }


    /**
     * Setter for `operation_date` field value.
     *
     * @param null|string $operationDate Value to be set.
     *
     * @return Wfry98gtXStItem
     */
    public function setOperationDate(?string $operationDate): Wfry98gtXStItem
    {

        return $this->setCoreOperationDate($operationDate);
    }

    /**
     * Core setter for `operation_date` field value.
     *
     * @param null|string $operationDate Value to be set.
     *
     * @return Wfry98gtXStItem
     */
    public function setCoreOperationDate(?string $operationDate): Wfry98gtXStItem
    {

        // Test value.
        $this->grabField('operation_date')->isValueValid($operationDate);

        // If there is nothing to be changed.
        if ($this->operationDate === $operationDate) {
            return $this;
        }

        // Save.
        $this->operationDate = $operationDate;

        // Note that was set.
        $this->setFields[]     = 'operation_date';
        $this->changedFields[] = 'operation_date';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['operation_date']) === false) {
            $this->fieldsValuesHistory['operation_date'] = [];
        }
        $this->fieldsValuesHistory['operation_date'][] = $operationDate;

        return $this;
    }

    /**
     * Getter for `currency_date` field value.
     *
     * @return null|string
     */
    public function getCurrencyDate(): ?string
    {

        return $this->getCoreCurrencyDate(...func_get_args());
    }

    /**
     * Core getter for `currency_date` field value.
     *
     * @return null|string
     */
    public function getCoreCurrencyDate(): ?string
    {

        if (empty($this->currencyDate) === true) {
            $this->currencyDate = null;
        }

        if ($this->currencyDate !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('currency_date')
                ->formatToExcel($this->currencyDate);
        }

        return $this->currencyDate;
    }


    /**
     * Setter for `currency_date` field value.
     *
     * @param null|string $currencyDate Value to be set.
     *
     * @return Wfry98gtXStItem
     */
    public function setCurrencyDate(?string $currencyDate): Wfry98gtXStItem
    {

        return $this->setCoreCurrencyDate($currencyDate);
    }

    /**
     * Core setter for `currency_date` field value.
     *
     * @param null|string $currencyDate Value to be set.
     *
     * @return Wfry98gtXStItem
     */
    public function setCoreCurrencyDate(?string $currencyDate): Wfry98gtXStItem
    {

        // Test value.
        $this->grabField('currency_date')->isValueValid($currencyDate);

        // If there is nothing to be changed.
        if ($this->currencyDate === $currencyDate) {
            return $this;
        }

        // Save.
        $this->currencyDate = $currencyDate;

        // Note that was set.
        $this->setFields[]     = 'currency_date';
        $this->changedFields[] = 'currency_date';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['currency_date']) === false) {
            $this->fieldsValuesHistory['currency_date'] = [];
        }
        $this->fieldsValuesHistory['currency_date'][] = $currencyDate;

        return $this;
    }

    /**
     * Getter for `contractor` field value.
     *
     * @return null|string
     */
    public function getContractor(): ?string
    {

        return $this->getCoreContractor(...func_get_args());
    }

    /**
     * Core getter for `contractor` field value.
     *
     * @return null|string
     */
    public function getCoreContractor(): ?string
    {

        return $this->contractor;
    }


    /**
     * Setter for `contractor` field value.
     *
     * @param null|string $contractor Value to be set.
     *
     * @return Wfry98gtXStItem
     */
    public function setContractor(?string $contractor): Wfry98gtXStItem
    {

        return $this->setCoreContractor($contractor);
    }

    /**
     * Core setter for `contractor` field value.
     *
     * @param null|string $contractor Value to be set.
     *
     * @return Wfry98gtXStItem
     */
    public function setCoreContractor(?string $contractor): Wfry98gtXStItem
    {

        // Test value.
        $this->grabField('contractor')->isValueValid($contractor);

        // If there is nothing to be changed.
        if ($this->contractor === $contractor) {
            return $this;
        }

        // Save.
        $this->contractor = $contractor;

        // Note that was set.
        $this->setFields[]     = 'contractor';
        $this->changedFields[] = 'contractor';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['contractor']) === false) {
            $this->fieldsValuesHistory['contractor'] = [];
        }
        $this->fieldsValuesHistory['contractor'][] = $contractor;

        return $this;
    }

    /**
     * Getter for `operation_name` field value.
     *
     * @return null|string
     */
    public function getOperationName(): ?string
    {

        return $this->getCoreOperationName(...func_get_args());
    }

    /**
     * Core getter for `operation_name` field value.
     *
     * @return null|string
     */
    public function getCoreOperationName(): ?string
    {

        return $this->operationName;
    }


    /**
     * Setter for `operation_name` field value.
     *
     * @param null|string $operationName Value to be set.
     *
     * @return Wfry98gtXStItem
     */
    public function setOperationName(?string $operationName): Wfry98gtXStItem
    {

        return $this->setCoreOperationName($operationName);
    }

    /**
     * Core setter for `operation_name` field value.
     *
     * @param null|string $operationName Value to be set.
     *
     * @return Wfry98gtXStItem
     */
    public function setCoreOperationName(?string $operationName): Wfry98gtXStItem
    {

        // Test value.
        $this->grabField('operation_name')->isValueValid($operationName);

        // If there is nothing to be changed.
        if ($this->operationName === $operationName) {
            return $this;
        }

        // Save.
        $this->operationName = $operationName;

        // Note that was set.
        $this->setFields[]     = 'operation_name';
        $this->changedFields[] = 'operation_name';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['operation_name']) === false) {
            $this->fieldsValuesHistory['operation_name'] = [];
        }
        $this->fieldsValuesHistory['operation_name'][] = $operationName;

        return $this;
    }

    /**
     * Getter for `operation_amount` field value.
     *
     * @return null|float
     */
    public function getOperationAmount(): ?float
    {

        return $this->getCoreOperationAmount(...func_get_args());
    }

    /**
     * Core getter for `operation_amount` field value.
     *
     * @return null|float
     */
    public function getCoreOperationAmount(): ?float
    {

        return $this->operationAmount;
    }


    /**
     * Setter for `operation_amount` field value.
     *
     * @param null|float $operationAmount Value to be set.
     *
     * @return Wfry98gtXStItem
     */
    public function setOperationAmount(?float $operationAmount): Wfry98gtXStItem
    {

        return $this->setCoreOperationAmount($operationAmount);
    }

    /**
     * Core setter for `operation_amount` field value.
     *
     * @param null|float $operationAmount Value to be set.
     *
     * @return Wfry98gtXStItem
     */
    public function setCoreOperationAmount(?float $operationAmount): Wfry98gtXStItem
    {

        // Test value.
        $this->grabField('operation_amount')->isValueValid($operationAmount);

        // If there is nothing to be changed.
        if (
            $this->operationAmount === $operationAmount
            || (string) $this->operationAmount === (string) $operationAmount
        ) {
            return $this;
        }

        // Save.
        $this->operationAmount = $operationAmount;

        // Note that was set.
        $this->setFields[]     = 'operation_amount';
        $this->changedFields[] = 'operation_amount';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['operation_amount']) === false) {
            $this->fieldsValuesHistory['operation_amount'] = [];
        }
        $this->fieldsValuesHistory['operation_amount'][] = $operationAmount;

        return $this;
    }

    /**
     * Getter for `bank_account_id` field value.
     *
     * @return null|integer
     */
    public function getBankAccountId(): ?int
    {

        return $this->getCoreBankAccountId(...func_get_args());
    }

    /**
     * Core getter for `bank_account_id` field value.
     *
     * @return null|integer
     */
    public function getCoreBankAccountId(): ?int
    {

        return $this->bankAccountId;
    }


    /**
     * Setter for `bank_account_id` field value.
     *
     * @param null|integer $bankAccountId Value to be set.
     *
     * @return Wfry98gtXStItem
     */
    public function setBankAccountId(?int $bankAccountId): Wfry98gtXStItem
    {

        return $this->setCoreBankAccountId($bankAccountId);
    }

    /**
     * Core setter for `bank_account_id` field value.
     *
     * @param null|integer $bankAccountId Value to be set.
     *
     * @return Wfry98gtXStItem
     */
    public function setCoreBankAccountId(?int $bankAccountId): Wfry98gtXStItem
    {

        // Test value.
        $this->grabField('bank_account_id')->isValueValid($bankAccountId);

        // If there is nothing to be changed.
        if ($this->bankAccountId === $bankAccountId) {
            return $this;
        }

        // Save.
        $this->bankAccountId = $bankAccountId;

        // Note that was set.
        $this->setFields[]     = 'bank_account_id';
        $this->changedFields[] = 'bank_account_id';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['bank_account_id']) === false) {
            $this->fieldsValuesHistory['bank_account_id'] = [];
        }
        $this->fieldsValuesHistory['bank_account_id'][] = $bankAccountId;

        return $this;
    }

    /**
     * Getter for `accounting_date` field value.
     *
     * @return null|string
     */
    public function getAccountingDate(): ?string
    {

        return $this->getCoreAccountingDate(...func_get_args());
    }

    /**
     * Core getter for `accounting_date` field value.
     *
     * @return null|string
     */
    public function getCoreAccountingDate(): ?string
    {

        if (empty($this->accountingDate) === true) {
            $this->accountingDate = null;
        }

        if ($this->accountingDate !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('accounting_date')
                ->formatToExcel($this->accountingDate);
        }

        return $this->accountingDate;
    }


    /**
     * Setter for `accounting_date` field value.
     *
     * @param null|string $accountingDate Value to be set.
     *
     * @return Wfry98gtXStItem
     */
    public function setAccountingDate(?string $accountingDate): Wfry98gtXStItem
    {

        return $this->setCoreAccountingDate($accountingDate);
    }

    /**
     * Core setter for `accounting_date` field value.
     *
     * @param null|string $accountingDate Value to be set.
     *
     * @return Wfry98gtXStItem
     */
    public function setCoreAccountingDate(?string $accountingDate): Wfry98gtXStItem
    {

        // Test value.
        $this->grabField('accounting_date')->isValueValid($accountingDate);

        // If there is nothing to be changed.
        if ($this->accountingDate === $accountingDate) {
            return $this;
        }

        // Save.
        $this->accountingDate = $accountingDate;

        // Note that was set.
        $this->setFields[]     = 'accounting_date';
        $this->changedFields[] = 'accounting_date';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['accounting_date']) === false) {
            $this->fieldsValuesHistory['accounting_date'] = [];
        }
        $this->fieldsValuesHistory['accounting_date'][] = $accountingDate;

        return $this;
    }

    /**
     * Getter for `contractor_iban` field value.
     *
     * @return null|string
     */
    public function getContractorIban(): ?string
    {

        return $this->getCoreContractorIban(...func_get_args());
    }

    /**
     * Core getter for `contractor_iban` field value.
     *
     * @return null|string
     */
    public function getCoreContractorIban(): ?string
    {

        return $this->contractorIban;
    }


    /**
     * Setter for `contractor_iban` field value.
     *
     * @param null|string $contractorIban Value to be set.
     *
     * @return Wfry98gtXStItem
     */
    public function setContractorIban(?string $contractorIban): Wfry98gtXStItem
    {

        return $this->setCoreContractorIban($contractorIban);
    }

    /**
     * Core setter for `contractor_iban` field value.
     *
     * @param null|string $contractorIban Value to be set.
     *
     * @return Wfry98gtXStItem
     */
    public function setCoreContractorIban(?string $contractorIban): Wfry98gtXStItem
    {

        // Test value.
        $this->grabField('contractor_iban')->isValueValid($contractorIban);

        // If there is nothing to be changed.
        if ($this->contractorIban === $contractorIban) {
            return $this;
        }

        // Save.
        $this->contractorIban = $contractorIban;

        // Note that was set.
        $this->setFields[]     = 'contractor_iban';
        $this->changedFields[] = 'contractor_iban';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['contractor_iban']) === false) {
            $this->fieldsValuesHistory['contractor_iban'] = [];
        }
        $this->fieldsValuesHistory['contractor_iban'][] = $contractorIban;

        return $this;
    }
}
