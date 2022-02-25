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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringFirstNameTrait;

/**
 * String first name trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringFirstNameTraitTest extends AbstractTestCase {

    /**
     * Tests setFirstName()
     *
     * @return void
     */
    public function testSetFirstName(): void {

        $obj = new TestStringFirstNameTrait();

        $obj->setFirstName("firstname");
        $this->assertEquals("firstname", $obj->getFirstName());
    }
}
