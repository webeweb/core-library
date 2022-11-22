<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Exception;

/**
 * Unsupported system exception.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Exception
 */
class UnsupportedSystemException extends AbstractException {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct("This operating system is unsupported");
    }
}
