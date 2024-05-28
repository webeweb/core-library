<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Integers;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Integers\TestIntegerCountTrait;

/**
 * Integer count trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Integers
 */
class IntegerCountTraitTest extends AbstractTestCase {

    /**
     * Test setCount()
     *
     * @return void
     */
    public function testSetCount(): void {

        $obj = new TestIntegerCountTrait();

        $obj->setCount(1);
        $this->assertEquals(1, $obj->getCount());
    }
}
