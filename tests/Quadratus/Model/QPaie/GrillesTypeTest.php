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
use WBW\Library\Core\Quadratus\Model\QPaie\GrillesType;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Grilles type model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class GrillesTypeTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new GrillesType();

		$this->assertNull($obj->getCodeLibHNuit());
		$this->assertNull($obj->getContingentHSupRC());
		$this->assertNull($obj->getContingentHSupRCIT());
		$this->assertNull($obj->getDateApplication());
		$this->assertNull($obj->getDateFin());
		$this->assertNull($obj->getDureeHebdo());
		$this->assertNull($obj->getDureeMaxHebdo());
		$this->assertNull($obj->getDureeMaxHebdoModul());
		$this->assertNull($obj->getDureeMaxMens());
		$this->assertNull($obj->getDureeMoyHebdo1());
		$this->assertNull($obj->getDureeMoyHebdo2());
		$this->assertNull($obj->getDureeMoyPeriode1());
		$this->assertNull($obj->getDureeMoyPeriode2());
		$this->assertNull($obj->getGestionHNuit());
		$this->assertNull($obj->getGestionJFNT());
		$this->assertNull($obj->getGestionPlagesHoraires());
		$this->assertNull($obj->getHNuitDeb());
		$this->assertNull($obj->getHNuitFin());
		$this->assertNull($obj->getHNuitTxMajo());
		$this->assertNull($obj->getHebdoMens());
		$this->assertNull($obj->getModulation());
		$this->assertNull($obj->getNbHJF1());
		$this->assertNull($obj->getNbHJF2());
		$this->assertNull($obj->getNbHJF3());
		$this->assertNull($obj->getNbHJF4());
		$this->assertNull($obj->getNbHJF5());
		$this->assertNull($obj->getNbHJF6());
		$this->assertNull($obj->getNbHJF7());
		$this->assertNull($obj->getNbHeuresDansJour());
		$this->assertNull($obj->getNumeroGrilleType());
		$this->assertNull($obj->getReposRecup());
		$this->assertNull($obj->getTauxReposComp());
	}

	/**
	 * Tests the setCodeLibHNuit() method.
	 *
	 * @return void
	 */
	public function testSetCodeLibHNuit() {

		$obj = new GrillesType();

		$obj->setCodeLibHNuit("codeLibHNuit");
		$this->assertEquals("codeLibHNuit", $obj->getCodeLibHNuit());
	}

	/**
	 * Tests the setContingentHSupRC() method.
	 *
	 * @return void
	 */
	public function testSetContingentHSupRC() {

		$obj = new GrillesType();

		$obj->setContingentHSupRC(10.092018);
		$this->assertEquals(10.092018, $obj->getContingentHSupRC());
	}

	/**
	 * Tests the setContingentHSupRCIT() method.
	 *
	 * @return void
	 */
	public function testSetContingentHSupRCIT() {

		$obj = new GrillesType();

		$obj->setContingentHSupRCIT(10.092018);
		$this->assertEquals(10.092018, $obj->getContingentHSupRCIT());
	}

	/**
	 * Tests the setDateApplication() method.
	 *
	 * @return void
	 */
	public function testSetDateApplication() {

		$obj = new GrillesType();

		$obj->setDateApplication(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateApplication());
	}

	/**
	 * Tests the setDateFin() method.
	 *
	 * @return void
	 */
	public function testSetDateFin() {

		$obj = new GrillesType();

		$obj->setDateFin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFin());
	}

	/**
	 * Tests the setDureeHebdo() method.
	 *
	 * @return void
	 */
	public function testSetDureeHebdo() {

		$obj = new GrillesType();

		$obj->setDureeHebdo(10.092018);
		$this->assertEquals(10.092018, $obj->getDureeHebdo());
	}

	/**
	 * Tests the setDureeMaxHebdo() method.
	 *
	 * @return void
	 */
	public function testSetDureeMaxHebdo() {

		$obj = new GrillesType();

		$obj->setDureeMaxHebdo(10.092018);
		$this->assertEquals(10.092018, $obj->getDureeMaxHebdo());
	}

	/**
	 * Tests the setDureeMaxHebdoModul() method.
	 *
	 * @return void
	 */
	public function testSetDureeMaxHebdoModul() {

		$obj = new GrillesType();

		$obj->setDureeMaxHebdoModul(10.092018);
		$this->assertEquals(10.092018, $obj->getDureeMaxHebdoModul());
	}

	/**
	 * Tests the setDureeMaxMens() method.
	 *
	 * @return void
	 */
	public function testSetDureeMaxMens() {

		$obj = new GrillesType();

		$obj->setDureeMaxMens(10.092018);
		$this->assertEquals(10.092018, $obj->getDureeMaxMens());
	}

	/**
	 * Tests the setDureeMoyHebdo1() method.
	 *
	 * @return void
	 */
	public function testSetDureeMoyHebdo1() {

		$obj = new GrillesType();

		$obj->setDureeMoyHebdo1(10.092018);
		$this->assertEquals(10.092018, $obj->getDureeMoyHebdo1());
	}

	/**
	 * Tests the setDureeMoyHebdo2() method.
	 *
	 * @return void
	 */
	public function testSetDureeMoyHebdo2() {

		$obj = new GrillesType();

		$obj->setDureeMoyHebdo2(10.092018);
		$this->assertEquals(10.092018, $obj->getDureeMoyHebdo2());
	}

	/**
	 * Tests the setDureeMoyPeriode1() method.
	 *
	 * @return void
	 */
	public function testSetDureeMoyPeriode1() {

		$obj = new GrillesType();

		$obj->setDureeMoyPeriode1(10);
		$this->assertEquals(10, $obj->getDureeMoyPeriode1());
	}

	/**
	 * Tests the setDureeMoyPeriode2() method.
	 *
	 * @return void
	 */
	public function testSetDureeMoyPeriode2() {

		$obj = new GrillesType();

		$obj->setDureeMoyPeriode2(10);
		$this->assertEquals(10, $obj->getDureeMoyPeriode2());
	}

	/**
	 * Tests the setGestionHNuit() method.
	 *
	 * @return void
	 */
	public function testSetGestionHNuit() {

		$obj = new GrillesType();

		$obj->setGestionHNuit(true);
		$this->assertEquals(true, $obj->getGestionHNuit());
	}

	/**
	 * Tests the setGestionJFNT() method.
	 *
	 * @return void
	 */
	public function testSetGestionJFNT() {

		$obj = new GrillesType();

		$obj->setGestionJFNT(true);
		$this->assertEquals(true, $obj->getGestionJFNT());
	}

	/**
	 * Tests the setGestionPlagesHoraires() method.
	 *
	 * @return void
	 */
	public function testSetGestionPlagesHoraires() {

		$obj = new GrillesType();

		$obj->setGestionPlagesHoraires(true);
		$this->assertEquals(true, $obj->getGestionPlagesHoraires());
	}

	/**
	 * Tests the setHNuitDeb() method.
	 *
	 * @return void
	 */
	public function testSetHNuitDeb() {

		$obj = new GrillesType();

		$obj->setHNuitDeb("hNuitDeb");
		$this->assertEquals("hNuitDeb", $obj->getHNuitDeb());
	}

	/**
	 * Tests the setHNuitFin() method.
	 *
	 * @return void
	 */
	public function testSetHNuitFin() {

		$obj = new GrillesType();

		$obj->setHNuitFin("hNuitFin");
		$this->assertEquals("hNuitFin", $obj->getHNuitFin());
	}

	/**
	 * Tests the setHNuitTxMajo() method.
	 *
	 * @return void
	 */
	public function testSetHNuitTxMajo() {

		$obj = new GrillesType();

		$obj->setHNuitTxMajo(10.092018);
		$this->assertEquals(10.092018, $obj->getHNuitTxMajo());
	}

	/**
	 * Tests the setHebdoMens() method.
	 *
	 * @return void
	 */
	public function testSetHebdoMens() {

		$obj = new GrillesType();

		$obj->setHebdoMens("hebdoMens");
		$this->assertEquals("hebdoMens", $obj->getHebdoMens());
	}

	/**
	 * Tests the setModulation() method.
	 *
	 * @return void
	 */
	public function testSetModulation() {

		$obj = new GrillesType();

		$obj->setModulation(true);
		$this->assertEquals(true, $obj->getModulation());
	}

	/**
	 * Tests the setNbHJF1() method.
	 *
	 * @return void
	 */
	public function testSetNbHJF1() {

		$obj = new GrillesType();

		$obj->setNbHJF1(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHJF1());
	}

	/**
	 * Tests the setNbHJF2() method.
	 *
	 * @return void
	 */
	public function testSetNbHJF2() {

		$obj = new GrillesType();

		$obj->setNbHJF2(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHJF2());
	}

	/**
	 * Tests the setNbHJF3() method.
	 *
	 * @return void
	 */
	public function testSetNbHJF3() {

		$obj = new GrillesType();

		$obj->setNbHJF3(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHJF3());
	}

	/**
	 * Tests the setNbHJF4() method.
	 *
	 * @return void
	 */
	public function testSetNbHJF4() {

		$obj = new GrillesType();

		$obj->setNbHJF4(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHJF4());
	}

	/**
	 * Tests the setNbHJF5() method.
	 *
	 * @return void
	 */
	public function testSetNbHJF5() {

		$obj = new GrillesType();

		$obj->setNbHJF5(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHJF5());
	}

	/**
	 * Tests the setNbHJF6() method.
	 *
	 * @return void
	 */
	public function testSetNbHJF6() {

		$obj = new GrillesType();

		$obj->setNbHJF6(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHJF6());
	}

	/**
	 * Tests the setNbHJF7() method.
	 *
	 * @return void
	 */
	public function testSetNbHJF7() {

		$obj = new GrillesType();

		$obj->setNbHJF7(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHJF7());
	}

	/**
	 * Tests the setNbHeuresDansJour() method.
	 *
	 * @return void
	 */
	public function testSetNbHeuresDansJour() {

		$obj = new GrillesType();

		$obj->setNbHeuresDansJour(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHeuresDansJour());
	}

	/**
	 * Tests the setNumeroGrilleType() method.
	 *
	 * @return void
	 */
	public function testSetNumeroGrilleType() {

		$obj = new GrillesType();

		$obj->setNumeroGrilleType(10);
		$this->assertEquals(10, $obj->getNumeroGrilleType());
	}

	/**
	 * Tests the setReposRecup() method.
	 *
	 * @return void
	 */
	public function testSetReposRecup() {

		$obj = new GrillesType();

		$obj->setReposRecup(true);
		$this->assertEquals(true, $obj->getReposRecup());
	}

	/**
	 * Tests the setTauxReposComp() method.
	 *
	 * @return void
	 */
	public function testSetTauxReposComp() {

		$obj = new GrillesType();

		$obj->setTauxReposComp(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxReposComp());
	}

}
