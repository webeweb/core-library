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

use WBW\Library\Core\Quadratus\Model\QPaie\IntitCumulsLibelles;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Intit cumuls libelles model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class IntitCumulsLibellesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new IntitCumulsLibelles();

		$this->assertNull($obj->getIntitule());
		$this->assertNull($obj->getNumCumulBulletin());
	}

	/**
	 * Tests the setIntitule() method.
	 *
	 * @return void
	 */
	public function testSetIntitule() {

		$obj = new IntitCumulsLibelles();

		$obj->setIntitule("intitule");
		$this->assertEquals("intitule", $obj->getIntitule());
	}

	/**
	 * Tests the setNumCumulBulletin() method.
	 *
	 * @return void
	 */
	public function testSetNumCumulBulletin() {

		$obj = new IntitCumulsLibelles();

		$obj->setNumCumulBulletin(10);
		$this->assertEquals(10, $obj->getNumCumulBulletin());
	}

}
