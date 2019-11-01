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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTvaVenteTrait;

/**
 * Code tva vente trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTvaVenteTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTvaVente() method.
     *
     * @return void
     */
    public function testSetCodeTvaVente() {

        $obj = new TestStringCodeTvaVenteTrait();

        $obj->setCodeTvaVente("codeTvaVente");
        $this->assertEquals("codeTvaVente", $obj->getCodeTvaVente());
    }
}
