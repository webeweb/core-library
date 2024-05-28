<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Floats;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Floats\TestFloatDiscountAmountTrait;

/**
 * Float discount amount trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Floats
 */
class FloatDiscountAmountTraitTest extends AbstractTestCase {

    /**
     * Test setDiscountAmount()
     *
     * @return void
     */
    public function testSetDiscountAmount(): void {

        $obj = new TestFloatDiscountAmountTrait();

        $obj->setDiscountAmount(0.123456789);
        $this->assertEquals(0.123456789, $obj->getDiscountAmount());
    }
}
