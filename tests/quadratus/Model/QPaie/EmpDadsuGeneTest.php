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

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\EmpDadsuGene;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Emp dadsu gene test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class EmpDadsuGeneTest extends AbstractTestCase {

    /**
     * Tests setAnciennBtp()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetAnciennBtp(): void {

        // Set a Date/time mock.
        $anciennBtp = new DateTime("2018-09-10");

        $obj = new EmpDadsuGene();

        $obj->setAnciennBtp($anciennBtp);
        $this->assertSame($anciennBtp, $obj->getAnciennBtp());
    }

    /**
     * Tests setAnnexe7Mutation()
     *
     * @return void
     */
    public function testSetAnnexe7Mutation(): void {

        $obj = new EmpDadsuGene();

        $obj->setAnnexe7Mutation(true);
        $this->assertEquals(true, $obj->getAnnexe7Mutation());
    }

    /**
     * Tests setApprentiEtam()
     *
     * @return void
     */
    public function testSetApprentiEtam(): void {

        $obj = new EmpDadsuGene();

        $obj->setApprentiEtam(true);
        $this->assertEquals(true, $obj->getApprentiEtam());
    }

    /**
     * Tests setBenefAssedic()
     *
     * @return void
     */
    public function testSetBenefAssedic(): void {

        $obj = new EmpDadsuGene();

        $obj->setBenefAssedic("benefAssedic");
        $this->assertEquals("benefAssedic", $obj->getBenefAssedic());
    }

    /**
     * Tests setBtqLieuTrav()
     *
     * @return void
     */
    public function testSetBtqLieuTrav(): void {

        $obj = new EmpDadsuGene();

        $obj->setBtqLieuTrav("btqLieuTrav");
        $this->assertEquals("btqLieuTrav", $obj->getBtqLieuTrav());
    }

    /**
     * Tests setBureauDistributeurLieuTrav()
     *
     * @return void
     */
    public function testSetBureauDistributeurLieuTrav(): void {

        $obj = new EmpDadsuGene();

        $obj->setBureauDistributeurLieuTrav("bureauDistributeurLieuTrav");
        $this->assertEquals("bureauDistributeurLieuTrav", $obj->getBureauDistributeurLieuTrav());
    }

    /**
     * Tests setCodeCaisseCp()
     *
     * @return void
     */
    public function testSetCodeCaisseCp(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeCaisseCp("codeCaisseCp");
        $this->assertEquals("codeCaisseCp", $obj->getCodeCaisseCp());
    }

    /**
     * Tests setCodeCaract()
     *
     * @return void
     */
    public function testSetCodeCaract(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeCaract("codeCaract");
        $this->assertEquals("codeCaract", $obj->getCodeCaract());
    }

    /**
     * Tests setCodeCategSalPourcentAbat()
     *
     * @return void
     */
    public function testSetCodeCategSalPourcentAbat(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeCategSalPourcentAbat("codeCategSalPourcentAbat");
        $this->assertEquals("codeCategSalPourcentAbat", $obj->getCodeCategSalPourcentAbat());
    }

    /**
     * Tests setCodeClassBtp()
     *
     * @return void
     */
    public function testSetCodeClassBtp(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeClassBtp("codeClassBtp");
        $this->assertEquals("codeClassBtp", $obj->getCodeClassBtp());
    }

    /**
     * Tests setCodeContratTrav()
     *
     * @return void
     */
    public function testSetCodeContratTrav(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeContratTrav("codeContratTrav");
        $this->assertEquals("codeContratTrav", $obj->getCodeContratTrav());
    }

    /**
     * Tests setCodeConventionCol()
     *
     * @return void
     */
    public function testSetCodeConventionCol(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeConventionCol("codeConventionCol");
        $this->assertEquals("codeConventionCol", $obj->getCodeConventionCol());
    }

    /**
     * Tests setCodeDistriEtranger()
     *
     * @return void
     */
    public function testSetCodeDistriEtranger(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeDistriEtranger("codeDistriEtranger");
        $this->assertEquals("codeDistriEtranger", $obj->getCodeDistriEtranger());
    }

    /**
     * Tests setCodeExoTrav()
     *
     * @return void
     */
    public function testSetCodeExoTrav(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeExoTrav("codeExoTrav");
        $this->assertEquals("codeExoTrav", $obj->getCodeExoTrav());
    }

    /**
     * Tests setCodeInseeLieuTrav()
     *
     * @return void
     */
    public function testSetCodeInseeLieuTrav(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeInseeLieuTrav("codeInseeLieuTrav");
        $this->assertEquals("codeInseeLieuTrav", $obj->getCodeInseeLieuTrav());
    }

    /**
     * Tests setCodeIntitContratTrav()
     *
     * @return void
     */
    public function testSetCodeIntitContratTrav(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeIntitContratTrav("codeIntitContratTrav");
        $this->assertEquals("codeIntitContratTrav", $obj->getCodeIntitContratTrav());
    }

    /**
     * Tests setCodeMetierBtp()
     *
     * @return void
     */
    public function testSetCodeMetierBtp(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeMetierBtp("codeMetierBtp");
        $this->assertEquals("codeMetierBtp", $obj->getCodeMetierBtp());
    }

    /**
     * Tests setCodeOfficielCommuneLieuTrav()
     *
     * @return void
     */
    public function testSetCodeOfficielCommuneLieuTrav(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeOfficielCommuneLieuTrav("codeOfficielCommuneLieuTrav");
        $this->assertEquals("codeOfficielCommuneLieuTrav", $obj->getCodeOfficielCommuneLieuTrav());
    }

    /**
     * Tests setCodePaysLieuTrav()
     *
     * @return void
     */
    public function testSetCodePaysLieuTrav(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodePaysLieuTrav("codePaysLieuTrav");
        $this->assertEquals("codePaysLieuTrav", $obj->getCodePaysLieuTrav());
    }

    /**
     * Tests setCodePostalLieuTrav()
     *
     * @return void
     */
    public function testSetCodePostalLieuTrav(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodePostalLieuTrav("codePostalLieuTrav");
        $this->assertEquals("codePostalLieuTrav", $obj->getCodePostalLieuTrav());
    }

    /**
     * Tests setCodeRegimeAt()
     *
     * @return void
     */
    public function testSetCodeRegimeAt(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeRegimeAt("codeRegimeAt");
        $this->assertEquals("codeRegimeAt", $obj->getCodeRegimeAt());
    }

    /**
     * Tests setCodeRegimeBaseObl()
     *
     * @return void
     */
    public function testSetCodeRegimeBaseObl(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeRegimeBaseObl("codeRegimeBaseObl");
        $this->assertEquals("codeRegimeBaseObl", $obj->getCodeRegimeBaseObl());
    }

    /**
     * Tests setCodeRegimeVieillesse()
     *
     * @return void
     */
    public function testSetCodeRegimeVieillesse(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeRegimeVieillesse("codeRegimeVieillesse");
        $this->assertEquals("codeRegimeVieillesse", $obj->getCodeRegimeVieillesse());
    }

    /**
     * Tests setCodeRetraiteComplementaire()
     *
     * @return void
     */
    public function testSetCodeRetraiteComplementaire(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeRetraiteComplementaire("codeRetraiteComplementaire");
        $this->assertEquals("codeRetraiteComplementaire", $obj->getCodeRetraiteComplementaire());
    }

    /**
     * Tests setCodeSituAdmin()
     *
     * @return void
     */
    public function testSetCodeSituAdmin(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeSituAdmin("codeSituAdmin");
        $this->assertEquals("codeSituAdmin", $obj->getCodeSituAdmin());
    }

    /**
     * Tests setCodeStatutCateg()
     *
     * @return void
     */
    public function testSetCodeStatutCateg(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeStatutCateg("codeStatutCateg");
        $this->assertEquals("codeStatutCateg", $obj->getCodeStatutCateg());
    }

    /**
     * Tests setCodeStatutCategRetraite()
     *
     * @return void
     */
    public function testSetCodeStatutCategRetraite(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeStatutCategRetraite("codeStatutCategRetraite");
        $this->assertEquals("codeStatutCategRetraite", $obj->getCodeStatutCategRetraite());
    }

    /**
     * Tests setCodeStatutPro()
     *
     * @return void
     */
    public function testSetCodeStatutPro(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeStatutPro("codeStatutPro");
        $this->assertEquals("codeStatutPro", $obj->getCodeStatutPro());
    }

    /**
     * Tests setCodeTypeExo1()
     *
     * @return void
     */
    public function testSetCodeTypeExo1(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeTypeExo1("codeTypeExo1");
        $this->assertEquals("codeTypeExo1", $obj->getCodeTypeExo1());
    }

    /**
     * Tests setCodeTypeExo2()
     *
     * @return void
     */
    public function testSetCodeTypeExo2(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeTypeExo2("codeTypeExo2");
        $this->assertEquals("codeTypeExo2", $obj->getCodeTypeExo2());
    }

    /**
     * Tests setCodeTypeExo3()
     *
     * @return void
     */
    public function testSetCodeTypeExo3(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeTypeExo3("codeTypeExo3");
        $this->assertEquals("codeTypeExo3", $obj->getCodeTypeExo3());
    }

    /**
     * Tests setCodeUniteTempsTravail()
     *
     * @return void
     */
    public function testSetCodeUniteTempsTravail(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeUniteTempsTravail("codeUniteTempsTravail");
        $this->assertEquals("codeUniteTempsTravail", $obj->getCodeUniteTempsTravail());
    }

    /**
     * Tests setCodeZoneGeo()
     *
     * @return void
     */
    public function testSetCodeZoneGeo(): void {

        $obj = new EmpDadsuGene();

        $obj->setCodeZoneGeo("codeZoneGeo");
        $this->assertEquals("codeZoneGeo", $obj->getCodeZoneGeo());
    }

    /**
     * Tests setComplementLieuTrav()
     *
     * @return void
     */
    public function testSetComplementLieuTrav(): void {

        $obj = new EmpDadsuGene();

        $obj->setComplementLieuTrav("complementLieuTrav");
        $this->assertEquals("complementLieuTrav", $obj->getComplementLieuTrav());
    }

    /**
     * Tests setDateRachat()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRachat(): void {

        // Set a Date/time mock.
        $dateRachat = new DateTime("2018-09-10");

        $obj = new EmpDadsuGene();

        $obj->setDateRachat($dateRachat);
        $this->assertSame($dateRachat, $obj->getDateRachat());
    }

    /**
     * Tests setDetacheExpatrie()
     *
     * @return void
     */
    public function testSetDetacheExpatrie(): void {

        $obj = new EmpDadsuGene();

        $obj->setDetacheExpatrie("detacheExpatrie");
        $this->assertEquals("detacheExpatrie", $obj->getDetacheExpatrie());
    }

    /**
     * Tests setEchelon()
     *
     * @return void
     */
    public function testSetEchelon(): void {

        $obj = new EmpDadsuGene();

        $obj->setEchelon("echelon");
        $this->assertEquals("echelon", $obj->getEchelon());
    }

    /**
     * Tests setEtabLieuTravail()
     *
     * @return void
     */
    public function testSetEtabLieuTravail(): void {

        $obj = new EmpDadsuGene();

        $obj->setEtabLieuTravail("etabLieuTravail");
        $this->assertEquals("etabLieuTravail", $obj->getEtabLieuTravail());
    }

    /**
     * Tests setIdLieuTravail()
     *
     * @return void
     */
    public function testSetIdLieuTravail(): void {

        $obj = new EmpDadsuGene();

        $obj->setIdLieuTravail("idLieuTravail");
        $this->assertEquals("idLieuTravail", $obj->getIdLieuTravail());
    }

    /**
     * Tests setIndice()
     *
     * @return void
     */
    public function testSetIndice(): void {

        $obj = new EmpDadsuGene();

        $obj->setIndice("indice");
        $this->assertEquals("indice", $obj->getIndice());
    }

    /**
     * Tests setNiveau()
     *
     * @return void
     */
    public function testSetNiveau(): void {

        $obj = new EmpDadsuGene();

        $obj->setNiveau("niveau");
        $this->assertEquals("niveau", $obj->getNiveau());
    }

    /**
     * Tests setNomVilleInseeLieuTrav()
     *
     * @return void
     */
    public function testSetNomVilleInseeLieuTrav(): void {

        $obj = new EmpDadsuGene();

        $obj->setNomVilleInseeLieuTrav("nomVilleInseeLieuTrav");
        $this->assertEquals("nomVilleInseeLieuTrav", $obj->getNomVilleInseeLieuTrav());
    }

    /**
     * Tests setNomVilleLieuTrav()
     *
     * @return void
     */
    public function testSetNomVilleLieuTrav(): void {

        $obj = new EmpDadsuGene();

        $obj->setNomVilleLieuTrav("nomVilleLieuTrav");
        $this->assertEquals("nomVilleLieuTrav", $obj->getNomVilleLieuTrav());
    }

    /**
     * Tests setNomVoieLieuTrav()
     *
     * @return void
     */
    public function testSetNomVoieLieuTrav(): void {

        $obj = new EmpDadsuGene();

        $obj->setNomVoieLieuTrav("nomVoieLieuTrav");
        $this->assertEquals("nomVoieLieuTrav", $obj->getNomVoieLieuTrav());
    }

    /**
     * Tests setNumVoieLieuTrav()
     *
     * @return void
     */
    public function testSetNumVoieLieuTrav(): void {

        $obj = new EmpDadsuGene();

        $obj->setNumVoieLieuTrav("numVoieLieuTrav");
        $this->assertEquals("numVoieLieuTrav", $obj->getNumVoieLieuTrav());
    }

    /**
     * Tests setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new EmpDadsuGene();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests setPosition()
     *
     * @return void
     */
    public function testSetPosition(): void {

        $obj = new EmpDadsuGene();

        $obj->setPosition("position");
        $this->assertEquals("position", $obj->getPosition());
    }

    /**
     * Tests setRaisonSocLieuTrav()
     *
     * @return void
     */
    public function testSetRaisonSocLieuTrav(): void {

        $obj = new EmpDadsuGene();

        $obj->setRaisonSocLieuTrav("raisonSocLieuTrav");
        $this->assertEquals("raisonSocLieuTrav", $obj->getRaisonSocLieuTrav());
    }

    /**
     * Tests setSiretLieuTrav()
     *
     * @return void
     */
    public function testSetSiretLieuTrav(): void {

        $obj = new EmpDadsuGene();

        $obj->setSiretLieuTrav("siretLieuTrav");
        $this->assertEquals("siretLieuTrav", $obj->getSiretLieuTrav());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
