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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCumCpDus1Trait;

/**
 * Cum cp dus_1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCumCpDus1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCumCpDus1() method.
     *
     * @return void
     */
    public function testSetCumCpDus1() {

        $obj = new TestFloatCumCpDus1Trait();

        $obj->setCumCpDus1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpDus1());
    }
}
