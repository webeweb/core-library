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
use WBW\Library\Core\Quadratus\Model\QPaie\LignesDUCSAnnuelle;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Lignes d u c s annuelle model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class LignesDUCSAnnuelleTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new LignesDUCSAnnuelle();

		$this->assertNull($obj->getCodeAT());
		$this->assertNull($obj->getCodeCentre());
		$this->assertNull($obj->getCodeDucs());
		$this->assertNull($obj->getCodeEtablissement());
		$this->assertNull($obj->getCodeInsee());
		$this->assertNull($obj->getCodeLibelle());
		$this->assertNull($obj->getConditionSpec());
		$this->assertNull($obj->getDateApplication());
		$this->assertNull($obj->getExclureFusion());
		$this->assertNull($obj->getIdInstitution());
		$this->assertNull($obj->getIntitule());
		$this->assertNull($obj->getIsTaux());
		$this->assertNull($obj->getMarque());
		$this->assertNull($obj->getMontant());
		$this->assertNull($obj->getMtPatronal());
		$this->assertNull($obj->getMtSalarial());
		$this->assertNull($obj->getNbCot());
		$this->assertNull($obj->getNbPatronal());
		$this->assertNull($obj->getNbSalarial());
		$this->assertNull($obj->getOrganisme());
		$this->assertNull($obj->getPeriodeDecla());
		$this->assertNull($obj->getQualifiantCotis());
		$this->assertNull($obj->getSommeBase());
		$this->assertNull($obj->getTauxAT());
		$this->assertNull($obj->getTauxPatronal());
		$this->assertNull($obj->getTauxSalarial());
		$this->assertNull($obj->getTypeBaseUnique());
	}

	/**
	 * Tests the setCodeAT() method.
	 *
	 * @return void
	 */
	public function testSetCodeAT() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setCodeAT(10);
		$this->assertEquals(10, $obj->getCodeAT());
	}

	/**
	 * Tests the setCodeCentre() method.
	 *
	 * @return void
	 */
	public function testSetCodeCentre() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setCodeCentre("codeCentre");
		$this->assertEquals("codeCentre", $obj->getCodeCentre());
	}

	/**
	 * Tests the setCodeDucs() method.
	 *
	 * @return void
	 */
	public function testSetCodeDucs() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setCodeDucs("codeDucs");
		$this->assertEquals("codeDucs", $obj->getCodeDucs());
	}

	/**
	 * Tests the setCodeEtablissement() method.
	 *
	 * @return void
	 */
	public function testSetCodeEtablissement() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setCodeEtablissement(10);
		$this->assertEquals(10, $obj->getCodeEtablissement());
	}

	/**
	 * Tests the setCodeInsee() method.
	 *
	 * @return void
	 */
	public function testSetCodeInsee() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setCodeInsee("codeInsee");
		$this->assertEquals("codeInsee", $obj->getCodeInsee());
	}

	/**
	 * Tests the setCodeLibelle() method.
	 *
	 * @return void
	 */
	public function testSetCodeLibelle() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setCodeLibelle("codeLibelle");
		$this->assertEquals("codeLibelle", $obj->getCodeLibelle());
	}

	/**
	 * Tests the setConditionSpec() method.
	 *
	 * @return void
	 */
	public function testSetConditionSpec() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setConditionSpec("conditionSpec");
		$this->assertEquals("conditionSpec", $obj->getConditionSpec());
	}

	/**
	 * Tests the setDateApplication() method.
	 *
	 * @return void
	 */
	public function testSetDateApplication() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setDateApplication(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateApplication());
	}

	/**
	 * Tests the setExclureFusion() method.
	 *
	 * @return void
	 */
	public function testSetExclureFusion() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setExclureFusion(true);
		$this->assertEquals(true, $obj->getExclureFusion());
	}

	/**
	 * Tests the setIdInstitution() method.
	 *
	 * @return void
	 */
	public function testSetIdInstitution() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setIdInstitution("idInstitution");
		$this->assertEquals("idInstitution", $obj->getIdInstitution());
	}

	/**
	 * Tests the setIntitule() method.
	 *
	 * @return void
	 */
	public function testSetIntitule() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setIntitule("intitule");
		$this->assertEquals("intitule", $obj->getIntitule());
	}

	/**
	 * Tests the setIsTaux() method.
	 *
	 * @return void
	 */
	public function testSetIsTaux() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setIsTaux(true);
		$this->assertEquals(true, $obj->getIsTaux());
	}

	/**
	 * Tests the setMarque() method.
	 *
	 * @return void
	 */
	public function testSetMarque() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setMarque(true);
		$this->assertEquals(true, $obj->getMarque());
	}

	/**
	 * Tests the setMontant() method.
	 *
	 * @return void
	 */
	public function testSetMontant() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setMontant(10.092018);
		$this->assertEquals(10.092018, $obj->getMontant());
	}

	/**
	 * Tests the setMtPatronal() method.
	 *
	 * @return void
	 */
	public function testSetMtPatronal() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setMtPatronal(10.092018);
		$this->assertEquals(10.092018, $obj->getMtPatronal());
	}

	/**
	 * Tests the setMtSalarial() method.
	 *
	 * @return void
	 */
	public function testSetMtSalarial() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setMtSalarial(10.092018);
		$this->assertEquals(10.092018, $obj->getMtSalarial());
	}

	/**
	 * Tests the setNbCot() method.
	 *
	 * @return void
	 */
	public function testSetNbCot() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setNbCot(10.092018);
		$this->assertEquals(10.092018, $obj->getNbCot());
	}

	/**
	 * Tests the setNbPatronal() method.
	 *
	 * @return void
	 */
	public function testSetNbPatronal() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setNbPatronal(10.092018);
		$this->assertEquals(10.092018, $obj->getNbPatronal());
	}

	/**
	 * Tests the setNbSalarial() method.
	 *
	 * @return void
	 */
	public function testSetNbSalarial() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setNbSalarial(10.092018);
		$this->assertEquals(10.092018, $obj->getNbSalarial());
	}

	/**
	 * Tests the setOrganisme() method.
	 *
	 * @return void
	 */
	public function testSetOrganisme() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setOrganisme("organisme");
		$this->assertEquals("organisme", $obj->getOrganisme());
	}

	/**
	 * Tests the setPeriodeDecla() method.
	 *
	 * @return void
	 */
	public function testSetPeriodeDecla() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setPeriodeDecla(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDecla());
	}

	/**
	 * Tests the setQualifiantCotis() method.
	 *
	 * @return void
	 */
	public function testSetQualifiantCotis() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setQualifiantCotis("qualifiantCotis");
		$this->assertEquals("qualifiantCotis", $obj->getQualifiantCotis());
	}

	/**
	 * Tests the setSommeBase() method.
	 *
	 * @return void
	 */
	public function testSetSommeBase() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setSommeBase(10.092018);
		$this->assertEquals(10.092018, $obj->getSommeBase());
	}

	/**
	 * Tests the setTauxAT() method.
	 *
	 * @return void
	 */
	public function testSetTauxAT() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setTauxAT(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxAT());
	}

	/**
	 * Tests the setTauxPatronal() method.
	 *
	 * @return void
	 */
	public function testSetTauxPatronal() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setTauxPatronal(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxPatronal());
	}

	/**
	 * Tests the setTauxSalarial() method.
	 *
	 * @return void
	 */
	public function testSetTauxSalarial() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setTauxSalarial(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxSalarial());
	}

	/**
	 * Tests the setTypeBaseUnique() method.
	 *
	 * @return void
	 */
	public function testSetTypeBaseUnique() {

		$obj = new LignesDUCSAnnuelle();

		$obj->setTypeBaseUnique(true);
		$this->assertEquals(true, $obj->getTypeBaseUnique());
	}

}
