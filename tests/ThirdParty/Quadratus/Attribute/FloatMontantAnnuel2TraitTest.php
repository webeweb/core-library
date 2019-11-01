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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMontantAnnuel2Trait;

/**
 * Montant annuel2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMontantAnnuel2TraitTest extends AbstractTestCase {

    /**
     * Tests the setMontantAnnuel2() method.
     *
     * @return void
     */
    public function testSetMontantAnnuel2() {

        $obj = new TestFloatMontantAnnuel2Trait();

        $obj->setMontantAnnuel2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAnnuel2());
    }
}
