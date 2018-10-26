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

use WBW\Library\Core\Quadratus\Model\QPaie\DADSUPrevoyanceLignesContrat;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * D a d s u prevoyance lignes contrat model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class DADSUPrevoyanceLignesContratTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new DADSUPrevoyanceLignesContrat();

		$this->assertNull($obj->getCodeDelegGestion());
		$this->assertNull($obj->getCodeLibelle());
		$this->assertNull($obj->getCodeOption());
		$this->assertNull($obj->getCodeOrganisme());
		$this->assertNull($obj->getCodePopulation());
		$this->assertNull($obj->getIntitule());
		$this->assertNull($obj->getPeriodeAffectation());
		$this->assertNull($obj->getQualificationFraisSante());
		$this->assertNull($obj->getRefContrat());
		$this->assertNull($obj->getTypeCotis());
		$this->assertNull($obj->getTypePopulation());
		$this->assertNull($obj->getUniteDateAncienBranche());
		$this->assertNull($obj->getUniteDateAncienCollege());
		$this->assertNull($obj->getUniteDateAncienPoste());
		$this->assertNull($obj->getUnitePremDateEntree());
		$this->assertNull($obj->getValeurCotis());
		$this->assertNull($obj->getValeurCotisInitiale());
	}

	/**
	 * Tests the setCodeDelegGestion() method.
	 *
	 * @return void
	 */
	public function testSetCodeDelegGestion() {

		$obj = new DADSUPrevoyanceLignesContrat();

		$obj->setCodeDelegGestion("codeDelegGestion");
		$this->assertEquals("codeDelegGestion", $obj->getCodeDelegGestion());
	}

	/**
	 * Tests the setCodeLibelle() method.
	 *
	 * @return void
	 */
	public function testSetCodeLibelle() {

		$obj = new DADSUPrevoyanceLignesContrat();

		$obj->setCodeLibelle("codeLibelle");
		$this->assertEquals("codeLibelle", $obj->getCodeLibelle());
	}

	/**
	 * Tests the setCodeOption() method.
	 *
	 * @return void
	 */
	public function testSetCodeOption() {

		$obj = new DADSUPrevoyanceLignesContrat();

		$obj->setCodeOption("codeOption");
		$this->assertEquals("codeOption", $obj->getCodeOption());
	}

	/**
	 * Tests the setCodeOrganisme() method.
	 *
	 * @return void
	 */
	public function testSetCodeOrganisme() {

		$obj = new DADSUPrevoyanceLignesContrat();

		$obj->setCodeOrganisme("codeOrganisme");
		$this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
	}

	/**
	 * Tests the setCodePopulation() method.
	 *
	 * @return void
	 */
	public function testSetCodePopulation() {

		$obj = new DADSUPrevoyanceLignesContrat();

		$obj->setCodePopulation("codePopulation");
		$this->assertEquals("codePopulation", $obj->getCodePopulation());
	}

	/**
	 * Tests the setIntitule() method.
	 *
	 * @return void
	 */
	public function testSetIntitule() {

		$obj = new DADSUPrevoyanceLignesContrat();

		$obj->setIntitule("intitule");
		$this->assertEquals("intitule", $obj->getIntitule());
	}

	/**
	 * Tests the setPeriodeAffectation() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeAffectation() {

		$obj = new DADSUPrevoyanceLignesContrat();

		$obj->setPeriodeAffectation("periodeAffectation");
		$this->assertEquals("periodeAffectation", $obj->getPeriodeAffectation());
	}

	/**
	 * Tests the setQualificationFraisSante() method.
	 *
	 * @return void
	 */
	public function testSetQualificationFraisSante() {

		$obj = new DADSUPrevoyanceLignesContrat();

		$obj->setQualificationFraisSante("qualificationFraisSante");
		$this->assertEquals("qualificationFraisSante", $obj->getQualificationFraisSante());
	}

	/**
	 * Tests the setRefContrat() method.
	 *
	 * @return void
	 */
	public function testSetRefContrat() {

		$obj = new DADSUPrevoyanceLignesContrat();

		$obj->setRefContrat("refContrat");
		$this->assertEquals("refContrat", $obj->getRefContrat());
	}

	/**
	 * Tests the setTypeCotis() method.
	 *
	 * @return void
	 */
	public function testSetTypeCotis() {

		$obj = new DADSUPrevoyanceLignesContrat();

		$obj->setTypeCotis("typeCotis");
		$this->assertEquals("typeCotis", $obj->getTypeCotis());
	}

	/**
	 * Tests the setTypePopulation() method.
	 *
	 * @return void
	 */
	public function testSetTypePopulation() {

		$obj = new DADSUPrevoyanceLignesContrat();

		$obj->setTypePopulation("typePopulation");
		$this->assertEquals("typePopulation", $obj->getTypePopulation());
	}

	/**
	 * Tests the setUniteDateAncienBranche() method.
	 *
	 * @return void
	 */
	public function testSetUniteDateAncienBranche() {

		$obj = new DADSUPrevoyanceLignesContrat();

		$obj->setUniteDateAncienBranche("uniteDateAncienBranche");
		$this->assertEquals("uniteDateAncienBranche", $obj->getUniteDateAncienBranche());
	}

	/**
	 * Tests the setUniteDateAncienCollege() method.
	 *
	 * @return void
	 */
	public function testSetUniteDateAncienCollege() {

		$obj = new DADSUPrevoyanceLignesContrat();

		$obj->setUniteDateAncienCollege("uniteDateAncienCollege");
		$this->assertEquals("uniteDateAncienCollege", $obj->getUniteDateAncienCollege());
	}

	/**
	 * Tests the setUniteDateAncienPoste() method.
	 *
	 * @return void
	 */
	public function testSetUniteDateAncienPoste() {

		$obj = new DADSUPrevoyanceLignesContrat();

		$obj->setUniteDateAncienPoste("uniteDateAncienPoste");
		$this->assertEquals("uniteDateAncienPoste", $obj->getUniteDateAncienPoste());
	}

	/**
	 * Tests the setUnitePremDateEntree() method.
	 *
	 * @return void
	 */
	public function testSetUnitePremDateEntree() {

		$obj = new DADSUPrevoyanceLignesContrat();

		$obj->setUnitePremDateEntree("unitePremDateEntree");
		$this->assertEquals("unitePremDateEntree", $obj->getUnitePremDateEntree());
	}

	/**
	 * Tests the setValeurCotis() method.
	 *
	 * @return void
	 */
	public function testSetValeurCotis() {

		$obj = new DADSUPrevoyanceLignesContrat();

		$obj->setValeurCotis(10.092018);
		$this->assertEquals(10.092018, $obj->getValeurCotis());
	}

	/**
	 * Tests the setValeurCotisInitiale() method.
	 *
	 * @return void
	 */
	public function testSetValeurCotisInitiale() {

		$obj = new DADSUPrevoyanceLignesContrat();

		$obj->setValeurCotisInitiale(10.092018);
		$this->assertEquals(10.092018, $obj->getValeurCotisInitiale());
	}

}
