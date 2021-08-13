<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Factory;

use InvalidArgumentException;
use WBW\Library\Curl\API\CurlRequestInterface;
use WBW\Library\Curl\API\CurlResponseInterface;
use WBW\Library\Curl\Configuration\CurlConfiguration;
use WBW\Library\Curl\Request\CurlDeleteRequest;
use WBW\Library\Curl\Request\CurlGetRequest;
use WBW\Library\Curl\Request\CurlHeadRequest;
use WBW\Library\Curl\Request\CurlOptionsRequest;
use WBW\Library\Curl\Request\CurlPatchRequest;
use WBW\Library\Curl\Request\CurlPostRequest;
use WBW\Library\Curl\Request\CurlPutRequest;
use WBW\Library\Curl\Response\CurlResponse;

/**
 * cURL factory.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Curl\Factory
 */
class CurlFactory {

    /**
     * Create a cURL request.
     *
     * @param string $method The method.
     * @param CurlConfiguration|null $configuration The configuration.
     * @param string|null $resourcePath The resource path.
     * @return CurlRequestInterface Returns the cURL request.
     */
    public static function newCurlRequest(string $method, CurlConfiguration $configuration = null, string $resourcePath = null) {

        if (null === $configuration) {
            $configuration = new CurlConfiguration();
        }

        switch ($method) {

            case CurlRequestInterface::CURL_REQUEST_DELETE:
                return new CurlDeleteRequest($configuration, $resourcePath);

            case CurlRequestInterface::CURL_REQUEST_GET:
                return new CurlGetRequest($configuration, $resourcePath);

            case CurlRequestInterface::CURL_REQUEST_HEAD:
                return new CurlHeadRequest($configuration, $resourcePath);

            case CurlRequestInterface::CURL_REQUEST_OPTIONS:
                return new CurlOptionsRequest($configuration, $resourcePath);

            case CurlRequestInterface::CURL_REQUEST_PATCH:
                return new CurlPatchRequest($configuration, $resourcePath);

            case CurlRequestInterface::CURL_REQUEST_POST:
                return new CurlPostRequest($configuration, $resourcePath);

            case CurlRequestInterface::CURL_REQUEST_PUT:
                return new CurlPutRequest($configuration, $resourcePath);
        }

        throw new InvalidArgumentException(sprintf('The HTTP method "%s" is invalid', $method));
    }

    /**
     * Create a cURL response.
     *
     * @return CurlResponseInterface Returns the cURL response.
     */
    public static function newCurlResponse(): CurlResponseInterface {
        return new CurlResponse();
    }
}
