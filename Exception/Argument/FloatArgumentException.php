<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Exception\Argument;

use Exception;

/**
 * Float argument exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception
 */
class FloatArgumentException extends IllegalArgumentException {

    /**
     * Constructor.
     *
     * @param $argument The argument.
     * @param Exception $previous The previous exception.
     */
    public function __construct($argument, Exception $previous = null) {
        parent::__construct(sprintf("The argument \"%s\" is not a float", print_r($argument, true)), $previous);
    }

}
