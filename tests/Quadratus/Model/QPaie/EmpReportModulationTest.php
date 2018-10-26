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
use WBW\Library\Core\Quadratus\Model\QPaie\EmpReportModulation;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Emp report modulation model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class EmpReportModulationTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new EmpReportModulation();

		$this->assertNull($obj->getDateApplication());
		$this->assertNull($obj->getNumeroEmploye());
		$this->assertNull($obj->getReportModAnt());
	}

	/**
	 * Tests the setDateApplication() method.
	 *
	 * @return void
	 */
	public function testSetDateApplication() {

		$obj = new EmpReportModulation();

		$obj->setDateApplication(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateApplication());
	}

	/**
	 * Tests the setNumeroEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNumeroEmploye() {

		$obj = new EmpReportModulation();

		$obj->setNumeroEmploye("numeroEmploye");
		$this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
	}

	/**
	 * Tests the setReportModAnt() method.
	 *
	 * @return void
	 */
	public function testSetReportModAnt() {

		$obj = new EmpReportModulation();

		$obj->setReportModAnt(10.092018);
		$this->assertEquals(10.092018, $obj->getReportModAnt());
	}

}
