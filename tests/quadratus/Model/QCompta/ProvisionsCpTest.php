<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use WBW\Library\Quadratus\Model\QCompta\ProvisionsCp;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Provisions cp test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class ProvisionsCpTest extends AbstractTestCase {

    /**
     * Tests setCentre()
     *
     * @return void
     */
    public function testSetCentre(): void {

        $obj = new ProvisionsCp();

        $obj->setCentre("centre");
        $this->assertEquals("centre", $obj->getCentre());
    }

    /**
     * Tests setColPourSalRef()
     *
     * @return void
     */
    public function testSetColPourSalRef(): void {

        $obj = new ProvisionsCp();

        $obj->setColPourSalRef("colPourSalRef");
        $this->assertEquals("colPourSalRef", $obj->getColPourSalRef());
    }

    /**
     * Tests setDernierSalaire()
     *
     * @return void
     */
    public function testSetDernierSalaire(): void {

        $obj = new ProvisionsCp();

        $obj->setDernierSalaire(10.092018);
        $this->assertEquals(10.092018, $obj->getDernierSalaire());
    }

    /**
     * Tests setMoyenneSalaires()
     *
     * @return void
     */
    public function testSetMoyenneSalaires(): void {

        $obj = new ProvisionsCp();

        $obj->setMoyenneSalaires(10.092018);
        $this->assertEquals(10.092018, $obj->getMoyenneSalaires());
    }

    /**
     * Tests setNature()
     *
     * @return void
     */
    public function testSetNature(): void {

        $obj = new ProvisionsCp();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Tests setNomCompletEmp()
     *
     * @return void
     */
    public function testSetNomCompletEmp(): void {

        $obj = new ProvisionsCp();

        $obj->setNomCompletEmp("nomCompletEmp");
        $this->assertEquals("nomCompletEmp", $obj->getNomCompletEmp());
    }

    /**
     * Tests setNumeroEmp()
     *
     * @return void
     */
    public function testSetNumeroEmp(): void {

        $obj = new ProvisionsCp();

        $obj->setNumeroEmp("numeroEmp");
        $this->assertEquals("numeroEmp", $obj->getNumeroEmp());
    }

    /**
     * Tests setProvisionTotale()
     *
     * @return void
     */
    public function testSetProvisionTotale(): void {

        $obj = new ProvisionsCp();

        $obj->setProvisionTotale(10.092018);
        $this->assertEquals(10.092018, $obj->getProvisionTotale());
    }

    /**
     * Tests setSalaireRef()
     *
     * @return void
     */
    public function testSetSalaireRef(): void {

        $obj = new ProvisionsCp();

        $obj->setSalaireRef(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireRef());
    }

    /**
     * Tests setSoldeJoursN()
     *
     * @return void
     */
    public function testSetSoldeJoursN(): void {

        $obj = new ProvisionsCp();

        $obj->setSoldeJoursN(10.092018);
        $this->assertEquals(10.092018, $obj->getSoldeJoursN());
    }

    /**
     * Tests setSoldeJoursN1()
     *
     * @return void
     */
    public function testSetSoldeJoursN1(): void {

        $obj = new ProvisionsCp();

        $obj->setSoldeJoursN1(10.092018);
        $this->assertEquals(10.092018, $obj->getSoldeJoursN1());
    }

    /**
     * Tests setTxChargesSoc()
     *
     * @return void
     */
    public function testSetTxChargesSoc(): void {

        $obj = new ProvisionsCp();

        $obj->setTxChargesSoc(10.092018);
        $this->assertEquals(10.092018, $obj->getTxChargesSoc());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ProvisionsCp();

        $this->assertNull($obj->getCentre());
        $this->assertNull($obj->getColPourSalRef());
        $this->assertNull($obj->getDernierSalaire());
        $this->assertNull($obj->getMoyenneSalaires());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNomCompletEmp());
        $this->assertNull($obj->getNumeroEmp());
        $this->assertNull($obj->getProvisionTotale());
        $this->assertNull($obj->getSalaireRef());
        $this->assertNull($obj->getSoldeJoursN());
        $this->assertNull($obj->getSoldeJoursN1());
        $this->assertNull($obj->getTxChargesSoc());
    }
}
