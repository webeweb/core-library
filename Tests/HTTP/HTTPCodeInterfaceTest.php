<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\HTTP;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\HTTP\HTTPCodeInterface;

/**
 * HTTP code interface test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\HTTP
 * @final
 */
final class HTTPCodeInterfaceTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$this->assertEquals(100, HTTPCodeInterface::CODE_CONTINUE, "The constant CODE_CONTINUE does not return the expecetd value");
		$this->assertEquals(101, HTTPCodeInterface::CODE_SWITCHING_PROTOCOLS, "The constant CODE_SWITCHING_PROTOCOLS does not return the expecetd value");
		$this->assertEquals(102, HTTPCodeInterface::CODE_PROCESSING, "The constant CODE_PROCESSING does not return the expecetd value");
		$this->assertEquals(200, HTTPCodeInterface::CODE_OK, "The constant CODE_OK does not return the expecetd value");
		$this->assertEquals(201, HTTPCodeInterface::CODE_CREATED, "The constant CODE_CREATED does not return the expecetd value");
		$this->assertEquals(202, HTTPCodeInterface::CODE_ACCEPTED, "The constant CODE_ACCEPTED does not return the expecetd value");
		$this->assertEquals(203, HTTPCodeInterface::CODE_NON_AUTHORITATIVE_INFORMATION, "The constant CODE_NON_AUTHORITATIVE_INFORMATION does not return the expecetd value");
		$this->assertEquals(204, HTTPCodeInterface::CODE_NO_CONTENT, "The constant CODE_NO_CONTENT does not return the expecetd value");
		$this->assertEquals(205, HTTPCodeInterface::CODE_RESET_CONTENT, "The constant CODE_RESET_CONTENT does not return the expecetd value");
		$this->assertEquals(206, HTTPCodeInterface::CODE_PARTIAL_CONTENT, "The constant CODE_PARTIAL_CONTENT does not return the expecetd value");
		$this->assertEquals(207, HTTPCodeInterface::CODE_MULTI_STATUS, "The constant CODE_MULTI_STATUS does not return the expecetd value");
		$this->assertEquals(208, HTTPCodeInterface::CODE_ALREADY_REPORTED, "The constant CODE_ALREADY_REPORTED does not return the expecetd value");
		$this->assertEquals(210, HTTPCodeInterface::CODE_CONTENT_DIFFERENT, "The constant CODE_CONTENT_DIFFERENT does not return the expecetd value");
		$this->assertEquals(226, HTTPCodeInterface::CODE_IM_USED, "The constant CODE_IM_USED does not return the expecetd value");
		$this->assertEquals(300, HTTPCodeInterface::CODE_MULTIPLE_CHOICES, "The constant CODE_MULTIPLE_CHOICES does not return the expecetd value");
		$this->assertEquals(301, HTTPCodeInterface::CODE_MOVED_PERMANENTLY, "The constant CODE_MOVED_PERMANENTLY does not return the expecetd value");
		$this->assertEquals(302, HTTPCodeInterface::CODE_MOVED_TEMPORARILY, "The constant CODE_MOVED_TEMPORARILY does not return the expecetd value");
		$this->assertEquals(303, HTTPCodeInterface::CODE_SEE_OTHER, "The constant CODE_SEE_OTHER does not return the expecetd value");
		$this->assertEquals(304, HTTPCodeInterface::CODE_NOT_MODIFIED, "The constant CODE_NOT_MODIFIED does not return the expecetd value");
		$this->assertEquals(305, HTTPCodeInterface::CODE_USE_PROXY, "The constant CODE_USE_PROXY does not return the expecetd value");
		$this->assertEquals(306, HTTPCodeInterface::CODE_SWITCH_PROXY, "The constant CODE_SWITCH_PROXY does not return the expecetd value");
		$this->assertEquals(307, HTTPCodeInterface::CODE_TEMPORARY_REDIRECT, "The constant CODE_TEMPORARY_REDIRECT does not return the expecetd value");
		$this->assertEquals(308, HTTPCodeInterface::CODE_PERMANENT_REDIRECT, "The constant CODE_PERMANENT_REDIRECT does not return the expecetd value");
		$this->assertEquals(310, HTTPCodeInterface::CODE_TOO_MANY_REDIRECTS, "The constant CODE_TOO_MANY_REDIRECTS does not return the expecetd value");
		$this->assertEquals(400, HTTPCodeInterface::CODE_BAD_REQUEST, "The constant CODE_BAD_REQUEST does not return the expecetd value");
		$this->assertEquals(401, HTTPCodeInterface::CODE_UNAUTHORIZED, "The constant CODE_UNAUTHORIZED does not return the expecetd value");
		$this->assertEquals(402, HTTPCodeInterface::CODE_PAYMENT_REQUIRED, "The constant CODE_PAYMENT_REQUIRED does not return the expecetd value");
		$this->assertEquals(403, HTTPCodeInterface::CODE_FORBIDDEN, "The constant CODE_FORBIDDEN does not return the expecetd value");
		$this->assertEquals(404, HTTPCodeInterface::CODE_NOT_FOUND, "The constant CODE_NOT_FOUND does not return the expecetd value");
		$this->assertEquals(405, HTTPCodeInterface::CODE_METHOD_NOT_ALLOWED, "The constant CODE_METHOD_NOT_ALLOWED does not return the expecetd value");
		$this->assertEquals(406, HTTPCodeInterface::CODE_NOT_ACCEPTABLE, "The constant CODE_NOT_ACCEPTABLE does not return the expecetd value");
		$this->assertEquals(407, HTTPCodeInterface::CODE_PROXY_AUTHENTICATION_REQUIRED, "The constant CODE_PROXY_AUTHENTICATION_REQUIRED does not return the expecetd value");
		$this->assertEquals(408, HTTPCodeInterface::CODE_REQUEST_TIME_OUT, "The constant CODE_REQUEST_TIME_OUT does not return the expecetd value");
		$this->assertEquals(409, HTTPCodeInterface::CODE_CONFLICT, "The constant CODE_CONFLICT does not return the expecetd value");
		$this->assertEquals(410, HTTPCodeInterface::CODE_GONE, "The constant CODE_GONE does not return the expecetd value");
		$this->assertEquals(411, HTTPCodeInterface::CODE_LENGTH_REQUIRED, "The constant CODE_LENGTH_REQUIRED does not return the expecetd value");
		$this->assertEquals(412, HTTPCodeInterface::CODE_PRECONDITION_FAILED, "The constant CODE_PRECONDITION_FAILED does not return the expecetd value");
		$this->assertEquals(413, HTTPCodeInterface::CODE_REQUEST_ENTITY_TOO_LARGE, "The constant CODE_REQUEST_ENTITY_TOO_LARGE does not return the expecetd value");
		$this->assertEquals(414, HTTPCodeInterface::CODE_REQUEST_URI_TOO_LONG, "The constant CODE_REQUEST_URI_TOO_LONG does not return the expecetd value");
		$this->assertEquals(415, HTTPCodeInterface::CODE_UNSUPPORTED_MEDIA_TYPE, "The constant CODE_UNSUPPORTED_MEDIA_TYPE does not return the expecetd value");
		$this->assertEquals(416, HTTPCodeInterface::CODE_REQUESTED_RANGE_UNSATISFIABLE, "The constant CODE_REQUESTED_RANGE_UNSATISFIABLE does not return the expecetd value");
		$this->assertEquals(417, HTTPCodeInterface::CODE_EXPECTATION_FAILED, "The constant CODE_EXPECTATION_FAILED does not return the expecetd value");
		$this->assertEquals(418, HTTPCodeInterface::CODE_IM_A_TEAPOT, "The constant CODE_IM_A_TEAPOT does not return the expecetd value");
		$this->assertEquals(421, HTTPCodeInterface::CODE_BAD_MAPPING_MISDIRECTED_REQUEST, "The constant CODE_BAD_MAPPING / MISDIRECTED_REQUEST does not return the expecetd value");
		$this->assertEquals(422, HTTPCodeInterface::CODE_UNPROCESSABLE_ENTITY, "The constant CODE_UNPROCESSABLE_ENTITY does not return the expecetd value");
		$this->assertEquals(423, HTTPCodeInterface::CODE_LOCKED, "The constant CODE_LOCKED does not return the expecetd value");
		$this->assertEquals(424, HTTPCodeInterface::CODE_METHOD_FAILURE, "The constant CODE_METHOD_FAILURE does not return the expecetd value");
		$this->assertEquals(425, HTTPCodeInterface::CODE_UNORDERED_COLLECTION, "The constant CODE_UNORDERED_COLLECTION does not return the expecetd value");
		$this->assertEquals(426, HTTPCodeInterface::CODE_UPGRADE_REQUIRED, "The constant CODE_UPGRADE_REQUIRED does not return the expecetd value");
		$this->assertEquals(428, HTTPCodeInterface::CODE_PRECONDITION_REQUIRED, "The constant CODE_PRECONDITION_REQUIRED does not return the expecetd value");
		$this->assertEquals(429, HTTPCodeInterface::CODE_TOO_MANY_REQUESTS, "The constant CODE_TOO_MANY_REQUESTS does not return the expecetd value");
		$this->assertEquals(431, HTTPCodeInterface::CODE_REQUEST_HEADER_FIELDS_TOO_LARGE, "The constant CODE_REQUEST_HEADER_FIELDS_TOO_LARGE does not return the expecetd value");
		$this->assertEquals(449, HTTPCodeInterface::CODE_RETRY_WITH, "The constant CODE_RETRY_WITH does not return the expecetd value");
		$this->assertEquals(450, HTTPCodeInterface::CODE_BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS, "The constant CODE_BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS does not return the expecetd value");
		$this->assertEquals(451, HTTPCodeInterface::CODE_UNAVAILABLE_FOR_LEGAL_REASONS, "The constant CODE_UNAVAILABLE_FOR_LEGAL_REASONS does not return the expecetd value");
		$this->assertEquals(456, HTTPCodeInterface::CODE_UNRECOVERABLE_ERROR, "The constant CODE_UNRECOVERABLE_ERROR does not return the expecetd value");
		$this->assertEquals(444, HTTPCodeInterface::CODE_NO_RESPONSE, "The constant CODE_NO_RESPONSE does not return the expecetd value");
		$this->assertEquals(495, HTTPCodeInterface::CODE_SSL_CERTIFICATE_ERROR, "The constant CODE_SSL_CERTIFICATE_ERROR does not return the expecetd value");
		$this->assertEquals(496, HTTPCodeInterface::CODE_SSL_CERTIFICATE_REQUIRED, "The constant CODE_SSL_CERTIFICATE_REQUIRED does not return the expecetd value");
		$this->assertEquals(497, HTTPCodeInterface::CODE_HTTP_REQUEST_SENT_TO_HTTPS_PORT, "The constant CODE_HTTP_REQUEST_SENT_TO_HTTPS_PORT does not return the expecetd value");
		$this->assertEquals(499, HTTPCodeInterface::CODE_CLIENT_CLOSED_REQUEST, "The constant CODE_CLIENT_CLOSED_REQUEST does not return the expecetd value");
		$this->assertEquals(500, HTTPCodeInterface::CODE_INTERNAL_SERVER_ERROR, "The constant CODE_INTERNAL_SERVER_ERROR does not return the expecetd value");
		$this->assertEquals(501, HTTPCodeInterface::CODE_NOT_IMPLEMENTED, "The constant CODE_NOT_IMPLEMENTED does not return the expecetd value");
		$this->assertEquals(502, HTTPCodeInterface::CODE_BAD_GATEWAY_OU_PROXY_ERROR, "The constant CODE_BAD_GATEWAY_OU_PROXY_ERROR does not return the expecetd value");
		$this->assertEquals(503, HTTPCodeInterface::CODE_SERVICE_UNAVAILABLE, "The constant CODE_SERVICE_UNAVAILABLE does not return the expecetd value");
		$this->assertEquals(504, HTTPCodeInterface::CODE_GATEWAY_TIME_OUT, "The constant CODE_GATEWAY_TIME_OUT does not return the expecetd value");
		$this->assertEquals(505, HTTPCodeInterface::CODE_HTTP_VERSION_NOT_SUPPORTED, "The constant CODE_HTTP_VERSION_NOT_SUPPORTED does not return the expecetd value");
		$this->assertEquals(506, HTTPCodeInterface::CODE_VARIANT_ALSO_NEGOTIATES, "The constant CODE_VARIANT_ALSO_NEGOTIATES does not return the expecetd value");
		$this->assertEquals(507, HTTPCodeInterface::CODE_INSUFFICIENT_STORAGE, "The constant CODE_INSUFFICIENT_STORAGE does not return the expecetd value");
		$this->assertEquals(508, HTTPCodeInterface::CODE_LOOP_DETECTED, "The constant CODE_LOOP_DETECTED does not return the expecetd value");
		$this->assertEquals(509, HTTPCodeInterface::CODE_BANDWIDTH_LIMIT_EXCEEDED, "The constant CODE_BANDWIDTH_LIMIT_EXCEEDED does not return the expecetd value");
		$this->assertEquals(510, HTTPCodeInterface::CODE_NOT_EXTENDED, "The constant CODE_NOT_EXTENDED does not return the expecetd value");
		$this->assertEquals(511, HTTPCodeInterface::CODE_NETWORK_AUTHENTICATION_REQUIRED, "The constant CODE_NETWORK_AUTHENTICATION_REQUIRED does not return the expecetd value");
		$this->assertEquals(520, HTTPCodeInterface::CODE_UNKNOWN_ERROR, "The constant CODE_UNKNOWN_ERROR does not return the expecetd value");
		$this->assertEquals(521, HTTPCodeInterface::CODE_WEB_SERVER_IS_DOWN, "The constant CODE_WEB_SERVER_IS_DOWN does not return the expecetd value");
		$this->assertEquals(522, HTTPCodeInterface::CODE_CONNECTION_TIMED_OUT, "The constant CODE_CONNECTION_TIMED_OUT does not return the expecetd value");
		$this->assertEquals(523, HTTPCodeInterface::CODE_ORIGIN_IS_UNREACHABLE, "The constant CODE_ORIGIN_IS_UNREACHABLE does not return the expecetd value");
		$this->assertEquals(524, HTTPCodeInterface::CODE_A_TIMEOUT_OCCURRED, "The constant CODE_A_TIMEOUT_OCCURRED does not return the expecetd value");
		$this->assertEquals(525, HTTPCodeInterface::CODE_SSL_HANDSHAKE_FAILED, "The constant CODE_SSL_HANDSHAKE_FAILED does not return the expecetd value");
		$this->assertEquals(526, HTTPCodeInterface::CODE_INVALID_SSL_CERTIFICATE, "The constant CODE_INVALID_SSL_CERTIFICATE does not return the expecetd value");
		$this->assertEquals(527, HTTPCodeInterface::CODE_RAILGUN_ERROR, "The constant CODE_RAILGUN_ERROR does not return the expecetd value");
	}

}
