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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestFloatIncludingVatPriceTrait;

/**
 * Float including VAT price trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class FloatIncludingVatPriceTraitTest extends AbstractTestCase {

    /**
     * Tests the setIncludingVatPrice() method.
     *
     * @return void
     */
    public function testSetIncludingVatPrice(): void {

        $obj = new TestFloatIncludingVatPriceTrait();

        $obj->setIncludingVatPrice(1.01);
        $this->assertEquals(1.01, $obj->getIncludingVatPrice());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestFloatIncludingVatPriceTrait();

        $this->assertNull($obj->getIncludingVatPrice());
    }
}
