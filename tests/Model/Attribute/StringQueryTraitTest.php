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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringQueryTrait;

/**
 * String query trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringQueryTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringQueryTrait();

        $this->assertNull($obj->getQuery());
    }

    /**
     * Tests the setQuery() method.
     *
     * @return void
     */
    public function testSetQuery() {

        $obj = new TestStringQueryTrait();

        $obj->setQuery("query");
        $this->assertEquals("query", $obj->getQuery());
    }
}
