<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\TempsPasses;

/**
 * Temps passes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class TempsPassesTest extends AbstractTestCase {

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new TempsPasses();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new TempsPasses();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeMission() method.
     *
     * @return void
     */
    public function testSetCodeMission() {

        $obj = new TempsPasses();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Tests the setCodePhase() method.
     *
     * @return void
     */
    public function testSetCodePhase() {

        $obj = new TempsPasses();

        $obj->setCodePhase("codePhase");
        $this->assertEquals("codePhase", $obj->getCodePhase());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache() {

        $obj = new TempsPasses();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests the setCodeVehicule() method.
     *
     * @return void
     */
    public function testSetCodeVehicule() {

        $obj = new TempsPasses();

        $obj->setCodeVehicule("codeVehicule");
        $this->assertEquals("codeVehicule", $obj->getCodeVehicule());
    }

    /**
     * Tests the setCoutKm() method.
     *
     * @return void
     */
    public function testSetCoutKm() {

        $obj = new TempsPasses();

        $obj->setCoutKm(10.092018);
        $this->assertEquals(10.092018, $obj->getCoutKm());
    }

    /**
     * Tests the setDateSaisie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSaisie() {

        // Set a Date/time mock.
        $dateSaisie = new DateTime("2018-09-10");

        $obj = new TempsPasses();

        $obj->setDateSaisie($dateSaisie);
        $this->assertSame($dateSaisie, $obj->getDateSaisie());
    }

    /**
     * Tests the setDateSysSaisie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSysSaisie() {

        // Set a Date/time mock.
        $dateSysSaisie = new DateTime("2018-09-10");

        $obj = new TempsPasses();

        $obj->setDateSysSaisie($dateSysSaisie);
        $this->assertSame($dateSysSaisie, $obj->getDateSysSaisie());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new TempsPasses();

        $obj->setEtat(10);
        $this->assertEquals(10, $obj->getEtat());
    }

    /**
     * Tests the setFacturable() method.
     *
     * @return void
     */
    public function testSetFacturable() {

        $obj = new TempsPasses();

        $obj->setFacturable(true);
        $this->assertEquals(true, $obj->getFacturable());
    }

    /**
     * Tests the setGUniqId() method.
     *
     * @return void
     */
    public function testSetGUniqId() {

        $obj = new TempsPasses();

        $obj->setGUniqId("gUniqId");
        $this->assertEquals("gUniqId", $obj->getGUniqId());
    }

    /**
     * Tests the setHeureDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureDebut() {

        // Set a Date/time mock.
        $heureDebut = new DateTime("2018-09-10");

        $obj = new TempsPasses();

        $obj->setHeureDebut($heureDebut);
        $this->assertSame($heureDebut, $obj->getHeureDebut());
    }

    /**
     * Tests the setHeureFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureFin() {

        // Set a Date/time mock.
        $heureFin = new DateTime("2018-09-10");

        $obj = new TempsPasses();

        $obj->setHeureFin($heureFin);
        $this->assertSame($heureFin, $obj->getHeureFin());
    }

    /**
     * Tests the setIdTps() method.
     *
     * @return void
     */
    public function testSetIdTps() {

        $obj = new TempsPasses();

        $obj->setIdTps(10);
        $this->assertEquals(10, $obj->getIdTps());
    }

    /**
     * Tests the setIsTransf() method.
     *
     * @return void
     */
    public function testSetIsTransf() {

        $obj = new TempsPasses();

        $obj->setIsTransf(true);
        $this->assertEquals(true, $obj->getIsTransf());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new TempsPasses();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMonnaie() method.
     *
     * @return void
     */
    public function testSetMonnaie() {

        $obj = new TempsPasses();

        $obj->setMonnaie("monnaie");
        $this->assertEquals("monnaie", $obj->getMonnaie());
    }

    /**
     * Tests the setMontantCrt() method.
     *
     * @return void
     */
    public function testSetMontantCrt() {

        $obj = new TempsPasses();

        $obj->setMontantCrt(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCrt());
    }

    /**
     * Tests the setMontantTva() method.
     *
     * @return void
     */
    public function testSetMontantTva() {

        $obj = new TempsPasses();

        $obj->setMontantTva(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTva());
    }

    /**
     * Tests the setNbKm() method.
     *
     * @return void
     */
    public function testSetNbKm() {

        $obj = new TempsPasses();

        $obj->setNbKm(10.092018);
        $this->assertEquals(10.092018, $obj->getNbKm());
    }

    /**
     * Tests the setNbUo() method.
     *
     * @return void
     */
    public function testSetNbUo() {

        $obj = new TempsPasses();

        $obj->setNbUo(10.092018);
        $this->assertEquals(10.092018, $obj->getNbUo());
    }

    /**
     * Tests the setPeriodeEditionNdF() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeEditionNdF() {

        // Set a Date/time mock.
        $periodeEditionNdF = new DateTime("2018-09-10");

        $obj = new TempsPasses();

        $obj->setPeriodeEditionNdF($periodeEditionNdF);
        $this->assertSame($periodeEditionNdF, $obj->getPeriodeEditionNdF());
    }

    /**
     * Tests the setPu() method.
     *
     * @return void
     */
    public function testSetPu() {

        $obj = new TempsPasses();

        $obj->setPu(10.092018);
        $this->assertEquals(10.092018, $obj->getPu());
    }

    /**
     * Tests the setPv1() method.
     *
     * @return void
     */
    public function testSetPv1() {

        $obj = new TempsPasses();

        $obj->setPv1(10.092018);
        $this->assertEquals(10.092018, $obj->getPv1());
    }

    /**
     * Tests the setPv2() method.
     *
     * @return void
     */
    public function testSetPv2() {

        $obj = new TempsPasses();

        $obj->setPv2(10.092018);
        $this->assertEquals(10.092018, $obj->getPv2());
    }

    /**
     * Tests the setPv3() method.
     *
     * @return void
     */
    public function testSetPv3() {

        $obj = new TempsPasses();

        $obj->setPv3(10.092018);
        $this->assertEquals(10.092018, $obj->getPv3());
    }

    /**
     * Tests the setQte() method.
     *
     * @return void
     */
    public function testSetQte() {

        $obj = new TempsPasses();

        $obj->setQte(10.092018);
        $this->assertEquals(10.092018, $obj->getQte());
    }

    /**
     * Tests the setTauxRemise() method.
     *
     * @return void
     */
    public function testSetTauxRemise() {

        $obj = new TempsPasses();

        $obj->setTauxRemise(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRemise());
    }

    /**
     * Tests the setTauxRemiseIci() method.
     *
     * @return void
     */
    public function testSetTauxRemiseIci() {

        $obj = new TempsPasses();

        $obj->setTauxRemiseIci(true);
        $this->assertEquals(true, $obj->getTauxRemiseIci());
    }

    /**
     * Tests the setUniqIdFacture() method.
     *
     * @return void
     */
    public function testSetUniqIdFacture() {

        $obj = new TempsPasses();

        $obj->setUniqIdFacture("uniqIdFacture");
        $this->assertEquals("uniqIdFacture", $obj->getUniqIdFacture());
    }

    /**
     * Tests the setValide() method.
     *
     * @return void
     */
    public function testSetValide() {

        $obj = new TempsPasses();

        $obj->setValide(true);
        $this->assertEquals(true, $obj->getValide());
    }

    /**
     * Tests the setValideCollab() method.
     *
     * @return void
     */
    public function testSetValideCollab() {

        $obj = new TempsPasses();

        $obj->setValideCollab("valideCollab");
        $this->assertEquals("valideCollab", $obj->getValideCollab());
    }

    /**
     * Tests the setValideDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetValideDate() {

        // Set a Date/time mock.
        $valideDate = new DateTime("2018-09-10");

        $obj = new TempsPasses();

        $obj->setValideDate($valideDate);
        $this->assertSame($valideDate, $obj->getValideDate());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new TempsPasses();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodePhase());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCodeVehicule());
        $this->assertNull($obj->getCoutKm());
        $this->assertNull($obj->getDateSaisie());
        $this->assertNull($obj->getDateSysSaisie());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getFacturable());
        $this->assertNull($obj->getGUniqId());
        $this->assertNull($obj->getHeureDebut());
        $this->assertNull($obj->getHeureFin());
        $this->assertNull($obj->getIdTps());
        $this->assertNull($obj->getIsTransf());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMonnaie());
        $this->assertNull($obj->getMontantCrt());
        $this->assertNull($obj->getMontantTva());
        $this->assertNull($obj->getNbKm());
        $this->assertNull($obj->getNbUo());
        $this->assertNull($obj->getPu());
        $this->assertNull($obj->getPv1());
        $this->assertNull($obj->getPv2());
        $this->assertNull($obj->getPv3());
        $this->assertNull($obj->getPeriodeEditionNdF());
        $this->assertNull($obj->getQte());
        $this->assertNull($obj->getTauxRemise());
        $this->assertNull($obj->getTauxRemiseIci());
        $this->assertNull($obj->getUniqIdFacture());
        $this->assertNull($obj->getValide());
        $this->assertNull($obj->getValideCollab());
        $this->assertNull($obj->getValideDate());
    }
}
