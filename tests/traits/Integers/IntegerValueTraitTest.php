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
use WBW\Library\Traits\Tests\Fixtures\Integers\TestIntegerValueTrait;

/**
 * Integer value trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Integers
 */
class IntegerValueTraitTest extends AbstractTestCase {

    /**
     * Tests setValue()
     *
     * @return void
     */
    public function testSetValue(): void {

        $obj = new TestIntegerValueTrait();

        $obj->setValue(1);
        $this->assertEquals(1, $obj->getValue());
    }
}
