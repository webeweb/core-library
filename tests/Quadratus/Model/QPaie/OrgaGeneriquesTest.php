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

use WBW\Library\Core\Quadratus\Model\QPaie\OrgaGeneriques;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Orga generiques model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class OrgaGeneriquesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new OrgaGeneriques();

		$this->assertNull($obj->getADeclarerDSNNeant());
		$this->assertNull($obj->getAgrementMinisteriel());
		$this->assertNull($obj->getAppliquerCPN220());
		$this->assertNull($obj->getArrondirBase());
		$this->assertNull($obj->getArrondirCotis());
		$this->assertNull($obj->getAssietteSpecifAGFF());
		$this->assertNull($obj->getCode());
		$this->assertNull($obj->getCodeAssietteSIT2());
		$this->assertNull($obj->getCodeAssietteSIT2AGFF());
		$this->assertNull($obj->getCodeAssietteSITB());
		$this->assertNull($obj->getCodeAssietteSITBAGFF());
		$this->assertNull($obj->getCodeAssietteSITC());
		$this->assertNull($obj->getCodeCaisseMSA());
		$this->assertNull($obj->getCodeOrganismeAssuranceDADSU());
		$this->assertNull($obj->getCodeOrganismeMutuelleDADSU());
		$this->assertNull($obj->getDetailArrco());
		$this->assertNull($obj->getGroupeCrc());
		$this->assertNull($obj->getIdInstitution());
		$this->assertNull($obj->getIntitSousTotalAGFFAgirc());
		$this->assertNull($obj->getIntitSousTotalAGFFArrco());
		$this->assertNull($obj->getIntitSousTotalApec());
		$this->assertNull($obj->getIntitule());
		$this->assertNull($obj->getLienFicParamDSN());
		$this->assertNull($obj->getRegroupementSI());
		$this->assertNull($obj->getSousTotalAGFF());
		$this->assertNull($obj->getSousTotalApec());
		$this->assertNull($obj->getSousTotalCaisse());
		$this->assertNull($obj->getTraitementDADSU());
		$this->assertNull($obj->getTypeDeclaration());
		$this->assertNull($obj->getTypeOrganisme());
		$this->assertNull($obj->getUtilise());
	}

	/**
	 * Tests the setADeclarerDSNNeant() method.
	 *
	 * @return void
	 */
	public function testSetADeclarerDSNNeant() {

		$obj = new OrgaGeneriques();

		$obj->setADeclarerDSNNeant(true);
		$this->assertEquals(true, $obj->getADeclarerDSNNeant());
	}

	/**
	 * Tests the setAgrementMinisteriel() method.
	 *
	 * @return void
	 */
	public function testSetAgrementMinisteriel() {

		$obj = new OrgaGeneriques();

		$obj->setAgrementMinisteriel("agrementMinisteriel");
		$this->assertEquals("agrementMinisteriel", $obj->getAgrementMinisteriel());
	}

	/**
	 * Tests the setAppliquerCPN220() method.
	 *
	 * @return void
	 */
	public function testSetAppliquerCPN220() {

		$obj = new OrgaGeneriques();

		$obj->setAppliquerCPN220(true);
		$this->assertEquals(true, $obj->getAppliquerCPN220());
	}

	/**
	 * Tests the setArrondirBase() method.
	 *
	 * @return void
	 */
	public function testSetArrondirBase() {

		$obj = new OrgaGeneriques();

		$obj->setArrondirBase("arrondirBase");
		$this->assertEquals("arrondirBase", $obj->getArrondirBase());
	}

	/**
	 * Tests the setArrondirCotis() method.
	 *
	 * @return void
	 */
	public function testSetArrondirCotis() {

		$obj = new OrgaGeneriques();

		$obj->setArrondirCotis("arrondirCotis");
		$this->assertEquals("arrondirCotis", $obj->getArrondirCotis());
	}

	/**
	 * Tests the setAssietteSpecifAGFF() method.
	 *
	 * @return void
	 */
	public function testSetAssietteSpecifAGFF() {

		$obj = new OrgaGeneriques();

		$obj->setAssietteSpecifAGFF(true);
		$this->assertEquals(true, $obj->getAssietteSpecifAGFF());
	}

	/**
	 * Tests the setCode() method.
	 *
	 * @return void
	 */
	public function testSetCode() {

		$obj = new OrgaGeneriques();

		$obj->setCode("code");
		$this->assertEquals("code", $obj->getCode());
	}

	/**
	 * Tests the setCodeAssietteSIT2() method.
	 *
	 * @return void
	 */
	public function testSetCodeAssietteSIT2() {

		$obj = new OrgaGeneriques();

		$obj->setCodeAssietteSIT2("codeAssietteSIT2");
		$this->assertEquals("codeAssietteSIT2", $obj->getCodeAssietteSIT2());
	}

	/**
	 * Tests the setCodeAssietteSIT2AGFF() method.
	 *
	 * @return void
	 */
	public function testSetCodeAssietteSIT2AGFF() {

		$obj = new OrgaGeneriques();

		$obj->setCodeAssietteSIT2AGFF("codeAssietteSIT2AGFF");
		$this->assertEquals("codeAssietteSIT2AGFF", $obj->getCodeAssietteSIT2AGFF());
	}

	/**
	 * Tests the setCodeAssietteSITB() method.
	 *
	 * @return void
	 */
	public function testSetCodeAssietteSITB() {

		$obj = new OrgaGeneriques();

		$obj->setCodeAssietteSITB("codeAssietteSITB");
		$this->assertEquals("codeAssietteSITB", $obj->getCodeAssietteSITB());
	}

	/**
	 * Tests the setCodeAssietteSITBAGFF() method.
	 *
	 * @return void
	 */
	public function testSetCodeAssietteSITBAGFF() {

		$obj = new OrgaGeneriques();

		$obj->setCodeAssietteSITBAGFF("codeAssietteSITBAGFF");
		$this->assertEquals("codeAssietteSITBAGFF", $obj->getCodeAssietteSITBAGFF());
	}

	/**
	 * Tests the setCodeAssietteSITC() method.
	 *
	 * @return void
	 */
	public function testSetCodeAssietteSITC() {

		$obj = new OrgaGeneriques();

		$obj->setCodeAssietteSITC("codeAssietteSITC");
		$this->assertEquals("codeAssietteSITC", $obj->getCodeAssietteSITC());
	}

	/**
	 * Tests the setCodeCaisseMSA() method.
	 *
	 * @return void
	 */
	public function testSetCodeCaisseMSA() {

		$obj = new OrgaGeneriques();

		$obj->setCodeCaisseMSA("codeCaisseMSA");
		$this->assertEquals("codeCaisseMSA", $obj->getCodeCaisseMSA());
	}

	/**
	 * Tests the setCodeOrganismeAssuranceDADSU() method.
	 *
	 * @return void
	 */
	public function testSetCodeOrganismeAssuranceDADSU() {

		$obj = new OrgaGeneriques();

		$obj->setCodeOrganismeAssuranceDADSU("codeOrganismeAssuranceDADSU");
		$this->assertEquals("codeOrganismeAssuranceDADSU", $obj->getCodeOrganismeAssuranceDADSU());
	}

	/**
	 * Tests the setCodeOrganismeMutuelleDADSU() method.
	 *
	 * @return void
	 */
	public function testSetCodeOrganismeMutuelleDADSU() {

		$obj = new OrgaGeneriques();

		$obj->setCodeOrganismeMutuelleDADSU("codeOrganismeMutuelleDADSU");
		$this->assertEquals("codeOrganismeMutuelleDADSU", $obj->getCodeOrganismeMutuelleDADSU());
	}

	/**
	 * Tests the setDetailArrco() method.
	 *
	 * @return void
	 */
	public function testSetDetailArrco() {

		$obj = new OrgaGeneriques();

		$obj->setDetailArrco(true);
		$this->assertEquals(true, $obj->getDetailArrco());
	}

	/**
	 * Tests the setGroupeCrc() method.
	 *
	 * @return void
	 */
	public function testSetGroupeCrc() {

		$obj = new OrgaGeneriques();

		$obj->setGroupeCrc("groupeCrc");
		$this->assertEquals("groupeCrc", $obj->getGroupeCrc());
	}

	/**
	 * Tests the setIdInstitution() method.
	 *
	 * @return void
	 */
	public function testSetIdInstitution() {

		$obj = new OrgaGeneriques();

		$obj->setIdInstitution("idInstitution");
		$this->assertEquals("idInstitution", $obj->getIdInstitution());
	}

	/**
	 * Tests the setIntitSousTotalAGFFAgirc() method.
	 *
	 * @return void
	 */
	public function testSetIntitSousTotalAGFFAgirc() {

		$obj = new OrgaGeneriques();

		$obj->setIntitSousTotalAGFFAgirc("intitSousTotalAGFFAgirc");
		$this->assertEquals("intitSousTotalAGFFAgirc", $obj->getIntitSousTotalAGFFAgirc());
	}

	/**
	 * Tests the setIntitSousTotalAGFFArrco() method.
	 *
	 * @return void
	 */
	public function testSetIntitSousTotalAGFFArrco() {

		$obj = new OrgaGeneriques();

		$obj->setIntitSousTotalAGFFArrco("intitSousTotalAGFFArrco");
		$this->assertEquals("intitSousTotalAGFFArrco", $obj->getIntitSousTotalAGFFArrco());
	}

	/**
	 * Tests the setIntitSousTotalApec() method.
	 *
	 * @return void
	 */
	public function testSetIntitSousTotalApec() {

		$obj = new OrgaGeneriques();

		$obj->setIntitSousTotalApec("intitSousTotalApec");
		$this->assertEquals("intitSousTotalApec", $obj->getIntitSousTotalApec());
	}

	/**
	 * Tests the setIntitule() method.
	 *
	 * @return void
	 */
	public function testSetIntitule() {

		$obj = new OrgaGeneriques();

		$obj->setIntitule("intitule");
		$this->assertEquals("intitule", $obj->getIntitule());
	}

	/**
	 * Tests the setLienFicParamDSN() method.
	 *
	 * @return void
	 */
	public function testSetLienFicParamDSN() {

		$obj = new OrgaGeneriques();

		$obj->setLienFicParamDSN("lienFicParamDSN");
		$this->assertEquals("lienFicParamDSN", $obj->getLienFicParamDSN());
	}

	/**
	 * Tests the setRegroupementSI() method.
	 *
	 * @return void
	 */
	public function testSetRegroupementSI() {

		$obj = new OrgaGeneriques();

		$obj->setRegroupementSI(true);
		$this->assertEquals(true, $obj->getRegroupementSI());
	}

	/**
	 * Tests the setSousTotalAGFF() method.
	 *
	 * @return void
	 */
	public function testSetSousTotalAGFF() {

		$obj = new OrgaGeneriques();

		$obj->setSousTotalAGFF(true);
		$this->assertEquals(true, $obj->getSousTotalAGFF());
	}

	/**
	 * Tests the setSousTotalApec() method.
	 *
	 * @return void
	 */
	public function testSetSousTotalApec() {

		$obj = new OrgaGeneriques();

		$obj->setSousTotalApec(true);
		$this->assertEquals(true, $obj->getSousTotalApec());
	}

	/**
	 * Tests the setSousTotalCaisse() method.
	 *
	 * @return void
	 */
	public function testSetSousTotalCaisse() {

		$obj = new OrgaGeneriques();

		$obj->setSousTotalCaisse(true);
		$this->assertEquals(true, $obj->getSousTotalCaisse());
	}

	/**
	 * Tests the setTraitementDADSU() method.
	 *
	 * @return void
	 */
	public function testSetTraitementDADSU() {

		$obj = new OrgaGeneriques();

		$obj->setTraitementDADSU(true);
		$this->assertEquals(true, $obj->getTraitementDADSU());
	}

	/**
	 * Tests the setTypeDeclaration() method.
	 *
	 * @return void
	 */
	public function testSetTypeDeclaration() {

		$obj = new OrgaGeneriques();

		$obj->setTypeDeclaration("typeDeclaration");
		$this->assertEquals("typeDeclaration", $obj->getTypeDeclaration());
	}

	/**
	 * Tests the setTypeOrganisme() method.
	 *
	 * @return void
	 */
	public function testSetTypeOrganisme() {

		$obj = new OrgaGeneriques();

		$obj->setTypeOrganisme("typeOrganisme");
		$this->assertEquals("typeOrganisme", $obj->getTypeOrganisme());
	}

	/**
	 * Tests the setUtilise() method.
	 *
	 * @return void
	 */
	public function testSetUtilise() {

		$obj = new OrgaGeneriques();

		$obj->setUtilise(true);
		$this->assertEquals(true, $obj->getUtilise());
	}

}
