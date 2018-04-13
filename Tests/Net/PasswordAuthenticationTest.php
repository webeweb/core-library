<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Net;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Net\PasswordAuthentication;

/**
 * Password authentication test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Net
 * @final
 */
final class PasswordAuthenticationTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new PasswordAuthentication(null, null);

        $this->assertNull($obj->getUsername());
    }

    /**
     * Tests the setPassword() method.
     *
     * @return void
     */
    public function testSetPassword() {

        $obj = new PasswordAuthentication(null, null);

        $this->assertNull($obj->getPassword());

        $obj->setPassword("password");

        $this->assertEquals("password", $obj->getPassword());
    }

    /**
     * Tests the setUsername() method.
     *
     * @return void
     */
    public function testSetUsername() {

        $obj = new PasswordAuthentication(null, null);

        $this->assertNull($obj->getUsername());

        $obj->setUsername("username");

        $this->assertEquals("username", $obj->getUsername());
    }

}
