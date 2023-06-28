<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\Wfr4M9zEyP0ItemModel;
use Przeslijmi\AgileDataWfrSystemPlug\Models\Wfr4M9zEyP0Collection;
use Przeslijmi\AgileDataWfrSystemPlug\Models\Wfr4M9zEyP0Item;
use Przeslijmi\Shortquery\Data\Instance;
use Przeslijmi\Shortquery\Exceptions\Data\CollectionSliceNotPossibleException;
use Przeslijmi\Shortquery\Tools\InstancesFactory;
use stdClass;

/**
 * ShortQuery Instance Core class for Wfr4M9zEyP0Item Model.
 *
 * This is a `<shortquery-role:instance-core>`.
 */
class Wfr4M9zEyP0ItemCore extends Instance
{

    /**
     * Field `id`.
     *
     * @var integer
     */
    private $id;

    /**
     * Field `debtor`.
     *
     * @var null|string
     */
    private $debtor;

    /**
     * Field `liabilities`.
     *
     * @var null|float
     */
    private $liabilities;

    /**
     * Field `security_comment`.
     *
     * @var null|string
     */
    private $securityComment;

    /**
     * Field `unit_agreement_id`.
     *
     * @var null|integer
     */
    private $unitAgreementId;

    /**
     * Field `guarantee_paid_amount`.
     *
     * @var null|float
     */
    private $guaranteePaidAmount;

    /**
     * Field `guarantee_paid_date`.
     *
     * @var null|string
     */
    private $guaranteePaidDate;

    /**
     * Field `loan_maturity_date`.
     *
     * @var null|string
     */
    private $loanMaturityDate;

    /**
     * Field `reguarantee_paid_amount`.
     *
     * @var null|float
     */
    private $reguaranteePaidAmount;

    /**
     * Field `reguarantee_paid_date`.
     *
     * @var null|string
     */
    private $reguaranteePaidDate;

    /**
     * Field `status`.
     *
     * @var null|string
     */
    private $status;

    /**
     * Constructor.
     *
     * @param string $database Optional, `null`. In which database this field is defined.
     */
    public function __construct(?string $database = null)
    {

        // Get model Instance.
        $this->model = Wfr4M9zEyP0ItemModel::getInstance();

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
        if (isset($inject['debtor']) === true && $inject['debtor'] !== null) {
            $this->debtor = (string) $inject['debtor'];
        }
        if (isset($inject['liabilities']) === true && $inject['liabilities'] !== null) {
            $this->liabilities = (float) $inject['liabilities'];
        }
        if (isset($inject['security_comment']) === true && $inject['security_comment'] !== null) {
            $this->securityComment = (string) $inject['security_comment'];
        }
        if (isset($inject['unit_agreement_id']) === true && $inject['unit_agreement_id'] !== null) {
            $this->unitAgreementId = (int) $inject['unit_agreement_id'];
        }
        if (isset($inject['guarantee_paid_amount']) === true && $inject['guarantee_paid_amount'] !== null) {
            $this->guaranteePaidAmount = (float) $inject['guarantee_paid_amount'];
        }
        if (isset($inject['guarantee_paid_date']) === true && $inject['guarantee_paid_date'] !== null) {
            $this->guaranteePaidDate = (string) $inject['guarantee_paid_date'];
        }
        if (isset($inject['loan_maturity_date']) === true && $inject['loan_maturity_date'] !== null) {
            $this->loanMaturityDate = (string) $inject['loan_maturity_date'];
        }
        if (isset($inject['reguarantee_paid_amount']) === true && $inject['reguarantee_paid_amount'] !== null) {
            $this->reguaranteePaidAmount = (float) $inject['reguarantee_paid_amount'];
        }
        if (isset($inject['reguarantee_paid_date']) === true && $inject['reguarantee_paid_date'] !== null) {
            $this->reguaranteePaidDate = (string) $inject['reguarantee_paid_date'];
        }
        if (isset($inject['status']) === true && $inject['status'] !== null) {
            $this->status = (string) $inject['status'];
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
     * @return Wfr4M9zEyP0Item
     */
    public function setId(int $id): Wfr4M9zEyP0Item
    {

        return $this->setCoreId($id);
    }

    /**
     * Core setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return Wfr4M9zEyP0Item
     */
    public function setCoreId(int $id): Wfr4M9zEyP0Item
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
     * Getter for `debtor` field value.
     *
     * @return null|string
     */
    public function getDebtor(): ?string
    {

        return $this->getCoreDebtor(...func_get_args());
    }

    /**
     * Core getter for `debtor` field value.
     *
     * @return null|string
     */
    public function getCoreDebtor(): ?string
    {

        return $this->debtor;
    }


    /**
     * Setter for `debtor` field value.
     *
     * @param null|string $debtor Value to be set.
     *
     * @return Wfr4M9zEyP0Item
     */
    public function setDebtor(?string $debtor): Wfr4M9zEyP0Item
    {

        return $this->setCoreDebtor($debtor);
    }

    /**
     * Core setter for `debtor` field value.
     *
     * @param null|string $debtor Value to be set.
     *
     * @return Wfr4M9zEyP0Item
     */
    public function setCoreDebtor(?string $debtor): Wfr4M9zEyP0Item
    {

        // Test value.
        $this->grabField('debtor')->isValueValid($debtor);

        // If there is nothing to be changed.
        if ($this->debtor === $debtor) {
            return $this;
        }

        // Save.
        $this->debtor = $debtor;

        // Note that was set.
        $this->setFields[]     = 'debtor';
        $this->changedFields[] = 'debtor';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['debtor']) === false) {
            $this->fieldsValuesHistory['debtor'] = [];
        }
        $this->fieldsValuesHistory['debtor'][] = $debtor;

        return $this;
    }

    /**
     * Getter for `liabilities` field value.
     *
     * @return null|float
     */
    public function getLiabilities(): ?float
    {

        return $this->getCoreLiabilities(...func_get_args());
    }

    /**
     * Core getter for `liabilities` field value.
     *
     * @return null|float
     */
    public function getCoreLiabilities(): ?float
    {

        return $this->liabilities;
    }


    /**
     * Setter for `liabilities` field value.
     *
     * @param null|float $liabilities Value to be set.
     *
     * @return Wfr4M9zEyP0Item
     */
    public function setLiabilities(?float $liabilities): Wfr4M9zEyP0Item
    {

        return $this->setCoreLiabilities($liabilities);
    }

    /**
     * Core setter for `liabilities` field value.
     *
     * @param null|float $liabilities Value to be set.
     *
     * @return Wfr4M9zEyP0Item
     */
    public function setCoreLiabilities(?float $liabilities): Wfr4M9zEyP0Item
    {

        // Test value.
        $this->grabField('liabilities')->isValueValid($liabilities);

        // If there is nothing to be changed.
        if (
            $this->liabilities === $liabilities
            || (string) $this->liabilities === (string) $liabilities
        ) {
            return $this;
        }

        // Save.
        $this->liabilities = $liabilities;

        // Note that was set.
        $this->setFields[]     = 'liabilities';
        $this->changedFields[] = 'liabilities';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['liabilities']) === false) {
            $this->fieldsValuesHistory['liabilities'] = [];
        }
        $this->fieldsValuesHistory['liabilities'][] = $liabilities;

        return $this;
    }

    /**
     * Getter for `security_comment` field value.
     *
     * @return null|string
     */
    public function getSecurityComment(): ?string
    {

        return $this->getCoreSecurityComment(...func_get_args());
    }

    /**
     * Core getter for `security_comment` field value.
     *
     * @return null|string
     */
    public function getCoreSecurityComment(): ?string
    {

        return $this->securityComment;
    }


    /**
     * Setter for `security_comment` field value.
     *
     * @param null|string $securityComment Value to be set.
     *
     * @return Wfr4M9zEyP0Item
     */
    public function setSecurityComment(?string $securityComment): Wfr4M9zEyP0Item
    {

        return $this->setCoreSecurityComment($securityComment);
    }

    /**
     * Core setter for `security_comment` field value.
     *
     * @param null|string $securityComment Value to be set.
     *
     * @return Wfr4M9zEyP0Item
     */
    public function setCoreSecurityComment(?string $securityComment): Wfr4M9zEyP0Item
    {

        // Test value.
        $this->grabField('security_comment')->isValueValid($securityComment);

        // If there is nothing to be changed.
        if ($this->securityComment === $securityComment) {
            return $this;
        }

        // Save.
        $this->securityComment = $securityComment;

        // Note that was set.
        $this->setFields[]     = 'security_comment';
        $this->changedFields[] = 'security_comment';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['security_comment']) === false) {
            $this->fieldsValuesHistory['security_comment'] = [];
        }
        $this->fieldsValuesHistory['security_comment'][] = $securityComment;

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
     * @return Wfr4M9zEyP0Item
     */
    public function setUnitAgreementId(?int $unitAgreementId): Wfr4M9zEyP0Item
    {

        return $this->setCoreUnitAgreementId($unitAgreementId);
    }

    /**
     * Core setter for `unit_agreement_id` field value.
     *
     * @param null|integer $unitAgreementId Value to be set.
     *
     * @return Wfr4M9zEyP0Item
     */
    public function setCoreUnitAgreementId(?int $unitAgreementId): Wfr4M9zEyP0Item
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

    /**
     * Getter for `guarantee_paid_amount` field value.
     *
     * @return null|float
     */
    public function getGuaranteePaidAmount(): ?float
    {

        return $this->getCoreGuaranteePaidAmount(...func_get_args());
    }

    /**
     * Core getter for `guarantee_paid_amount` field value.
     *
     * @return null|float
     */
    public function getCoreGuaranteePaidAmount(): ?float
    {

        return $this->guaranteePaidAmount;
    }


    /**
     * Setter for `guarantee_paid_amount` field value.
     *
     * @param null|float $guaranteePaidAmount Value to be set.
     *
     * @return Wfr4M9zEyP0Item
     */
    public function setGuaranteePaidAmount(?float $guaranteePaidAmount): Wfr4M9zEyP0Item
    {

        return $this->setCoreGuaranteePaidAmount($guaranteePaidAmount);
    }

    /**
     * Core setter for `guarantee_paid_amount` field value.
     *
     * @param null|float $guaranteePaidAmount Value to be set.
     *
     * @return Wfr4M9zEyP0Item
     */
    public function setCoreGuaranteePaidAmount(?float $guaranteePaidAmount): Wfr4M9zEyP0Item
    {

        // Test value.
        $this->grabField('guarantee_paid_amount')->isValueValid($guaranteePaidAmount);

        // If there is nothing to be changed.
        if (
            $this->guaranteePaidAmount === $guaranteePaidAmount
            || (string) $this->guaranteePaidAmount === (string) $guaranteePaidAmount
        ) {
            return $this;
        }

        // Save.
        $this->guaranteePaidAmount = $guaranteePaidAmount;

        // Note that was set.
        $this->setFields[]     = 'guarantee_paid_amount';
        $this->changedFields[] = 'guarantee_paid_amount';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['guarantee_paid_amount']) === false) {
            $this->fieldsValuesHistory['guarantee_paid_amount'] = [];
        }
        $this->fieldsValuesHistory['guarantee_paid_amount'][] = $guaranteePaidAmount;

        return $this;
    }

    /**
     * Getter for `guarantee_paid_date` field value.
     *
     * @return null|string
     */
    public function getGuaranteePaidDate(): ?string
    {

        return $this->getCoreGuaranteePaidDate(...func_get_args());
    }

    /**
     * Core getter for `guarantee_paid_date` field value.
     *
     * @return null|string
     */
    public function getCoreGuaranteePaidDate(): ?string
    {

        if (empty($this->guaranteePaidDate) === true) {
            $this->guaranteePaidDate = null;
        }

        if ($this->guaranteePaidDate !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('guarantee_paid_date')
                ->formatToExcel($this->guaranteePaidDate);
        }

        return $this->guaranteePaidDate;
    }


    /**
     * Setter for `guarantee_paid_date` field value.
     *
     * @param null|string $guaranteePaidDate Value to be set.
     *
     * @return Wfr4M9zEyP0Item
     */
    public function setGuaranteePaidDate(?string $guaranteePaidDate): Wfr4M9zEyP0Item
    {

        return $this->setCoreGuaranteePaidDate($guaranteePaidDate);
    }

    /**
     * Core setter for `guarantee_paid_date` field value.
     *
     * @param null|string $guaranteePaidDate Value to be set.
     *
     * @return Wfr4M9zEyP0Item
     */
    public function setCoreGuaranteePaidDate(?string $guaranteePaidDate): Wfr4M9zEyP0Item
    {

        // Test value.
        $this->grabField('guarantee_paid_date')->isValueValid($guaranteePaidDate);

        // If there is nothing to be changed.
        if ($this->guaranteePaidDate === $guaranteePaidDate) {
            return $this;
        }

        // Save.
        $this->guaranteePaidDate = $guaranteePaidDate;

        // Note that was set.
        $this->setFields[]     = 'guarantee_paid_date';
        $this->changedFields[] = 'guarantee_paid_date';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['guarantee_paid_date']) === false) {
            $this->fieldsValuesHistory['guarantee_paid_date'] = [];
        }
        $this->fieldsValuesHistory['guarantee_paid_date'][] = $guaranteePaidDate;

        return $this;
    }

    /**
     * Getter for `loan_maturity_date` field value.
     *
     * @return null|string
     */
    public function getLoanMaturityDate(): ?string
    {

        return $this->getCoreLoanMaturityDate(...func_get_args());
    }

    /**
     * Core getter for `loan_maturity_date` field value.
     *
     * @return null|string
     */
    public function getCoreLoanMaturityDate(): ?string
    {

        if (empty($this->loanMaturityDate) === true) {
            $this->loanMaturityDate = null;
        }

        if ($this->loanMaturityDate !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('loan_maturity_date')
                ->formatToExcel($this->loanMaturityDate);
        }

        return $this->loanMaturityDate;
    }


    /**
     * Setter for `loan_maturity_date` field value.
     *
     * @param null|string $loanMaturityDate Value to be set.
     *
     * @return Wfr4M9zEyP0Item
     */
    public function setLoanMaturityDate(?string $loanMaturityDate): Wfr4M9zEyP0Item
    {

        return $this->setCoreLoanMaturityDate($loanMaturityDate);
    }

    /**
     * Core setter for `loan_maturity_date` field value.
     *
     * @param null|string $loanMaturityDate Value to be set.
     *
     * @return Wfr4M9zEyP0Item
     */
    public function setCoreLoanMaturityDate(?string $loanMaturityDate): Wfr4M9zEyP0Item
    {

        // Test value.
        $this->grabField('loan_maturity_date')->isValueValid($loanMaturityDate);

        // If there is nothing to be changed.
        if ($this->loanMaturityDate === $loanMaturityDate) {
            return $this;
        }

        // Save.
        $this->loanMaturityDate = $loanMaturityDate;

        // Note that was set.
        $this->setFields[]     = 'loan_maturity_date';
        $this->changedFields[] = 'loan_maturity_date';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['loan_maturity_date']) === false) {
            $this->fieldsValuesHistory['loan_maturity_date'] = [];
        }
        $this->fieldsValuesHistory['loan_maturity_date'][] = $loanMaturityDate;

        return $this;
    }

    /**
     * Getter for `reguarantee_paid_amount` field value.
     *
     * @return null|float
     */
    public function getReguaranteePaidAmount(): ?float
    {

        return $this->getCoreReguaranteePaidAmount(...func_get_args());
    }

    /**
     * Core getter for `reguarantee_paid_amount` field value.
     *
     * @return null|float
     */
    public function getCoreReguaranteePaidAmount(): ?float
    {

        return $this->reguaranteePaidAmount;
    }


    /**
     * Setter for `reguarantee_paid_amount` field value.
     *
     * @param null|float $reguaranteePaidAmount Value to be set.
     *
     * @return Wfr4M9zEyP0Item
     */
    public function setReguaranteePaidAmount(?float $reguaranteePaidAmount): Wfr4M9zEyP0Item
    {

        return $this->setCoreReguaranteePaidAmount($reguaranteePaidAmount);
    }

    /**
     * Core setter for `reguarantee_paid_amount` field value.
     *
     * @param null|float $reguaranteePaidAmount Value to be set.
     *
     * @return Wfr4M9zEyP0Item
     */
    public function setCoreReguaranteePaidAmount(?float $reguaranteePaidAmount): Wfr4M9zEyP0Item
    {

        // Test value.
        $this->grabField('reguarantee_paid_amount')->isValueValid($reguaranteePaidAmount);

        // If there is nothing to be changed.
        if (
            $this->reguaranteePaidAmount === $reguaranteePaidAmount
            || (string) $this->reguaranteePaidAmount === (string) $reguaranteePaidAmount
        ) {
            return $this;
        }

        // Save.
        $this->reguaranteePaidAmount = $reguaranteePaidAmount;

        // Note that was set.
        $this->setFields[]     = 'reguarantee_paid_amount';
        $this->changedFields[] = 'reguarantee_paid_amount';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['reguarantee_paid_amount']) === false) {
            $this->fieldsValuesHistory['reguarantee_paid_amount'] = [];
        }
        $this->fieldsValuesHistory['reguarantee_paid_amount'][] = $reguaranteePaidAmount;

        return $this;
    }

    /**
     * Getter for `reguarantee_paid_date` field value.
     *
     * @return null|string
     */
    public function getReguaranteePaidDate(): ?string
    {

        return $this->getCoreReguaranteePaidDate(...func_get_args());
    }

    /**
     * Core getter for `reguarantee_paid_date` field value.
     *
     * @return null|string
     */
    public function getCoreReguaranteePaidDate(): ?string
    {

        if (empty($this->reguaranteePaidDate) === true) {
            $this->reguaranteePaidDate = null;
        }

        if ($this->reguaranteePaidDate !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('reguarantee_paid_date')
                ->formatToExcel($this->reguaranteePaidDate);
        }

        return $this->reguaranteePaidDate;
    }


    /**
     * Setter for `reguarantee_paid_date` field value.
     *
     * @param null|string $reguaranteePaidDate Value to be set.
     *
     * @return Wfr4M9zEyP0Item
     */
    public function setReguaranteePaidDate(?string $reguaranteePaidDate): Wfr4M9zEyP0Item
    {

        return $this->setCoreReguaranteePaidDate($reguaranteePaidDate);
    }

    /**
     * Core setter for `reguarantee_paid_date` field value.
     *
     * @param null|string $reguaranteePaidDate Value to be set.
     *
     * @return Wfr4M9zEyP0Item
     */
    public function setCoreReguaranteePaidDate(?string $reguaranteePaidDate): Wfr4M9zEyP0Item
    {

        // Test value.
        $this->grabField('reguarantee_paid_date')->isValueValid($reguaranteePaidDate);

        // If there is nothing to be changed.
        if ($this->reguaranteePaidDate === $reguaranteePaidDate) {
            return $this;
        }

        // Save.
        $this->reguaranteePaidDate = $reguaranteePaidDate;

        // Note that was set.
        $this->setFields[]     = 'reguarantee_paid_date';
        $this->changedFields[] = 'reguarantee_paid_date';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['reguarantee_paid_date']) === false) {
            $this->fieldsValuesHistory['reguarantee_paid_date'] = [];
        }
        $this->fieldsValuesHistory['reguarantee_paid_date'][] = $reguaranteePaidDate;

        return $this;
    }

    /**
     * Getter for `status` field value.
     *
     * @return null|string
     */
    public function getStatus(): ?string
    {

        return $this->getCoreStatus(...func_get_args());
    }

    /**
     * Core getter for `status` field value.
     *
     * @return null|string
     */
    public function getCoreStatus(): ?string
    {

        return $this->status;
    }


    /**
     * Setter for `status` field value.
     *
     * @param null|string $status Value to be set.
     *
     * @return Wfr4M9zEyP0Item
     */
    public function setStatus(?string $status): Wfr4M9zEyP0Item
    {

        return $this->setCoreStatus($status);
    }

    /**
     * Core setter for `status` field value.
     *
     * @param null|string $status Value to be set.
     *
     * @return Wfr4M9zEyP0Item
     */
    public function setCoreStatus(?string $status): Wfr4M9zEyP0Item
    {

        // Test value.
        $this->grabField('status')->isValueValid($status);

        // If there is nothing to be changed.
        if ($this->status === $status) {
            return $this;
        }

        // Save.
        $this->status = $status;

        // Note that was set.
        $this->setFields[]     = 'status';
        $this->changedFields[] = 'status';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['status']) === false) {
            $this->fieldsValuesHistory['status'] = [];
        }
        $this->fieldsValuesHistory['status'][] = $status;

        return $this;
    }
}
