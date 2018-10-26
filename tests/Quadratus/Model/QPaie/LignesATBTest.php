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
use WBW\Library\Core\Quadratus\Model\QPaie\LignesATB;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Lignes a t b model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class LignesATBTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new LignesATB();

		$this->assertNull($obj->getDateVersement());
		$this->assertNull($obj->getMontant());
		$this->assertNull($obj->getMontantCotis());
		$this->assertNull($obj->getMontantEuroOuFranc());
		$this->assertNull($obj->getNumLigne());
		$this->assertNull($obj->getNumeroAttestation());
		$this->assertNull($obj->getPSEuroOuFranc());
		$this->assertNull($obj->getPeriodeDeb());
		$this->assertNull($obj->getPeriodeFin());
	}

	/**
	 * Tests the setDateVersement() method.
	 *
	 * @return void
	 */
	public function testSetDateVersement() {

		$obj = new LignesATB();

		$obj->setDateVersement(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateVersement());
	}

	/**
	 * Tests the setMontant() method.
	 *
	 * @return void
	 */
	public function testSetMontant() {

		$obj = new LignesATB();

		$obj->setMontant(10.092018);
		$this->assertEquals(10.092018, $obj->getMontant());
	}

	/**
	 * Tests the setMontantCotis() method.
	 *
	 * @return void
	 */
	public function testSetMontantCotis() {

		$obj = new LignesATB();

		$obj->setMontantCotis(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantCotis());
	}

	/**
	 * Tests the setMontantEuroOuFranc() method.
	 *
	 * @return void
	 */
	public function testSetMontantEuroOuFranc() {

		$obj = new LignesATB();

		$obj->setMontantEuroOuFranc("montantEuroOuFranc");
		$this->assertEquals("montantEuroOuFranc", $obj->getMontantEuroOuFranc());
	}

	/**
	 * Tests the setNumLigne() method.
	 *
	 * @return void
	 */
	public function testSetNumLigne() {

		$obj = new LignesATB();

		$obj->setNumLigne("numLigne");
		$this->assertEquals("numLigne", $obj->getNumLigne());
	}

	/**
	 * Tests the setNumeroAttestation() method.
	 *
	 * @return void
	 */
	public function testSetNumeroAttestation() {

		$obj = new LignesATB();

		$obj->setNumeroAttestation("numeroAttestation");
		$this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
	}

	/**
	 * Tests the setPSEuroOuFranc() method.
	 *
	 * @return void
	 */
	public function testSetPSEuroOuFranc() {

		$obj = new LignesATB();

		$obj->setPSEuroOuFranc("pSEuroOuFranc");
		$this->assertEquals("pSEuroOuFranc", $obj->getPSEuroOuFranc());
	}

	/**
	 * Tests the setPeriodeDeb() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeDeb() {

		$obj = new LignesATB();

		$obj->setPeriodeDeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDeb());
	}

	/**
	 * Tests the setPeriodeFin() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeFin() {

		$obj = new LignesATB();

		$obj->setPeriodeFin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeFin());
	}

}
