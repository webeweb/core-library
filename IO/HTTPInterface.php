<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\IO;

/**
 * HTTP interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\IO
 */
interface HTTPInterface {

    /**
     * HTTP method "DELETE".
     *
     * @var string
     */
    const HTTP_METHOD_DELETE = "DELETE";

    /**
     * HTTP method "GET".
     *
     * @var string
     */
    const HTTP_METHOD_GET = "GET";

    /**
     * HTTP method "HEAD".
     *
     * @var string
     */
    const HTTP_METHOD_HEAD = "HEAD";

    /**
     * HTTP method "OPTIONS".
     *
     * @var string
     */
    const HTTP_METHOD_OPTIONS = "OPTIONS";

    /**
     * HTTP method "PATCH".
     *
     * @var string
     */
    const HTTP_METHOD_PATCH = "PATCH";

    /**
     * HTTP method "POST".
     *
     * @var string
     */
    const HTTP_METHOD_POST = "POST";

    /**
     * HTTP method "PUT".
     *
     * @var string
     */
    const HTTP_METHOD_PUT = "PUT";

    /**
     * HTTP status "Continue".
     *
     * @var integer
     */
    const HTTP_STATUS_CONTINUE = 100;

    /**
     * HTTP status "Switching Protocols".
     *
     * @var integer
     */
    const HTTP_STATUS_SWITCHING_PROTOCOLS = 101;

    /**
     * HTTP status "Processing".
     *
     * @var integer
     */
    const HTTP_STATUS_PROCESSING = 102;

    /**
     * HTTP status "OK".
     *
     * @var integer
     */
    const HTTP_STATUS_OK = 200;

    /**
     * HTTP status "Created".
     *
     * @var integer
     */
    const HTTP_STATUS_CREATED = 201;

    /**
     * HTTP status "Accepted".
     *
     * @var integer
     */
    const HTTP_STATUS_ACCEPTED = 202;

    /**
     * HTTP status "Non-Authoritative Information".
     *
     * @var integer
     */
    const HTTP_STATUS_NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * HTTP status "No Content".
     *
     * @var integer
     */
    const HTTP_STATUS_NO_CONTENT = 204;

    /**
     * HTTP status "Reset Content".
     *
     * @var integer
     */
    const HTTP_STATUS_RESET_CONTENT = 205;

    /**
     * HTTP status "Partial Content".
     *
     * @var integer
     */
    const HTTP_STATUS_PARTIAL_CONTENT = 206;

    /**
     * HTTP status "Multi-Status".
     *
     * @var integer
     */
    const HTTP_STATUS_MULTI_STATUS = 207;

    /**
     * HTTP status "Already Reported".
     *
     * @var integer
     */
    const HTTP_STATUS_ALREADY_REPORTED = 208;

    /**
     * HTTP status "Content Different".
     *
     * @var integer
     */
    const HTTP_STATUS_CONTENT_DIFFERENT = 210;

    /**
     * HTTP status "IM_Used".
     *
     * @var integer
     */
    const HTTP_STATUS_IM_USED = 226;

    /**
     * HTTP status "Multiple Choices".
     *
     * @var integer
     */
    const HTTP_STATUS_MULTIPLE_CHOICES = 300;

    /**
     * HTTP status "Moved Permanently".
     *
     * @var integer
     */
    const HTTP_STATUS_MOVED_PERMANENTLY = 301;

    /**
     * HTTP status "Moved Temporarily".
     *
     * @var integer
     */
    const HTTP_STATUS_MOVED_TEMPORARILY = 302;

    /**
     * HTTP status "See Other".
     *
     * @var integer
     */
    const HTTP_STATUS_SEE_OTHER = 303;

    /**
     * HTTP status "Not Modified".
     *
     * @var integer
     */
    const HTTP_STATUS_NOT_MODIFIED = 304;

    /**
     * HTTP status "Use Proxy".
     *
     * @var integer
     */
    const HTTP_STATUS_USE_PROXY = 305;

    /**
     * HTTP status "Switch proxy".
     *
     * @var integer
     */
    const HTTP_STATUS_SWITCH_PROXY = 306;

    /**
     * HTTP status "Temporary Redirect".
     *
     * @var integer
     */
    const HTTP_STATUS_TEMPORARY_REDIRECT = 307;

    /**
     * HTTP status "Permanent Redirect".
     *
     * @var integer
     */
    const HTTP_STATUS_PERMANENT_REDIRECT = 308;

    /**
     * HTTP status "Too many Redirects".
     *
     * @var integer
     */
    const HTTP_STATUS_TOO_MANY_REDIRECTS = 310;

    /**
     * HTTP status "Bad Request".
     *
     * @var integer
     */
    const HTTP_STATUS_BAD_REQUEST = 400;

    /**
     * HTTP status "Unauthorized".
     *
     * @var integer
     */
    const HTTP_STATUS_UNAUTHORIZED = 401;

    /**
     * HTTP status "Payment Required".
     *
     * @var integer
     */
    const HTTP_STATUS_PAYMENT_REQUIRED = 402;

    /**
     * HTTP status "Forbidden".
     *
     * @var integer
     */
    const HTTP_STATUS_FORBIDDEN = 403;

    /**
     * HTTP status "Not Found".
     *
     * @var integer
     */
    const HTTP_STATUS_NOT_FOUND = 404;

    /**
     * HTTP status "Method Not Allowed".
     *
     * @var integer
     */
    const HTTP_STATUS_METHOD_NOT_ALLOWED = 405;

    /**
     * HTTP status "Not Acceptable".
     *
     * @var integer
     */
    const HTTP_STATUS_NOT_ACCEPTABLE = 406;

    /**
     * HTTP status "Proxy Authentication Required".
     *
     * @var integer
     */
    const HTTP_STATUS_PROXY_AUTHENTICATION_REQUIRED = 407;

    /**
     * HTTP status "Request Time-out".
     *
     * @var integer
     */
    const HTTP_STATUS_REQUEST_TIME_OUT = 408;

    /**
     * HTTP status "Conflict".
     *
     * @var integer
     */
    const HTTP_STATUS_CONFLICT = 409;

    /**
     * HTTP status "Gone".
     *
     * @var integer
     */
    const HTTP_STATUS_GONE = 410;

    /**
     * HTTP status "Length Required".
     *
     * @var integer
     */
    const HTTP_STATUS_LENGTH_REQUIRED = 411;

    /**
     * HTTP status "Precondition Failed".
     *
     * @var integer
     */
    const HTTP_STATUS_PRECONDITION_FAILED = 412;

    /**
     * HTTP status "Request Entity Too Large".
     *
     * @var integer
     */
    const HTTP_STATUS_REQUEST_ENTITY_TOO_LARGE = 413;

    /**
     * HTTP status "Request-URI_Too Long".
     *
     * @var integer
     */
    const HTTP_STATUS_REQUEST_URI_TOO_LONG = 414;

    /**
     * HTTP status "Unsupported Media Type".
     *
     * @var integer
     */
    const HTTP_STATUS_UNSUPPORTED_MEDIA_TYPE = 415;

    /**
     * HTTP status "Requested range unsatisfiable".
     *
     * @var integer
     */
    const HTTP_STATUS_REQUESTED_RANGE_UNSATISFIABLE = 416;

    /**
     * HTTP status "Expectation failed".
     *
     * @var integer
     */
    const HTTP_STATUS_EXPECTATION_FAILED = 417;

    /**
     * HTTP status "I’m a teapot".
     *
     * @var integer
     */
    const HTTP_STATUS_IM_A_TEAPOT = 418;

    /**
     * HTTP status "Bad mapping / Misdirected Request".
     *
     * @var integer
     */
    const HTTP_STATUS_BAD_MAPPING_MISDIRECTED_REQUEST = 421;

    /**
     * HTTP status "Unprocessable entity".
     *
     * @var integer
     */
    const HTTP_STATUS_UNPROCESSABLE_ENTITY = 422;

    /**
     * HTTP status "Locked".
     *
     * @var integer
     */
    const HTTP_STATUS_LOCKED = 423;

    /**
     * HTTP status "Method failure".
     *
     * @var integer
     */
    const HTTP_STATUS_METHOD_FAILURE = 424;

    /**
     * HTTP status "Unordered Collection".
     *
     * @var integer
     */
    const HTTP_STATUS_UNORDERED_COLLECTION = 425;

    /**
     * HTTP status "Upgrade Required".
     *
     * @var integer
     */
    const HTTP_STATUS_UPGRADE_REQUIRED = 426;

    /**
     * HTTP status "Precondition Required".
     *
     * @var integer
     */
    const HTTP_STATUS_PRECONDITION_REQUIRED = 428;

    /**
     * HTTP status "Too Many Requests".
     *
     * @var integer
     */
    const HTTP_STATUS_TOO_MANY_REQUESTS = 429;

    /**
     * HTTP status "Request Header Fields Too Large".
     *
     * @var integer
     */
    const HTTP_STATUS_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

    /**
     * HTTP status "Retry With".
     *
     * @var integer
     */
    const HTTP_STATUS_RETRY_WITH = 449;

    /**
     * HTTP status "Blocked by Windows Parental Controls".
     *
     * @var integer
     */
    const HTTP_STATUS_BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS = 450;

    /**
     * HTTP status "Unavailable For Legal Reasons".
     *
     * @var integer
     */
    const HTTP_STATUS_UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    /**
     * HTTP status "Unrecoverable Error".
     *
     * @var integer
     */
    const HTTP_STATUS_UNRECOVERABLE_ERROR = 456;

    /**
     * HTTP status "No Response".
     *
     * @var integer
     */
    const HTTP_STATUS_NO_RESPONSE = 444;

    /**
     * HTTP status "SSL_Certificate Error".
     *
     * @var integer
     */
    const HTTP_STATUS_SSL_CERTIFICATE_ERROR = 495;

    /**
     * HTTP status "SSL_Certificate Required".
     *
     * @var integer
     */
    const HTTP_STATUS_SSL_CERTIFICATE_REQUIRED = 496;

    /**
     * HTTP status "HTTP_Request Sent to HTTPS_Port".
     *
     * @var integer
     */
    const HTTP_STATUS_HTTP_REQUEST_SENT_TO_HTTPS_PORT = 497;

    /**
     * HTTP status "Client Closed Request".
     *
     * @var integer
     */
    const HTTP_STATUS_CLIENT_CLOSED_REQUEST = 499;

    /**
     * HTTP status "Internal Server Error".
     *
     * @var integer
     */
    const HTTP_STATUS_INTERNAL_SERVER_ERROR = 500;

    /**
     * HTTP status "Not Implemented".
     *
     * @var integer
     */
    const HTTP_STATUS_NOT_IMPLEMENTED = 501;

    /**
     * HTTP status "Bad Gateway ou Proxy Error".
     *
     * @var integer
     */
    const HTTP_STATUS_BAD_GATEWAY_OU_PROXY_ERROR = 502;

    /**
     * HTTP status "Service Unavailable".
     *
     * @var integer
     */
    const HTTP_STATUS_SERVICE_UNAVAILABLE = 503;

    /**
     * HTTP status "Gateway Time-out".
     *
     * @var integer
     */
    const HTTP_STATUS_GATEWAY_TIME_OUT = 504;

    /**
     * HTTP status "HTTP_Version not supported".
     *
     * @var integer
     */
    const HTTP_STATUS_HTTP_VERSION_NOT_SUPPORTED = 505;

    /**
     * HTTP status "Variant Also Negotiates".
     *
     * @var integer
     */
    const HTTP_STATUS_VARIANT_ALSO_NEGOTIATES = 506;

    /**
     * HTTP status "Insufficient storage".
     *
     * @var integer
     */
    const HTTP_STATUS_INSUFFICIENT_STORAGE = 507;

    /**
     * HTTP status "Loop detected".
     *
     * @var integer
     */
    const HTTP_STATUS_LOOP_DETECTED = 508;

    /**
     * HTTP status "Bandwidth Limit Exceeded".
     *
     * @var integer
     */
    const HTTP_STATUS_BANDWIDTH_LIMIT_EXCEEDED = 509;

    /**
     * HTTP status "Not extended".
     *
     * @var integer
     */
    const HTTP_STATUS_NOT_EXTENDED = 510;

    /**
     * HTTP status "Network authentication required".
     *
     * @var integer
     */
    const HTTP_STATUS_NETWORK_AUTHENTICATION_REQUIRED = 511;

    /**
     * HTTP status "Unknown Error".
     *
     * @var integer
     */
    const HTTP_STATUS_UNKNOWN_ERROR = 520;

    /**
     * HTTP status "Web Server Is Down".
     *
     * @var integer
     */
    const HTTP_STATUS_WEB_SERVER_IS_DOWN = 521;

    /**
     * HTTP status "Connection Timed Out".
     *
     * @var integer
     */
    const HTTP_STATUS_CONNECTION_TIMED_OUT = 522;

    /**
     * HTTP status "Origin Is Unreachable".
     *
     * @var integer
     */
    const HTTP_STATUS_ORIGIN_IS_UNREACHABLE = 523;

    /**
     * HTTP status "A_Timeout Occurred".
     *
     * @var integer
     */
    const HTTP_STATUS_A_TIMEOUT_OCCURRED = 524;

    /**
     * HTTP status "SSL_Handshake Failed".
     *
     * @var integer
     */
    const HTTP_STATUS_SSL_HANDSHAKE_FAILED = 525;

    /**
     * HTTP status "Invalid SSL_Certificate".
     *
     * @var integer
     */
    const HTTP_STATUS_INVALID_SSL_CERTIFICATE = 526;

    /**
     * HTTP status "Railgun Error".
     *
     * @var integer
     */
    const HTTP_STATUS_RAILGUN_ERROR = 527;

}
