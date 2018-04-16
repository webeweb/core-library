<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Exception\IO;

use Exception;

/**
 * Directory not found exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception\IO
 */
class DirectoryNotFoundException extends IOException {

    /**
     * Constructor.
     *
     * @param string $directory The directory.
     * @param Exception $previous The previous exception.
     */
    public function __construct($directory, Exception $previous = null) {
        parent::__construct(sprintf("The directory \"%s\" is not found", $directory), $previous);
    }

}
