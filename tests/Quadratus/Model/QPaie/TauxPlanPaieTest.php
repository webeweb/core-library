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
use WBW\Library\Core\Quadratus\Model\QPaie\TauxPlanPaie;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Taux plan paie model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class TauxPlanPaieTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new TauxPlanPaie();

		$this->assertNull($obj->getAPartirDe());
		$this->assertNull($obj->getCodeEtablissement());
		$this->assertNull($obj->getFormatNonEtendu());
		$this->assertNull($obj->getNumeroTaux());
		$this->assertNull($obj->getTauxPatronal());
		$this->assertNull($obj->getTauxSalarial());
	}

	/**
	 * Tests the setAPartirDe() method.
	 *
	 * @return void
	 */
	public function testSetAPartirDe() {

		$obj = new TauxPlanPaie();

		$obj->setAPartirDe(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getAPartirDe());
	}

	/**
	 * Tests the setCodeEtablissement() method.
	 *
	 * @return void
	 */
	public function testSetCodeEtablissement() {

		$obj = new TauxPlanPaie();

		$obj->setCodeEtablissement(10);
		$this->assertEquals(10, $obj->getCodeEtablissement());
	}

	/**
	 * Tests the setFormatNonEtendu() method.
	 *
	 * @return void
	 */
	public function testSetFormatNonEtendu() {

		$obj = new TauxPlanPaie();

		$obj->setFormatNonEtendu(true);
		$this->assertEquals(true, $obj->getFormatNonEtendu());
	}

	/**
	 * Tests the setNumeroTaux() method.
	 *
	 * @return void
	 */
	public function testSetNumeroTaux() {

		$obj = new TauxPlanPaie();

		$obj->setNumeroTaux(10);
		$this->assertEquals(10, $obj->getNumeroTaux());
	}

	/**
	 * Tests the setTauxPatronal() method.
	 *
	 * @return void
	 */
	public function testSetTauxPatronal() {

		$obj = new TauxPlanPaie();

		$obj->setTauxPatronal(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxPatronal());
	}

	/**
	 * Tests the setTauxSalarial() method.
	 *
	 * @return void
	 */
	public function testSetTauxSalarial() {

		$obj = new TauxPlanPaie();

		$obj->setTauxSalarial(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxSalarial());
	}

}
