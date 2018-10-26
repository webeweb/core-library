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

use WBW\Library\Core\Quadratus\Model\QPaie\DADSURetraiteLignesContrat;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * D a d s u retraite lignes contrat model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class DADSURetraiteLignesContratTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new DADSURetraiteLignesContrat();

		$this->assertNull($obj->getCodeEtablissement());
		$this->assertNull($obj->getCodeOrganisme());
		$this->assertNull($obj->getDesignationCommerciale());
		$this->assertNull($obj->getRefContrat());
	}

	/**
	 * Tests the setCodeEtablissement() method.
	 *
	 * @return void
	 */
	public function testSetCodeEtablissement() {

		$obj = new DADSURetraiteLignesContrat();

		$obj->setCodeEtablissement(10);
		$this->assertEquals(10, $obj->getCodeEtablissement());
	}

	/**
	 * Tests the setCodeOrganisme() method.
	 *
	 * @return void
	 */
	public function testSetCodeOrganisme() {

		$obj = new DADSURetraiteLignesContrat();

		$obj->setCodeOrganisme("codeOrganisme");
		$this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
	}

	/**
	 * Tests the setDesignationCommerciale() method.
	 *
	 * @return void
	 */
	public function testSetDesignationCommerciale() {

		$obj = new DADSURetraiteLignesContrat();

		$obj->setDesignationCommerciale("designationCommerciale");
		$this->assertEquals("designationCommerciale", $obj->getDesignationCommerciale());
	}

	/**
	 * Tests the setRefContrat() method.
	 *
	 * @return void
	 */
	public function testSetRefContrat() {

		$obj = new DADSURetraiteLignesContrat();

		$obj->setRefContrat("refContrat");
		$this->assertEquals("refContrat", $obj->getRefContrat());
	}

}
