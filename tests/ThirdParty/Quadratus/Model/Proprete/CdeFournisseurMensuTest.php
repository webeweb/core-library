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
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\CdeFournisseurMensu;

/**
 * Cde fournisseur mensu model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class CdeFournisseurMensuTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CdeFournisseurMensu();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getCodeInspecteur());
        $this->assertNull($obj->getCodeLivraison());
        $this->assertNull($obj->getCodeLivreur());
        $this->assertNull($obj->getCommandeIsolee());
        $this->assertNull($obj->getCritereTexte1());
        $this->assertNull($obj->getDateLivraison());
        $this->assertNull($obj->getDateTransfert());
        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getFromCdeType());
        $this->assertNull($obj->getMajStockByDA());
        $this->assertNull($obj->getNoBonInt());
        $this->assertNull($obj->getNoPieceCde());
        $this->assertNull($obj->getNoPieceCdeCli());
        $this->assertNull($obj->getNumeroBSGenere());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getPUBrut());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getPrixSaisi());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getQuantiteBS());
        $this->assertNull($obj->getQuantiteCde());
        $this->assertNull($obj->getQuantiteCdeCli());
        $this->assertNull($obj->getQuantiteLiv());
        $this->assertNull($obj->getRemise1());
        $this->assertNull($obj->getRemise2());
        $this->assertNull($obj->getRemise3());
        $this->assertNull($obj->getTypeGestion());
        $this->assertNull($obj->getTypePiece());
        $this->assertNull($obj->getUniqIDBlocage());
        $this->assertNull($obj->getValidee());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new CdeFournisseurMensu();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle() {

        $obj = new CdeFournisseurMensu();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new CdeFournisseurMensu();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new CdeFournisseurMensu();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new CdeFournisseurMensu();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeFournisseur() method.
     *
     * @return void
     */
    public function testSetCodeFournisseur() {

        $obj = new CdeFournisseurMensu();

        $obj->setCodeFournisseur("codeFournisseur");
        $this->assertEquals("codeFournisseur", $obj->getCodeFournisseur());
    }

    /**
     * Tests the setCodeInspecteur() method.
     *
     * @return void
     */
    public function testSetCodeInspecteur() {

        $obj = new CdeFournisseurMensu();

        $obj->setCodeInspecteur("codeInspecteur");
        $this->assertEquals("codeInspecteur", $obj->getCodeInspecteur());
    }

    /**
     * Tests the setCodeLivraison() method.
     *
     * @return void
     */
    public function testSetCodeLivraison() {

        $obj = new CdeFournisseurMensu();

        $obj->setCodeLivraison("codeLivraison");
        $this->assertEquals("codeLivraison", $obj->getCodeLivraison());
    }

    /**
     * Tests the setCodeLivreur() method.
     *
     * @return void
     */
    public function testSetCodeLivreur() {

        $obj = new CdeFournisseurMensu();

        $obj->setCodeLivreur("codeLivreur");
        $this->assertEquals("codeLivreur", $obj->getCodeLivreur());
    }

    /**
     * Tests the setCommandeIsolee() method.
     *
     * @return void
     */
    public function testSetCommandeIsolee() {

        $obj = new CdeFournisseurMensu();

        $obj->setCommandeIsolee(true);
        $this->assertEquals(true, $obj->getCommandeIsolee());
    }

    /**
     * Tests the setCritereTexte1() method.
     *
     * @return void
     */
    public function testSetCritereTexte1() {

        $obj = new CdeFournisseurMensu();

        $obj->setCritereTexte1("critereTexte1");
        $this->assertEquals("critereTexte1", $obj->getCritereTexte1());
    }

    /**
     * Tests the setDateLivraison() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateLivraison() {

        $obj = new CdeFournisseurMensu();

        $obj->setDateLivraison(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateLivraison());
    }

    /**
     * Tests the setDateTransfert() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfert() {

        $obj = new CdeFournisseurMensu();

        $obj->setDateTransfert(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateTransfert());
    }

    /**
     * Tests the setDesignation() method.
     *
     * @return void
     */
    public function testSetDesignation() {

        $obj = new CdeFournisseurMensu();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Tests the setDesignation2() method.
     *
     * @return void
     */
    public function testSetDesignation2() {

        $obj = new CdeFournisseurMensu();

        $obj->setDesignation2("designation2");
        $this->assertEquals("designation2", $obj->getDesignation2());
    }

    /**
     * Tests the setDesignation3() method.
     *
     * @return void
     */
    public function testSetDesignation3() {

        $obj = new CdeFournisseurMensu();

        $obj->setDesignation3("designation3");
        $this->assertEquals("designation3", $obj->getDesignation3());
    }

    /**
     * Tests the setFromCdeType() method.
     *
     * @return void
     */
    public function testSetFromCdeType() {

        $obj = new CdeFournisseurMensu();

        $obj->setFromCdeType(true);
        $this->assertEquals(true, $obj->getFromCdeType());
    }

    /**
     * Tests the setMajStockByDA() method.
     *
     * @return void
     */
    public function testSetMajStockByDA() {

        $obj = new CdeFournisseurMensu();

        $obj->setMajStockByDA(true);
        $this->assertEquals(true, $obj->getMajStockByDA());
    }

    /**
     * Tests the setNoBonInt() method.
     *
     * @return void
     */
    public function testSetNoBonInt() {

        $obj = new CdeFournisseurMensu();

        $obj->setNoBonInt("noBonInt");
        $this->assertEquals("noBonInt", $obj->getNoBonInt());
    }

    /**
     * Tests the setNoPieceCde() method.
     *
     * @return void
     */
    public function testSetNoPieceCde() {

        $obj = new CdeFournisseurMensu();

        $obj->setNoPieceCde("noPieceCde");
        $this->assertEquals("noPieceCde", $obj->getNoPieceCde());
    }

    /**
     * Tests the setNoPieceCdeCli() method.
     *
     * @return void
     */
    public function testSetNoPieceCdeCli() {

        $obj = new CdeFournisseurMensu();

        $obj->setNoPieceCdeCli("noPieceCdeCli");
        $this->assertEquals("noPieceCdeCli", $obj->getNoPieceCdeCli());
    }

    /**
     * Tests the setNumeroBSGenere() method.
     *
     * @return void
     */
    public function testSetNumeroBSGenere() {

        $obj = new CdeFournisseurMensu();

        $obj->setNumeroBSGenere("numeroBSGenere");
        $this->assertEquals("numeroBSGenere", $obj->getNumeroBSGenere());
    }

    /**
     * Tests the setNumeroLigne() method.
     *
     * @return void
     */
    public function testSetNumeroLigne() {

        $obj = new CdeFournisseurMensu();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests the setPUBrut() method.
     *
     * @return void
     */
    public function testSetPUBrut() {

        $obj = new CdeFournisseurMensu();

        $obj->setPUBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getPUBrut());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new CdeFournisseurMensu();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setPosteRent() method.
     *
     * @return void
     */
    public function testSetPosteRent() {

        $obj = new CdeFournisseurMensu();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Tests the setPrixSaisi() method.
     *
     * @return void
     */
    public function testSetPrixSaisi() {

        $obj = new CdeFournisseurMensu();

        $obj->setPrixSaisi(true);
        $this->assertEquals(true, $obj->getPrixSaisi());
    }

    /**
     * Tests the setQuantite() method.
     *
     * @return void
     */
    public function testSetQuantite() {

        $obj = new CdeFournisseurMensu();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests the setQuantiteBS() method.
     *
     * @return void
     */
    public function testSetQuantiteBS() {

        $obj = new CdeFournisseurMensu();

        $obj->setQuantiteBS(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantiteBS());
    }

    /**
     * Tests the setQuantiteCde() method.
     *
     * @return void
     */
    public function testSetQuantiteCde() {

        $obj = new CdeFournisseurMensu();

        $obj->setQuantiteCde(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantiteCde());
    }

    /**
     * Tests the setQuantiteCdeCli() method.
     *
     * @return void
     */
    public function testSetQuantiteCdeCli() {

        $obj = new CdeFournisseurMensu();

        $obj->setQuantiteCdeCli(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantiteCdeCli());
    }

    /**
     * Tests the setQuantiteLiv() method.
     *
     * @return void
     */
    public function testSetQuantiteLiv() {

        $obj = new CdeFournisseurMensu();

        $obj->setQuantiteLiv(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantiteLiv());
    }

    /**
     * Tests the setRemise1() method.
     *
     * @return void
     */
    public function testSetRemise1() {

        $obj = new CdeFournisseurMensu();

        $obj->setRemise1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemise1());
    }

    /**
     * Tests the setRemise2() method.
     *
     * @return void
     */
    public function testSetRemise2() {

        $obj = new CdeFournisseurMensu();

        $obj->setRemise2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemise2());
    }

    /**
     * Tests the setRemise3() method.
     *
     * @return void
     */
    public function testSetRemise3() {

        $obj = new CdeFournisseurMensu();

        $obj->setRemise3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemise3());
    }

    /**
     * Tests the setTypeGestion() method.
     *
     * @return void
     */
    public function testSetTypeGestion() {

        $obj = new CdeFournisseurMensu();

        $obj->setTypeGestion("typeGestion");
        $this->assertEquals("typeGestion", $obj->getTypeGestion());
    }

    /**
     * Tests the setTypePiece() method.
     *
     * @return void
     */
    public function testSetTypePiece() {

        $obj = new CdeFournisseurMensu();

        $obj->setTypePiece("typePiece");
        $this->assertEquals("typePiece", $obj->getTypePiece());
    }

    /**
     * Tests the setUniqIDBlocage() method.
     *
     * @return void
     */
    public function testSetUniqIDBlocage() {

        $obj = new CdeFournisseurMensu();

        $obj->setUniqIDBlocage("uniqIDBlocage");
        $this->assertEquals("uniqIDBlocage", $obj->getUniqIDBlocage());
    }

    /**
     * Tests the setValidee() method.
     *
     * @return void
     */
    public function testSetValidee() {

        $obj = new CdeFournisseurMensu();

        $obj->setValidee(true);
        $this->assertEquals(true, $obj->getValidee());
    }
}
