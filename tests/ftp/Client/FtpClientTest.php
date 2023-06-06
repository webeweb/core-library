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

use Throwable;
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
     * Client.
     *
     * @var FtpClient
     */
    private $client;

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

        try {

            $this->client = new FtpClient($this->authenticator);
            $this->client->connect();
            $this->client->login();
            $this->client->pasv(true);
        } catch (Throwable $ex) {
            $this->markTestSkipped($ex->getMessage());
        }
    }

    /**
     * Test cdup()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCdup(): void {

        $obj = $this->client;

        $this->assertSame($obj, $obj->chdir($this->remoteDir));
        $this->assertSame($obj, $obj->cdup());

        $obj->close();
    }

    /**
     * Test chdir()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testChdirWithFtpException(): void {

        $obj = $this->client;

        try {

            $obj->chdir("/chdir");
        } catch (Throwable $ex) {

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
     * Test chmod()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testChmod(): void {

        $obj = $this->client;

        try {

            $obj->chmod(0644, $this->remoteFile);
        } catch (Throwable $ex) {

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
     * Test connect()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testConnectWithFtpException(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->getAuthenticator()->setPort(80);

        try {

            $obj->connect(3);
        } catch (Throwable $ex) {

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
     * Test delete()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testDelete(): void {

        $obj = $this->client;

        try {

            $obj->delete($this->remoteFile);
        } catch (Throwable $ex) {

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
     * Test fget()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testFget(): void {

        // Set a local stream mock.
        $localStream = fopen($this->localFile, "w");

        $obj = $this->client;

        $this->assertSame($obj, $obj->fget($localStream, $this->remoteFile));

        try {
            $obj->close();
        } catch (Throwable $ex) {
            // NOTHING TO DO
        }

        fclose($localStream);
    }

    /**
     * Test fget()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testFgetWithFtpException(): void {

        // Set a local stream mock.
        $localStream = fopen($this->localFile, "w");

        $obj = $this->client;

        try {

            $obj->fget($localStream, "/fget");
        } catch (Throwable $ex) {

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
     * Test fput()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testFput(): void {

        // Set a local stream mock.
        $localStream = fopen($this->myself, "r");

        $obj = $this->client;

        try {

            $obj->fput("/fput", $localStream);
        } catch (Throwable $ex) {

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
     * Test get()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGet(): void {

        $obj = $this->client;

        $this->assertSame($obj, $obj->get($this->localFile, $this->remoteFile));

        $obj->close();
    }

    /**
     * Test get()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetWithFtpException(): void {

        $obj = $this->client;

        try {

            $obj->get($this->localFile, "/get");
        } catch (Throwable $ex) {

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
     * Test login()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testLoginWithFtpException(): void {

        $obj = new FtpClient($this->authenticator);
        $obj->getAuthenticator()->getPasswordAuthentication()->setPassword(null);
        $obj->connect();

        try {

            $obj->login();
        } catch (Throwable $ex) {

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
     * Test mdtm()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testMdtm(): void {

        $obj = $this->client;

        $this->assertGreaterThanOrEqual(0, $obj->mdtm($this->remoteFile));

        $obj->close();
    }

    /**
     * Test mdtm()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testMdtmWithFtpException(): void {

        $obj = $this->client;

        try {

            $obj->mdtm("/mdtm");
        } catch (Throwable $ex) {

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
     * Test mkdir()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testMkdir(): void {

        $obj = $this->client;

        try {

            $obj->mkdir("/mkdir");
        } catch (Throwable $ex) {

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
     * Test nbFget()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNbFget(): void {

        // Set a local stream mock.
        $localStream = fopen($this->localFile, "w");

        $obj = $this->client;

        $this->assertGreaterThanOrEqual(FTP_FINISHED, $obj->nbFget($localStream, $this->remoteFile));

        try {
            $obj->close();
        } catch (Throwable $ex) {
            // NOTHING TO DO
        }

        fclose($localStream);
    }

    /**
     * Test nbFput()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNbFput(): void {

        // Set a local stream mock.
        $localStream = fopen($this->myself, "r");

        $obj = $this->client;

        $this->assertEquals(FTP_FAILED, $obj->nbFput("/nb_fput", $localStream));

        $obj->close();

        fclose($localStream);
    }

    /**
     * Test nbGet()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNbGet(): void {

        $obj = $this->client;

        $this->assertGreaterThanOrEqual(FTP_FINISHED, $obj->nbGet($this->localFile, $this->remoteFile));

        try {
            $obj->close();
        } catch (Throwable $ex) {
            // NOTHING TO DO
        }
    }

    /**
     * Test nbPut()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNbPut(): void {

        $obj = $this->client;

        $this->assertEquals(FTP_FAILED, $obj->nbPut("/nb_fput", $this->myself));

        $obj->close();
    }

    /**
     * Test nlist()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNlist(): void {

        $obj = $this->client;

        $this->assertIsArray($obj->nlist($this->remoteDir));

        $obj->close();
    }

    /**
     * Test nlist()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testNlistWithFtpException(): void {

        $obj = $this->client;

        try {

            $obj->nlist("/nlist");
        } catch (Throwable $ex) {

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
     * Test put()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testPut(): void {

        $obj = $this->client;

        try {

            $obj->put($this->myself, "/put");
        } catch (Throwable $ex) {

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
     * Test pwd()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testPwd(): void {

        $obj = $this->client;

        $this->assertEquals("/", $obj->pwd());

        $obj->close();
    }

    /**
     * Test rawList()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testRawListWithFtpException(): void {

        $obj = $this->client;

        try {

            $obj->rawList("/rawList");
        } catch (Throwable $ex) {

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
     * Test rawList()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testRawlist(): void {

        $obj = $this->client;

        $this->assertIsArray($obj->rawList($this->remoteDir));

        $obj->close();
    }

    /**
     * Test rename()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testRename(): void {

        $obj = $this->client;

        try {

            $obj->rename($this->remoteDir, "/rename");
        } catch (Throwable $ex) {

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
     * Test rmdir()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testRmdir(): void {

        $obj = $this->client;

        try {

            $obj->rmdir($this->remoteDir);
        } catch (Throwable $ex) {

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
     * Test size()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSize(): void {

        $obj = $this->client;

        $this->assertGreaterThanOrEqual(0, $obj->size($this->remoteFile));

        $obj->close();
    }

    /**
     * Test size()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSizetWithFtpException(): void {

        $obj = $this->client;

        try {

            $obj->size("/size");
        } catch (Throwable $ex) {

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
     * Test systype()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSystype(): void {

        $obj = $this->client;

        $this->assertNotEquals("", $obj->systype());

        $obj->close();
    }

    /**
     * Test __construct()
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
