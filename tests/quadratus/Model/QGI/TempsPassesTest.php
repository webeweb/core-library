<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\TempsPasses;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Temps passes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class TempsPassesTest extends AbstractTestCase {

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new TempsPasses();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new TempsPasses();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setCodeMission()
     *
     * @return void
     */
    public function testSetCodeMission(): void {

        $obj = new TempsPasses();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Tests setCodePhase()
     *
     * @return void
     */
    public function testSetCodePhase(): void {

        $obj = new TempsPasses();

        $obj->setCodePhase("codePhase");
        $this->assertEquals("codePhase", $obj->getCodePhase());
    }

    /**
     * Tests setCodeTache()
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new TempsPasses();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests setCodeVehicule()
     *
     * @return void
     */
    public function testSetCodeVehicule(): void {

        $obj = new TempsPasses();

        $obj->setCodeVehicule("codeVehicule");
        $this->assertEquals("codeVehicule", $obj->getCodeVehicule());
    }

    /**
     * Tests setCoutKm()
     *
     * @return void
     */
    public function testSetCoutKm(): void {

        $obj = new TempsPasses();

        $obj->setCoutKm(10.092018);
        $this->assertEquals(10.092018, $obj->getCoutKm());
    }

    /**
     * Tests setDateSaisie()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSaisie(): void {

        // Set a Date/time mock.
        $dateSaisie = new DateTime("2018-09-10");

        $obj = new TempsPasses();

        $obj->setDateSaisie($dateSaisie);
        $this->assertSame($dateSaisie, $obj->getDateSaisie());
    }

    /**
     * Tests setDateSysSaisie()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSysSaisie(): void {

        // Set a Date/time mock.
        $dateSysSaisie = new DateTime("2018-09-10");

        $obj = new TempsPasses();

        $obj->setDateSysSaisie($dateSysSaisie);
        $this->assertSame($dateSysSaisie, $obj->getDateSysSaisie());
    }

    /**
     * Tests setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new TempsPasses();

        $obj->setEtat(10);
        $this->assertEquals(10, $obj->getEtat());
    }

    /**
     * Tests setFacturable()
     *
     * @return void
     */
    public function testSetFacturable(): void {

        $obj = new TempsPasses();

        $obj->setFacturable(true);
        $this->assertEquals(true, $obj->getFacturable());
    }

    /**
     * Tests setGUniqId()
     *
     * @return void
     */
    public function testSetGUniqId(): void {

        $obj = new TempsPasses();

        $obj->setGUniqId("gUniqId");
        $this->assertEquals("gUniqId", $obj->getGUniqId());
    }

    /**
     * Tests setHeureDebut()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureDebut(): void {

        // Set a Date/time mock.
        $heureDebut = new DateTime("2018-09-10");

        $obj = new TempsPasses();

        $obj->setHeureDebut($heureDebut);
        $this->assertSame($heureDebut, $obj->getHeureDebut());
    }

    /**
     * Tests setHeureFin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureFin(): void {

        // Set a Date/time mock.
        $heureFin = new DateTime("2018-09-10");

        $obj = new TempsPasses();

        $obj->setHeureFin($heureFin);
        $this->assertSame($heureFin, $obj->getHeureFin());
    }

    /**
     * Tests setIdTps()
     *
     * @return void
     */
    public function testSetIdTps(): void {

        $obj = new TempsPasses();

        $obj->setIdTps(10);
        $this->assertEquals(10, $obj->getIdTps());
    }

    /**
     * Tests setIsTransf()
     *
     * @return void
     */
    public function testSetIsTransf(): void {

        $obj = new TempsPasses();

        $obj->setIsTransf(true);
        $this->assertEquals(true, $obj->getIsTransf());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new TempsPasses();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setMonnaie()
     *
     * @return void
     */
    public function testSetMonnaie(): void {

        $obj = new TempsPasses();

        $obj->setMonnaie("monnaie");
        $this->assertEquals("monnaie", $obj->getMonnaie());
    }

    /**
     * Tests setMontantCrt()
     *
     * @return void
     */
    public function testSetMontantCrt(): void {

        $obj = new TempsPasses();

        $obj->setMontantCrt(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCrt());
    }

    /**
     * Tests setMontantTva()
     *
     * @return void
     */
    public function testSetMontantTva(): void {

        $obj = new TempsPasses();

        $obj->setMontantTva(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTva());
    }

    /**
     * Tests setNbKm()
     *
     * @return void
     */
    public function testSetNbKm(): void {

        $obj = new TempsPasses();

        $obj->setNbKm(10.092018);
        $this->assertEquals(10.092018, $obj->getNbKm());
    }

    /**
     * Tests setNbUo()
     *
     * @return void
     */
    public function testSetNbUo(): void {

        $obj = new TempsPasses();

        $obj->setNbUo(10.092018);
        $this->assertEquals(10.092018, $obj->getNbUo());
    }

    /**
     * Tests setPeriodeEditionNdF()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeEditionNdF(): void {

        // Set a Date/time mock.
        $periodeEditionNdF = new DateTime("2018-09-10");

        $obj = new TempsPasses();

        $obj->setPeriodeEditionNdF($periodeEditionNdF);
        $this->assertSame($periodeEditionNdF, $obj->getPeriodeEditionNdF());
    }

    /**
     * Tests setPu()
     *
     * @return void
     */
    public function testSetPu(): void {

        $obj = new TempsPasses();

        $obj->setPu(10.092018);
        $this->assertEquals(10.092018, $obj->getPu());
    }

    /**
     * Tests setPv1()
     *
     * @return void
     */
    public function testSetPv1(): void {

        $obj = new TempsPasses();

        $obj->setPv1(10.092018);
        $this->assertEquals(10.092018, $obj->getPv1());
    }

    /**
     * Tests setPv2()
     *
     * @return void
     */
    public function testSetPv2(): void {

        $obj = new TempsPasses();

        $obj->setPv2(10.092018);
        $this->assertEquals(10.092018, $obj->getPv2());
    }

    /**
     * Tests setPv3()
     *
     * @return void
     */
    public function testSetPv3(): void {

        $obj = new TempsPasses();

        $obj->setPv3(10.092018);
        $this->assertEquals(10.092018, $obj->getPv3());
    }

    /**
     * Tests setQte()
     *
     * @return void
     */
    public function testSetQte(): void {

        $obj = new TempsPasses();

        $obj->setQte(10.092018);
        $this->assertEquals(10.092018, $obj->getQte());
    }

    /**
     * Tests setTauxRemise()
     *
     * @return void
     */
    public function testSetTauxRemise(): void {

        $obj = new TempsPasses();

        $obj->setTauxRemise(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRemise());
    }

    /**
     * Tests setTauxRemiseIci()
     *
     * @return void
     */
    public function testSetTauxRemiseIci(): void {

        $obj = new TempsPasses();

        $obj->setTauxRemiseIci(true);
        $this->assertEquals(true, $obj->getTauxRemiseIci());
    }

    /**
     * Tests setUniqIdFacture()
     *
     * @return void
     */
    public function testSetUniqIdFacture(): void {

        $obj = new TempsPasses();

        $obj->setUniqIdFacture("uniqIdFacture");
        $this->assertEquals("uniqIdFacture", $obj->getUniqIdFacture());
    }

    /**
     * Tests setValide()
     *
     * @return void
     */
    public function testSetValide(): void {

        $obj = new TempsPasses();

        $obj->setValide(true);
        $this->assertEquals(true, $obj->getValide());
    }

    /**
     * Tests setValideCollab()
     *
     * @return void
     */
    public function testSetValideCollab(): void {

        $obj = new TempsPasses();

        $obj->setValideCollab("valideCollab");
        $this->assertEquals("valideCollab", $obj->getValideCollab());
    }

    /**
     * Tests setValideDate()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetValideDate(): void {

        // Set a Date/time mock.
        $valideDate = new DateTime("2018-09-10");

        $obj = new TempsPasses();

        $obj->setValideDate($valideDate);
        $this->assertSame($valideDate, $obj->getValideDate());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
