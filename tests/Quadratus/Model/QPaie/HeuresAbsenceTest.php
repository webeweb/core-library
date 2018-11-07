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
use WBW\Library\Core\Quadratus\Model\QPaie\HeuresAbsence;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Heures absence model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class HeuresAbsenceTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new HeuresAbsence();

		$this->assertNull($obj->getAbsenceAu());
		$this->assertNull($obj->getAbsenceDu());
		$this->assertNull($obj->getDateJour());
		$this->assertNull($obj->getNbHAReintegrer());
		$this->assertNull($obj->getNbHNonEffectue());
		$this->assertNull($obj->getNbHRetenueSalaire());
		$this->assertNull($obj->getNumeroEmploye());
		$this->assertNull($obj->getTransfere());
		$this->assertNull($obj->getTypeAbsence());
	}

	/**
	 * Tests the setAbsenceAu() method.
	 *
	 * @return void
	 */
	public function testSetAbsenceAu() {

		$obj = new HeuresAbsence();

		$obj->setAbsenceAu(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getAbsenceAu());
	}

	/**
	 * Tests the setAbsenceDu() method.
	 *
	 * @return void
	 */
	public function testSetAbsenceDu() {

		$obj = new HeuresAbsence();

		$obj->setAbsenceDu(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getAbsenceDu());
	}

	/**
	 * Tests the setDateJour() method.
	 *
	 * @return void
	 */
	public function testSetDateJour() {

		$obj = new HeuresAbsence();

		$obj->setDateJour(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateJour());
	}

	/**
	 * Tests the setNbHAReintegrer() method.
	 *
	 * @return void
	 */
	public function testSetNbHAReintegrer() {

		$obj = new HeuresAbsence();

		$obj->setNbHAReintegrer(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHAReintegrer());
	}

	/**
	 * Tests the setNbHNonEffectue() method.
	 *
	 * @return void
	 */
	public function testSetNbHNonEffectue() {

		$obj = new HeuresAbsence();

		$obj->setNbHNonEffectue(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHNonEffectue());
	}

	/**
	 * Tests the setNbHRetenueSalaire() method.
	 *
	 * @return void
	 */
	public function testSetNbHRetenueSalaire() {

		$obj = new HeuresAbsence();

		$obj->setNbHRetenueSalaire(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHRetenueSalaire());
	}

	/**
	 * Tests the setNumeroEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNumeroEmploye() {

		$obj = new HeuresAbsence();

		$obj->setNumeroEmploye("numeroEmploye");
		$this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
	}

	/**
	 * Tests the setTransfere() method.
	 *
	 * @return void
	 */
	public function testSetTransfere() {

		$obj = new HeuresAbsence();

		$obj->setTransfere("transfere");
		$this->assertEquals("transfere", $obj->getTransfere());
	}

	/**
	 * Tests the setTypeAbsence() method.
	 *
	 * @return void
	 */
	public function testSetTypeAbsence() {

		$obj = new HeuresAbsence();

		$obj->setTypeAbsence("typeAbsence");
		$this->assertEquals("typeAbsence", $obj->getTypeAbsence());
	}

}
