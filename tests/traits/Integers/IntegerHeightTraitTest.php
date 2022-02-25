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
use WBW\Library\Traits\Tests\Fixtures\Integers\TestIntegerHeightTrait;

/**
 * Integer height trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Integers
 */
class IntegerHeightTraitTest extends AbstractTestCase {

    /**
     * Tests setHeight()
     *
     * @return void
     */
    public function testSetHeight(): void {

        $obj = new TestIntegerHeightTrait();

        $obj->setHeight(1);
        $this->assertEquals(1, $obj->getHeight());
    }
}
