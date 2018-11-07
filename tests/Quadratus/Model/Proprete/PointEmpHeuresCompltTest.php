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
use WBW\Library\Core\Quadratus\Model\Proprete\PointEmpHeuresComplt;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Point emp heures complt model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class PointEmpHeuresCompltTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new PointEmpHeuresComplt();

		$this->assertNull($obj->getAFacturer());
		$this->assertNull($obj->getCodeAffaire());
		$this->assertNull($obj->getCodeChantier());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeEmploye());
		$this->assertNull($obj->getCodeTache());
		$this->assertNull($obj->getDate());
		$this->assertNull($obj->getHeureCompl());
		$this->assertNull($obj->getHeureComplNuit());
		$this->assertNull($obj->getNumBT());
		$this->assertNull($obj->getTypeHeure());
	}

	/**
	 * Tests the setAFacturer() method.
	 *
	 * @return void
	 */
	public function testSetAFacturer() {

		$obj = new PointEmpHeuresComplt();

		$obj->setAFacturer(true);
		$this->assertEquals(true, $obj->getAFacturer());
	}

	/**
	 * Tests the setCodeAffaire() method.
	 *
	 * @return void
	 */
	public function testSetCodeAffaire() {

		$obj = new PointEmpHeuresComplt();

		$obj->setCodeAffaire("codeAffaire");
		$this->assertEquals("codeAffaire", $obj->getCodeAffaire());
	}

	/**
	 * Tests the setCodeChantier() method.
	 *
	 * @return void
	 */
	public function testSetCodeChantier() {

		$obj = new PointEmpHeuresComplt();

		$obj->setCodeChantier("codeChantier");
		$this->assertEquals("codeChantier", $obj->getCodeChantier());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new PointEmpHeuresComplt();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeEmploye() method.
	 *
	 * @return void
	 */
	public function testSetCodeEmploye() {

		$obj = new PointEmpHeuresComplt();

		$obj->setCodeEmploye("codeEmploye");
		$this->assertEquals("codeEmploye", $obj->getCodeEmploye());
	}

	/**
	 * Tests the setCodeTache() method.
	 *
	 * @return void
	 */
	public function testSetCodeTache() {

		$obj = new PointEmpHeuresComplt();

		$obj->setCodeTache("codeTache");
		$this->assertEquals("codeTache", $obj->getCodeTache());
	}

	/**
	 * Tests the setDate() method.
	 *
	 * @return void
	 */
	public function testSetDate() {

		$obj = new PointEmpHeuresComplt();

		$obj->setDate(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate());
	}

	/**
	 * Tests the setHeureCompl() method.
	 *
	 * @return void
	 */
	public function testSetHeureCompl() {

		$obj = new PointEmpHeuresComplt();

		$obj->setHeureCompl(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getHeureCompl());
	}

	/**
	 * Tests the setHeureComplNuit() method.
	 *
	 * @return void
	 */
	public function testSetHeureComplNuit() {

		$obj = new PointEmpHeuresComplt();

		$obj->setHeureComplNuit(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getHeureComplNuit());
	}

	/**
	 * Tests the setNumBT() method.
	 *
	 * @return void
	 */
	public function testSetNumBT() {

		$obj = new PointEmpHeuresComplt();

		$obj->setNumBT(10);
		$this->assertEquals(10, $obj->getNumBT());
	}

	/**
	 * Tests the setTypeHeure() method.
	 *
	 * @return void
	 */
	public function testSetTypeHeure() {

		$obj = new PointEmpHeuresComplt();

		$obj->setTypeHeure("typeHeure");
		$this->assertEquals("typeHeure", $obj->getTypeHeure());
	}

}
