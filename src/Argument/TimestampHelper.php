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

use WBW\Library\Core\Exception\Argument\TimestampArgumentException;

/**
 * Timestamp helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument
 */
class TimestampHelper {

    /**
     * Determines if a value is a timestamp.
     *
     * @param mixed $value The value.
     * @return void
     * @throws TimestampArgumentException Throws a Timestamp argument exception if the value is not of expected type.
     */
    public static function isTimestamp($value) {
        if (false === strtotime($value)) {
            throw new TimestampArgumentException($value);
        }
    }

}
