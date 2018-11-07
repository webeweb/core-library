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
use WBW\Library\Core\Quadratus\Model\Proprete\HistoPaieType2;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Histo paie type2 model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class HistoPaieType2Test extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new HistoPaieType2();

		$this->assertNull($obj->getCodeEmploye());
		$this->assertNull($obj->getCodePrime());
		$this->assertNull($obj->getNbHeures());
		$this->assertNull($obj->getPeriode());
		$this->assertNull($obj->getTauxMajoration());
		$this->assertNull($obj->getTypeDNJF());
	}

	/**
	 * Tests the setCodeEmploye() method.
	 *
	 * @return void
	 */
	public function testSetCodeEmploye() {

		$obj = new HistoPaieType2();

		$obj->setCodeEmploye("codeEmploye");
		$this->assertEquals("codeEmploye", $obj->getCodeEmploye());
	}

	/**
	 * Tests the setCodePrime() method.
	 *
	 * @return void
	 */
	public function testSetCodePrime() {

		$obj = new HistoPaieType2();

		$obj->setCodePrime("codePrime");
		$this->assertEquals("codePrime", $obj->getCodePrime());
	}

	/**
	 * Tests the setNbHeures() method.
	 *
	 * @return void
	 */
	public function testSetNbHeures() {

		$obj = new HistoPaieType2();

		$obj->setNbHeures(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHeures());
	}

	/**
	 * Tests the setPeriode() method.
	 *
	 * @return void
	 */
	public function testSetPeriode() {

		$obj = new HistoPaieType2();

		$obj->setPeriode(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
	}

	/**
	 * Tests the setTauxMajoration() method.
	 *
	 * @return void
	 */
	public function testSetTauxMajoration() {

		$obj = new HistoPaieType2();

		$obj->setTauxMajoration(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxMajoration());
	}

	/**
	 * Tests the setTypeDNJF() method.
	 *
	 * @return void
	 */
	public function testSetTypeDNJF() {

		$obj = new HistoPaieType2();

		$obj->setTypeDNJF("typeDNJF");
		$this->assertEquals("typeDNJF", $obj->getTypeDNJF());
	}

}
