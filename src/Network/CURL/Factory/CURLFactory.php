<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Network\CURL\Factory;

use WBW\Library\Core\Exception\Network\InvalidHTTPMethodException;
use WBW\Library\Core\Network\CURL\API\CURLRequestInterface;
use WBW\Library\Core\Network\CURL\Configuration\CURLConfiguration;
use WBW\Library\Core\Network\CURL\Request\CURLDeleteRequest;
use WBW\Library\Core\Network\CURL\Request\CURLGetRequest;
use WBW\Library\Core\Network\CURL\Request\CURLHeadRequest;
use WBW\Library\Core\Network\CURL\Request\CURLOptionsRequest;
use WBW\Library\Core\Network\CURL\Request\CURLPatchRequest;
use WBW\Library\Core\Network\CURL\Request\CURLPostRequest;
use WBW\Library\Core\Network\CURL\Request\CURLPutRequest;
use WBW\Library\Core\Network\HTTP\HTTPInterface;

/**
 * cURL factory.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\CURL\Factory
 */
class CURLFactory implements HTTPInterface {

    /**
     * Get an instance.
     *
     * @param string $method The method.
     * @param CURLConfiguration $configuration The configuration.
     * @param string $resourcePath The resource path.
     * @return CURLRequestInterface Returns the cURL request.
     * @throws InvalidHTTPMethodException Throws an invalid HTTP method exception if the method is not implemented.
     */
    public static function getInstance($method, CURLConfiguration $configuration = null, $resourcePath = null) {

        if (null === $configuration) {
            $configuration = new CURLConfiguration();
        }

        switch ($method) {

            case self::HTTP_METHOD_DELETE:
                return new CURLDeleteRequest($configuration, $resourcePath);

            case self::HTTP_METHOD_GET:
                return new CURLGetRequest($configuration, $resourcePath);

            case self::HTTP_METHOD_HEAD:
                return new CURLHeadRequest($configuration, $resourcePath);

            case self::HTTP_METHOD_OPTIONS:
                return new CURLOptionsRequest($configuration, $resourcePath);

            case self::HTTP_METHOD_PATCH:
                return new CURLPatchRequest($configuration, $resourcePath);

            case self::HTTP_METHOD_POST:
                return new CURLPostRequest($configuration, $resourcePath);

            case self::HTTP_METHOD_PUT:
                return new CURLPutRequest($configuration, $resourcePath);

            default:
                throw new InvalidHTTPMethodException($method);
        }
    }
}
