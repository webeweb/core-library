<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestFloatVatTotalTrait;

/**
 * Float VAT total trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class FloatVatTotalTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor() {

        $obj = new TestFloatVatTotalTrait();

        $this->assertNull($obj->getVatTotal());
    }

    /**
     * Tests the setVatTotal() method.
     *
     * @return void
     */
    public function testSetVatTotal() {

        $obj = new TestFloatVatTotalTrait();

        $obj->setVatTotal(1.01);
        $this->assertEquals(1.01, $obj->getVatTotal());
    }
}
