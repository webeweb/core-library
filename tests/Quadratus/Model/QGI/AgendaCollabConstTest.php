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
use WBW\Library\Core\Quadratus\Model\QGI\AgendaCollabConst;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Agenda collab const model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class AgendaCollabConstTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new AgendaCollabConst();

		$this->assertNull($obj->getARTT());
		$this->assertNull($obj->getCodeCollaborateur());
		$this->assertNull($obj->getCodeSiteTenue());
		$this->assertNull($obj->getConfidentiel());
		$this->assertNull($obj->getDateDerniereModifAgenda());
		$this->assertNull($obj->getDimancheAMdeb());
		$this->assertNull($obj->getDimancheAMfin());
		$this->assertNull($obj->getDimanchePMdeb());
		$this->assertNull($obj->getDimanchePMfin());
		$this->assertNull($obj->getInterdireRdVHorsTravail());
		$this->assertNull($obj->getJeudiAMdeb());
		$this->assertNull($obj->getJeudiAMfin());
		$this->assertNull($obj->getJeudiPMdeb());
		$this->assertNull($obj->getJeudiPMfin());
		$this->assertNull($obj->getLundiAMdeb());
		$this->assertNull($obj->getLundiAMfin());
		$this->assertNull($obj->getLundiPMdeb());
		$this->assertNull($obj->getLundiPMfin());
		$this->assertNull($obj->getMardiAMdeb());
		$this->assertNull($obj->getMardiAMfin());
		$this->assertNull($obj->getMardiPMdeb());
		$this->assertNull($obj->getMardiPMfin());
		$this->assertNull($obj->getMercrediAMdeb());
		$this->assertNull($obj->getMercrediAMfin());
		$this->assertNull($obj->getMercrediPMdeb());
		$this->assertNull($obj->getMercrediPMfin());
		$this->assertNull($obj->getPlusPetiteDateActiviteModifiee());
		$this->assertNull($obj->getSamediAMdeb());
		$this->assertNull($obj->getSamediAMfin());
		$this->assertNull($obj->getSamediPMdeb());
		$this->assertNull($obj->getSamediPMfin());
		$this->assertNull($obj->getSuiviOrdreMission());
		$this->assertNull($obj->getUniteRDV());
		$this->assertNull($obj->getVendrediAMdeb());
		$this->assertNull($obj->getVendrediAMfin());
		$this->assertNull($obj->getVendrediPMdeb());
		$this->assertNull($obj->getVendrediPMfin());
	}

	/**
	 * Tests the setARTT() method.
	 *
	 * @return void
	 */
	public function testSetARTT() {

		$obj = new AgendaCollabConst();

		$obj->setARTT(true);
		$this->assertEquals(true, $obj->getARTT());
	}

	/**
	 * Tests the setCodeCollaborateur() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollaborateur() {

		$obj = new AgendaCollabConst();

		$obj->setCodeCollaborateur("codeCollaborateur");
		$this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
	}

	/**
	 * Tests the setCodeSiteTenue() method.
	 *
	 * @return void
	 */
	public function testSetCodeSiteTenue() {

		$obj = new AgendaCollabConst();

		$obj->setCodeSiteTenue("codeSiteTenue");
		$this->assertEquals("codeSiteTenue", $obj->getCodeSiteTenue());
	}

	/**
	 * Tests the setConfidentiel() method.
	 *
	 * @return void
	 */
	public function testSetConfidentiel() {

		$obj = new AgendaCollabConst();

		$obj->setConfidentiel(true);
		$this->assertEquals(true, $obj->getConfidentiel());
	}

	/**
	 * Tests the setDateDerniereModifAgenda() method.
	 *
	 * @return void
	 */
	public function testSetDateDerniereModifAgenda() {

		$obj = new AgendaCollabConst();

		$obj->setDateDerniereModifAgenda(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDerniereModifAgenda());
	}

	/**
	 * Tests the setDimancheAMdeb() method.
	 *
	 * @return void
	 */
	public function testSetDimancheAMdeb() {

		$obj = new AgendaCollabConst();

		$obj->setDimancheAMdeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDimancheAMdeb());
	}

	/**
	 * Tests the setDimancheAMfin() method.
	 *
	 * @return void
	 */
	public function testSetDimancheAMfin() {

		$obj = new AgendaCollabConst();

		$obj->setDimancheAMfin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDimancheAMfin());
	}

	/**
	 * Tests the setDimanchePMdeb() method.
	 *
	 * @return void
	 */
	public function testSetDimanchePMdeb() {

		$obj = new AgendaCollabConst();

		$obj->setDimanchePMdeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDimanchePMdeb());
	}

	/**
	 * Tests the setDimanchePMfin() method.
	 *
	 * @return void
	 */
	public function testSetDimanchePMfin() {

		$obj = new AgendaCollabConst();

		$obj->setDimanchePMfin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDimanchePMfin());
	}

	/**
	 * Tests the setInterdireRdVHorsTravail() method.
	 *
	 * @return void
	 */
	public function testSetInterdireRdVHorsTravail() {

		$obj = new AgendaCollabConst();

		$obj->setInterdireRdVHorsTravail(true);
		$this->assertEquals(true, $obj->getInterdireRdVHorsTravail());
	}

	/**
	 * Tests the setJeudiAMdeb() method.
	 *
	 * @return void
	 */
	public function testSetJeudiAMdeb() {

		$obj = new AgendaCollabConst();

		$obj->setJeudiAMdeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getJeudiAMdeb());
	}

	/**
	 * Tests the setJeudiAMfin() method.
	 *
	 * @return void
	 */
	public function testSetJeudiAMfin() {

		$obj = new AgendaCollabConst();

		$obj->setJeudiAMfin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getJeudiAMfin());
	}

	/**
	 * Tests the setJeudiPMdeb() method.
	 *
	 * @return void
	 */
	public function testSetJeudiPMdeb() {

		$obj = new AgendaCollabConst();

		$obj->setJeudiPMdeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getJeudiPMdeb());
	}

	/**
	 * Tests the setJeudiPMfin() method.
	 *
	 * @return void
	 */
	public function testSetJeudiPMfin() {

		$obj = new AgendaCollabConst();

		$obj->setJeudiPMfin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getJeudiPMfin());
	}

	/**
	 * Tests the setLundiAMdeb() method.
	 *
	 * @return void
	 */
	public function testSetLundiAMdeb() {

		$obj = new AgendaCollabConst();

		$obj->setLundiAMdeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getLundiAMdeb());
	}

	/**
	 * Tests the setLundiAMfin() method.
	 *
	 * @return void
	 */
	public function testSetLundiAMfin() {

		$obj = new AgendaCollabConst();

		$obj->setLundiAMfin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getLundiAMfin());
	}

	/**
	 * Tests the setLundiPMdeb() method.
	 *
	 * @return void
	 */
	public function testSetLundiPMdeb() {

		$obj = new AgendaCollabConst();

		$obj->setLundiPMdeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getLundiPMdeb());
	}

	/**
	 * Tests the setLundiPMfin() method.
	 *
	 * @return void
	 */
	public function testSetLundiPMfin() {

		$obj = new AgendaCollabConst();

		$obj->setLundiPMfin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getLundiPMfin());
	}

	/**
	 * Tests the setMardiAMdeb() method.
	 *
	 * @return void
	 */
	public function testSetMardiAMdeb() {

		$obj = new AgendaCollabConst();

		$obj->setMardiAMdeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getMardiAMdeb());
	}

	/**
	 * Tests the setMardiAMfin() method.
	 *
	 * @return void
	 */
	public function testSetMardiAMfin() {

		$obj = new AgendaCollabConst();

		$obj->setMardiAMfin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getMardiAMfin());
	}

	/**
	 * Tests the setMardiPMdeb() method.
	 *
	 * @return void
	 */
	public function testSetMardiPMdeb() {

		$obj = new AgendaCollabConst();

		$obj->setMardiPMdeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getMardiPMdeb());
	}

	/**
	 * Tests the setMardiPMfin() method.
	 *
	 * @return void
	 */
	public function testSetMardiPMfin() {

		$obj = new AgendaCollabConst();

		$obj->setMardiPMfin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getMardiPMfin());
	}

	/**
	 * Tests the setMercrediAMdeb() method.
	 *
	 * @return void
	 */
	public function testSetMercrediAMdeb() {

		$obj = new AgendaCollabConst();

		$obj->setMercrediAMdeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getMercrediAMdeb());
	}

	/**
	 * Tests the setMercrediAMfin() method.
	 *
	 * @return void
	 */
	public function testSetMercrediAMfin() {

		$obj = new AgendaCollabConst();

		$obj->setMercrediAMfin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getMercrediAMfin());
	}

	/**
	 * Tests the setMercrediPMdeb() method.
	 *
	 * @return void
	 */
	public function testSetMercrediPMdeb() {

		$obj = new AgendaCollabConst();

		$obj->setMercrediPMdeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getMercrediPMdeb());
	}

	/**
	 * Tests the setMercrediPMfin() method.
	 *
	 * @return void
	 */
	public function testSetMercrediPMfin() {

		$obj = new AgendaCollabConst();

		$obj->setMercrediPMfin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getMercrediPMfin());
	}

	/**
	 * Tests the setPlusPetiteDateActiviteModifiee() method.
	 *
	 * @return void
	 */
	public function testSetPlusPetiteDateActiviteModifiee() {

		$obj = new AgendaCollabConst();

		$obj->setPlusPetiteDateActiviteModifiee(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPlusPetiteDateActiviteModifiee());
	}

	/**
	 * Tests the setSamediAMdeb() method.
	 *
	 * @return void
	 */
	public function testSetSamediAMdeb() {

		$obj = new AgendaCollabConst();

		$obj->setSamediAMdeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getSamediAMdeb());
	}

	/**
	 * Tests the setSamediAMfin() method.
	 *
	 * @return void
	 */
	public function testSetSamediAMfin() {

		$obj = new AgendaCollabConst();

		$obj->setSamediAMfin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getSamediAMfin());
	}

	/**
	 * Tests the setSamediPMdeb() method.
	 *
	 * @return void
	 */
	public function testSetSamediPMdeb() {

		$obj = new AgendaCollabConst();

		$obj->setSamediPMdeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getSamediPMdeb());
	}

	/**
	 * Tests the setSamediPMfin() method.
	 *
	 * @return void
	 */
	public function testSetSamediPMfin() {

		$obj = new AgendaCollabConst();

		$obj->setSamediPMfin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getSamediPMfin());
	}

	/**
	 * Tests the setSuiviOrdreMission() method.
	 *
	 * @return void
	 */
	public function testSetSuiviOrdreMission() {

		$obj = new AgendaCollabConst();

		$obj->setSuiviOrdreMission(true);
		$this->assertEquals(true, $obj->getSuiviOrdreMission());
	}

	/**
	 * Tests the setUniteRDV() method.
	 *
	 * @return void
	 */
	public function testSetUniteRDV() {

		$obj = new AgendaCollabConst();

		$obj->setUniteRDV("uniteRDV");
		$this->assertEquals("uniteRDV", $obj->getUniteRDV());
	}

	/**
	 * Tests the setVendrediAMdeb() method.
	 *
	 * @return void
	 */
	public function testSetVendrediAMdeb() {

		$obj = new AgendaCollabConst();

		$obj->setVendrediAMdeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getVendrediAMdeb());
	}

	/**
	 * Tests the setVendrediAMfin() method.
	 *
	 * @return void
	 */
	public function testSetVendrediAMfin() {

		$obj = new AgendaCollabConst();

		$obj->setVendrediAMfin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getVendrediAMfin());
	}

	/**
	 * Tests the setVendrediPMdeb() method.
	 *
	 * @return void
	 */
	public function testSetVendrediPMdeb() {

		$obj = new AgendaCollabConst();

		$obj->setVendrediPMdeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getVendrediPMdeb());
	}

	/**
	 * Tests the setVendrediPMfin() method.
	 *
	 * @return void
	 */
	public function testSetVendrediPMfin() {

		$obj = new AgendaCollabConst();

		$obj->setVendrediPMfin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getVendrediPMfin());
	}

}
