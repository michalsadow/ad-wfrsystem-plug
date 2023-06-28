<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\WfroftF003eItemModel;
use Przeslijmi\Shortquery\Data\Collection;
use Przeslijmi\Shortquery\Data\Field;

/**
 * ShortQuery Collection Core class for WfroftF003eItem Model Collection.
 *
 * This is a `<shortquery-role:collection-core>`.
 */
class WfroftF003eCollectionCore extends Collection
{

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->model = WfroftF003eItemModel::getInstance();

        // Call parent (set additional logics).
        parent::__construct(...func_get_args());
    }
}
