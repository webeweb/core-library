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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\AttestationAt;

/**
 * Attestation at test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class AttestationAtTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new AttestationAt();

        $this->assertNull($obj->getAccident());
        $this->assertNull($obj->getAccidentMoisEmbauche());
        $this->assertNull($obj->getAdresse1());
        $this->assertNull($obj->getAdresse3());
        $this->assertNull($obj->getAnciennete());
        $this->assertNull($obj->getAutreVivtime());
        $this->assertNull($obj->getCasPart());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getDateAccident());
        $this->assertNull($obj->getDateContrat());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getDernHeure());
        $this->assertNull($obj->getDernJ());
        $this->assertNull($obj->getEmbauche());
        $this->assertNull($obj->getEmploi());
        $this->assertNull($obj->getEtblAAdresse1());
        $this->assertNull($obj->getEtblAAdresse2());
        $this->assertNull($obj->getEtblAAdresse3());
        $this->assertNull($obj->getEtblATel());
        $this->assertNull($obj->getEtblAdresse1());
        $this->assertNull($obj->getEtblAdresse2());
        $this->assertNull($obj->getEtblAdresse3());
        $this->assertNull($obj->getEtblNatureActivite());
        $this->assertNull($obj->getEtblNoAdherent());
        $this->assertNull($obj->getEtblNomPrenom());
        $this->assertNull($obj->getEtblRaisonSociale());
        $this->assertNull($obj->getEtblTel());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getIntegral());
        $this->assertNull($obj->getIntituleCompte());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLieuNaissance());
        $this->assertNull($obj->getMaintien());
        $this->assertNull($obj->getMaladiePro());
        $this->assertNull($obj->getMedecin());
        $this->assertNull($obj->getMontantCotisTheo());
        $this->assertNull($obj->getMontantSalTheo());
        $this->assertNull($obj->getNir());
        $this->assertNull($obj->getNationaliteAutre());
        $this->assertNull($obj->getNationaliteCee());
        $this->assertNull($obj->getNationaliteFr());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNomMarital());
        $this->assertNull($obj->getNonRepris());
        $this->assertNull($obj->getNumContrat());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPartiel());
        $this->assertNull($obj->getPerReferenceAu());
        $this->assertNull($obj->getPerReferenceCotisations());
        $this->assertNull($obj->getPerReferenceDu());
        $this->assertNull($obj->getPerReferenceMontant());
        $this->assertNull($obj->getPerReferenceNbHeures());
        $this->assertNull($obj->getPerReferenceSalaires());
        $this->assertNull($obj->getPeriodeSubrAu());
        $this->assertNull($obj->getPeriodeSubrDu());
        $this->assertNull($obj->getPrenomEmploye());
        $this->assertNull($obj->getQualification());
        $this->assertNull($obj->getReprise());
        $this->assertNull($obj->getRisqueAt());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSalaireMini());
        $this->assertNull($obj->getSexe());
        $this->assertNull($obj->getSignatureDate());
        $this->assertNull($obj->getSignatureNom());
        $this->assertNull($obj->getSignatureQualite());
        $this->assertNull($obj->getSignatureVille());
        $this->assertNull($obj->getSubIntegral());
        $this->assertNull($obj->getSubPartiel());
        $this->assertNull($obj->getSubrogationDureeMax());
        $this->assertNull($obj->getSubrogationMontant());
        $this->assertNull($obj->getTypeAttestation());
    }

    /**
     * Tests the setAccident() method.
     *
     * @return void
     */
    public function testSetAccident() {

        $obj = new AttestationAt();

        $obj->setAccident(true);
        $this->assertEquals(true, $obj->getAccident());
    }

    /**
     * Tests the setAccidentMoisEmbauche() method.
     *
     * @return void
     */
    public function testSetAccidentMoisEmbauche() {

        $obj = new AttestationAt();

        $obj->setAccidentMoisEmbauche(true);
        $this->assertEquals(true, $obj->getAccidentMoisEmbauche());
    }

    /**
     * Tests the setAdresse1() method.
     *
     * @return void
     */
    public function testSetAdresse1() {

        $obj = new AttestationAt();

        $obj->setAdresse1("adresse1");
        $this->assertEquals("adresse1", $obj->getAdresse1());
    }

    /**
     * Tests the setAdresse3() method.
     *
     * @return void
     */
    public function testSetAdresse3() {

        $obj = new AttestationAt();

        $obj->setAdresse3("adresse3");
        $this->assertEquals("adresse3", $obj->getAdresse3());
    }

    /**
     * Tests the setAnciennete() method.
     *
     * @return void
     */
    public function testSetAnciennete() {

        $obj = new AttestationAt();

        $obj->setAnciennete("anciennete");
        $this->assertEquals("anciennete", $obj->getAnciennete());
    }

    /**
     * Tests the setAutreVivtime() method.
     *
     * @return void
     */
    public function testSetAutreVivtime() {

        $obj = new AttestationAt();

        $obj->setAutreVivtime(true);
        $this->assertEquals(true, $obj->getAutreVivtime());
    }

    /**
     * Tests the setCasPart() method.
     *
     * @return void
     */
    public function testSetCasPart() {

        $obj = new AttestationAt();

        $obj->setCasPart("casPart");
        $this->assertEquals("casPart", $obj->getCasPart());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new AttestationAt();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setDateAccident() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAccident() {

        // Set a Date/time mock.
        $dateAccident = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setDateAccident($dateAccident);
        $this->assertSame($dateAccident, $obj->getDateAccident());
    }

    /**
     * Tests the setDateContrat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateContrat() {

        // Set a Date/time mock.
        $dateContrat = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setDateContrat($dateContrat);
        $this->assertSame($dateContrat, $obj->getDateContrat());
    }

    /**
     * Tests the setDateNaissance() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNaissance() {

        // Set a Date/time mock.
        $dateNaissance = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setDateNaissance($dateNaissance);
        $this->assertSame($dateNaissance, $obj->getDateNaissance());
    }

    /**
     * Tests the setDernHeure() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDernHeure() {

        // Set a Date/time mock.
        $dernHeure = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setDernHeure($dernHeure);
        $this->assertSame($dernHeure, $obj->getDernHeure());
    }

    /**
     * Tests the setDernJ() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDernJ() {

        // Set a Date/time mock.
        $dernJ = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setDernJ($dernJ);
        $this->assertSame($dernJ, $obj->getDernJ());
    }

    /**
     * Tests the setEmbauche() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetEmbauche() {

        // Set a Date/time mock.
        $embauche = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setEmbauche($embauche);
        $this->assertSame($embauche, $obj->getEmbauche());
    }

    /**
     * Tests the setEmploi() method.
     *
     * @return void
     */
    public function testSetEmploi() {

        $obj = new AttestationAt();

        $obj->setEmploi("emploi");
        $this->assertEquals("emploi", $obj->getEmploi());
    }

    /**
     * Tests the setEtblAAdresse1() method.
     *
     * @return void
     */
    public function testSetEtblAAdresse1() {

        $obj = new AttestationAt();

        $obj->setEtblAAdresse1("etblAAdresse1");
        $this->assertEquals("etblAAdresse1", $obj->getEtblAAdresse1());
    }

    /**
     * Tests the setEtblAAdresse2() method.
     *
     * @return void
     */
    public function testSetEtblAAdresse2() {

        $obj = new AttestationAt();

        $obj->setEtblAAdresse2("etblAAdresse2");
        $this->assertEquals("etblAAdresse2", $obj->getEtblAAdresse2());
    }

    /**
     * Tests the setEtblAAdresse3() method.
     *
     * @return void
     */
    public function testSetEtblAAdresse3() {

        $obj = new AttestationAt();

        $obj->setEtblAAdresse3("etblAAdresse3");
        $this->assertEquals("etblAAdresse3", $obj->getEtblAAdresse3());
    }

    /**
     * Tests the setEtblATel() method.
     *
     * @return void
     */
    public function testSetEtblATel() {

        $obj = new AttestationAt();

        $obj->setEtblATel("etblATel");
        $this->assertEquals("etblATel", $obj->getEtblATel());
    }

    /**
     * Tests the setEtblAdresse1() method.
     *
     * @return void
     */
    public function testSetEtblAdresse1() {

        $obj = new AttestationAt();

        $obj->setEtblAdresse1("etblAdresse1");
        $this->assertEquals("etblAdresse1", $obj->getEtblAdresse1());
    }

    /**
     * Tests the setEtblAdresse2() method.
     *
     * @return void
     */
    public function testSetEtblAdresse2() {

        $obj = new AttestationAt();

        $obj->setEtblAdresse2("etblAdresse2");
        $this->assertEquals("etblAdresse2", $obj->getEtblAdresse2());
    }

    /**
     * Tests the setEtblAdresse3() method.
     *
     * @return void
     */
    public function testSetEtblAdresse3() {

        $obj = new AttestationAt();

        $obj->setEtblAdresse3("etblAdresse3");
        $this->assertEquals("etblAdresse3", $obj->getEtblAdresse3());
    }

    /**
     * Tests the setEtblNatureActivite() method.
     *
     * @return void
     */
    public function testSetEtblNatureActivite() {

        $obj = new AttestationAt();

        $obj->setEtblNatureActivite("etblNatureActivite");
        $this->assertEquals("etblNatureActivite", $obj->getEtblNatureActivite());
    }

    /**
     * Tests the setEtblNoAdherent() method.
     *
     * @return void
     */
    public function testSetEtblNoAdherent() {

        $obj = new AttestationAt();

        $obj->setEtblNoAdherent("etblNoAdherent");
        $this->assertEquals("etblNoAdherent", $obj->getEtblNoAdherent());
    }

    /**
     * Tests the setEtblNomPrenom() method.
     *
     * @return void
     */
    public function testSetEtblNomPrenom() {

        $obj = new AttestationAt();

        $obj->setEtblNomPrenom("etblNomPrenom");
        $this->assertEquals("etblNomPrenom", $obj->getEtblNomPrenom());
    }

    /**
     * Tests the setEtblRaisonSociale() method.
     *
     * @return void
     */
    public function testSetEtblRaisonSociale() {

        $obj = new AttestationAt();

        $obj->setEtblRaisonSociale("etblRaisonSociale");
        $this->assertEquals("etblRaisonSociale", $obj->getEtblRaisonSociale());
    }

    /**
     * Tests the setEtblTel() method.
     *
     * @return void
     */
    public function testSetEtblTel() {

        $obj = new AttestationAt();

        $obj->setEtblTel("etblTel");
        $this->assertEquals("etblTel", $obj->getEtblTel());
    }

    /**
     * Tests the setIban() method.
     *
     * @return void
     */
    public function testSetIban() {

        $obj = new AttestationAt();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Tests the setIntegral() method.
     *
     * @return void
     */
    public function testSetIntegral() {

        $obj = new AttestationAt();

        $obj->setIntegral(true);
        $this->assertEquals(true, $obj->getIntegral());
    }

    /**
     * Tests the setIntituleCompte() method.
     *
     * @return void
     */
    public function testSetIntituleCompte() {

        $obj = new AttestationAt();

        $obj->setIntituleCompte("intituleCompte");
        $this->assertEquals("intituleCompte", $obj->getIntituleCompte());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument() {

        $obj = new AttestationAt();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setLieuNaissance() method.
     *
     * @return void
     */
    public function testSetLieuNaissance() {

        $obj = new AttestationAt();

        $obj->setLieuNaissance("lieuNaissance");
        $this->assertEquals("lieuNaissance", $obj->getLieuNaissance());
    }

    /**
     * Tests the setMaintien() method.
     *
     * @return void
     */
    public function testSetMaintien() {

        $obj = new AttestationAt();

        $obj->setMaintien(true);
        $this->assertEquals(true, $obj->getMaintien());
    }

    /**
     * Tests the setMaladiePro() method.
     *
     * @return void
     */
    public function testSetMaladiePro() {

        $obj = new AttestationAt();

        $obj->setMaladiePro(true);
        $this->assertEquals(true, $obj->getMaladiePro());
    }

    /**
     * Tests the setMedecin() method.
     *
     * @return void
     */
    public function testSetMedecin() {

        $obj = new AttestationAt();

        $obj->setMedecin("medecin");
        $this->assertEquals("medecin", $obj->getMedecin());
    }

    /**
     * Tests the setMontantCotisTheo() method.
     *
     * @return void
     */
    public function testSetMontantCotisTheo() {

        $obj = new AttestationAt();

        $obj->setMontantCotisTheo(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCotisTheo());
    }

    /**
     * Tests the setMontantSalTheo() method.
     *
     * @return void
     */
    public function testSetMontantSalTheo() {

        $obj = new AttestationAt();

        $obj->setMontantSalTheo(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSalTheo());
    }

    /**
     * Tests the setNationaliteAutre() method.
     *
     * @return void
     */
    public function testSetNationaliteAutre() {

        $obj = new AttestationAt();

        $obj->setNationaliteAutre(true);
        $this->assertEquals(true, $obj->getNationaliteAutre());
    }

    /**
     * Tests the setNationaliteCee() method.
     *
     * @return void
     */
    public function testSetNationaliteCee() {

        $obj = new AttestationAt();

        $obj->setNationaliteCee(true);
        $this->assertEquals(true, $obj->getNationaliteCee());
    }

    /**
     * Tests the setNationaliteFr() method.
     *
     * @return void
     */
    public function testSetNationaliteFr() {

        $obj = new AttestationAt();

        $obj->setNationaliteFr(true);
        $this->assertEquals(true, $obj->getNationaliteFr());
    }

    /**
     * Tests the setNir() method.
     *
     * @return void
     */
    public function testSetNir() {

        $obj = new AttestationAt();

        $obj->setNir("nir");
        $this->assertEquals("nir", $obj->getNir());
    }

    /**
     * Tests the setNomEmploye() method.
     *
     * @return void
     */
    public function testSetNomEmploye() {

        $obj = new AttestationAt();

        $obj->setNomEmploye("nomEmploye");
        $this->assertEquals("nomEmploye", $obj->getNomEmploye());
    }

    /**
     * Tests the setNomMarital() method.
     *
     * @return void
     */
    public function testSetNomMarital() {

        $obj = new AttestationAt();

        $obj->setNomMarital("nomMarital");
        $this->assertEquals("nomMarital", $obj->getNomMarital());
    }

    /**
     * Tests the setNonRepris() method.
     *
     * @return void
     */
    public function testSetNonRepris() {

        $obj = new AttestationAt();

        $obj->setNonRepris(true);
        $this->assertEquals(true, $obj->getNonRepris());
    }

    /**
     * Tests the setNumContrat() method.
     *
     * @return void
     */
    public function testSetNumContrat() {

        $obj = new AttestationAt();

        $obj->setNumContrat("numContrat");
        $this->assertEquals("numContrat", $obj->getNumContrat());
    }

    /**
     * Tests the setNumeroAttestation() method.
     *
     * @return void
     */
    public function testSetNumeroAttestation() {

        $obj = new AttestationAt();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new AttestationAt();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPartiel() method.
     *
     * @return void
     */
    public function testSetPartiel() {

        $obj = new AttestationAt();

        $obj->setPartiel(true);
        $this->assertEquals(true, $obj->getPartiel());
    }

    /**
     * Tests the setPerReferenceAu() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerReferenceAu() {

        // Set a Date/time mock.
        $perReferenceAu = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setPerReferenceAu($perReferenceAu);
        $this->assertSame($perReferenceAu, $obj->getPerReferenceAu());
    }

    /**
     * Tests the setPerReferenceCotisations() method.
     *
     * @return void
     */
    public function testSetPerReferenceCotisations() {

        $obj = new AttestationAt();

        $obj->setPerReferenceCotisations(10.092018);
        $this->assertEquals(10.092018, $obj->getPerReferenceCotisations());
    }

    /**
     * Tests the setPerReferenceDu() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerReferenceDu() {

        // Set a Date/time mock.
        $perReferenceDu = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setPerReferenceDu($perReferenceDu);
        $this->assertSame($perReferenceDu, $obj->getPerReferenceDu());
    }

    /**
     * Tests the setPerReferenceMontant() method.
     *
     * @return void
     */
    public function testSetPerReferenceMontant() {

        $obj = new AttestationAt();

        $obj->setPerReferenceMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getPerReferenceMontant());
    }

    /**
     * Tests the setPerReferenceNbHeures() method.
     *
     * @return void
     */
    public function testSetPerReferenceNbHeures() {

        $obj = new AttestationAt();

        $obj->setPerReferenceNbHeures(10.092018);
        $this->assertEquals(10.092018, $obj->getPerReferenceNbHeures());
    }

    /**
     * Tests the setPerReferenceSalaires() method.
     *
     * @return void
     */
    public function testSetPerReferenceSalaires() {

        $obj = new AttestationAt();

        $obj->setPerReferenceSalaires(10.092018);
        $this->assertEquals(10.092018, $obj->getPerReferenceSalaires());
    }

    /**
     * Tests the setPeriodeSubrAu() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeSubrAu() {

        // Set a Date/time mock.
        $periodeSubrAu = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setPeriodeSubrAu($periodeSubrAu);
        $this->assertSame($periodeSubrAu, $obj->getPeriodeSubrAu());
    }

    /**
     * Tests the setPeriodeSubrDu() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeSubrDu() {

        // Set a Date/time mock.
        $periodeSubrDu = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setPeriodeSubrDu($periodeSubrDu);
        $this->assertSame($periodeSubrDu, $obj->getPeriodeSubrDu());
    }

    /**
     * Tests the setPrenomEmploye() method.
     *
     * @return void
     */
    public function testSetPrenomEmploye() {

        $obj = new AttestationAt();

        $obj->setPrenomEmploye("prenomEmploye");
        $this->assertEquals("prenomEmploye", $obj->getPrenomEmploye());
    }

    /**
     * Tests the setQualification() method.
     *
     * @return void
     */
    public function testSetQualification() {

        $obj = new AttestationAt();

        $obj->setQualification("qualification");
        $this->assertEquals("qualification", $obj->getQualification());
    }

    /**
     * Tests the setReprise() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetReprise() {

        // Set a Date/time mock.
        $reprise = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setReprise($reprise);
        $this->assertSame($reprise, $obj->getReprise());
    }

    /**
     * Tests the setRisqueAt() method.
     *
     * @return void
     */
    public function testSetRisqueAt() {

        $obj = new AttestationAt();

        $obj->setRisqueAt("risqueAt");
        $this->assertEquals("risqueAt", $obj->getRisqueAt());
    }

    /**
     * Tests the setSalaireMini() method.
     *
     * @return void
     */
    public function testSetSalaireMini() {

        $obj = new AttestationAt();

        $obj->setSalaireMini(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireMini());
    }

    /**
     * Tests the setSexe() method.
     *
     * @return void
     */
    public function testSetSexe() {

        $obj = new AttestationAt();

        $obj->setSexe("sexe");
        $this->assertEquals("sexe", $obj->getSexe());
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

        $obj = new AttestationAt();

        $obj->setSignatureDate($signatureDate);
        $this->assertSame($signatureDate, $obj->getSignatureDate());
    }

    /**
     * Tests the setSignatureNom() method.
     *
     * @return void
     */
    public function testSetSignatureNom() {

        $obj = new AttestationAt();

        $obj->setSignatureNom("signatureNom");
        $this->assertEquals("signatureNom", $obj->getSignatureNom());
    }

    /**
     * Tests the setSignatureQualite() method.
     *
     * @return void
     */
    public function testSetSignatureQualite() {

        $obj = new AttestationAt();

        $obj->setSignatureQualite("signatureQualite");
        $this->assertEquals("signatureQualite", $obj->getSignatureQualite());
    }

    /**
     * Tests the setSignatureVille() method.
     *
     * @return void
     */
    public function testSetSignatureVille() {

        $obj = new AttestationAt();

        $obj->setSignatureVille("signatureVille");
        $this->assertEquals("signatureVille", $obj->getSignatureVille());
    }

    /**
     * Tests the setSiret() method.
     *
     * @return void
     */
    public function testSetSiret() {

        $obj = new AttestationAt();

        $obj->setSiret("siret");
        $this->assertEquals("siret", $obj->getSiret());
    }

    /**
     * Tests the setSubIntegral() method.
     *
     * @return void
     */
    public function testSetSubIntegral() {

        $obj = new AttestationAt();

        $obj->setSubIntegral(true);
        $this->assertEquals(true, $obj->getSubIntegral());
    }

    /**
     * Tests the setSubPartiel() method.
     *
     * @return void
     */
    public function testSetSubPartiel() {

        $obj = new AttestationAt();

        $obj->setSubPartiel(true);
        $this->assertEquals(true, $obj->getSubPartiel());
    }

    /**
     * Tests the setSubrogationDureeMax() method.
     *
     * @return void
     */
    public function testSetSubrogationDureeMax() {

        $obj = new AttestationAt();

        $obj->setSubrogationDureeMax("subrogationDureeMax");
        $this->assertEquals("subrogationDureeMax", $obj->getSubrogationDureeMax());
    }

    /**
     * Tests the setSubrogationMontant() method.
     *
     * @return void
     */
    public function testSetSubrogationMontant() {

        $obj = new AttestationAt();

        $obj->setSubrogationMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getSubrogationMontant());
    }

    /**
     * Tests the setTypeAttestation() method.
     *
     * @return void
     */
    public function testSetTypeAttestation() {

        $obj = new AttestationAt();

        $obj->setTypeAttestation("typeAttestation");
        $this->assertEquals("typeAttestation", $obj->getTypeAttestation());
    }
}
