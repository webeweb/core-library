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

use WBW\Library\Common\Tests\Fixtures\Traits\Floats\TestFloatTotalAmountTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Float total amount trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Floats
 */
class FloatTotalAmountTraitTest extends AbstractTestCase {

    /**
     * Test setTotalAmount()
     *
     * @return void
     */
    public function testSetTotalAmount(): void {

        $obj = new TestFloatTotalAmountTrait();

        $obj->setTotalAmount(0.1);
        $this->assertEquals(0.1, $obj->getTotalAmount());
    }
}
