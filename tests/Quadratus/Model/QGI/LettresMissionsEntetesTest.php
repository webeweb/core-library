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
use WBW\Library\Core\Quadratus\Model\QGI\LettresMissionsEntetes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Lettres missions entetes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class LettresMissionsEntetesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new LettresMissionsEntetes();

		$this->assertNull($obj->getCA());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeRegroupement());
		$this->assertNull($obj->getComment1());
		$this->assertNull($obj->getComment2());
		$this->assertNull($obj->getComment3());
		$this->assertNull($obj->getComment4());
		$this->assertNull($obj->getComment5());
		$this->assertNull($obj->getComment6());
		$this->assertNull($obj->getComment7());
		$this->assertNull($obj->getDateEntretien());
		$this->assertNull($obj->getDateSignature());
		$this->assertNull($obj->getDebutMission());
		$this->assertNull($obj->getEtat());
		$this->assertNull($obj->getExerciceCourant());
		$this->assertNull($obj->getFinMission());
		$this->assertNull($obj->getHonoPrev());
		$this->assertNull($obj->getLibelle1());
		$this->assertNull($obj->getLibelle2());
		$this->assertNull($obj->getLibelle3());
		$this->assertNull($obj->getLibelle4());
		$this->assertNull($obj->getLibelle5());
		$this->assertNull($obj->getLibelle6());
		$this->assertNull($obj->getLibelle7());
		$this->assertNull($obj->getNbDeplacements());
		$this->assertNull($obj->getNbrActes());
		$this->assertNull($obj->getNbrBulletins());
		$this->assertNull($obj->getNbrEcrituresBq());
		$this->assertNull($obj->getNbrEcrituresDepenses());
		$this->assertNull($obj->getNbrEcrituresOD());
		$this->assertNull($obj->getNbrEcrituresRecettes());
		$this->assertNull($obj->getNbrEmployes());
		$this->assertNull($obj->getNumeroLettre());
		$this->assertNull($obj->getPolice1());
		$this->assertNull($obj->getPolice2());
		$this->assertNull($obj->getPolice3());
		$this->assertNull($obj->getPremierExercice());
		$this->assertNull($obj->getPrix1());
		$this->assertNull($obj->getPrix2());
		$this->assertNull($obj->getPrix3());
		$this->assertNull($obj->getPrix4());
		$this->assertNull($obj->getPrix5());
		$this->assertNull($obj->getPrix6());
		$this->assertNull($obj->getPrix7());
		$this->assertNull($obj->getTypeActionnairesAssocies());
		$this->assertNull($obj->getTypeCA());
		$this->assertNull($obj->getTypeMission());
		$this->assertNull($obj->getTypeSystemeInfo());
		$this->assertNull($obj->getTypeVolume());
	}

	/**
	 * Tests the setCA() method.
	 *
	 * @return void
	 */
	public function testSetCA() {

		$obj = new LettresMissionsEntetes();

		$obj->setCA(10.092018);
		$this->assertEquals(10.092018, $obj->getCA());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new LettresMissionsEntetes();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeRegroupement() method.
	 *
	 * @return void
	 */
	public function testSetCodeRegroupement() {

		$obj = new LettresMissionsEntetes();

		$obj->setCodeRegroupement("codeRegroupement");
		$this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
	}

	/**
	 * Tests the setComment1() method.
	 *
	 * @return void
	 */
	public function testSetComment1() {

		$obj = new LettresMissionsEntetes();

		$obj->setComment1("comment1");
		$this->assertEquals("comment1", $obj->getComment1());
	}

	/**
	 * Tests the setComment2() method.
	 *
	 * @return void
	 */
	public function testSetComment2() {

		$obj = new LettresMissionsEntetes();

		$obj->setComment2("comment2");
		$this->assertEquals("comment2", $obj->getComment2());
	}

	/**
	 * Tests the setComment3() method.
	 *
	 * @return void
	 */
	public function testSetComment3() {

		$obj = new LettresMissionsEntetes();

		$obj->setComment3("comment3");
		$this->assertEquals("comment3", $obj->getComment3());
	}

	/**
	 * Tests the setComment4() method.
	 *
	 * @return void
	 */
	public function testSetComment4() {

		$obj = new LettresMissionsEntetes();

		$obj->setComment4("comment4");
		$this->assertEquals("comment4", $obj->getComment4());
	}

	/**
	 * Tests the setComment5() method.
	 *
	 * @return void
	 */
	public function testSetComment5() {

		$obj = new LettresMissionsEntetes();

		$obj->setComment5("comment5");
		$this->assertEquals("comment5", $obj->getComment5());
	}

	/**
	 * Tests the setComment6() method.
	 *
	 * @return void
	 */
	public function testSetComment6() {

		$obj = new LettresMissionsEntetes();

		$obj->setComment6("comment6");
		$this->assertEquals("comment6", $obj->getComment6());
	}

	/**
	 * Tests the setComment7() method.
	 *
	 * @return void
	 */
	public function testSetComment7() {

		$obj = new LettresMissionsEntetes();

		$obj->setComment7("comment7");
		$this->assertEquals("comment7", $obj->getComment7());
	}

	/**
	 * Tests the setDateEntretien() method.
	 *
	 * @return void
	 */
	public function testSetDateEntretien() {

		$obj = new LettresMissionsEntetes();

		$obj->setDateEntretien(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEntretien());
	}

	/**
	 * Tests the setDateSignature() method.
	 *
	 * @return void
	 */
	public function testSetDateSignature() {

		$obj = new LettresMissionsEntetes();

		$obj->setDateSignature(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSignature());
	}

	/**
	 * Tests the setDebutMission() method.
	 *
	 * @return void
	 */
	public function testSetDebutMission() {

		$obj = new LettresMissionsEntetes();

		$obj->setDebutMission(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDebutMission());
	}

	/**
	 * Tests the setEtat() method.
	 *
	 * @return void
	 */
	public function testSetEtat() {

		$obj = new LettresMissionsEntetes();

		$obj->setEtat("etat");
		$this->assertEquals("etat", $obj->getEtat());
	}

	/**
	 * Tests the setExerciceCourant() method.
	 *
	 * @return void
	 */
	public function testSetExerciceCourant() {

		$obj = new LettresMissionsEntetes();

		$obj->setExerciceCourant("exerciceCourant");
		$this->assertEquals("exerciceCourant", $obj->getExerciceCourant());
	}

	/**
	 * Tests the setFinMission() method.
	 *
	 * @return void
	 */
	public function testSetFinMission() {

		$obj = new LettresMissionsEntetes();

		$obj->setFinMission(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getFinMission());
	}

	/**
	 * Tests the setHonoPrev() method.
	 *
	 * @return void
	 */
	public function testSetHonoPrev() {

		$obj = new LettresMissionsEntetes();

		$obj->setHonoPrev(10.092018);
		$this->assertEquals(10.092018, $obj->getHonoPrev());
	}

	/**
	 * Tests the setLibelle1() method.
	 *
	 * @return void
	 */
	public function testSetLibelle1() {

		$obj = new LettresMissionsEntetes();

		$obj->setLibelle1("libelle1");
		$this->assertEquals("libelle1", $obj->getLibelle1());
	}

	/**
	 * Tests the setLibelle2() method.
	 *
	 * @return void
	 */
	public function testSetLibelle2() {

		$obj = new LettresMissionsEntetes();

		$obj->setLibelle2("libelle2");
		$this->assertEquals("libelle2", $obj->getLibelle2());
	}

	/**
	 * Tests the setLibelle3() method.
	 *
	 * @return void
	 */
	public function testSetLibelle3() {

		$obj = new LettresMissionsEntetes();

		$obj->setLibelle3("libelle3");
		$this->assertEquals("libelle3", $obj->getLibelle3());
	}

	/**
	 * Tests the setLibelle4() method.
	 *
	 * @return void
	 */
	public function testSetLibelle4() {

		$obj = new LettresMissionsEntetes();

		$obj->setLibelle4("libelle4");
		$this->assertEquals("libelle4", $obj->getLibelle4());
	}

	/**
	 * Tests the setLibelle5() method.
	 *
	 * @return void
	 */
	public function testSetLibelle5() {

		$obj = new LettresMissionsEntetes();

		$obj->setLibelle5("libelle5");
		$this->assertEquals("libelle5", $obj->getLibelle5());
	}

	/**
	 * Tests the setLibelle6() method.
	 *
	 * @return void
	 */
	public function testSetLibelle6() {

		$obj = new LettresMissionsEntetes();

		$obj->setLibelle6("libelle6");
		$this->assertEquals("libelle6", $obj->getLibelle6());
	}

	/**
	 * Tests the setLibelle7() method.
	 *
	 * @return void
	 */
	public function testSetLibelle7() {

		$obj = new LettresMissionsEntetes();

		$obj->setLibelle7("libelle7");
		$this->assertEquals("libelle7", $obj->getLibelle7());
	}

	/**
	 * Tests the setNbDeplacements() method.
	 *
	 * @return void
	 */
	public function testSetNbDeplacements() {

		$obj = new LettresMissionsEntetes();

		$obj->setNbDeplacements("nbDeplacements");
		$this->assertEquals("nbDeplacements", $obj->getNbDeplacements());
	}

	/**
	 * Tests the setNbrActes() method.
	 *
	 * @return void
	 */
	public function testSetNbrActes() {

		$obj = new LettresMissionsEntetes();

		$obj->setNbrActes(10.092018);
		$this->assertEquals(10.092018, $obj->getNbrActes());
	}

	/**
	 * Tests the setNbrBulletins() method.
	 *
	 * @return void
	 */
	public function testSetNbrBulletins() {

		$obj = new LettresMissionsEntetes();

		$obj->setNbrBulletins(10.092018);
		$this->assertEquals(10.092018, $obj->getNbrBulletins());
	}

	/**
	 * Tests the setNbrEcrituresBq() method.
	 *
	 * @return void
	 */
	public function testSetNbrEcrituresBq() {

		$obj = new LettresMissionsEntetes();

		$obj->setNbrEcrituresBq(10.092018);
		$this->assertEquals(10.092018, $obj->getNbrEcrituresBq());
	}

	/**
	 * Tests the setNbrEcrituresDepenses() method.
	 *
	 * @return void
	 */
	public function testSetNbrEcrituresDepenses() {

		$obj = new LettresMissionsEntetes();

		$obj->setNbrEcrituresDepenses(10.092018);
		$this->assertEquals(10.092018, $obj->getNbrEcrituresDepenses());
	}

	/**
	 * Tests the setNbrEcrituresOD() method.
	 *
	 * @return void
	 */
	public function testSetNbrEcrituresOD() {

		$obj = new LettresMissionsEntetes();

		$obj->setNbrEcrituresOD(10.092018);
		$this->assertEquals(10.092018, $obj->getNbrEcrituresOD());
	}

	/**
	 * Tests the setNbrEcrituresRecettes() method.
	 *
	 * @return void
	 */
	public function testSetNbrEcrituresRecettes() {

		$obj = new LettresMissionsEntetes();

		$obj->setNbrEcrituresRecettes(10.092018);
		$this->assertEquals(10.092018, $obj->getNbrEcrituresRecettes());
	}

	/**
	 * Tests the setNbrEmployes() method.
	 *
	 * @return void
	 */
	public function testSetNbrEmployes() {

		$obj = new LettresMissionsEntetes();

		$obj->setNbrEmployes(10.092018);
		$this->assertEquals(10.092018, $obj->getNbrEmployes());
	}

	/**
	 * Tests the setNumeroLettre() method.
	 *
	 * @return void
	 */
	public function testSetNumeroLettre() {

		$obj = new LettresMissionsEntetes();

		$obj->setNumeroLettre("numeroLettre");
		$this->assertEquals("numeroLettre", $obj->getNumeroLettre());
	}

	/**
	 * Tests the setPolice1() method.
	 *
	 * @return void
	 */
	public function testSetPolice1() {

		$obj = new LettresMissionsEntetes();

		$obj->setPolice1("police1");
		$this->assertEquals("police1", $obj->getPolice1());
	}

	/**
	 * Tests the setPolice2() method.
	 *
	 * @return void
	 */
	public function testSetPolice2() {

		$obj = new LettresMissionsEntetes();

		$obj->setPolice2("police2");
		$this->assertEquals("police2", $obj->getPolice2());
	}

	/**
	 * Tests the setPolice3() method.
	 *
	 * @return void
	 */
	public function testSetPolice3() {

		$obj = new LettresMissionsEntetes();

		$obj->setPolice3("police3");
		$this->assertEquals("police3", $obj->getPolice3());
	}

	/**
	 * Tests the setPremierExercice() method.
	 *
	 * @return void
	 */
	public function testSetPremierExercice() {

		$obj = new LettresMissionsEntetes();

		$obj->setPremierExercice(10);
		$this->assertEquals(10, $obj->getPremierExercice());
	}

	/**
	 * Tests the setPrix1() method.
	 *
	 * @return void
	 */
	public function testSetPrix1() {

		$obj = new LettresMissionsEntetes();

		$obj->setPrix1(10.092018);
		$this->assertEquals(10.092018, $obj->getPrix1());
	}

	/**
	 * Tests the setPrix2() method.
	 *
	 * @return void
	 */
	public function testSetPrix2() {

		$obj = new LettresMissionsEntetes();

		$obj->setPrix2(10.092018);
		$this->assertEquals(10.092018, $obj->getPrix2());
	}

	/**
	 * Tests the setPrix3() method.
	 *
	 * @return void
	 */
	public function testSetPrix3() {

		$obj = new LettresMissionsEntetes();

		$obj->setPrix3(10.092018);
		$this->assertEquals(10.092018, $obj->getPrix3());
	}

	/**
	 * Tests the setPrix4() method.
	 *
	 * @return void
	 */
	public function testSetPrix4() {

		$obj = new LettresMissionsEntetes();

		$obj->setPrix4(10.092018);
		$this->assertEquals(10.092018, $obj->getPrix4());
	}

	/**
	 * Tests the setPrix5() method.
	 *
	 * @return void
	 */
	public function testSetPrix5() {

		$obj = new LettresMissionsEntetes();

		$obj->setPrix5(10.092018);
		$this->assertEquals(10.092018, $obj->getPrix5());
	}

	/**
	 * Tests the setPrix6() method.
	 *
	 * @return void
	 */
	public function testSetPrix6() {

		$obj = new LettresMissionsEntetes();

		$obj->setPrix6(10.092018);
		$this->assertEquals(10.092018, $obj->getPrix6());
	}

	/**
	 * Tests the setPrix7() method.
	 *
	 * @return void
	 */
	public function testSetPrix7() {

		$obj = new LettresMissionsEntetes();

		$obj->setPrix7(10.092018);
		$this->assertEquals(10.092018, $obj->getPrix7());
	}

	/**
	 * Tests the setTypeActionnairesAssocies() method.
	 *
	 * @return void
	 */
	public function testSetTypeActionnairesAssocies() {

		$obj = new LettresMissionsEntetes();

		$obj->setTypeActionnairesAssocies("typeActionnairesAssocies");
		$this->assertEquals("typeActionnairesAssocies", $obj->getTypeActionnairesAssocies());
	}

	/**
	 * Tests the setTypeCA() method.
	 *
	 * @return void
	 */
	public function testSetTypeCA() {

		$obj = new LettresMissionsEntetes();

		$obj->setTypeCA("typeCA");
		$this->assertEquals("typeCA", $obj->getTypeCA());
	}

	/**
	 * Tests the setTypeMission() method.
	 *
	 * @return void
	 */
	public function testSetTypeMission() {

		$obj = new LettresMissionsEntetes();

		$obj->setTypeMission("typeMission");
		$this->assertEquals("typeMission", $obj->getTypeMission());
	}

	/**
	 * Tests the setTypeSystemeInfo() method.
	 *
	 * @return void
	 */
	public function testSetTypeSystemeInfo() {

		$obj = new LettresMissionsEntetes();

		$obj->setTypeSystemeInfo("typeSystemeInfo");
		$this->assertEquals("typeSystemeInfo", $obj->getTypeSystemeInfo());
	}

	/**
	 * Tests the setTypeVolume() method.
	 *
	 * @return void
	 */
	public function testSetTypeVolume() {

		$obj = new LettresMissionsEntetes();

		$obj->setTypeVolume("typeVolume");
		$this->assertEquals("typeVolume", $obj->getTypeVolume());
	}

}
