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
use WBW\Library\Core\Quadratus\Model\Proprete\PointEmpHeuresAbs;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Point emp heures abs model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 * @final
 */
final class PointEmpHeuresAbsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new PointEmpHeuresAbs();

		$this->assertNull($obj->getCodeAbsence());
		$this->assertNull($obj->getCodeAffaire());
		$this->assertNull($obj->getCodeChantier());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeEmploye());
		$this->assertNull($obj->getCodeTache());
		$this->assertNull($obj->getDate());
		$this->assertNull($obj->getHeureAbs());
		$this->assertNull($obj->getHeureAbsNuit());
		$this->assertNull($obj->getNumBT());
		$this->assertNull($obj->getTypeHeure());
	}

	/**
	 * Tests the setCodeAbsence() method.
	 *
	 * @return void
	 */
	public function testSetCodeAbsence() {

		$obj = new PointEmpHeuresAbs();

		$obj->setCodeAbsence("codeAbsence");
		$this->assertEquals("codeAbsence", $obj->getCodeAbsence());
	}

	/**
	 * Tests the setCodeAffaire() method.
	 *
	 * @return void
	 */
	public function testSetCodeAffaire() {

		$obj = new PointEmpHeuresAbs();

		$obj->setCodeAffaire("codeAffaire");
		$this->assertEquals("codeAffaire", $obj->getCodeAffaire());
	}

	/**
	 * Tests the setCodeChantier() method.
	 *
	 * @return void
	 */
	public function testSetCodeChantier() {

		$obj = new PointEmpHeuresAbs();

		$obj->setCodeChantier("codeChantier");
		$this->assertEquals("codeChantier", $obj->getCodeChantier());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new PointEmpHeuresAbs();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeEmploye() method.
	 *
	 * @return void
	 */
	public function testSetCodeEmploye() {

		$obj = new PointEmpHeuresAbs();

		$obj->setCodeEmploye("codeEmploye");
		$this->assertEquals("codeEmploye", $obj->getCodeEmploye());
	}

	/**
	 * Tests the setCodeTache() method.
	 *
	 * @return void
	 */
	public function testSetCodeTache() {

		$obj = new PointEmpHeuresAbs();

		$obj->setCodeTache("codeTache");
		$this->assertEquals("codeTache", $obj->getCodeTache());
	}

	/**
	 * Tests the setDate() method.
	 *
	 * @return void
	 */
	public function testSetDate() {

		$obj = new PointEmpHeuresAbs();

		$obj->setDate(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate());
	}

	/**
	 * Tests the setHeureAbs() method.
	 *
	 * @return void
	 */
	public function testSetHeureAbs() {

		$obj = new PointEmpHeuresAbs();

		$obj->setHeureAbs(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getHeureAbs());
	}

	/**
	 * Tests the setHeureAbsNuit() method.
	 *
	 * @return void
	 */
	public function testSetHeureAbsNuit() {

		$obj = new PointEmpHeuresAbs();

		$obj->setHeureAbsNuit(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getHeureAbsNuit());
	}

	/**
	 * Tests the setNumBT() method.
	 *
	 * @return void
	 */
	public function testSetNumBT() {

		$obj = new PointEmpHeuresAbs();

		$obj->setNumBT(10);
		$this->assertEquals(10, $obj->getNumBT());
	}

	/**
	 * Tests the setTypeHeure() method.
	 *
	 * @return void
	 */
	public function testSetTypeHeure() {

		$obj = new PointEmpHeuresAbs();

		$obj->setTypeHeure("typeHeure");
		$this->assertEquals("typeHeure", $obj->getTypeHeure());
	}

}
