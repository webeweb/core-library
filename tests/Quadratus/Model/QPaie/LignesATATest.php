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
use WBW\Library\Core\Quadratus\Model\QPaie\LignesATA;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Lignes a t a model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class LignesATATest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new LignesATA();

		$this->assertNull($obj->getAvantagesEuroOuFranc());
		$this->assertNull($obj->getCSEuroOuFranc());
		$this->assertNull($obj->getDateEcheance());
		$this->assertNull($obj->getFraisPSEuroOuFranc());
		$this->assertNull($obj->getFraisProSoumis());
		$this->assertNull($obj->getIndemnitesEuroOuFranc());
		$this->assertNull($obj->getMontant());
		$this->assertNull($obj->getMontantAvantages());
		$this->assertNull($obj->getMontantCotis());
		$this->assertNull($obj->getMontantEuroOuFranc());
		$this->assertNull($obj->getMontantIndemnites());
		$this->assertNull($obj->getNbHTrav());
		$this->assertNull($obj->getNumLigne());
		$this->assertNull($obj->getNumeroAttestation());
		$this->assertNull($obj->getPeriodeDeb());
		$this->assertNull($obj->getPeriodeFin());
		$this->assertNull($obj->getTauxDedSup());
	}

	/**
	 * Tests the setAvantagesEuroOuFranc() method.
	 *
	 * @return void
	 */
	public function testSetAvantagesEuroOuFranc() {

		$obj = new LignesATA();

		$obj->setAvantagesEuroOuFranc("avantagesEuroOuFranc");
		$this->assertEquals("avantagesEuroOuFranc", $obj->getAvantagesEuroOuFranc());
	}

	/**
	 * Tests the setCSEuroOuFranc() method.
	 *
	 * @return void
	 */
	public function testSetCSEuroOuFranc() {

		$obj = new LignesATA();

		$obj->setCSEuroOuFranc("cSEuroOuFranc");
		$this->assertEquals("cSEuroOuFranc", $obj->getCSEuroOuFranc());
	}

	/**
	 * Tests the setDateEcheance() method.
	 *
	 * @return void
	 */
	public function testSetDateEcheance() {

		$obj = new LignesATA();

		$obj->setDateEcheance(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEcheance());
	}

	/**
	 * Tests the setFraisPSEuroOuFranc() method.
	 *
	 * @return void
	 */
	public function testSetFraisPSEuroOuFranc() {

		$obj = new LignesATA();

		$obj->setFraisPSEuroOuFranc("fraisPSEuroOuFranc");
		$this->assertEquals("fraisPSEuroOuFranc", $obj->getFraisPSEuroOuFranc());
	}

	/**
	 * Tests the setFraisProSoumis() method.
	 *
	 * @return void
	 */
	public function testSetFraisProSoumis() {

		$obj = new LignesATA();

		$obj->setFraisProSoumis(10.092018);
		$this->assertEquals(10.092018, $obj->getFraisProSoumis());
	}

	/**
	 * Tests the setIndemnitesEuroOuFranc() method.
	 *
	 * @return void
	 */
	public function testSetIndemnitesEuroOuFranc() {

		$obj = new LignesATA();

		$obj->setIndemnitesEuroOuFranc("indemnitesEuroOuFranc");
		$this->assertEquals("indemnitesEuroOuFranc", $obj->getIndemnitesEuroOuFranc());
	}

	/**
	 * Tests the setMontant() method.
	 *
	 * @return void
	 */
	public function testSetMontant() {

		$obj = new LignesATA();

		$obj->setMontant(10.092018);
		$this->assertEquals(10.092018, $obj->getMontant());
	}

	/**
	 * Tests the setMontantAvantages() method.
	 *
	 * @return void
	 */
	public function testSetMontantAvantages() {

		$obj = new LignesATA();

		$obj->setMontantAvantages(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantAvantages());
	}

	/**
	 * Tests the setMontantCotis() method.
	 *
	 * @return void
	 */
	public function testSetMontantCotis() {

		$obj = new LignesATA();

		$obj->setMontantCotis(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantCotis());
	}

	/**
	 * Tests the setMontantEuroOuFranc() method.
	 *
	 * @return void
	 */
	public function testSetMontantEuroOuFranc() {

		$obj = new LignesATA();

		$obj->setMontantEuroOuFranc("montantEuroOuFranc");
		$this->assertEquals("montantEuroOuFranc", $obj->getMontantEuroOuFranc());
	}

	/**
	 * Tests the setMontantIndemnites() method.
	 *
	 * @return void
	 */
	public function testSetMontantIndemnites() {

		$obj = new LignesATA();

		$obj->setMontantIndemnites(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantIndemnites());
	}

	/**
	 * Tests the setNbHTrav() method.
	 *
	 * @return void
	 */
	public function testSetNbHTrav() {

		$obj = new LignesATA();

		$obj->setNbHTrav(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHTrav());
	}

	/**
	 * Tests the setNumLigne() method.
	 *
	 * @return void
	 */
	public function testSetNumLigne() {

		$obj = new LignesATA();

		$obj->setNumLigne("numLigne");
		$this->assertEquals("numLigne", $obj->getNumLigne());
	}

	/**
	 * Tests the setNumeroAttestation() method.
	 *
	 * @return void
	 */
	public function testSetNumeroAttestation() {

		$obj = new LignesATA();

		$obj->setNumeroAttestation("numeroAttestation");
		$this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
	}

	/**
	 * Tests the setPeriodeDeb() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeDeb() {

		$obj = new LignesATA();

		$obj->setPeriodeDeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDeb());
	}

	/**
	 * Tests the setPeriodeFin() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeFin() {

		$obj = new LignesATA();

		$obj->setPeriodeFin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeFin());
	}

	/**
	 * Tests the setTauxDedSup() method.
	 *
	 * @return void
	 */
	public function testSetTauxDedSup() {

		$obj = new LignesATA();

		$obj->setTauxDedSup(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxDedSup());
	}

}
