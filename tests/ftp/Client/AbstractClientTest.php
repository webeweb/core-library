<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Ftp\Tests\Client;

use WBW\Library\Ftp\Exception\FtpException;
use WBW\Library\Ftp\Tests\AbstractTestCase;
use WBW\Library\Ftp\Tests\Fixtures\Client\TestClient;

/**
 * Abstract client test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ftp\Tests\Client
 */
class AbstractClientTest extends AbstractTestCase {

    /**
     * Tests newFtpException()
     *
     * @return void
     */
    public function testNewFtpException(): void {

        $msg = implode("", [
            "://",
            $this->authenticator->getPasswordAuthentication()->getUsername(),
            ":",
            $this->authenticator->getPasswordAuthentication()->getPassword(),
            "@",
            $this->authenticator->getHostname(),
            ":0 ",
        ]);

        $obj = new TestClient($this->authenticator);

        $ex = $obj->newFtpException("exception");
        $this->assertInstanceOf(FtpException::class, $ex);

        $this->assertEquals("{$msg}exception", $ex->getMessage());
        $this->assertEquals(500, $ex->getCode());
        $this->assertNull($ex->getPrevious());
    }

    /**
     * Tests setConnection()
     *
     * @return void
     */
    public function testSetConnection(): void {

        $obj = new TestClient($this->authenticator);

        $obj->setConnection("connection");
        $this->assertEquals("connection", $obj->getConnection());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestClient($this->authenticator);

        $this->assertSame($this->authenticator, $obj->getAuthenticator());
        $this->assertNull($obj->getConnection());
    }
}
