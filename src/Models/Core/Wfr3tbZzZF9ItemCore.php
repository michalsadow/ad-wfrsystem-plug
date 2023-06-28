<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\Wfr3tbZzZF9ItemModel;
use Przeslijmi\AgileDataWfrSystemPlug\Models\Wfr3tbZzZF9Collection;
use Przeslijmi\AgileDataWfrSystemPlug\Models\Wfr3tbZzZF9Item;
use Przeslijmi\Shortquery\Data\Instance;
use Przeslijmi\Shortquery\Exceptions\Data\CollectionSliceNotPossibleException;
use Przeslijmi\Shortquery\Tools\InstancesFactory;
use stdClass;

/**
 * ShortQuery Instance Core class for Wfr3tbZzZF9Item Model.
 *
 * This is a `<shortquery-role:instance-core>`.
 */
class Wfr3tbZzZF9ItemCore extends Instance
{

    /**
     * Field `id`.
     *
     * @var integer
     */
    private $id;

    /**
     * Field `symbol`.
     *
     * @var null|string
     */
    private $symbol;

    /**
     * Field `comment`.
     *
     * @var null|string
     */
    private $comment;

    /**
     * Field `action_date`.
     *
     * @var null|string
     */
    private $actionDate;

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
        $this->model = Wfr3tbZzZF9ItemModel::getInstance();

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
        if (isset($inject['symbol']) === true && $inject['symbol'] !== null) {
            $this->symbol = (string) $inject['symbol'];
        }
        if (isset($inject['comment']) === true && $inject['comment'] !== null) {
            $this->comment = (string) $inject['comment'];
        }
        if (isset($inject['action_date']) === true && $inject['action_date'] !== null) {
            $this->actionDate = (string) $inject['action_date'];
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
     * @return Wfr3tbZzZF9Item
     */
    public function setId(int $id): Wfr3tbZzZF9Item
    {

        return $this->setCoreId($id);
    }

    /**
     * Core setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return Wfr3tbZzZF9Item
     */
    public function setCoreId(int $id): Wfr3tbZzZF9Item
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
     * Getter for `symbol` field value.
     *
     * @return null|string
     */
    public function getSymbol(): ?string
    {

        return $this->getCoreSymbol(...func_get_args());
    }

    /**
     * Core getter for `symbol` field value.
     *
     * @return null|string
     */
    public function getCoreSymbol(): ?string
    {

        return $this->symbol;
    }


    /**
     * Setter for `symbol` field value.
     *
     * @param null|string $symbol Value to be set.
     *
     * @return Wfr3tbZzZF9Item
     */
    public function setSymbol(?string $symbol): Wfr3tbZzZF9Item
    {

        return $this->setCoreSymbol($symbol);
    }

    /**
     * Core setter for `symbol` field value.
     *
     * @param null|string $symbol Value to be set.
     *
     * @return Wfr3tbZzZF9Item
     */
    public function setCoreSymbol(?string $symbol): Wfr3tbZzZF9Item
    {

        // Test value.
        $this->grabField('symbol')->isValueValid($symbol);

        // If there is nothing to be changed.
        if ($this->symbol === $symbol) {
            return $this;
        }

        // Save.
        $this->symbol = $symbol;

        // Note that was set.
        $this->setFields[]     = 'symbol';
        $this->changedFields[] = 'symbol';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['symbol']) === false) {
            $this->fieldsValuesHistory['symbol'] = [];
        }
        $this->fieldsValuesHistory['symbol'][] = $symbol;

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
     * @return Wfr3tbZzZF9Item
     */
    public function setComment(?string $comment): Wfr3tbZzZF9Item
    {

        return $this->setCoreComment($comment);
    }

    /**
     * Core setter for `comment` field value.
     *
     * @param null|string $comment Value to be set.
     *
     * @return Wfr3tbZzZF9Item
     */
    public function setCoreComment(?string $comment): Wfr3tbZzZF9Item
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

    /**
     * Getter for `action_date` field value.
     *
     * @return null|string
     */
    public function getActionDate(): ?string
    {

        return $this->getCoreActionDate(...func_get_args());
    }

    /**
     * Core getter for `action_date` field value.
     *
     * @return null|string
     */
    public function getCoreActionDate(): ?string
    {

        if (empty($this->actionDate) === true) {
            $this->actionDate = null;
        }

        if ($this->actionDate !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('action_date')
                ->formatToExcel($this->actionDate);
        }

        return $this->actionDate;
    }


    /**
     * Setter for `action_date` field value.
     *
     * @param null|string $actionDate Value to be set.
     *
     * @return Wfr3tbZzZF9Item
     */
    public function setActionDate(?string $actionDate): Wfr3tbZzZF9Item
    {

        return $this->setCoreActionDate($actionDate);
    }

    /**
     * Core setter for `action_date` field value.
     *
     * @param null|string $actionDate Value to be set.
     *
     * @return Wfr3tbZzZF9Item
     */
    public function setCoreActionDate(?string $actionDate): Wfr3tbZzZF9Item
    {

        // Test value.
        $this->grabField('action_date')->isValueValid($actionDate);

        // If there is nothing to be changed.
        if ($this->actionDate === $actionDate) {
            return $this;
        }

        // Save.
        $this->actionDate = $actionDate;

        // Note that was set.
        $this->setFields[]     = 'action_date';
        $this->changedFields[] = 'action_date';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['action_date']) === false) {
            $this->fieldsValuesHistory['action_date'] = [];
        }
        $this->fieldsValuesHistory['action_date'][] = $actionDate;

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
     * @return Wfr3tbZzZF9Item
     */
    public function setMonitoringCardId(?int $monitoringCardId): Wfr3tbZzZF9Item
    {

        return $this->setCoreMonitoringCardId($monitoringCardId);
    }

    /**
     * Core setter for `monitoring_card_id` field value.
     *
     * @param null|integer $monitoringCardId Value to be set.
     *
     * @return Wfr3tbZzZF9Item
     */
    public function setCoreMonitoringCardId(?int $monitoringCardId): Wfr3tbZzZF9Item
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
