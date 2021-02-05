<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Argument;

use DateTime;
use InvalidArgumentException;
use WBW\Library\Core\Argument\Exception\DateArgumentException;
use WBW\Library\Core\Argument\Exception\TimestampArgumentException;
use WBW\Library\Core\Argument\Helper\ArrayHelper;
use WBW\Library\Core\Argument\Helper\BooleanHelper;
use WBW\Library\Core\Argument\Helper\DateTimeHelper;
use WBW\Library\Core\Argument\Helper\DoubleHelper;
use WBW\Library\Core\Argument\Helper\FloatHelper;
use WBW\Library\Core\Argument\Helper\IntegerHelper;
use WBW\Library\Core\Argument\Helper\NumberHelper;
use WBW\Library\Core\Argument\Helper\ObjectHelper;
use WBW\Library\Core\Argument\Helper\ResourceHelper;
use WBW\Library\Core\Argument\Helper\StringHelper;
use WBW\Library\Core\Argument\Helper\TimestampHelper;

/**
 * Argument helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument
 */
class ArgumentHelper implements ArgumentInterface {

    /**
     * Convert a string value into type $type.
     *
     * @param string|null $value The string value.
     * @param int $type The type.
     * @param string|null $dateFormat The date format.
     * @return mixed Returns the value.
     * @throws InvalidArgumentException Throws an invalid argument exception.
     */
    public static function convert(?string $value, int $type, string $dateFormat = null) {

        switch ($type) {

            case static::ARGUMENT_BOOLEAN:
                return BooleanHelper::parseString($value);

            case static::ARGUMENT_DATE:
                if (null === $dateFormat) {
                    throw new InvalidArgumentException("The date format is null");
                }
                $datetime = DateTime::createFromFormat($dateFormat, $value);
                if (false === $datetime) {
                    throw new DateArgumentException($value);
                }
                return $datetime;

            case static::ARGUMENT_DOUBLE:
                return DoubleHelper::parseString($value);

            case static::ARGUMENT_FLOAT:
                return FloatHelper::parseString($value);

            case static::ARGUMENT_INTEGER:
                return IntegerHelper::parseString($value);

            case static::ARGUMENT_STRING:
                return $value;

            case static::ARGUMENT_TIMESTAMP:
                if (null === $dateFormat) {
                    throw new InvalidArgumentException("The datetime format is null");
                }
                $datetime = DateTime::createFromFormat($dateFormat, $value);
                if (false === $datetime) {
                    throw new TimestampArgumentException($value);
                }
                return $datetime;
        }

        throw new InvalidArgumentException("The type \"{$type}\" is not implemented");
    }

    /**
     * Determines if the $value is of type $type.
     *
     * @param mixed $value The value.
     * @param int $type The type.
     * @return bool Returns true.
     * @throws InvalidArgumentException Throws an invalid argument exception.
     */
    public static function isTypeOf($value, int $type): bool {

        switch ($type) {

            case static::ARGUMENT_ARRAY:
                ArrayHelper::isArray($value);
                return true;

            case static::ARGUMENT_BOOLEAN:
                BooleanHelper::isBoolean($value);
                return true;

            case static::ARGUMENT_DATE:
                DateTimeHelper::isDate($value);
                return true;

            case static::ARGUMENT_DOUBLE:
                DoubleHelper::isDouble($value);
                return true;

            case static::ARGUMENT_FLOAT:
                FloatHelper::isFloat($value);
                return true;

            case static::ARGUMENT_INTEGER:
                IntegerHelper::isInteger($value);
                return true;

            case static::ARGUMENT_NUMBER:
                NumberHelper::isNumber($value);
                return true;

            case static::ARGUMENT_OBJECT:
                ObjectHelper::isObject($value);
                return true;

            case static::ARGUMENT_RESOURCE:
                ResourceHelper::isResource($value);
                return true;

            case static::ARGUMENT_STRING:
                StringHelper::isString($value);
                return true;

            case static::ARGUMENT_TIMESTAMP:
                TimestampHelper::isTimestamp($value);
                return true;
        }

        throw new InvalidArgumentException("The type \"{$type}\" is not implemented");
    }
}
