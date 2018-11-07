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

use WBW\Library\Core\Quadratus\Model\QGI\eWSEspace;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * e w s espace model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class eWSEspaceTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new eWSEspace();

		$this->assertNull($obj->getNumDoss());
	}

	/**
	 * Tests the setNumDoss() method.
	 *
	 * @return void
	 */
	public function testSetNumDoss() {

		$obj = new eWSEspace();

		$obj->setNumDoss("numDoss");
		$this->assertEquals("numDoss", $obj->getNumDoss());
	}

}
