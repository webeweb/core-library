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

namespace WBW\Library\Common\Tests\Database\Connector;

use PDOException;
use Throwable;
use WBW\Library\Common\Database\Connector\MicrosoftSqlServerDatabaseConnector;
use WBW\Library\Common\Security\Authenticator;
use WBW\Library\Common\Security\PasswordAuthentication;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Microsoft SQL Server database connector test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Database\Connector
 */
class MicrosoftSqlServerDatabaseConnectorTest extends AbstractTestCase {

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
    public function testGetConnectionWithPDOException(): void {

        $obj = new MicrosoftSqlServerDatabaseConnector($this->authenticator, "exception");

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

        $obj = new MicrosoftSqlServerDatabaseConnector($this->authenticator, null);

        $this->assertSame($this->authenticator, $obj->getAuthenticator());
        $this->assertNull($obj->getDatabase());
    }
}
