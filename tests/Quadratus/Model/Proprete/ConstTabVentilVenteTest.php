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

use WBW\Library\Core\Quadratus\Model\Proprete\ConstTabVentilVente;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Const tab ventil vente model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 * @final
 */
final class ConstTabVentilVenteTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ConstTabVentilVente();

		$this->assertNull($obj->getCodeVentilArticle());
		$this->assertNull($obj->getCodeVentilClient());
		$this->assertNull($obj->getCompteVentil());
		$this->assertNull($obj->getLibelle());
	}

	/**
	 * Tests the setCodeVentilArticle() method.
	 *
	 * @return void
	 */
	public function testSetCodeVentilArticle() {

		$obj = new ConstTabVentilVente();

		$obj->setCodeVentilArticle("codeVentilArticle");
		$this->assertEquals("codeVentilArticle", $obj->getCodeVentilArticle());
	}

	/**
	 * Tests the setCodeVentilClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeVentilClient() {

		$obj = new ConstTabVentilVente();

		$obj->setCodeVentilClient("codeVentilClient");
		$this->assertEquals("codeVentilClient", $obj->getCodeVentilClient());
	}

	/**
	 * Tests the setCompteVentil() method.
	 *
	 * @return void
	 */
	public function testSetCompteVentil() {

		$obj = new ConstTabVentilVente();

		$obj->setCompteVentil("compteVentil");
		$this->assertEquals("compteVentil", $obj->getCompteVentil());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new ConstTabVentilVente();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

}
