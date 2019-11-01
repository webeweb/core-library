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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolPasDeLienComptabiliteTrait;

/**
 * Pas de lien comptabilite trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolPasDeLienComptabiliteTraitTest extends AbstractTestCase {

    /**
     * Tests the setPasDeLienComptabilite() method.
     *
     * @return void
     */
    public function testSetPasDeLienComptabilite() {

        $obj = new TestBoolPasDeLienComptabiliteTrait();

        $obj->setPasDeLienComptabilite(true);
        $this->assertEquals(true, $obj->getPasDeLienComptabilite());
    }
}
