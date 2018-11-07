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

use WBW\Library\Core\Quadratus\Model\Proprete\Prospects;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Prospects model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class ProspectsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Prospects();

		$this->assertNull($obj->getBTQ());
		$this->assertNull($obj->getBureauDistributeur());
		$this->assertNull($obj->getCodePostal());
		$this->assertNull($obj->getCodeProspect());
		$this->assertNull($obj->getComplement());
		$this->assertNull($obj->getNom());
		$this->assertNull($obj->getNomSuite());
		$this->assertNull($obj->getNomSuite2());
		$this->assertNull($obj->getNomSuite3());
		$this->assertNull($obj->getNomVoie());
		$this->assertNull($obj->getNumVoie());
	}

	/**
	 * Tests the setBTQ() method.
	 *
	 * @return void
	 */
	public function testSetBTQ() {

		$obj = new Prospects();

		$obj->setBTQ("bTQ");
		$this->assertEquals("bTQ", $obj->getBTQ());
	}

	/**
	 * Tests the setBureauDistributeur() method.
	 *
	 * @return void
	 */
	public function testSetBureauDistributeur() {

		$obj = new Prospects();

		$obj->setBureauDistributeur("bureauDistributeur");
		$this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
	}

	/**
	 * Tests the setCodePostal() method.
	 *
	 * @return void
	 */
	public function testSetCodePostal() {

		$obj = new Prospects();

		$obj->setCodePostal("codePostal");
		$this->assertEquals("codePostal", $obj->getCodePostal());
	}

	/**
	 * Tests the setCodeProspect() method.
	 *
	 * @return void
	 */
	public function testSetCodeProspect() {

		$obj = new Prospects();

		$obj->setCodeProspect("codeProspect");
		$this->assertEquals("codeProspect", $obj->getCodeProspect());
	}

	/**
	 * Tests the setComplement() method.
	 *
	 * @return void
	 */
	public function testSetComplement() {

		$obj = new Prospects();

		$obj->setComplement("complement");
		$this->assertEquals("complement", $obj->getComplement());
	}

	/**
	 * Tests the setNom() method.
	 *
	 * @return void
	 */
	public function testSetNom() {

		$obj = new Prospects();

		$obj->setNom("nom");
		$this->assertEquals("nom", $obj->getNom());
	}

	/**
	 * Tests the setNomSuite() method.
	 *
	 * @return void
	 */
	public function testSetNomSuite() {

		$obj = new Prospects();

		$obj->setNomSuite("nomSuite");
		$this->assertEquals("nomSuite", $obj->getNomSuite());
	}

	/**
	 * Tests the setNomSuite2() method.
	 *
	 * @return void
	 */
	public function testSetNomSuite2() {

		$obj = new Prospects();

		$obj->setNomSuite2("nomSuite2");
		$this->assertEquals("nomSuite2", $obj->getNomSuite2());
	}

	/**
	 * Tests the setNomSuite3() method.
	 *
	 * @return void
	 */
	public function testSetNomSuite3() {

		$obj = new Prospects();

		$obj->setNomSuite3("nomSuite3");
		$this->assertEquals("nomSuite3", $obj->getNomSuite3());
	}

	/**
	 * Tests the setNomVoie() method.
	 *
	 * @return void
	 */
	public function testSetNomVoie() {

		$obj = new Prospects();

		$obj->setNomVoie("nomVoie");
		$this->assertEquals("nomVoie", $obj->getNomVoie());
	}

	/**
	 * Tests the setNumVoie() method.
	 *
	 * @return void
	 */
	public function testSetNumVoie() {

		$obj = new Prospects();

		$obj->setNumVoie("numVoie");
		$this->assertEquals("numVoie", $obj->getNumVoie());
	}

}
