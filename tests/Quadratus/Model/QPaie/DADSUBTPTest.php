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
use WBW\Library\Core\Quadratus\Model\QPaie\DADSUBTP;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * D a d s u b t p model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class DADSUBTPTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new DADSUBTP();

		$this->assertNull($obj->getCodeEtablissement());
		$this->assertNull($obj->getCodeOrganisme());
		$this->assertNull($obj->getCodeTempsArret());
		$this->assertNull($obj->getDebutPeriode());
		$this->assertNull($obj->getFinPeriode());
		$this->assertNull($obj->getMontantEmployeur());
		$this->assertNull($obj->getNumero());
		$this->assertNull($obj->getNumeroOrdre());
		$this->assertNull($obj->getQualifUniteTemps());
		$this->assertNull($obj->getTempsArret());
		$this->assertNull($obj->getTypeArret());
	}

	/**
	 * Tests the setCodeEtablissement() method.
	 *
	 * @return void
	 */
	public function testSetCodeEtablissement() {

		$obj = new DADSUBTP();

		$obj->setCodeEtablissement(10);
		$this->assertEquals(10, $obj->getCodeEtablissement());
	}

	/**
	 * Tests the setCodeOrganisme() method.
	 *
	 * @return void
	 */
	public function testSetCodeOrganisme() {

		$obj = new DADSUBTP();

		$obj->setCodeOrganisme("codeOrganisme");
		$this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
	}

	/**
	 * Tests the setCodeTempsArret() method.
	 *
	 * @return void
	 */
	public function testSetCodeTempsArret() {

		$obj = new DADSUBTP();

		$obj->setCodeTempsArret("codeTempsArret");
		$this->assertEquals("codeTempsArret", $obj->getCodeTempsArret());
	}

	/**
	 * Tests the setDebutPeriode() method.
	 *
	 * @return void
	 */
	public function testSetDebutPeriode() {

		$obj = new DADSUBTP();

		$obj->setDebutPeriode(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDebutPeriode());
	}

	/**
	 * Tests the setFinPeriode() method.
	 *
	 * @return void
	 */
	public function testSetFinPeriode() {

		$obj = new DADSUBTP();

		$obj->setFinPeriode(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getFinPeriode());
	}

	/**
	 * Tests the setMontantEmployeur() method.
	 *
	 * @return void
	 */
	public function testSetMontantEmployeur() {

		$obj = new DADSUBTP();

		$obj->setMontantEmployeur(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantEmployeur());
	}

	/**
	 * Tests the setNumero() method.
	 *
	 * @return void
	 */
	public function testSetNumero() {

		$obj = new DADSUBTP();

		$obj->setNumero("numero");
		$this->assertEquals("numero", $obj->getNumero());
	}

	/**
	 * Tests the setNumeroOrdre() method.
	 *
	 * @return void
	 */
	public function testSetNumeroOrdre() {

		$obj = new DADSUBTP();

		$obj->setNumeroOrdre(10);
		$this->assertEquals(10, $obj->getNumeroOrdre());
	}

	/**
	 * Tests the setQualifUniteTemps() method.
	 *
	 * @return void
	 */
	public function testSetQualifUniteTemps() {

		$obj = new DADSUBTP();

		$obj->setQualifUniteTemps("qualifUniteTemps");
		$this->assertEquals("qualifUniteTemps", $obj->getQualifUniteTemps());
	}

	/**
	 * Tests the setTempsArret() method.
	 *
	 * @return void
	 */
	public function testSetTempsArret() {

		$obj = new DADSUBTP();

		$obj->setTempsArret(10.092018);
		$this->assertEquals(10.092018, $obj->getTempsArret());
	}

	/**
	 * Tests the setTypeArret() method.
	 *
	 * @return void
	 */
	public function testSetTypeArret() {

		$obj = new DADSUBTP();

		$obj->setTypeArret("typeArret");
		$this->assertEquals("typeArret", $obj->getTypeArret());
	}

}
