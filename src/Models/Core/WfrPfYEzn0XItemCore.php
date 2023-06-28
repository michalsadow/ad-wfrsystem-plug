<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\WfrPfYEzn0XItemModel;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrPfYEzn0XCollection;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrPfYEzn0XItem;
use Przeslijmi\Shortquery\Data\Instance;
use Przeslijmi\Shortquery\Exceptions\Data\CollectionSliceNotPossibleException;
use Przeslijmi\Shortquery\Tools\InstancesFactory;
use stdClass;

/**
 * ShortQuery Instance Core class for WfrPfYEzn0XItem Model.
 *
 * This is a `<shortquery-role:instance-core>`.
 */
class WfrPfYEzn0XItemCore extends Instance
{

    /**
     * Field `id`.
     *
     * @var integer
     */
    private $id;

    /**
     * Field `iban`.
     *
     * @var null|string
     */
    private $iban;

    /**
     * Field `created_at`.
     *
     * @var null|string
     */
    private $createdAt;

    /**
     * Field `comment`.
     *
     * @var null|string
     */
    private $comment;

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
        $this->model = WfrPfYEzn0XItemModel::getInstance();

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
        if (isset($inject['iban']) === true && $inject['iban'] !== null) {
            $this->iban = (string) $inject['iban'];
        }
        if (isset($inject['created_at']) === true && $inject['created_at'] !== null) {
            $this->createdAt = (string) $inject['created_at'];
        }
        if (isset($inject['comment']) === true && $inject['comment'] !== null) {
            $this->comment = (string) $inject['comment'];
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
     * @return WfrPfYEzn0XItem
     */
    public function setId(int $id): WfrPfYEzn0XItem
    {

        return $this->setCoreId($id);
    }

    /**
     * Core setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return WfrPfYEzn0XItem
     */
    public function setCoreId(int $id): WfrPfYEzn0XItem
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
     * Getter for `iban` field value.
     *
     * @return null|string
     */
    public function getIban(): ?string
    {

        return $this->getCoreIban(...func_get_args());
    }

    /**
     * Core getter for `iban` field value.
     *
     * @return null|string
     */
    public function getCoreIban(): ?string
    {

        return $this->iban;
    }


    /**
     * Setter for `iban` field value.
     *
     * @param null|string $iban Value to be set.
     *
     * @return WfrPfYEzn0XItem
     */
    public function setIban(?string $iban): WfrPfYEzn0XItem
    {

        return $this->setCoreIban($iban);
    }

    /**
     * Core setter for `iban` field value.
     *
     * @param null|string $iban Value to be set.
     *
     * @return WfrPfYEzn0XItem
     */
    public function setCoreIban(?string $iban): WfrPfYEzn0XItem
    {

        // Test value.
        $this->grabField('iban')->isValueValid($iban);

        // If there is nothing to be changed.
        if ($this->iban === $iban) {
            return $this;
        }

        // Save.
        $this->iban = $iban;

        // Note that was set.
        $this->setFields[]     = 'iban';
        $this->changedFields[] = 'iban';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['iban']) === false) {
            $this->fieldsValuesHistory['iban'] = [];
        }
        $this->fieldsValuesHistory['iban'][] = $iban;

        return $this;
    }

    /**
     * Getter for `created_at` field value.
     *
     * @return null|string
     */
    public function getCreatedAt(): ?string
    {

        return $this->getCoreCreatedAt(...func_get_args());
    }

    /**
     * Core getter for `created_at` field value.
     *
     * @return null|string
     */
    public function getCoreCreatedAt(): ?string
    {

        if (empty($this->createdAt) === true) {
            $this->createdAt = null;
        }

        if ($this->createdAt !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('created_at')
                ->formatToExcel($this->createdAt);
        }

        return $this->createdAt;
    }


    /**
     * Setter for `created_at` field value.
     *
     * @param null|string $createdAt Value to be set.
     *
     * @return WfrPfYEzn0XItem
     */
    public function setCreatedAt(?string $createdAt): WfrPfYEzn0XItem
    {

        return $this->setCoreCreatedAt($createdAt);
    }

    /**
     * Core setter for `created_at` field value.
     *
     * @param null|string $createdAt Value to be set.
     *
     * @return WfrPfYEzn0XItem
     */
    public function setCoreCreatedAt(?string $createdAt): WfrPfYEzn0XItem
    {

        // Test value.
        $this->grabField('created_at')->isValueValid($createdAt);

        // If there is nothing to be changed.
        if ($this->createdAt === $createdAt) {
            return $this;
        }

        // Save.
        $this->createdAt = $createdAt;

        // Note that was set.
        $this->setFields[]     = 'created_at';
        $this->changedFields[] = 'created_at';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['created_at']) === false) {
            $this->fieldsValuesHistory['created_at'] = [];
        }
        $this->fieldsValuesHistory['created_at'][] = $createdAt;

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
     * @return WfrPfYEzn0XItem
     */
    public function setComment(?string $comment): WfrPfYEzn0XItem
    {

        return $this->setCoreComment($comment);
    }

    /**
     * Core setter for `comment` field value.
     *
     * @param null|string $comment Value to be set.
     *
     * @return WfrPfYEzn0XItem
     */
    public function setCoreComment(?string $comment): WfrPfYEzn0XItem
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
     * @return WfrPfYEzn0XItem
     */
    public function setOperatingAgreementId(?int $operatingAgreementId): WfrPfYEzn0XItem
    {

        return $this->setCoreOperatingAgreementId($operatingAgreementId);
    }

    /**
     * Core setter for `operating_agreement_id` field value.
     *
     * @param null|integer $operatingAgreementId Value to be set.
     *
     * @return WfrPfYEzn0XItem
     */
    public function setCoreOperatingAgreementId(?int $operatingAgreementId): WfrPfYEzn0XItem
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
