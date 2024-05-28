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

namespace WBW\Library\Common\Tests\Traits\Integers;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Integers\TestIntegerQuantityTrait;

/**
 * Integer quantity trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Integers
 */
class IntegerQuantityTraitTest extends AbstractTestCase {

    /**
     * Test setQuantity()
     *
     * @return void
     */
    public function testSetQuantity(): void {

        $obj = new TestIntegerQuantityTrait();

        $obj->setQuantity(1);
        $this->assertEquals(1, $obj->getQuantity());
    }
}
