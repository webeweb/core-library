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

use WBW\Library\Core\Quadratus\Model\QPaie\ComptesLibQuadra;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Comptes lib quadra model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class ComptesLibQuadraTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ComptesLibQuadra();

		$this->assertNull($obj->getCodeDucs());
		$this->assertNull($obj->getCodeEditionHisto());
		$this->assertNull($obj->getCodeLibelle());
		$this->assertNull($obj->getCodeOrganisme());
		$this->assertNull($obj->getCodeTypeBSpecPrev());
		$this->assertNull($obj->getCompteCharge());
		$this->assertNull($obj->getConditionSpec());
		$this->assertNull($obj->getEditionForceeDs());
		$this->assertNull($obj->getExclureLoiTEPA());
		$this->assertNull($obj->getFraisSante());
		$this->assertNull($obj->getPrevoyanceComp());
		$this->assertNull($obj->getQualifiantCotis());
		$this->assertNull($obj->getRetraiteObligatoire());
		$this->assertNull($obj->getRetraiteSupp());
		$this->assertNull($obj->getSansReintegrationSociale());
		$this->assertNull($obj->getSoumisCRDS100());
		$this->assertNull($obj->getSoumisCSG100());
		$this->assertNull($obj->getTauxForfaitSocial20());
		$this->assertNull($obj->getTauxForfaitSocial8());
	}

	/**
	 * Tests the setCodeDucs() method.
	 *
	 * @return void
	 */
	public function testSetCodeDucs() {

		$obj = new ComptesLibQuadra();

		$obj->setCodeDucs("codeDucs");
		$this->assertEquals("codeDucs", $obj->getCodeDucs());
	}

	/**
	 * Tests the setCodeEditionHisto() method.
	 *
	 * @return void
	 */
	public function testSetCodeEditionHisto() {

		$obj = new ComptesLibQuadra();

		$obj->setCodeEditionHisto("codeEditionHisto");
		$this->assertEquals("codeEditionHisto", $obj->getCodeEditionHisto());
	}

	/**
	 * Tests the setCodeLibelle() method.
	 *
	 * @return void
	 */
	public function testSetCodeLibelle() {

		$obj = new ComptesLibQuadra();

		$obj->setCodeLibelle("codeLibelle");
		$this->assertEquals("codeLibelle", $obj->getCodeLibelle());
	}

	/**
	 * Tests the setCodeOrganisme() method.
	 *
	 * @return void
	 */
	public function testSetCodeOrganisme() {

		$obj = new ComptesLibQuadra();

		$obj->setCodeOrganisme("codeOrganisme");
		$this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
	}

	/**
	 * Tests the setCodeTypeBSpecPrev() method.
	 *
	 * @return void
	 */
	public function testSetCodeTypeBSpecPrev() {

		$obj = new ComptesLibQuadra();

		$obj->setCodeTypeBSpecPrev("codeTypeBSpecPrev");
		$this->assertEquals("codeTypeBSpecPrev", $obj->getCodeTypeBSpecPrev());
	}

	/**
	 * Tests the setCompteCharge() method.
	 *
	 * @return void
	 */
	public function testSetCompteCharge() {

		$obj = new ComptesLibQuadra();

		$obj->setCompteCharge("compteCharge");
		$this->assertEquals("compteCharge", $obj->getCompteCharge());
	}

	/**
	 * Tests the setConditionSpec() method.
	 *
	 * @return void
	 */
	public function testSetConditionSpec() {

		$obj = new ComptesLibQuadra();

		$obj->setConditionSpec("conditionSpec");
		$this->assertEquals("conditionSpec", $obj->getConditionSpec());
	}

	/**
	 * Tests the setEditionForceeDs() method.
	 *
	 * @return void
	 */
	public function testSetEditionForceeDs() {

		$obj = new ComptesLibQuadra();

		$obj->setEditionForceeDs("editionForceeDs");
		$this->assertEquals("editionForceeDs", $obj->getEditionForceeDs());
	}

	/**
	 * Tests the setExclureLoiTEPA() method.
	 *
	 * @return void
	 */
	public function testSetExclureLoiTEPA() {

		$obj = new ComptesLibQuadra();

		$obj->setExclureLoiTEPA("exclureLoiTEPA");
		$this->assertEquals("exclureLoiTEPA", $obj->getExclureLoiTEPA());
	}

	/**
	 * Tests the setFraisSante() method.
	 *
	 * @return void
	 */
	public function testSetFraisSante() {

		$obj = new ComptesLibQuadra();

		$obj->setFraisSante("fraisSante");
		$this->assertEquals("fraisSante", $obj->getFraisSante());
	}

	/**
	 * Tests the setPrevoyanceComp() method.
	 *
	 * @return void
	 */
	public function testSetPrevoyanceComp() {

		$obj = new ComptesLibQuadra();

		$obj->setPrevoyanceComp("prevoyanceComp");
		$this->assertEquals("prevoyanceComp", $obj->getPrevoyanceComp());
	}

	/**
	 * Tests the setQualifiantCotis() method.
	 *
	 * @return void
	 */
	public function testSetQualifiantCotis() {

		$obj = new ComptesLibQuadra();

		$obj->setQualifiantCotis("qualifiantCotis");
		$this->assertEquals("qualifiantCotis", $obj->getQualifiantCotis());
	}

	/**
	 * Tests the setRetraiteObligatoire() method.
	 *
	 * @return void
	 */
	public function testSetRetraiteObligatoire() {

		$obj = new ComptesLibQuadra();

		$obj->setRetraiteObligatoire("retraiteObligatoire");
		$this->assertEquals("retraiteObligatoire", $obj->getRetraiteObligatoire());
	}

	/**
	 * Tests the setRetraiteSupp() method.
	 *
	 * @return void
	 */
	public function testSetRetraiteSupp() {

		$obj = new ComptesLibQuadra();

		$obj->setRetraiteSupp("retraiteSupp");
		$this->assertEquals("retraiteSupp", $obj->getRetraiteSupp());
	}

	/**
	 * Tests the setSansReintegrationSociale() method.
	 *
	 * @return void
	 */
	public function testSetSansReintegrationSociale() {

		$obj = new ComptesLibQuadra();

		$obj->setSansReintegrationSociale("sansReintegrationSociale");
		$this->assertEquals("sansReintegrationSociale", $obj->getSansReintegrationSociale());
	}

	/**
	 * Tests the setSoumisCRDS100() method.
	 *
	 * @return void
	 */
	public function testSetSoumisCRDS100() {

		$obj = new ComptesLibQuadra();

		$obj->setSoumisCRDS100("soumisCRDS100");
		$this->assertEquals("soumisCRDS100", $obj->getSoumisCRDS100());
	}

	/**
	 * Tests the setSoumisCSG100() method.
	 *
	 * @return void
	 */
	public function testSetSoumisCSG100() {

		$obj = new ComptesLibQuadra();

		$obj->setSoumisCSG100("soumisCSG100");
		$this->assertEquals("soumisCSG100", $obj->getSoumisCSG100());
	}

	/**
	 * Tests the setTauxForfaitSocial20() method.
	 *
	 * @return void
	 */
	public function testSetTauxForfaitSocial20() {

		$obj = new ComptesLibQuadra();

		$obj->setTauxForfaitSocial20("tauxForfaitSocial20");
		$this->assertEquals("tauxForfaitSocial20", $obj->getTauxForfaitSocial20());
	}

	/**
	 * Tests the setTauxForfaitSocial8() method.
	 *
	 * @return void
	 */
	public function testSetTauxForfaitSocial8() {

		$obj = new ComptesLibQuadra();

		$obj->setTauxForfaitSocial8("tauxForfaitSocial8");
		$this->assertEquals("tauxForfaitSocial8", $obj->getTauxForfaitSocial8());
	}

}
