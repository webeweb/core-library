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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestIntegerPageTrait;

/**
 * Integer page trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class IntegerPageTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor() {

        $obj = new TestIntegerPageTrait();

        $this->assertNull($obj->getPage());
    }

    /**
     * Tests the setPage() method.
     *
     * @return void
     */
    public function testSetPage() {

        $obj = new TestIntegerPageTrait();

        $obj->setPage(1);
        $this->assertEquals(1, $obj->getPage());
    }
}
