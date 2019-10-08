<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\SuiviClient;

/**
 * Suivi client model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class SuiviClientTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SuiviClient();

        $this->assertNull($obj->getBilanCommentaireDate());
        $this->assertNull($obj->getBilanCommentaireLib());
        $this->assertNull($obj->getBullCommentaireDate());
        $this->assertNull($obj->getBullCommentaireLib());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getDAS2CommentaireDate());
        $this->assertNull($obj->getDAS2CommentaireLib());
        $this->assertNull($obj->getDCRCommentaireDate());
        $this->assertNull($obj->getDCRCommentaireLib());
        $this->assertNull($obj->getDCRDateLimite());
        $this->assertNull($obj->getDSICommentaireDate());
        $this->assertNull($obj->getDSICommentaireLib());
        $this->assertNull($obj->getDadsUCommentaireDate());
        $this->assertNull($obj->getDadsUCommentaireLib());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getDucsAssedicCommentaireDate());
        $this->assertNull($obj->getDucsAssedicCommentaireLib());
        $this->assertNull($obj->getDucsUrssafCommentaireDate());
        $this->assertNull($obj->getDucsUrssafCommentaireLib());
        $this->assertNull($obj->getFacturationCommentaireDate());
        $this->assertNull($obj->getFacturationCommentaireLib());
        $this->assertNull($obj->getFaitBilan());
        $this->assertNull($obj->getFaitCVAE());
        $this->assertNull($obj->getFaitDAS2());
        $this->assertNull($obj->getFaitDCR());
        $this->assertNull($obj->getFaitGeneric1());
        $this->assertNull($obj->getFaitGeneric10());
        $this->assertNull($obj->getFaitGeneric2());
        $this->assertNull($obj->getFaitGeneric3());
        $this->assertNull($obj->getFaitGeneric4());
        $this->assertNull($obj->getFaitGeneric5());
        $this->assertNull($obj->getFaitGeneric6());
        $this->assertNull($obj->getFaitGeneric7());
        $this->assertNull($obj->getFaitGeneric8());
        $this->assertNull($obj->getFaitGeneric9());
        $this->assertNull($obj->getFaitIFU());
        $this->assertNull($obj->getFaitISA());
        $this->assertNull($obj->getFaitISF());
        $this->assertNull($obj->getFaitISR());
        $this->assertNull($obj->getFaitISS());
        $this->assertNull($obj->getFaitImpotRevenu());
        $this->assertNull($obj->getFaitPlafTP());
        $this->assertNull($obj->getFaitPreLib());
        $this->assertNull($obj->getFaitSituation());
        $this->assertNull($obj->getFaitTP());
        $this->assertNull($obj->getFaitTVA());
        $this->assertNull($obj->getFaitTVS());
        $this->assertNull($obj->getFaitTabBord());
        $this->assertNull($obj->getGeneric10CommentaireDate());
        $this->assertNull($obj->getGeneric10CommentaireLib());
        $this->assertNull($obj->getGeneric10DateLimite());
        $this->assertNull($obj->getGeneric1CommentaireDate());
        $this->assertNull($obj->getGeneric1CommentaireLib());
        $this->assertNull($obj->getGeneric1DateLimite());
        $this->assertNull($obj->getGeneric2CommentaireDate());
        $this->assertNull($obj->getGeneric2CommentaireLib());
        $this->assertNull($obj->getGeneric2DateLimite());
        $this->assertNull($obj->getGeneric3CommentaireDate());
        $this->assertNull($obj->getGeneric3CommentaireLib());
        $this->assertNull($obj->getGeneric3DateLimite());
        $this->assertNull($obj->getGeneric4CommentaireDate());
        $this->assertNull($obj->getGeneric4CommentaireLib());
        $this->assertNull($obj->getGeneric4DateLimite());
        $this->assertNull($obj->getGeneric5CommentaireDate());
        $this->assertNull($obj->getGeneric5CommentaireLib());
        $this->assertNull($obj->getGeneric5DateLimite());
        $this->assertNull($obj->getGeneric6CommentaireDate());
        $this->assertNull($obj->getGeneric6CommentaireLib());
        $this->assertNull($obj->getGeneric6DateLimite());
        $this->assertNull($obj->getGeneric7CommentaireDate());
        $this->assertNull($obj->getGeneric7CommentaireLib());
        $this->assertNull($obj->getGeneric7DateLimite());
        $this->assertNull($obj->getGeneric8CommentaireDate());
        $this->assertNull($obj->getGeneric8CommentaireLib());
        $this->assertNull($obj->getGeneric8DateLimite());
        $this->assertNull($obj->getGeneric9CommentaireDate());
        $this->assertNull($obj->getGeneric9CommentaireLib());
        $this->assertNull($obj->getGeneric9DateLimite());
        $this->assertNull($obj->getIFUCommentaireDate());
        $this->assertNull($obj->getIFUCommentaireLib());
        $this->assertNull($obj->getISACommentaireDate());
        $this->assertNull($obj->getISACommentaireLib());
        $this->assertNull($obj->getISFCommentaireDate());
        $this->assertNull($obj->getISFCommentaireLib());
        $this->assertNull($obj->getISFDateLimite());
        $this->assertNull($obj->getISRCommentaireDate());
        $this->assertNull($obj->getISRCommentaireLib());
        $this->assertNull($obj->getISSCommentaireDate());
        $this->assertNull($obj->getISSCommentaireLib());
        $this->assertNull($obj->getImpotRevenuCommentaireDate());
        $this->assertNull($obj->getImpotRevenuCommentaireLib());
        $this->assertNull($obj->getImpotRevenuDateLimite());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPlafTPCommentaireDate());
        $this->assertNull($obj->getPlafTPCommentaireLib());
        $this->assertNull($obj->getPreLibCommentaireDate());
        $this->assertNull($obj->getPreLibCommentaireLib());
        $this->assertNull($obj->getPreLibDateLimite());
        $this->assertNull($obj->getSituationCommentaireDate());
        $this->assertNull($obj->getSituationCommentaireLib());
        $this->assertNull($obj->getSituationDateLimite());
        $this->assertNull($obj->getTPCommentaireDate());
        $this->assertNull($obj->getTPCommentaireLib());
        $this->assertNull($obj->getTSACommentaireDate());
        $this->assertNull($obj->getTSACommentaireLib());
        $this->assertNull($obj->getTSSCommentaireDate());
        $this->assertNull($obj->getTSSCommentaireLib());
        $this->assertNull($obj->getTVSCommentaireDate());
        $this->assertNull($obj->getTVSCommentaireLib());
        $this->assertNull($obj->getTabBordCommentaireDate());
        $this->assertNull($obj->getTabBordCommentaireLib());
        $this->assertNull($obj->getTabBordDateLimite());
        $this->assertNull($obj->getTvaCommentaireDate());
        $this->assertNull($obj->getTvaCommentaireLib());
    }

    /**
     * Tests the setBilanCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetBilanCommentaireDate() {

        $obj = new SuiviClient();

        $obj->setBilanCommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getBilanCommentaireDate());
    }

    /**
     * Tests the setBilanCommentaireLib() method.
     *
     * @return void
     */
    public function testSetBilanCommentaireLib() {

        $obj = new SuiviClient();

        $obj->setBilanCommentaireLib("bilanCommentaireLib");
        $this->assertEquals("bilanCommentaireLib", $obj->getBilanCommentaireLib());
    }

    /**
     * Tests the setBullCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetBullCommentaireDate() {

        $obj = new SuiviClient();

        $obj->setBullCommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getBullCommentaireDate());
    }

    /**
     * Tests the setBullCommentaireLib() method.
     *
     * @return void
     */
    public function testSetBullCommentaireLib() {

        $obj = new SuiviClient();

        $obj->setBullCommentaireLib("bullCommentaireLib");
        $this->assertEquals("bullCommentaireLib", $obj->getBullCommentaireLib());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new SuiviClient();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setDAS2CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDAS2CommentaireDate() {

        $obj = new SuiviClient();

        $obj->setDAS2CommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDAS2CommentaireDate());
    }

    /**
     * Tests the setDAS2CommentaireLib() method.
     *
     * @return void
     */
    public function testSetDAS2CommentaireLib() {

        $obj = new SuiviClient();

        $obj->setDAS2CommentaireLib("dAS2CommentaireLib");
        $this->assertEquals("dAS2CommentaireLib", $obj->getDAS2CommentaireLib());
    }

    /**
     * Tests the setDCRCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDCRCommentaireDate() {

        $obj = new SuiviClient();

        $obj->setDCRCommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDCRCommentaireDate());
    }

    /**
     * Tests the setDCRCommentaireLib() method.
     *
     * @return void
     */
    public function testSetDCRCommentaireLib() {

        $obj = new SuiviClient();

        $obj->setDCRCommentaireLib("dCRCommentaireLib");
        $this->assertEquals("dCRCommentaireLib", $obj->getDCRCommentaireLib());
    }

    /**
     * Tests the setDCRDateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDCRDateLimite() {

        $obj = new SuiviClient();

        $obj->setDCRDateLimite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDCRDateLimite());
    }

    /**
     * Tests the setDSICommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDSICommentaireDate() {

        $obj = new SuiviClient();

        $obj->setDSICommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDSICommentaireDate());
    }

    /**
     * Tests the setDSICommentaireLib() method.
     *
     * @return void
     */
    public function testSetDSICommentaireLib() {

        $obj = new SuiviClient();

        $obj->setDSICommentaireLib("dSICommentaireLib");
        $this->assertEquals("dSICommentaireLib", $obj->getDSICommentaireLib());
    }

    /**
     * Tests the setDadsUCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDadsUCommentaireDate() {

        $obj = new SuiviClient();

        $obj->setDadsUCommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDadsUCommentaireDate());
    }

    /**
     * Tests the setDadsUCommentaireLib() method.
     *
     * @return void
     */
    public function testSetDadsUCommentaireLib() {

        $obj = new SuiviClient();

        $obj->setDadsUCommentaireLib("dadsUCommentaireLib");
        $this->assertEquals("dadsUCommentaireLib", $obj->getDadsUCommentaireLib());
    }

    /**
     * Tests the setDateModif() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModif() {

        $obj = new SuiviClient();

        $obj->setDateModif(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModif());
    }

    /**
     * Tests the setDucsAssedicCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDucsAssedicCommentaireDate() {

        $obj = new SuiviClient();

        $obj->setDucsAssedicCommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDucsAssedicCommentaireDate());
    }

    /**
     * Tests the setDucsAssedicCommentaireLib() method.
     *
     * @return void
     */
    public function testSetDucsAssedicCommentaireLib() {

        $obj = new SuiviClient();

        $obj->setDucsAssedicCommentaireLib("ducsAssedicCommentaireLib");
        $this->assertEquals("ducsAssedicCommentaireLib", $obj->getDucsAssedicCommentaireLib());
    }

    /**
     * Tests the setDucsUrssafCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDucsUrssafCommentaireDate() {

        $obj = new SuiviClient();

        $obj->setDucsUrssafCommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDucsUrssafCommentaireDate());
    }

    /**
     * Tests the setDucsUrssafCommentaireLib() method.
     *
     * @return void
     */
    public function testSetDucsUrssafCommentaireLib() {

        $obj = new SuiviClient();

        $obj->setDucsUrssafCommentaireLib("ducsUrssafCommentaireLib");
        $this->assertEquals("ducsUrssafCommentaireLib", $obj->getDucsUrssafCommentaireLib());
    }

    /**
     * Tests the setFacturationCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFacturationCommentaireDate() {

        $obj = new SuiviClient();

        $obj->setFacturationCommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFacturationCommentaireDate());
    }

    /**
     * Tests the setFacturationCommentaireLib() method.
     *
     * @return void
     */
    public function testSetFacturationCommentaireLib() {

        $obj = new SuiviClient();

        $obj->setFacturationCommentaireLib("facturationCommentaireLib");
        $this->assertEquals("facturationCommentaireLib", $obj->getFacturationCommentaireLib());
    }

    /**
     * Tests the setFaitBilan() method.
     *
     * @return void
     */
    public function testSetFaitBilan() {

        $obj = new SuiviClient();

        $obj->setFaitBilan("faitBilan");
        $this->assertEquals("faitBilan", $obj->getFaitBilan());
    }

    /**
     * Tests the setFaitCVAE() method.
     *
     * @return void
     */
    public function testSetFaitCVAE() {

        $obj = new SuiviClient();

        $obj->setFaitCVAE("faitCVAE");
        $this->assertEquals("faitCVAE", $obj->getFaitCVAE());
    }

    /**
     * Tests the setFaitDAS2() method.
     *
     * @return void
     */
    public function testSetFaitDAS2() {

        $obj = new SuiviClient();

        $obj->setFaitDAS2("faitDAS2");
        $this->assertEquals("faitDAS2", $obj->getFaitDAS2());
    }

    /**
     * Tests the setFaitDCR() method.
     *
     * @return void
     */
    public function testSetFaitDCR() {

        $obj = new SuiviClient();

        $obj->setFaitDCR("faitDCR");
        $this->assertEquals("faitDCR", $obj->getFaitDCR());
    }

    /**
     * Tests the setFaitGeneric1() method.
     *
     * @return void
     */
    public function testSetFaitGeneric1() {

        $obj = new SuiviClient();

        $obj->setFaitGeneric1("faitGeneric1");
        $this->assertEquals("faitGeneric1", $obj->getFaitGeneric1());
    }

    /**
     * Tests the setFaitGeneric10() method.
     *
     * @return void
     */
    public function testSetFaitGeneric10() {

        $obj = new SuiviClient();

        $obj->setFaitGeneric10("faitGeneric10");
        $this->assertEquals("faitGeneric10", $obj->getFaitGeneric10());
    }

    /**
     * Tests the setFaitGeneric2() method.
     *
     * @return void
     */
    public function testSetFaitGeneric2() {

        $obj = new SuiviClient();

        $obj->setFaitGeneric2("faitGeneric2");
        $this->assertEquals("faitGeneric2", $obj->getFaitGeneric2());
    }

    /**
     * Tests the setFaitGeneric3() method.
     *
     * @return void
     */
    public function testSetFaitGeneric3() {

        $obj = new SuiviClient();

        $obj->setFaitGeneric3("faitGeneric3");
        $this->assertEquals("faitGeneric3", $obj->getFaitGeneric3());
    }

    /**
     * Tests the setFaitGeneric4() method.
     *
     * @return void
     */
    public function testSetFaitGeneric4() {

        $obj = new SuiviClient();

        $obj->setFaitGeneric4("faitGeneric4");
        $this->assertEquals("faitGeneric4", $obj->getFaitGeneric4());
    }

    /**
     * Tests the setFaitGeneric5() method.
     *
     * @return void
     */
    public function testSetFaitGeneric5() {

        $obj = new SuiviClient();

        $obj->setFaitGeneric5("faitGeneric5");
        $this->assertEquals("faitGeneric5", $obj->getFaitGeneric5());
    }

    /**
     * Tests the setFaitGeneric6() method.
     *
     * @return void
     */
    public function testSetFaitGeneric6() {

        $obj = new SuiviClient();

        $obj->setFaitGeneric6("faitGeneric6");
        $this->assertEquals("faitGeneric6", $obj->getFaitGeneric6());
    }

    /**
     * Tests the setFaitGeneric7() method.
     *
     * @return void
     */
    public function testSetFaitGeneric7() {

        $obj = new SuiviClient();

        $obj->setFaitGeneric7("faitGeneric7");
        $this->assertEquals("faitGeneric7", $obj->getFaitGeneric7());
    }

    /**
     * Tests the setFaitGeneric8() method.
     *
     * @return void
     */
    public function testSetFaitGeneric8() {

        $obj = new SuiviClient();

        $obj->setFaitGeneric8("faitGeneric8");
        $this->assertEquals("faitGeneric8", $obj->getFaitGeneric8());
    }

    /**
     * Tests the setFaitGeneric9() method.
     *
     * @return void
     */
    public function testSetFaitGeneric9() {

        $obj = new SuiviClient();

        $obj->setFaitGeneric9("faitGeneric9");
        $this->assertEquals("faitGeneric9", $obj->getFaitGeneric9());
    }

    /**
     * Tests the setFaitIFU() method.
     *
     * @return void
     */
    public function testSetFaitIFU() {

        $obj = new SuiviClient();

        $obj->setFaitIFU("faitIFU");
        $this->assertEquals("faitIFU", $obj->getFaitIFU());
    }

    /**
     * Tests the setFaitISA() method.
     *
     * @return void
     */
    public function testSetFaitISA() {

        $obj = new SuiviClient();

        $obj->setFaitISA("faitISA");
        $this->assertEquals("faitISA", $obj->getFaitISA());
    }

    /**
     * Tests the setFaitISF() method.
     *
     * @return void
     */
    public function testSetFaitISF() {

        $obj = new SuiviClient();

        $obj->setFaitISF("faitISF");
        $this->assertEquals("faitISF", $obj->getFaitISF());
    }

    /**
     * Tests the setFaitISR() method.
     *
     * @return void
     */
    public function testSetFaitISR() {

        $obj = new SuiviClient();

        $obj->setFaitISR("faitISR");
        $this->assertEquals("faitISR", $obj->getFaitISR());
    }

    /**
     * Tests the setFaitISS() method.
     *
     * @return void
     */
    public function testSetFaitISS() {

        $obj = new SuiviClient();

        $obj->setFaitISS("faitISS");
        $this->assertEquals("faitISS", $obj->getFaitISS());
    }

    /**
     * Tests the setFaitImpotRevenu() method.
     *
     * @return void
     */
    public function testSetFaitImpotRevenu() {

        $obj = new SuiviClient();

        $obj->setFaitImpotRevenu("faitImpotRevenu");
        $this->assertEquals("faitImpotRevenu", $obj->getFaitImpotRevenu());
    }

    /**
     * Tests the setFaitPlafTP() method.
     *
     * @return void
     */
    public function testSetFaitPlafTP() {

        $obj = new SuiviClient();

        $obj->setFaitPlafTP("faitPlafTP");
        $this->assertEquals("faitPlafTP", $obj->getFaitPlafTP());
    }

    /**
     * Tests the setFaitPreLib() method.
     *
     * @return void
     */
    public function testSetFaitPreLib() {

        $obj = new SuiviClient();

        $obj->setFaitPreLib("faitPreLib");
        $this->assertEquals("faitPreLib", $obj->getFaitPreLib());
    }

    /**
     * Tests the setFaitSituation() method.
     *
     * @return void
     */
    public function testSetFaitSituation() {

        $obj = new SuiviClient();

        $obj->setFaitSituation("faitSituation");
        $this->assertEquals("faitSituation", $obj->getFaitSituation());
    }

    /**
     * Tests the setFaitTP() method.
     *
     * @return void
     */
    public function testSetFaitTP() {

        $obj = new SuiviClient();

        $obj->setFaitTP("faitTP");
        $this->assertEquals("faitTP", $obj->getFaitTP());
    }

    /**
     * Tests the setFaitTVA() method.
     *
     * @return void
     */
    public function testSetFaitTVA() {

        $obj = new SuiviClient();

        $obj->setFaitTVA("faitTVA");
        $this->assertEquals("faitTVA", $obj->getFaitTVA());
    }

    /**
     * Tests the setFaitTVS() method.
     *
     * @return void
     */
    public function testSetFaitTVS() {

        $obj = new SuiviClient();

        $obj->setFaitTVS("faitTVS");
        $this->assertEquals("faitTVS", $obj->getFaitTVS());
    }

    /**
     * Tests the setFaitTabBord() method.
     *
     * @return void
     */
    public function testSetFaitTabBord() {

        $obj = new SuiviClient();

        $obj->setFaitTabBord("faitTabBord");
        $this->assertEquals("faitTabBord", $obj->getFaitTabBord());
    }

    /**
     * Tests the setGeneric10CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric10CommentaireDate() {

        $obj = new SuiviClient();

        $obj->setGeneric10CommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getGeneric10CommentaireDate());
    }

    /**
     * Tests the setGeneric10CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric10CommentaireLib() {

        $obj = new SuiviClient();

        $obj->setGeneric10CommentaireLib("generic10CommentaireLib");
        $this->assertEquals("generic10CommentaireLib", $obj->getGeneric10CommentaireLib());
    }

    /**
     * Tests the setGeneric10DateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric10DateLimite() {

        $obj = new SuiviClient();

        $obj->setGeneric10DateLimite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getGeneric10DateLimite());
    }

    /**
     * Tests the setGeneric1CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric1CommentaireDate() {

        $obj = new SuiviClient();

        $obj->setGeneric1CommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getGeneric1CommentaireDate());
    }

    /**
     * Tests the setGeneric1CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric1CommentaireLib() {

        $obj = new SuiviClient();

        $obj->setGeneric1CommentaireLib("generic1CommentaireLib");
        $this->assertEquals("generic1CommentaireLib", $obj->getGeneric1CommentaireLib());
    }

    /**
     * Tests the setGeneric1DateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric1DateLimite() {

        $obj = new SuiviClient();

        $obj->setGeneric1DateLimite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getGeneric1DateLimite());
    }

    /**
     * Tests the setGeneric2CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric2CommentaireDate() {

        $obj = new SuiviClient();

        $obj->setGeneric2CommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getGeneric2CommentaireDate());
    }

    /**
     * Tests the setGeneric2CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric2CommentaireLib() {

        $obj = new SuiviClient();

        $obj->setGeneric2CommentaireLib("generic2CommentaireLib");
        $this->assertEquals("generic2CommentaireLib", $obj->getGeneric2CommentaireLib());
    }

    /**
     * Tests the setGeneric2DateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric2DateLimite() {

        $obj = new SuiviClient();

        $obj->setGeneric2DateLimite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getGeneric2DateLimite());
    }

    /**
     * Tests the setGeneric3CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric3CommentaireDate() {

        $obj = new SuiviClient();

        $obj->setGeneric3CommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getGeneric3CommentaireDate());
    }

    /**
     * Tests the setGeneric3CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric3CommentaireLib() {

        $obj = new SuiviClient();

        $obj->setGeneric3CommentaireLib("generic3CommentaireLib");
        $this->assertEquals("generic3CommentaireLib", $obj->getGeneric3CommentaireLib());
    }

    /**
     * Tests the setGeneric3DateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric3DateLimite() {

        $obj = new SuiviClient();

        $obj->setGeneric3DateLimite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getGeneric3DateLimite());
    }

    /**
     * Tests the setGeneric4CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric4CommentaireDate() {

        $obj = new SuiviClient();

        $obj->setGeneric4CommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getGeneric4CommentaireDate());
    }

    /**
     * Tests the setGeneric4CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric4CommentaireLib() {

        $obj = new SuiviClient();

        $obj->setGeneric4CommentaireLib("generic4CommentaireLib");
        $this->assertEquals("generic4CommentaireLib", $obj->getGeneric4CommentaireLib());
    }

    /**
     * Tests the setGeneric4DateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric4DateLimite() {

        $obj = new SuiviClient();

        $obj->setGeneric4DateLimite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getGeneric4DateLimite());
    }

    /**
     * Tests the setGeneric5CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric5CommentaireDate() {

        $obj = new SuiviClient();

        $obj->setGeneric5CommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getGeneric5CommentaireDate());
    }

    /**
     * Tests the setGeneric5CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric5CommentaireLib() {

        $obj = new SuiviClient();

        $obj->setGeneric5CommentaireLib("generic5CommentaireLib");
        $this->assertEquals("generic5CommentaireLib", $obj->getGeneric5CommentaireLib());
    }

    /**
     * Tests the setGeneric5DateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric5DateLimite() {

        $obj = new SuiviClient();

        $obj->setGeneric5DateLimite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getGeneric5DateLimite());
    }

    /**
     * Tests the setGeneric6CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric6CommentaireDate() {

        $obj = new SuiviClient();

        $obj->setGeneric6CommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getGeneric6CommentaireDate());
    }

    /**
     * Tests the setGeneric6CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric6CommentaireLib() {

        $obj = new SuiviClient();

        $obj->setGeneric6CommentaireLib("generic6CommentaireLib");
        $this->assertEquals("generic6CommentaireLib", $obj->getGeneric6CommentaireLib());
    }

    /**
     * Tests the setGeneric6DateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric6DateLimite() {

        $obj = new SuiviClient();

        $obj->setGeneric6DateLimite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getGeneric6DateLimite());
    }

    /**
     * Tests the setGeneric7CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric7CommentaireDate() {

        $obj = new SuiviClient();

        $obj->setGeneric7CommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getGeneric7CommentaireDate());
    }

    /**
     * Tests the setGeneric7CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric7CommentaireLib() {

        $obj = new SuiviClient();

        $obj->setGeneric7CommentaireLib("generic7CommentaireLib");
        $this->assertEquals("generic7CommentaireLib", $obj->getGeneric7CommentaireLib());
    }

    /**
     * Tests the setGeneric7DateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric7DateLimite() {

        $obj = new SuiviClient();

        $obj->setGeneric7DateLimite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getGeneric7DateLimite());
    }

    /**
     * Tests the setGeneric8CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric8CommentaireDate() {

        $obj = new SuiviClient();

        $obj->setGeneric8CommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getGeneric8CommentaireDate());
    }

    /**
     * Tests the setGeneric8CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric8CommentaireLib() {

        $obj = new SuiviClient();

        $obj->setGeneric8CommentaireLib("generic8CommentaireLib");
        $this->assertEquals("generic8CommentaireLib", $obj->getGeneric8CommentaireLib());
    }

    /**
     * Tests the setGeneric8DateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric8DateLimite() {

        $obj = new SuiviClient();

        $obj->setGeneric8DateLimite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getGeneric8DateLimite());
    }

    /**
     * Tests the setGeneric9CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric9CommentaireDate() {

        $obj = new SuiviClient();

        $obj->setGeneric9CommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getGeneric9CommentaireDate());
    }

    /**
     * Tests the setGeneric9CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric9CommentaireLib() {

        $obj = new SuiviClient();

        $obj->setGeneric9CommentaireLib("generic9CommentaireLib");
        $this->assertEquals("generic9CommentaireLib", $obj->getGeneric9CommentaireLib());
    }

    /**
     * Tests the setGeneric9DateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric9DateLimite() {

        $obj = new SuiviClient();

        $obj->setGeneric9DateLimite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getGeneric9DateLimite());
    }

    /**
     * Tests the setIFUCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetIFUCommentaireDate() {

        $obj = new SuiviClient();

        $obj->setIFUCommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getIFUCommentaireDate());
    }

    /**
     * Tests the setIFUCommentaireLib() method.
     *
     * @return void
     */
    public function testSetIFUCommentaireLib() {

        $obj = new SuiviClient();

        $obj->setIFUCommentaireLib("iFUCommentaireLib");
        $this->assertEquals("iFUCommentaireLib", $obj->getIFUCommentaireLib());
    }

    /**
     * Tests the setISACommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetISACommentaireDate() {

        $obj = new SuiviClient();

        $obj->setISACommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getISACommentaireDate());
    }

    /**
     * Tests the setISACommentaireLib() method.
     *
     * @return void
     */
    public function testSetISACommentaireLib() {

        $obj = new SuiviClient();

        $obj->setISACommentaireLib("iSACommentaireLib");
        $this->assertEquals("iSACommentaireLib", $obj->getISACommentaireLib());
    }

    /**
     * Tests the setISFCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetISFCommentaireDate() {

        $obj = new SuiviClient();

        $obj->setISFCommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getISFCommentaireDate());
    }

    /**
     * Tests the setISFCommentaireLib() method.
     *
     * @return void
     */
    public function testSetISFCommentaireLib() {

        $obj = new SuiviClient();

        $obj->setISFCommentaireLib("iSFCommentaireLib");
        $this->assertEquals("iSFCommentaireLib", $obj->getISFCommentaireLib());
    }

    /**
     * Tests the setISFDateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetISFDateLimite() {

        $obj = new SuiviClient();

        $obj->setISFDateLimite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getISFDateLimite());
    }

    /**
     * Tests the setISRCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetISRCommentaireDate() {

        $obj = new SuiviClient();

        $obj->setISRCommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getISRCommentaireDate());
    }

    /**
     * Tests the setISRCommentaireLib() method.
     *
     * @return void
     */
    public function testSetISRCommentaireLib() {

        $obj = new SuiviClient();

        $obj->setISRCommentaireLib("iSRCommentaireLib");
        $this->assertEquals("iSRCommentaireLib", $obj->getISRCommentaireLib());
    }

    /**
     * Tests the setISSCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetISSCommentaireDate() {

        $obj = new SuiviClient();

        $obj->setISSCommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getISSCommentaireDate());
    }

    /**
     * Tests the setISSCommentaireLib() method.
     *
     * @return void
     */
    public function testSetISSCommentaireLib() {

        $obj = new SuiviClient();

        $obj->setISSCommentaireLib("iSSCommentaireLib");
        $this->assertEquals("iSSCommentaireLib", $obj->getISSCommentaireLib());
    }

    /**
     * Tests the setImpotRevenuCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetImpotRevenuCommentaireDate() {

        $obj = new SuiviClient();

        $obj->setImpotRevenuCommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getImpotRevenuCommentaireDate());
    }

    /**
     * Tests the setImpotRevenuCommentaireLib() method.
     *
     * @return void
     */
    public function testSetImpotRevenuCommentaireLib() {

        $obj = new SuiviClient();

        $obj->setImpotRevenuCommentaireLib("impotRevenuCommentaireLib");
        $this->assertEquals("impotRevenuCommentaireLib", $obj->getImpotRevenuCommentaireLib());
    }

    /**
     * Tests the setImpotRevenuDateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetImpotRevenuDateLimite() {

        $obj = new SuiviClient();

        $obj->setImpotRevenuDateLimite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getImpotRevenuDateLimite());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new SuiviClient();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setPlafTPCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPlafTPCommentaireDate() {

        $obj = new SuiviClient();

        $obj->setPlafTPCommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPlafTPCommentaireDate());
    }

    /**
     * Tests the setPlafTPCommentaireLib() method.
     *
     * @return void
     */
    public function testSetPlafTPCommentaireLib() {

        $obj = new SuiviClient();

        $obj->setPlafTPCommentaireLib("plafTPCommentaireLib");
        $this->assertEquals("plafTPCommentaireLib", $obj->getPlafTPCommentaireLib());
    }

    /**
     * Tests the setPreLibCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPreLibCommentaireDate() {

        $obj = new SuiviClient();

        $obj->setPreLibCommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPreLibCommentaireDate());
    }

    /**
     * Tests the setPreLibCommentaireLib() method.
     *
     * @return void
     */
    public function testSetPreLibCommentaireLib() {

        $obj = new SuiviClient();

        $obj->setPreLibCommentaireLib("preLibCommentaireLib");
        $this->assertEquals("preLibCommentaireLib", $obj->getPreLibCommentaireLib());
    }

    /**
     * Tests the setPreLibDateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPreLibDateLimite() {

        $obj = new SuiviClient();

        $obj->setPreLibDateLimite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPreLibDateLimite());
    }

    /**
     * Tests the setSituationCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetSituationCommentaireDate() {

        $obj = new SuiviClient();

        $obj->setSituationCommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getSituationCommentaireDate());
    }

    /**
     * Tests the setSituationCommentaireLib() method.
     *
     * @return void
     */
    public function testSetSituationCommentaireLib() {

        $obj = new SuiviClient();

        $obj->setSituationCommentaireLib("situationCommentaireLib");
        $this->assertEquals("situationCommentaireLib", $obj->getSituationCommentaireLib());
    }

    /**
     * Tests the setSituationDateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetSituationDateLimite() {

        $obj = new SuiviClient();

        $obj->setSituationDateLimite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getSituationDateLimite());
    }

    /**
     * Tests the setTPCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTPCommentaireDate() {

        $obj = new SuiviClient();

        $obj->setTPCommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getTPCommentaireDate());
    }

    /**
     * Tests the setTPCommentaireLib() method.
     *
     * @return void
     */
    public function testSetTPCommentaireLib() {

        $obj = new SuiviClient();

        $obj->setTPCommentaireLib("tPCommentaireLib");
        $this->assertEquals("tPCommentaireLib", $obj->getTPCommentaireLib());
    }

    /**
     * Tests the setTSACommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTSACommentaireDate() {

        $obj = new SuiviClient();

        $obj->setTSACommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getTSACommentaireDate());
    }

    /**
     * Tests the setTSACommentaireLib() method.
     *
     * @return void
     */
    public function testSetTSACommentaireLib() {

        $obj = new SuiviClient();

        $obj->setTSACommentaireLib("tSACommentaireLib");
        $this->assertEquals("tSACommentaireLib", $obj->getTSACommentaireLib());
    }

    /**
     * Tests the setTSSCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTSSCommentaireDate() {

        $obj = new SuiviClient();

        $obj->setTSSCommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getTSSCommentaireDate());
    }

    /**
     * Tests the setTSSCommentaireLib() method.
     *
     * @return void
     */
    public function testSetTSSCommentaireLib() {

        $obj = new SuiviClient();

        $obj->setTSSCommentaireLib("tSSCommentaireLib");
        $this->assertEquals("tSSCommentaireLib", $obj->getTSSCommentaireLib());
    }

    /**
     * Tests the setTVSCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTVSCommentaireDate() {

        $obj = new SuiviClient();

        $obj->setTVSCommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getTVSCommentaireDate());
    }

    /**
     * Tests the setTVSCommentaireLib() method.
     *
     * @return void
     */
    public function testSetTVSCommentaireLib() {

        $obj = new SuiviClient();

        $obj->setTVSCommentaireLib("tVSCommentaireLib");
        $this->assertEquals("tVSCommentaireLib", $obj->getTVSCommentaireLib());
    }

    /**
     * Tests the setTabBordCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTabBordCommentaireDate() {

        $obj = new SuiviClient();

        $obj->setTabBordCommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getTabBordCommentaireDate());
    }

    /**
     * Tests the setTabBordCommentaireLib() method.
     *
     * @return void
     */
    public function testSetTabBordCommentaireLib() {

        $obj = new SuiviClient();

        $obj->setTabBordCommentaireLib("tabBordCommentaireLib");
        $this->assertEquals("tabBordCommentaireLib", $obj->getTabBordCommentaireLib());
    }

    /**
     * Tests the setTabBordDateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTabBordDateLimite() {

        $obj = new SuiviClient();

        $obj->setTabBordDateLimite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getTabBordDateLimite());
    }

    /**
     * Tests the setTvaCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTvaCommentaireDate() {

        $obj = new SuiviClient();

        $obj->setTvaCommentaireDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getTvaCommentaireDate());
    }

    /**
     * Tests the setTvaCommentaireLib() method.
     *
     * @return void
     */
    public function testSetTvaCommentaireLib() {

        $obj = new SuiviClient();

        $obj->setTvaCommentaireLib("tvaCommentaireLib");
        $this->assertEquals("tvaCommentaireLib", $obj->getTvaCommentaireLib());
    }
}
