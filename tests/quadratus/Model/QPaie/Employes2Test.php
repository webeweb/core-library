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
     * Tests setADeclarerCp()
     *
     * @return void
     */
    public function testSetADeclarerCp(): void {

        $obj = new Employes2();

        $obj->setADeclarerCp(true);
        $this->assertEquals(true, $obj->getADeclarerCp());
    }

    /**
     * Tests setActiveSalMinConv()
     *
     * @return void
     */
    public function testSetActiveSalMinConv(): void {

        $obj = new Employes2();

        $obj->setActiveSalMinConv(true);
        $this->assertEquals(true, $obj->getActiveSalMinConv());
    }

    /**
     * Tests setActiveSmic()
     *
     * @return void
     */
    public function testSetActiveSmic(): void {

        $obj = new Employes2();

        $obj->setActiveSmic(true);
        $this->assertEquals(true, $obj->getActiveSmic());
    }

    /**
     * Tests setAenLogement()
     *
     * @return void
     */
    public function testSetAenLogement(): void {

        $obj = new Employes2();

        $obj->setAenLogement(true);
        $this->assertEquals(true, $obj->getAenLogement());
    }

    /**
     * Tests setAllegParticulierEmp()
     *
     * @return void
     */
    public function testSetAllegParticulierEmp(): void {

        $obj = new Employes2();

        $obj->setAllegParticulierEmp("allegParticulierEmp");
        $this->assertEquals("allegParticulierEmp", $obj->getAllegParticulierEmp());
    }

    /**
     * Tests setArbitrageAuto()
     *
     * @return void
     */
    public function testSetArbitrageAuto(): void {

        $obj = new Employes2();

        $obj->setArbitrageAuto("arbitrageAuto");
        $this->assertEquals("arbitrageAuto", $obj->getArbitrageAuto());
    }

    /**
     * Tests setAutreAllegEmp()
     *
     * @return void
     */
    public function testSetAutreAllegEmp(): void {

        $obj = new Employes2();

        $obj->setAutreAllegEmp("autreAllegEmp");
        $this->assertEquals("autreAllegEmp", $obj->getAutreAllegEmp());
    }

    /**
     * Tests setBic()
     *
     * @return void
     */
    public function testSetBic(): void {

        $obj = new Employes2();

        $obj->setBic("bic");
        $this->assertEquals("bic", $obj->getBic());
    }

    /**
     * Tests setCaisseCp()
     *
     * @return void
     */
    public function testSetCaisseCp(): void {

        $obj = new Employes2();

        $obj->setCaisseCp("caisseCp");
        $this->assertEquals("caisseCp", $obj->getCaisseCp());
    }

    /**
     * Tests setCentreAnalytique()
     *
     * @return void
     */
    public function testSetCentreAnalytique(): void {

        $obj = new Employes2();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Tests setChefEquipe()
     *
     * @return void
     */
    public function testSetChefEquipe(): void {

        $obj = new Employes2();

        $obj->setChefEquipe(true);
        $this->assertEquals(true, $obj->getChefEquipe());
    }

    /**
     * Tests setCiePlus50()
     *
     * @return void
     */
    public function testSetCiePlus50(): void {

        $obj = new Employes2();

        $obj->setCiePlus50(true);
        $this->assertEquals(true, $obj->getCiePlus50());
    }

    /**
     * Tests setCodeAnalytiqueProprete()
     *
     * @return void
     */
    public function testSetCodeAnalytiqueProprete(): void {

        $obj = new Employes2();

        $obj->setCodeAnalytiqueProprete("codeAnalytiqueProprete");
        $this->assertEquals("codeAnalytiqueProprete", $obj->getCodeAnalytiqueProprete());
    }

    /**
     * Tests setCodeEmpRemplace()
     *
     * @return void
     */
    public function testSetCodeEmpRemplace(): void {

        $obj = new Employes2();

        $obj->setCodeEmpRemplace("codeEmpRemplace");
        $this->assertEquals("codeEmpRemplace", $obj->getCodeEmpRemplace());
    }

    /**
     * Tests setCodeInsee()
     *
     * @return void
     */
    public function testSetCodeInsee(): void {

        $obj = new Employes2();

        $obj->setCodeInsee("codeInsee");
        $this->assertEquals("codeInsee", $obj->getCodeInsee());
    }

    /**
     * Tests setCodeMotifRupture1()
     *
     * @return void
     */
    public function testSetCodeMotifRupture1(): void {

        $obj = new Employes2();

        $obj->setCodeMotifRupture1("codeMotifRupture1");
        $this->assertEquals("codeMotifRupture1", $obj->getCodeMotifRupture1());
    }

    /**
     * Tests setCodeMotifRupture2()
     *
     * @return void
     */
    public function testSetCodeMotifRupture2(): void {

        $obj = new Employes2();

        $obj->setCodeMotifRupture2("codeMotifRupture2");
        $this->assertEquals("codeMotifRupture2", $obj->getCodeMotifRupture2());
    }

    /**
     * Tests setCodePaysResidence()
     *
     * @return void
     */
    public function testSetCodePaysResidence(): void {

        $obj = new Employes2();

        $obj->setCodePaysResidence("codePaysResidence");
        $this->assertEquals("codePaysResidence", $obj->getCodePaysResidence());
    }

    /**
     * Tests setCodeTuteur()
     *
     * @return void
     */
    public function testSetCodeTuteur(): void {

        $obj = new Employes2();

        $obj->setCodeTuteur("codeTuteur");
        $this->assertEquals("codeTuteur", $obj->getCodeTuteur());
    }

    /**
     * Tests setCoeffConvention()
     *
     * @return void
     */
    public function testSetCoeffConvention(): void {

        $obj = new Employes2();

        $obj->setCoeffConvention("coeffConvention");
        $this->assertEquals("coeffConvention", $obj->getCoeffConvention());
    }

    /**
     * Tests setCommercial()
     *
     * @return void
     */
    public function testSetCommercial(): void {

        $obj = new Employes2();

        $obj->setCommercial(true);
        $this->assertEquals(true, $obj->getCommercial());
    }

    /**
     * Tests setComplementPcs()
     *
     * @return void
     */
    public function testSetComplementPcs(): void {

        $obj = new Employes2();

        $obj->setComplementPcs("complementPcs");
        $this->assertEquals("complementPcs", $obj->getComplementPcs());
    }

    /**
     * Tests setConjointExploitant()
     *
     * @return void
     */
    public function testSetConjointExploitant(): void {

        $obj = new Employes2();

        $obj->setConjointExploitant(true);
        $this->assertEquals(true, $obj->getConjointExploitant());
    }

    /**
     * Tests setContratCne()
     *
     * @return void
     */
    public function testSetContratCne(): void {

        $obj = new Employes2();

        $obj->setContratCne(true);
        $this->assertEquals(true, $obj->getContratCne());
    }

    /**
     * Tests setCotisBasePenibilite()
     *
     * @return void
     */
    public function testSetCotisBasePenibilite(): void {

        $obj = new Employes2();

        $obj->setCotisBasePenibilite(true);
        $this->assertEquals(true, $obj->getCotisBasePenibilite());
    }

    /**
     * Tests setCritereTriAbsConges1()
     *
     * @return void
     */
    public function testSetCritereTriAbsConges1(): void {

        $obj = new Employes2();

        $obj->setCritereTriAbsConges1("critereTriAbsConges1");
        $this->assertEquals("critereTriAbsConges1", $obj->getCritereTriAbsConges1());
    }

    /**
     * Tests setCritereTriAbsConges2()
     *
     * @return void
     */
    public function testSetCritereTriAbsConges2(): void {

        $obj = new Employes2();

        $obj->setCritereTriAbsConges2("critereTriAbsConges2");
        $this->assertEquals("critereTriAbsConges2", $obj->getCritereTriAbsConges2());
    }

    /**
     * Tests setCritereTriAbsConges3()
     *
     * @return void
     */
    public function testSetCritereTriAbsConges3(): void {

        $obj = new Employes2();

        $obj->setCritereTriAbsConges3("critereTriAbsConges3");
        $this->assertEquals("critereTriAbsConges3", $obj->getCritereTriAbsConges3());
    }

    /**
     * Tests setCumBaseTr2()
     *
     * @return void
     */
    public function testSetCumBaseTr2(): void {

        $obj = new Employes2();

        $obj->setCumBaseTr2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTr2());
    }

    /**
     * Tests setCumBaseTrD()
     *
     * @return void
     */
    public function testSetCumBaseTrD(): void {

        $obj = new Employes2();

        $obj->setCumBaseTrD(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD());
    }

    /**
     * Tests setCumBaseTrD1()
     *
     * @return void
     */
    public function testSetCumBaseTrD1(): void {

        $obj = new Employes2();

        $obj->setCumBaseTrD1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1());
    }

    /**
     * Tests setCumBaseTrD1Caisse1()
     *
     * @return void
     */
    public function testSetCumBaseTrD1Caisse1(): void {

        $obj = new Employes2();

        $obj->setCumBaseTrD1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1Caisse1());
    }

    /**
     * Tests setCumBaseTrD1Caisse2()
     *
     * @return void
     */
    public function testSetCumBaseTrD1Caisse2(): void {

        $obj = new Employes2();

        $obj->setCumBaseTrD1Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1Caisse2());
    }

    /**
     * Tests setCumBaseTrD1Caisse3()
     *
     * @return void
     */
    public function testSetCumBaseTrD1Caisse3(): void {

        $obj = new Employes2();

        $obj->setCumBaseTrD1Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1Caisse3());
    }

    /**
     * Tests setCumBaseTrDCaisse1()
     *
     * @return void
     */
    public function testSetCumBaseTrDCaisse1(): void {

        $obj = new Employes2();

        $obj->setCumBaseTrDCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrDCaisse1());
    }

    /**
     * Tests setCumBaseTrDCaisse2()
     *
     * @return void
     */
    public function testSetCumBaseTrDCaisse2(): void {

        $obj = new Employes2();

        $obj->setCumBaseTrDCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrDCaisse2());
    }

    /**
     * Tests setCumBaseTrDCaisse3()
     *
     * @return void
     */
    public function testSetCumBaseTrDCaisse3(): void {

        $obj = new Employes2();

        $obj->setCumBaseTrDCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrDCaisse3());
    }

    /**
     * Tests setCumBrutAlSansSi()
     *
     * @return void
     */
    public function testSetCumBrutAlSansSi(): void {

        $obj = new Employes2();

        $obj->setCumBrutAlSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAlSansSi());
    }

    /**
     * Tests setCumBrutCaisse1()
     *
     * @return void
     */
    public function testSetCumBrutCaisse1(): void {

        $obj = new Employes2();

        $obj->setCumBrutCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse1());
    }

    /**
     * Tests setCumBrutCaisse2()
     *
     * @return void
     */
    public function testSetCumBrutCaisse2(): void {

        $obj = new Employes2();

        $obj->setCumBrutCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse2());
    }

    /**
     * Tests setCumBrutCaisse3()
     *
     * @return void
     */
    public function testSetCumBrutCaisse3(): void {

        $obj = new Employes2();

        $obj->setCumBrutCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse3());
    }

    /**
     * Tests setCumDifDus()
     *
     * @return void
     */
    public function testSetCumDifDus(): void {

        $obj = new Employes2();

        $obj->setCumDifDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumDifDus());
    }

    /**
     * Tests setCumDifDus1()
     *
     * @return void
     */
    public function testSetCumDifDus1(): void {

        $obj = new Employes2();

        $obj->setCumDifDus1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumDifDus1());
    }

    /**
     * Tests setCumHBonifie()
     *
     * @return void
     */
    public function testSetCumHBonifie(): void {

        $obj = new Employes2();

        $obj->setCumHBonifie(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHBonifie());
    }

    /**
     * Tests setCumRttDus()
     *
     * @return void
     */
    public function testSetCumRttDus(): void {

        $obj = new Employes2();

        $obj->setCumRttDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumRttDus());
    }

    /**
     * Tests setCumRttPris()
     *
     * @return void
     */
    public function testSetCumRttPris(): void {

        $obj = new Employes2();

        $obj->setCumRttPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumRttPris());
    }

    /**
     * Tests setCumTotSi()
     *
     * @return void
     */
    public function testSetCumTotSi(): void {

        $obj = new Employes2();

        $obj->setCumTotSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTotSi());
    }

    /**
     * Tests setCumTranche2SansSi()
     *
     * @return void
     */
    public function testSetCumTranche2SansSi(): void {

        $obj = new Employes2();

        $obj->setCumTranche2SansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2SansSi());
    }

    /**
     * Tests setCumTranche2Si()
     *
     * @return void
     */
    public function testSetCumTranche2Si(): void {

        $obj = new Employes2();

        $obj->setCumTranche2Si(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2Si());
    }

    /**
     * Tests setCumTrancheASansSi()
     *
     * @return void
     */
    public function testSetCumTrancheASansSi(): void {

        $obj = new Employes2();

        $obj->setCumTrancheASansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheASansSi());
    }

    /**
     * Tests setCumTrancheAsi()
     *
     * @return void
     */
    public function testSetCumTrancheAsi(): void {

        $obj = new Employes2();

        $obj->setCumTrancheAsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheAsi());
    }

    /**
     * Tests setCumTrancheBSansSi()
     *
     * @return void
     */
    public function testSetCumTrancheBSansSi(): void {

        $obj = new Employes2();

        $obj->setCumTrancheBSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheBSansSi());
    }

    /**
     * Tests setCumTrancheBsi()
     *
     * @return void
     */
    public function testSetCumTrancheBsi(): void {

        $obj = new Employes2();

        $obj->setCumTrancheBsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheBsi());
    }

    /**
     * Tests setCumTrancheCSansSi()
     *
     * @return void
     */
    public function testSetCumTrancheCSansSi(): void {

        $obj = new Employes2();

        $obj->setCumTrancheCSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheCSansSi());
    }

    /**
     * Tests setCumTrancheCsi()
     *
     * @return void
     */
    public function testSetCumTrancheCsi(): void {

        $obj = new Employes2();

        $obj->setCumTrancheCsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheCsi());
    }

    /**
     * Tests setCumTrancheD1SansSi()
     *
     * @return void
     */
    public function testSetCumTrancheD1SansSi(): void {

        $obj = new Employes2();

        $obj->setCumTrancheD1SansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheD1SansSi());
    }

    /**
     * Tests setCumTrancheDSansSi()
     *
     * @return void
     */
    public function testSetCumTrancheDSansSi(): void {

        $obj = new Employes2();

        $obj->setCumTrancheDSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheDSansSi());
    }

    /**
     * Tests setDadsuConjointSalarie()
     *
     * @return void
     */
    public function testSetDadsuConjointSalarie(): void {

        $obj = new Employes2();

        $obj->setDadsuConjointSalarie("dadsuConjointSalarie");
        $this->assertEquals("dadsuConjointSalarie", $obj->getDadsuConjointSalarie());
    }

    /**
     * Tests setDateCreation()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new Employes2();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests setDateFinExclureLfr2012()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinExclureLfr2012(): void {

        // Set a Date/time mock.
        $dateFinExclureLfr2012 = new DateTime("2018-09-10");

        $obj = new Employes2();

        $obj->setDateFinExclureLfr2012($dateFinExclureLfr2012);
        $this->assertSame($dateFinExclureLfr2012, $obj->getDateFinExclureLfr2012());
    }

    /**
     * Tests setDateFinPortabilite()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinPortabilite(): void {

        // Set a Date/time mock.
        $dateFinPortabilite = new DateTime("2018-09-10");

        $obj = new Employes2();

        $obj->setDateFinPortabilite($dateFinPortabilite);
        $this->assertSame($dateFinPortabilite, $obj->getDateFinPortabilite());
    }

    /**
     * Tests setDatePassageCdi()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePassageCdi(): void {

        // Set a Date/time mock.
        $datePassageCdi = new DateTime("2018-09-10");

        $obj = new Employes2();

        $obj->setDatePassageCdi($datePassageCdi);
        $this->assertSame($datePassageCdi, $obj->getDatePassageCdi());
    }

    /**
     * Tests setDateRenouvCdd()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRenouvCdd(): void {

        // Set a Date/time mock.
        $dateRenouvCdd = new DateTime("2018-09-10");

        $obj = new Employes2();

        $obj->setDateRenouvCdd($dateRenouvCdd);
        $this->assertSame($dateRenouvCdd, $obj->getDateRenouvCdd());
    }

    /**
     * Tests setDeductionAnc()
     *
     * @return void
     */
    public function testSetDeductionAnc(): void {

        $obj = new Employes2();

        $obj->setDeductionAnc(10);
        $this->assertEquals(10, $obj->getDeductionAnc());
    }

    /**
     * Tests setEchelon()
     *
     * @return void
     */
    public function testSetEchelon(): void {

        $obj = new Employes2();

        $obj->setEchelon("echelon");
        $this->assertEquals("echelon", $obj->getEchelon());
    }

    /**
     * Tests setEdHSupBonifQueMajo()
     *
     * @return void
     */
    public function testSetEdHSupBonifQueMajo(): void {

        $obj = new Employes2();

        $obj->setEdHSupBonifQueMajo("edHSupBonifQueMajo");
        $this->assertEquals("edHSupBonifQueMajo", $obj->getEdHSupBonifQueMajo());
    }

    /**
     * Tests setEmail()
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new Employes2();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Tests setEtatIPaie()
     *
     * @return void
     */
    public function testSetEtatIPaie(): void {

        $obj = new Employes2();

        $obj->setEtatIPaie("etatIPaie");
        $this->assertEquals("etatIPaie", $obj->getEtatIPaie());
    }

    /**
     * Tests setExclureChomCdd()
     *
     * @return void
     */
    public function testSetExclureChomCdd(): void {

        $obj = new Employes2();

        $obj->setExclureChomCdd(true);
        $this->assertEquals(true, $obj->getExclureChomCdd());
    }

    /**
     * Tests setExclureCice()
     *
     * @return void
     */
    public function testSetExclureCice(): void {

        $obj = new Employes2();

        $obj->setExclureCice(true);
        $this->assertEquals(true, $obj->getExclureCice());
    }

    /**
     * Tests setExclureCospar()
     *
     * @return void
     */
    public function testSetExclureCospar(): void {

        $obj = new Employes2();

        $obj->setExclureCospar(true);
        $this->assertEquals(true, $obj->getExclureCospar());
    }

    /**
     * Tests setExclureCotAssedicParUrssaf()
     *
     * @return void
     */
    public function testSetExclureCotAssedicParUrssaf(): void {

        $obj = new Employes2();

        $obj->setExclureCotAssedicParUrssaf(true);
        $this->assertEquals(true, $obj->getExclureCotAssedicParUrssaf());
    }

    /**
     * Tests setExclureDas()
     *
     * @return void
     */
    public function testSetExclureDas(): void {

        $obj = new Employes2();

        $obj->setExclureDas(true);
        $this->assertEquals(true, $obj->getExclureDas());
    }

    /**
     * Tests setExclureDsn()
     *
     * @return void
     */
    public function testSetExclureDsn(): void {

        $obj = new Employes2();

        $obj->setExclureDsn(true);
        $this->assertEquals(true, $obj->getExclureDsn());
    }

    /**
     * Tests setExclureLfr2012()
     *
     * @return void
     */
    public function testSetExclureLfr2012(): void {

        $obj = new Employes2();

        $obj->setExclureLfr2012("exclureLfr2012");
        $this->assertEquals("exclureLfr2012", $obj->getExclureLfr2012());
    }

    /**
     * Tests setExclureLoiTepa()
     *
     * @return void
     */
    public function testSetExclureLoiTepa(): void {

        $obj = new Employes2();

        $obj->setExclureLoiTepa(true);
        $this->assertEquals(true, $obj->getExclureLoiTepa());
    }

    /**
     * Tests setExclureLoiTepaPartP()
     *
     * @return void
     */
    public function testSetExclureLoiTepaPartP(): void {

        $obj = new Employes2();

        $obj->setExclureLoiTepaPartP(true);
        $this->assertEquals(true, $obj->getExclureLoiTepaPartP());
    }

    /**
     * Tests setExclureLoiTepaPartS()
     *
     * @return void
     */
    public function testSetExclureLoiTepaPartS(): void {

        $obj = new Employes2();

        $obj->setExclureLoiTepaPartS(true);
        $this->assertEquals(true, $obj->getExclureLoiTepaPartS());
    }

    /**
     * Tests setExclureQgc()
     *
     * @return void
     */
    public function testSetExclureQgc(): void {

        $obj = new Employes2();

        $obj->setExclureQgc(true);
        $this->assertEquals(true, $obj->getExclureQgc());
    }

    /**
     * Tests setExoAccre17()
     *
     * @return void
     */
    public function testSetExoAccre17(): void {

        $obj = new Employes2();

        $obj->setExoAccre17(true);
        $this->assertEquals(true, $obj->getExoAccre17());
    }

    /**
     * Tests setExoAgff()
     *
     * @return void
     */
    public function testSetExoAgff(): void {

        $obj = new Employes2();

        $obj->setExoAgff(true);
        $this->assertEquals(true, $obj->getExoAgff());
    }

    /**
     * Tests setExoOccasionnelMsa()
     *
     * @return void
     */
    public function testSetExoOccasionnelMsa(): void {

        $obj = new Employes2();

        $obj->setExoOccasionnelMsa(true);
        $this->assertEquals(true, $obj->getExoOccasionnelMsa());
    }

    /**
     * Tests setExoProfessionnalisation()
     *
     * @return void
     */
    public function testSetExoProfessionnalisation(): void {

        $obj = new Employes2();

        $obj->setExoProfessionnalisation(true);
        $this->assertEquals(true, $obj->getExoProfessionnalisation());
    }

    /**
     * Tests setExoSpecif()
     *
     * @return void
     */
    public function testSetExoSpecif(): void {

        $obj = new Employes2();

        $obj->setExoSpecif(true);
        $this->assertEquals(true, $obj->getExoSpecif());
    }

    /**
     * Tests setForfaitHeure()
     *
     * @return void
     */
    public function testSetForfaitHeure(): void {

        $obj = new Employes2();

        $obj->setForfaitHeure(true);
        $this->assertEquals(true, $obj->getForfaitHeure());
    }

    /**
     * Tests setForfaitJour()
     *
     * @return void
     */
    public function testSetForfaitJour(): void {

        $obj = new Employes2();

        $obj->setForfaitJour(true);
        $this->assertEquals(true, $obj->getForfaitJour());
    }

    /**
     * Tests setGestionCompteurHCompleter()
     *
     * @return void
     */
    public function testSetGestionCompteurHCompleter(): void {

        $obj = new Employes2();

        $obj->setGestionCompteurHCompleter(true);
        $this->assertEquals(true, $obj->getGestionCompteurHCompleter());
    }

    /**
     * Tests setGestionCp()
     *
     * @return void
     */
    public function testSetGestionCp(): void {

        $obj = new Employes2();

        $obj->setGestionCp("gestionCp");
        $this->assertEquals("gestionCp", $obj->getGestionCp());
    }

    /**
     * Tests setGestionMailBulletin()
     *
     * @return void
     */
    public function testSetGestionMailBulletin(): void {

        $obj = new Employes2();

        $obj->setGestionMailBulletin(true);
        $this->assertEquals(true, $obj->getGestionMailBulletin());
    }

    /**
     * Tests setGestionReposComp()
     *
     * @return void
     */
    public function testSetGestionReposComp(): void {

        $obj = new Employes2();

        $obj->setGestionReposComp("gestionReposComp");
        $this->assertEquals("gestionReposComp", $obj->getGestionReposComp());
    }

    /**
     * Tests setGestionReposRecup()
     *
     * @return void
     */
    public function testSetGestionReposRecup(): void {

        $obj = new Employes2();

        $obj->setGestionReposRecup("gestionReposRecup");
        $this->assertEquals("gestionReposRecup", $obj->getGestionReposRecup());
    }

    /**
     * Tests setGestionReposRemplace()
     *
     * @return void
     */
    public function testSetGestionReposRemplace(): void {

        $obj = new Employes2();

        $obj->setGestionReposRemplace("gestionReposRemplace");
        $this->assertEquals("gestionReposRemplace", $obj->getGestionReposRemplace());
    }

    /**
     * Tests setGestionRtt()
     *
     * @return void
     */
    public function testSetGestionRtt(): void {

        $obj = new Employes2();

        $obj->setGestionRtt("gestionRtt");
        $this->assertEquals("gestionRtt", $obj->getGestionRtt());
    }

    /**
     * Tests setGestionSemType()
     *
     * @return void
     */
    public function testSetGestionSemType(): void {

        $obj = new Employes2();

        $obj->setGestionSemType("gestionSemType");
        $this->assertEquals("gestionSemType", $obj->getGestionSemType());
    }

    /**
     * Tests setHeuresPeriodeInitial()
     *
     * @return void
     */
    public function testSetHeuresPeriodeInitial(): void {

        $obj = new Employes2();

        $obj->setHeuresPeriodeInitial(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresPeriodeInitial());
    }

    /**
     * Tests setIban()
     *
     * @return void
     */
    public function testSetIban(): void {

        $obj = new Employes2();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Tests setIndemCpMsa()
     *
     * @return void
     */
    public function testSetIndemCpMsa(): void {

        $obj = new Employes2();

        $obj->setIndemCpMsa(true);
        $this->assertEquals(true, $obj->getIndemCpMsa());
    }

    /**
     * Tests setIndiceCateg()
     *
     * @return void
     */
    public function testSetIndiceCateg(): void {

        $obj = new Employes2();

        $obj->setIndiceCateg(10);
        $this->assertEquals(10, $obj->getIndiceCateg());
    }

    /**
     * Tests setInspecteur()
     *
     * @return void
     */
    public function testSetInspecteur(): void {

        $obj = new Employes2();

        $obj->setInspecteur(true);
        $this->assertEquals(true, $obj->getInspecteur());
    }

    /**
     * Tests setInterimIndemCpFillon()
     *
     * @return void
     */
    public function testSetInterimIndemCpFillon(): void {

        $obj = new Employes2();

        $obj->setInterimIndemCpFillon(true);
        $this->assertEquals(true, $obj->getInterimIndemCpFillon());
    }

    /**
     * Tests setMailBulletinPwd()
     *
     * @return void
     */
    public function testSetMailBulletinPwd(): void {

        $obj = new Employes2();

        $obj->setMailBulletinPwd("mailBulletinPwd");
        $this->assertEquals("mailBulletinPwd", $obj->getMailBulletinPwd());
    }

    /**
     * Tests setMaintienIntervientCp()
     *
     * @return void
     */
    public function testSetMaintienIntervientCp(): void {

        $obj = new Employes2();

        $obj->setMaintienIntervientCp("maintienIntervientCp");
        $this->assertEquals("maintienIntervientCp", $obj->getMaintienIntervientCp());
    }

    /**
     * Tests setMaintienNetDeducCsgijss()
     *
     * @return void
     */
    public function testSetMaintienNetDeducCsgijss(): void {

        $obj = new Employes2();

        $obj->setMaintienNetDeducCsgijss(true);
        $this->assertEquals(true, $obj->getMaintienNetDeducCsgijss());
    }

    /**
     * Tests setMaintienSalaire()
     *
     * @return void
     */
    public function testSetMaintienSalaire(): void {

        $obj = new Employes2();

        $obj->setMaintienSalaire("maintienSalaire");
        $this->assertEquals("maintienSalaire", $obj->getMaintienSalaire());
    }

    /**
     * Tests setMaintienSpecifique()
     *
     * @return void
     */
    public function testSetMaintienSpecifique(): void {

        $obj = new Employes2();

        $obj->setMaintienSpecifique(true);
        $this->assertEquals(true, $obj->getMaintienSpecifique());
    }

    /**
     * Tests setMajoProfessionnalisation()
     *
     * @return void
     */
    public function testSetMajoProfessionnalisation(): void {

        $obj = new Employes2();

        $obj->setMajoProfessionnalisation(true);
        $this->assertEquals(true, $obj->getMajoProfessionnalisation());
    }

    /**
     * Tests setMandataireSocial()
     *
     * @return void
     */
    public function testSetMandataireSocial(): void {

        $obj = new Employes2();

        $obj->setMandataireSocial(true);
        $this->assertEquals(true, $obj->getMandataireSocial());
    }

    /**
     * Tests setModeleBulletin()
     *
     * @return void
     */
    public function testSetModeleBulletin(): void {

        $obj = new Employes2();

        $obj->setModeleBulletin("modeleBulletin");
        $this->assertEquals("modeleBulletin", $obj->getModeleBulletin());
    }

    /**
     * Tests setMoisClotureDif()
     *
     * @return void
     */
    public function testSetMoisClotureDif(): void {

        $obj = new Employes2();

        $obj->setMoisClotureDif("moisClotureDif");
        $this->assertEquals("moisClotureDif", $obj->getMoisClotureDif());
    }

    /**
     * Tests setMotifCdd()
     *
     * @return void
     */
    public function testSetMotifCdd(): void {

        $obj = new Employes2();

        $obj->setMotifCdd("motifCdd");
        $this->assertEquals("motifCdd", $obj->getMotifCdd());
    }

    /**
     * Tests setMotifExclusionDsn()
     *
     * @return void
     */
    public function testSetMotifExclusionDsn(): void {

        $obj = new Employes2();

        $obj->setMotifExclusionDsn("motifExclusionDsn");
        $this->assertEquals("motifExclusionDsn", $obj->getMotifExclusionDsn());
    }

    /**
     * Tests setMultiEmployeur()
     *
     * @return void
     */
    public function testSetMultiEmployeur(): void {

        $obj = new Employes2();

        $obj->setMultiEmployeur(true);
        $this->assertEquals(true, $obj->getMultiEmployeur());
    }

    /**
     * Tests setNatureAnalytique()
     *
     * @return void
     */
    public function testSetNatureAnalytique(): void {

        $obj = new Employes2();

        $obj->setNatureAnalytique("natureAnalytique");
        $this->assertEquals("natureAnalytique", $obj->getNatureAnalytique());
    }

    /**
     * Tests setNbHBonifie()
     *
     * @return void
     */
    public function testSetNbHBonifie(): void {

        $obj = new Employes2();

        $obj->setNbHBonifie(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHBonifie());
    }

    /**
     * Tests setNbHContingent()
     *
     * @return void
     */
    public function testSetNbHContingent(): void {

        $obj = new Employes2();

        $obj->setNbHContingent(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHContingent());
    }

    /**
     * Tests setNbHJour1()
     *
     * @return void
     */
    public function testSetNbHJour1(): void {

        $obj = new Employes2();

        $obj->setNbHJour1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour1());
    }

    /**
     * Tests setNbHJour2()
     *
     * @return void
     */
    public function testSetNbHJour2(): void {

        $obj = new Employes2();

        $obj->setNbHJour2(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour2());
    }

    /**
     * Tests setNbHJour3()
     *
     * @return void
     */
    public function testSetNbHJour3(): void {

        $obj = new Employes2();

        $obj->setNbHJour3(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour3());
    }

    /**
     * Tests setNbHJour4()
     *
     * @return void
     */
    public function testSetNbHJour4(): void {

        $obj = new Employes2();

        $obj->setNbHJour4(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour4());
    }

    /**
     * Tests setNbHJour5()
     *
     * @return void
     */
    public function testSetNbHJour5(): void {

        $obj = new Employes2();

        $obj->setNbHJour5(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour5());
    }

    /**
     * Tests setNbHJour6()
     *
     * @return void
     */
    public function testSetNbHJour6(): void {

        $obj = new Employes2();

        $obj->setNbHJour6(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour6());
    }

    /**
     * Tests setNbHJour7()
     *
     * @return void
     */
    public function testSetNbHJour7(): void {

        $obj = new Employes2();

        $obj->setNbHJour7(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour7());
    }

    /**
     * Tests setNbJourAnnee()
     *
     * @return void
     */
    public function testSetNbJourAnnee(): void {

        $obj = new Employes2();

        $obj->setNbJourAnnee(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourAnnee());
    }

    /**
     * Tests setNbJourCpAcquis()
     *
     * @return void
     */
    public function testSetNbJourCpAcquis(): void {

        $obj = new Employes2();

        $obj->setNbJourCpAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpAcquis());
    }

    /**
     * Tests setNbJourCpSup()
     *
     * @return void
     */
    public function testSetNbJourCpSup(): void {

        $obj = new Employes2();

        $obj->setNbJourCpSup(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpSup());
    }

    /**
     * Tests setNbPieceLogement()
     *
     * @return void
     */
    public function testSetNbPieceLogement(): void {

        $obj = new Employes2();

        $obj->setNbPieceLogement("nbPieceLogement");
        $this->assertEquals("nbPieceLogement", $obj->getNbPieceLogement());
    }

    /**
     * Tests setNePasActiverPrimeAnnuelleProprete()
     *
     * @return void
     */
    public function testSetNePasActiverPrimeAnnuelleProprete(): void {

        $obj = new Employes2();

        $obj->setNePasActiverPrimeAnnuelleProprete(true);
        $this->assertEquals(true, $obj->getNePasActiverPrimeAnnuelleProprete());
    }

    /**
     * Tests setNiveau()
     *
     * @return void
     */
    public function testSetNiveau(): void {

        $obj = new Employes2();

        $obj->setNiveau("niveau");
        $this->assertEquals("niveau", $obj->getNiveau());
    }

    /**
     * Tests setNomVilleInsee()
     *
     * @return void
     */
    public function testSetNomVilleInsee(): void {

        $obj = new Employes2();

        $obj->setNomVilleInsee("nomVilleInsee");
        $this->assertEquals("nomVilleInsee", $obj->getNomVilleInsee());
    }

    /**
     * Tests setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new Employes2();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests setNumeroAbattementContratMsa()
     *
     * @return void
     */
    public function testSetNumeroAbattementContratMsa(): void {

        $obj = new Employes2();

        $obj->setNumeroAbattementContratMsa(10);
        $this->assertEquals(10, $obj->getNumeroAbattementContratMsa());
    }

    /**
     * Tests setNumeroContrat()
     *
     * @return void
     */
    public function testSetNumeroContrat(): void {

        $obj = new Employes2();

        $obj->setNumeroContrat(10);
        $this->assertEquals(10, $obj->getNumeroContrat());
    }

    /**
     * Tests setNumeroEmployeContrat()
     *
     * @return void
     */
    public function testSetNumeroEmployeContrat(): void {

        $obj = new Employes2();

        $obj->setNumeroEmployeContrat("numeroEmployeContrat");
        $this->assertEquals("numeroEmployeContrat", $obj->getNumeroEmployeContrat());
    }

    /**
     * Tests setPasGestionDif()
     *
     * @return void
     */
    public function testSetPasGestionDif(): void {

        $obj = new Employes2();

        $obj->setPasGestionDif(true);
        $this->assertEquals(true, $obj->getPasGestionDif());
    }

    /**
     * Tests setPaysNaissance()
     *
     * @return void
     */
    public function testSetPaysNaissance(): void {

        $obj = new Employes2();

        $obj->setPaysNaissance("paysNaissance");
        $this->assertEquals("paysNaissance", $obj->getPaysNaissance());
    }

    /**
     * Tests setPaysNat()
     *
     * @return void
     */
    public function testSetPaysNat(): void {

        $obj = new Employes2();

        $obj->setPaysNat("paysNat");
        $this->assertEquals("paysNat", $obj->getPaysNat());
    }

    /**
     * Tests setPeriodePointageCloturee()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodePointageCloturee(): void {

        // Set a Date/time mock.
        $periodePointageCloturee = new DateTime("2018-09-10");

        $obj = new Employes2();

        $obj->setPeriodePointageCloturee($periodePointageCloturee);
        $this->assertSame($periodePointageCloturee, $obj->getPeriodePointageCloturee());
    }

    /**
     * Tests setPosition()
     *
     * @return void
     */
    public function testSetPosition(): void {

        $obj = new Employes2();

        $obj->setPosition("position");
        $this->assertEquals("position", $obj->getPosition());
    }

    /**
     * Tests setPourcentExo()
     *
     * @return void
     */
    public function testSetPourcentExo(): void {

        $obj = new Employes2();

        $obj->setPourcentExo(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentExo());
    }

    /**
     * Tests setRbtNavigoNonProratise()
     *
     * @return void
     */
    public function testSetRbtNavigoNonProratise(): void {

        $obj = new Employes2();

        $obj->setRbtNavigoNonProratise(true);
        $this->assertEquals(true, $obj->getRbtNavigoNonProratise());
    }

    /**
     * Tests setReductionFillon()
     *
     * @return void
     */
    public function testSetReductionFillon(): void {

        $obj = new Employes2();

        $obj->setReductionFillon("reductionFillon");
        $this->assertEquals("reductionFillon", $obj->getReductionFillon());
    }

    /**
     * Tests setReductionMayotte()
     *
     * @return void
     */
    public function testSetReductionMayotte(): void {

        $obj = new Employes2();

        $obj->setReductionMayotte("reductionMayotte");
        $this->assertEquals("reductionMayotte", $obj->getReductionMayotte());
    }

    /**
     * Tests setRemunPartFillon()
     *
     * @return void
     */
    public function testSetRemunPartFillon(): void {

        $obj = new Employes2();

        $obj->setRemunPartFillon(true);
        $this->assertEquals(true, $obj->getRemunPartFillon());
    }

    /**
     * Tests setRtt1()
     *
     * @return void
     */
    public function testSetRtt1(): void {

        $obj = new Employes2();

        $obj->setRtt1(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt1());
    }

    /**
     * Tests setRtt10()
     *
     * @return void
     */
    public function testSetRtt10(): void {

        $obj = new Employes2();

        $obj->setRtt10(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt10());
    }

    /**
     * Tests setRtt11()
     *
     * @return void
     */
    public function testSetRtt11(): void {

        $obj = new Employes2();

        $obj->setRtt11(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt11());
    }

    /**
     * Tests setRtt12()
     *
     * @return void
     */
    public function testSetRtt12(): void {

        $obj = new Employes2();

        $obj->setRtt12(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt12());
    }

    /**
     * Tests setRtt2()
     *
     * @return void
     */
    public function testSetRtt2(): void {

        $obj = new Employes2();

        $obj->setRtt2(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt2());
    }

    /**
     * Tests setRtt3()
     *
     * @return void
     */
    public function testSetRtt3(): void {

        $obj = new Employes2();

        $obj->setRtt3(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt3());
    }

    /**
     * Tests setRtt4()
     *
     * @return void
     */
    public function testSetRtt4(): void {

        $obj = new Employes2();

        $obj->setRtt4(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt4());
    }

    /**
     * Tests setRtt5()
     *
     * @return void
     */
    public function testSetRtt5(): void {

        $obj = new Employes2();

        $obj->setRtt5(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt5());
    }

    /**
     * Tests setRtt6()
     *
     * @return void
     */
    public function testSetRtt6(): void {

        $obj = new Employes2();

        $obj->setRtt6(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt6());
    }

    /**
     * Tests setRtt7()
     *
     * @return void
     */
    public function testSetRtt7(): void {

        $obj = new Employes2();

        $obj->setRtt7(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt7());
    }

    /**
     * Tests setRtt8()
     *
     * @return void
     */
    public function testSetRtt8(): void {

        $obj = new Employes2();

        $obj->setRtt8(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt8());
    }

    /**
     * Tests setRtt9()
     *
     * @return void
     */
    public function testSetRtt9(): void {

        $obj = new Employes2();

        $obj->setRtt9(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt9());
    }

    /**
     * Tests setSansContrat()
     *
     * @return void
     */
    public function testSetSansContrat(): void {

        $obj = new Employes2();

        $obj->setSansContrat(10);
        $this->assertEquals(10, $obj->getSansContrat());
    }

    /**
     * Tests setSubrogation()
     *
     * @return void
     */
    public function testSetSubrogation(): void {

        $obj = new Employes2();

        $obj->setSubrogation("subrogation");
        $this->assertEquals("subrogation", $obj->getSubrogation());
    }

    /**
     * Tests setTds142()
     *
     * @return void
     */
    public function testSetTds142(): void {

        $obj = new Employes2();

        $obj->setTds142(10.092018);
        $this->assertEquals(10.092018, $obj->getTds142());
    }

    /**
     * Tests setTdsAllocChom()
     *
     * @return void
     */
    public function testSetTdsAllocChom(): void {

        $obj = new Employes2();

        $obj->setTdsAllocChom(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsAllocChom());
    }

    /**
     * Tests setTdsAllocRetraite()
     *
     * @return void
     */
    public function testSetTdsAllocRetraite(): void {

        $obj = new Employes2();

        $obj->setTdsAllocRetraite(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsAllocRetraite());
    }

    /**
     * Tests setTel2()
     *
     * @return void
     */
    public function testSetTel2(): void {

        $obj = new Employes2();

        $obj->setTel2("tel2");
        $this->assertEquals("tel2", $obj->getTel2());
    }

    /**
     * Tests setTravailleurDeNuit()
     *
     * @return void
     */
    public function testSetTravailleurDeNuit(): void {

        $obj = new Employes2();

        $obj->setTravailleurDeNuit(true);
        $this->assertEquals(true, $obj->getTravailleurDeNuit());
    }

    /**
     * Tests setTypeAboNavigo()
     *
     * @return void
     */
    public function testSetTypeAboNavigo(): void {

        $obj = new Employes2();

        $obj->setTypeAboNavigo("typeAboNavigo");
        $this->assertEquals("typeAboNavigo", $obj->getTypeAboNavigo());
    }

    /**
     * Tests setTypeExoLodeom()
     *
     * @return void
     */
    public function testSetTypeExoLodeom(): void {

        $obj = new Employes2();

        $obj->setTypeExoLodeom("typeExoLodeom");
        $this->assertEquals("typeExoLodeom", $obj->getTypeExoLodeom());
    }

    /**
     * Tests setTypeIntemperieBtp()
     *
     * @return void
     */
    public function testSetTypeIntemperieBtp(): void {

        $obj = new Employes2();

        $obj->setTypeIntemperieBtp("typeIntemperieBtp");
        $this->assertEquals("typeIntemperieBtp", $obj->getTypeIntemperieBtp());
    }

    /**
     * Tests setTypeMaintienBrutNet()
     *
     * @return void
     */
    public function testSetTypeMaintienBrutNet(): void {

        $obj = new Employes2();

        $obj->setTypeMaintienBrutNet("typeMaintienBrutNet");
        $this->assertEquals("typeMaintienBrutNet", $obj->getTypeMaintienBrutNet());
    }

    /**
     * Tests setTypeMaintienSalaire()
     *
     * @return void
     */
    public function testSetTypeMaintienSalaire(): void {

        $obj = new Employes2();

        $obj->setTypeMaintienSalaire("typeMaintienSalaire");
        $this->assertEquals("typeMaintienSalaire", $obj->getTypeMaintienSalaire());
    }

    /**
     * Tests setTypeSaisieAbCp()
     *
     * @return void
     */
    public function testSetTypeSaisieAbCp(): void {

        $obj = new Employes2();

        $obj->setTypeSaisieAbCp("typeSaisieAbCp");
        $this->assertEquals("typeSaisieAbCp", $obj->getTypeSaisieAbCp());
    }

    /**
     * Tests setZoneNavigo()
     *
     * @return void
     */
    public function testSetZoneNavigo(): void {

        $obj = new Employes2();

        $obj->setZoneNavigo("zoneNavigo");
        $this->assertEquals("zoneNavigo", $obj->getZoneNavigo());
    }

    /**
     * Tests __construct()
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
