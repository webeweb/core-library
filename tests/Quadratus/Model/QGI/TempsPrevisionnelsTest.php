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

use WBW\Library\Core\Quadratus\Model\QGI\TempsPrevisionnels;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Temps previsionnels model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class TempsPrevisionnelsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new TempsPrevisionnels();

		$this->assertNull($obj->getCodeAffaire());
		$this->assertNull($obj->getCodeAvenant());
		$this->assertNull($obj->getCodePhase());
		$this->assertNull($obj->getCodeTache());
		$this->assertNull($obj->getCoutHoraire());
		$this->assertNull($obj->getNbHeures());
	}

	/**
	 * Tests the setCodeAffaire() method.
	 *
	 * @return void
	 */
	public function testSetCodeAffaire() {

		$obj = new TempsPrevisionnels();

		$obj->setCodeAffaire("codeAffaire");
		$this->assertEquals("codeAffaire", $obj->getCodeAffaire());
	}

	/**
	 * Tests the setCodeAvenant() method.
	 *
	 * @return void
	 */
	public function testSetCodeAvenant() {

		$obj = new TempsPrevisionnels();

		$obj->setCodeAvenant("codeAvenant");
		$this->assertEquals("codeAvenant", $obj->getCodeAvenant());
	}

	/**
	 * Tests the setCodePhase() method.
	 *
	 * @return void
	 */
	public function testSetCodePhase() {

		$obj = new TempsPrevisionnels();

		$obj->setCodePhase("codePhase");
		$this->assertEquals("codePhase", $obj->getCodePhase());
	}

	/**
	 * Tests the setCodeTache() method.
	 *
	 * @return void
	 */
	public function testSetCodeTache() {

		$obj = new TempsPrevisionnels();

		$obj->setCodeTache("codeTache");
		$this->assertEquals("codeTache", $obj->getCodeTache());
	}

	/**
	 * Tests the setCoutHoraire() method.
	 *
	 * @return void
	 */
	public function testSetCoutHoraire() {

		$obj = new TempsPrevisionnels();

		$obj->setCoutHoraire(10.092018);
		$this->assertEquals(10.092018, $obj->getCoutHoraire());
	}

	/**
	 * Tests the setNbHeures() method.
	 *
	 * @return void
	 */
	public function testSetNbHeures() {

		$obj = new TempsPrevisionnels();

		$obj->setNbHeures(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHeures());
	}

}
