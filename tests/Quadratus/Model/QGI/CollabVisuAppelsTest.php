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

use WBW\Library\Core\Quadratus\Model\QGI\CollabVisuAppels;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Collab visu appels model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class CollabVisuAppelsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new CollabVisuAppels();

		$this->assertNull($obj->getCodeCollab());
		$this->assertNull($obj->getCodeCollabVisu());
		$this->assertNull($obj->getTypeCode());
	}

	/**
	 * Tests the setCodeCollab() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollab() {

		$obj = new CollabVisuAppels();

		$obj->setCodeCollab("codeCollab");
		$this->assertEquals("codeCollab", $obj->getCodeCollab());
	}

	/**
	 * Tests the setCodeCollabVisu() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollabVisu() {

		$obj = new CollabVisuAppels();

		$obj->setCodeCollabVisu("codeCollabVisu");
		$this->assertEquals("codeCollabVisu", $obj->getCodeCollabVisu());
	}

	/**
	 * Tests the setTypeCode() method.
	 *
	 * @return void
	 */
	public function testSetTypeCode() {

		$obj = new CollabVisuAppels();

		$obj->setTypeCode("typeCode");
		$this->assertEquals("typeCode", $obj->getTypeCode());
	}

}
