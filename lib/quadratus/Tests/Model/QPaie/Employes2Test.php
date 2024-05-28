<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\Employes2;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Employes2 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class Employes2Test extends AbstractTestCase {

    /**
     * Test setADeclarerCp()
     *
     * @return void
     */
    public function testSetADeclarerCp(): void {

        $obj = new Employes2();

        $obj->setADeclarerCp(true);
        $this->assertTrue($obj->getADeclarerCp());
    }

    /**
     * Test setActiveSalMinConv()
     *
     * @return void
     */
    public function testSetActiveSalMinConv(): void {

        $obj = new Employes2();

        $obj->setActiveSalMinConv(true);
        $this->assertTrue($obj->getActiveSalMinConv());
    }

    /**
     * Test setActiveSmic()
     *
     * @return void
     */
    public function testSetActiveSmic(): void {

        $obj = new Employes2();

        $obj->setActiveSmic(true);
        $this->assertTrue($obj->getActiveSmic());
    }

    /**
     * Test setAenLogement()
     *
     * @return void
     */
    public function testSetAenLogement(): void {

        $obj = new Employes2();

        $obj->setAenLogement(true);
        $this->assertTrue($obj->getAenLogement());
    }

    /**
     * Test setAllegParticulierEmp()
     *
     * @return void
     */
    public function testSetAllegParticulierEmp(): void {

        $obj = new Employes2();

        $obj->setAllegParticulierEmp("allegParticulierEmp");
        $this->assertEquals("allegParticulierEmp", $obj->getAllegParticulierEmp());
    }

    /**
     * Test setArbitrageAuto()
     *
     * @return void
     */
    public function testSetArbitrageAuto(): void {

        $obj = new Employes2();

        $obj->setArbitrageAuto("arbitrageAuto");
        $this->assertEquals("arbitrageAuto", $obj->getArbitrageAuto());
    }

    /**
     * Test setAutreAllegEmp()
     *
     * @return void
     */
    public function testSetAutreAllegEmp(): void {

        $obj = new Employes2();

        $obj->setAutreAllegEmp("autreAllegEmp");
        $this->assertEquals("autreAllegEmp", $obj->getAutreAllegEmp());
    }

    /**
     * Test setBic()
     *
     * @return void
     */
    public function testSetBic(): void {

        $obj = new Employes2();

        $obj->setBic("bic");
        $this->assertEquals("bic", $obj->getBic());
    }

    /**
     * Test setCaisseCp()
     *
     * @return void
     */
    public function testSetCaisseCp(): void {

        $obj = new Employes2();

        $obj->setCaisseCp("caisseCp");
        $this->assertEquals("caisseCp", $obj->getCaisseCp());
    }

    /**
     * Test setCentreAnalytique()
     *
     * @return void
     */
    public function testSetCentreAnalytique(): void {

        $obj = new Employes2();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Test setChefEquipe()
     *
     * @return void
     */
    public function testSetChefEquipe(): void {

        $obj = new Employes2();

        $obj->setChefEquipe(true);
        $this->assertTrue($obj->getChefEquipe());
    }

    /**
     * Test setCiePlus50()
     *
     * @return void
     */
    public function testSetCiePlus50(): void {

        $obj = new Employes2();

        $obj->setCiePlus50(true);
        $this->assertTrue($obj->getCiePlus50());
    }

    /**
     * Test setCodeAnalytiqueProprete()
     *
     * @return void
     */
    public function testSetCodeAnalytiqueProprete(): void {

        $obj = new Employes2();

        $obj->setCodeAnalytiqueProprete("codeAnalytiqueProprete");
        $this->assertEquals("codeAnalytiqueProprete", $obj->getCodeAnalytiqueProprete());
    }

    /**
     * Test setCodeEmpRemplace()
     *
     * @return void
     */
    public function testSetCodeEmpRemplace(): void {

        $obj = new Employes2();

        $obj->setCodeEmpRemplace("codeEmpRemplace");
        $this->assertEquals("codeEmpRemplace", $obj->getCodeEmpRemplace());
    }

    /**
     * Test setCodeInsee()
     *
     * @return void
     */
    public function testSetCodeInsee(): void {

        $obj = new Employes2();

        $obj->setCodeInsee("codeInsee");
        $this->assertEquals("codeInsee", $obj->getCodeInsee());
    }

    /**
     * Test setCodeMotifRupture1()
     *
     * @return void
     */
    public function testSetCodeMotifRupture1(): void {

        $obj = new Employes2();

        $obj->setCodeMotifRupture1("codeMotifRupture1");
        $this->assertEquals("codeMotifRupture1", $obj->getCodeMotifRupture1());
    }

    /**
     * Test setCodeMotifRupture2()
     *
     * @return void
     */
    public function testSetCodeMotifRupture2(): void {

        $obj = new Employes2();

        $obj->setCodeMotifRupture2("codeMotifRupture2");
        $this->assertEquals("codeMotifRupture2", $obj->getCodeMotifRupture2());
    }

    /**
     * Test setCodePaysResidence()
     *
     * @return void
     */
    public function testSetCodePaysResidence(): void {

        $obj = new Employes2();

        $obj->setCodePaysResidence("codePaysResidence");
        $this->assertEquals("codePaysResidence", $obj->getCodePaysResidence());
    }

    /**
     * Test setCodeTuteur()
     *
     * @return void
     */
    public function testSetCodeTuteur(): void {

        $obj = new Employes2();

        $obj->setCodeTuteur("codeTuteur");
        $this->assertEquals("codeTuteur", $obj->getCodeTuteur());
    }

    /**
     * Test setCoeffConvention()
     *
     * @return void
     */
    public function testSetCoeffConvention(): void {

        $obj = new Employes2();

        $obj->setCoeffConvention("coeffConvention");
        $this->assertEquals("coeffConvention", $obj->getCoeffConvention());
    }

    /**
     * Test setCommercial()
     *
     * @return void
     */
    public function testSetCommercial(): void {

        $obj = new Employes2();

        $obj->setCommercial(true);
        $this->assertTrue($obj->getCommercial());
    }

    /**
     * Test setComplementPcs()
     *
     * @return void
     */
    public function testSetComplementPcs(): void {

        $obj = new Employes2();

        $obj->setComplementPcs("complementPcs");
        $this->assertEquals("complementPcs", $obj->getComplementPcs());
    }

    /**
     * Test setConjointExploitant()
     *
     * @return void
     */
    public function testSetConjointExploitant(): void {

        $obj = new Employes2();

        $obj->setConjointExploitant(true);
        $this->assertTrue($obj->getConjointExploitant());
    }

    /**
     * Test setContratCne()
     *
     * @return void
     */
    public function testSetContratCne(): void {

        $obj = new Employes2();

        $obj->setContratCne(true);
        $this->assertTrue($obj->getContratCne());
    }

    /**
     * Test setCotisBasePenibilite()
     *
     * @return void
     */
    public function testSetCotisBasePenibilite(): void {

        $obj = new Employes2();

        $obj->setCotisBasePenibilite(true);
        $this->assertTrue($obj->getCotisBasePenibilite());
    }

    /**
     * Test setCritereTriAbsConges1()
     *
     * @return void
     */
    public function testSetCritereTriAbsConges1(): void {

        $obj = new Employes2();

        $obj->setCritereTriAbsConges1("critereTriAbsConges1");
        $this->assertEquals("critereTriAbsConges1", $obj->getCritereTriAbsConges1());
    }

    /**
     * Test setCritereTriAbsConges2()
     *
     * @return void
     */
    public function testSetCritereTriAbsConges2(): void {

        $obj = new Employes2();

        $obj->setCritereTriAbsConges2("critereTriAbsConges2");
        $this->assertEquals("critereTriAbsConges2", $obj->getCritereTriAbsConges2());
    }

    /**
     * Test setCritereTriAbsConges3()
     *
     * @return void
     */
    public function testSetCritereTriAbsConges3(): void {

        $obj = new Employes2();

        $obj->setCritereTriAbsConges3("critereTriAbsConges3");
        $this->assertEquals("critereTriAbsConges3", $obj->getCritereTriAbsConges3());
    }

    /**
     * Test setCumBaseTr2()
     *
     * @return void
     */
    public function testSetCumBaseTr2(): void {

        $obj = new Employes2();

        $obj->setCumBaseTr2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTr2());
    }

    /**
     * Test setCumBaseTrD()
     *
     * @return void
     */
    public function testSetCumBaseTrD(): void {

        $obj = new Employes2();

        $obj->setCumBaseTrD(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD());
    }

    /**
     * Test setCumBaseTrD1()
     *
     * @return void
     */
    public function testSetCumBaseTrD1(): void {

        $obj = new Employes2();

        $obj->setCumBaseTrD1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1());
    }

    /**
     * Test setCumBaseTrD1Caisse1()
     *
     * @return void
     */
    public function testSetCumBaseTrD1Caisse1(): void {

        $obj = new Employes2();

        $obj->setCumBaseTrD1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1Caisse1());
    }

    /**
     * Test setCumBaseTrD1Caisse2()
     *
     * @return void
     */
    public function testSetCumBaseTrD1Caisse2(): void {

        $obj = new Employes2();

        $obj->setCumBaseTrD1Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1Caisse2());
    }

    /**
     * Test setCumBaseTrD1Caisse3()
     *
     * @return void
     */
    public function testSetCumBaseTrD1Caisse3(): void {

        $obj = new Employes2();

        $obj->setCumBaseTrD1Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1Caisse3());
    }

    /**
     * Test setCumBaseTrDCaisse1()
     *
     * @return void
     */
    public function testSetCumBaseTrDCaisse1(): void {

        $obj = new Employes2();

        $obj->setCumBaseTrDCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrDCaisse1());
    }

    /**
     * Test setCumBaseTrDCaisse2()
     *
     * @return void
     */
    public function testSetCumBaseTrDCaisse2(): void {

        $obj = new Employes2();

        $obj->setCumBaseTrDCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrDCaisse2());
    }

    /**
     * Test setCumBaseTrDCaisse3()
     *
     * @return void
     */
    public function testSetCumBaseTrDCaisse3(): void {

        $obj = new Employes2();

        $obj->setCumBaseTrDCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrDCaisse3());
    }

    /**
     * Test setCumBrutAlSansSi()
     *
     * @return void
     */
    public function testSetCumBrutAlSansSi(): void {

        $obj = new Employes2();

        $obj->setCumBrutAlSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAlSansSi());
    }

    /**
     * Test setCumBrutCaisse1()
     *
     * @return void
     */
    public function testSetCumBrutCaisse1(): void {

        $obj = new Employes2();

        $obj->setCumBrutCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse1());
    }

    /**
     * Test setCumBrutCaisse2()
     *
     * @return void
     */
    public function testSetCumBrutCaisse2(): void {

        $obj = new Employes2();

        $obj->setCumBrutCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse2());
    }

    /**
     * Test setCumBrutCaisse3()
     *
     * @return void
     */
    public function testSetCumBrutCaisse3(): void {

        $obj = new Employes2();

        $obj->setCumBrutCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse3());
    }

    /**
     * Test setCumDifDus()
     *
     * @return void
     */
    public function testSetCumDifDus(): void {

        $obj = new Employes2();

        $obj->setCumDifDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumDifDus());
    }

    /**
     * Test setCumDifDus1()
     *
     * @return void
     */
    public function testSetCumDifDus1(): void {

        $obj = new Employes2();

        $obj->setCumDifDus1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumDifDus1());
    }

    /**
     * Test setCumHBonifie()
     *
     * @return void
     */
    public function testSetCumHBonifie(): void {

        $obj = new Employes2();

        $obj->setCumHBonifie(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHBonifie());
    }

    /**
     * Test setCumRttDus()
     *
     * @return void
     */
    public function testSetCumRttDus(): void {

        $obj = new Employes2();

        $obj->setCumRttDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumRttDus());
    }

    /**
     * Test setCumRttPris()
     *
     * @return void
     */
    public function testSetCumRttPris(): void {

        $obj = new Employes2();

        $obj->setCumRttPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumRttPris());
    }

    /**
     * Test setCumTotSi()
     *
     * @return void
     */
    public function testSetCumTotSi(): void {

        $obj = new Employes2();

        $obj->setCumTotSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTotSi());
    }

    /**
     * Test setCumTranche2SansSi()
     *
     * @return void
     */
    public function testSetCumTranche2SansSi(): void {

        $obj = new Employes2();

        $obj->setCumTranche2SansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2SansSi());
    }

    /**
     * Test setCumTranche2Si()
     *
     * @return void
     */
    public function testSetCumTranche2Si(): void {

        $obj = new Employes2();

        $obj->setCumTranche2Si(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2Si());
    }

    /**
     * Test setCumTrancheASansSi()
     *
     * @return void
     */
    public function testSetCumTrancheASansSi(): void {

        $obj = new Employes2();

        $obj->setCumTrancheASansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheASansSi());
    }

    /**
     * Test setCumTrancheAsi()
     *
     * @return void
     */
    public function testSetCumTrancheAsi(): void {

        $obj = new Employes2();

        $obj->setCumTrancheAsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheAsi());
    }

    /**
     * Test setCumTrancheBSansSi()
     *
     * @return void
     */
    public function testSetCumTrancheBSansSi(): void {

        $obj = new Employes2();

        $obj->setCumTrancheBSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheBSansSi());
    }

    /**
     * Test setCumTrancheBsi()
     *
     * @return void
     */
    public function testSetCumTrancheBsi(): void {

        $obj = new Employes2();

        $obj->setCumTrancheBsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheBsi());
    }

    /**
     * Test setCumTrancheCSansSi()
     *
     * @return void
     */
    public function testSetCumTrancheCSansSi(): void {

        $obj = new Employes2();

        $obj->setCumTrancheCSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheCSansSi());
    }

    /**
     * Test setCumTrancheCsi()
     *
     * @return void
     */
    public function testSetCumTrancheCsi(): void {

        $obj = new Employes2();

        $obj->setCumTrancheCsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheCsi());
    }

    /**
     * Test setCumTrancheD1SansSi()
     *
     * @return void
     */
    public function testSetCumTrancheD1SansSi(): void {

        $obj = new Employes2();

        $obj->setCumTrancheD1SansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheD1SansSi());
    }

    /**
     * Test setCumTrancheDSansSi()
     *
     * @return void
     */
    public function testSetCumTrancheDSansSi(): void {

        $obj = new Employes2();

        $obj->setCumTrancheDSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheDSansSi());
    }

    /**
     * Test setDadsuConjointSalarie()
     *
     * @return void
     */
    public function testSetDadsuConjointSalarie(): void {

        $obj = new Employes2();

        $obj->setDadsuConjointSalarie("dadsuConjointSalarie");
        $this->assertEquals("dadsuConjointSalarie", $obj->getDadsuConjointSalarie());
    }

    /**
     * Test setDateCreation()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new Employes2();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Test setDateFinExclureLfr2012()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFinExclureLfr2012(): void {

        // Set a Date/time mock.
        $dateFinExclureLfr2012 = new DateTime("2018-09-10");

        $obj = new Employes2();

        $obj->setDateFinExclureLfr2012($dateFinExclureLfr2012);
        $this->assertSame($dateFinExclureLfr2012, $obj->getDateFinExclureLfr2012());
    }

    /**
     * Test setDateFinPortabilite()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFinPortabilite(): void {

        // Set a Date/time mock.
        $dateFinPortabilite = new DateTime("2018-09-10");

        $obj = new Employes2();

        $obj->setDateFinPortabilite($dateFinPortabilite);
        $this->assertSame($dateFinPortabilite, $obj->getDateFinPortabilite());
    }

    /**
     * Test setDatePassageCdi()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDatePassageCdi(): void {

        // Set a Date/time mock.
        $datePassageCdi = new DateTime("2018-09-10");

        $obj = new Employes2();

        $obj->setDatePassageCdi($datePassageCdi);
        $this->assertSame($datePassageCdi, $obj->getDatePassageCdi());
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

        $obj = new Employes2();

        $obj->setDateRenouvCdd($dateRenouvCdd);
        $this->assertSame($dateRenouvCdd, $obj->getDateRenouvCdd());
    }

    /**
     * Test setDeductionAnc()
     *
     * @return void
     */
    public function testSetDeductionAnc(): void {

        $obj = new Employes2();

        $obj->setDeductionAnc(10);
        $this->assertEquals(10, $obj->getDeductionAnc());
    }

    /**
     * Test setEchelon()
     *
     * @return void
     */
    public function testSetEchelon(): void {

        $obj = new Employes2();

        $obj->setEchelon("echelon");
        $this->assertEquals("echelon", $obj->getEchelon());
    }

    /**
     * Test setEdHSupBonifQueMajo()
     *
     * @return void
     */
    public function testSetEdHSupBonifQueMajo(): void {

        $obj = new Employes2();

        $obj->setEdHSupBonifQueMajo("edHSupBonifQueMajo");
        $this->assertEquals("edHSupBonifQueMajo", $obj->getEdHSupBonifQueMajo());
    }

    /**
     * Test setEmail()
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new Employes2();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Test setEtatIPaie()
     *
     * @return void
     */
    public function testSetEtatIPaie(): void {

        $obj = new Employes2();

        $obj->setEtatIPaie("etatIPaie");
        $this->assertEquals("etatIPaie", $obj->getEtatIPaie());
    }

    /**
     * Test setExclureChomCdd()
     *
     * @return void
     */
    public function testSetExclureChomCdd(): void {

        $obj = new Employes2();

        $obj->setExclureChomCdd(true);
        $this->assertTrue($obj->getExclureChomCdd());
    }

    /**
     * Test setExclureCice()
     *
     * @return void
     */
    public function testSetExclureCice(): void {

        $obj = new Employes2();

        $obj->setExclureCice(true);
        $this->assertTrue($obj->getExclureCice());
    }

    /**
     * Test setExclureCospar()
     *
     * @return void
     */
    public function testSetExclureCospar(): void {

        $obj = new Employes2();

        $obj->setExclureCospar(true);
        $this->assertTrue($obj->getExclureCospar());
    }

    /**
     * Test setExclureCotAssedicParUrssaf()
     *
     * @return void
     */
    public function testSetExclureCotAssedicParUrssaf(): void {

        $obj = new Employes2();

        $obj->setExclureCotAssedicParUrssaf(true);
        $this->assertTrue($obj->getExclureCotAssedicParUrssaf());
    }

    /**
     * Test setExclureDas()
     *
     * @return void
     */
    public function testSetExclureDas(): void {

        $obj = new Employes2();

        $obj->setExclureDas(true);
        $this->assertTrue($obj->getExclureDas());
    }

    /**
     * Test setExclureDsn()
     *
     * @return void
     */
    public function testSetExclureDsn(): void {

        $obj = new Employes2();

        $obj->setExclureDsn(true);
        $this->assertTrue($obj->getExclureDsn());
    }

    /**
     * Test setExclureLfr2012()
     *
     * @return void
     */
    public function testSetExclureLfr2012(): void {

        $obj = new Employes2();

        $obj->setExclureLfr2012("exclureLfr2012");
        $this->assertEquals("exclureLfr2012", $obj->getExclureLfr2012());
    }

    /**
     * Test setExclureLoiTepa()
     *
     * @return void
     */
    public function testSetExclureLoiTepa(): void {

        $obj = new Employes2();

        $obj->setExclureLoiTepa(true);
        $this->assertTrue($obj->getExclureLoiTepa());
    }

    /**
     * Test setExclureLoiTepaPartP()
     *
     * @return void
     */
    public function testSetExclureLoiTepaPartP(): void {

        $obj = new Employes2();

        $obj->setExclureLoiTepaPartP(true);
        $this->assertTrue($obj->getExclureLoiTepaPartP());
    }

    /**
     * Test setExclureLoiTepaPartS()
     *
     * @return void
     */
    public function testSetExclureLoiTepaPartS(): void {

        $obj = new Employes2();

        $obj->setExclureLoiTepaPartS(true);
        $this->assertTrue($obj->getExclureLoiTepaPartS());
    }

    /**
     * Test setExclureQgc()
     *
     * @return void
     */
    public function testSetExclureQgc(): void {

        $obj = new Employes2();

        $obj->setExclureQgc(true);
        $this->assertTrue($obj->getExclureQgc());
    }

    /**
     * Test setExoAccre17()
     *
     * @return void
     */
    public function testSetExoAccre17(): void {

        $obj = new Employes2();

        $obj->setExoAccre17(true);
        $this->assertTrue($obj->getExoAccre17());
    }

    /**
     * Test setExoAgff()
     *
     * @return void
     */
    public function testSetExoAgff(): void {

        $obj = new Employes2();

        $obj->setExoAgff(true);
        $this->assertTrue($obj->getExoAgff());
    }

    /**
     * Test setExoOccasionnelMsa()
     *
     * @return void
     */
    public function testSetExoOccasionnelMsa(): void {

        $obj = new Employes2();

        $obj->setExoOccasionnelMsa(true);
        $this->assertTrue($obj->getExoOccasionnelMsa());
    }

    /**
     * Test setExoProfessionnalisation()
     *
     * @return void
     */
    public function testSetExoProfessionnalisation(): void {

        $obj = new Employes2();

        $obj->setExoProfessionnalisation(true);
        $this->assertTrue($obj->getExoProfessionnalisation());
    }

    /**
     * Test setExoSpecif()
     *
     * @return void
     */
    public function testSetExoSpecif(): void {

        $obj = new Employes2();

        $obj->setExoSpecif(true);
        $this->assertTrue($obj->getExoSpecif());
    }

    /**
     * Test setForfaitHeure()
     *
     * @return void
     */
    public function testSetForfaitHeure(): void {

        $obj = new Employes2();

        $obj->setForfaitHeure(true);
        $this->assertTrue($obj->getForfaitHeure());
    }

    /**
     * Test setForfaitJour()
     *
     * @return void
     */
    public function testSetForfaitJour(): void {

        $obj = new Employes2();

        $obj->setForfaitJour(true);
        $this->assertTrue($obj->getForfaitJour());
    }

    /**
     * Test setGestionCompteurHCompleter()
     *
     * @return void
     */
    public function testSetGestionCompteurHCompleter(): void {

        $obj = new Employes2();

        $obj->setGestionCompteurHCompleter(true);
        $this->assertTrue($obj->getGestionCompteurHCompleter());
    }

    /**
     * Test setGestionCp()
     *
     * @return void
     */
    public function testSetGestionCp(): void {

        $obj = new Employes2();

        $obj->setGestionCp("gestionCp");
        $this->assertEquals("gestionCp", $obj->getGestionCp());
    }

    /**
     * Test setGestionMailBulletin()
     *
     * @return void
     */
    public function testSetGestionMailBulletin(): void {

        $obj = new Employes2();

        $obj->setGestionMailBulletin(true);
        $this->assertTrue($obj->getGestionMailBulletin());
    }

    /**
     * Test setGestionReposComp()
     *
     * @return void
     */
    public function testSetGestionReposComp(): void {

        $obj = new Employes2();

        $obj->setGestionReposComp("gestionReposComp");
        $this->assertEquals("gestionReposComp", $obj->getGestionReposComp());
    }

    /**
     * Test setGestionReposRecup()
     *
     * @return void
     */
    public function testSetGestionReposRecup(): void {

        $obj = new Employes2();

        $obj->setGestionReposRecup("gestionReposRecup");
        $this->assertEquals("gestionReposRecup", $obj->getGestionReposRecup());
    }

    /**
     * Test setGestionReposRemplace()
     *
     * @return void
     */
    public function testSetGestionReposRemplace(): void {

        $obj = new Employes2();

        $obj->setGestionReposRemplace("gestionReposRemplace");
        $this->assertEquals("gestionReposRemplace", $obj->getGestionReposRemplace());
    }

    /**
     * Test setGestionRtt()
     *
     * @return void
     */
    public function testSetGestionRtt(): void {

        $obj = new Employes2();

        $obj->setGestionRtt("gestionRtt");
        $this->assertEquals("gestionRtt", $obj->getGestionRtt());
    }

    /**
     * Test setGestionSemType()
     *
     * @return void
     */
    public function testSetGestionSemType(): void {

        $obj = new Employes2();

        $obj->setGestionSemType("gestionSemType");
        $this->assertEquals("gestionSemType", $obj->getGestionSemType());
    }

    /**
     * Test setHeuresPeriodeInitial()
     *
     * @return void
     */
    public function testSetHeuresPeriodeInitial(): void {

        $obj = new Employes2();

        $obj->setHeuresPeriodeInitial(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresPeriodeInitial());
    }

    /**
     * Test setIban()
     *
     * @return void
     */
    public function testSetIban(): void {

        $obj = new Employes2();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Test setIndemCpMsa()
     *
     * @return void
     */
    public function testSetIndemCpMsa(): void {

        $obj = new Employes2();

        $obj->setIndemCpMsa(true);
        $this->assertTrue($obj->getIndemCpMsa());
    }

    /**
     * Test setIndiceCateg()
     *
     * @return void
     */
    public function testSetIndiceCateg(): void {

        $obj = new Employes2();

        $obj->setIndiceCateg(10);
        $this->assertEquals(10, $obj->getIndiceCateg());
    }

    /**
     * Test setInspecteur()
     *
     * @return void
     */
    public function testSetInspecteur(): void {

        $obj = new Employes2();

        $obj->setInspecteur(true);
        $this->assertTrue($obj->getInspecteur());
    }

    /**
     * Test setInterimIndemCpFillon()
     *
     * @return void
     */
    public function testSetInterimIndemCpFillon(): void {

        $obj = new Employes2();

        $obj->setInterimIndemCpFillon(true);
        $this->assertTrue($obj->getInterimIndemCpFillon());
    }

    /**
     * Test setMailBulletinPwd()
     *
     * @return void
     */
    public function testSetMailBulletinPwd(): void {

        $obj = new Employes2();

        $obj->setMailBulletinPwd("mailBulletinPwd");
        $this->assertEquals("mailBulletinPwd", $obj->getMailBulletinPwd());
    }

    /**
     * Test setMaintienIntervientCp()
     *
     * @return void
     */
    public function testSetMaintienIntervientCp(): void {

        $obj = new Employes2();

        $obj->setMaintienIntervientCp("maintienIntervientCp");
        $this->assertEquals("maintienIntervientCp", $obj->getMaintienIntervientCp());
    }

    /**
     * Test setMaintienNetDeducCsgijss()
     *
     * @return void
     */
    public function testSetMaintienNetDeducCsgijss(): void {

        $obj = new Employes2();

        $obj->setMaintienNetDeducCsgijss(true);
        $this->assertTrue($obj->getMaintienNetDeducCsgijss());
    }

    /**
     * Test setMaintienSalaire()
     *
     * @return void
     */
    public function testSetMaintienSalaire(): void {

        $obj = new Employes2();

        $obj->setMaintienSalaire("maintienSalaire");
        $this->assertEquals("maintienSalaire", $obj->getMaintienSalaire());
    }

    /**
     * Test setMaintienSpecifique()
     *
     * @return void
     */
    public function testSetMaintienSpecifique(): void {

        $obj = new Employes2();

        $obj->setMaintienSpecifique(true);
        $this->assertTrue($obj->getMaintienSpecifique());
    }

    /**
     * Test setMajoProfessionnalisation()
     *
     * @return void
     */
    public function testSetMajoProfessionnalisation(): void {

        $obj = new Employes2();

        $obj->setMajoProfessionnalisation(true);
        $this->assertTrue($obj->getMajoProfessionnalisation());
    }

    /**
     * Test setMandataireSocial()
     *
     * @return void
     */
    public function testSetMandataireSocial(): void {

        $obj = new Employes2();

        $obj->setMandataireSocial(true);
        $this->assertTrue($obj->getMandataireSocial());
    }

    /**
     * Test setModeleBulletin()
     *
     * @return void
     */
    public function testSetModeleBulletin(): void {

        $obj = new Employes2();

        $obj->setModeleBulletin("modeleBulletin");
        $this->assertEquals("modeleBulletin", $obj->getModeleBulletin());
    }

    /**
     * Test setMoisClotureDif()
     *
     * @return void
     */
    public function testSetMoisClotureDif(): void {

        $obj = new Employes2();

        $obj->setMoisClotureDif("moisClotureDif");
        $this->assertEquals("moisClotureDif", $obj->getMoisClotureDif());
    }

    /**
     * Test setMotifCdd()
     *
     * @return void
     */
    public function testSetMotifCdd(): void {

        $obj = new Employes2();

        $obj->setMotifCdd("motifCdd");
        $this->assertEquals("motifCdd", $obj->getMotifCdd());
    }

    /**
     * Test setMotifExclusionDsn()
     *
     * @return void
     */
    public function testSetMotifExclusionDsn(): void {

        $obj = new Employes2();

        $obj->setMotifExclusionDsn("motifExclusionDsn");
        $this->assertEquals("motifExclusionDsn", $obj->getMotifExclusionDsn());
    }

    /**
     * Test setMultiEmployeur()
     *
     * @return void
     */
    public function testSetMultiEmployeur(): void {

        $obj = new Employes2();

        $obj->setMultiEmployeur(true);
        $this->assertTrue($obj->getMultiEmployeur());
    }

    /**
     * Test setNatureAnalytique()
     *
     * @return void
     */
    public function testSetNatureAnalytique(): void {

        $obj = new Employes2();

        $obj->setNatureAnalytique("natureAnalytique");
        $this->assertEquals("natureAnalytique", $obj->getNatureAnalytique());
    }

    /**
     * Test setNbHBonifie()
     *
     * @return void
     */
    public function testSetNbHBonifie(): void {

        $obj = new Employes2();

        $obj->setNbHBonifie(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHBonifie());
    }

    /**
     * Test setNbHContingent()
     *
     * @return void
     */
    public function testSetNbHContingent(): void {

        $obj = new Employes2();

        $obj->setNbHContingent(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHContingent());
    }

    /**
     * Test setNbHJour1()
     *
     * @return void
     */
    public function testSetNbHJour1(): void {

        $obj = new Employes2();

        $obj->setNbHJour1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour1());
    }

    /**
     * Test setNbHJour2()
     *
     * @return void
     */
    public function testSetNbHJour2(): void {

        $obj = new Employes2();

        $obj->setNbHJour2(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour2());
    }

    /**
     * Test setNbHJour3()
     *
     * @return void
     */
    public function testSetNbHJour3(): void {

        $obj = new Employes2();

        $obj->setNbHJour3(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour3());
    }

    /**
     * Test setNbHJour4()
     *
     * @return void
     */
    public function testSetNbHJour4(): void {

        $obj = new Employes2();

        $obj->setNbHJour4(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour4());
    }

    /**
     * Test setNbHJour5()
     *
     * @return void
     */
    public function testSetNbHJour5(): void {

        $obj = new Employes2();

        $obj->setNbHJour5(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour5());
    }

    /**
     * Test setNbHJour6()
     *
     * @return void
     */
    public function testSetNbHJour6(): void {

        $obj = new Employes2();

        $obj->setNbHJour6(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour6());
    }

    /**
     * Test setNbHJour7()
     *
     * @return void
     */
    public function testSetNbHJour7(): void {

        $obj = new Employes2();

        $obj->setNbHJour7(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour7());
    }

    /**
     * Test setNbJourAnnee()
     *
     * @return void
     */
    public function testSetNbJourAnnee(): void {

        $obj = new Employes2();

        $obj->setNbJourAnnee(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourAnnee());
    }

    /**
     * Test setNbJourCpAcquis()
     *
     * @return void
     */
    public function testSetNbJourCpAcquis(): void {

        $obj = new Employes2();

        $obj->setNbJourCpAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpAcquis());
    }

    /**
     * Test setNbJourCpSup()
     *
     * @return void
     */
    public function testSetNbJourCpSup(): void {

        $obj = new Employes2();

        $obj->setNbJourCpSup(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpSup());
    }

    /**
     * Test setNbPieceLogement()
     *
     * @return void
     */
    public function testSetNbPieceLogement(): void {

        $obj = new Employes2();

        $obj->setNbPieceLogement("nbPieceLogement");
        $this->assertEquals("nbPieceLogement", $obj->getNbPieceLogement());
    }

    /**
     * Test setNePasActiverPrimeAnnuelleProprete()
     *
     * @return void
     */
    public function testSetNePasActiverPrimeAnnuelleProprete(): void {

        $obj = new Employes2();

        $obj->setNePasActiverPrimeAnnuelleProprete(true);
        $this->assertTrue($obj->getNePasActiverPrimeAnnuelleProprete());
    }

    /**
     * Test setNiveau()
     *
     * @return void
     */
    public function testSetNiveau(): void {

        $obj = new Employes2();

        $obj->setNiveau("niveau");
        $this->assertEquals("niveau", $obj->getNiveau());
    }

    /**
     * Test setNomVilleInsee()
     *
     * @return void
     */
    public function testSetNomVilleInsee(): void {

        $obj = new Employes2();

        $obj->setNomVilleInsee("nomVilleInsee");
        $this->assertEquals("nomVilleInsee", $obj->getNomVilleInsee());
    }

    /**
     * Test setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new Employes2();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Test setNumeroAbattementContratMsa()
     *
     * @return void
     */
    public function testSetNumeroAbattementContratMsa(): void {

        $obj = new Employes2();

        $obj->setNumeroAbattementContratMsa(10);
        $this->assertEquals(10, $obj->getNumeroAbattementContratMsa());
    }

    /**
     * Test setNumeroContrat()
     *
     * @return void
     */
    public function testSetNumeroContrat(): void {

        $obj = new Employes2();

        $obj->setNumeroContrat(10);
        $this->assertEquals(10, $obj->getNumeroContrat());
    }

    /**
     * Test setNumeroEmployeContrat()
     *
     * @return void
     */
    public function testSetNumeroEmployeContrat(): void {

        $obj = new Employes2();

        $obj->setNumeroEmployeContrat("numeroEmployeContrat");
        $this->assertEquals("numeroEmployeContrat", $obj->getNumeroEmployeContrat());
    }

    /**
     * Test setPasGestionDif()
     *
     * @return void
     */
    public function testSetPasGestionDif(): void {

        $obj = new Employes2();

        $obj->setPasGestionDif(true);
        $this->assertTrue($obj->getPasGestionDif());
    }

    /**
     * Test setPaysNaissance()
     *
     * @return void
     */
    public function testSetPaysNaissance(): void {

        $obj = new Employes2();

        $obj->setPaysNaissance("paysNaissance");
        $this->assertEquals("paysNaissance", $obj->getPaysNaissance());
    }

    /**
     * Test setPaysNat()
     *
     * @return void
     */
    public function testSetPaysNat(): void {

        $obj = new Employes2();

        $obj->setPaysNat("paysNat");
        $this->assertEquals("paysNat", $obj->getPaysNat());
    }

    /**
     * Test setPeriodePointageCloturee()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodePointageCloturee(): void {

        // Set a Date/time mock.
        $periodePointageCloturee = new DateTime("2018-09-10");

        $obj = new Employes2();

        $obj->setPeriodePointageCloturee($periodePointageCloturee);
        $this->assertSame($periodePointageCloturee, $obj->getPeriodePointageCloturee());
    }

    /**
     * Test setPosition()
     *
     * @return void
     */
    public function testSetPosition(): void {

        $obj = new Employes2();

        $obj->setPosition("position");
        $this->assertEquals("position", $obj->getPosition());
    }

    /**
     * Test setPourcentExo()
     *
     * @return void
     */
    public function testSetPourcentExo(): void {

        $obj = new Employes2();

        $obj->setPourcentExo(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentExo());
    }

    /**
     * Test setRbtNavigoNonProratise()
     *
     * @return void
     */
    public function testSetRbtNavigoNonProratise(): void {

        $obj = new Employes2();

        $obj->setRbtNavigoNonProratise(true);
        $this->assertTrue($obj->getRbtNavigoNonProratise());
    }

    /**
     * Test setReductionFillon()
     *
     * @return void
     */
    public function testSetReductionFillon(): void {

        $obj = new Employes2();

        $obj->setReductionFillon("reductionFillon");
        $this->assertEquals("reductionFillon", $obj->getReductionFillon());
    }

    /**
     * Test setReductionMayotte()
     *
     * @return void
     */
    public function testSetReductionMayotte(): void {

        $obj = new Employes2();

        $obj->setReductionMayotte("reductionMayotte");
        $this->assertEquals("reductionMayotte", $obj->getReductionMayotte());
    }

    /**
     * Test setRemunPartFillon()
     *
     * @return void
     */
    public function testSetRemunPartFillon(): void {

        $obj = new Employes2();

        $obj->setRemunPartFillon(true);
        $this->assertTrue($obj->getRemunPartFillon());
    }

    /**
     * Test setRtt1()
     *
     * @return void
     */
    public function testSetRtt1(): void {

        $obj = new Employes2();

        $obj->setRtt1(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt1());
    }

    /**
     * Test setRtt10()
     *
     * @return void
     */
    public function testSetRtt10(): void {

        $obj = new Employes2();

        $obj->setRtt10(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt10());
    }

    /**
     * Test setRtt11()
     *
     * @return void
     */
    public function testSetRtt11(): void {

        $obj = new Employes2();

        $obj->setRtt11(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt11());
    }

    /**
     * Test setRtt12()
     *
     * @return void
     */
    public function testSetRtt12(): void {

        $obj = new Employes2();

        $obj->setRtt12(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt12());
    }

    /**
     * Test setRtt2()
     *
     * @return void
     */
    public function testSetRtt2(): void {

        $obj = new Employes2();

        $obj->setRtt2(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt2());
    }

    /**
     * Test setRtt3()
     *
     * @return void
     */
    public function testSetRtt3(): void {

        $obj = new Employes2();

        $obj->setRtt3(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt3());
    }

    /**
     * Test setRtt4()
     *
     * @return void
     */
    public function testSetRtt4(): void {

        $obj = new Employes2();

        $obj->setRtt4(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt4());
    }

    /**
     * Test setRtt5()
     *
     * @return void
     */
    public function testSetRtt5(): void {

        $obj = new Employes2();

        $obj->setRtt5(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt5());
    }

    /**
     * Test setRtt6()
     *
     * @return void
     */
    public function testSetRtt6(): void {

        $obj = new Employes2();

        $obj->setRtt6(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt6());
    }

    /**
     * Test setRtt7()
     *
     * @return void
     */
    public function testSetRtt7(): void {

        $obj = new Employes2();

        $obj->setRtt7(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt7());
    }

    /**
     * Test setRtt8()
     *
     * @return void
     */
    public function testSetRtt8(): void {

        $obj = new Employes2();

        $obj->setRtt8(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt8());
    }

    /**
     * Test setRtt9()
     *
     * @return void
     */
    public function testSetRtt9(): void {

        $obj = new Employes2();

        $obj->setRtt9(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt9());
    }

    /**
     * Test setSansContrat()
     *
     * @return void
     */
    public function testSetSansContrat(): void {

        $obj = new Employes2();

        $obj->setSansContrat(10);
        $this->assertEquals(10, $obj->getSansContrat());
    }

    /**
     * Test setSubrogation()
     *
     * @return void
     */
    public function testSetSubrogation(): void {

        $obj = new Employes2();

        $obj->setSubrogation("subrogation");
        $this->assertEquals("subrogation", $obj->getSubrogation());
    }

    /**
     * Test setTds142()
     *
     * @return void
     */
    public function testSetTds142(): void {

        $obj = new Employes2();

        $obj->setTds142(10.092018);
        $this->assertEquals(10.092018, $obj->getTds142());
    }

    /**
     * Test setTdsAllocChom()
     *
     * @return void
     */
    public function testSetTdsAllocChom(): void {

        $obj = new Employes2();

        $obj->setTdsAllocChom(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsAllocChom());
    }

    /**
     * Test setTdsAllocRetraite()
     *
     * @return void
     */
    public function testSetTdsAllocRetraite(): void {

        $obj = new Employes2();

        $obj->setTdsAllocRetraite(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsAllocRetraite());
    }

    /**
     * Test setTel2()
     *
     * @return void
     */
    public function testSetTel2(): void {

        $obj = new Employes2();

        $obj->setTel2("tel2");
        $this->assertEquals("tel2", $obj->getTel2());
    }

    /**
     * Test setTravailleurDeNuit()
     *
     * @return void
     */
    public function testSetTravailleurDeNuit(): void {

        $obj = new Employes2();

        $obj->setTravailleurDeNuit(true);
        $this->assertTrue($obj->getTravailleurDeNuit());
    }

    /**
     * Test setTypeAboNavigo()
     *
     * @return void
     */
    public function testSetTypeAboNavigo(): void {

        $obj = new Employes2();

        $obj->setTypeAboNavigo("typeAboNavigo");
        $this->assertEquals("typeAboNavigo", $obj->getTypeAboNavigo());
    }

    /**
     * Test setTypeExoLodeom()
     *
     * @return void
     */
    public function testSetTypeExoLodeom(): void {

        $obj = new Employes2();

        $obj->setTypeExoLodeom("typeExoLodeom");
        $this->assertEquals("typeExoLodeom", $obj->getTypeExoLodeom());
    }

    /**
     * Test setTypeIntemperieBtp()
     *
     * @return void
     */
    public function testSetTypeIntemperieBtp(): void {

        $obj = new Employes2();

        $obj->setTypeIntemperieBtp("typeIntemperieBtp");
        $this->assertEquals("typeIntemperieBtp", $obj->getTypeIntemperieBtp());
    }

    /**
     * Test setTypeMaintienBrutNet()
     *
     * @return void
     */
    public function testSetTypeMaintienBrutNet(): void {

        $obj = new Employes2();

        $obj->setTypeMaintienBrutNet("typeMaintienBrutNet");
        $this->assertEquals("typeMaintienBrutNet", $obj->getTypeMaintienBrutNet());
    }

    /**
     * Test setTypeMaintienSalaire()
     *
     * @return void
     */
    public function testSetTypeMaintienSalaire(): void {

        $obj = new Employes2();

        $obj->setTypeMaintienSalaire("typeMaintienSalaire");
        $this->assertEquals("typeMaintienSalaire", $obj->getTypeMaintienSalaire());
    }

    /**
     * Test setTypeSaisieAbCp()
     *
     * @return void
     */
    public function testSetTypeSaisieAbCp(): void {

        $obj = new Employes2();

        $obj->setTypeSaisieAbCp("typeSaisieAbCp");
        $this->assertEquals("typeSaisieAbCp", $obj->getTypeSaisieAbCp());
    }

    /**
     * Test setZoneNavigo()
     *
     * @return void
     */
    public function testSetZoneNavigo(): void {

        $obj = new Employes2();

        $obj->setZoneNavigo("zoneNavigo");
        $this->assertEquals("zoneNavigo", $obj->getZoneNavigo());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Employes2();

        $this->assertNull($obj->getADeclarerCp());
        $this->assertNull($obj->getAenLogement());
        $this->assertNull($obj->getActiveSmic());
        $this->assertNull($obj->getActiveSalMinConv());
        $this->assertNull($obj->getAllegParticulierEmp());
        $this->assertNull($obj->getArbitrageAuto());
        $this->assertNull($obj->getAutreAllegEmp());
        $this->assertNull($obj->getBic());
        $this->assertNull($obj->getCaisseCp());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getChefEquipe());
        $this->assertNull($obj->getCiePlus50());
        $this->assertNull($obj->getCodeAnalytiqueProprete());
        $this->assertNull($obj->getCodeEmpRemplace());
        $this->assertNull($obj->getCodeInsee());
        $this->assertNull($obj->getCodeMotifRupture1());
        $this->assertNull($obj->getCodeMotifRupture2());
        $this->assertNull($obj->getCodePaysResidence());
        $this->assertNull($obj->getCodeTuteur());
        $this->assertNull($obj->getCoeffConvention());
        $this->assertNull($obj->getCommercial());
        $this->assertNull($obj->getComplementPcs());
        $this->assertNull($obj->getConjointExploitant());
        $this->assertNull($obj->getContratCne());
        $this->assertNull($obj->getCotisBasePenibilite());
        $this->assertNull($obj->getCritereTriAbsConges1());
        $this->assertNull($obj->getCritereTriAbsConges2());
        $this->assertNull($obj->getCritereTriAbsConges3());
        $this->assertNull($obj->getCumBaseTr2());
        $this->assertNull($obj->getCumBaseTrD());
        $this->assertNull($obj->getCumBaseTrD1());
        $this->assertNull($obj->getCumBaseTrD1Caisse1());
        $this->assertNull($obj->getCumBaseTrD1Caisse2());
        $this->assertNull($obj->getCumBaseTrD1Caisse3());
        $this->assertNull($obj->getCumBaseTrDCaisse1());
        $this->assertNull($obj->getCumBaseTrDCaisse2());
        $this->assertNull($obj->getCumBaseTrDCaisse3());
        $this->assertNull($obj->getCumBrutCaisse1());
        $this->assertNull($obj->getCumBrutCaisse2());
        $this->assertNull($obj->getCumBrutCaisse3());
        $this->assertNull($obj->getCumBrutAlSansSi());
        $this->assertNull($obj->getCumDifDus());
        $this->assertNull($obj->getCumDifDus1());
        $this->assertNull($obj->getCumHBonifie());
        $this->assertNull($obj->getCumRttDus());
        $this->assertNull($obj->getCumRttPris());
        $this->assertNull($obj->getCumTotSi());
        $this->assertNull($obj->getCumTranche2Si());
        $this->assertNull($obj->getCumTranche2SansSi());
        $this->assertNull($obj->getCumTrancheAsi());
        $this->assertNull($obj->getCumTrancheASansSi());
        $this->assertNull($obj->getCumTrancheBsi());
        $this->assertNull($obj->getCumTrancheBSansSi());
        $this->assertNull($obj->getCumTrancheCsi());
        $this->assertNull($obj->getCumTrancheCSansSi());
        $this->assertNull($obj->getCumTrancheD1SansSi());
        $this->assertNull($obj->getCumTrancheDSansSi());
        $this->assertNull($obj->getDadsuConjointSalarie());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateFinExclureLfr2012());
        $this->assertNull($obj->getDateFinPortabilite());
        $this->assertNull($obj->getDatePassageCdi());
        $this->assertNull($obj->getDateRenouvCdd());
        $this->assertNull($obj->getDeductionAnc());
        $this->assertNull($obj->getEchelon());
        $this->assertNull($obj->getEdHSupBonifQueMajo());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getEtatIPaie());
        $this->assertNull($obj->getExclureCice());
        $this->assertNull($obj->getExclureChomCdd());
        $this->assertNull($obj->getExclureCospar());
        $this->assertNull($obj->getExclureCotAssedicParUrssaf());
        $this->assertNull($obj->getExclureDas());
        $this->assertNull($obj->getExclureDsn());
        $this->assertNull($obj->getExclureLfr2012());
        $this->assertNull($obj->getExclureLoiTepa());
        $this->assertNull($obj->getExclureLoiTepaPartP());
        $this->assertNull($obj->getExclureLoiTepaPartS());
        $this->assertNull($obj->getExclureQgc());
        $this->assertNull($obj->getExoAccre17());
        $this->assertNull($obj->getExoAgff());
        $this->assertNull($obj->getExoOccasionnelMsa());
        $this->assertNull($obj->getExoProfessionnalisation());
        $this->assertNull($obj->getExoSpecif());
        $this->assertNull($obj->getForfaitHeure());
        $this->assertNull($obj->getForfaitJour());
        $this->assertNull($obj->getGestionCp());
        $this->assertNull($obj->getGestionCompteurHCompleter());
        $this->assertNull($obj->getGestionMailBulletin());
        $this->assertNull($obj->getGestionRtt());
        $this->assertNull($obj->getGestionReposComp());
        $this->assertNull($obj->getGestionReposRecup());
        $this->assertNull($obj->getGestionReposRemplace());
        $this->assertNull($obj->getGestionSemType());
        $this->assertNull($obj->getHeuresPeriodeInitial());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getIndemCpMsa());
        $this->assertNull($obj->getIndiceCateg());
        $this->assertNull($obj->getInspecteur());
        $this->assertNull($obj->getInterimIndemCpFillon());
        $this->assertNull($obj->getMailBulletinPwd());
        $this->assertNull($obj->getMaintienIntervientCp());
        $this->assertNull($obj->getMaintienNetDeducCsgijss());
        $this->assertNull($obj->getMaintienSalaire());
        $this->assertNull($obj->getMaintienSpecifique());
        $this->assertNull($obj->getMajoProfessionnalisation());
        $this->assertNull($obj->getMandataireSocial());
        $this->assertNull($obj->getModeleBulletin());
        $this->assertNull($obj->getMoisClotureDif());
        $this->assertNull($obj->getMotifCdd());
        $this->assertNull($obj->getMotifExclusionDsn());
        $this->assertNull($obj->getMultiEmployeur());
        $this->assertNull($obj->getNbJourCpAcquis());
        $this->assertNull($obj->getNbJourCpSup());
        $this->assertNull($obj->getNatureAnalytique());
        $this->assertNull($obj->getNbHBonifie());
        $this->assertNull($obj->getNbHContingent());
        $this->assertNull($obj->getNbHJour1());
        $this->assertNull($obj->getNbHJour2());
        $this->assertNull($obj->getNbHJour3());
        $this->assertNull($obj->getNbHJour4());
        $this->assertNull($obj->getNbHJour5());
        $this->assertNull($obj->getNbHJour6());
        $this->assertNull($obj->getNbHJour7());
        $this->assertNull($obj->getNbJourAnnee());
        $this->assertNull($obj->getNbPieceLogement());
        $this->assertNull($obj->getNePasActiverPrimeAnnuelleProprete());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getNomVilleInsee());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroAbattementContratMsa());
        $this->assertNull($obj->getNumeroContrat());
        $this->assertNull($obj->getNumeroEmployeContrat());
        $this->assertNull($obj->getPasGestionDif());
        $this->assertNull($obj->getPaysNaissance());
        $this->assertNull($obj->getPaysNat());
        $this->assertNull($obj->getPeriodePointageCloturee());
        $this->assertNull($obj->getPosition());
        $this->assertNull($obj->getPourcentExo());
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
        $this->assertNull($obj->getRbtNavigoNonProratise());
        $this->assertNull($obj->getReductionFillon());
        $this->assertNull($obj->getReductionMayotte());
        $this->assertNull($obj->getRemunPartFillon());
        $this->assertNull($obj->getSansContrat());
        $this->assertNull($obj->getSubrogation());
        $this->assertNull($obj->getTds142());
        $this->assertNull($obj->getTdsAllocChom());
        $this->assertNull($obj->getTdsAllocRetraite());
        $this->assertNull($obj->getTel2());
        $this->assertNull($obj->getTravailleurDeNuit());
        $this->assertNull($obj->getTypeAboNavigo());
        $this->assertNull($obj->getTypeExoLodeom());
        $this->assertNull($obj->getTypeIntemperieBtp());
        $this->assertNull($obj->getTypeMaintienBrutNet());
        $this->assertNull($obj->getTypeMaintienSalaire());
        $this->assertNull($obj->getTypeSaisieAbCp());
        $this->assertNull($obj->getZoneNavigo());
    }
}
