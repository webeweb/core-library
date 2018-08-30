<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Exception\Network;

use WBW\Library\Core\Exception\IO\IOException;

/**
 * FTP exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception\Network
 */
class FTPException extends IOException {

    /**
     * Constructor.
     *
     * @param string $message The message
     */
    public function __construct($message) {
        parent::__construct($message);
    }

}
