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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpDadsuGene;

/**
 * Emp dadsu gene test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuGeneTest extends AbstractTestCase {

    /**
     * Tests the setAnciennBtp() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetAnciennBtp() {

        // Set a Date/time mock.
        $anciennBtp = new DateTime("2018-09-10");

        $obj = new EmpDadsuGene();

        $obj->setAnciennBtp($anciennBtp);
        $this->assertSame($anciennBtp, $obj->getAnciennBtp());
    }

    /**
     * Tests the setAnnexe7Mutation() method.
     *
     * @return void
     */
    public function testSetAnnexe7Mutation() {

        $obj = new EmpDadsuGene();

        $obj->setAnnexe7Mutation(true);
        $this->assertEquals(true, $obj->getAnnexe7Mutation());
    }

    /**
     * Tests the setApprentiEtam() method.
     *
     * @return void
     */
    public function testSetApprentiEtam() {

        $obj = new EmpDadsuGene();

        $obj->setApprentiEtam(true);
        $this->assertEquals(true, $obj->getApprentiEtam());
    }

    /**
     * Tests the setBenefAssedic() method.
     *
     * @return void
     */
    public function testSetBenefAssedic() {

        $obj = new EmpDadsuGene();

        $obj->setBenefAssedic("benefAssedic");
        $this->assertEquals("benefAssedic", $obj->getBenefAssedic());
    }

    /**
     * Tests the setBtqLieuTrav() method.
     *
     * @return void
     */
    public function testSetBtqLieuTrav() {

        $obj = new EmpDadsuGene();

        $obj->setBtqLieuTrav("btqLieuTrav");
        $this->assertEquals("btqLieuTrav", $obj->getBtqLieuTrav());
    }

    /**
     * Tests the setBureauDistributeurLieuTrav() method.
     *
     * @return void
     */
    public function testSetBureauDistributeurLieuTrav() {

        $obj = new EmpDadsuGene();

        $obj->setBureauDistributeurLieuTrav("bureauDistributeurLieuTrav");
        $this->assertEquals("bureauDistributeurLieuTrav", $obj->getBureauDistributeurLieuTrav());
    }

    /**
     * Tests the setCodeCaisseCp() method.
     *
     * @return void
     */
    public function testSetCodeCaisseCp() {

        $obj = new EmpDadsuGene();

        $obj->setCodeCaisseCp("codeCaisseCp");
        $this->assertEquals("codeCaisseCp", $obj->getCodeCaisseCp());
    }

    /**
     * Tests the setCodeCaract() method.
     *
     * @return void
     */
    public function testSetCodeCaract() {

        $obj = new EmpDadsuGene();

        $obj->setCodeCaract("codeCaract");
        $this->assertEquals("codeCaract", $obj->getCodeCaract());
    }

    /**
     * Tests the setCodeCategSalPourcentAbat() method.
     *
     * @return void
     */
    public function testSetCodeCategSalPourcentAbat() {

        $obj = new EmpDadsuGene();

        $obj->setCodeCategSalPourcentAbat("codeCategSalPourcentAbat");
        $this->assertEquals("codeCategSalPourcentAbat", $obj->getCodeCategSalPourcentAbat());
    }

    /**
     * Tests the setCodeClassBtp() method.
     *
     * @return void
     */
    public function testSetCodeClassBtp() {

        $obj = new EmpDadsuGene();

        $obj->setCodeClassBtp("codeClassBtp");
        $this->assertEquals("codeClassBtp", $obj->getCodeClassBtp());
    }

    /**
     * Tests the setCodeContratTrav() method.
     *
     * @return void
     */
    public function testSetCodeContratTrav() {

        $obj = new EmpDadsuGene();

        $obj->setCodeContratTrav("codeContratTrav");
        $this->assertEquals("codeContratTrav", $obj->getCodeContratTrav());
    }

    /**
     * Tests the setCodeConventionCol() method.
     *
     * @return void
     */
    public function testSetCodeConventionCol() {

        $obj = new EmpDadsuGene();

        $obj->setCodeConventionCol("codeConventionCol");
        $this->assertEquals("codeConventionCol", $obj->getCodeConventionCol());
    }

    /**
     * Tests the setCodeDistriEtranger() method.
     *
     * @return void
     */
    public function testSetCodeDistriEtranger() {

        $obj = new EmpDadsuGene();

        $obj->setCodeDistriEtranger("codeDistriEtranger");
        $this->assertEquals("codeDistriEtranger", $obj->getCodeDistriEtranger());
    }

    /**
     * Tests the setCodeExoTrav() method.
     *
     * @return void
     */
    public function testSetCodeExoTrav() {

        $obj = new EmpDadsuGene();

        $obj->setCodeExoTrav("codeExoTrav");
        $this->assertEquals("codeExoTrav", $obj->getCodeExoTrav());
    }

    /**
     * Tests the setCodeInseeLieuTrav() method.
     *
     * @return void
     */
    public function testSetCodeInseeLieuTrav() {

        $obj = new EmpDadsuGene();

        $obj->setCodeInseeLieuTrav("codeInseeLieuTrav");
        $this->assertEquals("codeInseeLieuTrav", $obj->getCodeInseeLieuTrav());
    }

    /**
     * Tests the setCodeIntitContratTrav() method.
     *
     * @return void
     */
    public function testSetCodeIntitContratTrav() {

        $obj = new EmpDadsuGene();

        $obj->setCodeIntitContratTrav("codeIntitContratTrav");
        $this->assertEquals("codeIntitContratTrav", $obj->getCodeIntitContratTrav());
    }

    /**
     * Tests the setCodeMetierBtp() method.
     *
     * @return void
     */
    public function testSetCodeMetierBtp() {

        $obj = new EmpDadsuGene();

        $obj->setCodeMetierBtp("codeMetierBtp");
        $this->assertEquals("codeMetierBtp", $obj->getCodeMetierBtp());
    }

    /**
     * Tests the setCodeOfficielCommuneLieuTrav() method.
     *
     * @return void
     */
    public function testSetCodeOfficielCommuneLieuTrav() {

        $obj = new EmpDadsuGene();

        $obj->setCodeOfficielCommuneLieuTrav("codeOfficielCommuneLieuTrav");
        $this->assertEquals("codeOfficielCommuneLieuTrav", $obj->getCodeOfficielCommuneLieuTrav());
    }

    /**
     * Tests the setCodePaysLieuTrav() method.
     *
     * @return void
     */
    public function testSetCodePaysLieuTrav() {

        $obj = new EmpDadsuGene();

        $obj->setCodePaysLieuTrav("codePaysLieuTrav");
        $this->assertEquals("codePaysLieuTrav", $obj->getCodePaysLieuTrav());
    }

    /**
     * Tests the setCodePostalLieuTrav() method.
     *
     * @return void
     */
    public function testSetCodePostalLieuTrav() {

        $obj = new EmpDadsuGene();

        $obj->setCodePostalLieuTrav("codePostalLieuTrav");
        $this->assertEquals("codePostalLieuTrav", $obj->getCodePostalLieuTrav());
    }

    /**
     * Tests the setCodeRegimeAt() method.
     *
     * @return void
     */
    public function testSetCodeRegimeAt() {

        $obj = new EmpDadsuGene();

        $obj->setCodeRegimeAt("codeRegimeAt");
        $this->assertEquals("codeRegimeAt", $obj->getCodeRegimeAt());
    }

    /**
     * Tests the setCodeRegimeBaseObl() method.
     *
     * @return void
     */
    public function testSetCodeRegimeBaseObl() {

        $obj = new EmpDadsuGene();

        $obj->setCodeRegimeBaseObl("codeRegimeBaseObl");
        $this->assertEquals("codeRegimeBaseObl", $obj->getCodeRegimeBaseObl());
    }

    /**
     * Tests the setCodeRegimeVieillesse() method.
     *
     * @return void
     */
    public function testSetCodeRegimeVieillesse() {

        $obj = new EmpDadsuGene();

        $obj->setCodeRegimeVieillesse("codeRegimeVieillesse");
        $this->assertEquals("codeRegimeVieillesse", $obj->getCodeRegimeVieillesse());
    }

    /**
     * Tests the setCodeRetraiteComplementaire() method.
     *
     * @return void
     */
    public function testSetCodeRetraiteComplementaire() {

        $obj = new EmpDadsuGene();

        $obj->setCodeRetraiteComplementaire("codeRetraiteComplementaire");
        $this->assertEquals("codeRetraiteComplementaire", $obj->getCodeRetraiteComplementaire());
    }

    /**
     * Tests the setCodeSituAdmin() method.
     *
     * @return void
     */
    public function testSetCodeSituAdmin() {

        $obj = new EmpDadsuGene();

        $obj->setCodeSituAdmin("codeSituAdmin");
        $this->assertEquals("codeSituAdmin", $obj->getCodeSituAdmin());
    }

    /**
     * Tests the setCodeStatutCateg() method.
     *
     * @return void
     */
    public function testSetCodeStatutCateg() {

        $obj = new EmpDadsuGene();

        $obj->setCodeStatutCateg("codeStatutCateg");
        $this->assertEquals("codeStatutCateg", $obj->getCodeStatutCateg());
    }

    /**
     * Tests the setCodeStatutCategRetraite() method.
     *
     * @return void
     */
    public function testSetCodeStatutCategRetraite() {

        $obj = new EmpDadsuGene();

        $obj->setCodeStatutCategRetraite("codeStatutCategRetraite");
        $this->assertEquals("codeStatutCategRetraite", $obj->getCodeStatutCategRetraite());
    }

    /**
     * Tests the setCodeStatutPro() method.
     *
     * @return void
     */
    public function testSetCodeStatutPro() {

        $obj = new EmpDadsuGene();

        $obj->setCodeStatutPro("codeStatutPro");
        $this->assertEquals("codeStatutPro", $obj->getCodeStatutPro());
    }

    /**
     * Tests the setCodeTypeExo1() method.
     *
     * @return void
     */
    public function testSetCodeTypeExo1() {

        $obj = new EmpDadsuGene();

        $obj->setCodeTypeExo1("codeTypeExo1");
        $this->assertEquals("codeTypeExo1", $obj->getCodeTypeExo1());
    }

    /**
     * Tests the setCodeTypeExo2() method.
     *
     * @return void
     */
    public function testSetCodeTypeExo2() {

        $obj = new EmpDadsuGene();

        $obj->setCodeTypeExo2("codeTypeExo2");
        $this->assertEquals("codeTypeExo2", $obj->getCodeTypeExo2());
    }

    /**
     * Tests the setCodeTypeExo3() method.
     *
     * @return void
     */
    public function testSetCodeTypeExo3() {

        $obj = new EmpDadsuGene();

        $obj->setCodeTypeExo3("codeTypeExo3");
        $this->assertEquals("codeTypeExo3", $obj->getCodeTypeExo3());
    }

    /**
     * Tests the setCodeUniteTempsTravail() method.
     *
     * @return void
     */
    public function testSetCodeUniteTempsTravail() {

        $obj = new EmpDadsuGene();

        $obj->setCodeUniteTempsTravail("codeUniteTempsTravail");
        $this->assertEquals("codeUniteTempsTravail", $obj->getCodeUniteTempsTravail());
    }

    /**
     * Tests the setCodeZoneGeo() method.
     *
     * @return void
     */
    public function testSetCodeZoneGeo() {

        $obj = new EmpDadsuGene();

        $obj->setCodeZoneGeo("codeZoneGeo");
        $this->assertEquals("codeZoneGeo", $obj->getCodeZoneGeo());
    }

    /**
     * Tests the setComplementLieuTrav() method.
     *
     * @return void
     */
    public function testSetComplementLieuTrav() {

        $obj = new EmpDadsuGene();

        $obj->setComplementLieuTrav("complementLieuTrav");
        $this->assertEquals("complementLieuTrav", $obj->getComplementLieuTrav());
    }

    /**
     * Tests the setDateRachat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRachat() {

        // Set a Date/time mock.
        $dateRachat = new DateTime("2018-09-10");

        $obj = new EmpDadsuGene();

        $obj->setDateRachat($dateRachat);
        $this->assertSame($dateRachat, $obj->getDateRachat());
    }

    /**
     * Tests the setDetacheExpatrie() method.
     *
     * @return void
     */
    public function testSetDetacheExpatrie() {

        $obj = new EmpDadsuGene();

        $obj->setDetacheExpatrie("detacheExpatrie");
        $this->assertEquals("detacheExpatrie", $obj->getDetacheExpatrie());
    }

    /**
     * Tests the setEchelon() method.
     *
     * @return void
     */
    public function testSetEchelon() {

        $obj = new EmpDadsuGene();

        $obj->setEchelon("echelon");
        $this->assertEquals("echelon", $obj->getEchelon());
    }

    /**
     * Tests the setEtabLieuTravail() method.
     *
     * @return void
     */
    public function testSetEtabLieuTravail() {

        $obj = new EmpDadsuGene();

        $obj->setEtabLieuTravail("etabLieuTravail");
        $this->assertEquals("etabLieuTravail", $obj->getEtabLieuTravail());
    }

    /**
     * Tests the setIdLieuTravail() method.
     *
     * @return void
     */
    public function testSetIdLieuTravail() {

        $obj = new EmpDadsuGene();

        $obj->setIdLieuTravail("idLieuTravail");
        $this->assertEquals("idLieuTravail", $obj->getIdLieuTravail());
    }

    /**
     * Tests the setIndice() method.
     *
     * @return void
     */
    public function testSetIndice() {

        $obj = new EmpDadsuGene();

        $obj->setIndice("indice");
        $this->assertEquals("indice", $obj->getIndice());
    }

    /**
     * Tests the setNiveau() method.
     *
     * @return void
     */
    public function testSetNiveau() {

        $obj = new EmpDadsuGene();

        $obj->setNiveau("niveau");
        $this->assertEquals("niveau", $obj->getNiveau());
    }

    /**
     * Tests the setNomVilleInseeLieuTrav() method.
     *
     * @return void
     */
    public function testSetNomVilleInseeLieuTrav() {

        $obj = new EmpDadsuGene();

        $obj->setNomVilleInseeLieuTrav("nomVilleInseeLieuTrav");
        $this->assertEquals("nomVilleInseeLieuTrav", $obj->getNomVilleInseeLieuTrav());
    }

    /**
     * Tests the setNomVilleLieuTrav() method.
     *
     * @return void
     */
    public function testSetNomVilleLieuTrav() {

        $obj = new EmpDadsuGene();

        $obj->setNomVilleLieuTrav("nomVilleLieuTrav");
        $this->assertEquals("nomVilleLieuTrav", $obj->getNomVilleLieuTrav());
    }

    /**
     * Tests the setNomVoieLieuTrav() method.
     *
     * @return void
     */
    public function testSetNomVoieLieuTrav() {

        $obj = new EmpDadsuGene();

        $obj->setNomVoieLieuTrav("nomVoieLieuTrav");
        $this->assertEquals("nomVoieLieuTrav", $obj->getNomVoieLieuTrav());
    }

    /**
     * Tests the setNumVoieLieuTrav() method.
     *
     * @return void
     */
    public function testSetNumVoieLieuTrav() {

        $obj = new EmpDadsuGene();

        $obj->setNumVoieLieuTrav("numVoieLieuTrav");
        $this->assertEquals("numVoieLieuTrav", $obj->getNumVoieLieuTrav());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new EmpDadsuGene();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests the setPosition() method.
     *
     * @return void
     */
    public function testSetPosition() {

        $obj = new EmpDadsuGene();

        $obj->setPosition("position");
        $this->assertEquals("position", $obj->getPosition());
    }

    /**
     * Tests the setRaisonSocLieuTrav() method.
     *
     * @return void
     */
    public function testSetRaisonSocLieuTrav() {

        $obj = new EmpDadsuGene();

        $obj->setRaisonSocLieuTrav("raisonSocLieuTrav");
        $this->assertEquals("raisonSocLieuTrav", $obj->getRaisonSocLieuTrav());
    }

    /**
     * Tests the setSiretLieuTrav() method.
     *
     * @return void
     */
    public function testSetSiretLieuTrav() {

        $obj = new EmpDadsuGene();

        $obj->setSiretLieuTrav("siretLieuTrav");
        $this->assertEquals("siretLieuTrav", $obj->getSiretLieuTrav());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new EmpDadsuGene();

        $this->assertNull($obj->getAnciennBtp());
        $this->assertNull($obj->getAnnexe7Mutation());
        $this->assertNull($obj->getApprentiEtam());
        $this->assertNull($obj->getBtqLieuTrav());
        $this->assertNull($obj->getBenefAssedic());
        $this->assertNull($obj->getBureauDistributeurLieuTrav());
        $this->assertNull($obj->getCodeCaisseCp());
        $this->assertNull($obj->getCodeCaract());
        $this->assertNull($obj->getCodeCategSalPourcentAbat());
        $this->assertNull($obj->getCodeClassBtp());
        $this->assertNull($obj->getCodeContratTrav());
        $this->assertNull($obj->getCodeConventionCol());
        $this->assertNull($obj->getCodeDistriEtranger());
        $this->assertNull($obj->getCodeExoTrav());
        $this->assertNull($obj->getCodeInseeLieuTrav());
        $this->assertNull($obj->getCodeIntitContratTrav());
        $this->assertNull($obj->getCodeMetierBtp());
        $this->assertNull($obj->getCodeOfficielCommuneLieuTrav());
        $this->assertNull($obj->getCodePaysLieuTrav());
        $this->assertNull($obj->getCodePostalLieuTrav());
        $this->assertNull($obj->getCodeRegimeAt());
        $this->assertNull($obj->getCodeRegimeBaseObl());
        $this->assertNull($obj->getCodeRegimeVieillesse());
        $this->assertNull($obj->getCodeRetraiteComplementaire());
        $this->assertNull($obj->getCodeSituAdmin());
        $this->assertNull($obj->getCodeStatutCateg());
        $this->assertNull($obj->getCodeStatutCategRetraite());
        $this->assertNull($obj->getCodeStatutPro());
        $this->assertNull($obj->getCodeTypeExo1());
        $this->assertNull($obj->getCodeTypeExo2());
        $this->assertNull($obj->getCodeTypeExo3());
        $this->assertNull($obj->getCodeUniteTempsTravail());
        $this->assertNull($obj->getCodeZoneGeo());
        $this->assertNull($obj->getComplementLieuTrav());
        $this->assertNull($obj->getDateRachat());
        $this->assertNull($obj->getDetacheExpatrie());
        $this->assertNull($obj->getEchelon());
        $this->assertNull($obj->getEtabLieuTravail());
        $this->assertNull($obj->getIdLieuTravail());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getNomVilleInseeLieuTrav());
        $this->assertNull($obj->getNomVilleLieuTrav());
        $this->assertNull($obj->getNomVoieLieuTrav());
        $this->assertNull($obj->getNumVoieLieuTrav());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getPosition());
        $this->assertNull($obj->getRaisonSocLieuTrav());
        $this->assertNull($obj->getSiretLieuTrav());
    }
}
