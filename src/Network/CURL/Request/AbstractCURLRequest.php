<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Network\CURL\Request;

use DateTime;
use WBW\Library\Core\Argument\ArgumentHelper;
use WBW\Library\Core\Exception\Network\CURLRequestCallException;
use WBW\Library\Core\Exception\Network\InvalidHTTPMethodException;
use WBW\Library\Core\Network\CURL\Configuration\CURLConfiguration;
use WBW\Library\Core\Network\CURL\Response\CURLResponse;
use WBW\Library\Core\Network\HTTP\HTTPInterface;

/**
 * Abstract cURL request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\CURL\Request
 * @abstract
 */
abstract class AbstractCURLRequest implements CURLRequestInterface, HTTPInterface {

    /**
     * Content-type application/x-www-form-urlencoded
     *
     * @var string
     */
    const CONTENT_TYPE_X_WWW_FORM_URLENCODED = "Content-Type: application/x-www-form-urlencoded";

    /**
     * Configuration.
     *
     * @var CURLConfiguration
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
     * @param CURLConfiguration $configuration The configuration.
     * @param string $resourcePath The resource path.
     * @throws InvalidHTTPMethodException Throws an invalid HTTP method exception if the method is not implemented.
     */
    protected function __construct($method, CURLConfiguration $configuration, $resourcePath) {
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
    }

    /**
     * {@inheritdoc}
     */
    public function addPostData($name, $value) {
        ArgumentHelper::isTypeOf($name, ArgumentHelper::ARGUMENT_STRING);
        $this->postData[$name] = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function addQueryData($name, $value) {
        ArgumentHelper::isTypeOf($name, ArgumentHelper::ARGUMENT_STRING);
        $this->queryData[$name] = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function call() {

        // Define the necessary argurments.
        $curlHeaders  = $this->mergeHeaders();
        $curlPOSTData = http_build_query($this->getPostData());

        //
        if (true === in_array("Content-Type: application/json", $curlHeaders)) {
            $curlPOSTData = json_encode($this->getPostData());
        }

        // Initialize the URL.
        $curlURL = $this->mergeURL();
        if (0 < count($this->getQueryData())) {
            $curlURL = implode("?", [$curlURL, http_build_query($this->getQueryData())]);
        }

        // Initialize cURL.
        $stream = curl_init();

        // Set the connect timeout.
        if (0 < $this->getConfiguration()->getConnectTimeout()) {
            curl_setopt($stream, CURLOPT_CONNECTTIMEOUT, $this->getConfiguration()->getConnectTimeout());
        }

        // Set the encoding.
        if (true === $this->getConfiguration()->getAllowEncoding()) {
            curl_setopt($stream, CURLOPT_ENCODING, "");
        }

        // Set the HTTP headers.
        curl_setopt($stream, CURLOPT_HTTPHEADER, $curlHeaders);

        // Set the post.
        switch ($this->getMethod()) {

            case self::HTTP_METHOD_DELETE:
            case self::HTTP_METHOD_OPTIONS:
            case self::HTTP_METHOD_PATCH:
            case self::HTTP_METHOD_PUT:
                curl_setopt($stream, CURLOPT_CUSTOMREQUEST, $this->getMethod());
                curl_setopt($stream, CURLOPT_POSTFIELDS, $curlPOSTData);
                break;

            case self::HTTP_METHOD_HEAD:
                curl_setopt($stream, CURLOPT_NOBODY, true);
                break;

            case self::HTTP_METHOD_POST:
                curl_setopt($stream, CURLOPT_POST, true);
                curl_setopt($stream, CURLOPT_POSTFIELDS, $curlPOSTData);
                break;
        }

        // Set the proxy.
        if (null !== $this->getConfiguration()->getProxyHost()) {
            curl_setopt($stream, CURLOPT_PROXY, $this->getConfiguration()->getProxyHost());
        }
        if (null !== $this->getConfiguration()->getProxyPort()) {
            curl_setopt($stream, CURLOPT_PROXYPORT, $this->getConfiguration()->getProxyPort());
        }
        if (null !== $this->getConfiguration()->getProxyType()) {
            curl_setopt($stream, CURLOPT_PROXYTYPE, $this->getConfiguration()->getProxyType());
        }
        if (null !== $this->getConfiguration()->getProxyUsername()) {
            curl_setopt($stream, CURLOPT_PROXYUSERPWD, implode(":", [$this->getConfiguration()->getProxyUsername(), $this->getConfiguration()->getProxyPassword()]));
        }

        // Set the return.
        curl_setopt($stream, CURLOPT_RETURNTRANSFER, true);

        // Set the SSL verification.
        if (false === $this->getConfiguration()->getSslVerification()) {
            curl_setopt($stream, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($stream, CURLOPT_SSL_VERIFYPEER, 0);
        }

        // Set the request timeout.
        if (0 < $this->getConfiguration()->getRequestTimeout()) {
            curl_setopt($stream, CURLOPT_TIMEOUT, $this->getConfiguration()->getRequestTimeout());
        }

        // Set the URL.
        curl_setopt($stream, CURLOPT_URL, $curlURL);

        // Set the user agent.
        curl_setopt($stream, CURLOPT_USERAGENT, $this->getConfiguration()->getUserAgent());

        // Get the HTTP response headers.
        curl_setopt($stream, CURLOPT_HEADER, 1);

        // Set the verbose.
        if (true === $this->getConfiguration()->getDebug()) {
            curl_setopt($stream, CURLOPT_STDERR, fopen($this->getConfiguration()->getDebugFile(), "a"));
            curl_setopt($stream, CURLOPT_VERBOSE, 0);

            $msg = (new DateTime())->format("c") . " [DEBUG] " . $curlURL . PHP_EOL . "HTTP request body ~BEGIN~" . PHP_EOL . print_r($curlPOSTData, true) . PHP_EOL . "~END~" . PHP_EOL;
            error_log($msg, 3, $this->getConfiguration()->getDebugFile());
        } else {
            if (true === $this->getConfiguration()->getVerbose()) {
                curl_setopt($stream, CURLOPT_VERBOSE, 1);
            } else {
                curl_setopt($stream, CURLOPT_VERBOSE, 0);
            }
        }

        // Make the request.
        $curlExec     = curl_exec($stream);
        $httpHeadSize = curl_getinfo($stream, CURLINFO_HEADER_SIZE);
        $httpHead     = $this->parseheader(substr($curlExec, 0, $httpHeadSize));
        $httpBody     = substr($curlExec, $httpHeadSize);
        $curlInfo     = curl_getinfo($stream);

        //
        if (true === $this->getConfiguration()->getDebug()) {
            $msg = (new DateTime())->format("c") . " [DEBUG] " . $curlURL . PHP_EOL . "HTTP response body ~BEGIN~" . PHP_EOL . print_r($httpBody, true) . PHP_EOL . "~END~" . PHP_EOL;
            error_log($msg, 3, $this->getConfiguration()->getDebugFile());
        }

        // Initialize the response.
        $response = new CURLResponse();
        $response->setRequestBody($curlPOSTData);
        $response->setRequestHeader($curlHeaders);
        $response->setRequestURL($curlURL);
        $response->setResponseBody($httpBody);
        $response->setResponseHeader($httpHead);
        $response->setResponseInfo($curlInfo);

        // Check HTTP code.
        if (200 <= $curlInfo["http_code"] && $curlInfo["http_code"] <= 299) {

            // Return the response.
            return $response;
        }

        // Initialize the parameters.
        $cde = $curlInfo["http_code"];
        $msg = curl_errno($stream);

        // Check the HTTP code.
        if (0 === $curlInfo["http_code"]) {
            if (false === empty(curl_error($stream))) {
                $msg = "Call to " . $curlURL . " failed : " . curl_error($stream);
            } else {
                $msg = "Call to " . $curlURL . " failed, but for an unknown reason. This could happen if you are disconnected from the network.";
            }
        }

        // Throw the exception.
        throw new CURLRequestCallException($msg, $cde, $response);
    }

    /**
     * {@inheritdoc}
     */
    public function clearHeaders() {
        return $this->setHeaders();
    }

    /**
     * {@inheritdoc}
     */
    public function clearPostData() {
        return $this->setPostData();
    }

    /**
     * {@inheritdoc}
     */
    public function clearQueryData() {
        return $this->setQueryData();
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
     * @return array Returns the meged headers.
     */
    private function mergeHeaders() {

        // Initialize the merged headers.
        $mergedHeaders = [];

        // Handle each header.
        foreach (array_merge($this->getConfiguration()->getHeaders(), $this->getHeaders()) as $key => $value) {
            $mergedHeaders[] = implode(": ", [$key, $value]);
        }

        // Return the merged headers.
        return $mergedHeaders;
    }

    /**
     * Merge the URL.
     *
     * @return string Returns the merged URL.
     */
    private function mergeURL() {

        // Initialize the merged URL.
        $mergedURL   = [];
        $mergedURL[] = $this->getConfiguration()->getHost();
        if (null !== $this->getResourcePath() && "" !== $this->getResourcePath()) {
            $mergedURL[] = $this->getResourcePath();
        }

        // Return the merged URL.
        return implode("/", $mergedURL);
    }

    /**
     * Parse the raw header.
     *
     * @param string $rawHeader The raw header.
     * @return array Returns the headers.
     */
    private function parseHeader($rawHeader) {

        // Initialize the headers.
        $headers = [];
        $key     = "";

        // Handle each header.
        foreach (explode("\n", $rawHeader) as $h) {
            $h = explode(":", $h, 2);
            if (true === isset($h[1])) {
                if (false === isset($headers[$h[0]])) {
                    $headers[$h[0]] = trim($h[1]);
                } elseif (true === is_array($headers[$h[0]])) {
                    $headers[$h[0]] = array_merge($headers[$h[0]], [trim($h[1])]);
                } else {
                    $headers[$h[0]] = array_merge([$headers[$h[0]]], [trim($h[1])]);
                }
                $key = $h[0];
            } else {
                if ("\t" === substr($h[0], 0, 1)) {
                    $headers[$key] .= "\r\n\t" . trim($h[0]);
                } elseif (!$key) {
                    $headers[0] = trim($h[0]);
                }
                trim($h[0]);
            }
        }

        // Return the headers.
        return $headers;
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
     * @param CURLConfiguration $configuration The configuration.
     * @return AbstractCURLRequest Returns this request.
     */
    protected function setConfiguration(CURLConfiguration $configuration) {
        $this->configuration = $configuration;
        return $this;
    }

    /**
     * Set the headers.
     *
     * @param array $headers The headers.
     * @return AbstractCURLRequest Returns this request.
     */
    protected function setHeaders(array $headers = []) {
        $this->headers = $headers;
        return $this;
    }

    /**
     * Set the method.
     *
     * @param string $method The method.
     * @return AbstractCURLRequest Returns this request.
     * @throws InvalidHTTPMethodException Throws an invalid HTTP method exception if the method is not implemented.
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
                throw new InvalidHTTPMethodException($method);
        }
        return $this;
    }

    /**
     * Set the POST data.
     *
     * @param array $postData The POST data.
     * @return AbstractCURLRequest Returns this request.
     */
    protected function setPostData(array $postData = []) {
        $this->postData = $postData;
        return $this;
    }

    /**
     * Set the query data.
     *
     * @param array $queryData The query data.
     * @return AbstractCURLRequest Returns this request.
     */
    protected function setQueryData(array $queryData = []) {
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
