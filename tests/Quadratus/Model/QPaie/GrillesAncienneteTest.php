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

use WBW\Library\Core\Quadratus\Model\QPaie\GrillesAnciennete;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Grilles anciennete model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class GrillesAncienneteTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new GrillesAnciennete();

		$this->assertNull($obj->getCode());
		$this->assertNull($obj->getIntitule());
	}

	/**
	 * Tests the setCode() method.
	 *
	 * @return void
	 */
	public function testSetCode() {

		$obj = new GrillesAnciennete();

		$obj->setCode("code");
		$this->assertEquals("code", $obj->getCode());
	}

	/**
	 * Tests the setIntitule() method.
	 *
	 * @return void
	 */
	public function testSetIntitule() {

		$obj = new GrillesAnciennete();

		$obj->setIntitule("intitule");
		$this->assertEquals("intitule", $obj->getIntitule());
	}

}
