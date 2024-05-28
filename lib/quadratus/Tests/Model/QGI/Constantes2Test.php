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

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QGI\Constantes2;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Constantes2 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class Constantes2Test extends AbstractTestCase {

    /**
     * Test setActivationConf2CmavCli()
     *
     * @return void
     */
    public function testSetActivationConf2CmavCli(): void {

        $obj = new Constantes2();

        $obj->setActivationConf2CmavCli(true);
        $this->assertTrue($obj->getActivationConf2CmavCli());
    }

    /**
     * Test setActiveConfConvCol()
     *
     * @return void
     */
    public function testSetActiveConfConvCol(): void {

        $obj = new Constantes2();

        $obj->setActiveConfConvCol(true);
        $this->assertTrue($obj->getActiveConfConvCol());
    }

    /**
     * Test setActiverSaisieRegl()
     *
     * @return void
     */
    public function testSetActiverSaisieRegl(): void {

        $obj = new Constantes2();

        $obj->setActiverSaisieRegl(true);
        $this->assertTrue($obj->getActiverSaisieRegl());
    }

    /**
     * Test setAffectationsCliFrn()
     *
     * @return void
     */
    public function testSetAffectationsCliFrn(): void {

        $obj = new Constantes2();

        $obj->setAffectationsCliFrn(true);
        $this->assertTrue($obj->getAffectationsCliFrn());
    }

    /**
     * Test setAnnulationAffaire()
     *
     * @return void
     */
    public function testSetAnnulationAffaire(): void {

        $obj = new Constantes2();

        $obj->setAnnulationAffaire(true);
        $this->assertTrue($obj->getAnnulationAffaire());
    }

    /**
     * Test setArticlesLstPersoAccesGestionModifiables()
     *
     * @return void
     */
    public function testSetArticlesLstPersoAccesGestionModifiables(): void {

        $obj = new Constantes2();

        $obj->setArticlesLstPersoAccesGestionModifiables(true);
        $this->assertTrue($obj->getArticlesLstPersoAccesGestionModifiables());
    }

    /**
     * Test setArticlesLstPersoAccesGestionnaire()
     *
     * @return void
     */
    public function testSetArticlesLstPersoAccesGestionnaire(): void {

        $obj = new Constantes2();

        $obj->setArticlesLstPersoAccesGestionnaire(true);
        $this->assertTrue($obj->getArticlesLstPersoAccesGestionnaire());
    }

    /**
     * Test setArticlesLstPersoChampsModif()
     *
     * @return void
     */
    public function testSetArticlesLstPersoChampsModif(): void {

        $obj = new Constantes2();

        $obj->setArticlesLstPersoChampsModif(true);
        $this->assertTrue($obj->getArticlesLstPersoChampsModif());
    }

    /**
     * Test setArticlesLstPersoCopieColonne()
     *
     * @return void
     */
    public function testSetArticlesLstPersoCopieColonne(): void {

        $obj = new Constantes2();

        $obj->setArticlesLstPersoCopieColonne(true);
        $this->assertTrue($obj->getArticlesLstPersoCopieColonne());
    }

    /**
     * Test setArticlesLstPersoInterdireCreat()
     *
     * @return void
     */
    public function testSetArticlesLstPersoInterdireCreat(): void {

        $obj = new Constantes2();

        $obj->setArticlesLstPersoInterdireCreat(true);
        $this->assertTrue($obj->getArticlesLstPersoInterdireCreat());
    }

    /**
     * Test setAspAffectationMessages()
     *
     * @return void
     */
    public function testSetAspAffectationMessages(): void {

        $obj = new Constantes2();

        $obj->setAspAffectationMessages("aspAffectationMessages");
        $this->assertEquals("aspAffectationMessages", $obj->getAspAffectationMessages());
    }

    /**
     * Test setAvecHeuresTheo()
     *
     * @return void
     */
    public function testSetAvecHeuresTheo(): void {

        $obj = new Constantes2();

        $obj->setAvecHeuresTheo(true);
        $this->assertTrue($obj->getAvecHeuresTheo());
    }

    /**
     * Test setCalculNombreMessages()
     *
     * @return void
     */
    public function testSetCalculNombreMessages(): void {

        $obj = new Constantes2();

        $obj->setCalculNombreMessages(true);
        $this->assertTrue($obj->getCalculNombreMessages());
    }

    /**
     * Test setChampsCritereArticle21()
     *
     * @return void
     */
    public function testSetChampsCritereArticle21(): void {

        $obj = new Constantes2();

        $obj->setChampsCritereArticle21("champsCritereArticle21");
        $this->assertEquals("champsCritereArticle21", $obj->getChampsCritereArticle21());
    }

    /**
     * Test setChampsCritereArticle210()
     *
     * @return void
     */
    public function testSetChampsCritereArticle210(): void {

        $obj = new Constantes2();

        $obj->setChampsCritereArticle210("champsCritereArticle210");
        $this->assertEquals("champsCritereArticle210", $obj->getChampsCritereArticle210());
    }

    /**
     * Test setChampsCritereArticle22()
     *
     * @return void
     */
    public function testSetChampsCritereArticle22(): void {

        $obj = new Constantes2();

        $obj->setChampsCritereArticle22("champsCritereArticle22");
        $this->assertEquals("champsCritereArticle22", $obj->getChampsCritereArticle22());
    }

    /**
     * Test setChampsCritereArticle23()
     *
     * @return void
     */
    public function testSetChampsCritereArticle23(): void {

        $obj = new Constantes2();

        $obj->setChampsCritereArticle23("champsCritereArticle23");
        $this->assertEquals("champsCritereArticle23", $obj->getChampsCritereArticle23());
    }

    /**
     * Test setChampsCritereArticle24()
     *
     * @return void
     */
    public function testSetChampsCritereArticle24(): void {

        $obj = new Constantes2();

        $obj->setChampsCritereArticle24("champsCritereArticle24");
        $this->assertEquals("champsCritereArticle24", $obj->getChampsCritereArticle24());
    }

    /**
     * Test setChampsCritereArticle25()
     *
     * @return void
     */
    public function testSetChampsCritereArticle25(): void {

        $obj = new Constantes2();

        $obj->setChampsCritereArticle25("champsCritereArticle25");
        $this->assertEquals("champsCritereArticle25", $obj->getChampsCritereArticle25());
    }

    /**
     * Test setChampsCritereArticle26()
     *
     * @return void
     */
    public function testSetChampsCritereArticle26(): void {

        $obj = new Constantes2();

        $obj->setChampsCritereArticle26("champsCritereArticle26");
        $this->assertEquals("champsCritereArticle26", $obj->getChampsCritereArticle26());
    }

    /**
     * Test setChampsCritereArticle27()
     *
     * @return void
     */
    public function testSetChampsCritereArticle27(): void {

        $obj = new Constantes2();

        $obj->setChampsCritereArticle27("champsCritereArticle27");
        $this->assertEquals("champsCritereArticle27", $obj->getChampsCritereArticle27());
    }

    /**
     * Test setChampsCritereArticle28()
     *
     * @return void
     */
    public function testSetChampsCritereArticle28(): void {

        $obj = new Constantes2();

        $obj->setChampsCritereArticle28("champsCritereArticle28");
        $this->assertEquals("champsCritereArticle28", $obj->getChampsCritereArticle28());
    }

    /**
     * Test setChampsCritereArticle29()
     *
     * @return void
     */
    public function testSetChampsCritereArticle29(): void {

        $obj = new Constantes2();

        $obj->setChampsCritereArticle29("champsCritereArticle29");
        $this->assertEquals("champsCritereArticle29", $obj->getChampsCritereArticle29());
    }

    /**
     * Test setChampsCritereEntPieceAc1()
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc1(): void {

        $obj = new Constantes2();

        $obj->setChampsCritereEntPieceAc1("champsCritereEntPieceAc1");
        $this->assertEquals("champsCritereEntPieceAc1", $obj->getChampsCritereEntPieceAc1());
    }

    /**
     * Test setChampsCritereEntPieceAc10()
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc10(): void {

        $obj = new Constantes2();

        $obj->setChampsCritereEntPieceAc10("champsCritereEntPieceAc10");
        $this->assertEquals("champsCritereEntPieceAc10", $obj->getChampsCritereEntPieceAc10());
    }

    /**
     * Test setChampsCritereEntPieceAc2()
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc2(): void {

        $obj = new Constantes2();

        $obj->setChampsCritereEntPieceAc2("champsCritereEntPieceAc2");
        $this->assertEquals("champsCritereEntPieceAc2", $obj->getChampsCritereEntPieceAc2());
    }

    /**
     * Test setChampsCritereEntPieceAc3()
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc3(): void {

        $obj = new Constantes2();

        $obj->setChampsCritereEntPieceAc3("champsCritereEntPieceAc3");
        $this->assertEquals("champsCritereEntPieceAc3", $obj->getChampsCritereEntPieceAc3());
    }

    /**
     * Test setChampsCritereEntPieceAc4()
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc4(): void {

        $obj = new Constantes2();

        $obj->setChampsCritereEntPieceAc4("champsCritereEntPieceAc4");
        $this->assertEquals("champsCritereEntPieceAc4", $obj->getChampsCritereEntPieceAc4());
    }

    /**
     * Test setChampsCritereEntPieceAc5()
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc5(): void {

        $obj = new Constantes2();

        $obj->setChampsCritereEntPieceAc5("champsCritereEntPieceAc5");
        $this->assertEquals("champsCritereEntPieceAc5", $obj->getChampsCritereEntPieceAc5());
    }

    /**
     * Test setChampsCritereEntPieceAc6()
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc6(): void {

        $obj = new Constantes2();

        $obj->setChampsCritereEntPieceAc6("champsCritereEntPieceAc6");
        $this->assertEquals("champsCritereEntPieceAc6", $obj->getChampsCritereEntPieceAc6());
    }

    /**
     * Test setChampsCritereEntPieceAc7()
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc7(): void {

        $obj = new Constantes2();

        $obj->setChampsCritereEntPieceAc7("champsCritereEntPieceAc7");
        $this->assertEquals("champsCritereEntPieceAc7", $obj->getChampsCritereEntPieceAc7());
    }

    /**
     * Test setChampsCritereEntPieceAc8()
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc8(): void {

        $obj = new Constantes2();

        $obj->setChampsCritereEntPieceAc8("champsCritereEntPieceAc8");
        $this->assertEquals("champsCritereEntPieceAc8", $obj->getChampsCritereEntPieceAc8());
    }

    /**
     * Test setChampsCritereEntPieceAc9()
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc9(): void {

        $obj = new Constantes2();

        $obj->setChampsCritereEntPieceAc9("champsCritereEntPieceAc9");
        $this->assertEquals("champsCritereEntPieceAc9", $obj->getChampsCritereEntPieceAc9());
    }

    /**
     * Test setCleAccesConf()
     *
     * @return void
     */
    public function testSetCleAccesConf(): void {

        $obj = new Constantes2();

        $obj->setCleAccesConf("cleAccesConf");
        $this->assertEquals("cleAccesConf", $obj->getCleAccesConf());
    }

    /**
     * Test setCleAccesPlaquettes()
     *
     * @return void
     */
    public function testSetCleAccesPlaquettes(): void {

        $obj = new Constantes2();

        $obj->setCleAccesPlaquettes("cleAccesPlaquettes");
        $this->assertEquals("cleAccesPlaquettes", $obj->getCleAccesPlaquettes());
    }

    /**
     * Test setCleAccesQAdminDb()
     *
     * @return void
     */
    public function testSetCleAccesQAdminDb(): void {

        $obj = new Constantes2();

        $obj->setCleAccesQAdminDb("cleAccesQAdminDb");
        $this->assertEquals("cleAccesQAdminDb", $obj->getCleAccesQAdminDb());
    }

    /**
     * Test setClotureArchivageAuto()
     *
     * @return void
     */
    public function testSetClotureArchivageAuto(): void {

        $obj = new Constantes2();

        $obj->setClotureArchivageAuto(true);
        $this->assertTrue($obj->getClotureArchivageAuto());
    }

    /**
     * Test setCodeClientQuadratus()
     *
     * @return void
     */
    public function testSetCodeClientQuadratus(): void {

        $obj = new Constantes2();

        $obj->setCodeClientQuadratus("codeClientQuadratus");
        $this->assertEquals("codeClientQuadratus", $obj->getCodeClientQuadratus());
    }

    /**
     * Test setCompteurFilDiscussion()
     *
     * @return void
     */
    public function testSetCompteurFilDiscussion(): void {

        $obj = new Constantes2();

        $obj->setCompteurFilDiscussion(10);
        $this->assertEquals(10, $obj->getCompteurFilDiscussion());
    }

    /**
     * Test setConfidentialiteAffaire()
     *
     * @return void
     */
    public function testSetConfidentialiteAffaire(): void {

        $obj = new Constantes2();

        $obj->setConfidentialiteAffaire(true);
        $this->assertTrue($obj->getConfidentialiteAffaire());
    }

    /**
     * Test setCoutMoyenHoraire()
     *
     * @return void
     */
    public function testSetCoutMoyenHoraire(): void {

        $obj = new Constantes2();

        $obj->setCoutMoyenHoraire(10.092018);
        $this->assertEquals(10.092018, $obj->getCoutMoyenHoraire());
    }

    /**
     * Test setCreateCli1FactParBl()
     *
     * @return void
     */
    public function testSetCreateCli1FactParBl(): void {

        $obj = new Constantes2();

        $obj->setCreateCli1FactParBl(true);
        $this->assertTrue($obj->getCreateCli1FactParBl());
    }

    /**
     * Test setCreationAffaire()
     *
     * @return void
     */
    public function testSetCreationAffaire(): void {

        $obj = new Constantes2();

        $obj->setCreationAffaire(true);
        $this->assertTrue($obj->getCreationAffaire());
    }

    /**
     * Test setDateDha()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDha(): void {

        // Set a Date/time mock.
        $dateDha = new DateTime("2018-09-10");

        $obj = new Constantes2();

        $obj->setDateDha($dateDha);
        $this->assertSame($dateDha, $obj->getDateDha());
    }

    /**
     * Test setDateLastExeQpubWeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateLastExeQpubWeb(): void {

        // Set a Date/time mock.
        $dateLastExeQpubWeb = new DateTime("2018-09-10");

        $obj = new Constantes2();

        $obj->setDateLastExeQpubWeb($dateLastExeQpubWeb);
        $this->assertSame($dateLastExeQpubWeb, $obj->getDateLastExeQpubWeb());
    }

    /**
     * Test setDatePha()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDatePha(): void {

        // Set a Date/time mock.
        $datePha = new DateTime("2018-09-10");

        $obj = new Constantes2();

        $obj->setDatePha($datePha);
        $this->assertSame($datePha, $obj->getDatePha());
    }

    /**
     * Test setDerniereVersionCd()
     *
     * @return void
     */
    public function testSetDerniereVersionCd(): void {

        $obj = new Constantes2();

        $obj->setDerniereVersionCd("derniereVersionCd");
        $this->assertEquals("derniereVersionCd", $obj->getDerniereVersionCd());
    }

    /**
     * Test setDroitCollabVisuDocuments()
     *
     * @return void
     */
    public function testSetDroitCollabVisuDocuments(): void {

        $obj = new Constantes2();

        $obj->setDroitCollabVisuDocuments(true);
        $this->assertTrue($obj->getDroitCollabVisuDocuments());
    }

    /**
     * Test setEchDetailAff()
     *
     * @return void
     */
    public function testSetEchDetailAff(): void {

        $obj = new Constantes2();

        $obj->setEchDetailAff(true);
        $this->assertTrue($obj->getEchDetailAff());
    }

    /**
     * Test setEtebacDestMessage()
     *
     * @return void
     */
    public function testSetEtebacDestMessage(): void {

        $obj = new Constantes2();

        $obj->setEtebacDestMessage("etebacDestMessage");
        $this->assertEquals("etebacDestMessage", $obj->getEtebacDestMessage());
    }

    /**
     * Test setFGsurAc()
     *
     * @return void
     */
    public function testSetFGsurAc(): void {

        $obj = new Constantes2();

        $obj->setFGsurAc(true);
        $this->assertTrue($obj->getFGsurAc());
    }

    /**
     * Test setFGsurMonf()
     *
     * @return void
     */
    public function testSetFGsurMonf(): void {

        $obj = new Constantes2();

        $obj->setFGsurMonf(true);
        $this->assertTrue($obj->getFGsurMonf());
    }

    /**
     * Test setFamillesLiees()
     *
     * @return void
     */
    public function testSetFamillesLiees(): void {

        $obj = new Constantes2();

        $obj->setFamillesLiees(true);
        $this->assertTrue($obj->getFamillesLiees());
    }

    /**
     * Test setFgSurCdeFrn()
     *
     * @return void
     */
    public function testSetFgSurCdeFrn(): void {

        $obj = new Constantes2();

        $obj->setFgSurCdeFrn(true);
        $this->assertTrue($obj->getFgSurCdeFrn());
    }

    /**
     * Test setFicheCliNePasProposerCreationDpdc()
     *
     * @return void
     */
    public function testSetFicheCliNePasProposerCreationDpdc(): void {

        $obj = new Constantes2();

        $obj->setFicheCliNePasProposerCreationDpdc(true);
        $this->assertTrue($obj->getFicheCliNePasProposerCreationDpdc());
    }

    /**
     * Test setGestionGammes()
     *
     * @return void
     */
    public function testSetGestionGammes(): void {

        $obj = new Constantes2();

        $obj->setGestionGammes(true);
        $this->assertTrue($obj->getGestionGammes());
    }

    /**
     * Test setGestionPointeuseQFact()
     *
     * @return void
     */
    public function testSetGestionPointeuseQFact(): void {

        $obj = new Constantes2();

        $obj->setGestionPointeuseQFact(true);
        $this->assertTrue($obj->getGestionPointeuseQFact());
    }

    /**
     * Test setGestionPointeuseQc()
     *
     * @return void
     */
    public function testSetGestionPointeuseQc(): void {

        $obj = new Constantes2();

        $obj->setGestionPointeuseQc(true);
        $this->assertTrue($obj->getGestionPointeuseQc());
    }

    /**
     * Test setGestionPointeuseQgi()
     *
     * @return void
     */
    public function testSetGestionPointeuseQgi(): void {

        $obj = new Constantes2();

        $obj->setGestionPointeuseQgi(true);
        $this->assertTrue($obj->getGestionPointeuseQgi());
    }

    /**
     * Test setGestionPointeuseQp()
     *
     * @return void
     */
    public function testSetGestionPointeuseQp(): void {

        $obj = new Constantes2();

        $obj->setGestionPointeuseQp(true);
        $this->assertTrue($obj->getGestionPointeuseQp());
    }

    /**
     * Test setGestionTarifsTransporteurs()
     *
     * @return void
     */
    public function testSetGestionTarifsTransporteurs(): void {

        $obj = new Constantes2();

        $obj->setGestionTarifsTransporteurs(true);
        $this->assertTrue($obj->getGestionTarifsTransporteurs());
    }

    /**
     * Test setGestionTarifsTransporteursNbDec()
     *
     * @return void
     */
    public function testSetGestionTarifsTransporteursNbDec(): void {

        $obj = new Constantes2();

        $obj->setGestionTarifsTransporteursNbDec(10);
        $this->assertEquals(10, $obj->getGestionTarifsTransporteursNbDec());
    }

    /**
     * Test setGestionVariantes()
     *
     * @return void
     */
    public function testSetGestionVariantes(): void {

        $obj = new Constantes2();

        $obj->setGestionVariantes(true);
        $this->assertTrue($obj->getGestionVariantes());
    }

    /**
     * Test setHtAvecJoursFeries()
     *
     * @return void
     */
    public function testSetHtAvecJoursFeries(): void {

        $obj = new Constantes2();

        $obj->setHtAvecJoursFeries(true);
        $this->assertTrue($obj->getHtAvecJoursFeries());
    }

    /**
     * Test setHtAvecSaisieConges()
     *
     * @return void
     */
    public function testSetHtAvecSaisieConges(): void {

        $obj = new Constantes2();

        $obj->setHtAvecSaisieConges(true);
        $this->assertTrue($obj->getHtAvecSaisieConges());
    }

    /**
     * Test setHtAvecSaisieCongesCodesClients()
     *
     * @return void
     */
    public function testSetHtAvecSaisieCongesCodesClients(): void {

        $obj = new Constantes2();

        $obj->setHtAvecSaisieCongesCodesClients("htAvecSaisieCongesCodesClients");
        $this->assertEquals("htAvecSaisieCongesCodesClients", $obj->getHtAvecSaisieCongesCodesClients());
    }

    /**
     * Test setHtAvecSaisieCongesCodesTaches()
     *
     * @return void
     */
    public function testSetHtAvecSaisieCongesCodesTaches(): void {

        $obj = new Constantes2();

        $obj->setHtAvecSaisieCongesCodesTaches("htAvecSaisieCongesCodesTaches");
        $this->assertEquals("htAvecSaisieCongesCodesTaches", $obj->getHtAvecSaisieCongesCodesTaches());
    }

    /**
     * Test setIncremAutoArticle()
     *
     * @return void
     */
    public function testSetIncremAutoArticle(): void {

        $obj = new Constantes2();

        $obj->setIncremAutoArticle(true);
        $this->assertTrue($obj->getIncremAutoArticle());
    }

    /**
     * Test setInterdireAccesArchivesCpta()
     *
     * @return void
     */
    public function testSetInterdireAccesArchivesCpta(): void {

        $obj = new Constantes2();

        $obj->setInterdireAccesArchivesCpta(true);
        $this->assertTrue($obj->getInterdireAccesArchivesCpta());
    }

    /**
     * Test setInterdireAccesArchivesPaie()
     *
     * @return void
     */
    public function testSetInterdireAccesArchivesPaie(): void {

        $obj = new Constantes2();

        $obj->setInterdireAccesArchivesPaie(true);
        $this->assertTrue($obj->getInterdireAccesArchivesPaie());
    }

    /**
     * Test setInterdireAccesEditionBalance()
     *
     * @return void
     */
    public function testSetInterdireAccesEditionBalance(): void {

        $obj = new Constantes2();

        $obj->setInterdireAccesEditionBalance(true);
        $this->assertTrue($obj->getInterdireAccesEditionBalance());
    }

    /**
     * Test setInterdireAccesSuppDocArch()
     *
     * @return void
     */
    public function testSetInterdireAccesSuppDocArch(): void {

        $obj = new Constantes2();

        $obj->setInterdireAccesSuppDocArch(true);
        $this->assertTrue($obj->getInterdireAccesSuppDocArch());
    }

    /**
     * Test setInterdirePubliDocWeb()
     *
     * @return void
     */
    public function testSetInterdirePubliDocWeb(): void {

        $obj = new Constantes2();

        $obj->setInterdirePubliDocWeb(true);
        $this->assertTrue($obj->getInterdirePubliDocWeb());
    }

    /**
     * Test setIpPriveQws()
     *
     * @return void
     */
    public function testSetIpPriveQws(): void {

        $obj = new Constantes2();

        $obj->setIpPriveQws("ipPriveQws");
        $this->assertEquals("ipPriveQws", $obj->getIpPriveQws());
    }

    /**
     * Test setLiaisonTda()
     *
     * @return void
     */
    public function testSetLiaisonTda(): void {

        $obj = new Constantes2();

        $obj->setLiaisonTda(true);
        $this->assertTrue($obj->getLiaisonTda());
    }

    /**
     * Test setLibAffectationFrn1()
     *
     * @return void
     */
    public function testSetLibAffectationFrn1(): void {

        $obj = new Constantes2();

        $obj->setLibAffectationFrn1("libAffectationFrn1");
        $this->assertEquals("libAffectationFrn1", $obj->getLibAffectationFrn1());
    }

    /**
     * Test setLibAffectationFrn2()
     *
     * @return void
     */
    public function testSetLibAffectationFrn2(): void {

        $obj = new Constantes2();

        $obj->setLibAffectationFrn2("libAffectationFrn2");
        $this->assertEquals("libAffectationFrn2", $obj->getLibAffectationFrn2());
    }

    /**
     * Test setLibAffectationFrn3()
     *
     * @return void
     */
    public function testSetLibAffectationFrn3(): void {

        $obj = new Constantes2();

        $obj->setLibAffectationFrn3("libAffectationFrn3");
        $this->assertEquals("libAffectationFrn3", $obj->getLibAffectationFrn3());
    }

    /**
     * Test setLibAffectationFrn4()
     *
     * @return void
     */
    public function testSetLibAffectationFrn4(): void {

        $obj = new Constantes2();

        $obj->setLibAffectationFrn4("libAffectationFrn4");
        $this->assertEquals("libAffectationFrn4", $obj->getLibAffectationFrn4());
    }

    /**
     * Test setLibAffectationFrn5()
     *
     * @return void
     */
    public function testSetLibAffectationFrn5(): void {

        $obj = new Constantes2();

        $obj->setLibAffectationFrn5("libAffectationFrn5");
        $this->assertEquals("libAffectationFrn5", $obj->getLibAffectationFrn5());
    }

    /**
     * Test setLibAffectationFrn6()
     *
     * @return void
     */
    public function testSetLibAffectationFrn6(): void {

        $obj = new Constantes2();

        $obj->setLibAffectationFrn6("libAffectationFrn6");
        $this->assertEquals("libAffectationFrn6", $obj->getLibAffectationFrn6());
    }

    /**
     * Test setLibAffectationFrn7()
     *
     * @return void
     */
    public function testSetLibAffectationFrn7(): void {

        $obj = new Constantes2();

        $obj->setLibAffectationFrn7("libAffectationFrn7");
        $this->assertEquals("libAffectationFrn7", $obj->getLibAffectationFrn7());
    }

    /**
     * Test setLibCritereArticle21()
     *
     * @return void
     */
    public function testSetLibCritereArticle21(): void {

        $obj = new Constantes2();

        $obj->setLibCritereArticle21("libCritereArticle21");
        $this->assertEquals("libCritereArticle21", $obj->getLibCritereArticle21());
    }

    /**
     * Test setLibCritereArticle210()
     *
     * @return void
     */
    public function testSetLibCritereArticle210(): void {

        $obj = new Constantes2();

        $obj->setLibCritereArticle210("libCritereArticle210");
        $this->assertEquals("libCritereArticle210", $obj->getLibCritereArticle210());
    }

    /**
     * Test setLibCritereArticle22()
     *
     * @return void
     */
    public function testSetLibCritereArticle22(): void {

        $obj = new Constantes2();

        $obj->setLibCritereArticle22("libCritereArticle22");
        $this->assertEquals("libCritereArticle22", $obj->getLibCritereArticle22());
    }

    /**
     * Test setLibCritereArticle23()
     *
     * @return void
     */
    public function testSetLibCritereArticle23(): void {

        $obj = new Constantes2();

        $obj->setLibCritereArticle23("libCritereArticle23");
        $this->assertEquals("libCritereArticle23", $obj->getLibCritereArticle23());
    }

    /**
     * Test setLibCritereArticle24()
     *
     * @return void
     */
    public function testSetLibCritereArticle24(): void {

        $obj = new Constantes2();

        $obj->setLibCritereArticle24("libCritereArticle24");
        $this->assertEquals("libCritereArticle24", $obj->getLibCritereArticle24());
    }

    /**
     * Test setLibCritereArticle25()
     *
     * @return void
     */
    public function testSetLibCritereArticle25(): void {

        $obj = new Constantes2();

        $obj->setLibCritereArticle25("libCritereArticle25");
        $this->assertEquals("libCritereArticle25", $obj->getLibCritereArticle25());
    }

    /**
     * Test setLibCritereArticle26()
     *
     * @return void
     */
    public function testSetLibCritereArticle26(): void {

        $obj = new Constantes2();

        $obj->setLibCritereArticle26("libCritereArticle26");
        $this->assertEquals("libCritereArticle26", $obj->getLibCritereArticle26());
    }

    /**
     * Test setLibCritereArticle27()
     *
     * @return void
     */
    public function testSetLibCritereArticle27(): void {

        $obj = new Constantes2();

        $obj->setLibCritereArticle27("libCritereArticle27");
        $this->assertEquals("libCritereArticle27", $obj->getLibCritereArticle27());
    }

    /**
     * Test setLibCritereArticle28()
     *
     * @return void
     */
    public function testSetLibCritereArticle28(): void {

        $obj = new Constantes2();

        $obj->setLibCritereArticle28("libCritereArticle28");
        $this->assertEquals("libCritereArticle28", $obj->getLibCritereArticle28());
    }

    /**
     * Test setLibCritereArticle29()
     *
     * @return void
     */
    public function testSetLibCritereArticle29(): void {

        $obj = new Constantes2();

        $obj->setLibCritereArticle29("libCritereArticle29");
        $this->assertEquals("libCritereArticle29", $obj->getLibCritereArticle29());
    }

    /**
     * Test setLibCritereEntPieceAc1()
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc1(): void {

        $obj = new Constantes2();

        $obj->setLibCritereEntPieceAc1("libCritereEntPieceAc1");
        $this->assertEquals("libCritereEntPieceAc1", $obj->getLibCritereEntPieceAc1());
    }

    /**
     * Test setLibCritereEntPieceAc10()
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc10(): void {

        $obj = new Constantes2();

        $obj->setLibCritereEntPieceAc10("libCritereEntPieceAc10");
        $this->assertEquals("libCritereEntPieceAc10", $obj->getLibCritereEntPieceAc10());
    }

    /**
     * Test setLibCritereEntPieceAc2()
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc2(): void {

        $obj = new Constantes2();

        $obj->setLibCritereEntPieceAc2("libCritereEntPieceAc2");
        $this->assertEquals("libCritereEntPieceAc2", $obj->getLibCritereEntPieceAc2());
    }

    /**
     * Test setLibCritereEntPieceAc3()
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc3(): void {

        $obj = new Constantes2();

        $obj->setLibCritereEntPieceAc3("libCritereEntPieceAc3");
        $this->assertEquals("libCritereEntPieceAc3", $obj->getLibCritereEntPieceAc3());
    }

    /**
     * Test setLibCritereEntPieceAc4()
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc4(): void {

        $obj = new Constantes2();

        $obj->setLibCritereEntPieceAc4("libCritereEntPieceAc4");
        $this->assertEquals("libCritereEntPieceAc4", $obj->getLibCritereEntPieceAc4());
    }

    /**
     * Test setLibCritereEntPieceAc5()
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc5(): void {

        $obj = new Constantes2();

        $obj->setLibCritereEntPieceAc5("libCritereEntPieceAc5");
        $this->assertEquals("libCritereEntPieceAc5", $obj->getLibCritereEntPieceAc5());
    }

    /**
     * Test setLibCritereEntPieceAc6()
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc6(): void {

        $obj = new Constantes2();

        $obj->setLibCritereEntPieceAc6("libCritereEntPieceAc6");
        $this->assertEquals("libCritereEntPieceAc6", $obj->getLibCritereEntPieceAc6());
    }

    /**
     * Test setLibCritereEntPieceAc7()
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc7(): void {

        $obj = new Constantes2();

        $obj->setLibCritereEntPieceAc7("libCritereEntPieceAc7");
        $this->assertEquals("libCritereEntPieceAc7", $obj->getLibCritereEntPieceAc7());
    }

    /**
     * Test setLibCritereEntPieceAc8()
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc8(): void {

        $obj = new Constantes2();

        $obj->setLibCritereEntPieceAc8("libCritereEntPieceAc8");
        $this->assertEquals("libCritereEntPieceAc8", $obj->getLibCritereEntPieceAc8());
    }

    /**
     * Test setLibCritereEntPieceAc9()
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc9(): void {

        $obj = new Constantes2();

        $obj->setLibCritereEntPieceAc9("libCritereEntPieceAc9");
        $this->assertEquals("libCritereEntPieceAc9", $obj->getLibCritereEntPieceAc9());
    }

    /**
     * Test setLibFrais1()
     *
     * @return void
     */
    public function testSetLibFrais1(): void {

        $obj = new Constantes2();

        $obj->setLibFrais1("libFrais1");
        $this->assertEquals("libFrais1", $obj->getLibFrais1());
    }

    /**
     * Test setLibFrais2()
     *
     * @return void
     */
    public function testSetLibFrais2(): void {

        $obj = new Constantes2();

        $obj->setLibFrais2("libFrais2");
        $this->assertEquals("libFrais2", $obj->getLibFrais2());
    }

    /**
     * Test setLibFrais3()
     *
     * @return void
     */
    public function testSetLibFrais3(): void {

        $obj = new Constantes2();

        $obj->setLibFrais3("libFrais3");
        $this->assertEquals("libFrais3", $obj->getLibFrais3());
    }

    /**
     * Test setLibelleGamme()
     *
     * @return void
     */
    public function testSetLibelleGamme(): void {

        $obj = new Constantes2();

        $obj->setLibelleGamme("libelleGamme");
        $this->assertEquals("libelleGamme", $obj->getLibelleGamme());
    }

    /**
     * Test setLibelleVariante()
     *
     * @return void
     */
    public function testSetLibelleVariante(): void {

        $obj = new Constantes2();

        $obj->setLibelleVariante("libelleVariante");
        $this->assertEquals("libelleVariante", $obj->getLibelleVariante());
    }

    /**
     * Test setLongueurNumAff()
     *
     * @return void
     */
    public function testSetLongueurNumAff(): void {

        $obj = new Constantes2();

        $obj->setLongueurNumAff(10);
        $this->assertEquals(10, $obj->getLongueurNumAff());
    }

    /**
     * Test setMajCodesActiviteCga()
     *
     * @return void
     */
    public function testSetMajCodesActiviteCga(): void {

        $obj = new Constantes2();

        $obj->setMajCodesActiviteCga("majCodesActiviteCga");
        $this->assertEquals("majCodesActiviteCga", $obj->getMajCodesActiviteCga());
    }

    /**
     * Test setMessAspod()
     *
     * @return void
     */
    public function testSetMessAspod(): void {

        $obj = new Constantes2();

        $obj->setMessAspod(true);
        $this->assertTrue($obj->getMessAspod());
    }

    /**
     * Test setModifAffaire()
     *
     * @return void
     */
    public function testSetModifAffaire(): void {

        $obj = new Constantes2();

        $obj->setModifAffaire("modifAffaire");
        $this->assertEquals("modifAffaire", $obj->getModifAffaire());
    }

    /**
     * Test setModifDroitsAsp()
     *
     * @return void
     */
    public function testSetModifDroitsAsp(): void {

        $obj = new Constantes2();

        $obj->setModifDroitsAsp(true);
        $this->assertTrue($obj->getModifDroitsAsp());
    }

    /**
     * Test setNbMaxGamme()
     *
     * @return void
     */
    public function testSetNbMaxGamme(): void {

        $obj = new Constantes2();

        $obj->setNbMaxGamme(10);
        $this->assertEquals(10, $obj->getNbMaxGamme());
    }

    /**
     * Test setNePasCreerCptCli()
     *
     * @return void
     */
    public function testSetNePasCreerCptCli(): void {

        $obj = new Constantes2();

        $obj->setNePasCreerCptCli(true);
        $this->assertTrue($obj->getNePasCreerCptCli());
    }

    /**
     * Test setNePasCreerCptFrn()
     *
     * @return void
     */
    public function testSetNePasCreerCptFrn(): void {

        $obj = new Constantes2();

        $obj->setNePasCreerCptFrn(true);
        $this->assertTrue($obj->getNePasCreerCptFrn());
    }

    /**
     * Test setNewDbInfos()
     *
     * @return void
     */
    public function testSetNewDbInfos(): void {

        $obj = new Constantes2();

        $obj->setNewDbInfos(true);
        $this->assertTrue($obj->getNewDbInfos());
    }

    /**
     * Test setNewQBureau()
     *
     * @return void
     */
    public function testSetNewQBureau(): void {

        $obj = new Constantes2();

        $obj->setNewQBureau(true);
        $this->assertTrue($obj->getNewQBureau());
    }

    /**
     * Test setNoDossFactCab()
     *
     * @return void
     */
    public function testSetNoDossFactCab(): void {

        $obj = new Constantes2();

        $obj->setNoDossFactCab("noDossFactCab");
        $this->assertEquals("noDossFactCab", $obj->getNoDossFactCab());
    }

    /**
     * Test setPasDeLienComptabilite()
     *
     * @return void
     */
    public function testSetPasDeLienComptabilite(): void {

        $obj = new Constantes2();

        $obj->setPasDeLienComptabilite(true);
        $this->assertTrue($obj->getPasDeLienComptabilite());
    }

    /**
     * Test setPmeDossierRattachement()
     *
     * @return void
     */
    public function testSetPmeDossierRattachement(): void {

        $obj = new Constantes2();

        $obj->setPmeDossierRattachement("pmeDossierRattachement");
        $this->assertEquals("pmeDossierRattachement", $obj->getPmeDossierRattachement());
    }

    /**
     * Test setPrefixeCodeClient()
     *
     * @return void
     */
    public function testSetPrefixeCodeClient(): void {

        $obj = new Constantes2();

        $obj->setPrefixeCodeClient("prefixeCodeClient");
        $this->assertEquals("prefixeCodeClient", $obj->getPrefixeCodeClient());
    }

    /**
     * Test setProchainCodeClient()
     *
     * @return void
     */
    public function testSetProchainCodeClient(): void {

        $obj = new Constantes2();

        $obj->setProchainCodeClient("prochainCodeClient");
        $this->assertEquals("prochainCodeClient", $obj->getProchainCodeClient());
    }

    /**
     * Test setProxyActif()
     *
     * @return void
     */
    public function testSetProxyActif(): void {

        $obj = new Constantes2();

        $obj->setProxyActif(true);
        $this->assertTrue($obj->getProxyActif());
    }

    /**
     * Test setProxyAdresse()
     *
     * @return void
     */
    public function testSetProxyAdresse(): void {

        $obj = new Constantes2();

        $obj->setProxyAdresse("proxyAdresse");
        $this->assertEquals("proxyAdresse", $obj->getProxyAdresse());
    }

    /**
     * Test setProxyPort()
     *
     * @return void
     */
    public function testSetProxyPort(): void {

        $obj = new Constantes2();

        $obj->setProxyPort(10);
        $this->assertEquals(10, $obj->getProxyPort());
    }

    /**
     * Test setQPubWebCodeCollaborateurDest()
     *
     * @return void
     */
    public function testSetQPubWebCodeCollaborateurDest(): void {

        $obj = new Constantes2();

        $obj->setQPubWebCodeCollaborateurDest("qPubWebCodeCollaborateurDest");
        $this->assertEquals("qPubWebCodeCollaborateurDest", $obj->getQPubWebCodeCollaborateurDest());
    }

    /**
     * Test setQwsCheminLogo()
     *
     * @return void
     */
    public function testSetQwsCheminLogo(): void {

        $obj = new Constantes2();

        $obj->setQwsCheminLogo("qwsCheminLogo");
        $this->assertEquals("qwsCheminLogo", $obj->getQwsCheminLogo());
    }

    /**
     * Test setQwsCodeIpl()
     *
     * @return void
     */
    public function testSetQwsCodeIpl(): void {

        $obj = new Constantes2();

        $obj->setQwsCodeIpl("qwsCodeIpl");
        $this->assertEquals("qwsCodeIpl", $obj->getQwsCodeIpl());
    }

    /**
     * Test setQwsHttpSecurise()
     *
     * @return void
     */
    public function testSetQwsHttpSecurise(): void {

        $obj = new Constantes2();

        $obj->setQwsHttpSecurise(true);
        $this->assertTrue($obj->getQwsHttpSecurise());
    }

    /**
     * Test setQwsNomProduit()
     *
     * @return void
     */
    public function testSetQwsNomProduit(): void {

        $obj = new Constantes2();

        $obj->setQwsNomProduit("qwsNomProduit");
        $this->assertEquals("qwsNomProduit", $obj->getQwsNomProduit());
    }

    /**
     * Test setQwsUtiliserLogoCabinet()
     *
     * @return void
     */
    public function testSetQwsUtiliserLogoCabinet(): void {

        $obj = new Constantes2();

        $obj->setQwsUtiliserLogoCabinet(true);
        $this->assertTrue($obj->getQwsUtiliserLogoCabinet());
    }

    /**
     * Test setQwsipl()
     *
     * @return void
     */
    public function testSetQwsipl(): void {

        $obj = new Constantes2();

        $obj->setQwsipl("qwsipl");
        $this->assertEquals("qwsipl", $obj->getQwsipl());
    }

    /**
     * Test setRacDataPaie()
     *
     * @return void
     */
    public function testSetRacDataPaie(): void {

        $obj = new Constantes2();

        $obj->setRacDataPaie("racDataPaie");
        $this->assertEquals("racDataPaie", $obj->getRacDataPaie());
    }

    /**
     * Test setRapportQInfos()
     *
     * @return void
     */
    public function testSetRapportQInfos(): void {

        $obj = new Constantes2();

        $obj->setRapportQInfos("rapportQInfos");
        $this->assertEquals("rapportQInfos", $obj->getRapportQInfos());
    }

    /**
     * Test setReqDemandeur()
     *
     * @return void
     */
    public function testSetReqDemandeur(): void {

        $obj = new Constantes2();

        $obj->setReqDemandeur("reqDemandeur");
        $this->assertEquals("reqDemandeur", $obj->getReqDemandeur());
    }

    /**
     * Test setSaisieProprieteMess()
     *
     * @return void
     */
    public function testSetSaisieProprieteMess(): void {

        $obj = new Constantes2();

        $obj->setSaisieProprieteMess(10);
        $this->assertEquals(10, $obj->getSaisieProprieteMess());
    }

    /**
     * Test setSaisieReglDirect()
     *
     * @return void
     */
    public function testSetSaisieReglDirect(): void {

        $obj = new Constantes2();

        $obj->setSaisieReglDirect(true);
        $this->assertTrue($obj->getSaisieReglDirect());
    }

    /**
     * Test setSaisieTempsNbJApres()
     *
     * @return void
     */
    public function testSetSaisieTempsNbJApres(): void {

        $obj = new Constantes2();

        $obj->setSaisieTempsNbJApres(10);
        $this->assertEquals(10, $obj->getSaisieTempsNbJApres());
    }

    /**
     * Test setSaisieTempsNbJAvant()
     *
     * @return void
     */
    public function testSetSaisieTempsNbJAvant(): void {

        $obj = new Constantes2();

        $obj->setSaisieTempsNbJAvant(10);
        $this->assertEquals(10, $obj->getSaisieTempsNbJAvant());
    }

    /**
     * Test setSaisieTpNePasAfficherDp()
     *
     * @return void
     */
    public function testSetSaisieTpNePasAfficherDp(): void {

        $obj = new Constantes2();

        $obj->setSaisieTpNePasAfficherDp(true);
        $this->assertTrue($obj->getSaisieTpNePasAfficherDp());
    }

    /**
     * Test setSaisieTpOngletUniqueDp()
     *
     * @return void
     */
    public function testSetSaisieTpOngletUniqueDp(): void {

        $obj = new Constantes2();

        $obj->setSaisieTpOngletUniqueDp(true);
        $this->assertTrue($obj->getSaisieTpOngletUniqueDp());
    }

    /**
     * Test setSaisieTpOngletUniqueTn()
     *
     * @return void
     */
    public function testSetSaisieTpOngletUniqueTn(): void {

        $obj = new Constantes2();

        $obj->setSaisieTpOngletUniqueTn(true);
        $this->assertTrue($obj->getSaisieTpOngletUniqueTn());
    }

    /**
     * Test setSaveHistoMemo2File()
     *
     * @return void
     */
    public function testSetSaveHistoMemo2File(): void {

        $obj = new Constantes2();

        $obj->setSaveHistoMemo2File(true);
        $this->assertTrue($obj->getSaveHistoMemo2File());
    }

    /**
     * Test setSelAvLstPersoAccesGestionModifiables()
     *
     * @return void
     */
    public function testSetSelAvLstPersoAccesGestionModifiables(): void {

        $obj = new Constantes2();

        $obj->setSelAvLstPersoAccesGestionModifiables(true);
        $this->assertTrue($obj->getSelAvLstPersoAccesGestionModifiables());
    }

    /**
     * Test setSelAvLstPersoAccesGestionnaire()
     *
     * @return void
     */
    public function testSetSelAvLstPersoAccesGestionnaire(): void {

        $obj = new Constantes2();

        $obj->setSelAvLstPersoAccesGestionnaire(true);
        $this->assertTrue($obj->getSelAvLstPersoAccesGestionnaire());
    }

    /**
     * Test setSelAvLstPersoChampsModif()
     *
     * @return void
     */
    public function testSetSelAvLstPersoChampsModif(): void {

        $obj = new Constantes2();

        $obj->setSelAvLstPersoChampsModif(true);
        $this->assertTrue($obj->getSelAvLstPersoChampsModif());
    }

    /**
     * Test setSelAvLstPersoCopieColonne()
     *
     * @return void
     */
    public function testSetSelAvLstPersoCopieColonne(): void {

        $obj = new Constantes2();

        $obj->setSelAvLstPersoCopieColonne(true);
        $this->assertTrue($obj->getSelAvLstPersoCopieColonne());
    }

    /**
     * Test setSelAvLstPersoInterdireCreat()
     *
     * @return void
     */
    public function testSetSelAvLstPersoInterdireCreat(): void {

        $obj = new Constantes2();

        $obj->setSelAvLstPersoInterdireCreat(true);
        $this->assertTrue($obj->getSelAvLstPersoInterdireCreat());
    }

    /**
     * Test setSmsApiKey()
     *
     * @return void
     */
    public function testSetSmsApiKey(): void {

        $obj = new Constantes2();

        $obj->setSmsApiKey("smsApiKey");
        $this->assertEquals("smsApiKey", $obj->getSmsApiKey());
    }

    /**
     * Test setSmsDroitAcces()
     *
     * @return void
     */
    public function testSetSmsDroitAcces(): void {

        $obj = new Constantes2();

        $obj->setSmsDroitAcces(true);
        $this->assertTrue($obj->getSmsDroitAcces());
    }

    /**
     * Test setSmsKey()
     *
     * @return void
     */
    public function testSetSmsKey(): void {

        $obj = new Constantes2();

        $obj->setSmsKey("smsKey");
        $this->assertEquals("smsKey", $obj->getSmsKey());
    }

    /**
     * Test setSmsPrestataire()
     *
     * @return void
     */
    public function testSetSmsPrestataire(): void {

        $obj = new Constantes2();

        $obj->setSmsPrestataire("smsPrestataire");
        $this->assertEquals("smsPrestataire", $obj->getSmsPrestataire());
    }

    /**
     * Test setSmsSender()
     *
     * @return void
     */
    public function testSetSmsSender(): void {

        $obj = new Constantes2();

        $obj->setSmsSender("smsSender");
        $this->assertEquals("smsSender", $obj->getSmsSender());
    }

    /**
     * Test setSmsType()
     *
     * @return void
     */
    public function testSetSmsType(): void {

        $obj = new Constantes2();

        $obj->setSmsType(10);
        $this->assertEquals(10, $obj->getSmsType());
    }

    /**
     * Test setSmsUserLogin()
     *
     * @return void
     */
    public function testSetSmsUserLogin(): void {

        $obj = new Constantes2();

        $obj->setSmsUserLogin("smsUserLogin");
        $this->assertEquals("smsUserLogin", $obj->getSmsUserLogin());
    }

    /**
     * Test setSoldeCptaOd()
     *
     * @return void
     */
    public function testSetSoldeCptaOd(): void {

        $obj = new Constantes2();

        $obj->setSoldeCptaOd(true);
        $this->assertTrue($obj->getSoldeCptaOd());
    }

    /**
     * Test setSuiviClientIntituleGeneric1()
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric1(): void {

        $obj = new Constantes2();

        $obj->setSuiviClientIntituleGeneric1("suiviClientIntituleGeneric1");
        $this->assertEquals("suiviClientIntituleGeneric1", $obj->getSuiviClientIntituleGeneric1());
    }

    /**
     * Test setSuiviClientIntituleGeneric10()
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric10(): void {

        $obj = new Constantes2();

        $obj->setSuiviClientIntituleGeneric10("suiviClientIntituleGeneric10");
        $this->assertEquals("suiviClientIntituleGeneric10", $obj->getSuiviClientIntituleGeneric10());
    }

    /**
     * Test setSuiviClientIntituleGeneric2()
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric2(): void {

        $obj = new Constantes2();

        $obj->setSuiviClientIntituleGeneric2("suiviClientIntituleGeneric2");
        $this->assertEquals("suiviClientIntituleGeneric2", $obj->getSuiviClientIntituleGeneric2());
    }

    /**
     * Test setSuiviClientIntituleGeneric3()
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric3(): void {

        $obj = new Constantes2();

        $obj->setSuiviClientIntituleGeneric3("suiviClientIntituleGeneric3");
        $this->assertEquals("suiviClientIntituleGeneric3", $obj->getSuiviClientIntituleGeneric3());
    }

    /**
     * Test setSuiviClientIntituleGeneric4()
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric4(): void {

        $obj = new Constantes2();

        $obj->setSuiviClientIntituleGeneric4("suiviClientIntituleGeneric4");
        $this->assertEquals("suiviClientIntituleGeneric4", $obj->getSuiviClientIntituleGeneric4());
    }

    /**
     * Test setSuiviClientIntituleGeneric5()
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric5(): void {

        $obj = new Constantes2();

        $obj->setSuiviClientIntituleGeneric5("suiviClientIntituleGeneric5");
        $this->assertEquals("suiviClientIntituleGeneric5", $obj->getSuiviClientIntituleGeneric5());
    }

    /**
     * Test setSuiviClientIntituleGeneric6()
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric6(): void {

        $obj = new Constantes2();

        $obj->setSuiviClientIntituleGeneric6("suiviClientIntituleGeneric6");
        $this->assertEquals("suiviClientIntituleGeneric6", $obj->getSuiviClientIntituleGeneric6());
    }

    /**
     * Test setSuiviClientIntituleGeneric7()
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric7(): void {

        $obj = new Constantes2();

        $obj->setSuiviClientIntituleGeneric7("suiviClientIntituleGeneric7");
        $this->assertEquals("suiviClientIntituleGeneric7", $obj->getSuiviClientIntituleGeneric7());
    }

    /**
     * Test setSuiviClientIntituleGeneric8()
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric8(): void {

        $obj = new Constantes2();

        $obj->setSuiviClientIntituleGeneric8("suiviClientIntituleGeneric8");
        $this->assertEquals("suiviClientIntituleGeneric8", $obj->getSuiviClientIntituleGeneric8());
    }

    /**
     * Test setSuiviClientIntituleGeneric9()
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric9(): void {

        $obj = new Constantes2();

        $obj->setSuiviClientIntituleGeneric9("suiviClientIntituleGeneric9");
        $this->assertEquals("suiviClientIntituleGeneric9", $obj->getSuiviClientIntituleGeneric9());
    }

    /**
     * Test setTpAccesEncoursClient()
     *
     * @return void
     */
    public function testSetTpAccesEncoursClient(): void {

        $obj = new Constantes2();

        $obj->setTpAccesEncoursClient(true);
        $this->assertTrue($obj->getTpAccesEncoursClient());
    }

    /**
     * Test setTpAvancementALaLigne()
     *
     * @return void
     */
    public function testSetTpAvancementALaLigne(): void {

        $obj = new Constantes2();

        $obj->setTpAvancementALaLigne(true);
        $this->assertTrue($obj->getTpAvancementALaLigne());
    }

    /**
     * Test setTpInterditQte()
     *
     * @return void
     */
    public function testSetTpInterditQte(): void {

        $obj = new Constantes2();

        $obj->setTpInterditQte(true);
        $this->assertTrue($obj->getTpInterditQte());
    }

    /**
     * Test setTpLibelleMission()
     *
     * @return void
     */
    public function testSetTpLibelleMission(): void {

        $obj = new Constantes2();

        $obj->setTpLibelleMission(true);
        $this->assertTrue($obj->getTpLibelleMission());
    }

    /**
     * Test setTpLimiteSaisieNonOperationnel()
     *
     * @return void
     */
    public function testSetTpLimiteSaisieNonOperationnel(): void {

        $obj = new Constantes2();

        $obj->setTpLimiteSaisieNonOperationnel(true);
        $this->assertTrue($obj->getTpLimiteSaisieNonOperationnel());
    }

    /**
     * Test setTpPasMoisCloture()
     *
     * @return void
     */
    public function testSetTpPasMoisCloture(): void {

        $obj = new Constantes2();

        $obj->setTpPasMoisCloture(true);
        $this->assertTrue($obj->getTpPasMoisCloture());
    }

    /**
     * Test setTpPourcentageNonOperationnelDate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetTpPourcentageNonOperationnelDate(): void {

        // Set a Date/time mock.
        $tpPourcentageNonOperationnelDate = new DateTime("2018-09-10");

        $obj = new Constantes2();

        $obj->setTpPourcentageNonOperationnelDate($tpPourcentageNonOperationnelDate);
        $this->assertSame($tpPourcentageNonOperationnelDate, $obj->getTpPourcentageNonOperationnelDate());
    }

    /**
     * Test setTpQteInvisible()
     *
     * @return void
     */
    public function testSetTpQteInvisible(): void {

        $obj = new Constantes2();

        $obj->setTpQteInvisible(true);
        $this->assertTrue($obj->getTpQteInvisible());
    }

    /**
     * Test setTpSaisieAvancement()
     *
     * @return void
     */
    public function testSetTpSaisieAvancement(): void {

        $obj = new Constantes2();

        $obj->setTpSaisieAvancement(true);
        $this->assertTrue($obj->getTpSaisieAvancement());
    }

    /**
     * Test setTppupv123()
     *
     * @return void
     */
    public function testSetTppupv123(): void {

        $obj = new Constantes2();

        $obj->setTppupv123(true);
        $this->assertTrue($obj->getTppupv123());
    }

    /**
     * Test setTpsNumArchive()
     *
     * @return void
     */
    public function testSetTpsNumArchive(): void {

        $obj = new Constantes2();

        $obj->setTpsNumArchive("tpsNumArchive");
        $this->assertEquals("tpsNumArchive", $obj->getTpsNumArchive());
    }

    /**
     * Test setTransVariantesFactgi()
     *
     * @return void
     */
    public function testSetTransVariantesFactgi(): void {

        $obj = new Constantes2();

        $obj->setTransVariantesFactgi(true);
        $this->assertTrue($obj->getTransVariantesFactgi());
    }

    /**
     * Test setTypeAffichageSoldeFourn()
     *
     * @return void
     */
    public function testSetTypeAffichageSoldeFourn(): void {

        $obj = new Constantes2();

        $obj->setTypeAffichageSoldeFourn("typeAffichageSoldeFourn");
        $this->assertEquals("typeAffichageSoldeFourn", $obj->getTypeAffichageSoldeFourn());
    }

    /**
     * Test setTypeFrais1()
     *
     * @return void
     */
    public function testSetTypeFrais1(): void {

        $obj = new Constantes2();

        $obj->setTypeFrais1(true);
        $this->assertTrue($obj->getTypeFrais1());
    }

    /**
     * Test setTypeFrais2()
     *
     * @return void
     */
    public function testSetTypeFrais2(): void {

        $obj = new Constantes2();

        $obj->setTypeFrais2(true);
        $this->assertTrue($obj->getTypeFrais2());
    }

    /**
     * Test setTypeFrais3()
     *
     * @return void
     */
    public function testSetTypeFrais3(): void {

        $obj = new Constantes2();

        $obj->setTypeFrais3(true);
        $this->assertTrue($obj->getTypeFrais3());
    }

    /**
     * Test setTypeSaisieTauxDevises()
     *
     * @return void
     */
    public function testSetTypeSaisieTauxDevises(): void {

        $obj = new Constantes2();

        $obj->setTypeSaisieTauxDevises("typeSaisieTauxDevises");
        $this->assertEquals("typeSaisieTauxDevises", $obj->getTypeSaisieTauxDevises());
    }

    /**
     * Test setVEsurDepAff()
     *
     * @return void
     */
    public function testSetVEsurDepAff(): void {

        $obj = new Constantes2();

        $obj->setVEsurDepAff(true);
        $this->assertTrue($obj->getVEsurDepAff());
    }

    /**
     * Test setValAutoTarifsTransporteurs()
     *
     * @return void
     */
    public function testSetValAutoTarifsTransporteurs(): void {

        $obj = new Constantes2();

        $obj->setValAutoTarifsTransporteurs(true);
        $this->assertTrue($obj->getValAutoTarifsTransporteurs());
    }

    /**
     * Test setVisualisationFicheCabinet()
     *
     * @return void
     */
    public function testSetVisualisationFicheCabinet(): void {

        $obj = new Constantes2();

        $obj->setVisualisationFicheCabinet(true);
        $this->assertTrue($obj->getVisualisationFicheCabinet());
    }

    /**
     * Test setWordAccesParQClient()
     *
     * @return void
     */
    public function testSetWordAccesParQClient(): void {

        $obj = new Constantes2();

        $obj->setWordAccesParQClient(true);
        $this->assertTrue($obj->getWordAccesParQClient());
    }

    /**
     * Test seteWsCabinet()
     *
     * @return void
     */
    public function testSeteWsCabinet(): void {

        $obj = new Constantes2();

        $obj->seteWsCabinet("eWsCabinet");
        $this->assertEquals("eWsCabinet", $obj->geteWsCabinet());
    }

    /**
     * Test seteWsCollId()
     *
     * @return void
     */
    public function testSeteWsCollId(): void {

        $obj = new Constantes2();

        $obj->seteWsCollId("eWsCollId");
        $this->assertEquals("eWsCollId", $obj->geteWsCollId());
    }

    /**
     * Test seteWsCollMdp()
     *
     * @return void
     */
    public function testSeteWsCollMdp(): void {

        $obj = new Constantes2();

        $obj->seteWsCollMdp("eWsCollMdp");
        $this->assertEquals("eWsCollMdp", $obj->geteWsCollMdp());
    }

    /**
     * Test seteWsSrvMdp()
     *
     * @return void
     */
    public function testSeteWsSrvMdp(): void {

        $obj = new Constantes2();

        $obj->seteWsSrvMdp("eWsSrvMdp");
        $this->assertEquals("eWsSrvMdp", $obj->geteWsSrvMdp());
    }

    /**
     * Test seteWsSrvName()
     *
     * @return void
     */
    public function testSeteWsSrvName(): void {

        $obj = new Constantes2();

        $obj->seteWsSrvName("eWsSrvName");
        $this->assertEquals("eWsSrvName", $obj->geteWsSrvName());
    }

    /**
     * Test seteWsSrvUtil()
     *
     * @return void
     */
    public function testSeteWsSrvUtil(): void {

        $obj = new Constantes2();

        $obj->seteWsSrvUtil("eWsSrvUtil");
        $this->assertEquals("eWsSrvUtil", $obj->geteWsSrvUtil());
    }

    /**
     * Test setlngCodeArticleAuto()
     *
     * @return void
     */
    public function testSetlngCodeArticleAuto(): void {

        $obj = new Constantes2();

        $obj->setlngCodeArticleAuto(10);
        $this->assertEquals(10, $obj->getlngCodeArticleAuto());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Constantes2();

        $this->assertNull($obj->getAspAffectationMessages());
        $this->assertNull($obj->getActivationConf2CmavCli());
        $this->assertNull($obj->getActiveConfConvCol());
        $this->assertNull($obj->getActiverSaisieRegl());
        $this->assertNull($obj->getAffectationsCliFrn());
        $this->assertNull($obj->getAnnulationAffaire());
        $this->assertNull($obj->getArticlesLstPersoAccesGestionModifiables());
        $this->assertNull($obj->getArticlesLstPersoAccesGestionnaire());
        $this->assertNull($obj->getArticlesLstPersoChampsModif());
        $this->assertNull($obj->getArticlesLstPersoCopieColonne());
        $this->assertNull($obj->getArticlesLstPersoInterdireCreat());
        $this->assertNull($obj->getAvecHeuresTheo());
        $this->assertNull($obj->getCalculNombreMessages());
        $this->assertNull($obj->getChampsCritereArticle21());
        $this->assertNull($obj->getChampsCritereArticle210());
        $this->assertNull($obj->getChampsCritereArticle22());
        $this->assertNull($obj->getChampsCritereArticle23());
        $this->assertNull($obj->getChampsCritereArticle24());
        $this->assertNull($obj->getChampsCritereArticle25());
        $this->assertNull($obj->getChampsCritereArticle26());
        $this->assertNull($obj->getChampsCritereArticle27());
        $this->assertNull($obj->getChampsCritereArticle28());
        $this->assertNull($obj->getChampsCritereArticle29());
        $this->assertNull($obj->getChampsCritereEntPieceAc1());
        $this->assertNull($obj->getChampsCritereEntPieceAc10());
        $this->assertNull($obj->getChampsCritereEntPieceAc2());
        $this->assertNull($obj->getChampsCritereEntPieceAc3());
        $this->assertNull($obj->getChampsCritereEntPieceAc4());
        $this->assertNull($obj->getChampsCritereEntPieceAc5());
        $this->assertNull($obj->getChampsCritereEntPieceAc6());
        $this->assertNull($obj->getChampsCritereEntPieceAc7());
        $this->assertNull($obj->getChampsCritereEntPieceAc8());
        $this->assertNull($obj->getChampsCritereEntPieceAc9());
        $this->assertNull($obj->getCleAccesConf());
        $this->assertNull($obj->getCleAccesPlaquettes());
        $this->assertNull($obj->getCleAccesQAdminDb());
        $this->assertNull($obj->getClotureArchivageAuto());
        $this->assertNull($obj->getCodeClientQuadratus());
        $this->assertNull($obj->getCompteurFilDiscussion());
        $this->assertNull($obj->getConfidentialiteAffaire());
        $this->assertNull($obj->getCoutMoyenHoraire());
        $this->assertNull($obj->getCreateCli1FactParBl());
        $this->assertNull($obj->getCreationAffaire());
        $this->assertNull($obj->getDateDha());
        $this->assertNull($obj->getDateLastExeQpubWeb());
        $this->assertNull($obj->getDatePha());
        $this->assertNull($obj->getDerniereVersionCd());
        $this->assertNull($obj->getDroitCollabVisuDocuments());
        $this->assertNull($obj->getEtebacDestMessage());
        $this->assertNull($obj->getEchDetailAff());
        $this->assertNull($obj->getFgSurCdeFrn());
        $this->assertNull($obj->getFGsurAc());
        $this->assertNull($obj->getFGsurMonf());
        $this->assertNull($obj->getFamillesLiees());
        $this->assertNull($obj->getFicheCliNePasProposerCreationDpdc());
        $this->assertNull($obj->getGestionGammes());
        $this->assertNull($obj->getGestionPointeuseQc());
        $this->assertNull($obj->getGestionPointeuseQFact());
        $this->assertNull($obj->getGestionPointeuseQgi());
        $this->assertNull($obj->getGestionPointeuseQp());
        $this->assertNull($obj->getGestionTarifsTransporteurs());
        $this->assertNull($obj->getGestionTarifsTransporteursNbDec());
        $this->assertNull($obj->getGestionVariantes());
        $this->assertNull($obj->getHtAvecJoursFeries());
        $this->assertNull($obj->getHtAvecSaisieConges());
        $this->assertNull($obj->getHtAvecSaisieCongesCodesClients());
        $this->assertNull($obj->getHtAvecSaisieCongesCodesTaches());
        $this->assertNull($obj->getIpPriveQws());
        $this->assertNull($obj->getIncremAutoArticle());
        $this->assertNull($obj->getInterdireAccesArchivesCpta());
        $this->assertNull($obj->getInterdireAccesArchivesPaie());
        $this->assertNull($obj->getInterdireAccesEditionBalance());
        $this->assertNull($obj->getInterdireAccesSuppDocArch());
        $this->assertNull($obj->getInterdirePubliDocWeb());
        $this->assertNull($obj->getLiaisonTda());
        $this->assertNull($obj->getLibAffectationFrn1());
        $this->assertNull($obj->getLibAffectationFrn2());
        $this->assertNull($obj->getLibAffectationFrn3());
        $this->assertNull($obj->getLibAffectationFrn4());
        $this->assertNull($obj->getLibAffectationFrn5());
        $this->assertNull($obj->getLibAffectationFrn6());
        $this->assertNull($obj->getLibAffectationFrn7());
        $this->assertNull($obj->getLibCritereArticle21());
        $this->assertNull($obj->getLibCritereArticle210());
        $this->assertNull($obj->getLibCritereArticle22());
        $this->assertNull($obj->getLibCritereArticle23());
        $this->assertNull($obj->getLibCritereArticle24());
        $this->assertNull($obj->getLibCritereArticle25());
        $this->assertNull($obj->getLibCritereArticle26());
        $this->assertNull($obj->getLibCritereArticle27());
        $this->assertNull($obj->getLibCritereArticle28());
        $this->assertNull($obj->getLibCritereArticle29());
        $this->assertNull($obj->getLibCritereEntPieceAc1());
        $this->assertNull($obj->getLibCritereEntPieceAc10());
        $this->assertNull($obj->getLibCritereEntPieceAc2());
        $this->assertNull($obj->getLibCritereEntPieceAc3());
        $this->assertNull($obj->getLibCritereEntPieceAc4());
        $this->assertNull($obj->getLibCritereEntPieceAc5());
        $this->assertNull($obj->getLibCritereEntPieceAc6());
        $this->assertNull($obj->getLibCritereEntPieceAc7());
        $this->assertNull($obj->getLibCritereEntPieceAc8());
        $this->assertNull($obj->getLibCritereEntPieceAc9());
        $this->assertNull($obj->getLibFrais1());
        $this->assertNull($obj->getLibFrais2());
        $this->assertNull($obj->getLibFrais3());
        $this->assertNull($obj->getLibelleGamme());
        $this->assertNull($obj->getLibelleVariante());
        $this->assertNull($obj->getLongueurNumAff());
        $this->assertNull($obj->getMajCodesActiviteCga());
        $this->assertNull($obj->getMessAspod());
        $this->assertNull($obj->getModifAffaire());
        $this->assertNull($obj->getModifDroitsAsp());
        $this->assertNull($obj->getNbMaxGamme());
        $this->assertNull($obj->getNePasCreerCptCli());
        $this->assertNull($obj->getNePasCreerCptFrn());
        $this->assertNull($obj->getNewDbInfos());
        $this->assertNull($obj->getNewQBureau());
        $this->assertNull($obj->getNoDossFactCab());
        $this->assertNull($obj->getPmeDossierRattachement());
        $this->assertNull($obj->getPasDeLienComptabilite());
        $this->assertNull($obj->getPrefixeCodeClient());
        $this->assertNull($obj->getProchainCodeClient());
        $this->assertNull($obj->getProxyActif());
        $this->assertNull($obj->getProxyAdresse());
        $this->assertNull($obj->getProxyPort());
        $this->assertNull($obj->getQPubWebCodeCollaborateurDest());
        $this->assertNull($obj->getQwsCheminLogo());
        $this->assertNull($obj->getQwsCodeIpl());
        $this->assertNull($obj->getQwsHttpSecurise());
        $this->assertNull($obj->getQwsipl());
        $this->assertNull($obj->getQwsNomProduit());
        $this->assertNull($obj->getQwsUtiliserLogoCabinet());
        $this->assertNull($obj->getReqDemandeur());
        $this->assertNull($obj->getRacDataPaie());
        $this->assertNull($obj->getRapportQInfos());
        $this->assertNull($obj->getSmsApiKey());
        $this->assertNull($obj->getSmsDroitAcces());
        $this->assertNull($obj->getSmsKey());
        $this->assertNull($obj->getSmsPrestataire());
        $this->assertNull($obj->getSmsSender());
        $this->assertNull($obj->getSmsType());
        $this->assertNull($obj->getSmsUserLogin());
        $this->assertNull($obj->getSaisieProprieteMess());
        $this->assertNull($obj->getSaisieReglDirect());
        $this->assertNull($obj->getSaisieTpNePasAfficherDp());
        $this->assertNull($obj->getSaisieTpOngletUniqueDp());
        $this->assertNull($obj->getSaisieTpOngletUniqueTn());
        $this->assertNull($obj->getSaisieTempsNbJApres());
        $this->assertNull($obj->getSaisieTempsNbJAvant());
        $this->assertNull($obj->getSaveHistoMemo2File());
        $this->assertNull($obj->getSelAvLstPersoAccesGestionModifiables());
        $this->assertNull($obj->getSelAvLstPersoAccesGestionnaire());
        $this->assertNull($obj->getSelAvLstPersoChampsModif());
        $this->assertNull($obj->getSelAvLstPersoCopieColonne());
        $this->assertNull($obj->getSelAvLstPersoInterdireCreat());
        $this->assertNull($obj->getSoldeCptaOd());
        $this->assertNull($obj->getSuiviClientIntituleGeneric1());
        $this->assertNull($obj->getSuiviClientIntituleGeneric10());
        $this->assertNull($obj->getSuiviClientIntituleGeneric2());
        $this->assertNull($obj->getSuiviClientIntituleGeneric3());
        $this->assertNull($obj->getSuiviClientIntituleGeneric4());
        $this->assertNull($obj->getSuiviClientIntituleGeneric5());
        $this->assertNull($obj->getSuiviClientIntituleGeneric6());
        $this->assertNull($obj->getSuiviClientIntituleGeneric7());
        $this->assertNull($obj->getSuiviClientIntituleGeneric8());
        $this->assertNull($obj->getSuiviClientIntituleGeneric9());
        $this->assertNull($obj->getTpAccesEncoursClient());
        $this->assertNull($obj->getTpAvancementALaLigne());
        $this->assertNull($obj->getTpInterditQte());
        $this->assertNull($obj->getTpLibelleMission());
        $this->assertNull($obj->getTpLimiteSaisieNonOperationnel());
        $this->assertNull($obj->getTppupv123());
        $this->assertNull($obj->getTpPasMoisCloture());
        $this->assertNull($obj->getTpPourcentageNonOperationnelDate());
        $this->assertNull($obj->getTpQteInvisible());
        $this->assertNull($obj->getTpsNumArchive());
        $this->assertNull($obj->getTpSaisieAvancement());
        $this->assertNull($obj->getTransVariantesFactgi());
        $this->assertNull($obj->getTypeAffichageSoldeFourn());
        $this->assertNull($obj->getTypeFrais1());
        $this->assertNull($obj->getTypeFrais2());
        $this->assertNull($obj->getTypeFrais3());
        $this->assertNull($obj->getTypeSaisieTauxDevises());
        $this->assertNull($obj->getVEsurDepAff());
        $this->assertNull($obj->getValAutoTarifsTransporteurs());
        $this->assertNull($obj->getVisualisationFicheCabinet());
        $this->assertNull($obj->getWordAccesParQClient());
        $this->assertNull($obj->geteWsCabinet());
        $this->assertNull($obj->geteWsCollId());
        $this->assertNull($obj->geteWsCollMdp());
        $this->assertNull($obj->geteWsSrvMdp());
        $this->assertNull($obj->geteWsSrvName());
        $this->assertNull($obj->geteWsSrvUtil());
        $this->assertNull($obj->getlngCodeArticleAuto());
    }
}
