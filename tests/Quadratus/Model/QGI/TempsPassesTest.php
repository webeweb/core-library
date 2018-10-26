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
use WBW\Library\Core\Quadratus\Model\QGI\TempsPasses;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Temps passes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class TempsPassesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new TempsPasses();

		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeCollaborateur());
		$this->assertNull($obj->getCodeMission());
		$this->assertNull($obj->getCodePhase());
		$this->assertNull($obj->getCodeTache());
		$this->assertNull($obj->getCodeVehicule());
		$this->assertNull($obj->getCoutKm());
		$this->assertNull($obj->getDateSaisie());
		$this->assertNull($obj->getDateSysSaisie());
		$this->assertNull($obj->getEtat());
		$this->assertNull($obj->getFacturable());
		$this->assertNull($obj->getGUniqID());
		$this->assertNull($obj->getHeureDebut());
		$this->assertNull($obj->getHeureFin());
		$this->assertNull($obj->getIDTps());
		$this->assertNull($obj->getIsTransf());
		$this->assertNull($obj->getLibelle());
		$this->assertNull($obj->getMonnaie());
		$this->assertNull($obj->getMontantCRT());
		$this->assertNull($obj->getMontantTVA());
		$this->assertNull($obj->getNbKm());
		$this->assertNull($obj->getNbUO());
		$this->assertNull($obj->getPU());
		$this->assertNull($obj->getPV1());
		$this->assertNull($obj->getPV2());
		$this->assertNull($obj->getPV3());
		$this->assertNull($obj->getPeriodeEditionNdF());
		$this->assertNull($obj->getQte());
		$this->assertNull($obj->getTauxRemise());
		$this->assertNull($obj->getTauxRemiseIci());
		$this->assertNull($obj->getUniqIDFacture());
		$this->assertNull($obj->getValide());
		$this->assertNull($obj->getValideCollab());
		$this->assertNull($obj->getValideDate());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new TempsPasses();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeCollaborateur() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollaborateur() {

		$obj = new TempsPasses();

		$obj->setCodeCollaborateur("codeCollaborateur");
		$this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
	}

	/**
	 * Tests the setCodeMission() method.
	 *
	 * @return void
	 */
	public function testSetCodeMission() {

		$obj = new TempsPasses();

		$obj->setCodeMission("codeMission");
		$this->assertEquals("codeMission", $obj->getCodeMission());
	}

	/**
	 * Tests the setCodePhase() method.
	 *
	 * @return void
	 */
	public function testSetCodePhase() {

		$obj = new TempsPasses();

		$obj->setCodePhase("codePhase");
		$this->assertEquals("codePhase", $obj->getCodePhase());
	}

	/**
	 * Tests the setCodeTache() method.
	 *
	 * @return void
	 */
	public function testSetCodeTache() {

		$obj = new TempsPasses();

		$obj->setCodeTache("codeTache");
		$this->assertEquals("codeTache", $obj->getCodeTache());
	}

	/**
	 * Tests the setCodeVehicule() method.
	 *
	 * @return void
	 */
	public function testSetCodeVehicule() {

		$obj = new TempsPasses();

		$obj->setCodeVehicule("codeVehicule");
		$this->assertEquals("codeVehicule", $obj->getCodeVehicule());
	}

	/**
	 * Tests the setCoutKm() method.
	 *
	 * @return void
	 */
	public function testSetCoutKm() {

		$obj = new TempsPasses();

		$obj->setCoutKm(10.092018);
		$this->assertEquals(10.092018, $obj->getCoutKm());
	}

	/**
	 * Tests the setDateSaisie() method.
	 *
	 * @return void
	 */
	public function testSetDateSaisie() {

		$obj = new TempsPasses();

		$obj->setDateSaisie(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSaisie());
	}

	/**
	 * Tests the setDateSysSaisie() method.
	 *
	 * @return void
	 */
	public function testSetDateSysSaisie() {

		$obj = new TempsPasses();

		$obj->setDateSysSaisie(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSysSaisie());
	}

	/**
	 * Tests the setEtat() method.
	 *
	 * @return void
	 */
	public function testSetEtat() {

		$obj = new TempsPasses();

		$obj->setEtat(10);
		$this->assertEquals(10, $obj->getEtat());
	}

	/**
	 * Tests the setFacturable() method.
	 *
	 * @return void
	 */
	public function testSetFacturable() {

		$obj = new TempsPasses();

		$obj->setFacturable(true);
		$this->assertEquals(true, $obj->getFacturable());
	}

	/**
	 * Tests the setGUniqID() method.
	 *
	 * @return void
	 */
	public function testSetGUniqID() {

		$obj = new TempsPasses();

		$obj->setGUniqID("gUniqID");
		$this->assertEquals("gUniqID", $obj->getGUniqID());
	}

	/**
	 * Tests the setHeureDebut() method.
	 *
	 * @return void
	 */
	public function testSetHeureDebut() {

		$obj = new TempsPasses();

		$obj->setHeureDebut(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getHeureDebut());
	}

	/**
	 * Tests the setHeureFin() method.
	 *
	 * @return void
	 */
	public function testSetHeureFin() {

		$obj = new TempsPasses();

		$obj->setHeureFin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getHeureFin());
	}

	/**
	 * Tests the setIDTps() method.
	 *
	 * @return void
	 */
	public function testSetIDTps() {

		$obj = new TempsPasses();

		$obj->setIDTps(10);
		$this->assertEquals(10, $obj->getIDTps());
	}

	/**
	 * Tests the setIsTransf() method.
	 *
	 * @return void
	 */
	public function testSetIsTransf() {

		$obj = new TempsPasses();

		$obj->setIsTransf(true);
		$this->assertEquals(true, $obj->getIsTransf());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new TempsPasses();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

	/**
	 * Tests the setMonnaie() method.
	 *
	 * @return void
	 */
	public function testSetMonnaie() {

		$obj = new TempsPasses();

		$obj->setMonnaie("monnaie");
		$this->assertEquals("monnaie", $obj->getMonnaie());
	}

	/**
	 * Tests the setMontantCRT() method.
	 *
	 * @return void
	 */
	public function testSetMontantCRT() {

		$obj = new TempsPasses();

		$obj->setMontantCRT(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantCRT());
	}

	/**
	 * Tests the setMontantTVA() method.
	 *
	 * @return void
	 */
	public function testSetMontantTVA() {

		$obj = new TempsPasses();

		$obj->setMontantTVA(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantTVA());
	}

	/**
	 * Tests the setNbKm() method.
	 *
	 * @return void
	 */
	public function testSetNbKm() {

		$obj = new TempsPasses();

		$obj->setNbKm(10.092018);
		$this->assertEquals(10.092018, $obj->getNbKm());
	}

	/**
	 * Tests the setNbUO() method.
	 *
	 * @return void
	 */
	public function testSetNbUO() {

		$obj = new TempsPasses();

		$obj->setNbUO(10.092018);
		$this->assertEquals(10.092018, $obj->getNbUO());
	}

	/**
	 * Tests the setPU() method.
	 *
	 * @return void
	 */
	public function testSetPU() {

		$obj = new TempsPasses();

		$obj->setPU(10.092018);
		$this->assertEquals(10.092018, $obj->getPU());
	}

	/**
	 * Tests the setPV1() method.
	 *
	 * @return void
	 */
	public function testSetPV1() {

		$obj = new TempsPasses();

		$obj->setPV1(10.092018);
		$this->assertEquals(10.092018, $obj->getPV1());
	}

	/**
	 * Tests the setPV2() method.
	 *
	 * @return void
	 */
	public function testSetPV2() {

		$obj = new TempsPasses();

		$obj->setPV2(10.092018);
		$this->assertEquals(10.092018, $obj->getPV2());
	}

	/**
	 * Tests the setPV3() method.
	 *
	 * @return void
	 */
	public function testSetPV3() {

		$obj = new TempsPasses();

		$obj->setPV3(10.092018);
		$this->assertEquals(10.092018, $obj->getPV3());
	}

	/**
	 * Tests the setPeriodeEditionNdF() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeEditionNdF() {

		$obj = new TempsPasses();

		$obj->setPeriodeEditionNdF(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeEditionNdF());
	}

	/**
	 * Tests the setQte() method.
	 *
	 * @return void
	 */
	public function testSetQte() {

		$obj = new TempsPasses();

		$obj->setQte(10.092018);
		$this->assertEquals(10.092018, $obj->getQte());
	}

	/**
	 * Tests the setTauxRemise() method.
	 *
	 * @return void
	 */
	public function testSetTauxRemise() {

		$obj = new TempsPasses();

		$obj->setTauxRemise(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxRemise());
	}

	/**
	 * Tests the setTauxRemiseIci() method.
	 *
	 * @return void
	 */
	public function testSetTauxRemiseIci() {

		$obj = new TempsPasses();

		$obj->setTauxRemiseIci(true);
		$this->assertEquals(true, $obj->getTauxRemiseIci());
	}

	/**
	 * Tests the setUniqIDFacture() method.
	 *
	 * @return void
	 */
	public function testSetUniqIDFacture() {

		$obj = new TempsPasses();

		$obj->setUniqIDFacture("uniqIDFacture");
		$this->assertEquals("uniqIDFacture", $obj->getUniqIDFacture());
	}

	/**
	 * Tests the setValide() method.
	 *
	 * @return void
	 */
	public function testSetValide() {

		$obj = new TempsPasses();

		$obj->setValide(true);
		$this->assertEquals(true, $obj->getValide());
	}

	/**
	 * Tests the setValideCollab() method.
	 *
	 * @return void
	 */
	public function testSetValideCollab() {

		$obj = new TempsPasses();

		$obj->setValideCollab("valideCollab");
		$this->assertEquals("valideCollab", $obj->getValideCollab());
	}

	/**
	 * Tests the setValideDate() method.
	 *
	 * @return void
	 */
	public function testSetValideDate() {

		$obj = new TempsPasses();

		$obj->setValideDate(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getValideDate());
	}

}
