<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use WBW\Library\Core\Quadratus\Model\QPaie\DADSUEtablissements;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * D a d s u etablissements model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class DADSUEtablissementsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new DADSUEtablissements();

		$this->assertNull($obj->getCodeEtablissement());
		$this->assertNull($obj->getFormaPro_Base());
		$this->assertNull($obj->getFormaPro_BaseCDD());
		$this->assertNull($obj->getFormaPro_CodeAssuj());
		$this->assertNull($obj->getPrudTypeDADSUDerogatoire());
		$this->assertNull($obj->getTaxeApprentissage_Base());
		$this->assertNull($obj->getTaxeApprentissage_CodeAssuj());
	}

	/**
	 * Tests the setCodeEtablissement() method.
	 *
	 * @return void
	 */
	public function testSetCodeEtablissement() {

		$obj = new DADSUEtablissements();

		$obj->setCodeEtablissement(10);
		$this->assertEquals(10, $obj->getCodeEtablissement());
	}

	/**
	 * Tests the setFormaPro_Base() method.
	 *
	 * @return void
	 */
	public function testSetFormaPro_Base() {

		$obj = new DADSUEtablissements();

		$obj->setFormaPro_Base(10.092018);
		$this->assertEquals(10.092018, $obj->getFormaPro_Base());
	}

	/**
	 * Tests the setFormaPro_BaseCDD() method.
	 *
	 * @return void
	 */
	public function testSetFormaPro_BaseCDD() {

		$obj = new DADSUEtablissements();

		$obj->setFormaPro_BaseCDD(10.092018);
		$this->assertEquals(10.092018, $obj->getFormaPro_BaseCDD());
	}

	/**
	 * Tests the setFormaPro_CodeAssuj() method.
	 *
	 * @return void
	 */
	public function testSetFormaPro_CodeAssuj() {

		$obj = new DADSUEtablissements();

		$obj->setFormaPro_CodeAssuj("formaPro_CodeAssuj");
		$this->assertEquals("formaPro_CodeAssuj", $obj->getFormaPro_CodeAssuj());
	}

	/**
	 * Tests the setPrudTypeDADSUDerogatoire() method.
	 *
	 * @return void
	 */
	public function testSetPrudTypeDADSUDerogatoire() {

		$obj = new DADSUEtablissements();

		$obj->setPrudTypeDADSUDerogatoire("prudTypeDADSUDerogatoire");
		$this->assertEquals("prudTypeDADSUDerogatoire", $obj->getPrudTypeDADSUDerogatoire());
	}

	/**
	 * Tests the setTaxeApprentissage_Base() method.
	 *
	 * @return void
	 */
	public function testSetTaxeApprentissage_Base() {

		$obj = new DADSUEtablissements();

		$obj->setTaxeApprentissage_Base(10.092018);
		$this->assertEquals(10.092018, $obj->getTaxeApprentissage_Base());
	}

	/**
	 * Tests the setTaxeApprentissage_CodeAssuj() method.
	 *
	 * @return void
	 */
	public function testSetTaxeApprentissage_CodeAssuj() {

		$obj = new DADSUEtablissements();

		$obj->setTaxeApprentissage_CodeAssuj("taxeApprentissage_CodeAssuj");
		$this->assertEquals("taxeApprentissage_CodeAssuj", $obj->getTaxeApprentissage_CodeAssuj());
	}

}
