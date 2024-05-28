<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Arrays;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Arrays\TestArrayDataTrait;

/**
 * Array data trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Arrays
 */
class ArrayDataTraitTest extends AbstractTestCase {

    /**
     * Test setData()
     *
     * @return void
     */
    public function testSetData(): void {

        $obj = new TestArrayDataTrait();

        $obj->setData([]);
        $this->assertEquals([], $obj->getData());
    }
}
