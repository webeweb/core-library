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
use WBW\Library\Core\Quadratus\Model\Proprete\ChantiersHistoRev;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Chantiers histo rev model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 * @final
 */
final class ChantiersHistoRevTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ChantiersHistoRev();

		$this->assertNull($obj->getCodeAffaire());
		$this->assertNull($obj->getCodeChantier());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeFormule());
		$this->assertNull($obj->getCodeRegroupement());
		$this->assertNull($obj->getCommentaire());
		$this->assertNull($obj->getDateRevision());
		$this->assertNull($obj->getFormule());
		$this->assertNull($obj->getLienDocument());
		$this->assertNull($obj->getNumBT());
		$this->assertNull($obj->getNumLigneRev());
		$this->assertNull($obj->getPeriodeRevisee());
		$this->assertNull($obj->getPourcentage());
		$this->assertNull($obj->getRefusClient());
	}

	/**
	 * Tests the setCodeAffaire() method.
	 *
	 * @return void
	 */
	public function testSetCodeAffaire() {

		$obj = new ChantiersHistoRev();

		$obj->setCodeAffaire("codeAffaire");
		$this->assertEquals("codeAffaire", $obj->getCodeAffaire());
	}

	/**
	 * Tests the setCodeChantier() method.
	 *
	 * @return void
	 */
	public function testSetCodeChantier() {

		$obj = new ChantiersHistoRev();

		$obj->setCodeChantier("codeChantier");
		$this->assertEquals("codeChantier", $obj->getCodeChantier());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new ChantiersHistoRev();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeFormule() method.
	 *
	 * @return void
	 */
	public function testSetCodeFormule() {

		$obj = new ChantiersHistoRev();

		$obj->setCodeFormule("codeFormule");
		$this->assertEquals("codeFormule", $obj->getCodeFormule());
	}

	/**
	 * Tests the setCodeRegroupement() method.
	 *
	 * @return void
	 */
	public function testSetCodeRegroupement() {

		$obj = new ChantiersHistoRev();

		$obj->setCodeRegroupement("codeRegroupement");
		$this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
	}

	/**
	 * Tests the setCommentaire() method.
	 *
	 * @return void
	 */
	public function testSetCommentaire() {

		$obj = new ChantiersHistoRev();

		$obj->setCommentaire("commentaire");
		$this->assertEquals("commentaire", $obj->getCommentaire());
	}

	/**
	 * Tests the setDateRevision() method.
	 *
	 * @return void
	 */
	public function testSetDateRevision() {

		$obj = new ChantiersHistoRev();

		$obj->setDateRevision(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateRevision());
	}

	/**
	 * Tests the setFormule() method.
	 *
	 * @return void
	 */
	public function testSetFormule() {

		$obj = new ChantiersHistoRev();

		$obj->setFormule("formule");
		$this->assertEquals("formule", $obj->getFormule());
	}

	/**
	 * Tests the setLienDocument() method.
	 *
	 * @return void
	 */
	public function testSetLienDocument() {

		$obj = new ChantiersHistoRev();

		$obj->setLienDocument("lienDocument");
		$this->assertEquals("lienDocument", $obj->getLienDocument());
	}

	/**
	 * Tests the setNumBT() method.
	 *
	 * @return void
	 */
	public function testSetNumBT() {

		$obj = new ChantiersHistoRev();

		$obj->setNumBT(10);
		$this->assertEquals(10, $obj->getNumBT());
	}

	/**
	 * Tests the setNumLigneRev() method.
	 *
	 * @return void
	 */
	public function testSetNumLigneRev() {

		$obj = new ChantiersHistoRev();

		$obj->setNumLigneRev(10);
		$this->assertEquals(10, $obj->getNumLigneRev());
	}

	/**
	 * Tests the setPeriodeRevisee() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeRevisee() {

		$obj = new ChantiersHistoRev();

		$obj->setPeriodeRevisee(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeRevisee());
	}

	/**
	 * Tests the setPourcentage() method.
	 *
	 * @return void
	 */
	public function testSetPourcentage() {

		$obj = new ChantiersHistoRev();

		$obj->setPourcentage(10.092018);
		$this->assertEquals(10.092018, $obj->getPourcentage());
	}

	/**
	 * Tests the setRefusClient() method.
	 *
	 * @return void
	 */
	public function testSetRefusClient() {

		$obj = new ChantiersHistoRev();

		$obj->setRefusClient(true);
		$this->assertEquals(true, $obj->getRefusClient());
	}

}
