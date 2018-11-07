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
use WBW\Library\Core\Quadratus\Model\QGI\FactFournEntete;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Fact fourn entete model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class FactFournEnteteTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new FactFournEntete();

		$this->assertNull($obj->getBoniMali());
		$this->assertNull($obj->getCodeJournal());
		$this->assertNull($obj->getDate());
		$this->assertNull($obj->getFolio());
		$this->assertNull($obj->getLibAuto());
		$this->assertNull($obj->getLibelle());
		$this->assertNull($obj->getMonnaie());
		$this->assertNull($obj->getMontantTTCcredit());
		$this->assertNull($obj->getMontantTTCdebit());
		$this->assertNull($obj->getNumDossCpta());
		$this->assertNull($obj->getNumFacture());
		$this->assertNull($obj->getNumFournisseur());
		$this->assertNull($obj->getNumLot());
		$this->assertNull($obj->getNumUniq());
		$this->assertNull($obj->getRefImage());
	}

	/**
	 * Tests the setBoniMali() method.
	 *
	 * @return void
	 */
	public function testSetBoniMali() {

		$obj = new FactFournEntete();

		$obj->setBoniMali(true);
		$this->assertEquals(true, $obj->getBoniMali());
	}

	/**
	 * Tests the setCodeJournal() method.
	 *
	 * @return void
	 */
	public function testSetCodeJournal() {

		$obj = new FactFournEntete();

		$obj->setCodeJournal("codeJournal");
		$this->assertEquals("codeJournal", $obj->getCodeJournal());
	}

	/**
	 * Tests the setDate() method.
	 *
	 * @return void
	 */
	public function testSetDate() {

		$obj = new FactFournEntete();

		$obj->setDate(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate());
	}

	/**
	 * Tests the setFolio() method.
	 *
	 * @return void
	 */
	public function testSetFolio() {

		$obj = new FactFournEntete();

		$obj->setFolio(10);
		$this->assertEquals(10, $obj->getFolio());
	}

	/**
	 * Tests the setLibAuto() method.
	 *
	 * @return void
	 */
	public function testSetLibAuto() {

		$obj = new FactFournEntete();

		$obj->setLibAuto("libAuto");
		$this->assertEquals("libAuto", $obj->getLibAuto());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new FactFournEntete();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

	/**
	 * Tests the setMonnaie() method.
	 *
	 * @return void
	 */
	public function testSetMonnaie() {

		$obj = new FactFournEntete();

		$obj->setMonnaie("monnaie");
		$this->assertEquals("monnaie", $obj->getMonnaie());
	}

	/**
	 * Tests the setMontantTTCcredit() method.
	 *
	 * @return void
	 */
	public function testSetMontantTTCcredit() {

		$obj = new FactFournEntete();

		$obj->setMontantTTCcredit("montantTTCcredit");
		$this->assertEquals("montantTTCcredit", $obj->getMontantTTCcredit());
	}

	/**
	 * Tests the setMontantTTCdebit() method.
	 *
	 * @return void
	 */
	public function testSetMontantTTCdebit() {

		$obj = new FactFournEntete();

		$obj->setMontantTTCdebit("montantTTCdebit");
		$this->assertEquals("montantTTCdebit", $obj->getMontantTTCdebit());
	}

	/**
	 * Tests the setNumDossCpta() method.
	 *
	 * @return void
	 */
	public function testSetNumDossCpta() {

		$obj = new FactFournEntete();

		$obj->setNumDossCpta("numDossCpta");
		$this->assertEquals("numDossCpta", $obj->getNumDossCpta());
	}

	/**
	 * Tests the setNumFacture() method.
	 *
	 * @return void
	 */
	public function testSetNumFacture() {

		$obj = new FactFournEntete();

		$obj->setNumFacture("numFacture");
		$this->assertEquals("numFacture", $obj->getNumFacture());
	}

	/**
	 * Tests the setNumFournisseur() method.
	 *
	 * @return void
	 */
	public function testSetNumFournisseur() {

		$obj = new FactFournEntete();

		$obj->setNumFournisseur("numFournisseur");
		$this->assertEquals("numFournisseur", $obj->getNumFournisseur());
	}

	/**
	 * Tests the setNumLot() method.
	 *
	 * @return void
	 */
	public function testSetNumLot() {

		$obj = new FactFournEntete();

		$obj->setNumLot(10);
		$this->assertEquals(10, $obj->getNumLot());
	}

	/**
	 * Tests the setNumUniq() method.
	 *
	 * @return void
	 */
	public function testSetNumUniq() {

		$obj = new FactFournEntete();

		$obj->setNumUniq("numUniq");
		$this->assertEquals("numUniq", $obj->getNumUniq());
	}

	/**
	 * Tests the setRefImage() method.
	 *
	 * @return void
	 */
	public function testSetRefImage() {

		$obj = new FactFournEntete();

		$obj->setRefImage("refImage");
		$this->assertEquals("refImage", $obj->getRefImage());
	}

}
