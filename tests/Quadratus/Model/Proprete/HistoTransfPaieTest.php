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
use WBW\Library\Core\Quadratus\Model\Proprete\HistoTransfPaie;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Histo transf paie model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class HistoTransfPaieTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new HistoTransfPaie();

		$this->assertNull($obj->getCodeEmploye());
		$this->assertNull($obj->getEcartCumule());
		$this->assertNull($obj->getHCRPayees());
		$this->assertNull($obj->getHNPComplH());
		$this->assertNull($obj->getHNPHC11());
		$this->assertNull($obj->getHNPHC25());
		$this->assertNull($obj->getHNPHC33());
		$this->assertNull($obj->getNbComplH());
		$this->assertNull($obj->getNbHAbs());
		$this->assertNull($obj->getNbHAbsJF());
		$this->assertNull($obj->getNbHCompl());
		$this->assertNull($obj->getNbHRempl());
		$this->assertNull($obj->getNbHprevues());
		$this->assertNull($obj->getPeriode());
	}

	/**
	 * Tests the setCodeEmploye() method.
	 *
	 * @return void
	 */
	public function testSetCodeEmploye() {

		$obj = new HistoTransfPaie();

		$obj->setCodeEmploye("codeEmploye");
		$this->assertEquals("codeEmploye", $obj->getCodeEmploye());
	}

	/**
	 * Tests the setEcartCumule() method.
	 *
	 * @return void
	 */
	public function testSetEcartCumule() {

		$obj = new HistoTransfPaie();

		$obj->setEcartCumule(10.092018);
		$this->assertEquals(10.092018, $obj->getEcartCumule());
	}

	/**
	 * Tests the setHCRPayees() method.
	 *
	 * @return void
	 */
	public function testSetHCRPayees() {

		$obj = new HistoTransfPaie();

		$obj->setHCRPayees(true);
		$this->assertEquals(true, $obj->getHCRPayees());
	}

	/**
	 * Tests the setHNPComplH() method.
	 *
	 * @return void
	 */
	public function testSetHNPComplH() {

		$obj = new HistoTransfPaie();

		$obj->setHNPComplH(10.092018);
		$this->assertEquals(10.092018, $obj->getHNPComplH());
	}

	/**
	 * Tests the setHNPHC11() method.
	 *
	 * @return void
	 */
	public function testSetHNPHC11() {

		$obj = new HistoTransfPaie();

		$obj->setHNPHC11(10.092018);
		$this->assertEquals(10.092018, $obj->getHNPHC11());
	}

	/**
	 * Tests the setHNPHC25() method.
	 *
	 * @return void
	 */
	public function testSetHNPHC25() {

		$obj = new HistoTransfPaie();

		$obj->setHNPHC25(10.092018);
		$this->assertEquals(10.092018, $obj->getHNPHC25());
	}

	/**
	 * Tests the setHNPHC33() method.
	 *
	 * @return void
	 */
	public function testSetHNPHC33() {

		$obj = new HistoTransfPaie();

		$obj->setHNPHC33(10.092018);
		$this->assertEquals(10.092018, $obj->getHNPHC33());
	}

	/**
	 * Tests the setNbComplH() method.
	 *
	 * @return void
	 */
	public function testSetNbComplH() {

		$obj = new HistoTransfPaie();

		$obj->setNbComplH(10.092018);
		$this->assertEquals(10.092018, $obj->getNbComplH());
	}

	/**
	 * Tests the setNbHAbs() method.
	 *
	 * @return void
	 */
	public function testSetNbHAbs() {

		$obj = new HistoTransfPaie();

		$obj->setNbHAbs(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHAbs());
	}

	/**
	 * Tests the setNbHAbsJF() method.
	 *
	 * @return void
	 */
	public function testSetNbHAbsJF() {

		$obj = new HistoTransfPaie();

		$obj->setNbHAbsJF(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHAbsJF());
	}

	/**
	 * Tests the setNbHCompl() method.
	 *
	 * @return void
	 */
	public function testSetNbHCompl() {

		$obj = new HistoTransfPaie();

		$obj->setNbHCompl(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHCompl());
	}

	/**
	 * Tests the setNbHRempl() method.
	 *
	 * @return void
	 */
	public function testSetNbHRempl() {

		$obj = new HistoTransfPaie();

		$obj->setNbHRempl(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHRempl());
	}

	/**
	 * Tests the setNbHprevues() method.
	 *
	 * @return void
	 */
	public function testSetNbHprevues() {

		$obj = new HistoTransfPaie();

		$obj->setNbHprevues(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHprevues());
	}

	/**
	 * Tests the setPeriode() method.
	 *
	 * @return void
	 */
	public function testSetPeriode() {

		$obj = new HistoTransfPaie();

		$obj->setPeriode(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
	}

}
