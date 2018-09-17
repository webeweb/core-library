<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Network\FTP;

use Exception;
use WBW\Library\Core\Exception\Network\FTPException;
use WBW\Library\Core\Network\FTP\FTPClient;
use WBW\Library\Core\Security\Authenticator;
use WBW\Library\Core\Security\PasswordAuthentication;
use WBW\Library\Core\Tests\AbstractCoreFrameworkTestCase;

/**
 * FTP client test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Network\FTP
 * @final
 */
final class FTPClientTest extends AbstractCoreFrameworkTestCase {

    /**
     * Test directory.
     *
     * @var string
     */
    const TEST_DIR = "core-library";

    /**
     * Test FTP.
     *
     * @var string
     */
    const TEST_FTP = "ftp://dlpuser@dlptest.com:e73jzTRTNqCN9PYAAjjn@ftp.dlptest.com:21";

    /**
     * Authenticator (read-only).
     *
     * @var Authenticator
     */
    private $authenticatorR;

    /**
     * Authenticator (read-write).
     *
     * @var Authenticator
     */
    private $authenticatorW;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set the Password authentication mocks.
        $passwordAuthenticationR = new PasswordAuthentication("anonymous", "guest");
        $passwordAuthenticationW = new PasswordAuthentication("dlpuser@dlptest.com", "e73jzTRTNqCN9PYAAjjn");

        // Set the Authenticator mocks.
        $this->authenticatorR = new Authenticator("speedtest.tele2.net", $passwordAuthenticationR);
        $this->authenticatorW = new Authenticator("ftp.dlptest.com", $passwordAuthenticationW);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FTPClient($this->authenticatorW);

        $this->assertSame($this->authenticatorW, $obj->getAuthenticator());
    }

    /**
     * Tests the connect() method.
     *
     * @return void
     */
    public function testConnect() {

        $obj = new FTPClient($this->authenticatorR);

        $this->assertSame($obj, $obj->connect());
    }

    /**
     * Tests the connect() method.
     *
     * @return void
     */
    public function testConnectWithFTPException() {

        $obj = new FTPClient($this->authenticatorR);

        try {

            $obj->getAuthenticator()->setHost("github.com");
            $obj->connect(2); // Set a low timeout.
        } catch (Exception $ex) {

            $this->assertInstanceOf(FTPException::class, $ex);
            $this->assertEquals("ftp://anonymous:guest@github.com:21 connection failed", $ex->getMessage());
        }
    }

    /**
     * Tests the login() method.
     *
     * @return void
     * @depends testConnect
     */
    public function testLogin() {

        $obj = new FTPClient($this->authenticatorR);
        $obj->connect();

        $this->assertSame($obj, $obj->login());
    }

    /**
     * Tests the login() method.
     *
     * @return void
     * @depends testConnect
     */
    public function testLoginWithFTPException() {

        $obj = new FTPClient($this->authenticatorR);
        $obj->connect();

        try {

            $obj->getAuthenticator()->getPasswordAuthentication()->setUsername("exception");
            $obj->login();
        } catch (Exception $ex) {

            $this->assertInstanceOf(FTPException::class, $ex);
            $this->assertEquals("ftp://exception:guest@speedtest.tele2.net:21 login failed", $ex->getMessage());
        }
    }

    /**
     * Tests the mkdir() method.
     *
     * @return void
     * @depends testLogin
     */
    public function testMkdir() {

        $obj = new FTPClient($this->authenticatorW);
        $obj->connect();
        $obj->login();

        $this->assertSame($obj, $obj->mkdir(self::TEST_DIR));
    }

    /**
     * Tests the mkdir() method.
     *
     * @return void
     * @depends testMkdir
     */
    public function testMkdirWithFTPException() {

        $obj = new FTPClient($this->authenticatorW);
        $obj->connect();
        $obj->login();

        try {

            $obj->mkdir(self::TEST_DIR);
        } catch (Exception $ex) {

            $this->assertInstanceOf(FTPException::class, $ex);
            $this->assertEquals(self::TEST_FTP . " mkdir " . self::TEST_DIR . " failed", $ex->getMessage());
        }
    }

    /**
     * Tests the put() method.
     *
     * @return void
     * @depends testMkdir
     */
    public function testPut() {

        $local  = getcwd() . "/LICENSE";
        $remote = self::TEST_DIR . "/LICENSE.txt";

        $obj = new FTPClient($this->authenticatorW);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        $this->assertSame($obj, $obj->put($local, $remote));
    }

    /**
     * Tests the rename() method.
     *
     * @return void
     * @depends testPut
     */
    public function testRename() {

        $remote = self::TEST_DIR . "/LICENSE.txt";

        $obj = new FTPClient($this->authenticatorW);
        $obj->connect();
        $obj->login();

        $this->assertSame($obj, $obj->rename($remote, self::TEST_DIR . "/LICENSE.md"));
    }

    /**
     * Tests the rename() method.
     *
     * @return void
     * @depends testRename
     */
    public function testRenameWithFTPException() {

        $remote = self::TEST_DIR . "/LICENSE.txt";

        $obj = new FTPClient($this->authenticatorW);
        $obj->connect();
        $obj->login();

        try {

            $obj->rename($remote, self::TEST_DIR . "/LICENSE.md");
        } catch (Exception $ex) {

            $this->assertInstanceOf(FTPException::class, $ex);
            $this->assertEquals(self::TEST_FTP . " rename " . $remote . " into " . self::TEST_DIR . "/LICENSE.md failed", $ex->getMessage());
        }
    }

    /**
     * Tests the rename() method.
     *
     * @return void
     * @depends testRename
     */
    public function testDelete() {

        $remote = self::TEST_DIR . "/LICENSE.md";

        $obj = new FTPClient($this->authenticatorW);
        $obj->connect();
        $obj->login();

        $this->assertSame($obj, $obj->delete($remote));
    }

    /**
     * Tests the rename() method.
     *
     * @return void
     * @depends testDelete
     */
    public function testDeleteWithException() {

        $remote = self::TEST_DIR . "/LICENSE.md";

        $obj = new FTPClient($this->authenticatorW);
        $obj->connect();
        $obj->login();

        try {

            $this->assertSame($obj, $obj->delete($remote));
        } catch (Exception $ex) {

            $this->assertInstanceOf(FTPException::class, $ex);
            $this->assertEquals(self::TEST_FTP . " delete " . self::TEST_DIR . "/LICENSE.md failed", $ex->getMessage());
        }
    }

    /**
     * Tests the rmdir() method.
     *
     * @return void
     * @depends testDelete
     */
    public function testRmdir() {

        $obj = new FTPClient($this->authenticatorW);
        $obj->connect();
        $obj->login();

        $this->assertSame($obj, $obj->rmdir(self::TEST_DIR));
    }

    /**
     * Tests the rmdir() method.
     *
     * @return void
     * @depends testRmdir
     */
    public function testRmdirWithFTPException() {

        $obj = new FTPClient($this->authenticatorW);
        $obj->connect();
        $obj->login();

        try {

            $this->assertSame($obj, $obj->rmdir(self::TEST_DIR));
        } catch (Exception $ex) {

            $this->assertInstanceOf(FTPException::class, $ex);
            $this->assertEquals(self::TEST_FTP . " rmdir " . self::TEST_DIR . " failed", $ex->getMessage());
        }
    }

    /**
     * Tests the close() method.
     *
     * @return void
     * @depends testConnect
     */
    public function testClose() {

        $obj = new FTPClient($this->authenticatorW);
        $obj->connect();

        // ===
        $this->assertSame($obj, $obj->close());

        // ===
        try {

            $this->assertSame($obj, $obj->close());
        } catch (Exception $ex) {

            $this->assertInstanceOf(FTPException::class, $ex);
            $this->assertEquals(self::TEST_FTP . " close failed", $ex->getMessage());
        }
    }

}
