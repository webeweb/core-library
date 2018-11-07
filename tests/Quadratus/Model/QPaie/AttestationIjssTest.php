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
use WBW\Library\Core\Quadratus\Model\QPaie\AttestationIjss;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Attestation ijss model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class AttestationIjssTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new AttestationIjss();

		$this->assertNull($obj->getAdresse1());
		$this->assertNull($obj->getAdresse2());
		$this->assertNull($obj->getAdresse3());
		$this->assertNull($obj->getCasGeneral());
		$this->assertNull($obj->getCasParticulier());
		$this->assertNull($obj->getCategorieSal());
		$this->assertNull($obj->getCodeEtablissement());
		$this->assertNull($obj->getDateDebutPaternite());
		$this->assertNull($obj->getDateDernJMens());
		$this->assertNull($obj->getDateNaissanceEmploye());
		$this->assertNull($obj->getDateNaissanceEnfant());
		$this->assertNull($obj->getDernJ());
		$this->assertNull($obj->getDispenseTravail());
		$this->assertNull($obj->getEmploi());
		$this->assertNull($obj->getEtblAdresse1());
		$this->assertNull($obj->getEtblAdresse2());
		$this->assertNull($obj->getEtblAdresse3());
		$this->assertNull($obj->getEtblRaisonSociale());
		$this->assertNull($obj->getEtblTel());
		$this->assertNull($obj->getIBAN());
		$this->assertNull($obj->getIntituleCompte());
		$this->assertNull($obj->getLienDocument());
		$this->assertNull($obj->getMaladie());
		$this->assertNull($obj->getMaternite());
		$this->assertNull($obj->getMatricule());
		$this->assertNull($obj->getMontantGeneral());
		$this->assertNull($obj->getMontantParticulier());
		$this->assertNull($obj->getMtCGEuroOuFranc());
		$this->assertNull($obj->getMtCPEuroOuFranc());
		$this->assertNull($obj->getMtSalBrutMoins150H());
		$this->assertNull($obj->getMtSalBrutMoins600H());
		$this->assertNull($obj->getNIR());
		$this->assertNull($obj->getNbEnfantsACharge());
		$this->assertNull($obj->getNbHCasPart());
		$this->assertNull($obj->getNbHGeneral());
		$this->assertNull($obj->getNomEmploye());
		$this->assertNull($obj->getNomMarital());
		$this->assertNull($obj->getNonRepris());
		$this->assertNull($obj->getNumeroAttestation());
		$this->assertNull($obj->getNumeroEmploye());
		$this->assertNull($obj->getOrganisme());
		$this->assertNull($obj->getPaiementEnEuro());
		$this->assertNull($obj->getPaternite());
		$this->assertNull($obj->getPeriodeAu());
		$this->assertNull($obj->getPeriodeDu());
		$this->assertNull($obj->getPeriodeSubrAu());
		$this->assertNull($obj->getPeriodeSubrDu());
		$this->assertNull($obj->getPlusde200h());
		$this->assertNull($obj->getPlusde800h());
		$this->assertNull($obj->getPrenomEmploye());
		$this->assertNull($obj->getRectificative());
		$this->assertNull($obj->getReprise());
		$this->assertNull($obj->getRepriseMotifMed());
		$this->assertNull($obj->getRepriseRaisonPers());
		$this->assertNull($obj->getSIRET());
		$this->assertNull($obj->getSignatureDate());
		$this->assertNull($obj->getSignatureNom());
		$this->assertNull($obj->getSignatureQualite());
		$this->assertNull($obj->getSignatureVille());
		$this->assertNull($obj->getSituation());
		$this->assertNull($obj->getSubrogationConstantes());
		$this->assertNull($obj->getSubrogationMontant());
		$this->assertNull($obj->getSubrogationPartielle());
		$this->assertNull($obj->getSuspensionDate());
		$this->assertNull($obj->getSuspensionMotif());
		$this->assertNull($obj->getTravailTemp());
		$this->assertNull($obj->getTypeAttestation());
	}

	/**
	 * Tests the setAdresse1() method.
	 *
	 * @return void
	 */
	public function testSetAdresse1() {

		$obj = new AttestationIjss();

		$obj->setAdresse1("adresse1");
		$this->assertEquals("adresse1", $obj->getAdresse1());
	}

	/**
	 * Tests the setAdresse2() method.
	 *
	 * @return void
	 */
	public function testSetAdresse2() {

		$obj = new AttestationIjss();

		$obj->setAdresse2("adresse2");
		$this->assertEquals("adresse2", $obj->getAdresse2());
	}

	/**
	 * Tests the setAdresse3() method.
	 *
	 * @return void
	 */
	public function testSetAdresse3() {

		$obj = new AttestationIjss();

		$obj->setAdresse3("adresse3");
		$this->assertEquals("adresse3", $obj->getAdresse3());
	}

	/**
	 * Tests the setCasGeneral() method.
	 *
	 * @return void
	 */
	public function testSetCasGeneral() {

		$obj = new AttestationIjss();

		$obj->setCasGeneral(true);
		$this->assertEquals(true, $obj->getCasGeneral());
	}

	/**
	 * Tests the setCasParticulier() method.
	 *
	 * @return void
	 */
	public function testSetCasParticulier() {

		$obj = new AttestationIjss();

		$obj->setCasParticulier(true);
		$this->assertEquals(true, $obj->getCasParticulier());
	}

	/**
	 * Tests the setCategorieSal() method.
	 *
	 * @return void
	 */
	public function testSetCategorieSal() {

		$obj = new AttestationIjss();

		$obj->setCategorieSal("categorieSal");
		$this->assertEquals("categorieSal", $obj->getCategorieSal());
	}

	/**
	 * Tests the setCodeEtablissement() method.
	 *
	 * @return void
	 */
	public function testSetCodeEtablissement() {

		$obj = new AttestationIjss();

		$obj->setCodeEtablissement(10);
		$this->assertEquals(10, $obj->getCodeEtablissement());
	}

	/**
	 * Tests the setDateDebutPaternite() method.
	 *
	 * @return void
	 */
	public function testSetDateDebutPaternite() {

		$obj = new AttestationIjss();

		$obj->setDateDebutPaternite(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebutPaternite());
	}

	/**
	 * Tests the setDateDernJMens() method.
	 *
	 * @return void
	 */
	public function testSetDateDernJMens() {

		$obj = new AttestationIjss();

		$obj->setDateDernJMens(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDernJMens());
	}

	/**
	 * Tests the setDateNaissanceEmploye() method.
	 *
	 * @return void
	 */
	public function testSetDateNaissanceEmploye() {

		$obj = new AttestationIjss();

		$obj->setDateNaissanceEmploye(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateNaissanceEmploye());
	}

	/**
	 * Tests the setDateNaissanceEnfant() method.
	 *
	 * @return void
	 */
	public function testSetDateNaissanceEnfant() {

		$obj = new AttestationIjss();

		$obj->setDateNaissanceEnfant(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateNaissanceEnfant());
	}

	/**
	 * Tests the setDernJ() method.
	 *
	 * @return void
	 */
	public function testSetDernJ() {

		$obj = new AttestationIjss();

		$obj->setDernJ(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDernJ());
	}

	/**
	 * Tests the setDispenseTravail() method.
	 *
	 * @return void
	 */
	public function testSetDispenseTravail() {

		$obj = new AttestationIjss();

		$obj->setDispenseTravail(true);
		$this->assertEquals(true, $obj->getDispenseTravail());
	}

	/**
	 * Tests the setEmploi() method.
	 *
	 * @return void
	 */
	public function testSetEmploi() {

		$obj = new AttestationIjss();

		$obj->setEmploi("emploi");
		$this->assertEquals("emploi", $obj->getEmploi());
	}

	/**
	 * Tests the setEtblAdresse1() method.
	 *
	 * @return void
	 */
	public function testSetEtblAdresse1() {

		$obj = new AttestationIjss();

		$obj->setEtblAdresse1("etblAdresse1");
		$this->assertEquals("etblAdresse1", $obj->getEtblAdresse1());
	}

	/**
	 * Tests the setEtblAdresse2() method.
	 *
	 * @return void
	 */
	public function testSetEtblAdresse2() {

		$obj = new AttestationIjss();

		$obj->setEtblAdresse2("etblAdresse2");
		$this->assertEquals("etblAdresse2", $obj->getEtblAdresse2());
	}

	/**
	 * Tests the setEtblAdresse3() method.
	 *
	 * @return void
	 */
	public function testSetEtblAdresse3() {

		$obj = new AttestationIjss();

		$obj->setEtblAdresse3("etblAdresse3");
		$this->assertEquals("etblAdresse3", $obj->getEtblAdresse3());
	}

	/**
	 * Tests the setEtblRaisonSociale() method.
	 *
	 * @return void
	 */
	public function testSetEtblRaisonSociale() {

		$obj = new AttestationIjss();

		$obj->setEtblRaisonSociale("etblRaisonSociale");
		$this->assertEquals("etblRaisonSociale", $obj->getEtblRaisonSociale());
	}

	/**
	 * Tests the setEtblTel() method.
	 *
	 * @return void
	 */
	public function testSetEtblTel() {

		$obj = new AttestationIjss();

		$obj->setEtblTel("etblTel");
		$this->assertEquals("etblTel", $obj->getEtblTel());
	}

	/**
	 * Tests the setIBAN() method.
	 *
	 * @return void
	 */
	public function testSetIBAN() {

		$obj = new AttestationIjss();

		$obj->setIBAN("iBAN");
		$this->assertEquals("iBAN", $obj->getIBAN());
	}

	/**
	 * Tests the setIntituleCompte() method.
	 *
	 * @return void
	 */
	public function testSetIntituleCompte() {

		$obj = new AttestationIjss();

		$obj->setIntituleCompte("intituleCompte");
		$this->assertEquals("intituleCompte", $obj->getIntituleCompte());
	}

	/**
	 * Tests the setLienDocument() method.
	 *
	 * @return void
	 */
	public function testSetLienDocument() {

		$obj = new AttestationIjss();

		$obj->setLienDocument("lienDocument");
		$this->assertEquals("lienDocument", $obj->getLienDocument());
	}

	/**
	 * Tests the setMaladie() method.
	 *
	 * @return void
	 */
	public function testSetMaladie() {

		$obj = new AttestationIjss();

		$obj->setMaladie(true);
		$this->assertEquals(true, $obj->getMaladie());
	}

	/**
	 * Tests the setMaternite() method.
	 *
	 * @return void
	 */
	public function testSetMaternite() {

		$obj = new AttestationIjss();

		$obj->setMaternite(true);
		$this->assertEquals(true, $obj->getMaternite());
	}

	/**
	 * Tests the setMatricule() method.
	 *
	 * @return void
	 */
	public function testSetMatricule() {

		$obj = new AttestationIjss();

		$obj->setMatricule("matricule");
		$this->assertEquals("matricule", $obj->getMatricule());
	}

	/**
	 * Tests the setMontantGeneral() method.
	 *
	 * @return void
	 */
	public function testSetMontantGeneral() {

		$obj = new AttestationIjss();

		$obj->setMontantGeneral(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantGeneral());
	}

	/**
	 * Tests the setMontantParticulier() method.
	 *
	 * @return void
	 */
	public function testSetMontantParticulier() {

		$obj = new AttestationIjss();

		$obj->setMontantParticulier(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantParticulier());
	}

	/**
	 * Tests the setMtCGEuroOuFranc() method.
	 *
	 * @return void
	 */
	public function testSetMtCGEuroOuFranc() {

		$obj = new AttestationIjss();

		$obj->setMtCGEuroOuFranc("mtCGEuroOuFranc");
		$this->assertEquals("mtCGEuroOuFranc", $obj->getMtCGEuroOuFranc());
	}

	/**
	 * Tests the setMtCPEuroOuFranc() method.
	 *
	 * @return void
	 */
	public function testSetMtCPEuroOuFranc() {

		$obj = new AttestationIjss();

		$obj->setMtCPEuroOuFranc("mtCPEuroOuFranc");
		$this->assertEquals("mtCPEuroOuFranc", $obj->getMtCPEuroOuFranc());
	}

	/**
	 * Tests the setMtSalBrutMoins150H() method.
	 *
	 * @return void
	 */
	public function testSetMtSalBrutMoins150H() {

		$obj = new AttestationIjss();

		$obj->setMtSalBrutMoins150H(10.092018);
		$this->assertEquals(10.092018, $obj->getMtSalBrutMoins150H());
	}

	/**
	 * Tests the setMtSalBrutMoins600H() method.
	 *
	 * @return void
	 */
	public function testSetMtSalBrutMoins600H() {

		$obj = new AttestationIjss();

		$obj->setMtSalBrutMoins600H(10.092018);
		$this->assertEquals(10.092018, $obj->getMtSalBrutMoins600H());
	}

	/**
	 * Tests the setNIR() method.
	 *
	 * @return void
	 */
	public function testSetNIR() {

		$obj = new AttestationIjss();

		$obj->setNIR("nIR");
		$this->assertEquals("nIR", $obj->getNIR());
	}

	/**
	 * Tests the setNbEnfantsACharge() method.
	 *
	 * @return void
	 */
	public function testSetNbEnfantsACharge() {

		$obj = new AttestationIjss();

		$obj->setNbEnfantsACharge("nbEnfantsACharge");
		$this->assertEquals("nbEnfantsACharge", $obj->getNbEnfantsACharge());
	}

	/**
	 * Tests the setNbHCasPart() method.
	 *
	 * @return void
	 */
	public function testSetNbHCasPart() {

		$obj = new AttestationIjss();

		$obj->setNbHCasPart(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHCasPart());
	}

	/**
	 * Tests the setNbHGeneral() method.
	 *
	 * @return void
	 */
	public function testSetNbHGeneral() {

		$obj = new AttestationIjss();

		$obj->setNbHGeneral(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHGeneral());
	}

	/**
	 * Tests the setNomEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNomEmploye() {

		$obj = new AttestationIjss();

		$obj->setNomEmploye("nomEmploye");
		$this->assertEquals("nomEmploye", $obj->getNomEmploye());
	}

	/**
	 * Tests the setNomMarital() method.
	 *
	 * @return void
	 */
	public function testSetNomMarital() {

		$obj = new AttestationIjss();

		$obj->setNomMarital("nomMarital");
		$this->assertEquals("nomMarital", $obj->getNomMarital());
	}

	/**
	 * Tests the setNonRepris() method.
	 *
	 * @return void
	 */
	public function testSetNonRepris() {

		$obj = new AttestationIjss();

		$obj->setNonRepris(true);
		$this->assertEquals(true, $obj->getNonRepris());
	}

	/**
	 * Tests the setNumeroAttestation() method.
	 *
	 * @return void
	 */
	public function testSetNumeroAttestation() {

		$obj = new AttestationIjss();

		$obj->setNumeroAttestation("numeroAttestation");
		$this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
	}

	/**
	 * Tests the setNumeroEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNumeroEmploye() {

		$obj = new AttestationIjss();

		$obj->setNumeroEmploye("numeroEmploye");
		$this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
	}

	/**
	 * Tests the setOrganisme() method.
	 *
	 * @return void
	 */
	public function testSetOrganisme() {

		$obj = new AttestationIjss();

		$obj->setOrganisme("organisme");
		$this->assertEquals("organisme", $obj->getOrganisme());
	}

	/**
	 * Tests the setPaiementEnEuro() method.
	 *
	 * @return void
	 */
	public function testSetPaiementEnEuro() {

		$obj = new AttestationIjss();

		$obj->setPaiementEnEuro(true);
		$this->assertEquals(true, $obj->getPaiementEnEuro());
	}

	/**
	 * Tests the setPaternite() method.
	 *
	 * @return void
	 */
	public function testSetPaternite() {

		$obj = new AttestationIjss();

		$obj->setPaternite(true);
		$this->assertEquals(true, $obj->getPaternite());
	}

	/**
	 * Tests the setPeriodeAu() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeAu() {

		$obj = new AttestationIjss();

		$obj->setPeriodeAu(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeAu());
	}

	/**
	 * Tests the setPeriodeDu() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeDu() {

		$obj = new AttestationIjss();

		$obj->setPeriodeDu(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDu());
	}

	/**
	 * Tests the setPeriodeSubrAu() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeSubrAu() {

		$obj = new AttestationIjss();

		$obj->setPeriodeSubrAu(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeSubrAu());
	}

	/**
	 * Tests the setPeriodeSubrDu() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeSubrDu() {

		$obj = new AttestationIjss();

		$obj->setPeriodeSubrDu(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeSubrDu());
	}

	/**
	 * Tests the setPlusde200h() method.
	 *
	 * @return void
	 */
	public function testSetPlusde200h() {

		$obj = new AttestationIjss();

		$obj->setPlusde200h(true);
		$this->assertEquals(true, $obj->getPlusde200h());
	}

	/**
	 * Tests the setPlusde800h() method.
	 *
	 * @return void
	 */
	public function testSetPlusde800h() {

		$obj = new AttestationIjss();

		$obj->setPlusde800h(true);
		$this->assertEquals(true, $obj->getPlusde800h());
	}

	/**
	 * Tests the setPrenomEmploye() method.
	 *
	 * @return void
	 */
	public function testSetPrenomEmploye() {

		$obj = new AttestationIjss();

		$obj->setPrenomEmploye("prenomEmploye");
		$this->assertEquals("prenomEmploye", $obj->getPrenomEmploye());
	}

	/**
	 * Tests the setRectificative() method.
	 *
	 * @return void
	 */
	public function testSetRectificative() {

		$obj = new AttestationIjss();

		$obj->setRectificative(true);
		$this->assertEquals(true, $obj->getRectificative());
	}

	/**
	 * Tests the setReprise() method.
	 *
	 * @return void
	 */
	public function testSetReprise() {

		$obj = new AttestationIjss();

		$obj->setReprise(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getReprise());
	}

	/**
	 * Tests the setRepriseMotifMed() method.
	 *
	 * @return void
	 */
	public function testSetRepriseMotifMed() {

		$obj = new AttestationIjss();

		$obj->setRepriseMotifMed(true);
		$this->assertEquals(true, $obj->getRepriseMotifMed());
	}

	/**
	 * Tests the setRepriseRaisonPers() method.
	 *
	 * @return void
	 */
	public function testSetRepriseRaisonPers() {

		$obj = new AttestationIjss();

		$obj->setRepriseRaisonPers(true);
		$this->assertEquals(true, $obj->getRepriseRaisonPers());
	}

	/**
	 * Tests the setSIRET() method.
	 *
	 * @return void
	 */
	public function testSetSIRET() {

		$obj = new AttestationIjss();

		$obj->setSIRET("sIRET");
		$this->assertEquals("sIRET", $obj->getSIRET());
	}

	/**
	 * Tests the setSignatureDate() method.
	 *
	 * @return void
	 */
	public function testSetSignatureDate() {

		$obj = new AttestationIjss();

		$obj->setSignatureDate(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getSignatureDate());
	}

	/**
	 * Tests the setSignatureNom() method.
	 *
	 * @return void
	 */
	public function testSetSignatureNom() {

		$obj = new AttestationIjss();

		$obj->setSignatureNom("signatureNom");
		$this->assertEquals("signatureNom", $obj->getSignatureNom());
	}

	/**
	 * Tests the setSignatureQualite() method.
	 *
	 * @return void
	 */
	public function testSetSignatureQualite() {

		$obj = new AttestationIjss();

		$obj->setSignatureQualite("signatureQualite");
		$this->assertEquals("signatureQualite", $obj->getSignatureQualite());
	}

	/**
	 * Tests the setSignatureVille() method.
	 *
	 * @return void
	 */
	public function testSetSignatureVille() {

		$obj = new AttestationIjss();

		$obj->setSignatureVille("signatureVille");
		$this->assertEquals("signatureVille", $obj->getSignatureVille());
	}

	/**
	 * Tests the setSituation() method.
	 *
	 * @return void
	 */
	public function testSetSituation() {

		$obj = new AttestationIjss();

		$obj->setSituation("situation");
		$this->assertEquals("situation", $obj->getSituation());
	}

	/**
	 * Tests the setSubrogationConstantes() method.
	 *
	 * @return void
	 */
	public function testSetSubrogationConstantes() {

		$obj = new AttestationIjss();

		$obj->setSubrogationConstantes(true);
		$this->assertEquals(true, $obj->getSubrogationConstantes());
	}

	/**
	 * Tests the setSubrogationMontant() method.
	 *
	 * @return void
	 */
	public function testSetSubrogationMontant() {

		$obj = new AttestationIjss();

		$obj->setSubrogationMontant(10.092018);
		$this->assertEquals(10.092018, $obj->getSubrogationMontant());
	}

	/**
	 * Tests the setSubrogationPartielle() method.
	 *
	 * @return void
	 */
	public function testSetSubrogationPartielle() {

		$obj = new AttestationIjss();

		$obj->setSubrogationPartielle(true);
		$this->assertEquals(true, $obj->getSubrogationPartielle());
	}

	/**
	 * Tests the setSuspensionDate() method.
	 *
	 * @return void
	 */
	public function testSetSuspensionDate() {

		$obj = new AttestationIjss();

		$obj->setSuspensionDate(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getSuspensionDate());
	}

	/**
	 * Tests the setSuspensionMotif() method.
	 *
	 * @return void
	 */
	public function testSetSuspensionMotif() {

		$obj = new AttestationIjss();

		$obj->setSuspensionMotif("suspensionMotif");
		$this->assertEquals("suspensionMotif", $obj->getSuspensionMotif());
	}

	/**
	 * Tests the setTravailTemp() method.
	 *
	 * @return void
	 */
	public function testSetTravailTemp() {

		$obj = new AttestationIjss();

		$obj->setTravailTemp(true);
		$this->assertEquals(true, $obj->getTravailTemp());
	}

	/**
	 * Tests the setTypeAttestation() method.
	 *
	 * @return void
	 */
	public function testSetTypeAttestation() {

		$obj = new AttestationIjss();

		$obj->setTypeAttestation("typeAttestation");
		$this->assertEquals("typeAttestation", $obj->getTypeAttestation());
	}

}
