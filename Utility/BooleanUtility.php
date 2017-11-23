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

/**
 * Boolean utility
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Utility
 * @final
 */
final class BooleanUtility {

	/**
	 * Parse a string.
	 *
	 * @param string $value The string value.
	 * @return boolean Returns true in case of success, false otherwise.
	 */
	public static function parseString($value) {
		if (is_null($value)) {
			return false;
		}
		switch (strtolower($value)) {
			case "1":
			case "o":
			case "ok":
			case "oui":
			case "true":
			case "y":
			case "yes":
				return true;
		}
		return false;
	}

}
