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
use WBW\Library\Traits\Tests\Fixtures\Floats\TestFloatDiscountTotalTrait;

/**
 * Float discount total trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Floats
 */
class FloatDiscountTotalTraitTest extends AbstractTestCase {

    /**
     * Tests setDiscountTotal()
     *
     * @return void
     */
    public function testSetDiscountTotal(): void {

        $obj = new TestFloatDiscountTotalTrait();

        $obj->setDiscountTotal(0.123456789);
        $this->assertEquals(0.123456789, $obj->getDiscountTotal());
    }
}
