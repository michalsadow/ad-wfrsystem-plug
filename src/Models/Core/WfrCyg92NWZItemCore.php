<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\WfrCyg92NWZItemModel;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrCyg92NWZCollection;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrCyg92NWZItem;
use Przeslijmi\Shortquery\Data\Instance;
use Przeslijmi\Shortquery\Exceptions\Data\CollectionSliceNotPossibleException;
use Przeslijmi\Shortquery\Tools\InstancesFactory;
use stdClass;

/**
 * ShortQuery Instance Core class for WfrCyg92NWZItem Model.
 *
 * This is a `<shortquery-role:instance-core>`.
 */
class WfrCyg92NWZItemCore extends Instance
{

    /**
     * Field `id`.
     *
     * @var integer
     */
    private $id;

    /**
     * Field `salvage_date`.
     *
     * @var null|string
     */
    private $salvageDate;

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
     * Field `salvage_overall_amount`.
     *
     * @var null|float
     */
    private $salvageOverallAmount;

    /**
     * Field `monitoring_card_id`.
     *
     * @var null|integer
     */
    private $monitoringCardId;

    /**
     * Constructor.
     *
     * @param string $database Optional, `null`. In which database this field is defined.
     */
    public function __construct(?string $database = null)
    {

        // Get model Instance.
        $this->model = WfrCyg92NWZItemModel::getInstance();

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
        if (isset($inject['salvage_date']) === true && $inject['salvage_date'] !== null) {
            $this->salvageDate = (string) $inject['salvage_date'];
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
        if (isset($inject['salvage_overall_amount']) === true && $inject['salvage_overall_amount'] !== null) {
            $this->salvageOverallAmount = (float) $inject['salvage_overall_amount'];
        }
        if (isset($inject['monitoring_card_id']) === true && $inject['monitoring_card_id'] !== null) {
            $this->monitoringCardId = (int) $inject['monitoring_card_id'];
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
     * @return WfrCyg92NWZItem
     */
    public function setId(int $id): WfrCyg92NWZItem
    {

        return $this->setCoreId($id);
    }

    /**
     * Core setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return WfrCyg92NWZItem
     */
    public function setCoreId(int $id): WfrCyg92NWZItem
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
     * Getter for `salvage_date` field value.
     *
     * @return null|string
     */
    public function getSalvageDate(): ?string
    {

        return $this->getCoreSalvageDate(...func_get_args());
    }

    /**
     * Core getter for `salvage_date` field value.
     *
     * @return null|string
     */
    public function getCoreSalvageDate(): ?string
    {

        if (empty($this->salvageDate) === true) {
            $this->salvageDate = null;
        }

        if ($this->salvageDate !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('salvage_date')
                ->formatToExcel($this->salvageDate);
        }

        return $this->salvageDate;
    }


    /**
     * Setter for `salvage_date` field value.
     *
     * @param null|string $salvageDate Value to be set.
     *
     * @return WfrCyg92NWZItem
     */
    public function setSalvageDate(?string $salvageDate): WfrCyg92NWZItem
    {

        return $this->setCoreSalvageDate($salvageDate);
    }

    /**
     * Core setter for `salvage_date` field value.
     *
     * @param null|string $salvageDate Value to be set.
     *
     * @return WfrCyg92NWZItem
     */
    public function setCoreSalvageDate(?string $salvageDate): WfrCyg92NWZItem
    {

        // Test value.
        $this->grabField('salvage_date')->isValueValid($salvageDate);

        // If there is nothing to be changed.
        if ($this->salvageDate === $salvageDate) {
            return $this;
        }

        // Save.
        $this->salvageDate = $salvageDate;

        // Note that was set.
        $this->setFields[]     = 'salvage_date';
        $this->changedFields[] = 'salvage_date';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['salvage_date']) === false) {
            $this->fieldsValuesHistory['salvage_date'] = [];
        }
        $this->fieldsValuesHistory['salvage_date'][] = $salvageDate;

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
     * @return WfrCyg92NWZItem
     */
    public function setPfFund(?float $pfFund): WfrCyg92NWZItem
    {

        return $this->setCorePfFund($pfFund);
    }

    /**
     * Core setter for `pf_fund` field value.
     *
     * @param null|float $pfFund Value to be set.
     *
     * @return WfrCyg92NWZItem
     */
    public function setCorePfFund(?float $pfFund): WfrCyg92NWZItem
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
     * @return WfrCyg92NWZItem
     */
    public function setMfpFund(?float $mfpFund): WfrCyg92NWZItem
    {

        return $this->setCoreMfpFund($mfpFund);
    }

    /**
     * Core setter for `mfp_fund` field value.
     *
     * @param null|float $mfpFund Value to be set.
     *
     * @return WfrCyg92NWZItem
     */
    public function setCoreMfpFund(?float $mfpFund): WfrCyg92NWZItem
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
     * @return WfrCyg92NWZItem
     */
    public function setPfContractualInterest(?float $pfContractualInterest): WfrCyg92NWZItem
    {

        return $this->setCorePfContractualInterest($pfContractualInterest);
    }

    /**
     * Core setter for `pf_contractual_interest` field value.
     *
     * @param null|float $pfContractualInterest Value to be set.
     *
     * @return WfrCyg92NWZItem
     */
    public function setCorePfContractualInterest(?float $pfContractualInterest): WfrCyg92NWZItem
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
     * @return WfrCyg92NWZItem
     */
    public function setMfpContractualInterest(?float $mfpContractualInterest): WfrCyg92NWZItem
    {

        return $this->setCoreMfpContractualInterest($mfpContractualInterest);
    }

    /**
     * Core setter for `mfp_contractual_interest` field value.
     *
     * @param null|float $mfpContractualInterest Value to be set.
     *
     * @return WfrCyg92NWZItem
     */
    public function setCoreMfpContractualInterest(?float $mfpContractualInterest): WfrCyg92NWZItem
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
     * @return WfrCyg92NWZItem
     */
    public function setPfOverdueDebt(?float $pfOverdueDebt): WfrCyg92NWZItem
    {

        return $this->setCorePfOverdueDebt($pfOverdueDebt);
    }

    /**
     * Core setter for `pf_overdue_debt` field value.
     *
     * @param null|float $pfOverdueDebt Value to be set.
     *
     * @return WfrCyg92NWZItem
     */
    public function setCorePfOverdueDebt(?float $pfOverdueDebt): WfrCyg92NWZItem
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
     * @return WfrCyg92NWZItem
     */
    public function setMfpOverdueDebt(?float $mfpOverdueDebt): WfrCyg92NWZItem
    {

        return $this->setCoreMfpOverdueDebt($mfpOverdueDebt);
    }

    /**
     * Core setter for `mfp_overdue_debt` field value.
     *
     * @param null|float $mfpOverdueDebt Value to be set.
     *
     * @return WfrCyg92NWZItem
     */
    public function setCoreMfpOverdueDebt(?float $mfpOverdueDebt): WfrCyg92NWZItem
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
     * Getter for `salvage_overall_amount` field value.
     *
     * @return null|float
     */
    public function getSalvageOverallAmount(): ?float
    {

        return $this->getCoreSalvageOverallAmount(...func_get_args());
    }

    /**
     * Core getter for `salvage_overall_amount` field value.
     *
     * @return null|float
     */
    public function getCoreSalvageOverallAmount(): ?float
    {

        return $this->salvageOverallAmount;
    }


    /**
     * Setter for `salvage_overall_amount` field value.
     *
     * @param null|float $salvageOverallAmount Value to be set.
     *
     * @return WfrCyg92NWZItem
     */
    public function setSalvageOverallAmount(?float $salvageOverallAmount): WfrCyg92NWZItem
    {

        return $this->setCoreSalvageOverallAmount($salvageOverallAmount);
    }

    /**
     * Core setter for `salvage_overall_amount` field value.
     *
     * @param null|float $salvageOverallAmount Value to be set.
     *
     * @return WfrCyg92NWZItem
     */
    public function setCoreSalvageOverallAmount(?float $salvageOverallAmount): WfrCyg92NWZItem
    {

        // Test value.
        $this->grabField('salvage_overall_amount')->isValueValid($salvageOverallAmount);

        // If there is nothing to be changed.
        if (
            $this->salvageOverallAmount === $salvageOverallAmount
            || (string) $this->salvageOverallAmount === (string) $salvageOverallAmount
        ) {
            return $this;
        }

        // Save.
        $this->salvageOverallAmount = $salvageOverallAmount;

        // Note that was set.
        $this->setFields[]     = 'salvage_overall_amount';
        $this->changedFields[] = 'salvage_overall_amount';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['salvage_overall_amount']) === false) {
            $this->fieldsValuesHistory['salvage_overall_amount'] = [];
        }
        $this->fieldsValuesHistory['salvage_overall_amount'][] = $salvageOverallAmount;

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
     * @return WfrCyg92NWZItem
     */
    public function setMonitoringCardId(?int $monitoringCardId): WfrCyg92NWZItem
    {

        return $this->setCoreMonitoringCardId($monitoringCardId);
    }

    /**
     * Core setter for `monitoring_card_id` field value.
     *
     * @param null|integer $monitoringCardId Value to be set.
     *
     * @return WfrCyg92NWZItem
     */
    public function setCoreMonitoringCardId(?int $monitoringCardId): WfrCyg92NWZItem
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
}
