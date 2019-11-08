<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpRecapCodePenibilite;

/**
 * Emp recap code penibilite test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpRecapCodePenibiliteTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmpRecapCodePenibilite();

        $this->assertNull($obj->getCodePenibilite());
        $this->assertNull($obj->getIdRecap());
        $this->assertNull($obj->getNumeroOrdre());
    }

    /**
     * Tests the setCodePenibilite() method.
     *
     * @return void
     */
    public function testSetCodePenibilite() {

        $obj = new EmpRecapCodePenibilite();

        $obj->setCodePenibilite("codePenibilite");
        $this->assertEquals("codePenibilite", $obj->getCodePenibilite());
    }

    /**
     * Tests the setIdRecap() method.
     *
     * @return void
     */
    public function testSetIdRecap() {

        $obj = new EmpRecapCodePenibilite();

        $obj->setIdRecap(10);
        $this->assertEquals(10, $obj->getIdRecap());
    }

    /**
     * Tests the setNumeroOrdre() method.
     *
     * @return void
     */
    public function testSetNumeroOrdre() {

        $obj = new EmpRecapCodePenibilite();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }
}
