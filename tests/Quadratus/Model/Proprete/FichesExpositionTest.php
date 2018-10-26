<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\Proprete;

use DateTime;
use WBW\Library\Core\Quadratus\Model\Proprete\FichesExposition;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Fiches exposition model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 * @final
 */
final class FichesExpositionTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new FichesExposition();

		$this->assertNull($obj->getCodeEmploye());
		$this->assertNull($obj->getCodePrestation());
		$this->assertNull($obj->getCodeProduit());
		$this->assertNull($obj->getDateCtrl());
		$this->assertNull($obj->getDateDebExpo());
		$this->assertNull($obj->getDateFiche());
		$this->assertNull($obj->getDateFinExpo());
		$this->assertNull($obj->getLstCodePhase());
		$this->assertNull($obj->getLstCodePrev());
		$this->assertNull($obj->getResuCtrl());
		$this->assertNull($obj->getTempsExposition());
	}

	/**
	 * Tests the setCodeEmploye() method.
	 *
	 * @return void
	 */
	public function testSetCodeEmploye() {

		$obj = new FichesExposition();

		$obj->setCodeEmploye("codeEmploye");
		$this->assertEquals("codeEmploye", $obj->getCodeEmploye());
	}

	/**
	 * Tests the setCodePrestation() method.
	 *
	 * @return void
	 */
	public function testSetCodePrestation() {

		$obj = new FichesExposition();

		$obj->setCodePrestation("codePrestation");
		$this->assertEquals("codePrestation", $obj->getCodePrestation());
	}

	/**
	 * Tests the setCodeProduit() method.
	 *
	 * @return void
	 */
	public function testSetCodeProduit() {

		$obj = new FichesExposition();

		$obj->setCodeProduit("codeProduit");
		$this->assertEquals("codeProduit", $obj->getCodeProduit());
	}

	/**
	 * Tests the setDateCtrl() method.
	 *
	 * @return void
	 */
	public function testSetDateCtrl() {

		$obj = new FichesExposition();

		$obj->setDateCtrl(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCtrl());
	}

	/**
	 * Tests the setDateDebExpo() method.
	 *
	 * @return void
	 */
	public function testSetDateDebExpo() {

		$obj = new FichesExposition();

		$obj->setDateDebExpo(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebExpo());
	}

	/**
	 * Tests the setDateFiche() method.
	 *
	 * @return void
	 */
	public function testSetDateFiche() {

		$obj = new FichesExposition();

		$obj->setDateFiche(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFiche());
	}

	/**
	 * Tests the setDateFinExpo() method.
	 *
	 * @return void
	 */
	public function testSetDateFinExpo() {

		$obj = new FichesExposition();

		$obj->setDateFinExpo(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinExpo());
	}

	/**
	 * Tests the setLstCodePhase() method.
	 *
	 * @return void
	 */
	public function testSetLstCodePhase() {

		$obj = new FichesExposition();

		$obj->setLstCodePhase("lstCodePhase");
		$this->assertEquals("lstCodePhase", $obj->getLstCodePhase());
	}

	/**
	 * Tests the setLstCodePrev() method.
	 *
	 * @return void
	 */
	public function testSetLstCodePrev() {

		$obj = new FichesExposition();

		$obj->setLstCodePrev("lstCodePrev");
		$this->assertEquals("lstCodePrev", $obj->getLstCodePrev());
	}

	/**
	 * Tests the setResuCtrl() method.
	 *
	 * @return void
	 */
	public function testSetResuCtrl() {

		$obj = new FichesExposition();

		$obj->setResuCtrl("resuCtrl");
		$this->assertEquals("resuCtrl", $obj->getResuCtrl());
	}

	/**
	 * Tests the setTempsExposition() method.
	 *
	 * @return void
	 */
	public function testSetTempsExposition() {

		$obj = new FichesExposition();

		$obj->setTempsExposition(10.092018);
		$this->assertEquals(10.092018, $obj->getTempsExposition());
	}

}
