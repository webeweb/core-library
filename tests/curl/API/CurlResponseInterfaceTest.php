<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Tests\API;

use WBW\Library\Curl\API\CurlResponseInterface;
use WBW\Library\Curl\Tests\AbstractTestCase;

/**
 * cURL response interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Curl\Tests\API
 */
class CurlResponseInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals(100, CurlResponseInterface::CURL_RESPONSE_CONTINUE);
        $this->assertEquals(101, CurlResponseInterface::CURL_RESPONSE_SWITCHING_PROTOCOLS);
        $this->assertEquals(102, CurlResponseInterface::CURL_RESPONSE_PROCESSING);

        $this->assertEquals(200, CurlResponseInterface::CURL_RESPONSE_OK);
        $this->assertEquals(201, CurlResponseInterface::CURL_RESPONSE_CREATED);
        $this->assertEquals(202, CurlResponseInterface::CURL_RESPONSE_ACCEPTED);
        $this->assertEquals(203, CurlResponseInterface::CURL_RESPONSE_NON_AUTHORITATIVE_INFORMATION);
        $this->assertEquals(204, CurlResponseInterface::CURL_RESPONSE_NO_CONTENT);
        $this->assertEquals(205, CurlResponseInterface::CURL_RESPONSE_RESET_CONTENT);
        $this->assertEquals(206, CurlResponseInterface::CURL_RESPONSE_PARTIAL_CONTENT);
        $this->assertEquals(207, CurlResponseInterface::CURL_RESPONSE_MULTI_STATUS);
        $this->assertEquals(208, CurlResponseInterface::CURL_RESPONSE_ALREADY_REPORTED);
        $this->assertEquals(210, CurlResponseInterface::CURL_RESPONSE_CONTENT_DIFFERENT);
        $this->assertEquals(226, CurlResponseInterface::CURL_RESPONSE_IM_USED);

        $this->assertEquals(300, CurlResponseInterface::CURL_RESPONSE_MULTIPLE_CHOICES);
        $this->assertEquals(301, CurlResponseInterface::CURL_RESPONSE_MOVED_PERMANENTLY);
        $this->assertEquals(302, CurlResponseInterface::CURL_RESPONSE_MOVED_TEMPORARILY);
        $this->assertEquals(303, CurlResponseInterface::CURL_RESPONSE_SEE_OTHER);
        $this->assertEquals(304, CurlResponseInterface::CURL_RESPONSE_NOT_MODIFIED);
        $this->assertEquals(305, CurlResponseInterface::CURL_RESPONSE_USE_PROXY);
        $this->assertEquals(306, CurlResponseInterface::CURL_RESPONSE_SWITCH_PROXY);
        $this->assertEquals(307, CurlResponseInterface::CURL_RESPONSE_TEMPORARY_REDIRECT);
        $this->assertEquals(308, CurlResponseInterface::CURL_RESPONSE_PERMANENT_REDIRECT);
        $this->assertEquals(310, CurlResponseInterface::CURL_RESPONSE_TOO_MANY_REDIRECTS);

        $this->assertEquals(400, CurlResponseInterface::CURL_RESPONSE_BAD_REQUEST);
        $this->assertEquals(401, CurlResponseInterface::CURL_RESPONSE_UNAUTHORIZED);
        $this->assertEquals(402, CurlResponseInterface::CURL_RESPONSE_PAYMENT_REQUIRED);
        $this->assertEquals(403, CurlResponseInterface::CURL_RESPONSE_FORBIDDEN);
        $this->assertEquals(404, CurlResponseInterface::CURL_RESPONSE_NOT_FOUND);
        $this->assertEquals(405, CurlResponseInterface::CURL_RESPONSE_METHOD_NOT_ALLOWED);
        $this->assertEquals(406, CurlResponseInterface::CURL_RESPONSE_NOT_ACCEPTABLE);
        $this->assertEquals(407, CurlResponseInterface::CURL_RESPONSE_PROXY_AUTHENTICATION_REQUIRED);
        $this->assertEquals(408, CurlResponseInterface::CURL_RESPONSE_REQUEST_TIME_OUT);
        $this->assertEquals(409, CurlResponseInterface::CURL_RESPONSE_CONFLICT);
        $this->assertEquals(410, CurlResponseInterface::CURL_RESPONSE_GONE);
        $this->assertEquals(411, CurlResponseInterface::CURL_RESPONSE_LENGTH_REQUIRED);
        $this->assertEquals(412, CurlResponseInterface::CURL_RESPONSE_PRECONDITION_FAILED);
        $this->assertEquals(413, CurlResponseInterface::CURL_RESPONSE_REQUEST_ENTITY_TOO_LARGE);
        $this->assertEquals(414, CurlResponseInterface::CURL_RESPONSE_REQUEST_URI_TOO_LONG);
        $this->assertEquals(415, CurlResponseInterface::CURL_RESPONSE_UNSUPPORTED_MEDIA_TYPE);
        $this->assertEquals(416, CurlResponseInterface::CURL_RESPONSE_REQUESTED_RANGE_UNSATISFIABLE);
        $this->assertEquals(417, CurlResponseInterface::CURL_RESPONSE_EXPECTATION_FAILED);
        $this->assertEquals(418, CurlResponseInterface::CURL_RESPONSE_IM_A_TEAPOT);
        $this->assertEquals(421, CurlResponseInterface::CURL_RESPONSE_BAD_MAPPING_MISDIRECTED_REQUEST);
        $this->assertEquals(422, CurlResponseInterface::CURL_RESPONSE_UNPROCESSABLE_ENTITY);
        $this->assertEquals(423, CurlResponseInterface::CURL_RESPONSE_LOCKED);
        $this->assertEquals(424, CurlResponseInterface::CURL_RESPONSE_METHOD_FAILURE);
        $this->assertEquals(425, CurlResponseInterface::CURL_RESPONSE_UNORDERED_COLLECTION);
        $this->assertEquals(426, CurlResponseInterface::CURL_RESPONSE_UPGRADE_REQUIRED);
        $this->assertEquals(428, CurlResponseInterface::CURL_RESPONSE_PRECONDITION_REQUIRED);
        $this->assertEquals(429, CurlResponseInterface::CURL_RESPONSE_TOO_MANY_REQUESTS);
        $this->assertEquals(431, CurlResponseInterface::CURL_RESPONSE_REQUEST_HEADER_FIELDS_TOO_LARGE);
        $this->assertEquals(444, CurlResponseInterface::CURL_RESPONSE_NO_RESPONSE);
        $this->assertEquals(449, CurlResponseInterface::CURL_RESPONSE_RETRY_WITH);
        $this->assertEquals(450, CurlResponseInterface::CURL_RESPONSE_BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS);
        $this->assertEquals(451, CurlResponseInterface::CURL_RESPONSE_UNAVAILABLE_FOR_LEGAL_REASONS);
        $this->assertEquals(456, CurlResponseInterface::CURL_RESPONSE_UNRECOVERABLE_ERROR);
        $this->assertEquals(495, CurlResponseInterface::CURL_RESPONSE_SSL_CERTIFICATE_ERROR);
        $this->assertEquals(496, CurlResponseInterface::CURL_RESPONSE_SSL_CERTIFICATE_REQUIRED);
        $this->assertEquals(497, CurlResponseInterface::CURL_RESPONSE_HTTP_REQUEST_SENT_TO_HTTPS_PORT);
        $this->assertEquals(499, CurlResponseInterface::CURL_RESPONSE_CLIENT_CLOSED_REQUEST);

        $this->assertEquals(500, CurlResponseInterface::CURL_RESPONSE_INTERNAL_SERVER_ERROR);
        $this->assertEquals(501, CurlResponseInterface::CURL_RESPONSE_NOT_IMPLEMENTED);
        $this->assertEquals(502, CurlResponseInterface::CURL_RESPONSE_BAD_GATEWAY_OU_PROXY_ERROR);
        $this->assertEquals(503, CurlResponseInterface::CURL_RESPONSE_SERVICE_UNAVAILABLE);
        $this->assertEquals(504, CurlResponseInterface::CURL_RESPONSE_GATEWAY_TIME_OUT);
        $this->assertEquals(505, CurlResponseInterface::CURL_RESPONSE_HTTP_VERSION_NOT_SUPPORTED);
        $this->assertEquals(506, CurlResponseInterface::CURL_RESPONSE_VARIANT_ALSO_NEGOTIATES);
        $this->assertEquals(507, CurlResponseInterface::CURL_RESPONSE_INSUFFICIENT_STORAGE);
        $this->assertEquals(508, CurlResponseInterface::CURL_RESPONSE_LOOP_DETECTED);
        $this->assertEquals(509, CurlResponseInterface::CURL_RESPONSE_BANDWIDTH_LIMIT_EXCEEDED);
        $this->assertEquals(510, CurlResponseInterface::CURL_RESPONSE_NOT_EXTENDED);
        $this->assertEquals(511, CurlResponseInterface::CURL_RESPONSE_NETWORK_AUTHENTICATION_REQUIRED);
        $this->assertEquals(520, CurlResponseInterface::CURL_RESPONSE_UNKNOWN_ERROR);
        $this->assertEquals(521, CurlResponseInterface::CURL_RESPONSE_WEB_SERVER_IS_DOWN);
        $this->assertEquals(522, CurlResponseInterface::CURL_RESPONSE_CONNECTION_TIMED_OUT);
        $this->assertEquals(523, CurlResponseInterface::CURL_RESPONSE_ORIGIN_IS_UNREACHABLE);
        $this->assertEquals(524, CurlResponseInterface::CURL_RESPONSE_A_TIMEOUT_OCCURRED);
        $this->assertEquals(525, CurlResponseInterface::CURL_RESPONSE_SSL_HANDSHAKE_FAILED);
        $this->assertEquals(526, CurlResponseInterface::CURL_RESPONSE_INVALID_SSL_CERTIFICATE);
        $this->assertEquals(527, CurlResponseInterface::CURL_RESPONSE_RAILGUN_ERROR);
    }
}