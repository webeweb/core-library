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
use WBW\Library\Traits\Tests\Fixtures\Integers\TestIntegerMinHeightTrait;

/**
 * Integer min height trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Integers
 */
class IntegerMinHeightTraitTest extends AbstractTestCase {

    /**
     * Tests setMinHeight()
     *
     * @return void
     */
    public function testSetMinHeight(): void {

        $obj = new TestIntegerMinHeightTrait();

        $obj->setMinHeight(1280);
        $this->assertEquals(1280, $obj->getMinHeight());
    }
}
