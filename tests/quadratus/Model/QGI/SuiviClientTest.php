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
use WBW\Library\Quadratus\Model\QGI\SuiviClient;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Suivi client test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class SuiviClientTest extends AbstractTestCase {

    /**
     * Tests the setBilanCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetBilanCommentaireDate(): void {

        // Set a Date/time mock.
        $bilanCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setBilanCommentaireDate($bilanCommentaireDate);
        $this->assertSame($bilanCommentaireDate, $obj->getBilanCommentaireDate());
    }

    /**
     * Tests the setBilanCommentaireLib() method.
     *
     * @return void
     */
    public function testSetBilanCommentaireLib(): void {

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
    public function testSetBullCommentaireDate(): void {

        // Set a Date/time mock.
        $bullCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setBullCommentaireDate($bullCommentaireDate);
        $this->assertSame($bullCommentaireDate, $obj->getBullCommentaireDate());
    }

    /**
     * Tests the setBullCommentaireLib() method.
     *
     * @return void
     */
    public function testSetBullCommentaireLib(): void {

        $obj = new SuiviClient();

        $obj->setBullCommentaireLib("bullCommentaireLib");
        $this->assertEquals("bullCommentaireLib", $obj->getBullCommentaireLib());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new SuiviClient();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setDadsUCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDadsUCommentaireDate(): void {

        // Set a Date/time mock.
        $dadsUCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setDadsUCommentaireDate($dadsUCommentaireDate);
        $this->assertSame($dadsUCommentaireDate, $obj->getDadsUCommentaireDate());
    }

    /**
     * Tests the setDadsUCommentaireLib() method.
     *
     * @return void
     */
    public function testSetDadsUCommentaireLib(): void {

        $obj = new SuiviClient();

        $obj->setDadsUCommentaireLib("dadsUCommentaireLib");
        $this->assertEquals("dadsUCommentaireLib", $obj->getDadsUCommentaireLib());
    }

    /**
     * Tests the setDas2CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDas2CommentaireDate(): void {

        // Set a Date/time mock.
        $das2CommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setDas2CommentaireDate($das2CommentaireDate);
        $this->assertSame($das2CommentaireDate, $obj->getDas2CommentaireDate());
    }

    /**
     * Tests the setDas2CommentaireLib() method.
     *
     * @return void
     */
    public function testSetDas2CommentaireLib(): void {

        $obj = new SuiviClient();

        $obj->setDas2CommentaireLib("das2CommentaireLib");
        $this->assertEquals("das2CommentaireLib", $obj->getDas2CommentaireLib());
    }

    /**
     * Tests the setDateModif() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModif(): void {

        // Set a Date/time mock.
        $dateModif = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
    }

    /**
     * Tests the setDcrCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDcrCommentaireDate(): void {

        // Set a Date/time mock.
        $dcrCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setDcrCommentaireDate($dcrCommentaireDate);
        $this->assertSame($dcrCommentaireDate, $obj->getDcrCommentaireDate());
    }

    /**
     * Tests the setDcrCommentaireLib() method.
     *
     * @return void
     */
    public function testSetDcrCommentaireLib(): void {

        $obj = new SuiviClient();

        $obj->setDcrCommentaireLib("dcrCommentaireLib");
        $this->assertEquals("dcrCommentaireLib", $obj->getDcrCommentaireLib());
    }

    /**
     * Tests the setDcrDateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDcrDateLimite(): void {

        // Set a Date/time mock.
        $dcrDateLimite = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setDcrDateLimite($dcrDateLimite);
        $this->assertSame($dcrDateLimite, $obj->getDcrDateLimite());
    }

    /**
     * Tests the setDsiCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDsiCommentaireDate(): void {

        // Set a Date/time mock.
        $dsiCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setDsiCommentaireDate($dsiCommentaireDate);
        $this->assertSame($dsiCommentaireDate, $obj->getDsiCommentaireDate());
    }

    /**
     * Tests the setDsiCommentaireLib() method.
     *
     * @return void
     */
    public function testSetDsiCommentaireLib(): void {

        $obj = new SuiviClient();

        $obj->setDsiCommentaireLib("dsiCommentaireLib");
        $this->assertEquals("dsiCommentaireLib", $obj->getDsiCommentaireLib());
    }

    /**
     * Tests the setDucsAssedicCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDucsAssedicCommentaireDate(): void {

        // Set a Date/time mock.
        $ducsAssedicCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setDucsAssedicCommentaireDate($ducsAssedicCommentaireDate);
        $this->assertSame($ducsAssedicCommentaireDate, $obj->getDucsAssedicCommentaireDate());
    }

    /**
     * Tests the setDucsAssedicCommentaireLib() method.
     *
     * @return void
     */
    public function testSetDucsAssedicCommentaireLib(): void {

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
    public function testSetDucsUrssafCommentaireDate(): void {

        // Set a Date/time mock.
        $ducsUrssafCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setDucsUrssafCommentaireDate($ducsUrssafCommentaireDate);
        $this->assertSame($ducsUrssafCommentaireDate, $obj->getDucsUrssafCommentaireDate());
    }

    /**
     * Tests the setDucsUrssafCommentaireLib() method.
     *
     * @return void
     */
    public function testSetDucsUrssafCommentaireLib(): void {

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
    public function testSetFacturationCommentaireDate(): void {

        // Set a Date/time mock.
        $facturationCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setFacturationCommentaireDate($facturationCommentaireDate);
        $this->assertSame($facturationCommentaireDate, $obj->getFacturationCommentaireDate());
    }

    /**
     * Tests the setFacturationCommentaireLib() method.
     *
     * @return void
     */
    public function testSetFacturationCommentaireLib(): void {

        $obj = new SuiviClient();

        $obj->setFacturationCommentaireLib("facturationCommentaireLib");
        $this->assertEquals("facturationCommentaireLib", $obj->getFacturationCommentaireLib());
    }

    /**
     * Tests the setFaitBilan() method.
     *
     * @return void
     */
    public function testSetFaitBilan(): void {

        $obj = new SuiviClient();

        $obj->setFaitBilan("faitBilan");
        $this->assertEquals("faitBilan", $obj->getFaitBilan());
    }

    /**
     * Tests the setFaitCvae() method.
     *
     * @return void
     */
    public function testSetFaitCvae(): void {

        $obj = new SuiviClient();

        $obj->setFaitCvae("faitCvae");
        $this->assertEquals("faitCvae", $obj->getFaitCvae());
    }

    /**
     * Tests the setFaitDas2() method.
     *
     * @return void
     */
    public function testSetFaitDas2(): void {

        $obj = new SuiviClient();

        $obj->setFaitDas2("faitDas2");
        $this->assertEquals("faitDas2", $obj->getFaitDas2());
    }

    /**
     * Tests the setFaitDcr() method.
     *
     * @return void
     */
    public function testSetFaitDcr(): void {

        $obj = new SuiviClient();

        $obj->setFaitDcr("faitDcr");
        $this->assertEquals("faitDcr", $obj->getFaitDcr());
    }

    /**
     * Tests the setFaitGeneric1() method.
     *
     * @return void
     */
    public function testSetFaitGeneric1(): void {

        $obj = new SuiviClient();

        $obj->setFaitGeneric1("faitGeneric1");
        $this->assertEquals("faitGeneric1", $obj->getFaitGeneric1());
    }

    /**
     * Tests the setFaitGeneric10() method.
     *
     * @return void
     */
    public function testSetFaitGeneric10(): void {

        $obj = new SuiviClient();

        $obj->setFaitGeneric10("faitGeneric10");
        $this->assertEquals("faitGeneric10", $obj->getFaitGeneric10());
    }

    /**
     * Tests the setFaitGeneric2() method.
     *
     * @return void
     */
    public function testSetFaitGeneric2(): void {

        $obj = new SuiviClient();

        $obj->setFaitGeneric2("faitGeneric2");
        $this->assertEquals("faitGeneric2", $obj->getFaitGeneric2());
    }

    /**
     * Tests the setFaitGeneric3() method.
     *
     * @return void
     */
    public function testSetFaitGeneric3(): void {

        $obj = new SuiviClient();

        $obj->setFaitGeneric3("faitGeneric3");
        $this->assertEquals("faitGeneric3", $obj->getFaitGeneric3());
    }

    /**
     * Tests the setFaitGeneric4() method.
     *
     * @return void
     */
    public function testSetFaitGeneric4(): void {

        $obj = new SuiviClient();

        $obj->setFaitGeneric4("faitGeneric4");
        $this->assertEquals("faitGeneric4", $obj->getFaitGeneric4());
    }

    /**
     * Tests the setFaitGeneric5() method.
     *
     * @return void
     */
    public function testSetFaitGeneric5(): void {

        $obj = new SuiviClient();

        $obj->setFaitGeneric5("faitGeneric5");
        $this->assertEquals("faitGeneric5", $obj->getFaitGeneric5());
    }

    /**
     * Tests the setFaitGeneric6() method.
     *
     * @return void
     */
    public function testSetFaitGeneric6(): void {

        $obj = new SuiviClient();

        $obj->setFaitGeneric6("faitGeneric6");
        $this->assertEquals("faitGeneric6", $obj->getFaitGeneric6());
    }

    /**
     * Tests the setFaitGeneric7() method.
     *
     * @return void
     */
    public function testSetFaitGeneric7(): void {

        $obj = new SuiviClient();

        $obj->setFaitGeneric7("faitGeneric7");
        $this->assertEquals("faitGeneric7", $obj->getFaitGeneric7());
    }

    /**
     * Tests the setFaitGeneric8() method.
     *
     * @return void
     */
    public function testSetFaitGeneric8(): void {

        $obj = new SuiviClient();

        $obj->setFaitGeneric8("faitGeneric8");
        $this->assertEquals("faitGeneric8", $obj->getFaitGeneric8());
    }

    /**
     * Tests the setFaitGeneric9() method.
     *
     * @return void
     */
    public function testSetFaitGeneric9(): void {

        $obj = new SuiviClient();

        $obj->setFaitGeneric9("faitGeneric9");
        $this->assertEquals("faitGeneric9", $obj->getFaitGeneric9());
    }

    /**
     * Tests the setFaitIfu() method.
     *
     * @return void
     */
    public function testSetFaitIfu(): void {

        $obj = new SuiviClient();

        $obj->setFaitIfu("faitIfu");
        $this->assertEquals("faitIfu", $obj->getFaitIfu());
    }

    /**
     * Tests the setFaitImpotRevenu() method.
     *
     * @return void
     */
    public function testSetFaitImpotRevenu(): void {

        $obj = new SuiviClient();

        $obj->setFaitImpotRevenu("faitImpotRevenu");
        $this->assertEquals("faitImpotRevenu", $obj->getFaitImpotRevenu());
    }

    /**
     * Tests the setFaitIsa() method.
     *
     * @return void
     */
    public function testSetFaitIsa(): void {

        $obj = new SuiviClient();

        $obj->setFaitIsa("faitIsa");
        $this->assertEquals("faitIsa", $obj->getFaitIsa());
    }

    /**
     * Tests the setFaitIsf() method.
     *
     * @return void
     */
    public function testSetFaitIsf(): void {

        $obj = new SuiviClient();

        $obj->setFaitIsf("faitIsf");
        $this->assertEquals("faitIsf", $obj->getFaitIsf());
    }

    /**
     * Tests the setFaitIsr() method.
     *
     * @return void
     */
    public function testSetFaitIsr(): void {

        $obj = new SuiviClient();

        $obj->setFaitIsr("faitIsr");
        $this->assertEquals("faitIsr", $obj->getFaitIsr());
    }

    /**
     * Tests the setFaitIss() method.
     *
     * @return void
     */
    public function testSetFaitIss(): void {

        $obj = new SuiviClient();

        $obj->setFaitIss("faitIss");
        $this->assertEquals("faitIss", $obj->getFaitIss());
    }

    /**
     * Tests the setFaitPlafTp() method.
     *
     * @return void
     */
    public function testSetFaitPlafTp(): void {

        $obj = new SuiviClient();

        $obj->setFaitPlafTp("faitPlafTp");
        $this->assertEquals("faitPlafTp", $obj->getFaitPlafTp());
    }

    /**
     * Tests the setFaitPreLib() method.
     *
     * @return void
     */
    public function testSetFaitPreLib(): void {

        $obj = new SuiviClient();

        $obj->setFaitPreLib("faitPreLib");
        $this->assertEquals("faitPreLib", $obj->getFaitPreLib());
    }

    /**
     * Tests the setFaitSituation() method.
     *
     * @return void
     */
    public function testSetFaitSituation(): void {

        $obj = new SuiviClient();

        $obj->setFaitSituation("faitSituation");
        $this->assertEquals("faitSituation", $obj->getFaitSituation());
    }

    /**
     * Tests the setFaitTabBord() method.
     *
     * @return void
     */
    public function testSetFaitTabBord(): void {

        $obj = new SuiviClient();

        $obj->setFaitTabBord("faitTabBord");
        $this->assertEquals("faitTabBord", $obj->getFaitTabBord());
    }

    /**
     * Tests the setFaitTp() method.
     *
     * @return void
     */
    public function testSetFaitTp(): void {

        $obj = new SuiviClient();

        $obj->setFaitTp("faitTp");
        $this->assertEquals("faitTp", $obj->getFaitTp());
    }

    /**
     * Tests the setFaitTva() method.
     *
     * @return void
     */
    public function testSetFaitTva(): void {

        $obj = new SuiviClient();

        $obj->setFaitTva("faitTva");
        $this->assertEquals("faitTva", $obj->getFaitTva());
    }

    /**
     * Tests the setFaitTvs() method.
     *
     * @return void
     */
    public function testSetFaitTvs(): void {

        $obj = new SuiviClient();

        $obj->setFaitTvs("faitTvs");
        $this->assertEquals("faitTvs", $obj->getFaitTvs());
    }

    /**
     * Tests the setGeneric10CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric10CommentaireDate(): void {

        // Set a Date/time mock.
        $generic10CommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setGeneric10CommentaireDate($generic10CommentaireDate);
        $this->assertSame($generic10CommentaireDate, $obj->getGeneric10CommentaireDate());
    }

    /**
     * Tests the setGeneric10CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric10CommentaireLib(): void {

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
    public function testSetGeneric10DateLimite(): void {

        // Set a Date/time mock.
        $generic10DateLimite = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setGeneric10DateLimite($generic10DateLimite);
        $this->assertSame($generic10DateLimite, $obj->getGeneric10DateLimite());
    }

    /**
     * Tests the setGeneric1CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric1CommentaireDate(): void {

        // Set a Date/time mock.
        $generic1CommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setGeneric1CommentaireDate($generic1CommentaireDate);
        $this->assertSame($generic1CommentaireDate, $obj->getGeneric1CommentaireDate());
    }

    /**
     * Tests the setGeneric1CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric1CommentaireLib(): void {

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
    public function testSetGeneric1DateLimite(): void {

        // Set a Date/time mock.
        $generic1DateLimite = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setGeneric1DateLimite($generic1DateLimite);
        $this->assertSame($generic1DateLimite, $obj->getGeneric1DateLimite());
    }

    /**
     * Tests the setGeneric2CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric2CommentaireDate(): void {

        // Set a Date/time mock.
        $generic2CommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setGeneric2CommentaireDate($generic2CommentaireDate);
        $this->assertSame($generic2CommentaireDate, $obj->getGeneric2CommentaireDate());
    }

    /**
     * Tests the setGeneric2CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric2CommentaireLib(): void {

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
    public function testSetGeneric2DateLimite(): void {

        // Set a Date/time mock.
        $generic2DateLimite = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setGeneric2DateLimite($generic2DateLimite);
        $this->assertSame($generic2DateLimite, $obj->getGeneric2DateLimite());
    }

    /**
     * Tests the setGeneric3CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric3CommentaireDate(): void {

        // Set a Date/time mock.
        $generic3CommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setGeneric3CommentaireDate($generic3CommentaireDate);
        $this->assertSame($generic3CommentaireDate, $obj->getGeneric3CommentaireDate());
    }

    /**
     * Tests the setGeneric3CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric3CommentaireLib(): void {

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
    public function testSetGeneric3DateLimite(): void {

        // Set a Date/time mock.
        $generic3DateLimite = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setGeneric3DateLimite($generic3DateLimite);
        $this->assertSame($generic3DateLimite, $obj->getGeneric3DateLimite());
    }

    /**
     * Tests the setGeneric4CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric4CommentaireDate(): void {

        // Set a Date/time mock.
        $generic4CommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setGeneric4CommentaireDate($generic4CommentaireDate);
        $this->assertSame($generic4CommentaireDate, $obj->getGeneric4CommentaireDate());
    }

    /**
     * Tests the setGeneric4CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric4CommentaireLib(): void {

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
    public function testSetGeneric4DateLimite(): void {

        // Set a Date/time mock.
        $generic4DateLimite = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setGeneric4DateLimite($generic4DateLimite);
        $this->assertSame($generic4DateLimite, $obj->getGeneric4DateLimite());
    }

    /**
     * Tests the setGeneric5CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric5CommentaireDate(): void {

        // Set a Date/time mock.
        $generic5CommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setGeneric5CommentaireDate($generic5CommentaireDate);
        $this->assertSame($generic5CommentaireDate, $obj->getGeneric5CommentaireDate());
    }

    /**
     * Tests the setGeneric5CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric5CommentaireLib(): void {

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
    public function testSetGeneric5DateLimite(): void {

        // Set a Date/time mock.
        $generic5DateLimite = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setGeneric5DateLimite($generic5DateLimite);
        $this->assertSame($generic5DateLimite, $obj->getGeneric5DateLimite());
    }

    /**
     * Tests the setGeneric6CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric6CommentaireDate(): void {

        // Set a Date/time mock.
        $generic6CommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setGeneric6CommentaireDate($generic6CommentaireDate);
        $this->assertSame($generic6CommentaireDate, $obj->getGeneric6CommentaireDate());
    }

    /**
     * Tests the setGeneric6CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric6CommentaireLib(): void {

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
    public function testSetGeneric6DateLimite(): void {

        // Set a Date/time mock.
        $generic6DateLimite = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setGeneric6DateLimite($generic6DateLimite);
        $this->assertSame($generic6DateLimite, $obj->getGeneric6DateLimite());
    }

    /**
     * Tests the setGeneric7CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric7CommentaireDate(): void {

        // Set a Date/time mock.
        $generic7CommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setGeneric7CommentaireDate($generic7CommentaireDate);
        $this->assertSame($generic7CommentaireDate, $obj->getGeneric7CommentaireDate());
    }

    /**
     * Tests the setGeneric7CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric7CommentaireLib(): void {

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
    public function testSetGeneric7DateLimite(): void {

        // Set a Date/time mock.
        $generic7DateLimite = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setGeneric7DateLimite($generic7DateLimite);
        $this->assertSame($generic7DateLimite, $obj->getGeneric7DateLimite());
    }

    /**
     * Tests the setGeneric8CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric8CommentaireDate(): void {

        // Set a Date/time mock.
        $generic8CommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setGeneric8CommentaireDate($generic8CommentaireDate);
        $this->assertSame($generic8CommentaireDate, $obj->getGeneric8CommentaireDate());
    }

    /**
     * Tests the setGeneric8CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric8CommentaireLib(): void {

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
    public function testSetGeneric8DateLimite(): void {

        // Set a Date/time mock.
        $generic8DateLimite = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setGeneric8DateLimite($generic8DateLimite);
        $this->assertSame($generic8DateLimite, $obj->getGeneric8DateLimite());
    }

    /**
     * Tests the setGeneric9CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric9CommentaireDate(): void {

        // Set a Date/time mock.
        $generic9CommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setGeneric9CommentaireDate($generic9CommentaireDate);
        $this->assertSame($generic9CommentaireDate, $obj->getGeneric9CommentaireDate());
    }

    /**
     * Tests the setGeneric9CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric9CommentaireLib(): void {

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
    public function testSetGeneric9DateLimite(): void {

        // Set a Date/time mock.
        $generic9DateLimite = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setGeneric9DateLimite($generic9DateLimite);
        $this->assertSame($generic9DateLimite, $obj->getGeneric9DateLimite());
    }

    /**
     * Tests the setIfuCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetIfuCommentaireDate(): void {

        // Set a Date/time mock.
        $ifuCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setIfuCommentaireDate($ifuCommentaireDate);
        $this->assertSame($ifuCommentaireDate, $obj->getIfuCommentaireDate());
    }

    /**
     * Tests the setIfuCommentaireLib() method.
     *
     * @return void
     */
    public function testSetIfuCommentaireLib(): void {

        $obj = new SuiviClient();

        $obj->setIfuCommentaireLib("ifuCommentaireLib");
        $this->assertEquals("ifuCommentaireLib", $obj->getIfuCommentaireLib());
    }

    /**
     * Tests the setImpotRevenuCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetImpotRevenuCommentaireDate(): void {

        // Set a Date/time mock.
        $impotRevenuCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setImpotRevenuCommentaireDate($impotRevenuCommentaireDate);
        $this->assertSame($impotRevenuCommentaireDate, $obj->getImpotRevenuCommentaireDate());
    }

    /**
     * Tests the setImpotRevenuCommentaireLib() method.
     *
     * @return void
     */
    public function testSetImpotRevenuCommentaireLib(): void {

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
    public function testSetImpotRevenuDateLimite(): void {

        // Set a Date/time mock.
        $impotRevenuDateLimite = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setImpotRevenuDateLimite($impotRevenuDateLimite);
        $this->assertSame($impotRevenuDateLimite, $obj->getImpotRevenuDateLimite());
    }

    /**
     * Tests the setIsaCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetIsaCommentaireDate(): void {

        // Set a Date/time mock.
        $isaCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setIsaCommentaireDate($isaCommentaireDate);
        $this->assertSame($isaCommentaireDate, $obj->getIsaCommentaireDate());
    }

    /**
     * Tests the setIsaCommentaireLib() method.
     *
     * @return void
     */
    public function testSetIsaCommentaireLib(): void {

        $obj = new SuiviClient();

        $obj->setIsaCommentaireLib("isaCommentaireLib");
        $this->assertEquals("isaCommentaireLib", $obj->getIsaCommentaireLib());
    }

    /**
     * Tests the setIsfCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetIsfCommentaireDate(): void {

        // Set a Date/time mock.
        $isfCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setIsfCommentaireDate($isfCommentaireDate);
        $this->assertSame($isfCommentaireDate, $obj->getIsfCommentaireDate());
    }

    /**
     * Tests the setIsfCommentaireLib() method.
     *
     * @return void
     */
    public function testSetIsfCommentaireLib(): void {

        $obj = new SuiviClient();

        $obj->setIsfCommentaireLib("isfCommentaireLib");
        $this->assertEquals("isfCommentaireLib", $obj->getIsfCommentaireLib());
    }

    /**
     * Tests the setIsfDateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetIsfDateLimite(): void {

        // Set a Date/time mock.
        $isfDateLimite = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setIsfDateLimite($isfDateLimite);
        $this->assertSame($isfDateLimite, $obj->getIsfDateLimite());
    }

    /**
     * Tests the setIsrCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetIsrCommentaireDate(): void {

        // Set a Date/time mock.
        $isrCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setIsrCommentaireDate($isrCommentaireDate);
        $this->assertSame($isrCommentaireDate, $obj->getIsrCommentaireDate());
    }

    /**
     * Tests the setIsrCommentaireLib() method.
     *
     * @return void
     */
    public function testSetIsrCommentaireLib(): void {

        $obj = new SuiviClient();

        $obj->setIsrCommentaireLib("isrCommentaireLib");
        $this->assertEquals("isrCommentaireLib", $obj->getIsrCommentaireLib());
    }

    /**
     * Tests the setIssCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetIssCommentaireDate(): void {

        // Set a Date/time mock.
        $issCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setIssCommentaireDate($issCommentaireDate);
        $this->assertSame($issCommentaireDate, $obj->getIssCommentaireDate());
    }

    /**
     * Tests the setIssCommentaireLib() method.
     *
     * @return void
     */
    public function testSetIssCommentaireLib(): void {

        $obj = new SuiviClient();

        $obj->setIssCommentaireLib("issCommentaireLib");
        $this->assertEquals("issCommentaireLib", $obj->getIssCommentaireLib());
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

        $obj = new SuiviClient();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setPlafTpCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPlafTpCommentaireDate(): void {

        // Set a Date/time mock.
        $plafTpCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setPlafTpCommentaireDate($plafTpCommentaireDate);
        $this->assertSame($plafTpCommentaireDate, $obj->getPlafTpCommentaireDate());
    }

    /**
     * Tests the setPlafTpCommentaireLib() method.
     *
     * @return void
     */
    public function testSetPlafTpCommentaireLib(): void {

        $obj = new SuiviClient();

        $obj->setPlafTpCommentaireLib("plafTpCommentaireLib");
        $this->assertEquals("plafTpCommentaireLib", $obj->getPlafTpCommentaireLib());
    }

    /**
     * Tests the setPreLibCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPreLibCommentaireDate(): void {

        // Set a Date/time mock.
        $preLibCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setPreLibCommentaireDate($preLibCommentaireDate);
        $this->assertSame($preLibCommentaireDate, $obj->getPreLibCommentaireDate());
    }

    /**
     * Tests the setPreLibCommentaireLib() method.
     *
     * @return void
     */
    public function testSetPreLibCommentaireLib(): void {

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
    public function testSetPreLibDateLimite(): void {

        // Set a Date/time mock.
        $preLibDateLimite = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setPreLibDateLimite($preLibDateLimite);
        $this->assertSame($preLibDateLimite, $obj->getPreLibDateLimite());
    }

    /**
     * Tests the setSituationCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetSituationCommentaireDate(): void {

        // Set a Date/time mock.
        $situationCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setSituationCommentaireDate($situationCommentaireDate);
        $this->assertSame($situationCommentaireDate, $obj->getSituationCommentaireDate());
    }

    /**
     * Tests the setSituationCommentaireLib() method.
     *
     * @return void
     */
    public function testSetSituationCommentaireLib(): void {

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
    public function testSetSituationDateLimite(): void {

        // Set a Date/time mock.
        $situationDateLimite = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setSituationDateLimite($situationDateLimite);
        $this->assertSame($situationDateLimite, $obj->getSituationDateLimite());
    }

    /**
     * Tests the setTabBordCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTabBordCommentaireDate(): void {

        // Set a Date/time mock.
        $tabBordCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setTabBordCommentaireDate($tabBordCommentaireDate);
        $this->assertSame($tabBordCommentaireDate, $obj->getTabBordCommentaireDate());
    }

    /**
     * Tests the setTabBordCommentaireLib() method.
     *
     * @return void
     */
    public function testSetTabBordCommentaireLib(): void {

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
    public function testSetTabBordDateLimite(): void {

        // Set a Date/time mock.
        $tabBordDateLimite = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setTabBordDateLimite($tabBordDateLimite);
        $this->assertSame($tabBordDateLimite, $obj->getTabBordDateLimite());
    }

    /**
     * Tests the setTpCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTpCommentaireDate(): void {

        // Set a Date/time mock.
        $tpCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setTpCommentaireDate($tpCommentaireDate);
        $this->assertSame($tpCommentaireDate, $obj->getTpCommentaireDate());
    }

    /**
     * Tests the setTpCommentaireLib() method.
     *
     * @return void
     */
    public function testSetTpCommentaireLib(): void {

        $obj = new SuiviClient();

        $obj->setTpCommentaireLib("tpCommentaireLib");
        $this->assertEquals("tpCommentaireLib", $obj->getTpCommentaireLib());
    }

    /**
     * Tests the setTsaCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTsaCommentaireDate(): void {

        // Set a Date/time mock.
        $tsaCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setTsaCommentaireDate($tsaCommentaireDate);
        $this->assertSame($tsaCommentaireDate, $obj->getTsaCommentaireDate());
    }

    /**
     * Tests the setTsaCommentaireLib() method.
     *
     * @return void
     */
    public function testSetTsaCommentaireLib(): void {

        $obj = new SuiviClient();

        $obj->setTsaCommentaireLib("tsaCommentaireLib");
        $this->assertEquals("tsaCommentaireLib", $obj->getTsaCommentaireLib());
    }

    /**
     * Tests the setTssCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTssCommentaireDate(): void {

        // Set a Date/time mock.
        $tssCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setTssCommentaireDate($tssCommentaireDate);
        $this->assertSame($tssCommentaireDate, $obj->getTssCommentaireDate());
    }

    /**
     * Tests the setTssCommentaireLib() method.
     *
     * @return void
     */
    public function testSetTssCommentaireLib(): void {

        $obj = new SuiviClient();

        $obj->setTssCommentaireLib("tssCommentaireLib");
        $this->assertEquals("tssCommentaireLib", $obj->getTssCommentaireLib());
    }

    /**
     * Tests the setTvaCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTvaCommentaireDate(): void {

        // Set a Date/time mock.
        $tvaCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setTvaCommentaireDate($tvaCommentaireDate);
        $this->assertSame($tvaCommentaireDate, $obj->getTvaCommentaireDate());
    }

    /**
     * Tests the setTvaCommentaireLib() method.
     *
     * @return void
     */
    public function testSetTvaCommentaireLib(): void {

        $obj = new SuiviClient();

        $obj->setTvaCommentaireLib("tvaCommentaireLib");
        $this->assertEquals("tvaCommentaireLib", $obj->getTvaCommentaireLib());
    }

    /**
     * Tests the setTvsCommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTvsCommentaireDate(): void {

        // Set a Date/time mock.
        $tvsCommentaireDate = new DateTime("2018-09-10");

        $obj = new SuiviClient();

        $obj->setTvsCommentaireDate($tvsCommentaireDate);
        $this->assertSame($tvsCommentaireDate, $obj->getTvsCommentaireDate());
    }

    /**
     * Tests the setTvsCommentaireLib() method.
     *
     * @return void
     */
    public function testSetTvsCommentaireLib(): void {

        $obj = new SuiviClient();

        $obj->setTvsCommentaireLib("tvsCommentaireLib");
        $this->assertEquals("tvsCommentaireLib", $obj->getTvsCommentaireLib());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SuiviClient();

        $this->assertNull($obj->getBilanCommentaireDate());
        $this->assertNull($obj->getBilanCommentaireLib());
        $this->assertNull($obj->getBullCommentaireDate());
        $this->assertNull($obj->getBullCommentaireLib());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getDas2CommentaireDate());
        $this->assertNull($obj->getDas2CommentaireLib());
        $this->assertNull($obj->getDcrCommentaireDate());
        $this->assertNull($obj->getDcrCommentaireLib());
        $this->assertNull($obj->getDcrDateLimite());
        $this->assertNull($obj->getDsiCommentaireDate());
        $this->assertNull($obj->getDsiCommentaireLib());
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
        $this->assertNull($obj->getFaitCvae());
        $this->assertNull($obj->getFaitDas2());
        $this->assertNull($obj->getFaitDcr());
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
        $this->assertNull($obj->getFaitIfu());
        $this->assertNull($obj->getFaitIsa());
        $this->assertNull($obj->getFaitIsf());
        $this->assertNull($obj->getFaitIsr());
        $this->assertNull($obj->getFaitIss());
        $this->assertNull($obj->getFaitImpotRevenu());
        $this->assertNull($obj->getFaitPlafTp());
        $this->assertNull($obj->getFaitPreLib());
        $this->assertNull($obj->getFaitSituation());
        $this->assertNull($obj->getFaitTp());
        $this->assertNull($obj->getFaitTva());
        $this->assertNull($obj->getFaitTvs());
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
        $this->assertNull($obj->getIfuCommentaireDate());
        $this->assertNull($obj->getIfuCommentaireLib());
        $this->assertNull($obj->getIsaCommentaireDate());
        $this->assertNull($obj->getIsaCommentaireLib());
        $this->assertNull($obj->getIsfCommentaireDate());
        $this->assertNull($obj->getIsfCommentaireLib());
        $this->assertNull($obj->getIsfDateLimite());
        $this->assertNull($obj->getIsrCommentaireDate());
        $this->assertNull($obj->getIsrCommentaireLib());
        $this->assertNull($obj->getIssCommentaireDate());
        $this->assertNull($obj->getIssCommentaireLib());
        $this->assertNull($obj->getImpotRevenuCommentaireDate());
        $this->assertNull($obj->getImpotRevenuCommentaireLib());
        $this->assertNull($obj->getImpotRevenuDateLimite());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPlafTpCommentaireDate());
        $this->assertNull($obj->getPlafTpCommentaireLib());
        $this->assertNull($obj->getPreLibCommentaireDate());
        $this->assertNull($obj->getPreLibCommentaireLib());
        $this->assertNull($obj->getPreLibDateLimite());
        $this->assertNull($obj->getSituationCommentaireDate());
        $this->assertNull($obj->getSituationCommentaireLib());
        $this->assertNull($obj->getSituationDateLimite());
        $this->assertNull($obj->getTpCommentaireDate());
        $this->assertNull($obj->getTpCommentaireLib());
        $this->assertNull($obj->getTsaCommentaireDate());
        $this->assertNull($obj->getTsaCommentaireLib());
        $this->assertNull($obj->getTssCommentaireDate());
        $this->assertNull($obj->getTssCommentaireLib());
        $this->assertNull($obj->getTvsCommentaireDate());
        $this->assertNull($obj->getTvsCommentaireLib());
        $this->assertNull($obj->getTabBordCommentaireDate());
        $this->assertNull($obj->getTabBordCommentaireLib());
        $this->assertNull($obj->getTabBordDateLimite());
        $this->assertNull($obj->getTvaCommentaireDate());
        $this->assertNull($obj->getTvaCommentaireLib());
    }
}
