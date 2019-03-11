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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\PointEmpTache;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Point emp tache model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class PointEmpTacheTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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
        $this->assertNull($obj->getNbHeures1RS());
        $this->assertNull($obj->getNbHeures1TP());
        $this->assertNull($obj->getNbHeures2RS());
        $this->assertNull($obj->getNbHeures2TP());
        $this->assertNull($obj->getNbPaniers());
        $this->assertNull($obj->getNumBT());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTxHoraire1RS());
        $this->assertNull($obj->getTxHoraire1TP());
        $this->assertNull($obj->getTxHoraire2RS());
        $this->assertNull($obj->getTxHoraire2TP());
        $this->assertNull($obj->getUniqIDSynchro());
    }

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

        $obj = new PointEmpTache();

        $obj->setDateValidationSynchro(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateValidationSynchro());
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
     * Tests the setNbHeures1RS() method.
     *
     * @return void
     */
    public function testSetNbHeures1RS() {

        $obj = new PointEmpTache();

        $obj->setNbHeures1RS(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures1RS());
    }

    /**
     * Tests the setNbHeures1TP() method.
     *
     * @return void
     */
    public function testSetNbHeures1TP() {

        $obj = new PointEmpTache();

        $obj->setNbHeures1TP(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures1TP());
    }

    /**
     * Tests the setNbHeures2RS() method.
     *
     * @return void
     */
    public function testSetNbHeures2RS() {

        $obj = new PointEmpTache();

        $obj->setNbHeures2RS(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures2RS());
    }

    /**
     * Tests the setNbHeures2TP() method.
     *
     * @return void
     */
    public function testSetNbHeures2TP() {

        $obj = new PointEmpTache();

        $obj->setNbHeures2TP(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures2TP());
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
     * Tests the setNumBT() method.
     *
     * @return void
     */
    public function testSetNumBT() {

        $obj = new PointEmpTache();

        $obj->setNumBT(10);
        $this->assertEquals(10, $obj->getNumBT());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new PointEmpTache();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setTxHoraire1RS() method.
     *
     * @return void
     */
    public function testSetTxHoraire1RS() {

        $obj = new PointEmpTache();

        $obj->setTxHoraire1RS(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHoraire1RS());
    }

    /**
     * Tests the setTxHoraire1TP() method.
     *
     * @return void
     */
    public function testSetTxHoraire1TP() {

        $obj = new PointEmpTache();

        $obj->setTxHoraire1TP(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHoraire1TP());
    }

    /**
     * Tests the setTxHoraire2RS() method.
     *
     * @return void
     */
    public function testSetTxHoraire2RS() {

        $obj = new PointEmpTache();

        $obj->setTxHoraire2RS(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHoraire2RS());
    }

    /**
     * Tests the setTxHoraire2TP() method.
     *
     * @return void
     */
    public function testSetTxHoraire2TP() {

        $obj = new PointEmpTache();

        $obj->setTxHoraire2TP(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHoraire2TP());
    }

    /**
     * Tests the setUniqIDSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIDSynchro() {

        $obj = new PointEmpTache();

        $obj->setUniqIDSynchro("uniqIDSynchro");
        $this->assertEquals("uniqIDSynchro", $obj->getUniqIDSynchro());
    }
}
