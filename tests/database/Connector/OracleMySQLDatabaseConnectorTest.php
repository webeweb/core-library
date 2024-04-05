<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Database\Tests\Connector;

use PDOException;
use Throwable;
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
     * Test getConnection()
     *
     * @return void
     */
    public function testGetConnectionWithPDOException(): void {

        $obj = new OracleMySQLDatabaseConnector($this->authenticator, "exception");

        try {

            $obj->getConnection();
        } catch (Throwable $ex) {

            $this->assertInstanceOf(PDOException::class, $ex);
            $this->assertNotEmpty($ex->getMessage());
        }
    }

    /**
     * Test __construct method.
     *
     * @returns void
     */
    public function test__construct(): void {

        $obj = new OracleMySQLDatabaseConnector($this->authenticator, null);

        $this->assertSame($this->authenticator, $obj->getAuthenticator());
        $this->assertNull($obj->getDatabase());
    }
}
