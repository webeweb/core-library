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
use WBW\Library\Core\Quadratus\Model\QPaie\AttestationExtras;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Attestation extras model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class AttestationExtrasTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new AttestationExtras();

		$this->assertNull($obj->getAncienAssedic());
		$this->assertNull($obj->getAncienGARP());
		$this->assertNull($obj->getCodeEtablissement());
		$this->assertNull($obj->getCodeMotifRupture());
		$this->assertNull($obj->getCodeNaf());
		$this->assertNull($obj->getEffectif());
		$this->assertNull($obj->getEmploi());
		$this->assertNull($obj->getEtblAdresse());
		$this->assertNull($obj->getEtblRaisonSociale());
		$this->assertNull($obj->getEtblTel());
		$this->assertNull($obj->getLienDocument());
		$this->assertNull($obj->getNIR());
		$this->assertNull($obj->getNomEmploye());
		$this->assertNull($obj->getNomPoleEmploi());
		$this->assertNull($obj->getNomRegimeRetraite());
		$this->assertNull($obj->getNumeroAffiliation());
		$this->assertNull($obj->getNumeroAttestation());
		$this->assertNull($obj->getNumeroEmploye());
		$this->assertNull($obj->getPeriodeEmploiDeb());
		$this->assertNull($obj->getPeriodeEmploiFin());
		$this->assertNull($obj->getPrenom());
		$this->assertNull($obj->getSIRET());
		$this->assertNull($obj->getSignatureDate());
		$this->assertNull($obj->getSignatureNom());
		$this->assertNull($obj->getSignatureQualite());
		$this->assertNull($obj->getSignatureVille());
	}

	/**
	 * Tests the setAncienAssedic() method.
	 *
	 * @return void
	 */
	public function testSetAncienAssedic() {

		$obj = new AttestationExtras();

		$obj->setAncienAssedic(true);
		$this->assertEquals(true, $obj->getAncienAssedic());
	}

	/**
	 * Tests the setAncienGARP() method.
	 *
	 * @return void
	 */
	public function testSetAncienGARP() {

		$obj = new AttestationExtras();

		$obj->setAncienGARP(true);
		$this->assertEquals(true, $obj->getAncienGARP());
	}

	/**
	 * Tests the setCodeEtablissement() method.
	 *
	 * @return void
	 */
	public function testSetCodeEtablissement() {

		$obj = new AttestationExtras();

		$obj->setCodeEtablissement(10);
		$this->assertEquals(10, $obj->getCodeEtablissement());
	}

	/**
	 * Tests the setCodeMotifRupture() method.
	 *
	 * @return void
	 */
	public function testSetCodeMotifRupture() {

		$obj = new AttestationExtras();

		$obj->setCodeMotifRupture("codeMotifRupture");
		$this->assertEquals("codeMotifRupture", $obj->getCodeMotifRupture());
	}

	/**
	 * Tests the setCodeNaf() method.
	 *
	 * @return void
	 */
	public function testSetCodeNaf() {

		$obj = new AttestationExtras();

		$obj->setCodeNaf("codeNaf");
		$this->assertEquals("codeNaf", $obj->getCodeNaf());
	}

	/**
	 * Tests the setEffectif() method.
	 *
	 * @return void
	 */
	public function testSetEffectif() {

		$obj = new AttestationExtras();

		$obj->setEffectif(10);
		$this->assertEquals(10, $obj->getEffectif());
	}

	/**
	 * Tests the setEmploi() method.
	 *
	 * @return void
	 */
	public function testSetEmploi() {

		$obj = new AttestationExtras();

		$obj->setEmploi("emploi");
		$this->assertEquals("emploi", $obj->getEmploi());
	}

	/**
	 * Tests the setEtblAdresse() method.
	 *
	 * @return void
	 */
	public function testSetEtblAdresse() {

		$obj = new AttestationExtras();

		$obj->setEtblAdresse("etblAdresse");
		$this->assertEquals("etblAdresse", $obj->getEtblAdresse());
	}

	/**
	 * Tests the setEtblRaisonSociale() method.
	 *
	 * @return void
	 */
	public function testSetEtblRaisonSociale() {

		$obj = new AttestationExtras();

		$obj->setEtblRaisonSociale("etblRaisonSociale");
		$this->assertEquals("etblRaisonSociale", $obj->getEtblRaisonSociale());
	}

	/**
	 * Tests the setEtblTel() method.
	 *
	 * @return void
	 */
	public function testSetEtblTel() {

		$obj = new AttestationExtras();

		$obj->setEtblTel("etblTel");
		$this->assertEquals("etblTel", $obj->getEtblTel());
	}

	/**
	 * Tests the setLienDocument() method.
	 *
	 * @return void
	 */
	public function testSetLienDocument() {

		$obj = new AttestationExtras();

		$obj->setLienDocument("lienDocument");
		$this->assertEquals("lienDocument", $obj->getLienDocument());
	}

	/**
	 * Tests the setNIR() method.
	 *
	 * @return void
	 */
	public function testSetNIR() {

		$obj = new AttestationExtras();

		$obj->setNIR("nIR");
		$this->assertEquals("nIR", $obj->getNIR());
	}

	/**
	 * Tests the setNomEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNomEmploye() {

		$obj = new AttestationExtras();

		$obj->setNomEmploye("nomEmploye");
		$this->assertEquals("nomEmploye", $obj->getNomEmploye());
	}

	/**
	 * Tests the setNomPoleEmploi() method.
	 *
	 * @return void
	 */
	public function testSetNomPoleEmploi() {

		$obj = new AttestationExtras();

		$obj->setNomPoleEmploi("nomPoleEmploi");
		$this->assertEquals("nomPoleEmploi", $obj->getNomPoleEmploi());
	}

	/**
	 * Tests the setNomRegimeRetraite() method.
	 *
	 * @return void
	 */
	public function testSetNomRegimeRetraite() {

		$obj = new AttestationExtras();

		$obj->setNomRegimeRetraite("nomRegimeRetraite");
		$this->assertEquals("nomRegimeRetraite", $obj->getNomRegimeRetraite());
	}

	/**
	 * Tests the setNumeroAffiliation() method.
	 *
	 * @return void
	 */
	public function testSetNumeroAffiliation() {

		$obj = new AttestationExtras();

		$obj->setNumeroAffiliation("numeroAffiliation");
		$this->assertEquals("numeroAffiliation", $obj->getNumeroAffiliation());
	}

	/**
	 * Tests the setNumeroAttestation() method.
	 *
	 * @return void
	 */
	public function testSetNumeroAttestation() {

		$obj = new AttestationExtras();

		$obj->setNumeroAttestation("numeroAttestation");
		$this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
	}

	/**
	 * Tests the setNumeroEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNumeroEmploye() {

		$obj = new AttestationExtras();

		$obj->setNumeroEmploye("numeroEmploye");
		$this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
	}

	/**
	 * Tests the setPeriodeEmploiDeb() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeEmploiDeb() {

		$obj = new AttestationExtras();

		$obj->setPeriodeEmploiDeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeEmploiDeb());
	}

	/**
	 * Tests the setPeriodeEmploiFin() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeEmploiFin() {

		$obj = new AttestationExtras();

		$obj->setPeriodeEmploiFin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeEmploiFin());
	}

	/**
	 * Tests the setPrenom() method.
	 *
	 * @return void
	 */
	public function testSetPrenom() {

		$obj = new AttestationExtras();

		$obj->setPrenom("prenom");
		$this->assertEquals("prenom", $obj->getPrenom());
	}

	/**
	 * Tests the setSIRET() method.
	 *
	 * @return void
	 */
	public function testSetSIRET() {

		$obj = new AttestationExtras();

		$obj->setSIRET("sIRET");
		$this->assertEquals("sIRET", $obj->getSIRET());
	}

	/**
	 * Tests the setSignatureDate() method.
	 *
	 * @return void
	 */
	public function testSetSignatureDate() {

		$obj = new AttestationExtras();

		$obj->setSignatureDate(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getSignatureDate());
	}

	/**
	 * Tests the setSignatureNom() method.
	 *
	 * @return void
	 */
	public function testSetSignatureNom() {

		$obj = new AttestationExtras();

		$obj->setSignatureNom("signatureNom");
		$this->assertEquals("signatureNom", $obj->getSignatureNom());
	}

	/**
	 * Tests the setSignatureQualite() method.
	 *
	 * @return void
	 */
	public function testSetSignatureQualite() {

		$obj = new AttestationExtras();

		$obj->setSignatureQualite("signatureQualite");
		$this->assertEquals("signatureQualite", $obj->getSignatureQualite());
	}

	/**
	 * Tests the setSignatureVille() method.
	 *
	 * @return void
	 */
	public function testSetSignatureVille() {

		$obj = new AttestationExtras();

		$obj->setSignatureVille("signatureVille");
		$this->assertEquals("signatureVille", $obj->getSignatureVille());
	}

}
