<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Database\Tests\Connector;

use Exception;
use PDOException;
use WBW\Library\Database\Connector\OracleMySQLDatabaseConnector;
use WBW\Library\Database\Tests\AbstractTestCase;

/**
 * Microsoft SQL Server database connector test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Database\Tests\Connector
 */
class OracleMySQLDatabaseConnectorTest extends AbstractTestCase {

    /**
     * Tests getConnection()
     *
     * @return void
     */
    public function testGetConnectionWithPDOException(): void {

        $obj = new OracleMySQLDatabaseConnector($this->authenticator, "exception");

        try {

            $obj->getConnection();
        } catch (Exception $ex) {

            $this->assertInstanceOf(PDOException::class, $ex);
            $this->assertNotEmpty($ex->getMessage());
        }
    }

    /**
     * Tests the __construct method.
     *
     * @returns void
     */
    public function test__construct(): void {

        $obj = new OracleMySQLDatabaseConnector($this->authenticator, null);

        $this->assertSame($this->authenticator, $obj->getAuthenticator());
        $this->assertNull($obj->getDatabase());
    }
}
