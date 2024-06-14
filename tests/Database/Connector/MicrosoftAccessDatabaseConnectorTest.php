<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Database\Connector;

use InvalidArgumentException;
use PDOException;
use Throwable;
use WBW\Library\Common\Database\Connector\MicrosoftAccessDatabaseConnector;
use WBW\Library\Common\Security\Authenticator;
use WBW\Library\Common\Security\PasswordAuthentication;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Microsoft Access database connector test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Database\Connector
 */
class MicrosoftAccessDatabaseConnectorTest extends AbstractTestCase {

    /**
     * Authenticator.
     *
     * @var Authenticator|null
     */
    private $authenticator;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Password authentication mock.
        $passwordAuthentication = new PasswordAuthentication("demo", "password");

        // Set an Authenticator mock.
        $this->authenticator = new Authenticator("localhost", $passwordAuthentication);
        $this->authenticator->setPort(null);
    }

    /**
     * Test getConnection()
     *
     * @return void
     */
    public function testGetConnectionWithInvalidArgumentException(): void {

        $obj = new MicrosoftAccessDatabaseConnector($this->authenticator, "exception");

        try {
            $obj->getConnection();
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The database "exception" was not found', $ex->getMessage());
        }
    }

    /**
     * Test getConnection()
     *
     * @return void
     */
    public function testGetConnectionWithPDOException(): void {

        // Set a MDB mock.
        $mdb = realpath(__DIR__ . "/../../Fixtures/Database/Connector/MicrosoftAccessDatabaseConnectorTest.mdb");

        $obj = new MicrosoftAccessDatabaseConnector($this->authenticator, $mdb);

        try {
            $obj->getConnection();
        } catch (Throwable $ex) {

            $this->assertInstanceOf(PDOException::class, $ex);
            $this->assertNotEmpty($ex->getMessage());
        }
    }

    /**
     * Test prepareBinding()
     *
     * @return void
     */
    public function testPrepareBinding(): void {

        $arg = ["field1", "field2", "field3"];
        $exp = ["field1" => ":field1", "field2" => ":field2", "field3" => ":field3"];

        $obj = new MicrosoftAccessDatabaseConnector($this->authenticator, null);

        $this->assertEquals($exp, $obj->prepareBinding($arg));
    }

    /**
     * Test prepareInsert()
     *
     * @return void
     */
    public function testPrepareInsert(): void {

        $arg = ["field1" => "1", "field2" => "'value2'", "field3" => "'value3'"];
        $exp = "INSERT INTO table (`field1`, `field2`, `field3`) VALUES (1, 'value2', 'value3')";

        $obj = new MicrosoftAccessDatabaseConnector($this->authenticator, null);

        $this->assertEquals($exp, $obj->prepareInsert("table", $arg));
    }

    /**
     * Test prepareUpdate()
     *
     * @return void
     */
    public function testPrepareUpdate(): void {

        $arg = ["field1" => "1", "field2" => "'value2'", "field3" => "'value3'"];
        $exp = "UPDATE table SET `field1` = 1, `field2` = 'value2', `field3` = 'value3'";

        $obj = new MicrosoftAccessDatabaseConnector($this->authenticator, null);

        $this->assertEquals($exp, $obj->prepareUpdate("table", $arg));
    }

    /**
     * Test __construct method.
     *
     * @returns void
     */
    public function test__construct(): void {

        $obj = new MicrosoftAccessDatabaseConnector($this->authenticator, null);

        $this->assertSame($this->authenticator, $obj->getAuthenticator());
        $this->assertNull($obj->getDatabase());
    }
}
