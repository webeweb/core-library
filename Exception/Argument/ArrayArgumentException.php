<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Exception\Argument;

use Exception;

/**
 * Array argument exception.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception
 * @final
 */
final class ArrayArgumentException extends IllegalArgumentException {

    /**
     * Constructor.
     *
     * @param $argument The argument.
     */
    public function __construct($argument, Exception $previous = null) {
        parent::__construct(sprintf("The argument \"%s\" is not an array", print_r($argument, true)), $previous);
    }

}
