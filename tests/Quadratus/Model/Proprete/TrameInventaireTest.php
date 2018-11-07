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

use WBW\Library\Core\Quadratus\Model\Proprete\TrameInventaire;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Trame inventaire model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class TrameInventaireTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new TrameInventaire();

		$this->assertNull($obj->getCodeArticle());
		$this->assertNull($obj->getCodeTrame());
		$this->assertNull($obj->getNumOrdre());
	}

	/**
	 * Tests the setCodeArticle() method.
	 *
	 * @return void
	 */
	public function testSetCodeArticle() {

		$obj = new TrameInventaire();

		$obj->setCodeArticle("codeArticle");
		$this->assertEquals("codeArticle", $obj->getCodeArticle());
	}

	/**
	 * Tests the setCodeTrame() method.
	 *
	 * @return void
	 */
	public function testSetCodeTrame() {

		$obj = new TrameInventaire();

		$obj->setCodeTrame("codeTrame");
		$this->assertEquals("codeTrame", $obj->getCodeTrame());
	}

	/**
	 * Tests the setNumOrdre() method.
	 *
	 * @return void
	 */
	public function testSetNumOrdre() {

		$obj = new TrameInventaire();

		$obj->setNumOrdre(10);
		$this->assertEquals(10, $obj->getNumOrdre());
	}

}
