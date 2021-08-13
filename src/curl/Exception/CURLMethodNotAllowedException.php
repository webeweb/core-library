<?php

/**
 * This file is part of the core-library-package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\CURL\Exception;

/**
 * cURL method not allowed exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\CURL\Exception
 */
class CURLMethodNotAllowedException extends AbstractCURLException {

    /**
     * Constructor.
     *
     * @param string $method The method.
     */
    public function __construct($method) {
        parent::__construct("The method \"" . $method . "\" is not allowed");
    }

}
