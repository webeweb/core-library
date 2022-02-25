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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringColumnTrait;

/**
 * String column trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringColumnTraitTest extends AbstractTestCase {

    /**
     * Tests setColumn()
     *
     * @return void
     */
    public function testSetColumn(): void {

        $obj = new TestStringColumnTrait();

        $obj->setColumn("column");
        $this->assertEquals("column", $obj->getColumn());
    }
}
