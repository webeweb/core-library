<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Argument;

use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Utility\BooleanUtility;
use WBW\Library\Core\Utility\DoubleUtility;
use WBW\Library\Core\Utility\FloatUtility;
use WBW\Library\Core\Utility\IntegerUtility;

/**
 * Argument converter.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument
 * @final
 */
final class ArgumentConverter implements ArgumentInterface {

	/**
	 * Convert a string value into type $type.
	 *
	 * @param string $value The string value.
	 * @param integer $type The type.
	 * @return mixed Returns the value.
	 * @throws IllegalArgumentException Throws an illegal argument exception if the value is not of expected type.
	 */
	public static function convert($value, $type) {
		switch ($type) {
			case self::TYPE_BOOLEAN:
				return BooleanUtility::parseString($value);
			case self::TYPE_DOUBLE:
				return DoubleUtility::parseString($value);
			case self::TYPE_FLOAT:
				return FloatUtility::parseString($value);
			case self::TYPE_INTEGER:
				return IntegerUtility::parseString($value);
			default:
				throw new IllegalArgumentException("The type \"" . $type . "\" is not implemented");
		}
	}

}
