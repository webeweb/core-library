<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\Proprete\MouvementsStock;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Mouvements stock test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class MouvementsStockTest extends AbstractTestCase {

    /**
     * Test setBonSortie()
     *
     * @return void
     */
    public function testSetBonSortie(): void {

        $obj = new MouvementsStock();

        $obj->setBonSortie("bonSortie");
        $this->assertEquals("bonSortie", $obj->getBonSortie());
    }

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new MouvementsStock();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new MouvementsStock();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new MouvementsStock();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new MouvementsStock();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeDepot()
     *
     * @return void
     */
    public function testSetCodeDepot(): void {

        $obj = new MouvementsStock();

        $obj->setCodeDepot("codeDepot");
        $this->assertEquals("codeDepot", $obj->getCodeDepot());
    }

    /**
     * Test setCodeDevise()
     *
     * @return void
     */
    public function testSetCodeDevise(): void {

        $obj = new MouvementsStock();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Test setCodeFournisseur()
     *
     * @return void
     */
    public function testSetCodeFournisseur(): void {

        $obj = new MouvementsStock();

        $obj->setCodeFournisseur("codeFournisseur");
        $this->assertEquals("codeFournisseur", $obj->getCodeFournisseur());
    }

    /**
     * Test setCodeTache()
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new MouvementsStock();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Test setCodeVariante()
     *
     * @return void
     */
    public function testSetCodeVariante(): void {

        $obj = new MouvementsStock();

        $obj->setCodeVariante("codeVariante");
        $this->assertEquals("codeVariante", $obj->getCodeVariante());
    }

    /**
     * Test setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new MouvementsStock();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Test setDate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate(): void {

        // Set a Date/time mock.
        $date = new DateTime("2018-09-10");

        $obj = new MouvementsStock();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Test setEuro()
     *
     * @return void
     */
    public function testSetEuro(): void {

        $obj = new MouvementsStock();

        $obj->setEuro(true);
        $this->assertTrue($obj->getEuro());
    }

    /**
     * Test setIndex()
     *
     * @return void
     */
    public function testSetIndex(): void {

        $obj = new MouvementsStock();

        $obj->setIndex(10);
        $this->assertEquals(10, $obj->getIndex());
    }

    /**
     * Test setMouvementGenere()
     *
     * @return void
     */
    public function testSetMouvementGenere(): void {

        $obj = new MouvementsStock();

        $obj->setMouvementGenere(true);
        $this->assertTrue($obj->getMouvementGenere());
    }

    /**
     * Test setPosteRent()
     *
     * @return void
     */
    public function testSetPosteRent(): void {

        $obj = new MouvementsStock();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Test setPrixU()
     *
     * @return void
     */
    public function testSetPrixU(): void {

        $obj = new MouvementsStock();

        $obj->setPrixU(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixU());
    }

    /**
     * Test setQuantite()
     *
     * @return void
     */
    public function testSetQuantite(): void {

        $obj = new MouvementsStock();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Test setQuantiteVoulue()
     *
     * @return void
     */
    public function testSetQuantiteVoulue(): void {

        $obj = new MouvementsStock();

        $obj->setQuantiteVoulue(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantiteVoulue());
    }

    /**
     * Test setRemiseLigne1()
     *
     * @return void
     */
    public function testSetRemiseLigne1(): void {

        $obj = new MouvementsStock();

        $obj->setRemiseLigne1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne1());
    }

    /**
     * Test setRemiseLigne2()
     *
     * @return void
     */
    public function testSetRemiseLigne2(): void {

        $obj = new MouvementsStock();

        $obj->setRemiseLigne2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne2());
    }

    /**
     * Test setRemiseLigne3()
     *
     * @return void
     */
    public function testSetRemiseLigne3(): void {

        $obj = new MouvementsStock();

        $obj->setRemiseLigne3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne3());
    }

    /**
     * Test setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new MouvementsStock();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Test setTypeGestion()
     *
     * @return void
     */
    public function testSetTypeGestion(): void {

        $obj = new MouvementsStock();

        $obj->setTypeGestion("typeGestion");
        $this->assertEquals("typeGestion", $obj->getTypeGestion());
    }

    /**
     * Test setTypeLigne()
     *
     * @return void
     */
    public function testSetTypeLigne(): void {

        $obj = new MouvementsStock();

        $obj->setTypeLigne("typeLigne");
        $this->assertEquals("typeLigne", $obj->getTypeLigne());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new MouvementsStock();

        $this->assertNull($obj->getBonSortie());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeDepot());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCodeVariante());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getEuro());
        $this->assertNull($obj->getIndex());
        $this->assertNull($obj->getMouvementGenere());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getPrixU());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getQuantiteVoulue());
        $this->assertNull($obj->getRemiseLigne1());
        $this->assertNull($obj->getRemiseLigne2());
        $this->assertNull($obj->getRemiseLigne3());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getTypeGestion());
        $this->assertNull($obj->getTypeLigne());
    }
}
