<?php

/*
 * This file is part of the WBWCoreLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Exception\File;

use Exception;
use WBW\Library\Core\Exception\AbstractWBWException;

/**
 * File not found exception.
 *
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception\File
 * @final
 */
final class FileNotFoundException extends AbstractWBWException {

    /**
     * Constructor.
     *
     * @param string $filename The filename.
     * @param Exception $previous The previous exception.
     */
    public function __construct($filename, Exception $previous = null) {
        parent::__construct("The file \"" . $filename . "\" is not found", $previous);
    }

}
