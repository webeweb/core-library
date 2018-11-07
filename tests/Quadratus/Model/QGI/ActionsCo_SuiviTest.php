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

use WBW\Library\Core\Quadratus\Model\QGI\ActionsCo_Suivi;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Actions co_ suivi model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class ActionsCo_SuiviTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ActionsCo_Suivi();

		$this->assertNull($obj->getCodeAction());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeManif());
		$this->assertNull($obj->getConfirmes());
		$this->assertNull($obj->getContrat());
		$this->assertNull($obj->getInscrits());
		$this->assertNull($obj->getNumInterlocuteur());
		$this->assertNull($obj->getNumSeance());
		$this->assertNull($obj->getPresents());
		$this->assertNull($obj->getPriseRDV());
		$this->assertNull($obj->getTypeInvite());
	}

	/**
	 * Tests the setCodeAction() method.
	 *
	 * @return void
	 */
	public function testSetCodeAction() {

		$obj = new ActionsCo_Suivi();

		$obj->setCodeAction("codeAction");
		$this->assertEquals("codeAction", $obj->getCodeAction());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new ActionsCo_Suivi();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeManif() method.
	 *
	 * @return void
	 */
	public function testSetCodeManif() {

		$obj = new ActionsCo_Suivi();

		$obj->setCodeManif("codeManif");
		$this->assertEquals("codeManif", $obj->getCodeManif());
	}

	/**
	 * Tests the setConfirmes() method.
	 *
	 * @return void
	 */
	public function testSetConfirmes() {

		$obj = new ActionsCo_Suivi();

		$obj->setConfirmes(10);
		$this->assertEquals(10, $obj->getConfirmes());
	}

	/**
	 * Tests the setContrat() method.
	 *
	 * @return void
	 */
	public function testSetContrat() {

		$obj = new ActionsCo_Suivi();

		$obj->setContrat(10);
		$this->assertEquals(10, $obj->getContrat());
	}

	/**
	 * Tests the setInscrits() method.
	 *
	 * @return void
	 */
	public function testSetInscrits() {

		$obj = new ActionsCo_Suivi();

		$obj->setInscrits(10);
		$this->assertEquals(10, $obj->getInscrits());
	}

	/**
	 * Tests the setNumInterlocuteur() method.
	 *
	 * @return void
	 */
	public function testSetNumInterlocuteur() {

		$obj = new ActionsCo_Suivi();

		$obj->setNumInterlocuteur(10);
		$this->assertEquals(10, $obj->getNumInterlocuteur());
	}

	/**
	 * Tests the setNumSeance() method.
	 *
	 * @return void
	 */
	public function testSetNumSeance() {

		$obj = new ActionsCo_Suivi();

		$obj->setNumSeance(10);
		$this->assertEquals(10, $obj->getNumSeance());
	}

	/**
	 * Tests the setPresents() method.
	 *
	 * @return void
	 */
	public function testSetPresents() {

		$obj = new ActionsCo_Suivi();

		$obj->setPresents(10);
		$this->assertEquals(10, $obj->getPresents());
	}

	/**
	 * Tests the setPriseRDV() method.
	 *
	 * @return void
	 */
	public function testSetPriseRDV() {

		$obj = new ActionsCo_Suivi();

		$obj->setPriseRDV(10);
		$this->assertEquals(10, $obj->getPriseRDV());
	}

	/**
	 * Tests the setTypeInvite() method.
	 *
	 * @return void
	 */
	public function testSetTypeInvite() {

		$obj = new ActionsCo_Suivi();

		$obj->setTypeInvite("typeInvite");
		$this->assertEquals("typeInvite", $obj->getTypeInvite());
	}

}
