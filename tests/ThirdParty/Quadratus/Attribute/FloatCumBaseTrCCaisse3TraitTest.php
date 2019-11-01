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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCumBaseTrCCaisse3Trait;

/**
 * Cum base tr c caisse3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCumBaseTrCCaisse3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCumBaseTrCCaisse3() method.
     *
     * @return void
     */
    public function testSetCumBaseTrCCaisse3() {

        $obj = new TestFloatCumBaseTrCCaisse3Trait();

        $obj->setCumBaseTrCCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrCCaisse3());
    }
}
