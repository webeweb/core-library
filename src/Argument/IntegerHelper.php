<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Argument;

use WBW\Library\Core\Exception\Argument\IntegerArgumentException;
use WBW\Library\Core\Database\PaginateHelper;

/**
 * Integer helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument
 */
class IntegerHelper {

    /**
     * Get a lines limit.
     *
     * @param int $pageNumber The page number.
     * @param int $divider The divider.
     * @param int $total The total.
     * @return int[] Returns the offset and limit in case of success, -1 otherwise.
     * @deprecated
     */
    public static function getLinesLimit($pageNumber, $divider, $total = -1) {
        return PaginateHelper::getPageOffsetAndLimit($pageNumber, $divider, $total);
    }

    /**
     * Get a pages count.
     *
     * @param int $linesNumber The lines number.
     * @param int $divider The divider.
     * @return int Returns the pages count in case of success, -1 otherwise.
     * @deprecated
     */
    public static function getPagesCount($linesNumber, $divider) {
        return PaginateHelper::getPagesCount($linesNumber, $divider);
    }

    /**
     * Determines if a value is an integer.
     *
     * @return void
     * @param mixed $value The value.
     * @throws IntegerArgumentException Throws a Integer argument exception if the value is not of expected type.
     */
    public static function isInteger($value) {
        if (false === is_integer($value)) {
            throw new IntegerArgumentException($value);
        }
    }

    /**
     * Parse a boolean.
     *
     * @param bool $value The boolean value.
     * @return int Returns 1 in case of success, 0 otherwise.
     */
    public static function parseBoolean($value) {
        return $value === true ? 1 : 0;
    }

    /**
     * Parse a string.
     *
     * @param string $value The string value.
     * @return int Returns the integer represented by the string value..
     * @throws IntegerArgumentException Throws an integer argument exception if the string value does not represent an integer.
     */
    public static function parseString($value) {
        if (null === $value) {
            return null;
        }
        if (0 === preg_match("/^\-?[0-9]{1,}$/", $value)) {
            throw new IntegerArgumentException($value);
        }
        return intval($value);
    }

}
