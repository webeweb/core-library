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
use WBW\Library\Core\Quadratus\Model\QPaie\Compteur;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Compteur model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class CompteurTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Compteur();

		$this->assertNull($obj->getNbAttesAssedic());
		$this->assertNull($obj->getNbAttesAssedicADeduire());
		$this->assertNull($obj->getNbAttesAssedicFact());
		$this->assertNull($obj->getNbAttesIjss());
		$this->assertNull($obj->getNbAttesIjssADeduire());
		$this->assertNull($obj->getNbAttesIjssAT());
		$this->assertNull($obj->getNbAttesIjssATADeduire());
		$this->assertNull($obj->getNbAttesIjssATFact());
		$this->assertNull($obj->getNbAttesIjssFact());
		$this->assertNull($obj->getNbAttestEmploi());
		$this->assertNull($obj->getNbAttestEmploiADeduire());
		$this->assertNull($obj->getNbAttestEmploiFact());
		$this->assertNull($obj->getNbBulEdites());
		$this->assertNull($obj->getNbBulEditesADeduire());
		$this->assertNull($obj->getNbBulEditesFact());
		$this->assertNull($obj->getNbBulValides());
		$this->assertNull($obj->getNbBulValidesADeduire());
		$this->assertNull($obj->getNbBulValidesFact());
		$this->assertNull($obj->getNbCertifTravail());
		$this->assertNull($obj->getNbCertifTravailADeduire());
		$this->assertNull($obj->getNbCertifTravailFact());
		$this->assertNull($obj->getNbDADSEditees());
		$this->assertNull($obj->getNbDADSEditeesADeduire());
		$this->assertNull($obj->getNbDADSEditeesFact());
		$this->assertNull($obj->getNbDSNEvtArret());
		$this->assertNull($obj->getNbDSNEvtArretADeduire());
		$this->assertNull($obj->getNbDSNEvtArretFact());
		$this->assertNull($obj->getNbDSNEvtFinContrat());
		$this->assertNull($obj->getNbDSNEvtFinContratADeduire());
		$this->assertNull($obj->getNbDSNEvtFinContratFact());
		$this->assertNull($obj->getNbDSNMensuelle());
		$this->assertNull($obj->getNbDSNMensuelleADeduire());
		$this->assertNull($obj->getNbDSNMensuelleFact());
		$this->assertNull($obj->getNbDUE());
		$this->assertNull($obj->getNbDUEADeduire());
		$this->assertNull($obj->getNbDUEFact());
		$this->assertNull($obj->getNbDisquettesVirements());
		$this->assertNull($obj->getNbDisquettesVirementsADeduire());
		$this->assertNull($obj->getNbDisquettesVirementsFact());
		$this->assertNull($obj->getNbSoldeToutCompte());
		$this->assertNull($obj->getNbSoldeToutCompteADeduire());
		$this->assertNull($obj->getNbSoldeToutCompteFact());
		$this->assertNull($obj->getNbTDSRealisees());
		$this->assertNull($obj->getNbTDSRealiseesADeduire());
		$this->assertNull($obj->getNbTDSRealiseesFact());
		$this->assertNull($obj->getPeriode());
	}

	/**
	 * Tests the setNbAttesAssedic() method.
	 *
	 * @return void
	 */
	public function testSetNbAttesAssedic() {

		$obj = new Compteur();

		$obj->setNbAttesAssedic(10);
		$this->assertEquals(10, $obj->getNbAttesAssedic());
	}

	/**
	 * Tests the setNbAttesAssedicADeduire() method.
	 *
	 * @return void
	 */
	public function testSetNbAttesAssedicADeduire() {

		$obj = new Compteur();

		$obj->setNbAttesAssedicADeduire(10);
		$this->assertEquals(10, $obj->getNbAttesAssedicADeduire());
	}

	/**
	 * Tests the setNbAttesAssedicFact() method.
	 *
	 * @return void
	 */
	public function testSetNbAttesAssedicFact() {

		$obj = new Compteur();

		$obj->setNbAttesAssedicFact(10);
		$this->assertEquals(10, $obj->getNbAttesAssedicFact());
	}

	/**
	 * Tests the setNbAttesIjss() method.
	 *
	 * @return void
	 */
	public function testSetNbAttesIjss() {

		$obj = new Compteur();

		$obj->setNbAttesIjss(10);
		$this->assertEquals(10, $obj->getNbAttesIjss());
	}

	/**
	 * Tests the setNbAttesIjssADeduire() method.
	 *
	 * @return void
	 */
	public function testSetNbAttesIjssADeduire() {

		$obj = new Compteur();

		$obj->setNbAttesIjssADeduire(10);
		$this->assertEquals(10, $obj->getNbAttesIjssADeduire());
	}

	/**
	 * Tests the setNbAttesIjssAT() method.
	 *
	 * @return void
	 */
	public function testSetNbAttesIjssAT() {

		$obj = new Compteur();

		$obj->setNbAttesIjssAT(10);
		$this->assertEquals(10, $obj->getNbAttesIjssAT());
	}

	/**
	 * Tests the setNbAttesIjssATADeduire() method.
	 *
	 * @return void
	 */
	public function testSetNbAttesIjssATADeduire() {

		$obj = new Compteur();

		$obj->setNbAttesIjssATADeduire(10);
		$this->assertEquals(10, $obj->getNbAttesIjssATADeduire());
	}

	/**
	 * Tests the setNbAttesIjssATFact() method.
	 *
	 * @return void
	 */
	public function testSetNbAttesIjssATFact() {

		$obj = new Compteur();

		$obj->setNbAttesIjssATFact(10);
		$this->assertEquals(10, $obj->getNbAttesIjssATFact());
	}

	/**
	 * Tests the setNbAttesIjssFact() method.
	 *
	 * @return void
	 */
	public function testSetNbAttesIjssFact() {

		$obj = new Compteur();

		$obj->setNbAttesIjssFact(10);
		$this->assertEquals(10, $obj->getNbAttesIjssFact());
	}

	/**
	 * Tests the setNbAttestEmploi() method.
	 *
	 * @return void
	 */
	public function testSetNbAttestEmploi() {

		$obj = new Compteur();

		$obj->setNbAttestEmploi(10);
		$this->assertEquals(10, $obj->getNbAttestEmploi());
	}

	/**
	 * Tests the setNbAttestEmploiADeduire() method.
	 *
	 * @return void
	 */
	public function testSetNbAttestEmploiADeduire() {

		$obj = new Compteur();

		$obj->setNbAttestEmploiADeduire(10);
		$this->assertEquals(10, $obj->getNbAttestEmploiADeduire());
	}

	/**
	 * Tests the setNbAttestEmploiFact() method.
	 *
	 * @return void
	 */
	public function testSetNbAttestEmploiFact() {

		$obj = new Compteur();

		$obj->setNbAttestEmploiFact(10);
		$this->assertEquals(10, $obj->getNbAttestEmploiFact());
	}

	/**
	 * Tests the setNbBulEdites() method.
	 *
	 * @return void
	 */
	public function testSetNbBulEdites() {

		$obj = new Compteur();

		$obj->setNbBulEdites(10);
		$this->assertEquals(10, $obj->getNbBulEdites());
	}

	/**
	 * Tests the setNbBulEditesADeduire() method.
	 *
	 * @return void
	 */
	public function testSetNbBulEditesADeduire() {

		$obj = new Compteur();

		$obj->setNbBulEditesADeduire(10);
		$this->assertEquals(10, $obj->getNbBulEditesADeduire());
	}

	/**
	 * Tests the setNbBulEditesFact() method.
	 *
	 * @return void
	 */
	public function testSetNbBulEditesFact() {

		$obj = new Compteur();

		$obj->setNbBulEditesFact(10);
		$this->assertEquals(10, $obj->getNbBulEditesFact());
	}

	/**
	 * Tests the setNbBulValides() method.
	 *
	 * @return void
	 */
	public function testSetNbBulValides() {

		$obj = new Compteur();

		$obj->setNbBulValides(10);
		$this->assertEquals(10, $obj->getNbBulValides());
	}

	/**
	 * Tests the setNbBulValidesADeduire() method.
	 *
	 * @return void
	 */
	public function testSetNbBulValidesADeduire() {

		$obj = new Compteur();

		$obj->setNbBulValidesADeduire(10);
		$this->assertEquals(10, $obj->getNbBulValidesADeduire());
	}

	/**
	 * Tests the setNbBulValidesFact() method.
	 *
	 * @return void
	 */
	public function testSetNbBulValidesFact() {

		$obj = new Compteur();

		$obj->setNbBulValidesFact(10);
		$this->assertEquals(10, $obj->getNbBulValidesFact());
	}

	/**
	 * Tests the setNbCertifTravail() method.
	 *
	 * @return void
	 */
	public function testSetNbCertifTravail() {

		$obj = new Compteur();

		$obj->setNbCertifTravail(10);
		$this->assertEquals(10, $obj->getNbCertifTravail());
	}

	/**
	 * Tests the setNbCertifTravailADeduire() method.
	 *
	 * @return void
	 */
	public function testSetNbCertifTravailADeduire() {

		$obj = new Compteur();

		$obj->setNbCertifTravailADeduire(10);
		$this->assertEquals(10, $obj->getNbCertifTravailADeduire());
	}

	/**
	 * Tests the setNbCertifTravailFact() method.
	 *
	 * @return void
	 */
	public function testSetNbCertifTravailFact() {

		$obj = new Compteur();

		$obj->setNbCertifTravailFact(10);
		$this->assertEquals(10, $obj->getNbCertifTravailFact());
	}

	/**
	 * Tests the setNbDADSEditees() method.
	 *
	 * @return void
	 */
	public function testSetNbDADSEditees() {

		$obj = new Compteur();

		$obj->setNbDADSEditees(10);
		$this->assertEquals(10, $obj->getNbDADSEditees());
	}

	/**
	 * Tests the setNbDADSEditeesADeduire() method.
	 *
	 * @return void
	 */
	public function testSetNbDADSEditeesADeduire() {

		$obj = new Compteur();

		$obj->setNbDADSEditeesADeduire(10);
		$this->assertEquals(10, $obj->getNbDADSEditeesADeduire());
	}

	/**
	 * Tests the setNbDADSEditeesFact() method.
	 *
	 * @return void
	 */
	public function testSetNbDADSEditeesFact() {

		$obj = new Compteur();

		$obj->setNbDADSEditeesFact(10);
		$this->assertEquals(10, $obj->getNbDADSEditeesFact());
	}

	/**
	 * Tests the setNbDSNEvtArret() method.
	 *
	 * @return void
	 */
	public function testSetNbDSNEvtArret() {

		$obj = new Compteur();

		$obj->setNbDSNEvtArret(10);
		$this->assertEquals(10, $obj->getNbDSNEvtArret());
	}

	/**
	 * Tests the setNbDSNEvtArretADeduire() method.
	 *
	 * @return void
	 */
	public function testSetNbDSNEvtArretADeduire() {

		$obj = new Compteur();

		$obj->setNbDSNEvtArretADeduire(10);
		$this->assertEquals(10, $obj->getNbDSNEvtArretADeduire());
	}

	/**
	 * Tests the setNbDSNEvtArretFact() method.
	 *
	 * @return void
	 */
	public function testSetNbDSNEvtArretFact() {

		$obj = new Compteur();

		$obj->setNbDSNEvtArretFact(10);
		$this->assertEquals(10, $obj->getNbDSNEvtArretFact());
	}

	/**
	 * Tests the setNbDSNEvtFinContrat() method.
	 *
	 * @return void
	 */
	public function testSetNbDSNEvtFinContrat() {

		$obj = new Compteur();

		$obj->setNbDSNEvtFinContrat(10);
		$this->assertEquals(10, $obj->getNbDSNEvtFinContrat());
	}

	/**
	 * Tests the setNbDSNEvtFinContratADeduire() method.
	 *
	 * @return void
	 */
	public function testSetNbDSNEvtFinContratADeduire() {

		$obj = new Compteur();

		$obj->setNbDSNEvtFinContratADeduire(10);
		$this->assertEquals(10, $obj->getNbDSNEvtFinContratADeduire());
	}

	/**
	 * Tests the setNbDSNEvtFinContratFact() method.
	 *
	 * @return void
	 */
	public function testSetNbDSNEvtFinContratFact() {

		$obj = new Compteur();

		$obj->setNbDSNEvtFinContratFact(10);
		$this->assertEquals(10, $obj->getNbDSNEvtFinContratFact());
	}

	/**
	 * Tests the setNbDSNMensuelle() method.
	 *
	 * @return void
	 */
	public function testSetNbDSNMensuelle() {

		$obj = new Compteur();

		$obj->setNbDSNMensuelle(10);
		$this->assertEquals(10, $obj->getNbDSNMensuelle());
	}

	/**
	 * Tests the setNbDSNMensuelleADeduire() method.
	 *
	 * @return void
	 */
	public function testSetNbDSNMensuelleADeduire() {

		$obj = new Compteur();

		$obj->setNbDSNMensuelleADeduire(10);
		$this->assertEquals(10, $obj->getNbDSNMensuelleADeduire());
	}

	/**
	 * Tests the setNbDSNMensuelleFact() method.
	 *
	 * @return void
	 */
	public function testSetNbDSNMensuelleFact() {

		$obj = new Compteur();

		$obj->setNbDSNMensuelleFact(10);
		$this->assertEquals(10, $obj->getNbDSNMensuelleFact());
	}

	/**
	 * Tests the setNbDUE() method.
	 *
	 * @return void
	 */
	public function testSetNbDUE() {

		$obj = new Compteur();

		$obj->setNbDUE(10);
		$this->assertEquals(10, $obj->getNbDUE());
	}

	/**
	 * Tests the setNbDUEADeduire() method.
	 *
	 * @return void
	 */
	public function testSetNbDUEADeduire() {

		$obj = new Compteur();

		$obj->setNbDUEADeduire(10);
		$this->assertEquals(10, $obj->getNbDUEADeduire());
	}

	/**
	 * Tests the setNbDUEFact() method.
	 *
	 * @return void
	 */
	public function testSetNbDUEFact() {

		$obj = new Compteur();

		$obj->setNbDUEFact(10);
		$this->assertEquals(10, $obj->getNbDUEFact());
	}

	/**
	 * Tests the setNbDisquettesVirements() method.
	 *
	 * @return void
	 */
	public function testSetNbDisquettesVirements() {

		$obj = new Compteur();

		$obj->setNbDisquettesVirements(10);
		$this->assertEquals(10, $obj->getNbDisquettesVirements());
	}

	/**
	 * Tests the setNbDisquettesVirementsADeduire() method.
	 *
	 * @return void
	 */
	public function testSetNbDisquettesVirementsADeduire() {

		$obj = new Compteur();

		$obj->setNbDisquettesVirementsADeduire(10);
		$this->assertEquals(10, $obj->getNbDisquettesVirementsADeduire());
	}

	/**
	 * Tests the setNbDisquettesVirementsFact() method.
	 *
	 * @return void
	 */
	public function testSetNbDisquettesVirementsFact() {

		$obj = new Compteur();

		$obj->setNbDisquettesVirementsFact(10);
		$this->assertEquals(10, $obj->getNbDisquettesVirementsFact());
	}

	/**
	 * Tests the setNbSoldeToutCompte() method.
	 *
	 * @return void
	 */
	public function testSetNbSoldeToutCompte() {

		$obj = new Compteur();

		$obj->setNbSoldeToutCompte(10);
		$this->assertEquals(10, $obj->getNbSoldeToutCompte());
	}

	/**
	 * Tests the setNbSoldeToutCompteADeduire() method.
	 *
	 * @return void
	 */
	public function testSetNbSoldeToutCompteADeduire() {

		$obj = new Compteur();

		$obj->setNbSoldeToutCompteADeduire(10);
		$this->assertEquals(10, $obj->getNbSoldeToutCompteADeduire());
	}

	/**
	 * Tests the setNbSoldeToutCompteFact() method.
	 *
	 * @return void
	 */
	public function testSetNbSoldeToutCompteFact() {

		$obj = new Compteur();

		$obj->setNbSoldeToutCompteFact(10);
		$this->assertEquals(10, $obj->getNbSoldeToutCompteFact());
	}

	/**
	 * Tests the setNbTDSRealisees() method.
	 *
	 * @return void
	 */
	public function testSetNbTDSRealisees() {

		$obj = new Compteur();

		$obj->setNbTDSRealisees(10);
		$this->assertEquals(10, $obj->getNbTDSRealisees());
	}

	/**
	 * Tests the setNbTDSRealiseesADeduire() method.
	 *
	 * @return void
	 */
	public function testSetNbTDSRealiseesADeduire() {

		$obj = new Compteur();

		$obj->setNbTDSRealiseesADeduire(10);
		$this->assertEquals(10, $obj->getNbTDSRealiseesADeduire());
	}

	/**
	 * Tests the setNbTDSRealiseesFact() method.
	 *
	 * @return void
	 */
	public function testSetNbTDSRealiseesFact() {

		$obj = new Compteur();

		$obj->setNbTDSRealiseesFact(10);
		$this->assertEquals(10, $obj->getNbTDSRealiseesFact());
	}

	/**
	 * Tests the setPeriode() method.
	 *
	 * @return void
	 */
	public function testSetPeriode() {

		$obj = new Compteur();

		$obj->setPeriode(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
	}

}
