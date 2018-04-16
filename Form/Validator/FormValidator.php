<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Form\Validator;

use WBW\Library\Core\Argument\ArgumentConverter;
use WBW\Library\Core\Argument\ArgumentInterface;
use WBW\Library\Core\Argument\ArgumentValidator;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;

/**
 * Form validator.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Form\Validator
 * @final
 * @deprecated
 * @see ArgumentValidator
 */
final class FormValidator {

    /**
     * Format Array.
     *
     * @var integer
     */
    const FORMAT_ARRAY = 15;

    /**
     * Format Boolean.
     *
     * @var integer
     */
    const FORMAT_BOOLEAN = 27;

    /**
     * Format Double.
     *
     * @var integer
     */
    const FORMAT_DATE = 44;

    /**
     * Format Double.
     *
     * @var integer
     */
    const FORMAT_DOUBLE = 46;

    /**
     * Format Float.
     *
     * @var integer
     */
    const FORMAT_FLOAT = 65;

    /**
     * Format Integer.
     *
     * @var integer
     */
    const FORMAT_INTEGER = 98;

    /**
     * Format Number.
     *
     * @var integer
     */
    const FORMAT_NUMBER = 197;

    /**
     * Format Object.
     *
     * @var integer
     */
    const FORMAT_OBJECT = 206;

    /**
     * Format Resource.
     *
     * @var integer
     */
    const FORMAT_RESOURCE = 228;

    /**
     * Format String.
     *
     * @var integer
     */
    const FORMAT_STRING = 236;

    /**
     * Format Timestamp.
     *
     * @var integer
     */
    const FORMAT_TIMESTAMP = 249;

    /**
     * Convert a string value into another format.
     *
     * @param string $value The string value.
     * @param integer $format The format.
     * @return mixed Returns the value.
     * @throws IllegalArgumentException Throws an illegal argument exception if the value is not of expected type.
     * @deprecated
     */
    public static function convert($value, $format, $dateFormat = null) {
        if (true === in_array($format, [self::FORMAT_ARRAY, self::FORMAT_NUMBER, self::FORMAT_OBJECT, self::FORMAT_RESOURCE])) {
            throw new IllegalArgumentException("The type \"" . $format . "\" is not implemented");
        }
        return ArgumentConverter::convert($value, self::transform($format), $dateFormat);
    }

    /**
     * Determines if a value is in the expected format.
     *
     * @param mixed $value The value.
     * @param int $format The expected format.
     * @return boolean Returns true.
     * @throws IllegalArgumentException Throws an illegal argument exception if the format is not implemented.
     * @deprecated
     */
    public static function isValid($value, $format) {
        return ArgumentValidator::isTypeOf($value, self::transform($format));
    }

    /**
     * Transform a constant.
     *
     * @param integer $constant The constant.
     * @return integer Returns the transformed constant.
     * @throws IllegalArgumentException Throws an illegal argument exception if the constant is not implemented.
     */
    private static function transform($constant) {
        switch ($constant) {
            case self::FORMAT_ARRAY:
                return ArgumentInterface::TYPE_ARRAY;
            case self::FORMAT_BOOLEAN:
                return ArgumentInterface::TYPE_BOOLEAN;
            case self::FORMAT_DATE:
                return ArgumentInterface::TYPE_DATE;
            case self::FORMAT_DOUBLE:
                return ArgumentInterface::TYPE_DOUBLE;
            case self::FORMAT_FLOAT:
                return ArgumentInterface::TYPE_FLOAT;
            case self::FORMAT_INTEGER:
                return ArgumentInterface::TYPE_INTEGER;
            case self::FORMAT_NUMBER:
                return ArgumentInterface::TYPE_NUMBER;
            case self::FORMAT_OBJECT:
                return ArgumentInterface::TYPE_OBJECT;
            case self::FORMAT_RESOURCE:
                return ArgumentInterface::TYPE_RESOURCE;
            case self::FORMAT_STRING:
                return ArgumentInterface::TYPE_STRING;
            case self::FORMAT_TIMESTAMP:
                return ArgumentInterface::TYPE_TIMESTAMP;
            default:
                throw new IllegalArgumentException("The type \"" . $constant . "\" is not implemented");
        }
    }

}
