<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\WfrRuQ8awuMItemModel;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrRuQ8awuMCollection;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrRuQ8awuMItem;
use Przeslijmi\Shortquery\Data\Instance;
use Przeslijmi\Shortquery\Exceptions\Data\CollectionSliceNotPossibleException;
use Przeslijmi\Shortquery\Tools\InstancesFactory;
use stdClass;

/**
 * ShortQuery Instance Core class for WfrRuQ8awuMItem Model.
 *
 * This is a `<shortquery-role:instance-core>`.
 */
class WfrRuQ8awuMItemCore extends Instance
{

    /**
     * Field `id`.
     *
     * @var integer
     */
    private $id;

    /**
     * Field `vindication_cost`.
     *
     * @var null|integer
     */
    private $vindicationCost;

    /**
     * Field `document_type`.
     *
     * @var null|string
     */
    private $documentType;

    /**
     * Field `document_number`.
     *
     * @var null|string
     */
    private $documentNumber;

    /**
     * Field `document_date`.
     *
     * @var null|string
     */
    private $documentDate;

    /**
     * Field `company_nip`.
     *
     * @var null|string
     */
    private $companyNip;

    /**
     * Field `company_name`.
     *
     * @var null|string
     */
    private $companyName;

    /**
     * Field `name`.
     *
     * @var null|string
     */
    private $name;

    /**
     * Field `amount_netto`.
     *
     * @var null|float
     */
    private $amountNetto;

    /**
     * Field `qualification_amount_netto`.
     *
     * @var null|float
     */
    private $qualificationAmountNetto;

    /**
     * Field `qualification_amount_brutto`.
     *
     * @var null|float
     */
    private $qualificationAmountBrutto;

    /**
     * Field `accounting_number`.
     *
     * @var null|string
     */
    private $accountingNumber;

    /**
     * Field `cost_date`.
     *
     * @var null|string
     */
    private $costDate;

    /**
     * Field `cost_category_type`.
     *
     * @var null|string
     */
    private $costCategoryType;

    /**
     * Field `eligibility`.
     *
     * @var null|string
     */
    private $eligibility;

    /**
     * Field `additional_notes`.
     *
     * @var null|string
     */
    private $additionalNotes;

    /**
     * Field `monitoring_card_id`.
     *
     * @var null|integer
     */
    private $monitoringCardId;

    /**
     * Field `amount_brutto`.
     *
     * @var null|float
     */
    private $amountBrutto;

    /**
     * Constructor.
     *
     * @param string $database Optional, `null`. In which database this field is defined.
     */
    public function __construct(?string $database = null)
    {

        // Get model Instance.
        $this->model = WfrRuQ8awuMItemModel::getInstance();

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
        if (isset($inject['vindication_cost']) === true && $inject['vindication_cost'] !== null) {
            $this->vindicationCost = (int) $inject['vindication_cost'];
        }
        if (isset($inject['document_type']) === true && $inject['document_type'] !== null) {
            $this->documentType = (string) $inject['document_type'];
        }
        if (isset($inject['document_number']) === true && $inject['document_number'] !== null) {
            $this->documentNumber = (string) $inject['document_number'];
        }
        if (isset($inject['document_date']) === true && $inject['document_date'] !== null) {
            $this->documentDate = (string) $inject['document_date'];
        }
        if (isset($inject['company_nip']) === true && $inject['company_nip'] !== null) {
            $this->companyNip = (string) $inject['company_nip'];
        }
        if (isset($inject['company_name']) === true && $inject['company_name'] !== null) {
            $this->companyName = (string) $inject['company_name'];
        }
        if (isset($inject['name']) === true && $inject['name'] !== null) {
            $this->name = (string) $inject['name'];
        }
        if (isset($inject['amount_netto']) === true && $inject['amount_netto'] !== null) {
            $this->amountNetto = (float) $inject['amount_netto'];
        }
        if (isset($inject['qualification_amount_netto']) === true && $inject['qualification_amount_netto'] !== null) {
            $this->qualificationAmountNetto = (float) $inject['qualification_amount_netto'];
        }
        if (isset($inject['qualification_amount_brutto']) === true && $inject['qualification_amount_brutto'] !== null) {
            $this->qualificationAmountBrutto = (float) $inject['qualification_amount_brutto'];
        }
        if (isset($inject['accounting_number']) === true && $inject['accounting_number'] !== null) {
            $this->accountingNumber = (string) $inject['accounting_number'];
        }
        if (isset($inject['cost_date']) === true && $inject['cost_date'] !== null) {
            $this->costDate = (string) $inject['cost_date'];
        }
        if (isset($inject['cost_category_type']) === true && $inject['cost_category_type'] !== null) {
            $this->costCategoryType = (string) $inject['cost_category_type'];
        }
        if (isset($inject['eligibility']) === true && $inject['eligibility'] !== null) {
            $this->eligibility = (string) $inject['eligibility'];
        }
        if (isset($inject['additional_notes']) === true && $inject['additional_notes'] !== null) {
            $this->additionalNotes = (string) $inject['additional_notes'];
        }
        if (isset($inject['monitoring_card_id']) === true && $inject['monitoring_card_id'] !== null) {
            $this->monitoringCardId = (int) $inject['monitoring_card_id'];
        }
        if (isset($inject['amount_brutto']) === true && $inject['amount_brutto'] !== null) {
            $this->amountBrutto = (float) $inject['amount_brutto'];
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
     * @return WfrRuQ8awuMItem
     */
    public function setId(int $id): WfrRuQ8awuMItem
    {

        return $this->setCoreId($id);
    }

    /**
     * Core setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCoreId(int $id): WfrRuQ8awuMItem
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
     * Getter for `vindication_cost` field value.
     *
     * @return null|integer
     */
    public function getVindicationCost(): ?int
    {

        return $this->getCoreVindicationCost(...func_get_args());
    }

    /**
     * Core getter for `vindication_cost` field value.
     *
     * @return null|integer
     */
    public function getCoreVindicationCost(): ?int
    {

        return $this->vindicationCost;
    }


    /**
     * Setter for `vindication_cost` field value.
     *
     * @param null|integer $vindicationCost Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setVindicationCost(?int $vindicationCost): WfrRuQ8awuMItem
    {

        return $this->setCoreVindicationCost($vindicationCost);
    }

    /**
     * Core setter for `vindication_cost` field value.
     *
     * @param null|integer $vindicationCost Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCoreVindicationCost(?int $vindicationCost): WfrRuQ8awuMItem
    {

        // Test value.
        $this->grabField('vindication_cost')->isValueValid($vindicationCost);

        // If there is nothing to be changed.
        if ($this->vindicationCost === $vindicationCost) {
            return $this;
        }

        // Save.
        $this->vindicationCost = $vindicationCost;

        // Note that was set.
        $this->setFields[]     = 'vindication_cost';
        $this->changedFields[] = 'vindication_cost';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['vindication_cost']) === false) {
            $this->fieldsValuesHistory['vindication_cost'] = [];
        }
        $this->fieldsValuesHistory['vindication_cost'][] = $vindicationCost;

        return $this;
    }

    /**
     * Getter for `document_type` field value.
     *
     * @return null|string
     */
    public function getDocumentType(): ?string
    {

        return $this->getCoreDocumentType(...func_get_args());
    }

    /**
     * Core getter for `document_type` field value.
     *
     * @return null|string
     */
    public function getCoreDocumentType(): ?string
    {

        return $this->documentType;
    }


    /**
     * Setter for `document_type` field value.
     *
     * @param null|string $documentType Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setDocumentType(?string $documentType): WfrRuQ8awuMItem
    {

        return $this->setCoreDocumentType($documentType);
    }

    /**
     * Core setter for `document_type` field value.
     *
     * @param null|string $documentType Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCoreDocumentType(?string $documentType): WfrRuQ8awuMItem
    {

        // Test value.
        $this->grabField('document_type')->isValueValid($documentType);

        // If there is nothing to be changed.
        if ($this->documentType === $documentType) {
            return $this;
        }

        // Save.
        $this->documentType = $documentType;

        // Note that was set.
        $this->setFields[]     = 'document_type';
        $this->changedFields[] = 'document_type';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['document_type']) === false) {
            $this->fieldsValuesHistory['document_type'] = [];
        }
        $this->fieldsValuesHistory['document_type'][] = $documentType;

        return $this;
    }

    /**
     * Getter for `document_number` field value.
     *
     * @return null|string
     */
    public function getDocumentNumber(): ?string
    {

        return $this->getCoreDocumentNumber(...func_get_args());
    }

    /**
     * Core getter for `document_number` field value.
     *
     * @return null|string
     */
    public function getCoreDocumentNumber(): ?string
    {

        return $this->documentNumber;
    }


    /**
     * Setter for `document_number` field value.
     *
     * @param null|string $documentNumber Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setDocumentNumber(?string $documentNumber): WfrRuQ8awuMItem
    {

        return $this->setCoreDocumentNumber($documentNumber);
    }

    /**
     * Core setter for `document_number` field value.
     *
     * @param null|string $documentNumber Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCoreDocumentNumber(?string $documentNumber): WfrRuQ8awuMItem
    {

        // Test value.
        $this->grabField('document_number')->isValueValid($documentNumber);

        // If there is nothing to be changed.
        if ($this->documentNumber === $documentNumber) {
            return $this;
        }

        // Save.
        $this->documentNumber = $documentNumber;

        // Note that was set.
        $this->setFields[]     = 'document_number';
        $this->changedFields[] = 'document_number';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['document_number']) === false) {
            $this->fieldsValuesHistory['document_number'] = [];
        }
        $this->fieldsValuesHistory['document_number'][] = $documentNumber;

        return $this;
    }

    /**
     * Getter for `document_date` field value.
     *
     * @return null|string
     */
    public function getDocumentDate(): ?string
    {

        return $this->getCoreDocumentDate(...func_get_args());
    }

    /**
     * Core getter for `document_date` field value.
     *
     * @return null|string
     */
    public function getCoreDocumentDate(): ?string
    {

        if (empty($this->documentDate) === true) {
            $this->documentDate = null;
        }

        if ($this->documentDate !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('document_date')
                ->formatToExcel($this->documentDate);
        }

        return $this->documentDate;
    }


    /**
     * Setter for `document_date` field value.
     *
     * @param null|string $documentDate Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setDocumentDate(?string $documentDate): WfrRuQ8awuMItem
    {

        return $this->setCoreDocumentDate($documentDate);
    }

    /**
     * Core setter for `document_date` field value.
     *
     * @param null|string $documentDate Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCoreDocumentDate(?string $documentDate): WfrRuQ8awuMItem
    {

        // Test value.
        $this->grabField('document_date')->isValueValid($documentDate);

        // If there is nothing to be changed.
        if ($this->documentDate === $documentDate) {
            return $this;
        }

        // Save.
        $this->documentDate = $documentDate;

        // Note that was set.
        $this->setFields[]     = 'document_date';
        $this->changedFields[] = 'document_date';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['document_date']) === false) {
            $this->fieldsValuesHistory['document_date'] = [];
        }
        $this->fieldsValuesHistory['document_date'][] = $documentDate;

        return $this;
    }

    /**
     * Getter for `company_nip` field value.
     *
     * @return null|string
     */
    public function getCompanyNip(): ?string
    {

        return $this->getCoreCompanyNip(...func_get_args());
    }

    /**
     * Core getter for `company_nip` field value.
     *
     * @return null|string
     */
    public function getCoreCompanyNip(): ?string
    {

        return $this->companyNip;
    }


    /**
     * Setter for `company_nip` field value.
     *
     * @param null|string $companyNip Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCompanyNip(?string $companyNip): WfrRuQ8awuMItem
    {

        return $this->setCoreCompanyNip($companyNip);
    }

    /**
     * Core setter for `company_nip` field value.
     *
     * @param null|string $companyNip Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCoreCompanyNip(?string $companyNip): WfrRuQ8awuMItem
    {

        // Test value.
        $this->grabField('company_nip')->isValueValid($companyNip);

        // If there is nothing to be changed.
        if ($this->companyNip === $companyNip) {
            return $this;
        }

        // Save.
        $this->companyNip = $companyNip;

        // Note that was set.
        $this->setFields[]     = 'company_nip';
        $this->changedFields[] = 'company_nip';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['company_nip']) === false) {
            $this->fieldsValuesHistory['company_nip'] = [];
        }
        $this->fieldsValuesHistory['company_nip'][] = $companyNip;

        return $this;
    }

    /**
     * Getter for `company_name` field value.
     *
     * @return null|string
     */
    public function getCompanyName(): ?string
    {

        return $this->getCoreCompanyName(...func_get_args());
    }

    /**
     * Core getter for `company_name` field value.
     *
     * @return null|string
     */
    public function getCoreCompanyName(): ?string
    {

        return $this->companyName;
    }


    /**
     * Setter for `company_name` field value.
     *
     * @param null|string $companyName Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCompanyName(?string $companyName): WfrRuQ8awuMItem
    {

        return $this->setCoreCompanyName($companyName);
    }

    /**
     * Core setter for `company_name` field value.
     *
     * @param null|string $companyName Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCoreCompanyName(?string $companyName): WfrRuQ8awuMItem
    {

        // Test value.
        $this->grabField('company_name')->isValueValid($companyName);

        // If there is nothing to be changed.
        if ($this->companyName === $companyName) {
            return $this;
        }

        // Save.
        $this->companyName = $companyName;

        // Note that was set.
        $this->setFields[]     = 'company_name';
        $this->changedFields[] = 'company_name';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['company_name']) === false) {
            $this->fieldsValuesHistory['company_name'] = [];
        }
        $this->fieldsValuesHistory['company_name'][] = $companyName;

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
     * @return WfrRuQ8awuMItem
     */
    public function setName(?string $name): WfrRuQ8awuMItem
    {

        return $this->setCoreName($name);
    }

    /**
     * Core setter for `name` field value.
     *
     * @param null|string $name Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCoreName(?string $name): WfrRuQ8awuMItem
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
     * Getter for `amount_netto` field value.
     *
     * @return null|float
     */
    public function getAmountNetto(): ?float
    {

        return $this->getCoreAmountNetto(...func_get_args());
    }

    /**
     * Core getter for `amount_netto` field value.
     *
     * @return null|float
     */
    public function getCoreAmountNetto(): ?float
    {

        return $this->amountNetto;
    }


    /**
     * Setter for `amount_netto` field value.
     *
     * @param null|float $amountNetto Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setAmountNetto(?float $amountNetto): WfrRuQ8awuMItem
    {

        return $this->setCoreAmountNetto($amountNetto);
    }

    /**
     * Core setter for `amount_netto` field value.
     *
     * @param null|float $amountNetto Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCoreAmountNetto(?float $amountNetto): WfrRuQ8awuMItem
    {

        // Test value.
        $this->grabField('amount_netto')->isValueValid($amountNetto);

        // If there is nothing to be changed.
        if (
            $this->amountNetto === $amountNetto
            || (string) $this->amountNetto === (string) $amountNetto
        ) {
            return $this;
        }

        // Save.
        $this->amountNetto = $amountNetto;

        // Note that was set.
        $this->setFields[]     = 'amount_netto';
        $this->changedFields[] = 'amount_netto';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['amount_netto']) === false) {
            $this->fieldsValuesHistory['amount_netto'] = [];
        }
        $this->fieldsValuesHistory['amount_netto'][] = $amountNetto;

        return $this;
    }

    /**
     * Getter for `qualification_amount_netto` field value.
     *
     * @return null|float
     */
    public function getQualificationAmountNetto(): ?float
    {

        return $this->getCoreQualificationAmountNetto(...func_get_args());
    }

    /**
     * Core getter for `qualification_amount_netto` field value.
     *
     * @return null|float
     */
    public function getCoreQualificationAmountNetto(): ?float
    {

        return $this->qualificationAmountNetto;
    }


    /**
     * Setter for `qualification_amount_netto` field value.
     *
     * @param null|float $qualificationAmountNetto Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setQualificationAmountNetto(?float $qualificationAmountNetto): WfrRuQ8awuMItem
    {

        return $this->setCoreQualificationAmountNetto($qualificationAmountNetto);
    }

    /**
     * Core setter for `qualification_amount_netto` field value.
     *
     * @param null|float $qualificationAmountNetto Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCoreQualificationAmountNetto(?float $qualificationAmountNetto): WfrRuQ8awuMItem
    {

        // Test value.
        $this->grabField('qualification_amount_netto')->isValueValid($qualificationAmountNetto);

        // If there is nothing to be changed.
        if (
            $this->qualificationAmountNetto === $qualificationAmountNetto
            || (string) $this->qualificationAmountNetto === (string) $qualificationAmountNetto
        ) {
            return $this;
        }

        // Save.
        $this->qualificationAmountNetto = $qualificationAmountNetto;

        // Note that was set.
        $this->setFields[]     = 'qualification_amount_netto';
        $this->changedFields[] = 'qualification_amount_netto';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['qualification_amount_netto']) === false) {
            $this->fieldsValuesHistory['qualification_amount_netto'] = [];
        }
        $this->fieldsValuesHistory['qualification_amount_netto'][] = $qualificationAmountNetto;

        return $this;
    }

    /**
     * Getter for `qualification_amount_brutto` field value.
     *
     * @return null|float
     */
    public function getQualificationAmountBrutto(): ?float
    {

        return $this->getCoreQualificationAmountBrutto(...func_get_args());
    }

    /**
     * Core getter for `qualification_amount_brutto` field value.
     *
     * @return null|float
     */
    public function getCoreQualificationAmountBrutto(): ?float
    {

        return $this->qualificationAmountBrutto;
    }


    /**
     * Setter for `qualification_amount_brutto` field value.
     *
     * @param null|float $qualificationAmountBrutto Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setQualificationAmountBrutto(?float $qualificationAmountBrutto): WfrRuQ8awuMItem
    {

        return $this->setCoreQualificationAmountBrutto($qualificationAmountBrutto);
    }

    /**
     * Core setter for `qualification_amount_brutto` field value.
     *
     * @param null|float $qualificationAmountBrutto Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCoreQualificationAmountBrutto(?float $qualificationAmountBrutto): WfrRuQ8awuMItem
    {

        // Test value.
        $this->grabField('qualification_amount_brutto')->isValueValid($qualificationAmountBrutto);

        // If there is nothing to be changed.
        if (
            $this->qualificationAmountBrutto === $qualificationAmountBrutto
            || (string) $this->qualificationAmountBrutto === (string) $qualificationAmountBrutto
        ) {
            return $this;
        }

        // Save.
        $this->qualificationAmountBrutto = $qualificationAmountBrutto;

        // Note that was set.
        $this->setFields[]     = 'qualification_amount_brutto';
        $this->changedFields[] = 'qualification_amount_brutto';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['qualification_amount_brutto']) === false) {
            $this->fieldsValuesHistory['qualification_amount_brutto'] = [];
        }
        $this->fieldsValuesHistory['qualification_amount_brutto'][] = $qualificationAmountBrutto;

        return $this;
    }

    /**
     * Getter for `accounting_number` field value.
     *
     * @return null|string
     */
    public function getAccountingNumber(): ?string
    {

        return $this->getCoreAccountingNumber(...func_get_args());
    }

    /**
     * Core getter for `accounting_number` field value.
     *
     * @return null|string
     */
    public function getCoreAccountingNumber(): ?string
    {

        return $this->accountingNumber;
    }


    /**
     * Setter for `accounting_number` field value.
     *
     * @param null|string $accountingNumber Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setAccountingNumber(?string $accountingNumber): WfrRuQ8awuMItem
    {

        return $this->setCoreAccountingNumber($accountingNumber);
    }

    /**
     * Core setter for `accounting_number` field value.
     *
     * @param null|string $accountingNumber Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCoreAccountingNumber(?string $accountingNumber): WfrRuQ8awuMItem
    {

        // Test value.
        $this->grabField('accounting_number')->isValueValid($accountingNumber);

        // If there is nothing to be changed.
        if ($this->accountingNumber === $accountingNumber) {
            return $this;
        }

        // Save.
        $this->accountingNumber = $accountingNumber;

        // Note that was set.
        $this->setFields[]     = 'accounting_number';
        $this->changedFields[] = 'accounting_number';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['accounting_number']) === false) {
            $this->fieldsValuesHistory['accounting_number'] = [];
        }
        $this->fieldsValuesHistory['accounting_number'][] = $accountingNumber;

        return $this;
    }

    /**
     * Getter for `cost_date` field value.
     *
     * @return null|string
     */
    public function getCostDate(): ?string
    {

        return $this->getCoreCostDate(...func_get_args());
    }

    /**
     * Core getter for `cost_date` field value.
     *
     * @return null|string
     */
    public function getCoreCostDate(): ?string
    {

        if (empty($this->costDate) === true) {
            $this->costDate = null;
        }

        if ($this->costDate !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('cost_date')
                ->formatToExcel($this->costDate);
        }

        return $this->costDate;
    }


    /**
     * Setter for `cost_date` field value.
     *
     * @param null|string $costDate Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCostDate(?string $costDate): WfrRuQ8awuMItem
    {

        return $this->setCoreCostDate($costDate);
    }

    /**
     * Core setter for `cost_date` field value.
     *
     * @param null|string $costDate Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCoreCostDate(?string $costDate): WfrRuQ8awuMItem
    {

        // Test value.
        $this->grabField('cost_date')->isValueValid($costDate);

        // If there is nothing to be changed.
        if ($this->costDate === $costDate) {
            return $this;
        }

        // Save.
        $this->costDate = $costDate;

        // Note that was set.
        $this->setFields[]     = 'cost_date';
        $this->changedFields[] = 'cost_date';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['cost_date']) === false) {
            $this->fieldsValuesHistory['cost_date'] = [];
        }
        $this->fieldsValuesHistory['cost_date'][] = $costDate;

        return $this;
    }

    /**
     * Getter for `cost_category_type` field value.
     *
     * @return null|string
     */
    public function getCostCategoryType(): ?string
    {

        return $this->getCoreCostCategoryType(...func_get_args());
    }

    /**
     * Core getter for `cost_category_type` field value.
     *
     * @return null|string
     */
    public function getCoreCostCategoryType(): ?string
    {

        return $this->costCategoryType;
    }


    /**
     * Setter for `cost_category_type` field value.
     *
     * @param null|string $costCategoryType Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCostCategoryType(?string $costCategoryType): WfrRuQ8awuMItem
    {

        return $this->setCoreCostCategoryType($costCategoryType);
    }

    /**
     * Core setter for `cost_category_type` field value.
     *
     * @param null|string $costCategoryType Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCoreCostCategoryType(?string $costCategoryType): WfrRuQ8awuMItem
    {

        // Test value.
        $this->grabField('cost_category_type')->isValueValid($costCategoryType);

        // If there is nothing to be changed.
        if ($this->costCategoryType === $costCategoryType) {
            return $this;
        }

        // Save.
        $this->costCategoryType = $costCategoryType;

        // Note that was set.
        $this->setFields[]     = 'cost_category_type';
        $this->changedFields[] = 'cost_category_type';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['cost_category_type']) === false) {
            $this->fieldsValuesHistory['cost_category_type'] = [];
        }
        $this->fieldsValuesHistory['cost_category_type'][] = $costCategoryType;

        return $this;
    }

    /**
     * Getter for `eligibility` field value.
     *
     * @return null|string
     */
    public function getEligibility(): ?string
    {

        return $this->getCoreEligibility(...func_get_args());
    }

    /**
     * Core getter for `eligibility` field value.
     *
     * @return null|string
     */
    public function getCoreEligibility(): ?string
    {

        return $this->eligibility;
    }


    /**
     * Setter for `eligibility` field value.
     *
     * @param null|string $eligibility Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setEligibility(?string $eligibility): WfrRuQ8awuMItem
    {

        return $this->setCoreEligibility($eligibility);
    }

    /**
     * Core setter for `eligibility` field value.
     *
     * @param null|string $eligibility Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCoreEligibility(?string $eligibility): WfrRuQ8awuMItem
    {

        // Test value.
        $this->grabField('eligibility')->isValueValid($eligibility);

        // If there is nothing to be changed.
        if ($this->eligibility === $eligibility) {
            return $this;
        }

        // Save.
        $this->eligibility = $eligibility;

        // Note that was set.
        $this->setFields[]     = 'eligibility';
        $this->changedFields[] = 'eligibility';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['eligibility']) === false) {
            $this->fieldsValuesHistory['eligibility'] = [];
        }
        $this->fieldsValuesHistory['eligibility'][] = $eligibility;

        return $this;
    }

    /**
     * Getter for `additional_notes` field value.
     *
     * @return null|string
     */
    public function getAdditionalNotes(): ?string
    {

        return $this->getCoreAdditionalNotes(...func_get_args());
    }

    /**
     * Core getter for `additional_notes` field value.
     *
     * @return null|string
     */
    public function getCoreAdditionalNotes(): ?string
    {

        return $this->additionalNotes;
    }


    /**
     * Setter for `additional_notes` field value.
     *
     * @param null|string $additionalNotes Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setAdditionalNotes(?string $additionalNotes): WfrRuQ8awuMItem
    {

        return $this->setCoreAdditionalNotes($additionalNotes);
    }

    /**
     * Core setter for `additional_notes` field value.
     *
     * @param null|string $additionalNotes Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCoreAdditionalNotes(?string $additionalNotes): WfrRuQ8awuMItem
    {

        // Test value.
        $this->grabField('additional_notes')->isValueValid($additionalNotes);

        // If there is nothing to be changed.
        if ($this->additionalNotes === $additionalNotes) {
            return $this;
        }

        // Save.
        $this->additionalNotes = $additionalNotes;

        // Note that was set.
        $this->setFields[]     = 'additional_notes';
        $this->changedFields[] = 'additional_notes';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['additional_notes']) === false) {
            $this->fieldsValuesHistory['additional_notes'] = [];
        }
        $this->fieldsValuesHistory['additional_notes'][] = $additionalNotes;

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
     * @return WfrRuQ8awuMItem
     */
    public function setMonitoringCardId(?int $monitoringCardId): WfrRuQ8awuMItem
    {

        return $this->setCoreMonitoringCardId($monitoringCardId);
    }

    /**
     * Core setter for `monitoring_card_id` field value.
     *
     * @param null|integer $monitoringCardId Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCoreMonitoringCardId(?int $monitoringCardId): WfrRuQ8awuMItem
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
     * Getter for `amount_brutto` field value.
     *
     * @return null|float
     */
    public function getAmountBrutto(): ?float
    {

        return $this->getCoreAmountBrutto(...func_get_args());
    }

    /**
     * Core getter for `amount_brutto` field value.
     *
     * @return null|float
     */
    public function getCoreAmountBrutto(): ?float
    {

        return $this->amountBrutto;
    }


    /**
     * Setter for `amount_brutto` field value.
     *
     * @param null|float $amountBrutto Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setAmountBrutto(?float $amountBrutto): WfrRuQ8awuMItem
    {

        return $this->setCoreAmountBrutto($amountBrutto);
    }

    /**
     * Core setter for `amount_brutto` field value.
     *
     * @param null|float $amountBrutto Value to be set.
     *
     * @return WfrRuQ8awuMItem
     */
    public function setCoreAmountBrutto(?float $amountBrutto): WfrRuQ8awuMItem
    {

        // Test value.
        $this->grabField('amount_brutto')->isValueValid($amountBrutto);

        // If there is nothing to be changed.
        if (
            $this->amountBrutto === $amountBrutto
            || (string) $this->amountBrutto === (string) $amountBrutto
        ) {
            return $this;
        }

        // Save.
        $this->amountBrutto = $amountBrutto;

        // Note that was set.
        $this->setFields[]     = 'amount_brutto';
        $this->changedFields[] = 'amount_brutto';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['amount_brutto']) === false) {
            $this->fieldsValuesHistory['amount_brutto'] = [];
        }
        $this->fieldsValuesHistory['amount_brutto'][] = $amountBrutto;

        return $this;
    }
}
