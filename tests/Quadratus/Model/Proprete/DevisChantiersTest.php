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

use WBW\Library\Core\Quadratus\Model\Proprete\DevisChantiers;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Devis chantiers model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class DevisChantiersTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new DevisChantiers();

		$this->assertNull($obj->getCodeAffaire());
		$this->assertNull($obj->getCodeChantier());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getMajDescriptif());
		$this->assertNull($obj->getMontantHT());
		$this->assertNull($obj->getNumDevis());
	}

	/**
	 * Tests the setCodeAffaire() method.
	 *
	 * @return void
	 */
	public function testSetCodeAffaire() {

		$obj = new DevisChantiers();

		$obj->setCodeAffaire("codeAffaire");
		$this->assertEquals("codeAffaire", $obj->getCodeAffaire());
	}

	/**
	 * Tests the setCodeChantier() method.
	 *
	 * @return void
	 */
	public function testSetCodeChantier() {

		$obj = new DevisChantiers();

		$obj->setCodeChantier("codeChantier");
		$this->assertEquals("codeChantier", $obj->getCodeChantier());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new DevisChantiers();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setMajDescriptif() method.
	 *
	 * @return void
	 */
	public function testSetMajDescriptif() {

		$obj = new DevisChantiers();

		$obj->setMajDescriptif(true);
		$this->assertEquals(true, $obj->getMajDescriptif());
	}

	/**
	 * Tests the setMontantHT() method.
	 *
	 * @return void
	 */
	public function testSetMontantHT() {

		$obj = new DevisChantiers();

		$obj->setMontantHT(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantHT());
	}

	/**
	 * Tests the setNumDevis() method.
	 *
	 * @return void
	 */
	public function testSetNumDevis() {

		$obj = new DevisChantiers();

		$obj->setNumDevis("numDevis");
		$this->assertEquals("numDevis", $obj->getNumDevis());
	}

}
