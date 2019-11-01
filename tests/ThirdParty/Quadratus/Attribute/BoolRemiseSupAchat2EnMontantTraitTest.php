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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolRemiseSupAchat2EnMontantTrait;

/**
 * Remise sup achat2 en montant trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolRemiseSupAchat2EnMontantTraitTest extends AbstractTestCase {

    /**
     * Tests the setRemiseSupAchat2EnMontant() method.
     *
     * @return void
     */
    public function testSetRemiseSupAchat2EnMontant() {

        $obj = new TestBoolRemiseSupAchat2EnMontantTrait();

        $obj->setRemiseSupAchat2EnMontant(true);
        $this->assertEquals(true, $obj->getRemiseSupAchat2EnMontant());
    }
}
