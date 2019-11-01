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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCompteVentilTaxeDeeeTrait;

/**
 * Compte ventil taxe d e e e trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCompteVentilTaxeDeeeTraitTest extends AbstractTestCase {

    /**
     * Tests the setCompteVentilTaxeDeee() method.
     *
     * @return void
     */
    public function testSetCompteVentilTaxeDeee() {

        $obj = new TestStringCompteVentilTaxeDeeeTrait();

        $obj->setCompteVentilTaxeDeee("compteVentilTaxeDeee");
        $this->assertEquals("compteVentilTaxeDeee", $obj->getCompteVentilTaxeDeee());
    }
}
