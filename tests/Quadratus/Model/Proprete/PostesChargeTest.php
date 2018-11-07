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

use WBW\Library\Core\Quadratus\Model\Proprete\PostesCharge;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Postes charge model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class PostesChargeTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new PostesCharge();

		$this->assertNull($obj->getActif());
		$this->assertNull($obj->getCodeCharge());
		$this->assertNull($obj->getDernPosteAffecte());
		$this->assertNull($obj->getDescription());
		$this->assertNull($obj->getPosteRent());
		$this->assertNull($obj->getTypeProrata());
	}

	/**
	 * Tests the setActif() method.
	 *
	 * @return void
	 */
	public function testSetActif() {

		$obj = new PostesCharge();

		$obj->setActif(true);
		$this->assertEquals(true, $obj->getActif());
	}

	/**
	 * Tests the setCodeCharge() method.
	 *
	 * @return void
	 */
	public function testSetCodeCharge() {

		$obj = new PostesCharge();

		$obj->setCodeCharge("codeCharge");
		$this->assertEquals("codeCharge", $obj->getCodeCharge());
	}

	/**
	 * Tests the setDernPosteAffecte() method.
	 *
	 * @return void
	 */
	public function testSetDernPosteAffecte() {

		$obj = new PostesCharge();

		$obj->setDernPosteAffecte("dernPosteAffecte");
		$this->assertEquals("dernPosteAffecte", $obj->getDernPosteAffecte());
	}

	/**
	 * Tests the setDescription() method.
	 *
	 * @return void
	 */
	public function testSetDescription() {

		$obj = new PostesCharge();

		$obj->setDescription("description");
		$this->assertEquals("description", $obj->getDescription());
	}

	/**
	 * Tests the setPosteRent() method.
	 *
	 * @return void
	 */
	public function testSetPosteRent() {

		$obj = new PostesCharge();

		$obj->setPosteRent("posteRent");
		$this->assertEquals("posteRent", $obj->getPosteRent());
	}

	/**
	 * Tests the setTypeProrata() method.
	 *
	 * @return void
	 */
	public function testSetTypeProrata() {

		$obj = new PostesCharge();

		$obj->setTypeProrata("typeProrata");
		$this->assertEquals("typeProrata", $obj->getTypeProrata());
	}

}
