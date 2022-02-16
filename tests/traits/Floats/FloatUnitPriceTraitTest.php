<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Floats;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Floats\TestFloatUnitPriceTrait;

/**
 * Float unit price trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Floats
 */
class FloatUnitPriceTraitTest extends AbstractTestCase {

    /**
     * Tests setUnitPrice()
     *
     * @return void
     */
    public function testSetUnitPrice(): void {

        $obj = new TestFloatUnitPriceTrait();

        $obj->setUnitPrice(0.1);
        $this->assertEquals(0.1, $obj->getUnitPrice());
    }
}
