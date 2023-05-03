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
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\Libelles;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Libelles test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class LibellesTest extends AbstractTestCase {

    /**
     * Test setACompterHeuresAssedic()
     *
     * @return void
     */
    public function testSetACompterHeuresAssedic(): void {

        $obj = new Libelles();

        $obj->setACompterHeuresAssedic(true);
        $this->assertTrue($obj->getACompterHeuresAssedic());
    }

    /**
     * Test setAConserverSetp()
     *
     * @return void
     */
    public function testSetAConserverSetp(): void {

        $obj = new Libelles();

        $obj->setAConserverSetp(true);
        $this->assertTrue($obj->getAConserverSetp());
    }

    /**
     * Test setACumulerBaseCaisse1()
     *
     * @return void
     */
    public function testSetACumulerBaseCaisse1(): void {

        $obj = new Libelles();

        $obj->setACumulerBaseCaisse1(true);
        $this->assertTrue($obj->getACumulerBaseCaisse1());
    }

    /**
     * Test setACumulerBaseCaisse2()
     *
     * @return void
     */
    public function testSetACumulerBaseCaisse2(): void {

        $obj = new Libelles();

        $obj->setACumulerBaseCaisse2(true);
        $this->assertTrue($obj->getACumulerBaseCaisse2());
    }

    /**
     * Test setACumulerBaseCaisse3()
     *
     * @return void
     */
    public function testSetACumulerBaseCaisse3(): void {

        $obj = new Libelles();

        $obj->setACumulerBaseCaisse3(true);
        $this->assertTrue($obj->getACumulerBaseCaisse3());
    }

    /**
     * Test setACumulerBaseCp()
     *
     * @return void
     */
    public function testSetACumulerBaseCp(): void {

        $obj = new Libelles();

        $obj->setACumulerBaseCp(true);
        $this->assertTrue($obj->getACumulerBaseCp());
    }

    /**
     * Test setACumulerBaseSecu()
     *
     * @return void
     */
    public function testSetACumulerBaseSecu(): void {

        $obj = new Libelles();

        $obj->setACumulerBaseSecu(true);
        $this->assertTrue($obj->getACumulerBaseSecu());
    }

    /**
     * Test setAReintegrerSetp()
     *
     * @return void
     */
    public function testSetAReintegrerSetp(): void {

        $obj = new Libelles();

        $obj->setAReintegrerSetp(true);
        $this->assertTrue($obj->getAReintegrerSetp());
    }

    /**
     * Test setActiveVariablesEmp()
     *
     * @return void
     */
    public function testSetActiveVariablesEmp(): void {

        $obj = new Libelles();

        $obj->setActiveVariablesEmp(true);
        $this->assertTrue($obj->getActiveVariablesEmp());
    }

    /**
     * Test setAenLienPresenceEffective()
     *
     * @return void
     */
    public function testSetAenLienPresenceEffective(): void {

        $obj = new Libelles();

        $obj->setAenLienPresenceEffective(true);
        $this->assertTrue($obj->getAenLienPresenceEffective());
    }

    /**
     * Test setAgff()
     *
     * @return void
     */
    public function testSetAgff(): void {

        $obj = new Libelles();

        $obj->setAgff(true);
        $this->assertTrue($obj->getAgff());
    }

    /**
     * Test setAvantageNaturePrime()
     *
     * @return void
     */
    public function testSetAvantageNaturePrime(): void {

        $obj = new Libelles();

        $obj->setAvantageNaturePrime(true);
        $this->assertTrue($obj->getAvantageNaturePrime());
    }

    /**
     * Test setAvantageNatureTds()
     *
     * @return void
     */
    public function testSetAvantageNatureTds(): void {

        $obj = new Libelles();

        $obj->setAvantageNatureTds(true);
        $this->assertTrue($obj->getAvantageNatureTds());
    }

    /**
     * Test setAvecRetroAct()
     *
     * @return void
     */
    public function testSetAvecRetroAct(): void {

        $obj = new Libelles();

        $obj->setAvecRetroAct(true);
        $this->assertTrue($obj->getAvecRetroAct());
    }

    /**
     * Test setBaseExoneree()
     *
     * @return void
     */
    public function testSetBaseExoneree(): void {

        $obj = new Libelles();

        $obj->setBaseExoneree(true);
        $this->assertTrue($obj->getBaseExoneree());
    }

    /**
     * Test setBaseNonExoneree()
     *
     * @return void
     */
    public function testSetBaseNonExoneree(): void {

        $obj = new Libelles();

        $obj->setBaseNonExoneree(true);
        $this->assertTrue($obj->getBaseNonExoneree());
    }

    /**
     * Test setCategSalarie()
     *
     * @return void
     */
    public function testSetCategSalarie(): void {

        $obj = new Libelles();

        $obj->setCategSalarie("categSalarie");
        $this->assertEquals("categSalarie", $obj->getCategSalarie());
    }

    /**
     * Test setChequeVacance()
     *
     * @return void
     */
    public function testSetChequeVacance(): void {

        $obj = new Libelles();

        $obj->setChequeVacance(true);
        $this->assertTrue($obj->getChequeVacance());
    }

    /**
     * Test setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Libelles();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Test setCodeCalcul()
     *
     * @return void
     */
    public function testSetCodeCalcul(): void {

        $obj = new Libelles();

        $obj->setCodeCalcul("codeCalcul");
        $this->assertEquals("codeCalcul", $obj->getCodeCalcul());
    }

    /**
     * Test setCodeCsgTaux()
     *
     * @return void
     */
    public function testSetCodeCsgTaux(): void {

        $obj = new Libelles();

        $obj->setCodeCsgTaux("codeCsgTaux");
        $this->assertEquals("codeCsgTaux", $obj->getCodeCsgTaux());
    }

    /**
     * Test setCodeDucs()
     *
     * @return void
     */
    public function testSetCodeDucs(): void {

        $obj = new Libelles();

        $obj->setCodeDucs("codeDucs");
        $this->assertEquals("codeDucs", $obj->getCodeDucs());
    }

    /**
     * Test setCodeEditionHisto()
     *
     * @return void
     */
    public function testSetCodeEditionHisto(): void {

        $obj = new Libelles();

        $obj->setCodeEditionHisto("codeEditionHisto");
        $this->assertEquals("codeEditionHisto", $obj->getCodeEditionHisto());
    }

    /**
     * Test setCodeInsee()
     *
     * @return void
     */
    public function testSetCodeInsee(): void {

        $obj = new Libelles();

        $obj->setCodeInsee("codeInsee");
        $this->assertEquals("codeInsee", $obj->getCodeInsee());
    }

    /**
     * Test setCodeOrganisme()
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new Libelles();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Test setCodeRds()
     *
     * @return void
     */
    public function testSetCodeRds(): void {

        $obj = new Libelles();

        $obj->setCodeRds("codeRds");
        $this->assertEquals("codeRds", $obj->getCodeRds());
    }

    /**
     * Test setCodeTypeAssurance()
     *
     * @return void
     */
    public function testSetCodeTypeAssurance(): void {

        $obj = new Libelles();

        $obj->setCodeTypeAssurance("codeTypeAssurance");
        $this->assertEquals("codeTypeAssurance", $obj->getCodeTypeAssurance());
    }

    /**
     * Test setCodeTypeBPlaf()
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf(): void {

        $obj = new Libelles();

        $obj->setCodeTypeBPlaf("codeTypeBPlaf");
        $this->assertEquals("codeTypeBPlaf", $obj->getCodeTypeBPlaf());
    }

    /**
     * Test setCodeTypeBSpecPrev()
     *
     * @return void
     */
    public function testSetCodeTypeBSpecPrev(): void {

        $obj = new Libelles();

        $obj->setCodeTypeBSpecPrev("codeTypeBSpecPrev");
        $this->assertEquals("codeTypeBSpecPrev", $obj->getCodeTypeBSpecPrev());
    }

    /**
     * Test setCodeTypeBrut()
     *
     * @return void
     */
    public function testSetCodeTypeBrut(): void {

        $obj = new Libelles();

        $obj->setCodeTypeBrut("codeTypeBrut");
        $this->assertEquals("codeTypeBrut", $obj->getCodeTypeBrut());
    }

    /**
     * Test setCodeTypePrev()
     *
     * @return void
     */
    public function testSetCodeTypePrev(): void {

        $obj = new Libelles();

        $obj->setCodeTypePrev("codeTypePrev");
        $this->assertEquals("codeTypePrev", $obj->getCodeTypePrev());
    }

    /**
     * Test setCodeTypeSomme()
     *
     * @return void
     */
    public function testSetCodeTypeSomme(): void {

        $obj = new Libelles();

        $obj->setCodeTypeSomme("codeTypeSomme");
        $this->assertEquals("codeTypeSomme", $obj->getCodeTypeSomme());
    }

    /**
     * Test setCompteCharge()
     *
     * @return void
     */
    public function testSetCompteCharge(): void {

        $obj = new Libelles();

        $obj->setCompteCharge("compteCharge");
        $this->assertEquals("compteCharge", $obj->getCompteCharge());
    }

    /**
     * Test setCondition()
     *
     * @return void
     */
    public function testSetCondition(): void {

        $obj = new Libelles();

        $obj->setCondition("condition");
        $this->assertEquals("condition", $obj->getCondition());
    }

    /**
     * Test setConditionSpec()
     *
     * @return void
     */
    public function testSetConditionSpec(): void {

        $obj = new Libelles();

        $obj->setConditionSpec("conditionSpec");
        $this->assertEquals("conditionSpec", $obj->getConditionSpec());
    }

    /**
     * Test setCongePaye()
     *
     * @return void
     */
    public function testSetCongePaye(): void {

        $obj = new Libelles();

        $obj->setCongePaye(true);
        $this->assertTrue($obj->getCongePaye());
    }

    /**
     * Test setCotisNormalDues()
     *
     * @return void
     */
    public function testSetCotisNormalDues(): void {

        $obj = new Libelles();

        $obj->setCotisNormalDues(true);
        $this->assertTrue($obj->getCotisNormalDues());
    }

    /**
     * Test setCotisNormalDuesAccre()
     *
     * @return void
     */
    public function testSetCotisNormalDuesAccre(): void {

        $obj = new Libelles();

        $obj->setCotisNormalDuesAccre(true);
        $this->assertTrue($obj->getCotisNormalDuesAccre());
    }

    /**
     * Test setCotisNormalDuesZfu()
     *
     * @return void
     */
    public function testSetCotisNormalDuesZfu(): void {

        $obj = new Libelles();

        $obj->setCotisNormalDuesZfu(true);
        $this->assertTrue($obj->getCotisNormalDuesZfu());
    }

    /**
     * Test setCotisNormalDuesZrd()
     *
     * @return void
     */
    public function testSetCotisNormalDuesZrd(): void {

        $obj = new Libelles();

        $obj->setCotisNormalDuesZrd(true);
        $this->assertTrue($obj->getCotisNormalDuesZrd());
    }

    /**
     * Test setCotisNormalDuesZrrzru()
     *
     * @return void
     */
    public function testSetCotisNormalDuesZrrzru(): void {

        $obj = new Libelles();

        $obj->setCotisNormalDuesZrrzru(true);
        $this->assertTrue($obj->getCotisNormalDuesZrrzru());
    }

    /**
     * Test setCotisationCsg()
     *
     * @return void
     */
    public function testSetCotisationCsg(): void {

        $obj = new Libelles();

        $obj->setCotisationCsg(true);
        $this->assertTrue($obj->getCotisationCsg());
    }

    /**
     * Test setCoutGlobal()
     *
     * @return void
     */
    public function testSetCoutGlobal(): void {

        $obj = new Libelles();

        $obj->setCoutGlobal(true);
        $this->assertTrue($obj->getCoutGlobal());
    }

    /**
     * Test setDebPerApplication()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDebPerApplication(): void {

        // Set a Date/time mock.
        $debPerApplication = new DateTime("2018-09-10");

        $obj = new Libelles();

        $obj->setDebPerApplication($debPerApplication);
        $this->assertSame($debPerApplication, $obj->getDebPerApplication());
    }

    /**
     * Test setDetermineAllegement()
     *
     * @return void
     */
    public function testSetDetermineAllegement(): void {

        $obj = new Libelles();

        $obj->setDetermineAllegement(true);
        $this->assertTrue($obj->getDetermineAllegement());
    }

    /**
     * Test setDetermineBaseSecu()
     *
     * @return void
     */
    public function testSetDetermineBaseSecu(): void {

        $obj = new Libelles();

        $obj->setDetermineBaseSecu(true);
        $this->assertTrue($obj->getDetermineBaseSecu());
    }

    /**
     * Test setDiminueNet()
     *
     * @return void
     */
    public function testSetDiminueNet(): void {

        $obj = new Libelles();

        $obj->setDiminueNet(true);
        $this->assertTrue($obj->getDiminueNet());
    }

    /**
     * Test setEditionBase()
     *
     * @return void
     */
    public function testSetEditionBase(): void {

        $obj = new Libelles();

        $obj->setEditionBase(true);
        $this->assertTrue($obj->getEditionBase());
    }

    /**
     * Test setEditionBulletin()
     *
     * @return void
     */
    public function testSetEditionBulletin(): void {

        $obj = new Libelles();

        $obj->setEditionBulletin(true);
        $this->assertTrue($obj->getEditionBulletin());
    }

    /**
     * Test setEditionCotPatronale()
     *
     * @return void
     */
    public function testSetEditionCotPatronale(): void {

        $obj = new Libelles();

        $obj->setEditionCotPatronale(true);
        $this->assertTrue($obj->getEditionCotPatronale());
    }

    /**
     * Test setEditionForceeDs()
     *
     * @return void
     */
    public function testSetEditionForceeDs(): void {

        $obj = new Libelles();

        $obj->setEditionForceeDs(true);
        $this->assertTrue($obj->getEditionForceeDs());
    }

    /**
     * Test setEditionResultat()
     *
     * @return void
     */
    public function testSetEditionResultat(): void {

        $obj = new Libelles();

        $obj->setEditionResultat(true);
        $this->assertTrue($obj->getEditionResultat());
    }

    /**
     * Test setEditionTaux()
     *
     * @return void
     */
    public function testSetEditionTaux(): void {

        $obj = new Libelles();

        $obj->setEditionTaux(true);
        $this->assertTrue($obj->getEditionTaux());
    }

    /**
     * Test setExclureLoiTepa()
     *
     * @return void
     */
    public function testSetExclureLoiTepa(): void {

        $obj = new Libelles();

        $obj->setExclureLoiTepa(true);
        $this->assertTrue($obj->getExclureLoiTepa());
    }

    /**
     * Test setExoOccasionnelMsa()
     *
     * @return void
     */
    public function testSetExoOccasionnelMsa(): void {

        $obj = new Libelles();

        $obj->setExoOccasionnelMsa(true);
        $this->assertTrue($obj->getExoOccasionnelMsa());
    }

    /**
     * Test setExoTauxPatronal()
     *
     * @return void
     */
    public function testSetExoTauxPatronal(): void {

        $obj = new Libelles();

        $obj->setExoTauxPatronal(true);
        $this->assertTrue($obj->getExoTauxPatronal());
    }

    /**
     * Test setExpatriation()
     *
     * @return void
     */
    public function testSetExpatriation(): void {

        $obj = new Libelles();

        $obj->setExpatriation(true);
        $this->assertTrue($obj->getExpatriation());
    }

    /**
     * Test setFillonAdom()
     *
     * @return void
     */
    public function testSetFillonAdom(): void {

        $obj = new Libelles();

        $obj->setFillonAdom(true);
        $this->assertTrue($obj->getFillonAdom());
    }

    /**
     * Test setFillonSap()
     *
     * @return void
     */
    public function testSetFillonSap(): void {

        $obj = new Libelles();

        $obj->setFillonSap(true);
        $this->assertTrue($obj->getFillonSap());
    }

    /**
     * Test setFinPerApplication()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetFinPerApplication(): void {

        // Set a Date/time mock.
        $finPerApplication = new DateTime("2018-09-10");

        $obj = new Libelles();

        $obj->setFinPerApplication($finPerApplication);
        $this->assertSame($finPerApplication, $obj->getFinPerApplication());
    }

    /**
     * Test setFraisProfessionnel()
     *
     * @return void
     */
    public function testSetFraisProfessionnel(): void {

        $obj = new Libelles();

        $obj->setFraisProfessionnel(true);
        $this->assertTrue($obj->getFraisProfessionnel());
    }

    /**
     * Test setFraisSante()
     *
     * @return void
     */
    public function testSetFraisSante(): void {

        $obj = new Libelles();

        $obj->setFraisSante(true);
        $this->assertTrue($obj->getFraisSante());
    }

    /**
     * Test setFreq1()
     *
     * @return void
     */
    public function testSetFreq1(): void {

        $obj = new Libelles();

        $obj->setFreq1(true);
        $this->assertTrue($obj->getFreq1());
    }

    /**
     * Test setFreq10()
     *
     * @return void
     */
    public function testSetFreq10(): void {

        $obj = new Libelles();

        $obj->setFreq10(true);
        $this->assertTrue($obj->getFreq10());
    }

    /**
     * Test setFreq11()
     *
     * @return void
     */
    public function testSetFreq11(): void {

        $obj = new Libelles();

        $obj->setFreq11(true);
        $this->assertTrue($obj->getFreq11());
    }

    /**
     * Test setFreq12()
     *
     * @return void
     */
    public function testSetFreq12(): void {

        $obj = new Libelles();

        $obj->setFreq12(true);
        $this->assertTrue($obj->getFreq12());
    }

    /**
     * Test setFreq2()
     *
     * @return void
     */
    public function testSetFreq2(): void {

        $obj = new Libelles();

        $obj->setFreq2(true);
        $this->assertTrue($obj->getFreq2());
    }

    /**
     * Test setFreq3()
     *
     * @return void
     */
    public function testSetFreq3(): void {

        $obj = new Libelles();

        $obj->setFreq3(true);
        $this->assertTrue($obj->getFreq3());
    }

    /**
     * Test setFreq4()
     *
     * @return void
     */
    public function testSetFreq4(): void {

        $obj = new Libelles();

        $obj->setFreq4(true);
        $this->assertTrue($obj->getFreq4());
    }

    /**
     * Test setFreq5()
     *
     * @return void
     */
    public function testSetFreq5(): void {

        $obj = new Libelles();

        $obj->setFreq5(true);
        $this->assertTrue($obj->getFreq5());
    }

    /**
     * Test setFreq6()
     *
     * @return void
     */
    public function testSetFreq6(): void {

        $obj = new Libelles();

        $obj->setFreq6(true);
        $this->assertTrue($obj->getFreq6());
    }

    /**
     * Test setFreq7()
     *
     * @return void
     */
    public function testSetFreq7(): void {

        $obj = new Libelles();

        $obj->setFreq7(true);
        $this->assertTrue($obj->getFreq7());
    }

    /**
     * Test setFreq8()
     *
     * @return void
     */
    public function testSetFreq8(): void {

        $obj = new Libelles();

        $obj->setFreq8(true);
        $this->assertTrue($obj->getFreq8());
    }

    /**
     * Test setFreq9()
     *
     * @return void
     */
    public function testSetFreq9(): void {

        $obj = new Libelles();

        $obj->setFreq9(true);
        $this->assertTrue($obj->getFreq9());
    }

    /**
     * Test setHSupLoiTepa()
     *
     * @return void
     */
    public function testSetHSupLoiTepa(): void {

        $obj = new Libelles();

        $obj->setHSupLoiTepa(true);
        $this->assertTrue($obj->getHSupLoiTepa());
    }

    /**
     * Test setHSupStructurelle()
     *
     * @return void
     */
    public function testSetHSupStructurelle(): void {

        $obj = new Libelles();

        $obj->setHSupStructurelle(true);
        $this->assertTrue($obj->getHSupStructurelle());
    }

    /**
     * Test setIdInstitution()
     *
     * @return void
     */
    public function testSetIdInstitution(): void {

        $obj = new Libelles();

        $obj->setIdInstitution("idInstitution");
        $this->assertEquals("idInstitution", $obj->getIdInstitution());
    }

    /**
     * Test setIjss()
     *
     * @return void
     */
    public function testSetIjss(): void {

        $obj = new Libelles();

        $obj->setIjss(true);
        $this->assertTrue($obj->getIjss());
    }

    /**
     * Test setImputEpargneRet()
     *
     * @return void
     */
    public function testSetImputEpargneRet(): void {

        $obj = new Libelles();

        $obj->setImputEpargneRet(true);
        $this->assertTrue($obj->getImputEpargneRet());
    }

    /**
     * Test setIndemniteNonImposable()
     *
     * @return void
     */
    public function testSetIndemniteNonImposable(): void {

        $obj = new Libelles();

        $obj->setIndemniteNonImposable(true);
        $this->assertTrue($obj->getIndemniteNonImposable());
    }

    /**
     * Test setIntervientBrutAl()
     *
     * @return void
     */
    public function testSetIntervientBrutAl(): void {

        $obj = new Libelles();

        $obj->setIntervientBrutAl(true);
        $this->assertTrue($obj->getIntervientBrutAl());
    }

    /**
     * Test setIntervientIndemPreca()
     *
     * @return void
     */
    public function testSetIntervientIndemPreca(): void {

        $obj = new Libelles();

        $obj->setIntervientIndemPreca(true);
        $this->assertTrue($obj->getIntervientIndemPreca());
    }

    /**
     * Test setIntervientTauxHAbCp()
     *
     * @return void
     */
    public function testSetIntervientTauxHAbCp(): void {

        $obj = new Libelles();

        $obj->setIntervientTauxHAbCp("intervientTauxHAbCp");
        $this->assertEquals("intervientTauxHAbCp", $obj->getIntervientTauxHAbCp());
    }

    /**
     * Test setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new Libelles();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Test setIntituleDucs()
     *
     * @return void
     */
    public function testSetIntituleDucs(): void {

        $obj = new Libelles();

        $obj->setIntituleDucs("intituleDucs");
        $this->assertEquals("intituleDucs", $obj->getIntituleDucs());
    }

    /**
     * Test setMaintienSalaire()
     *
     * @return void
     */
    public function testSetMaintienSalaire(): void {

        $obj = new Libelles();

        $obj->setMaintienSalaire(true);
        $this->assertTrue($obj->getMaintienSalaire());
    }

    /**
     * Test setMoisDebFixe()
     *
     * @return void
     */
    public function testSetMoisDebFixe(): void {

        $obj = new Libelles();

        $obj->setMoisDebFixe("moisDebFixe");
        $this->assertEquals("moisDebFixe", $obj->getMoisDebFixe());
    }

    /**
     * Test setMoisEchu()
     *
     * @return void
     */
    public function testSetMoisEchu(): void {

        $obj = new Libelles();

        $obj->setMoisEchu(true);
        $this->assertTrue($obj->getMoisEchu());
    }

    /**
     * Test setMoisFinFixe()
     *
     * @return void
     */
    public function testSetMoisFinFixe(): void {

        $obj = new Libelles();

        $obj->setMoisFinFixe("moisFinFixe");
        $this->assertEquals("moisFinFixe", $obj->getMoisFinFixe());
    }

    /**
     * Test setMontantGlobal()
     *
     * @return void
     */
    public function testSetMontantGlobal(): void {

        $obj = new Libelles();

        $obj->setMontantGlobal(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantGlobal());
    }

    /**
     * Test setMontantSalarial()
     *
     * @return void
     */
    public function testSetMontantSalarial(): void {

        $obj = new Libelles();

        $obj->setMontantSalarial(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSalarial());
    }

    /**
     * Test setNbHContract()
     *
     * @return void
     */
    public function testSetNbHContract(): void {

        $obj = new Libelles();

        $obj->setNbHContract(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHContract());
    }

    /**
     * Test setNbMoisApplic()
     *
     * @return void
     */
    public function testSetNbMoisApplic(): void {

        $obj = new Libelles();

        $obj->setNbMoisApplic(10);
        $this->assertEquals(10, $obj->getNbMoisApplic());
    }

    /**
     * Test setNeutre()
     *
     * @return void
     */
    public function testSetNeutre(): void {

        $obj = new Libelles();

        $obj->setNeutre(true);
        $this->assertTrue($obj->getNeutre());
    }

    /**
     * Test setNumColAcbs()
     *
     * @return void
     */
    public function testSetNumColAcbs(): void {

        $obj = new Libelles();

        $obj->setNumColAcbs("numColAcbs");
        $this->assertEquals("numColAcbs", $obj->getNumColAcbs());
    }

    /**
     * Test setNumColAllege35h()
     *
     * @return void
     */
    public function testSetNumColAllege35h(): void {

        $obj = new Libelles();

        $obj->setNumColAllege35h("numColAllege35h");
        $this->assertEquals("numColAllege35h", $obj->getNumColAllege35h());
    }

    /**
     * Test setNumColChargesCafe()
     *
     * @return void
     */
    public function testSetNumColChargesCafe(): void {

        $obj = new Libelles();

        $obj->setNumColChargesCafe("numColChargesCafe");
        $this->assertEquals("numColChargesCafe", $obj->getNumColChargesCafe());
    }

    /**
     * Test setNumCumulBulletin()
     *
     * @return void
     */
    public function testSetNumCumulBulletin(): void {

        $obj = new Libelles();

        $obj->setNumCumulBulletin(10);
        $this->assertEquals(10, $obj->getNumCumulBulletin());
    }

    /**
     * Test setNumCumulPatron()
     *
     * @return void
     */
    public function testSetNumCumulPatron(): void {

        $obj = new Libelles();

        $obj->setNumCumulPatron(10);
        $this->assertEquals(10, $obj->getNumCumulPatron());
    }

    /**
     * Test setNumTauxConstNat()
     *
     * @return void
     */
    public function testSetNumTauxConstNat(): void {

        $obj = new Libelles();

        $obj->setNumTauxConstNat(10);
        $this->assertEquals(10, $obj->getNumTauxConstNat());
    }

    /**
     * Test setPartPatronPrevoyance()
     *
     * @return void
     */
    public function testSetPartPatronPrevoyance(): void {

        $obj = new Libelles();

        $obj->setPartPatronPrevoyance(true);
        $this->assertTrue($obj->getPartPatronPrevoyance());
    }

    /**
     * Test setPeriodicite()
     *
     * @return void
     */
    public function testSetPeriodicite(): void {

        $obj = new Libelles();

        $obj->setPeriodicite("periodicite");
        $this->assertEquals("periodicite", $obj->getPeriodicite());
    }

    /**
     * Test setPourboire()
     *
     * @return void
     */
    public function testSetPourboire(): void {

        $obj = new Libelles();

        $obj->setPourboire(true);
        $this->assertTrue($obj->getPourboire());
    }

    /**
     * Test setPrevoyance()
     *
     * @return void
     */
    public function testSetPrevoyance(): void {

        $obj = new Libelles();

        $obj->setPrevoyance(true);
        $this->assertTrue($obj->getPrevoyance());
    }

    /**
     * Test setPrevoyanceComp()
     *
     * @return void
     */
    public function testSetPrevoyanceComp(): void {

        $obj = new Libelles();

        $obj->setPrevoyanceComp(true);
        $this->assertTrue($obj->getPrevoyanceComp());
    }

    /**
     * Test setPrimeNonProratisee()
     *
     * @return void
     */
    public function testSetPrimeNonProratisee(): void {

        $obj = new Libelles();

        $obj->setPrimeNonProratisee(true);
        $this->assertTrue($obj->getPrimeNonProratisee());
    }

    /**
     * Test setPrimeServitudeTravail()
     *
     * @return void
     */
    public function testSetPrimeServitudeTravail(): void {

        $obj = new Libelles();

        $obj->setPrimeServitudeTravail(true);
        $this->assertTrue($obj->getPrimeServitudeTravail());
    }

    /**
     * Test setQualifiantCotis()
     *
     * @return void
     */
    public function testSetQualifiantCotis(): void {

        $obj = new Libelles();

        $obj->setQualifiantCotis("qualifiantCotis");
        $this->assertEquals("qualifiantCotis", $obj->getQualifiantCotis());
    }

    /**
     * Test setRegleCalcul()
     *
     * @return void
     */
    public function testSetRegleCalcul(): void {

        $obj = new Libelles();

        $obj->setRegleCalcul("regleCalcul");
        $this->assertEquals("regleCalcul", $obj->getRegleCalcul());
    }

    /**
     * Test setRegleTaux()
     *
     * @return void
     */
    public function testSetRegleTaux(): void {

        $obj = new Libelles();

        $obj->setRegleTaux("regleTaux");
        $this->assertEquals("regleTaux", $obj->getRegleTaux());
    }

    /**
     * Test setRemiseAZero()
     *
     * @return void
     */
    public function testSetRemiseAZero(): void {

        $obj = new Libelles();

        $obj->setRemiseAZero(true);
        $this->assertTrue($obj->getRemiseAZero());
    }

    /**
     * Test setResultMt()
     *
     * @return void
     */
    public function testSetResultMt(): void {

        $obj = new Libelles();

        $obj->setResultMt(true);
        $this->assertTrue($obj->getResultMt());
    }

    /**
     * Test setResultatDucs()
     *
     * @return void
     */
    public function testSetResultatDucs(): void {

        $obj = new Libelles();

        $obj->setResultatDucs(true);
        $this->assertTrue($obj->getResultatDucs());
    }

    /**
     * Test setRetenueSalaire()
     *
     * @return void
     */
    public function testSetRetenueSalaire(): void {

        $obj = new Libelles();

        $obj->setRetenueSalaire(true);
        $this->assertTrue($obj->getRetenueSalaire());
    }

    /**
     * Test setRetenueSource()
     *
     * @return void
     */
    public function testSetRetenueSource(): void {

        $obj = new Libelles();

        $obj->setRetenueSource(true);
        $this->assertTrue($obj->getRetenueSource());
    }

    /**
     * Test setRetraiteObligatoire()
     *
     * @return void
     */
    public function testSetRetraiteObligatoire(): void {

        $obj = new Libelles();

        $obj->setRetraiteObligatoire(true);
        $this->assertTrue($obj->getRetraiteObligatoire());
    }

    /**
     * Test setRetraiteSupp()
     *
     * @return void
     */
    public function testSetRetraiteSupp(): void {

        $obj = new Libelles();

        $obj->setRetraiteSupp(true);
        $this->assertTrue($obj->getRetraiteSupp());
    }

    /**
     * Test setSalaireCp()
     *
     * @return void
     */
    public function testSetSalaireCp(): void {

        $obj = new Libelles();

        $obj->setSalaireCp(true);
        $this->assertTrue($obj->getSalaireCp());
    }

    /**
     * Test setSansReintegrationSociale()
     *
     * @return void
     */
    public function testSetSansReintegrationSociale(): void {

        $obj = new Libelles();

        $obj->setSansReintegrationSociale(true);
        $this->assertTrue($obj->getSansReintegrationSociale());
    }

    /**
     * Test setSoumisAbattement()
     *
     * @return void
     */
    public function testSetSoumisAbattement(): void {

        $obj = new Libelles();

        $obj->setSoumisAbattement(true);
        $this->assertTrue($obj->getSoumisAbattement());
    }

    /**
     * Test setSoumisCrds100()
     *
     * @return void
     */
    public function testSetSoumisCrds100(): void {

        $obj = new Libelles();

        $obj->setSoumisCrds100(true);
        $this->assertTrue($obj->getSoumisCrds100());
    }

    /**
     * Test setSoumisCsg()
     *
     * @return void
     */
    public function testSetSoumisCsg(): void {

        $obj = new Libelles();

        $obj->setSoumisCsg(true);
        $this->assertTrue($obj->getSoumisCsg());
    }

    /**
     * Test setSoumisCsg100()
     *
     * @return void
     */
    public function testSetSoumisCsg100(): void {

        $obj = new Libelles();

        $obj->setSoumisCsg100(true);
        $this->assertTrue($obj->getSoumisCsg100());
    }

    /**
     * Test setSoumisForfaitSocial()
     *
     * @return void
     */
    public function testSetSoumisForfaitSocial(): void {

        $obj = new Libelles();

        $obj->setSoumisForfaitSocial(true);
        $this->assertTrue($obj->getSoumisForfaitSocial());
    }

    /**
     * Test setSoumisRds()
     *
     * @return void
     */
    public function testSetSoumisRds(): void {

        $obj = new Libelles();

        $obj->setSoumisRds(true);
        $this->assertTrue($obj->getSoumisRds());
    }

    /**
     * Test setTauxDuLibelle()
     *
     * @return void
     */
    public function testSetTauxDuLibelle(): void {

        $obj = new Libelles();

        $obj->setTauxDuLibelle(true);
        $this->assertTrue($obj->getTauxDuLibelle());
    }

    /**
     * Test setTauxForfaitSocial()
     *
     * @return void
     */
    public function testSetTauxForfaitSocial(): void {

        $obj = new Libelles();

        $obj->setTauxForfaitSocial("tauxForfaitSocial");
        $this->assertEquals("tauxForfaitSocial", $obj->getTauxForfaitSocial());
    }

    /**
     * Test setTauxPatronalDadsu()
     *
     * @return void
     */
    public function testSetTauxPatronalDadsu(): void {

        $obj = new Libelles();

        $obj->setTauxPatronalDadsu(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPatronalDadsu());
    }

    /**
     * Test setTauxSalarialDadsu()
     *
     * @return void
     */
    public function testSetTauxSalarialDadsu(): void {

        $obj = new Libelles();

        $obj->setTauxSalarialDadsu(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSalarialDadsu());
    }

    /**
     * Test setTypeAbsenceHSup()
     *
     * @return void
     */
    public function testSetTypeAbsenceHSup(): void {

        $obj = new Libelles();

        $obj->setTypeAbsenceHSup("typeAbsenceHSup");
        $this->assertEquals("typeAbsenceHSup", $obj->getTypeAbsenceHSup());
    }

    /**
     * Test setTypeAvantage()
     *
     * @return void
     */
    public function testSetTypeAvantage(): void {

        $obj = new Libelles();

        $obj->setTypeAvantage("typeAvantage");
        $this->assertEquals("typeAvantage", $obj->getTypeAvantage());
    }

    /**
     * Test setTypeBaseCotisation()
     *
     * @return void
     */
    public function testSetTypeBaseCotisation(): void {

        $obj = new Libelles();

        $obj->setTypeBaseCotisation("typeBaseCotisation");
        $this->assertEquals("typeBaseCotisation", $obj->getTypeBaseCotisation());
    }

    /**
     * Test setTypeCotis()
     *
     * @return void
     */
    public function testSetTypeCotis(): void {

        $obj = new Libelles();

        $obj->setTypeCotis("typeCotis");
        $this->assertEquals("typeCotis", $obj->getTypeCotis());
    }

    /**
     * Test setTypeDateAnc()
     *
     * @return void
     */
    public function testSetTypeDateAnc(): void {

        $obj = new Libelles();

        $obj->setTypeDateAnc(10);
        $this->assertEquals(10, $obj->getTypeDateAnc());
    }

    /**
     * Test setTypeDonneeDadsu()
     *
     * @return void
     */
    public function testSetTypeDonneeDadsu(): void {

        $obj = new Libelles();

        $obj->setTypeDonneeDadsu("typeDonneeDadsu");
        $this->assertEquals("typeDonneeDadsu", $obj->getTypeDonneeDadsu());
    }

    /**
     * Test setTypeFrais()
     *
     * @return void
     */
    public function testSetTypeFrais(): void {

        $obj = new Libelles();

        $obj->setTypeFrais("typeFrais");
        $this->assertEquals("typeFrais", $obj->getTypeFrais());
    }

    /**
     * Test setTypeHSupLoiTepa()
     *
     * @return void
     */
    public function testSetTypeHSupLoiTepa(): void {

        $obj = new Libelles();

        $obj->setTypeHSupLoiTepa("typeHSupLoiTepa");
        $this->assertEquals("typeHSupLoiTepa", $obj->getTypeHSupLoiTepa());
    }

    /**
     * Test setTypeHeFillon()
     *
     * @return void
     */
    public function testSetTypeHeFillon(): void {

        $obj = new Libelles();

        $obj->setTypeHeFillon("typeHeFillon");
        $this->assertEquals("typeHeFillon", $obj->getTypeHeFillon());
    }

    /**
     * Test setTypeHeure()
     *
     * @return void
     */
    public function testSetTypeHeure(): void {

        $obj = new Libelles();

        $obj->setTypeHeure("typeHeure");
        $this->assertEquals("typeHeure", $obj->getTypeHeure());
    }

    /**
     * Test setTypeHeureSup()
     *
     * @return void
     */
    public function testSetTypeHeureSup(): void {

        $obj = new Libelles();

        $obj->setTypeHeureSup("typeHeureSup");
        $this->assertEquals("typeHeureSup", $obj->getTypeHeureSup());
    }

    /**
     * Test setTypeOrga()
     *
     * @return void
     */
    public function testSetTypeOrga(): void {

        $obj = new Libelles();

        $obj->setTypeOrga("typeOrga");
        $this->assertEquals("typeOrga", $obj->getTypeOrga());
    }

    /**
     * Test setTypeProratisationPrime()
     *
     * @return void
     */
    public function testSetTypeProratisationPrime(): void {

        $obj = new Libelles();

        $obj->setTypeProratisationPrime("typeProratisationPrime");
        $this->assertEquals("typeProratisationPrime", $obj->getTypeProratisationPrime());
    }

    /**
     * Test setTypeTranche()
     *
     * @return void
     */
    public function testSetTypeTranche(): void {

        $obj = new Libelles();

        $obj->setTypeTranche("typeTranche");
        $this->assertEquals("typeTranche", $obj->getTypeTranche());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Libelles();

        $this->assertNull($obj->getACompterHeuresAssedic());
        $this->assertNull($obj->getAConserverSetp());
        $this->assertNull($obj->getACumulerBaseCp());
        $this->assertNull($obj->getACumulerBaseCaisse1());
        $this->assertNull($obj->getACumulerBaseCaisse2());
        $this->assertNull($obj->getACumulerBaseCaisse3());
        $this->assertNull($obj->getACumulerBaseSecu());
        $this->assertNull($obj->getAenLienPresenceEffective());
        $this->assertNull($obj->getAReintegrerSetp());
        $this->assertNull($obj->getActiveVariablesEmp());
        $this->assertNull($obj->getAgff());
        $this->assertNull($obj->getAvantageNaturePrime());
        $this->assertNull($obj->getAvantageNatureTds());
        $this->assertNull($obj->getAvecRetroAct());
        $this->assertNull($obj->getBaseExoneree());
        $this->assertNull($obj->getBaseNonExoneree());
        $this->assertNull($obj->getCategSalarie());
        $this->assertNull($obj->getChequeVacance());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeCsgTaux());
        $this->assertNull($obj->getCodeCalcul());
        $this->assertNull($obj->getCodeDucs());
        $this->assertNull($obj->getCodeEditionHisto());
        $this->assertNull($obj->getCodeInsee());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodeRds());
        $this->assertNull($obj->getCodeTypeAssurance());
        $this->assertNull($obj->getCodeTypeBPlaf());
        $this->assertNull($obj->getCodeTypeBSpecPrev());
        $this->assertNull($obj->getCodeTypeBrut());
        $this->assertNull($obj->getCodeTypePrev());
        $this->assertNull($obj->getCodeTypeSomme());
        $this->assertNull($obj->getCompteCharge());
        $this->assertNull($obj->getCondition());
        $this->assertNull($obj->getConditionSpec());
        $this->assertNull($obj->getCongePaye());
        $this->assertNull($obj->getCotisNormalDues());
        $this->assertNull($obj->getCotisNormalDuesAccre());
        $this->assertNull($obj->getCotisNormalDuesZfu());
        $this->assertNull($obj->getCotisNormalDuesZrd());
        $this->assertNull($obj->getCotisNormalDuesZrrzru());
        $this->assertNull($obj->getCotisationCsg());
        $this->assertNull($obj->getCoutGlobal());
        $this->assertNull($obj->getDebPerApplication());
        $this->assertNull($obj->getDetermineAllegement());
        $this->assertNull($obj->getDetermineBaseSecu());
        $this->assertNull($obj->getDiminueNet());
        $this->assertNull($obj->getEditionBase());
        $this->assertNull($obj->getEditionBulletin());
        $this->assertNull($obj->getEditionCotPatronale());
        $this->assertNull($obj->getEditionForceeDs());
        $this->assertNull($obj->getEditionResultat());
        $this->assertNull($obj->getEditionTaux());
        $this->assertNull($obj->getExclureLoiTepa());
        $this->assertNull($obj->getExoOccasionnelMsa());
        $this->assertNull($obj->getExoTauxPatronal());
        $this->assertNull($obj->getExpatriation());
        $this->assertNull($obj->getFillonAdom());
        $this->assertNull($obj->getFillonSap());
        $this->assertNull($obj->getFinPerApplication());
        $this->assertNull($obj->getFraisProfessionnel());
        $this->assertNull($obj->getFraisSante());
        $this->assertNull($obj->getFreq1());
        $this->assertNull($obj->getFreq10());
        $this->assertNull($obj->getFreq11());
        $this->assertNull($obj->getFreq12());
        $this->assertNull($obj->getFreq2());
        $this->assertNull($obj->getFreq3());
        $this->assertNull($obj->getFreq4());
        $this->assertNull($obj->getFreq5());
        $this->assertNull($obj->getFreq6());
        $this->assertNull($obj->getFreq7());
        $this->assertNull($obj->getFreq8());
        $this->assertNull($obj->getFreq9());
        $this->assertNull($obj->getHSupLoiTepa());
        $this->assertNull($obj->getHSupStructurelle());
        $this->assertNull($obj->getIdInstitution());
        $this->assertNull($obj->getIjss());
        $this->assertNull($obj->getImputEpargneRet());
        $this->assertNull($obj->getIndemniteNonImposable());
        $this->assertNull($obj->getIntervientBrutAl());
        $this->assertNull($obj->getIntervientIndemPreca());
        $this->assertNull($obj->getIntervientTauxHAbCp());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getIntituleDucs());
        $this->assertNull($obj->getMaintienSalaire());
        $this->assertNull($obj->getMoisDebFixe());
        $this->assertNull($obj->getMoisEchu());
        $this->assertNull($obj->getMoisFinFixe());
        $this->assertNull($obj->getMontantGlobal());
        $this->assertNull($obj->getMontantSalarial());
        $this->assertNull($obj->getNbHContract());
        $this->assertNull($obj->getNbMoisApplic());
        $this->assertNull($obj->getNeutre());
        $this->assertNull($obj->getNumColAcbs());
        $this->assertNull($obj->getNumColAllege35h());
        $this->assertNull($obj->getNumColChargesCafe());
        $this->assertNull($obj->getNumCumulBulletin());
        $this->assertNull($obj->getNumCumulPatron());
        $this->assertNull($obj->getNumTauxConstNat());
        $this->assertNull($obj->getPartPatronPrevoyance());
        $this->assertNull($obj->getPeriodicite());
        $this->assertNull($obj->getPourboire());
        $this->assertNull($obj->getPrevoyance());
        $this->assertNull($obj->getPrevoyanceComp());
        $this->assertNull($obj->getPrimeNonProratisee());
        $this->assertNull($obj->getPrimeServitudeTravail());
        $this->assertNull($obj->getQualifiantCotis());
        $this->assertNull($obj->getRegleCalcul());
        $this->assertNull($obj->getRegleTaux());
        $this->assertNull($obj->getRemiseAZero());
        $this->assertNull($obj->getResultMt());
        $this->assertNull($obj->getResultatDucs());
        $this->assertNull($obj->getRetenueSalaire());
        $this->assertNull($obj->getRetenueSource());
        $this->assertNull($obj->getRetraiteObligatoire());
        $this->assertNull($obj->getRetraiteSupp());
        $this->assertNull($obj->getSalaireCp());
        $this->assertNull($obj->getSansReintegrationSociale());
        $this->assertNull($obj->getSoumisAbattement());
        $this->assertNull($obj->getSoumisCrds100());
        $this->assertNull($obj->getSoumisCsg());
        $this->assertNull($obj->getSoumisCsg100());
        $this->assertNull($obj->getSoumisForfaitSocial());
        $this->assertNull($obj->getSoumisRds());
        $this->assertNull($obj->getTauxDuLibelle());
        $this->assertNull($obj->getTauxForfaitSocial());
        $this->assertNull($obj->getTauxPatronalDadsu());
        $this->assertNull($obj->getTauxSalarialDadsu());
        $this->assertNull($obj->getTypeAbsenceHSup());
        $this->assertNull($obj->getTypeAvantage());
        $this->assertNull($obj->getTypeBaseCotisation());
        $this->assertNull($obj->getTypeCotis());
        $this->assertNull($obj->getTypeDateAnc());
        $this->assertNull($obj->getTypeDonneeDadsu());
        $this->assertNull($obj->getTypeFrais());
        $this->assertNull($obj->getTypeHeFillon());
        $this->assertNull($obj->getTypeHSupLoiTepa());
        $this->assertNull($obj->getTypeHeure());
        $this->assertNull($obj->getTypeHeureSup());
        $this->assertNull($obj->getTypeOrga());
        $this->assertNull($obj->getTypeProratisationPrime());
        $this->assertNull($obj->getTypeTranche());
    }
}
