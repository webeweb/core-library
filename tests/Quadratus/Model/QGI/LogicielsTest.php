<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QGI\Logiciels;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Logiciels model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class LogicielsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Logiciels();

		$this->assertNull($obj->getCategorie());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeIntervenant());
		$this->assertNull($obj->getCommentaire());
		$this->assertNull($obj->getDateAchat());
		$this->assertNull($obj->getDateFinMaint());
		$this->assertNull($obj->getIndiceAff());
		$this->assertNull($obj->getMaintenance());
		$this->assertNull($obj->getMontantMaint());
		$this->assertNull($obj->getNomLogiciel());
		$this->assertNull($obj->getNumLicence());
		$this->assertNull($obj->getRefImage());
		$this->assertNull($obj->getSousCategorie());
	}

	/**
	 * Tests the setCategorie() method.
	 *
	 * @return void
	 */
	public function testSetCategorie() {

		$obj = new Logiciels();

		$obj->setCategorie("categorie");
		$this->assertEquals("categorie", $obj->getCategorie());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new Logiciels();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeIntervenant() method.
	 *
	 * @return void
	 */
	public function testSetCodeIntervenant() {

		$obj = new Logiciels();

		$obj->setCodeIntervenant("codeIntervenant");
		$this->assertEquals("codeIntervenant", $obj->getCodeIntervenant());
	}

	/**
	 * Tests the setCommentaire() method.
	 *
	 * @return void
	 */
	public function testSetCommentaire() {

		$obj = new Logiciels();

		$obj->setCommentaire("commentaire");
		$this->assertEquals("commentaire", $obj->getCommentaire());
	}

	/**
	 * Tests the setDateAchat() method.
	 *
	 * @return void
	 */
	public function testSetDateAchat() {

		$obj = new Logiciels();

		$obj->setDateAchat(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAchat());
	}

	/**
	 * Tests the setDateFinMaint() method.
	 *
	 * @return void
	 */
	public function testSetDateFinMaint() {

		$obj = new Logiciels();

		$obj->setDateFinMaint(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinMaint());
	}

	/**
	 * Tests the setIndiceAff() method.
	 *
	 * @return void
	 */
	public function testSetIndiceAff() {

		$obj = new Logiciels();

		$obj->setIndiceAff(10);
		$this->assertEquals(10, $obj->getIndiceAff());
	}

	/**
	 * Tests the setMaintenance() method.
	 *
	 * @return void
	 */
	public function testSetMaintenance() {

		$obj = new Logiciels();

		$obj->setMaintenance(true);
		$this->assertEquals(true, $obj->getMaintenance());
	}

	/**
	 * Tests the setMontantMaint() method.
	 *
	 * @return void
	 */
	public function testSetMontantMaint() {

		$obj = new Logiciels();

		$obj->setMontantMaint(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantMaint());
	}

	/**
	 * Tests the setNomLogiciel() method.
	 *
	 * @return void
	 */
	public function testSetNomLogiciel() {

		$obj = new Logiciels();

		$obj->setNomLogiciel("nomLogiciel");
		$this->assertEquals("nomLogiciel", $obj->getNomLogiciel());
	}

	/**
	 * Tests the setNumLicence() method.
	 *
	 * @return void
	 */
	public function testSetNumLicence() {

		$obj = new Logiciels();

		$obj->setNumLicence("numLicence");
		$this->assertEquals("numLicence", $obj->getNumLicence());
	}

	/**
	 * Tests the setRefImage() method.
	 *
	 * @return void
	 */
	public function testSetRefImage() {

		$obj = new Logiciels();

		$obj->setRefImage("refImage");
		$this->assertEquals("refImage", $obj->getRefImage());
	}

	/**
	 * Tests the setSousCategorie() method.
	 *
	 * @return void
	 */
	public function testSetSousCategorie() {

		$obj = new Logiciels();

		$obj->setSousCategorie("sousCategorie");
		$this->assertEquals("sousCategorie", $obj->getSousCategorie());
	}

}
