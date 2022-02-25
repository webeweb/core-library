<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Tests\Api;

use WBW\Library\Curl\Api\ResponseInterface;
use WBW\Library\Curl\Tests\AbstractTestCase;

/**
 * Response interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Tests\Api
 */
class ResponseInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals(100, ResponseInterface::CODE_CONTINUE);
        $this->assertEquals(101, ResponseInterface::CODE_SWITCHING_PROTOCOLS);
        $this->assertEquals(102, ResponseInterface::CODE_PROCESSING);

        $this->assertEquals(200, ResponseInterface::CODE_OK);
        $this->assertEquals(201, ResponseInterface::CODE_CREATED);
        $this->assertEquals(202, ResponseInterface::CODE_ACCEPTED);
        $this->assertEquals(203, ResponseInterface::CODE_NON_AUTHORITATIVE_INFORMATION);
        $this->assertEquals(204, ResponseInterface::CODE_NO_CONTENT);
        $this->assertEquals(205, ResponseInterface::CODE_RESET_CONTENT);
        $this->assertEquals(206, ResponseInterface::CODE_PARTIAL_CONTENT);
        $this->assertEquals(207, ResponseInterface::CODE_MULTI_STATUS);
        $this->assertEquals(208, ResponseInterface::CODE_ALREADY_REPORTED);
        $this->assertEquals(210, ResponseInterface::CODE_CONTENT_DIFFERENT);
        $this->assertEquals(226, ResponseInterface::CODE_IM_USED);

        $this->assertEquals(300, ResponseInterface::CODE_MULTIPLE_CHOICES);
        $this->assertEquals(301, ResponseInterface::CODE_MOVED_PERMANENTLY);
        $this->assertEquals(302, ResponseInterface::CODE_MOVED_TEMPORARILY);
        $this->assertEquals(303, ResponseInterface::CODE_SEE_OTHER);
        $this->assertEquals(304, ResponseInterface::CODE_NOT_MODIFIED);
        $this->assertEquals(305, ResponseInterface::CODE_USE_PROXY);
        $this->assertEquals(306, ResponseInterface::CODE_SWITCH_PROXY);
        $this->assertEquals(307, ResponseInterface::CODE_TEMPORARY_REDIRECT);
        $this->assertEquals(308, ResponseInterface::CODE_PERMANENT_REDIRECT);
        $this->assertEquals(310, ResponseInterface::CODE_TOO_MANY_REDIRECTS);

        $this->assertEquals(400, ResponseInterface::CODE_BAD_REQUEST);
        $this->assertEquals(401, ResponseInterface::CODE_UNAUTHORIZED);
        $this->assertEquals(402, ResponseInterface::CODE_PAYMENT_REQUIRED);
        $this->assertEquals(403, ResponseInterface::CODE_FORBIDDEN);
        $this->assertEquals(404, ResponseInterface::CODE_NOT_FOUND);
        $this->assertEquals(405, ResponseInterface::CODE_METHOD_NOT_ALLOWED);
        $this->assertEquals(406, ResponseInterface::CODE_NOT_ACCEPTABLE);
        $this->assertEquals(407, ResponseInterface::CODE_PROXY_AUTHENTICATION_REQUIRED);
        $this->assertEquals(408, ResponseInterface::CODE_REQUEST_TIME_OUT);
        $this->assertEquals(409, ResponseInterface::CODE_CONFLICT);
        $this->assertEquals(410, ResponseInterface::CODE_GONE);
        $this->assertEquals(411, ResponseInterface::CODE_LENGTH_REQUIRED);
        $this->assertEquals(412, ResponseInterface::CODE_PRECONDITION_FAILED);
        $this->assertEquals(413, ResponseInterface::CODE_REQUEST_ENTITY_TOO_LARGE);
        $this->assertEquals(414, ResponseInterface::CODE_REQUEST_URI_TOO_LONG);
        $this->assertEquals(415, ResponseInterface::CODE_UNSUPPORTED_MEDIA_TYPE);
        $this->assertEquals(416, ResponseInterface::CODE_REQUESTED_RANGE_UNSATISFIABLE);
        $this->assertEquals(417, ResponseInterface::CODE_EXPECTATION_FAILED);
        $this->assertEquals(418, ResponseInterface::CODE_IM_A_TEAPOT);
        $this->assertEquals(421, ResponseInterface::CODE_BAD_MAPPING_MISDIRECTED_REQUEST);
        $this->assertEquals(422, ResponseInterface::CODE_UNPROCESSABLE_ENTITY);
        $this->assertEquals(423, ResponseInterface::CODE_LOCKED);
        $this->assertEquals(424, ResponseInterface::CODE_METHOD_FAILURE);
        $this->assertEquals(425, ResponseInterface::CODE_UNORDERED_COLLECTION);
        $this->assertEquals(426, ResponseInterface::CODE_UPGRADE_REQUIRED);
        $this->assertEquals(428, ResponseInterface::CODE_PRECONDITION_REQUIRED);
        $this->assertEquals(429, ResponseInterface::CODE_TOO_MANY_REQUESTS);
        $this->assertEquals(431, ResponseInterface::CODE_REQUEST_HEADER_FIELDS_TOO_LARGE);
        $this->assertEquals(444, ResponseInterface::CODE_NO_RESPONSE);
        $this->assertEquals(449, ResponseInterface::CODE_RETRY_WITH);
        $this->assertEquals(450, ResponseInterface::CODE_BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS);
        $this->assertEquals(451, ResponseInterface::CODE_UNAVAILABLE_FOR_LEGAL_REASONS);
        $this->assertEquals(456, ResponseInterface::CODE_UNRECOVERABLE_ERROR);
        $this->assertEquals(495, ResponseInterface::CODE_SSL_CERTIFICATE_ERROR);
        $this->assertEquals(496, ResponseInterface::CODE_SSL_CERTIFICATE_REQUIRED);
        $this->assertEquals(497, ResponseInterface::CODE_HTTP_REQUEST_SENT_TO_HTTPS_PORT);
        $this->assertEquals(499, ResponseInterface::CODE_CLIENT_CLOSED_REQUEST);

        $this->assertEquals(500, ResponseInterface::CODE_INTERNAL_SERVER_ERROR);
        $this->assertEquals(501, ResponseInterface::CODE_NOT_IMPLEMENTED);
        $this->assertEquals(502, ResponseInterface::CODE_BAD_GATEWAY_OU_PROXY_ERROR);
        $this->assertEquals(503, ResponseInterface::CODE_SERVICE_UNAVAILABLE);
        $this->assertEquals(504, ResponseInterface::CODE_GATEWAY_TIME_OUT);
        $this->assertEquals(505, ResponseInterface::CODE_HTTP_VERSION_NOT_SUPPORTED);
        $this->assertEquals(506, ResponseInterface::CODE_VARIANT_ALSO_NEGOTIATES);
        $this->assertEquals(507, ResponseInterface::CODE_INSUFFICIENT_STORAGE);
        $this->assertEquals(508, ResponseInterface::CODE_LOOP_DETECTED);
        $this->assertEquals(509, ResponseInterface::CODE_BANDWIDTH_LIMIT_EXCEEDED);
        $this->assertEquals(510, ResponseInterface::CODE_NOT_EXTENDED);
        $this->assertEquals(511, ResponseInterface::CODE_NETWORK_AUTHENTICATION_REQUIRED);
        $this->assertEquals(520, ResponseInterface::CODE_UNKNOWN_ERROR);
        $this->assertEquals(521, ResponseInterface::CODE_WEB_SERVER_IS_DOWN);
        $this->assertEquals(522, ResponseInterface::CODE_CONNECTION_TIMED_OUT);
        $this->assertEquals(523, ResponseInterface::CODE_ORIGIN_IS_UNREACHABLE);
        $this->assertEquals(524, ResponseInterface::CODE_A_TIMEOUT_OCCURRED);
        $this->assertEquals(525, ResponseInterface::CODE_SSL_HANDSHAKE_FAILED);
        $this->assertEquals(526, ResponseInterface::CODE_INVALID_SSL_CERTIFICATE);
        $this->assertEquals(527, ResponseInterface::CODE_RAILGUN_ERROR);
    }
}
