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

use DateTime;
use WBW\Library\Core\Quadratus\Model\QGI\BudgetL;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Budget l model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class BudgetLTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new BudgetL();

		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeCollab());
		$this->assertNull($obj->getCodeMission());
		$this->assertNull($obj->getCodeTVA());
		$this->assertNull($obj->getCodeTravail());
		$this->assertNull($obj->getHSoldees());
		$this->assertNull($obj->getNbrHeures());
		$this->assertNull($obj->getNiveau());
		$this->assertNull($obj->getNomTravail());
		$this->assertNull($obj->getNumLigne());
		$this->assertNull($obj->getNumUniq());
		$this->assertNull($obj->getPeriode());
		$this->assertNull($obj->getPrixHeure());
		$this->assertNull($obj->getQuantite());
		$this->assertNull($obj->getTypeAffectation());
		$this->assertNull($obj->getUniqIdLM());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new BudgetL();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeCollab() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollab() {

		$obj = new BudgetL();

		$obj->setCodeCollab("codeCollab");
		$this->assertEquals("codeCollab", $obj->getCodeCollab());
	}

	/**
	 * Tests the setCodeMission() method.
	 *
	 * @return void
	 */
	public function testSetCodeMission() {

		$obj = new BudgetL();

		$obj->setCodeMission("codeMission");
		$this->assertEquals("codeMission", $obj->getCodeMission());
	}

	/**
	 * Tests the setCodeTVA() method.
	 *
	 * @return void
	 */
	public function testSetCodeTVA() {

		$obj = new BudgetL();

		$obj->setCodeTVA("codeTVA");
		$this->assertEquals("codeTVA", $obj->getCodeTVA());
	}

	/**
	 * Tests the setCodeTravail() method.
	 *
	 * @return void
	 */
	public function testSetCodeTravail() {

		$obj = new BudgetL();

		$obj->setCodeTravail("codeTravail");
		$this->assertEquals("codeTravail", $obj->getCodeTravail());
	}

	/**
	 * Tests the setHSoldees() method.
	 *
	 * @return void
	 */
	public function testSetHSoldees() {

		$obj = new BudgetL();

		$obj->setHSoldees(true);
		$this->assertEquals(true, $obj->getHSoldees());
	}

	/**
	 * Tests the setNbrHeures() method.
	 *
	 * @return void
	 */
	public function testSetNbrHeures() {

		$obj = new BudgetL();

		$obj->setNbrHeures(10.092018);
		$this->assertEquals(10.092018, $obj->getNbrHeures());
	}

	/**
	 * Tests the setNiveau() method.
	 *
	 * @return void
	 */
	public function testSetNiveau() {

		$obj = new BudgetL();

		$obj->setNiveau(10);
		$this->assertEquals(10, $obj->getNiveau());
	}

	/**
	 * Tests the setNomTravail() method.
	 *
	 * @return void
	 */
	public function testSetNomTravail() {

		$obj = new BudgetL();

		$obj->setNomTravail("nomTravail");
		$this->assertEquals("nomTravail", $obj->getNomTravail());
	}

	/**
	 * Tests the setNumLigne() method.
	 *
	 * @return void
	 */
	public function testSetNumLigne() {

		$obj = new BudgetL();

		$obj->setNumLigne(10);
		$this->assertEquals(10, $obj->getNumLigne());
	}

	/**
	 * Tests the setNumUniq() method.
	 *
	 * @return void
	 */
	public function testSetNumUniq() {

		$obj = new BudgetL();

		$obj->setNumUniq("numUniq");
		$this->assertEquals("numUniq", $obj->getNumUniq());
	}

	/**
	 * Tests the setPeriode() method.
	 *
	 * @return void
	 */
	public function testSetPeriode() {

		$obj = new BudgetL();

		$obj->setPeriode(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
	}

	/**
	 * Tests the setPrixHeure() method.
	 *
	 * @return void
	 */
	public function testSetPrixHeure() {

		$obj = new BudgetL();

		$obj->setPrixHeure(10.092018);
		$this->assertEquals(10.092018, $obj->getPrixHeure());
	}

	/**
	 * Tests the setQuantite() method.
	 *
	 * @return void
	 */
	public function testSetQuantite() {

		$obj = new BudgetL();

		$obj->setQuantite(10.092018);
		$this->assertEquals(10.092018, $obj->getQuantite());
	}

	/**
	 * Tests the setTypeAffectation() method.
	 *
	 * @return void
	 */
	public function testSetTypeAffectation() {

		$obj = new BudgetL();

		$obj->setTypeAffectation("typeAffectation");
		$this->assertEquals("typeAffectation", $obj->getTypeAffectation());
	}

	/**
	 * Tests the setUniqIdLM() method.
	 *
	 * @return void
	 */
	public function testSetUniqIdLM() {

		$obj = new BudgetL();

		$obj->setUniqIdLM("uniqIdLM");
		$this->assertEquals("uniqIdLM", $obj->getUniqIdLM());
	}

}
