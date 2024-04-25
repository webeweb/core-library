<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Floats;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Floats\TestFloatExcludingVatPriceTrait;

/**
 * Float excluding VAT price trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Floats
 */
class FloatExcludingVatPriceTraitTest extends AbstractTestCase {

    /**
     * Test setExcludingVatPrice()
     *
     * @return void
     */
    public function testSetExcludingVatPrice(): void {

        $obj = new TestFloatExcludingVatPriceTrait();

        $obj->setExcludingVatPrice(0.123456789);
        $this->assertEquals(0.123456789, $obj->getExcludingVatPrice());
    }
}
