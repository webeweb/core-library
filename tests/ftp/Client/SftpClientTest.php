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
use WBW\Library\Ftp\Tests\AbstractTestCase;

/**
 * SFTP client test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Ftp\Tests\Client
 */
class SftpClientTest extends AbstractTestCase {

    /**
     * Tests the get() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testGet(): void {

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
     * Tests the __construct() method.
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