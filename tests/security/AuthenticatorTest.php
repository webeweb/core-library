<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Security\Tests;

use WBW\Library\Security\Authenticator;
use WBW\Library\Security\PasswordAuthentication;

/**
 * Authenticator test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Security\Tests
 */
class AuthenticatorTest extends AbstractTestCase {

    /**
     * Tests setPasswordAuthentication()
     *
     * @return void
     */
    public function testSetPasswordAuthentication(): void {

        $obj = new Authenticator(null, $this->passwordAuthentication);

        $obj->setPasswordAuthentication(new PasswordAuthentication(null, null));
        $this->assertNull($obj->getPasswordAuthentication()->getUsername());
        $this->assertNull($obj->getPasswordAuthentication()->getPassword());
    }

    /**
     * Tests setScheme()
     *
     * @return void
     */
    public function testSetScheme(): void {

        $obj = new Authenticator(null, $this->passwordAuthentication);

        $obj->setScheme("scheme");
        $this->assertEquals("scheme", $obj->getScheme());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Authenticator(null, $this->passwordAuthentication);

        $this->assertNull($obj->getHostname());
        $this->assertSame($this->passwordAuthentication, $obj->getPasswordAuthentication());
        $this->assertNull($obj->getPort());
        $this->assertNull($obj->getScheme());
    }
}
