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

use DateTime;
use WBW\Library\Core\Quadratus\Model\QGI\AlertesEnCours;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Alertes en cours model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class AlertesEnCoursTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new AlertesEnCours();

		$this->assertNull($obj->getARDemande());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeCollabDST());
		$this->assertNull($obj->getCodeCollabORG());
		$this->assertNull($obj->getDateCreation());
		$this->assertNull($obj->getDateDeclenchement());
		$this->assertNull($obj->getIDAlerte());
		$this->assertNull($obj->getTexteAlerte());
	}

	/**
	 * Tests the setARDemande() method.
	 *
	 * @return void
	 */
	public function testSetARDemande() {

		$obj = new AlertesEnCours();

		$obj->setARDemande(true);
		$this->assertEquals(true, $obj->getARDemande());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new AlertesEnCours();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeCollabDST() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollabDST() {

		$obj = new AlertesEnCours();

		$obj->setCodeCollabDST("codeCollabDST");
		$this->assertEquals("codeCollabDST", $obj->getCodeCollabDST());
	}

	/**
	 * Tests the setCodeCollabORG() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollabORG() {

		$obj = new AlertesEnCours();

		$obj->setCodeCollabORG("codeCollabORG");
		$this->assertEquals("codeCollabORG", $obj->getCodeCollabORG());
	}

	/**
	 * Tests the setDateCreation() method.
	 *
	 * @return void
	 */
	public function testSetDateCreation() {

		$obj = new AlertesEnCours();

		$obj->setDateCreation(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreation());
	}

	/**
	 * Tests the setDateDeclenchement() method.
	 *
	 * @return void
	 */
	public function testSetDateDeclenchement() {

		$obj = new AlertesEnCours();

		$obj->setDateDeclenchement(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDeclenchement());
	}

	/**
	 * Tests the setIDAlerte() method.
	 *
	 * @return void
	 */
	public function testSetIDAlerte() {

		$obj = new AlertesEnCours();

		$obj->setIDAlerte(10);
		$this->assertEquals(10, $obj->getIDAlerte());
	}

	/**
	 * Tests the setTexteAlerte() method.
	 *
	 * @return void
	 */
	public function testSetTexteAlerte() {

		$obj = new AlertesEnCours();

		$obj->setTexteAlerte("texteAlerte");
		$this->assertEquals("texteAlerte", $obj->getTexteAlerte());
	}

}
