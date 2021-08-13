<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Ftp\Exception;

use Exception;

/**
 * FTP exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Ftp\Exception
 */
class FtpException extends Exception {

    /**
     * Constructor.
     *
     * @param string $message The message
     */
    public function __construct(string $message) {
        parent::__construct($message, 500);
    }
}
