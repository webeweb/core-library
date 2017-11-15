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

		$this->assertEquals(100, HTTPCodeInterface::CODE_CONTINUE);
		$this->assertEquals(101, HTTPCodeInterface::CODE_SWITCHING_PROTOCOLS);
		$this->assertEquals(102, HTTPCodeInterface::CODE_PROCESSING);
		$this->assertEquals(200, HTTPCodeInterface::CODE_OK);
		$this->assertEquals(201, HTTPCodeInterface::CODE_CREATED);
		$this->assertEquals(202, HTTPCodeInterface::CODE_ACCEPTED);
		$this->assertEquals(203, HTTPCodeInterface::CODE_NON_AUTHORITATIVE_INFORMATION);
		$this->assertEquals(204, HTTPCodeInterface::CODE_NO_CONTENT);
		$this->assertEquals(205, HTTPCodeInterface::CODE_RESET_CONTENT);
		$this->assertEquals(206, HTTPCodeInterface::CODE_PARTIAL_CONTENT);
		$this->assertEquals(207, HTTPCodeInterface::CODE_MULTI_STATUS);
		$this->assertEquals(208, HTTPCodeInterface::CODE_ALREADY_REPORTED);
		$this->assertEquals(210, HTTPCodeInterface::CODE_CONTENT_DIFFERENT);
		$this->assertEquals(226, HTTPCodeInterface::CODE_IM_USED);
		$this->assertEquals(300, HTTPCodeInterface::CODE_MULTIPLE_CHOICES);
		$this->assertEquals(301, HTTPCodeInterface::CODE_MOVED_PERMANENTLY);
		$this->assertEquals(302, HTTPCodeInterface::CODE_MOVED_TEMPORARILY);
		$this->assertEquals(303, HTTPCodeInterface::CODE_SEE_OTHER);
		$this->assertEquals(304, HTTPCodeInterface::CODE_NOT_MODIFIED);
		$this->assertEquals(305, HTTPCodeInterface::CODE_USE_PROXY);
		$this->assertEquals(306, HTTPCodeInterface::CODE_SWITCH_PROXY);
		$this->assertEquals(307, HTTPCodeInterface::CODE_TEMPORARY_REDIRECT);
		$this->assertEquals(308, HTTPCodeInterface::CODE_PERMANENT_REDIRECT);
		$this->assertEquals(310, HTTPCodeInterface::CODE_TOO_MANY_REDIRECTS);
		$this->assertEquals(400, HTTPCodeInterface::CODE_BAD_REQUEST);
		$this->assertEquals(401, HTTPCodeInterface::CODE_UNAUTHORIZED);
		$this->assertEquals(402, HTTPCodeInterface::CODE_PAYMENT_REQUIRED);
		$this->assertEquals(403, HTTPCodeInterface::CODE_FORBIDDEN);
		$this->assertEquals(404, HTTPCodeInterface::CODE_NOT_FOUND);
		$this->assertEquals(405, HTTPCodeInterface::CODE_METHOD_NOT_ALLOWED);
		$this->assertEquals(406, HTTPCodeInterface::CODE_NOT_ACCEPTABLE);
		$this->assertEquals(407, HTTPCodeInterface::CODE_PROXY_AUTHENTICATION_REQUIRED);
		$this->assertEquals(408, HTTPCodeInterface::CODE_REQUEST_TIME_OUT);
		$this->assertEquals(409, HTTPCodeInterface::CODE_CONFLICT);
		$this->assertEquals(410, HTTPCodeInterface::CODE_GONE);
		$this->assertEquals(411, HTTPCodeInterface::CODE_LENGTH_REQUIRED);
		$this->assertEquals(412, HTTPCodeInterface::CODE_PRECONDITION_FAILED);
		$this->assertEquals(413, HTTPCodeInterface::CODE_REQUEST_ENTITY_TOO_LARGE);
		$this->assertEquals(414, HTTPCodeInterface::CODE_REQUEST_URI_TOO_LONG);
		$this->assertEquals(415, HTTPCodeInterface::CODE_UNSUPPORTED_MEDIA_TYPE);
		$this->assertEquals(416, HTTPCodeInterface::CODE_REQUESTED_RANGE_UNSATISFIABLE);
		$this->assertEquals(417, HTTPCodeInterface::CODE_EXPECTATION_FAILED);
		$this->assertEquals(418, HTTPCodeInterface::CODE_IM_A_TEAPOT);
		$this->assertEquals(421, HTTPCodeInterface::CODE_BAD_MAPPING_MISDIRECTED_REQUEST);
		$this->assertEquals(422, HTTPCodeInterface::CODE_UNPROCESSABLE_ENTITY);
		$this->assertEquals(423, HTTPCodeInterface::CODE_LOCKED);
		$this->assertEquals(424, HTTPCodeInterface::CODE_METHOD_FAILURE);
		$this->assertEquals(425, HTTPCodeInterface::CODE_UNORDERED_COLLECTION);
		$this->assertEquals(426, HTTPCodeInterface::CODE_UPGRADE_REQUIRED);
		$this->assertEquals(428, HTTPCodeInterface::CODE_PRECONDITION_REQUIRED);
		$this->assertEquals(429, HTTPCodeInterface::CODE_TOO_MANY_REQUESTS);
		$this->assertEquals(431, HTTPCodeInterface::CODE_REQUEST_HEADER_FIELDS_TOO_LARGE);
		$this->assertEquals(449, HTTPCodeInterface::CODE_RETRY_WITH);
		$this->assertEquals(450, HTTPCodeInterface::CODE_BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS);
		$this->assertEquals(451, HTTPCodeInterface::CODE_UNAVAILABLE_FOR_LEGAL_REASONS);
		$this->assertEquals(456, HTTPCodeInterface::CODE_UNRECOVERABLE_ERROR);
		$this->assertEquals(444, HTTPCodeInterface::CODE_NO_RESPONSE);
		$this->assertEquals(495, HTTPCodeInterface::CODE_SSL_CERTIFICATE_ERROR);
		$this->assertEquals(496, HTTPCodeInterface::CODE_SSL_CERTIFICATE_REQUIRED);
		$this->assertEquals(497, HTTPCodeInterface::CODE_HTTP_REQUEST_SENT_TO_HTTPS_PORT);
		$this->assertEquals(499, HTTPCodeInterface::CODE_CLIENT_CLOSED_REQUEST);
		$this->assertEquals(500, HTTPCodeInterface::CODE_INTERNAL_SERVER_ERROR);
		$this->assertEquals(501, HTTPCodeInterface::CODE_NOT_IMPLEMENTED);
		$this->assertEquals(502, HTTPCodeInterface::CODE_BAD_GATEWAY_OU_PROXY_ERROR);
		$this->assertEquals(503, HTTPCodeInterface::CODE_SERVICE_UNAVAILABLE);
		$this->assertEquals(504, HTTPCodeInterface::CODE_GATEWAY_TIME_OUT);
		$this->assertEquals(505, HTTPCodeInterface::CODE_HTTP_VERSION_NOT_SUPPORTED);
		$this->assertEquals(506, HTTPCodeInterface::CODE_VARIANT_ALSO_NEGOTIATES);
		$this->assertEquals(507, HTTPCodeInterface::CODE_INSUFFICIENT_STORAGE);
		$this->assertEquals(508, HTTPCodeInterface::CODE_LOOP_DETECTED);
		$this->assertEquals(509, HTTPCodeInterface::CODE_BANDWIDTH_LIMIT_EXCEEDED);
		$this->assertEquals(510, HTTPCodeInterface::CODE_NOT_EXTENDED);
		$this->assertEquals(511, HTTPCodeInterface::CODE_NETWORK_AUTHENTICATION_REQUIRED);
		$this->assertEquals(520, HTTPCodeInterface::CODE_UNKNOWN_ERROR);
		$this->assertEquals(521, HTTPCodeInterface::CODE_WEB_SERVER_IS_DOWN);
		$this->assertEquals(522, HTTPCodeInterface::CODE_CONNECTION_TIMED_OUT);
		$this->assertEquals(523, HTTPCodeInterface::CODE_ORIGIN_IS_UNREACHABLE);
		$this->assertEquals(524, HTTPCodeInterface::CODE_A_TIMEOUT_OCCURRED);
		$this->assertEquals(525, HTTPCodeInterface::CODE_SSL_HANDSHAKE_FAILED);
		$this->assertEquals(526, HTTPCodeInterface::CODE_INVALID_SSL_CERTIFICATE);
		$this->assertEquals(527, HTTPCodeInterface::CODE_RAILGUN_ERROR);
	}

}
