<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Argument;

/**
 * Argument interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument
 */
interface ArgumentInterface {

    /**
     * Argument "Array".
     *
     * @var int
     */
    const ARGUMENT_ARRAY = 220;

    /**
     * Argument "Boolean".
     *
     * @var int
     */
    const ARGUMENT_BOOLEAN = 254;

    /**
     * Argument "Date".
     *
     * @var int
     */
    const ARGUMENT_DATE = 86;

    /**
     * Argument "Double".
     *
     * @var int
     */
    const ARGUMENT_DOUBLE = 195;

    /**
     * Argument "Float".
     *
     * @var int
     */
    const ARGUMENT_FLOAT = 179;

    /**
     * Argument "Integer".
     *
     * @var int
     */
    const ARGUMENT_INTEGER = 308;

    /**
     * Argument "Number".
     *
     * @var int
     */
    const ARGUMENT_NUMBER = 236;

    /**
     * Argument "Object".
     *
     * @var int
     */
    const ARGUMENT_OBJECT = 204;

    /**
     * Argument "Resource".
     *
     * @var int
     */
    const ARGUMENT_RESOURCE = 419;

    /**
     * Argument "String".
     *
     * @var int
     */
    const ARGUMENT_STRING = 261;

    /**
     * Argument "Timestamp".
     *
     * @var int
     */
    const ARGUMENT_TIMESTAMP = 567;
}
