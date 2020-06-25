<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Network\CURL\Configuration;

use Exception;
use WBW\Library\Core\Argument\Exception\StringArgumentException;
use WBW\Library\Core\Network\CURL\Configuration\CurlConfiguration;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * cURL configuration test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Network\CURL\Configuration
 */
class CurlConfigurationTest extends AbstractTestCase {

    /**
     * Tests the addHeader() method.
     *
     * @return void
     */
    public function testAddHeaderWithStringArgumentException() {

        $obj = new CurlConfiguration();

        try {

            $obj->addHeader(1, "value");
        } catch (Exception $ex) {

            $this->assertInstanceOf(StringArgumentException::class, $ex);
            $this->assertEquals('The argument "1" is not a string', $ex->getMessage());
        }
    }

    /**
     * Tests the clearHeader() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testClearHeaders() {

        $obj = new CurlConfiguration();

        $this->assertSame($obj, $obj->addHeader("name", "value"));
        $this->assertCount(1, $obj->getHeaders());

        $this->assertSame($obj, $obj->clearHeaders());
        $this->assertCount(0, $obj->getHeaders());
    }

    /**
     * Tests the removeHeader() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRemoveHeader() {

        $obj = new CurlConfiguration();
        $obj->addHeader("name", "value");

        $obj->removeHeader("");
        $this->assertEquals(["name" => "value"], $obj->getHeaders());

        $obj->removeHeader("name");
        $this->assertEquals([], $obj->getHeaders());
    }

    /**
     * Tests the setAllowEncoding() method.
     *
     * @return void
     */
    public function testSetAllowEncoding() {

        $obj = new CurlConfiguration();

        $obj->setAllowEncoding(true);
        $this->assertTrue($obj->getAllowEncoding());
    }

    /**
     * Tests the setConnectTimeout() method.
     *
     * @return void
     */
    public function testSetConnectTimeout() {

        $obj = new CurlConfiguration();

        $obj->setConnectTimeout(1);
        $this->assertEquals(1, $obj->getConnectTimeout());
    }

    /**
     * Tests the setDebug() method.
     *
     * @return void
     */
    public function testSetDebug() {

        $obj = new CurlConfiguration();

        $obj->setDebug(true);
        $this->assertTrue($obj->getDebug());
    }

    /**
     * Tests the setDebugFile() method.
     *
     * @return void
     */
    public function testSetDebugFile() {

        $obj = new CurlConfiguration();

        $obj->setDebugFile("./debugfile.log");
        $this->assertEquals("./debugfile.log", $obj->getDebugFile());
    }

    /**
     * Tests the setHost() method.
     *
     * @return void
     */
    public function testSetHost() {

        $obj = new CurlConfiguration();

        $obj->setHost("host");
        $this->assertEquals("host", $obj->getHost());
    }

    /**
     * Tests the setHttpPassword() method.
     *
     * @return void
     */
    public function testSetHttpPassword() {

        $obj = new CurlConfiguration();

        $obj->setHttpPassword("httpPassword");
        $this->assertEquals("httpPassword", $obj->getHttpPassword());
    }

    /**
     * Tests the setHttpUsername() method.
     *
     * @return void
     */
    public function testSetHttpUsername() {

        $obj = new CurlConfiguration();

        $obj->setHttpUsername("httpUsername");
        $this->assertEquals("httpUsername", $obj->getHttpUsername());
    }

    /**
     * Tests the setProxyHost() method.
     *
     * @return void
     */
    public function testSetProxyHost() {

        $obj = new CurlConfiguration();

        $obj->setProxyHost("proxyHost");
        $this->assertEquals("proxyHost", $obj->getProxyHost());
    }

    /**
     * Tests the setProxyPassword() method.
     *
     * @return void
     */
    public function testSetProxyPassword() {

        $obj = new CurlConfiguration();

        $obj->setProxyPassword("proxyPassword");
        $this->assertEquals("proxyPassword", $obj->getProxyPassword());
    }

    /**
     * Tests the setProxyPort() method.
     *
     * @return void
     */
    public function testSetProxyPort() {

        $obj = new CurlConfiguration();

        $obj->setProxyPort("proxyPort");
        $this->assertEquals("proxyPort", $obj->getProxyPort());
    }

    /**
     * Tests the setProxyType() method.
     *
     * @return void
     */
    public function testSetProxyType() {

        $obj = new CurlConfiguration();

        $obj->setProxyType(1);
        $this->assertEquals(1, $obj->getProxyType());
    }

    /**
     * Tests the setProxyUsername() method.
     *
     * @return void
     */
    public function testSetProxyUsername() {

        $obj = new CurlConfiguration();

        $obj->setProxyUsername("proxyUsername");
        $this->assertEquals("proxyUsername", $obj->getProxyUsername());
    }

    /**
     * Tests the setRequestTimeout() method.
     *
     * @return void
     */
    public function testSetRequestTimeout() {

        $obj = new CurlConfiguration();

        $obj->setRequestTimeout(1);
        $this->assertEquals(1, $obj->getRequestTimeout());
    }

    /**
     * Tests the setSslVerification() method.
     *
     * @return void
     */
    public function testSetSslVerification() {

        $obj = new CurlConfiguration();

        $obj->setSslVerification(false);
        $this->assertFalse($obj->getSslVerification());
    }

    /**
     * Tests the setUserAgent() method.
     *
     * @return void
     */
    public function testSetUserAgent() {

        $obj = new CurlConfiguration();

        $obj->setUserAgent("userAgent");
        $this->assertEquals("userAgent", $obj->getUserAgent());
    }

    /**
     * Tests the setVerbose() method.
     *
     * @return void
     */
    public function testSetVerbose() {

        $obj = new CurlConfiguration();

        $obj->setVerbose(true);
        $this->assertTrue($obj->getVerbose());
    }

    /**
     * Tests the __constructor() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new CurlConfiguration();

        $this->assertFalse($obj->getAllowEncoding());
        $this->assertEquals(0, $obj->getConnectTimeout());
        $this->assertFalse($obj->getDebug());
        $this->assertEquals("php://output", $obj->getDebugFile());
        $this->assertEquals([], $obj->getHeaders());
        $this->assertNull($obj->getHost());
        $this->assertNull($obj->getHttpPassword());
        $this->assertNull($obj->getHttpUsername());
        $this->assertNull($obj->getProxyHost());
        $this->assertNull($obj->getProxyPassword());
        $this->assertNull($obj->getProxyPort());
        $this->assertNull($obj->getProxyType());
        $this->assertNull($obj->getProxyUsername());
        $this->assertEquals(0, $obj->getRequestTimeout());
        $this->assertTrue($obj->getSslVerification());
        $this->assertEquals("webeweb/curl-library", $obj->getUserAgent());
        $this->assertFalse($obj->getVerbose());
    }
}
