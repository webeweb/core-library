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
use WBW\Library\Core\Quadratus\Model\Proprete\JoursFeries;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Jours feries model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 * @final
 */
final class JoursFeriesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new JoursFeries();

		$this->assertNull($obj->getCodePays());
		$this->assertNull($obj->getJour());
		$this->assertNull($obj->getNumeroJF());
	}

	/**
	 * Tests the setCodePays() method.
	 *
	 * @return void
	 */
	public function testSetCodePays() {

		$obj = new JoursFeries();

		$obj->setCodePays("codePays");
		$this->assertEquals("codePays", $obj->getCodePays());
	}

	/**
	 * Tests the setJour() method.
	 *
	 * @return void
	 */
	public function testSetJour() {

		$obj = new JoursFeries();

		$obj->setJour(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getJour());
	}

	/**
	 * Tests the setNumeroJF() method.
	 *
	 * @return void
	 */
	public function testSetNumeroJF() {

		$obj = new JoursFeries();

		$obj->setNumeroJF(10);
		$this->assertEquals(10, $obj->getNumeroJF());
	}

}
