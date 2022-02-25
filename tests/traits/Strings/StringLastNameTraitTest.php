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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringLastNameTrait;

/**
 * String last name trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringLastNameTraitTest extends AbstractTestCase {

    /**
     * Tests setLastName()
     *
     * @return void
     */
    public function testSetLastName(): void {

        $obj = new TestStringLastNameTrait();

        $obj->setLastName("lastname");
        $this->assertEquals("lastname", $obj->getLastName());
    }
}
