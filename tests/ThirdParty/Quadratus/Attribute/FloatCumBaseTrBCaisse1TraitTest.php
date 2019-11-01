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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCumBaseTrBCaisse1Trait;

/**
 * Cum base tr b caisse1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCumBaseTrBCaisse1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCumBaseTrBCaisse1() method.
     *
     * @return void
     */
    public function testSetCumBaseTrBCaisse1() {

        $obj = new TestFloatCumBaseTrBCaisse1Trait();

        $obj->setCumBaseTrBCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrBCaisse1());
    }
}
