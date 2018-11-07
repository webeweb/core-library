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

use WBW\Library\Core\Quadratus\Model\QPaie\EmpDADSURetraiteLignesContrat;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Emp d a d s u retraite lignes contrat model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class EmpDADSURetraiteLignesContratTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new EmpDADSURetraiteLignesContrat();

		$this->assertNull($obj->getCodeEtablissement());
		$this->assertNull($obj->getCodeOrganisme());
		$this->assertNull($obj->getNumeroEmploye());
		$this->assertNull($obj->getRefContrat());
	}

	/**
	 * Tests the setCodeEtablissement() method.
	 *
	 * @return void
	 */
	public function testSetCodeEtablissement() {

		$obj = new EmpDADSURetraiteLignesContrat();

		$obj->setCodeEtablissement(10);
		$this->assertEquals(10, $obj->getCodeEtablissement());
	}

	/**
	 * Tests the setCodeOrganisme() method.
	 *
	 * @return void
	 */
	public function testSetCodeOrganisme() {

		$obj = new EmpDADSURetraiteLignesContrat();

		$obj->setCodeOrganisme("codeOrganisme");
		$this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
	}

	/**
	 * Tests the setNumeroEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNumeroEmploye() {

		$obj = new EmpDADSURetraiteLignesContrat();

		$obj->setNumeroEmploye("numeroEmploye");
		$this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
	}

	/**
	 * Tests the setRefContrat() method.
	 *
	 * @return void
	 */
	public function testSetRefContrat() {

		$obj = new EmpDADSURetraiteLignesContrat();

		$obj->setRefContrat("refContrat");
		$this->assertEquals("refContrat", $obj->getRefContrat());
	}

}
