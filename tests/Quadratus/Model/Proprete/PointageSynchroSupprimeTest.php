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

use DateTime;
use WBW\Library\Core\Quadratus\Model\Proprete\PointageSynchroSupprime;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Pointage synchro supprime model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 * @final
 */
final class PointageSynchroSupprimeTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new PointageSynchroSupprime();

		$this->assertNull($obj->getCleEnreg());
		$this->assertNull($obj->getCreeParGenPrev());
		$this->assertNull($obj->getNomTable());
		$this->assertNull($obj->getTimeSuppression());
		$this->assertNull($obj->getUniqIDSynchro());
	}

	/**
	 * Tests the setCleEnreg() method.
	 *
	 * @return void
	 */
	public function testSetCleEnreg() {

		$obj = new PointageSynchroSupprime();

		$obj->setCleEnreg("cleEnreg");
		$this->assertEquals("cleEnreg", $obj->getCleEnreg());
	}

	/**
	 * Tests the setCreeParGenPrev() method.
	 *
	 * @return void
	 */
	public function testSetCreeParGenPrev() {

		$obj = new PointageSynchroSupprime();

		$obj->setCreeParGenPrev(true);
		$this->assertEquals(true, $obj->getCreeParGenPrev());
	}

	/**
	 * Tests the setNomTable() method.
	 *
	 * @return void
	 */
	public function testSetNomTable() {

		$obj = new PointageSynchroSupprime();

		$obj->setNomTable("nomTable");
		$this->assertEquals("nomTable", $obj->getNomTable());
	}

	/**
	 * Tests the setTimeSuppression() method.
	 *
	 * @return void
	 */
	public function testSetTimeSuppression() {

		$obj = new PointageSynchroSupprime();

		$obj->setTimeSuppression(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getTimeSuppression());
	}

	/**
	 * Tests the setUniqIDSynchro() method.
	 *
	 * @return void
	 */
	public function testSetUniqIDSynchro() {

		$obj = new PointageSynchroSupprime();

		$obj->setUniqIDSynchro("uniqIDSynchro");
		$this->assertEquals("uniqIDSynchro", $obj->getUniqIDSynchro());
	}

}
