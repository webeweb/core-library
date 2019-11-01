<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCumDifDus1Trait;

/**
 * Cum d i f dus_1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCumDifDus1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCumDifDus1() method.
     *
     * @return void
     */
    public function testSetCumDifDus1() {

        $obj = new TestFloatCumDifDus1Trait();

        $obj->setCumDifDus1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumDifDus1());
    }
}
