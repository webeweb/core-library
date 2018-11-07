<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\Proprete;

use DateTime;
use WBW\Library\Core\Quadratus\Model\Proprete\MouvementsStock;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Mouvements stock model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class MouvementsStockTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setBonSortie() method.
     *
     * @return void
     */
    public function testSetBonSortie() {

        $obj = new MouvementsStock();

        $obj->setBonSortie("bonSortie");
        $this->assertEquals("bonSortie", $obj->getBonSortie());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new MouvementsStock();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle() {

        $obj = new MouvementsStock();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new MouvementsStock();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new MouvementsStock();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeDepot() method.
     *
     * @return void
     */
    public function testSetCodeDepot() {

        $obj = new MouvementsStock();

        $obj->setCodeDepot("codeDepot");
        $this->assertEquals("codeDepot", $obj->getCodeDepot());
    }

    /**
     * Tests the setCodeDevise() method.
     *
     * @return void
     */
    public function testSetCodeDevise() {

        $obj = new MouvementsStock();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests the setCodeFournisseur() method.
     *
     * @return void
     */
    public function testSetCodeFournisseur() {

        $obj = new MouvementsStock();

        $obj->setCodeFournisseur("codeFournisseur");
        $this->assertEquals("codeFournisseur", $obj->getCodeFournisseur());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache() {

        $obj = new MouvementsStock();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests the setCodeVariante() method.
     *
     * @return void
     */
    public function testSetCodeVariante() {

        $obj = new MouvementsStock();

        $obj->setCodeVariante("codeVariante");
        $this->assertEquals("codeVariante", $obj->getCodeVariante());
    }

    /**
     * Tests the setCommentaire() method.
     *
     * @return void
     */
    public function testSetCommentaire() {

        $obj = new MouvementsStock();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     */
    public function testSetDate() {

        $obj = new MouvementsStock();

        $obj->setDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDate());
    }

    /**
     * Tests the setEuro() method.
     *
     * @return void
     */
    public function testSetEuro() {

        $obj = new MouvementsStock();

        $obj->setEuro(true);
        $this->assertEquals(true, $obj->getEuro());
    }

    /**
     * Tests the setIndex() method.
     *
     * @return void
     */
    public function testSetIndex() {

        $obj = new MouvementsStock();

        $obj->setIndex(10);
        $this->assertEquals(10, $obj->getIndex());
    }

    /**
     * Tests the setMouvementGenere() method.
     *
     * @return void
     */
    public function testSetMouvementGenere() {

        $obj = new MouvementsStock();

        $obj->setMouvementGenere(true);
        $this->assertEquals(true, $obj->getMouvementGenere());
    }

    /**
     * Tests the setPosteRent() method.
     *
     * @return void
     */
    public function testSetPosteRent() {

        $obj = new MouvementsStock();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Tests the setPrixU() method.
     *
     * @return void
     */
    public function testSetPrixU() {

        $obj = new MouvementsStock();

        $obj->setPrixU(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixU());
    }

    /**
     * Tests the setQuantite() method.
     *
     * @return void
     */
    public function testSetQuantite() {

        $obj = new MouvementsStock();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests the setQuantiteVoulue() method.
     *
     * @return void
     */
    public function testSetQuantiteVoulue() {

        $obj = new MouvementsStock();

        $obj->setQuantiteVoulue(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantiteVoulue());
    }

    /**
     * Tests the setRemiseLigne1() method.
     *
     * @return void
     */
    public function testSetRemiseLigne1() {

        $obj = new MouvementsStock();

        $obj->setRemiseLigne1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne1());
    }

    /**
     * Tests the setRemiseLigne2() method.
     *
     * @return void
     */
    public function testSetRemiseLigne2() {

        $obj = new MouvementsStock();

        $obj->setRemiseLigne2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne2());
    }

    /**
     * Tests the setRemiseLigne3() method.
     *
     * @return void
     */
    public function testSetRemiseLigne3() {

        $obj = new MouvementsStock();

        $obj->setRemiseLigne3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne3());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new MouvementsStock();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests the setTypeGestion() method.
     *
     * @return void
     */
    public function testSetTypeGestion() {

        $obj = new MouvementsStock();

        $obj->setTypeGestion("typeGestion");
        $this->assertEquals("typeGestion", $obj->getTypeGestion());
    }

    /**
     * Tests the setTypeLigne() method.
     *
     * @return void
     */
    public function testSetTypeLigne() {

        $obj = new MouvementsStock();

        $obj->setTypeLigne("typeLigne");
        $this->assertEquals("typeLigne", $obj->getTypeLigne());
    }

}
