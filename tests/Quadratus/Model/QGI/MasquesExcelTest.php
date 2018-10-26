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

use WBW\Library\Core\Quadratus\Model\QGI\MasquesExcel;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Masques excel model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class MasquesExcelTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new MasquesExcel();

		$this->assertNull($obj->getModele());
		$this->assertNull($obj->getTitre());
		$this->assertNull($obj->getTypeMasque());
	}

	/**
	 * Tests the setModele() method.
	 *
	 * @return void
	 */
	public function testSetModele() {

		$obj = new MasquesExcel();

		$obj->setModele("modele");
		$this->assertEquals("modele", $obj->getModele());
	}

	/**
	 * Tests the setTitre() method.
	 *
	 * @return void
	 */
	public function testSetTitre() {

		$obj = new MasquesExcel();

		$obj->setTitre("titre");
		$this->assertEquals("titre", $obj->getTitre());
	}

	/**
	 * Tests the setTypeMasque() method.
	 *
	 * @return void
	 */
	public function testSetTypeMasque() {

		$obj = new MasquesExcel();

		$obj->setTypeMasque("typeMasque");
		$this->assertEquals("typeMasque", $obj->getTypeMasque());
	}

}
