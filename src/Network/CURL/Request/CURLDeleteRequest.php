<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Network\CURL\Request;

use WBW\Library\Core\Exception\Network\InvalidHTTPMethodException;
use WBW\Library\Core\Network\CURL\Configuration\CURLConfiguration;

/**
 * cURL "DELETE" request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\CURL\Request
 */
class CURLDeleteRequest extends AbstractCURLRequest {

    /**
     * Constructor.
     *
     * @param CURLConfiguration $configuration The configuration.
     * @param string $resourcePath The resource path.
     * @throws InvalidHTTPMethodException Throws an invalid HTTP method exception if the method is not implemented.
     */
    public function __construct(CURLConfiguration $configuration, $resourcePath) {
        parent::__construct(self::HTTP_METHOD_DELETE, $configuration, $resourcePath);
    }
}
