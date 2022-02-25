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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringTableTrait;

/**
 * String table trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringTableTraitTest extends AbstractTestCase {

    /**
     * Tests setTable()
     *
     * @return void
     */
    public function testSetTable(): void {

        $obj = new TestStringTableTrait();

        $obj->setTable("table");
        $this->assertEquals("table", $obj->getTable());
    }
}
