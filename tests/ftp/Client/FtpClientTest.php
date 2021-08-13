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
use WBW\Library\Ftp\Tests\AbstractTestCase;

/**
 * FTP client test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Ftp\Tests\Client
 */
class FtpClientTest extends AbstractTestCase {

    /**
     * Tests the cdup() method.
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
     * Tests the fget() method.
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
     * Tests the get() method.
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
     * Tests the mdtm() method.
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
     * Tests the nbFget() method.
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
     * Tests the nbGet() method.
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
     * Tests the nlist() method.
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
     * Tests the pwd() method.
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
     * Tests the rawList() method.
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
     * Tests the size() method.
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
     * Tests the systype() method.
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
     * Tests the __construct() method.
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