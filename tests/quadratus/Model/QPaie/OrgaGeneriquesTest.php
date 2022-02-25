<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\OrgaGeneriques;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Orga generiques test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class OrgaGeneriquesTest extends AbstractTestCase {

    /**
     * Tests setADeclarerDsnNeant()
     *
     * @return void
     */
    public function testSetADeclarerDsnNeant(): void {

        $obj = new OrgaGeneriques();

        $obj->setADeclarerDsnNeant(true);
        $this->assertEquals(true, $obj->getADeclarerDsnNeant());
    }

    /**
     * Tests setAgrementMinisteriel()
     *
     * @return void
     */
    public function testSetAgrementMinisteriel(): void {

        $obj = new OrgaGeneriques();

        $obj->setAgrementMinisteriel("agrementMinisteriel");
        $this->assertEquals("agrementMinisteriel", $obj->getAgrementMinisteriel());
    }

    /**
     * Tests setAppliquerCpn220()
     *
     * @return void
     */
    public function testSetAppliquerCpn220(): void {

        $obj = new OrgaGeneriques();

        $obj->setAppliquerCpn220(true);
        $this->assertEquals(true, $obj->getAppliquerCpn220());
    }

    /**
     * Tests setArrondirBase()
     *
     * @return void
     */
    public function testSetArrondirBase(): void {

        $obj = new OrgaGeneriques();

        $obj->setArrondirBase("arrondirBase");
        $this->assertEquals("arrondirBase", $obj->getArrondirBase());
    }

    /**
     * Tests setArrondirCotis()
     *
     * @return void
     */
    public function testSetArrondirCotis(): void {

        $obj = new OrgaGeneriques();

        $obj->setArrondirCotis("arrondirCotis");
        $this->assertEquals("arrondirCotis", $obj->getArrondirCotis());
    }

    /**
     * Tests setAssietteSpecifAgff()
     *
     * @return void
     */
    public function testSetAssietteSpecifAgff(): void {

        $obj = new OrgaGeneriques();

        $obj->setAssietteSpecifAgff(true);
        $this->assertEquals(true, $obj->getAssietteSpecifAgff());
    }

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new OrgaGeneriques();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setCodeAssietteSit2()
     *
     * @return void
     */
    public function testSetCodeAssietteSit2(): void {

        $obj = new OrgaGeneriques();

        $obj->setCodeAssietteSit2("codeAssietteSit2");
        $this->assertEquals("codeAssietteSit2", $obj->getCodeAssietteSit2());
    }

    /**
     * Tests setCodeAssietteSit2Agff()
     *
     * @return void
     */
    public function testSetCodeAssietteSit2Agff(): void {

        $obj = new OrgaGeneriques();

        $obj->setCodeAssietteSit2Agff("codeAssietteSit2Agff");
        $this->assertEquals("codeAssietteSit2Agff", $obj->getCodeAssietteSit2Agff());
    }

    /**
     * Tests setCodeAssietteSitb()
     *
     * @return void
     */
    public function testSetCodeAssietteSitb(): void {

        $obj = new OrgaGeneriques();

        $obj->setCodeAssietteSitb("codeAssietteSitb");
        $this->assertEquals("codeAssietteSitb", $obj->getCodeAssietteSitb());
    }

    /**
     * Tests setCodeAssietteSitbagff()
     *
     * @return void
     */
    public function testSetCodeAssietteSitbagff(): void {

        $obj = new OrgaGeneriques();

        $obj->setCodeAssietteSitbagff("codeAssietteSitbagff");
        $this->assertEquals("codeAssietteSitbagff", $obj->getCodeAssietteSitbagff());
    }

    /**
     * Tests setCodeAssietteSitc()
     *
     * @return void
     */
    public function testSetCodeAssietteSitc(): void {

        $obj = new OrgaGeneriques();

        $obj->setCodeAssietteSitc("codeAssietteSitc");
        $this->assertEquals("codeAssietteSitc", $obj->getCodeAssietteSitc());
    }

    /**
     * Tests setCodeCaisseMsa()
     *
     * @return void
     */
    public function testSetCodeCaisseMsa(): void {

        $obj = new OrgaGeneriques();

        $obj->setCodeCaisseMsa("codeCaisseMsa");
        $this->assertEquals("codeCaisseMsa", $obj->getCodeCaisseMsa());
    }

    /**
     * Tests setCodeOrganismeAssuranceDadsu()
     *
     * @return void
     */
    public function testSetCodeOrganismeAssuranceDadsu(): void {

        $obj = new OrgaGeneriques();

        $obj->setCodeOrganismeAssuranceDadsu("codeOrganismeAssuranceDadsu");
        $this->assertEquals("codeOrganismeAssuranceDadsu", $obj->getCodeOrganismeAssuranceDadsu());
    }

    /**
     * Tests setCodeOrganismeMutuelleDadsu()
     *
     * @return void
     */
    public function testSetCodeOrganismeMutuelleDadsu(): void {

        $obj = new OrgaGeneriques();

        $obj->setCodeOrganismeMutuelleDadsu("codeOrganismeMutuelleDadsu");
        $this->assertEquals("codeOrganismeMutuelleDadsu", $obj->getCodeOrganismeMutuelleDadsu());
    }

    /**
     * Tests setDetailArrco()
     *
     * @return void
     */
    public function testSetDetailArrco(): void {

        $obj = new OrgaGeneriques();

        $obj->setDetailArrco(true);
        $this->assertEquals(true, $obj->getDetailArrco());
    }

    /**
     * Tests setGroupeCrc()
     *
     * @return void
     */
    public function testSetGroupeCrc(): void {

        $obj = new OrgaGeneriques();

        $obj->setGroupeCrc("groupeCrc");
        $this->assertEquals("groupeCrc", $obj->getGroupeCrc());
    }

    /**
     * Tests setIdInstitution()
     *
     * @return void
     */
    public function testSetIdInstitution(): void {

        $obj = new OrgaGeneriques();

        $obj->setIdInstitution("idInstitution");
        $this->assertEquals("idInstitution", $obj->getIdInstitution());
    }

    /**
     * Tests setIntitSousTotalAgffAgirc()
     *
     * @return void
     */
    public function testSetIntitSousTotalAgffAgirc(): void {

        $obj = new OrgaGeneriques();

        $obj->setIntitSousTotalAgffAgirc("intitSousTotalAgffAgirc");
        $this->assertEquals("intitSousTotalAgffAgirc", $obj->getIntitSousTotalAgffAgirc());
    }

    /**
     * Tests setIntitSousTotalAgffArrco()
     *
     * @return void
     */
    public function testSetIntitSousTotalAgffArrco(): void {

        $obj = new OrgaGeneriques();

        $obj->setIntitSousTotalAgffArrco("intitSousTotalAgffArrco");
        $this->assertEquals("intitSousTotalAgffArrco", $obj->getIntitSousTotalAgffArrco());
    }

    /**
     * Tests setIntitSousTotalApec()
     *
     * @return void
     */
    public function testSetIntitSousTotalApec(): void {

        $obj = new OrgaGeneriques();

        $obj->setIntitSousTotalApec("intitSousTotalApec");
        $this->assertEquals("intitSousTotalApec", $obj->getIntitSousTotalApec());
    }

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new OrgaGeneriques();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests setLienFicParamDsn()
     *
     * @return void
     */
    public function testSetLienFicParamDsn(): void {

        $obj = new OrgaGeneriques();

        $obj->setLienFicParamDsn("lienFicParamDsn");
        $this->assertEquals("lienFicParamDsn", $obj->getLienFicParamDsn());
    }

    /**
     * Tests setRegroupementSi()
     *
     * @return void
     */
    public function testSetRegroupementSi(): void {

        $obj = new OrgaGeneriques();

        $obj->setRegroupementSi(true);
        $this->assertEquals(true, $obj->getRegroupementSi());
    }

    /**
     * Tests setSousTotalAgff()
     *
     * @return void
     */
    public function testSetSousTotalAgff(): void {

        $obj = new OrgaGeneriques();

        $obj->setSousTotalAgff(true);
        $this->assertEquals(true, $obj->getSousTotalAgff());
    }

    /**
     * Tests setSousTotalApec()
     *
     * @return void
     */
    public function testSetSousTotalApec(): void {

        $obj = new OrgaGeneriques();

        $obj->setSousTotalApec(true);
        $this->assertEquals(true, $obj->getSousTotalApec());
    }

    /**
     * Tests setSousTotalCaisse()
     *
     * @return void
     */
    public function testSetSousTotalCaisse(): void {

        $obj = new OrgaGeneriques();

        $obj->setSousTotalCaisse(true);
        $this->assertEquals(true, $obj->getSousTotalCaisse());
    }

    /**
     * Tests setTraitementDadsu()
     *
     * @return void
     */
    public function testSetTraitementDadsu(): void {

        $obj = new OrgaGeneriques();

        $obj->setTraitementDadsu(true);
        $this->assertEquals(true, $obj->getTraitementDadsu());
    }

    /**
     * Tests setTypeDeclaration()
     *
     * @return void
     */
    public function testSetTypeDeclaration(): void {

        $obj = new OrgaGeneriques();

        $obj->setTypeDeclaration("typeDeclaration");
        $this->assertEquals("typeDeclaration", $obj->getTypeDeclaration());
    }

    /**
     * Tests setTypeOrganisme()
     *
     * @return void
     */
    public function testSetTypeOrganisme(): void {

        $obj = new OrgaGeneriques();

        $obj->setTypeOrganisme("typeOrganisme");
        $this->assertEquals("typeOrganisme", $obj->getTypeOrganisme());
    }

    /**
     * Tests setUtilise()
     *
     * @return void
     */
    public function testSetUtilise(): void {

        $obj = new OrgaGeneriques();

        $obj->setUtilise(true);
        $this->assertEquals(true, $obj->getUtilise());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
