<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringUsernameTrait;

/**
 * String username trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringUsernameTraitTest extends AbstractTestCase {

    /**
     * Test setUsername()
     *
     * @return void
     */
    public function testSetUsername(): void {

        $obj = new TestStringUsernameTrait();

        $obj->setUsername("username");
        $this->assertEquals("username", $obj->getUsername());
    }
}
