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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCumCpPris1Trait;

/**
 * Cum cp pris_1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCumCpPris1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCumCpPris1() method.
     *
     * @return void
     */
    public function testSetCumCpPris1() {

        $obj = new TestFloatCumCpPris1Trait();

        $obj->setCumCpPris1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpPris1());
    }
}
