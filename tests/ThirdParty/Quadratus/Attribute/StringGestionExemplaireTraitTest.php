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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringGestionExemplaireTrait;

/**
 * Gestion exemplaire trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringGestionExemplaireTraitTest extends AbstractTestCase {

    /**
     * Tests the setGestionExemplaire() method.
     *
     * @return void
     */
    public function testSetGestionExemplaire() {

        $obj = new TestStringGestionExemplaireTrait();

        $obj->setGestionExemplaire("gestionExemplaire");
        $this->assertEquals("gestionExemplaire", $obj->getGestionExemplaire());
    }
}
