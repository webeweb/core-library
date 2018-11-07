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

use WBW\Library\Core\Quadratus\Model\QPaie\tbl_PaieTempLibelles;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * tbl_ paie temp libelles model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class tbl_PaieTempLibellesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new tbl_PaieTempLibelles();

		$this->assertNull($obj->getCode());
		$this->assertNull($obj->getCodeCalcul());
		$this->assertNull($obj->getIntitule());
		$this->assertNull($obj->getNumeroEmploye());
	}

	/**
	 * Tests the setCode() method.
	 *
	 * @return void
	 */
	public function testSetCode() {

		$obj = new tbl_PaieTempLibelles();

		$obj->setCode("code");
		$this->assertEquals("code", $obj->getCode());
	}

	/**
	 * Tests the setCodeCalcul() method.
	 *
	 * @return void
	 */
	public function testSetCodeCalcul() {

		$obj = new tbl_PaieTempLibelles();

		$obj->setCodeCalcul("codeCalcul");
		$this->assertEquals("codeCalcul", $obj->getCodeCalcul());
	}

	/**
	 * Tests the setIntitule() method.
	 *
	 * @return void
	 */
	public function testSetIntitule() {

		$obj = new tbl_PaieTempLibelles();

		$obj->setIntitule("intitule");
		$this->assertEquals("intitule", $obj->getIntitule());
	}

	/**
	 * Tests the setNumeroEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNumeroEmploye() {

		$obj = new tbl_PaieTempLibelles();

		$obj->setNumeroEmploye("numeroEmploye");
		$this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
	}

}
