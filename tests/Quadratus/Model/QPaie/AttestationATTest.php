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
use WBW\Library\Core\Quadratus\Model\QPaie\AttestationAT;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Attestation a t model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class AttestationATTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new AttestationAT();

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
		$this->assertNull($obj->getIBAN());
		$this->assertNull($obj->getIntegral());
		$this->assertNull($obj->getIntituleCompte());
		$this->assertNull($obj->getLienDocument());
		$this->assertNull($obj->getLieuNaissance());
		$this->assertNull($obj->getMaintien());
		$this->assertNull($obj->getMaladiePro());
		$this->assertNull($obj->getMedecin());
		$this->assertNull($obj->getMontantCotisTheo());
		$this->assertNull($obj->getMontantSalTheo());
		$this->assertNull($obj->getNIR());
		$this->assertNull($obj->getNationaliteAutre());
		$this->assertNull($obj->getNationaliteCEE());
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
		$this->assertNull($obj->getRisqueAT());
		$this->assertNull($obj->getSIRET());
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

		$obj = new AttestationAT();

		$obj->setAccident(true);
		$this->assertEquals(true, $obj->getAccident());
	}

	/**
	 * Tests the setAccidentMoisEmbauche() method.
	 *
	 * @return void
	 */
	public function testSetAccidentMoisEmbauche() {

		$obj = new AttestationAT();

		$obj->setAccidentMoisEmbauche(true);
		$this->assertEquals(true, $obj->getAccidentMoisEmbauche());
	}

	/**
	 * Tests the setAdresse1() method.
	 *
	 * @return void
	 */
	public function testSetAdresse1() {

		$obj = new AttestationAT();

		$obj->setAdresse1("adresse1");
		$this->assertEquals("adresse1", $obj->getAdresse1());
	}

	/**
	 * Tests the setAdresse3() method.
	 *
	 * @return void
	 */
	public function testSetAdresse3() {

		$obj = new AttestationAT();

		$obj->setAdresse3("adresse3");
		$this->assertEquals("adresse3", $obj->getAdresse3());
	}

	/**
	 * Tests the setAnciennete() method.
	 *
	 * @return void
	 */
	public function testSetAnciennete() {

		$obj = new AttestationAT();

		$obj->setAnciennete("anciennete");
		$this->assertEquals("anciennete", $obj->getAnciennete());
	}

	/**
	 * Tests the setAutreVivtime() method.
	 *
	 * @return void
	 */
	public function testSetAutreVivtime() {

		$obj = new AttestationAT();

		$obj->setAutreVivtime(true);
		$this->assertEquals(true, $obj->getAutreVivtime());
	}

	/**
	 * Tests the setCasPart() method.
	 *
	 * @return void
	 */
	public function testSetCasPart() {

		$obj = new AttestationAT();

		$obj->setCasPart("casPart");
		$this->assertEquals("casPart", $obj->getCasPart());
	}

	/**
	 * Tests the setCodeEtablissement() method.
	 *
	 * @return void
	 */
	public function testSetCodeEtablissement() {

		$obj = new AttestationAT();

		$obj->setCodeEtablissement(10);
		$this->assertEquals(10, $obj->getCodeEtablissement());
	}

	/**
	 * Tests the setDateAccident() method.
	 *
	 * @return void
	 */
	public function testSetDateAccident() {

		$obj = new AttestationAT();

		$obj->setDateAccident(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAccident());
	}

	/**
	 * Tests the setDateContrat() method.
	 *
	 * @return void
	 */
	public function testSetDateContrat() {

		$obj = new AttestationAT();

		$obj->setDateContrat(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateContrat());
	}

	/**
	 * Tests the setDateNaissance() method.
	 *
	 * @return void
	 */
	public function testSetDateNaissance() {

		$obj = new AttestationAT();

		$obj->setDateNaissance(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateNaissance());
	}

	/**
	 * Tests the setDernHeure() method.
	 *
	 * @return void
	 */
	public function testSetDernHeure() {

		$obj = new AttestationAT();

		$obj->setDernHeure(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDernHeure());
	}

	/**
	 * Tests the setDernJ() method.
	 *
	 * @return void
	 */
	public function testSetDernJ() {

		$obj = new AttestationAT();

		$obj->setDernJ(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDernJ());
	}

	/**
	 * Tests the setEmbauche() method.
	 *
	 * @return void
	 */
	public function testSetEmbauche() {

		$obj = new AttestationAT();

		$obj->setEmbauche(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getEmbauche());
	}

	/**
	 * Tests the setEmploi() method.
	 *
	 * @return void
	 */
	public function testSetEmploi() {

		$obj = new AttestationAT();

		$obj->setEmploi("emploi");
		$this->assertEquals("emploi", $obj->getEmploi());
	}

	/**
	 * Tests the setEtblAAdresse1() method.
	 *
	 * @return void
	 */
	public function testSetEtblAAdresse1() {

		$obj = new AttestationAT();

		$obj->setEtblAAdresse1("etblAAdresse1");
		$this->assertEquals("etblAAdresse1", $obj->getEtblAAdresse1());
	}

	/**
	 * Tests the setEtblAAdresse2() method.
	 *
	 * @return void
	 */
	public function testSetEtblAAdresse2() {

		$obj = new AttestationAT();

		$obj->setEtblAAdresse2("etblAAdresse2");
		$this->assertEquals("etblAAdresse2", $obj->getEtblAAdresse2());
	}

	/**
	 * Tests the setEtblAAdresse3() method.
	 *
	 * @return void
	 */
	public function testSetEtblAAdresse3() {

		$obj = new AttestationAT();

		$obj->setEtblAAdresse3("etblAAdresse3");
		$this->assertEquals("etblAAdresse3", $obj->getEtblAAdresse3());
	}

	/**
	 * Tests the setEtblATel() method.
	 *
	 * @return void
	 */
	public function testSetEtblATel() {

		$obj = new AttestationAT();

		$obj->setEtblATel("etblATel");
		$this->assertEquals("etblATel", $obj->getEtblATel());
	}

	/**
	 * Tests the setEtblAdresse1() method.
	 *
	 * @return void
	 */
	public function testSetEtblAdresse1() {

		$obj = new AttestationAT();

		$obj->setEtblAdresse1("etblAdresse1");
		$this->assertEquals("etblAdresse1", $obj->getEtblAdresse1());
	}

	/**
	 * Tests the setEtblAdresse2() method.
	 *
	 * @return void
	 */
	public function testSetEtblAdresse2() {

		$obj = new AttestationAT();

		$obj->setEtblAdresse2("etblAdresse2");
		$this->assertEquals("etblAdresse2", $obj->getEtblAdresse2());
	}

	/**
	 * Tests the setEtblAdresse3() method.
	 *
	 * @return void
	 */
	public function testSetEtblAdresse3() {

		$obj = new AttestationAT();

		$obj->setEtblAdresse3("etblAdresse3");
		$this->assertEquals("etblAdresse3", $obj->getEtblAdresse3());
	}

	/**
	 * Tests the setEtblNatureActivite() method.
	 *
	 * @return void
	 */
	public function testSetEtblNatureActivite() {

		$obj = new AttestationAT();

		$obj->setEtblNatureActivite("etblNatureActivite");
		$this->assertEquals("etblNatureActivite", $obj->getEtblNatureActivite());
	}

	/**
	 * Tests the setEtblNoAdherent() method.
	 *
	 * @return void
	 */
	public function testSetEtblNoAdherent() {

		$obj = new AttestationAT();

		$obj->setEtblNoAdherent("etblNoAdherent");
		$this->assertEquals("etblNoAdherent", $obj->getEtblNoAdherent());
	}

	/**
	 * Tests the setEtblNomPrenom() method.
	 *
	 * @return void
	 */
	public function testSetEtblNomPrenom() {

		$obj = new AttestationAT();

		$obj->setEtblNomPrenom("etblNomPrenom");
		$this->assertEquals("etblNomPrenom", $obj->getEtblNomPrenom());
	}

	/**
	 * Tests the setEtblRaisonSociale() method.
	 *
	 * @return void
	 */
	public function testSetEtblRaisonSociale() {

		$obj = new AttestationAT();

		$obj->setEtblRaisonSociale("etblRaisonSociale");
		$this->assertEquals("etblRaisonSociale", $obj->getEtblRaisonSociale());
	}

	/**
	 * Tests the setEtblTel() method.
	 *
	 * @return void
	 */
	public function testSetEtblTel() {

		$obj = new AttestationAT();

		$obj->setEtblTel("etblTel");
		$this->assertEquals("etblTel", $obj->getEtblTel());
	}

	/**
	 * Tests the setIBAN() method.
	 *
	 * @return void
	 */
	public function testSetIBAN() {

		$obj = new AttestationAT();

		$obj->setIBAN("iBAN");
		$this->assertEquals("iBAN", $obj->getIBAN());
	}

	/**
	 * Tests the setIntegral() method.
	 *
	 * @return void
	 */
	public function testSetIntegral() {

		$obj = new AttestationAT();

		$obj->setIntegral(true);
		$this->assertEquals(true, $obj->getIntegral());
	}

	/**
	 * Tests the setIntituleCompte() method.
	 *
	 * @return void
	 */
	public function testSetIntituleCompte() {

		$obj = new AttestationAT();

		$obj->setIntituleCompte("intituleCompte");
		$this->assertEquals("intituleCompte", $obj->getIntituleCompte());
	}

	/**
	 * Tests the setLienDocument() method.
	 *
	 * @return void
	 */
	public function testSetLienDocument() {

		$obj = new AttestationAT();

		$obj->setLienDocument("lienDocument");
		$this->assertEquals("lienDocument", $obj->getLienDocument());
	}

	/**
	 * Tests the setLieuNaissance() method.
	 *
	 * @return void
	 */
	public function testSetLieuNaissance() {

		$obj = new AttestationAT();

		$obj->setLieuNaissance("lieuNaissance");
		$this->assertEquals("lieuNaissance", $obj->getLieuNaissance());
	}

	/**
	 * Tests the setMaintien() method.
	 *
	 * @return void
	 */
	public function testSetMaintien() {

		$obj = new AttestationAT();

		$obj->setMaintien(true);
		$this->assertEquals(true, $obj->getMaintien());
	}

	/**
	 * Tests the setMaladiePro() method.
	 *
	 * @return void
	 */
	public function testSetMaladiePro() {

		$obj = new AttestationAT();

		$obj->setMaladiePro(true);
		$this->assertEquals(true, $obj->getMaladiePro());
	}

	/**
	 * Tests the setMedecin() method.
	 *
	 * @return void
	 */
	public function testSetMedecin() {

		$obj = new AttestationAT();

		$obj->setMedecin("medecin");
		$this->assertEquals("medecin", $obj->getMedecin());
	}

	/**
	 * Tests the setMontantCotisTheo() method.
	 *
	 * @return void
	 */
	public function testSetMontantCotisTheo() {

		$obj = new AttestationAT();

		$obj->setMontantCotisTheo(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantCotisTheo());
	}

	/**
	 * Tests the setMontantSalTheo() method.
	 *
	 * @return void
	 */
	public function testSetMontantSalTheo() {

		$obj = new AttestationAT();

		$obj->setMontantSalTheo(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantSalTheo());
	}

	/**
	 * Tests the setNIR() method.
	 *
	 * @return void
	 */
	public function testSetNIR() {

		$obj = new AttestationAT();

		$obj->setNIR("nIR");
		$this->assertEquals("nIR", $obj->getNIR());
	}

	/**
	 * Tests the setNationaliteAutre() method.
	 *
	 * @return void
	 */
	public function testSetNationaliteAutre() {

		$obj = new AttestationAT();

		$obj->setNationaliteAutre(true);
		$this->assertEquals(true, $obj->getNationaliteAutre());
	}

	/**
	 * Tests the setNationaliteCEE() method.
	 *
	 * @return void
	 */
	public function testSetNationaliteCEE() {

		$obj = new AttestationAT();

		$obj->setNationaliteCEE(true);
		$this->assertEquals(true, $obj->getNationaliteCEE());
	}

	/**
	 * Tests the setNationaliteFr() method.
	 *
	 * @return void
	 */
	public function testSetNationaliteFr() {

		$obj = new AttestationAT();

		$obj->setNationaliteFr(true);
		$this->assertEquals(true, $obj->getNationaliteFr());
	}

	/**
	 * Tests the setNomEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNomEmploye() {

		$obj = new AttestationAT();

		$obj->setNomEmploye("nomEmploye");
		$this->assertEquals("nomEmploye", $obj->getNomEmploye());
	}

	/**
	 * Tests the setNomMarital() method.
	 *
	 * @return void
	 */
	public function testSetNomMarital() {

		$obj = new AttestationAT();

		$obj->setNomMarital("nomMarital");
		$this->assertEquals("nomMarital", $obj->getNomMarital());
	}

	/**
	 * Tests the setNonRepris() method.
	 *
	 * @return void
	 */
	public function testSetNonRepris() {

		$obj = new AttestationAT();

		$obj->setNonRepris(true);
		$this->assertEquals(true, $obj->getNonRepris());
	}

	/**
	 * Tests the setNumContrat() method.
	 *
	 * @return void
	 */
	public function testSetNumContrat() {

		$obj = new AttestationAT();

		$obj->setNumContrat("numContrat");
		$this->assertEquals("numContrat", $obj->getNumContrat());
	}

	/**
	 * Tests the setNumeroAttestation() method.
	 *
	 * @return void
	 */
	public function testSetNumeroAttestation() {

		$obj = new AttestationAT();

		$obj->setNumeroAttestation("numeroAttestation");
		$this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
	}

	/**
	 * Tests the setNumeroEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNumeroEmploye() {

		$obj = new AttestationAT();

		$obj->setNumeroEmploye("numeroEmploye");
		$this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
	}

	/**
	 * Tests the setPartiel() method.
	 *
	 * @return void
	 */
	public function testSetPartiel() {

		$obj = new AttestationAT();

		$obj->setPartiel(true);
		$this->assertEquals(true, $obj->getPartiel());
	}

	/**
	 * Tests the setPerReferenceAu() method.
	 *
	 * @return void
	 */
	public function testSetPerReferenceAu() {

		$obj = new AttestationAT();

		$obj->setPerReferenceAu(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPerReferenceAu());
	}

	/**
	 * Tests the setPerReferenceCotisations() method.
	 *
	 * @return void
	 */
	public function testSetPerReferenceCotisations() {

		$obj = new AttestationAT();

		$obj->setPerReferenceCotisations(10.092018);
		$this->assertEquals(10.092018, $obj->getPerReferenceCotisations());
	}

	/**
	 * Tests the setPerReferenceDu() method.
	 *
	 * @return void
	 */
	public function testSetPerReferenceDu() {

		$obj = new AttestationAT();

		$obj->setPerReferenceDu(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPerReferenceDu());
	}

	/**
	 * Tests the setPerReferenceMontant() method.
	 *
	 * @return void
	 */
	public function testSetPerReferenceMontant() {

		$obj = new AttestationAT();

		$obj->setPerReferenceMontant(10.092018);
		$this->assertEquals(10.092018, $obj->getPerReferenceMontant());
	}

	/**
	 * Tests the setPerReferenceNbHeures() method.
	 *
	 * @return void
	 */
	public function testSetPerReferenceNbHeures() {

		$obj = new AttestationAT();

		$obj->setPerReferenceNbHeures(10.092018);
		$this->assertEquals(10.092018, $obj->getPerReferenceNbHeures());
	}

	/**
	 * Tests the setPerReferenceSalaires() method.
	 *
	 * @return void
	 */
	public function testSetPerReferenceSalaires() {

		$obj = new AttestationAT();

		$obj->setPerReferenceSalaires(10.092018);
		$this->assertEquals(10.092018, $obj->getPerReferenceSalaires());
	}

	/**
	 * Tests the setPeriodeSubrAu() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeSubrAu() {

		$obj = new AttestationAT();

		$obj->setPeriodeSubrAu(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeSubrAu());
	}

	/**
	 * Tests the setPeriodeSubrDu() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeSubrDu() {

		$obj = new AttestationAT();

		$obj->setPeriodeSubrDu(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeSubrDu());
	}

	/**
	 * Tests the setPrenomEmploye() method.
	 *
	 * @return void
	 */
	public function testSetPrenomEmploye() {

		$obj = new AttestationAT();

		$obj->setPrenomEmploye("prenomEmploye");
		$this->assertEquals("prenomEmploye", $obj->getPrenomEmploye());
	}

	/**
	 * Tests the setQualification() method.
	 *
	 * @return void
	 */
	public function testSetQualification() {

		$obj = new AttestationAT();

		$obj->setQualification("qualification");
		$this->assertEquals("qualification", $obj->getQualification());
	}

	/**
	 * Tests the setReprise() method.
	 *
	 * @return void
	 */
	public function testSetReprise() {

		$obj = new AttestationAT();

		$obj->setReprise(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getReprise());
	}

	/**
	 * Tests the setRisqueAT() method.
	 *
	 * @return void
	 */
	public function testSetRisqueAT() {

		$obj = new AttestationAT();

		$obj->setRisqueAT("risqueAT");
		$this->assertEquals("risqueAT", $obj->getRisqueAT());
	}

	/**
	 * Tests the setSIRET() method.
	 *
	 * @return void
	 */
	public function testSetSIRET() {

		$obj = new AttestationAT();

		$obj->setSIRET("sIRET");
		$this->assertEquals("sIRET", $obj->getSIRET());
	}

	/**
	 * Tests the setSalaireMini() method.
	 *
	 * @return void
	 */
	public function testSetSalaireMini() {

		$obj = new AttestationAT();

		$obj->setSalaireMini(10.092018);
		$this->assertEquals(10.092018, $obj->getSalaireMini());
	}

	/**
	 * Tests the setSexe() method.
	 *
	 * @return void
	 */
	public function testSetSexe() {

		$obj = new AttestationAT();

		$obj->setSexe("sexe");
		$this->assertEquals("sexe", $obj->getSexe());
	}

	/**
	 * Tests the setSignatureDate() method.
	 *
	 * @return void
	 */
	public function testSetSignatureDate() {

		$obj = new AttestationAT();

		$obj->setSignatureDate(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getSignatureDate());
	}

	/**
	 * Tests the setSignatureNom() method.
	 *
	 * @return void
	 */
	public function testSetSignatureNom() {

		$obj = new AttestationAT();

		$obj->setSignatureNom("signatureNom");
		$this->assertEquals("signatureNom", $obj->getSignatureNom());
	}

	/**
	 * Tests the setSignatureQualite() method.
	 *
	 * @return void
	 */
	public function testSetSignatureQualite() {

		$obj = new AttestationAT();

		$obj->setSignatureQualite("signatureQualite");
		$this->assertEquals("signatureQualite", $obj->getSignatureQualite());
	}

	/**
	 * Tests the setSignatureVille() method.
	 *
	 * @return void
	 */
	public function testSetSignatureVille() {

		$obj = new AttestationAT();

		$obj->setSignatureVille("signatureVille");
		$this->assertEquals("signatureVille", $obj->getSignatureVille());
	}

	/**
	 * Tests the setSubIntegral() method.
	 *
	 * @return void
	 */
	public function testSetSubIntegral() {

		$obj = new AttestationAT();

		$obj->setSubIntegral(true);
		$this->assertEquals(true, $obj->getSubIntegral());
	}

	/**
	 * Tests the setSubPartiel() method.
	 *
	 * @return void
	 */
	public function testSetSubPartiel() {

		$obj = new AttestationAT();

		$obj->setSubPartiel(true);
		$this->assertEquals(true, $obj->getSubPartiel());
	}

	/**
	 * Tests the setSubrogationDureeMax() method.
	 *
	 * @return void
	 */
	public function testSetSubrogationDureeMax() {

		$obj = new AttestationAT();

		$obj->setSubrogationDureeMax("subrogationDureeMax");
		$this->assertEquals("subrogationDureeMax", $obj->getSubrogationDureeMax());
	}

	/**
	 * Tests the setSubrogationMontant() method.
	 *
	 * @return void
	 */
	public function testSetSubrogationMontant() {

		$obj = new AttestationAT();

		$obj->setSubrogationMontant(10.092018);
		$this->assertEquals(10.092018, $obj->getSubrogationMontant());
	}

	/**
	 * Tests the setTypeAttestation() method.
	 *
	 * @return void
	 */
	public function testSetTypeAttestation() {

		$obj = new AttestationAT();

		$obj->setTypeAttestation("typeAttestation");
		$this->assertEquals("typeAttestation", $obj->getTypeAttestation());
	}

}
