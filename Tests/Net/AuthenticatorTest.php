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

use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Net\Authenticator;
use WBW\Library\Core\Net\PasswordAuthentication;

/**
 * Authenticator test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Net
 */
final class AuthenticatorTest extends PHPUnit_Framework_TestCase {

    /**
     * Password authentication.
     *
     * @var PasswordAuthentication
     */
    private $passwordAuthentication;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {

        // Set the Password authentication mock.
        $this->passwordAuthentication = new PasswordAuthentication("username", "password");
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new Authenticator(null, $this->passwordAuthentication);

        $this->assertNull($obj->getHost());
        $this->assertEquals($this->passwordAuthentication, $obj->getPasswordAuthentication());
        $this->assertNull($obj->getPort());
    }

    /**
     * Tests the setHost() method.
     *
     * @return void
     */
    public function testSetHost() {

        $obj = new Authenticator(null, $this->passwordAuthentication);

        $obj->setHost("host");
        $this->assertEquals("host", $obj->getHost());
    }

    /**
     * Tests the setPasswordAuthencation() method.
     *
     * @return void
     */
    public function testSetPasswordAuthentication() {

        $obj = new Authenticator(null, $this->passwordAuthentication);

        $obj->setPasswordAuthentication(new PasswordAuthentication(null, null));
        $this->assertNull($obj->getPasswordAuthentication()->getUsername());
        $this->assertNull($obj->getPasswordAuthentication()->getPassword());
    }

    /**
     * Tests the setPort() method.
     *
     * @return void
     */
    public function testSetPort() {

        $obj = new Authenticator(null, $this->passwordAuthentication);

        $obj->setPort(22);
        $this->assertEquals(22, $obj->getPort());

        try {
            $obj->setPort(0);
        } catch (Exception $ex) {
            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The port must be between 1 and 65536", $ex->getMessage());
        }

        try {
            $obj->setPort(65537);
        } catch (Exception $ex) {
            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The port must be between 1 and 65536", $ex->getMessage());
        }
    }

}
