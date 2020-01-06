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
     * @var string
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
     * @var string
     */
    private $requestUrl;

    /**
     * Response body.
     *
     * @var string
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
     * {@inheritdoc}
     */
    public function getRequestBody() {
        return $this->requestBody;
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestHeader() {
        return $this->requestHeader;
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return $this->requestUrl;
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseBody() {
        return $this->responseBody;
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseHeader() {
        return $this->responseHeader;
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseInfo() {
        return $this->responseInfo;
    }

    /**
     * Set the request body.
     *
     * @param string $requestBody The request body.
     * @return CurlResponse Returns this CURL response.
     */
    public function setRequestBody($requestBody) {
        $this->requestBody = $requestBody;
        return $this;
    }

    /**
     * Set the request header.
     *
     * @param array $requestHeader The request header.
     * @return CurlResponse Returns this CURL response.
     */
    public function setRequestHeader(array $requestHeader) {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * Set the request URL.
     *
     * @param string $requestUrl The request URL.
     * @return CurlResponse Returns this CURL response.
     */
    public function setRequestUrl($requestUrl) {
        $this->requestUrl = $requestUrl;
        return $this;
    }

    /**
     * Set the response body.
     *
     * @param string $responseBody The response body.
     * @return CurlResponse Returns this CURL response.
     */
    public function setResponseBody($responseBody) {
        $this->responseBody = $responseBody;
        return $this;
    }

    /**
     * Set the response header.
     *
     * @param array $responseHeader The response header.
     * @return CurlResponse Returns this CURL response.
     */
    public function setResponseHeader(array $responseHeader) {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * Set the response info.
     *
     * @param array $responseInfo The response info.
     * @return CurlResponse Returns this CURL response.
     */
    public function setResponseInfo(array $responseInfo) {
        $this->responseInfo = $responseInfo;
        return $this;
    }
}
