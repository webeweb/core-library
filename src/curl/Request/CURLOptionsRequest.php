<?php

/**
 * This file is part of the core-library-package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\CURL\Request;

use WBW\Library\CURL\Configuration\CURLConfiguration;

/**
 * cURL OPTIONS request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\CURL\Request
 */
class CURLOptionsRequest extends AbstractCURLRequest {

    /**
     * Constructor.
     *
     * @param CURLConfiguration $configuration The configuration.
     * @param string $resourcePath The resource path.
     */
    public function __construct(CURLConfiguration $configuration, $resourcePath) {
        parent::__construct(self::HTTP_METHOD_OPTIONS, $configuration, $resourcePath);
    }

}
