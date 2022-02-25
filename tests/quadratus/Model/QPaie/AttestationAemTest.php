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
use WBW\Library\Quadratus\Model\QPaie\AttestationAem;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Attestation aem test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class AttestationAemTest extends AbstractTestCase {

    /**
     * Tests setActivite()
     *
     * @return void
     */
    public function testSetActivite(): void {

        $obj = new AttestationAem();

        $obj->setActivite("activite");
        $this->assertEquals("activite", $obj->getActivite());
    }

    /**
     * Tests setAemInitiale()
     *
     * @return void
     */
    public function testSetAemInitiale(): void {

        $obj = new AttestationAem();

        $obj->setAemInitiale(true);
        $this->assertEquals(true, $obj->getAemInitiale());
    }

    /**
     * Tests setAutresContributions()
     *
     * @return void
     */
    public function testSetAutresContributions(): void {

        $obj = new AttestationAem();

        $obj->setAutresContributions(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresContributions());
    }

    /**
     * Tests setAutresRemunBrut()
     *
     * @return void
     */
    public function testSetAutresRemunBrut(): void {

        $obj = new AttestationAem();

        $obj->setAutresRemunBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresRemunBrut());
    }

    /**
     * Tests setAutresTauxCotis()
     *
     * @return void
     */
    public function testSetAutresTauxCotis(): void {

        $obj = new AttestationAem();

        $obj->setAutresTauxCotis(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresTauxCotis());
    }

    /**
     * Tests setBrut()
     *
     * @return void
     */
    public function testSetBrut(): void {

        $obj = new AttestationAem();

        $obj->setBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getBrut());
    }

    /**
     * Tests setBrutAl()
     *
     * @return void
     */
    public function testSetBrutAl(): void {

        $obj = new AttestationAem();

        $obj->setBrutAl(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutAl());
    }

    /**
     * Tests setCertificationSociale()
     *
     * @return void
     */
    public function testSetCertificationSociale(): void {

        $obj = new AttestationAem();

        $obj->setCertificationSociale(true);
        $this->assertEquals(true, $obj->getCertificationSociale());
    }

    /**
     * Tests setCivilite()
     *
     * @return void
     */
    public function testSetCivilite(): void {

        $obj = new AttestationAem();

        $obj->setCivilite("civilite");
        $this->assertEquals("civilite", $obj->getCivilite());
    }

    /**
     * Tests setCodeEmploi()
     *
     * @return void
     */
    public function testSetCodeEmploi(): void {

        $obj = new AttestationAem();

        $obj->setCodeEmploi("codeEmploi");
        $this->assertEquals("codeEmploi", $obj->getCodeEmploi());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new AttestationAem();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setCodeNaf2008()
     *
     * @return void
     */
    public function testSetCodeNaf2008(): void {

        $obj = new AttestationAem();

        $obj->setCodeNaf2008("codeNaf2008");
        $this->assertEquals("codeNaf2008", $obj->getCodeNaf2008());
    }

    /**
     * Tests setCodeQualif()
     *
     * @return void
     */
    public function testSetCodeQualif(): void {

        $obj = new AttestationAem();

        $obj->setCodeQualif("codeQualif");
        $this->assertEquals("codeQualif", $obj->getCodeQualif());
    }

    /**
     * Tests setContact()
     *
     * @return void
     */
    public function testSetContact(): void {

        $obj = new AttestationAem();

        $obj->setContact("contact");
        $this->assertEquals("contact", $obj->getContact());
    }

    /**
     * Tests setContratEnCours()
     *
     * @return void
     */
    public function testSetContratEnCours(): void {

        $obj = new AttestationAem();

        $obj->setContratEnCours(true);
        $this->assertEquals(true, $obj->getContratEnCours());
    }

    /**
     * Tests setContributions()
     *
     * @return void
     */
    public function testSetContributions(): void {

        $obj = new AttestationAem();

        $obj->setContributions(10.092018);
        $this->assertEquals(10.092018, $obj->getContributions());
    }

    /**
     * Tests setDateEmbauche()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEmbauche(): void {

        // Set a Date/time mock.
        $dateEmbauche = new DateTime("2018-09-10");

        $obj = new AttestationAem();

        $obj->setDateEmbauche($dateEmbauche);
        $this->assertSame($dateEmbauche, $obj->getDateEmbauche());
    }

    /**
     * Tests setDateFinContrat()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinContrat(): void {

        // Set a Date/time mock.
        $dateFinContrat = new DateTime("2018-09-10");

        $obj = new AttestationAem();

        $obj->setDateFinContrat($dateFinContrat);
        $this->assertSame($dateFinContrat, $obj->getDateFinContrat());
    }

    /**
     * Tests setDateFinContratInitiale()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinContratInitiale(): void {

        // Set a Date/time mock.
        $dateFinContratInitiale = new DateTime("2018-09-10");

        $obj = new AttestationAem();

        $obj->setDateFinContratInitiale($dateFinContratInitiale);
        $this->assertSame($dateFinContratInitiale, $obj->getDateFinContratInitiale());
    }

    /**
     * Tests setDateNaiss()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNaiss(): void {

        // Set a Date/time mock.
        $dateNaiss = new DateTime("2018-09-10");

        $obj = new AttestationAem();

        $obj->setDateNaiss($dateNaiss);
        $this->assertSame($dateNaiss, $obj->getDateNaiss());
    }

    /**
     * Tests setEmpAdresse1()
     *
     * @return void
     */
    public function testSetEmpAdresse1(): void {

        $obj = new AttestationAem();

        $obj->setEmpAdresse1("empAdresse1");
        $this->assertEquals("empAdresse1", $obj->getEmpAdresse1());
    }

    /**
     * Tests setEmpAdresse2()
     *
     * @return void
     */
    public function testSetEmpAdresse2(): void {

        $obj = new AttestationAem();

        $obj->setEmpAdresse2("empAdresse2");
        $this->assertEquals("empAdresse2", $obj->getEmpAdresse2());
    }

    /**
     * Tests setEmpCodePostal()
     *
     * @return void
     */
    public function testSetEmpCodePostal(): void {

        $obj = new AttestationAem();

        $obj->setEmpCodePostal("empCodePostal");
        $this->assertEquals("empCodePostal", $obj->getEmpCodePostal());
    }

    /**
     * Tests setEmpCommune()
     *
     * @return void
     */
    public function testSetEmpCommune(): void {

        $obj = new AttestationAem();

        $obj->setEmpCommune("empCommune");
        $this->assertEquals("empCommune", $obj->getEmpCommune());
    }

    /**
     * Tests setEmpTel()
     *
     * @return void
     */
    public function testSetEmpTel(): void {

        $obj = new AttestationAem();

        $obj->setEmpTel("empTel");
        $this->assertEquals("empTel", $obj->getEmpTel());
    }

    /**
     * Tests setEmploi()
     *
     * @return void
     */
    public function testSetEmploi(): void {

        $obj = new AttestationAem();

        $obj->setEmploi("emploi");
        $this->assertEquals("emploi", $obj->getEmploi());
    }

    /**
     * Tests setEtblAdresse1()
     *
     * @return void
     */
    public function testSetEtblAdresse1(): void {

        $obj = new AttestationAem();

        $obj->setEtblAdresse1("etblAdresse1");
        $this->assertEquals("etblAdresse1", $obj->getEtblAdresse1());
    }

    /**
     * Tests setEtblAdresse2()
     *
     * @return void
     */
    public function testSetEtblAdresse2(): void {

        $obj = new AttestationAem();

        $obj->setEtblAdresse2("etblAdresse2");
        $this->assertEquals("etblAdresse2", $obj->getEtblAdresse2());
    }

    /**
     * Tests setEtblCodePostal()
     *
     * @return void
     */
    public function testSetEtblCodePostal(): void {

        $obj = new AttestationAem();

        $obj->setEtblCodePostal("etblCodePostal");
        $this->assertEquals("etblCodePostal", $obj->getEtblCodePostal());
    }

    /**
     * Tests setEtblCommune()
     *
     * @return void
     */
    public function testSetEtblCommune(): void {

        $obj = new AttestationAem();

        $obj->setEtblCommune("etblCommune");
        $this->assertEquals("etblCommune", $obj->getEtblCommune());
    }

    /**
     * Tests setEtblFax()
     *
     * @return void
     */
    public function testSetEtblFax(): void {

        $obj = new AttestationAem();

        $obj->setEtblFax("etblFax");
        $this->assertEquals("etblFax", $obj->getEtblFax());
    }

    /**
     * Tests setEtblMail()
     *
     * @return void
     */
    public function testSetEtblMail(): void {

        $obj = new AttestationAem();

        $obj->setEtblMail("etblMail");
        $this->assertEquals("etblMail", $obj->getEtblMail());
    }

    /**
     * Tests setEtblRaisonSociale()
     *
     * @return void
     */
    public function testSetEtblRaisonSociale(): void {

        $obj = new AttestationAem();

        $obj->setEtblRaisonSociale("etblRaisonSociale");
        $this->assertEquals("etblRaisonSociale", $obj->getEtblRaisonSociale());
    }

    /**
     * Tests setEtblTel()
     *
     * @return void
     */
    public function testSetEtblTel(): void {

        $obj = new AttestationAem();

        $obj->setEtblTel("etblTel");
        $this->assertEquals("etblTel", $obj->getEtblTel());
    }

    /**
     * Tests setIndiceAem()
     *
     * @return void
     */
    public function testSetIndiceAem(): void {

        $obj = new AttestationAem();

        $obj->setIndiceAem(10);
        $this->assertEquals(10, $obj->getIndiceAem());
    }

    /**
     * Tests setLabelPrestataire()
     *
     * @return void
     */
    public function testSetLabelPrestataire(): void {

        $obj = new AttestationAem();

        $obj->setLabelPrestataire(true);
        $this->assertEquals(true, $obj->getLabelPrestataire());
    }

    /**
     * Tests setLicenceSpectacle()
     *
     * @return void
     */
    public function testSetLicenceSpectacle(): void {

        $obj = new AttestationAem();

        $obj->setLicenceSpectacle(true);
        $this->assertEquals(true, $obj->getLicenceSpectacle());
    }

    /**
     * Tests setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new AttestationAem();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests setLienParente()
     *
     * @return void
     */
    public function testSetLienParente(): void {

        $obj = new AttestationAem();

        $obj->setLienParente(true);
        $this->assertEquals(true, $obj->getLienParente());
    }

    /**
     * Tests setMotifFinContrat()
     *
     * @return void
     */
    public function testSetMotifFinContrat(): void {

        $obj = new AttestationAem();

        $obj->setMotifFinContrat("motifFinContrat");
        $this->assertEquals("motifFinContrat", $obj->getMotifFinContrat());
    }

    /**
     * Tests setMotifRupture()
     *
     * @return void
     */
    public function testSetMotifRupture(): void {

        $obj = new AttestationAem();

        $obj->setMotifRupture("motifRupture");
        $this->assertEquals("motifRupture", $obj->getMotifRupture());
    }

    /**
     * Tests setNaf()
     *
     * @return void
     */
    public function testSetNaf(): void {

        $obj = new AttestationAem();

        $obj->setNaf("naf");
        $this->assertEquals("naf", $obj->getNaf());
    }

    /**
     * Tests setNbJourTrav()
     *
     * @return void
     */
    public function testSetNbJourTrav(): void {

        $obj = new AttestationAem();

        $obj->setNbJourTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourTrav());
    }

    /**
     * Tests setNir()
     *
     * @return void
     */
    public function testSetNir(): void {

        $obj = new AttestationAem();

        $obj->setNir("nir");
        $this->assertEquals("nir", $obj->getNir());
    }

    /**
     * Tests setNomEmploye()
     *
     * @return void
     */
    public function testSetNomEmploye(): void {

        $obj = new AttestationAem();

        $obj->setNomEmploye("nomEmploye");
        $this->assertEquals("nomEmploye", $obj->getNomEmploye());
    }

    /**
     * Tests setNomNaissance()
     *
     * @return void
     */
    public function testSetNomNaissance(): void {

        $obj = new AttestationAem();

        $obj->setNomNaissance("nomNaissance");
        $this->assertEquals("nomNaissance", $obj->getNomNaissance());
    }

    /**
     * Tests setNomRetraite()
     *
     * @return void
     */
    public function testSetNomRetraite(): void {

        $obj = new AttestationAem();

        $obj->setNomRetraite("nomRetraite");
        $this->assertEquals("nomRetraite", $obj->getNomRetraite());
    }

    /**
     * Tests setNombreCachets()
     *
     * @return void
     */
    public function testSetNombreCachets(): void {

        $obj = new AttestationAem();

        $obj->setNombreCachets(10.092018);
        $this->assertEquals(10.092018, $obj->getNombreCachets());
    }

    /**
     * Tests setNombreCachetsIsoles()
     *
     * @return void
     */
    public function testSetNombreCachetsIsoles(): void {

        $obj = new AttestationAem();

        $obj->setNombreCachetsIsoles(10.092018);
        $this->assertEquals(10.092018, $obj->getNombreCachetsIsoles());
    }

    /**
     * Tests setNombreHeures()
     *
     * @return void
     */
    public function testSetNombreHeures(): void {

        $obj = new AttestationAem();

        $obj->setNombreHeures(10.092018);
        $this->assertEquals(10.092018, $obj->getNombreHeures());
    }

    /**
     * Tests setNumAssedic()
     *
     * @return void
     */
    public function testSetNumAssedic(): void {

        $obj = new AttestationAem();

        $obj->setNumAssedic("numAssedic");
        $this->assertEquals("numAssedic", $obj->getNumAssedic());
    }

    /**
     * Tests setNumCaisseSpectacle()
     *
     * @return void
     */
    public function testSetNumCaisseSpectacle(): void {

        $obj = new AttestationAem();

        $obj->setNumCaisseSpectacle("numCaisseSpectacle");
        $this->assertEquals("numCaisseSpectacle", $obj->getNumCaisseSpectacle());
    }

    /**
     * Tests setNumCertificationSociale()
     *
     * @return void
     */
    public function testSetNumCertificationSociale(): void {

        $obj = new AttestationAem();

        $obj->setNumCertificationSociale("numCertificationSociale");
        $this->assertEquals("numCertificationSociale", $obj->getNumCertificationSociale());
    }

    /**
     * Tests setNumIdccEmployeur()
     *
     * @return void
     */
    public function testSetNumIdccEmployeur(): void {

        $obj = new AttestationAem();

        $obj->setNumIdccEmployeur("numIdccEmployeur");
        $this->assertEquals("numIdccEmployeur", $obj->getNumIdccEmployeur());
    }

    /**
     * Tests setNumIdccPrestationTravail()
     *
     * @return void
     */
    public function testSetNumIdccPrestationTravail(): void {

        $obj = new AttestationAem();

        $obj->setNumIdccPrestationTravail("numIdccPrestationTravail");
        $this->assertEquals("numIdccPrestationTravail", $obj->getNumIdccPrestationTravail());
    }

    /**
     * Tests setNumObjet()
     *
     * @return void
     */
    public function testSetNumObjet(): void {

        $obj = new AttestationAem();

        $obj->setNumObjet("numObjet");
        $this->assertEquals("numObjet", $obj->getNumObjet());
    }

    /**
     * Tests setNumeroAemInitiale()
     *
     * @return void
     */
    public function testSetNumeroAemInitiale(): void {

        $obj = new AttestationAem();

        $obj->setNumeroAemInitiale("numeroAemInitiale");
        $this->assertEquals("numeroAemInitiale", $obj->getNumeroAemInitiale());
    }

    /**
     * Tests setNumeroAttestation()
     *
     * @return void
     */
    public function testSetNumeroAttestation(): void {

        $obj = new AttestationAem();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new AttestationAem();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setNumeroLabel()
     *
     * @return void
     */
    public function testSetNumeroLabel(): void {

        $obj = new AttestationAem();

        $obj->setNumeroLabel("numeroLabel");
        $this->assertEquals("numeroLabel", $obj->getNumeroLabel());
    }

    /**
     * Tests setNumeroLicence()
     *
     * @return void
     */
    public function testSetNumeroLicence(): void {

        $obj = new AttestationAem();

        $obj->setNumeroLicence("numeroLicence");
        $this->assertEquals("numeroLicence", $obj->getNumeroLicence());
    }

    /**
     * Tests setOrganisateurSpectacle()
     *
     * @return void
     */
    public function testSetOrganisateurSpectacle(): void {

        $obj = new AttestationAem();

        $obj->setOrganisateurSpectacle(true);
        $this->assertEquals(true, $obj->getOrganisateurSpectacle());
    }

    /**
     * Tests setOrganismeAssedic()
     *
     * @return void
     */
    public function testSetOrganismeAssedic(): void {

        $obj = new AttestationAem();

        $obj->setOrganismeAssedic("organismeAssedic");
        $this->assertEquals("organismeAssedic", $obj->getOrganismeAssedic());
    }

    /**
     * Tests setOrganismeRetraite()
     *
     * @return void
     */
    public function testSetOrganismeRetraite(): void {

        $obj = new AttestationAem();

        $obj->setOrganismeRetraite("organismeRetraite");
        $this->assertEquals("organismeRetraite", $obj->getOrganismeRetraite());
    }

    /**
     * Tests setPeriodeAttest()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeAttest(): void {

        // Set a Date/time mock.
        $periodeAttest = new DateTime("2018-09-10");

        $obj = new AttestationAem();

        $obj->setPeriodeAttest($periodeAttest);
        $this->assertSame($periodeAttest, $obj->getPeriodeAttest());
    }

    /**
     * Tests setPrenom()
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new AttestationAem();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
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

        $obj = new AttestationAem();

        $obj->setSignatureDate($signatureDate);
        $this->assertSame($signatureDate, $obj->getSignatureDate());
    }

    /**
     * Tests setSignatureNom()
     *
     * @return void
     */
    public function testSetSignatureNom(): void {

        $obj = new AttestationAem();

        $obj->setSignatureNom("signatureNom");
        $this->assertEquals("signatureNom", $obj->getSignatureNom());
    }

    /**
     * Tests setSignaturePrenom()
     *
     * @return void
     */
    public function testSetSignaturePrenom(): void {

        $obj = new AttestationAem();

        $obj->setSignaturePrenom("signaturePrenom");
        $this->assertEquals("signaturePrenom", $obj->getSignaturePrenom());
    }

    /**
     * Tests setSignatureQualite()
     *
     * @return void
     */
    public function testSetSignatureQualite(): void {

        $obj = new AttestationAem();

        $obj->setSignatureQualite("signatureQualite");
        $this->assertEquals("signatureQualite", $obj->getSignatureQualite());
    }

    /**
     * Tests setSignatureQualiteCode()
     *
     * @return void
     */
    public function testSetSignatureQualiteCode(): void {

        $obj = new AttestationAem();

        $obj->setSignatureQualiteCode("signatureQualiteCode");
        $this->assertEquals("signatureQualiteCode", $obj->getSignatureQualiteCode());
    }

    /**
     * Tests setSignatureVille()
     *
     * @return void
     */
    public function testSetSignatureVille(): void {

        $obj = new AttestationAem();

        $obj->setSignatureVille("signatureVille");
        $this->assertEquals("signatureVille", $obj->getSignatureVille());
    }

    /**
     * Tests setSiret()
     *
     * @return void
     */
    public function testSetSiret(): void {

        $obj = new AttestationAem();

        $obj->setSiret("siret");
        $this->assertEquals("siret", $obj->getSiret());
    }

    /**
     * Tests setStatutCadre()
     *
     * @return void
     */
    public function testSetStatutCadre(): void {

        $obj = new AttestationAem();

        $obj->setStatutCadre(true);
        $this->assertEquals(true, $obj->getStatutCadre());
    }

    /**
     * Tests setTauxCotis()
     *
     * @return void
     */
    public function testSetTauxCotis(): void {

        $obj = new AttestationAem();

        $obj->setTauxCotis(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxCotis());
    }

    /**
     * Tests setTelContact()
     *
     * @return void
     */
    public function testSetTelContact(): void {

        $obj = new AttestationAem();

        $obj->setTelContact("telContact");
        $this->assertEquals("telContact", $obj->getTelContact());
    }

    /**
     * Tests setTypeAem()
     *
     * @return void
     */
    public function testSetTypeAem(): void {

        $obj = new AttestationAem();

        $obj->setTypeAem("typeAem");
        $this->assertEquals("typeAem", $obj->getTypeAem());
    }

    /**
     * Tests setTypeLienParente()
     *
     * @return void
     */
    public function testSetTypeLienParente(): void {

        $obj = new AttestationAem();

        $obj->setTypeLienParente("typeLienParente");
        $this->assertEquals("typeLienParente", $obj->getTypeLienParente());
    }

    /**
     * Tests setTypeNationalite()
     *
     * @return void
     */
    public function testSetTypeNationalite(): void {

        $obj = new AttestationAem();

        $obj->setTypeNationalite("typeNationalite");
        $this->assertEquals("typeNationalite", $obj->getTypeNationalite());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AttestationAem();

        $this->assertNull($obj->getAemInitiale());
        $this->assertNull($obj->getActivite());
        $this->assertNull($obj->getAutresContributions());
        $this->assertNull($obj->getAutresRemunBrut());
        $this->assertNull($obj->getAutresTauxCotis());
        $this->assertNull($obj->getBrut());
        $this->assertNull($obj->getBrutAl());
        $this->assertNull($obj->getCertificationSociale());
        $this->assertNull($obj->getCivilite());
        $this->assertNull($obj->getCodeEmploi());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeNaf2008());
        $this->assertNull($obj->getCodeQualif());
        $this->assertNull($obj->getContact());
        $this->assertNull($obj->getContratEnCours());
        $this->assertNull($obj->getContributions());
        $this->assertNull($obj->getDateEmbauche());
        $this->assertNull($obj->getDateFinContrat());
        $this->assertNull($obj->getDateFinContratInitiale());
        $this->assertNull($obj->getDateNaiss());
        $this->assertNull($obj->getEmpAdresse1());
        $this->assertNull($obj->getEmpAdresse2());
        $this->assertNull($obj->getEmpCodePostal());
        $this->assertNull($obj->getEmpCommune());
        $this->assertNull($obj->getEmpTel());
        $this->assertNull($obj->getEmploi());
        $this->assertNull($obj->getEtblAdresse1());
        $this->assertNull($obj->getEtblAdresse2());
        $this->assertNull($obj->getEtblCodePostal());
        $this->assertNull($obj->getEtblCommune());
        $this->assertNull($obj->getEtblFax());
        $this->assertNull($obj->getEtblMail());
        $this->assertNull($obj->getEtblRaisonSociale());
        $this->assertNull($obj->getEtblTel());
        $this->assertNull($obj->getIndiceAem());
        $this->assertNull($obj->getLabelPrestataire());
        $this->assertNull($obj->getLicenceSpectacle());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLienParente());
        $this->assertNull($obj->getMotifFinContrat());
        $this->assertNull($obj->getMotifRupture());
        $this->assertNull($obj->getNaf());
        $this->assertNull($obj->getNir());
        $this->assertNull($obj->getNbJourTrav());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNomNaissance());
        $this->assertNull($obj->getNomRetraite());
        $this->assertNull($obj->getNombreCachets());
        $this->assertNull($obj->getNombreCachetsIsoles());
        $this->assertNull($obj->getNombreHeures());
        $this->assertNull($obj->getNumAssedic());
        $this->assertNull($obj->getNumCaisseSpectacle());
        $this->assertNull($obj->getNumCertificationSociale());
        $this->assertNull($obj->getNumIdccEmployeur());
        $this->assertNull($obj->getNumIdccPrestationTravail());
        $this->assertNull($obj->getNumObjet());
        $this->assertNull($obj->getNumeroAemInitiale());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getNumeroLabel());
        $this->assertNull($obj->getNumeroLicence());
        $this->assertNull($obj->getOrganisateurSpectacle());
        $this->assertNull($obj->getOrganismeAssedic());
        $this->assertNull($obj->getOrganismeRetraite());
        $this->assertNull($obj->getPeriodeAttest());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSignatureDate());
        $this->assertNull($obj->getSignatureNom());
        $this->assertNull($obj->getSignaturePrenom());
        $this->assertNull($obj->getSignatureQualite());
        $this->assertNull($obj->getSignatureQualiteCode());
        $this->assertNull($obj->getSignatureVille());
        $this->assertNull($obj->getStatutCadre());
        $this->assertNull($obj->getTauxCotis());
        $this->assertNull($obj->getTelContact());
        $this->assertNull($obj->getTypeAem());
        $this->assertNull($obj->getTypeLienParente());
        $this->assertNull($obj->getTypeNationalite());
    }
}
