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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntGestionTarifsTransporteursNbDecTrait;

/**
 * Gestion tarifs transporteurs nb dec trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntGestionTarifsTransporteursNbDecTraitTest extends AbstractTestCase {

    /**
     * Tests the setGestionTarifsTransporteursNbDec() method.
     *
     * @return void
     */
    public function testSetGestionTarifsTransporteursNbDec() {

        $obj = new TestIntGestionTarifsTransporteursNbDecTrait();

        $obj->setGestionTarifsTransporteursNbDec(10);
        $this->assertEquals(10, $obj->getGestionTarifsTransporteursNbDec());
    }
}
