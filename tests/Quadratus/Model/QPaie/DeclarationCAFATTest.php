<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\DeclarationCAFAT;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Declaration c a f a t model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class DeclarationCAFATTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new DeclarationCAFAT();

		$this->assertNull($obj->getAdresse1());
		$this->assertNull($obj->getAdresse2());
		$this->assertNull($obj->getAdresse3());
		$this->assertNull($obj->getCodeCotis());
		$this->assertNull($obj->getCodeEtablissement());
		$this->assertNull($obj->getDateDeclaration());
		$this->assertNull($obj->getLienDocument());
		$this->assertNull($obj->getMtAutreDeduction());
		$this->assertNull($obj->getMtDeductionAcompte());
		$this->assertNull($obj->getMtDeductionAcompte1());
		$this->assertNull($obj->getMtDeductionAcompte2());
		$this->assertNull($obj->getNbSalaries());
		$this->assertNull($obj->getNoCotisant());
		$this->assertNull($obj->getOrganisme());
		$this->assertNull($obj->getPasDePersonnel());
		$this->assertNull($obj->getPasDeReembauche());
		$this->assertNull($obj->getPeriodeDecla());
		$this->assertNull($obj->getPlafond1RUAMMTr2());
		$this->assertNull($obj->getPlafond2RUAMMTr2());
		$this->assertNull($obj->getPlafondAutreRegime());
		$this->assertNull($obj->getPlafondFSH());
		$this->assertNull($obj->getPlafondMaladie());
		$this->assertNull($obj->getPlafondSalaire());
		$this->assertNull($obj->getRID());
		$this->assertNull($obj->getRaisonSociale());
		$this->assertNull($obj->getSecteur());
		$this->assertNull($obj->getTauxAT());
		$this->assertNull($obj->getTauxAutreRegime());
		$this->assertNull($obj->getTauxCCS());
		$this->assertNull($obj->getTauxFSH());
		$this->assertNull($obj->getTauxMaladie());
		$this->assertNull($obj->getTauxRUAMMTr2());
		$this->assertNull($obj->getTotalCotisAutreRegime());
		$this->assertNull($obj->getTotalCotisCCS());
		$this->assertNull($obj->getTotalCotisFSH());
		$this->assertNull($obj->getTotalCotisMaladie());
		$this->assertNull($obj->getTotalCotisRUAMMTr2());
		$this->assertNull($obj->getTotalRUAMMTr2());
		$this->assertNull($obj->getTotalRemuneration());
		$this->assertNull($obj->getTotalSalaireAutreRegime());
		$this->assertNull($obj->getTotalSalaireCCS());
		$this->assertNull($obj->getTotalSalaireFSH());
		$this->assertNull($obj->getTotalSalaireMaladie());
	}

	/**
	 * Tests the setAdresse1() method.
	 *
	 * @return void
	 */
	public function testSetAdresse1() {

		$obj = new DeclarationCAFAT();

		$obj->setAdresse1("adresse1");
		$this->assertEquals("adresse1", $obj->getAdresse1());
	}

	/**
	 * Tests the setAdresse2() method.
	 *
	 * @return void
	 */
	public function testSetAdresse2() {

		$obj = new DeclarationCAFAT();

		$obj->setAdresse2("adresse2");
		$this->assertEquals("adresse2", $obj->getAdresse2());
	}

	/**
	 * Tests the setAdresse3() method.
	 *
	 * @return void
	 */
	public function testSetAdresse3() {

		$obj = new DeclarationCAFAT();

		$obj->setAdresse3("adresse3");
		$this->assertEquals("adresse3", $obj->getAdresse3());
	}

	/**
	 * Tests the setCodeCotis() method.
	 *
	 * @return void
	 */
	public function testSetCodeCotis() {

		$obj = new DeclarationCAFAT();

		$obj->setCodeCotis("codeCotis");
		$this->assertEquals("codeCotis", $obj->getCodeCotis());
	}

	/**
	 * Tests the setCodeEtablissement() method.
	 *
	 * @return void
	 */
	public function testSetCodeEtablissement() {

		$obj = new DeclarationCAFAT();

		$obj->setCodeEtablissement(10);
		$this->assertEquals(10, $obj->getCodeEtablissement());
	}

	/**
	 * Tests the setDateDeclaration() method.
	 *
	 * @return void
	 */
	public function testSetDateDeclaration() {

		$obj = new DeclarationCAFAT();

		$obj->setDateDeclaration(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDeclaration());
	}

	/**
	 * Tests the setLienDocument() method.
	 *
	 * @return void
	 */
	public function testSetLienDocument() {

		$obj = new DeclarationCAFAT();

		$obj->setLienDocument("lienDocument");
		$this->assertEquals("lienDocument", $obj->getLienDocument());
	}

	/**
	 * Tests the setMtAutreDeduction() method.
	 *
	 * @return void
	 */
	public function testSetMtAutreDeduction() {

		$obj = new DeclarationCAFAT();

		$obj->setMtAutreDeduction(10.092018);
		$this->assertEquals(10.092018, $obj->getMtAutreDeduction());
	}

	/**
	 * Tests the setMtDeductionAcompte() method.
	 *
	 * @return void
	 */
	public function testSetMtDeductionAcompte() {

		$obj = new DeclarationCAFAT();

		$obj->setMtDeductionAcompte(10.092018);
		$this->assertEquals(10.092018, $obj->getMtDeductionAcompte());
	}

	/**
	 * Tests the setMtDeductionAcompte1() method.
	 *
	 * @return void
	 */
	public function testSetMtDeductionAcompte1() {

		$obj = new DeclarationCAFAT();

		$obj->setMtDeductionAcompte1(10.092018);
		$this->assertEquals(10.092018, $obj->getMtDeductionAcompte1());
	}

	/**
	 * Tests the setMtDeductionAcompte2() method.
	 *
	 * @return void
	 */
	public function testSetMtDeductionAcompte2() {

		$obj = new DeclarationCAFAT();

		$obj->setMtDeductionAcompte2(10.092018);
		$this->assertEquals(10.092018, $obj->getMtDeductionAcompte2());
	}

	/**
	 * Tests the setNbSalaries() method.
	 *
	 * @return void
	 */
	public function testSetNbSalaries() {

		$obj = new DeclarationCAFAT();

		$obj->setNbSalaries(10);
		$this->assertEquals(10, $obj->getNbSalaries());
	}

	/**
	 * Tests the setNoCotisant() method.
	 *
	 * @return void
	 */
	public function testSetNoCotisant() {

		$obj = new DeclarationCAFAT();

		$obj->setNoCotisant("noCotisant");
		$this->assertEquals("noCotisant", $obj->getNoCotisant());
	}

	/**
	 * Tests the setOrganisme() method.
	 *
	 * @return void
	 */
	public function testSetOrganisme() {

		$obj = new DeclarationCAFAT();

		$obj->setOrganisme("organisme");
		$this->assertEquals("organisme", $obj->getOrganisme());
	}

	/**
	 * Tests the setPasDePersonnel() method.
	 *
	 * @return void
	 */
	public function testSetPasDePersonnel() {

		$obj = new DeclarationCAFAT();

		$obj->setPasDePersonnel(true);
		$this->assertEquals(true, $obj->getPasDePersonnel());
	}

	/**
	 * Tests the setPasDeReembauche() method.
	 *
	 * @return void
	 */
	public function testSetPasDeReembauche() {

		$obj = new DeclarationCAFAT();

		$obj->setPasDeReembauche(true);
		$this->assertEquals(true, $obj->getPasDeReembauche());
	}

	/**
	 * Tests the setPeriodeDecla() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeDecla() {

		$obj = new DeclarationCAFAT();

		$obj->setPeriodeDecla(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDecla());
	}

	/**
	 * Tests the setPlafond1RUAMMTr2() method.
	 *
	 * @return void
	 */
	public function testSetPlafond1RUAMMTr2() {

		$obj = new DeclarationCAFAT();

		$obj->setPlafond1RUAMMTr2(10.092018);
		$this->assertEquals(10.092018, $obj->getPlafond1RUAMMTr2());
	}

	/**
	 * Tests the setPlafond2RUAMMTr2() method.
	 *
	 * @return void
	 */
	public function testSetPlafond2RUAMMTr2() {

		$obj = new DeclarationCAFAT();

		$obj->setPlafond2RUAMMTr2(10.092018);
		$this->assertEquals(10.092018, $obj->getPlafond2RUAMMTr2());
	}

	/**
	 * Tests the setPlafondAutreRegime() method.
	 *
	 * @return void
	 */
	public function testSetPlafondAutreRegime() {

		$obj = new DeclarationCAFAT();

		$obj->setPlafondAutreRegime(10.092018);
		$this->assertEquals(10.092018, $obj->getPlafondAutreRegime());
	}

	/**
	 * Tests the setPlafondFSH() method.
	 *
	 * @return void
	 */
	public function testSetPlafondFSH() {

		$obj = new DeclarationCAFAT();

		$obj->setPlafondFSH(10.092018);
		$this->assertEquals(10.092018, $obj->getPlafondFSH());
	}

	/**
	 * Tests the setPlafondMaladie() method.
	 *
	 * @return void
	 */
	public function testSetPlafondMaladie() {

		$obj = new DeclarationCAFAT();

		$obj->setPlafondMaladie(10.092018);
		$this->assertEquals(10.092018, $obj->getPlafondMaladie());
	}

	/**
	 * Tests the setPlafondSalaire() method.
	 *
	 * @return void
	 */
	public function testSetPlafondSalaire() {

		$obj = new DeclarationCAFAT();

		$obj->setPlafondSalaire(10.092018);
		$this->assertEquals(10.092018, $obj->getPlafondSalaire());
	}

	/**
	 * Tests the setRID() method.
	 *
	 * @return void
	 */
	public function testSetRID() {

		$obj = new DeclarationCAFAT();

		$obj->setRID("rID");
		$this->assertEquals("rID", $obj->getRID());
	}

	/**
	 * Tests the setRaisonSociale() method.
	 *
	 * @return void
	 */
	public function testSetRaisonSociale() {

		$obj = new DeclarationCAFAT();

		$obj->setRaisonSociale("raisonSociale");
		$this->assertEquals("raisonSociale", $obj->getRaisonSociale());
	}

	/**
	 * Tests the setSecteur() method.
	 *
	 * @return void
	 */
	public function testSetSecteur() {

		$obj = new DeclarationCAFAT();

		$obj->setSecteur("secteur");
		$this->assertEquals("secteur", $obj->getSecteur());
	}

	/**
	 * Tests the setTauxAT() method.
	 *
	 * @return void
	 */
	public function testSetTauxAT() {

		$obj = new DeclarationCAFAT();

		$obj->setTauxAT(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxAT());
	}

	/**
	 * Tests the setTauxAutreRegime() method.
	 *
	 * @return void
	 */
	public function testSetTauxAutreRegime() {

		$obj = new DeclarationCAFAT();

		$obj->setTauxAutreRegime(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxAutreRegime());
	}

	/**
	 * Tests the setTauxCCS() method.
	 *
	 * @return void
	 */
	public function testSetTauxCCS() {

		$obj = new DeclarationCAFAT();

		$obj->setTauxCCS(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxCCS());
	}

	/**
	 * Tests the setTauxFSH() method.
	 *
	 * @return void
	 */
	public function testSetTauxFSH() {

		$obj = new DeclarationCAFAT();

		$obj->setTauxFSH(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxFSH());
	}

	/**
	 * Tests the setTauxMaladie() method.
	 *
	 * @return void
	 */
	public function testSetTauxMaladie() {

		$obj = new DeclarationCAFAT();

		$obj->setTauxMaladie(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxMaladie());
	}

	/**
	 * Tests the setTauxRUAMMTr2() method.
	 *
	 * @return void
	 */
	public function testSetTauxRUAMMTr2() {

		$obj = new DeclarationCAFAT();

		$obj->setTauxRUAMMTr2(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxRUAMMTr2());
	}

	/**
	 * Tests the setTotalCotisAutreRegime() method.
	 *
	 * @return void
	 */
	public function testSetTotalCotisAutreRegime() {

		$obj = new DeclarationCAFAT();

		$obj->setTotalCotisAutreRegime(10.092018);
		$this->assertEquals(10.092018, $obj->getTotalCotisAutreRegime());
	}

	/**
	 * Tests the setTotalCotisCCS() method.
	 *
	 * @return void
	 */
	public function testSetTotalCotisCCS() {

		$obj = new DeclarationCAFAT();

		$obj->setTotalCotisCCS(10.092018);
		$this->assertEquals(10.092018, $obj->getTotalCotisCCS());
	}

	/**
	 * Tests the setTotalCotisFSH() method.
	 *
	 * @return void
	 */
	public function testSetTotalCotisFSH() {

		$obj = new DeclarationCAFAT();

		$obj->setTotalCotisFSH(10.092018);
		$this->assertEquals(10.092018, $obj->getTotalCotisFSH());
	}

	/**
	 * Tests the setTotalCotisMaladie() method.
	 *
	 * @return void
	 */
	public function testSetTotalCotisMaladie() {

		$obj = new DeclarationCAFAT();

		$obj->setTotalCotisMaladie(10.092018);
		$this->assertEquals(10.092018, $obj->getTotalCotisMaladie());
	}

	/**
	 * Tests the setTotalCotisRUAMMTr2() method.
	 *
	 * @return void
	 */
	public function testSetTotalCotisRUAMMTr2() {

		$obj = new DeclarationCAFAT();

		$obj->setTotalCotisRUAMMTr2(10.092018);
		$this->assertEquals(10.092018, $obj->getTotalCotisRUAMMTr2());
	}

	/**
	 * Tests the setTotalRUAMMTr2() method.
	 *
	 * @return void
	 */
	public function testSetTotalRUAMMTr2() {

		$obj = new DeclarationCAFAT();

		$obj->setTotalRUAMMTr2(10.092018);
		$this->assertEquals(10.092018, $obj->getTotalRUAMMTr2());
	}

	/**
	 * Tests the setTotalRemuneration() method.
	 *
	 * @return void
	 */
	public function testSetTotalRemuneration() {

		$obj = new DeclarationCAFAT();

		$obj->setTotalRemuneration(10);
		$this->assertEquals(10, $obj->getTotalRemuneration());
	}

	/**
	 * Tests the setTotalSalaireAutreRegime() method.
	 *
	 * @return void
	 */
	public function testSetTotalSalaireAutreRegime() {

		$obj = new DeclarationCAFAT();

		$obj->setTotalSalaireAutreRegime(10.092018);
		$this->assertEquals(10.092018, $obj->getTotalSalaireAutreRegime());
	}

	/**
	 * Tests the setTotalSalaireCCS() method.
	 *
	 * @return void
	 */
	public function testSetTotalSalaireCCS() {

		$obj = new DeclarationCAFAT();

		$obj->setTotalSalaireCCS(10.092018);
		$this->assertEquals(10.092018, $obj->getTotalSalaireCCS());
	}

	/**
	 * Tests the setTotalSalaireFSH() method.
	 *
	 * @return void
	 */
	public function testSetTotalSalaireFSH() {

		$obj = new DeclarationCAFAT();

		$obj->setTotalSalaireFSH(10.092018);
		$this->assertEquals(10.092018, $obj->getTotalSalaireFSH());
	}

	/**
	 * Tests the setTotalSalaireMaladie() method.
	 *
	 * @return void
	 */
	public function testSetTotalSalaireMaladie() {

		$obj = new DeclarationCAFAT();

		$obj->setTotalSalaireMaladie(10.092018);
		$this->assertEquals(10.092018, $obj->getTotalSalaireMaladie());
	}

}
