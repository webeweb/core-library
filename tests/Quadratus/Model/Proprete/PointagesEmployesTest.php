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
use WBW\Library\Core\Quadratus\Model\Proprete\PointagesEmployes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Pointages employes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class PointagesEmployesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new PointagesEmployes();

		$this->assertNull($obj->getCodeCollaboValid());
		$this->assertNull($obj->getCodeCollaborateur());
		$this->assertNull($obj->getCodeEmploye());
		$this->assertNull($obj->getCompteurHeures());
		$this->assertNull($obj->getDateValidationSynchro());
		$this->assertNull($obj->getEtat());
		$this->assertNull($obj->getHPTheoNonAffectees());
		$this->assertNull($obj->getPeriode());
		$this->assertNull($obj->getUniqIDSynchro());
	}

	/**
	 * Tests the setCodeCollaboValid() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollaboValid() {

		$obj = new PointagesEmployes();

		$obj->setCodeCollaboValid("codeCollaboValid");
		$this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
	}

	/**
	 * Tests the setCodeCollaborateur() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollaborateur() {

		$obj = new PointagesEmployes();

		$obj->setCodeCollaborateur("codeCollaborateur");
		$this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
	}

	/**
	 * Tests the setCodeEmploye() method.
	 *
	 * @return void
	 */
	public function testSetCodeEmploye() {

		$obj = new PointagesEmployes();

		$obj->setCodeEmploye("codeEmploye");
		$this->assertEquals("codeEmploye", $obj->getCodeEmploye());
	}

	/**
	 * Tests the setCompteurHeures() method.
	 *
	 * @return void
	 */
	public function testSetCompteurHeures() {

		$obj = new PointagesEmployes();

		$obj->setCompteurHeures(10.092018);
		$this->assertEquals(10.092018, $obj->getCompteurHeures());
	}

	/**
	 * Tests the setDateValidationSynchro() method.
	 *
	 * @return void
	 */
	public function testSetDateValidationSynchro() {

		$obj = new PointagesEmployes();

		$obj->setDateValidationSynchro(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateValidationSynchro());
	}

	/**
	 * Tests the setEtat() method.
	 *
	 * @return void
	 */
	public function testSetEtat() {

		$obj = new PointagesEmployes();

		$obj->setEtat("etat");
		$this->assertEquals("etat", $obj->getEtat());
	}

	/**
	 * Tests the setHPTheoNonAffectees() method.
	 *
	 * @return void
	 */
	public function testSetHPTheoNonAffectees() {

		$obj = new PointagesEmployes();

		$obj->setHPTheoNonAffectees(10.092018);
		$this->assertEquals(10.092018, $obj->getHPTheoNonAffectees());
	}

	/**
	 * Tests the setPeriode() method.
	 *
	 * @return void
	 */
	public function testSetPeriode() {

		$obj = new PointagesEmployes();

		$obj->setPeriode(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
	}

	/**
	 * Tests the setUniqIDSynchro() method.
	 *
	 * @return void
	 */
	public function testSetUniqIDSynchro() {

		$obj = new PointagesEmployes();

		$obj->setUniqIDSynchro("uniqIDSynchro");
		$this->assertEquals("uniqIDSynchro", $obj->getUniqIDSynchro());
	}

}
