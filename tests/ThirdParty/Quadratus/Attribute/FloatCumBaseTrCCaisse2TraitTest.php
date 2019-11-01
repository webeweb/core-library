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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCumBaseTrCCaisse2Trait;

/**
 * Cum base tr c caisse2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCumBaseTrCCaisse2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCumBaseTrCCaisse2() method.
     *
     * @return void
     */
    public function testSetCumBaseTrCCaisse2() {

        $obj = new TestFloatCumBaseTrCCaisse2Trait();

        $obj->setCumBaseTrCCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrCCaisse2());
    }
}
