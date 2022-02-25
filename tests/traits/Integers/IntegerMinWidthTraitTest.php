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
use WBW\Library\Traits\Tests\Fixtures\Integers\TestIntegerMinWidthTrait;

/**
 * Integer min width trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Integers
 */
class IntegerMinWidthTraitTest extends AbstractTestCase {

    /**
     * Tests setMinWidth()
     *
     * @return void
     */
    public function testSetMinWidth(): void {

        $obj = new TestIntegerMinWidthTrait();

        $obj->setMinWidth(1280);
        $this->assertEquals(1280, $obj->getMinWidth());
    }
}
