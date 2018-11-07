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
use WBW\Library\Core\Quadratus\Model\QGI\LiaisonsHistorique;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Liaisons historique model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class LiaisonsHistoriqueTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new LiaisonsHistorique();

		$this->assertNull($obj->getCodeCollab());
		$this->assertNull($obj->getDateLiaison());
		$this->assertNull($obj->getDateRetourPrevue());
		$this->assertNull($obj->getDestinataire());
		$this->assertNull($obj->getModules());
		$this->assertNull($obj->getModulesBloques());
		$this->assertNull($obj->getNumUniq());
		$this->assertNull($obj->getNumeroDossier());
		$this->assertNull($obj->getSens());
		$this->assertNull($obj->getTypeLiaison());
	}

	/**
	 * Tests the setCodeCollab() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollab() {

		$obj = new LiaisonsHistorique();

		$obj->setCodeCollab("codeCollab");
		$this->assertEquals("codeCollab", $obj->getCodeCollab());
	}

	/**
	 * Tests the setDateLiaison() method.
	 *
	 * @return void
	 */
	public function testSetDateLiaison() {

		$obj = new LiaisonsHistorique();

		$obj->setDateLiaison(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateLiaison());
	}

	/**
	 * Tests the setDateRetourPrevue() method.
	 *
	 * @return void
	 */
	public function testSetDateRetourPrevue() {

		$obj = new LiaisonsHistorique();

		$obj->setDateRetourPrevue(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateRetourPrevue());
	}

	/**
	 * Tests the setDestinataire() method.
	 *
	 * @return void
	 */
	public function testSetDestinataire() {

		$obj = new LiaisonsHistorique();

		$obj->setDestinataire("destinataire");
		$this->assertEquals("destinataire", $obj->getDestinataire());
	}

	/**
	 * Tests the setModules() method.
	 *
	 * @return void
	 */
	public function testSetModules() {

		$obj = new LiaisonsHistorique();

		$obj->setModules("modules");
		$this->assertEquals("modules", $obj->getModules());
	}

	/**
	 * Tests the setModulesBloques() method.
	 *
	 * @return void
	 */
	public function testSetModulesBloques() {

		$obj = new LiaisonsHistorique();

		$obj->setModulesBloques("modulesBloques");
		$this->assertEquals("modulesBloques", $obj->getModulesBloques());
	}

	/**
	 * Tests the setNumUniq() method.
	 *
	 * @return void
	 */
	public function testSetNumUniq() {

		$obj = new LiaisonsHistorique();

		$obj->setNumUniq(10);
		$this->assertEquals(10, $obj->getNumUniq());
	}

	/**
	 * Tests the setNumeroDossier() method.
	 *
	 * @return void
	 */
	public function testSetNumeroDossier() {

		$obj = new LiaisonsHistorique();

		$obj->setNumeroDossier("numeroDossier");
		$this->assertEquals("numeroDossier", $obj->getNumeroDossier());
	}

	/**
	 * Tests the setSens() method.
	 *
	 * @return void
	 */
	public function testSetSens() {

		$obj = new LiaisonsHistorique();

		$obj->setSens("sens");
		$this->assertEquals("sens", $obj->getSens());
	}

	/**
	 * Tests the setTypeLiaison() method.
	 *
	 * @return void
	 */
	public function testSetTypeLiaison() {

		$obj = new LiaisonsHistorique();

		$obj->setTypeLiaison("typeLiaison");
		$this->assertEquals("typeLiaison", $obj->getTypeLiaison());
	}

}
