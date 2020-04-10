<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\OrgaGeneriques;

/**
 * Orga generiques test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class OrgaGeneriquesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new OrgaGeneriques();

        $this->assertNull($obj->getADeclarerDsnNeant());
        $this->assertNull($obj->getAgrementMinisteriel());
        $this->assertNull($obj->getAppliquerCpn220());
        $this->assertNull($obj->getArrondirBase());
        $this->assertNull($obj->getArrondirCotis());
        $this->assertNull($obj->getAssietteSpecifAgff());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeAssietteSit2());
        $this->assertNull($obj->getCodeAssietteSit2Agff());
        $this->assertNull($obj->getCodeAssietteSitb());
        $this->assertNull($obj->getCodeAssietteSitbagff());
        $this->assertNull($obj->getCodeAssietteSitc());
        $this->assertNull($obj->getCodeCaisseMsa());
        $this->assertNull($obj->getCodeOrganismeAssuranceDadsu());
        $this->assertNull($obj->getCodeOrganismeMutuelleDadsu());
        $this->assertNull($obj->getDetailArrco());
        $this->assertNull($obj->getGroupeCrc());
        $this->assertNull($obj->getIdInstitution());
        $this->assertNull($obj->getIntitSousTotalAgffAgirc());
        $this->assertNull($obj->getIntitSousTotalAgffArrco());
        $this->assertNull($obj->getIntitSousTotalApec());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getLienFicParamDsn());
        $this->assertNull($obj->getRegroupementSi());
        $this->assertNull($obj->getSousTotalAgff());
        $this->assertNull($obj->getSousTotalApec());
        $this->assertNull($obj->getSousTotalCaisse());
        $this->assertNull($obj->getTraitementDadsu());
        $this->assertNull($obj->getTypeDeclaration());
        $this->assertNull($obj->getTypeOrganisme());
        $this->assertNull($obj->getUtilise());
    }

    /**
     * Tests the setADeclarerDsnNeant() method.
     *
     * @return void
     */
    public function testSetADeclarerDsnNeant() {

        $obj = new OrgaGeneriques();

        $obj->setADeclarerDsnNeant(true);
        $this->assertEquals(true, $obj->getADeclarerDsnNeant());
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
     * Tests the setAppliquerCpn220() method.
     *
     * @return void
     */
    public function testSetAppliquerCpn220() {

        $obj = new OrgaGeneriques();

        $obj->setAppliquerCpn220(true);
        $this->assertEquals(true, $obj->getAppliquerCpn220());
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
     * Tests the setAssietteSpecifAgff() method.
     *
     * @return void
     */
    public function testSetAssietteSpecifAgff() {

        $obj = new OrgaGeneriques();

        $obj->setAssietteSpecifAgff(true);
        $this->assertEquals(true, $obj->getAssietteSpecifAgff());
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
     * Tests the setCodeAssietteSit2() method.
     *
     * @return void
     */
    public function testSetCodeAssietteSit2() {

        $obj = new OrgaGeneriques();

        $obj->setCodeAssietteSit2("codeAssietteSit2");
        $this->assertEquals("codeAssietteSit2", $obj->getCodeAssietteSit2());
    }

    /**
     * Tests the setCodeAssietteSit2Agff() method.
     *
     * @return void
     */
    public function testSetCodeAssietteSit2Agff() {

        $obj = new OrgaGeneriques();

        $obj->setCodeAssietteSit2Agff("codeAssietteSit2Agff");
        $this->assertEquals("codeAssietteSit2Agff", $obj->getCodeAssietteSit2Agff());
    }

    /**
     * Tests the setCodeAssietteSitb() method.
     *
     * @return void
     */
    public function testSetCodeAssietteSitb() {

        $obj = new OrgaGeneriques();

        $obj->setCodeAssietteSitb("codeAssietteSitb");
        $this->assertEquals("codeAssietteSitb", $obj->getCodeAssietteSitb());
    }

    /**
     * Tests the setCodeAssietteSitbagff() method.
     *
     * @return void
     */
    public function testSetCodeAssietteSitbagff() {

        $obj = new OrgaGeneriques();

        $obj->setCodeAssietteSitbagff("codeAssietteSitbagff");
        $this->assertEquals("codeAssietteSitbagff", $obj->getCodeAssietteSitbagff());
    }

    /**
     * Tests the setCodeAssietteSitc() method.
     *
     * @return void
     */
    public function testSetCodeAssietteSitc() {

        $obj = new OrgaGeneriques();

        $obj->setCodeAssietteSitc("codeAssietteSitc");
        $this->assertEquals("codeAssietteSitc", $obj->getCodeAssietteSitc());
    }

    /**
     * Tests the setCodeCaisseMsa() method.
     *
     * @return void
     */
    public function testSetCodeCaisseMsa() {

        $obj = new OrgaGeneriques();

        $obj->setCodeCaisseMsa("codeCaisseMsa");
        $this->assertEquals("codeCaisseMsa", $obj->getCodeCaisseMsa());
    }

    /**
     * Tests the setCodeOrganismeAssuranceDadsu() method.
     *
     * @return void
     */
    public function testSetCodeOrganismeAssuranceDadsu() {

        $obj = new OrgaGeneriques();

        $obj->setCodeOrganismeAssuranceDadsu("codeOrganismeAssuranceDadsu");
        $this->assertEquals("codeOrganismeAssuranceDadsu", $obj->getCodeOrganismeAssuranceDadsu());
    }

    /**
     * Tests the setCodeOrganismeMutuelleDadsu() method.
     *
     * @return void
     */
    public function testSetCodeOrganismeMutuelleDadsu() {

        $obj = new OrgaGeneriques();

        $obj->setCodeOrganismeMutuelleDadsu("codeOrganismeMutuelleDadsu");
        $this->assertEquals("codeOrganismeMutuelleDadsu", $obj->getCodeOrganismeMutuelleDadsu());
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
     * Tests the setIntitSousTotalAgffAgirc() method.
     *
     * @return void
     */
    public function testSetIntitSousTotalAgffAgirc() {

        $obj = new OrgaGeneriques();

        $obj->setIntitSousTotalAgffAgirc("intitSousTotalAgffAgirc");
        $this->assertEquals("intitSousTotalAgffAgirc", $obj->getIntitSousTotalAgffAgirc());
    }

    /**
     * Tests the setIntitSousTotalAgffArrco() method.
     *
     * @return void
     */
    public function testSetIntitSousTotalAgffArrco() {

        $obj = new OrgaGeneriques();

        $obj->setIntitSousTotalAgffArrco("intitSousTotalAgffArrco");
        $this->assertEquals("intitSousTotalAgffArrco", $obj->getIntitSousTotalAgffArrco());
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
     * Tests the setLienFicParamDsn() method.
     *
     * @return void
     */
    public function testSetLienFicParamDsn() {

        $obj = new OrgaGeneriques();

        $obj->setLienFicParamDsn("lienFicParamDsn");
        $this->assertEquals("lienFicParamDsn", $obj->getLienFicParamDsn());
    }

    /**
     * Tests the setRegroupementSi() method.
     *
     * @return void
     */
    public function testSetRegroupementSi() {

        $obj = new OrgaGeneriques();

        $obj->setRegroupementSi(true);
        $this->assertEquals(true, $obj->getRegroupementSi());
    }

    /**
     * Tests the setSousTotalAgff() method.
     *
     * @return void
     */
    public function testSetSousTotalAgff() {

        $obj = new OrgaGeneriques();

        $obj->setSousTotalAgff(true);
        $this->assertEquals(true, $obj->getSousTotalAgff());
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
     * Tests the setTraitementDadsu() method.
     *
     * @return void
     */
    public function testSetTraitementDadsu() {

        $obj = new OrgaGeneriques();

        $obj->setTraitementDadsu(true);
        $this->assertEquals(true, $obj->getTraitementDadsu());
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
