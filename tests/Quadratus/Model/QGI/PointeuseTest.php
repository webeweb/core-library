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
use WBW\Library\Core\Quadratus\Model\QGI\Pointeuse;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Pointeuse model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class PointeuseTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Pointeuse();

		$this->assertNull($obj->getCodeCollab());
		$this->assertNull($obj->getDateHeureSysteme());
		$this->assertNull($obj->getEtat());
		$this->assertNull($obj->getIDPointeuse());
	}

	/**
	 * Tests the setCodeCollab() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollab() {

		$obj = new Pointeuse();

		$obj->setCodeCollab("codeCollab");
		$this->assertEquals("codeCollab", $obj->getCodeCollab());
	}

	/**
	 * Tests the setDateHeureSysteme() method.
	 *
	 * @return void
	 */
	public function testSetDateHeureSysteme() {

		$obj = new Pointeuse();

		$obj->setDateHeureSysteme(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateHeureSysteme());
	}

	/**
	 * Tests the setEtat() method.
	 *
	 * @return void
	 */
	public function testSetEtat() {

		$obj = new Pointeuse();

		$obj->setEtat("etat");
		$this->assertEquals("etat", $obj->getEtat());
	}

	/**
	 * Tests the setIDPointeuse() method.
	 *
	 * @return void
	 */
	public function testSetIDPointeuse() {

		$obj = new Pointeuse();

		$obj->setIDPointeuse(10);
		$this->assertEquals(10, $obj->getIDPointeuse());
	}

}
