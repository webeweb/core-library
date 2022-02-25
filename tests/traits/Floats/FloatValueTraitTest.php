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
use WBW\Library\Traits\Tests\Fixtures\Floats\TestFloatValueTrait;

/**
 * Float value trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Floats
 */
class FloatValueTraitTest extends AbstractTestCase {

    /**
     * Tests setValue()
     *
     * @return void
     */
    public function testSetValue(): void {

        $obj = new TestFloatValueTrait();

        $obj->setValue(0.123456789);
        $this->assertEquals(0.123456789, $obj->getValue());
    }
}
