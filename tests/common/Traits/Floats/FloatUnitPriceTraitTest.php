<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Floats;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Floats\TestFloatUnitPriceTrait;

/**
 * Float unit price trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Floats
 */
class FloatUnitPriceTraitTest extends AbstractTestCase {

    /**
     * Test setUnitPrice()
     *
     * @return void
     */
    public function testSetUnitPrice(): void {

        $obj = new TestFloatUnitPriceTrait();

        $obj->setUnitPrice(0.1);
        $this->assertEquals(0.1, $obj->getUnitPrice());
    }
}
