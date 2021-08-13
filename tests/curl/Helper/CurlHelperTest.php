<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Tests\Helper;

use WBW\Library\Curl\API\CurlRequestInterface;
use WBW\Library\Curl\API\CurlResponseInterface;
use WBW\Library\Curl\Helper\CurlHelper;
use WBW\Library\Curl\Tests\AbstractTestCase;

/**
 * cURL helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Curl\Tests\Helper
 */
class CurlHelperTest extends AbstractTestCase {

    /**
     * Tests the enumCurlRequests() method.
     *
     * @return void
     */
    public function testGetHttpMethods(): void {

        $res = CurlHelper::enumCurlRequests();
        $this->assertCount(7, $res);

        $this->assertContains(CurlRequestInterface::CURL_REQUEST_DELETE, $res);
        $this->assertContains(CurlRequestInterface::CURL_REQUEST_GET, $res);
        $this->assertContains(CurlRequestInterface::CURL_REQUEST_HEAD, $res);
        $this->assertContains(CurlRequestInterface::CURL_REQUEST_OPTIONS, $res);
        $this->assertContains(CurlRequestInterface::CURL_REQUEST_PATCH, $res);
        $this->assertContains(CurlRequestInterface::CURL_REQUEST_POST, $res);
        $this->assertContains(CurlRequestInterface::CURL_REQUEST_PUT, $res);
    }

    /**
     * Tests the enumCurlResponses() method.
     *
     * @return void
     */
    public function testGetHttpStatus(): void {

        $res = CurlHelper::enumCurlResponses();
        $this->assertCount(57, $res);

        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_CONTINUE, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_SWITCHING_PROTOCOLS, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_PROCESSING, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_OK, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_CREATED, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_ACCEPTED, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_NON_AUTHORITATIVE_INFORMATION, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_NO_CONTENT, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_RESET_CONTENT, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_PARTIAL_CONTENT, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_MULTI_STATUS, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_ALREADY_REPORTED, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_IM_USED, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_MULTIPLE_CHOICES, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_MOVED_PERMANENTLY, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_MOVED_TEMPORARILY, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_SEE_OTHER, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_NOT_MODIFIED, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_USE_PROXY, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_TEMPORARY_REDIRECT, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_PERMANENT_REDIRECT, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_BAD_REQUEST, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_UNAUTHORIZED, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_PAYMENT_REQUIRED, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_FORBIDDEN, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_NOT_FOUND, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_METHOD_NOT_ALLOWED, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_NOT_ACCEPTABLE, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_PROXY_AUTHENTICATION_REQUIRED, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_REQUEST_TIME_OUT, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_CONFLICT, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_GONE, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_LENGTH_REQUIRED, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_PRECONDITION_FAILED, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_REQUEST_ENTITY_TOO_LARGE, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_REQUEST_URI_TOO_LONG, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_UNSUPPORTED_MEDIA_TYPE, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_REQUESTED_RANGE_UNSATISFIABLE, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_EXPECTATION_FAILED, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_UNPROCESSABLE_ENTITY, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_LOCKED, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_METHOD_FAILURE, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_UPGRADE_REQUIRED, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_PRECONDITION_REQUIRED, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_TOO_MANY_REQUESTS, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_REQUEST_HEADER_FIELDS_TOO_LARGE, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_INTERNAL_SERVER_ERROR, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_NOT_IMPLEMENTED, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_BAD_GATEWAY_OU_PROXY_ERROR, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_SERVICE_UNAVAILABLE, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_GATEWAY_TIME_OUT, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_HTTP_VERSION_NOT_SUPPORTED, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_VARIANT_ALSO_NEGOTIATES, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_INSUFFICIENT_STORAGE, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_LOOP_DETECTED, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_NOT_EXTENDED, $res);
        $this->assertContains(CurlResponseInterface::CURL_RESPONSE_NETWORK_AUTHENTICATION_REQUIRED, $res);
    }
}