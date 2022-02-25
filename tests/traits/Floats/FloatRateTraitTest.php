<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Floats;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Floats\TestFloatRateTrait;

/**
 * Float rate trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Floats
 */
class FloatRateTraitTest extends AbstractTestCase {

    /**
     * Tests setRate()
     *
     * @return void
     */
    public function testSetRate(): void {

        $obj = new TestFloatRateTrait();

        $obj->setRate(0.123456789);
        $this->assertEquals(0.123456789, $obj->getRate());
    }
}
