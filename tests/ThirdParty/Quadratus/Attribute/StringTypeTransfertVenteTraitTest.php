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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeTransfertVenteTrait;

/**
 * Type transfert vente trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeTransfertVenteTraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeTransfertVente() method.
     *
     * @return void
     */
    public function testSetTypeTransfertVente() {

        $obj = new TestStringTypeTransfertVenteTrait();

        $obj->setTypeTransfertVente("typeTransfertVente");
        $this->assertEquals("typeTransfertVente", $obj->getTypeTransfertVente());
    }
}
