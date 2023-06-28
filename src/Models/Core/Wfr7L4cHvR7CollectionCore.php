<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\Wfr7L4cHvR7ItemModel;
use Przeslijmi\Shortquery\Data\Collection;
use Przeslijmi\Shortquery\Data\Field;

/**
 * ShortQuery Collection Core class for Wfr7L4cHvR7Item Model Collection.
 *
 * This is a `<shortquery-role:collection-core>`.
 */
class Wfr7L4cHvR7CollectionCore extends Collection
{

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->model = Wfr7L4cHvR7ItemModel::getInstance();

        // Call parent (set additional logics).
        parent::__construct(...func_get_args());
    }
}
