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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestFloatExcludingVatPriceTrait;

/**
 * Float excluding VAT price trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class FloatExcludingVatPriceTraitTest extends AbstractTestCase {

    /**
     * Tests the setExcludingVatPrice() method.
     *
     * @return void
     */
    public function testSetExcludingVatPrice() {

        $obj = new TestFloatExcludingVatPriceTrait();

        $obj->setExcludingVatPrice(1.01);
        $this->assertEquals(1.01, $obj->getExcludingVatPrice());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor() {

        $obj = new TestFloatExcludingVatPriceTrait();

        $this->assertNull($obj->getExcludingVatPrice());
    }
}
