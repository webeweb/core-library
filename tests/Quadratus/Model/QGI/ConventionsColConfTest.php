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

use WBW\Library\Core\Quadratus\Model\QGI\ConventionsColConf;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Conventions col conf model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class ConventionsColConfTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ConventionsColConf();

		$this->assertNull($obj->getCodeCollaborateur());
		$this->assertNull($obj->getDroit());
		$this->assertNull($obj->getType());
	}

	/**
	 * Tests the setCodeCollaborateur() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollaborateur() {

		$obj = new ConventionsColConf();

		$obj->setCodeCollaborateur("codeCollaborateur");
		$this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
	}

	/**
	 * Tests the setDroit() method.
	 *
	 * @return void
	 */
	public function testSetDroit() {

		$obj = new ConventionsColConf();

		$obj->setDroit("droit");
		$this->assertEquals("droit", $obj->getDroit());
	}

	/**
	 * Tests the setType() method.
	 *
	 * @return void
	 */
	public function testSetType() {

		$obj = new ConventionsColConf();

		$obj->setType(10);
		$this->assertEquals(10, $obj->getType());
	}

}
