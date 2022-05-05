<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Ftp\Tests\Client;

use Exception;
use WBW\Library\Ftp\Client\FtpClient;
use WBW\Library\Ftp\Exception\FtpException;
use WBW\Library\Ftp\Tests\AbstractTestCase;

/**
 * FTP client test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ftp\Tests\Client
 */
class FtpClientTest extends AbstractTestCase {

    /**
     * Message.
     *
     * @var string
     */
    private $message;

    /**
     * Myself.
     *
     * @var string
     */
    private $myself;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a message mock.
        $this->message = "ftp://demo:password@test.rebex.net:21 ";

        // Set a myself mock.
        $this->myself = realpath(__DIR__ . "/FtpClientTest.php");
    }

    /**
     * Tests cdup()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCdup(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        $this->assertSame($obj, $obj->chdir($this->remoteDir));
        $this->assertSame($obj, $obj->cdup());

        $obj->close();
    }

    /**
     * Tests chdir()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testChdirWithFtpException(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        try {

            $obj->chdir("/chdir");
        } catch (Exception $ex) {

            $msg = implode("", [
                $this->message,
                "ftp_chdir failed: [/chdir]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Tests chmod()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testChmod(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        try {

            $obj->chmod(0644, $this->remoteFile);
        } catch (Exception $ex) {

            $msg = implode("", [
                $this->message,
                "ftp_chmod failed: [420, ",
                $this->remoteFile,
                "]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Tests connect()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testConnectWithFtpException(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->getAuthenticator()->setPort(80);

        try {

            $obj->connect(3);
        } catch (Exception $ex) {

            $msg = implode("", [
                str_replace(":21", ":80", $this->message),
                "ftp_connect failed: [",
                $this->authenticator->getHostname(),
                ", 80, 3]",
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

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        try {

            $obj->delete($this->remoteFile);
        } catch (Exception $ex) {

            $msg = implode("", [
                $this->message,
                "ftp_delete failed: [",
                $this->remoteFile,
                "]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Tests fget()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testFget(): void {

        // Set a local stream mock.
        $localStream = fopen($this->localFile, "w");

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        $this->assertSame($obj, $obj->fget($localStream, $this->remoteFile));

        $obj->close();

        fclose($localStream);
    }

    /**
     * Tests fget()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testFgetWithFtpException(): void {

        // Set a local stream mock.
        $localStream = fopen($this->localFile, "w");

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        try {

            $obj->fget($localStream, "/fget");
        } catch (Exception $ex) {

            $msg = implode("", [
                $this->message,
                "ftp_fget failed: [",
                $localStream,
                ", /fget, 2, 0]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();

        fclose($localStream);
    }

    /**
     * Tests fput()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testFput(): void {

        // Set a local stream mock.
        $localStream = fopen($this->myself, "r");

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        try {

            $obj->fput("/fput", $localStream);
        } catch (Exception $ex) {

            $msg = implode("", [
                $this->message,
                "ftp_fput failed: [/fput, Resource id #",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertStringContainsString($msg, $ex->getMessage());
        }

        $obj->close();

        fclose($localStream);
    }

    /**
     * Tests get()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testGet(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        $this->assertSame($obj, $obj->get($this->localFile, $this->remoteFile));

        $obj->close();
    }

    /**
     * Tests get()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testGetWithFtpException(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        try {

            $obj->get($this->localFile, "/get");
        } catch (Exception $ex) {

            $msg = implode("", [
                $this->message,
                "ftp_get failed: [",
                $this->localFile,
                ", /get, 2, 0]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Tests login()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testLoginWithFtpException(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->getAuthenticator()->getPasswordAuthentication()->setPassword(null);
        $obj->connect();

        try {

            $obj->login();
        } catch (Exception $ex) {

            $msg = implode("", [
                str_replace(":password", ":", $this->message),
                "ftp_login failed: [",
                $this->authenticator->getPasswordAuthentication()->getUsername(),
                "]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Tests mdtm()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testMdtm(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        $this->assertGreaterThanOrEqual(0, $obj->mdtm($this->remoteFile));

        $obj->close();
    }

    /**
     * Tests mdtm()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testMdtmWithFtpException(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        try {

            $obj->mdtm("/mdtm");
        } catch (Exception $ex) {

            $msg = implode("", [
                $this->message,
                "ftp_mdtm failed: [/mdtm]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Tests mkdir()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testMkdir(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        try {

            $obj->mkdir("/mkdir");
        } catch (Exception $ex) {

            $msg = implode("", [
                $this->message,
                "ftp_mkdir failed: [/mkdir]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Tests nbFget()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNbFget(): void {

        // Set a local stream mock.
        $localStream = fopen($this->localFile, "w");

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        $this->assertGreaterThanOrEqual(FTP_FINISHED, $obj->nbFget($localStream, $this->remoteFile));

        $obj->close();

        fclose($localStream);
    }

    /**
     * Tests nbFput()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNbFput(): void {

        // Set a local stream mock.
        $localStream = fopen($this->myself, "r");

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        $this->assertEquals(FTP_FAILED, $obj->nbFput("/nb_fput", $localStream));

        $obj->close();

        fclose($localStream);
    }

    /**
     * Tests nbGet()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNbGet(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        $this->assertGreaterThanOrEqual(FTP_FINISHED, $obj->nbGet($this->localFile, $this->remoteFile));

        $obj->close();
    }

    /**
     * Tests nbPut()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNbPut(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        $this->assertEquals(FTP_FAILED, $obj->nbPut("/nb_fput", $this->myself));

        $obj->close();
    }

    /**
     * Tests nlist()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNlist(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        $this->assertIsArray($obj->nlist($this->remoteDir));

        $obj->close();
    }

    /**
     * Tests nlist()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNlistWithFtpException(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        try {

            $obj->nlist("/nlist");
        } catch (Exception $ex) {

            $msg = implode("", [
                $this->message,
                "ftp_nlist failed: [/nlist]",
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

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        try {

            $obj->put($this->myself, "/put");
        } catch (Exception $ex) {

            $msg = implode("", [
                $this->message,
                "ftp_put failed: [/put, ",
                $this->myself,
                ", 2, 0]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Tests pwd()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testPwd(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        $this->assertEquals("/", $obj->pwd());

        $obj->close();
    }

    /**
     * Tests rawList()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRawListWithFtpException(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        try {

            $obj->rawList("/rawList");
        } catch (Exception $ex) {

            $msg = implode("", [
                $this->message,
                "ftp_rawList failed: [/rawList, false]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Tests rawList()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRawlist(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        $this->assertIsArray($obj->rawList($this->remoteDir));

        $obj->close();
    }

    /**
     * Tests rename()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRename(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        try {

            $obj->rename($this->remoteDir, "/rename");
        } catch (Exception $ex) {

            $msg = implode("", [
                $this->message,
                "ftp_rename failed: [",
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

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        try {

            $obj->rmdir($this->remoteDir);
        } catch (Exception $ex) {

            $msg = implode("", [
                $this->message,
                "ftp_rmdir failed: [",
                $this->remoteDir,
                "]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Tests size()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSize(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        $this->assertGreaterThanOrEqual(0, $obj->size($this->remoteFile));

        $obj->close();
    }

    /**
     * Tests size()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSizetWithFtpException(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        try {

            $obj->size("/size");
        } catch (Exception $ex) {

            $msg = implode("", [
                $this->message,
                "ftp_size failed: [/size]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Tests systype()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSystype(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->connect();
        $obj->login();
        $obj->pasv(true);

        $this->assertNotEquals("", $obj->systype());

        $obj->close();
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new FtpClient($this->authenticator);

        $this->assertSame($this->authenticator, $obj->getAuthenticator());
        $this->assertNull($obj->getConnection());

        $this->assertEquals(21, $obj->getAuthenticator()->getPort());
    }
}
