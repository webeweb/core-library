<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Sort\Tree\Alphabetical;

/**
 * Alphabetical tree sort interface.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Sort\Tree\Alphabetical
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
