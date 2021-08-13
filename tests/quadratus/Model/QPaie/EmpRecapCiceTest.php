<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\EmpRecapCice;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Emp recap cice test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class EmpRecapCiceTest extends AbstractTestCase {

    /**
     * Tests the setCaisseCp() method.
     *
     * @return void
     */
    public function testSetCaisseCp(): void {

        $obj = new EmpRecapCice();

        $obj->setCaisseCp(true);
        $this->assertEquals(true, $obj->getCaisseCp());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre(): void {

        $obj = new EmpRecapCice();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new EmpRecapCice();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new EmpRecapCice();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setFractionEtab() method.
     *
     * @return void
     */
    public function testSetFractionEtab(): void {

        $obj = new EmpRecapCice();

        $obj->setFractionEtab("fractionEtab");
        $this->assertEquals("fractionEtab", $obj->getFractionEtab());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new EmpRecapCice();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setNomEmploye() method.
     *
     * @return void
     */
    public function testSetNomEmploye(): void {

        $obj = new EmpRecapCice();

        $obj->setNomEmploye("nomEmploye");
        $this->assertEquals("nomEmploye", $obj->getNomEmploye());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new EmpRecapCice();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new EmpRecapCice();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setRemunAssietteCice() method.
     *
     * @return void
     */
    public function testSetRemunAssietteCice(): void {

        $obj = new EmpRecapCice();

        $obj->setRemunAssietteCice(10.092018);
        $this->assertEquals(10.092018, $obj->getRemunAssietteCice());
    }

    /**
     * Tests the setRemunBrutCice() method.
     *
     * @return void
     */
    public function testSetRemunBrutCice(): void {

        $obj = new EmpRecapCice();

        $obj->setRemunBrutCice(10.092018);
        $this->assertEquals(10.092018, $obj->getRemunBrutCice());
    }

    /**
     * Tests the setSmicMcice() method.
     *
     * @return void
     */
    public function testSetSmicMcice(): void {

        $obj = new EmpRecapCice();

        $obj->setSmicMcice(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicMcice());
    }

    /**
     * Tests the setSortieMois() method.
     *
     * @return void
     */
    public function testSetSortieMois(): void {

        $obj = new EmpRecapCice();

        $obj->setSortieMois(true);
        $this->assertEquals(true, $obj->getSortieMois());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EmpRecapCice();

        $this->assertNull($obj->getCaisseCp());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getFractionEtab());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getRemunAssietteCice());
        $this->assertNull($obj->getRemunBrutCice());
        $this->assertNull($obj->getSmicMcice());
        $this->assertNull($obj->getSortieMois());
    }
}
