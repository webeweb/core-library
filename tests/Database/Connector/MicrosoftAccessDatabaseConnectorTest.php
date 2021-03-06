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
use InvalidArgumentException;
use PDOException;
use WBW\Library\Core\Database\Connector\MicrosoftAccessDatabaseConnector;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Microsoft Access database connector test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Database\Connector
 */
class MicrosoftAccessDatabaseConnectorTest extends AbstractTestCase {

    /**
     * Tests the getConnection() method.
     *
     * @return void
     */
    public function testGetConnectionWithInvalidArgumentException(): void {

        $obj = new MicrosoftAccessDatabaseConnector($this->authenticator, "exception");

        try {

            $obj->getConnection();
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The database "exception" was not found', $ex->getMessage());
        }
    }

    /**
     * Tests the getConnection() method.
     *
     * @return void
     */
    public function testGetConnectionWithPDOException(): void {

        // Set a MDB mock.
        $mdb = getcwd() . "/tests/Fixtures/Database/Connector/test.mdb";

        $obj = new MicrosoftAccessDatabaseConnector($this->authenticator, $mdb);

        try {

            $obj->getConnection();
        } catch (Exception $ex) {

            $this->assertInstanceOf(PDOException::class, $ex);
            $this->assertNotEmpty($ex->getMessage());
        }
    }

    /**
     * Tests the prepareBinding() method.
     *
     * @return void
     */
    public function testPrepareBinding(): void {

        $obj = new MicrosoftAccessDatabaseConnector($this->authenticator, null);

        $arg = ["field1", "field2", "field3"];
        $res = ["field1" => ":field1", "field2" => ":field2", "field3" => ":field3"];
        $this->assertEquals($res, $obj->prepareBinding($arg));
    }

    /**
     * Tests the prepareInsert() method.
     *
     * @return void
     */
    public function testPrepareInsert(): void {

        $obj = new MicrosoftAccessDatabaseConnector($this->authenticator, null);

        $arg = ["field1" => 1, "field2" => "'value2'", "field3" => "'value3'"];
        $res = "INSERT INTO table (`field1`, `field2`, `field3`) VALUES (1, 'value2', 'value3')";
        $this->assertEquals($res, $obj->prepareInsert("table", $arg));
    }

    /**
     * Tests the prepareUpdate() method.
     *
     * @return void
     */
    public function testPrepareUpdate(): void {

        $obj = new MicrosoftAccessDatabaseConnector($this->authenticator, null);

        $arg = ["field1" => 1, "field2" => "'value2'", "field3" => "'value3'"];
        $res = "UPDATE table SET `field1` = 1, `field2` = 'value2', `field3` = 'value3'";
        $this->assertEquals($res, $obj->prepareUpdate("table", $arg));
    }

    /**
     * Tests the __construct method.
     *
     * @returns void
     */
    public function test__construct(): void {

        $obj = new MicrosoftAccessDatabaseConnector($this->authenticator, null);

        $this->assertSame($this->authenticator, $obj->getAuthenticator());
        $this->assertNull($obj->getDatabase());
    }
}
