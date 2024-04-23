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

namespace WBW\Library\Common\Tests\Traits\Integers;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Integers\TestIntegerValueTrait;

/**
 * Integer value trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Integers
 */
class IntegerValueTraitTest extends AbstractTestCase {

    /**
     * Test setValue()
     *
     * @return void
     */
    public function testSetValue(): void {

        $obj = new TestIntegerValueTrait();

        $obj->setValue(1);
        $this->assertEquals(1, $obj->getValue());
    }
}
