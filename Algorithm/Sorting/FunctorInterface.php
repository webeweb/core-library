<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Algorithm\Sorting;

/**
 * Functor interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Algorithm\Sorting
 */
interface FunctorInterface {

    /**
     * Compare two values.
     *
     * @param mixed $valueA The first value to compare.
     * @param type $valueB The second value to compare.
     * @return boolean Returns true if first value is less than second value.
     */
    public function compare($valueA, $valueB);
}
