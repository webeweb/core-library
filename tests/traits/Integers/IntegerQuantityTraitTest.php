<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Integers;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Integers\TestIntegerQuantityTrait;

/**
 * Integer quantity trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Integers
 */
class IntegerQuantityTraitTest extends AbstractTestCase {

    /**
     * Tests setQuantity()
     *
     * @return void
     */
    public function testSetQuantity(): void {

        $obj = new TestIntegerQuantityTrait();

        $obj->setQuantity(1);
        $this->assertEquals(1, $obj->getQuantity());
    }
}
