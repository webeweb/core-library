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

use WBW\Library\Core\Quadratus\Model\Proprete\EnchainementSemaines;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Enchainement semaines model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 * @final
 */
final class EnchainementSemainesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new EnchainementSemaines();

		$this->assertNull($obj->getDiscrSem());
		$this->assertNull($obj->getNumOrdre());
	}

	/**
	 * Tests the setDiscrSem() method.
	 *
	 * @return void
	 */
	public function testSetDiscrSem() {

		$obj = new EnchainementSemaines();

		$obj->setDiscrSem(10);
		$this->assertEquals(10, $obj->getDiscrSem());
	}

	/**
	 * Tests the setNumOrdre() method.
	 *
	 * @return void
	 */
	public function testSetNumOrdre() {

		$obj = new EnchainementSemaines();

		$obj->setNumOrdre(10);
		$this->assertEquals(10, $obj->getNumOrdre());
	}

}
