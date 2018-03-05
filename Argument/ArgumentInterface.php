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
     * Type "Array".
     *
     * @var integer
     */
    const TYPE_ARRAY = 63;

    /**
     * Type "Boolean".
     *
     * @var integer
     */
    const TYPE_BOOLEAN = 64;

    /**
     * Type "Date".
     *
     * @var integer
     */
    const TYPE_DATE = 30;

    /**
     * Type "Double".
     *
     * @var integer
     */
    const TYPE_DOUBLE = 59;

    /**
     * Type "Float".
     *
     * @var integer
     */
    const TYPE_FLOAT = 54;

    /**
     * Type "Integer".
     *
     * @var integer
     */
    const TYPE_INTEGER = 78;

    /**
     * Type "Number".
     *
     * @var integer
     */
    const TYPE_NUMBER = 73;

    /**
     * Type "Object".
     *
     * @var integer
     */
    const TYPE_OBJECT = 55;

    /**
     * Type "Resource".
     *
     * @var integer
     */
    const TYPE_RESOURCE = 104;

    /**
     * Type "String".
     *
     * @var integer
     */
    const TYPE_STRING = 87;

    /**
     * Type "Timestamp".
     *
     * @var integer
     */
    const TYPE_TIMESTAMP = 116;

}
