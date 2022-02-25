<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\EmpRecapCodePenibilite;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Emp recap code penibilite test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class EmpRecapCodePenibiliteTest extends AbstractTestCase {

    /**
     * Tests setCodePenibilite()
     *
     * @return void
     */
    public function testSetCodePenibilite(): void {

        $obj = new EmpRecapCodePenibilite();

        $obj->setCodePenibilite("codePenibilite");
        $this->assertEquals("codePenibilite", $obj->getCodePenibilite());
    }

    /**
     * Tests setIdRecap()
     *
     * @return void
     */
    public function testSetIdRecap(): void {

        $obj = new EmpRecapCodePenibilite();

        $obj->setIdRecap(10);
        $this->assertEquals(10, $obj->getIdRecap());
    }

    /**
     * Tests setNumeroOrdre()
     *
     * @return void
     */
    public function testSetNumeroOrdre(): void {

        $obj = new EmpRecapCodePenibilite();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EmpRecapCodePenibilite();

        $this->assertNull($obj->getCodePenibilite());
        $this->assertNull($obj->getIdRecap());
        $this->assertNull($obj->getNumeroOrdre());
    }
}
