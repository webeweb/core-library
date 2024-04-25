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

namespace WBW\Library\Common\Tests\Security;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Security\Authenticator;
use WBW\Library\Common\Security\PasswordAuthentication;

/**
 * Authenticator test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Security\Tests
 */
class AuthenticatorTest extends AbstractTestCase {

    /**
     * Password authentication.
     *
     * @var PasswordAuthentication|null
     */
    private $passwordAuthentication;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Password authentication mock.
        $this->passwordAuthentication = new PasswordAuthentication("demo", "password");
    }

    /**
     * Test setPasswordAuthentication()
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
     * Test setScheme()
     *
     * @return void
     */
    public function testSetScheme(): void {

        $obj = new Authenticator(null, $this->passwordAuthentication);

        $obj->setScheme("scheme");
        $this->assertEquals("scheme", $obj->getScheme());
    }

    /**
     * Test __construct()
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
