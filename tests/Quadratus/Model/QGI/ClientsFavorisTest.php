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

use WBW\Library\Core\Quadratus\Model\QGI\ClientsFavoris;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Clients favoris model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class ClientsFavorisTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ClientsFavoris();

		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeCol());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new ClientsFavoris();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeCol() method.
	 *
	 * @return void
	 */
	public function testSetCodeCol() {

		$obj = new ClientsFavoris();

		$obj->setCodeCol("codeCol");
		$this->assertEquals("codeCol", $obj->getCodeCol());
	}

}
