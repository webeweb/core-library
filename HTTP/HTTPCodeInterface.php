<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\HTTP;

/**
 * HTTP code interface.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\HTTP
 */
interface HTTPCodeInterface {

    /**
     * Code "Continue".
     *
     * @var integer
     */
    const CODE_CONTINUE = 100;

    /**
     * Code "Switching Protocols".
     *
     * @var integer
     */
    const CODE_SWITCHING_PROTOCOLS = 101;

    /**
     * Code "Processing".
     *
     * @var integer
     */
    const CODE_PROCESSING = 102;

    /**
     * Code "OK".
     *
     * @var integer
     */
    const CODE_OK = 200;

    /**
     * Code "Created".
     *
     * @var integer
     */
    const CODE_CREATED = 201;

    /**
     * Code "Accepted".
     *
     * @var integer
     */
    const CODE_ACCEPTED = 202;

    /**
     * Code "Non-Authoritative Information".
     *
     * @var integer
     */
    const CODE_NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * Code "No Content".
     *
     * @var integer
     */
    const CODE_NO_CONTENT = 204;

    /**
     * Code "Reset Content".
     *
     * @var integer
     */
    const CODE_RESET_CONTENT = 205;

    /**
     * Code "Partial Content".
     *
     * @var integer
     */
    const CODE_PARTIAL_CONTENT = 206;

    /**
     * Code "Multi-Status".
     *
     * @var integer
     */
    const CODE_MULTI_STATUS = 207;

    /**
     * Code "Already Reported".
     *
     * @var integer
     */
    const CODE_ALREADY_REPORTED = 208;

    /**
     * Code "Content Different".
     *
     * @var integer
     */
    const CODE_CONTENT_DIFFERENT = 210;

    /**
     * Code "IM_Used".
     *
     * @var integer
     */
    const CODE_IM_USED = 226;

    /**
     * Code "Multiple Choices".
     *
     * @var integer
     */
    const CODE_MULTIPLE_CHOICES = 300;

    /**
     * Code "Moved Permanently".
     *
     * @var integer
     */
    const CODE_MOVED_PERMANENTLY = 301;

    /**
     * Code "Moved Temporarily".
     *
     * @var integer
     */
    const CODE_MOVED_TEMPORARILY = 302;

    /**
     * Code "See Other".
     *
     * @var integer
     */
    const CODE_SEE_OTHER = 303;

    /**
     * Code "Not Modified".
     *
     * @var integer
     */
    const CODE_NOT_MODIFIED = 304;

    /**
     * Code "Use Proxy".
     *
     * @var integer
     */
    const CODE_USE_PROXY = 305;

    /**
     * Code "Switch proxy".
     *
     * @var integer
     */
    const CODE_SWITCH_PROXY = 306;

    /**
     * Code "Temporary Redirect".
     *
     * @var integer
     */
    const CODE_TEMPORARY_REDIRECT = 307;

    /**
     * Code "Permanent Redirect".
     *
     * @var integer
     */
    const CODE_PERMANENT_REDIRECT = 308;

    /**
     * Code "Too many Redirects".
     *
     * @var integer
     */
    const CODE_TOO_MANY_REDIRECTS = 310;

    /**
     * Code "Bad Request".
     *
     * @var integer
     */
    const CODE_BAD_REQUEST = 400;

    /**
     * Code "Unauthorized".
     *
     * @var integer
     */
    const CODE_UNAUTHORIZED = 401;

    /**
     * Code "Payment Required".
     *
     * @var integer
     */
    const CODE_PAYMENT_REQUIRED = 402;

    /**
     * Code "Forbidden".
     *
     * @var integer
     */
    const CODE_FORBIDDEN = 403;

    /**
     * Code "Not Found".
     *
     * @var integer
     */
    const CODE_NOT_FOUND = 404;

    /**
     * Code "Method Not Allowed".
     *
     * @var integer
     */
    const CODE_METHOD_NOT_ALLOWED = 405;

    /**
     * Code "Not Acceptable".
     *
     * @var integer
     */
    const CODE_NOT_ACCEPTABLE = 406;

    /**
     * Code "Proxy Authentication Required".
     *
     * @var integer
     */
    const CODE_PROXY_AUTHENTICATION_REQUIRED = 407;

    /**
     * Code "Request Time-out".
     *
     * @var integer
     */
    const CODE_REQUEST_TIME_OUT = 408;

    /**
     * Code "Conflict".
     *
     * @var integer
     */
    const CODE_CONFLICT = 409;

    /**
     * Code "Gone".
     *
     * @var integer
     */
    const CODE_GONE = 410;

    /**
     * Code "Length Required".
     *
     * @var integer
     */
    const CODE_LENGTH_REQUIRED = 411;

    /**
     * Code "Precondition Failed".
     *
     * @var integer
     */
    const CODE_PRECONDITION_FAILED = 412;

    /**
     * Code "Request Entity Too Large".
     *
     * @var integer
     */
    const CODE_REQUEST_ENTITY_TOO_LARGE = 413;

    /**
     * Code "Request-URI_Too Long".
     *
     * @var integer
     */
    const CODE_REQUEST_URI_TOO_LONG = 414;

    /**
     * Code "Unsupported Media Type".
     *
     * @var integer
     */
    const CODE_UNSUPPORTED_MEDIA_TYPE = 415;

    /**
     * Code "Requested range unsatisfiable".
     *
     * @var integer
     */
    const CODE_REQUESTED_RANGE_UNSATISFIABLE = 416;

    /**
     * Code "Expectation failed".
     *
     * @var integer
     */
    const CODE_EXPECTATION_FAILED = 417;

    /**
     * Code "I’m a teapot".
     *
     * @var integer
     */
    const CODE_IM_A_TEAPOT = 418;

    /**
     * Code "Bad mapping / Misdirected Request".
     *
     * @var integer
     */
    const CODE_BAD_MAPPING_MISDIRECTED_REQUEST = 421;

    /**
     * Code "Unprocessable entity".
     *
     * @var integer
     */
    const CODE_UNPROCESSABLE_ENTITY = 422;

    /**
     * Code "Locked".
     *
     * @var integer
     */
    const CODE_LOCKED = 423;

    /**
     * Code "Method failure".
     *
     * @var integer
     */
    const CODE_METHOD_FAILURE = 424;

    /**
     * Code "Unordered Collection".
     *
     * @var integer
     */
    const CODE_UNORDERED_COLLECTION = 425;

    /**
     * Code "Upgrade Required".
     *
     * @var integer
     */
    const CODE_UPGRADE_REQUIRED = 426;

    /**
     * Code "Precondition Required".
     *
     * @var integer
     */
    const CODE_PRECONDITION_REQUIRED = 428;

    /**
     * Code "Too Many Requests".
     *
     * @var integer
     */
    const CODE_TOO_MANY_REQUESTS = 429;

    /**
     * Code "Request Header Fields Too Large".
     *
     * @var integer
     */
    const CODE_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

    /**
     * Code "Retry With".
     *
     * @var integer
     */
    const CODE_RETRY_WITH = 449;

    /**
     * Code "Blocked by Windows Parental Controls".
     *
     * @var integer
     */
    const CODE_BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS = 450;

    /**
     * Code "Unavailable For Legal Reasons".
     *
     * @var integer
     */
    const CODE_UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    /**
     * Code "Unrecoverable Error".
     *
     * @var integer
     */
    const CODE_UNRECOVERABLE_ERROR = 456;

    /**
     * Code "No Response".
     *
     * @var integer
     */
    const CODE_NO_RESPONSE = 444;

    /**
     * Code "SSL_Certificate Error".
     *
     * @var integer
     */
    const CODE_SSL_CERTIFICATE_ERROR = 495;

    /**
     * Code "SSL_Certificate Required".
     *
     * @var integer
     */
    const CODE_SSL_CERTIFICATE_REQUIRED = 496;

    /**
     * Code "HTTP_Request Sent to HTTPS_Port".
     *
     * @var integer
     */
    const CODE_HTTP_REQUEST_SENT_TO_HTTPS_PORT = 497;

    /**
     * Code "Client Closed Request".
     *
     * @var integer
     */
    const CODE_CLIENT_CLOSED_REQUEST = 499;

    /**
     * Code "Internal Server Error".
     *
     * @var integer
     */
    const CODE_INTERNAL_SERVER_ERROR = 500;

    /**
     * Code "Not Implemented".
     *
     * @var integer
     */
    const CODE_NOT_IMPLEMENTED = 501;

    /**
     * Code "Bad Gateway ou Proxy Error".
     *
     * @var integer
     */
    const CODE_BAD_GATEWAY_OU_PROXY_ERROR = 502;

    /**
     * Code "Service Unavailable".
     *
     * @var integer
     */
    const CODE_SERVICE_UNAVAILABLE = 503;

    /**
     * Code "Gateway Time-out".
     *
     * @var integer
     */
    const CODE_GATEWAY_TIME_OUT = 504;

    /**
     * Code "HTTP_Version not supported".
     *
     * @var integer
     */
    const CODE_HTTP_VERSION_NOT_SUPPORTED = 505;

    /**
     * Code "Variant Also Negotiates".
     *
     * @var integer
     */
    const CODE_VARIANT_ALSO_NEGOTIATES = 506;

    /**
     * Code "Insufficient storage".
     *
     * @var integer
     */
    const CODE_INSUFFICIENT_STORAGE = 507;

    /**
     * Code "Loop detected".
     *
     * @var integer
     */
    const CODE_LOOP_DETECTED = 508;

    /**
     * Code "Bandwidth Limit Exceeded".
     *
     * @var integer
     */
    const CODE_BANDWIDTH_LIMIT_EXCEEDED = 509;

    /**
     * Code "Not extended".
     *
     * @var integer
     */
    const CODE_NOT_EXTENDED = 510;

    /**
     * Code "Network authentication required".
     *
     * @var integer
     */
    const CODE_NETWORK_AUTHENTICATION_REQUIRED = 511;

    /**
     * Code "Unknown Error".
     *
     * @var integer
     */
    const CODE_UNKNOWN_ERROR = 520;

    /**
     * Code "Web Server Is Down".
     *
     * @var integer
     */
    const CODE_WEB_SERVER_IS_DOWN = 521;

    /**
     * Code "Connection Timed Out".
     *
     * @var integer
     */
    const CODE_CONNECTION_TIMED_OUT = 522;

    /**
     * Code "Origin Is Unreachable".
     *
     * @var integer
     */
    const CODE_ORIGIN_IS_UNREACHABLE = 523;

    /**
     * Code "A_Timeout Occurred".
     *
     * @var integer
     */
    const CODE_A_TIMEOUT_OCCURRED = 524;

    /**
     * Code "SSL_Handshake Failed".
     *
     * @var integer
     */
    const CODE_SSL_HANDSHAKE_FAILED = 525;

    /**
     * Code "Invalid SSL_Certificate".
     *
     * @var integer
     */
    const CODE_INVALID_SSL_CERTIFICATE = 526;

    /**
     * Code "Railgun Error".
     *
     * @var integer
     */
    const CODE_RAILGUN_ERROR = 527;

}
