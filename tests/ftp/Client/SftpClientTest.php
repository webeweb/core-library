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
use WBW\Library\Ftp\Client\SftpClient;
use WBW\Library\Ftp\Exception\FtpException;
use WBW\Library\Ftp\Tests\AbstractTestCase;

/**
 * SFTP client test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ftp\Tests\Client
 */
class SftpClientTest extends AbstractTestCase {

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

        // Set a message mock.
        $this->message = "sftp://demo:password@test.rebex.net:22 ";
    }

    /**
     * Tests connect()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testConnectWithFtpException(): void {

        // Some SSH methods doesn't exist
        if (false === function_exists("ssh2_connect")) {
            $this->assertNull(null);
            return;
        }

        $obj = new SftpClient($this->authenticator);
        $obj->getAuthenticator()->setPort(80);

        try {

            $obj->connect();
        } catch (Exception $ex) {

            $msg = implode("", [
                str_replace(":22", ":80", $this->message),
                "ssh2_connect failed: [",
                $this->authenticator->getHostname(),
                ", 80]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Tests delete()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testDelete(): void {

        // Some SSH methods doesn't exist
        if (false === function_exists("ssh2_connect")) {
            $this->assertNull(null);
            return;
        }

        $obj = new SftpClient($this->authenticator);
        $obj->connect();
        $obj->login();

        try {

            $obj->delete($this->remoteDir);
        } catch (Exception $ex) {

            $msg = implode("", [
                $this->message,
                "ssh2_sftp_unlink failed: [",
                $this->remoteDir,
                "]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Tests get()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testGet(): void {

        // Some SSH methods doesn't exist
        if (false === function_exists("ssh2_connect")) {
            $this->assertNull(null);
            return;
        }

        $obj = new SftpClient($this->authenticator);
        $obj->connect();
        $obj->login();

        $this->assertSame($obj, $obj->get($this->localFile, $this->remoteFile));

        $obj->close();
    }

    /**
     * Tests login()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testLoginWithFtpException(): void {

        // Some SSH methods doesn't exist
        if (false === function_exists("ssh2_connect")) {
            $this->assertNull(null);
            return;
        }

        $obj = new SftpClient($this->authenticator);
        $obj->getAuthenticator()->getPasswordAuthentication()->setPassword(null);
        $obj->connect();

        try {

            $obj->login();
        } catch (Exception $ex) {

            $msg = implode("", [
                str_replace(":password", ":", $this->message),
                "ssh2_auth_password failed: [",
                $this->authenticator->getPasswordAuthentication()->getUsername(),
                "]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }
    }

    /**
     * Tests mkdir()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testMkdir(): void {

        // Some SSH methods doesn't exist
        if (false === function_exists("ssh2_connect")) {
            $this->assertNull(null);
            return;
        }

        $obj = new SftpClient($this->authenticator);
        $obj->connect();
        $obj->login();

        try {

            $obj->mkdir("/mkdir");
        } catch (Exception $ex) {

            $msg = implode("", [
                $this->message,
                "ssh2_sftp_mkdir failed: [/mkdir]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Tests put()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testPut(): void {

        // Some SSH methods doesn't exist
        if (false === function_exists("ssh2_connect")) {
            $this->assertNull(null);
            return;
        }

        // Set a local file mock.
        $myself = realpath(__DIR__ . "/SftpClientTest.php");

        $obj = new SftpClient($this->authenticator);
        $obj->connect();
        $obj->login();

        try {

            $obj->put($myself, "/put");
        } catch (Exception $ex) {

            $msg = implode("", [
                $this->message,
                "fopen failed: [ssh2.sftp://",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertStringContainsString($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Tests rename()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRename(): void {

        // Some SSH methods doesn't exist
        if (false === function_exists("ssh2_connect")) {
            $this->assertNull(null);
            return;
        }

        $obj = new SftpClient($this->authenticator);
        $obj->connect();
        $obj->login();

        try {

            $obj->rename($this->remoteDir, "/rename");
        } catch (Exception $ex) {

            $msg = implode("", [
                $this->message,
                "ssh2_sftp_rename failed: [",
                $this->remoteDir,
                ", /rename]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Tests rmdir()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRmdir(): void {

        // Some SSH methods doesn't exist
        if (false === function_exists("ssh2_connect")) {
            $this->assertNull(null);
            return;
        }

        $obj = new SftpClient($this->authenticator);
        $obj->connect();
        $obj->login();

        try {

            $obj->rmdir($this->remoteDir);
        } catch (Exception $ex) {

            $msg = implode("", [
                $this->message,
                "ssh2_sftp_rmdir failed: [",
                $this->remoteDir,
                "]",
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

        $obj = new SftpClient($this->authenticator);

        $this->assertSame($this->authenticator, $obj->getAuthenticator());
        $this->assertNull($obj->getConnection());

        $this->assertEquals(22, $obj->getAuthenticator()->getPort());
    }
}
