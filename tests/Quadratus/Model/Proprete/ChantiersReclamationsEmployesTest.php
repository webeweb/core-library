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

use DateTime;
use WBW\Library\Core\Quadratus\Model\Proprete\ChantiersReclamationsEmployes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Chantiers reclamations employes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 * @final
 */
final class ChantiersReclamationsEmployesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ChantiersReclamationsEmployes();

		$this->assertNull($obj->getAlerte());
		$this->assertNull($obj->getCodeAffaire());
		$this->assertNull($obj->getCodeChantier());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeEmploye());
		$this->assertNull($obj->getDateAlertePaie());
		$this->assertNull($obj->getLienDocument());
		$this->assertNull($obj->getNiveau());
		$this->assertNull($obj->getNumeroReclam());
	}

	/**
	 * Tests the setAlerte() method.
	 *
	 * @return void
	 */
	public function testSetAlerte() {

		$obj = new ChantiersReclamationsEmployes();

		$obj->setAlerte(true);
		$this->assertEquals(true, $obj->getAlerte());
	}

	/**
	 * Tests the setCodeAffaire() method.
	 *
	 * @return void
	 */
	public function testSetCodeAffaire() {

		$obj = new ChantiersReclamationsEmployes();

		$obj->setCodeAffaire("codeAffaire");
		$this->assertEquals("codeAffaire", $obj->getCodeAffaire());
	}

	/**
	 * Tests the setCodeChantier() method.
	 *
	 * @return void
	 */
	public function testSetCodeChantier() {

		$obj = new ChantiersReclamationsEmployes();

		$obj->setCodeChantier("codeChantier");
		$this->assertEquals("codeChantier", $obj->getCodeChantier());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new ChantiersReclamationsEmployes();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeEmploye() method.
	 *
	 * @return void
	 */
	public function testSetCodeEmploye() {

		$obj = new ChantiersReclamationsEmployes();

		$obj->setCodeEmploye("codeEmploye");
		$this->assertEquals("codeEmploye", $obj->getCodeEmploye());
	}

	/**
	 * Tests the setDateAlertePaie() method.
	 *
	 * @return void
	 */
	public function testSetDateAlertePaie() {

		$obj = new ChantiersReclamationsEmployes();

		$obj->setDateAlertePaie(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAlertePaie());
	}

	/**
	 * Tests the setLienDocument() method.
	 *
	 * @return void
	 */
	public function testSetLienDocument() {

		$obj = new ChantiersReclamationsEmployes();

		$obj->setLienDocument("lienDocument");
		$this->assertEquals("lienDocument", $obj->getLienDocument());
	}

	/**
	 * Tests the setNiveau() method.
	 *
	 * @return void
	 */
	public function testSetNiveau() {

		$obj = new ChantiersReclamationsEmployes();

		$obj->setNiveau("niveau");
		$this->assertEquals("niveau", $obj->getNiveau());
	}

	/**
	 * Tests the setNumeroReclam() method.
	 *
	 * @return void
	 */
	public function testSetNumeroReclam() {

		$obj = new ChantiersReclamationsEmployes();

		$obj->setNumeroReclam(10);
		$this->assertEquals(10, $obj->getNumeroReclam());
	}

}
