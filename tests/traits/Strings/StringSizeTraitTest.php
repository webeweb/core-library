<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringSizeTrait;

/**
 * String size trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringSizeTraitTest extends AbstractTestCase {

    /**
     * Tests setSize()
     *
     * @return void
     */
    public function testSetSize(): void {

        $obj = new TestStringSizeTrait();

        $obj->setSize("size");
        $this->assertEquals("size", $obj->getSize());
    }
}
