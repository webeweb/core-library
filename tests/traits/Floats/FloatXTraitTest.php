<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Floats;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Floats\TestFloatXTrait;

/**
 * Float x trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Floats
 */
class FloatXTraitTest extends AbstractTestCase {

    /**
     * Tests setX()
     *
     * @return void
     */
    public function testSetX(): void {

        $obj = new TestFloatXTrait();

        $obj->setX(0.123456789);
        $this->assertEquals(0.123456789, $obj->getX());
        $this->assertEquals(0, $obj->getXInt());
    }
}
