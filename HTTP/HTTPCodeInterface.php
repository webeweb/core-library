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
	 */
	const CODE_CONTINUE = 100;

	/**
	 * Code "Switching Protocols".
	 */
	const CODE_SWITCHING_PROTOCOLS = 101;

	/**
	 * Code "Processing".
	 */
	const CODE_PROCESSING = 102;

	/**
	 * Code "OK".
	 */
	const CODE_OK = 200;

	/**
	 * Code "Created".
	 */
	const CODE_CREATED = 201;

	/**
	 * Code "Accepted".
	 */
	const CODE_ACCEPTED = 202;

	/**
	 * Code "Non-Authoritative Information".
	 */
	const CODE_NON_AUTHORITATIVE_INFORMATION = 203;

	/**
	 * Code "No Content".
	 */
	const CODE_NO_CONTENT = 204;

	/**
	 * Code "Reset Content".
	 */
	const CODE_RESET_CONTENT = 205;

	/**
	 * Code "Partial Content".
	 */
	const CODE_PARTIAL_CONTENT = 206;

	/**
	 * Code "Multi-Status".
	 */
	const CODE_MULTI_STATUS = 207;

	/**
	 * Code "Already Reported".
	 */
	const CODE_ALREADY_REPORTED = 208;

	/**
	 * Code "Content Different".
	 */
	const CODE_CONTENT_DIFFERENT = 210;

	/**
	 * Code "IM_Used".
	 */
	const CODE_IM_USED = 226;

	/**
	 * Code "Multiple Choices".
	 */
	const CODE_MULTIPLE_CHOICES = 300;

	/**
	 * Code "Moved Permanently".
	 */
	const CODE_MOVED_PERMANENTLY = 301;

	/**
	 * Code "Moved Temporarily".
	 */
	const CODE_MOVED_TEMPORARILY = 302;

	/**
	 * Code "See Other".
	 */
	const CODE_SEE_OTHER = 303;

	/**
	 * Code "Not Modified".
	 */
	const CODE_NOT_MODIFIED = 304;

	/**
	 * Code "Use Proxy".
	 */
	const CODE_USE_PROXY = 305;

	/**
	 * Code "Switch proxy".
	 */
	const CODE_SWITCH_PROXY = 306;

	/**
	 * Code "Temporary Redirect".
	 */
	const CODE_TEMPORARY_REDIRECT = 307;

	/**
	 * Code "Permanent Redirect".
	 */
	const CODE_PERMANENT_REDIRECT = 308;

	/**
	 * Code "Too many Redirects".
	 */
	const CODE_TOO_MANY_REDIRECTS = 310;

	/**
	 * Code "Bad Request".
	 */
	const CODE_BAD_REQUEST = 400;

	/**
	 * Code "Unauthorized".
	 */
	const CODE_UNAUTHORIZED = 401;

	/**
	 * Code "Payment Required".
	 */
	const CODE_PAYMENT_REQUIRED = 402;

	/**
	 * Code "Forbidden".
	 */
	const CODE_FORBIDDEN = 403;

	/**
	 * Code "Not Found".
	 */
	const CODE_NOT_FOUND = 404;

	/**
	 * Code "Method Not Allowed".
	 */
	const CODE_METHOD_NOT_ALLOWED = 405;

	/**
	 * Code "Not Acceptable".
	 */
	const CODE_NOT_ACCEPTABLE = 406;

	/**
	 * Code "Proxy Authentication Required".
	 */
	const CODE_PROXY_AUTHENTICATION_REQUIRED = 407;

	/**
	 * Code "Request Time-out".
	 */
	const CODE_REQUEST_TIME_OUT = 408;

	/**
	 * Code "Conflict".
	 */
	const CODE_CONFLICT = 409;

	/**
	 * Code "Gone".
	 */
	const CODE_GONE = 410;

	/**
	 * Code "Length Required".
	 */
	const CODE_LENGTH_REQUIRED = 411;

	/**
	 * Code "Precondition Failed".
	 */
	const CODE_PRECONDITION_FAILED = 412;

	/**
	 * Code "Request Entity Too Large".
	 */
	const CODE_REQUEST_ENTITY_TOO_LARGE = 413;

	/**
	 * Code "Request-URI_Too Long".
	 */
	const CODE_REQUEST_URI_TOO_LONG = 414;

	/**
	 * Code "Unsupported Media Type".
	 */
	const CODE_UNSUPPORTED_MEDIA_TYPE = 415;

	/**
	 * Code "Requested range unsatisfiable".
	 */
	const CODE_REQUESTED_RANGE_UNSATISFIABLE = 416;

	/**
	 * Code "Expectation failed".
	 */
	const CODE_EXPECTATION_FAILED = 417;

	/**
	 * Code "I’m a teapot".
	 */
	const CODE_IM_A_TEAPOT = 418;

	/**
	 * Code "Bad mapping / Misdirected Request".
	 */
	const CODE_BAD_MAPPING_MISDIRECTED_REQUEST = 421;

	/**
	 * Code "Unprocessable entity".
	 */
	const CODE_UNPROCESSABLE_ENTITY = 422;

	/**
	 * Code "Locked".
	 */
	const CODE_LOCKED = 423;

	/**
	 * Code "Method failure".
	 */
	const CODE_METHOD_FAILURE = 424;

	/**
	 * Code "Unordered Collection".
	 */
	const CODE_UNORDERED_COLLECTION = 425;

	/**
	 * Code "Upgrade Required".
	 */
	const CODE_UPGRADE_REQUIRED = 426;

	/**
	 * Code "Precondition Required".
	 */
	const CODE_PRECONDITION_REQUIRED = 428;

	/**
	 * Code "Too Many Requests".
	 */
	const CODE_TOO_MANY_REQUESTS = 429;

	/**
	 * Code "Request Header Fields Too Large".
	 */
	const CODE_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

	/**
	 * Code "Retry With".
	 */
	const CODE_RETRY_WITH = 449;

	/**
	 * Code "Blocked by Windows Parental Controls".
	 */
	const CODE_BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS = 450;

	/**
	 * Code "Unavailable For Legal Reasons".
	 */
	const CODE_UNAVAILABLE_FOR_LEGAL_REASONS = 451;

	/**
	 * Code "Unrecoverable Error".
	 */
	const CODE_UNRECOVERABLE_ERROR = 456;

	/**
	 * Code "No Response".
	 */
	const CODE_NO_RESPONSE = 444;

	/**
	 * Code "SSL_Certificate Error".
	 */
	const CODE_SSL_CERTIFICATE_ERROR = 495;

	/**
	 * Code "SSL_Certificate Required".
	 */
	const CODE_SSL_CERTIFICATE_REQUIRED = 496;

	/**
	 * Code "HTTP_Request Sent to HTTPS_Port".
	 */
	const CODE_HTTP_REQUEST_SENT_TO_HTTPS_PORT = 497;

	/**
	 * Code "Client Closed Request".
	 */
	const CODE_CLIENT_CLOSED_REQUEST = 499;

	/**
	 * Code "Internal Server Error".
	 */
	const CODE_INTERNAL_SERVER_ERROR = 500;

	/**
	 * Code "Not Implemented".
	 */
	const CODE_NOT_IMPLEMENTED = 501;

	/**
	 * Code "Bad Gateway ou Proxy Error".
	 */
	const CODE_BAD_GATEWAY_OU_PROXY_ERROR = 502;

	/**
	 * Code "Service Unavailable".
	 */
	const CODE_SERVICE_UNAVAILABLE = 503;

	/**
	 * Code "Gateway Time-out".
	 */
	const CODE_GATEWAY_TIME_OUT = 504;

	/**
	 * Code "HTTP_Version not supported".
	 */
	const CODE_HTTP_VERSION_NOT_SUPPORTED = 505;

	/**
	 * Code "Variant Also Negotiates".
	 */
	const CODE_VARIANT_ALSO_NEGOTIATES = 506;

	/**
	 * Code "Insufficient storage".
	 */
	const CODE_INSUFFICIENT_STORAGE = 507;

	/**
	 * Code "Loop detected".
	 */
	const CODE_LOOP_DETECTED = 508;

	/**
	 * Code "Bandwidth Limit Exceeded".
	 */
	const CODE_BANDWIDTH_LIMIT_EXCEEDED = 509;

	/**
	 * Code "Not extended".
	 */
	const CODE_NOT_EXTENDED = 510;

	/**
	 * Code "Network authentication required".
	 */
	const CODE_NETWORK_AUTHENTICATION_REQUIRED = 511;

	/**
	 * Code "Unknown Error".
	 */
	const CODE_UNKNOWN_ERROR = 520;

	/**
	 * Code "Web Server Is Down".
	 */
	const CODE_WEB_SERVER_IS_DOWN = 521;

	/**
	 * Code "Connection Timed Out".
	 */
	const CODE_CONNECTION_TIMED_OUT = 522;

	/**
	 * Code "Origin Is Unreachable".
	 */
	const CODE_ORIGIN_IS_UNREACHABLE = 523;

	/**
	 * Code "A_Timeout Occurred".
	 */
	const CODE_A_TIMEOUT_OCCURRED = 524;

	/**
	 * Code "SSL_Handshake Failed".
	 */
	const CODE_SSL_HANDSHAKE_FAILED = 525;

	/**
	 * Code "Invalid SSL_Certificate".
	 */
	const CODE_INVALID_SSL_CERTIFICATE = 526;

	/**
	 * Code "Railgun Error".
	 */
	const CODE_RAILGUN_ERROR = 527;

}
