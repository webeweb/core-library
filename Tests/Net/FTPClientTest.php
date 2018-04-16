<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Net;

use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\IO\IOException;
use WBW\Library\Core\Net\FTPClient;
use WBW\Library\Core\Security\Authenticator;
use WBW\Library\Core\Security\PasswordAuthentication;

/**
 * FTP client test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Net
 * @final
 */
final class FTPClientTest extends PHPUnit_Framework_TestCase {

    /**
     * Authenticator.
     *
     * @var Authenticator
     */
    private $authenticator;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Password authentication.
        $passwordAuthentication = new PasswordAuthentication("anonymous", "guest");

        // Set the Authenticator mock.
        $this->authenticator = new Authenticator("speedtest.tele2.net", $passwordAuthentication);
        $this->authenticator->setPort(21);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new FTPClient($this->authenticator);

        $this->assertEquals($this->authenticator, $obj->getAuthenticator());
    }

    /**
     * Tests the connect() method.
     *
     * @return void
     */
    public function testConnect() {

        $obj = new FTPClient($this->authenticator);

        $this->assertEquals($obj, $obj->connect());

        try {
            $obj->getAuthenticator()->setHost("github.com");
            $obj->connect(2);
        } catch (Exception $ex) {
            $this->assertInstanceOf(IOException::class, $ex);
            $this->assertEquals("ftp://github.com connection failed", $ex->getMessage());
        }
    }

    /**
     * Tests the login() method.
     *
     * @return void
     * @depends testConnect
     */
    public function testLogin() {

        $obj = new FTPClient($this->authenticator);
        $obj->connect();

        $this->assertEquals($obj, $obj->login());
    }

    /**
     * Tests the mkdir() method.
     *
     * @return void
     * @depends testLogin
     */
    public function testMkdir() {

        $obj = new FTPClient($this->authenticator);
        $obj->connect();
        $obj->login();
    }

    /**
     * Tests the close() method.
     *
     * @return void
     * @depends testConnect
     */
    public function testClose() {

        $obj = new FTPClient($this->authenticator);
        $obj->connect();

        $this->assertEquals($obj, $obj->close());
    }

}
