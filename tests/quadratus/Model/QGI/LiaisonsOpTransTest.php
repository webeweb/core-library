<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\LiaisonsOpTrans;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Liaisons op trans test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class LiaisonsOpTransTest extends AbstractTestCase {

    /**
     * Tests setBatchApres()
     *
     * @return void
     */
    public function testSetBatchApres(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setBatchApres("batchApres");
        $this->assertEquals("batchApres", $obj->getBatchApres());
    }

    /**
     * Tests setBatchAvant()
     *
     * @return void
     */
    public function testSetBatchAvant(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setBatchAvant("batchAvant");
        $this->assertEquals("batchAvant", $obj->getBatchAvant());
    }

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setDtDernXFer()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDernXFer(): void {

        // Set a Date/time mock.
        $dtDernXFer = new DateTime("2018-09-10");

        $obj = new LiaisonsOpTrans();

        $obj->setDtDernXFer($dtDernXFer);
        $this->assertSame($dtDernXFer, $obj->getDtDernXFer());
    }

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests setListeDestinataires()
     *
     * @return void
     */
    public function testSetListeDestinataires(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setListeDestinataires("listeDestinataires");
        $this->assertEquals("listeDestinataires", $obj->getListeDestinataires());
    }

    /**
     * Tests setUseDtDernXFer()
     *
     * @return void
     */
    public function testSetUseDtDernXFer(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setUseDtDernXFer(true);
        $this->assertEquals(true, $obj->getUseDtDernXFer());
    }

    /**
     * Tests setXFerActivites()
     *
     * @return void
     */
    public function testSetXFerActivites(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerActivites(true);
        $this->assertEquals(true, $obj->getXFerActivites());
    }

    /**
     * Tests setXFerArticles()
     *
     * @return void
     */
    public function testSetXFerArticles(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerArticles(true);
        $this->assertEquals(true, $obj->getXFerArticles());
    }

    /**
     * Tests setXFerBoniMali()
     *
     * @return void
     */
    public function testSetXFerBoniMali(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerBoniMali(true);
        $this->assertEquals(true, $obj->getXFerBoniMali());
    }

    /**
     * Tests setXFerBudgetsTemps()
     *
     * @return void
     */
    public function testSetXFerBudgetsTemps(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerBudgetsTemps(true);
        $this->assertEquals(true, $obj->getXFerBudgetsTemps());
    }

    /**
     * Tests setXFerCivilites()
     *
     * @return void
     */
    public function testSetXFerCivilites(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCivilites(true);
        $this->assertEquals(true, $obj->getXFerCivilites());
    }

    /**
     * Tests setXFerCli()
     *
     * @return void
     */
    public function testSetXFerCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCli(true);
        $this->assertEquals(true, $obj->getXFerCli());
    }

    /**
     * Tests setXFerCliA1()
     *
     * @return void
     */
    public function testSetXFerCliA1(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliA1("xFerCliA1");
        $this->assertEquals("xFerCliA1", $obj->getXFerCliA1());
    }

    /**
     * Tests setXFerCliA2()
     *
     * @return void
     */
    public function testSetXFerCliA2(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliA2("xFerCliA2");
        $this->assertEquals("xFerCliA2", $obj->getXFerCliA2());
    }

    /**
     * Tests setXFerCliC()
     *
     * @return void
     */
    public function testSetXFerCliC(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliC("xFerCliC");
        $this->assertEquals("xFerCliC", $obj->getXFerCliC());
    }

    /**
     * Tests setXFerCliDeb()
     *
     * @return void
     */
    public function testSetXFerCliDeb(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliDeb("xFerCliDeb");
        $this->assertEquals("xFerCliDeb", $obj->getXFerCliDeb());
    }

    /**
     * Tests setXFerCliDocs()
     *
     * @return void
     */
    public function testSetXFerCliDocs(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliDocs(true);
        $this->assertEquals(true, $obj->getXFerCliDocs());
    }

    /**
     * Tests setXFerCliE()
     *
     * @return void
     */
    public function testSetXFerCliE(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliE("xFerCliE");
        $this->assertEquals("xFerCliE", $obj->getXFerCliE());
    }

    /**
     * Tests setXFerCliFin()
     *
     * @return void
     */
    public function testSetXFerCliFin(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliFin("xFerCliFin");
        $this->assertEquals("xFerCliFin", $obj->getXFerCliFin());
    }

    /**
     * Tests setXFerCliP()
     *
     * @return void
     */
    public function testSetXFerCliP(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliP("xFerCliP");
        $this->assertEquals("xFerCliP", $obj->getXFerCliP());
    }

    /**
     * Tests setXFerCol()
     *
     * @return void
     */
    public function testSetXFerCol(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCol(true);
        $this->assertEquals(true, $obj->getXFerCol());
    }

    /**
     * Tests setXFerCollabTache()
     *
     * @return void
     */
    public function testSetXFerCollabTache(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCollabTache(true);
        $this->assertEquals(true, $obj->getXFerCollabTache());
    }

    /**
     * Tests setXFerContenu()
     *
     * @return void
     */
    public function testSetXFerContenu(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerContenu(true);
        $this->assertEquals(true, $obj->getXFerContenu());
    }

    /**
     * Tests setXFerCpta()
     *
     * @return void
     */
    public function testSetXFerCpta(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCpta(true);
        $this->assertEquals(true, $obj->getXFerCpta());
    }

    /**
     * Tests setXFerCptaAll()
     *
     * @return void
     */
    public function testSetXFerCptaAll(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaAll(true);
        $this->assertEquals(true, $obj->getXFerCptaAll());
    }

    /**
     * Tests setXFerCptaCli()
     *
     * @return void
     */
    public function testSetXFerCptaCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaCli(true);
        $this->assertEquals(true, $obj->getXFerCptaCli());
    }

    /**
     * Tests setXFerCptaDest()
     *
     * @return void
     */
    public function testSetXFerCptaDest(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaDest("xFerCptaDest");
        $this->assertEquals("xFerCptaDest", $obj->getXFerCptaDest());
    }

    /**
     * Tests setXFerCptaFrn()
     *
     * @return void
     */
    public function testSetXFerCptaFrn(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaFrn(true);
        $this->assertEquals(true, $obj->getXFerCptaFrn());
    }

    /**
     * Tests setXFerCptaImg()
     *
     * @return void
     */
    public function testSetXFerCptaImg(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaImg(true);
        $this->assertEquals(true, $obj->getXFerCptaImg());
    }

    /**
     * Tests setXFerCptaLstDc()
     *
     * @return void
     */
    public function testSetXFerCptaLstDc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaLstDc("xFerCptaLstDc");
        $this->assertEquals("xFerCptaLstDc", $obj->getXFerCptaLstDc());
    }

    /**
     * Tests setXFerCptaSrc()
     *
     * @return void
     */
    public function testSetXFerCptaSrc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaSrc("xFerCptaSrc");
        $this->assertEquals("xFerCptaSrc", $obj->getXFerCptaSrc());
    }

    /**
     * Tests setXFerCrDsi()
     *
     * @return void
     */
    public function testSetXFerCrDsi(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCrDsi(true);
        $this->assertEquals(true, $obj->getXFerCrDsi());
    }

    /**
     * Tests setXFerCrDucs()
     *
     * @return void
     */
    public function testSetXFerCrDucs(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCrDucs(true);
        $this->assertEquals(true, $obj->getXFerCrDucs());
    }

    /**
     * Tests setXFerCrPedi()
     *
     * @return void
     */
    public function testSetXFerCrPedi(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCrPedi(true);
        $this->assertEquals(true, $obj->getXFerCrPedi());
    }

    /**
     * Tests setXFerCrReq()
     *
     * @return void
     */
    public function testSetXFerCrReq(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCrReq(true);
        $this->assertEquals(true, $obj->getXFerCrReq());
    }

    /**
     * Tests setXFerCrTdfc()
     *
     * @return void
     */
    public function testSetXFerCrTdfc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCrTdfc(true);
        $this->assertEquals(true, $obj->getXFerCrTdfc());
    }

    /**
     * Tests setXFerCrTva()
     *
     * @return void
     */
    public function testSetXFerCrTva(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCrTva(true);
        $this->assertEquals(true, $obj->getXFerCrTva());
    }

    /**
     * Tests setXFerCstPxKm()
     *
     * @return void
     */
    public function testSetXFerCstPxKm(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCstPxKm(true);
        $this->assertEquals(true, $obj->getXFerCstPxKm());
    }

    /**
     * Tests setXFerDosCpta()
     *
     * @return void
     */
    public function testSetXFerDosCpta(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerDosCpta(true);
        $this->assertEquals(true, $obj->getXFerDosCpta());
    }

    /**
     * Tests setXFerDosPaie()
     *
     * @return void
     */
    public function testSetXFerDosPaie(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerDosPaie(true);
        $this->assertEquals(true, $obj->getXFerDosPaie());
    }

    /**
     * Tests setXFerEdGrp()
     *
     * @return void
     */
    public function testSetXFerEdGrp(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerEdGrp(true);
        $this->assertEquals(true, $obj->getXFerEdGrp());
    }

    /**
     * Tests setXFerEtebac()
     *
     * @return void
     */
    public function testSetXFerEtebac(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerEtebac(true);
        $this->assertEquals(true, $obj->getXFerEtebac());
    }

    /**
     * Tests setXFerFactEdit()
     *
     * @return void
     */
    public function testSetXFerFactEdit(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerFactEdit(true);
        $this->assertEquals(true, $obj->getXFerFactEdit());
    }

    /**
     * Tests setXFerFactEditDelSrc()
     *
     * @return void
     */
    public function testSetXFerFactEditDelSrc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerFactEditDelSrc(true);
        $this->assertEquals(true, $obj->getXFerFactEditDelSrc());
    }

    /**
     * Tests setXFerFactNonEdit()
     *
     * @return void
     */
    public function testSetXFerFactNonEdit(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerFactNonEdit(true);
        $this->assertEquals(true, $obj->getXFerFactNonEdit());
    }

    /**
     * Tests setXFerFactNonEditDelSrc()
     *
     * @return void
     */
    public function testSetXFerFactNonEditDelSrc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerFactNonEditDelSrc(true);
        $this->assertEquals(true, $obj->getXFerFactNonEditDelSrc());
    }

    /**
     * Tests setXFerFonctions()
     *
     * @return void
     */
    public function testSetXFerFonctions(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerFonctions(true);
        $this->assertEquals(true, $obj->getXFerFonctions());
    }

    /**
     * Tests setXFerImpotsDirects()
     *
     * @return void
     */
    public function testSetXFerImpotsDirects(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerImpotsDirects(true);
        $this->assertEquals(true, $obj->getXFerImpotsDirects());
    }

    /**
     * Tests setXFerInt()
     *
     * @return void
     */
    public function testSetXFerInt(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerInt(true);
        $this->assertEquals(true, $obj->getXFerInt());
    }

    /**
     * Tests setXFerIntNoCliOnly()
     *
     * @return void
     */
    public function testSetXFerIntNoCliOnly(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerIntNoCliOnly(true);
        $this->assertEquals(true, $obj->getXFerIntNoCliOnly());
    }

    /**
     * Tests setXFerLstCabs()
     *
     * @return void
     */
    public function testSetXFerLstCabs(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerLstCabs("xFerLstCabs");
        $this->assertEquals("xFerLstCabs", $obj->getXFerLstCabs());
    }

    /**
     * Tests setXFerMis()
     *
     * @return void
     */
    public function testSetXFerMis(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMis(true);
        $this->assertEquals(true, $obj->getXFerMis());
    }

    /**
     * Tests setXFerMisCli()
     *
     * @return void
     */
    public function testSetXFerMisCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMisCli(true);
        $this->assertEquals(true, $obj->getXFerMisCli());
    }

    /**
     * Tests setXFerMissionPrincipale()
     *
     * @return void
     */
    public function testSetXFerMissionPrincipale(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMissionPrincipale(true);
        $this->assertEquals(true, $obj->getXFerMissionPrincipale());
    }

    /**
     * Tests setXFerMsg()
     *
     * @return void
     */
    public function testSetXFerMsg(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsg(true);
        $this->assertEquals(true, $obj->getXFerMsg());
    }

    /**
     * Tests setXFerMsgCli()
     *
     * @return void
     */
    public function testSetXFerMsgCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsgCli(true);
        $this->assertEquals(true, $obj->getXFerMsgCli());
    }

    /**
     * Tests setXFerMsgCol()
     *
     * @return void
     */
    public function testSetXFerMsgCol(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsgCol(true);
        $this->assertEquals(true, $obj->getXFerMsgCol());
    }

    /**
     * Tests setXFerMsgDelSrc()
     *
     * @return void
     */
    public function testSetXFerMsgDelSrc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsgDelSrc(true);
        $this->assertEquals(true, $obj->getXFerMsgDelSrc());
    }

    /**
     * Tests setXFerMsgHist()
     *
     * @return void
     */
    public function testSetXFerMsgHist(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsgHist(true);
        $this->assertEquals(true, $obj->getXFerMsgHist());
    }

    /**
     * Tests setXFerMsgHistCli()
     *
     * @return void
     */
    public function testSetXFerMsgHistCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsgHistCli(true);
        $this->assertEquals(true, $obj->getXFerMsgHistCli());
    }

    /**
     * Tests setXFerMsgHistDelSrc()
     *
     * @return void
     */
    public function testSetXFerMsgHistDelSrc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsgHistDelSrc(true);
        $this->assertEquals(true, $obj->getXFerMsgHistDelSrc());
    }

    /**
     * Tests setXFerObligations()
     *
     * @return void
     */
    public function testSetXFerObligations(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerObligations(true);
        $this->assertEquals(true, $obj->getXFerObligations());
    }

    /**
     * Tests setXFerPdf()
     *
     * @return void
     */
    public function testSetXFerPdf(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerPdf(true);
        $this->assertEquals(true, $obj->getXFerPdf());
    }

    /**
     * Tests setXFerPlanning()
     *
     * @return void
     */
    public function testSetXFerPlanning(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerPlanning(true);
        $this->assertEquals(true, $obj->getXFerPlanning());
    }

    /**
     * Tests setXFerPreFact()
     *
     * @return void
     */
    public function testSetXFerPreFact(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerPreFact(true);
        $this->assertEquals(true, $obj->getXFerPreFact());
    }

    /**
     * Tests setXFerPreFactCli()
     *
     * @return void
     */
    public function testSetXFerPreFactCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerPreFactCli(true);
        $this->assertEquals(true, $obj->getXFerPreFactCli());
    }

    /**
     * Tests setXFerPreFactCol()
     *
     * @return void
     */
    public function testSetXFerPreFactCol(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerPreFactCol(true);
        $this->assertEquals(true, $obj->getXFerPreFactCol());
    }

    /**
     * Tests setXFerPreFactFact()
     *
     * @return void
     */
    public function testSetXFerPreFactFact(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerPreFactFact(true);
        $this->assertEquals(true, $obj->getXFerPreFactFact());
    }

    /**
     * Tests setXFerQInfos()
     *
     * @return void
     */
    public function testSetXFerQInfos(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerQInfos(true);
        $this->assertEquals(true, $obj->getXFerQInfos());
    }

    /**
     * Tests setXFerQInfosDet()
     *
     * @return void
     */
    public function testSetXFerQInfosDet(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerQInfosDet("xFerQInfosDet");
        $this->assertEquals("xFerQInfosDet", $obj->getXFerQInfosDet());
    }

    /**
     * Tests setXFerQualifiants()
     *
     * @return void
     */
    public function testSetXFerQualifiants(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerQualifiants(true);
        $this->assertEquals(true, $obj->getXFerQualifiants());
    }

    /**
     * Tests setXFerReglements()
     *
     * @return void
     */
    public function testSetXFerReglements(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerReglements(true);
        $this->assertEquals(true, $obj->getXFerReglements());
    }

    /**
     * Tests setXFerSuiCli()
     *
     * @return void
     */
    public function testSetXFerSuiCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerSuiCli(true);
        $this->assertEquals(true, $obj->getXFerSuiCli());
    }

    /**
     * Tests setXFerTaches()
     *
     * @return void
     */
    public function testSetXFerTaches(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerTaches(true);
        $this->assertEquals(true, $obj->getXFerTaches());
    }

    /**
     * Tests setXFerTps()
     *
     * @return void
     */
    public function testSetXFerTps(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerTps(true);
        $this->assertEquals(true, $obj->getXFerTps());
    }

    /**
     * Tests setXFerTpsCli()
     *
     * @return void
     */
    public function testSetXFerTpsCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerTpsCli(true);
        $this->assertEquals(true, $obj->getXFerTpsCli());
    }

    /**
     * Tests setXFerTpsCol()
     *
     * @return void
     */
    public function testSetXFerTpsCol(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerTpsCol(true);
        $this->assertEquals(true, $obj->getXFerTpsCol());
    }

    /**
     * Tests setXFerTypeEvenements()
     *
     * @return void
     */
    public function testSetXFerTypeEvenements(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerTypeEvenements(true);
        $this->assertEquals(true, $obj->getXFerTypeEvenements());
    }

    /**
     * Tests setXFerTypeSocietes()
     *
     * @return void
     */
    public function testSetXFerTypeSocietes(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerTypeSocietes(true);
        $this->assertEquals(true, $obj->getXFerTypeSocietes());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LiaisonsOpTrans();

        $this->assertNull($obj->getBatchApres());
        $this->assertNull($obj->getBatchAvant());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDtDernXFer());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getListeDestinataires());
        $this->assertNull($obj->getUseDtDernXFer());
        $this->assertNull($obj->getXFerActivites());
        $this->assertNull($obj->getXFerArticles());
        $this->assertNull($obj->getXFerBoniMali());
        $this->assertNull($obj->getXFerBudgetsTemps());
        $this->assertNull($obj->getXFerCivilites());
        $this->assertNull($obj->getXFerCli());
        $this->assertNull($obj->getXFerCliA1());
        $this->assertNull($obj->getXFerCliA2());
        $this->assertNull($obj->getXFerCliC());
        $this->assertNull($obj->getXFerCliDeb());
        $this->assertNull($obj->getXFerCliDocs());
        $this->assertNull($obj->getXFerCliE());
        $this->assertNull($obj->getXFerCliFin());
        $this->assertNull($obj->getXFerCliP());
        $this->assertNull($obj->getXFerCol());
        $this->assertNull($obj->getXFerCollabTache());
        $this->assertNull($obj->getXFerContenu());
        $this->assertNull($obj->getXFerCpta());
        $this->assertNull($obj->getXFerCptaAll());
        $this->assertNull($obj->getXFerCptaCli());
        $this->assertNull($obj->getXFerCptaDest());
        $this->assertNull($obj->getXFerCptaFrn());
        $this->assertNull($obj->getXFerCptaImg());
        $this->assertNull($obj->getXFerCptaLstDc());
        $this->assertNull($obj->getXFerCptaSrc());
        $this->assertNull($obj->getXFerCrDsi());
        $this->assertNull($obj->getXFerCrDucs());
        $this->assertNull($obj->getXFerCrPedi());
        $this->assertNull($obj->getXFerCrReq());
        $this->assertNull($obj->getXFerCrTdfc());
        $this->assertNull($obj->getXFerCrTva());
        $this->assertNull($obj->getXFerCstPxKm());
        $this->assertNull($obj->getXFerDosCpta());
        $this->assertNull($obj->getXFerDosPaie());
        $this->assertNull($obj->getXFerEtebac());
        $this->assertNull($obj->getXFerEdGrp());
        $this->assertNull($obj->getXFerFactEdit());
        $this->assertNull($obj->getXFerFactEditDelSrc());
        $this->assertNull($obj->getXFerFactNonEdit());
        $this->assertNull($obj->getXFerFactNonEditDelSrc());
        $this->assertNull($obj->getXFerFonctions());
        $this->assertNull($obj->getXFerImpotsDirects());
        $this->assertNull($obj->getXFerInt());
        $this->assertNull($obj->getXFerIntNoCliOnly());
        $this->assertNull($obj->getXFerLstCabs());
        $this->assertNull($obj->getXFerMis());
        $this->assertNull($obj->getXFerMisCli());
        $this->assertNull($obj->getXFerMissionPrincipale());
        $this->assertNull($obj->getXFerMsg());
        $this->assertNull($obj->getXFerMsgCli());
        $this->assertNull($obj->getXFerMsgCol());
        $this->assertNull($obj->getXFerMsgDelSrc());
        $this->assertNull($obj->getXFerMsgHist());
        $this->assertNull($obj->getXFerMsgHistCli());
        $this->assertNull($obj->getXFerMsgHistDelSrc());
        $this->assertNull($obj->getXFerObligations());
        $this->assertNull($obj->getXFerPdf());
        $this->assertNull($obj->getXFerPlanning());
        $this->assertNull($obj->getXFerPreFact());
        $this->assertNull($obj->getXFerPreFactCli());
        $this->assertNull($obj->getXFerPreFactCol());
        $this->assertNull($obj->getXFerPreFactFact());
        $this->assertNull($obj->getXFerQInfos());
        $this->assertNull($obj->getXFerQInfosDet());
        $this->assertNull($obj->getXFerQualifiants());
        $this->assertNull($obj->getXFerReglements());
        $this->assertNull($obj->getXFerSuiCli());
        $this->assertNull($obj->getXFerTaches());
        $this->assertNull($obj->getXFerTps());
        $this->assertNull($obj->getXFerTpsCli());
        $this->assertNull($obj->getXFerTpsCol());
        $this->assertNull($obj->getXFerTypeEvenements());
        $this->assertNull($obj->getXFerTypeSocietes());
    }
}
