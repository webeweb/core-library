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
 * Alphabetical tree sort interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Algorithm\Sorting
 */
interface AlphabeticalTreeSortInterface {

    /**
     * Get the label.
     *
     * @return string Returns the label.
     */
    public function getAlphabeticalTreeSortLabel();

    /**
     * Get the parent.
     *
     * @return AlphabeticalTreeSortInterface Returns the parent.
     */
    public function getAlphabeticalTreeSortParent();
}
