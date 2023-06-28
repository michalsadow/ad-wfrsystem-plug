<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\WfrQ6IoL8dDItemModel;
use Przeslijmi\Shortquery\Data\Collection;
use Przeslijmi\Shortquery\Data\Field;

/**
 * ShortQuery Collection Core class for WfrQ6IoL8dDItem Model Collection.
 *
 * This is a `<shortquery-role:collection-core>`.
 */
class WfrQ6IoL8dDCollectionCore extends Collection
{

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->model = WfrQ6IoL8dDItemModel::getInstance();

        // Call parent (set additional logics).
        parent::__construct(...func_get_args());
    }
}
