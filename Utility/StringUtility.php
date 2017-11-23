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
 * String utility.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Utility
 * @final
 */
final class StringUtility {

	/**
	 * Parse an array.
	 *
	 * @param array $values The values.
	 * @return string Returns the array converted into key="value".
	 */
	public static function parseArray(array $values) {

		// Initialize the array.
		$output = [];

		// Handle each value.
		foreach ($values as $key => $value) {

			// Check if the value is null.
			if (is_null($value)) {
				continue;
			}

			$buffer = "";

			// Check if the value is an array.
			if (is_array($value)) {
				$buffer = trim(implode(" ", $value));
			} else {
				$buffer = trim($value);
			}

			// Check if the buffer is not empty.
			if ($buffer !== "") {
				$output[] = $key . "=\"" . preg_replace("/\s+/", " ", $buffer) . "\"";
			}
		}

		// Concatenates all attributes.
		return implode(" ", $output);
	}

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
