<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Utility;

/**
 * String utility.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Utility
 * @final
 */
final class StringUtility {

	/**
	 * Parse a boolean.
	 *
	 * @param boolean $value The boolean value.
	 * @return string Returns "true" in case of success, "false" otherwise.
	 */
	public static function parseBoolean($value) {
		return $value === true ? "true" : "false";
	}

}
