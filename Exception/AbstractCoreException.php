<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Exception;

use Exception;

/**
 * Abstract core exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception
 * @abstract
 */
abstract class AbstractCoreException extends Exception {

    /**
     * Constructor.
     *
     * @param string $message The message.
     * @param Exception $previous The previous exception.
     */
    public function __construct($message, Exception $previous = null) {
        parent::__construct($message, 500, $previous);
    }

}
