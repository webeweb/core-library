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
use WBW\Library\Core\Quadratus\Model\Proprete\Tarifs;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Tarifs model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 * @final
 */
final class TarifsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Tarifs();

		$this->assertNull($obj->getCodeAffaire());
		$this->assertNull($obj->getCodeArticle());
		$this->assertNull($obj->getCodeChantier());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeColCreation());
		$this->assertNull($obj->getCodeColModification());
		$this->assertNull($obj->getCoeff_Tr1());
		$this->assertNull($obj->getCoeff_Tr2());
		$this->assertNull($obj->getCoeff_Tr3());
		$this->assertNull($obj->getCoeff_Tr4());
		$this->assertNull($obj->getCoeff_Tr5());
		$this->assertNull($obj->getDateCreation());
		$this->assertNull($obj->getDateDebut());
		$this->assertNull($obj->getDateFin());
		$this->assertNull($obj->getDateModification());
		$this->assertNull($obj->getFamArticle());
		$this->assertNull($obj->getFamClient());
		$this->assertNull($obj->getPUArticle());
		$this->assertNull($obj->getPUBase());
		$this->assertNull($obj->getPU_Tr1());
		$this->assertNull($obj->getPU_Tr2());
		$this->assertNull($obj->getPU_Tr3());
		$this->assertNull($obj->getPU_Tr4());
		$this->assertNull($obj->getPU_Tr5());
		$this->assertNull($obj->getPrixNet_Tr1());
		$this->assertNull($obj->getPrixNet_Tr2());
		$this->assertNull($obj->getPrixNet_Tr3());
		$this->assertNull($obj->getPrixNet_Tr4());
		$this->assertNull($obj->getPrixNet_Tr5());
		$this->assertNull($obj->getQte_Tr1());
		$this->assertNull($obj->getQte_Tr2());
		$this->assertNull($obj->getQte_Tr3());
		$this->assertNull($obj->getQte_Tr4());
		$this->assertNull($obj->getQte_Tr5());
		$this->assertNull($obj->getSousFamClient());
		$this->assertNull($obj->getTypeAppliCoef());
		$this->assertNull($obj->getTypeArticle());
	}

	/**
	 * Tests the setCodeAffaire() method.
	 *
	 * @return void
	 */
	public function testSetCodeAffaire() {

		$obj = new Tarifs();

		$obj->setCodeAffaire("codeAffaire");
		$this->assertEquals("codeAffaire", $obj->getCodeAffaire());
	}

	/**
	 * Tests the setCodeArticle() method.
	 *
	 * @return void
	 */
	public function testSetCodeArticle() {

		$obj = new Tarifs();

		$obj->setCodeArticle("codeArticle");
		$this->assertEquals("codeArticle", $obj->getCodeArticle());
	}

	/**
	 * Tests the setCodeChantier() method.
	 *
	 * @return void
	 */
	public function testSetCodeChantier() {

		$obj = new Tarifs();

		$obj->setCodeChantier("codeChantier");
		$this->assertEquals("codeChantier", $obj->getCodeChantier());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new Tarifs();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeColCreation() method.
	 *
	 * @return void
	 */
	public function testSetCodeColCreation() {

		$obj = new Tarifs();

		$obj->setCodeColCreation("codeColCreation");
		$this->assertEquals("codeColCreation", $obj->getCodeColCreation());
	}

	/**
	 * Tests the setCodeColModification() method.
	 *
	 * @return void
	 */
	public function testSetCodeColModification() {

		$obj = new Tarifs();

		$obj->setCodeColModification("codeColModification");
		$this->assertEquals("codeColModification", $obj->getCodeColModification());
	}

	/**
	 * Tests the setCoeff_Tr1() method.
	 *
	 * @return void
	 */
	public function testSetCoeff_Tr1() {

		$obj = new Tarifs();

		$obj->setCoeff_Tr1(10.092018);
		$this->assertEquals(10.092018, $obj->getCoeff_Tr1());
	}

	/**
	 * Tests the setCoeff_Tr2() method.
	 *
	 * @return void
	 */
	public function testSetCoeff_Tr2() {

		$obj = new Tarifs();

		$obj->setCoeff_Tr2(10.092018);
		$this->assertEquals(10.092018, $obj->getCoeff_Tr2());
	}

	/**
	 * Tests the setCoeff_Tr3() method.
	 *
	 * @return void
	 */
	public function testSetCoeff_Tr3() {

		$obj = new Tarifs();

		$obj->setCoeff_Tr3(10.092018);
		$this->assertEquals(10.092018, $obj->getCoeff_Tr3());
	}

	/**
	 * Tests the setCoeff_Tr4() method.
	 *
	 * @return void
	 */
	public function testSetCoeff_Tr4() {

		$obj = new Tarifs();

		$obj->setCoeff_Tr4(10.092018);
		$this->assertEquals(10.092018, $obj->getCoeff_Tr4());
	}

	/**
	 * Tests the setCoeff_Tr5() method.
	 *
	 * @return void
	 */
	public function testSetCoeff_Tr5() {

		$obj = new Tarifs();

		$obj->setCoeff_Tr5(10.092018);
		$this->assertEquals(10.092018, $obj->getCoeff_Tr5());
	}

	/**
	 * Tests the setDateCreation() method.
	 *
	 * @return void
	 */
	public function testSetDateCreation() {

		$obj = new Tarifs();

		$obj->setDateCreation(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreation());
	}

	/**
	 * Tests the setDateDebut() method.
	 *
	 * @return void
	 */
	public function testSetDateDebut() {

		$obj = new Tarifs();

		$obj->setDateDebut(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebut());
	}

	/**
	 * Tests the setDateFin() method.
	 *
	 * @return void
	 */
	public function testSetDateFin() {

		$obj = new Tarifs();

		$obj->setDateFin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFin());
	}

	/**
	 * Tests the setDateModification() method.
	 *
	 * @return void
	 */
	public function testSetDateModification() {

		$obj = new Tarifs();

		$obj->setDateModification(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModification());
	}

	/**
	 * Tests the setFamArticle() method.
	 *
	 * @return void
	 */
	public function testSetFamArticle() {

		$obj = new Tarifs();

		$obj->setFamArticle("famArticle");
		$this->assertEquals("famArticle", $obj->getFamArticle());
	}

	/**
	 * Tests the setFamClient() method.
	 *
	 * @return void
	 */
	public function testSetFamClient() {

		$obj = new Tarifs();

		$obj->setFamClient("famClient");
		$this->assertEquals("famClient", $obj->getFamClient());
	}

	/**
	 * Tests the setPUArticle() method.
	 *
	 * @return void
	 */
	public function testSetPUArticle() {

		$obj = new Tarifs();

		$obj->setPUArticle(true);
		$this->assertEquals(true, $obj->getPUArticle());
	}

	/**
	 * Tests the setPUBase() method.
	 *
	 * @return void
	 */
	public function testSetPUBase() {

		$obj = new Tarifs();

		$obj->setPUBase(10.092018);
		$this->assertEquals(10.092018, $obj->getPUBase());
	}

	/**
	 * Tests the setPU_Tr1() method.
	 *
	 * @return void
	 */
	public function testSetPU_Tr1() {

		$obj = new Tarifs();

		$obj->setPU_Tr1(10.092018);
		$this->assertEquals(10.092018, $obj->getPU_Tr1());
	}

	/**
	 * Tests the setPU_Tr2() method.
	 *
	 * @return void
	 */
	public function testSetPU_Tr2() {

		$obj = new Tarifs();

		$obj->setPU_Tr2(10.092018);
		$this->assertEquals(10.092018, $obj->getPU_Tr2());
	}

	/**
	 * Tests the setPU_Tr3() method.
	 *
	 * @return void
	 */
	public function testSetPU_Tr3() {

		$obj = new Tarifs();

		$obj->setPU_Tr3(10.092018);
		$this->assertEquals(10.092018, $obj->getPU_Tr3());
	}

	/**
	 * Tests the setPU_Tr4() method.
	 *
	 * @return void
	 */
	public function testSetPU_Tr4() {

		$obj = new Tarifs();

		$obj->setPU_Tr4(10.092018);
		$this->assertEquals(10.092018, $obj->getPU_Tr4());
	}

	/**
	 * Tests the setPU_Tr5() method.
	 *
	 * @return void
	 */
	public function testSetPU_Tr5() {

		$obj = new Tarifs();

		$obj->setPU_Tr5(10.092018);
		$this->assertEquals(10.092018, $obj->getPU_Tr5());
	}

	/**
	 * Tests the setPrixNet_Tr1() method.
	 *
	 * @return void
	 */
	public function testSetPrixNet_Tr1() {

		$obj = new Tarifs();

		$obj->setPrixNet_Tr1(true);
		$this->assertEquals(true, $obj->getPrixNet_Tr1());
	}

	/**
	 * Tests the setPrixNet_Tr2() method.
	 *
	 * @return void
	 */
	public function testSetPrixNet_Tr2() {

		$obj = new Tarifs();

		$obj->setPrixNet_Tr2(true);
		$this->assertEquals(true, $obj->getPrixNet_Tr2());
	}

	/**
	 * Tests the setPrixNet_Tr3() method.
	 *
	 * @return void
	 */
	public function testSetPrixNet_Tr3() {

		$obj = new Tarifs();

		$obj->setPrixNet_Tr3(true);
		$this->assertEquals(true, $obj->getPrixNet_Tr3());
	}

	/**
	 * Tests the setPrixNet_Tr4() method.
	 *
	 * @return void
	 */
	public function testSetPrixNet_Tr4() {

		$obj = new Tarifs();

		$obj->setPrixNet_Tr4(true);
		$this->assertEquals(true, $obj->getPrixNet_Tr4());
	}

	/**
	 * Tests the setPrixNet_Tr5() method.
	 *
	 * @return void
	 */
	public function testSetPrixNet_Tr5() {

		$obj = new Tarifs();

		$obj->setPrixNet_Tr5(true);
		$this->assertEquals(true, $obj->getPrixNet_Tr5());
	}

	/**
	 * Tests the setQte_Tr1() method.
	 *
	 * @return void
	 */
	public function testSetQte_Tr1() {

		$obj = new Tarifs();

		$obj->setQte_Tr1(10.092018);
		$this->assertEquals(10.092018, $obj->getQte_Tr1());
	}

	/**
	 * Tests the setQte_Tr2() method.
	 *
	 * @return void
	 */
	public function testSetQte_Tr2() {

		$obj = new Tarifs();

		$obj->setQte_Tr2(10.092018);
		$this->assertEquals(10.092018, $obj->getQte_Tr2());
	}

	/**
	 * Tests the setQte_Tr3() method.
	 *
	 * @return void
	 */
	public function testSetQte_Tr3() {

		$obj = new Tarifs();

		$obj->setQte_Tr3(10.092018);
		$this->assertEquals(10.092018, $obj->getQte_Tr3());
	}

	/**
	 * Tests the setQte_Tr4() method.
	 *
	 * @return void
	 */
	public function testSetQte_Tr4() {

		$obj = new Tarifs();

		$obj->setQte_Tr4(10.092018);
		$this->assertEquals(10.092018, $obj->getQte_Tr4());
	}

	/**
	 * Tests the setQte_Tr5() method.
	 *
	 * @return void
	 */
	public function testSetQte_Tr5() {

		$obj = new Tarifs();

		$obj->setQte_Tr5(10.092018);
		$this->assertEquals(10.092018, $obj->getQte_Tr5());
	}

	/**
	 * Tests the setSousFamClient() method.
	 *
	 * @return void
	 */
	public function testSetSousFamClient() {

		$obj = new Tarifs();

		$obj->setSousFamClient("sousFamClient");
		$this->assertEquals("sousFamClient", $obj->getSousFamClient());
	}

	/**
	 * Tests the setTypeAppliCoef() method.
	 *
	 * @return void
	 */
	public function testSetTypeAppliCoef() {

		$obj = new Tarifs();

		$obj->setTypeAppliCoef("typeAppliCoef");
		$this->assertEquals("typeAppliCoef", $obj->getTypeAppliCoef());
	}

	/**
	 * Tests the setTypeArticle() method.
	 *
	 * @return void
	 */
	public function testSetTypeArticle() {

		$obj = new Tarifs();

		$obj->setTypeArticle("typeArticle");
		$this->assertEquals("typeArticle", $obj->getTypeArticle());
	}

}
