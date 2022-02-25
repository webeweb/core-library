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
use WBW\Library\Traits\Tests\Fixtures\Integers\TestIntegerMaxWidthTrait;

/**
 * Integer max width trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Integers
 */
class IntegerMaxWidthTraitTest extends AbstractTestCase {

    /**
     * Tests setMaxWidth()
     *
     * @return void
     */
    public function testSetMaxWidth(): void {

        $obj = new TestIntegerMaxWidthTrait();

        $obj->setMaxWidth(1920);
        $this->assertEquals(1920, $obj->getMaxWidth());
    }
}
