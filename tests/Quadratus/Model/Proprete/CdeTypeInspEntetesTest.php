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
use WBW\Library\Core\Quadratus\Model\Proprete\CdeTypeInspEntetes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Cde type insp entetes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class CdeTypeInspEntetesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new CdeTypeInspEntetes();

		$this->assertNull($obj->getCodeInspecteur());
		$this->assertNull($obj->getDtValiditeDebut());
		$this->assertNull($obj->getDtValiditeFin());
		$this->assertNull($obj->getMontantBudget());
		$this->assertNull($obj->getMontantHTCde());
	}

	/**
	 * Tests the setCodeInspecteur() method.
	 *
	 * @return void
	 */
	public function testSetCodeInspecteur() {

		$obj = new CdeTypeInspEntetes();

		$obj->setCodeInspecteur("codeInspecteur");
		$this->assertEquals("codeInspecteur", $obj->getCodeInspecteur());
	}

	/**
	 * Tests the setDtValiditeDebut() method.
	 *
	 * @return void
	 */
	public function testSetDtValiditeDebut() {

		$obj = new CdeTypeInspEntetes();

		$obj->setDtValiditeDebut(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDtValiditeDebut());
	}

	/**
	 * Tests the setDtValiditeFin() method.
	 *
	 * @return void
	 */
	public function testSetDtValiditeFin() {

		$obj = new CdeTypeInspEntetes();

		$obj->setDtValiditeFin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDtValiditeFin());
	}

	/**
	 * Tests the setMontantBudget() method.
	 *
	 * @return void
	 */
	public function testSetMontantBudget() {

		$obj = new CdeTypeInspEntetes();

		$obj->setMontantBudget(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantBudget());
	}

	/**
	 * Tests the setMontantHTCde() method.
	 *
	 * @return void
	 */
	public function testSetMontantHTCde() {

		$obj = new CdeTypeInspEntetes();

		$obj->setMontantHTCde(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantHTCde());
	}

}
