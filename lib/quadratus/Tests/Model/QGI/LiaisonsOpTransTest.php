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

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Throwable;
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
     * Test setBatchApres()
     *
     * @return void
     */
    public function testSetBatchApres(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setBatchApres("batchApres");
        $this->assertEquals("batchApres", $obj->getBatchApres());
    }

    /**
     * Test setBatchAvant()
     *
     * @return void
     */
    public function testSetBatchAvant(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setBatchAvant("batchAvant");
        $this->assertEquals("batchAvant", $obj->getBatchAvant());
    }

    /**
     * Test setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Test setDtDernXFer()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtDernXFer(): void {

        // Set a Date/time mock.
        $dtDernXFer = new DateTime("2018-09-10");

        $obj = new LiaisonsOpTrans();

        $obj->setDtDernXFer($dtDernXFer);
        $this->assertSame($dtDernXFer, $obj->getDtDernXFer());
    }

    /**
     * Test setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Test setListeDestinataires()
     *
     * @return void
     */
    public function testSetListeDestinataires(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setListeDestinataires("listeDestinataires");
        $this->assertEquals("listeDestinataires", $obj->getListeDestinataires());
    }

    /**
     * Test setUseDtDernXFer()
     *
     * @return void
     */
    public function testSetUseDtDernXFer(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setUseDtDernXFer(true);
        $this->assertTrue($obj->getUseDtDernXFer());
    }

    /**
     * Test setXFerActivites()
     *
     * @return void
     */
    public function testSetXFerActivites(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerActivites(true);
        $this->assertTrue($obj->getXFerActivites());
    }

    /**
     * Test setXFerArticles()
     *
     * @return void
     */
    public function testSetXFerArticles(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerArticles(true);
        $this->assertTrue($obj->getXFerArticles());
    }

    /**
     * Test setXFerBoniMali()
     *
     * @return void
     */
    public function testSetXFerBoniMali(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerBoniMali(true);
        $this->assertTrue($obj->getXFerBoniMali());
    }

    /**
     * Test setXFerBudgetsTemps()
     *
     * @return void
     */
    public function testSetXFerBudgetsTemps(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerBudgetsTemps(true);
        $this->assertTrue($obj->getXFerBudgetsTemps());
    }

    /**
     * Test setXFerCivilites()
     *
     * @return void
     */
    public function testSetXFerCivilites(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCivilites(true);
        $this->assertTrue($obj->getXFerCivilites());
    }

    /**
     * Test setXFerCli()
     *
     * @return void
     */
    public function testSetXFerCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCli(true);
        $this->assertTrue($obj->getXFerCli());
    }

    /**
     * Test setXFerCliA1()
     *
     * @return void
     */
    public function testSetXFerCliA1(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliA1("xFerCliA1");
        $this->assertEquals("xFerCliA1", $obj->getXFerCliA1());
    }

    /**
     * Test setXFerCliA2()
     *
     * @return void
     */
    public function testSetXFerCliA2(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliA2("xFerCliA2");
        $this->assertEquals("xFerCliA2", $obj->getXFerCliA2());
    }

    /**
     * Test setXFerCliC()
     *
     * @return void
     */
    public function testSetXFerCliC(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliC("xFerCliC");
        $this->assertEquals("xFerCliC", $obj->getXFerCliC());
    }

    /**
     * Test setXFerCliDeb()
     *
     * @return void
     */
    public function testSetXFerCliDeb(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliDeb("xFerCliDeb");
        $this->assertEquals("xFerCliDeb", $obj->getXFerCliDeb());
    }

    /**
     * Test setXFerCliDocs()
     *
     * @return void
     */
    public function testSetXFerCliDocs(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliDocs(true);
        $this->assertTrue($obj->getXFerCliDocs());
    }

    /**
     * Test setXFerCliE()
     *
     * @return void
     */
    public function testSetXFerCliE(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliE("xFerCliE");
        $this->assertEquals("xFerCliE", $obj->getXFerCliE());
    }

    /**
     * Test setXFerCliFin()
     *
     * @return void
     */
    public function testSetXFerCliFin(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliFin("xFerCliFin");
        $this->assertEquals("xFerCliFin", $obj->getXFerCliFin());
    }

    /**
     * Test setXFerCliP()
     *
     * @return void
     */
    public function testSetXFerCliP(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliP("xFerCliP");
        $this->assertEquals("xFerCliP", $obj->getXFerCliP());
    }

    /**
     * Test setXFerCol()
     *
     * @return void
     */
    public function testSetXFerCol(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCol(true);
        $this->assertTrue($obj->getXFerCol());
    }

    /**
     * Test setXFerCollabTache()
     *
     * @return void
     */
    public function testSetXFerCollabTache(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCollabTache(true);
        $this->assertTrue($obj->getXFerCollabTache());
    }

    /**
     * Test setXFerContenu()
     *
     * @return void
     */
    public function testSetXFerContenu(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerContenu(true);
        $this->assertTrue($obj->getXFerContenu());
    }

    /**
     * Test setXFerCpta()
     *
     * @return void
     */
    public function testSetXFerCpta(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCpta(true);
        $this->assertTrue($obj->getXFerCpta());
    }

    /**
     * Test setXFerCptaAll()
     *
     * @return void
     */
    public function testSetXFerCptaAll(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaAll(true);
        $this->assertTrue($obj->getXFerCptaAll());
    }

    /**
     * Test setXFerCptaCli()
     *
     * @return void
     */
    public function testSetXFerCptaCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaCli(true);
        $this->assertTrue($obj->getXFerCptaCli());
    }

    /**
     * Test setXFerCptaDest()
     *
     * @return void
     */
    public function testSetXFerCptaDest(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaDest("xFerCptaDest");
        $this->assertEquals("xFerCptaDest", $obj->getXFerCptaDest());
    }

    /**
     * Test setXFerCptaFrn()
     *
     * @return void
     */
    public function testSetXFerCptaFrn(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaFrn(true);
        $this->assertTrue($obj->getXFerCptaFrn());
    }

    /**
     * Test setXFerCptaImg()
     *
     * @return void
     */
    public function testSetXFerCptaImg(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaImg(true);
        $this->assertTrue($obj->getXFerCptaImg());
    }

    /**
     * Test setXFerCptaLstDc()
     *
     * @return void
     */
    public function testSetXFerCptaLstDc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaLstDc("xFerCptaLstDc");
        $this->assertEquals("xFerCptaLstDc", $obj->getXFerCptaLstDc());
    }

    /**
     * Test setXFerCptaSrc()
     *
     * @return void
     */
    public function testSetXFerCptaSrc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaSrc("xFerCptaSrc");
        $this->assertEquals("xFerCptaSrc", $obj->getXFerCptaSrc());
    }

    /**
     * Test setXFerCrDsi()
     *
     * @return void
     */
    public function testSetXFerCrDsi(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCrDsi(true);
        $this->assertTrue($obj->getXFerCrDsi());
    }

    /**
     * Test setXFerCrDucs()
     *
     * @return void
     */
    public function testSetXFerCrDucs(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCrDucs(true);
        $this->assertTrue($obj->getXFerCrDucs());
    }

    /**
     * Test setXFerCrPedi()
     *
     * @return void
     */
    public function testSetXFerCrPedi(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCrPedi(true);
        $this->assertTrue($obj->getXFerCrPedi());
    }

    /**
     * Test setXFerCrReq()
     *
     * @return void
     */
    public function testSetXFerCrReq(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCrReq(true);
        $this->assertTrue($obj->getXFerCrReq());
    }

    /**
     * Test setXFerCrTdfc()
     *
     * @return void
     */
    public function testSetXFerCrTdfc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCrTdfc(true);
        $this->assertTrue($obj->getXFerCrTdfc());
    }

    /**
     * Test setXFerCrTva()
     *
     * @return void
     */
    public function testSetXFerCrTva(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCrTva(true);
        $this->assertTrue($obj->getXFerCrTva());
    }

    /**
     * Test setXFerCstPxKm()
     *
     * @return void
     */
    public function testSetXFerCstPxKm(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCstPxKm(true);
        $this->assertTrue($obj->getXFerCstPxKm());
    }

    /**
     * Test setXFerDosCpta()
     *
     * @return void
     */
    public function testSetXFerDosCpta(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerDosCpta(true);
        $this->assertTrue($obj->getXFerDosCpta());
    }

    /**
     * Test setXFerDosPaie()
     *
     * @return void
     */
    public function testSetXFerDosPaie(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerDosPaie(true);
        $this->assertTrue($obj->getXFerDosPaie());
    }

    /**
     * Test setXFerEdGrp()
     *
     * @return void
     */
    public function testSetXFerEdGrp(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerEdGrp(true);
        $this->assertTrue($obj->getXFerEdGrp());
    }

    /**
     * Test setXFerEtebac()
     *
     * @return void
     */
    public function testSetXFerEtebac(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerEtebac(true);
        $this->assertTrue($obj->getXFerEtebac());
    }

    /**
     * Test setXFerFactEdit()
     *
     * @return void
     */
    public function testSetXFerFactEdit(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerFactEdit(true);
        $this->assertTrue($obj->getXFerFactEdit());
    }

    /**
     * Test setXFerFactEditDelSrc()
     *
     * @return void
     */
    public function testSetXFerFactEditDelSrc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerFactEditDelSrc(true);
        $this->assertTrue($obj->getXFerFactEditDelSrc());
    }

    /**
     * Test setXFerFactNonEdit()
     *
     * @return void
     */
    public function testSetXFerFactNonEdit(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerFactNonEdit(true);
        $this->assertTrue($obj->getXFerFactNonEdit());
    }

    /**
     * Test setXFerFactNonEditDelSrc()
     *
     * @return void
     */
    public function testSetXFerFactNonEditDelSrc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerFactNonEditDelSrc(true);
        $this->assertTrue($obj->getXFerFactNonEditDelSrc());
    }

    /**
     * Test setXFerFonctions()
     *
     * @return void
     */
    public function testSetXFerFonctions(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerFonctions(true);
        $this->assertTrue($obj->getXFerFonctions());
    }

    /**
     * Test setXFerImpotsDirects()
     *
     * @return void
     */
    public function testSetXFerImpotsDirects(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerImpotsDirects(true);
        $this->assertTrue($obj->getXFerImpotsDirects());
    }

    /**
     * Test setXFerInt()
     *
     * @return void
     */
    public function testSetXFerInt(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerInt(true);
        $this->assertTrue($obj->getXFerInt());
    }

    /**
     * Test setXFerIntNoCliOnly()
     *
     * @return void
     */
    public function testSetXFerIntNoCliOnly(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerIntNoCliOnly(true);
        $this->assertTrue($obj->getXFerIntNoCliOnly());
    }

    /**
     * Test setXFerLstCabs()
     *
     * @return void
     */
    public function testSetXFerLstCabs(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerLstCabs("xFerLstCabs");
        $this->assertEquals("xFerLstCabs", $obj->getXFerLstCabs());
    }

    /**
     * Test setXFerMis()
     *
     * @return void
     */
    public function testSetXFerMis(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMis(true);
        $this->assertTrue($obj->getXFerMis());
    }

    /**
     * Test setXFerMisCli()
     *
     * @return void
     */
    public function testSetXFerMisCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMisCli(true);
        $this->assertTrue($obj->getXFerMisCli());
    }

    /**
     * Test setXFerMissionPrincipale()
     *
     * @return void
     */
    public function testSetXFerMissionPrincipale(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMissionPrincipale(true);
        $this->assertTrue($obj->getXFerMissionPrincipale());
    }

    /**
     * Test setXFerMsg()
     *
     * @return void
     */
    public function testSetXFerMsg(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsg(true);
        $this->assertTrue($obj->getXFerMsg());
    }

    /**
     * Test setXFerMsgCli()
     *
     * @return void
     */
    public function testSetXFerMsgCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsgCli(true);
        $this->assertTrue($obj->getXFerMsgCli());
    }

    /**
     * Test setXFerMsgCol()
     *
     * @return void
     */
    public function testSetXFerMsgCol(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsgCol(true);
        $this->assertTrue($obj->getXFerMsgCol());
    }

    /**
     * Test setXFerMsgDelSrc()
     *
     * @return void
     */
    public function testSetXFerMsgDelSrc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsgDelSrc(true);
        $this->assertTrue($obj->getXFerMsgDelSrc());
    }

    /**
     * Test setXFerMsgHist()
     *
     * @return void
     */
    public function testSetXFerMsgHist(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsgHist(true);
        $this->assertTrue($obj->getXFerMsgHist());
    }

    /**
     * Test setXFerMsgHistCli()
     *
     * @return void
     */
    public function testSetXFerMsgHistCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsgHistCli(true);
        $this->assertTrue($obj->getXFerMsgHistCli());
    }

    /**
     * Test setXFerMsgHistDelSrc()
     *
     * @return void
     */
    public function testSetXFerMsgHistDelSrc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsgHistDelSrc(true);
        $this->assertTrue($obj->getXFerMsgHistDelSrc());
    }

    /**
     * Test setXFerObligations()
     *
     * @return void
     */
    public function testSetXFerObligations(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerObligations(true);
        $this->assertTrue($obj->getXFerObligations());
    }

    /**
     * Test setXFerPdf()
     *
     * @return void
     */
    public function testSetXFerPdf(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerPdf(true);
        $this->assertTrue($obj->getXFerPdf());
    }

    /**
     * Test setXFerPlanning()
     *
     * @return void
     */
    public function testSetXFerPlanning(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerPlanning(true);
        $this->assertTrue($obj->getXFerPlanning());
    }

    /**
     * Test setXFerPreFact()
     *
     * @return void
     */
    public function testSetXFerPreFact(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerPreFact(true);
        $this->assertTrue($obj->getXFerPreFact());
    }

    /**
     * Test setXFerPreFactCli()
     *
     * @return void
     */
    public function testSetXFerPreFactCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerPreFactCli(true);
        $this->assertTrue($obj->getXFerPreFactCli());
    }

    /**
     * Test setXFerPreFactCol()
     *
     * @return void
     */
    public function testSetXFerPreFactCol(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerPreFactCol(true);
        $this->assertTrue($obj->getXFerPreFactCol());
    }

    /**
     * Test setXFerPreFactFact()
     *
     * @return void
     */
    public function testSetXFerPreFactFact(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerPreFactFact(true);
        $this->assertTrue($obj->getXFerPreFactFact());
    }

    /**
     * Test setXFerQInfos()
     *
     * @return void
     */
    public function testSetXFerQInfos(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerQInfos(true);
        $this->assertTrue($obj->getXFerQInfos());
    }

    /**
     * Test setXFerQInfosDet()
     *
     * @return void
     */
    public function testSetXFerQInfosDet(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerQInfosDet("xFerQInfosDet");
        $this->assertEquals("xFerQInfosDet", $obj->getXFerQInfosDet());
    }

    /**
     * Test setXFerQualifiants()
     *
     * @return void
     */
    public function testSetXFerQualifiants(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerQualifiants(true);
        $this->assertTrue($obj->getXFerQualifiants());
    }

    /**
     * Test setXFerReglements()
     *
     * @return void
     */
    public function testSetXFerReglements(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerReglements(true);
        $this->assertTrue($obj->getXFerReglements());
    }

    /**
     * Test setXFerSuiCli()
     *
     * @return void
     */
    public function testSetXFerSuiCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerSuiCli(true);
        $this->assertTrue($obj->getXFerSuiCli());
    }

    /**
     * Test setXFerTaches()
     *
     * @return void
     */
    public function testSetXFerTaches(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerTaches(true);
        $this->assertTrue($obj->getXFerTaches());
    }

    /**
     * Test setXFerTps()
     *
     * @return void
     */
    public function testSetXFerTps(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerTps(true);
        $this->assertTrue($obj->getXFerTps());
    }

    /**
     * Test setXFerTpsCli()
     *
     * @return void
     */
    public function testSetXFerTpsCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerTpsCli(true);
        $this->assertTrue($obj->getXFerTpsCli());
    }

    /**
     * Test setXFerTpsCol()
     *
     * @return void
     */
    public function testSetXFerTpsCol(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerTpsCol(true);
        $this->assertTrue($obj->getXFerTpsCol());
    }

    /**
     * Test setXFerTypeEvenements()
     *
     * @return void
     */
    public function testSetXFerTypeEvenements(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerTypeEvenements(true);
        $this->assertTrue($obj->getXFerTypeEvenements());
    }

    /**
     * Test setXFerTypeSocietes()
     *
     * @return void
     */
    public function testSetXFerTypeSocietes(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerTypeSocietes(true);
        $this->assertTrue($obj->getXFerTypeSocietes());
    }

    /**
     * Test __construct()
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
