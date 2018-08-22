<?php

/**
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
     * @var integer
     */
    const ARGUMENT_ARRAY = 63;

    /**
     * Argument "Boolean".
     *
     * @var integer
     */
    const ARGUMENT_BOOLEAN = 64;

    /**
     * Argument "Date".
     *
     * @var integer
     */
    const ARGUMENT_DATE = 30;

    /**
     * Argument "Double".
     *
     * @var integer
     */
    const ARGUMENT_DOUBLE = 59;

    /**
     * Argument "Float".
     *
     * @var integer
     */
    const ARGUMENT_FLOAT = 54;

    /**
     * Argument "Integer".
     *
     * @var integer
     */
    const ARGUMENT_INTEGER = 78;

    /**
     * Argument "Number".
     *
     * @var integer
     */
    const ARGUMENT_NUMBER = 73;

    /**
     * Argument "Object".
     *
     * @var integer
     */
    const ARGUMENT_OBJECT = 55;

    /**
     * Argument "Resource".
     *
     * @var integer
     */
    const ARGUMENT_RESOURCE = 104;

    /**
     * Argument "String".
     *
     * @var integer
     */
    const ARGUMENT_STRING = 87;

    /**
     * Argument "Timestamp".
     *
     * @var integer
     */
    const ARGUMENT_TIMESTAMP = 116;

}
