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
use WBW\Library\Core\Quadratus\Model\QPaie\HSupTEPABul;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * H sup t e p a bul model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class HSupTEPABulTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new HSupTEPABul();

		$this->assertNull($obj->getIndicePeriode());
		$this->assertNull($obj->getMtBrutExo());
		$this->assertNull($obj->getMtBrutExoAbat());
		$this->assertNull($obj->getNbJHExo());
		$this->assertNull($obj->getNumLigne());
		$this->assertNull($obj->getNumeroEmploye());
		$this->assertNull($obj->getPeriode());
		$this->assertNull($obj->getPourcentMajo());
		$this->assertNull($obj->getTypeExo());
	}

	/**
	 * Tests the setIndicePeriode() method.
	 *
	 * @return void
	 */
	public function testSetIndicePeriode() {

		$obj = new HSupTEPABul();

		$obj->setIndicePeriode(10);
		$this->assertEquals(10, $obj->getIndicePeriode());
	}

	/**
	 * Tests the setMtBrutExo() method.
	 *
	 * @return void
	 */
	public function testSetMtBrutExo() {

		$obj = new HSupTEPABul();

		$obj->setMtBrutExo(10.092018);
		$this->assertEquals(10.092018, $obj->getMtBrutExo());
	}

	/**
	 * Tests the setMtBrutExoAbat() method.
	 *
	 * @return void
	 */
	public function testSetMtBrutExoAbat() {

		$obj = new HSupTEPABul();

		$obj->setMtBrutExoAbat(10.092018);
		$this->assertEquals(10.092018, $obj->getMtBrutExoAbat());
	}

	/**
	 * Tests the setNbJHExo() method.
	 *
	 * @return void
	 */
	public function testSetNbJHExo() {

		$obj = new HSupTEPABul();

		$obj->setNbJHExo(10.092018);
		$this->assertEquals(10.092018, $obj->getNbJHExo());
	}

	/**
	 * Tests the setNumLigne() method.
	 *
	 * @return void
	 */
	public function testSetNumLigne() {

		$obj = new HSupTEPABul();

		$obj->setNumLigne(10);
		$this->assertEquals(10, $obj->getNumLigne());
	}

	/**
	 * Tests the setNumeroEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNumeroEmploye() {

		$obj = new HSupTEPABul();

		$obj->setNumeroEmploye("numeroEmploye");
		$this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
	}

	/**
	 * Tests the setPeriode() method.
	 *
	 * @return void
	 */
	public function testSetPeriode() {

		$obj = new HSupTEPABul();

		$obj->setPeriode(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
	}

	/**
	 * Tests the setPourcentMajo() method.
	 *
	 * @return void
	 */
	public function testSetPourcentMajo() {

		$obj = new HSupTEPABul();

		$obj->setPourcentMajo(10.092018);
		$this->assertEquals(10.092018, $obj->getPourcentMajo());
	}

	/**
	 * Tests the setTypeExo() method.
	 *
	 * @return void
	 */
	public function testSetTypeExo() {

		$obj = new HSupTEPABul();

		$obj->setTypeExo("typeExo");
		$this->assertEquals("typeExo", $obj->getTypeExo());
	}

}
