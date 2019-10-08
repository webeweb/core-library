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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpDADSUGene;

/**
 * Emp d a d s u gene model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDADSUGeneTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmpDADSUGene();

        $this->assertNull($obj->getAnciennBtp());
        $this->assertNull($obj->getAnnexe7Mutation());
        $this->assertNull($obj->getApprentiETAM());
        $this->assertNull($obj->getBTQLieuTrav());
        $this->assertNull($obj->getBenefAssedic());
        $this->assertNull($obj->getBureauDistributeurLieuTrav());
        $this->assertNull($obj->getCodeCaisseCP());
        $this->assertNull($obj->getCodeCaract());
        $this->assertNull($obj->getCodeCategSalPourcentAbat());
        $this->assertNull($obj->getCodeClassBTP());
        $this->assertNull($obj->getCodeContratTrav());
        $this->assertNull($obj->getCodeConventionCol());
        $this->assertNull($obj->getCodeDistriEtranger());
        $this->assertNull($obj->getCodeExoTrav());
        $this->assertNull($obj->getCodeInseeLieuTrav());
        $this->assertNull($obj->getCodeIntitContratTrav());
        $this->assertNull($obj->getCodeMetierBTP());
        $this->assertNull($obj->getCodeOfficielCommuneLieuTrav());
        $this->assertNull($obj->getCodePaysLieuTrav());
        $this->assertNull($obj->getCodePostalLieuTrav());
        $this->assertNull($obj->getCodeRegimeAT());
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
        $this->assertNull($obj->getIDLieuTravail());
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

    /**
     * Tests the setAnciennBtp() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetAnciennBtp() {

        $obj = new EmpDADSUGene();

        $obj->setAnciennBtp(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getAnciennBtp());
    }

    /**
     * Tests the setAnnexe7Mutation() method.
     *
     * @return void
     */
    public function testSetAnnexe7Mutation() {

        $obj = new EmpDADSUGene();

        $obj->setAnnexe7Mutation(true);
        $this->assertEquals(true, $obj->getAnnexe7Mutation());
    }

    /**
     * Tests the setApprentiETAM() method.
     *
     * @return void
     */
    public function testSetApprentiETAM() {

        $obj = new EmpDADSUGene();

        $obj->setApprentiETAM(true);
        $this->assertEquals(true, $obj->getApprentiETAM());
    }

    /**
     * Tests the setBTQLieuTrav() method.
     *
     * @return void
     */
    public function testSetBTQLieuTrav() {

        $obj = new EmpDADSUGene();

        $obj->setBTQLieuTrav("bTQLieuTrav");
        $this->assertEquals("bTQLieuTrav", $obj->getBTQLieuTrav());
    }

    /**
     * Tests the setBenefAssedic() method.
     *
     * @return void
     */
    public function testSetBenefAssedic() {

        $obj = new EmpDADSUGene();

        $obj->setBenefAssedic("benefAssedic");
        $this->assertEquals("benefAssedic", $obj->getBenefAssedic());
    }

    /**
     * Tests the setBureauDistributeurLieuTrav() method.
     *
     * @return void
     */
    public function testSetBureauDistributeurLieuTrav() {

        $obj = new EmpDADSUGene();

        $obj->setBureauDistributeurLieuTrav("bureauDistributeurLieuTrav");
        $this->assertEquals("bureauDistributeurLieuTrav", $obj->getBureauDistributeurLieuTrav());
    }

    /**
     * Tests the setCodeCaisseCP() method.
     *
     * @return void
     */
    public function testSetCodeCaisseCP() {

        $obj = new EmpDADSUGene();

        $obj->setCodeCaisseCP("codeCaisseCP");
        $this->assertEquals("codeCaisseCP", $obj->getCodeCaisseCP());
    }

    /**
     * Tests the setCodeCaract() method.
     *
     * @return void
     */
    public function testSetCodeCaract() {

        $obj = new EmpDADSUGene();

        $obj->setCodeCaract("codeCaract");
        $this->assertEquals("codeCaract", $obj->getCodeCaract());
    }

    /**
     * Tests the setCodeCategSalPourcentAbat() method.
     *
     * @return void
     */
    public function testSetCodeCategSalPourcentAbat() {

        $obj = new EmpDADSUGene();

        $obj->setCodeCategSalPourcentAbat("codeCategSalPourcentAbat");
        $this->assertEquals("codeCategSalPourcentAbat", $obj->getCodeCategSalPourcentAbat());
    }

    /**
     * Tests the setCodeClassBTP() method.
     *
     * @return void
     */
    public function testSetCodeClassBTP() {

        $obj = new EmpDADSUGene();

        $obj->setCodeClassBTP("codeClassBTP");
        $this->assertEquals("codeClassBTP", $obj->getCodeClassBTP());
    }

    /**
     * Tests the setCodeContratTrav() method.
     *
     * @return void
     */
    public function testSetCodeContratTrav() {

        $obj = new EmpDADSUGene();

        $obj->setCodeContratTrav("codeContratTrav");
        $this->assertEquals("codeContratTrav", $obj->getCodeContratTrav());
    }

    /**
     * Tests the setCodeConventionCol() method.
     *
     * @return void
     */
    public function testSetCodeConventionCol() {

        $obj = new EmpDADSUGene();

        $obj->setCodeConventionCol("codeConventionCol");
        $this->assertEquals("codeConventionCol", $obj->getCodeConventionCol());
    }

    /**
     * Tests the setCodeDistriEtranger() method.
     *
     * @return void
     */
    public function testSetCodeDistriEtranger() {

        $obj = new EmpDADSUGene();

        $obj->setCodeDistriEtranger("codeDistriEtranger");
        $this->assertEquals("codeDistriEtranger", $obj->getCodeDistriEtranger());
    }

    /**
     * Tests the setCodeExoTrav() method.
     *
     * @return void
     */
    public function testSetCodeExoTrav() {

        $obj = new EmpDADSUGene();

        $obj->setCodeExoTrav("codeExoTrav");
        $this->assertEquals("codeExoTrav", $obj->getCodeExoTrav());
    }

    /**
     * Tests the setCodeInseeLieuTrav() method.
     *
     * @return void
     */
    public function testSetCodeInseeLieuTrav() {

        $obj = new EmpDADSUGene();

        $obj->setCodeInseeLieuTrav("codeInseeLieuTrav");
        $this->assertEquals("codeInseeLieuTrav", $obj->getCodeInseeLieuTrav());
    }

    /**
     * Tests the setCodeIntitContratTrav() method.
     *
     * @return void
     */
    public function testSetCodeIntitContratTrav() {

        $obj = new EmpDADSUGene();

        $obj->setCodeIntitContratTrav("codeIntitContratTrav");
        $this->assertEquals("codeIntitContratTrav", $obj->getCodeIntitContratTrav());
    }

    /**
     * Tests the setCodeMetierBTP() method.
     *
     * @return void
     */
    public function testSetCodeMetierBTP() {

        $obj = new EmpDADSUGene();

        $obj->setCodeMetierBTP("codeMetierBTP");
        $this->assertEquals("codeMetierBTP", $obj->getCodeMetierBTP());
    }

    /**
     * Tests the setCodeOfficielCommuneLieuTrav() method.
     *
     * @return void
     */
    public function testSetCodeOfficielCommuneLieuTrav() {

        $obj = new EmpDADSUGene();

        $obj->setCodeOfficielCommuneLieuTrav("codeOfficielCommuneLieuTrav");
        $this->assertEquals("codeOfficielCommuneLieuTrav", $obj->getCodeOfficielCommuneLieuTrav());
    }

    /**
     * Tests the setCodePaysLieuTrav() method.
     *
     * @return void
     */
    public function testSetCodePaysLieuTrav() {

        $obj = new EmpDADSUGene();

        $obj->setCodePaysLieuTrav("codePaysLieuTrav");
        $this->assertEquals("codePaysLieuTrav", $obj->getCodePaysLieuTrav());
    }

    /**
     * Tests the setCodePostalLieuTrav() method.
     *
     * @return void
     */
    public function testSetCodePostalLieuTrav() {

        $obj = new EmpDADSUGene();

        $obj->setCodePostalLieuTrav("codePostalLieuTrav");
        $this->assertEquals("codePostalLieuTrav", $obj->getCodePostalLieuTrav());
    }

    /**
     * Tests the setCodeRegimeAT() method.
     *
     * @return void
     */
    public function testSetCodeRegimeAT() {

        $obj = new EmpDADSUGene();

        $obj->setCodeRegimeAT("codeRegimeAT");
        $this->assertEquals("codeRegimeAT", $obj->getCodeRegimeAT());
    }

    /**
     * Tests the setCodeRegimeBaseObl() method.
     *
     * @return void
     */
    public function testSetCodeRegimeBaseObl() {

        $obj = new EmpDADSUGene();

        $obj->setCodeRegimeBaseObl("codeRegimeBaseObl");
        $this->assertEquals("codeRegimeBaseObl", $obj->getCodeRegimeBaseObl());
    }

    /**
     * Tests the setCodeRegimeVieillesse() method.
     *
     * @return void
     */
    public function testSetCodeRegimeVieillesse() {

        $obj = new EmpDADSUGene();

        $obj->setCodeRegimeVieillesse("codeRegimeVieillesse");
        $this->assertEquals("codeRegimeVieillesse", $obj->getCodeRegimeVieillesse());
    }

    /**
     * Tests the setCodeRetraiteComplementaire() method.
     *
     * @return void
     */
    public function testSetCodeRetraiteComplementaire() {

        $obj = new EmpDADSUGene();

        $obj->setCodeRetraiteComplementaire("codeRetraiteComplementaire");
        $this->assertEquals("codeRetraiteComplementaire", $obj->getCodeRetraiteComplementaire());
    }

    /**
     * Tests the setCodeSituAdmin() method.
     *
     * @return void
     */
    public function testSetCodeSituAdmin() {

        $obj = new EmpDADSUGene();

        $obj->setCodeSituAdmin("codeSituAdmin");
        $this->assertEquals("codeSituAdmin", $obj->getCodeSituAdmin());
    }

    /**
     * Tests the setCodeStatutCateg() method.
     *
     * @return void
     */
    public function testSetCodeStatutCateg() {

        $obj = new EmpDADSUGene();

        $obj->setCodeStatutCateg("codeStatutCateg");
        $this->assertEquals("codeStatutCateg", $obj->getCodeStatutCateg());
    }

    /**
     * Tests the setCodeStatutCategRetraite() method.
     *
     * @return void
     */
    public function testSetCodeStatutCategRetraite() {

        $obj = new EmpDADSUGene();

        $obj->setCodeStatutCategRetraite("codeStatutCategRetraite");
        $this->assertEquals("codeStatutCategRetraite", $obj->getCodeStatutCategRetraite());
    }

    /**
     * Tests the setCodeStatutPro() method.
     *
     * @return void
     */
    public function testSetCodeStatutPro() {

        $obj = new EmpDADSUGene();

        $obj->setCodeStatutPro("codeStatutPro");
        $this->assertEquals("codeStatutPro", $obj->getCodeStatutPro());
    }

    /**
     * Tests the setCodeTypeExo1() method.
     *
     * @return void
     */
    public function testSetCodeTypeExo1() {

        $obj = new EmpDADSUGene();

        $obj->setCodeTypeExo1("codeTypeExo1");
        $this->assertEquals("codeTypeExo1", $obj->getCodeTypeExo1());
    }

    /**
     * Tests the setCodeTypeExo2() method.
     *
     * @return void
     */
    public function testSetCodeTypeExo2() {

        $obj = new EmpDADSUGene();

        $obj->setCodeTypeExo2("codeTypeExo2");
        $this->assertEquals("codeTypeExo2", $obj->getCodeTypeExo2());
    }

    /**
     * Tests the setCodeTypeExo3() method.
     *
     * @return void
     */
    public function testSetCodeTypeExo3() {

        $obj = new EmpDADSUGene();

        $obj->setCodeTypeExo3("codeTypeExo3");
        $this->assertEquals("codeTypeExo3", $obj->getCodeTypeExo3());
    }

    /**
     * Tests the setCodeUniteTempsTravail() method.
     *
     * @return void
     */
    public function testSetCodeUniteTempsTravail() {

        $obj = new EmpDADSUGene();

        $obj->setCodeUniteTempsTravail("codeUniteTempsTravail");
        $this->assertEquals("codeUniteTempsTravail", $obj->getCodeUniteTempsTravail());
    }

    /**
     * Tests the setCodeZoneGeo() method.
     *
     * @return void
     */
    public function testSetCodeZoneGeo() {

        $obj = new EmpDADSUGene();

        $obj->setCodeZoneGeo("codeZoneGeo");
        $this->assertEquals("codeZoneGeo", $obj->getCodeZoneGeo());
    }

    /**
     * Tests the setComplementLieuTrav() method.
     *
     * @return void
     */
    public function testSetComplementLieuTrav() {

        $obj = new EmpDADSUGene();

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

        $obj = new EmpDADSUGene();

        $obj->setDateRachat(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateRachat());
    }

    /**
     * Tests the setDetacheExpatrie() method.
     *
     * @return void
     */
    public function testSetDetacheExpatrie() {

        $obj = new EmpDADSUGene();

        $obj->setDetacheExpatrie("detacheExpatrie");
        $this->assertEquals("detacheExpatrie", $obj->getDetacheExpatrie());
    }

    /**
     * Tests the setEchelon() method.
     *
     * @return void
     */
    public function testSetEchelon() {

        $obj = new EmpDADSUGene();

        $obj->setEchelon("echelon");
        $this->assertEquals("echelon", $obj->getEchelon());
    }

    /**
     * Tests the setEtabLieuTravail() method.
     *
     * @return void
     */
    public function testSetEtabLieuTravail() {

        $obj = new EmpDADSUGene();

        $obj->setEtabLieuTravail("etabLieuTravail");
        $this->assertEquals("etabLieuTravail", $obj->getEtabLieuTravail());
    }

    /**
     * Tests the setIDLieuTravail() method.
     *
     * @return void
     */
    public function testSetIDLieuTravail() {

        $obj = new EmpDADSUGene();

        $obj->setIDLieuTravail("iDLieuTravail");
        $this->assertEquals("iDLieuTravail", $obj->getIDLieuTravail());
    }

    /**
     * Tests the setIndice() method.
     *
     * @return void
     */
    public function testSetIndice() {

        $obj = new EmpDADSUGene();

        $obj->setIndice("indice");
        $this->assertEquals("indice", $obj->getIndice());
    }

    /**
     * Tests the setNiveau() method.
     *
     * @return void
     */
    public function testSetNiveau() {

        $obj = new EmpDADSUGene();

        $obj->setNiveau("niveau");
        $this->assertEquals("niveau", $obj->getNiveau());
    }

    /**
     * Tests the setNomVilleInseeLieuTrav() method.
     *
     * @return void
     */
    public function testSetNomVilleInseeLieuTrav() {

        $obj = new EmpDADSUGene();

        $obj->setNomVilleInseeLieuTrav("nomVilleInseeLieuTrav");
        $this->assertEquals("nomVilleInseeLieuTrav", $obj->getNomVilleInseeLieuTrav());
    }

    /**
     * Tests the setNomVilleLieuTrav() method.
     *
     * @return void
     */
    public function testSetNomVilleLieuTrav() {

        $obj = new EmpDADSUGene();

        $obj->setNomVilleLieuTrav("nomVilleLieuTrav");
        $this->assertEquals("nomVilleLieuTrav", $obj->getNomVilleLieuTrav());
    }

    /**
     * Tests the setNomVoieLieuTrav() method.
     *
     * @return void
     */
    public function testSetNomVoieLieuTrav() {

        $obj = new EmpDADSUGene();

        $obj->setNomVoieLieuTrav("nomVoieLieuTrav");
        $this->assertEquals("nomVoieLieuTrav", $obj->getNomVoieLieuTrav());
    }

    /**
     * Tests the setNumVoieLieuTrav() method.
     *
     * @return void
     */
    public function testSetNumVoieLieuTrav() {

        $obj = new EmpDADSUGene();

        $obj->setNumVoieLieuTrav("numVoieLieuTrav");
        $this->assertEquals("numVoieLieuTrav", $obj->getNumVoieLieuTrav());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new EmpDADSUGene();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests the setPosition() method.
     *
     * @return void
     */
    public function testSetPosition() {

        $obj = new EmpDADSUGene();

        $obj->setPosition("position");
        $this->assertEquals("position", $obj->getPosition());
    }

    /**
     * Tests the setRaisonSocLieuTrav() method.
     *
     * @return void
     */
    public function testSetRaisonSocLieuTrav() {

        $obj = new EmpDADSUGene();

        $obj->setRaisonSocLieuTrav("raisonSocLieuTrav");
        $this->assertEquals("raisonSocLieuTrav", $obj->getRaisonSocLieuTrav());
    }

    /**
     * Tests the setSiretLieuTrav() method.
     *
     * @return void
     */
    public function testSetSiretLieuTrav() {

        $obj = new EmpDADSUGene();

        $obj->setSiretLieuTrav("siretLieuTrav");
        $this->assertEquals("siretLieuTrav", $obj->getSiretLieuTrav());
    }
}
