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

use WBW\Library\Core\Quadratus\Model\QGI\StatsPersoSuiviClientCols;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Stats perso suivi client cols model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class StatsPersoSuiviClientColsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new StatsPersoSuiviClientCols();

		$this->assertNull($obj->getAnN());
		$this->assertNull($obj->getCode());
		$this->assertNull($obj->getIndice());
		$this->assertNull($obj->getIntitule());
		$this->assertNull($obj->getRegleAutres());
		$this->assertNull($obj->getRegleBARN());
		$this->assertNull($obj->getRegleBARS());
		$this->assertNull($obj->getRegleBICRN());
		$this->assertNull($obj->getRegleBICRS());
		$this->assertNull($obj->getRegleBNC());
		$this->assertNull($obj->getRegleSCI());
		$this->assertNull($obj->getRegleSCM());
		$this->assertNull($obj->getRegleTous());
	}

	/**
	 * Tests the setAnN() method.
	 *
	 * @return void
	 */
	public function testSetAnN() {

		$obj = new StatsPersoSuiviClientCols();

		$obj->setAnN("anN");
		$this->assertEquals("anN", $obj->getAnN());
	}

	/**
	 * Tests the setCode() method.
	 *
	 * @return void
	 */
	public function testSetCode() {

		$obj = new StatsPersoSuiviClientCols();

		$obj->setCode("code");
		$this->assertEquals("code", $obj->getCode());
	}

	/**
	 * Tests the setIndice() method.
	 *
	 * @return void
	 */
	public function testSetIndice() {

		$obj = new StatsPersoSuiviClientCols();

		$obj->setIndice(10);
		$this->assertEquals(10, $obj->getIndice());
	}

	/**
	 * Tests the setIntitule() method.
	 *
	 * @return void
	 */
	public function testSetIntitule() {

		$obj = new StatsPersoSuiviClientCols();

		$obj->setIntitule("intitule");
		$this->assertEquals("intitule", $obj->getIntitule());
	}

	/**
	 * Tests the setRegleAutres() method.
	 *
	 * @return void
	 */
	public function testSetRegleAutres() {

		$obj = new StatsPersoSuiviClientCols();

		$obj->setRegleAutres("regleAutres");
		$this->assertEquals("regleAutres", $obj->getRegleAutres());
	}

	/**
	 * Tests the setRegleBARN() method.
	 *
	 * @return void
	 */
	public function testSetRegleBARN() {

		$obj = new StatsPersoSuiviClientCols();

		$obj->setRegleBARN("regleBARN");
		$this->assertEquals("regleBARN", $obj->getRegleBARN());
	}

	/**
	 * Tests the setRegleBARS() method.
	 *
	 * @return void
	 */
	public function testSetRegleBARS() {

		$obj = new StatsPersoSuiviClientCols();

		$obj->setRegleBARS("regleBARS");
		$this->assertEquals("regleBARS", $obj->getRegleBARS());
	}

	/**
	 * Tests the setRegleBICRN() method.
	 *
	 * @return void
	 */
	public function testSetRegleBICRN() {

		$obj = new StatsPersoSuiviClientCols();

		$obj->setRegleBICRN("regleBICRN");
		$this->assertEquals("regleBICRN", $obj->getRegleBICRN());
	}

	/**
	 * Tests the setRegleBICRS() method.
	 *
	 * @return void
	 */
	public function testSetRegleBICRS() {

		$obj = new StatsPersoSuiviClientCols();

		$obj->setRegleBICRS("regleBICRS");
		$this->assertEquals("regleBICRS", $obj->getRegleBICRS());
	}

	/**
	 * Tests the setRegleBNC() method.
	 *
	 * @return void
	 */
	public function testSetRegleBNC() {

		$obj = new StatsPersoSuiviClientCols();

		$obj->setRegleBNC("regleBNC");
		$this->assertEquals("regleBNC", $obj->getRegleBNC());
	}

	/**
	 * Tests the setRegleSCI() method.
	 *
	 * @return void
	 */
	public function testSetRegleSCI() {

		$obj = new StatsPersoSuiviClientCols();

		$obj->setRegleSCI("regleSCI");
		$this->assertEquals("regleSCI", $obj->getRegleSCI());
	}

	/**
	 * Tests the setRegleSCM() method.
	 *
	 * @return void
	 */
	public function testSetRegleSCM() {

		$obj = new StatsPersoSuiviClientCols();

		$obj->setRegleSCM("regleSCM");
		$this->assertEquals("regleSCM", $obj->getRegleSCM());
	}

	/**
	 * Tests the setRegleTous() method.
	 *
	 * @return void
	 */
	public function testSetRegleTous() {

		$obj = new StatsPersoSuiviClientCols();

		$obj->setRegleTous("regleTous");
		$this->assertEquals("regleTous", $obj->getRegleTous());
	}

}
