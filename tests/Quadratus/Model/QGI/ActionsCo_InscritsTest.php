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

use WBW\Library\Core\Quadratus\Model\QGI\ActionsCo_Inscrits;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Actions co_ inscrits model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class ActionsCo_InscritsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ActionsCo_Inscrits();

		$this->assertNull($obj->getCodeAction());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeManif());
		$this->assertNull($obj->getConfirme());
		$this->assertNull($obj->getEMail());
		$this->assertNull($obj->getFax());
		$this->assertNull($obj->getNom());
		$this->assertNull($obj->getNumInterlocuteur());
		$this->assertNull($obj->getNumSeance());
		$this->assertNull($obj->getNumero());
		$this->assertNull($obj->getPrenom());
		$this->assertNull($obj->getPresent());
		$this->assertNull($obj->getTelephone());
		$this->assertNull($obj->getTypeInvite());
	}

	/**
	 * Tests the setCodeAction() method.
	 *
	 * @return void
	 */
	public function testSetCodeAction() {

		$obj = new ActionsCo_Inscrits();

		$obj->setCodeAction("codeAction");
		$this->assertEquals("codeAction", $obj->getCodeAction());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new ActionsCo_Inscrits();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeManif() method.
	 *
	 * @return void
	 */
	public function testSetCodeManif() {

		$obj = new ActionsCo_Inscrits();

		$obj->setCodeManif("codeManif");
		$this->assertEquals("codeManif", $obj->getCodeManif());
	}

	/**
	 * Tests the setConfirme() method.
	 *
	 * @return void
	 */
	public function testSetConfirme() {

		$obj = new ActionsCo_Inscrits();

		$obj->setConfirme(true);
		$this->assertEquals(true, $obj->getConfirme());
	}

	/**
	 * Tests the setEMail() method.
	 *
	 * @return void
	 */
	public function testSetEMail() {

		$obj = new ActionsCo_Inscrits();

		$obj->setEMail("eMail");
		$this->assertEquals("eMail", $obj->getEMail());
	}

	/**
	 * Tests the setFax() method.
	 *
	 * @return void
	 */
	public function testSetFax() {

		$obj = new ActionsCo_Inscrits();

		$obj->setFax("fax");
		$this->assertEquals("fax", $obj->getFax());
	}

	/**
	 * Tests the setNom() method.
	 *
	 * @return void
	 */
	public function testSetNom() {

		$obj = new ActionsCo_Inscrits();

		$obj->setNom("nom");
		$this->assertEquals("nom", $obj->getNom());
	}

	/**
	 * Tests the setNumInterlocuteur() method.
	 *
	 * @return void
	 */
	public function testSetNumInterlocuteur() {

		$obj = new ActionsCo_Inscrits();

		$obj->setNumInterlocuteur(10);
		$this->assertEquals(10, $obj->getNumInterlocuteur());
	}

	/**
	 * Tests the setNumSeance() method.
	 *
	 * @return void
	 */
	public function testSetNumSeance() {

		$obj = new ActionsCo_Inscrits();

		$obj->setNumSeance(10);
		$this->assertEquals(10, $obj->getNumSeance());
	}

	/**
	 * Tests the setNumero() method.
	 *
	 * @return void
	 */
	public function testSetNumero() {

		$obj = new ActionsCo_Inscrits();

		$obj->setNumero(10);
		$this->assertEquals(10, $obj->getNumero());
	}

	/**
	 * Tests the setPrenom() method.
	 *
	 * @return void
	 */
	public function testSetPrenom() {

		$obj = new ActionsCo_Inscrits();

		$obj->setPrenom("prenom");
		$this->assertEquals("prenom", $obj->getPrenom());
	}

	/**
	 * Tests the setPresent() method.
	 *
	 * @return void
	 */
	public function testSetPresent() {

		$obj = new ActionsCo_Inscrits();

		$obj->setPresent(true);
		$this->assertEquals(true, $obj->getPresent());
	}

	/**
	 * Tests the setTelephone() method.
	 *
	 * @return void
	 */
	public function testSetTelephone() {

		$obj = new ActionsCo_Inscrits();

		$obj->setTelephone("telephone");
		$this->assertEquals("telephone", $obj->getTelephone());
	}

	/**
	 * Tests the setTypeInvite() method.
	 *
	 * @return void
	 */
	public function testSetTypeInvite() {

		$obj = new ActionsCo_Inscrits();

		$obj->setTypeInvite("typeInvite");
		$this->assertEquals("typeInvite", $obj->getTypeInvite());
	}

}
