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
use WBW\Library\Core\Quadratus\Model\Proprete\AvenantsContrats;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Avenants contrats model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class AvenantsContratsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new AvenantsContrats();

		$this->assertNull($obj->getChrono());
		$this->assertNull($obj->getCodeEmploye());
		$this->assertNull($obj->getDateAvenant());
		$this->assertNull($obj->getLienDocument());
		$this->assertNull($obj->getNumAvenantSaisi());
		$this->assertNull($obj->getNumeroAvenant());
		$this->assertNull($obj->getObservation());
		$this->assertNull($obj->getPeriodeAvenant());
		$this->assertNull($obj->getSignatureEmploye());
		$this->assertNull($obj->getTypeAvenant());
		$this->assertNull($obj->getTypeDocument());
	}

	/**
	 * Tests the setChrono() method.
	 *
	 * @return void
	 */
	public function testSetChrono() {

		$obj = new AvenantsContrats();

		$obj->setChrono("chrono");
		$this->assertEquals("chrono", $obj->getChrono());
	}

	/**
	 * Tests the setCodeEmploye() method.
	 *
	 * @return void
	 */
	public function testSetCodeEmploye() {

		$obj = new AvenantsContrats();

		$obj->setCodeEmploye("codeEmploye");
		$this->assertEquals("codeEmploye", $obj->getCodeEmploye());
	}

	/**
	 * Tests the setDateAvenant() method.
	 *
	 * @return void
	 */
	public function testSetDateAvenant() {

		$obj = new AvenantsContrats();

		$obj->setDateAvenant(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAvenant());
	}

	/**
	 * Tests the setLienDocument() method.
	 *
	 * @return void
	 */
	public function testSetLienDocument() {

		$obj = new AvenantsContrats();

		$obj->setLienDocument("lienDocument");
		$this->assertEquals("lienDocument", $obj->getLienDocument());
	}

	/**
	 * Tests the setNumAvenantSaisi() method.
	 *
	 * @return void
	 */
	public function testSetNumAvenantSaisi() {

		$obj = new AvenantsContrats();

		$obj->setNumAvenantSaisi(10);
		$this->assertEquals(10, $obj->getNumAvenantSaisi());
	}

	/**
	 * Tests the setNumeroAvenant() method.
	 *
	 * @return void
	 */
	public function testSetNumeroAvenant() {

		$obj = new AvenantsContrats();

		$obj->setNumeroAvenant(10);
		$this->assertEquals(10, $obj->getNumeroAvenant());
	}

	/**
	 * Tests the setObservation() method.
	 *
	 * @return void
	 */
	public function testSetObservation() {

		$obj = new AvenantsContrats();

		$obj->setObservation("observation");
		$this->assertEquals("observation", $obj->getObservation());
	}

	/**
	 * Tests the setPeriodeAvenant() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeAvenant() {

		$obj = new AvenantsContrats();

		$obj->setPeriodeAvenant(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeAvenant());
	}

	/**
	 * Tests the setSignatureEmploye() method.
	 *
	 * @return void
	 */
	public function testSetSignatureEmploye() {

		$obj = new AvenantsContrats();

		$obj->setSignatureEmploye(true);
		$this->assertEquals(true, $obj->getSignatureEmploye());
	}

	/**
	 * Tests the setTypeAvenant() method.
	 *
	 * @return void
	 */
	public function testSetTypeAvenant() {

		$obj = new AvenantsContrats();

		$obj->setTypeAvenant("typeAvenant");
		$this->assertEquals("typeAvenant", $obj->getTypeAvenant());
	}

	/**
	 * Tests the setTypeDocument() method.
	 *
	 * @return void
	 */
	public function testSetTypeDocument() {

		$obj = new AvenantsContrats();

		$obj->setTypeDocument("typeDocument");
		$this->assertEquals("typeDocument", $obj->getTypeDocument());
	}

}
