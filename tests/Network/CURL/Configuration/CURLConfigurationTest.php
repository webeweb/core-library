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
use WBW\Library\Core\Exception\Argument\StringArgumentException;
use WBW\Library\Core\Network\CURL\Configuration\CURLConfiguration;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * cURL configuration test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Network\CURL\Configuration
 */
class CURLConfigurationTest extends AbstractTestCase {

    /**
     * Tests the addHeader() method.
     *
     * @return void
     */
    public function testAddHeaderWithStringArgumentException() {

        $obj = new CURLConfiguration();

        try {

            $obj->addHeader(1, "value");
        } catch (Exception $ex) {

            $this->assertInstanceOf(StringArgumentException::class, $ex);
            $this->assertEquals("The argument \"1\" is not a string", $ex->getMessage());
        }
    }

    /**
     * Tests the clearHeader() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testClearHeaders() {

        $obj = new CURLConfiguration();

        $this->assertSame($obj, $obj->addHeader("name", "value"));
        $this->assertCount(1, $obj->getHeaders());

        $this->assertSame($obj, $obj->clearHeaders());
        $this->assertCount(0, $obj->getHeaders());
    }

    /**
     * Tests the __constructor() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CURLConfiguration();

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

    /**
     * Tests the removeHeader() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRemoveHeader() {

        $obj = new CURLConfiguration();
        $obj->addHeader("name", "value");

        // ===
        $obj->removeHeader("");
        $res1 = ["name" => "value"];
        $this->assertEquals($res1, $obj->getHeaders());

        // ===
        $obj->removeHeader("name");
        $res2 = [];
        $this->assertEquals($res2, $obj->getHeaders());
    }

    /**
     * Tests the setAllowEncoding() method.
     *
     * @return void
     */
    public function testSetAllowEncoding() {

        $obj = new CURLConfiguration();

        $obj->setAllowEncoding(true);
        $this->assertTrue($obj->getAllowEncoding());
    }

    /**
     * Tests the setConnectTimeout() method.
     *
     * @return void
     */
    public function testSetConnectTimeout() {

        $obj = new CURLConfiguration();

        $obj->setConnectTimeout(1);
        $this->assertEquals(1, $obj->getConnectTimeout());
    }

    /**
     * Tests the setDebug() method.
     *
     * @return void
     */
    public function testSetDebug() {

        $obj = new CURLConfiguration();

        $obj->setDebug(true);
        $this->assertTrue($obj->getDebug());
    }

    /**
     * Tests the setDebugFile() method.
     *
     * @return void
     */
    public function testSetDebugFile() {

        $obj = new CURLConfiguration();

        $obj->setDebugFile("./debugfile.log");
        $this->assertEquals("./debugfile.log", $obj->getDebugFile());
    }

    /**
     * Tests the setHost() method.
     *
     * @return void
     */
    public function testSetHost() {

        $obj = new CURLConfiguration();

        $obj->setHost("host");
        $this->assertEquals("host", $obj->getHost());
    }

    /**
     * Tests the setHttpPassword() method.
     *
     * @return void
     */
    public function testSetHttpPassword() {

        $obj = new CURLConfiguration();

        $obj->setHttpPassword("httpPassword");
        $this->assertEquals("httpPassword", $obj->getHttpPassword());
    }

    /**
     * Tests the setHttpUsername() method.
     *
     * @return void
     */
    public function testSetHttpUsername() {

        $obj = new CURLConfiguration();

        $obj->setHttpUsername("httpUsername");
        $this->assertEquals("httpUsername", $obj->getHttpUsername());
    }

    /**
     * Tests the setProxyHost() method.
     *
     * @return void
     */
    public function testSetProxyHost() {

        $obj = new CURLConfiguration();

        $obj->setProxyHost("proxyHost");
        $this->assertEquals("proxyHost", $obj->getProxyHost());
    }

    /**
     * Tests the setProxyPassword() method.
     *
     * @return void
     */
    public function testSetProxyPassword() {

        $obj = new CURLConfiguration();

        $obj->setProxyPassword("proxyPassword");
        $this->assertEquals("proxyPassword", $obj->getProxyPassword());
    }

    /**
     * Tests the setProxyPort() method.
     *
     * @return void
     */
    public function testSetProxyPort() {

        $obj = new CURLConfiguration();

        $obj->setProxyPort("proxyPort");
        $this->assertEquals("proxyPort", $obj->getProxyPort());
    }

    /**
     * Tests the setProxyType() method.
     *
     * @return void
     */
    public function testSetProxyType() {

        $obj = new CURLConfiguration();

        $obj->setProxyType(1);
        $this->assertEquals(1, $obj->getProxyType());
    }

    /**
     * Tests the setProxyUsername() method.
     *
     * @return void
     */
    public function testSetProxyUsername() {

        $obj = new CURLConfiguration();

        $obj->setProxyUsername("proxyUsername");
        $this->assertEquals("proxyUsername", $obj->getProxyUsername());
    }

    /**
     * Tests the setRequestTimeout() method.
     *
     * @return void
     */
    public function testSetRequestTimeout() {

        $obj = new CURLConfiguration();

        $obj->setRequestTimeout(1);
        $this->assertEquals(1, $obj->getRequestTimeout());
    }

    /**
     * Tests the setSslVerification() method.
     *
     * @return void
     */
    public function testSetSslVerification() {

        $obj = new CURLConfiguration();

        $obj->setSslVerification(false);
        $this->assertFalse($obj->getSslVerification());
    }

    /**
     * Tests the setUserAgent() method.
     *
     * @return void
     */
    public function testSetUserAgent() {

        $obj = new CURLConfiguration();

        $obj->setUserAgent("userAgent");
        $this->assertEquals("userAgent", $obj->getUserAgent());
    }

    /**
     * Tests the setVerbose() method.
     *
     * @return void
     */
    public function testSetVerbose() {

        $obj = new CURLConfiguration();

        $obj->setVerbose(true);
        $this->assertTrue($obj->getVerbose());
    }
}
