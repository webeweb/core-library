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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolRemiseSupAchat3EnMontantTrait;

/**
 * Remise sup achat3 en montant trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolRemiseSupAchat3EnMontantTraitTest extends AbstractTestCase {

    /**
     * Tests the setRemiseSupAchat3EnMontant() method.
     *
     * @return void
     */
    public function testSetRemiseSupAchat3EnMontant() {

        $obj = new TestBoolRemiseSupAchat3EnMontantTrait();

        $obj->setRemiseSupAchat3EnMontant(true);
        $this->assertEquals(true, $obj->getRemiseSupAchat3EnMontant());
    }
}
