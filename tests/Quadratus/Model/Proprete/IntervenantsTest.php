<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\Proprete;

use DateTime;
use WBW\Library\Core\Quadratus\Model\Proprete\Intervenants;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Intervenants model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class IntervenantsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Intervenants();

		$this->assertNull($obj->getAPE());
		$this->assertNull($obj->getBTQ());
		$this->assertNull($obj->getBureauDistributeur());
		$this->assertNull($obj->getCivilite());
		$this->assertNull($obj->getCodeOfficielCommune());
		$this->assertNull($obj->getCodePostal());
		$this->assertNull($obj->getComplement());
		$this->assertNull($obj->getDateCreat());
		$this->assertNull($obj->getDateModif());
		$this->assertNull($obj->getFax());
		$this->assertNull($obj->getId());
		$this->assertNull($obj->getIdentTva());
		$this->assertNull($obj->getNom());
		$this->assertNull($obj->getNomMarital());
		$this->assertNull($obj->getNomResponsable());
		$this->assertNull($obj->getNomSuite());
		$this->assertNull($obj->getNomVille());
		$this->assertNull($obj->getNomVoie());
		$this->assertNull($obj->getNumVoie());
		$this->assertNull($obj->getPortable1());
		$this->assertNull($obj->getPortable2());
		$this->assertNull($obj->getPrenom());
		$this->assertNull($obj->getQualite());
		$this->assertNull($obj->getRc());
		$this->assertNull($obj->getSiret());
		$this->assertNull($obj->getTel1());
		$this->assertNull($obj->getTel2());
		$this->assertNull($obj->getTelVoiture());
		$this->assertNull($obj->getTelex());
	}

	/**
	 * Tests the setAPE() method.
	 *
	 * @return void
	 */
	public function testSetAPE() {

		$obj = new Intervenants();

		$obj->setAPE("aPE");
		$this->assertEquals("aPE", $obj->getAPE());
	}

	/**
	 * Tests the setBTQ() method.
	 *
	 * @return void
	 */
	public function testSetBTQ() {

		$obj = new Intervenants();

		$obj->setBTQ("bTQ");
		$this->assertEquals("bTQ", $obj->getBTQ());
	}

	/**
	 * Tests the setBureauDistributeur() method.
	 *
	 * @return void
	 */
	public function testSetBureauDistributeur() {

		$obj = new Intervenants();

		$obj->setBureauDistributeur("bureauDistributeur");
		$this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
	}

	/**
	 * Tests the setCivilite() method.
	 *
	 * @return void
	 */
	public function testSetCivilite() {

		$obj = new Intervenants();

		$obj->setCivilite("civilité");
		$this->assertEquals("civilité", $obj->getCivilite());
	}

	/**
	 * Tests the setCodeOfficielCommune() method.
	 *
	 * @return void
	 */
	public function testSetCodeOfficielCommune() {

		$obj = new Intervenants();

		$obj->setCodeOfficielCommune("codeOfficielCommune");
		$this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
	}

	/**
	 * Tests the setCodePostal() method.
	 *
	 * @return void
	 */
	public function testSetCodePostal() {

		$obj = new Intervenants();

		$obj->setCodePostal("codePostal");
		$this->assertEquals("codePostal", $obj->getCodePostal());
	}

	/**
	 * Tests the setComplement() method.
	 *
	 * @return void
	 */
	public function testSetComplement() {

		$obj = new Intervenants();

		$obj->setComplement("complément");
		$this->assertEquals("complément", $obj->getComplement());
	}

	/**
	 * Tests the setDateCreat() method.
	 *
	 * @return void
	 */
	public function testSetDateCreat() {

		$obj = new Intervenants();

		$obj->setDateCreat(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreat());
	}

	/**
	 * Tests the setDateModif() method.
	 *
	 * @return void
	 */
	public function testSetDateModif() {

		$obj = new Intervenants();

		$obj->setDateModif(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModif());
	}

	/**
	 * Tests the setFax() method.
	 *
	 * @return void
	 */
	public function testSetFax() {

		$obj = new Intervenants();

		$obj->setFax("fax");
		$this->assertEquals("fax", $obj->getFax());
	}

	/**
	 * Tests the setId() method.
	 *
	 * @return void
	 */
	public function testSetId() {

		$obj = new Intervenants();

		$obj->setId("id");
		$this->assertEquals("id", $obj->getId());
	}

	/**
	 * Tests the setIdentTva() method.
	 *
	 * @return void
	 */
	public function testSetIdentTva() {

		$obj = new Intervenants();

		$obj->setIdentTva("identTva");
		$this->assertEquals("identTva", $obj->getIdentTva());
	}

	/**
	 * Tests the setNom() method.
	 *
	 * @return void
	 */
	public function testSetNom() {

		$obj = new Intervenants();

		$obj->setNom("nom");
		$this->assertEquals("nom", $obj->getNom());
	}

	/**
	 * Tests the setNomMarital() method.
	 *
	 * @return void
	 */
	public function testSetNomMarital() {

		$obj = new Intervenants();

		$obj->setNomMarital("nomMarital");
		$this->assertEquals("nomMarital", $obj->getNomMarital());
	}

	/**
	 * Tests the setNomResponsable() method.
	 *
	 * @return void
	 */
	public function testSetNomResponsable() {

		$obj = new Intervenants();

		$obj->setNomResponsable("nomResponsable");
		$this->assertEquals("nomResponsable", $obj->getNomResponsable());
	}

	/**
	 * Tests the setNomSuite() method.
	 *
	 * @return void
	 */
	public function testSetNomSuite() {

		$obj = new Intervenants();

		$obj->setNomSuite("nomSuite");
		$this->assertEquals("nomSuite", $obj->getNomSuite());
	}

	/**
	 * Tests the setNomVille() method.
	 *
	 * @return void
	 */
	public function testSetNomVille() {

		$obj = new Intervenants();

		$obj->setNomVille("nomVille");
		$this->assertEquals("nomVille", $obj->getNomVille());
	}

	/**
	 * Tests the setNomVoie() method.
	 *
	 * @return void
	 */
	public function testSetNomVoie() {

		$obj = new Intervenants();

		$obj->setNomVoie("nomVoie");
		$this->assertEquals("nomVoie", $obj->getNomVoie());
	}

	/**
	 * Tests the setNumVoie() method.
	 *
	 * @return void
	 */
	public function testSetNumVoie() {

		$obj = new Intervenants();

		$obj->setNumVoie("numVoie");
		$this->assertEquals("numVoie", $obj->getNumVoie());
	}

	/**
	 * Tests the setPortable1() method.
	 *
	 * @return void
	 */
	public function testSetPortable1() {

		$obj = new Intervenants();

		$obj->setPortable1("portable1");
		$this->assertEquals("portable1", $obj->getPortable1());
	}

	/**
	 * Tests the setPortable2() method.
	 *
	 * @return void
	 */
	public function testSetPortable2() {

		$obj = new Intervenants();

		$obj->setPortable2("portable2");
		$this->assertEquals("portable2", $obj->getPortable2());
	}

	/**
	 * Tests the setPrenom() method.
	 *
	 * @return void
	 */
	public function testSetPrenom() {

		$obj = new Intervenants();

		$obj->setPrenom("prénom");
		$this->assertEquals("prénom", $obj->getPrenom());
	}

	/**
	 * Tests the setQualite() method.
	 *
	 * @return void
	 */
	public function testSetQualite() {

		$obj = new Intervenants();

		$obj->setQualite("qualité");
		$this->assertEquals("qualité", $obj->getQualite());
	}

	/**
	 * Tests the setRc() method.
	 *
	 * @return void
	 */
	public function testSetRc() {

		$obj = new Intervenants();

		$obj->setRc("rc");
		$this->assertEquals("rc", $obj->getRc());
	}

	/**
	 * Tests the setSiret() method.
	 *
	 * @return void
	 */
	public function testSetSiret() {

		$obj = new Intervenants();

		$obj->setSiret("siret");
		$this->assertEquals("siret", $obj->getSiret());
	}

	/**
	 * Tests the setTel1() method.
	 *
	 * @return void
	 */
	public function testSetTel1() {

		$obj = new Intervenants();

		$obj->setTel1("tel1");
		$this->assertEquals("tel1", $obj->getTel1());
	}

	/**
	 * Tests the setTel2() method.
	 *
	 * @return void
	 */
	public function testSetTel2() {

		$obj = new Intervenants();

		$obj->setTel2("tel2");
		$this->assertEquals("tel2", $obj->getTel2());
	}

	/**
	 * Tests the setTelVoiture() method.
	 *
	 * @return void
	 */
	public function testSetTelVoiture() {

		$obj = new Intervenants();

		$obj->setTelVoiture("telVoiture");
		$this->assertEquals("telVoiture", $obj->getTelVoiture());
	}

	/**
	 * Tests the setTelex() method.
	 *
	 * @return void
	 */
	public function testSetTelex() {

		$obj = new Intervenants();

		$obj->setTelex("télex");
		$this->assertEquals("télex", $obj->getTelex());
	}

}
