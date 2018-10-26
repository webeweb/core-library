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
use WBW\Library\Core\Quadratus\Model\QGI\Missions;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Missions model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class MissionsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Missions();

		$this->assertNull($obj->getArticle());
		$this->assertNull($obj->getBMCalcule());
		$this->assertNull($obj->getCentreAnalytique());
		$this->assertNull($obj->getCloture());
		$this->assertNull($obj->getClotureContexte());
		$this->assertNull($obj->getClotureDate());
		$this->assertNull($obj->getCloturePar());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeMission());
		$this->assertNull($obj->getCodeMissionType());
		$this->assertNull($obj->getCodeResponsable());
		$this->assertNull($obj->getDateCreation());
		$this->assertNull($obj->getDateDebutTP());
		$this->assertNull($obj->getDateFinTP());
		$this->assertNull($obj->getDateModification());
		$this->assertNull($obj->getDecalageFermetureAuto());
		$this->assertNull($obj->getDecalageFermetureAutoJours());
		$this->assertNull($obj->getDecalageOuvertureAuto());
		$this->assertNull($obj->getDescriptif());
		$this->assertNull($obj->getDescriptifRTF());
		$this->assertNull($obj->getDtFermetureAuto());
		$this->assertNull($obj->getFermetureAuto());
		$this->assertNull($obj->getLibelle());
		$this->assertNull($obj->getMissionMillesime());
		$this->assertNull($obj->getMoisOuvertureAuto());
		$this->assertNull($obj->getOuvertureContexte());
		$this->assertNull($obj->getOuvertureDate());
		$this->assertNull($obj->getOuverturePar());
		$this->assertNull($obj->getSociete());
		$this->assertNull($obj->getTPArchive());
		$this->assertNull($obj->getTPCloture());
		$this->assertNull($obj->getTransfertCentre());
		$this->assertNull($obj->getTypeCentre());
		$this->assertNull($obj->getTypeResponsable());
	}

	/**
	 * Tests the setArticle() method.
	 *
	 * @return void
	 */
	public function testSetArticle() {

		$obj = new Missions();

		$obj->setArticle("article");
		$this->assertEquals("article", $obj->getArticle());
	}

	/**
	 * Tests the setBMCalcule() method.
	 *
	 * @return void
	 */
	public function testSetBMCalcule() {

		$obj = new Missions();

		$obj->setBMCalcule(true);
		$this->assertEquals(true, $obj->getBMCalcule());
	}

	/**
	 * Tests the setCentreAnalytique() method.
	 *
	 * @return void
	 */
	public function testSetCentreAnalytique() {

		$obj = new Missions();

		$obj->setCentreAnalytique("centreAnalytique");
		$this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
	}

	/**
	 * Tests the setCloture() method.
	 *
	 * @return void
	 */
	public function testSetCloture() {

		$obj = new Missions();

		$obj->setCloture(true);
		$this->assertEquals(true, $obj->getCloture());
	}

	/**
	 * Tests the setClotureContexte() method.
	 *
	 * @return void
	 */
	public function testSetClotureContexte() {

		$obj = new Missions();

		$obj->setClotureContexte("clotureContexte");
		$this->assertEquals("clotureContexte", $obj->getClotureContexte());
	}

	/**
	 * Tests the setClotureDate() method.
	 *
	 * @return void
	 */
	public function testSetClotureDate() {

		$obj = new Missions();

		$obj->setClotureDate(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getClotureDate());
	}

	/**
	 * Tests the setCloturePar() method.
	 *
	 * @return void
	 */
	public function testSetCloturePar() {

		$obj = new Missions();

		$obj->setCloturePar("cloturePar");
		$this->assertEquals("cloturePar", $obj->getCloturePar());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new Missions();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeMission() method.
	 *
	 * @return void
	 */
	public function testSetCodeMission() {

		$obj = new Missions();

		$obj->setCodeMission("codeMission");
		$this->assertEquals("codeMission", $obj->getCodeMission());
	}

	/**
	 * Tests the setCodeMissionType() method.
	 *
	 * @return void
	 */
	public function testSetCodeMissionType() {

		$obj = new Missions();

		$obj->setCodeMissionType("codeMissionType");
		$this->assertEquals("codeMissionType", $obj->getCodeMissionType());
	}

	/**
	 * Tests the setCodeResponsable() method.
	 *
	 * @return void
	 */
	public function testSetCodeResponsable() {

		$obj = new Missions();

		$obj->setCodeResponsable("codeResponsable");
		$this->assertEquals("codeResponsable", $obj->getCodeResponsable());
	}

	/**
	 * Tests the setDateCreation() method.
	 *
	 * @return void
	 */
	public function testSetDateCreation() {

		$obj = new Missions();

		$obj->setDateCreation(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreation());
	}

	/**
	 * Tests the setDateDebutTP() method.
	 *
	 * @return void
	 */
	public function testSetDateDebutTP() {

		$obj = new Missions();

		$obj->setDateDebutTP(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebutTP());
	}

	/**
	 * Tests the setDateFinTP() method.
	 *
	 * @return void
	 */
	public function testSetDateFinTP() {

		$obj = new Missions();

		$obj->setDateFinTP(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinTP());
	}

	/**
	 * Tests the setDateModification() method.
	 *
	 * @return void
	 */
	public function testSetDateModification() {

		$obj = new Missions();

		$obj->setDateModification(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModification());
	}

	/**
	 * Tests the setDecalageFermetureAuto() method.
	 *
	 * @return void
	 */
	public function testSetDecalageFermetureAuto() {

		$obj = new Missions();

		$obj->setDecalageFermetureAuto(10);
		$this->assertEquals(10, $obj->getDecalageFermetureAuto());
	}

	/**
	 * Tests the setDecalageFermetureAutoJours() method.
	 *
	 * @return void
	 */
	public function testSetDecalageFermetureAutoJours() {

		$obj = new Missions();

		$obj->setDecalageFermetureAutoJours(10);
		$this->assertEquals(10, $obj->getDecalageFermetureAutoJours());
	}

	/**
	 * Tests the setDecalageOuvertureAuto() method.
	 *
	 * @return void
	 */
	public function testSetDecalageOuvertureAuto() {

		$obj = new Missions();

		$obj->setDecalageOuvertureAuto(10);
		$this->assertEquals(10, $obj->getDecalageOuvertureAuto());
	}

	/**
	 * Tests the setDescriptif() method.
	 *
	 * @return void
	 */
	public function testSetDescriptif() {

		$obj = new Missions();

		$obj->setDescriptif("descriptif");
		$this->assertEquals("descriptif", $obj->getDescriptif());
	}

	/**
	 * Tests the setDescriptifRTF() method.
	 *
	 * @return void
	 */
	public function testSetDescriptifRTF() {

		$obj = new Missions();

		$obj->setDescriptifRTF("descriptifRTF");
		$this->assertEquals("descriptifRTF", $obj->getDescriptifRTF());
	}

	/**
	 * Tests the setDtFermetureAuto() method.
	 *
	 * @return void
	 */
	public function testSetDtFermetureAuto() {

		$obj = new Missions();

		$obj->setDtFermetureAuto(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDtFermetureAuto());
	}

	/**
	 * Tests the setFermetureAuto() method.
	 *
	 * @return void
	 */
	public function testSetFermetureAuto() {

		$obj = new Missions();

		$obj->setFermetureAuto(true);
		$this->assertEquals(true, $obj->getFermetureAuto());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new Missions();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

	/**
	 * Tests the setMissionMillesime() method.
	 *
	 * @return void
	 */
	public function testSetMissionMillesime() {

		$obj = new Missions();

		$obj->setMissionMillesime(true);
		$this->assertEquals(true, $obj->getMissionMillesime());
	}

	/**
	 * Tests the setMoisOuvertureAuto() method.
	 *
	 * @return void
	 */
	public function testSetMoisOuvertureAuto() {

		$obj = new Missions();

		$obj->setMoisOuvertureAuto(10);
		$this->assertEquals(10, $obj->getMoisOuvertureAuto());
	}

	/**
	 * Tests the setOuvertureContexte() method.
	 *
	 * @return void
	 */
	public function testSetOuvertureContexte() {

		$obj = new Missions();

		$obj->setOuvertureContexte("ouvertureContexte");
		$this->assertEquals("ouvertureContexte", $obj->getOuvertureContexte());
	}

	/**
	 * Tests the setOuvertureDate() method.
	 *
	 * @return void
	 */
	public function testSetOuvertureDate() {

		$obj = new Missions();

		$obj->setOuvertureDate(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getOuvertureDate());
	}

	/**
	 * Tests the setOuverturePar() method.
	 *
	 * @return void
	 */
	public function testSetOuverturePar() {

		$obj = new Missions();

		$obj->setOuverturePar("ouverturePar");
		$this->assertEquals("ouverturePar", $obj->getOuverturePar());
	}

	/**
	 * Tests the setSociete() method.
	 *
	 * @return void
	 */
	public function testSetSociete() {

		$obj = new Missions();

		$obj->setSociete("societe");
		$this->assertEquals("societe", $obj->getSociete());
	}

	/**
	 * Tests the setTPArchive() method.
	 *
	 * @return void
	 */
	public function testSetTPArchive() {

		$obj = new Missions();

		$obj->setTPArchive(true);
		$this->assertEquals(true, $obj->getTPArchive());
	}

	/**
	 * Tests the setTPCloture() method.
	 *
	 * @return void
	 */
	public function testSetTPCloture() {

		$obj = new Missions();

		$obj->setTPCloture(true);
		$this->assertEquals(true, $obj->getTPCloture());
	}

	/**
	 * Tests the setTransfertCentre() method.
	 *
	 * @return void
	 */
	public function testSetTransfertCentre() {

		$obj = new Missions();

		$obj->setTransfertCentre(true);
		$this->assertEquals(true, $obj->getTransfertCentre());
	}

	/**
	 * Tests the setTypeCentre() method.
	 *
	 * @return void
	 */
	public function testSetTypeCentre() {

		$obj = new Missions();

		$obj->setTypeCentre("typeCentre");
		$this->assertEquals("typeCentre", $obj->getTypeCentre());
	}

	/**
	 * Tests the setTypeResponsable() method.
	 *
	 * @return void
	 */
	public function testSetTypeResponsable() {

		$obj = new Missions();

		$obj->setTypeResponsable("typeResponsable");
		$this->assertEquals("typeResponsable", $obj->getTypeResponsable());
	}

}
