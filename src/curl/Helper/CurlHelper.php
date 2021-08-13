<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Helper;

use DateTime;
use Exception;
use WBW\Library\Curl\API\CurlRequestInterface;
use WBW\Library\Curl\API\CurlResponseInterface;
use WBW\Library\Curl\Configuration\CurlConfiguration;

/**
 * cURL helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Helper
 */
class CurlHelper {

    /**
     * Enumerates the cURL requests.
     *
     * @return string[] Returns the cURL requests enumeration.
     */
    public static function enumCurlRequests(): array {
        return [
            CurlRequestInterface::CURL_REQUEST_DELETE,
            CurlRequestInterface::CURL_REQUEST_GET,
            CurlRequestInterface::CURL_REQUEST_HEAD,
            CurlRequestInterface::CURL_REQUEST_OPTIONS,
            CurlRequestInterface::CURL_REQUEST_PATCH,
            CurlRequestInterface::CURL_REQUEST_POST,
            CurlRequestInterface::CURL_REQUEST_PUT,
        ];
    }

    /**
     * Enumerates the cURL responses.
     *
     * @return int[] Returns the cURL responses enumeration.
     */
    public static function enumCurlResponses(): array {
        return [
            CurlResponseInterface::CURL_RESPONSE_CONTINUE,
            CurlResponseInterface::CURL_RESPONSE_SWITCHING_PROTOCOLS,
            CurlResponseInterface::CURL_RESPONSE_PROCESSING,
            CurlResponseInterface::CURL_RESPONSE_OK,
            CurlResponseInterface::CURL_RESPONSE_CREATED,
            CurlResponseInterface::CURL_RESPONSE_ACCEPTED,
            CurlResponseInterface::CURL_RESPONSE_NON_AUTHORITATIVE_INFORMATION,
            CurlResponseInterface::CURL_RESPONSE_NO_CONTENT,
            CurlResponseInterface::CURL_RESPONSE_RESET_CONTENT,
            CurlResponseInterface::CURL_RESPONSE_PARTIAL_CONTENT,
            CurlResponseInterface::CURL_RESPONSE_MULTI_STATUS,
            CurlResponseInterface::CURL_RESPONSE_ALREADY_REPORTED,
            CurlResponseInterface::CURL_RESPONSE_IM_USED,
            CurlResponseInterface::CURL_RESPONSE_MULTIPLE_CHOICES,
            CurlResponseInterface::CURL_RESPONSE_MOVED_PERMANENTLY,
            CurlResponseInterface::CURL_RESPONSE_MOVED_TEMPORARILY,
            CurlResponseInterface::CURL_RESPONSE_SEE_OTHER,
            CurlResponseInterface::CURL_RESPONSE_NOT_MODIFIED,
            CurlResponseInterface::CURL_RESPONSE_USE_PROXY,
            CurlResponseInterface::CURL_RESPONSE_TEMPORARY_REDIRECT,
            CurlResponseInterface::CURL_RESPONSE_PERMANENT_REDIRECT,
            CurlResponseInterface::CURL_RESPONSE_BAD_REQUEST,
            CurlResponseInterface::CURL_RESPONSE_UNAUTHORIZED,
            CurlResponseInterface::CURL_RESPONSE_PAYMENT_REQUIRED,
            CurlResponseInterface::CURL_RESPONSE_FORBIDDEN,
            CurlResponseInterface::CURL_RESPONSE_NOT_FOUND,
            CurlResponseInterface::CURL_RESPONSE_METHOD_NOT_ALLOWED,
            CurlResponseInterface::CURL_RESPONSE_NOT_ACCEPTABLE,
            CurlResponseInterface::CURL_RESPONSE_PROXY_AUTHENTICATION_REQUIRED,
            CurlResponseInterface::CURL_RESPONSE_REQUEST_TIME_OUT,
            CurlResponseInterface::CURL_RESPONSE_CONFLICT,
            CurlResponseInterface::CURL_RESPONSE_GONE,
            CurlResponseInterface::CURL_RESPONSE_LENGTH_REQUIRED,
            CurlResponseInterface::CURL_RESPONSE_PRECONDITION_FAILED,
            CurlResponseInterface::CURL_RESPONSE_REQUEST_ENTITY_TOO_LARGE,
            CurlResponseInterface::CURL_RESPONSE_REQUEST_URI_TOO_LONG,
            CurlResponseInterface::CURL_RESPONSE_UNSUPPORTED_MEDIA_TYPE,
            CurlResponseInterface::CURL_RESPONSE_REQUESTED_RANGE_UNSATISFIABLE,
            CurlResponseInterface::CURL_RESPONSE_EXPECTATION_FAILED,
            CurlResponseInterface::CURL_RESPONSE_UNPROCESSABLE_ENTITY,
            CurlResponseInterface::CURL_RESPONSE_LOCKED,
            CurlResponseInterface::CURL_RESPONSE_METHOD_FAILURE,
            CurlResponseInterface::CURL_RESPONSE_UPGRADE_REQUIRED,
            CurlResponseInterface::CURL_RESPONSE_PRECONDITION_REQUIRED,
            CurlResponseInterface::CURL_RESPONSE_TOO_MANY_REQUESTS,
            CurlResponseInterface::CURL_RESPONSE_REQUEST_HEADER_FIELDS_TOO_LARGE,
            CurlResponseInterface::CURL_RESPONSE_INTERNAL_SERVER_ERROR,
            CurlResponseInterface::CURL_RESPONSE_NOT_IMPLEMENTED,
            CurlResponseInterface::CURL_RESPONSE_BAD_GATEWAY_OU_PROXY_ERROR,
            CurlResponseInterface::CURL_RESPONSE_SERVICE_UNAVAILABLE,
            CurlResponseInterface::CURL_RESPONSE_GATEWAY_TIME_OUT,
            CurlResponseInterface::CURL_RESPONSE_HTTP_VERSION_NOT_SUPPORTED,
            CurlResponseInterface::CURL_RESPONSE_VARIANT_ALSO_NEGOTIATES,
            CurlResponseInterface::CURL_RESPONSE_INSUFFICIENT_STORAGE,
            CurlResponseInterface::CURL_RESPONSE_LOOP_DETECTED,
            CurlResponseInterface::CURL_RESPONSE_NOT_EXTENDED,
            CurlResponseInterface::CURL_RESPONSE_NETWORK_AUTHENTICATION_REQUIRED,
        ];
    }

    /**
     * Initialize a cURL stream.
     *
     * @param string $url The URL.
     * @param CurlConfiguration $config The cURL configuration.
     * @return resource Returns the cURL stream.
     */
    public static function initStream(string $url, CurlConfiguration $config) {

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
    public static function setHeaders($stream, array $headers): void {
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
    public static function setPost($stream, string $method, string $postData): void {

        switch ($method) {

            case CurlRequestInterface::CURL_REQUEST_DELETE:
            case CurlRequestInterface::CURL_REQUEST_OPTIONS:
            case CurlRequestInterface::CURL_REQUEST_PATCH:
            case CurlRequestInterface::CURL_REQUEST_PUT:
                curl_setopt($stream, CURLOPT_CUSTOMREQUEST, $method);
                curl_setopt($stream, CURLOPT_POSTFIELDS, $postData);
                break;

            case CurlRequestInterface::CURL_REQUEST_HEAD:
                curl_setopt($stream, CURLOPT_NOBODY, true);
                break;

            case CurlRequestInterface::CURL_REQUEST_POST:
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
    public static function setProxy($stream, CurlConfiguration $config): void {

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
    public static function setReturnTransfer($stream): void {
        curl_setopt($stream, CURLOPT_RETURNTRANSFER, true);
    }

    /**
     * Set cURL SSL.
     *
     * @param resource $stream The stream.
     * @param CurlConfiguration $config The cURL configuration.
     * @return void
     */
    public static function setSsl($stream, CurlConfiguration $config): void {
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
    public static function setTimeout($stream, CurlConfiguration $config): void {
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
    public static function setUserAgent($stream, CurlConfiguration $config): void {
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
    public static function setVerbose($stream, CurlConfiguration $config, string $url, string $postData): void {

        if (true === $config->getDebug()) {

            curl_setopt($stream, CURLOPT_STDERR, fopen($config->getDebugFile(), "a"));
            curl_setopt($stream, CURLOPT_VERBOSE, 0);

            $msg = (new DateTime())->format("c") . " [DEBUG] $url" . PHP_EOL . "HTTP request body ~BEGIN~" . PHP_EOL . print_r($postData, true) . PHP_EOL . "~END~" . PHP_EOL;
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
