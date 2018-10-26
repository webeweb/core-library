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

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\RepartitionActiviteBul;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Repartition activite bul model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class RepartitionActiviteBulTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new RepartitionActiviteBul();

		$this->assertNull($obj->getCodeService());
		$this->assertNull($obj->getIndicePeriode());
		$this->assertNull($obj->getNumeroEmploye());
		$this->assertNull($obj->getPeriode());
		$this->assertNull($obj->getTauxVentilation());
	}

	/**
	 * Tests the setCodeService() method.
	 *
	 * @return void
	 */
	public function testSetCodeService() {

		$obj = new RepartitionActiviteBul();

		$obj->setCodeService("codeService");
		$this->assertEquals("codeService", $obj->getCodeService());
	}

	/**
	 * Tests the setIndicePeriode() method.
	 *
	 * @return void
	 */
	public function testSetIndicePeriode() {

		$obj = new RepartitionActiviteBul();

		$obj->setIndicePeriode(10);
		$this->assertEquals(10, $obj->getIndicePeriode());
	}

	/**
	 * Tests the setNumeroEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNumeroEmploye() {

		$obj = new RepartitionActiviteBul();

		$obj->setNumeroEmploye("numeroEmploye");
		$this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
	}

	/**
	 * Tests the setPeriode() method.
	 *
	 * @return void
	 */
	public function testSetPeriode() {

		$obj = new RepartitionActiviteBul();

		$obj->setPeriode(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
	}

	/**
	 * Tests the setTauxVentilation() method.
	 *
	 * @return void
	 */
	public function testSetTauxVentilation() {

		$obj = new RepartitionActiviteBul();

		$obj->setTauxVentilation(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxVentilation());
	}

}
