<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Network\CURL\Response;

use WBW\Library\Core\Network\CURL\API\CurlResponseInterface;

/**
 * cURL response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\CURL\Response
 */
class CurlResponse implements CurlResponseInterface {

    /**
     * Request body.
     *
     * @var string|null
     */
    private $requestBody;

    /**
     * Request header.
     *
     * @var array
     */
    private $requestHeader;

    /**
     * Request URL.
     *
     * @var string|null
     */
    private $requestUrl;

    /**
     * Response body.
     *
     * @var string|null
     */
    private $responseBody;

    /**
     * Response header.
     *
     * @var array
     */
    private $responseHeader;

    /**
     * Response info.
     *
     * @var array
     */
    private $responseInfo;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setRequestHeader([]);
        $this->setResponseHeader([]);
        $this->setResponseInfo([]);
    }

    /**
     * {@inheritDoc}
     */
    public function getRequestBody(): ?string {
        return $this->requestBody;
    }

    /**
     * {@inheritDoc}
     */
    public function getRequestHeader(): array {
        return $this->requestHeader;
    }

    /**
     * {@inheritDoc}
     */
    public function getRequestUrl(): ?string {
        return $this->requestUrl;
    }

    /**
     * {@inheritDoc}
     */
    public function getResponseBody(): ?string {
        return $this->responseBody;
    }

    /**
     * {@inheritDoc}
     */
    public function getResponseHeader(): array {
        return $this->responseHeader;
    }

    /**
     * {@inheritDoc}
     */
    public function getResponseInfo(): array {
        return $this->responseInfo;
    }

    /**
     * Set the request body.
     *
     * @param string|null $requestBody The request body.
     * @return CurlResponse Returns this CURL response.
     */
    public function setRequestBody(?string $requestBody): CurlResponse {
        $this->requestBody = $requestBody;
        return $this;
    }

    /**
     * Set the request header.
     *
     * @param array $requestHeader The request header.
     * @return CurlResponse Returns this CURL response.
     */
    public function setRequestHeader(array $requestHeader): CurlResponse {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * Set the request URL.
     *
     * @param string $requestUrl The request URL.
     * @return CurlResponse Returns this CURL response.
     */
    public function setRequestUrl($requestUrl): CurlResponse {
        $this->requestUrl = $requestUrl;
        return $this;
    }

    /**
     * Set the response body.
     *
     * @param string|null $responseBody The response body.
     * @return CurlResponse Returns this CURL response.
     */
    public function setResponseBody(?string $responseBody): CurlResponse {
        $this->responseBody = $responseBody;
        return $this;
    }

    /**
     * Set the response header.
     *
     * @param array $responseHeader The response header.
     * @return CurlResponse Returns this CURL response.
     */
    public function setResponseHeader(array $responseHeader): CurlResponse {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * Set the response info.
     *
     * @param array $responseInfo The response info.
     * @return CurlResponse Returns this CURL response.
     */
    public function setResponseInfo(array $responseInfo): CurlResponse {
        $this->responseInfo = $responseInfo;
        return $this;
    }
}
