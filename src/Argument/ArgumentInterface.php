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
     * Argument "array".
     *
     * @var int
     */
    const ARGUMENT_ARRAY = 220;

    /**
     * Argument "boolean".
     *
     * @var int
     */
    const ARGUMENT_BOOLEAN = 254;

    /**
     * Argument "date".
     *
     * @var int
     */
    const ARGUMENT_DATE = 86;

    /**
     * Argument "double".
     *
     * @var int
     */
    const ARGUMENT_DOUBLE = 195;

    /**
     * Argument "float".
     *
     * @var int
     */
    const ARGUMENT_FLOAT = 179;

    /**
     * Argument "integer".
     *
     * @var int
     */
    const ARGUMENT_INTEGER = 308;

    /**
     * Argument "number".
     *
     * @var int
     */
    const ARGUMENT_NUMBER = 236;

    /**
     * Argument "object".
     *
     * @var int
     */
    const ARGUMENT_OBJECT = 204;

    /**
     * Argument "resource".
     *
     * @var int
     */
    const ARGUMENT_RESOURCE = 419;

    /**
     * Argument "string".
     *
     * @var int
     */
    const ARGUMENT_STRING = 261;

    /**
     * Argument "timestamp".
     *
     * @var int
     */
    const ARGUMENT_TIMESTAMP = 567;
}
