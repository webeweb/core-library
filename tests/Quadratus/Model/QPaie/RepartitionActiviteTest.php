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

use WBW\Library\Core\Quadratus\Model\QPaie\RepartitionActivite;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Repartition activite model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class RepartitionActiviteTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new RepartitionActivite();

		$this->assertNull($obj->getCodeService());
		$this->assertNull($obj->getNumeroEmploye());
		$this->assertNull($obj->getTauxVentilation());
	}

	/**
	 * Tests the setCodeService() method.
	 *
	 * @return void
	 */
	public function testSetCodeService() {

		$obj = new RepartitionActivite();

		$obj->setCodeService("codeService");
		$this->assertEquals("codeService", $obj->getCodeService());
	}

	/**
	 * Tests the setNumeroEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNumeroEmploye() {

		$obj = new RepartitionActivite();

		$obj->setNumeroEmploye("numeroEmploye");
		$this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
	}

	/**
	 * Tests the setTauxVentilation() method.
	 *
	 * @return void
	 */
	public function testSetTauxVentilation() {

		$obj = new RepartitionActivite();

		$obj->setTauxVentilation(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxVentilation());
	}

}
