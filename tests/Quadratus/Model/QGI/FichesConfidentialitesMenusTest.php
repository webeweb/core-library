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

use WBW\Library\Core\Quadratus\Model\QGI\FichesConfidentialitesMenus;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Fiches confidentialites menus model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class FichesConfidentialitesMenusTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new FichesConfidentialitesMenus();

		$this->assertNull($obj->getCode());
		$this->assertNull($obj->getDossier());
		$this->assertNull($obj->getDroitAjout());
		$this->assertNull($obj->getDroitModification());
		$this->assertNull($obj->getDroitSuppression());
		$this->assertNull($obj->getIndex());
		$this->assertNull($obj->getIndexDuPereNo1());
		$this->assertNull($obj->getIndexDuPereNo2());
		$this->assertNull($obj->getIndexDuPereNo3());
		$this->assertNull($obj->getIndexDuPereNo4());
		$this->assertNull($obj->getIndexDuPereNo5());
		$this->assertNull($obj->getIndexDuPereNo6());
		$this->assertNull($obj->getIndexDuPereNo7());
		$this->assertNull($obj->getLibelleMenu());
		$this->assertNull($obj->getMenuVisible());
		$this->assertNull($obj->getMotDePasse());
		$this->assertNull($obj->getNiveauLigne());
		$this->assertNull($obj->getNomDuPereNo1());
		$this->assertNull($obj->getNomDuPereNo2());
		$this->assertNull($obj->getNomDuPereNo3());
		$this->assertNull($obj->getNomDuPereNo4());
		$this->assertNull($obj->getNomDuPereNo5());
		$this->assertNull($obj->getNomDuPereNo6());
		$this->assertNull($obj->getNomDuPereNo7());
		$this->assertNull($obj->getNomMenu());
		$this->assertNull($obj->getType());
		$this->assertNull($obj->getTypeSelection());
	}

	/**
	 * Tests the setCode() method.
	 *
	 * @return void
	 */
	public function testSetCode() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setCode("code");
		$this->assertEquals("code", $obj->getCode());
	}

	/**
	 * Tests the setDossier() method.
	 *
	 * @return void
	 */
	public function testSetDossier() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setDossier("dossier");
		$this->assertEquals("dossier", $obj->getDossier());
	}

	/**
	 * Tests the setDroitAjout() method.
	 *
	 * @return void
	 */
	public function testSetDroitAjout() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setDroitAjout(true);
		$this->assertEquals(true, $obj->getDroitAjout());
	}

	/**
	 * Tests the setDroitModification() method.
	 *
	 * @return void
	 */
	public function testSetDroitModification() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setDroitModification(true);
		$this->assertEquals(true, $obj->getDroitModification());
	}

	/**
	 * Tests the setDroitSuppression() method.
	 *
	 * @return void
	 */
	public function testSetDroitSuppression() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setDroitSuppression(true);
		$this->assertEquals(true, $obj->getDroitSuppression());
	}

	/**
	 * Tests the setIndex() method.
	 *
	 * @return void
	 */
	public function testSetIndex() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setIndex(10);
		$this->assertEquals(10, $obj->getIndex());
	}

	/**
	 * Tests the setIndexDuPereNo1() method.
	 *
	 * @return void
	 */
	public function testSetIndexDuPereNo1() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setIndexDuPereNo1(10);
		$this->assertEquals(10, $obj->getIndexDuPereNo1());
	}

	/**
	 * Tests the setIndexDuPereNo2() method.
	 *
	 * @return void
	 */
	public function testSetIndexDuPereNo2() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setIndexDuPereNo2(10);
		$this->assertEquals(10, $obj->getIndexDuPereNo2());
	}

	/**
	 * Tests the setIndexDuPereNo3() method.
	 *
	 * @return void
	 */
	public function testSetIndexDuPereNo3() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setIndexDuPereNo3(10);
		$this->assertEquals(10, $obj->getIndexDuPereNo3());
	}

	/**
	 * Tests the setIndexDuPereNo4() method.
	 *
	 * @return void
	 */
	public function testSetIndexDuPereNo4() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setIndexDuPereNo4(10);
		$this->assertEquals(10, $obj->getIndexDuPereNo4());
	}

	/**
	 * Tests the setIndexDuPereNo5() method.
	 *
	 * @return void
	 */
	public function testSetIndexDuPereNo5() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setIndexDuPereNo5(10);
		$this->assertEquals(10, $obj->getIndexDuPereNo5());
	}

	/**
	 * Tests the setIndexDuPereNo6() method.
	 *
	 * @return void
	 */
	public function testSetIndexDuPereNo6() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setIndexDuPereNo6(10);
		$this->assertEquals(10, $obj->getIndexDuPereNo6());
	}

	/**
	 * Tests the setIndexDuPereNo7() method.
	 *
	 * @return void
	 */
	public function testSetIndexDuPereNo7() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setIndexDuPereNo7(10);
		$this->assertEquals(10, $obj->getIndexDuPereNo7());
	}

	/**
	 * Tests the setLibelleMenu() method.
	 *
	 * @return void
	 */
	public function testSetLibelleMenu() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setLibelleMenu("libelleMenu");
		$this->assertEquals("libelleMenu", $obj->getLibelleMenu());
	}

	/**
	 * Tests the setMenuVisible() method.
	 *
	 * @return void
	 */
	public function testSetMenuVisible() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setMenuVisible(true);
		$this->assertEquals(true, $obj->getMenuVisible());
	}

	/**
	 * Tests the setMotDePasse() method.
	 *
	 * @return void
	 */
	public function testSetMotDePasse() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setMotDePasse("motDePasse");
		$this->assertEquals("motDePasse", $obj->getMotDePasse());
	}

	/**
	 * Tests the setNiveauLigne() method.
	 *
	 * @return void
	 */
	public function testSetNiveauLigne() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setNiveauLigne("niveauLigne");
		$this->assertEquals("niveauLigne", $obj->getNiveauLigne());
	}

	/**
	 * Tests the setNomDuPereNo1() method.
	 *
	 * @return void
	 */
	public function testSetNomDuPereNo1() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setNomDuPereNo1("nomDuPereNo1");
		$this->assertEquals("nomDuPereNo1", $obj->getNomDuPereNo1());
	}

	/**
	 * Tests the setNomDuPereNo2() method.
	 *
	 * @return void
	 */
	public function testSetNomDuPereNo2() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setNomDuPereNo2("nomDuPereNo2");
		$this->assertEquals("nomDuPereNo2", $obj->getNomDuPereNo2());
	}

	/**
	 * Tests the setNomDuPereNo3() method.
	 *
	 * @return void
	 */
	public function testSetNomDuPereNo3() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setNomDuPereNo3("nomDuPereNo3");
		$this->assertEquals("nomDuPereNo3", $obj->getNomDuPereNo3());
	}

	/**
	 * Tests the setNomDuPereNo4() method.
	 *
	 * @return void
	 */
	public function testSetNomDuPereNo4() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setNomDuPereNo4("nomDuPereNo4");
		$this->assertEquals("nomDuPereNo4", $obj->getNomDuPereNo4());
	}

	/**
	 * Tests the setNomDuPereNo5() method.
	 *
	 * @return void
	 */
	public function testSetNomDuPereNo5() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setNomDuPereNo5("nomDuPereNo5");
		$this->assertEquals("nomDuPereNo5", $obj->getNomDuPereNo5());
	}

	/**
	 * Tests the setNomDuPereNo6() method.
	 *
	 * @return void
	 */
	public function testSetNomDuPereNo6() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setNomDuPereNo6("nomDuPereNo6");
		$this->assertEquals("nomDuPereNo6", $obj->getNomDuPereNo6());
	}

	/**
	 * Tests the setNomDuPereNo7() method.
	 *
	 * @return void
	 */
	public function testSetNomDuPereNo7() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setNomDuPereNo7("nomDuPereNo7");
		$this->assertEquals("nomDuPereNo7", $obj->getNomDuPereNo7());
	}

	/**
	 * Tests the setNomMenu() method.
	 *
	 * @return void
	 */
	public function testSetNomMenu() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setNomMenu("nomMenu");
		$this->assertEquals("nomMenu", $obj->getNomMenu());
	}

	/**
	 * Tests the setType() method.
	 *
	 * @return void
	 */
	public function testSetType() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setType("type");
		$this->assertEquals("type", $obj->getType());
	}

	/**
	 * Tests the setTypeSelection() method.
	 *
	 * @return void
	 */
	public function testSetTypeSelection() {

		$obj = new FichesConfidentialitesMenus();

		$obj->setTypeSelection("typeSelection");
		$this->assertEquals("typeSelection", $obj->getTypeSelection());
	}

}
