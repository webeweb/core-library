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
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\AttestationAEM;

/**
 * Attestation a e m model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class AttestationAEMTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AttestationAEM();

        $this->assertNull($obj->getAEMInitiale());
        $this->assertNull($obj->getActivite());
        $this->assertNull($obj->getAutresContributions());
        $this->assertNull($obj->getAutresRemunBrut());
        $this->assertNull($obj->getAutresTauxCotis());
        $this->assertNull($obj->getBrut());
        $this->assertNull($obj->getBrutal());
        $this->assertNull($obj->getCertificationSociale());
        $this->assertNull($obj->getCivilite());
        $this->assertNull($obj->getCodeEmploi());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeNAF2008());
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
        $this->assertNull($obj->getIndiceAEM());
        $this->assertNull($obj->getLabelPrestataire());
        $this->assertNull($obj->getLicenceSpectacle());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLienParente());
        $this->assertNull($obj->getMotifFinContrat());
        $this->assertNull($obj->getMotifRupture());
        $this->assertNull($obj->getNAF());
        $this->assertNull($obj->getNIR());
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
        $this->assertNull($obj->getNumIDCCEmployeur());
        $this->assertNull($obj->getNumIDCCPrestationTravail());
        $this->assertNull($obj->getNumObjet());
        $this->assertNull($obj->getNumeroAEMInitiale());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getNumeroLabel());
        $this->assertNull($obj->getNumeroLicence());
        $this->assertNull($obj->getOrganisateurSpectacle());
        $this->assertNull($obj->getOrganismeAssedic());
        $this->assertNull($obj->getOrganismeRetraite());
        $this->assertNull($obj->getPeriodeAttest());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getSIRET());
        $this->assertNull($obj->getSignatureDate());
        $this->assertNull($obj->getSignatureNom());
        $this->assertNull($obj->getSignaturePrenom());
        $this->assertNull($obj->getSignatureQualite());
        $this->assertNull($obj->getSignatureQualiteCode());
        $this->assertNull($obj->getSignatureVille());
        $this->assertNull($obj->getStatutCadre());
        $this->assertNull($obj->getTauxCotis());
        $this->assertNull($obj->getTelContact());
        $this->assertNull($obj->getTypeAEM());
        $this->assertNull($obj->getTypeLienParente());
        $this->assertNull($obj->getTypeNationalite());
    }

    /**
     * Tests the setAEMInitiale() method.
     *
     * @return void
     */
    public function testSetAEMInitiale() {

        $obj = new AttestationAEM();

        $obj->setAEMInitiale(true);
        $this->assertEquals(true, $obj->getAEMInitiale());
    }

    /**
     * Tests the setActivite() method.
     *
     * @return void
     */
    public function testSetActivite() {

        $obj = new AttestationAEM();

        $obj->setActivite("activite");
        $this->assertEquals("activite", $obj->getActivite());
    }

    /**
     * Tests the setAutresContributions() method.
     *
     * @return void
     */
    public function testSetAutresContributions() {

        $obj = new AttestationAEM();

        $obj->setAutresContributions(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresContributions());
    }

    /**
     * Tests the setAutresRemunBrut() method.
     *
     * @return void
     */
    public function testSetAutresRemunBrut() {

        $obj = new AttestationAEM();

        $obj->setAutresRemunBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresRemunBrut());
    }

    /**
     * Tests the setAutresTauxCotis() method.
     *
     * @return void
     */
    public function testSetAutresTauxCotis() {

        $obj = new AttestationAEM();

        $obj->setAutresTauxCotis(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresTauxCotis());
    }

    /**
     * Tests the setBrut() method.
     *
     * @return void
     */
    public function testSetBrut() {

        $obj = new AttestationAEM();

        $obj->setBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getBrut());
    }

    /**
     * Tests the setBrutal() method.
     *
     * @return void
     */
    public function testSetBrutal() {

        $obj = new AttestationAEM();

        $obj->setBrutal(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutal());
    }

    /**
     * Tests the setCertificationSociale() method.
     *
     * @return void
     */
    public function testSetCertificationSociale() {

        $obj = new AttestationAEM();

        $obj->setCertificationSociale(true);
        $this->assertEquals(true, $obj->getCertificationSociale());
    }

    /**
     * Tests the setCivilite() method.
     *
     * @return void
     */
    public function testSetCivilite() {

        $obj = new AttestationAEM();

        $obj->setCivilite("civilite");
        $this->assertEquals("civilite", $obj->getCivilite());
    }

    /**
     * Tests the setCodeEmploi() method.
     *
     * @return void
     */
    public function testSetCodeEmploi() {

        $obj = new AttestationAEM();

        $obj->setCodeEmploi("codeEmploi");
        $this->assertEquals("codeEmploi", $obj->getCodeEmploi());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new AttestationAEM();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeNAF2008() method.
     *
     * @return void
     */
    public function testSetCodeNAF2008() {

        $obj = new AttestationAEM();

        $obj->setCodeNAF2008("codeNAF2008");
        $this->assertEquals("codeNAF2008", $obj->getCodeNAF2008());
    }

    /**
     * Tests the setCodeQualif() method.
     *
     * @return void
     */
    public function testSetCodeQualif() {

        $obj = new AttestationAEM();

        $obj->setCodeQualif("codeQualif");
        $this->assertEquals("codeQualif", $obj->getCodeQualif());
    }

    /**
     * Tests the setContact() method.
     *
     * @return void
     */
    public function testSetContact() {

        $obj = new AttestationAEM();

        $obj->setContact("contact");
        $this->assertEquals("contact", $obj->getContact());
    }

    /**
     * Tests the setContratEnCours() method.
     *
     * @return void
     */
    public function testSetContratEnCours() {

        $obj = new AttestationAEM();

        $obj->setContratEnCours(true);
        $this->assertEquals(true, $obj->getContratEnCours());
    }

    /**
     * Tests the setContributions() method.
     *
     * @return void
     */
    public function testSetContributions() {

        $obj = new AttestationAEM();

        $obj->setContributions(10.092018);
        $this->assertEquals(10.092018, $obj->getContributions());
    }

    /**
     * Tests the setDateEmbauche() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEmbauche() {

        $obj = new AttestationAEM();

        $obj->setDateEmbauche(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEmbauche());
    }

    /**
     * Tests the setDateFinContrat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinContrat() {

        $obj = new AttestationAEM();

        $obj->setDateFinContrat(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinContrat());
    }

    /**
     * Tests the setDateFinContratInitiale() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinContratInitiale() {

        $obj = new AttestationAEM();

        $obj->setDateFinContratInitiale(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinContratInitiale());
    }

    /**
     * Tests the setDateNaiss() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNaiss() {

        $obj = new AttestationAEM();

        $obj->setDateNaiss(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateNaiss());
    }

    /**
     * Tests the setEmpAdresse1() method.
     *
     * @return void
     */
    public function testSetEmpAdresse1() {

        $obj = new AttestationAEM();

        $obj->setEmpAdresse1("empAdresse1");
        $this->assertEquals("empAdresse1", $obj->getEmpAdresse1());
    }

    /**
     * Tests the setEmpAdresse2() method.
     *
     * @return void
     */
    public function testSetEmpAdresse2() {

        $obj = new AttestationAEM();

        $obj->setEmpAdresse2("empAdresse2");
        $this->assertEquals("empAdresse2", $obj->getEmpAdresse2());
    }

    /**
     * Tests the setEmpCodePostal() method.
     *
     * @return void
     */
    public function testSetEmpCodePostal() {

        $obj = new AttestationAEM();

        $obj->setEmpCodePostal("empCodePostal");
        $this->assertEquals("empCodePostal", $obj->getEmpCodePostal());
    }

    /**
     * Tests the setEmpCommune() method.
     *
     * @return void
     */
    public function testSetEmpCommune() {

        $obj = new AttestationAEM();

        $obj->setEmpCommune("empCommune");
        $this->assertEquals("empCommune", $obj->getEmpCommune());
    }

    /**
     * Tests the setEmpTel() method.
     *
     * @return void
     */
    public function testSetEmpTel() {

        $obj = new AttestationAEM();

        $obj->setEmpTel("empTel");
        $this->assertEquals("empTel", $obj->getEmpTel());
    }

    /**
     * Tests the setEmploi() method.
     *
     * @return void
     */
    public function testSetEmploi() {

        $obj = new AttestationAEM();

        $obj->setEmploi("emploi");
        $this->assertEquals("emploi", $obj->getEmploi());
    }

    /**
     * Tests the setEtblAdresse1() method.
     *
     * @return void
     */
    public function testSetEtblAdresse1() {

        $obj = new AttestationAEM();

        $obj->setEtblAdresse1("etblAdresse1");
        $this->assertEquals("etblAdresse1", $obj->getEtblAdresse1());
    }

    /**
     * Tests the setEtblAdresse2() method.
     *
     * @return void
     */
    public function testSetEtblAdresse2() {

        $obj = new AttestationAEM();

        $obj->setEtblAdresse2("etblAdresse2");
        $this->assertEquals("etblAdresse2", $obj->getEtblAdresse2());
    }

    /**
     * Tests the setEtblCodePostal() method.
     *
     * @return void
     */
    public function testSetEtblCodePostal() {

        $obj = new AttestationAEM();

        $obj->setEtblCodePostal("etblCodePostal");
        $this->assertEquals("etblCodePostal", $obj->getEtblCodePostal());
    }

    /**
     * Tests the setEtblCommune() method.
     *
     * @return void
     */
    public function testSetEtblCommune() {

        $obj = new AttestationAEM();

        $obj->setEtblCommune("etblCommune");
        $this->assertEquals("etblCommune", $obj->getEtblCommune());
    }

    /**
     * Tests the setEtblFax() method.
     *
     * @return void
     */
    public function testSetEtblFax() {

        $obj = new AttestationAEM();

        $obj->setEtblFax("etblFax");
        $this->assertEquals("etblFax", $obj->getEtblFax());
    }

    /**
     * Tests the setEtblMail() method.
     *
     * @return void
     */
    public function testSetEtblMail() {

        $obj = new AttestationAEM();

        $obj->setEtblMail("etblMail");
        $this->assertEquals("etblMail", $obj->getEtblMail());
    }

    /**
     * Tests the setEtblRaisonSociale() method.
     *
     * @return void
     */
    public function testSetEtblRaisonSociale() {

        $obj = new AttestationAEM();

        $obj->setEtblRaisonSociale("etblRaisonSociale");
        $this->assertEquals("etblRaisonSociale", $obj->getEtblRaisonSociale());
    }

    /**
     * Tests the setEtblTel() method.
     *
     * @return void
     */
    public function testSetEtblTel() {

        $obj = new AttestationAEM();

        $obj->setEtblTel("etblTel");
        $this->assertEquals("etblTel", $obj->getEtblTel());
    }

    /**
     * Tests the setIndiceAEM() method.
     *
     * @return void
     */
    public function testSetIndiceAEM() {

        $obj = new AttestationAEM();

        $obj->setIndiceAEM(10);
        $this->assertEquals(10, $obj->getIndiceAEM());
    }

    /**
     * Tests the setLabelPrestataire() method.
     *
     * @return void
     */
    public function testSetLabelPrestataire() {

        $obj = new AttestationAEM();

        $obj->setLabelPrestataire(true);
        $this->assertEquals(true, $obj->getLabelPrestataire());
    }

    /**
     * Tests the setLicenceSpectacle() method.
     *
     * @return void
     */
    public function testSetLicenceSpectacle() {

        $obj = new AttestationAEM();

        $obj->setLicenceSpectacle(true);
        $this->assertEquals(true, $obj->getLicenceSpectacle());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument() {

        $obj = new AttestationAEM();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setLienParente() method.
     *
     * @return void
     */
    public function testSetLienParente() {

        $obj = new AttestationAEM();

        $obj->setLienParente(true);
        $this->assertEquals(true, $obj->getLienParente());
    }

    /**
     * Tests the setMotifFinContrat() method.
     *
     * @return void
     */
    public function testSetMotifFinContrat() {

        $obj = new AttestationAEM();

        $obj->setMotifFinContrat("motifFinContrat");
        $this->assertEquals("motifFinContrat", $obj->getMotifFinContrat());
    }

    /**
     * Tests the setMotifRupture() method.
     *
     * @return void
     */
    public function testSetMotifRupture() {

        $obj = new AttestationAEM();

        $obj->setMotifRupture("motifRupture");
        $this->assertEquals("motifRupture", $obj->getMotifRupture());
    }

    /**
     * Tests the setNAF() method.
     *
     * @return void
     */
    public function testSetNAF() {

        $obj = new AttestationAEM();

        $obj->setNAF("nAF");
        $this->assertEquals("nAF", $obj->getNAF());
    }

    /**
     * Tests the setNIR() method.
     *
     * @return void
     */
    public function testSetNIR() {

        $obj = new AttestationAEM();

        $obj->setNIR("nIR");
        $this->assertEquals("nIR", $obj->getNIR());
    }

    /**
     * Tests the setNbJourTrav() method.
     *
     * @return void
     */
    public function testSetNbJourTrav() {

        $obj = new AttestationAEM();

        $obj->setNbJourTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourTrav());
    }

    /**
     * Tests the setNomEmploye() method.
     *
     * @return void
     */
    public function testSetNomEmploye() {

        $obj = new AttestationAEM();

        $obj->setNomEmploye("nomEmploye");
        $this->assertEquals("nomEmploye", $obj->getNomEmploye());
    }

    /**
     * Tests the setNomNaissance() method.
     *
     * @return void
     */
    public function testSetNomNaissance() {

        $obj = new AttestationAEM();

        $obj->setNomNaissance("nomNaissance");
        $this->assertEquals("nomNaissance", $obj->getNomNaissance());
    }

    /**
     * Tests the setNomRetraite() method.
     *
     * @return void
     */
    public function testSetNomRetraite() {

        $obj = new AttestationAEM();

        $obj->setNomRetraite("nomRetraite");
        $this->assertEquals("nomRetraite", $obj->getNomRetraite());
    }

    /**
     * Tests the setNombreCachets() method.
     *
     * @return void
     */
    public function testSetNombreCachets() {

        $obj = new AttestationAEM();

        $obj->setNombreCachets(10.092018);
        $this->assertEquals(10.092018, $obj->getNombreCachets());
    }

    /**
     * Tests the setNombreCachetsIsoles() method.
     *
     * @return void
     */
    public function testSetNombreCachetsIsoles() {

        $obj = new AttestationAEM();

        $obj->setNombreCachetsIsoles(10.092018);
        $this->assertEquals(10.092018, $obj->getNombreCachetsIsoles());
    }

    /**
     * Tests the setNombreHeures() method.
     *
     * @return void
     */
    public function testSetNombreHeures() {

        $obj = new AttestationAEM();

        $obj->setNombreHeures(10.092018);
        $this->assertEquals(10.092018, $obj->getNombreHeures());
    }

    /**
     * Tests the setNumAssedic() method.
     *
     * @return void
     */
    public function testSetNumAssedic() {

        $obj = new AttestationAEM();

        $obj->setNumAssedic("numAssedic");
        $this->assertEquals("numAssedic", $obj->getNumAssedic());
    }

    /**
     * Tests the setNumCaisseSpectacle() method.
     *
     * @return void
     */
    public function testSetNumCaisseSpectacle() {

        $obj = new AttestationAEM();

        $obj->setNumCaisseSpectacle("numCaisseSpectacle");
        $this->assertEquals("numCaisseSpectacle", $obj->getNumCaisseSpectacle());
    }

    /**
     * Tests the setNumCertificationSociale() method.
     *
     * @return void
     */
    public function testSetNumCertificationSociale() {

        $obj = new AttestationAEM();

        $obj->setNumCertificationSociale("numCertificationSociale");
        $this->assertEquals("numCertificationSociale", $obj->getNumCertificationSociale());
    }

    /**
     * Tests the setNumIDCCEmployeur() method.
     *
     * @return void
     */
    public function testSetNumIDCCEmployeur() {

        $obj = new AttestationAEM();

        $obj->setNumIDCCEmployeur("numIDCCEmployeur");
        $this->assertEquals("numIDCCEmployeur", $obj->getNumIDCCEmployeur());
    }

    /**
     * Tests the setNumIDCCPrestationTravail() method.
     *
     * @return void
     */
    public function testSetNumIDCCPrestationTravail() {

        $obj = new AttestationAEM();

        $obj->setNumIDCCPrestationTravail("numIDCCPrestationTravail");
        $this->assertEquals("numIDCCPrestationTravail", $obj->getNumIDCCPrestationTravail());
    }

    /**
     * Tests the setNumObjet() method.
     *
     * @return void
     */
    public function testSetNumObjet() {

        $obj = new AttestationAEM();

        $obj->setNumObjet("numObjet");
        $this->assertEquals("numObjet", $obj->getNumObjet());
    }

    /**
     * Tests the setNumeroAEMInitiale() method.
     *
     * @return void
     */
    public function testSetNumeroAEMInitiale() {

        $obj = new AttestationAEM();

        $obj->setNumeroAEMInitiale("numeroAEMInitiale");
        $this->assertEquals("numeroAEMInitiale", $obj->getNumeroAEMInitiale());
    }

    /**
     * Tests the setNumeroAttestation() method.
     *
     * @return void
     */
    public function testSetNumeroAttestation() {

        $obj = new AttestationAEM();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new AttestationAEM();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setNumeroLabel() method.
     *
     * @return void
     */
    public function testSetNumeroLabel() {

        $obj = new AttestationAEM();

        $obj->setNumeroLabel("numeroLabel");
        $this->assertEquals("numeroLabel", $obj->getNumeroLabel());
    }

    /**
     * Tests the setNumeroLicence() method.
     *
     * @return void
     */
    public function testSetNumeroLicence() {

        $obj = new AttestationAEM();

        $obj->setNumeroLicence("numeroLicence");
        $this->assertEquals("numeroLicence", $obj->getNumeroLicence());
    }

    /**
     * Tests the setOrganisateurSpectacle() method.
     *
     * @return void
     */
    public function testSetOrganisateurSpectacle() {

        $obj = new AttestationAEM();

        $obj->setOrganisateurSpectacle(true);
        $this->assertEquals(true, $obj->getOrganisateurSpectacle());
    }

    /**
     * Tests the setOrganismeAssedic() method.
     *
     * @return void
     */
    public function testSetOrganismeAssedic() {

        $obj = new AttestationAEM();

        $obj->setOrganismeAssedic("organismeAssedic");
        $this->assertEquals("organismeAssedic", $obj->getOrganismeAssedic());
    }

    /**
     * Tests the setOrganismeRetraite() method.
     *
     * @return void
     */
    public function testSetOrganismeRetraite() {

        $obj = new AttestationAEM();

        $obj->setOrganismeRetraite("organismeRetraite");
        $this->assertEquals("organismeRetraite", $obj->getOrganismeRetraite());
    }

    /**
     * Tests the setPeriodeAttest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeAttest() {

        $obj = new AttestationAEM();

        $obj->setPeriodeAttest(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeAttest());
    }

    /**
     * Tests the setPrenom() method.
     *
     * @return void
     */
    public function testSetPrenom() {

        $obj = new AttestationAEM();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests the setSIRET() method.
     *
     * @return void
     */
    public function testSetSIRET() {

        $obj = new AttestationAEM();

        $obj->setSIRET("sIRET");
        $this->assertEquals("sIRET", $obj->getSIRET());
    }

    /**
     * Tests the setSignatureDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetSignatureDate() {

        $obj = new AttestationAEM();

        $obj->setSignatureDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getSignatureDate());
    }

    /**
     * Tests the setSignatureNom() method.
     *
     * @return void
     */
    public function testSetSignatureNom() {

        $obj = new AttestationAEM();

        $obj->setSignatureNom("signatureNom");
        $this->assertEquals("signatureNom", $obj->getSignatureNom());
    }

    /**
     * Tests the setSignaturePrenom() method.
     *
     * @return void
     */
    public function testSetSignaturePrenom() {

        $obj = new AttestationAEM();

        $obj->setSignaturePrenom("signaturePrenom");
        $this->assertEquals("signaturePrenom", $obj->getSignaturePrenom());
    }

    /**
     * Tests the setSignatureQualite() method.
     *
     * @return void
     */
    public function testSetSignatureQualite() {

        $obj = new AttestationAEM();

        $obj->setSignatureQualite("signatureQualite");
        $this->assertEquals("signatureQualite", $obj->getSignatureQualite());
    }

    /**
     * Tests the setSignatureQualiteCode() method.
     *
     * @return void
     */
    public function testSetSignatureQualiteCode() {

        $obj = new AttestationAEM();

        $obj->setSignatureQualiteCode("signatureQualiteCode");
        $this->assertEquals("signatureQualiteCode", $obj->getSignatureQualiteCode());
    }

    /**
     * Tests the setSignatureVille() method.
     *
     * @return void
     */
    public function testSetSignatureVille() {

        $obj = new AttestationAEM();

        $obj->setSignatureVille("signatureVille");
        $this->assertEquals("signatureVille", $obj->getSignatureVille());
    }

    /**
     * Tests the setStatutCadre() method.
     *
     * @return void
     */
    public function testSetStatutCadre() {

        $obj = new AttestationAEM();

        $obj->setStatutCadre(true);
        $this->assertEquals(true, $obj->getStatutCadre());
    }

    /**
     * Tests the setTauxCotis() method.
     *
     * @return void
     */
    public function testSetTauxCotis() {

        $obj = new AttestationAEM();

        $obj->setTauxCotis(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxCotis());
    }

    /**
     * Tests the setTelContact() method.
     *
     * @return void
     */
    public function testSetTelContact() {

        $obj = new AttestationAEM();

        $obj->setTelContact("telContact");
        $this->assertEquals("telContact", $obj->getTelContact());
    }

    /**
     * Tests the setTypeAEM() method.
     *
     * @return void
     */
    public function testSetTypeAEM() {

        $obj = new AttestationAEM();

        $obj->setTypeAEM("typeAEM");
        $this->assertEquals("typeAEM", $obj->getTypeAEM());
    }

    /**
     * Tests the setTypeLienParente() method.
     *
     * @return void
     */
    public function testSetTypeLienParente() {

        $obj = new AttestationAEM();

        $obj->setTypeLienParente("typeLienParente");
        $this->assertEquals("typeLienParente", $obj->getTypeLienParente());
    }

    /**
     * Tests the setTypeNationalite() method.
     *
     * @return void
     */
    public function testSetTypeNationalite() {

        $obj = new AttestationAEM();

        $obj->setTypeNationalite("typeNationalite");
        $this->assertEquals("typeNationalite", $obj->getTypeNationalite());
    }
}
