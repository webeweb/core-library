<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Argument\Exception;

use Exception;
use InvalidArgumentException;

/**
 * Float argument exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument\Exception
 */
class FloatArgumentException extends InvalidArgumentException {

    /**
     * Constructor.
     *
     * @param mixed $argument The argument.
     * @param Exception $previous The previous exception.
     */
    public function __construct($argument, Exception $previous = null) {
        parent::__construct(sprintf("The argument \"%s\" is not a float", print_r($argument, true)), 500, $previous);
    }
}
