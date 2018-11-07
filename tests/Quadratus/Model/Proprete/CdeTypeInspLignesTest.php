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
use WBW\Library\Core\Quadratus\Model\Proprete\CdeTypeInspLignes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Cde type insp lignes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class CdeTypeInspLignesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CdeTypeInspLignes();

        $this->assertNull($obj->getAou());
        $this->assertNull($obj->getAvr());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getCodeInspecteur());
        $this->assertNull($obj->getCodeLivraison());
        $this->assertNull($obj->getCommandeIsolee());
        $this->assertNull($obj->getDateDebutValidite());
        $this->assertNull($obj->getDateFinValidite());
        $this->assertNull($obj->getDateValidee());
        $this->assertNull($obj->getDec());
        $this->assertNull($obj->getDesignation1());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getFev());
        $this->assertNull($obj->getJan());
        $this->assertNull($obj->getJourLivraison());
        $this->assertNull($obj->getJuil());
        $this->assertNull($obj->getJuin());
        $this->assertNull($obj->getMai());
        $this->assertNull($obj->getMajStockByDA());
        $this->assertNull($obj->getMar());
        $this->assertNull($obj->getNov());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getOct());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getSaisirModaliteLiv());
        $this->assertNull($obj->getSep());
        $this->assertNull($obj->getTypeGestion());
        $this->assertNull($obj->getValidee());
    }

    /**
     * Tests the setAou() method.
     *
     * @return void
     */
    public function testSetAou() {

        $obj = new CdeTypeInspLignes();

        $obj->setAou(true);
        $this->assertEquals(true, $obj->getAou());
    }

    /**
     * Tests the setAvr() method.
     *
     * @return void
     */
    public function testSetAvr() {

        $obj = new CdeTypeInspLignes();

        $obj->setAvr(true);
        $this->assertEquals(true, $obj->getAvr());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new CdeTypeInspLignes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle() {

        $obj = new CdeTypeInspLignes();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new CdeTypeInspLignes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new CdeTypeInspLignes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeFournisseur() method.
     *
     * @return void
     */
    public function testSetCodeFournisseur() {

        $obj = new CdeTypeInspLignes();

        $obj->setCodeFournisseur("codeFournisseur");
        $this->assertEquals("codeFournisseur", $obj->getCodeFournisseur());
    }

    /**
     * Tests the setCodeInspecteur() method.
     *
     * @return void
     */
    public function testSetCodeInspecteur() {

        $obj = new CdeTypeInspLignes();

        $obj->setCodeInspecteur("codeInspecteur");
        $this->assertEquals("codeInspecteur", $obj->getCodeInspecteur());
    }

    /**
     * Tests the setCodeLivraison() method.
     *
     * @return void
     */
    public function testSetCodeLivraison() {

        $obj = new CdeTypeInspLignes();

        $obj->setCodeLivraison("codeLivraison");
        $this->assertEquals("codeLivraison", $obj->getCodeLivraison());
    }

    /**
     * Tests the setCommandeIsolee() method.
     *
     * @return void
     */
    public function testSetCommandeIsolee() {

        $obj = new CdeTypeInspLignes();

        $obj->setCommandeIsolee(true);
        $this->assertEquals(true, $obj->getCommandeIsolee());
    }

    /**
     * Tests the setDateDebutValidite() method.
     *
     * @return void
     */
    public function testSetDateDebutValidite() {

        $obj = new CdeTypeInspLignes();

        $obj->setDateDebutValidite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebutValidite());
    }

    /**
     * Tests the setDateFinValidite() method.
     *
     * @return void
     */
    public function testSetDateFinValidite() {

        $obj = new CdeTypeInspLignes();

        $obj->setDateFinValidite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinValidite());
    }

    /**
     * Tests the setDateValidee() method.
     *
     * @return void
     */
    public function testSetDateValidee() {

        $obj = new CdeTypeInspLignes();

        $obj->setDateValidee(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateValidee());
    }

    /**
     * Tests the setDec() method.
     *
     * @return void
     */
    public function testSetDec() {

        $obj = new CdeTypeInspLignes();

        $obj->setDec(true);
        $this->assertEquals(true, $obj->getDec());
    }

    /**
     * Tests the setDesignation1() method.
     *
     * @return void
     */
    public function testSetDesignation1() {

        $obj = new CdeTypeInspLignes();

        $obj->setDesignation1("designation1");
        $this->assertEquals("designation1", $obj->getDesignation1());
    }

    /**
     * Tests the setDesignation2() method.
     *
     * @return void
     */
    public function testSetDesignation2() {

        $obj = new CdeTypeInspLignes();

        $obj->setDesignation2("designation2");
        $this->assertEquals("designation2", $obj->getDesignation2());
    }

    /**
     * Tests the setDesignation3() method.
     *
     * @return void
     */
    public function testSetDesignation3() {

        $obj = new CdeTypeInspLignes();

        $obj->setDesignation3("designation3");
        $this->assertEquals("designation3", $obj->getDesignation3());
    }

    /**
     * Tests the setFev() method.
     *
     * @return void
     */
    public function testSetFev() {

        $obj = new CdeTypeInspLignes();

        $obj->setFev(true);
        $this->assertEquals(true, $obj->getFev());
    }

    /**
     * Tests the setJan() method.
     *
     * @return void
     */
    public function testSetJan() {

        $obj = new CdeTypeInspLignes();

        $obj->setJan(true);
        $this->assertEquals(true, $obj->getJan());
    }

    /**
     * Tests the setJourLivraison() method.
     *
     * @return void
     */
    public function testSetJourLivraison() {

        $obj = new CdeTypeInspLignes();

        $obj->setJourLivraison("jourLivraison");
        $this->assertEquals("jourLivraison", $obj->getJourLivraison());
    }

    /**
     * Tests the setJuil() method.
     *
     * @return void
     */
    public function testSetJuil() {

        $obj = new CdeTypeInspLignes();

        $obj->setJuil(true);
        $this->assertEquals(true, $obj->getJuil());
    }

    /**
     * Tests the setJuin() method.
     *
     * @return void
     */
    public function testSetJuin() {

        $obj = new CdeTypeInspLignes();

        $obj->setJuin(true);
        $this->assertEquals(true, $obj->getJuin());
    }

    /**
     * Tests the setMai() method.
     *
     * @return void
     */
    public function testSetMai() {

        $obj = new CdeTypeInspLignes();

        $obj->setMai(true);
        $this->assertEquals(true, $obj->getMai());
    }

    /**
     * Tests the setMajStockByDA() method.
     *
     * @return void
     */
    public function testSetMajStockByDA() {

        $obj = new CdeTypeInspLignes();

        $obj->setMajStockByDA(true);
        $this->assertEquals(true, $obj->getMajStockByDA());
    }

    /**
     * Tests the setMar() method.
     *
     * @return void
     */
    public function testSetMar() {

        $obj = new CdeTypeInspLignes();

        $obj->setMar(true);
        $this->assertEquals(true, $obj->getMar());
    }

    /**
     * Tests the setNov() method.
     *
     * @return void
     */
    public function testSetNov() {

        $obj = new CdeTypeInspLignes();

        $obj->setNov(true);
        $this->assertEquals(true, $obj->getNov());
    }

    /**
     * Tests the setNumeroLigne() method.
     *
     * @return void
     */
    public function testSetNumeroLigne() {

        $obj = new CdeTypeInspLignes();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests the setOct() method.
     *
     * @return void
     */
    public function testSetOct() {

        $obj = new CdeTypeInspLignes();

        $obj->setOct(true);
        $this->assertEquals(true, $obj->getOct());
    }

    /**
     * Tests the setPosteRent() method.
     *
     * @return void
     */
    public function testSetPosteRent() {

        $obj = new CdeTypeInspLignes();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Tests the setQuantite() method.
     *
     * @return void
     */
    public function testSetQuantite() {

        $obj = new CdeTypeInspLignes();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests the setSaisirModaliteLiv() method.
     *
     * @return void
     */
    public function testSetSaisirModaliteLiv() {

        $obj = new CdeTypeInspLignes();

        $obj->setSaisirModaliteLiv(true);
        $this->assertEquals(true, $obj->getSaisirModaliteLiv());
    }

    /**
     * Tests the setSep() method.
     *
     * @return void
     */
    public function testSetSep() {

        $obj = new CdeTypeInspLignes();

        $obj->setSep(true);
        $this->assertEquals(true, $obj->getSep());
    }

    /**
     * Tests the setTypeGestion() method.
     *
     * @return void
     */
    public function testSetTypeGestion() {

        $obj = new CdeTypeInspLignes();

        $obj->setTypeGestion("typeGestion");
        $this->assertEquals("typeGestion", $obj->getTypeGestion());
    }

    /**
     * Tests the setValidee() method.
     *
     * @return void
     */
    public function testSetValidee() {

        $obj = new CdeTypeInspLignes();

        $obj->setValidee(true);
        $this->assertEquals(true, $obj->getValidee());
    }

}
