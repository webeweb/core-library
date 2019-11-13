<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Database\Client;

use Exception;
use InvalidArgumentException;
use WBW\Library\Core\Database\Client\MicrosoftAccessDatabaseClient;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Microsoft Access database client test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Database\Client
 */
class MicrosoftAccessDatabaseClientTest extends AbstractTestCase {

    /**
     * Tests the __construct method.
     *
     * @returns void
     */
    public function testConstruct() {

        $obj = new MicrosoftAccessDatabaseClient($this->authenticator, null);

        $this->assertSame($this->authenticator, $obj->getAuthenticator());
        $this->assertNull($obj->getDatabase());
    }

    /**
     * Tests the getConnection() method.
     *
     * @return void
     */
    public function testGetConnectionWithPDOException() {

        $obj = new MicrosoftAccessDatabaseClient($this->authenticator, "exception");

        try {

            $obj->getConnection();
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The database \"exception\" was not found", $ex->getMessage());
        }
    }

    /**
     * Tests the prepareBinding() method.
     *
     * @return void
     */
    public function testPrepareBinding() {

        $obj = new MicrosoftAccessDatabaseClient($this->authenticator, null);

        $arg = ["field1", "field2", "field3"];
        $res = ["field1" => ":field1", "field2" => ":field2", "field3" => ":field3"];
        $this->assertEquals($res, $obj->prepareBinding($arg));
    }

    /**
     * Tests the prepareInsert() method.
     *
     * @return void
     */
    public function testPrepareInsert() {

        $obj = new MicrosoftAccessDatabaseClient($this->authenticator, null);

        $arg = ["field1" => 1, "field2" => "'value2'", "field3" => "'value3'"];
        $res = "INSERT INTO table (`field1`, `field2`, `field3`) VALUES (1, 'value2', 'value3')";
        $this->assertEquals($res, $obj->prepareInsert("table", $arg));
    }

    /**
     * Tests the prepareUpdate() method.
     *
     * @return void
     */
    public function testPrepareUpdate() {

        $obj = new MicrosoftAccessDatabaseClient($this->authenticator, null);

        $arg = ["field1" => 1, "field2" => "'value2'", "field3" => "'value3'"];
        $res = "UPDATE table SET `field1` = 1, `field2` = 'value2', `field3` = 'value3'";
        $this->assertEquals($res, $obj->prepareUpdate("table", $arg));
    }
}
