<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Database;

use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Database\AccessDatabase;
use WBW\Library\Core\Exception\File\FileNotFoundException;

/**
 * Microsoft Access database test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Database
 * @final
 */
final class AccessDatabaseTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct method.
     *
     * @returns void
     */
    public function testConstructor() {

        $obj = new AccessDatabase();

        $this->assertEquals(null, $obj->getDatabase());
        $this->assertEquals("", $obj->getPassword());
        $this->assertEquals("", $obj->getUsername());
    }

    /**
     * Tests the connect() method.
     *
     * @return void
     */
    public function testConnect() {

        $obj = new AccessDatabase();

        try {
            $obj->setDatabase("exception");
            $obj->connect();
        } catch (Exception $ex) {
            $this->assertInstanceOf(FileNotFoundException::class, $ex);
            $this->assertEquals("The file \"exception\" is not found", $ex->getMessage());
        }
    }

    /**
     * Tests the setDatabase() method.
     *
     * @return void
     */
    public function testSetDatabase() {

        $obj = new AccessDatabase();

        $obj->setDatabase("database");
        $this->assertEquals("database", $obj->getDatabase());
    }

    /**
     * Tests the setPassword() method.
     *
     * @return void
     */
    public function testSetPassword() {

        $obj = new AccessDatabase();

        $obj->setPassword("password");
        $this->assertEquals("password", $obj->getPassword());
    }

    /**
     * Tests the setUsername() method.
     *
     * @return void
     */
    public function testSetUsername() {

        $obj = new AccessDatabase();

        $obj->setUsername("username");
        $this->assertEquals("username", $obj->getUsername());
    }

}
