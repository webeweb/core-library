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
use WBW\Library\Core\Quadratus\Model\QPaie\EmpDADSUPrevoyanceAyantDroitLignesContrat;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Emp d a d s u prevoyance ayant droit lignes contrat model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class EmpDADSUPrevoyanceAyantDroitLignesContratTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new EmpDADSUPrevoyanceAyantDroitLignesContrat();

		$this->assertNull($obj->getCodeOption());
		$this->assertNull($obj->getCodeOrganisme());
		$this->assertNull($obj->getCodePopulation());
		$this->assertNull($obj->getDebutPeriode());
		$this->assertNull($obj->getFinPeriode());
		$this->assertNull($obj->getNumeroAyantDroit());
		$this->assertNull($obj->getNumeroEmploye());
		$this->assertNull($obj->getRefContrat());
	}

	/**
	 * Tests the setCodeOption() method.
	 *
	 * @return void
	 */
	public function testSetCodeOption() {

		$obj = new EmpDADSUPrevoyanceAyantDroitLignesContrat();

		$obj->setCodeOption("codeOption");
		$this->assertEquals("codeOption", $obj->getCodeOption());
	}

	/**
	 * Tests the setCodeOrganisme() method.
	 *
	 * @return void
	 */
	public function testSetCodeOrganisme() {

		$obj = new EmpDADSUPrevoyanceAyantDroitLignesContrat();

		$obj->setCodeOrganisme("codeOrganisme");
		$this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
	}

	/**
	 * Tests the setCodePopulation() method.
	 *
	 * @return void
	 */
	public function testSetCodePopulation() {

		$obj = new EmpDADSUPrevoyanceAyantDroitLignesContrat();

		$obj->setCodePopulation("codePopulation");
		$this->assertEquals("codePopulation", $obj->getCodePopulation());
	}

	/**
	 * Tests the setDebutPeriode() method.
	 *
	 * @return void
	 */
	public function testSetDebutPeriode() {

		$obj = new EmpDADSUPrevoyanceAyantDroitLignesContrat();

		$obj->setDebutPeriode(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDebutPeriode());
	}

	/**
	 * Tests the setFinPeriode() method.
	 *
	 * @return void
	 */
	public function testSetFinPeriode() {

		$obj = new EmpDADSUPrevoyanceAyantDroitLignesContrat();

		$obj->setFinPeriode(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getFinPeriode());
	}

	/**
	 * Tests the setNumeroAyantDroit() method.
	 *
	 * @return void
	 */
	public function testSetNumeroAyantDroit() {

		$obj = new EmpDADSUPrevoyanceAyantDroitLignesContrat();

		$obj->setNumeroAyantDroit(10);
		$this->assertEquals(10, $obj->getNumeroAyantDroit());
	}

	/**
	 * Tests the setNumeroEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNumeroEmploye() {

		$obj = new EmpDADSUPrevoyanceAyantDroitLignesContrat();

		$obj->setNumeroEmploye("numeroEmploye");
		$this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
	}

	/**
	 * Tests the setRefContrat() method.
	 *
	 * @return void
	 */
	public function testSetRefContrat() {

		$obj = new EmpDADSUPrevoyanceAyantDroitLignesContrat();

		$obj->setRefContrat("refContrat");
		$this->assertEquals("refContrat", $obj->getRefContrat());
	}

}
