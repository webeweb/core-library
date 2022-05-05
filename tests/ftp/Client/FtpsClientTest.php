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

use Exception;
use WBW\Library\Ftp\Client\FtpsClient;
use WBW\Library\Ftp\Exception\FtpException;
use WBW\Library\Ftp\Tests\AbstractTestCase;

/**
 * FTPs client test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ftp\Tests\Client
 */
class FtpsClientTest extends AbstractTestCase {

    /**
     * Message.
     *
     * @var string
     */
    private $message;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set the Authenticator mock.
        $this->authenticator->setPort(21);

        // Set a message mock.
        $this->message = "ftp://demo:password@test.rebex.net:21 ";
    }

    /**
     * Tests connect()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testConnect(): void {

        $obj = new FtpsClient($this->authenticator);

        $this->assertSame($obj, $obj->connect());

        $obj->close();
    }

    /**
     * Tests connect()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testConnectWithFtpException(): void {

        $obj = new FtpsClient($this->authenticator);
        $obj->getAuthenticator()->setPort(80);

        try {

            $obj->connect(3);
        } catch (Exception $ex) {

            $msg = implode("", [
                str_replace(":21", ":80", $this->message),
                "ftp_ssl_connect failed: [",
                $this->authenticator->getHostname(),
                ", 80, 3]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        // Set the Authenticator mock.
        $this->authenticator->setPort(null);

        $obj = new FtpsClient($this->authenticator);

        $this->assertSame($this->authenticator, $obj->getAuthenticator());
        $this->assertNull($obj->getConnection());

        $this->assertEquals(990, $obj->getAuthenticator()->getPort());
    }
}
