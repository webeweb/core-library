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
use WBW\Library\Core\Quadratus\Model\QPaie\DADSUSituation;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * D a d s u situation model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class DADSUSituationTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new DADSUSituation();

		$this->assertNull($obj->getCodeDebutPeriode());
		$this->assertNull($obj->getCodeOrganisme());
		$this->assertNull($obj->getCodeTempsArret());
		$this->assertNull($obj->getDateCtrlNorme());
		$this->assertNull($obj->getDebutPeriode());
		$this->assertNull($obj->getDepuisCalcul());
		$this->assertNull($obj->getEtatCtrlNorme());
		$this->assertNull($obj->getFinPeriode());
		$this->assertNull($obj->getMontant1());
		$this->assertNull($obj->getMontant2());
		$this->assertNull($obj->getMontantEmployeur());
		$this->assertNull($obj->getMotifSituation());
		$this->assertNull($obj->getNumero());
		$this->assertNull($obj->getNumeroOrdre());
		$this->assertNull($obj->getQualifUniteTemps());
		$this->assertNull($obj->getTempsArret());
		$this->assertNull($obj->getTypeBase());
	}

	/**
	 * Tests the setCodeDebutPeriode() method.
	 *
	 * @return void
	 */
	public function testSetCodeDebutPeriode() {

		$obj = new DADSUSituation();

		$obj->setCodeDebutPeriode("codeDebutPeriode");
		$this->assertEquals("codeDebutPeriode", $obj->getCodeDebutPeriode());
	}

	/**
	 * Tests the setCodeOrganisme() method.
	 *
	 * @return void
	 */
	public function testSetCodeOrganisme() {

		$obj = new DADSUSituation();

		$obj->setCodeOrganisme("codeOrganisme");
		$this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
	}

	/**
	 * Tests the setCodeTempsArret() method.
	 *
	 * @return void
	 */
	public function testSetCodeTempsArret() {

		$obj = new DADSUSituation();

		$obj->setCodeTempsArret("codeTempsArret");
		$this->assertEquals("codeTempsArret", $obj->getCodeTempsArret());
	}

	/**
	 * Tests the setDateCtrlNorme() method.
	 *
	 * @return void
	 */
	public function testSetDateCtrlNorme() {

		$obj = new DADSUSituation();

		$obj->setDateCtrlNorme(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCtrlNorme());
	}

	/**
	 * Tests the setDebutPeriode() method.
	 *
	 * @return void
	 */
	public function testSetDebutPeriode() {

		$obj = new DADSUSituation();

		$obj->setDebutPeriode(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDebutPeriode());
	}

	/**
	 * Tests the setDepuisCalcul() method.
	 *
	 * @return void
	 */
	public function testSetDepuisCalcul() {

		$obj = new DADSUSituation();

		$obj->setDepuisCalcul(true);
		$this->assertEquals(true, $obj->getDepuisCalcul());
	}

	/**
	 * Tests the setEtatCtrlNorme() method.
	 *
	 * @return void
	 */
	public function testSetEtatCtrlNorme() {

		$obj = new DADSUSituation();

		$obj->setEtatCtrlNorme("etatCtrlNorme");
		$this->assertEquals("etatCtrlNorme", $obj->getEtatCtrlNorme());
	}

	/**
	 * Tests the setFinPeriode() method.
	 *
	 * @return void
	 */
	public function testSetFinPeriode() {

		$obj = new DADSUSituation();

		$obj->setFinPeriode(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getFinPeriode());
	}

	/**
	 * Tests the setMontant1() method.
	 *
	 * @return void
	 */
	public function testSetMontant1() {

		$obj = new DADSUSituation();

		$obj->setMontant1(10.092018);
		$this->assertEquals(10.092018, $obj->getMontant1());
	}

	/**
	 * Tests the setMontant2() method.
	 *
	 * @return void
	 */
	public function testSetMontant2() {

		$obj = new DADSUSituation();

		$obj->setMontant2(10.092018);
		$this->assertEquals(10.092018, $obj->getMontant2());
	}

	/**
	 * Tests the setMontantEmployeur() method.
	 *
	 * @return void
	 */
	public function testSetMontantEmployeur() {

		$obj = new DADSUSituation();

		$obj->setMontantEmployeur(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantEmployeur());
	}

	/**
	 * Tests the setMotifSituation() method.
	 *
	 * @return void
	 */
	public function testSetMotifSituation() {

		$obj = new DADSUSituation();

		$obj->setMotifSituation("motifSituation");
		$this->assertEquals("motifSituation", $obj->getMotifSituation());
	}

	/**
	 * Tests the setNumero() method.
	 *
	 * @return void
	 */
	public function testSetNumero() {

		$obj = new DADSUSituation();

		$obj->setNumero("numero");
		$this->assertEquals("numero", $obj->getNumero());
	}

	/**
	 * Tests the setNumeroOrdre() method.
	 *
	 * @return void
	 */
	public function testSetNumeroOrdre() {

		$obj = new DADSUSituation();

		$obj->setNumeroOrdre(10);
		$this->assertEquals(10, $obj->getNumeroOrdre());
	}

	/**
	 * Tests the setQualifUniteTemps() method.
	 *
	 * @return void
	 */
	public function testSetQualifUniteTemps() {

		$obj = new DADSUSituation();

		$obj->setQualifUniteTemps("qualifUniteTemps");
		$this->assertEquals("qualifUniteTemps", $obj->getQualifUniteTemps());
	}

	/**
	 * Tests the setTempsArret() method.
	 *
	 * @return void
	 */
	public function testSetTempsArret() {

		$obj = new DADSUSituation();

		$obj->setTempsArret(10.092018);
		$this->assertEquals(10.092018, $obj->getTempsArret());
	}

	/**
	 * Tests the setTypeBase() method.
	 *
	 * @return void
	 */
	public function testSetTypeBase() {

		$obj = new DADSUSituation();

		$obj->setTypeBase("typeBase");
		$this->assertEquals("typeBase", $obj->getTypeBase());
	}

}
