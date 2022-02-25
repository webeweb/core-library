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
use WBW\Library\Quadratus\Model\QPaie\EmpDadsuParam;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Emp dadsu param test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class EmpDadsuParamTest extends AbstractTestCase {

    /**
     * Tests setActionsGratuitesNbre()
     *
     * @return void
     */
    public function testSetActionsGratuitesNbre(): void {

        $obj = new EmpDadsuParam();

        $obj->setActionsGratuitesNbre(10.092018);
        $this->assertEquals(10.092018, $obj->getActionsGratuitesNbre());
    }

    /**
     * Tests setActionsGratuitesValeurU()
     *
     * @return void
     */
    public function testSetActionsGratuitesValeurU(): void {

        $obj = new EmpDadsuParam();

        $obj->setActionsGratuitesValeurU(10.092018);
        $this->assertEquals(10.092018, $obj->getActionsGratuitesValeurU());
    }

    /**
     * Tests setAnciennete()
     *
     * @return void
     */
    public function testSetAnciennete(): void {

        $obj = new EmpDadsuParam();

        $obj->setAnciennete(10.092018);
        $this->assertEquals(10.092018, $obj->getAnciennete());
    }

    /**
     * Tests setAncienneteBtp()
     *
     * @return void
     */
    public function testSetAncienneteBtp(): void {

        $obj = new EmpDadsuParam();

        $obj->setAncienneteBtp(10.092018);
        $this->assertEquals(10.092018, $obj->getAncienneteBtp());
    }

    /**
     * Tests setAnneePrepa()
     *
     * @return void
     */
    public function testSetAnneePrepa(): void {

        $obj = new EmpDadsuParam();

        $obj->setAnneePrepa(10);
        $this->assertEquals(10, $obj->getAnneePrepa());
    }

    /**
     * Tests setAtBureau()
     *
     * @return void
     */
    public function testSetAtBureau(): void {

        $obj = new EmpDadsuParam();

        $obj->setAtBureau("atBureau");
        $this->assertEquals("atBureau", $obj->getAtBureau());
    }

    /**
     * Tests setAtEtab()
     *
     * @return void
     */
    public function testSetAtEtab(): void {

        $obj = new EmpDadsuParam();

        $obj->setAtEtab("atEtab");
        $this->assertEquals("atEtab", $obj->getAtEtab());
    }

    /**
     * Tests setAtRisque()
     *
     * @return void
     */
    public function testSetAtRisque(): void {

        $obj = new EmpDadsuParam();

        $obj->setAtRisque("atRisque");
        $this->assertEquals("atRisque", $obj->getAtRisque());
    }

    /**
     * Tests setAtTaux()
     *
     * @return void
     */
    public function testSetAtTaux(): void {

        $obj = new EmpDadsuParam();

        $obj->setAtTaux(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTaux());
    }

    /**
     * Tests setAutresSommesExoCode1()
     *
     * @return void
     */
    public function testSetAutresSommesExoCode1(): void {

        $obj = new EmpDadsuParam();

        $obj->setAutresSommesExoCode1("autresSommesExoCode1");
        $this->assertEquals("autresSommesExoCode1", $obj->getAutresSommesExoCode1());
    }

    /**
     * Tests setAutresSommesExoCode2()
     *
     * @return void
     */
    public function testSetAutresSommesExoCode2(): void {

        $obj = new EmpDadsuParam();

        $obj->setAutresSommesExoCode2("autresSommesExoCode2");
        $this->assertEquals("autresSommesExoCode2", $obj->getAutresSommesExoCode2());
    }

    /**
     * Tests setAutresSommesExoCode3()
     *
     * @return void
     */
    public function testSetAutresSommesExoCode3(): void {

        $obj = new EmpDadsuParam();

        $obj->setAutresSommesExoCode3("autresSommesExoCode3");
        $this->assertEquals("autresSommesExoCode3", $obj->getAutresSommesExoCode3());
    }

    /**
     * Tests setAutresSommesExoCode4()
     *
     * @return void
     */
    public function testSetAutresSommesExoCode4(): void {

        $obj = new EmpDadsuParam();

        $obj->setAutresSommesExoCode4("autresSommesExoCode4");
        $this->assertEquals("autresSommesExoCode4", $obj->getAutresSommesExoCode4());
    }

    /**
     * Tests setAutresSommesExoMnt1()
     *
     * @return void
     */
    public function testSetAutresSommesExoMnt1(): void {

        $obj = new EmpDadsuParam();

        $obj->setAutresSommesExoMnt1(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresSommesExoMnt1());
    }

    /**
     * Tests setAutresSommesExoMnt2()
     *
     * @return void
     */
    public function testSetAutresSommesExoMnt2(): void {

        $obj = new EmpDadsuParam();

        $obj->setAutresSommesExoMnt2(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresSommesExoMnt2());
    }

    /**
     * Tests setAutresSommesExoMnt3()
     *
     * @return void
     */
    public function testSetAutresSommesExoMnt3(): void {

        $obj = new EmpDadsuParam();

        $obj->setAutresSommesExoMnt3(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresSommesExoMnt3());
    }

    /**
     * Tests setAutresSommesExoMnt4()
     *
     * @return void
     */
    public function testSetAutresSommesExoMnt4(): void {

        $obj = new EmpDadsuParam();

        $obj->setAutresSommesExoMnt4(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresSommesExoMnt4());
    }

    /**
     * Tests setBaseExoBrut1()
     *
     * @return void
     */
    public function testSetBaseExoBrut1(): void {

        $obj = new EmpDadsuParam();

        $obj->setBaseExoBrut1(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoBrut1());
    }

    /**
     * Tests setBaseExoBrut2()
     *
     * @return void
     */
    public function testSetBaseExoBrut2(): void {

        $obj = new EmpDadsuParam();

        $obj->setBaseExoBrut2(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoBrut2());
    }

    /**
     * Tests setBaseExoBrut3()
     *
     * @return void
     */
    public function testSetBaseExoBrut3(): void {

        $obj = new EmpDadsuParam();

        $obj->setBaseExoBrut3(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoBrut3());
    }

    /**
     * Tests setBaseExoPlaf1()
     *
     * @return void
     */
    public function testSetBaseExoPlaf1(): void {

        $obj = new EmpDadsuParam();

        $obj->setBaseExoPlaf1(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoPlaf1());
    }

    /**
     * Tests setBaseExoPlaf2()
     *
     * @return void
     */
    public function testSetBaseExoPlaf2(): void {

        $obj = new EmpDadsuParam();

        $obj->setBaseExoPlaf2(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoPlaf2());
    }

    /**
     * Tests setBaseExoPlaf3()
     *
     * @return void
     */
    public function testSetBaseExoPlaf3(): void {

        $obj = new EmpDadsuParam();

        $obj->setBaseExoPlaf3(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoPlaf3());
    }

    /**
     * Tests setBtqLieuTrav()
     *
     * @return void
     */
    public function testSetBtqLieuTrav(): void {

        $obj = new EmpDadsuParam();

        $obj->setBtqLieuTrav("btqLieuTrav");
        $this->assertEquals("btqLieuTrav", $obj->getBtqLieuTrav());
    }

    /**
     * Tests setBureauDistributeurLieuTrav()
     *
     * @return void
     */
    public function testSetBureauDistributeurLieuTrav(): void {

        $obj = new EmpDadsuParam();

        $obj->setBureauDistributeurLieuTrav("bureauDistributeurLieuTrav");
        $this->assertEquals("bureauDistributeurLieuTrav", $obj->getBureauDistributeurLieuTrav());
    }

    /**
     * Tests setCategorieBtp()
     *
     * @return void
     */
    public function testSetCategorieBtp(): void {

        $obj = new EmpDadsuParam();

        $obj->setCategorieBtp("categorieBtp");
        $this->assertEquals("categorieBtp", $obj->getCategorieBtp());
    }

    /**
     * Tests setCodeCaract()
     *
     * @return void
     */
    public function testSetCodeCaract(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeCaract("codeCaract");
        $this->assertEquals("codeCaract", $obj->getCodeCaract());
    }

    /**
     * Tests setCodeClasseCnbf()
     *
     * @return void
     */
    public function testSetCodeClasseCnbf(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeClasseCnbf("codeClasseCnbf");
        $this->assertEquals("codeClasseCnbf", $obj->getCodeClasseCnbf());
    }

    /**
     * Tests setCodeContratTrav()
     *
     * @return void
     */
    public function testSetCodeContratTrav(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeContratTrav("codeContratTrav");
        $this->assertEquals("codeContratTrav", $obj->getCodeContratTrav());
    }

    /**
     * Tests setCodeConventionCol()
     *
     * @return void
     */
    public function testSetCodeConventionCol(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeConventionCol("codeConventionCol");
        $this->assertEquals("codeConventionCol", $obj->getCodeConventionCol());
    }

    /**
     * Tests setCodeDecalagePaie()
     *
     * @return void
     */
    public function testSetCodeDecalagePaie(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeDecalagePaie("codeDecalagePaie");
        $this->assertEquals("codeDecalagePaie", $obj->getCodeDecalagePaie());
    }

    /**
     * Tests setCodeDelegGestRisqueMaladie()
     *
     * @return void
     */
    public function testSetCodeDelegGestRisqueMaladie(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeDelegGestRisqueMaladie("codeDelegGestRisqueMaladie");
        $this->assertEquals("codeDelegGestRisqueMaladie", $obj->getCodeDelegGestRisqueMaladie());
    }

    /**
     * Tests setCodeDroitContrat()
     *
     * @return void
     */
    public function testSetCodeDroitContrat(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeDroitContrat("codeDroitContrat");
        $this->assertEquals("codeDroitContrat", $obj->getCodeDroitContrat());
    }

    /**
     * Tests setCodeEmplMult()
     *
     * @return void
     */
    public function testSetCodeEmplMult(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeEmplMult("codeEmplMult");
        $this->assertEquals("codeEmplMult", $obj->getCodeEmplMult());
    }

    /**
     * Tests setCodeEmploisMult()
     *
     * @return void
     */
    public function testSetCodeEmploisMult(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeEmploisMult("codeEmploisMult");
        $this->assertEquals("codeEmploisMult", $obj->getCodeEmploisMult());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setCodeEtatContratPrud()
     *
     * @return void
     */
    public function testSetCodeEtatContratPrud(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeEtatContratPrud("codeEtatContratPrud");
        $this->assertEquals("codeEtatContratPrud", $obj->getCodeEtatContratPrud());
    }

    /**
     * Tests setCodeExtensionAlsaceMoselle()
     *
     * @return void
     */
    public function testSetCodeExtensionAlsaceMoselle(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeExtensionAlsaceMoselle("codeExtensionAlsaceMoselle");
        $this->assertEquals("codeExtensionAlsaceMoselle", $obj->getCodeExtensionAlsaceMoselle());
    }

    /**
     * Tests setCodeInseeLieuTrav()
     *
     * @return void
     */
    public function testSetCodeInseeLieuTrav(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeInseeLieuTrav("codeInseeLieuTrav");
        $this->assertEquals("codeInseeLieuTrav", $obj->getCodeInseeLieuTrav());
    }

    /**
     * Tests setCodeMotifDebPer()
     *
     * @return void
     */
    public function testSetCodeMotifDebPer(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeMotifDebPer("codeMotifDebPer");
        $this->assertEquals("codeMotifDebPer", $obj->getCodeMotifDebPer());
    }

    /**
     * Tests setCodeMotifDebPer2()
     *
     * @return void
     */
    public function testSetCodeMotifDebPer2(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeMotifDebPer2("codeMotifDebPer2");
        $this->assertEquals("codeMotifDebPer2", $obj->getCodeMotifDebPer2());
    }

    /**
     * Tests setCodeMotifDebPer3()
     *
     * @return void
     */
    public function testSetCodeMotifDebPer3(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeMotifDebPer3("codeMotifDebPer3");
        $this->assertEquals("codeMotifDebPer3", $obj->getCodeMotifDebPer3());
    }

    /**
     * Tests setCodeMotifDebPer4()
     *
     * @return void
     */
    public function testSetCodeMotifDebPer4(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeMotifDebPer4("codeMotifDebPer4");
        $this->assertEquals("codeMotifDebPer4", $obj->getCodeMotifDebPer4());
    }

    /**
     * Tests setCodeMotifDebPer5()
     *
     * @return void
     */
    public function testSetCodeMotifDebPer5(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeMotifDebPer5("codeMotifDebPer5");
        $this->assertEquals("codeMotifDebPer5", $obj->getCodeMotifDebPer5());
    }

    /**
     * Tests setCodeMotifFinPer()
     *
     * @return void
     */
    public function testSetCodeMotifFinPer(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeMotifFinPer("codeMotifFinPer");
        $this->assertEquals("codeMotifFinPer", $obj->getCodeMotifFinPer());
    }

    /**
     * Tests setCodeMotifFinPer2()
     *
     * @return void
     */
    public function testSetCodeMotifFinPer2(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeMotifFinPer2("codeMotifFinPer2");
        $this->assertEquals("codeMotifFinPer2", $obj->getCodeMotifFinPer2());
    }

    /**
     * Tests setCodeMotifFinPer3()
     *
     * @return void
     */
    public function testSetCodeMotifFinPer3(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeMotifFinPer3("codeMotifFinPer3");
        $this->assertEquals("codeMotifFinPer3", $obj->getCodeMotifFinPer3());
    }

    /**
     * Tests setCodeMotifFinPer4()
     *
     * @return void
     */
    public function testSetCodeMotifFinPer4(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeMotifFinPer4("codeMotifFinPer4");
        $this->assertEquals("codeMotifFinPer4", $obj->getCodeMotifFinPer4());
    }

    /**
     * Tests setCodeMotifFinPer5()
     *
     * @return void
     */
    public function testSetCodeMotifFinPer5(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeMotifFinPer5("codeMotifFinPer5");
        $this->assertEquals("codeMotifFinPer5", $obj->getCodeMotifFinPer5());
    }

    /**
     * Tests setCodeNatureBaseCotisations()
     *
     * @return void
     */
    public function testSetCodeNatureBaseCotisations(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeNatureBaseCotisations("codeNatureBaseCotisations");
        $this->assertEquals("codeNatureBaseCotisations", $obj->getCodeNatureBaseCotisations());
    }

    /**
     * Tests setCodeOfficielCommuneLieuTrav()
     *
     * @return void
     */
    public function testSetCodeOfficielCommuneLieuTrav(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeOfficielCommuneLieuTrav("codeOfficielCommuneLieuTrav");
        $this->assertEquals("codeOfficielCommuneLieuTrav", $obj->getCodeOfficielCommuneLieuTrav());
    }

    /**
     * Tests setCodePostalLieuTrav()
     *
     * @return void
     */
    public function testSetCodePostalLieuTrav(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodePostalLieuTrav("codePostalLieuTrav");
        $this->assertEquals("codePostalLieuTrav", $obj->getCodePostalLieuTrav());
    }

    /**
     * Tests setCodeRegime1()
     *
     * @return void
     */
    public function testSetCodeRegime1(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeRegime1("codeRegime1");
        $this->assertEquals("codeRegime1", $obj->getCodeRegime1());
    }

    /**
     * Tests setCodeRegime2()
     *
     * @return void
     */
    public function testSetCodeRegime2(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeRegime2("codeRegime2");
        $this->assertEquals("codeRegime2", $obj->getCodeRegime2());
    }

    /**
     * Tests setCodeRegime3()
     *
     * @return void
     */
    public function testSetCodeRegime3(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeRegime3("codeRegime3");
        $this->assertEquals("codeRegime3", $obj->getCodeRegime3());
    }

    /**
     * Tests setCodeRegimeBaseObl()
     *
     * @return void
     */
    public function testSetCodeRegimeBaseObl(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeRegimeBaseObl("codeRegimeBaseObl");
        $this->assertEquals("codeRegimeBaseObl", $obj->getCodeRegimeBaseObl());
    }

    /**
     * Tests setCodeRegimeBaseOblAt()
     *
     * @return void
     */
    public function testSetCodeRegimeBaseOblAt(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeRegimeBaseOblAt("codeRegimeBaseOblAt");
        $this->assertEquals("codeRegimeBaseOblAt", $obj->getCodeRegimeBaseOblAt());
    }

    /**
     * Tests setCodeRegimeBaseOblMaladie()
     *
     * @return void
     */
    public function testSetCodeRegimeBaseOblMaladie(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeRegimeBaseOblMaladie("codeRegimeBaseOblMaladie");
        $this->assertEquals("codeRegimeBaseOblMaladie", $obj->getCodeRegimeBaseOblMaladie());
    }

    /**
     * Tests setCodeRegimeBaseOblVieilPat()
     *
     * @return void
     */
    public function testSetCodeRegimeBaseOblVieilPat(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeRegimeBaseOblVieilPat("codeRegimeBaseOblVieilPat");
        $this->assertEquals("codeRegimeBaseOblVieilPat", $obj->getCodeRegimeBaseOblVieilPat());
    }

    /**
     * Tests setCodeRegimeBaseOblVieilSal()
     *
     * @return void
     */
    public function testSetCodeRegimeBaseOblVieilSal(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeRegimeBaseOblVieilSal("codeRegimeBaseOblVieilSal");
        $this->assertEquals("codeRegimeBaseOblVieilSal", $obj->getCodeRegimeBaseOblVieilSal());
    }

    /**
     * Tests setCodeRegimeBtp()
     *
     * @return void
     */
    public function testSetCodeRegimeBtp(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeRegimeBtp("codeRegimeBtp");
        $this->assertEquals("codeRegimeBtp", $obj->getCodeRegimeBtp());
    }

    /**
     * Tests setCodeStatutCateg()
     *
     * @return void
     */
    public function testSetCodeStatutCateg(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeStatutCateg("codeStatutCateg");
        $this->assertEquals("codeStatutCateg", $obj->getCodeStatutCateg());
    }

    /**
     * Tests setCodeStatutCategConv()
     *
     * @return void
     */
    public function testSetCodeStatutCategConv(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeStatutCategConv("codeStatutCategConv");
        $this->assertEquals("codeStatutCategConv", $obj->getCodeStatutCategConv());
    }

    /**
     * Tests setCodeStatutCategIrc()
     *
     * @return void
     */
    public function testSetCodeStatutCategIrc(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeStatutCategIrc("codeStatutCategIrc");
        $this->assertEquals("codeStatutCategIrc", $obj->getCodeStatutCategIrc());
    }

    /**
     * Tests setCodeStatutPro()
     *
     * @return void
     */
    public function testSetCodeStatutPro(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeStatutPro("codeStatutPro");
        $this->assertEquals("codeStatutPro", $obj->getCodeStatutPro());
    }

    /**
     * Tests setCodeTypeExo1()
     *
     * @return void
     */
    public function testSetCodeTypeExo1(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeTypeExo1("codeTypeExo1");
        $this->assertEquals("codeTypeExo1", $obj->getCodeTypeExo1());
    }

    /**
     * Tests setCodeTypeExo2()
     *
     * @return void
     */
    public function testSetCodeTypeExo2(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeTypeExo2("codeTypeExo2");
        $this->assertEquals("codeTypeExo2", $obj->getCodeTypeExo2());
    }

    /**
     * Tests setCodeTypeExo3()
     *
     * @return void
     */
    public function testSetCodeTypeExo3(): void {

        $obj = new EmpDadsuParam();

        $obj->setCodeTypeExo3("codeTypeExo3");
        $this->assertEquals("codeTypeExo3", $obj->getCodeTypeExo3());
    }

    /**
     * Tests setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new EmpDadsuParam();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests setComplementLieuTrav()
     *
     * @return void
     */
    public function testSetComplementLieuTrav(): void {

        $obj = new EmpDadsuParam();

        $obj->setComplementLieuTrav("complementLieuTrav");
        $this->assertEquals("complementLieuTrav", $obj->getComplementLieuTrav());
    }

    /**
     * Tests setDadsuConjointSalarie()
     *
     * @return void
     */
    public function testSetDadsuConjointSalarie(): void {

        $obj = new EmpDadsuParam();

        $obj->setDadsuConjointSalarie("dadsuConjointSalarie");
        $this->assertEquals("dadsuConjointSalarie", $obj->getDadsuConjointSalarie());
    }

    /**
     * Tests setDadsuNbOptions()
     *
     * @return void
     */
    public function testSetDadsuNbOptions(): void {

        $obj = new EmpDadsuParam();

        $obj->setDadsuNbOptions(10.092018);
        $this->assertEquals(10.092018, $obj->getDadsuNbOptions());
    }

    /**
     * Tests setDadsuPrixSouscriptOpt()
     *
     * @return void
     */
    public function testSetDadsuPrixSouscriptOpt(): void {

        $obj = new EmpDadsuParam();

        $obj->setDadsuPrixSouscriptOpt(10.092018);
        $this->assertEquals(10.092018, $obj->getDadsuPrixSouscriptOpt());
    }

    /**
     * Tests setDadsuValeurAction()
     *
     * @return void
     */
    public function testSetDadsuValeurAction(): void {

        $obj = new EmpDadsuParam();

        $obj->setDadsuValeurAction(10.092018);
        $this->assertEquals(10.092018, $obj->getDadsuValeurAction());
    }

    /**
     * Tests setDateCtrlNorme()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCtrlNorme(): void {

        // Set a Date/time mock.
        $dateCtrlNorme = new DateTime("2018-09-10");

        $obj = new EmpDadsuParam();

        $obj->setDateCtrlNorme($dateCtrlNorme);
        $this->assertSame($dateCtrlNorme, $obj->getDateCtrlNorme());
    }

    /**
     * Tests setDateCtrlNormeBtp()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCtrlNormeBtp(): void {

        // Set a Date/time mock.
        $dateCtrlNormeBtp = new DateTime("2018-09-10");

        $obj = new EmpDadsuParam();

        $obj->setDateCtrlNormeBtp($dateCtrlNormeBtp);
        $this->assertSame($dateCtrlNormeBtp, $obj->getDateCtrlNormeBtp());
    }

    /**
     * Tests setDateCtrlNormePrev()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCtrlNormePrev(): void {

        // Set a Date/time mock.
        $dateCtrlNormePrev = new DateTime("2018-09-10");

        $obj = new EmpDadsuParam();

        $obj->setDateCtrlNormePrev($dateCtrlNormePrev);
        $this->assertSame($dateCtrlNormePrev, $obj->getDateCtrlNormePrev());
    }

    /**
     * Tests setDateCtrlNormeRet()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCtrlNormeRet(): void {

        // Set a Date/time mock.
        $dateCtrlNormeRet = new DateTime("2018-09-10");

        $obj = new EmpDadsuParam();

        $obj->setDateCtrlNormeRet($dateCtrlNormeRet);
        $this->assertSame($dateCtrlNormeRet, $obj->getDateCtrlNormeRet());
    }

    /**
     * Tests setDebutPeriodeDecl()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutPeriodeDecl(): void {

        // Set a Date/time mock.
        $debutPeriodeDecl = new DateTime("2018-09-10");

        $obj = new EmpDadsuParam();

        $obj->setDebutPeriodeDecl($debutPeriodeDecl);
        $this->assertSame($debutPeriodeDecl, $obj->getDebutPeriodeDecl());
    }

    /**
     * Tests setEchelon()
     *
     * @return void
     */
    public function testSetEchelon(): void {

        $obj = new EmpDadsuParam();

        $obj->setEchelon("echelon");
        $this->assertEquals("echelon", $obj->getEchelon());
    }

    /**
     * Tests setEmploi()
     *
     * @return void
     */
    public function testSetEmploi(): void {

        $obj = new EmpDadsuParam();

        $obj->setEmploi("emploi");
        $this->assertEquals("emploi", $obj->getEmploi());
    }

    /**
     * Tests setEpargneSalCode1()
     *
     * @return void
     */
    public function testSetEpargneSalCode1(): void {

        $obj = new EmpDadsuParam();

        $obj->setEpargneSalCode1("epargneSalCode1");
        $this->assertEquals("epargneSalCode1", $obj->getEpargneSalCode1());
    }

    /**
     * Tests setEpargneSalCode2()
     *
     * @return void
     */
    public function testSetEpargneSalCode2(): void {

        $obj = new EmpDadsuParam();

        $obj->setEpargneSalCode2("epargneSalCode2");
        $this->assertEquals("epargneSalCode2", $obj->getEpargneSalCode2());
    }

    /**
     * Tests setEpargneSalCode3()
     *
     * @return void
     */
    public function testSetEpargneSalCode3(): void {

        $obj = new EmpDadsuParam();

        $obj->setEpargneSalCode3("epargneSalCode3");
        $this->assertEquals("epargneSalCode3", $obj->getEpargneSalCode3());
    }

    /**
     * Tests setEpargneSalCode4()
     *
     * @return void
     */
    public function testSetEpargneSalCode4(): void {

        $obj = new EmpDadsuParam();

        $obj->setEpargneSalCode4("epargneSalCode4");
        $this->assertEquals("epargneSalCode4", $obj->getEpargneSalCode4());
    }

    /**
     * Tests setEpargneSalMnt1()
     *
     * @return void
     */
    public function testSetEpargneSalMnt1(): void {

        $obj = new EmpDadsuParam();

        $obj->setEpargneSalMnt1(10.092018);
        $this->assertEquals(10.092018, $obj->getEpargneSalMnt1());
    }

    /**
     * Tests setEpargneSalMnt2()
     *
     * @return void
     */
    public function testSetEpargneSalMnt2(): void {

        $obj = new EmpDadsuParam();

        $obj->setEpargneSalMnt2(10.092018);
        $this->assertEquals(10.092018, $obj->getEpargneSalMnt2());
    }

    /**
     * Tests setEpargneSalMnt3()
     *
     * @return void
     */
    public function testSetEpargneSalMnt3(): void {

        $obj = new EmpDadsuParam();

        $obj->setEpargneSalMnt3(10.092018);
        $this->assertEquals(10.092018, $obj->getEpargneSalMnt3());
    }

    /**
     * Tests setEpargneSalMnt4()
     *
     * @return void
     */
    public function testSetEpargneSalMnt4(): void {

        $obj = new EmpDadsuParam();

        $obj->setEpargneSalMnt4(10.092018);
        $this->assertEquals(10.092018, $obj->getEpargneSalMnt4());
    }

    /**
     * Tests setEtatCtrlNorme()
     *
     * @return void
     */
    public function testSetEtatCtrlNorme(): void {

        $obj = new EmpDadsuParam();

        $obj->setEtatCtrlNorme("etatCtrlNorme");
        $this->assertEquals("etatCtrlNorme", $obj->getEtatCtrlNorme());
    }

    /**
     * Tests setEtatCtrlNormeBtp()
     *
     * @return void
     */
    public function testSetEtatCtrlNormeBtp(): void {

        $obj = new EmpDadsuParam();

        $obj->setEtatCtrlNormeBtp("etatCtrlNormeBtp");
        $this->assertEquals("etatCtrlNormeBtp", $obj->getEtatCtrlNormeBtp());
    }

    /**
     * Tests setEtatCtrlNormePrev()
     *
     * @return void
     */
    public function testSetEtatCtrlNormePrev(): void {

        $obj = new EmpDadsuParam();

        $obj->setEtatCtrlNormePrev("etatCtrlNormePrev");
        $this->assertEquals("etatCtrlNormePrev", $obj->getEtatCtrlNormePrev());
    }

    /**
     * Tests setEtatCtrlNormeRet()
     *
     * @return void
     */
    public function testSetEtatCtrlNormeRet(): void {

        $obj = new EmpDadsuParam();

        $obj->setEtatCtrlNormeRet("etatCtrlNormeRet");
        $this->assertEquals("etatCtrlNormeRet", $obj->getEtatCtrlNormeRet());
    }

    /**
     * Tests setExoAgff()
     *
     * @return void
     */
    public function testSetExoAgff(): void {

        $obj = new EmpDadsuParam();

        $obj->setExoAgff(true);
        $this->assertEquals(true, $obj->getExoAgff());
    }

    /**
     * Tests setFinPeriodeDecl()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinPeriodeDecl(): void {

        // Set a Date/time mock.
        $finPeriodeDecl = new DateTime("2018-09-10");

        $obj = new EmpDadsuParam();

        $obj->setFinPeriodeDecl($finPeriodeDecl);
        $this->assertSame($finPeriodeDecl, $obj->getFinPeriodeDecl());
    }

    /**
     * Tests setGpecMntExoCotSecu()
     *
     * @return void
     */
    public function testSetGpecMntExoCotSecu(): void {

        $obj = new EmpDadsuParam();

        $obj->setGpecMntExoCotSecu(10.092018);
        $this->assertEquals(10.092018, $obj->getGpecMntExoCotSecu());
    }

    /**
     * Tests setGpecMntExoCsgcrds()
     *
     * @return void
     */
    public function testSetGpecMntExoCsgcrds(): void {

        $obj = new EmpDadsuParam();

        $obj->setGpecMntExoCsgcrds(10.092018);
        $this->assertEquals(10.092018, $obj->getGpecMntExoCsgcrds());
    }

    /**
     * Tests setIndemnCpPlaf()
     *
     * @return void
     */
    public function testSetIndemnCpPlaf(): void {

        $obj = new EmpDadsuParam();

        $obj->setIndemnCpPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnCpPlaf());
    }

    /**
     * Tests setIndemnRuptureCode1()
     *
     * @return void
     */
    public function testSetIndemnRuptureCode1(): void {

        $obj = new EmpDadsuParam();

        $obj->setIndemnRuptureCode1("indemnRuptureCode1");
        $this->assertEquals("indemnRuptureCode1", $obj->getIndemnRuptureCode1());
    }

    /**
     * Tests setIndemnRuptureCode2()
     *
     * @return void
     */
    public function testSetIndemnRuptureCode2(): void {

        $obj = new EmpDadsuParam();

        $obj->setIndemnRuptureCode2("indemnRuptureCode2");
        $this->assertEquals("indemnRuptureCode2", $obj->getIndemnRuptureCode2());
    }

    /**
     * Tests setIndemnRuptureMnt1()
     *
     * @return void
     */
    public function testSetIndemnRuptureMnt1(): void {

        $obj = new EmpDadsuParam();

        $obj->setIndemnRuptureMnt1(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnRuptureMnt1());
    }

    /**
     * Tests setIndemnRuptureMnt2()
     *
     * @return void
     */
    public function testSetIndemnRuptureMnt2(): void {

        $obj = new EmpDadsuParam();

        $obj->setIndemnRuptureMnt2(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnRuptureMnt2());
    }

    /**
     * Tests setIndice()
     *
     * @return void
     */
    public function testSetIndice(): void {

        $obj = new EmpDadsuParam();

        $obj->setIndice("indice");
        $this->assertEquals("indice", $obj->getIndice());
    }

    /**
     * Tests setNbPeriodiciteIrcantec()
     *
     * @return void
     */
    public function testSetNbPeriodiciteIrcantec(): void {

        $obj = new EmpDadsuParam();

        $obj->setNbPeriodiciteIrcantec(10.092018);
        $this->assertEquals(10.092018, $obj->getNbPeriodiciteIrcantec());
    }

    /**
     * Tests setNbhEtabBtp()
     *
     * @return void
     */
    public function testSetNbhEtabBtp(): void {

        $obj = new EmpDadsuParam();

        $obj->setNbhEtabBtp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhEtabBtp());
    }

    /**
     * Tests setNbhSalBtp()
     *
     * @return void
     */
    public function testSetNbhSalBtp(): void {

        $obj = new EmpDadsuParam();

        $obj->setNbhSalBtp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhSalBtp());
    }

    /**
     * Tests setNicEtabAffectation()
     *
     * @return void
     */
    public function testSetNicEtabAffectation(): void {

        $obj = new EmpDadsuParam();

        $obj->setNicEtabAffectation("nicEtabAffectation");
        $this->assertEquals("nicEtabAffectation", $obj->getNicEtabAffectation());
    }

    /**
     * Tests setNiveau()
     *
     * @return void
     */
    public function testSetNiveau(): void {

        $obj = new EmpDadsuParam();

        $obj->setNiveau("niveau");
        $this->assertEquals("niveau", $obj->getNiveau());
    }

    /**
     * Tests setNomVilleInseeLieuTrav()
     *
     * @return void
     */
    public function testSetNomVilleInseeLieuTrav(): void {

        $obj = new EmpDadsuParam();

        $obj->setNomVilleInseeLieuTrav("nomVilleInseeLieuTrav");
        $this->assertEquals("nomVilleInseeLieuTrav", $obj->getNomVilleInseeLieuTrav());
    }

    /**
     * Tests setNomVilleLieuTrav()
     *
     * @return void
     */
    public function testSetNomVilleLieuTrav(): void {

        $obj = new EmpDadsuParam();

        $obj->setNomVilleLieuTrav("nomVilleLieuTrav");
        $this->assertEquals("nomVilleLieuTrav", $obj->getNomVilleLieuTrav());
    }

    /**
     * Tests setNomVoieLieuTrav()
     *
     * @return void
     */
    public function testSetNomVoieLieuTrav(): void {

        $obj = new EmpDadsuParam();

        $obj->setNomVoieLieuTrav("nomVoieLieuTrav");
        $this->assertEquals("nomVoieLieuTrav", $obj->getNomVoieLieuTrav());
    }

    /**
     * Tests setNumVoieLieuTrav()
     *
     * @return void
     */
    public function testSetNumVoieLieuTrav(): void {

        $obj = new EmpDadsuParam();

        $obj->setNumVoieLieuTrav("numVoieLieuTrav");
        $this->assertEquals("numVoieLieuTrav", $obj->getNumVoieLieuTrav());
    }

    /**
     * Tests setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new EmpDadsuParam();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests setNumeroAdhesionBtp()
     *
     * @return void
     */
    public function testSetNumeroAdhesionBtp(): void {

        $obj = new EmpDadsuParam();

        $obj->setNumeroAdhesionBtp("numeroAdhesionBtp");
        $this->assertEquals("numeroAdhesionBtp", $obj->getNumeroAdhesionBtp());
    }

    /**
     * Tests setNumeroAffilFnc()
     *
     * @return void
     */
    public function testSetNumeroAffilFnc(): void {

        $obj = new EmpDadsuParam();

        $obj->setNumeroAffilFnc("numeroAffilFnc");
        $this->assertEquals("numeroAffilFnc", $obj->getNumeroAffilFnc());
    }

    /**
     * Tests setNumeroOrdre()
     *
     * @return void
     */
    public function testSetNumeroOrdre(): void {

        $obj = new EmpDadsuParam();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }

    /**
     * Tests setNumeroRattach1()
     *
     * @return void
     */
    public function testSetNumeroRattach1(): void {

        $obj = new EmpDadsuParam();

        $obj->setNumeroRattach1("numeroRattach1");
        $this->assertEquals("numeroRattach1", $obj->getNumeroRattach1());
    }

    /**
     * Tests setNumeroRattach2()
     *
     * @return void
     */
    public function testSetNumeroRattach2(): void {

        $obj = new EmpDadsuParam();

        $obj->setNumeroRattach2("numeroRattach2");
        $this->assertEquals("numeroRattach2", $obj->getNumeroRattach2());
    }

    /**
     * Tests setNumeroRattach3()
     *
     * @return void
     */
    public function testSetNumeroRattach3(): void {

        $obj = new EmpDadsuParam();

        $obj->setNumeroRattach3("numeroRattach3");
        $this->assertEquals("numeroRattach3", $obj->getNumeroRattach3());
    }

    /**
     * Tests setNumeroRattachBtp()
     *
     * @return void
     */
    public function testSetNumeroRattachBtp(): void {

        $obj = new EmpDadsuParam();

        $obj->setNumeroRattachBtp("numeroRattachBtp");
        $this->assertEquals("numeroRattachBtp", $obj->getNumeroRattachBtp());
    }

    /**
     * Tests setParticipPatronAvtgeCode1()
     *
     * @return void
     */
    public function testSetParticipPatronAvtgeCode1(): void {

        $obj = new EmpDadsuParam();

        $obj->setParticipPatronAvtgeCode1("participPatronAvtgeCode1");
        $this->assertEquals("participPatronAvtgeCode1", $obj->getParticipPatronAvtgeCode1());
    }

    /**
     * Tests setParticipPatronAvtgeCode2()
     *
     * @return void
     */
    public function testSetParticipPatronAvtgeCode2(): void {

        $obj = new EmpDadsuParam();

        $obj->setParticipPatronAvtgeCode2("participPatronAvtgeCode2");
        $this->assertEquals("participPatronAvtgeCode2", $obj->getParticipPatronAvtgeCode2());
    }

    /**
     * Tests setParticipPatronAvtgeMnt1()
     *
     * @return void
     */
    public function testSetParticipPatronAvtgeMnt1(): void {

        $obj = new EmpDadsuParam();

        $obj->setParticipPatronAvtgeMnt1(10.092018);
        $this->assertEquals(10.092018, $obj->getParticipPatronAvtgeMnt1());
    }

    /**
     * Tests setParticipPatronAvtgeMnt2()
     *
     * @return void
     */
    public function testSetParticipPatronAvtgeMnt2(): void {

        $obj = new EmpDadsuParam();

        $obj->setParticipPatronAvtgeMnt2(10.092018);
        $this->assertEquals(10.092018, $obj->getParticipPatronAvtgeMnt2());
    }

    /**
     * Tests setPeriodiciteIrcantec()
     *
     * @return void
     */
    public function testSetPeriodiciteIrcantec(): void {

        $obj = new EmpDadsuParam();

        $obj->setPeriodiciteIrcantec("periodiciteIrcantec");
        $this->assertEquals("periodiciteIrcantec", $obj->getPeriodiciteIrcantec());
    }

    /**
     * Tests setPosition()
     *
     * @return void
     */
    public function testSetPosition(): void {

        $obj = new EmpDadsuParam();

        $obj->setPosition("position");
        $this->assertEquals("position", $obj->getPosition());
    }

    /**
     * Tests setPourcentAct()
     *
     * @return void
     */
    public function testSetPourcentAct(): void {

        $obj = new EmpDadsuParam();

        $obj->setPourcentAct(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentAct());
    }

    /**
     * Tests setRemunMedecins()
     *
     * @return void
     */
    public function testSetRemunMedecins(): void {

        $obj = new EmpDadsuParam();

        $obj->setRemunMedecins(10.092018);
        $this->assertEquals(10.092018, $obj->getRemunMedecins());
    }

    /**
     * Tests setSiretLieuTrav()
     *
     * @return void
     */
    public function testSetSiretLieuTrav(): void {

        $obj = new EmpDadsuParam();

        $obj->setSiretLieuTrav("siretLieuTrav");
        $this->assertEquals("siretLieuTrav", $obj->getSiretLieuTrav());
    }

    /**
     * Tests setStatutCotisantBtp()
     *
     * @return void
     */
    public function testSetStatutCotisantBtp(): void {

        $obj = new EmpDadsuParam();

        $obj->setStatutCotisantBtp("statutCotisantBtp");
        $this->assertEquals("statutCotisantBtp", $obj->getStatutCotisantBtp());
    }

    /**
     * Tests setSupplFam()
     *
     * @return void
     */
    public function testSetSupplFam(): void {

        $obj = new EmpDadsuParam();

        $obj->setSupplFam(10.092018);
        $this->assertEquals(10.092018, $obj->getSupplFam());
    }

    /**
     * Tests setTds59()
     *
     * @return void
     */
    public function testSetTds59(): void {

        $obj = new EmpDadsuParam();

        $obj->setTds59("tds59");
        $this->assertEquals("tds59", $obj->getTds59());
    }

    /**
     * Tests setTypeAffilBtp()
     *
     * @return void
     */
    public function testSetTypeAffilBtp(): void {

        $obj = new EmpDadsuParam();

        $obj->setTypeAffilBtp("typeAffilBtp");
        $this->assertEquals("typeAffilBtp", $obj->getTypeAffilBtp());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EmpDadsuParam();

        $this->assertNull($obj->getActionsGratuitesNbre());
        $this->assertNull($obj->getActionsGratuitesValeurU());
        $this->assertNull($obj->getAnciennete());
        $this->assertNull($obj->getAncienneteBtp());
        $this->assertNull($obj->getAnneePrepa());
        $this->assertNull($obj->getAtBureau());
        $this->assertNull($obj->getAtEtab());
        $this->assertNull($obj->getAtRisque());
        $this->assertNull($obj->getAtTaux());
        $this->assertNull($obj->getAutresSommesExoCode1());
        $this->assertNull($obj->getAutresSommesExoCode2());
        $this->assertNull($obj->getAutresSommesExoCode3());
        $this->assertNull($obj->getAutresSommesExoCode4());
        $this->assertNull($obj->getAutresSommesExoMnt1());
        $this->assertNull($obj->getAutresSommesExoMnt2());
        $this->assertNull($obj->getAutresSommesExoMnt3());
        $this->assertNull($obj->getAutresSommesExoMnt4());
        $this->assertNull($obj->getBtqLieuTrav());
        $this->assertNull($obj->getBaseExoBrut1());
        $this->assertNull($obj->getBaseExoBrut2());
        $this->assertNull($obj->getBaseExoBrut3());
        $this->assertNull($obj->getBaseExoPlaf1());
        $this->assertNull($obj->getBaseExoPlaf2());
        $this->assertNull($obj->getBaseExoPlaf3());
        $this->assertNull($obj->getBureauDistributeurLieuTrav());
        $this->assertNull($obj->getCategorieBtp());
        $this->assertNull($obj->getCodeCaract());
        $this->assertNull($obj->getCodeClasseCnbf());
        $this->assertNull($obj->getCodeContratTrav());
        $this->assertNull($obj->getCodeConventionCol());
        $this->assertNull($obj->getCodeDecalagePaie());
        $this->assertNull($obj->getCodeDelegGestRisqueMaladie());
        $this->assertNull($obj->getCodeDroitContrat());
        $this->assertNull($obj->getCodeEmplMult());
        $this->assertNull($obj->getCodeEmploisMult());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeEtatContratPrud());
        $this->assertNull($obj->getCodeExtensionAlsaceMoselle());
        $this->assertNull($obj->getCodeInseeLieuTrav());
        $this->assertNull($obj->getCodeMotifDebPer());
        $this->assertNull($obj->getCodeMotifDebPer2());
        $this->assertNull($obj->getCodeMotifDebPer3());
        $this->assertNull($obj->getCodeMotifDebPer4());
        $this->assertNull($obj->getCodeMotifDebPer5());
        $this->assertNull($obj->getCodeMotifFinPer());
        $this->assertNull($obj->getCodeMotifFinPer2());
        $this->assertNull($obj->getCodeMotifFinPer3());
        $this->assertNull($obj->getCodeMotifFinPer4());
        $this->assertNull($obj->getCodeMotifFinPer5());
        $this->assertNull($obj->getCodeNatureBaseCotisations());
        $this->assertNull($obj->getCodeOfficielCommuneLieuTrav());
        $this->assertNull($obj->getCodePostalLieuTrav());
        $this->assertNull($obj->getCodeRegime1());
        $this->assertNull($obj->getCodeRegime2());
        $this->assertNull($obj->getCodeRegime3());
        $this->assertNull($obj->getCodeRegimeBtp());
        $this->assertNull($obj->getCodeRegimeBaseObl());
        $this->assertNull($obj->getCodeRegimeBaseOblAt());
        $this->assertNull($obj->getCodeRegimeBaseOblMaladie());
        $this->assertNull($obj->getCodeRegimeBaseOblVieilPat());
        $this->assertNull($obj->getCodeRegimeBaseOblVieilSal());
        $this->assertNull($obj->getCodeStatutCateg());
        $this->assertNull($obj->getCodeStatutCategConv());
        $this->assertNull($obj->getCodeStatutCategIrc());
        $this->assertNull($obj->getCodeStatutPro());
        $this->assertNull($obj->getCodeTypeExo1());
        $this->assertNull($obj->getCodeTypeExo2());
        $this->assertNull($obj->getCodeTypeExo3());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getComplementLieuTrav());
        $this->assertNull($obj->getDadsuConjointSalarie());
        $this->assertNull($obj->getDadsuNbOptions());
        $this->assertNull($obj->getDadsuPrixSouscriptOpt());
        $this->assertNull($obj->getDadsuValeurAction());
        $this->assertNull($obj->getDateCtrlNorme());
        $this->assertNull($obj->getDateCtrlNormeBtp());
        $this->assertNull($obj->getDateCtrlNormePrev());
        $this->assertNull($obj->getDateCtrlNormeRet());
        $this->assertNull($obj->getDebutPeriodeDecl());
        $this->assertNull($obj->getEchelon());
        $this->assertNull($obj->getEmploi());
        $this->assertNull($obj->getEpargneSalCode1());
        $this->assertNull($obj->getEpargneSalCode2());
        $this->assertNull($obj->getEpargneSalCode3());
        $this->assertNull($obj->getEpargneSalCode4());
        $this->assertNull($obj->getEpargneSalMnt1());
        $this->assertNull($obj->getEpargneSalMnt2());
        $this->assertNull($obj->getEpargneSalMnt3());
        $this->assertNull($obj->getEpargneSalMnt4());
        $this->assertNull($obj->getEtatCtrlNorme());
        $this->assertNull($obj->getEtatCtrlNormeBtp());
        $this->assertNull($obj->getEtatCtrlNormePrev());
        $this->assertNull($obj->getEtatCtrlNormeRet());
        $this->assertNull($obj->getExoAgff());
        $this->assertNull($obj->getFinPeriodeDecl());
        $this->assertNull($obj->getGpecMntExoCsgcrds());
        $this->assertNull($obj->getGpecMntExoCotSecu());
        $this->assertNull($obj->getIndemnCpPlaf());
        $this->assertNull($obj->getIndemnRuptureCode1());
        $this->assertNull($obj->getIndemnRuptureCode2());
        $this->assertNull($obj->getIndemnRuptureMnt1());
        $this->assertNull($obj->getIndemnRuptureMnt2());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getNbPeriodiciteIrcantec());
        $this->assertNull($obj->getNbhEtabBtp());
        $this->assertNull($obj->getNbhSalBtp());
        $this->assertNull($obj->getNicEtabAffectation());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getNomVilleInseeLieuTrav());
        $this->assertNull($obj->getNomVilleLieuTrav());
        $this->assertNull($obj->getNomVoieLieuTrav());
        $this->assertNull($obj->getNumVoieLieuTrav());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroAdhesionBtp());
        $this->assertNull($obj->getNumeroAffilFnc());
        $this->assertNull($obj->getNumeroOrdre());
        $this->assertNull($obj->getNumeroRattach1());
        $this->assertNull($obj->getNumeroRattach2());
        $this->assertNull($obj->getNumeroRattach3());
        $this->assertNull($obj->getNumeroRattachBtp());
        $this->assertNull($obj->getParticipPatronAvtgeCode1());
        $this->assertNull($obj->getParticipPatronAvtgeCode2());
        $this->assertNull($obj->getParticipPatronAvtgeMnt1());
        $this->assertNull($obj->getParticipPatronAvtgeMnt2());
        $this->assertNull($obj->getPeriodiciteIrcantec());
        $this->assertNull($obj->getPosition());
        $this->assertNull($obj->getPourcentAct());
        $this->assertNull($obj->getRemunMedecins());
        $this->assertNull($obj->getSiretLieuTrav());
        $this->assertNull($obj->getStatutCotisantBtp());
        $this->assertNull($obj->getSupplFam());
        $this->assertNull($obj->getTds59());
        $this->assertNull($obj->getTypeAffilBtp());
    }
}
