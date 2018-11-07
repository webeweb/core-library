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

use WBW\Library\Core\Quadratus\Model\Proprete\DataSynchroSupprime;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Data synchro supprime model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class DataSynchroSupprimeTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new DataSynchroSupprime();

		$this->assertNull($obj->getTypeData());
		$this->assertNull($obj->getUniqIDBlocage());
	}

	/**
	 * Tests the setTypeData() method.
	 *
	 * @return void
	 */
	public function testSetTypeData() {

		$obj = new DataSynchroSupprime();

		$obj->setTypeData("typeData");
		$this->assertEquals("typeData", $obj->getTypeData());
	}

	/**
	 * Tests the setUniqIDBlocage() method.
	 *
	 * @return void
	 */
	public function testSetUniqIDBlocage() {

		$obj = new DataSynchroSupprime();

		$obj->setUniqIDBlocage("uniqIDBlocage");
		$this->assertEquals("uniqIDBlocage", $obj->getUniqIDBlocage());
	}

}
