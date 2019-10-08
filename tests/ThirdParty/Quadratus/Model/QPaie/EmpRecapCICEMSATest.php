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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpRecapCICEMSA;

/**
 * Emp recap c i c e m s a model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpRecapCICEMSATest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmpRecapCICEMSA();

        $this->assertNull($obj->getCaisseCP());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeUnite());
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

        $obj = new EmpRecapCICEMSA();

        $obj->setCaisseCP(true);
        $this->assertEquals(true, $obj->getCaisseCP());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new EmpRecapCICEMSA();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeUnite() method.
     *
     * @return void
     */
    public function testSetCodeUnite() {

        $obj = new EmpRecapCICEMSA();

        $obj->setCodeUnite("codeUnite");
        $this->assertEquals("codeUnite", $obj->getCodeUnite());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new EmpRecapCICEMSA();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setNomEmploye() method.
     *
     * @return void
     */
    public function testSetNomEmploye() {

        $obj = new EmpRecapCICEMSA();

        $obj->setNomEmploye("nomEmploye");
        $this->assertEquals("nomEmploye", $obj->getNomEmploye());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new EmpRecapCICEMSA();

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

        $obj = new EmpRecapCICEMSA();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setRemunAssietteCICE() method.
     *
     * @return void
     */
    public function testSetRemunAssietteCICE() {

        $obj = new EmpRecapCICEMSA();

        $obj->setRemunAssietteCICE(10.092018);
        $this->assertEquals(10.092018, $obj->getRemunAssietteCICE());
    }

    /**
     * Tests the setRemunBrutCICE() method.
     *
     * @return void
     */
    public function testSetRemunBrutCICE() {

        $obj = new EmpRecapCICEMSA();

        $obj->setRemunBrutCICE(10.092018);
        $this->assertEquals(10.092018, $obj->getRemunBrutCICE());
    }

    /**
     * Tests the setSMICMCICE() method.
     *
     * @return void
     */
    public function testSetSMICMCICE() {

        $obj = new EmpRecapCICEMSA();

        $obj->setSMICMCICE(10.092018);
        $this->assertEquals(10.092018, $obj->getSMICMCICE());
    }

    /**
     * Tests the setSortieMois() method.
     *
     * @return void
     */
    public function testSetSortieMois() {

        $obj = new EmpRecapCICEMSA();

        $obj->setSortieMois(true);
        $this->assertEquals(true, $obj->getSortieMois());
    }
}
