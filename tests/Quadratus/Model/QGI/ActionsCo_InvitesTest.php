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
use WBW\Library\Core\Quadratus\Model\QGI\ActionsCo_Invites;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Actions co_ invites model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class ActionsCo_InvitesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ActionsCo_Invites();

		$this->assertNull($obj->getCodeAction());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeColl());
		$this->assertNull($obj->getDateAjout());
		$this->assertNull($obj->getNomInterlocuteur());
		$this->assertNull($obj->getNumInterlocuteur());
		$this->assertNull($obj->getRetourNeg());
		$this->assertNull($obj->getTypeInvitation());
		$this->assertNull($obj->getTypeInvite());
	}

	/**
	 * Tests the setCodeAction() method.
	 *
	 * @return void
	 */
	public function testSetCodeAction() {

		$obj = new ActionsCo_Invites();

		$obj->setCodeAction("codeAction");
		$this->assertEquals("codeAction", $obj->getCodeAction());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new ActionsCo_Invites();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeColl() method.
	 *
	 * @return void
	 */
	public function testSetCodeColl() {

		$obj = new ActionsCo_Invites();

		$obj->setCodeColl("codeColl");
		$this->assertEquals("codeColl", $obj->getCodeColl());
	}

	/**
	 * Tests the setDateAjout() method.
	 *
	 * @return void
	 */
	public function testSetDateAjout() {

		$obj = new ActionsCo_Invites();

		$obj->setDateAjout(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAjout());
	}

	/**
	 * Tests the setNomInterlocuteur() method.
	 *
	 * @return void
	 */
	public function testSetNomInterlocuteur() {

		$obj = new ActionsCo_Invites();

		$obj->setNomInterlocuteur("nomInterlocuteur");
		$this->assertEquals("nomInterlocuteur", $obj->getNomInterlocuteur());
	}

	/**
	 * Tests the setNumInterlocuteur() method.
	 *
	 * @return void
	 */
	public function testSetNumInterlocuteur() {

		$obj = new ActionsCo_Invites();

		$obj->setNumInterlocuteur(10);
		$this->assertEquals(10, $obj->getNumInterlocuteur());
	}

	/**
	 * Tests the setRetourNeg() method.
	 *
	 * @return void
	 */
	public function testSetRetourNeg() {

		$obj = new ActionsCo_Invites();

		$obj->setRetourNeg(true);
		$this->assertEquals(true, $obj->getRetourNeg());
	}

	/**
	 * Tests the setTypeInvitation() method.
	 *
	 * @return void
	 */
	public function testSetTypeInvitation() {

		$obj = new ActionsCo_Invites();

		$obj->setTypeInvitation(10);
		$this->assertEquals(10, $obj->getTypeInvitation());
	}

	/**
	 * Tests the setTypeInvite() method.
	 *
	 * @return void
	 */
	public function testSetTypeInvite() {

		$obj = new ActionsCo_Invites();

		$obj->setTypeInvite("typeInvite");
		$this->assertEquals("typeInvite", $obj->getTypeInvite());
	}

}
