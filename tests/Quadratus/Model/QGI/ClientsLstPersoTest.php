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
use WBW\Library\Core\Quadratus\Model\QGI\ClientsLstPerso;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Clients lst perso model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class ClientsLstPersoTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ClientsLstPerso();

		$this->assertNull($obj->getChapitre());
		$this->assertNull($obj->getCollCreat());
		$this->assertNull($obj->getCollModif());
		$this->assertNull($obj->getDateCreat());
		$this->assertNull($obj->getDateModif());
		$this->assertNull($obj->getDescription());
		$this->assertNull($obj->getGUniqID());
		$this->assertNull($obj->getIndice());
		$this->assertNull($obj->getLstCollab());
		$this->assertNull($obj->getOptionVisu());
		$this->assertNull($obj->getOrigine());
		$this->assertNull($obj->getPeriodeDeb());
		$this->assertNull($obj->getPeriodeFin());
		$this->assertNull($obj->getTypeSaisie());
		$this->assertNull($obj->getTypeSel());
	}

	/**
	 * Tests the setChapitre() method.
	 *
	 * @return void
	 */
	public function testSetChapitre() {

		$obj = new ClientsLstPerso();

		$obj->setChapitre("chapitre");
		$this->assertEquals("chapitre", $obj->getChapitre());
	}

	/**
	 * Tests the setCollCreat() method.
	 *
	 * @return void
	 */
	public function testSetCollCreat() {

		$obj = new ClientsLstPerso();

		$obj->setCollCreat("collCreat");
		$this->assertEquals("collCreat", $obj->getCollCreat());
	}

	/**
	 * Tests the setCollModif() method.
	 *
	 * @return void
	 */
	public function testSetCollModif() {

		$obj = new ClientsLstPerso();

		$obj->setCollModif("collModif");
		$this->assertEquals("collModif", $obj->getCollModif());
	}

	/**
	 * Tests the setDateCreat() method.
	 *
	 * @return void
	 */
	public function testSetDateCreat() {

		$obj = new ClientsLstPerso();

		$obj->setDateCreat(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreat());
	}

	/**
	 * Tests the setDateModif() method.
	 *
	 * @return void
	 */
	public function testSetDateModif() {

		$obj = new ClientsLstPerso();

		$obj->setDateModif(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModif());
	}

	/**
	 * Tests the setDescription() method.
	 *
	 * @return void
	 */
	public function testSetDescription() {

		$obj = new ClientsLstPerso();

		$obj->setDescription("description");
		$this->assertEquals("description", $obj->getDescription());
	}

	/**
	 * Tests the setGUniqID() method.
	 *
	 * @return void
	 */
	public function testSetGUniqID() {

		$obj = new ClientsLstPerso();

		$obj->setGUniqID("gUniqID");
		$this->assertEquals("gUniqID", $obj->getGUniqID());
	}

	/**
	 * Tests the setIndice() method.
	 *
	 * @return void
	 */
	public function testSetIndice() {

		$obj = new ClientsLstPerso();

		$obj->setIndice(10);
		$this->assertEquals(10, $obj->getIndice());
	}

	/**
	 * Tests the setLstCollab() method.
	 *
	 * @return void
	 */
	public function testSetLstCollab() {

		$obj = new ClientsLstPerso();

		$obj->setLstCollab("lstCollab");
		$this->assertEquals("lstCollab", $obj->getLstCollab());
	}

	/**
	 * Tests the setOptionVisu() method.
	 *
	 * @return void
	 */
	public function testSetOptionVisu() {

		$obj = new ClientsLstPerso();

		$obj->setOptionVisu("optionVisu");
		$this->assertEquals("optionVisu", $obj->getOptionVisu());
	}

	/**
	 * Tests the setOrigine() method.
	 *
	 * @return void
	 */
	public function testSetOrigine() {

		$obj = new ClientsLstPerso();

		$obj->setOrigine(10);
		$this->assertEquals(10, $obj->getOrigine());
	}

	/**
	 * Tests the setPeriodeDeb() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeDeb() {

		$obj = new ClientsLstPerso();

		$obj->setPeriodeDeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDeb());
	}

	/**
	 * Tests the setPeriodeFin() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeFin() {

		$obj = new ClientsLstPerso();

		$obj->setPeriodeFin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeFin());
	}

	/**
	 * Tests the setTypeSaisie() method.
	 *
	 * @return void
	 */
	public function testSetTypeSaisie() {

		$obj = new ClientsLstPerso();

		$obj->setTypeSaisie(true);
		$this->assertEquals(true, $obj->getTypeSaisie());
	}

	/**
	 * Tests the setTypeSel() method.
	 *
	 * @return void
	 */
	public function testSetTypeSel() {

		$obj = new ClientsLstPerso();

		$obj->setTypeSel("typeSel");
		$this->assertEquals("typeSel", $obj->getTypeSel());
	}

}
