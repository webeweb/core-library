<?php

/*
 * This file is part of the WBWCoreLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Form\Validator;

use WBW\Library\Core\Argument\ArgumentInterface;
use WBW\Library\Core\Argument\ArgumentValidator;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;

/**
 * Form validator.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Form\Validator
 * @final
 * @deprecated
 * @see WBW\Library\Core\Argument\ArgumentValidator
 */
final class FormValidator {

	/**
	 * Format Array.
	 */
	const FORMAT_ARRAY = 15;

	/**
	 * Format Boolean.
	 */
	const FORMAT_BOOLEAN = 27;

	/**
	 * Format Double.
	 */
	const FORMAT_DATE = 44;

	/**
	 * Format Double.
	 */
	const FORMAT_DOUBLE = 46;

	/**
	 * Format Float.
	 */
	const FORMAT_FLOAT = 65;

	/**
	 * Format Integer.
	 */
	const FORMAT_INTEGER = 98;

	/**
	 * Format Number.
	 */
	const FORMAT_NUMBER = 197;

	/**
	 * Format Object.
	 */
	const FORMAT_OBJECT = 206;

	/**
	 * Format Resource.
	 */
	const FORMAT_RESOURCE = 228;

	/**
	 * Format String.
	 */
	const FORMAT_STRING = 236;

	/**
	 * Format Timestamp.
	 */
	const FORMAT_TIMESTAMP = 249;

	/**
	 * Determines if the value is in the expected format.
	 *
	 * @param mixed $value The value.
	 * @param int $format The expected format.
	 * @return boolean Returns true
	 * @throws IllegalArgumentException Throws an illegal argument exception if the .
	 * @deprecated
	 */
	public static function isValid($value, $format) {
		switch ($format) {
			case self::FORMAT_ARRAY:
				return ArgumentValidator::isValid($value, ArgumentInterface::TYPE_ARRAY);
			case self::FORMAT_BOOLEAN:
				return ArgumentValidator::isValid($value, ArgumentInterface::TYPE_BOOLEAN);
			case self::FORMAT_DATE:
				return ArgumentValidator::isValid($value, ArgumentInterface::TYPE_DATE);
			case self::FORMAT_DOUBLE:
				return ArgumentValidator::isValid($value, ArgumentInterface::TYPE_DOUBLE);
			case self::FORMAT_FLOAT:
				return ArgumentValidator::isValid($value, ArgumentInterface::TYPE_FLOAT);
			case self::FORMAT_INTEGER:
				return ArgumentValidator::isValid($value, ArgumentInterface::TYPE_INTEGER);
			case self::FORMAT_NUMBER:
				return ArgumentValidator::isValid($value, ArgumentInterface::TYPE_NUMBER);
			case self::FORMAT_OBJECT:
				return ArgumentValidator::isValid($value, ArgumentInterface::TYPE_OBJECT);
			case self::FORMAT_RESOURCE:
				return ArgumentValidator::isValid($value, ArgumentInterface::TYPE_RESOURCE);
			case self::FORMAT_STRING:
				return ArgumentValidator::isValid($value, ArgumentInterface::TYPE_STRING);
			case self::FORMAT_TIMESTAMP:
				return ArgumentValidator::isValid($value, ArgumentInterface::TYPE_TIMESTAMP);
			default:
				return ArgumentValidator::isValid($value, $format);
		}
	}

}
