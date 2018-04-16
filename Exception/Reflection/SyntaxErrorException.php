<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Exception\Reflection;

use Exception;
use WBW\Library\Core\Exception\AbstractCoreException;

/**
 * Syntax error exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception\Reflection
 */
class SyntaxErrorException extends AbstractCoreException {

    /**
     * Constructor.
     *
     * @param string $filename The filename.
     * @param Exception $previous The previous exception.
     */
    public function __construct($filename, Exception $previous = null) {
        parent::__construct("The file \"" . $filename . "\" contains syntax errors", $previous);
    }

}
