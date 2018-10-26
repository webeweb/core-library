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

use WBW\Library\Core\Quadratus\Model\Proprete\TachesSemaine;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Taches semaine model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 * @final
 */
final class TachesSemaineTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new TachesSemaine();

		$this->assertNull($obj->getAutoIncr());
		$this->assertNull($obj->getCodeSemaineTache());
		$this->assertNull($obj->getDiscrTache());
	}

	/**
	 * Tests the setAutoIncr() method.
	 *
	 * @return void
	 */
	public function testSetAutoIncr() {

		$obj = new TachesSemaine();

		$obj->setAutoIncr(10);
		$this->assertEquals(10, $obj->getAutoIncr());
	}

	/**
	 * Tests the setCodeSemaineTache() method.
	 *
	 * @return void
	 */
	public function testSetCodeSemaineTache() {

		$obj = new TachesSemaine();

		$obj->setCodeSemaineTache("codeSemaineTache");
		$this->assertEquals("codeSemaineTache", $obj->getCodeSemaineTache());
	}

	/**
	 * Tests the setDiscrTache() method.
	 *
	 * @return void
	 */
	public function testSetDiscrTache() {

		$obj = new TachesSemaine();

		$obj->setDiscrTache(10);
		$this->assertEquals(10, $obj->getDiscrTache());
	}

}
