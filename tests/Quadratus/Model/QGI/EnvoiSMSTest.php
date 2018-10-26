<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use WBW\Library\Core\Quadratus\Model\QGI\EnvoiSMS;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Envoi s m s model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class EnvoiSMSTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new EnvoiSMS();

		$this->assertNull($obj->getAccesCollaborateur());
		$this->assertNull($obj->getAccesIntervenants());
		$this->assertNull($obj->getAccesTotal());
		$this->assertNull($obj->getCodeCollaborateur());
		$this->assertNull($obj->getNbSMS());
	}

	/**
	 * Tests the setAccesCollaborateur() method.
	 *
	 * @return void
	 */
	public function testSetAccesCollaborateur() {

		$obj = new EnvoiSMS();

		$obj->setAccesCollaborateur(true);
		$this->assertEquals(true, $obj->getAccesCollaborateur());
	}

	/**
	 * Tests the setAccesIntervenants() method.
	 *
	 * @return void
	 */
	public function testSetAccesIntervenants() {

		$obj = new EnvoiSMS();

		$obj->setAccesIntervenants(true);
		$this->assertEquals(true, $obj->getAccesIntervenants());
	}

	/**
	 * Tests the setAccesTotal() method.
	 *
	 * @return void
	 */
	public function testSetAccesTotal() {

		$obj = new EnvoiSMS();

		$obj->setAccesTotal(true);
		$this->assertEquals(true, $obj->getAccesTotal());
	}

	/**
	 * Tests the setCodeCollaborateur() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollaborateur() {

		$obj = new EnvoiSMS();

		$obj->setCodeCollaborateur("codeCollaborateur");
		$this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
	}

	/**
	 * Tests the setNbSMS() method.
	 *
	 * @return void
	 */
	public function testSetNbSMS() {

		$obj = new EnvoiSMS();

		$obj->setNbSMS(10);
		$this->assertEquals(10, $obj->getNbSMS());
	}

}
