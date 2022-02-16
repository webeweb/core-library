<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Floats;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Floats\TestFloatUnitValueTrait;

/**
 * Float unit value trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Floats
 */
class FloatUnitValueTraitTest extends AbstractTestCase {

    /**
     * Tests setUnitValue()
     *
     * @return void
     */
    public function testSetUnitValue(): void {

        $obj = new TestFloatUnitValueTrait();

        $obj->setUnitValue(0.1);
        $this->assertEquals(0.1, $obj->getUnitValue());
    }
}
