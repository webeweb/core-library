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

use WBW\Library\Core\Quadratus\Model\Proprete\ValorisationHoraire;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Valorisation horaire model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class ValorisationHoraireTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ValorisationHoraire();

		$this->assertNull($obj->getCoutHoraire());
		$this->assertNull($obj->getQualification());
	}

	/**
	 * Tests the setCoutHoraire() method.
	 *
	 * @return void
	 */
	public function testSetCoutHoraire() {

		$obj = new ValorisationHoraire();

		$obj->setCoutHoraire(10.092018);
		$this->assertEquals(10.092018, $obj->getCoutHoraire());
	}

	/**
	 * Tests the setQualification() method.
	 *
	 * @return void
	 */
	public function testSetQualification() {

		$obj = new ValorisationHoraire();

		$obj->setQualification("qualification");
		$this->assertEquals("qualification", $obj->getQualification());
	}

}
