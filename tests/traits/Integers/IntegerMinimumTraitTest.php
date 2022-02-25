<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Integers;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Integers\TestIntegerMinimumTrait;

/**
 * Integer minimum trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Integers
 */
class IntegerMinimumTraitTest extends AbstractTestCase {

    /**
     * Tests setMinimum()
     *
     * @return void
     */
    public function testSetMinimum(): void {

        $obj = new TestIntegerMinimumTrait();

        $obj->setMinimum(1);
        $this->assertEquals(1, $obj->getMinimum());
    }
}
