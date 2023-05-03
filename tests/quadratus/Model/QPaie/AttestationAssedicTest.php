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
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\AttestationAssedic;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Attestation assedic test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class AttestationAssedicTest extends AbstractTestCase {

    /**
     * Test setAdhesionAides()
     *
     * @return void
     */
    public function testSetAdhesionAides(): void {

        $obj = new AttestationAssedic();

        $obj->setAdhesionAides(true);
        $this->assertTrue($obj->getAdhesionAides());
    }

    /**
     * Test setAdhesionRevocable()
     *
     * @return void
     */
    public function testSetAdhesionRevocable(): void {

        $obj = new AttestationAssedic();

        $obj->setAdhesionRevocable(true);
        $this->assertTrue($obj->getAdhesionRevocable());
    }

    /**
     * Test setAdresse1()
     *
     * @return void
     */
    public function testSetAdresse1(): void {

        $obj = new AttestationAssedic();

        $obj->setAdresse1("adresse1");
        $this->assertEquals("adresse1", $obj->getAdresse1());
    }

    /**
     * Test setAdresse2()
     *
     * @return void
     */
    public function testSetAdresse2(): void {

        $obj = new AttestationAssedic();

        $obj->setAdresse2("adresse2");
        $this->assertEquals("adresse2", $obj->getAdresse2());
    }

    /**
     * Test setAdresse3()
     *
     * @return void
     */
    public function testSetAdresse3(): void {

        $obj = new AttestationAssedic();

        $obj->setAdresse3("adresse3");
        $this->assertEquals("adresse3", $obj->getAdresse3());
    }

    /**
     * Test setAlsaceMoselle()
     *
     * @return void
     */
    public function testSetAlsaceMoselle(): void {

        $obj = new AttestationAssedic();

        $obj->setAlsaceMoselle(true);
        $this->assertTrue($obj->getAlsaceMoselle());
    }

    /**
     * Test setAutoAssurance()
     *
     * @return void
     */
    public function testSetAutoAssurance(): void {

        $obj = new AttestationAssedic();

        $obj->setAutoAssurance(true);
        $this->assertTrue($obj->getAutoAssurance());
    }

    /**
     * Test setCaisseIndemcp()
     *
     * @return void
     */
    public function testSetCaisseIndemcp(): void {

        $obj = new AttestationAssedic();

        $obj->setCaisseIndemcp("caisseIndemcp");
        $this->assertEquals("caisseIndemcp", $obj->getCaisseIndemcp());
    }

    /**
     * Test setCategEmploiAutre()
     *
     * @return void
     */
    public function testSetCategEmploiAutre(): void {

        $obj = new AttestationAssedic();

        $obj->setCategEmploiAutre("categEmploiAutre");
        $this->assertEquals("categEmploiAutre", $obj->getCategEmploiAutre());
    }

    /**
     * Test setChomageTotal()
     *
     * @return void
     */
    public function testSetChomageTotal(): void {

        $obj = new AttestationAssedic();

        $obj->setChomageTotal(true);
        $this->assertTrue($obj->getChomageTotal());
    }

    /**
     * Test setCodeAna()
     *
     * @return void
     */
    public function testSetCodeAna(): void {

        $obj = new AttestationAssedic();

        $obj->setCodeAna("codeAna");
        $this->assertEquals("codeAna", $obj->getCodeAna());
    }

    /**
     * Test setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new AttestationAssedic();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Test setCodeMotifRupture()
     *
     * @return void
     */
    public function testSetCodeMotifRupture(): void {

        $obj = new AttestationAssedic();

        $obj->setCodeMotifRupture("codeMotifRupture");
        $this->assertEquals("codeMotifRupture", $obj->getCodeMotifRupture());
    }

    /**
     * Test setCodeNaf2008()
     *
     * @return void
     */
    public function testSetCodeNaf2008(): void {

        $obj = new AttestationAssedic();

        $obj->setCodeNaf2008("codeNaf2008");
        $this->assertEquals("codeNaf2008", $obj->getCodeNaf2008());
    }

    /**
     * Test setCodeP()
     *
     * @return void
     */
    public function testSetCodeP(): void {

        $obj = new AttestationAssedic();

        $obj->setCodeP("codeP");
        $this->assertEquals("codeP", $obj->getCodeP());
    }

    /**
     * Test setCodeRetraiteAgirc()
     *
     * @return void
     */
    public function testSetCodeRetraiteAgirc(): void {

        $obj = new AttestationAssedic();

        $obj->setCodeRetraiteAgirc("codeRetraiteAgirc");
        $this->assertEquals("codeRetraiteAgirc", $obj->getCodeRetraiteAgirc());
    }

    /**
     * Test setCodeRetraiteArrco()
     *
     * @return void
     */
    public function testSetCodeRetraiteArrco(): void {

        $obj = new AttestationAssedic();

        $obj->setCodeRetraiteArrco("codeRetraiteArrco");
        $this->assertEquals("codeRetraiteArrco", $obj->getCodeRetraiteArrco());
    }

    /**
     * Test setCodeRetraiteAutre()
     *
     * @return void
     */
    public function testSetCodeRetraiteAutre(): void {

        $obj = new AttestationAssedic();

        $obj->setCodeRetraiteAutre("codeRetraiteAutre");
        $this->assertEquals("codeRetraiteAutre", $obj->getCodeRetraiteAutre());
    }

    /**
     * Test setContratPartAutre()
     *
     * @return void
     */
    public function testSetContratPartAutre(): void {

        $obj = new AttestationAssedic();

        $obj->setContratPartAutre("contratPartAutre");
        $this->assertEquals("contratPartAutre", $obj->getContratPartAutre());
    }

    /**
     * Test setContratParticulier()
     *
     * @return void
     */
    public function testSetContratParticulier(): void {

        $obj = new AttestationAssedic();

        $obj->setContratParticulier("contratParticulier");
        $this->assertEquals("contratParticulier", $obj->getContratParticulier());
    }

    /**
     * Test setConventionFne()
     *
     * @return void
     */
    public function testSetConventionFne(): void {

        $obj = new AttestationAssedic();

        $obj->setConventionFne(true);
        $this->assertTrue($obj->getConventionFne());
    }

    /**
     * Test setDateAdhesion()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAdhesion(): void {

        // Set a Date/time mock.
        $dateAdhesion = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDateAdhesion($dateAdhesion);
        $this->assertSame($dateAdhesion, $obj->getDateAdhesion());
    }

    /**
     * Test setDateConventionFne()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateConventionFne(): void {

        // Set a Date/time mock.
        $dateConventionFne = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDateConventionFne($dateConventionFne);
        $this->assertSame($dateConventionFne, $obj->getDateConventionFne());
    }

    /**
     * Test setDateNaiss()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateNaiss(): void {

        // Set a Date/time mock.
        $dateNaiss = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDateNaiss($dateNaiss);
        $this->assertSame($dateNaiss, $obj->getDateNaiss());
    }

    /**
     * Test setDateNotification()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateNotification(): void {

        // Set a Date/time mock.
        $dateNotification = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDateNotification($dateNotification);
        $this->assertSame($dateNotification, $obj->getDateNotification());
    }

    /**
     * Test setDatePaie()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDatePaie(): void {

        // Set a Date/time mock.
        $datePaie = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDatePaie($datePaie);
        $this->assertSame($datePaie, $obj->getDatePaie());
    }

    /**
     * Test setDatePaie2()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDatePaie2(): void {

        // Set a Date/time mock.
        $datePaie2 = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDatePaie2($datePaie2);
        $this->assertSame($datePaie2, $obj->getDatePaie2());
    }

    /**
     * Test setDatePlan()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDatePlan(): void {

        // Set a Date/time mock.
        $datePlan = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDatePlan($datePlan);
        $this->assertSame($datePlan, $obj->getDatePlan());
    }

    /**
     * Test setDemandeDdteDeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDemandeDdteDeb(): void {

        // Set a Date/time mock.
        $demandeDdteDeb = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDemandeDdteDeb($demandeDdteDeb);
        $this->assertSame($demandeDdteDeb, $obj->getDemandeDdteDeb());
    }

    /**
     * Test setDemandeDdteFin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDemandeDdteFin(): void {

        // Set a Date/time mock.
        $demandeDdteFin = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDemandeDdteFin($demandeDdteFin);
        $this->assertSame($demandeDdteFin, $obj->getDemandeDdteFin());
    }

    /**
     * Test setDemandeDdteReprise()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDemandeDdteReprise(): void {

        // Set a Date/time mock.
        $demandeDdteReprise = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDemandeDdteReprise($demandeDdteReprise);
        $this->assertSame($demandeDdteReprise, $obj->getDemandeDdteReprise());
    }

    /**
     * Test setDept()
     *
     * @return void
     */
    public function testSetDept(): void {

        $obj = new AttestationAssedic();

        $obj->setDept("dept");
        $this->assertEquals("dept", $obj->getDept());
    }

    /**
     * Test setDernJourTrav()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDernJourTrav(): void {

        // Set a Date/time mock.
        $dernJourTrav = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDernJourTrav($dernJourTrav);
        $this->assertSame($dernJourTrav, $obj->getDernJourTrav());
    }

    /**
     * Test setDernLieuTravail()
     *
     * @return void
     */
    public function testSetDernLieuTravail(): void {

        $obj = new AttestationAssedic();

        $obj->setDernLieuTravail("dernLieuTravail");
        $this->assertEquals("dernLieuTravail", $obj->getDernLieuTravail());
    }

    /**
     * Test setDernierEmploi()
     *
     * @return void
     */
    public function testSetDernierEmploi(): void {

        $obj = new AttestationAssedic();

        $obj->setDernierEmploi("dernierEmploi");
        $this->assertEquals("dernierEmploi", $obj->getDernierEmploi());
    }

    /**
     * Test setDureeEmploi1Deb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDureeEmploi1Deb(): void {

        // Set a Date/time mock.
        $dureeEmploi1Deb = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDureeEmploi1Deb($dureeEmploi1Deb);
        $this->assertSame($dureeEmploi1Deb, $obj->getDureeEmploi1Deb());
    }

    /**
     * Test setDureeEmploi1Fin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDureeEmploi1Fin(): void {

        // Set a Date/time mock.
        $dureeEmploi1Fin = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDureeEmploi1Fin($dureeEmploi1Fin);
        $this->assertSame($dureeEmploi1Fin, $obj->getDureeEmploi1Fin());
    }

    /**
     * Test setDureeEmploi2Deb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDureeEmploi2Deb(): void {

        // Set a Date/time mock.
        $dureeEmploi2Deb = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDureeEmploi2Deb($dureeEmploi2Deb);
        $this->assertSame($dureeEmploi2Deb, $obj->getDureeEmploi2Deb());
    }

    /**
     * Test setDureeEmploi2Fin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDureeEmploi2Fin(): void {

        // Set a Date/time mock.
        $dureeEmploi2Fin = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDureeEmploi2Fin($dureeEmploi2Fin);
        $this->assertSame($dureeEmploi2Fin, $obj->getDureeEmploi2Fin());
    }

    /**
     * Test setEffectif()
     *
     * @return void
     */
    public function testSetEffectif(): void {

        $obj = new AttestationAssedic();

        $obj->setEffectif("effectif");
        $this->assertEquals("effectif", $obj->getEffectif());
    }

    /**
     * Test setEffectifVal()
     *
     * @return void
     */
    public function testSetEffectifVal(): void {

        $obj = new AttestationAssedic();

        $obj->setEffectifVal(10.092018);
        $this->assertEquals(10.092018, $obj->getEffectifVal());
    }

    /**
     * Test setEmploiCollectivite()
     *
     * @return void
     */
    public function testSetEmploiCollectivite(): void {

        $obj = new AttestationAssedic();

        $obj->setEmploiCollectivite("emploiCollectivite");
        $this->assertEquals("emploiCollectivite", $obj->getEmploiCollectivite());
    }

    /**
     * Test setEtblAdresse1()
     *
     * @return void
     */
    public function testSetEtblAdresse1(): void {

        $obj = new AttestationAssedic();

        $obj->setEtblAdresse1("etblAdresse1");
        $this->assertEquals("etblAdresse1", $obj->getEtblAdresse1());
    }

    /**
     * Test setEtblAdresse2()
     *
     * @return void
     */
    public function testSetEtblAdresse2(): void {

        $obj = new AttestationAssedic();

        $obj->setEtblAdresse2("etblAdresse2");
        $this->assertEquals("etblAdresse2", $obj->getEtblAdresse2());
    }

    /**
     * Test setEtblAdresse3()
     *
     * @return void
     */
    public function testSetEtblAdresse3(): void {

        $obj = new AttestationAssedic();

        $obj->setEtblAdresse3("etblAdresse3");
        $this->assertEquals("etblAdresse3", $obj->getEtblAdresse3());
    }

    /**
     * Test setEtblRaisonSociale()
     *
     * @return void
     */
    public function testSetEtblRaisonSociale(): void {

        $obj = new AttestationAssedic();

        $obj->setEtblRaisonSociale("etblRaisonSociale");
        $this->assertEquals("etblRaisonSociale", $obj->getEtblRaisonSociale());
    }

    /**
     * Test setEtblTel()
     *
     * @return void
     */
    public function testSetEtblTel(): void {

        $obj = new AttestationAssedic();

        $obj->setEtblTel("etblTel");
        $this->assertEquals("etblTel", $obj->getEtblTel());
    }

    /**
     * Test setFngsNonAPercevoirMotif()
     *
     * @return void
     */
    public function testSetFngsNonAPercevoirMotif(): void {

        $obj = new AttestationAssedic();

        $obj->setFngsNonAPercevoirMotif("fngsNonAPercevoirMotif");
        $this->assertEquals("fngsNonAPercevoirMotif", $obj->getFngsNonAPercevoirMotif());
    }

    /**
     * Test setFngsNonPercueMotif()
     *
     * @return void
     */
    public function testSetFngsNonPercueMotif(): void {

        $obj = new AttestationAssedic();

        $obj->setFngsNonPercueMotif("fngsNonPercueMotif");
        $this->assertEquals("fngsNonPercueMotif", $obj->getFngsNonPercueMotif());
    }

    /**
     * Test setFngsPercue()
     *
     * @return void
     */
    public function testSetFngsPercue(): void {

        $obj = new AttestationAssedic();

        $obj->setFngsPercue(true);
        $this->assertTrue($obj->getFngsPercue());
    }

    /**
     * Test setFngsPercueCreance()
     *
     * @return void
     */
    public function testSetFngsPercueCreance(): void {

        $obj = new AttestationAssedic();

        $obj->setFngsPercueCreance("fngsPercueCreance");
        $this->assertEquals("fngsPercueCreance", $obj->getFngsPercueCreance());
    }

    /**
     * Test setFngsaPercevoir()
     *
     * @return void
     */
    public function testSetFngsaPercevoir(): void {

        $obj = new AttestationAssedic();

        $obj->setFngsaPercevoir(true);
        $this->assertTrue($obj->getFngsaPercevoir());
    }

    /**
     * Test setFngsaPercevoirCreance()
     *
     * @return void
     */
    public function testSetFngsaPercevoirCreance(): void {

        $obj = new AttestationAssedic();

        $obj->setFngsaPercevoirCreance("fngsaPercevoirCreance");
        $this->assertEquals("fngsaPercevoirCreance", $obj->getFngsaPercevoirCreance());
    }

    /**
     * Test setHeuresTrav()
     *
     * @return void
     */
    public function testSetHeuresTrav(): void {

        $obj = new AttestationAssedic();

        $obj->setHeuresTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresTrav());
    }

    /**
     * Test setHeuresTrav2()
     *
     * @return void
     */
    public function testSetHeuresTrav2(): void {

        $obj = new AttestationAssedic();

        $obj->setHeuresTrav2(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresTrav2());
    }

    /**
     * Test setHoraireAnnuelEtbl()
     *
     * @return void
     */
    public function testSetHoraireAnnuelEtbl(): void {

        $obj = new AttestationAssedic();

        $obj->setHoraireAnnuelEtbl(10.092018);
        $this->assertEquals(10.092018, $obj->getHoraireAnnuelEtbl());
    }

    /**
     * Test setHoraireAnnuelSal()
     *
     * @return void
     */
    public function testSetHoraireAnnuelSal(): void {

        $obj = new AttestationAssedic();

        $obj->setHoraireAnnuelSal(10.092018);
        $this->assertEquals(10.092018, $obj->getHoraireAnnuelSal());
    }

    /**
     * Test setHoraireHebdoEtbl()
     *
     * @return void
     */
    public function testSetHoraireHebdoEtbl(): void {

        $obj = new AttestationAssedic();

        $obj->setHoraireHebdoEtbl(10.092018);
        $this->assertEquals(10.092018, $obj->getHoraireHebdoEtbl());
    }

    /**
     * Test setHoraireHebdoSal()
     *
     * @return void
     */
    public function testSetHoraireHebdoSal(): void {

        $obj = new AttestationAssedic();

        $obj->setHoraireHebdoSal(10.092018);
        $this->assertEquals(10.092018, $obj->getHoraireHebdoSal());
    }

    /**
     * Test setIndemnAutres()
     *
     * @return void
     */
    public function testSetIndemnAutres(): void {

        $obj = new AttestationAssedic();

        $obj->setIndemnAutres(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnAutres());
    }

    /**
     * Test setIndemnClientele()
     *
     * @return void
     */
    public function testSetIndemnClientele(): void {

        $obj = new AttestationAssedic();

        $obj->setIndemnClientele(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnClientele());
    }

    /**
     * Test setIndemnCompensCp()
     *
     * @return void
     */
    public function testSetIndemnCompensCp(): void {

        $obj = new AttestationAssedic();

        $obj->setIndemnCompensCp(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnCompensCp());
    }

    /**
     * Test setIndemnCompensPreavis()
     *
     * @return void
     */
    public function testSetIndemnCompensPreavis(): void {

        $obj = new AttestationAssedic();

        $obj->setIndemnCompensPreavis(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnCompensPreavis());
    }

    /**
     * Test setIndemnDepartRetraite()
     *
     * @return void
     */
    public function testSetIndemnDepartRetraite(): void {

        $obj = new AttestationAssedic();

        $obj->setIndemnDepartRetraite(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnDepartRetraite());
    }

    /**
     * Test setIndemnDueSinistre()
     *
     * @return void
     */
    public function testSetIndemnDueSinistre(): void {

        $obj = new AttestationAssedic();

        $obj->setIndemnDueSinistre(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnDueSinistre());
    }

    /**
     * Test setIndemnFinCdd()
     *
     * @return void
     */
    public function testSetIndemnFinCdd(): void {

        $obj = new AttestationAssedic();

        $obj->setIndemnFinCdd(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnFinCdd());
    }

    /**
     * Test setIndemnFinCne()
     *
     * @return void
     */
    public function testSetIndemnFinCne(): void {

        $obj = new AttestationAssedic();

        $obj->setIndemnFinCne(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnFinCne());
    }

    /**
     * Test setIndemnFinMission()
     *
     * @return void
     */
    public function testSetIndemnFinMission(): void {

        $obj = new AttestationAssedic();

        $obj->setIndemnFinMission(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnFinMission());
    }

    /**
     * Test setIndemnJournalistes()
     *
     * @return void
     */
    public function testSetIndemnJournalistes(): void {

        $obj = new AttestationAssedic();

        $obj->setIndemnJournalistes(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnJournalistes());
    }

    /**
     * Test setIndemnLicens()
     *
     * @return void
     */
    public function testSetIndemnLicens(): void {

        $obj = new AttestationAssedic();

        $obj->setIndemnLicens(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnLicens());
    }

    /**
     * Test setIndemnNavig()
     *
     * @return void
     */
    public function testSetIndemnNavig(): void {

        $obj = new AttestationAssedic();

        $obj->setIndemnNavig(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnNavig());
    }

    /**
     * Test setIndemnRuptConv()
     *
     * @return void
     */
    public function testSetIndemnRuptConv(): void {

        $obj = new AttestationAssedic();

        $obj->setIndemnRuptConv(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnRuptConv());
    }

    /**
     * Test setIndemnSpeciLicens()
     *
     * @return void
     */
    public function testSetIndemnSpeciLicens(): void {

        $obj = new AttestationAssedic();

        $obj->setIndemnSpeciLicens(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnSpeciLicens());
    }

    /**
     * Test setIndemnSpecifLicens()
     *
     * @return void
     */
    public function testSetIndemnSpecifLicens(): void {

        $obj = new AttestationAssedic();

        $obj->setIndemnSpecifLicens(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnSpecifLicens());
    }

    /**
     * Test setIndemnSupplLicens()
     *
     * @return void
     */
    public function testSetIndemnSupplLicens(): void {

        $obj = new AttestationAssedic();

        $obj->setIndemnSupplLicens(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnSupplLicens());
    }

    /**
     * Test setIndemnVerseeApprenti()
     *
     * @return void
     */
    public function testSetIndemnVerseeApprenti(): void {

        $obj = new AttestationAssedic();

        $obj->setIndemnVerseeApprenti(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnVerseeApprenti());
    }

    /**
     * Test setLicencie55ans()
     *
     * @return void
     */
    public function testSetLicencie55ans(): void {

        $obj = new AttestationAssedic();

        $obj->setLicencie55ans(true);
        $this->assertTrue($obj->getLicencie55ans());
    }

    /**
     * Test setLicenciePlanSocial()
     *
     * @return void
     */
    public function testSetLicenciePlanSocial(): void {

        $obj = new AttestationAssedic();

        $obj->setLicenciePlanSocial(true);
        $this->assertTrue($obj->getLicenciePlanSocial());
    }

    /**
     * Test setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new AttestationAssedic();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Test setLienParente()
     *
     * @return void
     */
    public function testSetLienParente(): void {

        $obj = new AttestationAssedic();

        $obj->setLienParente("lienParente");
        $this->assertEquals("lienParente", $obj->getLienParente());
    }

    /**
     * Test setMotifDifference()
     *
     * @return void
     */
    public function testSetMotifDifference(): void {

        $obj = new AttestationAssedic();

        $obj->setMotifDifference("motifDifference");
        $this->assertEquals("motifDifference", $obj->getMotifDifference());
    }

    /**
     * Test setMotifNonPaieIccp()
     *
     * @return void
     */
    public function testSetMotifNonPaieIccp(): void {

        $obj = new AttestationAssedic();

        $obj->setMotifNonPaieIccp("motifNonPaieIccp");
        $this->assertEquals("motifNonPaieIccp", $obj->getMotifNonPaieIccp());
    }

    /**
     * Test setMotifNonPaiement()
     *
     * @return void
     */
    public function testSetMotifNonPaiement(): void {

        $obj = new AttestationAssedic();

        $obj->setMotifNonPaiement("motifNonPaiement");
        $this->assertEquals("motifNonPaiement", $obj->getMotifNonPaiement());
    }

    /**
     * Test setMotifRupture()
     *
     * @return void
     */
    public function testSetMotifRupture(): void {

        $obj = new AttestationAssedic();

        $obj->setMotifRupture("motifRupture");
        $this->assertEquals("motifRupture", $obj->getMotifRupture());
    }

    /**
     * Test setMtIdemnConvCol()
     *
     * @return void
     */
    public function testSetMtIdemnConvCol(): void {

        $obj = new AttestationAssedic();

        $obj->setMtIdemnConvCol(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIdemnConvCol());
    }

    /**
     * Test setMtIdemnTransac()
     *
     * @return void
     */
    public function testSetMtIdemnTransac(): void {

        $obj = new AttestationAssedic();

        $obj->setMtIdemnTransac(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIdemnTransac());
    }

    /**
     * Test setNaf()
     *
     * @return void
     */
    public function testSetNaf(): void {

        $obj = new AttestationAssedic();

        $obj->setNaf("naf");
        $this->assertEquals("naf", $obj->getNaf());
    }

    /**
     * Test setNatureContrat()
     *
     * @return void
     */
    public function testSetNatureContrat(): void {

        $obj = new AttestationAssedic();

        $obj->setNatureContrat("natureContrat");
        $this->assertEquals("natureContrat", $obj->getNatureContrat());
    }

    /**
     * Test setNbJoursOuvrables()
     *
     * @return void
     */
    public function testSetNbJoursOuvrables(): void {

        $obj = new AttestationAssedic();

        $obj->setNbJoursOuvrables(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJoursOuvrables());
    }

    /**
     * Test setNir()
     *
     * @return void
     */
    public function testSetNir(): void {

        $obj = new AttestationAssedic();

        $obj->setNir("nir");
        $this->assertEquals("nir", $obj->getNir());
    }

    /**
     * Test setNiveauQualif()
     *
     * @return void
     */
    public function testSetNiveauQualif(): void {

        $obj = new AttestationAssedic();

        $obj->setNiveauQualif("niveauQualif");
        $this->assertEquals("niveauQualif", $obj->getNiveauQualif());
    }

    /**
     * Test setNomAssChom()
     *
     * @return void
     */
    public function testSetNomAssChom(): void {

        $obj = new AttestationAssedic();

        $obj->setNomAssChom("nomAssChom");
        $this->assertEquals("nomAssChom", $obj->getNomAssChom());
    }

    /**
     * Test setNomEmploye()
     *
     * @return void
     */
    public function testSetNomEmploye(): void {

        $obj = new AttestationAssedic();

        $obj->setNomEmploye("nomEmploye");
        $this->assertEquals("nomEmploye", $obj->getNomEmploye());
    }

    /**
     * Test setNomNaissance()
     *
     * @return void
     */
    public function testSetNomNaissance(): void {

        $obj = new AttestationAssedic();

        $obj->setNomNaissance("nomNaissance");
        $this->assertEquals("nomNaissance", $obj->getNomNaissance());
    }

    /**
     * Test setNomSpecialSecu()
     *
     * @return void
     */
    public function testSetNomSpecialSecu(): void {

        $obj = new AttestationAssedic();

        $obj->setNomSpecialSecu("nomSpecialSecu");
        $this->assertEquals("nomSpecialSecu", $obj->getNomSpecialSecu());
    }

    /**
     * Test setNouvelleAttest()
     *
     * @return void
     */
    public function testSetNouvelleAttest(): void {

        $obj = new AttestationAssedic();

        $obj->setNouvelleAttest(true);
        $this->assertTrue($obj->getNouvelleAttest());
    }

    /**
     * Test setNumAssChom()
     *
     * @return void
     */
    public function testSetNumAssChom(): void {

        $obj = new AttestationAssedic();

        $obj->setNumAssChom("numAssChom");
        $this->assertEquals("numAssChom", $obj->getNumAssChom());
    }

    /**
     * Test setNumConventionFne()
     *
     * @return void
     */
    public function testSetNumConventionFne(): void {

        $obj = new AttestationAssedic();

        $obj->setNumConventionFne("numConventionFne");
        $this->assertEquals("numConventionFne", $obj->getNumConventionFne());
    }

    /**
     * Test setNumConventionGestion()
     *
     * @return void
     */
    public function testSetNumConventionGestion(): void {

        $obj = new AttestationAssedic();

        $obj->setNumConventionGestion("numConventionGestion");
        $this->assertEquals("numConventionGestion", $obj->getNumConventionGestion());
    }

    /**
     * Test setNumSpecialSecu()
     *
     * @return void
     */
    public function testSetNumSpecialSecu(): void {

        $obj = new AttestationAssedic();

        $obj->setNumSpecialSecu("numSpecialSecu");
        $this->assertEquals("numSpecialSecu", $obj->getNumSpecialSecu());
    }

    /**
     * Test setNumeroAttestation()
     *
     * @return void
     */
    public function testSetNumeroAttestation(): void {

        $obj = new AttestationAssedic();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Test setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new AttestationAssedic();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Test setOrganismeAssChom()
     *
     * @return void
     */
    public function testSetOrganismeAssChom(): void {

        $obj = new AttestationAssedic();

        $obj->setOrganismeAssChom("organismeAssChom");
        $this->assertEquals("organismeAssChom", $obj->getOrganismeAssChom());
    }

    /**
     * Test setPreavisEffectue()
     *
     * @return void
     */
    public function testSetPreavisEffectue(): void {

        $obj = new AttestationAssedic();

        $obj->setPreavisEffectue(true);
        $this->assertTrue($obj->getPreavisEffectue());
    }

    /**
     * Test setPreavisEffectueDeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPreavisEffectueDeb(): void {

        // Set a Date/time mock.
        $preavisEffectueDeb = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setPreavisEffectueDeb($preavisEffectueDeb);
        $this->assertSame($preavisEffectueDeb, $obj->getPreavisEffectueDeb());
    }

    /**
     * Test setPreavisEffectueFin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPreavisEffectueFin(): void {

        // Set a Date/time mock.
        $preavisEffectueFin = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setPreavisEffectueFin($preavisEffectueFin);
        $this->assertSame($preavisEffectueFin, $obj->getPreavisEffectueFin());
    }

    /**
     * Test setPreavisEffectuePaye()
     *
     * @return void
     */
    public function testSetPreavisEffectuePaye(): void {

        $obj = new AttestationAssedic();

        $obj->setPreavisEffectuePaye(true);
        $this->assertTrue($obj->getPreavisEffectuePaye());
    }

    /**
     * Test setPreavisNonEffectue()
     *
     * @return void
     */
    public function testSetPreavisNonEffectue(): void {

        $obj = new AttestationAssedic();

        $obj->setPreavisNonEffectue(true);
        $this->assertTrue($obj->getPreavisNonEffectue());
    }

    /**
     * Test setPreavisNonEffectueDeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPreavisNonEffectueDeb(): void {

        // Set a Date/time mock.
        $preavisNonEffectueDeb = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setPreavisNonEffectueDeb($preavisNonEffectueDeb);
        $this->assertSame($preavisNonEffectueDeb, $obj->getPreavisNonEffectueDeb());
    }

    /**
     * Test setPreavisNonEffectueFin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPreavisNonEffectueFin(): void {

        // Set a Date/time mock.
        $preavisNonEffectueFin = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setPreavisNonEffectueFin($preavisNonEffectueFin);
        $this->assertSame($preavisNonEffectueFin, $obj->getPreavisNonEffectueFin());
    }

    /**
     * Test setPreavisNonEffectuePaye()
     *
     * @return void
     */
    public function testSetPreavisNonEffectuePaye(): void {

        $obj = new AttestationAssedic();

        $obj->setPreavisNonEffectuePaye(true);
        $this->assertTrue($obj->getPreavisNonEffectuePaye());
    }

    /**
     * Test setPrecompteStc()
     *
     * @return void
     */
    public function testSetPrecompteStc(): void {

        $obj = new AttestationAssedic();

        $obj->setPrecompteStc(10.092018);
        $this->assertEquals(10.092018, $obj->getPrecompteStc());
    }

    /**
     * Test setPrenom()
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new AttestationAssedic();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Test setQualiteEmploi()
     *
     * @return void
     */
    public function testSetQualiteEmploi(): void {

        $obj = new AttestationAssedic();

        $obj->setQualiteEmploi("qualiteEmploi");
        $this->assertEquals("qualiteEmploi", $obj->getQualiteEmploi());
    }

    /**
     * Test setReclassement()
     *
     * @return void
     */
    public function testSetReclassement(): void {

        $obj = new AttestationAssedic();

        $obj->setReclassement(true);
        $this->assertTrue($obj->getReclassement());
    }

    /**
     * Test setRefusSalarie()
     *
     * @return void
     */
    public function testSetRefusSalarie(): void {

        $obj = new AttestationAssedic();

        $obj->setRefusSalarie(true);
        $this->assertTrue($obj->getRefusSalarie());
    }

    /**
     * Test setRetraiteAgirc()
     *
     * @return void
     */
    public function testSetRetraiteAgirc(): void {

        $obj = new AttestationAssedic();

        $obj->setRetraiteAgirc("retraiteAgirc");
        $this->assertEquals("retraiteAgirc", $obj->getRetraiteAgirc());
    }

    /**
     * Test setRetraiteAgircCompl()
     *
     * @return void
     */
    public function testSetRetraiteAgircCompl(): void {

        $obj = new AttestationAssedic();

        $obj->setRetraiteAgircCompl("retraiteAgircCompl");
        $this->assertEquals("retraiteAgircCompl", $obj->getRetraiteAgircCompl());
    }

    /**
     * Test setRetraiteArrco()
     *
     * @return void
     */
    public function testSetRetraiteArrco(): void {

        $obj = new AttestationAssedic();

        $obj->setRetraiteArrco("retraiteArrco");
        $this->assertEquals("retraiteArrco", $obj->getRetraiteArrco());
    }

    /**
     * Test setRetraiteArrcoCompl()
     *
     * @return void
     */
    public function testSetRetraiteArrcoCompl(): void {

        $obj = new AttestationAssedic();

        $obj->setRetraiteArrcoCompl("retraiteArrcoCompl");
        $this->assertEquals("retraiteArrcoCompl", $obj->getRetraiteArrcoCompl());
    }

    /**
     * Test setRetraiteAutre()
     *
     * @return void
     */
    public function testSetRetraiteAutre(): void {

        $obj = new AttestationAssedic();

        $obj->setRetraiteAutre("retraiteAutre");
        $this->assertEquals("retraiteAutre", $obj->getRetraiteAutre());
    }

    /**
     * Test setRetraiteAutreCompl()
     *
     * @return void
     */
    public function testSetRetraiteAutreCompl(): void {

        $obj = new AttestationAssedic();

        $obj->setRetraiteAutreCompl("retraiteAutreCompl");
        $this->assertEquals("retraiteAutreCompl", $obj->getRetraiteAutreCompl());
    }

    /**
     * Test setSalaireBrut()
     *
     * @return void
     */
    public function testSetSalaireBrut(): void {

        $obj = new AttestationAssedic();

        $obj->setSalaireBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireBrut());
    }

    /**
     * Test setSignatureCodeQualite()
     *
     * @return void
     */
    public function testSetSignatureCodeQualite(): void {

        $obj = new AttestationAssedic();

        $obj->setSignatureCodeQualite("signatureCodeQualite");
        $this->assertEquals("signatureCodeQualite", $obj->getSignatureCodeQualite());
    }

    /**
     * Test setSignatureContact()
     *
     * @return void
     */
    public function testSetSignatureContact(): void {

        $obj = new AttestationAssedic();

        $obj->setSignatureContact("signatureContact");
        $this->assertEquals("signatureContact", $obj->getSignatureContact());
    }

    /**
     * Test setSignatureDate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetSignatureDate(): void {

        // Set a Date/time mock.
        $signatureDate = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setSignatureDate($signatureDate);
        $this->assertSame($signatureDate, $obj->getSignatureDate());
    }

    /**
     * Test setSignatureNom()
     *
     * @return void
     */
    public function testSetSignatureNom(): void {

        $obj = new AttestationAssedic();

        $obj->setSignatureNom("signatureNom");
        $this->assertEquals("signatureNom", $obj->getSignatureNom());
    }

    /**
     * Test setSignaturePrenom()
     *
     * @return void
     */
    public function testSetSignaturePrenom(): void {

        $obj = new AttestationAssedic();

        $obj->setSignaturePrenom("signaturePrenom");
        $this->assertEquals("signaturePrenom", $obj->getSignaturePrenom());
    }

    /**
     * Test setSignatureQualite()
     *
     * @return void
     */
    public function testSetSignatureQualite(): void {

        $obj = new AttestationAssedic();

        $obj->setSignatureQualite("signatureQualite");
        $this->assertEquals("signatureQualite", $obj->getSignatureQualite());
    }

    /**
     * Test setSignatureTel()
     *
     * @return void
     */
    public function testSetSignatureTel(): void {

        $obj = new AttestationAssedic();

        $obj->setSignatureTel("signatureTel");
        $this->assertEquals("signatureTel", $obj->getSignatureTel());
    }

    /**
     * Test setSignatureVille()
     *
     * @return void
     */
    public function testSetSignatureVille(): void {

        $obj = new AttestationAssedic();

        $obj->setSignatureVille("signatureVille");
        $this->assertEquals("signatureVille", $obj->getSignatureVille());
    }

    /**
     * Test setSiret()
     *
     * @return void
     */
    public function testSetSiret(): void {

        $obj = new AttestationAssedic();

        $obj->setSiret("siret");
        $this->assertEquals("siret", $obj->getSiret());
    }

    /**
     * Test setSoldeToutCompte()
     *
     * @return void
     */
    public function testSetSoldeToutCompte(): void {

        $obj = new AttestationAssedic();

        $obj->setSoldeToutCompte("soldeToutCompte");
        $this->assertEquals("soldeToutCompte", $obj->getSoldeToutCompte());
    }

    /**
     * Test setSommesPeriodeDeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetSommesPeriodeDeb(): void {

        // Set a Date/time mock.
        $sommesPeriodeDeb = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setSommesPeriodeDeb($sommesPeriodeDeb);
        $this->assertSame($sommesPeriodeDeb, $obj->getSommesPeriodeDeb());
    }

    /**
     * Test setSommesPeriodeDeb2()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetSommesPeriodeDeb2(): void {

        // Set a Date/time mock.
        $sommesPeriodeDeb2 = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setSommesPeriodeDeb2($sommesPeriodeDeb2);
        $this->assertSame($sommesPeriodeDeb2, $obj->getSommesPeriodeDeb2());
    }

    /**
     * Test setSommesPeriodeFin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetSommesPeriodeFin(): void {

        // Set a Date/time mock.
        $sommesPeriodeFin = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setSommesPeriodeFin($sommesPeriodeFin);
        $this->assertSame($sommesPeriodeFin, $obj->getSommesPeriodeFin());
    }

    /**
     * Test setSommesPeriodeFin2()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetSommesPeriodeFin2(): void {

        // Set a Date/time mock.
        $sommesPeriodeFin2 = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setSommesPeriodeFin2($sommesPeriodeFin2);
        $this->assertSame($sommesPeriodeFin2, $obj->getSommesPeriodeFin2());
    }

    /**
     * Test setSpecialSecu()
     *
     * @return void
     */
    public function testSetSpecialSecu(): void {

        $obj = new AttestationAssedic();

        $obj->setSpecialSecu("specialSecu");
        $this->assertEquals("specialSecu", $obj->getSpecialSecu());
    }

    /**
     * Test setStatut()
     *
     * @return void
     */
    public function testSetStatut(): void {

        $obj = new AttestationAssedic();

        $obj->setStatut("statut");
        $this->assertEquals("statut", $obj->getStatut());
    }

    /**
     * Test setStatutCadre()
     *
     * @return void
     */
    public function testSetStatutCadre(): void {

        $obj = new AttestationAssedic();

        $obj->setStatutCadre(true);
        $this->assertTrue($obj->getStatutCadre());
    }

    /**
     * Test setStatutPartAutre()
     *
     * @return void
     */
    public function testSetStatutPartAutre(): void {

        $obj = new AttestationAssedic();

        $obj->setStatutPartAutre("statutPartAutre");
        $this->assertEquals("statutPartAutre", $obj->getStatutPartAutre());
    }

    /**
     * Test setTitre()
     *
     * @return void
     */
    public function testSetTitre(): void {

        $obj = new AttestationAssedic();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Test setTotalSommes()
     *
     * @return void
     */
    public function testSetTotalSommes(): void {

        $obj = new AttestationAssedic();

        $obj->setTotalSommes(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalSommes());
    }

    /**
     * Test setTransactionEnCours()
     *
     * @return void
     */
    public function testSetTransactionEnCours(): void {

        $obj = new AttestationAssedic();

        $obj->setTransactionEnCours(true);
        $this->assertTrue($obj->getTransactionEnCours());
    }

    /**
     * Test setTypeAssedic()
     *
     * @return void
     */
    public function testSetTypeAssedic(): void {

        $obj = new AttestationAssedic();

        $obj->setTypeAssedic("typeAssedic");
        $this->assertEquals("typeAssedic", $obj->getTypeAssedic());
    }

    /**
     * Test setTypeDiffHoraire()
     *
     * @return void
     */
    public function testSetTypeDiffHoraire(): void {

        $obj = new AttestationAssedic();

        $obj->setTypeDiffHoraire("typeDiffHoraire");
        $this->assertEquals("typeDiffHoraire", $obj->getTypeDiffHoraire());
    }

    /**
     * Test setTypeSociete()
     *
     * @return void
     */
    public function testSetTypeSociete(): void {

        $obj = new AttestationAssedic();

        $obj->setTypeSociete("typeSociete");
        $this->assertEquals("typeSociete", $obj->getTypeSociete());
    }

    /**
     * Test setUrssaf()
     *
     * @return void
     */
    public function testSetUrssaf(): void {

        $obj = new AttestationAssedic();

        $obj->setUrssaf("urssaf");
        $this->assertEquals("urssaf", $obj->getUrssaf());
    }

    /**
     * Test setValiditeConventionFne()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetValiditeConventionFne(): void {

        // Set a Date/time mock.
        $validiteConventionFne = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setValiditeConventionFne($validiteConventionFne);
        $this->assertSame($validiteConventionFne, $obj->getValiditeConventionFne());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AttestationAssedic();

        $this->assertNull($obj->getAdhesionAides());
        $this->assertNull($obj->getAdhesionRevocable());
        $this->assertNull($obj->getAdresse1());
        $this->assertNull($obj->getAdresse2());
        $this->assertNull($obj->getAdresse3());
        $this->assertNull($obj->getAlsaceMoselle());
        $this->assertNull($obj->getAutoAssurance());
        $this->assertNull($obj->getCaisseIndemcp());
        $this->assertNull($obj->getCategEmploiAutre());
        $this->assertNull($obj->getChomageTotal());
        $this->assertNull($obj->getCodeAna());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeMotifRupture());
        $this->assertNull($obj->getCodeNaf2008());
        $this->assertNull($obj->getCodeP());
        $this->assertNull($obj->getCodeRetraiteAgirc());
        $this->assertNull($obj->getCodeRetraiteArrco());
        $this->assertNull($obj->getCodeRetraiteAutre());
        $this->assertNull($obj->getContratPartAutre());
        $this->assertNull($obj->getContratParticulier());
        $this->assertNull($obj->getConventionFne());
        $this->assertNull($obj->getDateAdhesion());
        $this->assertNull($obj->getDateConventionFne());
        $this->assertNull($obj->getDateNaiss());
        $this->assertNull($obj->getDateNotification());
        $this->assertNull($obj->getDatePaie());
        $this->assertNull($obj->getDatePaie2());
        $this->assertNull($obj->getDatePlan());
        $this->assertNull($obj->getDemandeDdteDeb());
        $this->assertNull($obj->getDemandeDdteFin());
        $this->assertNull($obj->getDemandeDdteReprise());
        $this->assertNull($obj->getDept());
        $this->assertNull($obj->getDernJourTrav());
        $this->assertNull($obj->getDernLieuTravail());
        $this->assertNull($obj->getDernierEmploi());
        $this->assertNull($obj->getDureeEmploi1Deb());
        $this->assertNull($obj->getDureeEmploi1Fin());
        $this->assertNull($obj->getDureeEmploi2Deb());
        $this->assertNull($obj->getDureeEmploi2Fin());
        $this->assertNull($obj->getEffectif());
        $this->assertNull($obj->getEffectifVal());
        $this->assertNull($obj->getEmploiCollectivite());
        $this->assertNull($obj->getEtblAdresse1());
        $this->assertNull($obj->getEtblAdresse2());
        $this->assertNull($obj->getEtblAdresse3());
        $this->assertNull($obj->getEtblRaisonSociale());
        $this->assertNull($obj->getEtblTel());
        $this->assertNull($obj->getFngsaPercevoir());
        $this->assertNull($obj->getFngsaPercevoirCreance());
        $this->assertNull($obj->getFngsNonAPercevoirMotif());
        $this->assertNull($obj->getFngsNonPercueMotif());
        $this->assertNull($obj->getFngsPercue());
        $this->assertNull($obj->getFngsPercueCreance());
        $this->assertNull($obj->getHeuresTrav());
        $this->assertNull($obj->getHeuresTrav2());
        $this->assertNull($obj->getHoraireAnnuelEtbl());
        $this->assertNull($obj->getHoraireAnnuelSal());
        $this->assertNull($obj->getHoraireHebdoEtbl());
        $this->assertNull($obj->getHoraireHebdoSal());
        $this->assertNull($obj->getIndemnAutres());
        $this->assertNull($obj->getIndemnClientele());
        $this->assertNull($obj->getIndemnCompensCp());
        $this->assertNull($obj->getIndemnCompensPreavis());
        $this->assertNull($obj->getIndemnDepartRetraite());
        $this->assertNull($obj->getIndemnDueSinistre());
        $this->assertNull($obj->getIndemnFinCdd());
        $this->assertNull($obj->getIndemnFinCne());
        $this->assertNull($obj->getIndemnFinMission());
        $this->assertNull($obj->getIndemnJournalistes());
        $this->assertNull($obj->getIndemnLicens());
        $this->assertNull($obj->getIndemnNavig());
        $this->assertNull($obj->getIndemnRuptConv());
        $this->assertNull($obj->getIndemnSpeciLicens());
        $this->assertNull($obj->getIndemnSpecifLicens());
        $this->assertNull($obj->getIndemnSupplLicens());
        $this->assertNull($obj->getIndemnVerseeApprenti());
        $this->assertNull($obj->getLicencie55ans());
        $this->assertNull($obj->getLicenciePlanSocial());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLienParente());
        $this->assertNull($obj->getMotifDifference());
        $this->assertNull($obj->getMotifNonPaieIccp());
        $this->assertNull($obj->getMotifNonPaiement());
        $this->assertNull($obj->getMotifRupture());
        $this->assertNull($obj->getMtIdemnConvCol());
        $this->assertNull($obj->getMtIdemnTransac());
        $this->assertNull($obj->getNaf());
        $this->assertNull($obj->getNir());
        $this->assertNull($obj->getNatureContrat());
        $this->assertNull($obj->getNbJoursOuvrables());
        $this->assertNull($obj->getNiveauQualif());
        $this->assertNull($obj->getNomAssChom());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNomNaissance());
        $this->assertNull($obj->getNomSpecialSecu());
        $this->assertNull($obj->getNouvelleAttest());
        $this->assertNull($obj->getNumAssChom());
        $this->assertNull($obj->getNumConventionFne());
        $this->assertNull($obj->getNumConventionGestion());
        $this->assertNull($obj->getNumSpecialSecu());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getOrganismeAssChom());
        $this->assertNull($obj->getPreavisEffectue());
        $this->assertNull($obj->getPreavisEffectueDeb());
        $this->assertNull($obj->getPreavisEffectueFin());
        $this->assertNull($obj->getPreavisEffectuePaye());
        $this->assertNull($obj->getPreavisNonEffectue());
        $this->assertNull($obj->getPreavisNonEffectueDeb());
        $this->assertNull($obj->getPreavisNonEffectueFin());
        $this->assertNull($obj->getPreavisNonEffectuePaye());
        $this->assertNull($obj->getPrecompteStc());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getQualiteEmploi());
        $this->assertNull($obj->getReclassement());
        $this->assertNull($obj->getRefusSalarie());
        $this->assertNull($obj->getRetraiteAgirc());
        $this->assertNull($obj->getRetraiteAgircCompl());
        $this->assertNull($obj->getRetraiteArrco());
        $this->assertNull($obj->getRetraiteArrcoCompl());
        $this->assertNull($obj->getRetraiteAutre());
        $this->assertNull($obj->getRetraiteAutreCompl());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSalaireBrut());
        $this->assertNull($obj->getSignatureCodeQualite());
        $this->assertNull($obj->getSignatureContact());
        $this->assertNull($obj->getSignatureDate());
        $this->assertNull($obj->getSignatureNom());
        $this->assertNull($obj->getSignaturePrenom());
        $this->assertNull($obj->getSignatureQualite());
        $this->assertNull($obj->getSignatureTel());
        $this->assertNull($obj->getSignatureVille());
        $this->assertNull($obj->getSoldeToutCompte());
        $this->assertNull($obj->getSommesPeriodeDeb());
        $this->assertNull($obj->getSommesPeriodeDeb2());
        $this->assertNull($obj->getSommesPeriodeFin());
        $this->assertNull($obj->getSommesPeriodeFin2());
        $this->assertNull($obj->getSpecialSecu());
        $this->assertNull($obj->getStatut());
        $this->assertNull($obj->getStatutCadre());
        $this->assertNull($obj->getStatutPartAutre());
        $this->assertNull($obj->getTitre());
        $this->assertNull($obj->getTotalSommes());
        $this->assertNull($obj->getTransactionEnCours());
        $this->assertNull($obj->getTypeAssedic());
        $this->assertNull($obj->getTypeDiffHoraire());
        $this->assertNull($obj->getTypeSociete());
        $this->assertNull($obj->getUrssaf());
        $this->assertNull($obj->getValiditeConventionFne());
    }
}
