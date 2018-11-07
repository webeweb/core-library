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

use WBW\Library\Core\Quadratus\Model\QGI\CollabTache;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Collab tache model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class CollabTacheTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new CollabTache();

		$this->assertNull($obj->getCodeCollab());
		$this->assertNull($obj->getCodeTache());
		$this->assertNull($obj->getPV1());
		$this->assertNull($obj->getPV2());
		$this->assertNull($obj->getPV3());
	}

	/**
	 * Tests the setCodeCollab() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollab() {

		$obj = new CollabTache();

		$obj->setCodeCollab("codeCollab");
		$this->assertEquals("codeCollab", $obj->getCodeCollab());
	}

	/**
	 * Tests the setCodeTache() method.
	 *
	 * @return void
	 */
	public function testSetCodeTache() {

		$obj = new CollabTache();

		$obj->setCodeTache("codeTache");
		$this->assertEquals("codeTache", $obj->getCodeTache());
	}

	/**
	 * Tests the setPV1() method.
	 *
	 * @return void
	 */
	public function testSetPV1() {

		$obj = new CollabTache();

		$obj->setPV1(10.092018);
		$this->assertEquals(10.092018, $obj->getPV1());
	}

	/**
	 * Tests the setPV2() method.
	 *
	 * @return void
	 */
	public function testSetPV2() {

		$obj = new CollabTache();

		$obj->setPV2(10.092018);
		$this->assertEquals(10.092018, $obj->getPV2());
	}

	/**
	 * Tests the setPV3() method.
	 *
	 * @return void
	 */
	public function testSetPV3() {

		$obj = new CollabTache();

		$obj->setPV3(10.092018);
		$this->assertEquals(10.092018, $obj->getPV3());
	}

}
