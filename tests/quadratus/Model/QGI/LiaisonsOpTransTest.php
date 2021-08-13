<?php

/*
 * This file is part of the core-library-package.
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
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class LiaisonsOpTransTest extends AbstractTestCase {

    /**
     * Tests the setBatchApres() method.
     *
     * @return void
     */
    public function testSetBatchApres(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setBatchApres("batchApres");
        $this->assertEquals("batchApres", $obj->getBatchApres());
    }

    /**
     * Tests the setBatchAvant() method.
     *
     * @return void
     */
    public function testSetBatchAvant(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setBatchAvant("batchAvant");
        $this->assertEquals("batchAvant", $obj->getBatchAvant());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setDtDernXFer() method.
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
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setListeDestinataires() method.
     *
     * @return void
     */
    public function testSetListeDestinataires(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setListeDestinataires("listeDestinataires");
        $this->assertEquals("listeDestinataires", $obj->getListeDestinataires());
    }

    /**
     * Tests the setUseDtDernXFer() method.
     *
     * @return void
     */
    public function testSetUseDtDernXFer(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setUseDtDernXFer(true);
        $this->assertEquals(true, $obj->getUseDtDernXFer());
    }

    /**
     * Tests the setXFerActivites() method.
     *
     * @return void
     */
    public function testSetXFerActivites(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerActivites(true);
        $this->assertEquals(true, $obj->getXFerActivites());
    }

    /**
     * Tests the setXFerArticles() method.
     *
     * @return void
     */
    public function testSetXFerArticles(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerArticles(true);
        $this->assertEquals(true, $obj->getXFerArticles());
    }

    /**
     * Tests the setXFerBoniMali() method.
     *
     * @return void
     */
    public function testSetXFerBoniMali(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerBoniMali(true);
        $this->assertEquals(true, $obj->getXFerBoniMali());
    }

    /**
     * Tests the setXFerBudgetsTemps() method.
     *
     * @return void
     */
    public function testSetXFerBudgetsTemps(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerBudgetsTemps(true);
        $this->assertEquals(true, $obj->getXFerBudgetsTemps());
    }

    /**
     * Tests the setXFerCivilites() method.
     *
     * @return void
     */
    public function testSetXFerCivilites(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCivilites(true);
        $this->assertEquals(true, $obj->getXFerCivilites());
    }

    /**
     * Tests the setXFerCli() method.
     *
     * @return void
     */
    public function testSetXFerCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCli(true);
        $this->assertEquals(true, $obj->getXFerCli());
    }

    /**
     * Tests the setXFerCliA1() method.
     *
     * @return void
     */
    public function testSetXFerCliA1(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliA1("xFerCliA1");
        $this->assertEquals("xFerCliA1", $obj->getXFerCliA1());
    }

    /**
     * Tests the setXFerCliA2() method.
     *
     * @return void
     */
    public function testSetXFerCliA2(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliA2("xFerCliA2");
        $this->assertEquals("xFerCliA2", $obj->getXFerCliA2());
    }

    /**
     * Tests the setXFerCliC() method.
     *
     * @return void
     */
    public function testSetXFerCliC(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliC("xFerCliC");
        $this->assertEquals("xFerCliC", $obj->getXFerCliC());
    }

    /**
     * Tests the setXFerCliDeb() method.
     *
     * @return void
     */
    public function testSetXFerCliDeb(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliDeb("xFerCliDeb");
        $this->assertEquals("xFerCliDeb", $obj->getXFerCliDeb());
    }

    /**
     * Tests the setXFerCliDocs() method.
     *
     * @return void
     */
    public function testSetXFerCliDocs(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliDocs(true);
        $this->assertEquals(true, $obj->getXFerCliDocs());
    }

    /**
     * Tests the setXFerCliE() method.
     *
     * @return void
     */
    public function testSetXFerCliE(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliE("xFerCliE");
        $this->assertEquals("xFerCliE", $obj->getXFerCliE());
    }

    /**
     * Tests the setXFerCliFin() method.
     *
     * @return void
     */
    public function testSetXFerCliFin(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliFin("xFerCliFin");
        $this->assertEquals("xFerCliFin", $obj->getXFerCliFin());
    }

    /**
     * Tests the setXFerCliP() method.
     *
     * @return void
     */
    public function testSetXFerCliP(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCliP("xFerCliP");
        $this->assertEquals("xFerCliP", $obj->getXFerCliP());
    }

    /**
     * Tests the setXFerCol() method.
     *
     * @return void
     */
    public function testSetXFerCol(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCol(true);
        $this->assertEquals(true, $obj->getXFerCol());
    }

    /**
     * Tests the setXFerCollabTache() method.
     *
     * @return void
     */
    public function testSetXFerCollabTache(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCollabTache(true);
        $this->assertEquals(true, $obj->getXFerCollabTache());
    }

    /**
     * Tests the setXFerContenu() method.
     *
     * @return void
     */
    public function testSetXFerContenu(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerContenu(true);
        $this->assertEquals(true, $obj->getXFerContenu());
    }

    /**
     * Tests the setXFerCpta() method.
     *
     * @return void
     */
    public function testSetXFerCpta(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCpta(true);
        $this->assertEquals(true, $obj->getXFerCpta());
    }

    /**
     * Tests the setXFerCptaAll() method.
     *
     * @return void
     */
    public function testSetXFerCptaAll(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaAll(true);
        $this->assertEquals(true, $obj->getXFerCptaAll());
    }

    /**
     * Tests the setXFerCptaCli() method.
     *
     * @return void
     */
    public function testSetXFerCptaCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaCli(true);
        $this->assertEquals(true, $obj->getXFerCptaCli());
    }

    /**
     * Tests the setXFerCptaDest() method.
     *
     * @return void
     */
    public function testSetXFerCptaDest(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaDest("xFerCptaDest");
        $this->assertEquals("xFerCptaDest", $obj->getXFerCptaDest());
    }

    /**
     * Tests the setXFerCptaFrn() method.
     *
     * @return void
     */
    public function testSetXFerCptaFrn(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaFrn(true);
        $this->assertEquals(true, $obj->getXFerCptaFrn());
    }

    /**
     * Tests the setXFerCptaImg() method.
     *
     * @return void
     */
    public function testSetXFerCptaImg(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaImg(true);
        $this->assertEquals(true, $obj->getXFerCptaImg());
    }

    /**
     * Tests the setXFerCptaLstDc() method.
     *
     * @return void
     */
    public function testSetXFerCptaLstDc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaLstDc("xFerCptaLstDc");
        $this->assertEquals("xFerCptaLstDc", $obj->getXFerCptaLstDc());
    }

    /**
     * Tests the setXFerCptaSrc() method.
     *
     * @return void
     */
    public function testSetXFerCptaSrc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCptaSrc("xFerCptaSrc");
        $this->assertEquals("xFerCptaSrc", $obj->getXFerCptaSrc());
    }

    /**
     * Tests the setXFerCrDsi() method.
     *
     * @return void
     */
    public function testSetXFerCrDsi(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCrDsi(true);
        $this->assertEquals(true, $obj->getXFerCrDsi());
    }

    /**
     * Tests the setXFerCrDucs() method.
     *
     * @return void
     */
    public function testSetXFerCrDucs(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCrDucs(true);
        $this->assertEquals(true, $obj->getXFerCrDucs());
    }

    /**
     * Tests the setXFerCrPedi() method.
     *
     * @return void
     */
    public function testSetXFerCrPedi(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCrPedi(true);
        $this->assertEquals(true, $obj->getXFerCrPedi());
    }

    /**
     * Tests the setXFerCrReq() method.
     *
     * @return void
     */
    public function testSetXFerCrReq(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCrReq(true);
        $this->assertEquals(true, $obj->getXFerCrReq());
    }

    /**
     * Tests the setXFerCrTdfc() method.
     *
     * @return void
     */
    public function testSetXFerCrTdfc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCrTdfc(true);
        $this->assertEquals(true, $obj->getXFerCrTdfc());
    }

    /**
     * Tests the setXFerCrTva() method.
     *
     * @return void
     */
    public function testSetXFerCrTva(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCrTva(true);
        $this->assertEquals(true, $obj->getXFerCrTva());
    }

    /**
     * Tests the setXFerCstPxKm() method.
     *
     * @return void
     */
    public function testSetXFerCstPxKm(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerCstPxKm(true);
        $this->assertEquals(true, $obj->getXFerCstPxKm());
    }

    /**
     * Tests the setXFerDosCpta() method.
     *
     * @return void
     */
    public function testSetXFerDosCpta(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerDosCpta(true);
        $this->assertEquals(true, $obj->getXFerDosCpta());
    }

    /**
     * Tests the setXFerDosPaie() method.
     *
     * @return void
     */
    public function testSetXFerDosPaie(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerDosPaie(true);
        $this->assertEquals(true, $obj->getXFerDosPaie());
    }

    /**
     * Tests the setXFerEdGrp() method.
     *
     * @return void
     */
    public function testSetXFerEdGrp(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerEdGrp(true);
        $this->assertEquals(true, $obj->getXFerEdGrp());
    }

    /**
     * Tests the setXFerEtebac() method.
     *
     * @return void
     */
    public function testSetXFerEtebac(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerEtebac(true);
        $this->assertEquals(true, $obj->getXFerEtebac());
    }

    /**
     * Tests the setXFerFactEdit() method.
     *
     * @return void
     */
    public function testSetXFerFactEdit(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerFactEdit(true);
        $this->assertEquals(true, $obj->getXFerFactEdit());
    }

    /**
     * Tests the setXFerFactEditDelSrc() method.
     *
     * @return void
     */
    public function testSetXFerFactEditDelSrc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerFactEditDelSrc(true);
        $this->assertEquals(true, $obj->getXFerFactEditDelSrc());
    }

    /**
     * Tests the setXFerFactNonEdit() method.
     *
     * @return void
     */
    public function testSetXFerFactNonEdit(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerFactNonEdit(true);
        $this->assertEquals(true, $obj->getXFerFactNonEdit());
    }

    /**
     * Tests the setXFerFactNonEditDelSrc() method.
     *
     * @return void
     */
    public function testSetXFerFactNonEditDelSrc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerFactNonEditDelSrc(true);
        $this->assertEquals(true, $obj->getXFerFactNonEditDelSrc());
    }

    /**
     * Tests the setXFerFonctions() method.
     *
     * @return void
     */
    public function testSetXFerFonctions(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerFonctions(true);
        $this->assertEquals(true, $obj->getXFerFonctions());
    }

    /**
     * Tests the setXFerImpotsDirects() method.
     *
     * @return void
     */
    public function testSetXFerImpotsDirects(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerImpotsDirects(true);
        $this->assertEquals(true, $obj->getXFerImpotsDirects());
    }

    /**
     * Tests the setXFerInt() method.
     *
     * @return void
     */
    public function testSetXFerInt(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerInt(true);
        $this->assertEquals(true, $obj->getXFerInt());
    }

    /**
     * Tests the setXFerIntNoCliOnly() method.
     *
     * @return void
     */
    public function testSetXFerIntNoCliOnly(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerIntNoCliOnly(true);
        $this->assertEquals(true, $obj->getXFerIntNoCliOnly());
    }

    /**
     * Tests the setXFerLstCabs() method.
     *
     * @return void
     */
    public function testSetXFerLstCabs(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerLstCabs("xFerLstCabs");
        $this->assertEquals("xFerLstCabs", $obj->getXFerLstCabs());
    }

    /**
     * Tests the setXFerMis() method.
     *
     * @return void
     */
    public function testSetXFerMis(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMis(true);
        $this->assertEquals(true, $obj->getXFerMis());
    }

    /**
     * Tests the setXFerMisCli() method.
     *
     * @return void
     */
    public function testSetXFerMisCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMisCli(true);
        $this->assertEquals(true, $obj->getXFerMisCli());
    }

    /**
     * Tests the setXFerMissionPrincipale() method.
     *
     * @return void
     */
    public function testSetXFerMissionPrincipale(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMissionPrincipale(true);
        $this->assertEquals(true, $obj->getXFerMissionPrincipale());
    }

    /**
     * Tests the setXFerMsg() method.
     *
     * @return void
     */
    public function testSetXFerMsg(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsg(true);
        $this->assertEquals(true, $obj->getXFerMsg());
    }

    /**
     * Tests the setXFerMsgCli() method.
     *
     * @return void
     */
    public function testSetXFerMsgCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsgCli(true);
        $this->assertEquals(true, $obj->getXFerMsgCli());
    }

    /**
     * Tests the setXFerMsgCol() method.
     *
     * @return void
     */
    public function testSetXFerMsgCol(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsgCol(true);
        $this->assertEquals(true, $obj->getXFerMsgCol());
    }

    /**
     * Tests the setXFerMsgDelSrc() method.
     *
     * @return void
     */
    public function testSetXFerMsgDelSrc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsgDelSrc(true);
        $this->assertEquals(true, $obj->getXFerMsgDelSrc());
    }

    /**
     * Tests the setXFerMsgHist() method.
     *
     * @return void
     */
    public function testSetXFerMsgHist(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsgHist(true);
        $this->assertEquals(true, $obj->getXFerMsgHist());
    }

    /**
     * Tests the setXFerMsgHistCli() method.
     *
     * @return void
     */
    public function testSetXFerMsgHistCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsgHistCli(true);
        $this->assertEquals(true, $obj->getXFerMsgHistCli());
    }

    /**
     * Tests the setXFerMsgHistDelSrc() method.
     *
     * @return void
     */
    public function testSetXFerMsgHistDelSrc(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerMsgHistDelSrc(true);
        $this->assertEquals(true, $obj->getXFerMsgHistDelSrc());
    }

    /**
     * Tests the setXFerObligations() method.
     *
     * @return void
     */
    public function testSetXFerObligations(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerObligations(true);
        $this->assertEquals(true, $obj->getXFerObligations());
    }

    /**
     * Tests the setXFerPdf() method.
     *
     * @return void
     */
    public function testSetXFerPdf(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerPdf(true);
        $this->assertEquals(true, $obj->getXFerPdf());
    }

    /**
     * Tests the setXFerPlanning() method.
     *
     * @return void
     */
    public function testSetXFerPlanning(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerPlanning(true);
        $this->assertEquals(true, $obj->getXFerPlanning());
    }

    /**
     * Tests the setXFerPreFact() method.
     *
     * @return void
     */
    public function testSetXFerPreFact(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerPreFact(true);
        $this->assertEquals(true, $obj->getXFerPreFact());
    }

    /**
     * Tests the setXFerPreFactCli() method.
     *
     * @return void
     */
    public function testSetXFerPreFactCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerPreFactCli(true);
        $this->assertEquals(true, $obj->getXFerPreFactCli());
    }

    /**
     * Tests the setXFerPreFactCol() method.
     *
     * @return void
     */
    public function testSetXFerPreFactCol(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerPreFactCol(true);
        $this->assertEquals(true, $obj->getXFerPreFactCol());
    }

    /**
     * Tests the setXFerPreFactFact() method.
     *
     * @return void
     */
    public function testSetXFerPreFactFact(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerPreFactFact(true);
        $this->assertEquals(true, $obj->getXFerPreFactFact());
    }

    /**
     * Tests the setXFerQInfos() method.
     *
     * @return void
     */
    public function testSetXFerQInfos(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerQInfos(true);
        $this->assertEquals(true, $obj->getXFerQInfos());
    }

    /**
     * Tests the setXFerQInfosDet() method.
     *
     * @return void
     */
    public function testSetXFerQInfosDet(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerQInfosDet("xFerQInfosDet");
        $this->assertEquals("xFerQInfosDet", $obj->getXFerQInfosDet());
    }

    /**
     * Tests the setXFerQualifiants() method.
     *
     * @return void
     */
    public function testSetXFerQualifiants(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerQualifiants(true);
        $this->assertEquals(true, $obj->getXFerQualifiants());
    }

    /**
     * Tests the setXFerReglements() method.
     *
     * @return void
     */
    public function testSetXFerReglements(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerReglements(true);
        $this->assertEquals(true, $obj->getXFerReglements());
    }

    /**
     * Tests the setXFerSuiCli() method.
     *
     * @return void
     */
    public function testSetXFerSuiCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerSuiCli(true);
        $this->assertEquals(true, $obj->getXFerSuiCli());
    }

    /**
     * Tests the setXFerTaches() method.
     *
     * @return void
     */
    public function testSetXFerTaches(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerTaches(true);
        $this->assertEquals(true, $obj->getXFerTaches());
    }

    /**
     * Tests the setXFerTps() method.
     *
     * @return void
     */
    public function testSetXFerTps(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerTps(true);
        $this->assertEquals(true, $obj->getXFerTps());
    }

    /**
     * Tests the setXFerTpsCli() method.
     *
     * @return void
     */
    public function testSetXFerTpsCli(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerTpsCli(true);
        $this->assertEquals(true, $obj->getXFerTpsCli());
    }

    /**
     * Tests the setXFerTpsCol() method.
     *
     * @return void
     */
    public function testSetXFerTpsCol(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerTpsCol(true);
        $this->assertEquals(true, $obj->getXFerTpsCol());
    }

    /**
     * Tests the setXFerTypeEvenements() method.
     *
     * @return void
     */
    public function testSetXFerTypeEvenements(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerTypeEvenements(true);
        $this->assertEquals(true, $obj->getXFerTypeEvenements());
    }

    /**
     * Tests the setXFerTypeSocietes() method.
     *
     * @return void
     */
    public function testSetXFerTypeSocietes(): void {

        $obj = new LiaisonsOpTrans();

        $obj->setXFerTypeSocietes(true);
        $this->assertEquals(true, $obj->getXFerTypeSocietes());
    }

    /**
     * Tests the __construct() method.
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
