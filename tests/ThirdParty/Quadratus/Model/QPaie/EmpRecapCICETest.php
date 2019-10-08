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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpRecapCICE;

/**
 * Emp recap c i c e model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpRecapCICETest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmpRecapCICE();

        $this->assertNull($obj->getCaisseCP());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getFractionEtab());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getRemunAssietteCICE());
        $this->assertNull($obj->getRemunBrutCICE());
        $this->assertNull($obj->getSMICMCICE());
        $this->assertNull($obj->getSortieMois());
    }

    /**
     * Tests the setCaisseCP() method.
     *
     * @return void
     */
    public function testSetCaisseCP() {

        $obj = new EmpRecapCICE();

        $obj->setCaisseCP(true);
        $this->assertEquals(true, $obj->getCaisseCP());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre() {

        $obj = new EmpRecapCICE();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new EmpRecapCICE();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme() {

        $obj = new EmpRecapCICE();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setFractionEtab() method.
     *
     * @return void
     */
    public function testSetFractionEtab() {

        $obj = new EmpRecapCICE();

        $obj->setFractionEtab("fractionEtab");
        $this->assertEquals("fractionEtab", $obj->getFractionEtab());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new EmpRecapCICE();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setNomEmploye() method.
     *
     * @return void
     */
    public function testSetNomEmploye() {

        $obj = new EmpRecapCICE();

        $obj->setNomEmploye("nomEmploye");
        $this->assertEquals("nomEmploye", $obj->getNomEmploye());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new EmpRecapCICE();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new EmpRecapCICE();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setRemunAssietteCICE() method.
     *
     * @return void
     */
    public function testSetRemunAssietteCICE() {

        $obj = new EmpRecapCICE();

        $obj->setRemunAssietteCICE(10.092018);
        $this->assertEquals(10.092018, $obj->getRemunAssietteCICE());
    }

    /**
     * Tests the setRemunBrutCICE() method.
     *
     * @return void
     */
    public function testSetRemunBrutCICE() {

        $obj = new EmpRecapCICE();

        $obj->setRemunBrutCICE(10.092018);
        $this->assertEquals(10.092018, $obj->getRemunBrutCICE());
    }

    /**
     * Tests the setSMICMCICE() method.
     *
     * @return void
     */
    public function testSetSMICMCICE() {

        $obj = new EmpRecapCICE();

        $obj->setSMICMCICE(10.092018);
        $this->assertEquals(10.092018, $obj->getSMICMCICE());
    }

    /**
     * Tests the setSortieMois() method.
     *
     * @return void
     */
    public function testSetSortieMois() {

        $obj = new EmpRecapCICE();

        $obj->setSortieMois(true);
        $this->assertEquals(true, $obj->getSortieMois());
    }
}
