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
use WBW\Library\Core\Quadratus\Model\QGI\ObligationsPointees;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Obligations pointees model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class ObligationsPointeesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ObligationsPointees();

		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeObligation());
		$this->assertNull($obj->getDateEffet());
		$this->assertNull($obj->getLe());
		$this->assertNull($obj->getPar());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new ObligationsPointees();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeObligation() method.
	 *
	 * @return void
	 */
	public function testSetCodeObligation() {

		$obj = new ObligationsPointees();

		$obj->setCodeObligation("codeObligation");
		$this->assertEquals("codeObligation", $obj->getCodeObligation());
	}

	/**
	 * Tests the setDateEffet() method.
	 *
	 * @return void
	 */
	public function testSetDateEffet() {

		$obj = new ObligationsPointees();

		$obj->setDateEffet(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEffet());
	}

	/**
	 * Tests the setLe() method.
	 *
	 * @return void
	 */
	public function testSetLe() {

		$obj = new ObligationsPointees();

		$obj->setLe(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getLe());
	}

	/**
	 * Tests the setPar() method.
	 *
	 * @return void
	 */
	public function testSetPar() {

		$obj = new ObligationsPointees();

		$obj->setPar("par");
		$this->assertEquals("par", $obj->getPar());
	}

}
