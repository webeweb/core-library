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

use WBW\Library\Core\Quadratus\Model\QGI\CartesAppelEtebac;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Cartes appel etebac model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class CartesAppelEtebacTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new CartesAppelEtebac();

		$this->assertNull($obj->getCarteAppel());
		$this->assertNull($obj->getCodeBanque());
		$this->assertNull($obj->getIDCarte());
		$this->assertNull($obj->getLgCarteAppel());
		$this->assertNull($obj->getLibelle());
		$this->assertNull($obj->getTypeCarte());
	}

	/**
	 * Tests the setCarteAppel() method.
	 *
	 * @return void
	 */
	public function testSetCarteAppel() {

		$obj = new CartesAppelEtebac();

		$obj->setCarteAppel("carteAppel");
		$this->assertEquals("carteAppel", $obj->getCarteAppel());
	}

	/**
	 * Tests the setCodeBanque() method.
	 *
	 * @return void
	 */
	public function testSetCodeBanque() {

		$obj = new CartesAppelEtebac();

		$obj->setCodeBanque("codeBanque");
		$this->assertEquals("codeBanque", $obj->getCodeBanque());
	}

	/**
	 * Tests the setIDCarte() method.
	 *
	 * @return void
	 */
	public function testSetIDCarte() {

		$obj = new CartesAppelEtebac();

		$obj->setIDCarte("iDCarte");
		$this->assertEquals("iDCarte", $obj->getIDCarte());
	}

	/**
	 * Tests the setLgCarteAppel() method.
	 *
	 * @return void
	 */
	public function testSetLgCarteAppel() {

		$obj = new CartesAppelEtebac();

		$obj->setLgCarteAppel("lgCarteAppel");
		$this->assertEquals("lgCarteAppel", $obj->getLgCarteAppel());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new CartesAppelEtebac();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

	/**
	 * Tests the setTypeCarte() method.
	 *
	 * @return void
	 */
	public function testSetTypeCarte() {

		$obj = new CartesAppelEtebac();

		$obj->setTypeCarte("typeCarte");
		$this->assertEquals("typeCarte", $obj->getTypeCarte());
	}

}
