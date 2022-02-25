<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\PointEmpTache;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Point emp tache test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class PointEmpTacheTest extends AbstractTestCase {

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new PointEmpTache();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new PointEmpTache();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new PointEmpTache();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeCollaboValid()
     *
     * @return void
     */
    public function testSetCodeCollaboValid(): void {

        $obj = new PointEmpTache();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new PointEmpTache();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new PointEmpTache();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests setCodeTache()
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new PointEmpTache();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests setDateValidationSynchro()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro(): void {

        // Set a Date/time mock.
        $dateValidationSynchro = new DateTime("2018-09-10");

        $obj = new PointEmpTache();

        $obj->setDateValidationSynchro($dateValidationSynchro);
        $this->assertSame($dateValidationSynchro, $obj->getDateValidationSynchro());
    }

    /**
     * Tests setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new PointEmpTache();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests setHRemplMens()
     *
     * @return void
     */
    public function testSetHRemplMens(): void {

        $obj = new PointEmpTache();

        $obj->setHRemplMens(10.092018);
        $this->assertEquals(10.092018, $obj->getHRemplMens());
    }

    /**
     * Tests setMensualisation()
     *
     * @return void
     */
    public function testSetMensualisation(): void {

        $obj = new PointEmpTache();

        $obj->setMensualisation(10.092018);
        $this->assertEquals(10.092018, $obj->getMensualisation());
    }

    /**
     * Tests setMtPrime1Chantier()
     *
     * @return void
     */
    public function testSetMtPrime1Chantier(): void {

        $obj = new PointEmpTache();

        $obj->setMtPrime1Chantier(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPrime1Chantier());
    }

    /**
     * Tests setMtPrime2Chantier()
     *
     * @return void
     */
    public function testSetMtPrime2Chantier(): void {

        $obj = new PointEmpTache();

        $obj->setMtPrime2Chantier(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPrime2Chantier());
    }

    /**
     * Tests setMtPrime3Chantier()
     *
     * @return void
     */
    public function testSetMtPrime3Chantier(): void {

        $obj = new PointEmpTache();

        $obj->setMtPrime3Chantier(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPrime3Chantier());
    }

    /**
     * Tests setNbHeures1Rs()
     *
     * @return void
     */
    public function testSetNbHeures1Rs(): void {

        $obj = new PointEmpTache();

        $obj->setNbHeures1Rs(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures1Rs());
    }

    /**
     * Tests setNbHeures1Tp()
     *
     * @return void
     */
    public function testSetNbHeures1Tp(): void {

        $obj = new PointEmpTache();

        $obj->setNbHeures1Tp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures1Tp());
    }

    /**
     * Tests setNbHeures2Rs()
     *
     * @return void
     */
    public function testSetNbHeures2Rs(): void {

        $obj = new PointEmpTache();

        $obj->setNbHeures2Rs(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures2Rs());
    }

    /**
     * Tests setNbHeures2Tp()
     *
     * @return void
     */
    public function testSetNbHeures2Tp(): void {

        $obj = new PointEmpTache();

        $obj->setNbHeures2Tp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures2Tp());
    }

    /**
     * Tests setNbPaniers()
     *
     * @return void
     */
    public function testSetNbPaniers(): void {

        $obj = new PointEmpTache();

        $obj->setNbPaniers(10.092018);
        $this->assertEquals(10.092018, $obj->getNbPaniers());
    }

    /**
     * Tests setNumBt()
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new PointEmpTache();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
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

        $obj = new PointEmpTache();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests setTxHoraire1Rs()
     *
     * @return void
     */
    public function testSetTxHoraire1Rs(): void {

        $obj = new PointEmpTache();

        $obj->setTxHoraire1Rs(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHoraire1Rs());
    }

    /**
     * Tests setTxHoraire1Tp()
     *
     * @return void
     */
    public function testSetTxHoraire1Tp(): void {

        $obj = new PointEmpTache();

        $obj->setTxHoraire1Tp(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHoraire1Tp());
    }

    /**
     * Tests setTxHoraire2Rs()
     *
     * @return void
     */
    public function testSetTxHoraire2Rs(): void {

        $obj = new PointEmpTache();

        $obj->setTxHoraire2Rs(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHoraire2Rs());
    }

    /**
     * Tests setTxHoraire2Tp()
     *
     * @return void
     */
    public function testSetTxHoraire2Tp(): void {

        $obj = new PointEmpTache();

        $obj->setTxHoraire2Tp(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHoraire2Tp());
    }

    /**
     * Tests setUniqIdSynchro()
     *
     * @return void
     */
    public function testSetUniqIdSynchro(): void {

        $obj = new PointEmpTache();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
