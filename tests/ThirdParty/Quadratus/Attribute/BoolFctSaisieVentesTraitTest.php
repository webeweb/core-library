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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolFctSaisieVentesTrait;

/**
 * Fct saisie ventes trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolFctSaisieVentesTraitTest extends AbstractTestCase {

    /**
     * Tests the setFctSaisieVentes() method.
     *
     * @return void
     */
    public function testSetFctSaisieVentes() {

        $obj = new TestBoolFctSaisieVentesTrait();

        $obj->setFctSaisieVentes(true);
        $this->assertEquals(true, $obj->getFctSaisieVentes());
    }
}
