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
use WBW\Library\Traits\Tests\Fixtures\Floats\TestFloatDiscountAmountTrait;

/**
 * Float discount amount trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Floats
 */
class FloatDiscountAmountTraitTest extends AbstractTestCase {

    /**
     * Tests setDiscountAmount()
     *
     * @return void
     */
    public function testSetDiscountAmount(): void {

        $obj = new TestFloatDiscountAmountTrait();

        $obj->setDiscountAmount(0.123456789);
        $this->assertEquals(0.123456789, $obj->getDiscountAmount());
    }
}
