<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Helper;

use Closure;
use WBW\Library\Types\Exception\ObjectArgumentException;

/**
 * Object helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Helper
 */
class ObjectHelper {

    /**
     * Coalesce.
     *
     * @param array $values The values.
     * @return mixed|null Returns the first non-null value.
     */
    public static function coalesce(...$values) {

        foreach ($values as $current) {
            if (null !== $current) {
                return $current;
            }
        }

        return null;
    }

    /**
     * Compare two objects.
     *
     * @param mixed|null $a The object A.
     * @param mixed|null $b The object B.
     * @return int|null Returns null when $a end $b are null
     *                          -1 when $a is not null and $b is null
     *                          0 when $a and $b are not null
     *                          1 when $a is null and $b is not null
     */
    public static function compare($a, $b): ?int {

        if (null === $a && null === $b) {
            return null;
        }

        if (null !== $a && null === $b) {
            return -1;
        }

        if (null === $a && null !== $b) {
            return 1;
        }

        return 0;
    }

    /**
     * Determines if a value is an object.
     *
     * @param mixed $value The value.
     * @return void
     * @throws ObjectArgumentException Throws an Object argument exception if the value is not of expected type.
     */
    public static function isObject($value): void {
        if (false === is_object($value)) {
            throw new ObjectArgumentException($value);
        }
    }

    /**
     * Usort closure by string.
     *
     * @param string $method The method.
     * @param Closure $closure the closure.
     * @return Closure Returns the usort closure.
     */
    protected static function usortClosure(string $method, Closure $closure): Closure {

        /**
         * Get the value.
         *
         * @param object $object The object.
         * @param string $method The method.
         * @return mixed|null Returns the value.
         */
        $callback = function($object, string $method) {

            $value = null;

            if (true === is_object($object) && true === method_exists($object, $method)) {
                $value = $object->$method();
            }

            return $value;
        };

        return function($object1, $object2) use ($method, $callback, $closure): int {

            $value1 = $callback($object1, $method);
            $value2 = $callback($object2, $method);

            return $closure($value1, $value2);
        };
    }

    /**
     * Usort closure by boolean.
     *
     * @param string $method The method.
     * @param bool $asc ASC ?
     * @return Closure Returns the usort closure.
     */
    public static function usortClosureByBoolean(string $method, bool $asc = true): Closure {

        $closure = BooleanHelper::usortClosure($asc);

        return static::usortClosure($method, $closure);
    }

    /**
     * Usort closure by float.
     *
     * @param string $method The method.
     * @param bool $asc ASC ?
     * @return Closure Returns the usort closure.
     */
    public static function usortClosureByFloat(string $method, bool $asc = true): Closure {

        $closure = FloatHelper::usortClosure($asc);

        return static::usortClosure($method, $closure);
    }

    /**
     * Usort closure by integer.
     *
     * @param string $method The method.
     * @param bool $asc ASC ?
     * @return Closure Returns the usort closure.
     */
    public static function usortClosureByInteger(string $method, bool $asc = true): Closure {

        $closure = IntegerHelper::usortClosure($asc);

        return static::usortClosure($method, $closure);
    }

    /**
     * Usort closure by string.
     *
     * @param string $method The method.
     * @param bool $asc ASC ?
     * @return Closure Returns the usort closure.
     */
    public static function usortClosureByString(string $method, bool $asc = true): Closure {

        $closure = StringHelper::usortClosure($asc);

        return static::usortClosure($method, $closure);
    }
}
