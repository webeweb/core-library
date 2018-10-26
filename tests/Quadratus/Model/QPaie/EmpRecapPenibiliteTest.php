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
use WBW\Library\Core\Quadratus\Model\QPaie\EmpRecapPenibilite;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Emp recap penibilite model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class EmpRecapPenibiliteTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new EmpRecapPenibilite();

		$this->assertNull($obj->getCodeCollab());
		$this->assertNull($obj->getDateCreat());
		$this->assertNull($obj->getDateDebut());
		$this->assertNull($obj->getDateFin());
		$this->assertNull($obj->getDateModif());
		$this->assertNull($obj->getEtat());
		$this->assertNull($obj->getIDRecap());
		$this->assertNull($obj->getIndiceBul());
		$this->assertNull($obj->getNumeroEmploye());
		$this->assertNull($obj->getNumeroOrdre());
		$this->assertNull($obj->getReguleTraitee());
	}

	/**
	 * Tests the setCodeCollab() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollab() {

		$obj = new EmpRecapPenibilite();

		$obj->setCodeCollab("codeCollab");
		$this->assertEquals("codeCollab", $obj->getCodeCollab());
	}

	/**
	 * Tests the setDateCreat() method.
	 *
	 * @return void
	 */
	public function testSetDateCreat() {

		$obj = new EmpRecapPenibilite();

		$obj->setDateCreat(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreat());
	}

	/**
	 * Tests the setDateDebut() method.
	 *
	 * @return void
	 */
	public function testSetDateDebut() {

		$obj = new EmpRecapPenibilite();

		$obj->setDateDebut(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebut());
	}

	/**
	 * Tests the setDateFin() method.
	 *
	 * @return void
	 */
	public function testSetDateFin() {

		$obj = new EmpRecapPenibilite();

		$obj->setDateFin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFin());
	}

	/**
	 * Tests the setDateModif() method.
	 *
	 * @return void
	 */
	public function testSetDateModif() {

		$obj = new EmpRecapPenibilite();

		$obj->setDateModif(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModif());
	}

	/**
	 * Tests the setEtat() method.
	 *
	 * @return void
	 */
	public function testSetEtat() {

		$obj = new EmpRecapPenibilite();

		$obj->setEtat("etat");
		$this->assertEquals("etat", $obj->getEtat());
	}

	/**
	 * Tests the setIDRecap() method.
	 *
	 * @return void
	 */
	public function testSetIDRecap() {

		$obj = new EmpRecapPenibilite();

		$obj->setIDRecap(10);
		$this->assertEquals(10, $obj->getIDRecap());
	}

	/**
	 * Tests the setIndiceBul() method.
	 *
	 * @return void
	 */
	public function testSetIndiceBul() {

		$obj = new EmpRecapPenibilite();

		$obj->setIndiceBul("indiceBul");
		$this->assertEquals("indiceBul", $obj->getIndiceBul());
	}

	/**
	 * Tests the setNumeroEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNumeroEmploye() {

		$obj = new EmpRecapPenibilite();

		$obj->setNumeroEmploye("numeroEmploye");
		$this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
	}

	/**
	 * Tests the setNumeroOrdre() method.
	 *
	 * @return void
	 */
	public function testSetNumeroOrdre() {

		$obj = new EmpRecapPenibilite();

		$obj->setNumeroOrdre(10);
		$this->assertEquals(10, $obj->getNumeroOrdre());
	}

	/**
	 * Tests the setReguleTraitee() method.
	 *
	 * @return void
	 */
	public function testSetReguleTraitee() {

		$obj = new EmpRecapPenibilite();

		$obj->setReguleTraitee(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getReguleTraitee());
	}

}
