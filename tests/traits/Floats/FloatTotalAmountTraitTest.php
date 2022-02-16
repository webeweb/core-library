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
use WBW\Library\Traits\Tests\Fixtures\Floats\TestFloatTotalAmountTrait;

/**
 * Float total amount trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Floats
 */
class FloatTotalAmountTraitTest extends AbstractTestCase {

    /**
     * Tests setTotalAmount()
     *
     * @return void
     */
    public function testSetTotalAmount(): void {

        $obj = new TestFloatTotalAmountTrait();

        $obj->setTotalAmount(0.1);
        $this->assertEquals(0.1, $obj->getTotalAmount());
    }
}
