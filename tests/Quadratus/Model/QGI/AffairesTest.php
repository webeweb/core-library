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
use WBW\Library\Core\Quadratus\Model\QGI\Affaires;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Affaires model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class AffairesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Affaires();

		$this->assertNull($obj->getClientDonneurOrdre());
		$this->assertNull($obj->getClientPayeur());
		$this->assertNull($obj->getCodeAffaire());
		$this->assertNull($obj->getCodeAvenant());
		$this->assertNull($obj->getCodeColCreat());
		$this->assertNull($obj->getCodeColModif());
		$this->assertNull($obj->getCodePhase());
		$this->assertNull($obj->getCoutHeureTheo());
		$this->assertNull($obj->getDateCreation());
		$this->assertNull($obj->getDateDebutPrevue());
		$this->assertNull($obj->getDateDebutReelle());
		$this->assertNull($obj->getDateFinPrevue());
		$this->assertNull($obj->getDateFinReelle());
		$this->assertNull($obj->getDateModification());
		$this->assertNull($obj->getEchEnMt());
		$this->assertNull($obj->getEtat());
		$this->assertNull($obj->getEtat1());
		$this->assertNull($obj->getEtat2());
		$this->assertNull($obj->getEtat3());
		$this->assertNull($obj->getEtat4());
		$this->assertNull($obj->getEtat5());
		$this->assertNull($obj->getIntitule());
		$this->assertNull($obj->getListeCollabAcces());
		$this->assertNull($obj->getMtCAPrevu());
		$this->assertNull($obj->getNbHeuresInterim());
		$this->assertNull($obj->getNbHeuresPrevues());
		$this->assertNull($obj->getNbHeuresReelInterim());
		$this->assertNull($obj->getNbHeuresReelSousTrait());
		$this->assertNull($obj->getNbHeuresSousTrait());
		$this->assertNull($obj->getNbInscrits());
		$this->assertNull($obj->getNbJoursPrevus());
		$this->assertNull($obj->getNbJoursReels());
		$this->assertNull($obj->getProchainNumArr());
		$this->assertNull($obj->getRefDevis());
		$this->assertNull($obj->getResponsable());
		$this->assertNull($obj->getResponsableChantier());
		$this->assertNull($obj->getType());
		$this->assertNull($obj->getTypeFG());
	}

	/**
	 * Tests the setClientDonneurOrdre() method.
	 *
	 * @return void
	 */
	public function testSetClientDonneurOrdre() {

		$obj = new Affaires();

		$obj->setClientDonneurOrdre("clientDonneurOrdre");
		$this->assertEquals("clientDonneurOrdre", $obj->getClientDonneurOrdre());
	}

	/**
	 * Tests the setClientPayeur() method.
	 *
	 * @return void
	 */
	public function testSetClientPayeur() {

		$obj = new Affaires();

		$obj->setClientPayeur("clientPayeur");
		$this->assertEquals("clientPayeur", $obj->getClientPayeur());
	}

	/**
	 * Tests the setCodeAffaire() method.
	 *
	 * @return void
	 */
	public function testSetCodeAffaire() {

		$obj = new Affaires();

		$obj->setCodeAffaire("codeAffaire");
		$this->assertEquals("codeAffaire", $obj->getCodeAffaire());
	}

	/**
	 * Tests the setCodeAvenant() method.
	 *
	 * @return void
	 */
	public function testSetCodeAvenant() {

		$obj = new Affaires();

		$obj->setCodeAvenant("codeAvenant");
		$this->assertEquals("codeAvenant", $obj->getCodeAvenant());
	}

	/**
	 * Tests the setCodeColCreat() method.
	 *
	 * @return void
	 */
	public function testSetCodeColCreat() {

		$obj = new Affaires();

		$obj->setCodeColCreat("codeColCreat");
		$this->assertEquals("codeColCreat", $obj->getCodeColCreat());
	}

	/**
	 * Tests the setCodeColModif() method.
	 *
	 * @return void
	 */
	public function testSetCodeColModif() {

		$obj = new Affaires();

		$obj->setCodeColModif("codeColModif");
		$this->assertEquals("codeColModif", $obj->getCodeColModif());
	}

	/**
	 * Tests the setCodePhase() method.
	 *
	 * @return void
	 */
	public function testSetCodePhase() {

		$obj = new Affaires();

		$obj->setCodePhase("codePhase");
		$this->assertEquals("codePhase", $obj->getCodePhase());
	}

	/**
	 * Tests the setCoutHeureTheo() method.
	 *
	 * @return void
	 */
	public function testSetCoutHeureTheo() {

		$obj = new Affaires();

		$obj->setCoutHeureTheo(10.092018);
		$this->assertEquals(10.092018, $obj->getCoutHeureTheo());
	}

	/**
	 * Tests the setDateCreation() method.
	 *
	 * @return void
	 */
	public function testSetDateCreation() {

		$obj = new Affaires();

		$obj->setDateCreation(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreation());
	}

	/**
	 * Tests the setDateDebutPrevue() method.
	 *
	 * @return void
	 */
	public function testSetDateDebutPrevue() {

		$obj = new Affaires();

		$obj->setDateDebutPrevue(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebutPrevue());
	}

	/**
	 * Tests the setDateDebutReelle() method.
	 *
	 * @return void
	 */
	public function testSetDateDebutReelle() {

		$obj = new Affaires();

		$obj->setDateDebutReelle(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebutReelle());
	}

	/**
	 * Tests the setDateFinPrevue() method.
	 *
	 * @return void
	 */
	public function testSetDateFinPrevue() {

		$obj = new Affaires();

		$obj->setDateFinPrevue(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinPrevue());
	}

	/**
	 * Tests the setDateFinReelle() method.
	 *
	 * @return void
	 */
	public function testSetDateFinReelle() {

		$obj = new Affaires();

		$obj->setDateFinReelle(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinReelle());
	}

	/**
	 * Tests the setDateModification() method.
	 *
	 * @return void
	 */
	public function testSetDateModification() {

		$obj = new Affaires();

		$obj->setDateModification(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModification());
	}

	/**
	 * Tests the setEchEnMt() method.
	 *
	 * @return void
	 */
	public function testSetEchEnMt() {

		$obj = new Affaires();

		$obj->setEchEnMt(true);
		$this->assertEquals(true, $obj->getEchEnMt());
	}

	/**
	 * Tests the setEtat() method.
	 *
	 * @return void
	 */
	public function testSetEtat() {

		$obj = new Affaires();

		$obj->setEtat("etat");
		$this->assertEquals("etat", $obj->getEtat());
	}

	/**
	 * Tests the setEtat1() method.
	 *
	 * @return void
	 */
	public function testSetEtat1() {

		$obj = new Affaires();

		$obj->setEtat1("etat1");
		$this->assertEquals("etat1", $obj->getEtat1());
	}

	/**
	 * Tests the setEtat2() method.
	 *
	 * @return void
	 */
	public function testSetEtat2() {

		$obj = new Affaires();

		$obj->setEtat2("etat2");
		$this->assertEquals("etat2", $obj->getEtat2());
	}

	/**
	 * Tests the setEtat3() method.
	 *
	 * @return void
	 */
	public function testSetEtat3() {

		$obj = new Affaires();

		$obj->setEtat3("etat3");
		$this->assertEquals("etat3", $obj->getEtat3());
	}

	/**
	 * Tests the setEtat4() method.
	 *
	 * @return void
	 */
	public function testSetEtat4() {

		$obj = new Affaires();

		$obj->setEtat4("etat4");
		$this->assertEquals("etat4", $obj->getEtat4());
	}

	/**
	 * Tests the setEtat5() method.
	 *
	 * @return void
	 */
	public function testSetEtat5() {

		$obj = new Affaires();

		$obj->setEtat5("etat5");
		$this->assertEquals("etat5", $obj->getEtat5());
	}

	/**
	 * Tests the setIntitule() method.
	 *
	 * @return void
	 */
	public function testSetIntitule() {

		$obj = new Affaires();

		$obj->setIntitule("intitule");
		$this->assertEquals("intitule", $obj->getIntitule());
	}

	/**
	 * Tests the setListeCollabAcces() method.
	 *
	 * @return void
	 */
	public function testSetListeCollabAcces() {

		$obj = new Affaires();

		$obj->setListeCollabAcces("listeCollabAcces");
		$this->assertEquals("listeCollabAcces", $obj->getListeCollabAcces());
	}

	/**
	 * Tests the setMtCAPrevu() method.
	 *
	 * @return void
	 */
	public function testSetMtCAPrevu() {

		$obj = new Affaires();

		$obj->setMtCAPrevu(10.092018);
		$this->assertEquals(10.092018, $obj->getMtCAPrevu());
	}

	/**
	 * Tests the setNbHeuresInterim() method.
	 *
	 * @return void
	 */
	public function testSetNbHeuresInterim() {

		$obj = new Affaires();

		$obj->setNbHeuresInterim(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHeuresInterim());
	}

	/**
	 * Tests the setNbHeuresPrevues() method.
	 *
	 * @return void
	 */
	public function testSetNbHeuresPrevues() {

		$obj = new Affaires();

		$obj->setNbHeuresPrevues(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHeuresPrevues());
	}

	/**
	 * Tests the setNbHeuresReelInterim() method.
	 *
	 * @return void
	 */
	public function testSetNbHeuresReelInterim() {

		$obj = new Affaires();

		$obj->setNbHeuresReelInterim(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHeuresReelInterim());
	}

	/**
	 * Tests the setNbHeuresReelSousTrait() method.
	 *
	 * @return void
	 */
	public function testSetNbHeuresReelSousTrait() {

		$obj = new Affaires();

		$obj->setNbHeuresReelSousTrait(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHeuresReelSousTrait());
	}

	/**
	 * Tests the setNbHeuresSousTrait() method.
	 *
	 * @return void
	 */
	public function testSetNbHeuresSousTrait() {

		$obj = new Affaires();

		$obj->setNbHeuresSousTrait(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHeuresSousTrait());
	}

	/**
	 * Tests the setNbInscrits() method.
	 *
	 * @return void
	 */
	public function testSetNbInscrits() {

		$obj = new Affaires();

		$obj->setNbInscrits(10);
		$this->assertEquals(10, $obj->getNbInscrits());
	}

	/**
	 * Tests the setNbJoursPrevus() method.
	 *
	 * @return void
	 */
	public function testSetNbJoursPrevus() {

		$obj = new Affaires();

		$obj->setNbJoursPrevus(10.092018);
		$this->assertEquals(10.092018, $obj->getNbJoursPrevus());
	}

	/**
	 * Tests the setNbJoursReels() method.
	 *
	 * @return void
	 */
	public function testSetNbJoursReels() {

		$obj = new Affaires();

		$obj->setNbJoursReels(10.092018);
		$this->assertEquals(10.092018, $obj->getNbJoursReels());
	}

	/**
	 * Tests the setProchainNumArr() method.
	 *
	 * @return void
	 */
	public function testSetProchainNumArr() {

		$obj = new Affaires();

		$obj->setProchainNumArr(10);
		$this->assertEquals(10, $obj->getProchainNumArr());
	}

	/**
	 * Tests the setRefDevis() method.
	 *
	 * @return void
	 */
	public function testSetRefDevis() {

		$obj = new Affaires();

		$obj->setRefDevis("refDevis");
		$this->assertEquals("refDevis", $obj->getRefDevis());
	}

	/**
	 * Tests the setResponsable() method.
	 *
	 * @return void
	 */
	public function testSetResponsable() {

		$obj = new Affaires();

		$obj->setResponsable("responsable");
		$this->assertEquals("responsable", $obj->getResponsable());
	}

	/**
	 * Tests the setResponsableChantier() method.
	 *
	 * @return void
	 */
	public function testSetResponsableChantier() {

		$obj = new Affaires();

		$obj->setResponsableChantier("responsableChantier");
		$this->assertEquals("responsableChantier", $obj->getResponsableChantier());
	}

	/**
	 * Tests the setType() method.
	 *
	 * @return void
	 */
	public function testSetType() {

		$obj = new Affaires();

		$obj->setType("type");
		$this->assertEquals("type", $obj->getType());
	}

	/**
	 * Tests the setTypeFG() method.
	 *
	 * @return void
	 */
	public function testSetTypeFG() {

		$obj = new Affaires();

		$obj->setTypeFG("typeFG");
		$this->assertEquals("typeFG", $obj->getTypeFG());
	}

}
