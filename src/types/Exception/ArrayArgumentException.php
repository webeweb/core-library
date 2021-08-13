<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Exception;

use Exception;
use InvalidArgumentException;

/**
 * Array argument exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Types\Exception
 */
class ArrayArgumentException extends InvalidArgumentException {

    /**
     * Constructor.
     *
     * @param mixed $argument The argument.
     * @param Exception|null $previous The previous exception.
     */
    public function __construct($argument, Exception $previous = null) {
        parent::__construct(sprintf('The argument "%s" is not an array', print_r($argument, true)), 500, $previous);
    }
}
