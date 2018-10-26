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
use WBW\Library\Core\Quadratus\Model\Proprete\Materiel;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Materiel model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 * @final
 */
final class MaterielTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Materiel();

		$this->assertNull($obj->getCodeBarre());
		$this->assertNull($obj->getCodeMateriel());
		$this->assertNull($obj->getDateAchat());
		$this->assertNull($obj->getDateDebutAmortissement());
		$this->assertNull($obj->getDateFinAmortissement());
		$this->assertNull($obj->getDateFinService());
		$this->assertNull($obj->getDateMiseEnService());
		$this->assertNull($obj->getDesignation1());
		$this->assertNull($obj->getDesignation2());
		$this->assertNull($obj->getDesignation3());
		$this->assertNull($obj->getDesignation4());
		$this->assertNull($obj->getDesignation5());
		$this->assertNull($obj->getMontantAmortissement());
		$this->assertNull($obj->getNumeroSerie());
		$this->assertNull($obj->getValAchatEuro());
		$this->assertNull($obj->getValAchatFRF());
	}

	/**
	 * Tests the setCodeBarre() method.
	 *
	 * @return void
	 */
	public function testSetCodeBarre() {

		$obj = new Materiel();

		$obj->setCodeBarre("codeBarre");
		$this->assertEquals("codeBarre", $obj->getCodeBarre());
	}

	/**
	 * Tests the setCodeMateriel() method.
	 *
	 * @return void
	 */
	public function testSetCodeMateriel() {

		$obj = new Materiel();

		$obj->setCodeMateriel("codeMateriel");
		$this->assertEquals("codeMateriel", $obj->getCodeMateriel());
	}

	/**
	 * Tests the setDateAchat() method.
	 *
	 * @return void
	 */
	public function testSetDateAchat() {

		$obj = new Materiel();

		$obj->setDateAchat(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAchat());
	}

	/**
	 * Tests the setDateDebutAmortissement() method.
	 *
	 * @return void
	 */
	public function testSetDateDebutAmortissement() {

		$obj = new Materiel();

		$obj->setDateDebutAmortissement(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebutAmortissement());
	}

	/**
	 * Tests the setDateFinAmortissement() method.
	 *
	 * @return void
	 */
	public function testSetDateFinAmortissement() {

		$obj = new Materiel();

		$obj->setDateFinAmortissement(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinAmortissement());
	}

	/**
	 * Tests the setDateFinService() method.
	 *
	 * @return void
	 */
	public function testSetDateFinService() {

		$obj = new Materiel();

		$obj->setDateFinService(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinService());
	}

	/**
	 * Tests the setDateMiseEnService() method.
	 *
	 * @return void
	 */
	public function testSetDateMiseEnService() {

		$obj = new Materiel();

		$obj->setDateMiseEnService(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateMiseEnService());
	}

	/**
	 * Tests the setDesignation1() method.
	 *
	 * @return void
	 */
	public function testSetDesignation1() {

		$obj = new Materiel();

		$obj->setDesignation1("designation1");
		$this->assertEquals("designation1", $obj->getDesignation1());
	}

	/**
	 * Tests the setDesignation2() method.
	 *
	 * @return void
	 */
	public function testSetDesignation2() {

		$obj = new Materiel();

		$obj->setDesignation2("designation2");
		$this->assertEquals("designation2", $obj->getDesignation2());
	}

	/**
	 * Tests the setDesignation3() method.
	 *
	 * @return void
	 */
	public function testSetDesignation3() {

		$obj = new Materiel();

		$obj->setDesignation3("designation3");
		$this->assertEquals("designation3", $obj->getDesignation3());
	}

	/**
	 * Tests the setDesignation4() method.
	 *
	 * @return void
	 */
	public function testSetDesignation4() {

		$obj = new Materiel();

		$obj->setDesignation4("designation4");
		$this->assertEquals("designation4", $obj->getDesignation4());
	}

	/**
	 * Tests the setDesignation5() method.
	 *
	 * @return void
	 */
	public function testSetDesignation5() {

		$obj = new Materiel();

		$obj->setDesignation5("designation5");
		$this->assertEquals("designation5", $obj->getDesignation5());
	}

	/**
	 * Tests the setMontantAmortissement() method.
	 *
	 * @return void
	 */
	public function testSetMontantAmortissement() {

		$obj = new Materiel();

		$obj->setMontantAmortissement(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantAmortissement());
	}

	/**
	 * Tests the setNumeroSerie() method.
	 *
	 * @return void
	 */
	public function testSetNumeroSerie() {

		$obj = new Materiel();

		$obj->setNumeroSerie("numeroSerie");
		$this->assertEquals("numeroSerie", $obj->getNumeroSerie());
	}

	/**
	 * Tests the setValAchatEuro() method.
	 *
	 * @return void
	 */
	public function testSetValAchatEuro() {

		$obj = new Materiel();

		$obj->setValAchatEuro(10.092018);
		$this->assertEquals(10.092018, $obj->getValAchatEuro());
	}

	/**
	 * Tests the setValAchatFRF() method.
	 *
	 * @return void
	 */
	public function testSetValAchatFRF() {

		$obj = new Materiel();

		$obj->setValAchatFRF(10.092018);
		$this->assertEquals(10.092018, $obj->getValAchatFRF());
	}

}
