<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\WfrTDLCe9hcItemModel;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrTDLCe9hcCollection;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrTDLCe9hcItem;
use Przeslijmi\Shortquery\Data\Instance;
use Przeslijmi\Shortquery\Exceptions\Data\CollectionSliceNotPossibleException;
use Przeslijmi\Shortquery\Tools\InstancesFactory;
use stdClass;

/**
 * ShortQuery Instance Core class for WfrTDLCe9hcItem Model.
 *
 * This is a `<shortquery-role:instance-core>`.
 */
class WfrTDLCe9hcItemCore extends Instance
{

    /**
     * Field `id`.
     *
     * @var integer
     */
    private $id;

    /**
     * Field `security_type`.
     *
     * @var null|string
     */
    private $securityType;

    /**
     * Field `name`.
     *
     * @var null|string
     */
    private $name;

    /**
     * Field `comment`.
     *
     * @var null|string
     */
    private $comment;

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
        $this->model = WfrTDLCe9hcItemModel::getInstance();

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
        if (isset($inject['security_type']) === true && $inject['security_type'] !== null) {
            $this->securityType = (string) $inject['security_type'];
        }
        if (isset($inject['name']) === true && $inject['name'] !== null) {
            $this->name = (string) $inject['name'];
        }
        if (isset($inject['comment']) === true && $inject['comment'] !== null) {
            $this->comment = (string) $inject['comment'];
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
     * @return WfrTDLCe9hcItem
     */
    public function setId(int $id): WfrTDLCe9hcItem
    {

        return $this->setCoreId($id);
    }

    /**
     * Core setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return WfrTDLCe9hcItem
     */
    public function setCoreId(int $id): WfrTDLCe9hcItem
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
     * Getter for `security_type` field value.
     *
     * @return null|string
     */
    public function getSecurityType(): ?string
    {

        return $this->getCoreSecurityType(...func_get_args());
    }

    /**
     * Core getter for `security_type` field value.
     *
     * @return null|string
     */
    public function getCoreSecurityType(): ?string
    {

        return $this->securityType;
    }


    /**
     * Setter for `security_type` field value.
     *
     * @param null|string $securityType Value to be set.
     *
     * @return WfrTDLCe9hcItem
     */
    public function setSecurityType(?string $securityType): WfrTDLCe9hcItem
    {

        return $this->setCoreSecurityType($securityType);
    }

    /**
     * Core setter for `security_type` field value.
     *
     * @param null|string $securityType Value to be set.
     *
     * @return WfrTDLCe9hcItem
     */
    public function setCoreSecurityType(?string $securityType): WfrTDLCe9hcItem
    {

        // Test value.
        $this->grabField('security_type')->isValueValid($securityType);

        // If there is nothing to be changed.
        if ($this->securityType === $securityType) {
            return $this;
        }

        // Save.
        $this->securityType = $securityType;

        // Note that was set.
        $this->setFields[]     = 'security_type';
        $this->changedFields[] = 'security_type';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['security_type']) === false) {
            $this->fieldsValuesHistory['security_type'] = [];
        }
        $this->fieldsValuesHistory['security_type'][] = $securityType;

        return $this;
    }

    /**
     * Getter for `name` field value.
     *
     * @return null|string
     */
    public function getName(): ?string
    {

        return $this->getCoreName(...func_get_args());
    }

    /**
     * Core getter for `name` field value.
     *
     * @return null|string
     */
    public function getCoreName(): ?string
    {

        return $this->name;
    }


    /**
     * Setter for `name` field value.
     *
     * @param null|string $name Value to be set.
     *
     * @return WfrTDLCe9hcItem
     */
    public function setName(?string $name): WfrTDLCe9hcItem
    {

        return $this->setCoreName($name);
    }

    /**
     * Core setter for `name` field value.
     *
     * @param null|string $name Value to be set.
     *
     * @return WfrTDLCe9hcItem
     */
    public function setCoreName(?string $name): WfrTDLCe9hcItem
    {

        // Test value.
        $this->grabField('name')->isValueValid($name);

        // If there is nothing to be changed.
        if ($this->name === $name) {
            return $this;
        }

        // Save.
        $this->name = $name;

        // Note that was set.
        $this->setFields[]     = 'name';
        $this->changedFields[] = 'name';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['name']) === false) {
            $this->fieldsValuesHistory['name'] = [];
        }
        $this->fieldsValuesHistory['name'][] = $name;

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
     * @return WfrTDLCe9hcItem
     */
    public function setComment(?string $comment): WfrTDLCe9hcItem
    {

        return $this->setCoreComment($comment);
    }

    /**
     * Core setter for `comment` field value.
     *
     * @param null|string $comment Value to be set.
     *
     * @return WfrTDLCe9hcItem
     */
    public function setCoreComment(?string $comment): WfrTDLCe9hcItem
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
     * @return WfrTDLCe9hcItem
     */
    public function setMonitoringCardId(?int $monitoringCardId): WfrTDLCe9hcItem
    {

        return $this->setCoreMonitoringCardId($monitoringCardId);
    }

    /**
     * Core setter for `monitoring_card_id` field value.
     *
     * @param null|integer $monitoringCardId Value to be set.
     *
     * @return WfrTDLCe9hcItem
     */
    public function setCoreMonitoringCardId(?int $monitoringCardId): WfrTDLCe9hcItem
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
