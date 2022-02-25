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

use WBW\Library\Curl\Api\RequestInterface;
use WBW\Library\Curl\Api\ResponseInterface;
use WBW\Library\Curl\Configuration\Configuration;
use WBW\Library\Curl\Helper\CurlHelper;
use WBW\Library\Curl\Tests\AbstractTestCase;

/**
 * cURL helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Tests\Helper
 */
class CurlHelperTest extends AbstractTestCase {

    /**
     * Tests enumCodes()
     *
     * @return void
     */
    public function testEnumCodes(): void {

        $res = CurlHelper::enumCodes();
        $this->assertCount(57, $res);

        $this->assertContains(ResponseInterface::CODE_CONTINUE, $res);
        $this->assertContains(ResponseInterface::CODE_SWITCHING_PROTOCOLS, $res);
        $this->assertContains(ResponseInterface::CODE_PROCESSING, $res);
        $this->assertContains(ResponseInterface::CODE_OK, $res);
        $this->assertContains(ResponseInterface::CODE_CREATED, $res);
        $this->assertContains(ResponseInterface::CODE_ACCEPTED, $res);
        $this->assertContains(ResponseInterface::CODE_NON_AUTHORITATIVE_INFORMATION, $res);
        $this->assertContains(ResponseInterface::CODE_NO_CONTENT, $res);
        $this->assertContains(ResponseInterface::CODE_RESET_CONTENT, $res);
        $this->assertContains(ResponseInterface::CODE_PARTIAL_CONTENT, $res);
        $this->assertContains(ResponseInterface::CODE_MULTI_STATUS, $res);
        $this->assertContains(ResponseInterface::CODE_ALREADY_REPORTED, $res);
        $this->assertContains(ResponseInterface::CODE_IM_USED, $res);
        $this->assertContains(ResponseInterface::CODE_MULTIPLE_CHOICES, $res);
        $this->assertContains(ResponseInterface::CODE_MOVED_PERMANENTLY, $res);
        $this->assertContains(ResponseInterface::CODE_MOVED_TEMPORARILY, $res);
        $this->assertContains(ResponseInterface::CODE_SEE_OTHER, $res);
        $this->assertContains(ResponseInterface::CODE_NOT_MODIFIED, $res);
        $this->assertContains(ResponseInterface::CODE_USE_PROXY, $res);
        $this->assertContains(ResponseInterface::CODE_TEMPORARY_REDIRECT, $res);
        $this->assertContains(ResponseInterface::CODE_PERMANENT_REDIRECT, $res);
        $this->assertContains(ResponseInterface::CODE_BAD_REQUEST, $res);
        $this->assertContains(ResponseInterface::CODE_UNAUTHORIZED, $res);
        $this->assertContains(ResponseInterface::CODE_PAYMENT_REQUIRED, $res);
        $this->assertContains(ResponseInterface::CODE_FORBIDDEN, $res);
        $this->assertContains(ResponseInterface::CODE_NOT_FOUND, $res);
        $this->assertContains(ResponseInterface::CODE_METHOD_NOT_ALLOWED, $res);
        $this->assertContains(ResponseInterface::CODE_NOT_ACCEPTABLE, $res);
        $this->assertContains(ResponseInterface::CODE_PROXY_AUTHENTICATION_REQUIRED, $res);
        $this->assertContains(ResponseInterface::CODE_REQUEST_TIME_OUT, $res);
        $this->assertContains(ResponseInterface::CODE_CONFLICT, $res);
        $this->assertContains(ResponseInterface::CODE_GONE, $res);
        $this->assertContains(ResponseInterface::CODE_LENGTH_REQUIRED, $res);
        $this->assertContains(ResponseInterface::CODE_PRECONDITION_FAILED, $res);
        $this->assertContains(ResponseInterface::CODE_REQUEST_ENTITY_TOO_LARGE, $res);
        $this->assertContains(ResponseInterface::CODE_REQUEST_URI_TOO_LONG, $res);
        $this->assertContains(ResponseInterface::CODE_UNSUPPORTED_MEDIA_TYPE, $res);
        $this->assertContains(ResponseInterface::CODE_REQUESTED_RANGE_UNSATISFIABLE, $res);
        $this->assertContains(ResponseInterface::CODE_EXPECTATION_FAILED, $res);
        $this->assertContains(ResponseInterface::CODE_UNPROCESSABLE_ENTITY, $res);
        $this->assertContains(ResponseInterface::CODE_LOCKED, $res);
        $this->assertContains(ResponseInterface::CODE_METHOD_FAILURE, $res);
        $this->assertContains(ResponseInterface::CODE_UPGRADE_REQUIRED, $res);
        $this->assertContains(ResponseInterface::CODE_PRECONDITION_REQUIRED, $res);
        $this->assertContains(ResponseInterface::CODE_TOO_MANY_REQUESTS, $res);
        $this->assertContains(ResponseInterface::CODE_REQUEST_HEADER_FIELDS_TOO_LARGE, $res);
        $this->assertContains(ResponseInterface::CODE_INTERNAL_SERVER_ERROR, $res);
        $this->assertContains(ResponseInterface::CODE_NOT_IMPLEMENTED, $res);
        $this->assertContains(ResponseInterface::CODE_BAD_GATEWAY_OU_PROXY_ERROR, $res);
        $this->assertContains(ResponseInterface::CODE_SERVICE_UNAVAILABLE, $res);
        $this->assertContains(ResponseInterface::CODE_GATEWAY_TIME_OUT, $res);
        $this->assertContains(ResponseInterface::CODE_HTTP_VERSION_NOT_SUPPORTED, $res);
        $this->assertContains(ResponseInterface::CODE_VARIANT_ALSO_NEGOTIATES, $res);
        $this->assertContains(ResponseInterface::CODE_INSUFFICIENT_STORAGE, $res);
        $this->assertContains(ResponseInterface::CODE_LOOP_DETECTED, $res);
        $this->assertContains(ResponseInterface::CODE_NOT_EXTENDED, $res);
        $this->assertContains(ResponseInterface::CODE_NETWORK_AUTHENTICATION_REQUIRED, $res);
    }

    /**
     * Tests enumMethods()
     *
     * @return void
     */
    public function testEnumMethods(): void {

        $res = CurlHelper::enumMethods();
        $this->assertCount(7, $res);

        $this->assertContains(RequestInterface::METHOD_DELETE, $res);
        $this->assertContains(RequestInterface::METHOD_GET, $res);
        $this->assertContains(RequestInterface::METHOD_HEAD, $res);
        $this->assertContains(RequestInterface::METHOD_OPTIONS, $res);
        $this->assertContains(RequestInterface::METHOD_PATCH, $res);
        $this->assertContains(RequestInterface::METHOD_POST, $res);
        $this->assertContains(RequestInterface::METHOD_PUT, $res);
    }

    /**
     * Tests setProxy()
     *
     * @retutn void
     */
    public function testSetProxy(): void {

        // Set a Configuration mock.
        $config = new Configuration();
        $config->setProxyHost("https://github.com");
        $config->setProxyPort(443);
        $config->setProxyType(0);
        $config->setProxyUsername("username");

        $stream = CurlHelper::initStream("https://github.com", $config);

        $this->assertNull(CurlHelper::setProxy($stream, $config));
    }
}
