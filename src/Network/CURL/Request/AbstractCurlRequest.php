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

use DateTime;
use InvalidArgumentException;
use WBW\Library\Core\Argument\ArgumentHelper;
use WBW\Library\Core\Network\CURL\API\CurlRequestInterface;
use WBW\Library\Core\Network\CURL\API\CurlResponseInterface;
use WBW\Library\Core\Network\CURL\Configuration\CurlConfiguration;
use WBW\Library\Core\Network\CURL\Exception\CurlRequestCallException;
use WBW\Library\Core\Network\CURL\Factory\CurlFactory;
use WBW\Library\Core\Network\CURL\Helper\CurlHelper;
use WBW\Library\Core\Network\HTTP\HttpInterface;

/**
 * Abstract cURL request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\CURL\Request
 * @abstract
 */
abstract class AbstractCurlRequest implements CurlRequestInterface, HttpInterface {

    /**
     * Content-Type "application/x-www-form-urlencoded".
     * @var string
     */
    const CONTENT_TYPE_X_WWW_FORM_URLENCODED = "Content-Type: application/x-www-form-urlencoded";

    /**
     * Configuration.
     *
     * @var CurlConfiguration
     */
    private $configuration;

    /**
     * Headers.
     *
     * @var array
     */
    private $headers = [];

    /**
     * Method.
     *
     * @var string
     */
    private $method = self::HTTP_METHOD_GET;

    /**
     * POST data.
     *
     * @var array
     */
    private $postData = [];

    /**
     * Query data.
     *
     * @var array
     */
    private $queryData = [];

    /**
     * Resource path.
     *
     * @var string
     */
    private $resourcePath;

    /**
     * Constructor.
     *
     * @param string $method The Method.
     * @param CurlConfiguration $configuration The configuration.
     * @param string $resourcePath The resource path.
     * @throws InvalidArgumentException Throws an invalid argument exception if the method is invalid.
     */
    protected function __construct($method, CurlConfiguration $configuration, $resourcePath) {
        $this->setConfiguration($configuration);
        $this->setMethod($method);
        $this->setResourcePath($resourcePath);
    }

    /**
     * {@inheritdoc}
     */
    public function addHeader($name, $value) {
        ArgumentHelper::isTypeOf($name, ArgumentHelper::ARGUMENT_STRING);
        $this->headers[$name] = $value;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function addPostData($name, $value) {
        ArgumentHelper::isTypeOf($name, ArgumentHelper::ARGUMENT_STRING);
        $this->postData[$name] = $value;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function addQueryData($name, $value) {
        ArgumentHelper::isTypeOf($name, ArgumentHelper::ARGUMENT_STRING);
        $this->queryData[$name] = $value;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function call() {

        $requestHeader = $this->mergeHeaders();
        $requestBody   = http_build_query($this->getPostData());

        if (true === in_array("Content-Type: application/json", $requestHeader)) {
            $requestBody = json_encode($this->getPostData());
        }

        $requestUrl = $this->mergeUrl();
        if (0 < count($this->getQueryData())) {
            $requestUrl = implode("?", [$requestUrl, http_build_query($this->getQueryData())]);
        }

        $stream = CurlHelper::initStream($requestUrl, $this->getConfiguration());

        CurlHelper::setHeaders($stream, $requestHeader);
        CurlHelper::setPost($stream, $this->getMethod(), $requestBody);
        CurlHelper::setProxy($stream, $this->getConfiguration());
        CurlHelper::setReturnTransfer($stream);
        CurlHelper::setSsl($stream, $this->getConfiguration());
        CurlHelper::setTimeout($stream, $this->getConfiguration());
        CurlHelper::setUserAgent($stream, $this->getConfiguration());
        CurlHelper::setVerbose($stream, $this->getConfiguration(), $requestUrl, $requestBody);

        $curlExec    = curl_exec($stream);
        $curlGetInfo = curl_getinfo($stream, CURLINFO_HEADER_SIZE);

        $responseHeader = $this->parseheader(substr($curlExec, 0, $curlGetInfo));
        $responseBody   = substr($curlExec, $curlGetInfo);
        $responseInfo   = curl_getinfo($stream);

        if (true === $this->getConfiguration()->getDebug()) {
            $msg = (new DateTime())->format("c") . " [DEBUG] {$requestUrl}" . PHP_EOL . "HTTP response body ~BEGIN~" . PHP_EOL . print_r($responseBody, true) . PHP_EOL . "~END~" . PHP_EOL;
            error_log($msg, 3, $this->getConfiguration()->getDebugFile());
        }

        $response = $this->prepareResponse($requestBody, $requestHeader, $requestUrl, $responseBody, $responseHeader, $responseInfo);

        $curlHttpCode = $responseInfo["http_code"];
        if (200 <= $curlHttpCode && $curlHttpCode <= 299) {
            return $response;
        }

        $msg = curl_errno($stream);
        if (0 === $curlHttpCode) {
            if (false === empty(curl_error($stream))) {
                $msg = "Call to ${requestUrl} failed : " . curl_error($stream);
            } else {
                $msg = "Call to ${requestUrl} failed, but for an unknown reason. This could happen if you are disconnected from the network.";
            }
        }

        throw new CurlRequestCallException($msg, $curlHttpCode, $response);
    }

    /**
     * {@inheritdoc}
     */
    public function clearHeaders() {
        return $this->setHeaders([]);
    }

    /**
     * {@inheritdoc}
     */
    public function clearPostData() {
        return $this->setPostData([]);
    }

    /**
     * {@inheritdoc}
     */
    public function clearQueryData() {
        return $this->setQueryData([]);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfiguration() {
        return $this->configuration;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeaders() {
        return $this->headers;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod() {
        return $this->method;
    }

    /**
     * {@inheritdoc}
     */
    public function getPostData() {
        return $this->postData;
    }

    /**
     * {@inheritdoc}
     */
    public function getQueryData() {
        return $this->queryData;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return $this->resourcePath;
    }

    /**
     * Merge the headers.
     *
     * @return array Returns the merged headers.
     */
    private function mergeHeaders() {

        $headers = [];
        foreach (array_merge($this->getConfiguration()->getHeaders(), $this->getHeaders()) as $key => $value) {
            $headers[] = implode(": ", [$key, $value]);
        }

        return $headers;
    }

    /**
     * Merge the URL.
     *
     * @return string Returns the merged URL.
     */
    private function mergeUrl() {

        $mergedURL = [
            $this->getConfiguration()->getHost(),
        ];

        if (null !== $this->getResourcePath() && "" !== $this->getResourcePath()) {
            $mergedURL[] = $this->getResourcePath();
        }

        return implode("/", $mergedURL);
    }

    /**
     * Parse the raw header.
     *
     * @param string $rawHeader The raw header.
     * @return array Returns the headers.
     */
    private function parseHeader($rawHeader) {

        $headers = [];
        $key     = "";

        foreach (explode("\n", $rawHeader) as $h) {
            $h = explode(":", $h, 2);
            if (true === isset($h[1])) {
                if (false === isset($headers[$h[0]])) {
                    $headers[$h[0]] = trim($h[1]);
                } else if (true === is_array($headers[$h[0]])) {
                    $headers[$h[0]] = array_merge($headers[$h[0]], [trim($h[1])]);
                } else {
                    $headers[$h[0]] = array_merge([$headers[$h[0]]], [trim($h[1])]);
                }
                $key = $h[0];
            } else {
                if ("\t" === substr($h[0], 0, 1)) {
                    $headers[$key] .= "\r\n\t" . trim($h[0]);
                } else if (!$key) {
                    $headers[0] = trim($h[0]);
                }
                trim($h[0]);
            }
        }

        return $headers;
    }

    /**
     * Prepare a response.
     *
     * @param string $requestBody The request body.
     * @param array $requestHeader The request header.
     * @param string $requestUri The request URI.
     * @param string $responseBody The response body.
     * @param array $responseHeader The response header.
     * @param array $responseInfo The response info.
     * @return CurlResponseInterface Returns the response.
     */
    private function prepareResponse($requestBody, array $requestHeader, $requestUri, $responseBody, array $responseHeader, array $responseInfo) {

        $response = CurlFactory::newCURLResponse();
        $response->setRequestBody($requestBody);
        $response->setRequestHeader($requestHeader);
        $response->setRequestUrl($requestUri);
        $response->setResponseBody($responseBody);
        $response->setResponseHeader($responseHeader);
        $response->setResponseInfo($responseInfo);

        return $response;
    }

    /**
     * {@inheritdoc}
     */
    public function removeHeader($name) {
        if (true === array_key_exists($name, $this->headers)) {
            unset($this->headers[$name]);
        }
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removePostData($name) {
        if (true === array_key_exists($name, $this->postData)) {
            unset($this->postData[$name]);
        }
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeQueryData($name) {
        if (true === array_key_exists($name, $this->queryData)) {
            unset($this->queryData[$name]);
        }
        return $this;
    }

    /**
     * Set the configuration.
     *
     * @param CurlConfiguration $configuration The configuration.
     * @return CurlRequestInterface Returns this cURL request.
     */
    protected function setConfiguration(CurlConfiguration $configuration) {
        $this->configuration = $configuration;
        return $this;
    }

    /**
     * Set the headers.
     *
     * @param array $headers The headers.
     * @return CurlRequestInterface Returns this cURL request.
     */
    protected function setHeaders(array $headers) {
        $this->headers = $headers;
        return $this;
    }

    /**
     * Set the method.
     *
     * @param string $method The method.
     * @return CurlRequestInterface Returns this cURL request.
     * @throws InvalidArgumentException Throws an invalid argument exception if the method is invalid.
     */
    protected function setMethod($method) {

        switch ($method) {
            case self::HTTP_METHOD_DELETE:
            case self::HTTP_METHOD_GET:
            case self::HTTP_METHOD_HEAD:
            case self::HTTP_METHOD_OPTIONS:
            case self::HTTP_METHOD_PATCH:
            case self::HTTP_METHOD_POST:
            case self::HTTP_METHOD_PUT:
                $this->method = $method;
                break;
            default:
                throw new InvalidArgumentException(sprintf("The HTTP method \"%s\" is invalid", $method));
        }

        return $this;
    }

    /**
     * Set the POST data.
     *
     * @param array $postData The POST data.
     * @return CurlRequestInterface Returns this cURL request.
     */
    protected function setPostData(array $postData) {
        $this->postData = $postData;
        return $this;
    }

    /**
     * Set the query data.
     *
     * @param array $queryData The query data.
     * @return CurlRequestInterface Returns this cURL request.
     */
    protected function setQueryData(array $queryData) {
        $this->queryData = $queryData;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setResourcePath($resourcePath) {
        $this->resourcePath = preg_replace("/^\//", "", trim($resourcePath));
        return $this;
    }
}
