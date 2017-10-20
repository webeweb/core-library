<?php

/*
 * This file is part of the WBWCoreLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Exception\Directory;

use Exception;
use WBW\Library\Core\Exception\AbstractWBWException;

/**
 * Directory not found exception.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception\Directory
 * @final
 */
final class DirectoryNotFoundException extends AbstractWBWException {

    /**
     * Constructor.
     *
     * @param string $directory The directory.
     * @param Exception $previous The previous exception.
     */
    public function __construct($directory, Exception $previous = null) {
        parent::__construct("The directory \"" . $directory . "\" is not found", $previous);
    }

}
