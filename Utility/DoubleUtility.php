<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Utility;

use WBW\Library\Core\Exception\Argument\DoubleArgumentException;

/**
 * Double utility.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Utility
 * @final
 */
final class DoubleUtility {

	/**
	 * Parse a string.
	 *
	 * @param string $value The string value.
	 * @return double Returns the double represented by the string value.
	 * @throws DoubleArgumentException Throws a double argument exception if the string value does not represent a double.
	 */
	public static function parseString($value) {
		if (is_null($value)) {
			return null;
		}
		if (preg_match("/^[0-9]{1,}(\.[0-9]{0,})?$/", $value) === 0) {
			throw new DoubleArgumentException($value);
		}
		return doubleval($value);
	}

}
