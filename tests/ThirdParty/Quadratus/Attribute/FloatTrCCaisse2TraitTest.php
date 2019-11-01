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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTrCCaisse2Trait;

/**
 * Tr c caisse2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTrCCaisse2TraitTest extends AbstractTestCase {

    /**
     * Tests the setTrCCaisse2() method.
     *
     * @return void
     */
    public function testSetTrCCaisse2() {

        $obj = new TestFloatTrCCaisse2Trait();

        $obj->setTrCCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getTrCCaisse2());
    }
}
