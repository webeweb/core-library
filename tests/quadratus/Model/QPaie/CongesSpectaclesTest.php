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
use WBW\Library\Quadratus\Model\QPaie\CongesSpectacles;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Conges spectacles test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class CongesSpectaclesTest extends AbstractTestCase {

    /**
     * Tests setBaseConges()
     *
     * @return void
     */
    public function testSetBaseConges(): void {

        $obj = new CongesSpectacles();

        $obj->setBaseConges(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseConges());
    }

    /**
     * Tests setBrut()
     *
     * @return void
     */
    public function testSetBrut(): void {

        $obj = new CongesSpectacles();

        $obj->setBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getBrut());
    }

    /**
     * Tests setCeInitial()
     *
     * @return void
     */
    public function testSetCeInitial(): void {

        $obj = new CongesSpectacles();

        $obj->setCeInitial(true);
        $this->assertEquals(true, $obj->getCeInitial());
    }

    /**
     * Tests setCodeEmploi()
     *
     * @return void
     */
    public function testSetCodeEmploi(): void {

        $obj = new CongesSpectacles();

        $obj->setCodeEmploi("codeEmploi");
        $this->assertEquals("codeEmploi", $obj->getCodeEmploi());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new CongesSpectacles();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setContact()
     *
     * @return void
     */
    public function testSetContact(): void {

        $obj = new CongesSpectacles();

        $obj->setContact("contact");
        $this->assertEquals("contact", $obj->getContact());
    }

    /**
     * Tests setContratEnCours()
     *
     * @return void
     */
    public function testSetContratEnCours(): void {

        $obj = new CongesSpectacles();

        $obj->setContratEnCours(true);
        $this->assertEquals(true, $obj->getContratEnCours());
    }

    /**
     * Tests setDateCertificatEmploi()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCertificatEmploi(): void {

        // Set a Date/time mock.
        $dateCertificatEmploi = new DateTime("2018-09-10");

        $obj = new CongesSpectacles();

        $obj->setDateCertificatEmploi($dateCertificatEmploi);
        $this->assertSame($dateCertificatEmploi, $obj->getDateCertificatEmploi());
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

        $obj = new CongesSpectacles();

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

        $obj = new CongesSpectacles();

        $obj->setDateFinContrat($dateFinContrat);
        $this->assertSame($dateFinContrat, $obj->getDateFinContrat());
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

        $obj = new CongesSpectacles();

        $obj->setDateNaissance($dateNaissance);
        $this->assertSame($dateNaissance, $obj->getDateNaissance());
    }

    /**
     * Tests setDatePaiement()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePaiement(): void {

        // Set a Date/time mock.
        $datePaiement = new DateTime("2018-09-10");

        $obj = new CongesSpectacles();

        $obj->setDatePaiement($datePaiement);
        $this->assertSame($datePaiement, $obj->getDatePaiement());
    }

    /**
     * Tests setDebutPeriodeAttest()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutPeriodeAttest(): void {

        // Set a Date/time mock.
        $debutPeriodeAttest = new DateTime("2018-09-10");

        $obj = new CongesSpectacles();

        $obj->setDebutPeriodeAttest($debutPeriodeAttest);
        $this->assertSame($debutPeriodeAttest, $obj->getDebutPeriodeAttest());
    }

    /**
     * Tests setDeptNaissance()
     *
     * @return void
     */
    public function testSetDeptNaissance(): void {

        $obj = new CongesSpectacles();

        $obj->setDeptNaissance("deptNaissance");
        $this->assertEquals("deptNaissance", $obj->getDeptNaissance());
    }

    /**
     * Tests setDisquette()
     *
     * @return void
     */
    public function testSetDisquette(): void {

        $obj = new CongesSpectacles();

        $obj->setDisquette(true);
        $this->assertEquals(true, $obj->getDisquette());
    }

    /**
     * Tests setEdite()
     *
     * @return void
     */
    public function testSetEdite(): void {

        $obj = new CongesSpectacles();

        $obj->setEdite(true);
        $this->assertEquals(true, $obj->getEdite());
    }

    /**
     * Tests setEmpAdresse1()
     *
     * @return void
     */
    public function testSetEmpAdresse1(): void {

        $obj = new CongesSpectacles();

        $obj->setEmpAdresse1("empAdresse1");
        $this->assertEquals("empAdresse1", $obj->getEmpAdresse1());
    }

    /**
     * Tests setEmpAdresse2()
     *
     * @return void
     */
    public function testSetEmpAdresse2(): void {

        $obj = new CongesSpectacles();

        $obj->setEmpAdresse2("empAdresse2");
        $this->assertEquals("empAdresse2", $obj->getEmpAdresse2());
    }

    /**
     * Tests setEmpCodePostal()
     *
     * @return void
     */
    public function testSetEmpCodePostal(): void {

        $obj = new CongesSpectacles();

        $obj->setEmpCodePostal("empCodePostal");
        $this->assertEquals("empCodePostal", $obj->getEmpCodePostal());
    }

    /**
     * Tests setEmpCommune()
     *
     * @return void
     */
    public function testSetEmpCommune(): void {

        $obj = new CongesSpectacles();

        $obj->setEmpCommune("empCommune");
        $this->assertEquals("empCommune", $obj->getEmpCommune());
    }

    /**
     * Tests setEmploi()
     *
     * @return void
     */
    public function testSetEmploi(): void {

        $obj = new CongesSpectacles();

        $obj->setEmploi("emploi");
        $this->assertEquals("emploi", $obj->getEmploi());
    }

    /**
     * Tests setEtblAdresse1()
     *
     * @return void
     */
    public function testSetEtblAdresse1(): void {

        $obj = new CongesSpectacles();

        $obj->setEtblAdresse1("etblAdresse1");
        $this->assertEquals("etblAdresse1", $obj->getEtblAdresse1());
    }

    /**
     * Tests setEtblAdresse2()
     *
     * @return void
     */
    public function testSetEtblAdresse2(): void {

        $obj = new CongesSpectacles();

        $obj->setEtblAdresse2("etblAdresse2");
        $this->assertEquals("etblAdresse2", $obj->getEtblAdresse2());
    }

    /**
     * Tests setEtblCodePostal()
     *
     * @return void
     */
    public function testSetEtblCodePostal(): void {

        $obj = new CongesSpectacles();

        $obj->setEtblCodePostal("etblCodePostal");
        $this->assertEquals("etblCodePostal", $obj->getEtblCodePostal());
    }

    /**
     * Tests setEtblCommune()
     *
     * @return void
     */
    public function testSetEtblCommune(): void {

        $obj = new CongesSpectacles();

        $obj->setEtblCommune("etblCommune");
        $this->assertEquals("etblCommune", $obj->getEtblCommune());
    }

    /**
     * Tests setEtblRaisonSociale()
     *
     * @return void
     */
    public function testSetEtblRaisonSociale(): void {

        $obj = new CongesSpectacles();

        $obj->setEtblRaisonSociale("etblRaisonSociale");
        $this->assertEquals("etblRaisonSociale", $obj->getEtblRaisonSociale());
    }

    /**
     * Tests setEtblTel()
     *
     * @return void
     */
    public function testSetEtblTel(): void {

        $obj = new CongesSpectacles();

        $obj->setEtblTel("etblTel");
        $this->assertEquals("etblTel", $obj->getEtblTel());
    }

    /**
     * Tests setIndiceCe()
     *
     * @return void
     */
    public function testSetIndiceCe(): void {

        $obj = new CongesSpectacles();

        $obj->setIndiceCe(10);
        $this->assertEquals(10, $obj->getIndiceCe());
    }

    /**
     * Tests setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new CongesSpectacles();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests setLieuCertificatEmploi()
     *
     * @return void
     */
    public function testSetLieuCertificatEmploi(): void {

        $obj = new CongesSpectacles();

        $obj->setLieuCertificatEmploi("lieuCertificatEmploi");
        $this->assertEquals("lieuCertificatEmploi", $obj->getLieuCertificatEmploi());
    }

    /**
     * Tests setLieuNaissance()
     *
     * @return void
     */
    public function testSetLieuNaissance(): void {

        $obj = new CongesSpectacles();

        $obj->setLieuNaissance("lieuNaissance");
        $this->assertEquals("lieuNaissance", $obj->getLieuNaissance());
    }

    /**
     * Tests setNbJourTrav()
     *
     * @return void
     */
    public function testSetNbJourTrav(): void {

        $obj = new CongesSpectacles();

        $obj->setNbJourTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourTrav());
    }

    /**
     * Tests setNir()
     *
     * @return void
     */
    public function testSetNir(): void {

        $obj = new CongesSpectacles();

        $obj->setNir("nir");
        $this->assertEquals("nir", $obj->getNir());
    }

    /**
     * Tests setNomEmploye()
     *
     * @return void
     */
    public function testSetNomEmploye(): void {

        $obj = new CongesSpectacles();

        $obj->setNomEmploye("nomEmploye");
        $this->assertEquals("nomEmploye", $obj->getNomEmploye());
    }

    /**
     * Tests setNomNaissance()
     *
     * @return void
     */
    public function testSetNomNaissance(): void {

        $obj = new CongesSpectacles();

        $obj->setNomNaissance("nomNaissance");
        $this->assertEquals("nomNaissance", $obj->getNomNaissance());
    }

    /**
     * Tests setNombreCachets()
     *
     * @return void
     */
    public function testSetNombreCachets(): void {

        $obj = new CongesSpectacles();

        $obj->setNombreCachets(10.092018);
        $this->assertEquals(10.092018, $obj->getNombreCachets());
    }

    /**
     * Tests setNouvelleAttest()
     *
     * @return void
     */
    public function testSetNouvelleAttest(): void {

        $obj = new CongesSpectacles();

        $obj->setNouvelleAttest(true);
        $this->assertEquals(true, $obj->getNouvelleAttest());
    }

    /**
     * Tests setNumCaisseSpectacle()
     *
     * @return void
     */
    public function testSetNumCaisseSpectacle(): void {

        $obj = new CongesSpectacles();

        $obj->setNumCaisseSpectacle("numCaisseSpectacle");
        $this->assertEquals("numCaisseSpectacle", $obj->getNumCaisseSpectacle());
    }

    /**
     * Tests setNumeroAttestation()
     *
     * @return void
     */
    public function testSetNumeroAttestation(): void {

        $obj = new CongesSpectacles();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Tests setNumeroCeInitial()
     *
     * @return void
     */
    public function testSetNumeroCeInitial(): void {

        $obj = new CongesSpectacles();

        $obj->setNumeroCeInitial("numeroCeInitial");
        $this->assertEquals("numeroCeInitial", $obj->getNumeroCeInitial());
    }

    /**
     * Tests setNumeroCongesSpectacle()
     *
     * @return void
     */
    public function testSetNumeroCongesSpectacle(): void {

        $obj = new CongesSpectacles();

        $obj->setNumeroCongesSpectacle("numeroCongesSpectacle");
        $this->assertEquals("numeroCongesSpectacle", $obj->getNumeroCongesSpectacle());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new CongesSpectacles();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setObservations()
     *
     * @return void
     */
    public function testSetObservations(): void {

        $obj = new CongesSpectacles();

        $obj->setObservations("observations");
        $this->assertEquals("observations", $obj->getObservations());
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

        $obj = new CongesSpectacles();

        $obj->setPeriodeAttest($periodeAttest);
        $this->assertSame($periodeAttest, $obj->getPeriodeAttest());
    }

    /**
     * Tests setPrenom()
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new CongesSpectacles();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests setPseudonyme()
     *
     * @return void
     */
    public function testSetPseudonyme(): void {

        $obj = new CongesSpectacles();

        $obj->setPseudonyme("pseudonyme");
        $this->assertEquals("pseudonyme", $obj->getPseudonyme());
    }

    /**
     * Tests setSexe()
     *
     * @return void
     */
    public function testSetSexe(): void {

        $obj = new CongesSpectacles();

        $obj->setSexe("sexe");
        $this->assertEquals("sexe", $obj->getSexe());
    }

    /**
     * Tests setSignataireCertificatEmploi()
     *
     * @return void
     */
    public function testSetSignataireCertificatEmploi(): void {

        $obj = new CongesSpectacles();

        $obj->setSignataireCertificatEmploi("signataireCertificatEmploi");
        $this->assertEquals("signataireCertificatEmploi", $obj->getSignataireCertificatEmploi());
    }

    /**
     * Tests setSiret()
     *
     * @return void
     */
    public function testSetSiret(): void {

        $obj = new CongesSpectacles();

        $obj->setSiret("siret");
        $this->assertEquals("siret", $obj->getSiret());
    }

    /**
     * Tests setStatutCadre()
     *
     * @return void
     */
    public function testSetStatutCadre(): void {

        $obj = new CongesSpectacles();

        $obj->setStatutCadre(true);
        $this->assertEquals(true, $obj->getStatutCadre());
    }

    /**
     * Tests setTelContact()
     *
     * @return void
     */
    public function testSetTelContact(): void {

        $obj = new CongesSpectacles();

        $obj->setTelContact("telContact");
        $this->assertEquals("telContact", $obj->getTelContact());
    }

    /**
     * Tests setTitre()
     *
     * @return void
     */
    public function testSetTitre(): void {

        $obj = new CongesSpectacles();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Tests setTypeCe()
     *
     * @return void
     */
    public function testSetTypeCe(): void {

        $obj = new CongesSpectacles();

        $obj->setTypeCe("typeCe");
        $this->assertEquals("typeCe", $obj->getTypeCe());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CongesSpectacles();

        $this->assertNull($obj->getBaseConges());
        $this->assertNull($obj->getBrut());
        $this->assertNull($obj->getCeInitial());
        $this->assertNull($obj->getCodeEmploi());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getContact());
        $this->assertNull($obj->getContratEnCours());
        $this->assertNull($obj->getDateCertificatEmploi());
        $this->assertNull($obj->getDateEmbauche());
        $this->assertNull($obj->getDateFinContrat());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getDatePaiement());
        $this->assertNull($obj->getDebutPeriodeAttest());
        $this->assertNull($obj->getDeptNaissance());
        $this->assertNull($obj->getDisquette());
        $this->assertNull($obj->getEdite());
        $this->assertNull($obj->getEmpAdresse1());
        $this->assertNull($obj->getEmpAdresse2());
        $this->assertNull($obj->getEmpCodePostal());
        $this->assertNull($obj->getEmpCommune());
        $this->assertNull($obj->getEmploi());
        $this->assertNull($obj->getEtblAdresse1());
        $this->assertNull($obj->getEtblAdresse2());
        $this->assertNull($obj->getEtblCodePostal());
        $this->assertNull($obj->getEtblCommune());
        $this->assertNull($obj->getEtblRaisonSociale());
        $this->assertNull($obj->getEtblTel());
        $this->assertNull($obj->getIndiceCe());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLieuCertificatEmploi());
        $this->assertNull($obj->getLieuNaissance());
        $this->assertNull($obj->getNir());
        $this->assertNull($obj->getNbJourTrav());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNomNaissance());
        $this->assertNull($obj->getNombreCachets());
        $this->assertNull($obj->getNouvelleAttest());
        $this->assertNull($obj->getNumCaisseSpectacle());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getNumeroCeInitial());
        $this->assertNull($obj->getNumeroCongesSpectacle());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getObservations());
        $this->assertNull($obj->getPeriodeAttest());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getPseudonyme());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSexe());
        $this->assertNull($obj->getSignataireCertificatEmploi());
        $this->assertNull($obj->getStatutCadre());
        $this->assertNull($obj->getTelContact());
        $this->assertNull($obj->getTitre());
        $this->assertNull($obj->getTypeCe());
    }
}
