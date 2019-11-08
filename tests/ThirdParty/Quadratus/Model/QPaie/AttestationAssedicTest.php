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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\AttestationAssedic;

/**
 * Attestation assedic test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class AttestationAssedicTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setAdhesionAides() method.
     *
     * @return void
     */
    public function testSetAdhesionAides() {

        $obj = new AttestationAssedic();

        $obj->setAdhesionAides(true);
        $this->assertEquals(true, $obj->getAdhesionAides());
    }

    /**
     * Tests the setAdhesionRevocable() method.
     *
     * @return void
     */
    public function testSetAdhesionRevocable() {

        $obj = new AttestationAssedic();

        $obj->setAdhesionRevocable(true);
        $this->assertEquals(true, $obj->getAdhesionRevocable());
    }

    /**
     * Tests the setAdresse1() method.
     *
     * @return void
     */
    public function testSetAdresse1() {

        $obj = new AttestationAssedic();

        $obj->setAdresse1("adresse1");
        $this->assertEquals("adresse1", $obj->getAdresse1());
    }

    /**
     * Tests the setAdresse2() method.
     *
     * @return void
     */
    public function testSetAdresse2() {

        $obj = new AttestationAssedic();

        $obj->setAdresse2("adresse2");
        $this->assertEquals("adresse2", $obj->getAdresse2());
    }

    /**
     * Tests the setAdresse3() method.
     *
     * @return void
     */
    public function testSetAdresse3() {

        $obj = new AttestationAssedic();

        $obj->setAdresse3("adresse3");
        $this->assertEquals("adresse3", $obj->getAdresse3());
    }

    /**
     * Tests the setAlsaceMoselle() method.
     *
     * @return void
     */
    public function testSetAlsaceMoselle() {

        $obj = new AttestationAssedic();

        $obj->setAlsaceMoselle(true);
        $this->assertEquals(true, $obj->getAlsaceMoselle());
    }

    /**
     * Tests the setAutoAssurance() method.
     *
     * @return void
     */
    public function testSetAutoAssurance() {

        $obj = new AttestationAssedic();

        $obj->setAutoAssurance(true);
        $this->assertEquals(true, $obj->getAutoAssurance());
    }

    /**
     * Tests the setCaisseIndemcp() method.
     *
     * @return void
     */
    public function testSetCaisseIndemcp() {

        $obj = new AttestationAssedic();

        $obj->setCaisseIndemcp("caisseIndemcp");
        $this->assertEquals("caisseIndemcp", $obj->getCaisseIndemcp());
    }

    /**
     * Tests the setCategEmploiAutre() method.
     *
     * @return void
     */
    public function testSetCategEmploiAutre() {

        $obj = new AttestationAssedic();

        $obj->setCategEmploiAutre("categEmploiAutre");
        $this->assertEquals("categEmploiAutre", $obj->getCategEmploiAutre());
    }

    /**
     * Tests the setChomageTotal() method.
     *
     * @return void
     */
    public function testSetChomageTotal() {

        $obj = new AttestationAssedic();

        $obj->setChomageTotal(true);
        $this->assertEquals(true, $obj->getChomageTotal());
    }

    /**
     * Tests the setCodeAna() method.
     *
     * @return void
     */
    public function testSetCodeAna() {

        $obj = new AttestationAssedic();

        $obj->setCodeAna("codeAna");
        $this->assertEquals("codeAna", $obj->getCodeAna());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new AttestationAssedic();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeMotifRupture() method.
     *
     * @return void
     */
    public function testSetCodeMotifRupture() {

        $obj = new AttestationAssedic();

        $obj->setCodeMotifRupture("codeMotifRupture");
        $this->assertEquals("codeMotifRupture", $obj->getCodeMotifRupture());
    }

    /**
     * Tests the setCodeNaf2008() method.
     *
     * @return void
     */
    public function testSetCodeNaf2008() {

        $obj = new AttestationAssedic();

        $obj->setCodeNaf2008("codeNaf2008");
        $this->assertEquals("codeNaf2008", $obj->getCodeNaf2008());
    }

    /**
     * Tests the setCodeP() method.
     *
     * @return void
     */
    public function testSetCodeP() {

        $obj = new AttestationAssedic();

        $obj->setCodeP("codeP");
        $this->assertEquals("codeP", $obj->getCodeP());
    }

    /**
     * Tests the setCodeRetraiteAgirc() method.
     *
     * @return void
     */
    public function testSetCodeRetraiteAgirc() {

        $obj = new AttestationAssedic();

        $obj->setCodeRetraiteAgirc("codeRetraiteAgirc");
        $this->assertEquals("codeRetraiteAgirc", $obj->getCodeRetraiteAgirc());
    }

    /**
     * Tests the setCodeRetraiteArrco() method.
     *
     * @return void
     */
    public function testSetCodeRetraiteArrco() {

        $obj = new AttestationAssedic();

        $obj->setCodeRetraiteArrco("codeRetraiteArrco");
        $this->assertEquals("codeRetraiteArrco", $obj->getCodeRetraiteArrco());
    }

    /**
     * Tests the setCodeRetraiteAutre() method.
     *
     * @return void
     */
    public function testSetCodeRetraiteAutre() {

        $obj = new AttestationAssedic();

        $obj->setCodeRetraiteAutre("codeRetraiteAutre");
        $this->assertEquals("codeRetraiteAutre", $obj->getCodeRetraiteAutre());
    }

    /**
     * Tests the setContratPartAutre() method.
     *
     * @return void
     */
    public function testSetContratPartAutre() {

        $obj = new AttestationAssedic();

        $obj->setContratPartAutre("contratPartAutre");
        $this->assertEquals("contratPartAutre", $obj->getContratPartAutre());
    }

    /**
     * Tests the setContratParticulier() method.
     *
     * @return void
     */
    public function testSetContratParticulier() {

        $obj = new AttestationAssedic();

        $obj->setContratParticulier("contratParticulier");
        $this->assertEquals("contratParticulier", $obj->getContratParticulier());
    }

    /**
     * Tests the setConventionFne() method.
     *
     * @return void
     */
    public function testSetConventionFne() {

        $obj = new AttestationAssedic();

        $obj->setConventionFne(true);
        $this->assertEquals(true, $obj->getConventionFne());
    }

    /**
     * Tests the setDateAdhesion() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAdhesion() {

        // Set a Date/time mock.
        $dateAdhesion = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDateAdhesion($dateAdhesion);
        $this->assertSame($dateAdhesion, $obj->getDateAdhesion());
    }

    /**
     * Tests the setDateConventionFne() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateConventionFne() {

        // Set a Date/time mock.
        $dateConventionFne = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDateConventionFne($dateConventionFne);
        $this->assertSame($dateConventionFne, $obj->getDateConventionFne());
    }

    /**
     * Tests the setDateNaiss() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNaiss() {

        // Set a Date/time mock.
        $dateNaiss = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDateNaiss($dateNaiss);
        $this->assertSame($dateNaiss, $obj->getDateNaiss());
    }

    /**
     * Tests the setDateNotification() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNotification() {

        // Set a Date/time mock.
        $dateNotification = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDateNotification($dateNotification);
        $this->assertSame($dateNotification, $obj->getDateNotification());
    }

    /**
     * Tests the setDatePaie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePaie() {

        // Set a Date/time mock.
        $datePaie = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDatePaie($datePaie);
        $this->assertSame($datePaie, $obj->getDatePaie());
    }

    /**
     * Tests the setDatePaie2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePaie2() {

        // Set a Date/time mock.
        $datePaie2 = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDatePaie2($datePaie2);
        $this->assertSame($datePaie2, $obj->getDatePaie2());
    }

    /**
     * Tests the setDatePlan() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePlan() {

        // Set a Date/time mock.
        $datePlan = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDatePlan($datePlan);
        $this->assertSame($datePlan, $obj->getDatePlan());
    }

    /**
     * Tests the setDemandeDdteDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDemandeDdteDeb() {

        // Set a Date/time mock.
        $demandeDdteDeb = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDemandeDdteDeb($demandeDdteDeb);
        $this->assertSame($demandeDdteDeb, $obj->getDemandeDdteDeb());
    }

    /**
     * Tests the setDemandeDdteFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDemandeDdteFin() {

        // Set a Date/time mock.
        $demandeDdteFin = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDemandeDdteFin($demandeDdteFin);
        $this->assertSame($demandeDdteFin, $obj->getDemandeDdteFin());
    }

    /**
     * Tests the setDemandeDdteReprise() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDemandeDdteReprise() {

        // Set a Date/time mock.
        $demandeDdteReprise = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDemandeDdteReprise($demandeDdteReprise);
        $this->assertSame($demandeDdteReprise, $obj->getDemandeDdteReprise());
    }

    /**
     * Tests the setDept() method.
     *
     * @return void
     */
    public function testSetDept() {

        $obj = new AttestationAssedic();

        $obj->setDept("dept");
        $this->assertEquals("dept", $obj->getDept());
    }

    /**
     * Tests the setDernJourTrav() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDernJourTrav() {

        // Set a Date/time mock.
        $dernJourTrav = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDernJourTrav($dernJourTrav);
        $this->assertSame($dernJourTrav, $obj->getDernJourTrav());
    }

    /**
     * Tests the setDernLieuTravail() method.
     *
     * @return void
     */
    public function testSetDernLieuTravail() {

        $obj = new AttestationAssedic();

        $obj->setDernLieuTravail("dernLieuTravail");
        $this->assertEquals("dernLieuTravail", $obj->getDernLieuTravail());
    }

    /**
     * Tests the setDernierEmploi() method.
     *
     * @return void
     */
    public function testSetDernierEmploi() {

        $obj = new AttestationAssedic();

        $obj->setDernierEmploi("dernierEmploi");
        $this->assertEquals("dernierEmploi", $obj->getDernierEmploi());
    }

    /**
     * Tests the setDureeEmploi1Deb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDureeEmploi1Deb() {

        // Set a Date/time mock.
        $dureeEmploi1Deb = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDureeEmploi1Deb($dureeEmploi1Deb);
        $this->assertSame($dureeEmploi1Deb, $obj->getDureeEmploi1Deb());
    }

    /**
     * Tests the setDureeEmploi1Fin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDureeEmploi1Fin() {

        // Set a Date/time mock.
        $dureeEmploi1Fin = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDureeEmploi1Fin($dureeEmploi1Fin);
        $this->assertSame($dureeEmploi1Fin, $obj->getDureeEmploi1Fin());
    }

    /**
     * Tests the setDureeEmploi2Deb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDureeEmploi2Deb() {

        // Set a Date/time mock.
        $dureeEmploi2Deb = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDureeEmploi2Deb($dureeEmploi2Deb);
        $this->assertSame($dureeEmploi2Deb, $obj->getDureeEmploi2Deb());
    }

    /**
     * Tests the setDureeEmploi2Fin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDureeEmploi2Fin() {

        // Set a Date/time mock.
        $dureeEmploi2Fin = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setDureeEmploi2Fin($dureeEmploi2Fin);
        $this->assertSame($dureeEmploi2Fin, $obj->getDureeEmploi2Fin());
    }

    /**
     * Tests the setEffectif() method.
     *
     * @return void
     */
    public function testSetEffectif() {

        $obj = new AttestationAssedic();

        $obj->setEffectif("effectif");
        $this->assertEquals("effectif", $obj->getEffectif());
    }

    /**
     * Tests the setEffectifVal() method.
     *
     * @return void
     */
    public function testSetEffectifVal() {

        $obj = new AttestationAssedic();

        $obj->setEffectifVal(10.092018);
        $this->assertEquals(10.092018, $obj->getEffectifVal());
    }

    /**
     * Tests the setEmploiCollectivite() method.
     *
     * @return void
     */
    public function testSetEmploiCollectivite() {

        $obj = new AttestationAssedic();

        $obj->setEmploiCollectivite("emploiCollectivite");
        $this->assertEquals("emploiCollectivite", $obj->getEmploiCollectivite());
    }

    /**
     * Tests the setEtblAdresse1() method.
     *
     * @return void
     */
    public function testSetEtblAdresse1() {

        $obj = new AttestationAssedic();

        $obj->setEtblAdresse1("etblAdresse1");
        $this->assertEquals("etblAdresse1", $obj->getEtblAdresse1());
    }

    /**
     * Tests the setEtblAdresse2() method.
     *
     * @return void
     */
    public function testSetEtblAdresse2() {

        $obj = new AttestationAssedic();

        $obj->setEtblAdresse2("etblAdresse2");
        $this->assertEquals("etblAdresse2", $obj->getEtblAdresse2());
    }

    /**
     * Tests the setEtblAdresse3() method.
     *
     * @return void
     */
    public function testSetEtblAdresse3() {

        $obj = new AttestationAssedic();

        $obj->setEtblAdresse3("etblAdresse3");
        $this->assertEquals("etblAdresse3", $obj->getEtblAdresse3());
    }

    /**
     * Tests the setEtblRaisonSociale() method.
     *
     * @return void
     */
    public function testSetEtblRaisonSociale() {

        $obj = new AttestationAssedic();

        $obj->setEtblRaisonSociale("etblRaisonSociale");
        $this->assertEquals("etblRaisonSociale", $obj->getEtblRaisonSociale());
    }

    /**
     * Tests the setEtblTel() method.
     *
     * @return void
     */
    public function testSetEtblTel() {

        $obj = new AttestationAssedic();

        $obj->setEtblTel("etblTel");
        $this->assertEquals("etblTel", $obj->getEtblTel());
    }

    /**
     * Tests the setFngsNonAPercevoirMotif() method.
     *
     * @return void
     */
    public function testSetFngsNonAPercevoirMotif() {

        $obj = new AttestationAssedic();

        $obj->setFngsNonAPercevoirMotif("fngsNonAPercevoirMotif");
        $this->assertEquals("fngsNonAPercevoirMotif", $obj->getFngsNonAPercevoirMotif());
    }

    /**
     * Tests the setFngsNonPercueMotif() method.
     *
     * @return void
     */
    public function testSetFngsNonPercueMotif() {

        $obj = new AttestationAssedic();

        $obj->setFngsNonPercueMotif("fngsNonPercueMotif");
        $this->assertEquals("fngsNonPercueMotif", $obj->getFngsNonPercueMotif());
    }

    /**
     * Tests the setFngsPercue() method.
     *
     * @return void
     */
    public function testSetFngsPercue() {

        $obj = new AttestationAssedic();

        $obj->setFngsPercue(true);
        $this->assertEquals(true, $obj->getFngsPercue());
    }

    /**
     * Tests the setFngsPercueCreance() method.
     *
     * @return void
     */
    public function testSetFngsPercueCreance() {

        $obj = new AttestationAssedic();

        $obj->setFngsPercueCreance("fngsPercueCreance");
        $this->assertEquals("fngsPercueCreance", $obj->getFngsPercueCreance());
    }

    /**
     * Tests the setFngsaPercevoir() method.
     *
     * @return void
     */
    public function testSetFngsaPercevoir() {

        $obj = new AttestationAssedic();

        $obj->setFngsaPercevoir(true);
        $this->assertEquals(true, $obj->getFngsaPercevoir());
    }

    /**
     * Tests the setFngsaPercevoirCreance() method.
     *
     * @return void
     */
    public function testSetFngsaPercevoirCreance() {

        $obj = new AttestationAssedic();

        $obj->setFngsaPercevoirCreance("fngsaPercevoirCreance");
        $this->assertEquals("fngsaPercevoirCreance", $obj->getFngsaPercevoirCreance());
    }

    /**
     * Tests the setHeuresTrav() method.
     *
     * @return void
     */
    public function testSetHeuresTrav() {

        $obj = new AttestationAssedic();

        $obj->setHeuresTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresTrav());
    }

    /**
     * Tests the setHeuresTrav2() method.
     *
     * @return void
     */
    public function testSetHeuresTrav2() {

        $obj = new AttestationAssedic();

        $obj->setHeuresTrav2(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresTrav2());
    }

    /**
     * Tests the setHoraireAnnuelEtbl() method.
     *
     * @return void
     */
    public function testSetHoraireAnnuelEtbl() {

        $obj = new AttestationAssedic();

        $obj->setHoraireAnnuelEtbl(10.092018);
        $this->assertEquals(10.092018, $obj->getHoraireAnnuelEtbl());
    }

    /**
     * Tests the setHoraireAnnuelSal() method.
     *
     * @return void
     */
    public function testSetHoraireAnnuelSal() {

        $obj = new AttestationAssedic();

        $obj->setHoraireAnnuelSal(10.092018);
        $this->assertEquals(10.092018, $obj->getHoraireAnnuelSal());
    }

    /**
     * Tests the setHoraireHebdoEtbl() method.
     *
     * @return void
     */
    public function testSetHoraireHebdoEtbl() {

        $obj = new AttestationAssedic();

        $obj->setHoraireHebdoEtbl(10.092018);
        $this->assertEquals(10.092018, $obj->getHoraireHebdoEtbl());
    }

    /**
     * Tests the setHoraireHebdoSal() method.
     *
     * @return void
     */
    public function testSetHoraireHebdoSal() {

        $obj = new AttestationAssedic();

        $obj->setHoraireHebdoSal(10.092018);
        $this->assertEquals(10.092018, $obj->getHoraireHebdoSal());
    }

    /**
     * Tests the setIndemnAutres() method.
     *
     * @return void
     */
    public function testSetIndemnAutres() {

        $obj = new AttestationAssedic();

        $obj->setIndemnAutres(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnAutres());
    }

    /**
     * Tests the setIndemnClientele() method.
     *
     * @return void
     */
    public function testSetIndemnClientele() {

        $obj = new AttestationAssedic();

        $obj->setIndemnClientele(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnClientele());
    }

    /**
     * Tests the setIndemnCompensCp() method.
     *
     * @return void
     */
    public function testSetIndemnCompensCp() {

        $obj = new AttestationAssedic();

        $obj->setIndemnCompensCp(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnCompensCp());
    }

    /**
     * Tests the setIndemnCompensPreavis() method.
     *
     * @return void
     */
    public function testSetIndemnCompensPreavis() {

        $obj = new AttestationAssedic();

        $obj->setIndemnCompensPreavis(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnCompensPreavis());
    }

    /**
     * Tests the setIndemnDepartRetraite() method.
     *
     * @return void
     */
    public function testSetIndemnDepartRetraite() {

        $obj = new AttestationAssedic();

        $obj->setIndemnDepartRetraite(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnDepartRetraite());
    }

    /**
     * Tests the setIndemnDueSinistre() method.
     *
     * @return void
     */
    public function testSetIndemnDueSinistre() {

        $obj = new AttestationAssedic();

        $obj->setIndemnDueSinistre(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnDueSinistre());
    }

    /**
     * Tests the setIndemnFinCdd() method.
     *
     * @return void
     */
    public function testSetIndemnFinCdd() {

        $obj = new AttestationAssedic();

        $obj->setIndemnFinCdd(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnFinCdd());
    }

    /**
     * Tests the setIndemnFinCne() method.
     *
     * @return void
     */
    public function testSetIndemnFinCne() {

        $obj = new AttestationAssedic();

        $obj->setIndemnFinCne(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnFinCne());
    }

    /**
     * Tests the setIndemnFinMission() method.
     *
     * @return void
     */
    public function testSetIndemnFinMission() {

        $obj = new AttestationAssedic();

        $obj->setIndemnFinMission(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnFinMission());
    }

    /**
     * Tests the setIndemnJournalistes() method.
     *
     * @return void
     */
    public function testSetIndemnJournalistes() {

        $obj = new AttestationAssedic();

        $obj->setIndemnJournalistes(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnJournalistes());
    }

    /**
     * Tests the setIndemnLicens() method.
     *
     * @return void
     */
    public function testSetIndemnLicens() {

        $obj = new AttestationAssedic();

        $obj->setIndemnLicens(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnLicens());
    }

    /**
     * Tests the setIndemnNavig() method.
     *
     * @return void
     */
    public function testSetIndemnNavig() {

        $obj = new AttestationAssedic();

        $obj->setIndemnNavig(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnNavig());
    }

    /**
     * Tests the setIndemnRuptConv() method.
     *
     * @return void
     */
    public function testSetIndemnRuptConv() {

        $obj = new AttestationAssedic();

        $obj->setIndemnRuptConv(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnRuptConv());
    }

    /**
     * Tests the setIndemnSpeciLicens() method.
     *
     * @return void
     */
    public function testSetIndemnSpeciLicens() {

        $obj = new AttestationAssedic();

        $obj->setIndemnSpeciLicens(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnSpeciLicens());
    }

    /**
     * Tests the setIndemnSpecifLicens() method.
     *
     * @return void
     */
    public function testSetIndemnSpecifLicens() {

        $obj = new AttestationAssedic();

        $obj->setIndemnSpecifLicens(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnSpecifLicens());
    }

    /**
     * Tests the setIndemnSupplLicens() method.
     *
     * @return void
     */
    public function testSetIndemnSupplLicens() {

        $obj = new AttestationAssedic();

        $obj->setIndemnSupplLicens(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnSupplLicens());
    }

    /**
     * Tests the setIndemnVerseeApprenti() method.
     *
     * @return void
     */
    public function testSetIndemnVerseeApprenti() {

        $obj = new AttestationAssedic();

        $obj->setIndemnVerseeApprenti(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnVerseeApprenti());
    }

    /**
     * Tests the setLicencie55ans() method.
     *
     * @return void
     */
    public function testSetLicencie55ans() {

        $obj = new AttestationAssedic();

        $obj->setLicencie55ans(true);
        $this->assertEquals(true, $obj->getLicencie55ans());
    }

    /**
     * Tests the setLicenciePlanSocial() method.
     *
     * @return void
     */
    public function testSetLicenciePlanSocial() {

        $obj = new AttestationAssedic();

        $obj->setLicenciePlanSocial(true);
        $this->assertEquals(true, $obj->getLicenciePlanSocial());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument() {

        $obj = new AttestationAssedic();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setLienParente() method.
     *
     * @return void
     */
    public function testSetLienParente() {

        $obj = new AttestationAssedic();

        $obj->setLienParente("lienParente");
        $this->assertEquals("lienParente", $obj->getLienParente());
    }

    /**
     * Tests the setMotifDifference() method.
     *
     * @return void
     */
    public function testSetMotifDifference() {

        $obj = new AttestationAssedic();

        $obj->setMotifDifference("motifDifference");
        $this->assertEquals("motifDifference", $obj->getMotifDifference());
    }

    /**
     * Tests the setMotifNonPaieIccp() method.
     *
     * @return void
     */
    public function testSetMotifNonPaieIccp() {

        $obj = new AttestationAssedic();

        $obj->setMotifNonPaieIccp("motifNonPaieIccp");
        $this->assertEquals("motifNonPaieIccp", $obj->getMotifNonPaieIccp());
    }

    /**
     * Tests the setMotifNonPaiement() method.
     *
     * @return void
     */
    public function testSetMotifNonPaiement() {

        $obj = new AttestationAssedic();

        $obj->setMotifNonPaiement("motifNonPaiement");
        $this->assertEquals("motifNonPaiement", $obj->getMotifNonPaiement());
    }

    /**
     * Tests the setMotifRupture() method.
     *
     * @return void
     */
    public function testSetMotifRupture() {

        $obj = new AttestationAssedic();

        $obj->setMotifRupture("motifRupture");
        $this->assertEquals("motifRupture", $obj->getMotifRupture());
    }

    /**
     * Tests the setMtIdemnConvCol() method.
     *
     * @return void
     */
    public function testSetMtIdemnConvCol() {

        $obj = new AttestationAssedic();

        $obj->setMtIdemnConvCol(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIdemnConvCol());
    }

    /**
     * Tests the setMtIdemnTransac() method.
     *
     * @return void
     */
    public function testSetMtIdemnTransac() {

        $obj = new AttestationAssedic();

        $obj->setMtIdemnTransac(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIdemnTransac());
    }

    /**
     * Tests the setNaf() method.
     *
     * @return void
     */
    public function testSetNaf() {

        $obj = new AttestationAssedic();

        $obj->setNaf("naf");
        $this->assertEquals("naf", $obj->getNaf());
    }

    /**
     * Tests the setNatureContrat() method.
     *
     * @return void
     */
    public function testSetNatureContrat() {

        $obj = new AttestationAssedic();

        $obj->setNatureContrat("natureContrat");
        $this->assertEquals("natureContrat", $obj->getNatureContrat());
    }

    /**
     * Tests the setNbJoursOuvrables() method.
     *
     * @return void
     */
    public function testSetNbJoursOuvrables() {

        $obj = new AttestationAssedic();

        $obj->setNbJoursOuvrables(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJoursOuvrables());
    }

    /**
     * Tests the setNir() method.
     *
     * @return void
     */
    public function testSetNir() {

        $obj = new AttestationAssedic();

        $obj->setNir("nir");
        $this->assertEquals("nir", $obj->getNir());
    }

    /**
     * Tests the setNiveauQualif() method.
     *
     * @return void
     */
    public function testSetNiveauQualif() {

        $obj = new AttestationAssedic();

        $obj->setNiveauQualif("niveauQualif");
        $this->assertEquals("niveauQualif", $obj->getNiveauQualif());
    }

    /**
     * Tests the setNomAssChom() method.
     *
     * @return void
     */
    public function testSetNomAssChom() {

        $obj = new AttestationAssedic();

        $obj->setNomAssChom("nomAssChom");
        $this->assertEquals("nomAssChom", $obj->getNomAssChom());
    }

    /**
     * Tests the setNomEmploye() method.
     *
     * @return void
     */
    public function testSetNomEmploye() {

        $obj = new AttestationAssedic();

        $obj->setNomEmploye("nomEmploye");
        $this->assertEquals("nomEmploye", $obj->getNomEmploye());
    }

    /**
     * Tests the setNomNaissance() method.
     *
     * @return void
     */
    public function testSetNomNaissance() {

        $obj = new AttestationAssedic();

        $obj->setNomNaissance("nomNaissance");
        $this->assertEquals("nomNaissance", $obj->getNomNaissance());
    }

    /**
     * Tests the setNomSpecialSecu() method.
     *
     * @return void
     */
    public function testSetNomSpecialSecu() {

        $obj = new AttestationAssedic();

        $obj->setNomSpecialSecu("nomSpecialSecu");
        $this->assertEquals("nomSpecialSecu", $obj->getNomSpecialSecu());
    }

    /**
     * Tests the setNouvelleAttest() method.
     *
     * @return void
     */
    public function testSetNouvelleAttest() {

        $obj = new AttestationAssedic();

        $obj->setNouvelleAttest(true);
        $this->assertEquals(true, $obj->getNouvelleAttest());
    }

    /**
     * Tests the setNumAssChom() method.
     *
     * @return void
     */
    public function testSetNumAssChom() {

        $obj = new AttestationAssedic();

        $obj->setNumAssChom("numAssChom");
        $this->assertEquals("numAssChom", $obj->getNumAssChom());
    }

    /**
     * Tests the setNumConventionFne() method.
     *
     * @return void
     */
    public function testSetNumConventionFne() {

        $obj = new AttestationAssedic();

        $obj->setNumConventionFne("numConventionFne");
        $this->assertEquals("numConventionFne", $obj->getNumConventionFne());
    }

    /**
     * Tests the setNumConventionGestion() method.
     *
     * @return void
     */
    public function testSetNumConventionGestion() {

        $obj = new AttestationAssedic();

        $obj->setNumConventionGestion("numConventionGestion");
        $this->assertEquals("numConventionGestion", $obj->getNumConventionGestion());
    }

    /**
     * Tests the setNumSpecialSecu() method.
     *
     * @return void
     */
    public function testSetNumSpecialSecu() {

        $obj = new AttestationAssedic();

        $obj->setNumSpecialSecu("numSpecialSecu");
        $this->assertEquals("numSpecialSecu", $obj->getNumSpecialSecu());
    }

    /**
     * Tests the setNumeroAttestation() method.
     *
     * @return void
     */
    public function testSetNumeroAttestation() {

        $obj = new AttestationAssedic();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new AttestationAssedic();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setOrganismeAssChom() method.
     *
     * @return void
     */
    public function testSetOrganismeAssChom() {

        $obj = new AttestationAssedic();

        $obj->setOrganismeAssChom("organismeAssChom");
        $this->assertEquals("organismeAssChom", $obj->getOrganismeAssChom());
    }

    /**
     * Tests the setPreavisEffectue() method.
     *
     * @return void
     */
    public function testSetPreavisEffectue() {

        $obj = new AttestationAssedic();

        $obj->setPreavisEffectue(true);
        $this->assertEquals(true, $obj->getPreavisEffectue());
    }

    /**
     * Tests the setPreavisEffectueDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPreavisEffectueDeb() {

        // Set a Date/time mock.
        $preavisEffectueDeb = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setPreavisEffectueDeb($preavisEffectueDeb);
        $this->assertSame($preavisEffectueDeb, $obj->getPreavisEffectueDeb());
    }

    /**
     * Tests the setPreavisEffectueFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPreavisEffectueFin() {

        // Set a Date/time mock.
        $preavisEffectueFin = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setPreavisEffectueFin($preavisEffectueFin);
        $this->assertSame($preavisEffectueFin, $obj->getPreavisEffectueFin());
    }

    /**
     * Tests the setPreavisEffectuePaye() method.
     *
     * @return void
     */
    public function testSetPreavisEffectuePaye() {

        $obj = new AttestationAssedic();

        $obj->setPreavisEffectuePaye(true);
        $this->assertEquals(true, $obj->getPreavisEffectuePaye());
    }

    /**
     * Tests the setPreavisNonEffectue() method.
     *
     * @return void
     */
    public function testSetPreavisNonEffectue() {

        $obj = new AttestationAssedic();

        $obj->setPreavisNonEffectue(true);
        $this->assertEquals(true, $obj->getPreavisNonEffectue());
    }

    /**
     * Tests the setPreavisNonEffectueDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPreavisNonEffectueDeb() {

        // Set a Date/time mock.
        $preavisNonEffectueDeb = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setPreavisNonEffectueDeb($preavisNonEffectueDeb);
        $this->assertSame($preavisNonEffectueDeb, $obj->getPreavisNonEffectueDeb());
    }

    /**
     * Tests the setPreavisNonEffectueFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPreavisNonEffectueFin() {

        // Set a Date/time mock.
        $preavisNonEffectueFin = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setPreavisNonEffectueFin($preavisNonEffectueFin);
        $this->assertSame($preavisNonEffectueFin, $obj->getPreavisNonEffectueFin());
    }

    /**
     * Tests the setPreavisNonEffectuePaye() method.
     *
     * @return void
     */
    public function testSetPreavisNonEffectuePaye() {

        $obj = new AttestationAssedic();

        $obj->setPreavisNonEffectuePaye(true);
        $this->assertEquals(true, $obj->getPreavisNonEffectuePaye());
    }

    /**
     * Tests the setPrecompteStc() method.
     *
     * @return void
     */
    public function testSetPrecompteStc() {

        $obj = new AttestationAssedic();

        $obj->setPrecompteStc(10.092018);
        $this->assertEquals(10.092018, $obj->getPrecompteStc());
    }

    /**
     * Tests the setPrenom() method.
     *
     * @return void
     */
    public function testSetPrenom() {

        $obj = new AttestationAssedic();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests the setQualiteEmploi() method.
     *
     * @return void
     */
    public function testSetQualiteEmploi() {

        $obj = new AttestationAssedic();

        $obj->setQualiteEmploi("qualiteEmploi");
        $this->assertEquals("qualiteEmploi", $obj->getQualiteEmploi());
    }

    /**
     * Tests the setReclassement() method.
     *
     * @return void
     */
    public function testSetReclassement() {

        $obj = new AttestationAssedic();

        $obj->setReclassement(true);
        $this->assertEquals(true, $obj->getReclassement());
    }

    /**
     * Tests the setRefusSalarie() method.
     *
     * @return void
     */
    public function testSetRefusSalarie() {

        $obj = new AttestationAssedic();

        $obj->setRefusSalarie(true);
        $this->assertEquals(true, $obj->getRefusSalarie());
    }

    /**
     * Tests the setRetraiteAgirc() method.
     *
     * @return void
     */
    public function testSetRetraiteAgirc() {

        $obj = new AttestationAssedic();

        $obj->setRetraiteAgirc("retraiteAgirc");
        $this->assertEquals("retraiteAgirc", $obj->getRetraiteAgirc());
    }

    /**
     * Tests the setRetraiteAgircCompl() method.
     *
     * @return void
     */
    public function testSetRetraiteAgircCompl() {

        $obj = new AttestationAssedic();

        $obj->setRetraiteAgircCompl("retraiteAgircCompl");
        $this->assertEquals("retraiteAgircCompl", $obj->getRetraiteAgircCompl());
    }

    /**
     * Tests the setRetraiteArrco() method.
     *
     * @return void
     */
    public function testSetRetraiteArrco() {

        $obj = new AttestationAssedic();

        $obj->setRetraiteArrco("retraiteArrco");
        $this->assertEquals("retraiteArrco", $obj->getRetraiteArrco());
    }

    /**
     * Tests the setRetraiteArrcoCompl() method.
     *
     * @return void
     */
    public function testSetRetraiteArrcoCompl() {

        $obj = new AttestationAssedic();

        $obj->setRetraiteArrcoCompl("retraiteArrcoCompl");
        $this->assertEquals("retraiteArrcoCompl", $obj->getRetraiteArrcoCompl());
    }

    /**
     * Tests the setRetraiteAutre() method.
     *
     * @return void
     */
    public function testSetRetraiteAutre() {

        $obj = new AttestationAssedic();

        $obj->setRetraiteAutre("retraiteAutre");
        $this->assertEquals("retraiteAutre", $obj->getRetraiteAutre());
    }

    /**
     * Tests the setRetraiteAutreCompl() method.
     *
     * @return void
     */
    public function testSetRetraiteAutreCompl() {

        $obj = new AttestationAssedic();

        $obj->setRetraiteAutreCompl("retraiteAutreCompl");
        $this->assertEquals("retraiteAutreCompl", $obj->getRetraiteAutreCompl());
    }

    /**
     * Tests the setSalaireBrut() method.
     *
     * @return void
     */
    public function testSetSalaireBrut() {

        $obj = new AttestationAssedic();

        $obj->setSalaireBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireBrut());
    }

    /**
     * Tests the setSignatureCodeQualite() method.
     *
     * @return void
     */
    public function testSetSignatureCodeQualite() {

        $obj = new AttestationAssedic();

        $obj->setSignatureCodeQualite("signatureCodeQualite");
        $this->assertEquals("signatureCodeQualite", $obj->getSignatureCodeQualite());
    }

    /**
     * Tests the setSignatureContact() method.
     *
     * @return void
     */
    public function testSetSignatureContact() {

        $obj = new AttestationAssedic();

        $obj->setSignatureContact("signatureContact");
        $this->assertEquals("signatureContact", $obj->getSignatureContact());
    }

    /**
     * Tests the setSignatureDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetSignatureDate() {

        // Set a Date/time mock.
        $signatureDate = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setSignatureDate($signatureDate);
        $this->assertSame($signatureDate, $obj->getSignatureDate());
    }

    /**
     * Tests the setSignatureNom() method.
     *
     * @return void
     */
    public function testSetSignatureNom() {

        $obj = new AttestationAssedic();

        $obj->setSignatureNom("signatureNom");
        $this->assertEquals("signatureNom", $obj->getSignatureNom());
    }

    /**
     * Tests the setSignaturePrenom() method.
     *
     * @return void
     */
    public function testSetSignaturePrenom() {

        $obj = new AttestationAssedic();

        $obj->setSignaturePrenom("signaturePrenom");
        $this->assertEquals("signaturePrenom", $obj->getSignaturePrenom());
    }

    /**
     * Tests the setSignatureQualite() method.
     *
     * @return void
     */
    public function testSetSignatureQualite() {

        $obj = new AttestationAssedic();

        $obj->setSignatureQualite("signatureQualite");
        $this->assertEquals("signatureQualite", $obj->getSignatureQualite());
    }

    /**
     * Tests the setSignatureTel() method.
     *
     * @return void
     */
    public function testSetSignatureTel() {

        $obj = new AttestationAssedic();

        $obj->setSignatureTel("signatureTel");
        $this->assertEquals("signatureTel", $obj->getSignatureTel());
    }

    /**
     * Tests the setSignatureVille() method.
     *
     * @return void
     */
    public function testSetSignatureVille() {

        $obj = new AttestationAssedic();

        $obj->setSignatureVille("signatureVille");
        $this->assertEquals("signatureVille", $obj->getSignatureVille());
    }

    /**
     * Tests the setSiret() method.
     *
     * @return void
     */
    public function testSetSiret() {

        $obj = new AttestationAssedic();

        $obj->setSiret("siret");
        $this->assertEquals("siret", $obj->getSiret());
    }

    /**
     * Tests the setSoldeToutCompte() method.
     *
     * @return void
     */
    public function testSetSoldeToutCompte() {

        $obj = new AttestationAssedic();

        $obj->setSoldeToutCompte("soldeToutCompte");
        $this->assertEquals("soldeToutCompte", $obj->getSoldeToutCompte());
    }

    /**
     * Tests the setSommesPeriodeDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetSommesPeriodeDeb() {

        // Set a Date/time mock.
        $sommesPeriodeDeb = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setSommesPeriodeDeb($sommesPeriodeDeb);
        $this->assertSame($sommesPeriodeDeb, $obj->getSommesPeriodeDeb());
    }

    /**
     * Tests the setSommesPeriodeDeb2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetSommesPeriodeDeb2() {

        // Set a Date/time mock.
        $sommesPeriodeDeb2 = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setSommesPeriodeDeb2($sommesPeriodeDeb2);
        $this->assertSame($sommesPeriodeDeb2, $obj->getSommesPeriodeDeb2());
    }

    /**
     * Tests the setSommesPeriodeFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetSommesPeriodeFin() {

        // Set a Date/time mock.
        $sommesPeriodeFin = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setSommesPeriodeFin($sommesPeriodeFin);
        $this->assertSame($sommesPeriodeFin, $obj->getSommesPeriodeFin());
    }

    /**
     * Tests the setSommesPeriodeFin2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetSommesPeriodeFin2() {

        // Set a Date/time mock.
        $sommesPeriodeFin2 = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setSommesPeriodeFin2($sommesPeriodeFin2);
        $this->assertSame($sommesPeriodeFin2, $obj->getSommesPeriodeFin2());
    }

    /**
     * Tests the setSpecialSecu() method.
     *
     * @return void
     */
    public function testSetSpecialSecu() {

        $obj = new AttestationAssedic();

        $obj->setSpecialSecu("specialSecu");
        $this->assertEquals("specialSecu", $obj->getSpecialSecu());
    }

    /**
     * Tests the setStatut() method.
     *
     * @return void
     */
    public function testSetStatut() {

        $obj = new AttestationAssedic();

        $obj->setStatut("statut");
        $this->assertEquals("statut", $obj->getStatut());
    }

    /**
     * Tests the setStatutCadre() method.
     *
     * @return void
     */
    public function testSetStatutCadre() {

        $obj = new AttestationAssedic();

        $obj->setStatutCadre(true);
        $this->assertEquals(true, $obj->getStatutCadre());
    }

    /**
     * Tests the setStatutPartAutre() method.
     *
     * @return void
     */
    public function testSetStatutPartAutre() {

        $obj = new AttestationAssedic();

        $obj->setStatutPartAutre("statutPartAutre");
        $this->assertEquals("statutPartAutre", $obj->getStatutPartAutre());
    }

    /**
     * Tests the setTitre() method.
     *
     * @return void
     */
    public function testSetTitre() {

        $obj = new AttestationAssedic();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Tests the setTotalSommes() method.
     *
     * @return void
     */
    public function testSetTotalSommes() {

        $obj = new AttestationAssedic();

        $obj->setTotalSommes(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalSommes());
    }

    /**
     * Tests the setTransactionEnCours() method.
     *
     * @return void
     */
    public function testSetTransactionEnCours() {

        $obj = new AttestationAssedic();

        $obj->setTransactionEnCours(true);
        $this->assertEquals(true, $obj->getTransactionEnCours());
    }

    /**
     * Tests the setTypeAssedic() method.
     *
     * @return void
     */
    public function testSetTypeAssedic() {

        $obj = new AttestationAssedic();

        $obj->setTypeAssedic("typeAssedic");
        $this->assertEquals("typeAssedic", $obj->getTypeAssedic());
    }

    /**
     * Tests the setTypeDiffHoraire() method.
     *
     * @return void
     */
    public function testSetTypeDiffHoraire() {

        $obj = new AttestationAssedic();

        $obj->setTypeDiffHoraire("typeDiffHoraire");
        $this->assertEquals("typeDiffHoraire", $obj->getTypeDiffHoraire());
    }

    /**
     * Tests the setTypeSociete() method.
     *
     * @return void
     */
    public function testSetTypeSociete() {

        $obj = new AttestationAssedic();

        $obj->setTypeSociete("typeSociete");
        $this->assertEquals("typeSociete", $obj->getTypeSociete());
    }

    /**
     * Tests the setUrssaf() method.
     *
     * @return void
     */
    public function testSetUrssaf() {

        $obj = new AttestationAssedic();

        $obj->setUrssaf("urssaf");
        $this->assertEquals("urssaf", $obj->getUrssaf());
    }

    /**
     * Tests the setValiditeConventionFne() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetValiditeConventionFne() {

        // Set a Date/time mock.
        $validiteConventionFne = new DateTime("2018-09-10");

        $obj = new AttestationAssedic();

        $obj->setValiditeConventionFne($validiteConventionFne);
        $this->assertSame($validiteConventionFne, $obj->getValiditeConventionFne());
    }
}
