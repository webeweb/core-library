<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Security;

use WBW\Library\Core\Security\PasswordAuthentication;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Password authentication test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Security
 */
class PasswordAuthenticationTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PasswordAuthentication(null, null);

        $this->assertNull($obj->getPassword());
        $this->assertNull($obj->getUsername());
    }
}
