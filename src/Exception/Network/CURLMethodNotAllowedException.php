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

/**
 * cURL method not allowed exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception\Network
 */
class CURLMethodNotAllowedException extends AbstractCURLException {

    /**
     * Constructor.
     *
     * @param string $method The method.
     */
    public function __construct($method) {
        parent::__construct(sprintf("The method \"%s\" is not allowed", $method));
    }

}
