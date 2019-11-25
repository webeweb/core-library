<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Network\CURL\Helper;

use DateTime;
use Exception;
use WBW\Library\Core\Network\CURL\Configuration\CurlConfiguration;
use WBW\Library\Core\Network\HTTP\HttpInterface;

/**
 * cURL helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Network\CURL\Helper
 */
class CurlHelper {

    /**
     * Initialize a cURL stream.
     *
     * @param string $url The URL.
     * @param CurlConfiguration $config The cURL configuration.
     * @return resource Returns the cURL stream.
     */
    public static function initStream($url, CurlConfiguration $config) {

        $stream = curl_init();

        curl_setopt($stream, CURLOPT_URL, $url);

        if (true === $config->getAllowEncoding()) {
            curl_setopt($stream, CURLOPT_ENCODING, "");
        }

        if (0 < $config->getConnectTimeout()) {
            curl_setopt($stream, CURLOPT_CONNECTTIMEOUT, $config->getConnectTimeout());
        }

        return $stream;
    }

    /**
     * Set the cURL headers.
     *
     * @param resource $stream The stream.
     * @param array $headers The headers.
     * @return void
     */
    public static function setHeaders($stream, array $headers) {
        curl_setopt($stream, CURLOPT_HEADER, 1);
        curl_setopt($stream, CURLOPT_HTTPHEADER, $headers);
    }

    /**
     * Set cURL POST.
     *
     * @param resource $stream The stream.
     * @param string $method The HTTP method.
     * @param string $postData The POST data.
     * @return void
     */
    public static function setPost($stream, $method, $postData) {

        switch ($method) {

            case HttpInterface::HTTP_METHOD_DELETE:
            case HttpInterface::HTTP_METHOD_OPTIONS:
            case HttpInterface::HTTP_METHOD_PATCH:
            case HttpInterface::HTTP_METHOD_PUT:
                curl_setopt($stream, CURLOPT_CUSTOMREQUEST, $method);
                curl_setopt($stream, CURLOPT_POSTFIELDS, $postData);
                break;

            case HttpInterface::HTTP_METHOD_HEAD:
                curl_setopt($stream, CURLOPT_NOBODY, true);
                break;

            case HttpInterface::HTTP_METHOD_POST:
                curl_setopt($stream, CURLOPT_POST, true);
                curl_setopt($stream, CURLOPT_POSTFIELDS, $postData);
                break;
        }
    }

    /**
     * Set cURL proxy.
     *
     * @param resource $stream The stream.
     * @param CurlConfiguration $config The cURL configuration.
     * @return void
     */
    public static function setProxy($stream, CurlConfiguration $config) {

        if (null !== $config->getProxyHost()) {
            curl_setopt($stream, CURLOPT_PROXY, $config->getProxyHost());
        }

        if (null !== $config->getProxyPort()) {
            curl_setopt($stream, CURLOPT_PROXYPORT, $config->getProxyPort());
        }

        if (null !== $config->getProxyType()) {
            curl_setopt($stream, CURLOPT_PROXYTYPE, $config->getProxyType());
        }

        if (null !== $config->getProxyUsername()) {
            curl_setopt($stream, CURLOPT_PROXYUSERPWD, implode(":", [$config->getProxyUsername(), $config->getProxyPassword()]));
        }
    }

    /**
     * Set cURL return transfer.
     *
     * @param resource $stream The stream.
     * @return void
     */
    public static function setReturnTransfer($stream) {
        curl_setopt($stream, CURLOPT_RETURNTRANSFER, true);
    }

    /**
     * Set cURL SSL.
     *
     * @param resource $stream The stream.
     * @param CurlConfiguration $config The cURL configuration.
     * @return void
     */
    public static function setSsl($stream, CurlConfiguration $config) {
        if (false === $config->getSslVerification()) {
            curl_setopt($stream, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($stream, CURLOPT_SSL_VERIFYPEER, 0);
        }
    }

    /**
     * Set cURL timeout.
     *
     * @param resource $stream The stream.
     * @param CurlConfiguration $config The cURL configuration.
     * @return void
     */
    public static function setTimeout($stream, CurlConfiguration $config) {
        if (0 < $config->getRequestTimeout()) {
            curl_setopt($stream, CURLOPT_TIMEOUT, $config->getRequestTimeout());
        }
    }

    /**
     * Set cURL user agent.
     *
     * @param resource $stream The stream.
     * @param CurlConfiguration $config The cURL configuration.
     * @return void
     */
    public static function setUserAgent($stream, CurlConfiguration $config) {
        curl_setopt($stream, CURLOPT_USERAGENT, $config->getUserAgent());
    }

    /**
     * Set cURL verbose.
     *
     * @param resource $stream The stream.
     * @param CurlConfiguration $config The cURL configuration.
     * @param string $url The URL.
     * @param string $postData The POST data.
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public static function setVerbose($stream, CurlConfiguration $config, $url, $postData) {

        if (true === $config->getDebug()) {

            curl_setopt($stream, CURLOPT_STDERR, fopen($config->getDebugFile(), "a"));
            curl_setopt($stream, CURLOPT_VERBOSE, 0);

            $msg = (new DateTime())->format("c") . " [DEBUG] " . $url . PHP_EOL . "HTTP request body ~BEGIN~" . PHP_EOL . print_r($postData, true) . PHP_EOL . "~END~" . PHP_EOL;
            error_log($msg, 3, $config->getDebugFile());
        } else {

            if (true === $config->getVerbose()) {
                curl_setopt($stream, CURLOPT_VERBOSE, 1);
            } else {
                curl_setopt($stream, CURLOPT_VERBOSE, 0);
            }
        }
    }
}
