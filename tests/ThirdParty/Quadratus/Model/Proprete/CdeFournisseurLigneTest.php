<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\CdeFournisseurLigne;

/**
 * Cde fournisseur ligne model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class CdeFournisseurLigneTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CdeFournisseurLigne();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeDepot());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getCodeTVA());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getCodeVariante());
        $this->assertNull($obj->getCodeVentilAchat());
        $this->assertNull($obj->getCommandeRecue());
        $this->assertNull($obj->getConditionnement());
        $this->assertNull($obj->getDateReceptionPrevue());
        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getIndiceLigne());
        $this->assertNull($obj->getNoBR());
        $this->assertNull($obj->getNoLigneBR());
        $this->assertNull($obj->getNoPiece());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getPUBrut());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getQteCond());
        $this->assertNull($obj->getQteOrigine());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getRefArticleFournisseur());
        $this->assertNull($obj->getRemiseLigne1());
        $this->assertNull($obj->getRemiseLigne2());
        $this->assertNull($obj->getRemiseLigne3());
        $this->assertNull($obj->getTauxTVA());
        $this->assertNull($obj->getTypeLigne());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new CdeFournisseurLigne();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle() {

        $obj = new CdeFournisseurLigne();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new CdeFournisseurLigne();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new CdeFournisseurLigne();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeDepot() method.
     *
     * @return void
     */
    public function testSetCodeDepot() {

        $obj = new CdeFournisseurLigne();

        $obj->setCodeDepot("codeDepot");
        $this->assertEquals("codeDepot", $obj->getCodeDepot());
    }

    /**
     * Tests the setCodeFournisseur() method.
     *
     * @return void
     */
    public function testSetCodeFournisseur() {

        $obj = new CdeFournisseurLigne();

        $obj->setCodeFournisseur("codeFournisseur");
        $this->assertEquals("codeFournisseur", $obj->getCodeFournisseur());
    }

    /**
     * Tests the setCodeTVA() method.
     *
     * @return void
     */
    public function testSetCodeTVA() {

        $obj = new CdeFournisseurLigne();

        $obj->setCodeTVA("codeTVA");
        $this->assertEquals("codeTVA", $obj->getCodeTVA());
    }

    /**
     * Tests the setCodeUnite() method.
     *
     * @return void
     */
    public function testSetCodeUnite() {

        $obj = new CdeFournisseurLigne();

        $obj->setCodeUnite(10);
        $this->assertEquals(10, $obj->getCodeUnite());
    }

    /**
     * Tests the setCodeVariante() method.
     *
     * @return void
     */
    public function testSetCodeVariante() {

        $obj = new CdeFournisseurLigne();

        $obj->setCodeVariante("codeVariante");
        $this->assertEquals("codeVariante", $obj->getCodeVariante());
    }

    /**
     * Tests the setCodeVentilAchat() method.
     *
     * @return void
     */
    public function testSetCodeVentilAchat() {

        $obj = new CdeFournisseurLigne();

        $obj->setCodeVentilAchat("codeVentilAchat");
        $this->assertEquals("codeVentilAchat", $obj->getCodeVentilAchat());
    }

    /**
     * Tests the setCommandeRecue() method.
     *
     * @return void
     */
    public function testSetCommandeRecue() {

        $obj = new CdeFournisseurLigne();

        $obj->setCommandeRecue(true);
        $this->assertEquals(true, $obj->getCommandeRecue());
    }

    /**
     * Tests the setConditionnement() method.
     *
     * @return void
     */
    public function testSetConditionnement() {

        $obj = new CdeFournisseurLigne();

        $obj->setConditionnement("conditionnement");
        $this->assertEquals("conditionnement", $obj->getConditionnement());
    }

    /**
     * Tests the setDateReceptionPrevue() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateReceptionPrevue() {

        $obj = new CdeFournisseurLigne();

        $obj->setDateReceptionPrevue(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateReceptionPrevue());
    }

    /**
     * Tests the setDesignation() method.
     *
     * @return void
     */
    public function testSetDesignation() {

        $obj = new CdeFournisseurLigne();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Tests the setDesignation2() method.
     *
     * @return void
     */
    public function testSetDesignation2() {

        $obj = new CdeFournisseurLigne();

        $obj->setDesignation2("designation2");
        $this->assertEquals("designation2", $obj->getDesignation2());
    }

    /**
     * Tests the setDesignation3() method.
     *
     * @return void
     */
    public function testSetDesignation3() {

        $obj = new CdeFournisseurLigne();

        $obj->setDesignation3("designation3");
        $this->assertEquals("designation3", $obj->getDesignation3());
    }

    /**
     * Tests the setIndiceLigne() method.
     *
     * @return void
     */
    public function testSetIndiceLigne() {

        $obj = new CdeFournisseurLigne();

        $obj->setIndiceLigne(10);
        $this->assertEquals(10, $obj->getIndiceLigne());
    }

    /**
     * Tests the setNoBR() method.
     *
     * @return void
     */
    public function testSetNoBR() {

        $obj = new CdeFournisseurLigne();

        $obj->setNoBR("noBR");
        $this->assertEquals("noBR", $obj->getNoBR());
    }

    /**
     * Tests the setNoLigneBR() method.
     *
     * @return void
     */
    public function testSetNoLigneBR() {

        $obj = new CdeFournisseurLigne();

        $obj->setNoLigneBR(10);
        $this->assertEquals(10, $obj->getNoLigneBR());
    }

    /**
     * Tests the setNoPiece() method.
     *
     * @return void
     */
    public function testSetNoPiece() {

        $obj = new CdeFournisseurLigne();

        $obj->setNoPiece("noPiece");
        $this->assertEquals("noPiece", $obj->getNoPiece());
    }

    /**
     * Tests the setNumeroLigne() method.
     *
     * @return void
     */
    public function testSetNumeroLigne() {

        $obj = new CdeFournisseurLigne();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests the setPUBrut() method.
     *
     * @return void
     */
    public function testSetPUBrut() {

        $obj = new CdeFournisseurLigne();

        $obj->setPUBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getPUBrut());
    }

    /**
     * Tests the setPosteRent() method.
     *
     * @return void
     */
    public function testSetPosteRent() {

        $obj = new CdeFournisseurLigne();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Tests the setQteCond() method.
     *
     * @return void
     */
    public function testSetQteCond() {

        $obj = new CdeFournisseurLigne();

        $obj->setQteCond(10);
        $this->assertEquals(10, $obj->getQteCond());
    }

    /**
     * Tests the setQteOrigine() method.
     *
     * @return void
     */
    public function testSetQteOrigine() {

        $obj = new CdeFournisseurLigne();

        $obj->setQteOrigine(10.092018);
        $this->assertEquals(10.092018, $obj->getQteOrigine());
    }

    /**
     * Tests the setQuantite() method.
     *
     * @return void
     */
    public function testSetQuantite() {

        $obj = new CdeFournisseurLigne();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests the setRefArticleFournisseur() method.
     *
     * @return void
     */
    public function testSetRefArticleFournisseur() {

        $obj = new CdeFournisseurLigne();

        $obj->setRefArticleFournisseur("refArticleFournisseur");
        $this->assertEquals("refArticleFournisseur", $obj->getRefArticleFournisseur());
    }

    /**
     * Tests the setRemiseLigne1() method.
     *
     * @return void
     */
    public function testSetRemiseLigne1() {

        $obj = new CdeFournisseurLigne();

        $obj->setRemiseLigne1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne1());
    }

    /**
     * Tests the setRemiseLigne2() method.
     *
     * @return void
     */
    public function testSetRemiseLigne2() {

        $obj = new CdeFournisseurLigne();

        $obj->setRemiseLigne2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne2());
    }

    /**
     * Tests the setRemiseLigne3() method.
     *
     * @return void
     */
    public function testSetRemiseLigne3() {

        $obj = new CdeFournisseurLigne();

        $obj->setRemiseLigne3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne3());
    }

    /**
     * Tests the setTauxTVA() method.
     *
     * @return void
     */
    public function testSetTauxTVA() {

        $obj = new CdeFournisseurLigne();

        $obj->setTauxTVA(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTVA());
    }

    /**
     * Tests the setTypeLigne() method.
     *
     * @return void
     */
    public function testSetTypeLigne() {

        $obj = new CdeFournisseurLigne();

        $obj->setTypeLigne("typeLigne");
        $this->assertEquals("typeLigne", $obj->getTypeLigne());
    }
}
