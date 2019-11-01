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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCumTrCCaisse1Trait;

/**
 * Cum tr c caisse1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCumTrCCaisse1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCumTrCCaisse1() method.
     *
     * @return void
     */
    public function testSetCumTrCCaisse1() {

        $obj = new TestFloatCumTrCCaisse1Trait();

        $obj->setCumTrCCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrCCaisse1());
    }
}
