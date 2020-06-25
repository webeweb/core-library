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

use InvalidArgumentException;
use WBW\Library\Core\Network\CURL\API\CurlRequestInterface;
use WBW\Library\Core\Network\CURL\API\CurlResponseInterface;
use WBW\Library\Core\Network\CURL\Configuration\CurlConfiguration;
use WBW\Library\Core\Network\CURL\Request\CurlDeleteRequest;
use WBW\Library\Core\Network\CURL\Request\CurlGetRequest;
use WBW\Library\Core\Network\CURL\Request\CurlHeadRequest;
use WBW\Library\Core\Network\CURL\Request\CurlOptionsRequest;
use WBW\Library\Core\Network\CURL\Request\CurlPatchRequest;
use WBW\Library\Core\Network\CURL\Request\CurlPostRequest;
use WBW\Library\Core\Network\CURL\Request\CurlPutRequest;
use WBW\Library\Core\Network\CURL\Response\CurlResponse;
use WBW\Library\Core\Network\HTTP\HttpInterface;

/**
 * cURL factory.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\CURL\Factory
 */
class CurlFactory implements HttpInterface {

    /**
     * Create a cURL request.
     *
     * @param string $method The method.
     * @param CurlConfiguration $configuration The configuration.
     * @param string $resourcePath The resource path.
     * @return CurlRequestInterface Returns the cURL request.
     * @throws InvalidArgumentException Throws an invalid argument exception if the method is not implemented.
     */
    public static function newCurlRequest($method, CurlConfiguration $configuration = null, $resourcePath = null) {

        if (null === $configuration) {
            $configuration = new CurlConfiguration();
        }

        switch ($method) {

            case self::HTTP_METHOD_DELETE:
                return new CurlDeleteRequest($configuration, $resourcePath);

            case self::HTTP_METHOD_GET:
                return new CurlGetRequest($configuration, $resourcePath);

            case self::HTTP_METHOD_HEAD:
                return new CurlHeadRequest($configuration, $resourcePath);

            case self::HTTP_METHOD_OPTIONS:
                return new CurlOptionsRequest($configuration, $resourcePath);

            case self::HTTP_METHOD_PATCH:
                return new CurlPatchRequest($configuration, $resourcePath);

            case self::HTTP_METHOD_POST:
                return new CurlPostRequest($configuration, $resourcePath);

            case self::HTTP_METHOD_PUT:
                return new CurlPutRequest($configuration, $resourcePath);
        }

        throw new InvalidArgumentException(sprintf('The HTTP method "%s" is invalid', $method));
    }

    /**
     * Create a cURL response.
     *
     * @return CurlResponseInterface Returns the cURL response.
     */
    public static function newCurlResponse() {
        return new CurlResponse();
    }
}
