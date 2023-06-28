<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\Wfr1GZeegjdItemModel;
use Przeslijmi\AgileDataWfrSystemPlug\Models\Wfr1GZeegjdCollection;
use Przeslijmi\AgileDataWfrSystemPlug\Models\Wfr1GZeegjdItem;
use Przeslijmi\Shortquery\Data\Instance;
use Przeslijmi\Shortquery\Exceptions\Data\CollectionSliceNotPossibleException;
use Przeslijmi\Shortquery\Tools\InstancesFactory;
use stdClass;

/**
 * ShortQuery Instance Core class for Wfr1GZeegjdItem Model.
 *
 * This is a `<shortquery-role:instance-core>`.
 */
class Wfr1GZeegjdItemCore extends Instance
{

    /**
     * Field `id`.
     *
     * @var integer
     */
    private $id;

    /**
     * Field `year`.
     *
     * @var null|integer
     */
    private $year;

    /**
     * Field `quarter`.
     *
     * @var null|integer
     */
    private $quarter;

    /**
     * Field `pf_fund`.
     *
     * @var null|float
     */
    private $pfFund;

    /**
     * Field `mfp_fund`.
     *
     * @var null|float
     */
    private $mfpFund;

    /**
     * Field `pf_contractual_interest`.
     *
     * @var null|float
     */
    private $pfContractualInterest;

    /**
     * Field `mfp_contractual_interest`.
     *
     * @var null|float
     */
    private $mfpContractualInterest;

    /**
     * Field `pf_overdue_debt`.
     *
     * @var null|float
     */
    private $pfOverdueDebt;

    /**
     * Field `mfp_overdue_debt`.
     *
     * @var null|float
     */
    private $mfpOverdueDebt;

    /**
     * Field `pf_fund_total`.
     *
     * @var null|float
     */
    private $pfFundTotal;

    /**
     * Field `mfp_fund_total`.
     *
     * @var null|float
     */
    private $mfpFundTotal;

    /**
     * Field `costs`.
     *
     * @var null|float
     */
    private $costs;

    /**
     * Field `total_sum`.
     *
     * @var null|float
     */
    private $totalSum;

    /**
     * Field `monitoring_card_id`.
     *
     * @var null|integer
     */
    private $monitoringCardId;

    /**
     * Field `comment`.
     *
     * @var null|string
     */
    private $comment;

    /**
     * Constructor.
     *
     * @param string $database Optional, `null`. In which database this field is defined.
     */
    public function __construct(?string $database = null)
    {

        // Get model Instance.
        $this->model = Wfr1GZeegjdItemModel::getInstance();

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
        if (isset($inject['year']) === true && $inject['year'] !== null) {
            $this->year = (int) $inject['year'];
        }
        if (isset($inject['quarter']) === true && $inject['quarter'] !== null) {
            $this->quarter = (int) $inject['quarter'];
        }
        if (isset($inject['pf_fund']) === true && $inject['pf_fund'] !== null) {
            $this->pfFund = (float) $inject['pf_fund'];
        }
        if (isset($inject['mfp_fund']) === true && $inject['mfp_fund'] !== null) {
            $this->mfpFund = (float) $inject['mfp_fund'];
        }
        if (isset($inject['pf_contractual_interest']) === true && $inject['pf_contractual_interest'] !== null) {
            $this->pfContractualInterest = (float) $inject['pf_contractual_interest'];
        }
        if (isset($inject['mfp_contractual_interest']) === true && $inject['mfp_contractual_interest'] !== null) {
            $this->mfpContractualInterest = (float) $inject['mfp_contractual_interest'];
        }
        if (isset($inject['pf_overdue_debt']) === true && $inject['pf_overdue_debt'] !== null) {
            $this->pfOverdueDebt = (float) $inject['pf_overdue_debt'];
        }
        if (isset($inject['mfp_overdue_debt']) === true && $inject['mfp_overdue_debt'] !== null) {
            $this->mfpOverdueDebt = (float) $inject['mfp_overdue_debt'];
        }
        if (isset($inject['pf_fund_total']) === true && $inject['pf_fund_total'] !== null) {
            $this->pfFundTotal = (float) $inject['pf_fund_total'];
        }
        if (isset($inject['mfp_fund_total']) === true && $inject['mfp_fund_total'] !== null) {
            $this->mfpFundTotal = (float) $inject['mfp_fund_total'];
        }
        if (isset($inject['costs']) === true && $inject['costs'] !== null) {
            $this->costs = (float) $inject['costs'];
        }
        if (isset($inject['total_sum']) === true && $inject['total_sum'] !== null) {
            $this->totalSum = (float) $inject['total_sum'];
        }
        if (isset($inject['monitoring_card_id']) === true && $inject['monitoring_card_id'] !== null) {
            $this->monitoringCardId = (int) $inject['monitoring_card_id'];
        }
        if (isset($inject['comment']) === true && $inject['comment'] !== null) {
            $this->comment = (string) $inject['comment'];
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
     * @return Wfr1GZeegjdItem
     */
    public function setId(int $id): Wfr1GZeegjdItem
    {

        return $this->setCoreId($id);
    }

    /**
     * Core setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setCoreId(int $id): Wfr1GZeegjdItem
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
     * Getter for `year` field value.
     *
     * @return null|integer
     */
    public function getYear(): ?int
    {

        return $this->getCoreYear(...func_get_args());
    }

    /**
     * Core getter for `year` field value.
     *
     * @return null|integer
     */
    public function getCoreYear(): ?int
    {

        return $this->year;
    }


    /**
     * Setter for `year` field value.
     *
     * @param null|integer $year Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setYear(?int $year): Wfr1GZeegjdItem
    {

        return $this->setCoreYear($year);
    }

    /**
     * Core setter for `year` field value.
     *
     * @param null|integer $year Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setCoreYear(?int $year): Wfr1GZeegjdItem
    {

        // Test value.
        $this->grabField('year')->isValueValid($year);

        // If there is nothing to be changed.
        if ($this->year === $year) {
            return $this;
        }

        // Save.
        $this->year = $year;

        // Note that was set.
        $this->setFields[]     = 'year';
        $this->changedFields[] = 'year';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['year']) === false) {
            $this->fieldsValuesHistory['year'] = [];
        }
        $this->fieldsValuesHistory['year'][] = $year;

        return $this;
    }

    /**
     * Getter for `quarter` field value.
     *
     * @return null|integer
     */
    public function getQuarter(): ?int
    {

        return $this->getCoreQuarter(...func_get_args());
    }

    /**
     * Core getter for `quarter` field value.
     *
     * @return null|integer
     */
    public function getCoreQuarter(): ?int
    {

        return $this->quarter;
    }


    /**
     * Setter for `quarter` field value.
     *
     * @param null|integer $quarter Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setQuarter(?int $quarter): Wfr1GZeegjdItem
    {

        return $this->setCoreQuarter($quarter);
    }

    /**
     * Core setter for `quarter` field value.
     *
     * @param null|integer $quarter Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setCoreQuarter(?int $quarter): Wfr1GZeegjdItem
    {

        // Test value.
        $this->grabField('quarter')->isValueValid($quarter);

        // If there is nothing to be changed.
        if ($this->quarter === $quarter) {
            return $this;
        }

        // Save.
        $this->quarter = $quarter;

        // Note that was set.
        $this->setFields[]     = 'quarter';
        $this->changedFields[] = 'quarter';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['quarter']) === false) {
            $this->fieldsValuesHistory['quarter'] = [];
        }
        $this->fieldsValuesHistory['quarter'][] = $quarter;

        return $this;
    }

    /**
     * Getter for `pf_fund` field value.
     *
     * @return null|float
     */
    public function getPfFund(): ?float
    {

        return $this->getCorePfFund(...func_get_args());
    }

    /**
     * Core getter for `pf_fund` field value.
     *
     * @return null|float
     */
    public function getCorePfFund(): ?float
    {

        return $this->pfFund;
    }


    /**
     * Setter for `pf_fund` field value.
     *
     * @param null|float $pfFund Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setPfFund(?float $pfFund): Wfr1GZeegjdItem
    {

        return $this->setCorePfFund($pfFund);
    }

    /**
     * Core setter for `pf_fund` field value.
     *
     * @param null|float $pfFund Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setCorePfFund(?float $pfFund): Wfr1GZeegjdItem
    {

        // Test value.
        $this->grabField('pf_fund')->isValueValid($pfFund);

        // If there is nothing to be changed.
        if (
            $this->pfFund === $pfFund
            || (string) $this->pfFund === (string) $pfFund
        ) {
            return $this;
        }

        // Save.
        $this->pfFund = $pfFund;

        // Note that was set.
        $this->setFields[]     = 'pf_fund';
        $this->changedFields[] = 'pf_fund';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['pf_fund']) === false) {
            $this->fieldsValuesHistory['pf_fund'] = [];
        }
        $this->fieldsValuesHistory['pf_fund'][] = $pfFund;

        return $this;
    }

    /**
     * Getter for `mfp_fund` field value.
     *
     * @return null|float
     */
    public function getMfpFund(): ?float
    {

        return $this->getCoreMfpFund(...func_get_args());
    }

    /**
     * Core getter for `mfp_fund` field value.
     *
     * @return null|float
     */
    public function getCoreMfpFund(): ?float
    {

        return $this->mfpFund;
    }


    /**
     * Setter for `mfp_fund` field value.
     *
     * @param null|float $mfpFund Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setMfpFund(?float $mfpFund): Wfr1GZeegjdItem
    {

        return $this->setCoreMfpFund($mfpFund);
    }

    /**
     * Core setter for `mfp_fund` field value.
     *
     * @param null|float $mfpFund Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setCoreMfpFund(?float $mfpFund): Wfr1GZeegjdItem
    {

        // Test value.
        $this->grabField('mfp_fund')->isValueValid($mfpFund);

        // If there is nothing to be changed.
        if (
            $this->mfpFund === $mfpFund
            || (string) $this->mfpFund === (string) $mfpFund
        ) {
            return $this;
        }

        // Save.
        $this->mfpFund = $mfpFund;

        // Note that was set.
        $this->setFields[]     = 'mfp_fund';
        $this->changedFields[] = 'mfp_fund';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['mfp_fund']) === false) {
            $this->fieldsValuesHistory['mfp_fund'] = [];
        }
        $this->fieldsValuesHistory['mfp_fund'][] = $mfpFund;

        return $this;
    }

    /**
     * Getter for `pf_contractual_interest` field value.
     *
     * @return null|float
     */
    public function getPfContractualInterest(): ?float
    {

        return $this->getCorePfContractualInterest(...func_get_args());
    }

    /**
     * Core getter for `pf_contractual_interest` field value.
     *
     * @return null|float
     */
    public function getCorePfContractualInterest(): ?float
    {

        return $this->pfContractualInterest;
    }


    /**
     * Setter for `pf_contractual_interest` field value.
     *
     * @param null|float $pfContractualInterest Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setPfContractualInterest(?float $pfContractualInterest): Wfr1GZeegjdItem
    {

        return $this->setCorePfContractualInterest($pfContractualInterest);
    }

    /**
     * Core setter for `pf_contractual_interest` field value.
     *
     * @param null|float $pfContractualInterest Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setCorePfContractualInterest(?float $pfContractualInterest): Wfr1GZeegjdItem
    {

        // Test value.
        $this->grabField('pf_contractual_interest')->isValueValid($pfContractualInterest);

        // If there is nothing to be changed.
        if (
            $this->pfContractualInterest === $pfContractualInterest
            || (string) $this->pfContractualInterest === (string) $pfContractualInterest
        ) {
            return $this;
        }

        // Save.
        $this->pfContractualInterest = $pfContractualInterest;

        // Note that was set.
        $this->setFields[]     = 'pf_contractual_interest';
        $this->changedFields[] = 'pf_contractual_interest';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['pf_contractual_interest']) === false) {
            $this->fieldsValuesHistory['pf_contractual_interest'] = [];
        }
        $this->fieldsValuesHistory['pf_contractual_interest'][] = $pfContractualInterest;

        return $this;
    }

    /**
     * Getter for `mfp_contractual_interest` field value.
     *
     * @return null|float
     */
    public function getMfpContractualInterest(): ?float
    {

        return $this->getCoreMfpContractualInterest(...func_get_args());
    }

    /**
     * Core getter for `mfp_contractual_interest` field value.
     *
     * @return null|float
     */
    public function getCoreMfpContractualInterest(): ?float
    {

        return $this->mfpContractualInterest;
    }


    /**
     * Setter for `mfp_contractual_interest` field value.
     *
     * @param null|float $mfpContractualInterest Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setMfpContractualInterest(?float $mfpContractualInterest): Wfr1GZeegjdItem
    {

        return $this->setCoreMfpContractualInterest($mfpContractualInterest);
    }

    /**
     * Core setter for `mfp_contractual_interest` field value.
     *
     * @param null|float $mfpContractualInterest Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setCoreMfpContractualInterest(?float $mfpContractualInterest): Wfr1GZeegjdItem
    {

        // Test value.
        $this->grabField('mfp_contractual_interest')->isValueValid($mfpContractualInterest);

        // If there is nothing to be changed.
        if (
            $this->mfpContractualInterest === $mfpContractualInterest
            || (string) $this->mfpContractualInterest === (string) $mfpContractualInterest
        ) {
            return $this;
        }

        // Save.
        $this->mfpContractualInterest = $mfpContractualInterest;

        // Note that was set.
        $this->setFields[]     = 'mfp_contractual_interest';
        $this->changedFields[] = 'mfp_contractual_interest';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['mfp_contractual_interest']) === false) {
            $this->fieldsValuesHistory['mfp_contractual_interest'] = [];
        }
        $this->fieldsValuesHistory['mfp_contractual_interest'][] = $mfpContractualInterest;

        return $this;
    }

    /**
     * Getter for `pf_overdue_debt` field value.
     *
     * @return null|float
     */
    public function getPfOverdueDebt(): ?float
    {

        return $this->getCorePfOverdueDebt(...func_get_args());
    }

    /**
     * Core getter for `pf_overdue_debt` field value.
     *
     * @return null|float
     */
    public function getCorePfOverdueDebt(): ?float
    {

        return $this->pfOverdueDebt;
    }


    /**
     * Setter for `pf_overdue_debt` field value.
     *
     * @param null|float $pfOverdueDebt Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setPfOverdueDebt(?float $pfOverdueDebt): Wfr1GZeegjdItem
    {

        return $this->setCorePfOverdueDebt($pfOverdueDebt);
    }

    /**
     * Core setter for `pf_overdue_debt` field value.
     *
     * @param null|float $pfOverdueDebt Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setCorePfOverdueDebt(?float $pfOverdueDebt): Wfr1GZeegjdItem
    {

        // Test value.
        $this->grabField('pf_overdue_debt')->isValueValid($pfOverdueDebt);

        // If there is nothing to be changed.
        if (
            $this->pfOverdueDebt === $pfOverdueDebt
            || (string) $this->pfOverdueDebt === (string) $pfOverdueDebt
        ) {
            return $this;
        }

        // Save.
        $this->pfOverdueDebt = $pfOverdueDebt;

        // Note that was set.
        $this->setFields[]     = 'pf_overdue_debt';
        $this->changedFields[] = 'pf_overdue_debt';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['pf_overdue_debt']) === false) {
            $this->fieldsValuesHistory['pf_overdue_debt'] = [];
        }
        $this->fieldsValuesHistory['pf_overdue_debt'][] = $pfOverdueDebt;

        return $this;
    }

    /**
     * Getter for `mfp_overdue_debt` field value.
     *
     * @return null|float
     */
    public function getMfpOverdueDebt(): ?float
    {

        return $this->getCoreMfpOverdueDebt(...func_get_args());
    }

    /**
     * Core getter for `mfp_overdue_debt` field value.
     *
     * @return null|float
     */
    public function getCoreMfpOverdueDebt(): ?float
    {

        return $this->mfpOverdueDebt;
    }


    /**
     * Setter for `mfp_overdue_debt` field value.
     *
     * @param null|float $mfpOverdueDebt Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setMfpOverdueDebt(?float $mfpOverdueDebt): Wfr1GZeegjdItem
    {

        return $this->setCoreMfpOverdueDebt($mfpOverdueDebt);
    }

    /**
     * Core setter for `mfp_overdue_debt` field value.
     *
     * @param null|float $mfpOverdueDebt Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setCoreMfpOverdueDebt(?float $mfpOverdueDebt): Wfr1GZeegjdItem
    {

        // Test value.
        $this->grabField('mfp_overdue_debt')->isValueValid($mfpOverdueDebt);

        // If there is nothing to be changed.
        if (
            $this->mfpOverdueDebt === $mfpOverdueDebt
            || (string) $this->mfpOverdueDebt === (string) $mfpOverdueDebt
        ) {
            return $this;
        }

        // Save.
        $this->mfpOverdueDebt = $mfpOverdueDebt;

        // Note that was set.
        $this->setFields[]     = 'mfp_overdue_debt';
        $this->changedFields[] = 'mfp_overdue_debt';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['mfp_overdue_debt']) === false) {
            $this->fieldsValuesHistory['mfp_overdue_debt'] = [];
        }
        $this->fieldsValuesHistory['mfp_overdue_debt'][] = $mfpOverdueDebt;

        return $this;
    }

    /**
     * Getter for `pf_fund_total` field value.
     *
     * @return null|float
     */
    public function getPfFundTotal(): ?float
    {

        return $this->getCorePfFundTotal(...func_get_args());
    }

    /**
     * Core getter for `pf_fund_total` field value.
     *
     * @return null|float
     */
    public function getCorePfFundTotal(): ?float
    {

        return $this->pfFundTotal;
    }


    /**
     * Setter for `pf_fund_total` field value.
     *
     * @param null|float $pfFundTotal Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setPfFundTotal(?float $pfFundTotal): Wfr1GZeegjdItem
    {

        return $this->setCorePfFundTotal($pfFundTotal);
    }

    /**
     * Core setter for `pf_fund_total` field value.
     *
     * @param null|float $pfFundTotal Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setCorePfFundTotal(?float $pfFundTotal): Wfr1GZeegjdItem
    {

        // Test value.
        $this->grabField('pf_fund_total')->isValueValid($pfFundTotal);

        // If there is nothing to be changed.
        if (
            $this->pfFundTotal === $pfFundTotal
            || (string) $this->pfFundTotal === (string) $pfFundTotal
        ) {
            return $this;
        }

        // Save.
        $this->pfFundTotal = $pfFundTotal;

        // Note that was set.
        $this->setFields[]     = 'pf_fund_total';
        $this->changedFields[] = 'pf_fund_total';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['pf_fund_total']) === false) {
            $this->fieldsValuesHistory['pf_fund_total'] = [];
        }
        $this->fieldsValuesHistory['pf_fund_total'][] = $pfFundTotal;

        return $this;
    }

    /**
     * Getter for `mfp_fund_total` field value.
     *
     * @return null|float
     */
    public function getMfpFundTotal(): ?float
    {

        return $this->getCoreMfpFundTotal(...func_get_args());
    }

    /**
     * Core getter for `mfp_fund_total` field value.
     *
     * @return null|float
     */
    public function getCoreMfpFundTotal(): ?float
    {

        return $this->mfpFundTotal;
    }


    /**
     * Setter for `mfp_fund_total` field value.
     *
     * @param null|float $mfpFundTotal Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setMfpFundTotal(?float $mfpFundTotal): Wfr1GZeegjdItem
    {

        return $this->setCoreMfpFundTotal($mfpFundTotal);
    }

    /**
     * Core setter for `mfp_fund_total` field value.
     *
     * @param null|float $mfpFundTotal Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setCoreMfpFundTotal(?float $mfpFundTotal): Wfr1GZeegjdItem
    {

        // Test value.
        $this->grabField('mfp_fund_total')->isValueValid($mfpFundTotal);

        // If there is nothing to be changed.
        if (
            $this->mfpFundTotal === $mfpFundTotal
            || (string) $this->mfpFundTotal === (string) $mfpFundTotal
        ) {
            return $this;
        }

        // Save.
        $this->mfpFundTotal = $mfpFundTotal;

        // Note that was set.
        $this->setFields[]     = 'mfp_fund_total';
        $this->changedFields[] = 'mfp_fund_total';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['mfp_fund_total']) === false) {
            $this->fieldsValuesHistory['mfp_fund_total'] = [];
        }
        $this->fieldsValuesHistory['mfp_fund_total'][] = $mfpFundTotal;

        return $this;
    }

    /**
     * Getter for `costs` field value.
     *
     * @return null|float
     */
    public function getCosts(): ?float
    {

        return $this->getCoreCosts(...func_get_args());
    }

    /**
     * Core getter for `costs` field value.
     *
     * @return null|float
     */
    public function getCoreCosts(): ?float
    {

        return $this->costs;
    }


    /**
     * Setter for `costs` field value.
     *
     * @param null|float $costs Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setCosts(?float $costs): Wfr1GZeegjdItem
    {

        return $this->setCoreCosts($costs);
    }

    /**
     * Core setter for `costs` field value.
     *
     * @param null|float $costs Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setCoreCosts(?float $costs): Wfr1GZeegjdItem
    {

        // Test value.
        $this->grabField('costs')->isValueValid($costs);

        // If there is nothing to be changed.
        if (
            $this->costs === $costs
            || (string) $this->costs === (string) $costs
        ) {
            return $this;
        }

        // Save.
        $this->costs = $costs;

        // Note that was set.
        $this->setFields[]     = 'costs';
        $this->changedFields[] = 'costs';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['costs']) === false) {
            $this->fieldsValuesHistory['costs'] = [];
        }
        $this->fieldsValuesHistory['costs'][] = $costs;

        return $this;
    }

    /**
     * Getter for `total_sum` field value.
     *
     * @return null|float
     */
    public function getTotalSum(): ?float
    {

        return $this->getCoreTotalSum(...func_get_args());
    }

    /**
     * Core getter for `total_sum` field value.
     *
     * @return null|float
     */
    public function getCoreTotalSum(): ?float
    {

        return $this->totalSum;
    }


    /**
     * Setter for `total_sum` field value.
     *
     * @param null|float $totalSum Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setTotalSum(?float $totalSum): Wfr1GZeegjdItem
    {

        return $this->setCoreTotalSum($totalSum);
    }

    /**
     * Core setter for `total_sum` field value.
     *
     * @param null|float $totalSum Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setCoreTotalSum(?float $totalSum): Wfr1GZeegjdItem
    {

        // Test value.
        $this->grabField('total_sum')->isValueValid($totalSum);

        // If there is nothing to be changed.
        if (
            $this->totalSum === $totalSum
            || (string) $this->totalSum === (string) $totalSum
        ) {
            return $this;
        }

        // Save.
        $this->totalSum = $totalSum;

        // Note that was set.
        $this->setFields[]     = 'total_sum';
        $this->changedFields[] = 'total_sum';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['total_sum']) === false) {
            $this->fieldsValuesHistory['total_sum'] = [];
        }
        $this->fieldsValuesHistory['total_sum'][] = $totalSum;

        return $this;
    }

    /**
     * Getter for `monitoring_card_id` field value.
     *
     * @return null|integer
     */
    public function getMonitoringCardId(): ?int
    {

        return $this->getCoreMonitoringCardId(...func_get_args());
    }

    /**
     * Core getter for `monitoring_card_id` field value.
     *
     * @return null|integer
     */
    public function getCoreMonitoringCardId(): ?int
    {

        return $this->monitoringCardId;
    }


    /**
     * Setter for `monitoring_card_id` field value.
     *
     * @param null|integer $monitoringCardId Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setMonitoringCardId(?int $monitoringCardId): Wfr1GZeegjdItem
    {

        return $this->setCoreMonitoringCardId($monitoringCardId);
    }

    /**
     * Core setter for `monitoring_card_id` field value.
     *
     * @param null|integer $monitoringCardId Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setCoreMonitoringCardId(?int $monitoringCardId): Wfr1GZeegjdItem
    {

        // Test value.
        $this->grabField('monitoring_card_id')->isValueValid($monitoringCardId);

        // If there is nothing to be changed.
        if ($this->monitoringCardId === $monitoringCardId) {
            return $this;
        }

        // Save.
        $this->monitoringCardId = $monitoringCardId;

        // Note that was set.
        $this->setFields[]     = 'monitoring_card_id';
        $this->changedFields[] = 'monitoring_card_id';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['monitoring_card_id']) === false) {
            $this->fieldsValuesHistory['monitoring_card_id'] = [];
        }
        $this->fieldsValuesHistory['monitoring_card_id'][] = $monitoringCardId;

        return $this;
    }

    /**
     * Getter for `comment` field value.
     *
     * @return null|string
     */
    public function getComment(): ?string
    {

        return $this->getCoreComment(...func_get_args());
    }

    /**
     * Core getter for `comment` field value.
     *
     * @return null|string
     */
    public function getCoreComment(): ?string
    {

        return $this->comment;
    }


    /**
     * Setter for `comment` field value.
     *
     * @param null|string $comment Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setComment(?string $comment): Wfr1GZeegjdItem
    {

        return $this->setCoreComment($comment);
    }

    /**
     * Core setter for `comment` field value.
     *
     * @param null|string $comment Value to be set.
     *
     * @return Wfr1GZeegjdItem
     */
    public function setCoreComment(?string $comment): Wfr1GZeegjdItem
    {

        // Test value.
        $this->grabField('comment')->isValueValid($comment);

        // If there is nothing to be changed.
        if ($this->comment === $comment) {
            return $this;
        }

        // Save.
        $this->comment = $comment;

        // Note that was set.
        $this->setFields[]     = 'comment';
        $this->changedFields[] = 'comment';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['comment']) === false) {
            $this->fieldsValuesHistory['comment'] = [];
        }
        $this->fieldsValuesHistory['comment'][] = $comment;

        return $this;
    }
}
