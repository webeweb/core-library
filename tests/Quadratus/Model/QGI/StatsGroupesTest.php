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

use WBW\Library\Core\Quadratus\Model\QGI\StatsGroupes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Stats groupes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class StatsGroupesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new StatsGroupes();

		$this->assertNull($obj->getCode());
		$this->assertNull($obj->getGroupeStat());
		$this->assertNull($obj->getTypeChamp());
	}

	/**
	 * Tests the setCode() method.
	 *
	 * @return void
	 */
	public function testSetCode() {

		$obj = new StatsGroupes();

		$obj->setCode("code");
		$this->assertEquals("code", $obj->getCode());
	}

	/**
	 * Tests the setGroupeStat() method.
	 *
	 * @return void
	 */
	public function testSetGroupeStat() {

		$obj = new StatsGroupes();

		$obj->setGroupeStat("groupeStat");
		$this->assertEquals("groupeStat", $obj->getGroupeStat());
	}

	/**
	 * Tests the setTypeChamp() method.
	 *
	 * @return void
	 */
	public function testSetTypeChamp() {

		$obj = new StatsGroupes();

		$obj->setTypeChamp("typeChamp");
		$this->assertEquals("typeChamp", $obj->getTypeChamp());
	}

}
