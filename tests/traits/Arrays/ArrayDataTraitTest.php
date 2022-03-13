<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Arrays;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Arrays\TestArrayDataTrait;

/**
 * Array data trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Arrays
 */
class ArrayDataTraitTest extends AbstractTestCase {

    /**
     * Tests setData()
     *
     * @return void
     */
    public function testSetData(): void {

        $obj = new TestArrayDataTrait();

        $obj->setData([]);
        $this->assertEquals([], $obj->getData());
    }
}
