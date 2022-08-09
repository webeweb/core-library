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
     * Usort callable by string.
     *
     * @param string $method The method.
     * @param callable $closure the closure.
     * @return callable Returns the usort callable.
     */
    protected static function usortCallable(string $method, callable $closure): callable {

        /**
         * Get the value.
         *
         * @param object $object The object.
         * @param string $method The method.
         * @return mixed|null Returns the value.
         */
        $callback = function($object, string $method) {

            if (true === is_object($object) && true === method_exists($object, $method)) {
                return $object->$method();
            }

            return null;
        };

        return function($object1, $object2) use ($method, $callback, $closure): int {

            $value1 = $callback($object1, $method);
            $value2 = $callback($object2, $method);

            return $closure($value1, $value2);
        };
    }

    /**
     * Usort callable by boolean.
     *
     * @param string $method The method.
     * @param bool $asc ASC ?
     * @return callable Returns the usort callable.
     */
    public static function usortCallableByBoolean(string $method, bool $asc = true): callable {

        $closure = BooleanHelper::usortCallable($asc);

        return static::usortCallable($method, $closure);
    }

    /**
     * Usort callable by float.
     *
     * @param string $method The method.
     * @param bool $asc ASC ?
     * @return callable Returns the usort callable.
     */
    public static function usortCallableByFloat(string $method, bool $asc = true): callable {

        $closure = FloatHelper::usortCallable($asc);

        return static::usortCallable($method, $closure);
    }

    /**
     * Usort callable by integer.
     *
     * @param string $method The method.
     * @param bool $asc ASC ?
     * @return callable Returns the usort closure.
     */
    public static function usortCallableByInteger(string $method, bool $asc = true): callable {

        $closure = IntegerHelper::usortCallable($asc);

        return static::usortCallable($method, $closure);
    }

    /**
     * Usort callable by string.
     *
     * @param string $method The method.
     * @param bool $asc ASC ?
     * @return callable Returns the usort callable.
     */
    public static function usortCallableByString(string $method, bool $asc = true): callable {

        $closure = StringHelper::usortCallable($asc);

        return static::usortCallable($method, $closure);
    }
}
