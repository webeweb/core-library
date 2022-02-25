<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringEmailTrait;

/**
 * String email trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringEmailTraitTest extends AbstractTestCase {

    /**
     * Tests setEmail()
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new TestStringEmailTrait();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }
}
