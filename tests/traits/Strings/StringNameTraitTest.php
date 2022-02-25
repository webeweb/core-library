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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringNameTrait;

/**
 * String name trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringNameTraitTest extends AbstractTestCase {

    /**
     * Tests setName()
     *
     * @return void
     */
    public function testSetName(): void {

        $obj = new TestStringNameTrait();

        $obj->setName("name");
        $this->assertEquals("name", $obj->getName());
    }
}
