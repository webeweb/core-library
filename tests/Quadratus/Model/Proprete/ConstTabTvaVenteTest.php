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

use WBW\Library\Core\Quadratus\Model\Proprete\ConstTabTvaVente;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Const tab tva vente model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class ConstTabTvaVenteTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ConstTabTvaVente();

		$this->assertNull($obj->getCodeTvaArticle());
		$this->assertNull($obj->getCodeTvaClient());
		$this->assertNull($obj->getCompteTva());
		$this->assertNull($obj->getLibelle());
		$this->assertNull($obj->getTauxTva());
	}

	/**
	 * Tests the setCodeTvaArticle() method.
	 *
	 * @return void
	 */
	public function testSetCodeTvaArticle() {

		$obj = new ConstTabTvaVente();

		$obj->setCodeTvaArticle("codeTvaArticle");
		$this->assertEquals("codeTvaArticle", $obj->getCodeTvaArticle());
	}

	/**
	 * Tests the setCodeTvaClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeTvaClient() {

		$obj = new ConstTabTvaVente();

		$obj->setCodeTvaClient("codeTvaClient");
		$this->assertEquals("codeTvaClient", $obj->getCodeTvaClient());
	}

	/**
	 * Tests the setCompteTva() method.
	 *
	 * @return void
	 */
	public function testSetCompteTva() {

		$obj = new ConstTabTvaVente();

		$obj->setCompteTva("compteTva");
		$this->assertEquals("compteTva", $obj->getCompteTva());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new ConstTabTvaVente();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

	/**
	 * Tests the setTauxTva() method.
	 *
	 * @return void
	 */
	public function testSetTauxTva() {

		$obj = new ConstTabTvaVente();

		$obj->setTauxTva(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxTva());
	}

}
