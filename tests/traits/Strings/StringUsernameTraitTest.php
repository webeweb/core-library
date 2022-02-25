<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringUsernameTrait;

/**
 * String username trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringUsernameTraitTest extends AbstractTestCase {

    /**
     * Tests setUsername()
     *
     * @return void
     */
    public function testSetUsername(): void {

        $obj = new TestStringUsernameTrait();

        $obj->setUsername("username");
        $this->assertEquals("username", $obj->getUsername());
    }
}
