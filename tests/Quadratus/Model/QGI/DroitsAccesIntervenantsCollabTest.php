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

use WBW\Library\Core\Quadratus\Model\QGI\DroitsAccesIntervenantsCollab;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Droits acces intervenants collab model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class DroitsAccesIntervenantsCollabTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new DroitsAccesIntervenantsCollab();

		$this->assertNull($obj->getAccesLibre());
		$this->assertNull($obj->getCodeCollaborateur());
		$this->assertNull($obj->getTypeIntervenant());
	}

	/**
	 * Tests the setAccesLibre() method.
	 *
	 * @return void
	 */
	public function testSetAccesLibre() {

		$obj = new DroitsAccesIntervenantsCollab();

		$obj->setAccesLibre(true);
		$this->assertEquals(true, $obj->getAccesLibre());
	}

	/**
	 * Tests the setCodeCollaborateur() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollaborateur() {

		$obj = new DroitsAccesIntervenantsCollab();

		$obj->setCodeCollaborateur("codeCollaborateur");
		$this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
	}

	/**
	 * Tests the setTypeIntervenant() method.
	 *
	 * @return void
	 */
	public function testSetTypeIntervenant() {

		$obj = new DroitsAccesIntervenantsCollab();

		$obj->setTypeIntervenant("typeIntervenant");
		$this->assertEquals("typeIntervenant", $obj->getTypeIntervenant());
	}

}
