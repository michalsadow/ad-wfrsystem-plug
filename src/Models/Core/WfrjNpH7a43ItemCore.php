<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\WfrjNpH7a43ItemModel;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrjNpH7a43Collection;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrjNpH7a43Item;
use Przeslijmi\Shortquery\Data\Instance;
use Przeslijmi\Shortquery\Exceptions\Data\CollectionSliceNotPossibleException;
use Przeslijmi\Shortquery\Tools\InstancesFactory;
use stdClass;

/**
 * ShortQuery Instance Core class for WfrjNpH7a43Item Model.
 *
 * This is a `<shortquery-role:instance-core>`.
 */
class WfrjNpH7a43ItemCore extends Instance
{

    /**
     * Field `id`.
     *
     * @var integer
     */
    private $id;

    /**
     * Field `current_state`.
     *
     * @var null|float
     */
    private $currentState;

    /**
     * Field `planned_state`.
     *
     * @var null|float
     */
    private $plannedState;

    /**
     * Field `current_cost_limit`.
     *
     * @var null|float
     */
    private $currentCostLimit;

    /**
     * Field `planned_cost_limit`.
     *
     * @var null|float
     */
    private $plannedCostLimit;

    /**
     * Field `year`.
     *
     * @var null|integer
     */
    private $year;

    /**
     * Field `date`.
     *
     * @var null|string
     */
    private $date;

    /**
     * Field `operating_agreement_id`.
     *
     * @var null|integer
     */
    private $operatingAgreementId;

    /**
     * Constructor.
     *
     * @param string $database Optional, `null`. In which database this field is defined.
     */
    public function __construct(?string $database = null)
    {

        // Get model Instance.
        $this->model = WfrjNpH7a43ItemModel::getInstance();

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
        if (isset($inject['current_state']) === true && $inject['current_state'] !== null) {
            $this->currentState = (float) $inject['current_state'];
        }
        if (isset($inject['planned_state']) === true && $inject['planned_state'] !== null) {
            $this->plannedState = (float) $inject['planned_state'];
        }
        if (isset($inject['current_cost_limit']) === true && $inject['current_cost_limit'] !== null) {
            $this->currentCostLimit = (float) $inject['current_cost_limit'];
        }
        if (isset($inject['planned_cost_limit']) === true && $inject['planned_cost_limit'] !== null) {
            $this->plannedCostLimit = (float) $inject['planned_cost_limit'];
        }
        if (isset($inject['year']) === true && $inject['year'] !== null) {
            $this->year = (int) $inject['year'];
        }
        if (isset($inject['date']) === true && $inject['date'] !== null) {
            $this->date = (string) $inject['date'];
        }
        if (isset($inject['operating_agreement_id']) === true && $inject['operating_agreement_id'] !== null) {
            $this->operatingAgreementId = (int) $inject['operating_agreement_id'];
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
     * @return WfrjNpH7a43Item
     */
    public function setId(int $id): WfrjNpH7a43Item
    {

        return $this->setCoreId($id);
    }

    /**
     * Core setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return WfrjNpH7a43Item
     */
    public function setCoreId(int $id): WfrjNpH7a43Item
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
     * Getter for `current_state` field value.
     *
     * @return null|float
     */
    public function getCurrentState(): ?float
    {

        return $this->getCoreCurrentState(...func_get_args());
    }

    /**
     * Core getter for `current_state` field value.
     *
     * @return null|float
     */
    public function getCoreCurrentState(): ?float
    {

        return $this->currentState;
    }


    /**
     * Setter for `current_state` field value.
     *
     * @param null|float $currentState Value to be set.
     *
     * @return WfrjNpH7a43Item
     */
    public function setCurrentState(?float $currentState): WfrjNpH7a43Item
    {

        return $this->setCoreCurrentState($currentState);
    }

    /**
     * Core setter for `current_state` field value.
     *
     * @param null|float $currentState Value to be set.
     *
     * @return WfrjNpH7a43Item
     */
    public function setCoreCurrentState(?float $currentState): WfrjNpH7a43Item
    {

        // Test value.
        $this->grabField('current_state')->isValueValid($currentState);

        // If there is nothing to be changed.
        if (
            $this->currentState === $currentState
            || (string) $this->currentState === (string) $currentState
        ) {
            return $this;
        }

        // Save.
        $this->currentState = $currentState;

        // Note that was set.
        $this->setFields[]     = 'current_state';
        $this->changedFields[] = 'current_state';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['current_state']) === false) {
            $this->fieldsValuesHistory['current_state'] = [];
        }
        $this->fieldsValuesHistory['current_state'][] = $currentState;

        return $this;
    }

    /**
     * Getter for `planned_state` field value.
     *
     * @return null|float
     */
    public function getPlannedState(): ?float
    {

        return $this->getCorePlannedState(...func_get_args());
    }

    /**
     * Core getter for `planned_state` field value.
     *
     * @return null|float
     */
    public function getCorePlannedState(): ?float
    {

        return $this->plannedState;
    }


    /**
     * Setter for `planned_state` field value.
     *
     * @param null|float $plannedState Value to be set.
     *
     * @return WfrjNpH7a43Item
     */
    public function setPlannedState(?float $plannedState): WfrjNpH7a43Item
    {

        return $this->setCorePlannedState($plannedState);
    }

    /**
     * Core setter for `planned_state` field value.
     *
     * @param null|float $plannedState Value to be set.
     *
     * @return WfrjNpH7a43Item
     */
    public function setCorePlannedState(?float $plannedState): WfrjNpH7a43Item
    {

        // Test value.
        $this->grabField('planned_state')->isValueValid($plannedState);

        // If there is nothing to be changed.
        if (
            $this->plannedState === $plannedState
            || (string) $this->plannedState === (string) $plannedState
        ) {
            return $this;
        }

        // Save.
        $this->plannedState = $plannedState;

        // Note that was set.
        $this->setFields[]     = 'planned_state';
        $this->changedFields[] = 'planned_state';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['planned_state']) === false) {
            $this->fieldsValuesHistory['planned_state'] = [];
        }
        $this->fieldsValuesHistory['planned_state'][] = $plannedState;

        return $this;
    }

    /**
     * Getter for `current_cost_limit` field value.
     *
     * @return null|float
     */
    public function getCurrentCostLimit(): ?float
    {

        return $this->getCoreCurrentCostLimit(...func_get_args());
    }

    /**
     * Core getter for `current_cost_limit` field value.
     *
     * @return null|float
     */
    public function getCoreCurrentCostLimit(): ?float
    {

        return $this->currentCostLimit;
    }


    /**
     * Setter for `current_cost_limit` field value.
     *
     * @param null|float $currentCostLimit Value to be set.
     *
     * @return WfrjNpH7a43Item
     */
    public function setCurrentCostLimit(?float $currentCostLimit): WfrjNpH7a43Item
    {

        return $this->setCoreCurrentCostLimit($currentCostLimit);
    }

    /**
     * Core setter for `current_cost_limit` field value.
     *
     * @param null|float $currentCostLimit Value to be set.
     *
     * @return WfrjNpH7a43Item
     */
    public function setCoreCurrentCostLimit(?float $currentCostLimit): WfrjNpH7a43Item
    {

        // Test value.
        $this->grabField('current_cost_limit')->isValueValid($currentCostLimit);

        // If there is nothing to be changed.
        if (
            $this->currentCostLimit === $currentCostLimit
            || (string) $this->currentCostLimit === (string) $currentCostLimit
        ) {
            return $this;
        }

        // Save.
        $this->currentCostLimit = $currentCostLimit;

        // Note that was set.
        $this->setFields[]     = 'current_cost_limit';
        $this->changedFields[] = 'current_cost_limit';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['current_cost_limit']) === false) {
            $this->fieldsValuesHistory['current_cost_limit'] = [];
        }
        $this->fieldsValuesHistory['current_cost_limit'][] = $currentCostLimit;

        return $this;
    }

    /**
     * Getter for `planned_cost_limit` field value.
     *
     * @return null|float
     */
    public function getPlannedCostLimit(): ?float
    {

        return $this->getCorePlannedCostLimit(...func_get_args());
    }

    /**
     * Core getter for `planned_cost_limit` field value.
     *
     * @return null|float
     */
    public function getCorePlannedCostLimit(): ?float
    {

        return $this->plannedCostLimit;
    }


    /**
     * Setter for `planned_cost_limit` field value.
     *
     * @param null|float $plannedCostLimit Value to be set.
     *
     * @return WfrjNpH7a43Item
     */
    public function setPlannedCostLimit(?float $plannedCostLimit): WfrjNpH7a43Item
    {

        return $this->setCorePlannedCostLimit($plannedCostLimit);
    }

    /**
     * Core setter for `planned_cost_limit` field value.
     *
     * @param null|float $plannedCostLimit Value to be set.
     *
     * @return WfrjNpH7a43Item
     */
    public function setCorePlannedCostLimit(?float $plannedCostLimit): WfrjNpH7a43Item
    {

        // Test value.
        $this->grabField('planned_cost_limit')->isValueValid($plannedCostLimit);

        // If there is nothing to be changed.
        if (
            $this->plannedCostLimit === $plannedCostLimit
            || (string) $this->plannedCostLimit === (string) $plannedCostLimit
        ) {
            return $this;
        }

        // Save.
        $this->plannedCostLimit = $plannedCostLimit;

        // Note that was set.
        $this->setFields[]     = 'planned_cost_limit';
        $this->changedFields[] = 'planned_cost_limit';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['planned_cost_limit']) === false) {
            $this->fieldsValuesHistory['planned_cost_limit'] = [];
        }
        $this->fieldsValuesHistory['planned_cost_limit'][] = $plannedCostLimit;

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
     * @return WfrjNpH7a43Item
     */
    public function setYear(?int $year): WfrjNpH7a43Item
    {

        return $this->setCoreYear($year);
    }

    /**
     * Core setter for `year` field value.
     *
     * @param null|integer $year Value to be set.
     *
     * @return WfrjNpH7a43Item
     */
    public function setCoreYear(?int $year): WfrjNpH7a43Item
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
     * @return WfrjNpH7a43Item
     */
    public function setDate(?string $date): WfrjNpH7a43Item
    {

        return $this->setCoreDate($date);
    }

    /**
     * Core setter for `date` field value.
     *
     * @param null|string $date Value to be set.
     *
     * @return WfrjNpH7a43Item
     */
    public function setCoreDate(?string $date): WfrjNpH7a43Item
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
     * Getter for `operating_agreement_id` field value.
     *
     * @return null|integer
     */
    public function getOperatingAgreementId(): ?int
    {

        return $this->getCoreOperatingAgreementId(...func_get_args());
    }

    /**
     * Core getter for `operating_agreement_id` field value.
     *
     * @return null|integer
     */
    public function getCoreOperatingAgreementId(): ?int
    {

        return $this->operatingAgreementId;
    }


    /**
     * Setter for `operating_agreement_id` field value.
     *
     * @param null|integer $operatingAgreementId Value to be set.
     *
     * @return WfrjNpH7a43Item
     */
    public function setOperatingAgreementId(?int $operatingAgreementId): WfrjNpH7a43Item
    {

        return $this->setCoreOperatingAgreementId($operatingAgreementId);
    }

    /**
     * Core setter for `operating_agreement_id` field value.
     *
     * @param null|integer $operatingAgreementId Value to be set.
     *
     * @return WfrjNpH7a43Item
     */
    public function setCoreOperatingAgreementId(?int $operatingAgreementId): WfrjNpH7a43Item
    {

        // Test value.
        $this->grabField('operating_agreement_id')->isValueValid($operatingAgreementId);

        // If there is nothing to be changed.
        if ($this->operatingAgreementId === $operatingAgreementId) {
            return $this;
        }

        // Save.
        $this->operatingAgreementId = $operatingAgreementId;

        // Note that was set.
        $this->setFields[]     = 'operating_agreement_id';
        $this->changedFields[] = 'operating_agreement_id';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['operating_agreement_id']) === false) {
            $this->fieldsValuesHistory['operating_agreement_id'] = [];
        }
        $this->fieldsValuesHistory['operating_agreement_id'][] = $operatingAgreementId;

        return $this;
    }
}
