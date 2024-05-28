<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Throwable;
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
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new TempsPasses();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new TempsPasses();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setCodeMission()
     *
     * @return void
     */
    public function testSetCodeMission(): void {

        $obj = new TempsPasses();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Test setCodePhase()
     *
     * @return void
     */
    public function testSetCodePhase(): void {

        $obj = new TempsPasses();

        $obj->setCodePhase("codePhase");
        $this->assertEquals("codePhase", $obj->getCodePhase());
    }

    /**
     * Test setCodeTache()
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new TempsPasses();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Test setCodeVehicule()
     *
     * @return void
     */
    public function testSetCodeVehicule(): void {

        $obj = new TempsPasses();

        $obj->setCodeVehicule("codeVehicule");
        $this->assertEquals("codeVehicule", $obj->getCodeVehicule());
    }

    /**
     * Test setCoutKm()
     *
     * @return void
     */
    public function testSetCoutKm(): void {

        $obj = new TempsPasses();

        $obj->setCoutKm(10.092018);
        $this->assertEquals(10.092018, $obj->getCoutKm());
    }

    /**
     * Test setDateSaisie()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateSaisie(): void {

        // Set a Date/time mock.
        $dateSaisie = new DateTime("2018-09-10");

        $obj = new TempsPasses();

        $obj->setDateSaisie($dateSaisie);
        $this->assertSame($dateSaisie, $obj->getDateSaisie());
    }

    /**
     * Test setDateSysSaisie()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateSysSaisie(): void {

        // Set a Date/time mock.
        $dateSysSaisie = new DateTime("2018-09-10");

        $obj = new TempsPasses();

        $obj->setDateSysSaisie($dateSysSaisie);
        $this->assertSame($dateSysSaisie, $obj->getDateSysSaisie());
    }

    /**
     * Test setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new TempsPasses();

        $obj->setEtat(10);
        $this->assertEquals(10, $obj->getEtat());
    }

    /**
     * Test setFacturable()
     *
     * @return void
     */
    public function testSetFacturable(): void {

        $obj = new TempsPasses();

        $obj->setFacturable(true);
        $this->assertTrue($obj->getFacturable());
    }

    /**
     * Test setGUniqId()
     *
     * @return void
     */
    public function testSetGUniqId(): void {

        $obj = new TempsPasses();

        $obj->setGUniqId("gUniqId");
        $this->assertEquals("gUniqId", $obj->getGUniqId());
    }

    /**
     * Test setHeureDebut()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetHeureDebut(): void {

        // Set a Date/time mock.
        $heureDebut = new DateTime("2018-09-10");

        $obj = new TempsPasses();

        $obj->setHeureDebut($heureDebut);
        $this->assertSame($heureDebut, $obj->getHeureDebut());
    }

    /**
     * Test setHeureFin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetHeureFin(): void {

        // Set a Date/time mock.
        $heureFin = new DateTime("2018-09-10");

        $obj = new TempsPasses();

        $obj->setHeureFin($heureFin);
        $this->assertSame($heureFin, $obj->getHeureFin());
    }

    /**
     * Test setIdTps()
     *
     * @return void
     */
    public function testSetIdTps(): void {

        $obj = new TempsPasses();

        $obj->setIdTps(10);
        $this->assertEquals(10, $obj->getIdTps());
    }

    /**
     * Test setIsTransf()
     *
     * @return void
     */
    public function testSetIsTransf(): void {

        $obj = new TempsPasses();

        $obj->setIsTransf(true);
        $this->assertTrue($obj->getIsTransf());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new TempsPasses();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setMonnaie()
     *
     * @return void
     */
    public function testSetMonnaie(): void {

        $obj = new TempsPasses();

        $obj->setMonnaie("monnaie");
        $this->assertEquals("monnaie", $obj->getMonnaie());
    }

    /**
     * Test setMontantCrt()
     *
     * @return void
     */
    public function testSetMontantCrt(): void {

        $obj = new TempsPasses();

        $obj->setMontantCrt(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCrt());
    }

    /**
     * Test setMontantTva()
     *
     * @return void
     */
    public function testSetMontantTva(): void {

        $obj = new TempsPasses();

        $obj->setMontantTva(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTva());
    }

    /**
     * Test setNbKm()
     *
     * @return void
     */
    public function testSetNbKm(): void {

        $obj = new TempsPasses();

        $obj->setNbKm(10.092018);
        $this->assertEquals(10.092018, $obj->getNbKm());
    }

    /**
     * Test setNbUo()
     *
     * @return void
     */
    public function testSetNbUo(): void {

        $obj = new TempsPasses();

        $obj->setNbUo(10.092018);
        $this->assertEquals(10.092018, $obj->getNbUo());
    }

    /**
     * Test setPeriodeEditionNdF()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeEditionNdF(): void {

        // Set a Date/time mock.
        $periodeEditionNdF = new DateTime("2018-09-10");

        $obj = new TempsPasses();

        $obj->setPeriodeEditionNdF($periodeEditionNdF);
        $this->assertSame($periodeEditionNdF, $obj->getPeriodeEditionNdF());
    }

    /**
     * Test setPu()
     *
     * @return void
     */
    public function testSetPu(): void {

        $obj = new TempsPasses();

        $obj->setPu(10.092018);
        $this->assertEquals(10.092018, $obj->getPu());
    }

    /**
     * Test setPv1()
     *
     * @return void
     */
    public function testSetPv1(): void {

        $obj = new TempsPasses();

        $obj->setPv1(10.092018);
        $this->assertEquals(10.092018, $obj->getPv1());
    }

    /**
     * Test setPv2()
     *
     * @return void
     */
    public function testSetPv2(): void {

        $obj = new TempsPasses();

        $obj->setPv2(10.092018);
        $this->assertEquals(10.092018, $obj->getPv2());
    }

    /**
     * Test setPv3()
     *
     * @return void
     */
    public function testSetPv3(): void {

        $obj = new TempsPasses();

        $obj->setPv3(10.092018);
        $this->assertEquals(10.092018, $obj->getPv3());
    }

    /**
     * Test setQte()
     *
     * @return void
     */
    public function testSetQte(): void {

        $obj = new TempsPasses();

        $obj->setQte(10.092018);
        $this->assertEquals(10.092018, $obj->getQte());
    }

    /**
     * Test setTauxRemise()
     *
     * @return void
     */
    public function testSetTauxRemise(): void {

        $obj = new TempsPasses();

        $obj->setTauxRemise(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRemise());
    }

    /**
     * Test setTauxRemiseIci()
     *
     * @return void
     */
    public function testSetTauxRemiseIci(): void {

        $obj = new TempsPasses();

        $obj->setTauxRemiseIci(true);
        $this->assertTrue($obj->getTauxRemiseIci());
    }

    /**
     * Test setUniqIdFacture()
     *
     * @return void
     */
    public function testSetUniqIdFacture(): void {

        $obj = new TempsPasses();

        $obj->setUniqIdFacture("uniqIdFacture");
        $this->assertEquals("uniqIdFacture", $obj->getUniqIdFacture());
    }

    /**
     * Test setValide()
     *
     * @return void
     */
    public function testSetValide(): void {

        $obj = new TempsPasses();

        $obj->setValide(true);
        $this->assertTrue($obj->getValide());
    }

    /**
     * Test setValideCollab()
     *
     * @return void
     */
    public function testSetValideCollab(): void {

        $obj = new TempsPasses();

        $obj->setValideCollab("valideCollab");
        $this->assertEquals("valideCollab", $obj->getValideCollab());
    }

    /**
     * Test setValideDate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetValideDate(): void {

        // Set a Date/time mock.
        $valideDate = new DateTime("2018-09-10");

        $obj = new TempsPasses();

        $obj->setValideDate($valideDate);
        $this->assertSame($valideDate, $obj->getValideDate());
    }

    /**
     * Test __construct()
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
