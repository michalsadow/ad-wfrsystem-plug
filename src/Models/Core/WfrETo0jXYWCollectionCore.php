<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\WfrETo0jXYWItemModel;
use Przeslijmi\Shortquery\Data\Collection;
use Przeslijmi\Shortquery\Data\Field;

/**
 * ShortQuery Collection Core class for WfrETo0jXYWItem Model Collection.
 *
 * This is a `<shortquery-role:collection-core>`.
 */
class WfrETo0jXYWCollectionCore extends Collection
{

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->model = WfrETo0jXYWItemModel::getInstance();

        // Call parent (set additional logics).
        parent::__construct(...func_get_args());
    }
}
