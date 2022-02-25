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

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\EmpRecapLodeom;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Emp recap lodeom test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class EmpRecapLodeomTest extends AbstractTestCase {

    /**
     * Tests setBrut()
     *
     * @return void
     */
    public function testSetBrut(): void {

        $obj = new EmpRecapLodeom();

        $obj->setBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getBrut());
    }

    /**
     * Tests setCodeCentre()
     *
     * @return void
     */
    public function testSetCodeCentre(): void {

        $obj = new EmpRecapLodeom();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new EmpRecapLodeom();

        $obj->setCodeEtablissement("codeEtablissement");
        $this->assertEquals("codeEtablissement", $obj->getCodeEtablissement());
    }

    /**
     * Tests setCodeOrganisme()
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new EmpRecapLodeom();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests setDifference()
     *
     * @return void
     */
    public function testSetDifference(): void {

        $obj = new EmpRecapLodeom();

        $obj->setDifference(10.092018);
        $this->assertEquals(10.092018, $obj->getDifference());
    }

    /**
     * Tests setIndicePeriode()
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new EmpRecapLodeom();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests setNbhr()
     *
     * @return void
     */
    public function testSetNbhr(): void {

        $obj = new EmpRecapLodeom();

        $obj->setNbhr(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhr());
    }

    /**
     * Tests setNomEmploye()
     *
     * @return void
     */
    public function testSetNomEmploye(): void {

        $obj = new EmpRecapLodeom();

        $obj->setNomEmploye("nomEmploye");
        $this->assertEquals("nomEmploye", $obj->getNomEmploye());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new EmpRecapLodeom();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setPeriode()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new EmpRecapLodeom();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests setReducBul()
     *
     * @return void
     */
    public function testSetReducBul(): void {

        $obj = new EmpRecapLodeom();

        $obj->setReducBul(10.092018);
        $this->assertEquals(10.092018, $obj->getReducBul());
    }

    /**
     * Tests setReducRecalc()
     *
     * @return void
     */
    public function testSetReducRecalc(): void {

        $obj = new EmpRecapLodeom();

        $obj->setReducRecalc(10.092018);
        $this->assertEquals(10.092018, $obj->getReducRecalc());
    }

    /**
     * Tests setShb()
     *
     * @return void
     */
    public function testSetShb(): void {

        $obj = new EmpRecapLodeom();

        $obj->setShb(10.092018);
        $this->assertEquals(10.092018, $obj->getShb());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EmpRecapLodeom();

        $this->assertNull($obj->getBrut());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getDifference());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNbhr());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getReducBul());
        $this->assertNull($obj->getReducRecalc());
        $this->assertNull($obj->getShb());
    }
}
