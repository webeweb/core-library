<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\CongesSpectacles;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Conges spectacles model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class CongesSpectaclesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new CongesSpectacles();

		$this->assertNull($obj->getBaseConges());
		$this->assertNull($obj->getBrut());
		$this->assertNull($obj->getCEInitial());
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
		$this->assertNull($obj->getIndiceCE());
		$this->assertNull($obj->getLienDocument());
		$this->assertNull($obj->getLieuCertificatEmploi());
		$this->assertNull($obj->getLieuNaissance());
		$this->assertNull($obj->getNIR());
		$this->assertNull($obj->getNbJourTrav());
		$this->assertNull($obj->getNomEmploye());
		$this->assertNull($obj->getNomNaissance());
		$this->assertNull($obj->getNombreCachets());
		$this->assertNull($obj->getNouvelleAttest());
		$this->assertNull($obj->getNumCaisseSpectacle());
		$this->assertNull($obj->getNumeroAttestation());
		$this->assertNull($obj->getNumeroCEInitial());
		$this->assertNull($obj->getNumeroCongesSpectacle());
		$this->assertNull($obj->getNumeroEmploye());
		$this->assertNull($obj->getObservations());
		$this->assertNull($obj->getPeriodeAttest());
		$this->assertNull($obj->getPrenom());
		$this->assertNull($obj->getPseudonyme());
		$this->assertNull($obj->getSIRET());
		$this->assertNull($obj->getSexe());
		$this->assertNull($obj->getSignataireCertificatEmploi());
		$this->assertNull($obj->getStatutCadre());
		$this->assertNull($obj->getTelContact());
		$this->assertNull($obj->getTitre());
		$this->assertNull($obj->getTypeCE());
	}

	/**
	 * Tests the setBaseConges() method.
	 *
	 * @return void
	 */
	public function testSetBaseConges() {

		$obj = new CongesSpectacles();

		$obj->setBaseConges(10.092018);
		$this->assertEquals(10.092018, $obj->getBaseConges());
	}

	/**
	 * Tests the setBrut() method.
	 *
	 * @return void
	 */
	public function testSetBrut() {

		$obj = new CongesSpectacles();

		$obj->setBrut(10.092018);
		$this->assertEquals(10.092018, $obj->getBrut());
	}

	/**
	 * Tests the setCEInitial() method.
	 *
	 * @return void
	 */
	public function testSetCEInitial() {

		$obj = new CongesSpectacles();

		$obj->setCEInitial(true);
		$this->assertEquals(true, $obj->getCEInitial());
	}

	/**
	 * Tests the setCodeEmploi() method.
	 *
	 * @return void
	 */
	public function testSetCodeEmploi() {

		$obj = new CongesSpectacles();

		$obj->setCodeEmploi("codeEmploi");
		$this->assertEquals("codeEmploi", $obj->getCodeEmploi());
	}

	/**
	 * Tests the setCodeEtablissement() method.
	 *
	 * @return void
	 */
	public function testSetCodeEtablissement() {

		$obj = new CongesSpectacles();

		$obj->setCodeEtablissement(10);
		$this->assertEquals(10, $obj->getCodeEtablissement());
	}

	/**
	 * Tests the setContact() method.
	 *
	 * @return void
	 */
	public function testSetContact() {

		$obj = new CongesSpectacles();

		$obj->setContact("contact");
		$this->assertEquals("contact", $obj->getContact());
	}

	/**
	 * Tests the setContratEnCours() method.
	 *
	 * @return void
	 */
	public function testSetContratEnCours() {

		$obj = new CongesSpectacles();

		$obj->setContratEnCours(true);
		$this->assertEquals(true, $obj->getContratEnCours());
	}

	/**
	 * Tests the setDateCertificatEmploi() method.
	 *
	 * @return void
	 */
	public function testSetDateCertificatEmploi() {

		$obj = new CongesSpectacles();

		$obj->setDateCertificatEmploi(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCertificatEmploi());
	}

	/**
	 * Tests the setDateEmbauche() method.
	 *
	 * @return void
	 */
	public function testSetDateEmbauche() {

		$obj = new CongesSpectacles();

		$obj->setDateEmbauche(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEmbauche());
	}

	/**
	 * Tests the setDateFinContrat() method.
	 *
	 * @return void
	 */
	public function testSetDateFinContrat() {

		$obj = new CongesSpectacles();

		$obj->setDateFinContrat(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinContrat());
	}

	/**
	 * Tests the setDateNaissance() method.
	 *
	 * @return void
	 */
	public function testSetDateNaissance() {

		$obj = new CongesSpectacles();

		$obj->setDateNaissance(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateNaissance());
	}

	/**
	 * Tests the setDatePaiement() method.
	 *
	 * @return void
	 */
	public function testSetDatePaiement() {

		$obj = new CongesSpectacles();

		$obj->setDatePaiement(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDatePaiement());
	}

	/**
	 * Tests the setDebutPeriodeAttest() method.
	 *
	 * @return void
	 */
	public function testSetDebutPeriodeAttest() {

		$obj = new CongesSpectacles();

		$obj->setDebutPeriodeAttest(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDebutPeriodeAttest());
	}

	/**
	 * Tests the setDeptNaissance() method.
	 *
	 * @return void
	 */
	public function testSetDeptNaissance() {

		$obj = new CongesSpectacles();

		$obj->setDeptNaissance("deptNaissance");
		$this->assertEquals("deptNaissance", $obj->getDeptNaissance());
	}

	/**
	 * Tests the setDisquette() method.
	 *
	 * @return void
	 */
	public function testSetDisquette() {

		$obj = new CongesSpectacles();

		$obj->setDisquette(true);
		$this->assertEquals(true, $obj->getDisquette());
	}

	/**
	 * Tests the setEdite() method.
	 *
	 * @return void
	 */
	public function testSetEdite() {

		$obj = new CongesSpectacles();

		$obj->setEdite(true);
		$this->assertEquals(true, $obj->getEdite());
	}

	/**
	 * Tests the setEmpAdresse1() method.
	 *
	 * @return void
	 */
	public function testSetEmpAdresse1() {

		$obj = new CongesSpectacles();

		$obj->setEmpAdresse1("empAdresse1");
		$this->assertEquals("empAdresse1", $obj->getEmpAdresse1());
	}

	/**
	 * Tests the setEmpAdresse2() method.
	 *
	 * @return void
	 */
	public function testSetEmpAdresse2() {

		$obj = new CongesSpectacles();

		$obj->setEmpAdresse2("empAdresse2");
		$this->assertEquals("empAdresse2", $obj->getEmpAdresse2());
	}

	/**
	 * Tests the setEmpCodePostal() method.
	 *
	 * @return void
	 */
	public function testSetEmpCodePostal() {

		$obj = new CongesSpectacles();

		$obj->setEmpCodePostal("empCodePostal");
		$this->assertEquals("empCodePostal", $obj->getEmpCodePostal());
	}

	/**
	 * Tests the setEmpCommune() method.
	 *
	 * @return void
	 */
	public function testSetEmpCommune() {

		$obj = new CongesSpectacles();

		$obj->setEmpCommune("empCommune");
		$this->assertEquals("empCommune", $obj->getEmpCommune());
	}

	/**
	 * Tests the setEmploi() method.
	 *
	 * @return void
	 */
	public function testSetEmploi() {

		$obj = new CongesSpectacles();

		$obj->setEmploi("emploi");
		$this->assertEquals("emploi", $obj->getEmploi());
	}

	/**
	 * Tests the setEtblAdresse1() method.
	 *
	 * @return void
	 */
	public function testSetEtblAdresse1() {

		$obj = new CongesSpectacles();

		$obj->setEtblAdresse1("etblAdresse1");
		$this->assertEquals("etblAdresse1", $obj->getEtblAdresse1());
	}

	/**
	 * Tests the setEtblAdresse2() method.
	 *
	 * @return void
	 */
	public function testSetEtblAdresse2() {

		$obj = new CongesSpectacles();

		$obj->setEtblAdresse2("etblAdresse2");
		$this->assertEquals("etblAdresse2", $obj->getEtblAdresse2());
	}

	/**
	 * Tests the setEtblCodePostal() method.
	 *
	 * @return void
	 */
	public function testSetEtblCodePostal() {

		$obj = new CongesSpectacles();

		$obj->setEtblCodePostal("etblCodePostal");
		$this->assertEquals("etblCodePostal", $obj->getEtblCodePostal());
	}

	/**
	 * Tests the setEtblCommune() method.
	 *
	 * @return void
	 */
	public function testSetEtblCommune() {

		$obj = new CongesSpectacles();

		$obj->setEtblCommune("etblCommune");
		$this->assertEquals("etblCommune", $obj->getEtblCommune());
	}

	/**
	 * Tests the setEtblRaisonSociale() method.
	 *
	 * @return void
	 */
	public function testSetEtblRaisonSociale() {

		$obj = new CongesSpectacles();

		$obj->setEtblRaisonSociale("etblRaisonSociale");
		$this->assertEquals("etblRaisonSociale", $obj->getEtblRaisonSociale());
	}

	/**
	 * Tests the setEtblTel() method.
	 *
	 * @return void
	 */
	public function testSetEtblTel() {

		$obj = new CongesSpectacles();

		$obj->setEtblTel("etblTel");
		$this->assertEquals("etblTel", $obj->getEtblTel());
	}

	/**
	 * Tests the setIndiceCE() method.
	 *
	 * @return void
	 */
	public function testSetIndiceCE() {

		$obj = new CongesSpectacles();

		$obj->setIndiceCE(10);
		$this->assertEquals(10, $obj->getIndiceCE());
	}

	/**
	 * Tests the setLienDocument() method.
	 *
	 * @return void
	 */
	public function testSetLienDocument() {

		$obj = new CongesSpectacles();

		$obj->setLienDocument("lienDocument");
		$this->assertEquals("lienDocument", $obj->getLienDocument());
	}

	/**
	 * Tests the setLieuCertificatEmploi() method.
	 *
	 * @return void
	 */
	public function testSetLieuCertificatEmploi() {

		$obj = new CongesSpectacles();

		$obj->setLieuCertificatEmploi("lieuCertificatEmploi");
		$this->assertEquals("lieuCertificatEmploi", $obj->getLieuCertificatEmploi());
	}

	/**
	 * Tests the setLieuNaissance() method.
	 *
	 * @return void
	 */
	public function testSetLieuNaissance() {

		$obj = new CongesSpectacles();

		$obj->setLieuNaissance("lieuNaissance");
		$this->assertEquals("lieuNaissance", $obj->getLieuNaissance());
	}

	/**
	 * Tests the setNIR() method.
	 *
	 * @return void
	 */
	public function testSetNIR() {

		$obj = new CongesSpectacles();

		$obj->setNIR("nIR");
		$this->assertEquals("nIR", $obj->getNIR());
	}

	/**
	 * Tests the setNbJourTrav() method.
	 *
	 * @return void
	 */
	public function testSetNbJourTrav() {

		$obj = new CongesSpectacles();

		$obj->setNbJourTrav(10.092018);
		$this->assertEquals(10.092018, $obj->getNbJourTrav());
	}

	/**
	 * Tests the setNomEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNomEmploye() {

		$obj = new CongesSpectacles();

		$obj->setNomEmploye("nomEmploye");
		$this->assertEquals("nomEmploye", $obj->getNomEmploye());
	}

	/**
	 * Tests the setNomNaissance() method.
	 *
	 * @return void
	 */
	public function testSetNomNaissance() {

		$obj = new CongesSpectacles();

		$obj->setNomNaissance("nomNaissance");
		$this->assertEquals("nomNaissance", $obj->getNomNaissance());
	}

	/**
	 * Tests the setNombreCachets() method.
	 *
	 * @return void
	 */
	public function testSetNombreCachets() {

		$obj = new CongesSpectacles();

		$obj->setNombreCachets(10.092018);
		$this->assertEquals(10.092018, $obj->getNombreCachets());
	}

	/**
	 * Tests the setNouvelleAttest() method.
	 *
	 * @return void
	 */
	public function testSetNouvelleAttest() {

		$obj = new CongesSpectacles();

		$obj->setNouvelleAttest(true);
		$this->assertEquals(true, $obj->getNouvelleAttest());
	}

	/**
	 * Tests the setNumCaisseSpectacle() method.
	 *
	 * @return void
	 */
	public function testSetNumCaisseSpectacle() {

		$obj = new CongesSpectacles();

		$obj->setNumCaisseSpectacle("numCaisseSpectacle");
		$this->assertEquals("numCaisseSpectacle", $obj->getNumCaisseSpectacle());
	}

	/**
	 * Tests the setNumeroAttestation() method.
	 *
	 * @return void
	 */
	public function testSetNumeroAttestation() {

		$obj = new CongesSpectacles();

		$obj->setNumeroAttestation("numeroAttestation");
		$this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
	}

	/**
	 * Tests the setNumeroCEInitial() method.
	 *
	 * @return void
	 */
	public function testSetNumeroCEInitial() {

		$obj = new CongesSpectacles();

		$obj->setNumeroCEInitial("numeroCEInitial");
		$this->assertEquals("numeroCEInitial", $obj->getNumeroCEInitial());
	}

	/**
	 * Tests the setNumeroCongesSpectacle() method.
	 *
	 * @return void
	 */
	public function testSetNumeroCongesSpectacle() {

		$obj = new CongesSpectacles();

		$obj->setNumeroCongesSpectacle("numeroCongesSpectacle");
		$this->assertEquals("numeroCongesSpectacle", $obj->getNumeroCongesSpectacle());
	}

	/**
	 * Tests the setNumeroEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNumeroEmploye() {

		$obj = new CongesSpectacles();

		$obj->setNumeroEmploye("numeroEmploye");
		$this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
	}

	/**
	 * Tests the setObservations() method.
	 *
	 * @return void
	 */
	public function testSetObservations() {

		$obj = new CongesSpectacles();

		$obj->setObservations("observations");
		$this->assertEquals("observations", $obj->getObservations());
	}

	/**
	 * Tests the setPeriodeAttest() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeAttest() {

		$obj = new CongesSpectacles();

		$obj->setPeriodeAttest(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeAttest());
	}

	/**
	 * Tests the setPrenom() method.
	 *
	 * @return void
	 */
	public function testSetPrenom() {

		$obj = new CongesSpectacles();

		$obj->setPrenom("prenom");
		$this->assertEquals("prenom", $obj->getPrenom());
	}

	/**
	 * Tests the setPseudonyme() method.
	 *
	 * @return void
	 */
	public function testSetPseudonyme() {

		$obj = new CongesSpectacles();

		$obj->setPseudonyme("pseudonyme");
		$this->assertEquals("pseudonyme", $obj->getPseudonyme());
	}

	/**
	 * Tests the setSIRET() method.
	 *
	 * @return void
	 */
	public function testSetSIRET() {

		$obj = new CongesSpectacles();

		$obj->setSIRET("sIRET");
		$this->assertEquals("sIRET", $obj->getSIRET());
	}

	/**
	 * Tests the setSexe() method.
	 *
	 * @return void
	 */
	public function testSetSexe() {

		$obj = new CongesSpectacles();

		$obj->setSexe("sexe");
		$this->assertEquals("sexe", $obj->getSexe());
	}

	/**
	 * Tests the setSignataireCertificatEmploi() method.
	 *
	 * @return void
	 */
	public function testSetSignataireCertificatEmploi() {

		$obj = new CongesSpectacles();

		$obj->setSignataireCertificatEmploi("signataireCertificatEmploi");
		$this->assertEquals("signataireCertificatEmploi", $obj->getSignataireCertificatEmploi());
	}

	/**
	 * Tests the setStatutCadre() method.
	 *
	 * @return void
	 */
	public function testSetStatutCadre() {

		$obj = new CongesSpectacles();

		$obj->setStatutCadre(true);
		$this->assertEquals(true, $obj->getStatutCadre());
	}

	/**
	 * Tests the setTelContact() method.
	 *
	 * @return void
	 */
	public function testSetTelContact() {

		$obj = new CongesSpectacles();

		$obj->setTelContact("telContact");
		$this->assertEquals("telContact", $obj->getTelContact());
	}

	/**
	 * Tests the setTitre() method.
	 *
	 * @return void
	 */
	public function testSetTitre() {

		$obj = new CongesSpectacles();

		$obj->setTitre("titre");
		$this->assertEquals("titre", $obj->getTitre());
	}

	/**
	 * Tests the setTypeCE() method.
	 *
	 * @return void
	 */
	public function testSetTypeCE() {

		$obj = new CongesSpectacles();

		$obj->setTypeCE("typeCE");
		$this->assertEquals("typeCE", $obj->getTypeCE());
	}

}
