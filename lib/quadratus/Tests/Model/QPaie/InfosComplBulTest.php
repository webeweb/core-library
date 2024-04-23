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

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\InfosComplBul;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Infos compl bul test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class InfosComplBulTest extends AbstractTestCase {

    /**
     * Test setActiveSalMinConv()
     *
     * @return void
     */
    public function testSetActiveSalMinConv(): void {

        $obj = new InfosComplBul();

        $obj->setActiveSalMinConv(true);
        $this->assertTrue($obj->getActiveSalMinConv());
    }

    /**
     * Test setActiveSmic()
     *
     * @return void
     */
    public function testSetActiveSmic(): void {

        $obj = new InfosComplBul();

        $obj->setActiveSmic(true);
        $this->assertTrue($obj->getActiveSmic());
    }

    /**
     * Test setAenLogement()
     *
     * @return void
     */
    public function testSetAenLogement(): void {

        $obj = new InfosComplBul();

        $obj->setAenLogement(true);
        $this->assertTrue($obj->getAenLogement());
    }

    /**
     * Test setAllegParticulierEmp()
     *
     * @return void
     */
    public function testSetAllegParticulierEmp(): void {

        $obj = new InfosComplBul();

        $obj->setAllegParticulierEmp("allegParticulierEmp");
        $this->assertEquals("allegParticulierEmp", $obj->getAllegParticulierEmp());
    }

    /**
     * Test setAnnexe7Mutation()
     *
     * @return void
     */
    public function testSetAnnexe7Mutation(): void {

        $obj = new InfosComplBul();

        $obj->setAnnexe7Mutation(true);
        $this->assertTrue($obj->getAnnexe7Mutation());
    }

    /**
     * Test setArbitrageAuto()
     *
     * @return void
     */
    public function testSetArbitrageAuto(): void {

        $obj = new InfosComplBul();

        $obj->setArbitrageAuto("arbitrageAuto");
        $this->assertEquals("arbitrageAuto", $obj->getArbitrageAuto());
    }

    /**
     * Test setAssietteAf()
     *
     * @return void
     */
    public function testSetAssietteAf(): void {

        $obj = new InfosComplBul();

        $obj->setAssietteAf(10.092018);
        $this->assertEquals(10.092018, $obj->getAssietteAf());
    }

    /**
     * Test setAutreAllegEmp()
     *
     * @return void
     */
    public function testSetAutreAllegEmp(): void {

        $obj = new InfosComplBul();

        $obj->setAutreAllegEmp("autreAllegEmp");
        $this->assertEquals("autreAllegEmp", $obj->getAutreAllegEmp());
    }

    /**
     * Test setBrutAlSansHSup()
     *
     * @return void
     */
    public function testSetBrutAlSansHSup(): void {

        $obj = new InfosComplBul();

        $obj->setBrutAlSansHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutAlSansHSup());
    }

    /**
     * Test setBrutAlSansHSupMajoHe()
     *
     * @return void
     */
    public function testSetBrutAlSansHSupMajoHe(): void {

        $obj = new InfosComplBul();

        $obj->setBrutAlSansHSupMajoHe(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutAlSansHSupMajoHe());
    }

    /**
     * Test setBtq()
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new InfosComplBul();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Test setBureauDistributeur()
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new InfosComplBul();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Test setCaisseCp()
     *
     * @return void
     */
    public function testSetCaisseCp(): void {

        $obj = new InfosComplBul();

        $obj->setCaisseCp(true);
        $this->assertTrue($obj->getCaisseCp());
    }

    /**
     * Test setCategPopulation()
     *
     * @return void
     */
    public function testSetCategPopulation(): void {

        $obj = new InfosComplBul();

        $obj->setCategPopulation("categPopulation");
        $this->assertEquals("categPopulation", $obj->getCategPopulation());
    }

    /**
     * Test setCategSalarie()
     *
     * @return void
     */
    public function testSetCategSalarie(): void {

        $obj = new InfosComplBul();

        $obj->setCategSalarie("categSalarie");
        $this->assertEquals("categSalarie", $obj->getCategSalarie());
    }

    /**
     * Test setCddcdi()
     *
     * @return void
     */
    public function testSetCddcdi(): void {

        $obj = new InfosComplBul();

        $obj->setCddcdi(true);
        $this->assertTrue($obj->getCddcdi());
    }

    /**
     * Test setCentreAnalytique()
     *
     * @return void
     */
    public function testSetCentreAnalytique(): void {

        $obj = new InfosComplBul();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Test setClassification()
     *
     * @return void
     */
    public function testSetClassification(): void {

        $obj = new InfosComplBul();

        $obj->setClassification("classification");
        $this->assertEquals("classification", $obj->getClassification());
    }

    /**
     * Test setCodeCaisseCp()
     *
     * @return void
     */
    public function testSetCodeCaisseCp(): void {

        $obj = new InfosComplBul();

        $obj->setCodeCaisseCp("codeCaisseCp");
        $this->assertEquals("codeCaisseCp", $obj->getCodeCaisseCp());
    }

    /**
     * Test setCodeCaract()
     *
     * @return void
     */
    public function testSetCodeCaract(): void {

        $obj = new InfosComplBul();

        $obj->setCodeCaract("codeCaract");
        $this->assertEquals("codeCaract", $obj->getCodeCaract());
    }

    /**
     * Test setCodeCategSalPourcentAbat()
     *
     * @return void
     */
    public function testSetCodeCategSalPourcentAbat(): void {

        $obj = new InfosComplBul();

        $obj->setCodeCategSalPourcentAbat("codeCategSalPourcentAbat");
        $this->assertEquals("codeCategSalPourcentAbat", $obj->getCodeCategSalPourcentAbat());
    }

    /**
     * Test setCodeClassBtp()
     *
     * @return void
     */
    public function testSetCodeClassBtp(): void {

        $obj = new InfosComplBul();

        $obj->setCodeClassBtp("codeClassBtp");
        $this->assertEquals("codeClassBtp", $obj->getCodeClassBtp());
    }

    /**
     * Test setCodeContratTrav()
     *
     * @return void
     */
    public function testSetCodeContratTrav(): void {

        $obj = new InfosComplBul();

        $obj->setCodeContratTrav("codeContratTrav");
        $this->assertEquals("codeContratTrav", $obj->getCodeContratTrav());
    }

    /**
     * Test setCodeConvention()
     *
     * @return void
     */
    public function testSetCodeConvention(): void {

        $obj = new InfosComplBul();

        $obj->setCodeConvention("codeConvention");
        $this->assertEquals("codeConvention", $obj->getCodeConvention());
    }

    /**
     * Test setCodeConventionCol()
     *
     * @return void
     */
    public function testSetCodeConventionCol(): void {

        $obj = new InfosComplBul();

        $obj->setCodeConventionCol("codeConventionCol");
        $this->assertEquals("codeConventionCol", $obj->getCodeConventionCol());
    }

    /**
     * Test setCodeEmpRemplace()
     *
     * @return void
     */
    public function testSetCodeEmpRemplace(): void {

        $obj = new InfosComplBul();

        $obj->setCodeEmpRemplace("codeEmpRemplace");
        $this->assertEquals("codeEmpRemplace", $obj->getCodeEmpRemplace());
    }

    /**
     * Test setCodeExoTrav()
     *
     * @return void
     */
    public function testSetCodeExoTrav(): void {

        $obj = new InfosComplBul();

        $obj->setCodeExoTrav("codeExoTrav");
        $this->assertEquals("codeExoTrav", $obj->getCodeExoTrav());
    }

    /**
     * Test setCodeIntitContratTrav()
     *
     * @return void
     */
    public function testSetCodeIntitContratTrav(): void {

        $obj = new InfosComplBul();

        $obj->setCodeIntitContratTrav("codeIntitContratTrav");
        $this->assertEquals("codeIntitContratTrav", $obj->getCodeIntitContratTrav());
    }

    /**
     * Test setCodeMetierBtp()
     *
     * @return void
     */
    public function testSetCodeMetierBtp(): void {

        $obj = new InfosComplBul();

        $obj->setCodeMetierBtp("codeMetierBtp");
        $this->assertEquals("codeMetierBtp", $obj->getCodeMetierBtp());
    }

    /**
     * Test setCodeOfficielCommune()
     *
     * @return void
     */
    public function testSetCodeOfficielCommune(): void {

        $obj = new InfosComplBul();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Test setCodePostal()
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new InfosComplBul();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Test setCodeRegimeAt()
     *
     * @return void
     */
    public function testSetCodeRegimeAt(): void {

        $obj = new InfosComplBul();

        $obj->setCodeRegimeAt("codeRegimeAt");
        $this->assertEquals("codeRegimeAt", $obj->getCodeRegimeAt());
    }

    /**
     * Test setCodeRegimeBaseObl()
     *
     * @return void
     */
    public function testSetCodeRegimeBaseObl(): void {

        $obj = new InfosComplBul();

        $obj->setCodeRegimeBaseObl("codeRegimeBaseObl");
        $this->assertEquals("codeRegimeBaseObl", $obj->getCodeRegimeBaseObl());
    }

    /**
     * Test setCodeRegimeVieillesse()
     *
     * @return void
     */
    public function testSetCodeRegimeVieillesse(): void {

        $obj = new InfosComplBul();

        $obj->setCodeRegimeVieillesse("codeRegimeVieillesse");
        $this->assertEquals("codeRegimeVieillesse", $obj->getCodeRegimeVieillesse());
    }

    /**
     * Test setCodeRetraiteComplementaire()
     *
     * @return void
     */
    public function testSetCodeRetraiteComplementaire(): void {

        $obj = new InfosComplBul();

        $obj->setCodeRetraiteComplementaire("codeRetraiteComplementaire");
        $this->assertEquals("codeRetraiteComplementaire", $obj->getCodeRetraiteComplementaire());
    }

    /**
     * Test setCodeSituAdmin()
     *
     * @return void
     */
    public function testSetCodeSituAdmin(): void {

        $obj = new InfosComplBul();

        $obj->setCodeSituAdmin("codeSituAdmin");
        $this->assertEquals("codeSituAdmin", $obj->getCodeSituAdmin());
    }

    /**
     * Test setCodeStatutCateg()
     *
     * @return void
     */
    public function testSetCodeStatutCateg(): void {

        $obj = new InfosComplBul();

        $obj->setCodeStatutCateg("codeStatutCateg");
        $this->assertEquals("codeStatutCateg", $obj->getCodeStatutCateg());
    }

    /**
     * Test setCodeStatutCategRetraite()
     *
     * @return void
     */
    public function testSetCodeStatutCategRetraite(): void {

        $obj = new InfosComplBul();

        $obj->setCodeStatutCategRetraite("codeStatutCategRetraite");
        $this->assertEquals("codeStatutCategRetraite", $obj->getCodeStatutCategRetraite());
    }

    /**
     * Test setCodeStatutPro()
     *
     * @return void
     */
    public function testSetCodeStatutPro(): void {

        $obj = new InfosComplBul();

        $obj->setCodeStatutPro("codeStatutPro");
        $this->assertEquals("codeStatutPro", $obj->getCodeStatutPro());
    }

    /**
     * Test setCodeTuteur()
     *
     * @return void
     */
    public function testSetCodeTuteur(): void {

        $obj = new InfosComplBul();

        $obj->setCodeTuteur("codeTuteur");
        $this->assertEquals("codeTuteur", $obj->getCodeTuteur());
    }

    /**
     * Test setCodeUniteTempsTravail()
     *
     * @return void
     */
    public function testSetCodeUniteTempsTravail(): void {

        $obj = new InfosComplBul();

        $obj->setCodeUniteTempsTravail("codeUniteTempsTravail");
        $this->assertEquals("codeUniteTempsTravail", $obj->getCodeUniteTempsTravail());
    }

    /**
     * Test setCoeffConvention()
     *
     * @return void
     */
    public function testSetCoeffConvention(): void {

        $obj = new InfosComplBul();

        $obj->setCoeffConvention("coeffConvention");
        $this->assertEquals("coeffConvention", $obj->getCoeffConvention());
    }

    /**
     * Test setCoeffFillonMoins20()
     *
     * @return void
     */
    public function testSetCoeffFillonMoins20(): void {

        $obj = new InfosComplBul();

        $obj->setCoeffFillonMoins20(true);
        $this->assertTrue($obj->getCoeffFillonMoins20());
    }

    /**
     * Test setComplement()
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new InfosComplBul();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Test setComplementPcs()
     *
     * @return void
     */
    public function testSetComplementPcs(): void {

        $obj = new InfosComplBul();

        $obj->setComplementPcs("complementPcs");
        $this->assertEquals("complementPcs", $obj->getComplementPcs());
    }

    /**
     * Test setContratCne()
     *
     * @return void
     */
    public function testSetContratCne(): void {

        $obj = new InfosComplBul();

        $obj->setContratCne(true);
        $this->assertTrue($obj->getContratCne());
    }

    /**
     * Test setCumBasePrevoyanceComp()
     *
     * @return void
     */
    public function testSetCumBasePrevoyanceComp(): void {

        $obj = new InfosComplBul();

        $obj->setCumBasePrevoyanceComp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBasePrevoyanceComp());
    }

    /**
     * Test setCumBaseRetraiteObli()
     *
     * @return void
     */
    public function testSetCumBaseRetraiteObli(): void {

        $obj = new InfosComplBul();

        $obj->setCumBaseRetraiteObli(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseRetraiteObli());
    }

    /**
     * Test setCumBaseRetraiteSupp()
     *
     * @return void
     */
    public function testSetCumBaseRetraiteSupp(): void {

        $obj = new InfosComplBul();

        $obj->setCumBaseRetraiteSupp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseRetraiteSupp());
    }

    /**
     * Test setCumMtForfaitSocial20()
     *
     * @return void
     */
    public function testSetCumMtForfaitSocial20(): void {

        $obj = new InfosComplBul();

        $obj->setCumMtForfaitSocial20(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtForfaitSocial20());
    }

    /**
     * Test setCumMtForfaitSocial8()
     *
     * @return void
     */
    public function testSetCumMtForfaitSocial8(): void {

        $obj = new InfosComplBul();

        $obj->setCumMtForfaitSocial8(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtForfaitSocial8());
    }

    /**
     * Test setCumPpFiscPrev()
     *
     * @return void
     */
    public function testSetCumPpFiscPrev(): void {

        $obj = new InfosComplBul();

        $obj->setCumPpFiscPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPpFiscPrev());
    }

    /**
     * Test setCumPpFiscRet()
     *
     * @return void
     */
    public function testSetCumPpFiscRet(): void {

        $obj = new InfosComplBul();

        $obj->setCumPpFiscRet(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPpFiscRet());
    }

    /**
     * Test setCumPsFiscPrev()
     *
     * @return void
     */
    public function testSetCumPsFiscPrev(): void {

        $obj = new InfosComplBul();

        $obj->setCumPsFiscPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPsFiscPrev());
    }

    /**
     * Test setCumPsFiscRet()
     *
     * @return void
     */
    public function testSetCumPsFiscRet(): void {

        $obj = new InfosComplBul();

        $obj->setCumPsFiscRet(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPsFiscRet());
    }

    /**
     * Test setCumSmicM()
     *
     * @return void
     */
    public function testSetCumSmicM(): void {

        $obj = new InfosComplBul();

        $obj->setCumSmicM(10.092018);
        $this->assertEquals(10.092018, $obj->getCumSmicM());
    }

    /**
     * Test setCumTrD1Caisse1()
     *
     * @return void
     */
    public function testSetCumTrD1Caisse1(): void {

        $obj = new InfosComplBul();

        $obj->setCumTrD1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrD1Caisse1());
    }

    /**
     * Test setCumTrD1caisse2()
     *
     * @return void
     */
    public function testSetCumTrD1caisse2(): void {

        $obj = new InfosComplBul();

        $obj->setCumTrD1caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrD1caisse2());
    }

    /**
     * Test setCumTrD1caisse3()
     *
     * @return void
     */
    public function testSetCumTrD1caisse3(): void {

        $obj = new InfosComplBul();

        $obj->setCumTrD1caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrD1caisse3());
    }

    /**
     * Test setCumTrDCaisse1()
     *
     * @return void
     */
    public function testSetCumTrDCaisse1(): void {

        $obj = new InfosComplBul();

        $obj->setCumTrDCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrDCaisse1());
    }

    /**
     * Test setCumTrDcaisse2()
     *
     * @return void
     */
    public function testSetCumTrDcaisse2(): void {

        $obj = new InfosComplBul();

        $obj->setCumTrDcaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrDcaisse2());
    }

    /**
     * Test setCumTrDcaisse3()
     *
     * @return void
     */
    public function testSetCumTrDcaisse3(): void {

        $obj = new InfosComplBul();

        $obj->setCumTrDcaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrDcaisse3());
    }

    /**
     * Test setCumTrancheD()
     *
     * @return void
     */
    public function testSetCumTrancheD(): void {

        $obj = new InfosComplBul();

        $obj->setCumTrancheD(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheD());
    }

    /**
     * Test setCumTrancheD1()
     *
     * @return void
     */
    public function testSetCumTrancheD1(): void {

        $obj = new InfosComplBul();

        $obj->setCumTrancheD1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheD1());
    }

    /**
     * Test setDateAncienBranche()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAncienBranche(): void {

        // Set a Date/time mock.
        $dateAncienBranche = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateAncienBranche($dateAncienBranche);
        $this->assertSame($dateAncienBranche, $obj->getDateAncienBranche());
    }

    /**
     * Test setDateAncienCollege()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAncienCollege(): void {

        // Set a Date/time mock.
        $dateAncienCollege = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateAncienCollege($dateAncienCollege);
        $this->assertSame($dateAncienCollege, $obj->getDateAncienCollege());
    }

    /**
     * Test setDateAncienPoste()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAncienPoste(): void {

        // Set a Date/time mock.
        $dateAncienPoste = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateAncienPoste($dateAncienPoste);
        $this->assertSame($dateAncienPoste, $obj->getDateAncienPoste());
    }

    /**
     * Test setDateDebutChomCdd()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDebutChomCdd(): void {

        // Set a Date/time mock.
        $dateDebutChomCdd = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateDebutChomCdd($dateDebutChomCdd);
        $this->assertSame($dateDebutChomCdd, $obj->getDateDebutChomCdd());
    }

    /**
     * Test setDateDebutContrat()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDebutContrat(): void {

        // Set a Date/time mock.
        $dateDebutContrat = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateDebutContrat($dateDebutContrat);
        $this->assertSame($dateDebutContrat, $obj->getDateDebutContrat());
    }

    /**
     * Test setDateEnvoiMail()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateEnvoiMail(): void {

        // Set a Date/time mock.
        $dateEnvoiMail = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateEnvoiMail($dateEnvoiMail);
        $this->assertSame($dateEnvoiMail, $obj->getDateEnvoiMail());
    }

    /**
     * Test setDateFinChomCdd()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFinChomCdd(): void {

        // Set a Date/time mock.
        $dateFinChomCdd = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateFinChomCdd($dateFinChomCdd);
        $this->assertSame($dateFinChomCdd, $obj->getDateFinChomCdd());
    }

    /**
     * Test setDateFinContrat()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFinContrat(): void {

        // Set a Date/time mock.
        $dateFinContrat = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateFinContrat($dateFinContrat);
        $this->assertSame($dateFinContrat, $obj->getDateFinContrat());
    }

    /**
     * Test setDateFinPrev()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFinPrev(): void {

        // Set a Date/time mock.
        $dateFinPrev = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateFinPrev($dateFinPrev);
        $this->assertSame($dateFinPrev, $obj->getDateFinPrev());
    }

    /**
     * Test setDateRachat()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateRachat(): void {

        // Set a Date/time mock.
        $dateRachat = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateRachat($dateRachat);
        $this->assertSame($dateRachat, $obj->getDateRachat());
    }

    /**
     * Test setDateRenouvCdd()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateRenouvCdd(): void {

        // Set a Date/time mock.
        $dateRenouvCdd = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateRenouvCdd($dateRenouvCdd);
        $this->assertSame($dateRenouvCdd, $obj->getDateRenouvCdd());
    }

    /**
     * Test setDateRenouvCdd2()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateRenouvCdd2(): void {

        // Set a Date/time mock.
        $dateRenouvCdd2 = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setDateRenouvCdd2($dateRenouvCdd2);
        $this->assertSame($dateRenouvCdd2, $obj->getDateRenouvCdd2());
    }

    /**
     * Test setDetacheExpatrie()
     *
     * @return void
     */
    public function testSetDetacheExpatrie(): void {

        $obj = new InfosComplBul();

        $obj->setDetacheExpatrie("detacheExpatrie");
        $this->assertEquals("detacheExpatrie", $obj->getDetacheExpatrie());
    }

    /**
     * Test setEchelon()
     *
     * @return void
     */
    public function testSetEchelon(): void {

        $obj = new InfosComplBul();

        $obj->setEchelon("echelon");
        $this->assertEquals("echelon", $obj->getEchelon());
    }

    /**
     * Test setEchelonConventionCol()
     *
     * @return void
     */
    public function testSetEchelonConventionCol(): void {

        $obj = new InfosComplBul();

        $obj->setEchelonConventionCol("echelonConventionCol");
        $this->assertEquals("echelonConventionCol", $obj->getEchelonConventionCol());
    }

    /**
     * Test setEmail()
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new InfosComplBul();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Test setEmploi()
     *
     * @return void
     */
    public function testSetEmploi(): void {

        $obj = new InfosComplBul();

        $obj->setEmploi("emploi");
        $this->assertEquals("emploi", $obj->getEmploi());
    }

    /**
     * Test setEtabLieuTravail()
     *
     * @return void
     */
    public function testSetEtabLieuTravail(): void {

        $obj = new InfosComplBul();

        $obj->setEtabLieuTravail("etabLieuTravail");
        $this->assertEquals("etabLieuTravail", $obj->getEtabLieuTravail());
    }

    /**
     * Test setExclureChomCdd()
     *
     * @return void
     */
    public function testSetExclureChomCdd(): void {

        $obj = new InfosComplBul();

        $obj->setExclureChomCdd(true);
        $this->assertTrue($obj->getExclureChomCdd());
    }

    /**
     * Test setExclureCice()
     *
     * @return void
     */
    public function testSetExclureCice(): void {

        $obj = new InfosComplBul();

        $obj->setExclureCice(true);
        $this->assertTrue($obj->getExclureCice());
    }

    /**
     * Test setExclureCospar()
     *
     * @return void
     */
    public function testSetExclureCospar(): void {

        $obj = new InfosComplBul();

        $obj->setExclureCospar(true);
        $this->assertTrue($obj->getExclureCospar());
    }

    /**
     * Test setExclureDsn()
     *
     * @return void
     */
    public function testSetExclureDsn(): void {

        $obj = new InfosComplBul();

        $obj->setExclureDsn(true);
        $this->assertTrue($obj->getExclureDsn());
    }

    /**
     * Test setExclureLoiTepa()
     *
     * @return void
     */
    public function testSetExclureLoiTepa(): void {

        $obj = new InfosComplBul();

        $obj->setExclureLoiTepa(true);
        $this->assertTrue($obj->getExclureLoiTepa());
    }

    /**
     * Test setExclureLoiTepaPartP()
     *
     * @return void
     */
    public function testSetExclureLoiTepaPartP(): void {

        $obj = new InfosComplBul();

        $obj->setExclureLoiTepaPartP(true);
        $this->assertTrue($obj->getExclureLoiTepaPartP());
    }

    /**
     * Test setExclureLoiTepaPartS()
     *
     * @return void
     */
    public function testSetExclureLoiTepaPartS(): void {

        $obj = new InfosComplBul();

        $obj->setExclureLoiTepaPartS(true);
        $this->assertTrue($obj->getExclureLoiTepaPartS());
    }

    /**
     * Test setExclureQgc()
     *
     * @return void
     */
    public function testSetExclureQgc(): void {

        $obj = new InfosComplBul();

        $obj->setExclureQgc(true);
        $this->assertTrue($obj->getExclureQgc());
    }

    /**
     * Test setExoAccre17()
     *
     * @return void
     */
    public function testSetExoAccre17(): void {

        $obj = new InfosComplBul();

        $obj->setExoAccre17(true);
        $this->assertTrue($obj->getExoAccre17());
    }

    /**
     * Test setExoOccasionnelMsa()
     *
     * @return void
     */
    public function testSetExoOccasionnelMsa(): void {

        $obj = new InfosComplBul();

        $obj->setExoOccasionnelMsa(true);
        $this->assertTrue($obj->getExoOccasionnelMsa());
    }

    /**
     * Test setExoProfessionnalisation()
     *
     * @return void
     */
    public function testSetExoProfessionnalisation(): void {

        $obj = new InfosComplBul();

        $obj->setExoProfessionnalisation(true);
        $this->assertTrue($obj->getExoProfessionnalisation());
    }

    /**
     * Test setExoSpecif()
     *
     * @return void
     */
    public function testSetExoSpecif(): void {

        $obj = new InfosComplBul();

        $obj->setExoSpecif(true);
        $this->assertTrue($obj->getExoSpecif());
    }

    /**
     * Test setForfaitHeure()
     *
     * @return void
     */
    public function testSetForfaitHeure(): void {

        $obj = new InfosComplBul();

        $obj->setForfaitHeure(true);
        $this->assertTrue($obj->getForfaitHeure());
    }

    /**
     * Test setFractionEtab()
     *
     * @return void
     */
    public function testSetFractionEtab(): void {

        $obj = new InfosComplBul();

        $obj->setFractionEtab("fractionEtab");
        $this->assertEquals("fractionEtab", $obj->getFractionEtab());
    }

    /**
     * Test setGestionCp()
     *
     * @return void
     */
    public function testSetGestionCp(): void {

        $obj = new InfosComplBul();

        $obj->setGestionCp(true);
        $this->assertTrue($obj->getGestionCp());
    }

    /**
     * Test setGestionHstepa()
     *
     * @return void
     */
    public function testSetGestionHstepa(): void {

        $obj = new InfosComplBul();

        $obj->setGestionHstepa("gestionHstepa");
        $this->assertEquals("gestionHstepa", $obj->getGestionHstepa());
    }

    /**
     * Test setGestionMailBulletin()
     *
     * @return void
     */
    public function testSetGestionMailBulletin(): void {

        $obj = new InfosComplBul();

        $obj->setGestionMailBulletin(true);
        $this->assertTrue($obj->getGestionMailBulletin());
    }

    /**
     * Test setGestionRtt()
     *
     * @return void
     */
    public function testSetGestionRtt(): void {

        $obj = new InfosComplBul();

        $obj->setGestionRtt(true);
        $this->assertTrue($obj->getGestionRtt());
    }

    /**
     * Test setGrilleAnc1()
     *
     * @return void
     */
    public function testSetGrilleAnc1(): void {

        $obj = new InfosComplBul();

        $obj->setGrilleAnc1("grilleAnc1");
        $this->assertEquals("grilleAnc1", $obj->getGrilleAnc1());
    }

    /**
     * Test setGrilleAnc2()
     *
     * @return void
     */
    public function testSetGrilleAnc2(): void {

        $obj = new InfosComplBul();

        $obj->setGrilleAnc2("grilleAnc2");
        $this->assertEquals("grilleAnc2", $obj->getGrilleAnc2());
    }

    /**
     * Test setGrilleAnc3()
     *
     * @return void
     */
    public function testSetGrilleAnc3(): void {

        $obj = new InfosComplBul();

        $obj->setGrilleAnc3("grilleAnc3");
        $this->assertEquals("grilleAnc3", $obj->getGrilleAnc3());
    }

    /**
     * Test setIdLieuTravail()
     *
     * @return void
     */
    public function testSetIdLieuTravail(): void {

        $obj = new InfosComplBul();

        $obj->setIdLieuTravail("idLieuTravail");
        $this->assertEquals("idLieuTravail", $obj->getIdLieuTravail());
    }

    /**
     * Test setIndemCpMsa()
     *
     * @return void
     */
    public function testSetIndemCpMsa(): void {

        $obj = new InfosComplBul();

        $obj->setIndemCpMsa(true);
        $this->assertTrue($obj->getIndemCpMsa());
    }

    /**
     * Test setIndice()
     *
     * @return void
     */
    public function testSetIndice(): void {

        $obj = new InfosComplBul();

        $obj->setIndice("indice");
        $this->assertEquals("indice", $obj->getIndice());
    }

    /**
     * Test setIndiceCateg()
     *
     * @return void
     */
    public function testSetIndiceCateg(): void {

        $obj = new InfosComplBul();

        $obj->setIndiceCateg(10);
        $this->assertEquals(10, $obj->getIndiceCateg());
    }

    /**
     * Test setIndicePeriode()
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new InfosComplBul();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Test setInterimIndemCpFillon()
     *
     * @return void
     */
    public function testSetInterimIndemCpFillon(): void {

        $obj = new InfosComplBul();

        $obj->setInterimIndemCpFillon(true);
        $this->assertTrue($obj->getInterimIndemCpFillon());
    }

    /**
     * Test setLibelleReintegration()
     *
     * @return void
     */
    public function testSetLibelleReintegration(): void {

        $obj = new InfosComplBul();

        $obj->setLibelleReintegration("libelleReintegration");
        $this->assertEquals("libelleReintegration", $obj->getLibelleReintegration());
    }

    /**
     * Test setLienReintegration()
     *
     * @return void
     */
    public function testSetLienReintegration(): void {

        $obj = new InfosComplBul();

        $obj->setLienReintegration("lienReintegration");
        $this->assertEquals("lienReintegration", $obj->getLienReintegration());
    }

    /**
     * Test setMaintienIntervientCp()
     *
     * @return void
     */
    public function testSetMaintienIntervientCp(): void {

        $obj = new InfosComplBul();

        $obj->setMaintienIntervientCp(true);
        $this->assertTrue($obj->getMaintienIntervientCp());
    }

    /**
     * Test setMaintienSalaire()
     *
     * @return void
     */
    public function testSetMaintienSalaire(): void {

        $obj = new InfosComplBul();

        $obj->setMaintienSalaire(true);
        $this->assertTrue($obj->getMaintienSalaire());
    }

    /**
     * Test setMontantAvantage()
     *
     * @return void
     */
    public function testSetMontantAvantage(): void {

        $obj = new InfosComplBul();

        $obj->setMontantAvantage(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAvantage());
    }

    /**
     * Test setMotifCdd()
     *
     * @return void
     */
    public function testSetMotifCdd(): void {

        $obj = new InfosComplBul();

        $obj->setMotifCdd("motifCdd");
        $this->assertEquals("motifCdd", $obj->getMotifCdd());
    }

    /**
     * Test setMotifExclusionDsn()
     *
     * @return void
     */
    public function testSetMotifExclusionDsn(): void {

        $obj = new InfosComplBul();

        $obj->setMotifExclusionDsn("motifExclusionDsn");
        $this->assertEquals("motifExclusionDsn", $obj->getMotifExclusionDsn());
    }

    /**
     * Test setMtAbsActPart()
     *
     * @return void
     */
    public function testSetMtAbsActPart(): void {

        $obj = new InfosComplBul();

        $obj->setMtAbsActPart(10.092018);
        $this->assertEquals(10.092018, $obj->getMtAbsActPart());
    }

    /**
     * Test setMtCotisationPrev()
     *
     * @return void
     */
    public function testSetMtCotisationPrev(): void {

        $obj = new InfosComplBul();

        $obj->setMtCotisationPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCotisationPrev());
    }

    /**
     * Test setMtCotisationRetraite()
     *
     * @return void
     */
    public function testSetMtCotisationRetraite(): void {

        $obj = new InfosComplBul();

        $obj->setMtCotisationRetraite(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCotisationRetraite());
    }

    /**
     * Test setMtCrds100()
     *
     * @return void
     */
    public function testSetMtCrds100(): void {

        $obj = new InfosComplBul();

        $obj->setMtCrds100(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCrds100());
    }

    /**
     * Test setMtCsg100()
     *
     * @return void
     */
    public function testSetMtCsg100(): void {

        $obj = new InfosComplBul();

        $obj->setMtCsg100(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCsg100());
    }

    /**
     * Test setMtFiscFraisSante()
     *
     * @return void
     */
    public function testSetMtFiscFraisSante(): void {

        $obj = new InfosComplBul();

        $obj->setMtFiscFraisSante(10.092018);
        $this->assertEquals(10.092018, $obj->getMtFiscFraisSante());
    }

    /**
     * Test setMtFiscPrev()
     *
     * @return void
     */
    public function testSetMtFiscPrev(): void {

        $obj = new InfosComplBul();

        $obj->setMtFiscPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getMtFiscPrev());
    }

    /**
     * Test setMtFiscRetraite()
     *
     * @return void
     */
    public function testSetMtFiscRetraite(): void {

        $obj = new InfosComplBul();

        $obj->setMtFiscRetraite(10.092018);
        $this->assertEquals(10.092018, $obj->getMtFiscRetraite());
    }

    /**
     * Test setMtForfaitSocial20()
     *
     * @return void
     */
    public function testSetMtForfaitSocial20(): void {

        $obj = new InfosComplBul();

        $obj->setMtForfaitSocial20(10.092018);
        $this->assertEquals(10.092018, $obj->getMtForfaitSocial20());
    }

    /**
     * Test setMtForfaitSocial8()
     *
     * @return void
     */
    public function testSetMtForfaitSocial8(): void {

        $obj = new InfosComplBul();

        $obj->setMtForfaitSocial8(10.092018);
        $this->assertEquals(10.092018, $obj->getMtForfaitSocial8());
    }

    /**
     * Test setMtIap()
     *
     * @return void
     */
    public function testSetMtIap(): void {

        $obj = new InfosComplBul();

        $obj->setMtIap(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIap());
    }

    /**
     * Test setMtJourneeCpn()
     *
     * @return void
     */
    public function testSetMtJourneeCpn(): void {

        $obj = new InfosComplBul();

        $obj->setMtJourneeCpn(10.092018);
        $this->assertEquals(10.092018, $obj->getMtJourneeCpn());
    }

    /**
     * Test setMtJourneeCpn1()
     *
     * @return void
     */
    public function testSetMtJourneeCpn1(): void {

        $obj = new InfosComplBul();

        $obj->setMtJourneeCpn1(10.092018);
        $this->assertEquals(10.092018, $obj->getMtJourneeCpn1());
    }

    /**
     * Test setMultiEmployeur()
     *
     * @return void
     */
    public function testSetMultiEmployeur(): void {

        $obj = new InfosComplBul();

        $obj->setMultiEmployeur(true);
        $this->assertTrue($obj->getMultiEmployeur());
    }

    /**
     * Test setNatureAnalytique()
     *
     * @return void
     */
    public function testSetNatureAnalytique(): void {

        $obj = new InfosComplBul();

        $obj->setNatureAnalytique("natureAnalytique");
        $this->assertEquals("natureAnalytique", $obj->getNatureAnalytique());
    }

    /**
     * Test setNb30RenouvCdd()
     *
     * @return void
     */
    public function testSetNb30RenouvCdd(): void {

        $obj = new InfosComplBul();

        $obj->setNb30RenouvCdd(10);
        $this->assertEquals(10, $obj->getNb30RenouvCdd());
    }

    /**
     * Test setNbHActPart()
     *
     * @return void
     */
    public function testSetNbHActPart(): void {

        $obj = new InfosComplBul();

        $obj->setNbHActPart(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHActPart());
    }

    /**
     * Test setNbHActPartIndem()
     *
     * @return void
     */
    public function testSetNbHActPartIndem(): void {

        $obj = new InfosComplBul();

        $obj->setNbHActPartIndem(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHActPartIndem());
    }

    /**
     * Test setNbHBonifie()
     *
     * @return void
     */
    public function testSetNbHBonifie(): void {

        $obj = new InfosComplBul();

        $obj->setNbHBonifie(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHBonifie());
    }

    /**
     * Test setNbHContingent()
     *
     * @return void
     */
    public function testSetNbHContingent(): void {

        $obj = new InfosComplBul();

        $obj->setNbHContingent(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHContingent());
    }

    /**
     * Test setNbHContract()
     *
     * @return void
     */
    public function testSetNbHContract(): void {

        $obj = new InfosComplBul();

        $obj->setNbHContract(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHContract());
    }

    /**
     * Test setNbHeureMois()
     *
     * @return void
     */
    public function testSetNbHeureMois(): void {

        $obj = new InfosComplBul();

        $obj->setNbHeureMois(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureMois());
    }

    /**
     * Test setNbJourAnnee()
     *
     * @return void
     */
    public function testSetNbJourAnnee(): void {

        $obj = new InfosComplBul();

        $obj->setNbJourAnnee(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourAnnee());
    }

    /**
     * Test setNbJourCpAcquis()
     *
     * @return void
     */
    public function testSetNbJourCpAcquis(): void {

        $obj = new InfosComplBul();

        $obj->setNbJourCpAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpAcquis());
    }

    /**
     * Test setNbJourCpSup()
     *
     * @return void
     */
    public function testSetNbJourCpSup(): void {

        $obj = new InfosComplBul();

        $obj->setNbJourCpSup(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpSup());
    }

    /**
     * Test setNbPieceLogement()
     *
     * @return void
     */
    public function testSetNbPieceLogement(): void {

        $obj = new InfosComplBul();

        $obj->setNbPieceLogement("nbPieceLogement");
        $this->assertEquals("nbPieceLogement", $obj->getNbPieceLogement());
    }

    /**
     * Test setNePasActiverPrimeAnnuelleProprete()
     *
     * @return void
     */
    public function testSetNePasActiverPrimeAnnuelleProprete(): void {

        $obj = new InfosComplBul();

        $obj->setNePasActiverPrimeAnnuelleProprete(true);
        $this->assertTrue($obj->getNePasActiverPrimeAnnuelleProprete());
    }

    /**
     * Test setNePasPublierWeb()
     *
     * @return void
     */
    public function testSetNePasPublierWeb(): void {

        $obj = new InfosComplBul();

        $obj->setNePasPublierWeb(true);
        $this->assertTrue($obj->getNePasPublierWeb());
    }

    /**
     * Test setNiveau()
     *
     * @return void
     */
    public function testSetNiveau(): void {

        $obj = new InfosComplBul();

        $obj->setNiveau("niveau");
        $this->assertEquals("niveau", $obj->getNiveau());
    }

    /**
     * Test setNiveauConventionCol()
     *
     * @return void
     */
    public function testSetNiveauConventionCol(): void {

        $obj = new InfosComplBul();

        $obj->setNiveauConventionCol("niveauConventionCol");
        $this->assertEquals("niveauConventionCol", $obj->getNiveauConventionCol());
    }

    /**
     * Test setNomMarital()
     *
     * @return void
     */
    public function testSetNomMarital(): void {

        $obj = new InfosComplBul();

        $obj->setNomMarital("nomMarital");
        $this->assertEquals("nomMarital", $obj->getNomMarital());
    }

    /**
     * Test setNomNaissance()
     *
     * @return void
     */
    public function testSetNomNaissance(): void {

        $obj = new InfosComplBul();

        $obj->setNomNaissance("nomNaissance");
        $this->assertEquals("nomNaissance", $obj->getNomNaissance());
    }

    /**
     * Test setNomVille()
     *
     * @return void
     */
    public function testSetNomVille(): void {

        $obj = new InfosComplBul();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Test setNomVoie()
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new InfosComplBul();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Test setNumEvenement()
     *
     * @return void
     */
    public function testSetNumEvenement(): void {

        $obj = new InfosComplBul();

        $obj->setNumEvenement(10);
        $this->assertEquals(10, $obj->getNumEvenement());
    }

    /**
     * Test setNumObjet()
     *
     * @return void
     */
    public function testSetNumObjet(): void {

        $obj = new InfosComplBul();

        $obj->setNumObjet("numObjet");
        $this->assertEquals("numObjet", $obj->getNumObjet());
    }

    /**
     * Test setNumVoie()
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new InfosComplBul();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Test setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new InfosComplBul();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Test setNumeroAbattementContratMsa()
     *
     * @return void
     */
    public function testSetNumeroAbattementContratMsa(): void {

        $obj = new InfosComplBul();

        $obj->setNumeroAbattementContratMsa(10);
        $this->assertEquals(10, $obj->getNumeroAbattementContratMsa());
    }

    /**
     * Test setNumeroContrat()
     *
     * @return void
     */
    public function testSetNumeroContrat(): void {

        $obj = new InfosComplBul();

        $obj->setNumeroContrat(10);
        $this->assertEquals(10, $obj->getNumeroContrat());
    }

    /**
     * Test setNumeroGrilleType()
     *
     * @return void
     */
    public function testSetNumeroGrilleType(): void {

        $obj = new InfosComplBul();

        $obj->setNumeroGrilleType(10);
        $this->assertEquals(10, $obj->getNumeroGrilleType());
    }

    /**
     * Test setPartPatronPrevForfaitSocial8()
     *
     * @return void
     */
    public function testSetPartPatronPrevForfaitSocial8(): void {

        $obj = new InfosComplBul();

        $obj->setPartPatronPrevForfaitSocial8(10.092018);
        $this->assertEquals(10.092018, $obj->getPartPatronPrevForfaitSocial8());
    }

    /**
     * Test setPasDeReintegration()
     *
     * @return void
     */
    public function testSetPasDeReintegration(): void {

        $obj = new InfosComplBul();

        $obj->setPasDeReintegration(true);
        $this->assertTrue($obj->getPasDeReintegration());
    }

    /**
     * Test setPasGestionDif()
     *
     * @return void
     */
    public function testSetPasGestionDif(): void {

        $obj = new InfosComplBul();

        $obj->setPasGestionDif(true);
        $this->assertTrue($obj->getPasGestionDif());
    }

    /**
     * Test setPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test setPosition()
     *
     * @return void
     */
    public function testSetPosition(): void {

        $obj = new InfosComplBul();

        $obj->setPosition("position");
        $this->assertEquals("position", $obj->getPosition());
    }

    /**
     * Test setPositionConventionCol()
     *
     * @return void
     */
    public function testSetPositionConventionCol(): void {

        $obj = new InfosComplBul();

        $obj->setPositionConventionCol("positionConventionCol");
        $this->assertEquals("positionConventionCol", $obj->getPositionConventionCol());
    }

    /**
     * Test setPourcentExo()
     *
     * @return void
     */
    public function testSetPourcentExo(): void {

        $obj = new InfosComplBul();

        $obj->setPourcentExo(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentExo());
    }

    /**
     * Test setPremDateEntree()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPremDateEntree(): void {

        // Set a Date/time mock.
        $premDateEntree = new DateTime("2018-09-10");

        $obj = new InfosComplBul();

        $obj->setPremDateEntree($premDateEntree);
        $this->assertSame($premDateEntree, $obj->getPremDateEntree());
    }

    /**
     * Test setPrenom()
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new InfosComplBul();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Test setPss1Force()
     *
     * @return void
     */
    public function testSetPss1Force(): void {

        $obj = new InfosComplBul();

        $obj->setPss1Force(true);
        $this->assertTrue($obj->getPss1Force());
    }

    /**
     * Test setQualification()
     *
     * @return void
     */
    public function testSetQualification(): void {

        $obj = new InfosComplBul();

        $obj->setQualification("qualification");
        $this->assertEquals("qualification", $obj->getQualification());
    }

    /**
     * Test setReductionFillon()
     *
     * @return void
     */
    public function testSetReductionFillon(): void {

        $obj = new InfosComplBul();

        $obj->setReductionFillon(true);
        $this->assertTrue($obj->getReductionFillon());
    }

    /**
     * Test setRegleCalcul()
     *
     * @return void
     */
    public function testSetRegleCalcul(): void {

        $obj = new InfosComplBul();

        $obj->setRegleCalcul("regleCalcul");
        $this->assertEquals("regleCalcul", $obj->getRegleCalcul());
    }

    /**
     * Test setRemunPartFillon()
     *
     * @return void
     */
    public function testSetRemunPartFillon(): void {

        $obj = new InfosComplBul();

        $obj->setRemunPartFillon(true);
        $this->assertTrue($obj->getRemunPartFillon());
    }

    /**
     * Test setRtt1()
     *
     * @return void
     */
    public function testSetRtt1(): void {

        $obj = new InfosComplBul();

        $obj->setRtt1(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt1());
    }

    /**
     * Test setRtt10()
     *
     * @return void
     */
    public function testSetRtt10(): void {

        $obj = new InfosComplBul();

        $obj->setRtt10(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt10());
    }

    /**
     * Test setRtt11()
     *
     * @return void
     */
    public function testSetRtt11(): void {

        $obj = new InfosComplBul();

        $obj->setRtt11(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt11());
    }

    /**
     * Test setRtt12()
     *
     * @return void
     */
    public function testSetRtt12(): void {

        $obj = new InfosComplBul();

        $obj->setRtt12(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt12());
    }

    /**
     * Test setRtt2()
     *
     * @return void
     */
    public function testSetRtt2(): void {

        $obj = new InfosComplBul();

        $obj->setRtt2(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt2());
    }

    /**
     * Test setRtt3()
     *
     * @return void
     */
    public function testSetRtt3(): void {

        $obj = new InfosComplBul();

        $obj->setRtt3(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt3());
    }

    /**
     * Test setRtt4()
     *
     * @return void
     */
    public function testSetRtt4(): void {

        $obj = new InfosComplBul();

        $obj->setRtt4(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt4());
    }

    /**
     * Test setRtt5()
     *
     * @return void
     */
    public function testSetRtt5(): void {

        $obj = new InfosComplBul();

        $obj->setRtt5(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt5());
    }

    /**
     * Test setRtt6()
     *
     * @return void
     */
    public function testSetRtt6(): void {

        $obj = new InfosComplBul();

        $obj->setRtt6(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt6());
    }

    /**
     * Test setRtt7()
     *
     * @return void
     */
    public function testSetRtt7(): void {

        $obj = new InfosComplBul();

        $obj->setRtt7(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt7());
    }

    /**
     * Test setRtt8()
     *
     * @return void
     */
    public function testSetRtt8(): void {

        $obj = new InfosComplBul();

        $obj->setRtt8(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt8());
    }

    /**
     * Test setRtt9()
     *
     * @return void
     */
    public function testSetRtt9(): void {

        $obj = new InfosComplBul();

        $obj->setRtt9(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt9());
    }

    /**
     * Test setSalaireBase()
     *
     * @return void
     */
    public function testSetSalaireBase(): void {

        $obj = new InfosComplBul();

        $obj->setSalaireBase(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireBase());
    }

    /**
     * Test setSalaireReference()
     *
     * @return void
     */
    public function testSetSalaireReference(): void {

        $obj = new InfosComplBul();

        $obj->setSalaireReference(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireReference());
    }

    /**
     * Test setSalaireRetabliDsn()
     *
     * @return void
     */
    public function testSetSalaireRetabliDsn(): void {

        $obj = new InfosComplBul();

        $obj->setSalaireRetabliDsn(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireRetabliDsn());
    }

    /**
     * Test setSalaireRetabliDsnForce()
     *
     * @return void
     */
    public function testSetSalaireRetabliDsnForce(): void {

        $obj = new InfosComplBul();

        $obj->setSalaireRetabliDsnForce(true);
        $this->assertTrue($obj->getSalaireRetabliDsnForce());
    }

    /**
     * Test setSansContrat()
     *
     * @return void
     */
    public function testSetSansContrat(): void {

        $obj = new InfosComplBul();

        $obj->setSansContrat(10);
        $this->assertEquals(10, $obj->getSansContrat());
    }

    /**
     * Test setService()
     *
     * @return void
     */
    public function testSetService(): void {

        $obj = new InfosComplBul();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Test setSetpFillon()
     *
     * @return void
     */
    public function testSetSetpFillon(): void {

        $obj = new InfosComplBul();

        $obj->setSetpFillon(10.092018);
        $this->assertEquals(10.092018, $obj->getSetpFillon());
    }

    /**
     * Test setSigneAf()
     *
     * @return void
     */
    public function testSetSigneAf(): void {

        $obj = new InfosComplBul();

        $obj->setSigneAf("signeAf");
        $this->assertEquals("signeAf", $obj->getSigneAf());
    }

    /**
     * Test setSiretLieuTrav()
     *
     * @return void
     */
    public function testSetSiretLieuTrav(): void {

        $obj = new InfosComplBul();

        $obj->setSiretLieuTrav("siretLieuTrav");
        $this->assertEquals("siretLieuTrav", $obj->getSiretLieuTrav());
    }

    /**
     * Test setSmicMFillonSansHs()
     *
     * @return void
     */
    public function testSetSmicMFillonSansHs(): void {

        $obj = new InfosComplBul();

        $obj->setSmicMFillonSansHs(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicMFillonSansHs());
    }

    /**
     * Test setSmicMaf()
     *
     * @return void
     */
    public function testSetSmicMaf(): void {

        $obj = new InfosComplBul();

        $obj->setSmicMaf(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicMaf());
    }

    /**
     * Test setSmicMcice()
     *
     * @return void
     */
    public function testSetSmicMcice(): void {

        $obj = new InfosComplBul();

        $obj->setSmicMcice(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicMcice());
    }

    /**
     * Test setSubrogation()
     *
     * @return void
     */
    public function testSetSubrogation(): void {

        $obj = new InfosComplBul();

        $obj->setSubrogation(true);
        $this->assertTrue($obj->getSubrogation());
    }

    /**
     * Test setTds59()
     *
     * @return void
     */
    public function testSetTds59(): void {

        $obj = new InfosComplBul();

        $obj->setTds59("tds59");
        $this->assertEquals("tds59", $obj->getTds59());
    }

    /**
     * Test setTds76()
     *
     * @return void
     */
    public function testSetTds76(): void {

        $obj = new InfosComplBul();

        $obj->setTds76("tds76");
        $this->assertEquals("tds76", $obj->getTds76());
    }

    /**
     * Test setTel1()
     *
     * @return void
     */
    public function testSetTel1(): void {

        $obj = new InfosComplBul();

        $obj->setTel1("tel1");
        $this->assertEquals("tel1", $obj->getTel1());
    }

    /**
     * Test setTel2()
     *
     * @return void
     */
    public function testSetTel2(): void {

        $obj = new InfosComplBul();

        $obj->setTel2("tel2");
        $this->assertEquals("tel2", $obj->getTel2());
    }

    /**
     * Test setTepaMoins20()
     *
     * @return void
     */
    public function testSetTepaMoins20(): void {

        $obj = new InfosComplBul();

        $obj->setTepaMoins20(true);
        $this->assertTrue($obj->getTepaMoins20());
    }

    /**
     * Test setTitre()
     *
     * @return void
     */
    public function testSetTitre(): void {

        $obj = new InfosComplBul();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Test setTotCotUrssaf()
     *
     * @return void
     */
    public function testSetTotCotUrssaf(): void {

        $obj = new InfosComplBul();

        $obj->setTotCotUrssaf(10.092018);
        $this->assertEquals(10.092018, $obj->getTotCotUrssaf());
    }

    /**
     * Test setTrD1Caisse1()
     *
     * @return void
     */
    public function testSetTrD1Caisse1(): void {

        $obj = new InfosComplBul();

        $obj->setTrD1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getTrD1Caisse1());
    }

    /**
     * Test setTrD1caisse2()
     *
     * @return void
     */
    public function testSetTrD1caisse2(): void {

        $obj = new InfosComplBul();

        $obj->setTrD1caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getTrD1caisse2());
    }

    /**
     * Test setTrD1caisse3()
     *
     * @return void
     */
    public function testSetTrD1caisse3(): void {

        $obj = new InfosComplBul();

        $obj->setTrD1caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getTrD1caisse3());
    }

    /**
     * Test setTrDCaisse1()
     *
     * @return void
     */
    public function testSetTrDCaisse1(): void {

        $obj = new InfosComplBul();

        $obj->setTrDCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getTrDCaisse1());
    }

    /**
     * Test setTrDcaisse2()
     *
     * @return void
     */
    public function testSetTrDcaisse2(): void {

        $obj = new InfosComplBul();

        $obj->setTrDcaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getTrDcaisse2());
    }

    /**
     * Test setTrDcaisse3()
     *
     * @return void
     */
    public function testSetTrDcaisse3(): void {

        $obj = new InfosComplBul();

        $obj->setTrDcaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getTrDcaisse3());
    }

    /**
     * Test setTrancheD()
     *
     * @return void
     */
    public function testSetTrancheD(): void {

        $obj = new InfosComplBul();

        $obj->setTrancheD(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheD());
    }

    /**
     * Test setTrancheD1()
     *
     * @return void
     */
    public function testSetTrancheD1(): void {

        $obj = new InfosComplBul();

        $obj->setTrancheD1(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheD1());
    }

    /**
     * Test setTypeChomCdd()
     *
     * @return void
     */
    public function testSetTypeChomCdd(): void {

        $obj = new InfosComplBul();

        $obj->setTypeChomCdd("typeChomCdd");
        $this->assertEquals("typeChomCdd", $obj->getTypeChomCdd());
    }

    /**
     * Test setTypeContrat()
     *
     * @return void
     */
    public function testSetTypeContrat(): void {

        $obj = new InfosComplBul();

        $obj->setTypeContrat("typeContrat");
        $this->assertEquals("typeContrat", $obj->getTypeContrat());
    }

    /**
     * Test setTypeExoLodeom()
     *
     * @return void
     */
    public function testSetTypeExoLodeom(): void {

        $obj = new InfosComplBul();

        $obj->setTypeExoLodeom("typeExoLodeom");
        $this->assertEquals("typeExoLodeom", $obj->getTypeExoLodeom());
    }

    /**
     * Test setTypeHeFillon()
     *
     * @return void
     */
    public function testSetTypeHeFillon(): void {

        $obj = new InfosComplBul();

        $obj->setTypeHeFillon("typeHeFillon");
        $this->assertEquals("typeHeFillon", $obj->getTypeHeFillon());
    }

    /**
     * Test setTypeMaintienSalaire()
     *
     * @return void
     */
    public function testSetTypeMaintienSalaire(): void {

        $obj = new InfosComplBul();

        $obj->setTypeMaintienSalaire("typeMaintienSalaire");
        $this->assertEquals("typeMaintienSalaire", $obj->getTypeMaintienSalaire());
    }

    /**
     * Test setTypeReductionFillon()
     *
     * @return void
     */
    public function testSetTypeReductionFillon(): void {

        $obj = new InfosComplBul();

        $obj->setTypeReductionFillon("typeReductionFillon");
        $this->assertEquals("typeReductionFillon", $obj->getTypeReductionFillon());
    }

    /**
     * Test setTypeReductionMayotte()
     *
     * @return void
     */
    public function testSetTypeReductionMayotte(): void {

        $obj = new InfosComplBul();

        $obj->setTypeReductionMayotte("typeReductionMayotte");
        $this->assertEquals("typeReductionMayotte", $obj->getTypeReductionMayotte());
    }

    /**
     * Test setTypeSaisieAbCp()
     *
     * @return void
     */
    public function testSetTypeSaisieAbCp(): void {

        $obj = new InfosComplBul();

        $obj->setTypeSaisieAbCp("typeSaisieAbCp");
        $this->assertEquals("typeSaisieAbCp", $obj->getTypeSaisieAbCp());
    }

    /**
     * Test setTypeSaisieChomIntemp()
     *
     * @return void
     */
    public function testSetTypeSaisieChomIntemp(): void {

        $obj = new InfosComplBul();

        $obj->setTypeSaisieChomIntemp("typeSaisieChomIntemp");
        $this->assertEquals("typeSaisieChomIntemp", $obj->getTypeSaisieChomIntemp());
    }

    /**
     * Test setVrpMulticarte()
     *
     * @return void
     */
    public function testSetVrpMulticarte(): void {

        $obj = new InfosComplBul();

        $obj->setVrpMulticarte(true);
        $this->assertTrue($obj->getVrpMulticarte());
    }

    /**
     * Test __construct()
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
