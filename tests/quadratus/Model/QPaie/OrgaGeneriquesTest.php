<?php

declare(strict_types = 1);

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
     * Test setADeclarerDsnNeant()
     *
     * @return void
     */
    public function testSetADeclarerDsnNeant(): void {

        $obj = new OrgaGeneriques();

        $obj->setADeclarerDsnNeant(true);
        $this->assertTrue($obj->getADeclarerDsnNeant());
    }

    /**
     * Test setAgrementMinisteriel()
     *
     * @return void
     */
    public function testSetAgrementMinisteriel(): void {

        $obj = new OrgaGeneriques();

        $obj->setAgrementMinisteriel("agrementMinisteriel");
        $this->assertEquals("agrementMinisteriel", $obj->getAgrementMinisteriel());
    }

    /**
     * Test setAppliquerCpn220()
     *
     * @return void
     */
    public function testSetAppliquerCpn220(): void {

        $obj = new OrgaGeneriques();

        $obj->setAppliquerCpn220(true);
        $this->assertTrue($obj->getAppliquerCpn220());
    }

    /**
     * Test setArrondirBase()
     *
     * @return void
     */
    public function testSetArrondirBase(): void {

        $obj = new OrgaGeneriques();

        $obj->setArrondirBase("arrondirBase");
        $this->assertEquals("arrondirBase", $obj->getArrondirBase());
    }

    /**
     * Test setArrondirCotis()
     *
     * @return void
     */
    public function testSetArrondirCotis(): void {

        $obj = new OrgaGeneriques();

        $obj->setArrondirCotis("arrondirCotis");
        $this->assertEquals("arrondirCotis", $obj->getArrondirCotis());
    }

    /**
     * Test setAssietteSpecifAgff()
     *
     * @return void
     */
    public function testSetAssietteSpecifAgff(): void {

        $obj = new OrgaGeneriques();

        $obj->setAssietteSpecifAgff(true);
        $this->assertTrue($obj->getAssietteSpecifAgff());
    }

    /**
     * Test setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new OrgaGeneriques();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Test setCodeAssietteSit2()
     *
     * @return void
     */
    public function testSetCodeAssietteSit2(): void {

        $obj = new OrgaGeneriques();

        $obj->setCodeAssietteSit2("codeAssietteSit2");
        $this->assertEquals("codeAssietteSit2", $obj->getCodeAssietteSit2());
    }

    /**
     * Test setCodeAssietteSit2Agff()
     *
     * @return void
     */
    public function testSetCodeAssietteSit2Agff(): void {

        $obj = new OrgaGeneriques();

        $obj->setCodeAssietteSit2Agff("codeAssietteSit2Agff");
        $this->assertEquals("codeAssietteSit2Agff", $obj->getCodeAssietteSit2Agff());
    }

    /**
     * Test setCodeAssietteSitb()
     *
     * @return void
     */
    public function testSetCodeAssietteSitb(): void {

        $obj = new OrgaGeneriques();

        $obj->setCodeAssietteSitb("codeAssietteSitb");
        $this->assertEquals("codeAssietteSitb", $obj->getCodeAssietteSitb());
    }

    /**
     * Test setCodeAssietteSitbagff()
     *
     * @return void
     */
    public function testSetCodeAssietteSitbagff(): void {

        $obj = new OrgaGeneriques();

        $obj->setCodeAssietteSitbagff("codeAssietteSitbagff");
        $this->assertEquals("codeAssietteSitbagff", $obj->getCodeAssietteSitbagff());
    }

    /**
     * Test setCodeAssietteSitc()
     *
     * @return void
     */
    public function testSetCodeAssietteSitc(): void {

        $obj = new OrgaGeneriques();

        $obj->setCodeAssietteSitc("codeAssietteSitc");
        $this->assertEquals("codeAssietteSitc", $obj->getCodeAssietteSitc());
    }

    /**
     * Test setCodeCaisseMsa()
     *
     * @return void
     */
    public function testSetCodeCaisseMsa(): void {

        $obj = new OrgaGeneriques();

        $obj->setCodeCaisseMsa("codeCaisseMsa");
        $this->assertEquals("codeCaisseMsa", $obj->getCodeCaisseMsa());
    }

    /**
     * Test setCodeOrganismeAssuranceDadsu()
     *
     * @return void
     */
    public function testSetCodeOrganismeAssuranceDadsu(): void {

        $obj = new OrgaGeneriques();

        $obj->setCodeOrganismeAssuranceDadsu("codeOrganismeAssuranceDadsu");
        $this->assertEquals("codeOrganismeAssuranceDadsu", $obj->getCodeOrganismeAssuranceDadsu());
    }

    /**
     * Test setCodeOrganismeMutuelleDadsu()
     *
     * @return void
     */
    public function testSetCodeOrganismeMutuelleDadsu(): void {

        $obj = new OrgaGeneriques();

        $obj->setCodeOrganismeMutuelleDadsu("codeOrganismeMutuelleDadsu");
        $this->assertEquals("codeOrganismeMutuelleDadsu", $obj->getCodeOrganismeMutuelleDadsu());
    }

    /**
     * Test setDetailArrco()
     *
     * @return void
     */
    public function testSetDetailArrco(): void {

        $obj = new OrgaGeneriques();

        $obj->setDetailArrco(true);
        $this->assertTrue($obj->getDetailArrco());
    }

    /**
     * Test setGroupeCrc()
     *
     * @return void
     */
    public function testSetGroupeCrc(): void {

        $obj = new OrgaGeneriques();

        $obj->setGroupeCrc("groupeCrc");
        $this->assertEquals("groupeCrc", $obj->getGroupeCrc());
    }

    /**
     * Test setIdInstitution()
     *
     * @return void
     */
    public function testSetIdInstitution(): void {

        $obj = new OrgaGeneriques();

        $obj->setIdInstitution("idInstitution");
        $this->assertEquals("idInstitution", $obj->getIdInstitution());
    }

    /**
     * Test setIntitSousTotalAgffAgirc()
     *
     * @return void
     */
    public function testSetIntitSousTotalAgffAgirc(): void {

        $obj = new OrgaGeneriques();

        $obj->setIntitSousTotalAgffAgirc("intitSousTotalAgffAgirc");
        $this->assertEquals("intitSousTotalAgffAgirc", $obj->getIntitSousTotalAgffAgirc());
    }

    /**
     * Test setIntitSousTotalAgffArrco()
     *
     * @return void
     */
    public function testSetIntitSousTotalAgffArrco(): void {

        $obj = new OrgaGeneriques();

        $obj->setIntitSousTotalAgffArrco("intitSousTotalAgffArrco");
        $this->assertEquals("intitSousTotalAgffArrco", $obj->getIntitSousTotalAgffArrco());
    }

    /**
     * Test setIntitSousTotalApec()
     *
     * @return void
     */
    public function testSetIntitSousTotalApec(): void {

        $obj = new OrgaGeneriques();

        $obj->setIntitSousTotalApec("intitSousTotalApec");
        $this->assertEquals("intitSousTotalApec", $obj->getIntitSousTotalApec());
    }

    /**
     * Test setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new OrgaGeneriques();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Test setLienFicParamDsn()
     *
     * @return void
     */
    public function testSetLienFicParamDsn(): void {

        $obj = new OrgaGeneriques();

        $obj->setLienFicParamDsn("lienFicParamDsn");
        $this->assertEquals("lienFicParamDsn", $obj->getLienFicParamDsn());
    }

    /**
     * Test setRegroupementSi()
     *
     * @return void
     */
    public function testSetRegroupementSi(): void {

        $obj = new OrgaGeneriques();

        $obj->setRegroupementSi(true);
        $this->assertTrue($obj->getRegroupementSi());
    }

    /**
     * Test setSousTotalAgff()
     *
     * @return void
     */
    public function testSetSousTotalAgff(): void {

        $obj = new OrgaGeneriques();

        $obj->setSousTotalAgff(true);
        $this->assertTrue($obj->getSousTotalAgff());
    }

    /**
     * Test setSousTotalApec()
     *
     * @return void
     */
    public function testSetSousTotalApec(): void {

        $obj = new OrgaGeneriques();

        $obj->setSousTotalApec(true);
        $this->assertTrue($obj->getSousTotalApec());
    }

    /**
     * Test setSousTotalCaisse()
     *
     * @return void
     */
    public function testSetSousTotalCaisse(): void {

        $obj = new OrgaGeneriques();

        $obj->setSousTotalCaisse(true);
        $this->assertTrue($obj->getSousTotalCaisse());
    }

    /**
     * Test setTraitementDadsu()
     *
     * @return void
     */
    public function testSetTraitementDadsu(): void {

        $obj = new OrgaGeneriques();

        $obj->setTraitementDadsu(true);
        $this->assertTrue($obj->getTraitementDadsu());
    }

    /**
     * Test setTypeDeclaration()
     *
     * @return void
     */
    public function testSetTypeDeclaration(): void {

        $obj = new OrgaGeneriques();

        $obj->setTypeDeclaration("typeDeclaration");
        $this->assertEquals("typeDeclaration", $obj->getTypeDeclaration());
    }

    /**
     * Test setTypeOrganisme()
     *
     * @return void
     */
    public function testSetTypeOrganisme(): void {

        $obj = new OrgaGeneriques();

        $obj->setTypeOrganisme("typeOrganisme");
        $this->assertEquals("typeOrganisme", $obj->getTypeOrganisme());
    }

    /**
     * Test setUtilise()
     *
     * @return void
     */
    public function testSetUtilise(): void {

        $obj = new OrgaGeneriques();

        $obj->setUtilise(true);
        $this->assertTrue($obj->getUtilise());
    }

    /**
     * Test __construct()
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
