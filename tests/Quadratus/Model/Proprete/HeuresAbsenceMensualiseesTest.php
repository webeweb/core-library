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
use WBW\Library\Core\Quadratus\Model\Proprete\HeuresAbsenceMensualisees;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Heures absence mensualisees model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class HeuresAbsenceMensualiseesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new HeuresAbsenceMensualisees();

		$this->assertNull($obj->getCodeAbsence());
		$this->assertNull($obj->getCodeAffaire());
		$this->assertNull($obj->getCodeChantier());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeCollaboValid());
		$this->assertNull($obj->getCodeCollaborateur());
		$this->assertNull($obj->getCodeEmploye());
		$this->assertNull($obj->getCodeTache());
		$this->assertNull($obj->getDateDebutAbs());
		$this->assertNull($obj->getDateFinAbs());
		$this->assertNull($obj->getDateValidationSynchro());
		$this->assertNull($obj->getEtat());
		$this->assertNull($obj->getHAbsMens());
		$this->assertNull($obj->getNumBT());
		$this->assertNull($obj->getPeriode());
		$this->assertNull($obj->getUniqIDSynchro());
	}

	/**
	 * Tests the setCodeAbsence() method.
	 *
	 * @return void
	 */
	public function testSetCodeAbsence() {

		$obj = new HeuresAbsenceMensualisees();

		$obj->setCodeAbsence("codeAbsence");
		$this->assertEquals("codeAbsence", $obj->getCodeAbsence());
	}

	/**
	 * Tests the setCodeAffaire() method.
	 *
	 * @return void
	 */
	public function testSetCodeAffaire() {

		$obj = new HeuresAbsenceMensualisees();

		$obj->setCodeAffaire("codeAffaire");
		$this->assertEquals("codeAffaire", $obj->getCodeAffaire());
	}

	/**
	 * Tests the setCodeChantier() method.
	 *
	 * @return void
	 */
	public function testSetCodeChantier() {

		$obj = new HeuresAbsenceMensualisees();

		$obj->setCodeChantier("codeChantier");
		$this->assertEquals("codeChantier", $obj->getCodeChantier());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new HeuresAbsenceMensualisees();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeCollaboValid() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollaboValid() {

		$obj = new HeuresAbsenceMensualisees();

		$obj->setCodeCollaboValid("codeCollaboValid");
		$this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
	}

	/**
	 * Tests the setCodeCollaborateur() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollaborateur() {

		$obj = new HeuresAbsenceMensualisees();

		$obj->setCodeCollaborateur("codeCollaborateur");
		$this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
	}

	/**
	 * Tests the setCodeEmploye() method.
	 *
	 * @return void
	 */
	public function testSetCodeEmploye() {

		$obj = new HeuresAbsenceMensualisees();

		$obj->setCodeEmploye("codeEmploye");
		$this->assertEquals("codeEmploye", $obj->getCodeEmploye());
	}

	/**
	 * Tests the setCodeTache() method.
	 *
	 * @return void
	 */
	public function testSetCodeTache() {

		$obj = new HeuresAbsenceMensualisees();

		$obj->setCodeTache("codeTache");
		$this->assertEquals("codeTache", $obj->getCodeTache());
	}

	/**
	 * Tests the setDateDebutAbs() method.
	 *
	 * @return void
	 */
	public function testSetDateDebutAbs() {

		$obj = new HeuresAbsenceMensualisees();

		$obj->setDateDebutAbs(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebutAbs());
	}

	/**
	 * Tests the setDateFinAbs() method.
	 *
	 * @return void
	 */
	public function testSetDateFinAbs() {

		$obj = new HeuresAbsenceMensualisees();

		$obj->setDateFinAbs(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinAbs());
	}

	/**
	 * Tests the setDateValidationSynchro() method.
	 *
	 * @return void
	 */
	public function testSetDateValidationSynchro() {

		$obj = new HeuresAbsenceMensualisees();

		$obj->setDateValidationSynchro(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateValidationSynchro());
	}

	/**
	 * Tests the setEtat() method.
	 *
	 * @return void
	 */
	public function testSetEtat() {

		$obj = new HeuresAbsenceMensualisees();

		$obj->setEtat("etat");
		$this->assertEquals("etat", $obj->getEtat());
	}

	/**
	 * Tests the setHAbsMens() method.
	 *
	 * @return void
	 */
	public function testSetHAbsMens() {

		$obj = new HeuresAbsenceMensualisees();

		$obj->setHAbsMens(10.092018);
		$this->assertEquals(10.092018, $obj->getHAbsMens());
	}

	/**
	 * Tests the setNumBT() method.
	 *
	 * @return void
	 */
	public function testSetNumBT() {

		$obj = new HeuresAbsenceMensualisees();

		$obj->setNumBT(10);
		$this->assertEquals(10, $obj->getNumBT());
	}

	/**
	 * Tests the setPeriode() method.
	 *
	 * @return void
	 */
	public function testSetPeriode() {

		$obj = new HeuresAbsenceMensualisees();

		$obj->setPeriode(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
	}

	/**
	 * Tests the setUniqIDSynchro() method.
	 *
	 * @return void
	 */
	public function testSetUniqIDSynchro() {

		$obj = new HeuresAbsenceMensualisees();

		$obj->setUniqIDSynchro("uniqIDSynchro");
		$this->assertEquals("uniqIDSynchro", $obj->getUniqIDSynchro());
	}

}
