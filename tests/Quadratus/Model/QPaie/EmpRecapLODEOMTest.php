<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\EmpRecapLODEOM;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Emp recap l o d e o m model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class EmpRecapLODEOMTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmpRecapLODEOM();

        $this->assertNull($obj->getBrut());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getDifference());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNBHR());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getReducBul());
        $this->assertNull($obj->getReducRecalc());
        $this->assertNull($obj->getSHB());
    }

    /**
     * Tests the setBrut() method.
     *
     * @return void
     */
    public function testSetBrut() {

        $obj = new EmpRecapLODEOM();

        $obj->setBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getBrut());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre() {

        $obj = new EmpRecapLODEOM();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new EmpRecapLODEOM();

        $obj->setCodeEtablissement("codeEtablissement");
        $this->assertEquals("codeEtablissement", $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme() {

        $obj = new EmpRecapLODEOM();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setDifference() method.
     *
     * @return void
     */
    public function testSetDifference() {

        $obj = new EmpRecapLODEOM();

        $obj->setDifference(10.092018);
        $this->assertEquals(10.092018, $obj->getDifference());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new EmpRecapLODEOM();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setNBHR() method.
     *
     * @return void
     */
    public function testSetNBHR() {

        $obj = new EmpRecapLODEOM();

        $obj->setNBHR(10.092018);
        $this->assertEquals(10.092018, $obj->getNBHR());
    }

    /**
     * Tests the setNomEmploye() method.
     *
     * @return void
     */
    public function testSetNomEmploye() {

        $obj = new EmpRecapLODEOM();

        $obj->setNomEmploye("nomEmploye");
        $this->assertEquals("nomEmploye", $obj->getNomEmploye());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new EmpRecapLODEOM();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     */
    public function testSetPeriode() {

        $obj = new EmpRecapLODEOM();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setReducBul() method.
     *
     * @return void
     */
    public function testSetReducBul() {

        $obj = new EmpRecapLODEOM();

        $obj->setReducBul(10.092018);
        $this->assertEquals(10.092018, $obj->getReducBul());
    }

    /**
     * Tests the setReducRecalc() method.
     *
     * @return void
     */
    public function testSetReducRecalc() {

        $obj = new EmpRecapLODEOM();

        $obj->setReducRecalc(10.092018);
        $this->assertEquals(10.092018, $obj->getReducRecalc());
    }

    /**
     * Tests the setSHB() method.
     *
     * @return void
     */
    public function testSetSHB() {

        $obj = new EmpRecapLODEOM();

        $obj->setSHB(10.092018);
        $this->assertEquals(10.092018, $obj->getSHB());
    }

}
