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
use WBW\Library\Core\Quadratus\Model\QPaie\LignesATC;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Lignes a t c model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class LignesATCTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new LignesATC();

		$this->assertNull($obj->getMontant());
		$this->assertNull($obj->getMontantCotis());
		$this->assertNull($obj->getMotif());
		$this->assertNull($obj->getNumLigne());
		$this->assertNull($obj->getNumeroAttestation());
		$this->assertNull($obj->getPSEuroOuFranc());
		$this->assertNull($obj->getPeriodeDeb());
		$this->assertNull($obj->getPeriodeFin());
		$this->assertNull($obj->getSalaireEuroOuFranc());
	}

	/**
	 * Tests the setMontant() method.
	 *
	 * @return void
	 */
	public function testSetMontant() {

		$obj = new LignesATC();

		$obj->setMontant(10.092018);
		$this->assertEquals(10.092018, $obj->getMontant());
	}

	/**
	 * Tests the setMontantCotis() method.
	 *
	 * @return void
	 */
	public function testSetMontantCotis() {

		$obj = new LignesATC();

		$obj->setMontantCotis(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantCotis());
	}

	/**
	 * Tests the setMotif() method.
	 *
	 * @return void
	 */
	public function testSetMotif() {

		$obj = new LignesATC();

		$obj->setMotif("motif");
		$this->assertEquals("motif", $obj->getMotif());
	}

	/**
	 * Tests the setNumLigne() method.
	 *
	 * @return void
	 */
	public function testSetNumLigne() {

		$obj = new LignesATC();

		$obj->setNumLigne("numLigne");
		$this->assertEquals("numLigne", $obj->getNumLigne());
	}

	/**
	 * Tests the setNumeroAttestation() method.
	 *
	 * @return void
	 */
	public function testSetNumeroAttestation() {

		$obj = new LignesATC();

		$obj->setNumeroAttestation("numeroAttestation");
		$this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
	}

	/**
	 * Tests the setPSEuroOuFranc() method.
	 *
	 * @return void
	 */
	public function testSetPSEuroOuFranc() {

		$obj = new LignesATC();

		$obj->setPSEuroOuFranc("pSEuroOuFranc");
		$this->assertEquals("pSEuroOuFranc", $obj->getPSEuroOuFranc());
	}

	/**
	 * Tests the setPeriodeDeb() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeDeb() {

		$obj = new LignesATC();

		$obj->setPeriodeDeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDeb());
	}

	/**
	 * Tests the setPeriodeFin() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeFin() {

		$obj = new LignesATC();

		$obj->setPeriodeFin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeFin());
	}

	/**
	 * Tests the setSalaireEuroOuFranc() method.
	 *
	 * @return void
	 */
	public function testSetSalaireEuroOuFranc() {

		$obj = new LignesATC();

		$obj->setSalaireEuroOuFranc("salaireEuroOuFranc");
		$this->assertEquals("salaireEuroOuFranc", $obj->getSalaireEuroOuFranc());
	}

}
