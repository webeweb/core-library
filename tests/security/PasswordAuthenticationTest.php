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

use WBW\Library\Ftp\Tests\AbstractTestCase;
use WBW\Library\Security\PasswordAuthentication;

/**
 * Password authentication test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Security\Tests
 */
class PasswordAuthenticationTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PasswordAuthentication(null, null);

        $this->assertNull($obj->getPassword());
        $this->assertNull($obj->getUsername());
    }
}
