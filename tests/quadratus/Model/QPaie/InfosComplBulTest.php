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
use WBW\Library\Quadratus\Model\QPaie\InfosComplBul;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Infos compl bul test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class InfosComplBulTest extends AbstractTestCase {

    /**
     * Tests the setActiveSalMinConv() method.
     *
     * @return void
     */
    public function testSetActiveSalMinConv(): void {

        $obj = new InfosComplBul();

        $obj->setActiveSalMinConv(true);
        $this->assertEquals(true, $obj->getActiveSalMinConv());
    }

    /**
     * Tests the setActiveSmic() method.
     *
     * @return void
     */
    public function testSetActiveSmic(): void {

        $obj = new InfosComplBul();

        $obj->setActiveSmic(true);
        $this->assertEquals(true, $obj->getActiveSmic());
    }

    /**
     * Tests the setAenLogement() method.
     *
     * @return void
     */
    public function testSetAenLogement(): void {

        $obj = new InfosComplBul();

        $obj->setAenLogement(true);
        $this->assertEquals(true, $obj->getAenLogement());
    }

    /**
     * Tests the setAllegParticulierEmp() method.
     *
     * @return void
     */
    public function testSetAllegParticulierEmp(): void {

        $obj = new InfosComplBul();

        $obj->setAllegParticulierEmp("allegParticulierEmp");
        $this->assertEquals("allegParticulierEmp", $obj->getAllegParticulierEmp());
    }

    /**
     * Tests the setAnnexe7Mutation() method.
     *
     * @return void
     */
    public function testSetAnnexe7Mutation(): void {

        $obj = new InfosComplBul();

        $obj->setAnnexe7Mutation(true);
        $this->assertEquals(true, $obj->getAnnexe7Mutation());
    }

    /**
     * Tests the setArbitrageAuto() method.
     *
     * @return void
     */
    public function testSetArbitrageAuto(): void {

        $obj = new InfosComplBul();

        $obj->setArbitrageAuto("arbitrageAuto");
        $this->assertEquals("arbitrageAuto", $obj->getArbitrageAuto());
    }

    /**
     * Tests the setAssietteAf() method.
     *
     * @return void
     */
    public function testSetAssietteAf(): void {

        $obj = new InfosComplBul();

        $obj->setAssietteAf(10.092018);
        $this->assertEquals(10.092018, $obj->getAssietteAf());
    }

    /**
     * Tests the setAutreAllegEmp() method.
     *
     * @return void
     */
    public function testSetAutreAllegEmp(): void {

        $obj = new InfosComplBul();

        $obj->setAutreAllegEmp("autreAllegEmp");
        $this->assertEquals("autreAllegEmp", $obj->getAutreAllegEmp());
    }

    /**
     * Tests the setBrutAlSansHSup() method.
     *
     * @return void
     */
    public function testSetBrutAlSansHSup(): void {

        $obj = new InfosComplBul();

        $obj->setBrutAlSansHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutAlSansHSup());
    }

    /**
     * Tests the setBrutAlSansHSupMajoHe() method.
     *
     * @return void
     */
    public function testSetBrutAlSansHSupMajoHe(): void {

        $obj = new InfosComplBul();

        $obj->setBrutAlSansHSupMajoHe(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutAlSansHSupMajoHe());
    }

    /**
     * Tests the setBtq() method.
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new InfosComplBul();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests the setBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new InfosComplBul();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests the setCaisseCp() method.
     *
     * @return void
     */
    public function testSetCaisseCp(): void {

        $obj = new InfosComplBul();

        $obj->setCaisseCp(true);
        $this->assertEquals(true, $obj->getCaisseCp());
    }

    /**
     * Tests the setCategPopulation() method.
     *
     * @return void
     */
    public function testSetCategPopulation(): void {

        $obj = new InfosComplBul();

        $obj->setCategPopulation("categPopulation");
        $this->assertEquals("categPopulation", $obj->getCategPopulation());
    }

    /**
     * Tests the setCategSalarie() method.
     *
     * @return void
     */
    public function testSetCategSalarie(): void {

        $obj = new InfosComplBul();

        $obj->setCategSalarie("categSalarie");
        $this->assertEquals("categSalarie", $obj->getCategSalarie());
    }

    /**
     * Tests the setCddcdi() method.
     *
     * @return void
     */
    public function testSetCddcdi(): void {

        $obj = new InfosComplBul();

        $obj->setCddcdi(true);
        $this->assertEquals(true, $obj->getCddcdi());
    }

    /**
     * Tests the setCentreAnalytique() method.
     *
     * @return void
     */
    public function testSetCentreAnalytique(): void {

        $obj = new InfosComplBul();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Tests the setClassification() method.
     *
     * @return void
     */
    public function testSetClassification(): void {

        $obj = new InfosComplBul();

        $obj->setClassification("classification");
        $this->assertEquals("classification", $obj->getClassification());
    }

    /**
     * Tests the setCodeCaisseCp() method.
     *
     * @return void
     */
    public function testSetCodeCaisseCp(): void {

        $obj = new InfosComplBul();

        $obj->setCodeCaisseCp("codeCaisseCp");
        $this->assertEquals("codeCaisseCp", $obj->getCodeCaisseCp());
    }

    /**
     * Tests the setCodeCaract() method.
     *
     * @return void
     */
    public function testSetCodeCaract(): void {

        $obj = new InfosComplBul();

        $obj->setCodeCaract("codeCaract");
        $this->assertEquals("codeCaract", $obj->getCodeCaract());
    }

    /**
     * Tests the setCodeCategSalPourcentAbat() method.
     *
     * @return void
     */
    public function testSetCodeCategSalPourcentAbat(): void {

        $obj = new InfosComplBul();

        $obj->setCodeCategSalPourcentAbat("codeCategSalPourcentAbat");
        $this->assertEquals("codeCategSalPourcentAbat", $obj->getCodeCategSalPourcentAbat());
    }

    /**
     * Tests the setCodeClassBtp() method.
     *
     * @return void
     */
    public function testSetCodeClassBtp(): void {

        $obj = new InfosComplBul();

        $obj->setCodeClassBtp("codeClassBtp");
        $this->assertEquals("codeClassBtp", $obj->getCodeClassBtp());
    }

    /**
     * Tests the setCodeContratTrav() method.
     *
     * @return void
     */
    public function testSetCodeContratTrav(): void {

        $obj = new InfosComplBul();

        $obj->setCodeContratTrav("codeContratTrav");
        $this->assertEquals("codeContratTrav", $obj->getCodeContratTrav());
    }

    /**
     * Tests the setCodeConvention() method.
     *
     * @return void
     */
    public function testSetCodeConvention(): void {

        $obj = new InfosComplBul();

        $obj->setCodeConvention("codeConvention");
        $this->assertEquals("codeConvention", $obj->getCodeConvention());
    }

    /**
     * Tests the setCodeConventionCol() method.
     *
     * @return void
     */
    public function testSetCodeConventionCol(): void {

        $obj = new InfosComplBul();

        $obj->setCodeConventionCol("codeConventionCol");
        $this->assertEquals("codeConventionCol", $obj->getCodeConventionCol());
    }

    /**
     * Tests the setCodeEmpRemplace() method.
     *
     * @return void
     */
    public function testSetCodeEmpRemplace(): void {

        $obj = new InfosComplBul();

        $obj->setCodeEmpRemplace("codeEmpRemplace");
        $this->assertEquals("codeEmpRemplace", $obj->getCodeEmpRemplace());
    }

    /**
     * Tests the setCodeExoTrav() method.
     *
     * @return void
     */
    public function testSetCodeExoTrav(): void {

        $obj = new InfosComplBul();

        $obj->setCodeExoTrav("codeExoTrav");
        $this->assertEquals("codeExoTrav", $obj->getCodeExoTrav());
    }

    /**
     * Tests the setCodeIntitContratTrav() method.
     *
     * @return void
     */
    public function testSetCodeIntitContratTrav(): void {

        $obj = new InfosComplBul();

        $obj->setCodeIntitContratTrav("codeIntitContratTrav");
        $this->assertEquals("codeIntitContratTrav", $obj->getCodeIntitContratTrav());
    }

    /**
     * Tests the setCodeMetierBtp() method.
     *
     * @return void
     */
    public function testSetCodeMetierBtp(): void {

        $obj = new InfosComplBul();

        $obj->setCodeMetierBtp("codeMetierBtp");
        $this->assertEquals("codeMetierBtp", $obj->getCodeMetierBtp());
    }

    /**
     * Tests the setCodeOfficielCommune() method.
     *
     * @return void
     */
    public function testSetCodeOfficielCommune(): void {

        $obj = new InfosComplBul();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new InfosComplBul();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setCodeRegimeAt() method.
     *
     * @return void
     */
    public function testSetCodeRegimeAt(): void {

        $obj = new InfosComplBul();

        $obj->setCodeRegimeAt("codeRegimeAt");
        $this->assertEquals("codeRegimeAt", $obj->getCodeRegimeAt());
    }

    /**
     * Tests the setCodeRegimeBaseObl() method.
     *
     * @return void
     */
    public function testSetCodeRegimeBaseObl(): void {

        $obj = new InfosComplBul();

        $obj->setCodeRegimeBaseObl("codeRegimeBaseObl");
        $this->assertEquals("codeRegimeBaseObl", $obj->getCodeRegimeBaseObl());
    }

    /**
     * Tests the setCodeRegimeVieillesse() method.
     *
     * @return void
     */
    public function testSetCodeRegimeVieillesse(): void {

        $obj = new InfosComplBul();

        $obj->setCodeRegimeVieillesse("codeRegimeVieillesse");
        $this->assertEquals("codeRegimeVieillesse", $obj->getCodeRegimeVieillesse());
    }

    /**
     * Tests the setCodeRetraiteComplementaire() method.
     *
     * @return void
     */
    public function testSetCodeRetraiteComplementaire(): void {

        $obj = new InfosComplBul();

        $obj->setCodeRetraiteComplementaire("codeRetraiteComplementaire");
        $this->assertEquals("codeRetraiteComplementaire", $obj->getCodeRetraiteComplementaire());
    }

    /**
     * Tests the setCodeSituAdmin() method.
     *
     * @return void
     */
    public function testSetCodeSituAdmin(): void {

        $obj = new InfosComplBul();

        $obj->setCodeSituAdmin("codeSituAdmin");
        $this->assertEquals("codeSituAdmin", $obj->getCodeSituAdmin());
    }

    /**
     * Tests the setCodeStatutCateg() method.
     *
     * @return void
     */
    public function testSetCodeStatutCateg(): void {

        $obj = new InfosComplBul();

        $obj->setCodeStatutCateg("codeStatutCateg");
        $this->assertEquals("codeStatutCateg", $obj->getCodeStatutCateg());
    }

    /**
     * Tests the setCodeStatutCategRetraite() method.
     *
     * @return void
     */
    public function testSetCodeStatutCategRetraite(): void {

        $obj = new InfosComplBul();

        $obj->setCodeStatutCategRetraite("codeStatutCategRetraite");
        $this->assertEquals("codeStatutCategRetraite", $obj->getCodeStatutCategRetraite());
    }

    /**
     * Tests the setCodeStatutPro() method.
     *
     * @return void
     */
    public function testSetCodeStatutPro(): void {

        $obj = new InfosComplBul();

        $obj->setCodeStatutPro("codeStatutPro");
        $this->assertEquals("codeStatutPro", $obj->getCodeStatutPro());
    }

    /**
     * Tests the setCodeTuteur() method.
     *
     * @return void
     */
    public function testSetCodeTuteur(): void {

        $obj = new InfosComplBul();

        $obj->setCodeTuteur("codeTuteur");
        $this->assertEquals("codeTuteur", $obj->getCodeTuteur());
    }

    /**
     * Tests the setCodeUniteTempsTravail() method.
     *
     * @return void
     */
    public function testSetCodeUniteTempsTravail(): void {

        $obj = new InfosComplBul();

        $obj->setCodeUniteTempsTravail("codeUniteTempsTravail");
        $this->assertEquals("codeUniteTempsTravail", $obj->getCodeUniteTempsTravail());
    }

    /**
     * Tests the setCoeffConvention() method.
     *
     * @return void
     */
    public function testSetCoeffConvention(): void {

        $obj = new InfosComplBul();

        $obj->setCoeffConvention("coeffConvention");
        $this->assertEquals("coeffConvention", $obj->getCoeffConvention());
    }

    /**
     * Tests the setCoeffFillonMoins20() method.
     *
     * @return void
     */
    public function testSetCoeffFillonMoins20(): void {

        $obj = new InfosComplBul();

        $obj->setCoeffFillonMoins20(true);
        $this->assertEquals(true, $obj->getCoeffFillonMoins20());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new InfosComplBul();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests the setComplementPcs() method.
     *
     * @return void
     */
    public function testSetComplementPcs(): void {

        $obj = new InfosComplBul();

        $obj->setComplementPcs("complementPcs");
        $this->assertEquals("complementPcs", $obj->getComplementPcs());
    }

    /**
     * Tests the setContratCne() method.
     *
     * @return void
     */
    public function testSetContratCne(): void {

        $obj = new InfosComplBul();

        $obj->setContratCne(true);
        $this->assertEquals(true, $obj->getContratCne());
    }

    /**
     * Tests the setCumBasePrevoyanceComp() method.
     *
     * @return void
     */
    public function testSetCumBasePrevoyanceComp(): void {

        $obj = new InfosComplBul();

        $obj->setCumBasePrevoyanceComp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBasePrevoyanceComp());
    }

    /**
     * Tests the setCumBaseRetraiteObli() method.
     *
     * @return void
     */
    public function testSetCumBaseRetraiteObli(): void {

        $obj = new InfosComplBul();

        $obj->setCumBaseRetraiteObli(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseRetraiteObli());
    }

    /**
     * Tests the setCumBaseRetraiteSupp() method.
     *
     * @return void
     */
    public function testSetCumBaseRetraiteSupp(): void {

        $obj = new InfosComplBul();

        $obj->setCumBaseRetraiteSupp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseRetraiteSupp());
    }

    /**
     * Tests the setCumMtForfaitSocial20() method.
     *
     * @return void
     */
    public function testSetCumMtForfaitSocial20(): void {

        $obj = new InfosComplBul();

        $obj->setCumMtForfaitSocial20(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtForfaitSocial20());
    }

    /**
     * Tests the setCumMtForfaitSocial8() method.
     *
     * @return void
     */
    public function testSetCumMtForfaitSocial8(): void {

        $obj = new InfosComplBul();

        $obj->setCumMtForfaitSocial8(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtForfaitSocial8());
    }

    /**
     * Tests the setCumPpFiscPrev() method.
     *
     * @return void
     */
    public function testSetCumPpFiscPrev(): void {

        $obj = new InfosComplBul();

        $obj->setCumPpFiscPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPpFiscPrev());
    }

    /**
     * Tests the setCumPpFiscRet() method.
     *
     * @return void
     */
    public function testSetCumPpFiscRet(): void {

        $obj = new InfosComplBul();

        $obj->setCumPpFiscRet(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPpFiscRet());
    }

    /**
     * Tests the setCumPsFiscPrev() method.
     *
     * @return void
     */
    public function testSetCumPsFiscPrev(): void {

        $obj = new InfosComplBul();

        $obj->setCumPsFiscPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPsFiscPrev());
    }

    /**
     * Tests the setCumPsFiscRet() method.
     *
     * @return void
     */
    public function testSetCumPsFiscRet(): void {

        $obj = new InfosComplBul();

        $obj->setCumPsFiscRet(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPsFiscRet());
    }

    /**
     * Tests the setCumSmicM() method.
     *
     * @return void
     */
    public function testSetCumSmicM(): void {

        $obj = new InfosComplBul();

        $obj->setCumSmicM(10.092018);
        $this->assertEquals(10.092018, $obj->getCumSmicM());
    }

    /**
     * Tests the setCumTrD1Caisse1() method.
     *
     * @return void
     */
    public function testSetCumTrD1Caisse1(): void {

        $obj = new InfosComplBul();

        $obj->setCumTrD1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrD1Caisse1());
    }

    /**
     * Tests the setCumTrD1caisse2() method.
     *
     * @return void
     */
    public function testSetCumTrD1caisse2(): void {

        $obj = new InfosComplBul();

        $obj->setCumTrD1caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrD1caisse2());
    }

    /**
     * Tests the setCumTrD1caisse3() method.
     *
     * @return void
     */
    public function testSetCumTrD1caisse3(): void {

        $obj = new InfosComplBul();

        $obj->setCumTrD1caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrD1caisse3());
    }

    /**
     * Tests the setCumTrDCaisse1() method.
     *
     * @return void
     */
    public function testSetCumTrDCaisse1(): void {

        $obj = new InfosComplBul();

        $obj->setCumTrDCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrDCaisse1());
    }

    /**
     * Tests the setCumTrDcaisse2() method.
     *
     * @return void
     */
    public function testSetCumTrDcaisse2(): void {

        $obj = new InfosComplBul();

        $obj->setCumTrDcaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrDcaisse2());
    }

    /**
     * Tests the setCumTrDcaisse3() method.
     *
     * @return void
     */
    public function testSetCumTrDcaisse3(): void {

        $obj = new InfosComplBul();

        $obj->setCumTrDcaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrDcaisse3());
    }

    /**
     * Tests the setCumTrancheD() method.
     *
     * @return void
     */
    public function testSetCumTrancheD(): void {

        $obj = new InfosComplBul();

        $obj->setCumTrancheD(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheD());
    }

    /**
     * Tests the setCumTrancheD1() method.
     *
     * @return void
     */
    public function testSetCumTrancheD1(): void {

        $obj = new InfosComplBul();

        $obj->setCumTrancheD1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheD1());
    }

    /**
     * Tests the setDateAncienBranche() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAncienBranche(): void {

        // Set a Date/time mock.
        $dateAncienBranche = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateAncienBranche($dateAncienBranche);
        $this->assertSame($dateAncienBranche, $obj->getDateAncienBranche());
    }

    /**
     * Tests the setDateAncienCollege() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAncienCollege(): void {

        // Set a Date/time mock.
        $dateAncienCollege = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateAncienCollege($dateAncienCollege);
        $this->assertSame($dateAncienCollege, $obj->getDateAncienCollege());
    }

    /**
     * Tests the setDateAncienPoste() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAncienPoste(): void {

        // Set a Date/time mock.
        $dateAncienPoste = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateAncienPoste($dateAncienPoste);
        $this->assertSame($dateAncienPoste, $obj->getDateAncienPoste());
    }

    /**
     * Tests the setDateDebutChomCdd() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutChomCdd(): void {

        // Set a Date/time mock.
        $dateDebutChomCdd = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateDebutChomCdd($dateDebutChomCdd);
        $this->assertSame($dateDebutChomCdd, $obj->getDateDebutChomCdd());
    }

    /**
     * Tests the setDateDebutContrat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutContrat(): void {

        // Set a Date/time mock.
        $dateDebutContrat = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateDebutContrat($dateDebutContrat);
        $this->assertSame($dateDebutContrat, $obj->getDateDebutContrat());
    }

    /**
     * Tests the setDateEnvoiMail() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEnvoiMail(): void {

        // Set a Date/time mock.
        $dateEnvoiMail = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateEnvoiMail($dateEnvoiMail);
        $this->assertSame($dateEnvoiMail, $obj->getDateEnvoiMail());
    }

    /**
     * Tests the setDateFinChomCdd() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinChomCdd(): void {

        // Set a Date/time mock.
        $dateFinChomCdd = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateFinChomCdd($dateFinChomCdd);
        $this->assertSame($dateFinChomCdd, $obj->getDateFinChomCdd());
    }

    /**
     * Tests the setDateFinContrat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinContrat(): void {

        // Set a Date/time mock.
        $dateFinContrat = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateFinContrat($dateFinContrat);
        $this->assertSame($dateFinContrat, $obj->getDateFinContrat());
    }

    /**
     * Tests the setDateFinPrev() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinPrev(): void {

        // Set a Date/time mock.
        $dateFinPrev = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateFinPrev($dateFinPrev);
        $this->assertSame($dateFinPrev, $obj->getDateFinPrev());
    }

    /**
     * Tests the setDateRachat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRachat(): void {

        // Set a Date/time mock.
        $dateRachat = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateRachat($dateRachat);
        $this->assertSame($dateRachat, $obj->getDateRachat());
    }

    /**
     * Tests the setDateRenouvCdd() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRenouvCdd(): void {

        // Set a Date/time mock.
        $dateRenouvCdd = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateRenouvCdd($dateRenouvCdd);
        $this->assertSame($dateRenouvCdd, $obj->getDateRenouvCdd());
    }

    /**
     * Tests the setDateRenouvCdd2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRenouvCdd2(): void {

        // Set a Date/time mock.
        $dateRenouvCdd2 = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateRenouvCdd2($dateRenouvCdd2);
        $this->assertSame($dateRenouvCdd2, $obj->getDateRenouvCdd2());
    }

    /**
     * Tests the setDetacheExpatrie() method.
     *
     * @return void
     */
    public function testSetDetacheExpatrie(): void {

        $obj = new InfosComplBul();

        $obj->setDetacheExpatrie("detacheExpatrie");
        $this->assertEquals("detacheExpatrie", $obj->getDetacheExpatrie());
    }

    /**
     * Tests the setEchelon() method.
     *
     * @return void
     */
    public function testSetEchelon(): void {

        $obj = new InfosComplBul();

        $obj->setEchelon("echelon");
        $this->assertEquals("echelon", $obj->getEchelon());
    }

    /**
     * Tests the setEchelonConventionCol() method.
     *
     * @return void
     */
    public function testSetEchelonConventionCol(): void {

        $obj = new InfosComplBul();

        $obj->setEchelonConventionCol("echelonConventionCol");
        $this->assertEquals("echelonConventionCol", $obj->getEchelonConventionCol());
    }

    /**
     * Tests the setEmail() method.
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new InfosComplBul();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Tests the setEmploi() method.
     *
     * @return void
     */
    public function testSetEmploi(): void {

        $obj = new InfosComplBul();

        $obj->setEmploi("emploi");
        $this->assertEquals("emploi", $obj->getEmploi());
    }

    /**
     * Tests the setEtabLieuTravail() method.
     *
     * @return void
     */
    public function testSetEtabLieuTravail(): void {

        $obj = new InfosComplBul();

        $obj->setEtabLieuTravail("etabLieuTravail");
        $this->assertEquals("etabLieuTravail", $obj->getEtabLieuTravail());
    }

    /**
     * Tests the setExclureChomCdd() method.
     *
     * @return void
     */
    public function testSetExclureChomCdd(): void {

        $obj = new InfosComplBul();

        $obj->setExclureChomCdd(true);
        $this->assertEquals(true, $obj->getExclureChomCdd());
    }

    /**
     * Tests the setExclureCice() method.
     *
     * @return void
     */
    public function testSetExclureCice(): void {

        $obj = new InfosComplBul();

        $obj->setExclureCice(true);
        $this->assertEquals(true, $obj->getExclureCice());
    }

    /**
     * Tests the setExclureCospar() method.
     *
     * @return void
     */
    public function testSetExclureCospar(): void {

        $obj = new InfosComplBul();

        $obj->setExclureCospar(true);
        $this->assertEquals(true, $obj->getExclureCospar());
    }

    /**
     * Tests the setExclureDsn() method.
     *
     * @return void
     */
    public function testSetExclureDsn(): void {

        $obj = new InfosComplBul();

        $obj->setExclureDsn(true);
        $this->assertEquals(true, $obj->getExclureDsn());
    }

    /**
     * Tests the setExclureLoiTepa() method.
     *
     * @return void
     */
    public function testSetExclureLoiTepa(): void {

        $obj = new InfosComplBul();

        $obj->setExclureLoiTepa(true);
        $this->assertEquals(true, $obj->getExclureLoiTepa());
    }

    /**
     * Tests the setExclureLoiTepaPartP() method.
     *
     * @return void
     */
    public function testSetExclureLoiTepaPartP(): void {

        $obj = new InfosComplBul();

        $obj->setExclureLoiTepaPartP(true);
        $this->assertEquals(true, $obj->getExclureLoiTepaPartP());
    }

    /**
     * Tests the setExclureLoiTepaPartS() method.
     *
     * @return void
     */
    public function testSetExclureLoiTepaPartS(): void {

        $obj = new InfosComplBul();

        $obj->setExclureLoiTepaPartS(true);
        $this->assertEquals(true, $obj->getExclureLoiTepaPartS());
    }

    /**
     * Tests the setExclureQgc() method.
     *
     * @return void
     */
    public function testSetExclureQgc(): void {

        $obj = new InfosComplBul();

        $obj->setExclureQgc(true);
        $this->assertEquals(true, $obj->getExclureQgc());
    }

    /**
     * Tests the setExoAccre17() method.
     *
     * @return void
     */
    public function testSetExoAccre17(): void {

        $obj = new InfosComplBul();

        $obj->setExoAccre17(true);
        $this->assertEquals(true, $obj->getExoAccre17());
    }

    /**
     * Tests the setExoOccasionnelMsa() method.
     *
     * @return void
     */
    public function testSetExoOccasionnelMsa(): void {

        $obj = new InfosComplBul();

        $obj->setExoOccasionnelMsa(true);
        $this->assertEquals(true, $obj->getExoOccasionnelMsa());
    }

    /**
     * Tests the setExoProfessionnalisation() method.
     *
     * @return void
     */
    public function testSetExoProfessionnalisation(): void {

        $obj = new InfosComplBul();

        $obj->setExoProfessionnalisation(true);
        $this->assertEquals(true, $obj->getExoProfessionnalisation());
    }

    /**
     * Tests the setExoSpecif() method.
     *
     * @return void
     */
    public function testSetExoSpecif(): void {

        $obj = new InfosComplBul();

        $obj->setExoSpecif(true);
        $this->assertEquals(true, $obj->getExoSpecif());
    }

    /**
     * Tests the setForfaitHeure() method.
     *
     * @return void
     */
    public function testSetForfaitHeure(): void {

        $obj = new InfosComplBul();

        $obj->setForfaitHeure(true);
        $this->assertEquals(true, $obj->getForfaitHeure());
    }

    /**
     * Tests the setFractionEtab() method.
     *
     * @return void
     */
    public function testSetFractionEtab(): void {

        $obj = new InfosComplBul();

        $obj->setFractionEtab("fractionEtab");
        $this->assertEquals("fractionEtab", $obj->getFractionEtab());
    }

    /**
     * Tests the setGestionCp() method.
     *
     * @return void
     */
    public function testSetGestionCp(): void {

        $obj = new InfosComplBul();

        $obj->setGestionCp(true);
        $this->assertEquals(true, $obj->getGestionCp());
    }

    /**
     * Tests the setGestionHstepa() method.
     *
     * @return void
     */
    public function testSetGestionHstepa(): void {

        $obj = new InfosComplBul();

        $obj->setGestionHstepa("gestionHstepa");
        $this->assertEquals("gestionHstepa", $obj->getGestionHstepa());
    }

    /**
     * Tests the setGestionMailBulletin() method.
     *
     * @return void
     */
    public function testSetGestionMailBulletin(): void {

        $obj = new InfosComplBul();

        $obj->setGestionMailBulletin(true);
        $this->assertEquals(true, $obj->getGestionMailBulletin());
    }

    /**
     * Tests the setGestionRtt() method.
     *
     * @return void
     */
    public function testSetGestionRtt(): void {

        $obj = new InfosComplBul();

        $obj->setGestionRtt(true);
        $this->assertEquals(true, $obj->getGestionRtt());
    }

    /**
     * Tests the setGrilleAnc1() method.
     *
     * @return void
     */
    public function testSetGrilleAnc1(): void {

        $obj = new InfosComplBul();

        $obj->setGrilleAnc1("grilleAnc1");
        $this->assertEquals("grilleAnc1", $obj->getGrilleAnc1());
    }

    /**
     * Tests the setGrilleAnc2() method.
     *
     * @return void
     */
    public function testSetGrilleAnc2(): void {

        $obj = new InfosComplBul();

        $obj->setGrilleAnc2("grilleAnc2");
        $this->assertEquals("grilleAnc2", $obj->getGrilleAnc2());
    }

    /**
     * Tests the setGrilleAnc3() method.
     *
     * @return void
     */
    public function testSetGrilleAnc3(): void {

        $obj = new InfosComplBul();

        $obj->setGrilleAnc3("grilleAnc3");
        $this->assertEquals("grilleAnc3", $obj->getGrilleAnc3());
    }

    /**
     * Tests the setIdLieuTravail() method.
     *
     * @return void
     */
    public function testSetIdLieuTravail(): void {

        $obj = new InfosComplBul();

        $obj->setIdLieuTravail("idLieuTravail");
        $this->assertEquals("idLieuTravail", $obj->getIdLieuTravail());
    }

    /**
     * Tests the setIndemCpMsa() method.
     *
     * @return void
     */
    public function testSetIndemCpMsa(): void {

        $obj = new InfosComplBul();

        $obj->setIndemCpMsa(true);
        $this->assertEquals(true, $obj->getIndemCpMsa());
    }

    /**
     * Tests the setIndice() method.
     *
     * @return void
     */
    public function testSetIndice(): void {

        $obj = new InfosComplBul();

        $obj->setIndice("indice");
        $this->assertEquals("indice", $obj->getIndice());
    }

    /**
     * Tests the setIndiceCateg() method.
     *
     * @return void
     */
    public function testSetIndiceCateg(): void {

        $obj = new InfosComplBul();

        $obj->setIndiceCateg(10);
        $this->assertEquals(10, $obj->getIndiceCateg());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new InfosComplBul();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setInterimIndemCpFillon() method.
     *
     * @return void
     */
    public function testSetInterimIndemCpFillon(): void {

        $obj = new InfosComplBul();

        $obj->setInterimIndemCpFillon(true);
        $this->assertEquals(true, $obj->getInterimIndemCpFillon());
    }

    /**
     * Tests the setLibelleReintegration() method.
     *
     * @return void
     */
    public function testSetLibelleReintegration(): void {

        $obj = new InfosComplBul();

        $obj->setLibelleReintegration("libelleReintegration");
        $this->assertEquals("libelleReintegration", $obj->getLibelleReintegration());
    }

    /**
     * Tests the setLienReintegration() method.
     *
     * @return void
     */
    public function testSetLienReintegration(): void {

        $obj = new InfosComplBul();

        $obj->setLienReintegration("lienReintegration");
        $this->assertEquals("lienReintegration", $obj->getLienReintegration());
    }

    /**
     * Tests the setMaintienIntervientCp() method.
     *
     * @return void
     */
    public function testSetMaintienIntervientCp(): void {

        $obj = new InfosComplBul();

        $obj->setMaintienIntervientCp(true);
        $this->assertEquals(true, $obj->getMaintienIntervientCp());
    }

    /**
     * Tests the setMaintienSalaire() method.
     *
     * @return void
     */
    public function testSetMaintienSalaire(): void {

        $obj = new InfosComplBul();

        $obj->setMaintienSalaire(true);
        $this->assertEquals(true, $obj->getMaintienSalaire());
    }

    /**
     * Tests the setMontantAvantage() method.
     *
     * @return void
     */
    public function testSetMontantAvantage(): void {

        $obj = new InfosComplBul();

        $obj->setMontantAvantage(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAvantage());
    }

    /**
     * Tests the setMotifCdd() method.
     *
     * @return void
     */
    public function testSetMotifCdd(): void {

        $obj = new InfosComplBul();

        $obj->setMotifCdd("motifCdd");
        $this->assertEquals("motifCdd", $obj->getMotifCdd());
    }

    /**
     * Tests the setMotifExclusionDsn() method.
     *
     * @return void
     */
    public function testSetMotifExclusionDsn(): void {

        $obj = new InfosComplBul();

        $obj->setMotifExclusionDsn("motifExclusionDsn");
        $this->assertEquals("motifExclusionDsn", $obj->getMotifExclusionDsn());
    }

    /**
     * Tests the setMtAbsActPart() method.
     *
     * @return void
     */
    public function testSetMtAbsActPart(): void {

        $obj = new InfosComplBul();

        $obj->setMtAbsActPart(10.092018);
        $this->assertEquals(10.092018, $obj->getMtAbsActPart());
    }

    /**
     * Tests the setMtCotisationPrev() method.
     *
     * @return void
     */
    public function testSetMtCotisationPrev(): void {

        $obj = new InfosComplBul();

        $obj->setMtCotisationPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCotisationPrev());
    }

    /**
     * Tests the setMtCotisationRetraite() method.
     *
     * @return void
     */
    public function testSetMtCotisationRetraite(): void {

        $obj = new InfosComplBul();

        $obj->setMtCotisationRetraite(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCotisationRetraite());
    }

    /**
     * Tests the setMtCrds100() method.
     *
     * @return void
     */
    public function testSetMtCrds100(): void {

        $obj = new InfosComplBul();

        $obj->setMtCrds100(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCrds100());
    }

    /**
     * Tests the setMtCsg100() method.
     *
     * @return void
     */
    public function testSetMtCsg100(): void {

        $obj = new InfosComplBul();

        $obj->setMtCsg100(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCsg100());
    }

    /**
     * Tests the setMtFiscFraisSante() method.
     *
     * @return void
     */
    public function testSetMtFiscFraisSante(): void {

        $obj = new InfosComplBul();

        $obj->setMtFiscFraisSante(10.092018);
        $this->assertEquals(10.092018, $obj->getMtFiscFraisSante());
    }

    /**
     * Tests the setMtFiscPrev() method.
     *
     * @return void
     */
    public function testSetMtFiscPrev(): void {

        $obj = new InfosComplBul();

        $obj->setMtFiscPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getMtFiscPrev());
    }

    /**
     * Tests the setMtFiscRetraite() method.
     *
     * @return void
     */
    public function testSetMtFiscRetraite(): void {

        $obj = new InfosComplBul();

        $obj->setMtFiscRetraite(10.092018);
        $this->assertEquals(10.092018, $obj->getMtFiscRetraite());
    }

    /**
     * Tests the setMtForfaitSocial20() method.
     *
     * @return void
     */
    public function testSetMtForfaitSocial20(): void {

        $obj = new InfosComplBul();

        $obj->setMtForfaitSocial20(10.092018);
        $this->assertEquals(10.092018, $obj->getMtForfaitSocial20());
    }

    /**
     * Tests the setMtForfaitSocial8() method.
     *
     * @return void
     */
    public function testSetMtForfaitSocial8(): void {

        $obj = new InfosComplBul();

        $obj->setMtForfaitSocial8(10.092018);
        $this->assertEquals(10.092018, $obj->getMtForfaitSocial8());
    }

    /**
     * Tests the setMtIap() method.
     *
     * @return void
     */
    public function testSetMtIap(): void {

        $obj = new InfosComplBul();

        $obj->setMtIap(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIap());
    }

    /**
     * Tests the setMtJourneeCpn() method.
     *
     * @return void
     */
    public function testSetMtJourneeCpn(): void {

        $obj = new InfosComplBul();

        $obj->setMtJourneeCpn(10.092018);
        $this->assertEquals(10.092018, $obj->getMtJourneeCpn());
    }

    /**
     * Tests the setMtJourneeCpn1() method.
     *
     * @return void
     */
    public function testSetMtJourneeCpn1(): void {

        $obj = new InfosComplBul();

        $obj->setMtJourneeCpn1(10.092018);
        $this->assertEquals(10.092018, $obj->getMtJourneeCpn1());
    }

    /**
     * Tests the setMultiEmployeur() method.
     *
     * @return void
     */
    public function testSetMultiEmployeur(): void {

        $obj = new InfosComplBul();

        $obj->setMultiEmployeur(true);
        $this->assertEquals(true, $obj->getMultiEmployeur());
    }

    /**
     * Tests the setNatureAnalytique() method.
     *
     * @return void
     */
    public function testSetNatureAnalytique(): void {

        $obj = new InfosComplBul();

        $obj->setNatureAnalytique("natureAnalytique");
        $this->assertEquals("natureAnalytique", $obj->getNatureAnalytique());
    }

    /**
     * Tests the setNb30RenouvCdd() method.
     *
     * @return void
     */
    public function testSetNb30RenouvCdd(): void {

        $obj = new InfosComplBul();

        $obj->setNb30RenouvCdd(10);
        $this->assertEquals(10, $obj->getNb30RenouvCdd());
    }

    /**
     * Tests the setNbHActPart() method.
     *
     * @return void
     */
    public function testSetNbHActPart(): void {

        $obj = new InfosComplBul();

        $obj->setNbHActPart(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHActPart());
    }

    /**
     * Tests the setNbHActPartIndem() method.
     *
     * @return void
     */
    public function testSetNbHActPartIndem(): void {

        $obj = new InfosComplBul();

        $obj->setNbHActPartIndem(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHActPartIndem());
    }

    /**
     * Tests the setNbHBonifie() method.
     *
     * @return void
     */
    public function testSetNbHBonifie(): void {

        $obj = new InfosComplBul();

        $obj->setNbHBonifie(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHBonifie());
    }

    /**
     * Tests the setNbHContingent() method.
     *
     * @return void
     */
    public function testSetNbHContingent(): void {

        $obj = new InfosComplBul();

        $obj->setNbHContingent(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHContingent());
    }

    /**
     * Tests the setNbHContract() method.
     *
     * @return void
     */
    public function testSetNbHContract(): void {

        $obj = new InfosComplBul();

        $obj->setNbHContract(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHContract());
    }

    /**
     * Tests the setNbHeureMois() method.
     *
     * @return void
     */
    public function testSetNbHeureMois(): void {

        $obj = new InfosComplBul();

        $obj->setNbHeureMois(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureMois());
    }

    /**
     * Tests the setNbJourAnnee() method.
     *
     * @return void
     */
    public function testSetNbJourAnnee(): void {

        $obj = new InfosComplBul();

        $obj->setNbJourAnnee(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourAnnee());
    }

    /**
     * Tests the setNbJourCpAcquis() method.
     *
     * @return void
     */
    public function testSetNbJourCpAcquis(): void {

        $obj = new InfosComplBul();

        $obj->setNbJourCpAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpAcquis());
    }

    /**
     * Tests the setNbJourCpSup() method.
     *
     * @return void
     */
    public function testSetNbJourCpSup(): void {

        $obj = new InfosComplBul();

        $obj->setNbJourCpSup(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpSup());
    }

    /**
     * Tests the setNbPieceLogement() method.
     *
     * @return void
     */
    public function testSetNbPieceLogement(): void {

        $obj = new InfosComplBul();

        $obj->setNbPieceLogement("nbPieceLogement");
        $this->assertEquals("nbPieceLogement", $obj->getNbPieceLogement());
    }

    /**
     * Tests the setNePasActiverPrimeAnnuelleProprete() method.
     *
     * @return void
     */
    public function testSetNePasActiverPrimeAnnuelleProprete(): void {

        $obj = new InfosComplBul();

        $obj->setNePasActiverPrimeAnnuelleProprete(true);
        $this->assertEquals(true, $obj->getNePasActiverPrimeAnnuelleProprete());
    }

    /**
     * Tests the setNePasPublierWeb() method.
     *
     * @return void
     */
    public function testSetNePasPublierWeb(): void {

        $obj = new InfosComplBul();

        $obj->setNePasPublierWeb(true);
        $this->assertEquals(true, $obj->getNePasPublierWeb());
    }

    /**
     * Tests the setNiveau() method.
     *
     * @return void
     */
    public function testSetNiveau(): void {

        $obj = new InfosComplBul();

        $obj->setNiveau("niveau");
        $this->assertEquals("niveau", $obj->getNiveau());
    }

    /**
     * Tests the setNiveauConventionCol() method.
     *
     * @return void
     */
    public function testSetNiveauConventionCol(): void {

        $obj = new InfosComplBul();

        $obj->setNiveauConventionCol("niveauConventionCol");
        $this->assertEquals("niveauConventionCol", $obj->getNiveauConventionCol());
    }

    /**
     * Tests the setNomMarital() method.
     *
     * @return void
     */
    public function testSetNomMarital(): void {

        $obj = new InfosComplBul();

        $obj->setNomMarital("nomMarital");
        $this->assertEquals("nomMarital", $obj->getNomMarital());
    }

    /**
     * Tests the setNomNaissance() method.
     *
     * @return void
     */
    public function testSetNomNaissance(): void {

        $obj = new InfosComplBul();

        $obj->setNomNaissance("nomNaissance");
        $this->assertEquals("nomNaissance", $obj->getNomNaissance());
    }

    /**
     * Tests the setNomVille() method.
     *
     * @return void
     */
    public function testSetNomVille(): void {

        $obj = new InfosComplBul();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new InfosComplBul();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNumEvenement() method.
     *
     * @return void
     */
    public function testSetNumEvenement(): void {

        $obj = new InfosComplBul();

        $obj->setNumEvenement(10);
        $this->assertEquals(10, $obj->getNumEvenement());
    }

    /**
     * Tests the setNumObjet() method.
     *
     * @return void
     */
    public function testSetNumObjet(): void {

        $obj = new InfosComplBul();

        $obj->setNumObjet("numObjet");
        $this->assertEquals("numObjet", $obj->getNumObjet());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new InfosComplBul();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new InfosComplBul();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests the setNumeroAbattementContratMsa() method.
     *
     * @return void
     */
    public function testSetNumeroAbattementContratMsa(): void {

        $obj = new InfosComplBul();

        $obj->setNumeroAbattementContratMsa(10);
        $this->assertEquals(10, $obj->getNumeroAbattementContratMsa());
    }

    /**
     * Tests the setNumeroContrat() method.
     *
     * @return void
     */
    public function testSetNumeroContrat(): void {

        $obj = new InfosComplBul();

        $obj->setNumeroContrat(10);
        $this->assertEquals(10, $obj->getNumeroContrat());
    }

    /**
     * Tests the setNumeroGrilleType() method.
     *
     * @return void
     */
    public function testSetNumeroGrilleType(): void {

        $obj = new InfosComplBul();

        $obj->setNumeroGrilleType(10);
        $this->assertEquals(10, $obj->getNumeroGrilleType());
    }

    /**
     * Tests the setPartPatronPrevForfaitSocial8() method.
     *
     * @return void
     */
    public function testSetPartPatronPrevForfaitSocial8(): void {

        $obj = new InfosComplBul();

        $obj->setPartPatronPrevForfaitSocial8(10.092018);
        $this->assertEquals(10.092018, $obj->getPartPatronPrevForfaitSocial8());
    }

    /**
     * Tests the setPasDeReintegration() method.
     *
     * @return void
     */
    public function testSetPasDeReintegration(): void {

        $obj = new InfosComplBul();

        $obj->setPasDeReintegration(true);
        $this->assertEquals(true, $obj->getPasDeReintegration());
    }

    /**
     * Tests the setPasGestionDif() method.
     *
     * @return void
     */
    public function testSetPasGestionDif(): void {

        $obj = new InfosComplBul();

        $obj->setPasGestionDif(true);
        $this->assertEquals(true, $obj->getPasGestionDif());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setPosition() method.
     *
     * @return void
     */
    public function testSetPosition(): void {

        $obj = new InfosComplBul();

        $obj->setPosition("position");
        $this->assertEquals("position", $obj->getPosition());
    }

    /**
     * Tests the setPositionConventionCol() method.
     *
     * @return void
     */
    public function testSetPositionConventionCol(): void {

        $obj = new InfosComplBul();

        $obj->setPositionConventionCol("positionConventionCol");
        $this->assertEquals("positionConventionCol", $obj->getPositionConventionCol());
    }

    /**
     * Tests the setPourcentExo() method.
     *
     * @return void
     */
    public function testSetPourcentExo(): void {

        $obj = new InfosComplBul();

        $obj->setPourcentExo(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentExo());
    }

    /**
     * Tests the setPremDateEntree() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPremDateEntree(): void {

        // Set a Date/time mock.
        $premDateEntree = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setPremDateEntree($premDateEntree);
        $this->assertSame($premDateEntree, $obj->getPremDateEntree());
    }

    /**
     * Tests the setPrenom() method.
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new InfosComplBul();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests the setPss1Force() method.
     *
     * @return void
     */
    public function testSetPss1Force(): void {

        $obj = new InfosComplBul();

        $obj->setPss1Force(true);
        $this->assertEquals(true, $obj->getPss1Force());
    }

    /**
     * Tests the setQualification() method.
     *
     * @return void
     */
    public function testSetQualification(): void {

        $obj = new InfosComplBul();

        $obj->setQualification("qualification");
        $this->assertEquals("qualification", $obj->getQualification());
    }

    /**
     * Tests the setReductionFillon() method.
     *
     * @return void
     */
    public function testSetReductionFillon(): void {

        $obj = new InfosComplBul();

        $obj->setReductionFillon(true);
        $this->assertEquals(true, $obj->getReductionFillon());
    }

    /**
     * Tests the setRegleCalcul() method.
     *
     * @return void
     */
    public function testSetRegleCalcul(): void {

        $obj = new InfosComplBul();

        $obj->setRegleCalcul("regleCalcul");
        $this->assertEquals("regleCalcul", $obj->getRegleCalcul());
    }

    /**
     * Tests the setRemunPartFillon() method.
     *
     * @return void
     */
    public function testSetRemunPartFillon(): void {

        $obj = new InfosComplBul();

        $obj->setRemunPartFillon(true);
        $this->assertEquals(true, $obj->getRemunPartFillon());
    }

    /**
     * Tests the setRtt1() method.
     *
     * @return void
     */
    public function testSetRtt1(): void {

        $obj = new InfosComplBul();

        $obj->setRtt1(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt1());
    }

    /**
     * Tests the setRtt10() method.
     *
     * @return void
     */
    public function testSetRtt10(): void {

        $obj = new InfosComplBul();

        $obj->setRtt10(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt10());
    }

    /**
     * Tests the setRtt11() method.
     *
     * @return void
     */
    public function testSetRtt11(): void {

        $obj = new InfosComplBul();

        $obj->setRtt11(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt11());
    }

    /**
     * Tests the setRtt12() method.
     *
     * @return void
     */
    public function testSetRtt12(): void {

        $obj = new InfosComplBul();

        $obj->setRtt12(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt12());
    }

    /**
     * Tests the setRtt2() method.
     *
     * @return void
     */
    public function testSetRtt2(): void {

        $obj = new InfosComplBul();

        $obj->setRtt2(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt2());
    }

    /**
     * Tests the setRtt3() method.
     *
     * @return void
     */
    public function testSetRtt3(): void {

        $obj = new InfosComplBul();

        $obj->setRtt3(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt3());
    }

    /**
     * Tests the setRtt4() method.
     *
     * @return void
     */
    public function testSetRtt4(): void {

        $obj = new InfosComplBul();

        $obj->setRtt4(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt4());
    }

    /**
     * Tests the setRtt5() method.
     *
     * @return void
     */
    public function testSetRtt5(): void {

        $obj = new InfosComplBul();

        $obj->setRtt5(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt5());
    }

    /**
     * Tests the setRtt6() method.
     *
     * @return void
     */
    public function testSetRtt6(): void {

        $obj = new InfosComplBul();

        $obj->setRtt6(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt6());
    }

    /**
     * Tests the setRtt7() method.
     *
     * @return void
     */
    public function testSetRtt7(): void {

        $obj = new InfosComplBul();

        $obj->setRtt7(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt7());
    }

    /**
     * Tests the setRtt8() method.
     *
     * @return void
     */
    public function testSetRtt8(): void {

        $obj = new InfosComplBul();

        $obj->setRtt8(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt8());
    }

    /**
     * Tests the setRtt9() method.
     *
     * @return void
     */
    public function testSetRtt9(): void {

        $obj = new InfosComplBul();

        $obj->setRtt9(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt9());
    }

    /**
     * Tests the setSalaireBase() method.
     *
     * @return void
     */
    public function testSetSalaireBase(): void {

        $obj = new InfosComplBul();

        $obj->setSalaireBase(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireBase());
    }

    /**
     * Tests the setSalaireReference() method.
     *
     * @return void
     */
    public function testSetSalaireReference(): void {

        $obj = new InfosComplBul();

        $obj->setSalaireReference(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireReference());
    }

    /**
     * Tests the setSalaireRetabliDsn() method.
     *
     * @return void
     */
    public function testSetSalaireRetabliDsn(): void {

        $obj = new InfosComplBul();

        $obj->setSalaireRetabliDsn(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireRetabliDsn());
    }

    /**
     * Tests the setSalaireRetabliDsnForce() method.
     *
     * @return void
     */
    public function testSetSalaireRetabliDsnForce(): void {

        $obj = new InfosComplBul();

        $obj->setSalaireRetabliDsnForce(true);
        $this->assertEquals(true, $obj->getSalaireRetabliDsnForce());
    }

    /**
     * Tests the setSansContrat() method.
     *
     * @return void
     */
    public function testSetSansContrat(): void {

        $obj = new InfosComplBul();

        $obj->setSansContrat(10);
        $this->assertEquals(10, $obj->getSansContrat());
    }

    /**
     * Tests the setService() method.
     *
     * @return void
     */
    public function testSetService(): void {

        $obj = new InfosComplBul();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Tests the setSetpFillon() method.
     *
     * @return void
     */
    public function testSetSetpFillon(): void {

        $obj = new InfosComplBul();

        $obj->setSetpFillon(10.092018);
        $this->assertEquals(10.092018, $obj->getSetpFillon());
    }

    /**
     * Tests the setSigneAf() method.
     *
     * @return void
     */
    public function testSetSigneAf(): void {

        $obj = new InfosComplBul();

        $obj->setSigneAf("signeAf");
        $this->assertEquals("signeAf", $obj->getSigneAf());
    }

    /**
     * Tests the setSiretLieuTrav() method.
     *
     * @return void
     */
    public function testSetSiretLieuTrav(): void {

        $obj = new InfosComplBul();

        $obj->setSiretLieuTrav("siretLieuTrav");
        $this->assertEquals("siretLieuTrav", $obj->getSiretLieuTrav());
    }

    /**
     * Tests the setSmicMFillonSansHs() method.
     *
     * @return void
     */
    public function testSetSmicMFillonSansHs(): void {

        $obj = new InfosComplBul();

        $obj->setSmicMFillonSansHs(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicMFillonSansHs());
    }

    /**
     * Tests the setSmicMaf() method.
     *
     * @return void
     */
    public function testSetSmicMaf(): void {

        $obj = new InfosComplBul();

        $obj->setSmicMaf(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicMaf());
    }

    /**
     * Tests the setSmicMcice() method.
     *
     * @return void
     */
    public function testSetSmicMcice(): void {

        $obj = new InfosComplBul();

        $obj->setSmicMcice(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicMcice());
    }

    /**
     * Tests the setSubrogation() method.
     *
     * @return void
     */
    public function testSetSubrogation(): void {

        $obj = new InfosComplBul();

        $obj->setSubrogation(true);
        $this->assertEquals(true, $obj->getSubrogation());
    }

    /**
     * Tests the setTds59() method.
     *
     * @return void
     */
    public function testSetTds59(): void {

        $obj = new InfosComplBul();

        $obj->setTds59("tds59");
        $this->assertEquals("tds59", $obj->getTds59());
    }

    /**
     * Tests the setTds76() method.
     *
     * @return void
     */
    public function testSetTds76(): void {

        $obj = new InfosComplBul();

        $obj->setTds76("tds76");
        $this->assertEquals("tds76", $obj->getTds76());
    }

    /**
     * Tests the setTel1() method.
     *
     * @return void
     */
    public function testSetTel1(): void {

        $obj = new InfosComplBul();

        $obj->setTel1("tel1");
        $this->assertEquals("tel1", $obj->getTel1());
    }

    /**
     * Tests the setTel2() method.
     *
     * @return void
     */
    public function testSetTel2(): void {

        $obj = new InfosComplBul();

        $obj->setTel2("tel2");
        $this->assertEquals("tel2", $obj->getTel2());
    }

    /**
     * Tests the setTepaMoins20() method.
     *
     * @return void
     */
    public function testSetTepaMoins20(): void {

        $obj = new InfosComplBul();

        $obj->setTepaMoins20(true);
        $this->assertEquals(true, $obj->getTepaMoins20());
    }

    /**
     * Tests the setTitre() method.
     *
     * @return void
     */
    public function testSetTitre(): void {

        $obj = new InfosComplBul();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Tests the setTotCotUrssaf() method.
     *
     * @return void
     */
    public function testSetTotCotUrssaf(): void {

        $obj = new InfosComplBul();

        $obj->setTotCotUrssaf(10.092018);
        $this->assertEquals(10.092018, $obj->getTotCotUrssaf());
    }

    /**
     * Tests the setTrD1Caisse1() method.
     *
     * @return void
     */
    public function testSetTrD1Caisse1(): void {

        $obj = new InfosComplBul();

        $obj->setTrD1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getTrD1Caisse1());
    }

    /**
     * Tests the setTrD1caisse2() method.
     *
     * @return void
     */
    public function testSetTrD1caisse2(): void {

        $obj = new InfosComplBul();

        $obj->setTrD1caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getTrD1caisse2());
    }

    /**
     * Tests the setTrD1caisse3() method.
     *
     * @return void
     */
    public function testSetTrD1caisse3(): void {

        $obj = new InfosComplBul();

        $obj->setTrD1caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getTrD1caisse3());
    }

    /**
     * Tests the setTrDCaisse1() method.
     *
     * @return void
     */
    public function testSetTrDCaisse1(): void {

        $obj = new InfosComplBul();

        $obj->setTrDCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getTrDCaisse1());
    }

    /**
     * Tests the setTrDcaisse2() method.
     *
     * @return void
     */
    public function testSetTrDcaisse2(): void {

        $obj = new InfosComplBul();

        $obj->setTrDcaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getTrDcaisse2());
    }

    /**
     * Tests the setTrDcaisse3() method.
     *
     * @return void
     */
    public function testSetTrDcaisse3(): void {

        $obj = new InfosComplBul();

        $obj->setTrDcaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getTrDcaisse3());
    }

    /**
     * Tests the setTrancheD() method.
     *
     * @return void
     */
    public function testSetTrancheD(): void {

        $obj = new InfosComplBul();

        $obj->setTrancheD(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheD());
    }

    /**
     * Tests the setTrancheD1() method.
     *
     * @return void
     */
    public function testSetTrancheD1(): void {

        $obj = new InfosComplBul();

        $obj->setTrancheD1(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheD1());
    }

    /**
     * Tests the setTypeChomCdd() method.
     *
     * @return void
     */
    public function testSetTypeChomCdd(): void {

        $obj = new InfosComplBul();

        $obj->setTypeChomCdd("typeChomCdd");
        $this->assertEquals("typeChomCdd", $obj->getTypeChomCdd());
    }

    /**
     * Tests the setTypeContrat() method.
     *
     * @return void
     */
    public function testSetTypeContrat(): void {

        $obj = new InfosComplBul();

        $obj->setTypeContrat("typeContrat");
        $this->assertEquals("typeContrat", $obj->getTypeContrat());
    }

    /**
     * Tests the setTypeExoLodeom() method.
     *
     * @return void
     */
    public function testSetTypeExoLodeom(): void {

        $obj = new InfosComplBul();

        $obj->setTypeExoLodeom("typeExoLodeom");
        $this->assertEquals("typeExoLodeom", $obj->getTypeExoLodeom());
    }

    /**
     * Tests the setTypeHeFillon() method.
     *
     * @return void
     */
    public function testSetTypeHeFillon(): void {

        $obj = new InfosComplBul();

        $obj->setTypeHeFillon("typeHeFillon");
        $this->assertEquals("typeHeFillon", $obj->getTypeHeFillon());
    }

    /**
     * Tests the setTypeMaintienSalaire() method.
     *
     * @return void
     */
    public function testSetTypeMaintienSalaire(): void {

        $obj = new InfosComplBul();

        $obj->setTypeMaintienSalaire("typeMaintienSalaire");
        $this->assertEquals("typeMaintienSalaire", $obj->getTypeMaintienSalaire());
    }

    /**
     * Tests the setTypeReductionFillon() method.
     *
     * @return void
     */
    public function testSetTypeReductionFillon(): void {

        $obj = new InfosComplBul();

        $obj->setTypeReductionFillon("typeReductionFillon");
        $this->assertEquals("typeReductionFillon", $obj->getTypeReductionFillon());
    }

    /**
     * Tests the setTypeReductionMayotte() method.
     *
     * @return void
     */
    public function testSetTypeReductionMayotte(): void {

        $obj = new InfosComplBul();

        $obj->setTypeReductionMayotte("typeReductionMayotte");
        $this->assertEquals("typeReductionMayotte", $obj->getTypeReductionMayotte());
    }

    /**
     * Tests the setTypeSaisieAbCp() method.
     *
     * @return void
     */
    public function testSetTypeSaisieAbCp(): void {

        $obj = new InfosComplBul();

        $obj->setTypeSaisieAbCp("typeSaisieAbCp");
        $this->assertEquals("typeSaisieAbCp", $obj->getTypeSaisieAbCp());
    }

    /**
     * Tests the setTypeSaisieChomIntemp() method.
     *
     * @return void
     */
    public function testSetTypeSaisieChomIntemp(): void {

        $obj = new InfosComplBul();

        $obj->setTypeSaisieChomIntemp("typeSaisieChomIntemp");
        $this->assertEquals("typeSaisieChomIntemp", $obj->getTypeSaisieChomIntemp());
    }

    /**
     * Tests the setVrpMulticarte() method.
     *
     * @return void
     */
    public function testSetVrpMulticarte(): void {

        $obj = new InfosComplBul();

        $obj->setVrpMulticarte(true);
        $this->assertEquals(true, $obj->getVrpMulticarte());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new InfosComplBul();

        $this->assertNull($obj->getAenLogement());
        $this->assertNull($obj->getActiveSmic());
        $this->assertNull($obj->getActiveSalMinConv());
        $this->assertNull($obj->getAllegParticulierEmp());
        $this->assertNull($obj->getAnnexe7Mutation());
        $this->assertNull($obj->getArbitrageAuto());
        $this->assertNull($obj->getAssietteAf());
        $this->assertNull($obj->getAutreAllegEmp());
        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBrutAlSansHSup());
        $this->assertNull($obj->getBrutAlSansHSupMajoHe());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCddcdi());
        $this->assertNull($obj->getCaisseCp());
        $this->assertNull($obj->getCategPopulation());
        $this->assertNull($obj->getCategSalarie());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getClassification());
        $this->assertNull($obj->getCodeCaisseCp());
        $this->assertNull($obj->getCodeCaract());
        $this->assertNull($obj->getCodeCategSalPourcentAbat());
        $this->assertNull($obj->getCodeClassBtp());
        $this->assertNull($obj->getCodeContratTrav());
        $this->assertNull($obj->getCodeConvention());
        $this->assertNull($obj->getCodeConventionCol());
        $this->assertNull($obj->getCodeEmpRemplace());
        $this->assertNull($obj->getCodeExoTrav());
        $this->assertNull($obj->getCodeIntitContratTrav());
        $this->assertNull($obj->getCodeMetierBtp());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodeRegimeAt());
        $this->assertNull($obj->getCodeRegimeBaseObl());
        $this->assertNull($obj->getCodeRegimeVieillesse());
        $this->assertNull($obj->getCodeRetraiteComplementaire());
        $this->assertNull($obj->getCodeSituAdmin());
        $this->assertNull($obj->getCodeStatutCateg());
        $this->assertNull($obj->getCodeStatutCategRetraite());
        $this->assertNull($obj->getCodeStatutPro());
        $this->assertNull($obj->getCodeTuteur());
        $this->assertNull($obj->getCodeUniteTempsTravail());
        $this->assertNull($obj->getCoeffConvention());
        $this->assertNull($obj->getCoeffFillonMoins20());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getComplementPcs());
        $this->assertNull($obj->getContratCne());
        $this->assertNull($obj->getCumBasePrevoyanceComp());
        $this->assertNull($obj->getCumBaseRetraiteObli());
        $this->assertNull($obj->getCumBaseRetraiteSupp());
        $this->assertNull($obj->getCumMtForfaitSocial20());
        $this->assertNull($obj->getCumMtForfaitSocial8());
        $this->assertNull($obj->getCumPpFiscPrev());
        $this->assertNull($obj->getCumPpFiscRet());
        $this->assertNull($obj->getCumPsFiscPrev());
        $this->assertNull($obj->getCumPsFiscRet());
        $this->assertNull($obj->getCumSmicM());
        $this->assertNull($obj->getCumTrD1Caisse1());
        $this->assertNull($obj->getCumTrD1caisse2());
        $this->assertNull($obj->getCumTrD1caisse3());
        $this->assertNull($obj->getCumTrDCaisse1());
        $this->assertNull($obj->getCumTrDcaisse2());
        $this->assertNull($obj->getCumTrDcaisse3());
        $this->assertNull($obj->getCumTrancheD());
        $this->assertNull($obj->getCumTrancheD1());
        $this->assertNull($obj->getDateAncienBranche());
        $this->assertNull($obj->getDateAncienCollege());
        $this->assertNull($obj->getDateAncienPoste());
        $this->assertNull($obj->getDateDebutChomCdd());
        $this->assertNull($obj->getDateDebutContrat());
        $this->assertNull($obj->getDateEnvoiMail());
        $this->assertNull($obj->getDateFinChomCdd());
        $this->assertNull($obj->getDateFinContrat());
        $this->assertNull($obj->getDateFinPrev());
        $this->assertNull($obj->getDateRachat());
        $this->assertNull($obj->getDateRenouvCdd());
        $this->assertNull($obj->getDateRenouvCdd2());
        $this->assertNull($obj->getDetacheExpatrie());
        $this->assertNull($obj->getEchelon());
        $this->assertNull($obj->getEchelonConventionCol());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getEmploi());
        $this->assertNull($obj->getEtabLieuTravail());
        $this->assertNull($obj->getExclureCice());
        $this->assertNull($obj->getExclureChomCdd());
        $this->assertNull($obj->getExclureCospar());
        $this->assertNull($obj->getExclureDsn());
        $this->assertNull($obj->getExclureLoiTepa());
        $this->assertNull($obj->getExclureLoiTepaPartP());
        $this->assertNull($obj->getExclureLoiTepaPartS());
        $this->assertNull($obj->getExclureQgc());
        $this->assertNull($obj->getExoAccre17());
        $this->assertNull($obj->getExoOccasionnelMsa());
        $this->assertNull($obj->getExoProfessionnalisation());
        $this->assertNull($obj->getExoSpecif());
        $this->assertNull($obj->getForfaitHeure());
        $this->assertNull($obj->getFractionEtab());
        $this->assertNull($obj->getGestionCp());
        $this->assertNull($obj->getGestionHstepa());
        $this->assertNull($obj->getGestionMailBulletin());
        $this->assertNull($obj->getGestionRtt());
        $this->assertNull($obj->getGrilleAnc1());
        $this->assertNull($obj->getGrilleAnc2());
        $this->assertNull($obj->getGrilleAnc3());
        $this->assertNull($obj->getIdLieuTravail());
        $this->assertNull($obj->getIndemCpMsa());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getIndiceCateg());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getInterimIndemCpFillon());
        $this->assertNull($obj->getLibelleReintegration());
        $this->assertNull($obj->getLienReintegration());
        $this->assertNull($obj->getMaintienIntervientCp());
        $this->assertNull($obj->getMaintienSalaire());
        $this->assertNull($obj->getMontantAvantage());
        $this->assertNull($obj->getMotifCdd());
        $this->assertNull($obj->getMotifExclusionDsn());
        $this->assertNull($obj->getMtAbsActPart());
        $this->assertNull($obj->getMtCrds100());
        $this->assertNull($obj->getMtCsg100());
        $this->assertNull($obj->getMtCotisationPrev());
        $this->assertNull($obj->getMtCotisationRetraite());
        $this->assertNull($obj->getMtFiscFraisSante());
        $this->assertNull($obj->getMtFiscPrev());
        $this->assertNull($obj->getMtFiscRetraite());
        $this->assertNull($obj->getMtForfaitSocial20());
        $this->assertNull($obj->getMtForfaitSocial8());
        $this->assertNull($obj->getMtIap());
        $this->assertNull($obj->getMtJourneeCpn());
        $this->assertNull($obj->getMtJourneeCpn1());
        $this->assertNull($obj->getMultiEmployeur());
        $this->assertNull($obj->getNatureAnalytique());
        $this->assertNull($obj->getNb30RenouvCdd());
        $this->assertNull($obj->getNbHActPart());
        $this->assertNull($obj->getNbHActPartIndem());
        $this->assertNull($obj->getNbHBonifie());
        $this->assertNull($obj->getNbHContingent());
        $this->assertNull($obj->getNbHContract());
        $this->assertNull($obj->getNbHeureMois());
        $this->assertNull($obj->getNbJourAnnee());
        $this->assertNull($obj->getNbJourCpAcquis());
        $this->assertNull($obj->getNbJourCpSup());
        $this->assertNull($obj->getNbPieceLogement());
        $this->assertNull($obj->getNePasActiverPrimeAnnuelleProprete());
        $this->assertNull($obj->getNePasPublierWeb());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getNiveauConventionCol());
        $this->assertNull($obj->getNomMarital());
        $this->assertNull($obj->getNomNaissance());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumEvenement());
        $this->assertNull($obj->getNumObjet());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroAbattementContratMsa());
        $this->assertNull($obj->getNumeroContrat());
        $this->assertNull($obj->getNumeroGrilleType());
        $this->assertNull($obj->getPss1Force());
        $this->assertNull($obj->getPartPatronPrevForfaitSocial8());
        $this->assertNull($obj->getPasDeReintegration());
        $this->assertNull($obj->getPasGestionDif());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPosition());
        $this->assertNull($obj->getPositionConventionCol());
        $this->assertNull($obj->getPourcentExo());
        $this->assertNull($obj->getPremDateEntree());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getQualification());
        $this->assertNull($obj->getRtt1());
        $this->assertNull($obj->getRtt10());
        $this->assertNull($obj->getRtt11());
        $this->assertNull($obj->getRtt12());
        $this->assertNull($obj->getRtt2());
        $this->assertNull($obj->getRtt3());
        $this->assertNull($obj->getRtt4());
        $this->assertNull($obj->getRtt5());
        $this->assertNull($obj->getRtt6());
        $this->assertNull($obj->getRtt7());
        $this->assertNull($obj->getRtt8());
        $this->assertNull($obj->getRtt9());
        $this->assertNull($obj->getReductionFillon());
        $this->assertNull($obj->getRegleCalcul());
        $this->assertNull($obj->getRemunPartFillon());
        $this->assertNull($obj->getSetpFillon());
        $this->assertNull($obj->getSmicMaf());
        $this->assertNull($obj->getSmicMcice());
        $this->assertNull($obj->getSalaireBase());
        $this->assertNull($obj->getSalaireReference());
        $this->assertNull($obj->getSalaireRetabliDsn());
        $this->assertNull($obj->getSalaireRetabliDsnForce());
        $this->assertNull($obj->getSansContrat());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getSigneAf());
        $this->assertNull($obj->getSiretLieuTrav());
        $this->assertNull($obj->getSmicMFillonSansHs());
        $this->assertNull($obj->getSubrogation());
        $this->assertNull($obj->getTds59());
        $this->assertNull($obj->getTds76());
        $this->assertNull($obj->getTepaMoins20());
        $this->assertNull($obj->getTel1());
        $this->assertNull($obj->getTel2());
        $this->assertNull($obj->getTitre());
        $this->assertNull($obj->getTotCotUrssaf());
        $this->assertNull($obj->getTrD1Caisse1());
        $this->assertNull($obj->getTrD1caisse2());
        $this->assertNull($obj->getTrD1caisse3());
        $this->assertNull($obj->getTrDCaisse1());
        $this->assertNull($obj->getTrDcaisse2());
        $this->assertNull($obj->getTrDcaisse3());
        $this->assertNull($obj->getTrancheD());
        $this->assertNull($obj->getTrancheD1());
        $this->assertNull($obj->getTypeChomCdd());
        $this->assertNull($obj->getTypeContrat());
        $this->assertNull($obj->getTypeExoLodeom());
        $this->assertNull($obj->getTypeHeFillon());
        $this->assertNull($obj->getTypeMaintienSalaire());
        $this->assertNull($obj->getTypeReductionFillon());
        $this->assertNull($obj->getTypeReductionMayotte());
        $this->assertNull($obj->getTypeSaisieAbCp());
        $this->assertNull($obj->getTypeSaisieChomIntemp());
        $this->assertNull($obj->getVrpMulticarte());
    }
}
