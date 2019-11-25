<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Database\Connector;

use Exception;
use PDOException;
use WBW\Library\Core\Database\Connector\MicrosoftSQLServerDatabaseConnector;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Microsoft SQL Server database connector test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Database\Connector
 */
class MicrosoftSQLServerDatabaseConnectorTest extends AbstractTestCase {

    /**
     * Tests the __construct method.
     *
     * @returns void
     */
    public function testConstruct() {

        $obj = new MicrosoftSQLServerDatabaseConnector($this->authenticator, null);

        $this->assertSame($this->authenticator, $obj->getAuthenticator());
        $this->assertNull($obj->getDatabase());
    }

    /**
     * Tests the getConnection() method.
     *
     * @return void
     */
    public function testGetConnectionWithPDOException() {

        $obj = new MicrosoftSQLServerDatabaseConnector($this->authenticator, "exception");

        try {

            $obj->getConnection();
        } catch (Exception $ex) {

            $this->assertInstanceOf(PDOException::class, $ex);
            $this->assertNotEmpty($ex->getMessage());
        }
    }
}
