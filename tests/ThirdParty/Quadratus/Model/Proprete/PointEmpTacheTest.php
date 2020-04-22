<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\PointEmpTache;

/**
 * Point emp tache test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class PointEmpTacheTest extends AbstractTestCase {

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new PointEmpTache();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new PointEmpTache();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new PointEmpTache();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaboValid() method.
     *
     * @return void
     */
    public function testSetCodeCollaboValid() {

        $obj = new PointEmpTache();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new PointEmpTache();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new PointEmpTache();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache() {

        $obj = new PointEmpTache();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests the setDateValidationSynchro() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro() {

        // Set a Date/time mock.
        $dateValidationSynchro = new DateTime("2018-09-10");

        $obj = new PointEmpTache();

        $obj->setDateValidationSynchro($dateValidationSynchro);
        $this->assertSame($dateValidationSynchro, $obj->getDateValidationSynchro());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new PointEmpTache();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setHRemplMens() method.
     *
     * @return void
     */
    public function testSetHRemplMens() {

        $obj = new PointEmpTache();

        $obj->setHRemplMens(10.092018);
        $this->assertEquals(10.092018, $obj->getHRemplMens());
    }

    /**
     * Tests the setMensualisation() method.
     *
     * @return void
     */
    public function testSetMensualisation() {

        $obj = new PointEmpTache();

        $obj->setMensualisation(10.092018);
        $this->assertEquals(10.092018, $obj->getMensualisation());
    }

    /**
     * Tests the setMtPrime1Chantier() method.
     *
     * @return void
     */
    public function testSetMtPrime1Chantier() {

        $obj = new PointEmpTache();

        $obj->setMtPrime1Chantier(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPrime1Chantier());
    }

    /**
     * Tests the setMtPrime2Chantier() method.
     *
     * @return void
     */
    public function testSetMtPrime2Chantier() {

        $obj = new PointEmpTache();

        $obj->setMtPrime2Chantier(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPrime2Chantier());
    }

    /**
     * Tests the setMtPrime3Chantier() method.
     *
     * @return void
     */
    public function testSetMtPrime3Chantier() {

        $obj = new PointEmpTache();

        $obj->setMtPrime3Chantier(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPrime3Chantier());
    }

    /**
     * Tests the setNbHeures1Rs() method.
     *
     * @return void
     */
    public function testSetNbHeures1Rs() {

        $obj = new PointEmpTache();

        $obj->setNbHeures1Rs(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures1Rs());
    }

    /**
     * Tests the setNbHeures1Tp() method.
     *
     * @return void
     */
    public function testSetNbHeures1Tp() {

        $obj = new PointEmpTache();

        $obj->setNbHeures1Tp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures1Tp());
    }

    /**
     * Tests the setNbHeures2Rs() method.
     *
     * @return void
     */
    public function testSetNbHeures2Rs() {

        $obj = new PointEmpTache();

        $obj->setNbHeures2Rs(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures2Rs());
    }

    /**
     * Tests the setNbHeures2Tp() method.
     *
     * @return void
     */
    public function testSetNbHeures2Tp() {

        $obj = new PointEmpTache();

        $obj->setNbHeures2Tp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures2Tp());
    }

    /**
     * Tests the setNbPaniers() method.
     *
     * @return void
     */
    public function testSetNbPaniers() {

        $obj = new PointEmpTache();

        $obj->setNbPaniers(10.092018);
        $this->assertEquals(10.092018, $obj->getNbPaniers());
    }

    /**
     * Tests the setNumBt() method.
     *
     * @return void
     */
    public function testSetNumBt() {

        $obj = new PointEmpTache();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new PointEmpTache();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setTxHoraire1Rs() method.
     *
     * @return void
     */
    public function testSetTxHoraire1Rs() {

        $obj = new PointEmpTache();

        $obj->setTxHoraire1Rs(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHoraire1Rs());
    }

    /**
     * Tests the setTxHoraire1Tp() method.
     *
     * @return void
     */
    public function testSetTxHoraire1Tp() {

        $obj = new PointEmpTache();

        $obj->setTxHoraire1Tp(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHoraire1Tp());
    }

    /**
     * Tests the setTxHoraire2Rs() method.
     *
     * @return void
     */
    public function testSetTxHoraire2Rs() {

        $obj = new PointEmpTache();

        $obj->setTxHoraire2Rs(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHoraire2Rs());
    }

    /**
     * Tests the setTxHoraire2Tp() method.
     *
     * @return void
     */
    public function testSetTxHoraire2Tp() {

        $obj = new PointEmpTache();

        $obj->setTxHoraire2Tp(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHoraire2Tp());
    }

    /**
     * Tests the setUniqIdSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIdSynchro() {

        $obj = new PointEmpTache();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new PointEmpTache();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getHRemplMens());
        $this->assertNull($obj->getMensualisation());
        $this->assertNull($obj->getMtPrime1Chantier());
        $this->assertNull($obj->getMtPrime2Chantier());
        $this->assertNull($obj->getMtPrime3Chantier());
        $this->assertNull($obj->getNbHeures1Rs());
        $this->assertNull($obj->getNbHeures1Tp());
        $this->assertNull($obj->getNbHeures2Rs());
        $this->assertNull($obj->getNbHeures2Tp());
        $this->assertNull($obj->getNbPaniers());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTxHoraire1Rs());
        $this->assertNull($obj->getTxHoraire1Tp());
        $this->assertNull($obj->getTxHoraire2Rs());
        $this->assertNull($obj->getTxHoraire2Tp());
        $this->assertNull($obj->getUniqIdSynchro());
    }
}
