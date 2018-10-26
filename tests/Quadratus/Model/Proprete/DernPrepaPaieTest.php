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
use WBW\Library\Core\Quadratus\Model\Proprete\DernPrepaPaie;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Dern prepa paie model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 * @final
 */
final class DernPrepaPaieTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new DernPrepaPaie();

		$this->assertNull($obj->getAlerteRouge());
		$this->assertNull($obj->getCodeEmploye());
		$this->assertNull($obj->getDesignation());
		$this->assertNull($obj->getDtPrepa());
		$this->assertNull($obj->getPeriode());
	}

	/**
	 * Tests the setAlerteRouge() method.
	 *
	 * @return void
	 */
	public function testSetAlerteRouge() {

		$obj = new DernPrepaPaie();

		$obj->setAlerteRouge(true);
		$this->assertEquals(true, $obj->getAlerteRouge());
	}

	/**
	 * Tests the setCodeEmploye() method.
	 *
	 * @return void
	 */
	public function testSetCodeEmploye() {

		$obj = new DernPrepaPaie();

		$obj->setCodeEmploye("codeEmploye");
		$this->assertEquals("codeEmploye", $obj->getCodeEmploye());
	}

	/**
	 * Tests the setDesignation() method.
	 *
	 * @return void
	 */
	public function testSetDesignation() {

		$obj = new DernPrepaPaie();

		$obj->setDesignation("designation");
		$this->assertEquals("designation", $obj->getDesignation());
	}

	/**
	 * Tests the setDtPrepa() method.
	 *
	 * @return void
	 */
	public function testSetDtPrepa() {

		$obj = new DernPrepaPaie();

		$obj->setDtPrepa(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDtPrepa());
	}

	/**
	 * Tests the setPeriode() method.
	 *
	 * @return void
	 */
	public function testSetPeriode() {

		$obj = new DernPrepaPaie();

		$obj->setPeriode(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
	}

}
