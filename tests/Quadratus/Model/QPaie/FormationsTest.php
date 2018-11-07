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
use WBW\Library\Core\Quadratus\Model\QPaie\Formations;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Formations model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class FormationsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Formations();

		$this->assertNull($obj->getActive());
		$this->assertNull($obj->getDescription());
		$this->assertNull($obj->getID());
		$this->assertNull($obj->getLienDocument());
		$this->assertNull($obj->getLieu());
		$this->assertNull($obj->getNbHFormation());
		$this->assertNull($obj->getNbhDIFPrisHorsW());
		$this->assertNull($obj->getNbhDiFPrisW());
		$this->assertNull($obj->getNumeroEmploye());
		$this->assertNull($obj->getOrganisme());
		$this->assertNull($obj->getPeriodeDeb());
		$this->assertNull($obj->getPeriodeFin());
		$this->assertNull($obj->getTypeFormation());
	}

	/**
	 * Tests the setActive() method.
	 *
	 * @return void
	 */
	public function testSetActive() {

		$obj = new Formations();

		$obj->setActive(true);
		$this->assertEquals(true, $obj->getActive());
	}

	/**
	 * Tests the setDescription() method.
	 *
	 * @return void
	 */
	public function testSetDescription() {

		$obj = new Formations();

		$obj->setDescription("description");
		$this->assertEquals("description", $obj->getDescription());
	}

	/**
	 * Tests the setID() method.
	 *
	 * @return void
	 */
	public function testSetID() {

		$obj = new Formations();

		$obj->setID("iD");
		$this->assertEquals("iD", $obj->getID());
	}

	/**
	 * Tests the setLienDocument() method.
	 *
	 * @return void
	 */
	public function testSetLienDocument() {

		$obj = new Formations();

		$obj->setLienDocument("lienDocument");
		$this->assertEquals("lienDocument", $obj->getLienDocument());
	}

	/**
	 * Tests the setLieu() method.
	 *
	 * @return void
	 */
	public function testSetLieu() {

		$obj = new Formations();

		$obj->setLieu("lieu");
		$this->assertEquals("lieu", $obj->getLieu());
	}

	/**
	 * Tests the setNbHFormation() method.
	 *
	 * @return void
	 */
	public function testSetNbHFormation() {

		$obj = new Formations();

		$obj->setNbHFormation(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHFormation());
	}

	/**
	 * Tests the setNbhDIFPrisHorsW() method.
	 *
	 * @return void
	 */
	public function testSetNbhDIFPrisHorsW() {

		$obj = new Formations();

		$obj->setNbhDIFPrisHorsW(10.092018);
		$this->assertEquals(10.092018, $obj->getNbhDIFPrisHorsW());
	}

	/**
	 * Tests the setNbhDiFPrisW() method.
	 *
	 * @return void
	 */
	public function testSetNbhDiFPrisW() {

		$obj = new Formations();

		$obj->setNbhDiFPrisW(10.092018);
		$this->assertEquals(10.092018, $obj->getNbhDiFPrisW());
	}

	/**
	 * Tests the setNumeroEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNumeroEmploye() {

		$obj = new Formations();

		$obj->setNumeroEmploye("numeroEmploye");
		$this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
	}

	/**
	 * Tests the setOrganisme() method.
	 *
	 * @return void
	 */
	public function testSetOrganisme() {

		$obj = new Formations();

		$obj->setOrganisme("organisme");
		$this->assertEquals("organisme", $obj->getOrganisme());
	}

	/**
	 * Tests the setPeriodeDeb() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeDeb() {

		$obj = new Formations();

		$obj->setPeriodeDeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDeb());
	}

	/**
	 * Tests the setPeriodeFin() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeFin() {

		$obj = new Formations();

		$obj->setPeriodeFin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeFin());
	}

	/**
	 * Tests the setTypeFormation() method.
	 *
	 * @return void
	 */
	public function testSetTypeFormation() {

		$obj = new Formations();

		$obj->setTypeFormation(10);
		$this->assertEquals(10, $obj->getTypeFormation());
	}

}
