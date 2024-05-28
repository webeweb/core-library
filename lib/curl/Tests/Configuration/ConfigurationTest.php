<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Curl\Tests\Configuration;

use Throwable;
use WBW\Library\Curl\Configuration\Configuration;
use WBW\Library\Curl\Tests\AbstractTestCase;

/**
 * Configuration test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Tests\Configuration
 */
class ConfigurationTest extends AbstractTestCase {

    /**
     * Test clearHeader()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testClearHeaders(): void {

        $obj = new Configuration();

        $this->assertSame($obj, $obj->addHeader("name", "value"));
        $this->assertCount(1, $obj->getHeaders());

        $this->assertSame($obj, $obj->clearHeaders());
        $this->assertCount(0, $obj->getHeaders());
    }

    /**
     * Test removeHeader()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testRemoveHeader(): void {

        $obj = new Configuration();
        $obj->addHeader("name", "value");

        $obj->removeHeader("");
        $this->assertEquals(["name" => "value"], $obj->getHeaders());

        $obj->removeHeader("name");
        $this->assertEquals([], $obj->getHeaders());
    }

    /**
     * Test setAllowEncoding()
     *
     * @return void
     */
    public function testSetAllowEncoding(): void {

        $obj = new Configuration();

        $obj->setAllowEncoding(true);
        $this->assertTrue($obj->getAllowEncoding());
    }

    /**
     * Test setConnectTimeout()
     *
     * @return void
     */
    public function testSetConnectTimeout(): void {

        $obj = new Configuration();

        $obj->setConnectTimeout(1);
        $this->assertEquals(1, $obj->getConnectTimeout());
    }

    /**
     * Test setDebugFile()
     *
     * @return void
     */
    public function testSetDebugFile(): void {

        $obj = new Configuration();

        $obj->setDebugFile("./debugfile.log");
        $this->assertEquals("./debugfile.log", $obj->getDebugFile());
    }

    /**
     * Test setHost()
     *
     * @return void
     */
    public function testSetHost(): void {

        $obj = new Configuration();

        $obj->setHost("host");
        $this->assertEquals("host", $obj->getHost());
    }

    /**
     * Test setHttpPassword()
     *
     * @return void
     */
    public function testSetHttpPassword(): void {

        $obj = new Configuration();

        $obj->setHttpPassword("httpPassword");
        $this->assertEquals("httpPassword", $obj->getHttpPassword());
    }

    /**
     * Test setHttpUsername()
     *
     * @return void
     */
    public function testSetHttpUsername(): void {

        $obj = new Configuration();

        $obj->setHttpUsername("httpUsername");
        $this->assertEquals("httpUsername", $obj->getHttpUsername());
    }

    /**
     * Test setProxyHost()
     *
     * @return void
     */
    public function testSetProxyHost(): void {

        $obj = new Configuration();

        $obj->setProxyHost("proxyHost");
        $this->assertEquals("proxyHost", $obj->getProxyHost());
    }

    /**
     * Test setProxyPassword()
     *
     * @return void
     */
    public function testSetProxyPassword(): void {

        $obj = new Configuration();

        $obj->setProxyPassword("proxyPassword");
        $this->assertEquals("proxyPassword", $obj->getProxyPassword());
    }

    /**
     * Test setProxyPort()
     *
     * @return void
     */
    public function testSetProxyPort(): void {

        $obj = new Configuration();

        $obj->setProxyPort(8080);
        $this->assertEquals(8080, $obj->getProxyPort());
    }

    /**
     * Test setProxyType()
     *
     * @return void
     */
    public function testSetProxyType(): void {

        $obj = new Configuration();

        $obj->setProxyType(1);
        $this->assertEquals(1, $obj->getProxyType());
    }

    /**
     * Test setProxyUsername()
     *
     * @return void
     */
    public function testSetProxyUsername(): void {

        $obj = new Configuration();

        $obj->setProxyUsername("proxyUsername");
        $this->assertEquals("proxyUsername", $obj->getProxyUsername());
    }

    /**
     * Test setRequestTimeout()
     *
     * @return void
     */
    public function testSetRequestTimeout(): void {

        $obj = new Configuration();

        $obj->setRequestTimeout(1);
        $this->assertEquals(1, $obj->getRequestTimeout());
    }

    /**
     * Test setSslVerification()
     *
     * @return void
     */
    public function testSetSslVerification(): void {

        $obj = new Configuration();

        $obj->setSslVerification(false);
        $this->assertFalse($obj->getSslVerification());
    }

    /**
     * Test setUserAgent()
     *
     * @return void
     */
    public function testSetUserAgent(): void {

        $obj = new Configuration();

        $obj->setUserAgent("userAgent");
        $this->assertEquals("userAgent", $obj->getUserAgent());
    }

    /**
     * Test __constructor()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Configuration();

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
