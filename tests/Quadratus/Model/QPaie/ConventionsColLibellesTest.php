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

use WBW\Library\Core\Quadratus\Model\QPaie\ConventionsColLibelles;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Conventions col libelles model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class ConventionsColLibellesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ConventionsColLibelles();

		$this->assertNull($obj->getActive());
		$this->assertNull($obj->getCategSalarie());
		$this->assertNull($obj->getCodeConvention());
		$this->assertNull($obj->getCodeLibelle());
		$this->assertNull($obj->getFraisSanteAM());
		$this->assertNull($obj->getIndiceCateg());
		$this->assertNull($obj->getIntitule());
		$this->assertNull($obj->getPosition());
	}

	/**
	 * Tests the setActive() method.
	 *
	 * @return void
	 */
	public function testSetActive() {

		$obj = new ConventionsColLibelles();

		$obj->setActive(true);
		$this->assertEquals(true, $obj->getActive());
	}

	/**
	 * Tests the setCategSalarie() method.
	 *
	 * @return void
	 */
	public function testSetCategSalarie() {

		$obj = new ConventionsColLibelles();

		$obj->setCategSalarie(10);
		$this->assertEquals(10, $obj->getCategSalarie());
	}

	/**
	 * Tests the setCodeConvention() method.
	 *
	 * @return void
	 */
	public function testSetCodeConvention() {

		$obj = new ConventionsColLibelles();

		$obj->setCodeConvention("codeConvention");
		$this->assertEquals("codeConvention", $obj->getCodeConvention());
	}

	/**
	 * Tests the setCodeLibelle() method.
	 *
	 * @return void
	 */
	public function testSetCodeLibelle() {

		$obj = new ConventionsColLibelles();

		$obj->setCodeLibelle("codeLibelle");
		$this->assertEquals("codeLibelle", $obj->getCodeLibelle());
	}

	/**
	 * Tests the setFraisSanteAM() method.
	 *
	 * @return void
	 */
	public function testSetFraisSanteAM() {

		$obj = new ConventionsColLibelles();

		$obj->setFraisSanteAM(true);
		$this->assertEquals(true, $obj->getFraisSanteAM());
	}

	/**
	 * Tests the setIndiceCateg() method.
	 *
	 * @return void
	 */
	public function testSetIndiceCateg() {

		$obj = new ConventionsColLibelles();

		$obj->setIndiceCateg(10);
		$this->assertEquals(10, $obj->getIndiceCateg());
	}

	/**
	 * Tests the setIntitule() method.
	 *
	 * @return void
	 */
	public function testSetIntitule() {

		$obj = new ConventionsColLibelles();

		$obj->setIntitule("intitule");
		$this->assertEquals("intitule", $obj->getIntitule());
	}

	/**
	 * Tests the setPosition() method.
	 *
	 * @return void
	 */
	public function testSetPosition() {

		$obj = new ConventionsColLibelles();

		$obj->setPosition(10);
		$this->assertEquals(10, $obj->getPosition());
	}

}
