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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolRemiseSupAchat1EnMontantTrait;

/**
 * Remise sup achat1 en montant trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolRemiseSupAchat1EnMontantTraitTest extends AbstractTestCase {

    /**
     * Tests the setRemiseSupAchat1EnMontant() method.
     *
     * @return void
     */
    public function testSetRemiseSupAchat1EnMontant() {

        $obj = new TestBoolRemiseSupAchat1EnMontantTrait();

        $obj->setRemiseSupAchat1EnMontant(true);
        $this->assertEquals(true, $obj->getRemiseSupAchat1EnMontant());
    }
}
