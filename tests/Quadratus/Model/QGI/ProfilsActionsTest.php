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

use WBW\Library\Core\Quadratus\Model\QGI\ProfilsActions;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Profils actions model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class ProfilsActionsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ProfilsActions();

		$this->assertNull($obj->getCodeProfil());
		$this->assertNull($obj->getIntitule());
	}

	/**
	 * Tests the setCodeProfil() method.
	 *
	 * @return void
	 */
	public function testSetCodeProfil() {

		$obj = new ProfilsActions();

		$obj->setCodeProfil("codeProfil");
		$this->assertEquals("codeProfil", $obj->getCodeProfil());
	}

	/**
	 * Tests the setIntitule() method.
	 *
	 * @return void
	 */
	public function testSetIntitule() {

		$obj = new ProfilsActions();

		$obj->setIntitule("intitule");
		$this->assertEquals("intitule", $obj->getIntitule());
	}

}
