<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringTableTrait;

/**
 * String table trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringTableTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringTableTrait();

        $this->assertNull($obj->getTable());
    }

    /**
     * Tests the setTable() method.
     *
     * @return void
     */
    public function testSetTable() {

        $obj = new TestStringTableTrait();

        $obj->setTable("table");
        $this->assertEquals("table", $obj->getTable());
    }
}
