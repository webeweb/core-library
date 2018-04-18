<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Database;

use Exception;
use PDOException;
use WBW\Library\Core\Database\OracleMySQLDatabase;

/**
 * Microsoft SQL Server database test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Database
 * @final
 */
final class OracleMySQLDatabaseTest extends AbstractDatabaseTest {

    /**
     * Tests the __construct method.
     *
     * @returns void
     */
    public function testConstructor() {

        $obj = new OracleMySQLDatabase($this->authenticator, null);

        $this->assertEquals($this->authenticator, $obj->getAuthenticator());
        $this->assertNull($obj->getDatabase());
    }

    /**
     * Tests the getConnection() method.
     *
     * @return void
     */
    public function testGetConnection() {

        $obj = new OracleMySQLDatabase($this->authenticator, "exception");

        try {
            $obj->getConnection();
        } catch (Exception $ex) {
            $this->assertInstanceOf(PDOException::class, $ex);
            $this->assertContains("Access denied for user 'username'@'localhost' (using password: YES)", $ex->getMessage());
        }
    }

}
