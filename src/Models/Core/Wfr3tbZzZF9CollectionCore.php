<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\Wfr3tbZzZF9ItemModel;
use Przeslijmi\Shortquery\Data\Collection;
use Przeslijmi\Shortquery\Data\Field;

/**
 * ShortQuery Collection Core class for Wfr3tbZzZF9Item Model Collection.
 *
 * This is a `<shortquery-role:collection-core>`.
 */
class Wfr3tbZzZF9CollectionCore extends Collection
{

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->model = Wfr3tbZzZF9ItemModel::getInstance();

        // Call parent (set additional logics).
        parent::__construct(...func_get_args());
    }
}
