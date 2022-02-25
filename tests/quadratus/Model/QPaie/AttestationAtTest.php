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
use Exception;
use WBW\Library\Quadratus\Model\QPaie\AttestationAt;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Attestation at test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class AttestationAtTest extends AbstractTestCase {

    /**
     * Tests setAccident()
     *
     * @return void
     */
    public function testSetAccident(): void {

        $obj = new AttestationAt();

        $obj->setAccident(true);
        $this->assertEquals(true, $obj->getAccident());
    }

    /**
     * Tests setAccidentMoisEmbauche()
     *
     * @return void
     */
    public function testSetAccidentMoisEmbauche(): void {

        $obj = new AttestationAt();

        $obj->setAccidentMoisEmbauche(true);
        $this->assertEquals(true, $obj->getAccidentMoisEmbauche());
    }

    /**
     * Tests setAdresse1()
     *
     * @return void
     */
    public function testSetAdresse1(): void {

        $obj = new AttestationAt();

        $obj->setAdresse1("adresse1");
        $this->assertEquals("adresse1", $obj->getAdresse1());
    }

    /**
     * Tests setAdresse3()
     *
     * @return void
     */
    public function testSetAdresse3(): void {

        $obj = new AttestationAt();

        $obj->setAdresse3("adresse3");
        $this->assertEquals("adresse3", $obj->getAdresse3());
    }

    /**
     * Tests setAnciennete()
     *
     * @return void
     */
    public function testSetAnciennete(): void {

        $obj = new AttestationAt();

        $obj->setAnciennete("anciennete");
        $this->assertEquals("anciennete", $obj->getAnciennete());
    }

    /**
     * Tests setAutreVivtime()
     *
     * @return void
     */
    public function testSetAutreVivtime(): void {

        $obj = new AttestationAt();

        $obj->setAutreVivtime(true);
        $this->assertEquals(true, $obj->getAutreVivtime());
    }

    /**
     * Tests setCasPart()
     *
     * @return void
     */
    public function testSetCasPart(): void {

        $obj = new AttestationAt();

        $obj->setCasPart("casPart");
        $this->assertEquals("casPart", $obj->getCasPart());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new AttestationAt();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setDateAccident()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAccident(): void {

        // Set a Date/time mock.
        $dateAccident = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setDateAccident($dateAccident);
        $this->assertSame($dateAccident, $obj->getDateAccident());
    }

    /**
     * Tests setDateContrat()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateContrat(): void {

        // Set a Date/time mock.
        $dateContrat = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setDateContrat($dateContrat);
        $this->assertSame($dateContrat, $obj->getDateContrat());
    }

    /**
     * Tests setDateNaissance()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNaissance(): void {

        // Set a Date/time mock.
        $dateNaissance = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setDateNaissance($dateNaissance);
        $this->assertSame($dateNaissance, $obj->getDateNaissance());
    }

    /**
     * Tests setDernHeure()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDernHeure(): void {

        // Set a Date/time mock.
        $dernHeure = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setDernHeure($dernHeure);
        $this->assertSame($dernHeure, $obj->getDernHeure());
    }

    /**
     * Tests setDernJ()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDernJ(): void {

        // Set a Date/time mock.
        $dernJ = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setDernJ($dernJ);
        $this->assertSame($dernJ, $obj->getDernJ());
    }

    /**
     * Tests setEmbauche()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetEmbauche(): void {

        // Set a Date/time mock.
        $embauche = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setEmbauche($embauche);
        $this->assertSame($embauche, $obj->getEmbauche());
    }

    /**
     * Tests setEmploi()
     *
     * @return void
     */
    public function testSetEmploi(): void {

        $obj = new AttestationAt();

        $obj->setEmploi("emploi");
        $this->assertEquals("emploi", $obj->getEmploi());
    }

    /**
     * Tests setEtblAAdresse1()
     *
     * @return void
     */
    public function testSetEtblAAdresse1(): void {

        $obj = new AttestationAt();

        $obj->setEtblAAdresse1("etblAAdresse1");
        $this->assertEquals("etblAAdresse1", $obj->getEtblAAdresse1());
    }

    /**
     * Tests setEtblAAdresse2()
     *
     * @return void
     */
    public function testSetEtblAAdresse2(): void {

        $obj = new AttestationAt();

        $obj->setEtblAAdresse2("etblAAdresse2");
        $this->assertEquals("etblAAdresse2", $obj->getEtblAAdresse2());
    }

    /**
     * Tests setEtblAAdresse3()
     *
     * @return void
     */
    public function testSetEtblAAdresse3(): void {

        $obj = new AttestationAt();

        $obj->setEtblAAdresse3("etblAAdresse3");
        $this->assertEquals("etblAAdresse3", $obj->getEtblAAdresse3());
    }

    /**
     * Tests setEtblATel()
     *
     * @return void
     */
    public function testSetEtblATel(): void {

        $obj = new AttestationAt();

        $obj->setEtblATel("etblATel");
        $this->assertEquals("etblATel", $obj->getEtblATel());
    }

    /**
     * Tests setEtblAdresse1()
     *
     * @return void
     */
    public function testSetEtblAdresse1(): void {

        $obj = new AttestationAt();

        $obj->setEtblAdresse1("etblAdresse1");
        $this->assertEquals("etblAdresse1", $obj->getEtblAdresse1());
    }

    /**
     * Tests setEtblAdresse2()
     *
     * @return void
     */
    public function testSetEtblAdresse2(): void {

        $obj = new AttestationAt();

        $obj->setEtblAdresse2("etblAdresse2");
        $this->assertEquals("etblAdresse2", $obj->getEtblAdresse2());
    }

    /**
     * Tests setEtblAdresse3()
     *
     * @return void
     */
    public function testSetEtblAdresse3(): void {

        $obj = new AttestationAt();

        $obj->setEtblAdresse3("etblAdresse3");
        $this->assertEquals("etblAdresse3", $obj->getEtblAdresse3());
    }

    /**
     * Tests setEtblNatureActivite()
     *
     * @return void
     */
    public function testSetEtblNatureActivite(): void {

        $obj = new AttestationAt();

        $obj->setEtblNatureActivite("etblNatureActivite");
        $this->assertEquals("etblNatureActivite", $obj->getEtblNatureActivite());
    }

    /**
     * Tests setEtblNoAdherent()
     *
     * @return void
     */
    public function testSetEtblNoAdherent(): void {

        $obj = new AttestationAt();

        $obj->setEtblNoAdherent("etblNoAdherent");
        $this->assertEquals("etblNoAdherent", $obj->getEtblNoAdherent());
    }

    /**
     * Tests setEtblNomPrenom()
     *
     * @return void
     */
    public function testSetEtblNomPrenom(): void {

        $obj = new AttestationAt();

        $obj->setEtblNomPrenom("etblNomPrenom");
        $this->assertEquals("etblNomPrenom", $obj->getEtblNomPrenom());
    }

    /**
     * Tests setEtblRaisonSociale()
     *
     * @return void
     */
    public function testSetEtblRaisonSociale(): void {

        $obj = new AttestationAt();

        $obj->setEtblRaisonSociale("etblRaisonSociale");
        $this->assertEquals("etblRaisonSociale", $obj->getEtblRaisonSociale());
    }

    /**
     * Tests setEtblTel()
     *
     * @return void
     */
    public function testSetEtblTel(): void {

        $obj = new AttestationAt();

        $obj->setEtblTel("etblTel");
        $this->assertEquals("etblTel", $obj->getEtblTel());
    }

    /**
     * Tests setIban()
     *
     * @return void
     */
    public function testSetIban(): void {

        $obj = new AttestationAt();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Tests setIntegral()
     *
     * @return void
     */
    public function testSetIntegral(): void {

        $obj = new AttestationAt();

        $obj->setIntegral(true);
        $this->assertEquals(true, $obj->getIntegral());
    }

    /**
     * Tests setIntituleCompte()
     *
     * @return void
     */
    public function testSetIntituleCompte(): void {

        $obj = new AttestationAt();

        $obj->setIntituleCompte("intituleCompte");
        $this->assertEquals("intituleCompte", $obj->getIntituleCompte());
    }

    /**
     * Tests setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new AttestationAt();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests setLieuNaissance()
     *
     * @return void
     */
    public function testSetLieuNaissance(): void {

        $obj = new AttestationAt();

        $obj->setLieuNaissance("lieuNaissance");
        $this->assertEquals("lieuNaissance", $obj->getLieuNaissance());
    }

    /**
     * Tests setMaintien()
     *
     * @return void
     */
    public function testSetMaintien(): void {

        $obj = new AttestationAt();

        $obj->setMaintien(true);
        $this->assertEquals(true, $obj->getMaintien());
    }

    /**
     * Tests setMaladiePro()
     *
     * @return void
     */
    public function testSetMaladiePro(): void {

        $obj = new AttestationAt();

        $obj->setMaladiePro(true);
        $this->assertEquals(true, $obj->getMaladiePro());
    }

    /**
     * Tests setMedecin()
     *
     * @return void
     */
    public function testSetMedecin(): void {

        $obj = new AttestationAt();

        $obj->setMedecin("medecin");
        $this->assertEquals("medecin", $obj->getMedecin());
    }

    /**
     * Tests setMontantCotisTheo()
     *
     * @return void
     */
    public function testSetMontantCotisTheo(): void {

        $obj = new AttestationAt();

        $obj->setMontantCotisTheo(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCotisTheo());
    }

    /**
     * Tests setMontantSalTheo()
     *
     * @return void
     */
    public function testSetMontantSalTheo(): void {

        $obj = new AttestationAt();

        $obj->setMontantSalTheo(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSalTheo());
    }

    /**
     * Tests setNationaliteAutre()
     *
     * @return void
     */
    public function testSetNationaliteAutre(): void {

        $obj = new AttestationAt();

        $obj->setNationaliteAutre(true);
        $this->assertEquals(true, $obj->getNationaliteAutre());
    }

    /**
     * Tests setNationaliteCee()
     *
     * @return void
     */
    public function testSetNationaliteCee(): void {

        $obj = new AttestationAt();

        $obj->setNationaliteCee(true);
        $this->assertEquals(true, $obj->getNationaliteCee());
    }

    /**
     * Tests setNationaliteFr()
     *
     * @return void
     */
    public function testSetNationaliteFr(): void {

        $obj = new AttestationAt();

        $obj->setNationaliteFr(true);
        $this->assertEquals(true, $obj->getNationaliteFr());
    }

    /**
     * Tests setNir()
     *
     * @return void
     */
    public function testSetNir(): void {

        $obj = new AttestationAt();

        $obj->setNir("nir");
        $this->assertEquals("nir", $obj->getNir());
    }

    /**
     * Tests setNomEmploye()
     *
     * @return void
     */
    public function testSetNomEmploye(): void {

        $obj = new AttestationAt();

        $obj->setNomEmploye("nomEmploye");
        $this->assertEquals("nomEmploye", $obj->getNomEmploye());
    }

    /**
     * Tests setNomMarital()
     *
     * @return void
     */
    public function testSetNomMarital(): void {

        $obj = new AttestationAt();

        $obj->setNomMarital("nomMarital");
        $this->assertEquals("nomMarital", $obj->getNomMarital());
    }

    /**
     * Tests setNonRepris()
     *
     * @return void
     */
    public function testSetNonRepris(): void {

        $obj = new AttestationAt();

        $obj->setNonRepris(true);
        $this->assertEquals(true, $obj->getNonRepris());
    }

    /**
     * Tests setNumContrat()
     *
     * @return void
     */
    public function testSetNumContrat(): void {

        $obj = new AttestationAt();

        $obj->setNumContrat("numContrat");
        $this->assertEquals("numContrat", $obj->getNumContrat());
    }

    /**
     * Tests setNumeroAttestation()
     *
     * @return void
     */
    public function testSetNumeroAttestation(): void {

        $obj = new AttestationAt();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new AttestationAt();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setPartiel()
     *
     * @return void
     */
    public function testSetPartiel(): void {

        $obj = new AttestationAt();

        $obj->setPartiel(true);
        $this->assertEquals(true, $obj->getPartiel());
    }

    /**
     * Tests setPerReferenceAu()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerReferenceAu(): void {

        // Set a Date/time mock.
        $perReferenceAu = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setPerReferenceAu($perReferenceAu);
        $this->assertSame($perReferenceAu, $obj->getPerReferenceAu());
    }

    /**
     * Tests setPerReferenceCotisations()
     *
     * @return void
     */
    public function testSetPerReferenceCotisations(): void {

        $obj = new AttestationAt();

        $obj->setPerReferenceCotisations(10.092018);
        $this->assertEquals(10.092018, $obj->getPerReferenceCotisations());
    }

    /**
     * Tests setPerReferenceDu()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerReferenceDu(): void {

        // Set a Date/time mock.
        $perReferenceDu = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setPerReferenceDu($perReferenceDu);
        $this->assertSame($perReferenceDu, $obj->getPerReferenceDu());
    }

    /**
     * Tests setPerReferenceMontant()
     *
     * @return void
     */
    public function testSetPerReferenceMontant(): void {

        $obj = new AttestationAt();

        $obj->setPerReferenceMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getPerReferenceMontant());
    }

    /**
     * Tests setPerReferenceNbHeures()
     *
     * @return void
     */
    public function testSetPerReferenceNbHeures(): void {

        $obj = new AttestationAt();

        $obj->setPerReferenceNbHeures(10.092018);
        $this->assertEquals(10.092018, $obj->getPerReferenceNbHeures());
    }

    /**
     * Tests setPerReferenceSalaires()
     *
     * @return void
     */
    public function testSetPerReferenceSalaires(): void {

        $obj = new AttestationAt();

        $obj->setPerReferenceSalaires(10.092018);
        $this->assertEquals(10.092018, $obj->getPerReferenceSalaires());
    }

    /**
     * Tests setPeriodeSubrAu()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeSubrAu(): void {

        // Set a Date/time mock.
        $periodeSubrAu = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setPeriodeSubrAu($periodeSubrAu);
        $this->assertSame($periodeSubrAu, $obj->getPeriodeSubrAu());
    }

    /**
     * Tests setPeriodeSubrDu()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeSubrDu(): void {

        // Set a Date/time mock.
        $periodeSubrDu = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setPeriodeSubrDu($periodeSubrDu);
        $this->assertSame($periodeSubrDu, $obj->getPeriodeSubrDu());
    }

    /**
     * Tests setPrenomEmploye()
     *
     * @return void
     */
    public function testSetPrenomEmploye(): void {

        $obj = new AttestationAt();

        $obj->setPrenomEmploye("prenomEmploye");
        $this->assertEquals("prenomEmploye", $obj->getPrenomEmploye());
    }

    /**
     * Tests setQualification()
     *
     * @return void
     */
    public function testSetQualification(): void {

        $obj = new AttestationAt();

        $obj->setQualification("qualification");
        $this->assertEquals("qualification", $obj->getQualification());
    }

    /**
     * Tests setReprise()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetReprise(): void {

        // Set a Date/time mock.
        $reprise = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setReprise($reprise);
        $this->assertSame($reprise, $obj->getReprise());
    }

    /**
     * Tests setRisqueAt()
     *
     * @return void
     */
    public function testSetRisqueAt(): void {

        $obj = new AttestationAt();

        $obj->setRisqueAt("risqueAt");
        $this->assertEquals("risqueAt", $obj->getRisqueAt());
    }

    /**
     * Tests setSalaireMini()
     *
     * @return void
     */
    public function testSetSalaireMini(): void {

        $obj = new AttestationAt();

        $obj->setSalaireMini(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireMini());
    }

    /**
     * Tests setSexe()
     *
     * @return void
     */
    public function testSetSexe(): void {

        $obj = new AttestationAt();

        $obj->setSexe("sexe");
        $this->assertEquals("sexe", $obj->getSexe());
    }

    /**
     * Tests setSignatureDate()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetSignatureDate(): void {

        // Set a Date/time mock.
        $signatureDate = new DateTime("2018-09-10");

        $obj = new AttestationAt();

        $obj->setSignatureDate($signatureDate);
        $this->assertSame($signatureDate, $obj->getSignatureDate());
    }

    /**
     * Tests setSignatureNom()
     *
     * @return void
     */
    public function testSetSignatureNom(): void {

        $obj = new AttestationAt();

        $obj->setSignatureNom("signatureNom");
        $this->assertEquals("signatureNom", $obj->getSignatureNom());
    }

    /**
     * Tests setSignatureQualite()
     *
     * @return void
     */
    public function testSetSignatureQualite(): void {

        $obj = new AttestationAt();

        $obj->setSignatureQualite("signatureQualite");
        $this->assertEquals("signatureQualite", $obj->getSignatureQualite());
    }

    /**
     * Tests setSignatureVille()
     *
     * @return void
     */
    public function testSetSignatureVille(): void {

        $obj = new AttestationAt();

        $obj->setSignatureVille("signatureVille");
        $this->assertEquals("signatureVille", $obj->getSignatureVille());
    }

    /**
     * Tests setSiret()
     *
     * @return void
     */
    public function testSetSiret(): void {

        $obj = new AttestationAt();

        $obj->setSiret("siret");
        $this->assertEquals("siret", $obj->getSiret());
    }

    /**
     * Tests setSubIntegral()
     *
     * @return void
     */
    public function testSetSubIntegral(): void {

        $obj = new AttestationAt();

        $obj->setSubIntegral(true);
        $this->assertEquals(true, $obj->getSubIntegral());
    }

    /**
     * Tests setSubPartiel()
     *
     * @return void
     */
    public function testSetSubPartiel(): void {

        $obj = new AttestationAt();

        $obj->setSubPartiel(true);
        $this->assertEquals(true, $obj->getSubPartiel());
    }

    /**
     * Tests setSubrogationDureeMax()
     *
     * @return void
     */
    public function testSetSubrogationDureeMax(): void {

        $obj = new AttestationAt();

        $obj->setSubrogationDureeMax("subrogationDureeMax");
        $this->assertEquals("subrogationDureeMax", $obj->getSubrogationDureeMax());
    }

    /**
     * Tests setSubrogationMontant()
     *
     * @return void
     */
    public function testSetSubrogationMontant(): void {

        $obj = new AttestationAt();

        $obj->setSubrogationMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getSubrogationMontant());
    }

    /**
     * Tests setTypeAttestation()
     *
     * @return void
     */
    public function testSetTypeAttestation(): void {

        $obj = new AttestationAt();

        $obj->setTypeAttestation("typeAttestation");
        $this->assertEquals("typeAttestation", $obj->getTypeAttestation());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
