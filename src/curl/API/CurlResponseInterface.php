<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\API;

/**
 * cURL response interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Curl\API
 */
interface CurlResponseInterface {

    /**
     * cURL request "Accepted".
     *
     * @var int
     */
    const CURL_RESPONSE_ACCEPTED = 202;

    /**
     * cURL request "Already Reported".
     *
     * @var int
     */
    const CURL_RESPONSE_ALREADY_REPORTED = 208;

    /**
     * cURL request "A_Timeout Occurred".
     *
     * @var int
     */
    const CURL_RESPONSE_A_TIMEOUT_OCCURRED = 524;

    /**
     * cURL request "Bad Gateway ou Proxy Error".
     *
     * @var int
     */
    const CURL_RESPONSE_BAD_GATEWAY_OU_PROXY_ERROR = 502;

    /**
     * cURL request "Bad mapping / Misdirected Request".
     *
     * @var int
     */
    const CURL_RESPONSE_BAD_MAPPING_MISDIRECTED_REQUEST = 421;

    /**
     * cURL request "Bad Request".
     *
     * @var int
     */
    const CURL_RESPONSE_BAD_REQUEST = 400;

    /**
     * cURL request "Bandwidth Limit Exceeded".
     *
     * @var int
     */
    const CURL_RESPONSE_BANDWIDTH_LIMIT_EXCEEDED = 509;

    /**
     * cURL request "Blocked by Windows Parental Controls".
     *
     * @var int
     */
    const CURL_RESPONSE_BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS = 450;

    /**
     * cURL request "Client Closed Request".
     *
     * @var int
     */
    const CURL_RESPONSE_CLIENT_CLOSED_REQUEST = 499;

    /**
     * cURL request "Conflict".
     *
     * @var int
     */
    const CURL_RESPONSE_CONFLICT = 409;

    /**
     * cURL request "Connection Timed Out".
     *
     * @var int
     */
    const CURL_RESPONSE_CONNECTION_TIMED_OUT = 522;

    /**
     * cURL request "Content Different".
     *
     * @var int
     */
    const CURL_RESPONSE_CONTENT_DIFFERENT = 210;

    /**
     * cURL request "Continue".
     *
     * @var int
     */
    const CURL_RESPONSE_CONTINUE = 100;

    /**
     * cURL request "Created".
     *
     * @var int
     */
    const CURL_RESPONSE_CREATED = 201;

    /**
     * cURL request "Expectation failed".
     *
     * @var int
     */
    const CURL_RESPONSE_EXPECTATION_FAILED = 417;

    /**
     * cURL request "Forbidden".
     *
     * @var int
     */
    const CURL_RESPONSE_FORBIDDEN = 403;

    /**
     * cURL request "Gateway Time-out".
     *
     * @var int
     */
    const CURL_RESPONSE_GATEWAY_TIME_OUT = 504;

    /**
     * cURL request "Gone".
     *
     * @var int
     */
    const CURL_RESPONSE_GONE = 410;

    /**
     * cURL request "HTTP_Request Sent to HTTPS_Port".
     *
     * @var int
     */
    const CURL_RESPONSE_HTTP_REQUEST_SENT_TO_HTTPS_PORT = 497;

    /**
     * cURL request "HTTP_Version not supported".
     *
     * @var int
     */
    const CURL_RESPONSE_HTTP_VERSION_NOT_SUPPORTED = 505;

    /**
     * cURL request "I’m a teapot".
     *
     * @var int
     */
    const CURL_RESPONSE_IM_A_TEAPOT = 418;

    /**
     * cURL request "IM_Used".
     *
     * @var int
     */
    const CURL_RESPONSE_IM_USED = 226;

    /**
     * cURL request "Insufficient storage".
     *
     * @var int
     */
    const CURL_RESPONSE_INSUFFICIENT_STORAGE = 507;

    /**
     * cURL request "Internal Server Error".
     *
     * @var int
     */
    const CURL_RESPONSE_INTERNAL_SERVER_ERROR = 500;

    /**
     * cURL request "Invalid SSL_Certificate".
     *
     * @var int
     */
    const CURL_RESPONSE_INVALID_SSL_CERTIFICATE = 526;

    /**
     * cURL request "Length Required".
     *
     * @var int
     */
    const CURL_RESPONSE_LENGTH_REQUIRED = 411;

    /**
     * cURL request "Locked".
     *
     * @var int
     */
    const CURL_RESPONSE_LOCKED = 423;

    /**
     * cURL request "Loop detected".
     *
     * @var int
     */
    const CURL_RESPONSE_LOOP_DETECTED = 508;

    /**
     * cURL request "Method failure".
     *
     * @var int
     */
    const CURL_RESPONSE_METHOD_FAILURE = 424;

    /**
     * cURL request "Method Not Allowed".
     *
     * @var int
     */
    const CURL_RESPONSE_METHOD_NOT_ALLOWED = 405;

    /**
     * cURL request "Moved Permanently".
     *
     * @var int
     */
    const CURL_RESPONSE_MOVED_PERMANENTLY = 301;

    /**
     * cURL request "Moved Temporarily".
     *
     * @var int
     */
    const CURL_RESPONSE_MOVED_TEMPORARILY = 302;

    /**
     * cURL request "Multiple Choices".
     *
     * @var int
     */
    const CURL_RESPONSE_MULTIPLE_CHOICES = 300;

    /**
     * cURL request "Multi-Status".
     *
     * @var int
     */
    const CURL_RESPONSE_MULTI_STATUS = 207;

    /**
     * cURL request "Network authentication required".
     *
     * @var int
     */
    const CURL_RESPONSE_NETWORK_AUTHENTICATION_REQUIRED = 511;

    /**
     * cURL request "Non-Authoritative Information".
     *
     * @var int
     */
    const CURL_RESPONSE_NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * cURL request "Not Acceptable".
     *
     * @var int
     */
    const CURL_RESPONSE_NOT_ACCEPTABLE = 406;

    /**
     * cURL request "Not extended".
     *
     * @var int
     */
    const CURL_RESPONSE_NOT_EXTENDED = 510;

    /**
     * cURL request "Not Found".
     *
     * @var int
     */
    const CURL_RESPONSE_NOT_FOUND = 404;

    /**
     * cURL request "Not Implemented".
     *
     * @var int
     */
    const CURL_RESPONSE_NOT_IMPLEMENTED = 501;

    /**
     * cURL request "Not Modified".
     *
     * @var int
     */
    const CURL_RESPONSE_NOT_MODIFIED = 304;

    /**
     * cURL request "No Content".
     *
     * @var int
     */
    const CURL_RESPONSE_NO_CONTENT = 204;

    /**
     * cURL request "No Response".
     *
     * @var int
     */
    const CURL_RESPONSE_NO_RESPONSE = 444;

    /**
     * cURL request "OK".
     *
     * @var int
     */
    const CURL_RESPONSE_OK = 200;

    /**
     * cURL request "Origin Is Unreachable".
     *
     * @var int
     */
    const CURL_RESPONSE_ORIGIN_IS_UNREACHABLE = 523;

    /**
     * cURL request "Partial Content".
     *
     * @var int
     */
    const CURL_RESPONSE_PARTIAL_CONTENT = 206;

    /**
     * cURL request "Payment Required".
     *
     * @var int
     */
    const CURL_RESPONSE_PAYMENT_REQUIRED = 402;

    /**
     * cURL request "Permanent Redirect".
     *
     * @var int
     */
    const CURL_RESPONSE_PERMANENT_REDIRECT = 308;

    /**
     * cURL request "Precondition Failed".
     *
     * @var int
     */
    const CURL_RESPONSE_PRECONDITION_FAILED = 412;

    /**
     * cURL request "Precondition Required".
     *
     * @var int
     */
    const CURL_RESPONSE_PRECONDITION_REQUIRED = 428;

    /**
     * cURL request "Processing".
     *
     * @var int
     */
    const CURL_RESPONSE_PROCESSING = 102;

    /**
     * cURL request "Proxy Authentication Required".
     *
     * @var int
     */
    const CURL_RESPONSE_PROXY_AUTHENTICATION_REQUIRED = 407;

    /**
     * cURL request "Railgun Error".
     *
     * @var int
     */
    const CURL_RESPONSE_RAILGUN_ERROR = 527;

    /**
     * cURL request "Requested range unsatisfiable".
     *
     * @var int
     */
    const CURL_RESPONSE_REQUESTED_RANGE_UNSATISFIABLE = 416;

    /**
     * cURL request "Request Entity Too Large".
     *
     * @var int
     */
    const CURL_RESPONSE_REQUEST_ENTITY_TOO_LARGE = 413;

    /**
     * cURL request "Request Header Fields Too Large".
     *
     * @var int
     */
    const CURL_RESPONSE_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

    /**
     * cURL request "Request Time-out".
     *
     * @var int
     */
    const CURL_RESPONSE_REQUEST_TIME_OUT = 408;

    /**
     * cURL request "Request-URI_Too Long".
     *
     * @var int
     */
    const CURL_RESPONSE_REQUEST_URI_TOO_LONG = 414;

    /**
     * cURL request "Reset Content".
     *
     * @var int
     */
    const CURL_RESPONSE_RESET_CONTENT = 205;

    /**
     * cURL request "Retry With".
     *
     * @var int
     */
    const CURL_RESPONSE_RETRY_WITH = 449;

    /**
     * cURL request "See Other".
     *
     * @var int
     */
    const CURL_RESPONSE_SEE_OTHER = 303;

    /**
     * cURL request "Service Unavailable".
     *
     * @var int
     */
    const CURL_RESPONSE_SERVICE_UNAVAILABLE = 503;

    /**
     * cURL request "SSL_Certificate Error".
     *
     * @var int
     */
    const CURL_RESPONSE_SSL_CERTIFICATE_ERROR = 495;

    /**
     * cURL request "SSL_Certificate Required".
     *
     * @var int
     */
    const CURL_RESPONSE_SSL_CERTIFICATE_REQUIRED = 496;

    /**
     * cURL request "SSL_Handshake Failed".
     *
     * @var int
     */
    const CURL_RESPONSE_SSL_HANDSHAKE_FAILED = 525;

    /**
     * cURL request "Switching Protocols".
     *
     * @var int
     */
    const CURL_RESPONSE_SWITCHING_PROTOCOLS = 101;

    /**
     * cURL request "Switch proxy".
     *
     * @var int
     */
    const CURL_RESPONSE_SWITCH_PROXY = 306;

    /**
     * cURL request "Temporary Redirect".
     *
     * @var int
     */
    const CURL_RESPONSE_TEMPORARY_REDIRECT = 307;

    /**
     * cURL request "Too many Redirects".
     *
     * @var int
     */
    const CURL_RESPONSE_TOO_MANY_REDIRECTS = 310;

    /**
     * cURL request "Too Many Requests".
     *
     * @var int
     */
    const CURL_RESPONSE_TOO_MANY_REQUESTS = 429;

    /**
     * cURL request "Unauthorized".
     *
     * @var int
     */
    const CURL_RESPONSE_UNAUTHORIZED = 401;

    /**
     * cURL request "Unavailable For Legal Reasons".
     *
     * @var int
     */
    const CURL_RESPONSE_UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    /**
     * cURL request "Unknown Error".
     *
     * @var int
     */
    const CURL_RESPONSE_UNKNOWN_ERROR = 520;

    /**
     * cURL request "Unordered Collection".
     *
     * @var int
     */
    const CURL_RESPONSE_UNORDERED_COLLECTION = 425;

    /**
     * cURL request "Unprocessable entity".
     *
     * @var int
     */
    const CURL_RESPONSE_UNPROCESSABLE_ENTITY = 422;

    /**
     * cURL request "Unrecoverable Error".
     *
     * @var int
     */
    const CURL_RESPONSE_UNRECOVERABLE_ERROR = 456;

    /**
     * cURL request "Unsupported Media Type".
     *
     * @var int
     */
    const CURL_RESPONSE_UNSUPPORTED_MEDIA_TYPE = 415;

    /**
     * cURL request "Upgrade Required".
     *
     * @var int
     */
    const CURL_RESPONSE_UPGRADE_REQUIRED = 426;

    /**
     * cURL request "Use Proxy".
     *
     * @var int
     */
    const CURL_RESPONSE_USE_PROXY = 305;

    /**
     * cURL request "Variant Also Negotiates".
     *
     * @var int
     */
    const CURL_RESPONSE_VARIANT_ALSO_NEGOTIATES = 506;

    /**
     * cURL request "Web Server Is Down".
     *
     * @var int
     */
    const CURL_RESPONSE_WEB_SERVER_IS_DOWN = 521;

    /**
     * Get the request body.
     *
     * @return string|null Returns the request body.
     */
    public function getRequestBody(): ?string;

    /**
     * Get the request header.
     *
     * @return array Returns the request header.
     */
    public function getRequestHeader(): array;

    /**
     * Get the request URL.
     *
     * @return string Returns the request URL.
     */
    public function getRequestUrl(): ?string;

    /**
     * Get the response body.
     *
     * @return string The response body.
     */
    public function getResponseBody(): ?string;

    /**
     * Get the response header.
     *
     * @return array Returns the response header.
     */
    public function getResponseHeader(): array;

    /**
     * Get the response info.
     *
     * @return array Returns the response info.
     */
    public function getResponseInfo(): array;
}
