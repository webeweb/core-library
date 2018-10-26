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
use WBW\Library\Core\Quadratus\Model\QPaie\EnteteHeuresEffectuees;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Entete heures effectuees model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class EnteteHeuresEffectueesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new EnteteHeuresEffectuees();

		$this->assertNull($obj->getNumeroEmploye());
		$this->assertNull($obj->getPeriode());
		$this->assertNull($obj->getTransfere());
		$this->assertNull($obj->getTypeSaisie());
	}

	/**
	 * Tests the setNumeroEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNumeroEmploye() {

		$obj = new EnteteHeuresEffectuees();

		$obj->setNumeroEmploye("numeroEmploye");
		$this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
	}

	/**
	 * Tests the setPeriode() method.
	 *
	 * @return void
	 */
	public function testSetPeriode() {

		$obj = new EnteteHeuresEffectuees();

		$obj->setPeriode(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
	}

	/**
	 * Tests the setTransfere() method.
	 *
	 * @return void
	 */
	public function testSetTransfere() {

		$obj = new EnteteHeuresEffectuees();

		$obj->setTransfere("transfere");
		$this->assertEquals("transfere", $obj->getTransfere());
	}

	/**
	 * Tests the setTypeSaisie() method.
	 *
	 * @return void
	 */
	public function testSetTypeSaisie() {

		$obj = new EnteteHeuresEffectuees();

		$obj->setTypeSaisie("typeSaisie");
		$this->assertEquals("typeSaisie", $obj->getTypeSaisie());
	}

}
