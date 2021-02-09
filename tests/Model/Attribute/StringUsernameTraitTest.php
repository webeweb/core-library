<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringUsernameTrait;

/**
 * String username trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringUsernameTraitTest extends AbstractTestCase {

    /**
     * Tests the setUsername() method.
     *
     * @return void
     */
    public function testSetUsername(): void {

        $obj = new TestStringUsernameTrait();

        $obj->setUsername("username");
        $this->assertEquals("username", $obj->getUsername());
    }
}
