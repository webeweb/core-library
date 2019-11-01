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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolPjMailCliCouponPaiementTrait;

/**
 * Pj mail cli coupon paiement trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolPjMailCliCouponPaiementTraitTest extends AbstractTestCase {

    /**
     * Tests the setPjMailCliCouponPaiement() method.
     *
     * @return void
     */
    public function testSetPjMailCliCouponPaiement() {

        $obj = new TestBoolPjMailCliCouponPaiementTrait();

        $obj->setPjMailCliCouponPaiement(true);
        $this->assertEquals(true, $obj->getPjMailCliCouponPaiement());
    }
}
