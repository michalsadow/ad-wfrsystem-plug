<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\Wfr7L4cHvR7ItemModel;
use Przeslijmi\AgileDataWfrSystemPlug\Models\Wfr7L4cHvR7Collection;
use Przeslijmi\AgileDataWfrSystemPlug\Models\Wfr7L4cHvR7Item;
use Przeslijmi\Shortquery\Data\Instance;
use Przeslijmi\Shortquery\Exceptions\Data\CollectionSliceNotPossibleException;
use Przeslijmi\Shortquery\Tools\InstancesFactory;
use stdClass;

/**
 * ShortQuery Instance Core class for Wfr7L4cHvR7Item Model.
 *
 * This is a `<shortquery-role:instance-core>`.
 */
class Wfr7L4cHvR7ItemCore extends Instance
{

    /**
     * Field `id`.
     *
     * @var integer
     */
    private $id;

    /**
     * Field `amount_from`.
     *
     * @var null|float
     */
    private $amountFrom;

    /**
     * Field `amount_to`.
     *
     * @var null|float
     */
    private $amountTo;

    /**
     * Field `percent_participation`.
     *
     * @var null|float
     */
    private $percentParticipation;

    /**
     * Field `type`.
     *
     * @var null|string
     */
    private $type;

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
        $this->model = Wfr7L4cHvR7ItemModel::getInstance();

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
        if (isset($inject['amount_from']) === true && $inject['amount_from'] !== null) {
            $this->amountFrom = (float) $inject['amount_from'];
        }
        if (isset($inject['amount_to']) === true && $inject['amount_to'] !== null) {
            $this->amountTo = (float) $inject['amount_to'];
        }
        if (isset($inject['percent_participation']) === true && $inject['percent_participation'] !== null) {
            $this->percentParticipation = (float) $inject['percent_participation'];
        }
        if (isset($inject['type']) === true && $inject['type'] !== null) {
            $this->type = (string) $inject['type'];
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
     * @return Wfr7L4cHvR7Item
     */
    public function setId(int $id): Wfr7L4cHvR7Item
    {

        return $this->setCoreId($id);
    }

    /**
     * Core setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return Wfr7L4cHvR7Item
     */
    public function setCoreId(int $id): Wfr7L4cHvR7Item
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
     * Getter for `amount_from` field value.
     *
     * @return null|float
     */
    public function getAmountFrom(): ?float
    {

        return $this->getCoreAmountFrom(...func_get_args());
    }

    /**
     * Core getter for `amount_from` field value.
     *
     * @return null|float
     */
    public function getCoreAmountFrom(): ?float
    {

        return $this->amountFrom;
    }


    /**
     * Setter for `amount_from` field value.
     *
     * @param null|float $amountFrom Value to be set.
     *
     * @return Wfr7L4cHvR7Item
     */
    public function setAmountFrom(?float $amountFrom): Wfr7L4cHvR7Item
    {

        return $this->setCoreAmountFrom($amountFrom);
    }

    /**
     * Core setter for `amount_from` field value.
     *
     * @param null|float $amountFrom Value to be set.
     *
     * @return Wfr7L4cHvR7Item
     */
    public function setCoreAmountFrom(?float $amountFrom): Wfr7L4cHvR7Item
    {

        // Test value.
        $this->grabField('amount_from')->isValueValid($amountFrom);

        // If there is nothing to be changed.
        if (
            $this->amountFrom === $amountFrom
            || (string) $this->amountFrom === (string) $amountFrom
        ) {
            return $this;
        }

        // Save.
        $this->amountFrom = $amountFrom;

        // Note that was set.
        $this->setFields[]     = 'amount_from';
        $this->changedFields[] = 'amount_from';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['amount_from']) === false) {
            $this->fieldsValuesHistory['amount_from'] = [];
        }
        $this->fieldsValuesHistory['amount_from'][] = $amountFrom;

        return $this;
    }

    /**
     * Getter for `amount_to` field value.
     *
     * @return null|float
     */
    public function getAmountTo(): ?float
    {

        return $this->getCoreAmountTo(...func_get_args());
    }

    /**
     * Core getter for `amount_to` field value.
     *
     * @return null|float
     */
    public function getCoreAmountTo(): ?float
    {

        return $this->amountTo;
    }


    /**
     * Setter for `amount_to` field value.
     *
     * @param null|float $amountTo Value to be set.
     *
     * @return Wfr7L4cHvR7Item
     */
    public function setAmountTo(?float $amountTo): Wfr7L4cHvR7Item
    {

        return $this->setCoreAmountTo($amountTo);
    }

    /**
     * Core setter for `amount_to` field value.
     *
     * @param null|float $amountTo Value to be set.
     *
     * @return Wfr7L4cHvR7Item
     */
    public function setCoreAmountTo(?float $amountTo): Wfr7L4cHvR7Item
    {

        // Test value.
        $this->grabField('amount_to')->isValueValid($amountTo);

        // If there is nothing to be changed.
        if (
            $this->amountTo === $amountTo
            || (string) $this->amountTo === (string) $amountTo
        ) {
            return $this;
        }

        // Save.
        $this->amountTo = $amountTo;

        // Note that was set.
        $this->setFields[]     = 'amount_to';
        $this->changedFields[] = 'amount_to';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['amount_to']) === false) {
            $this->fieldsValuesHistory['amount_to'] = [];
        }
        $this->fieldsValuesHistory['amount_to'][] = $amountTo;

        return $this;
    }

    /**
     * Getter for `percent_participation` field value.
     *
     * @return null|float
     */
    public function getPercentParticipation(): ?float
    {

        return $this->getCorePercentParticipation(...func_get_args());
    }

    /**
     * Core getter for `percent_participation` field value.
     *
     * @return null|float
     */
    public function getCorePercentParticipation(): ?float
    {

        return $this->percentParticipation;
    }


    /**
     * Setter for `percent_participation` field value.
     *
     * @param null|float $percentParticipation Value to be set.
     *
     * @return Wfr7L4cHvR7Item
     */
    public function setPercentParticipation(?float $percentParticipation): Wfr7L4cHvR7Item
    {

        return $this->setCorePercentParticipation($percentParticipation);
    }

    /**
     * Core setter for `percent_participation` field value.
     *
     * @param null|float $percentParticipation Value to be set.
     *
     * @return Wfr7L4cHvR7Item
     */
    public function setCorePercentParticipation(?float $percentParticipation): Wfr7L4cHvR7Item
    {

        // Test value.
        $this->grabField('percent_participation')->isValueValid($percentParticipation);

        // If there is nothing to be changed.
        if (
            $this->percentParticipation === $percentParticipation
            || (string) $this->percentParticipation === (string) $percentParticipation
        ) {
            return $this;
        }

        // Save.
        $this->percentParticipation = $percentParticipation;

        // Note that was set.
        $this->setFields[]     = 'percent_participation';
        $this->changedFields[] = 'percent_participation';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['percent_participation']) === false) {
            $this->fieldsValuesHistory['percent_participation'] = [];
        }
        $this->fieldsValuesHistory['percent_participation'][] = $percentParticipation;

        return $this;
    }

    /**
     * Getter for `type` field value.
     *
     * @return null|string
     */
    public function getType(): ?string
    {

        return $this->getCoreType(...func_get_args());
    }

    /**
     * Core getter for `type` field value.
     *
     * @return null|string
     */
    public function getCoreType(): ?string
    {

        return $this->type;
    }


    /**
     * Setter for `type` field value.
     *
     * @param null|string $type Value to be set.
     *
     * @return Wfr7L4cHvR7Item
     */
    public function setType(?string $type): Wfr7L4cHvR7Item
    {

        return $this->setCoreType($type);
    }

    /**
     * Core setter for `type` field value.
     *
     * @param null|string $type Value to be set.
     *
     * @return Wfr7L4cHvR7Item
     */
    public function setCoreType(?string $type): Wfr7L4cHvR7Item
    {

        // Test value.
        $this->grabField('type')->isValueValid($type);

        // If there is nothing to be changed.
        if ($this->type === $type) {
            return $this;
        }

        // Save.
        $this->type = $type;

        // Note that was set.
        $this->setFields[]     = 'type';
        $this->changedFields[] = 'type';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['type']) === false) {
            $this->fieldsValuesHistory['type'] = [];
        }
        $this->fieldsValuesHistory['type'][] = $type;

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
     * @return Wfr7L4cHvR7Item
     */
    public function setOperatingAgreementId(?int $operatingAgreementId): Wfr7L4cHvR7Item
    {

        return $this->setCoreOperatingAgreementId($operatingAgreementId);
    }

    /**
     * Core setter for `operating_agreement_id` field value.
     *
     * @param null|integer $operatingAgreementId Value to be set.
     *
     * @return Wfr7L4cHvR7Item
     */
    public function setCoreOperatingAgreementId(?int $operatingAgreementId): Wfr7L4cHvR7Item
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
