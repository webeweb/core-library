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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\CdeClientLigne;

/**
 * Cde client ligne test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class CdeClientLigneTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CdeClientLigne();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeDepot());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getCodeVariante());
        $this->assertNull($obj->getCodeVentilVente());
        $this->assertNull($obj->getCommandeRecue());
        $this->assertNull($obj->getDateReceptionPrevue());
        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getIndiceLigne());
        $this->assertNull($obj->getNoBl());
        $this->assertNull($obj->getNoLigneBl());
        $this->assertNull($obj->getNoPiece());
        $this->assertNull($obj->getNumeroFacture());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getPuBrut());
        $this->assertNull($obj->getPrixAchat());
        $this->assertNull($obj->getPrixbloque());
        $this->assertNull($obj->getQteOrigine());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getRemiseLigne1());
        $this->assertNull($obj->getRemiseLigne2());
        $this->assertNull($obj->getRemiseLigne3());
        $this->assertNull($obj->getTauxCommission());
        $this->assertNull($obj->getTauxTva());
        $this->assertNull($obj->getTypeLigne());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new CdeClientLigne();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle() {

        $obj = new CdeClientLigne();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new CdeClientLigne();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new CdeClientLigne();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeDepot() method.
     *
     * @return void
     */
    public function testSetCodeDepot() {

        $obj = new CdeClientLigne();

        $obj->setCodeDepot("codeDepot");
        $this->assertEquals("codeDepot", $obj->getCodeDepot());
    }

    /**
     * Tests the setCodeRegroupement() method.
     *
     * @return void
     */
    public function testSetCodeRegroupement() {

        $obj = new CdeClientLigne();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva() {

        $obj = new CdeClientLigne();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Tests the setCodeUnite() method.
     *
     * @return void
     */
    public function testSetCodeUnite() {

        $obj = new CdeClientLigne();

        $obj->setCodeUnite(10);
        $this->assertEquals(10, $obj->getCodeUnite());
    }

    /**
     * Tests the setCodeVariante() method.
     *
     * @return void
     */
    public function testSetCodeVariante() {

        $obj = new CdeClientLigne();

        $obj->setCodeVariante("codeVariante");
        $this->assertEquals("codeVariante", $obj->getCodeVariante());
    }

    /**
     * Tests the setCodeVentilVente() method.
     *
     * @return void
     */
    public function testSetCodeVentilVente() {

        $obj = new CdeClientLigne();

        $obj->setCodeVentilVente("codeVentilVente");
        $this->assertEquals("codeVentilVente", $obj->getCodeVentilVente());
    }

    /**
     * Tests the setCommandeRecue() method.
     *
     * @return void
     */
    public function testSetCommandeRecue() {

        $obj = new CdeClientLigne();

        $obj->setCommandeRecue(true);
        $this->assertEquals(true, $obj->getCommandeRecue());
    }

    /**
     * Tests the setDateReceptionPrevue() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateReceptionPrevue() {

        // Set a Date/time mock.
        $dateReceptionPrevue = new DateTime("2018-09-10");

        $obj = new CdeClientLigne();

        $obj->setDateReceptionPrevue($dateReceptionPrevue);
        $this->assertSame($dateReceptionPrevue, $obj->getDateReceptionPrevue());
    }

    /**
     * Tests the setDesignation() method.
     *
     * @return void
     */
    public function testSetDesignation() {

        $obj = new CdeClientLigne();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Tests the setDesignation2() method.
     *
     * @return void
     */
    public function testSetDesignation2() {

        $obj = new CdeClientLigne();

        $obj->setDesignation2("designation2");
        $this->assertEquals("designation2", $obj->getDesignation2());
    }

    /**
     * Tests the setDesignation3() method.
     *
     * @return void
     */
    public function testSetDesignation3() {

        $obj = new CdeClientLigne();

        $obj->setDesignation3("designation3");
        $this->assertEquals("designation3", $obj->getDesignation3());
    }

    /**
     * Tests the setIndiceLigne() method.
     *
     * @return void
     */
    public function testSetIndiceLigne() {

        $obj = new CdeClientLigne();

        $obj->setIndiceLigne(10);
        $this->assertEquals(10, $obj->getIndiceLigne());
    }

    /**
     * Tests the setNoBl() method.
     *
     * @return void
     */
    public function testSetNoBl() {

        $obj = new CdeClientLigne();

        $obj->setNoBl("noBl");
        $this->assertEquals("noBl", $obj->getNoBl());
    }

    /**
     * Tests the setNoLigneBl() method.
     *
     * @return void
     */
    public function testSetNoLigneBl() {

        $obj = new CdeClientLigne();

        $obj->setNoLigneBl(10);
        $this->assertEquals(10, $obj->getNoLigneBl());
    }

    /**
     * Tests the setNoPiece() method.
     *
     * @return void
     */
    public function testSetNoPiece() {

        $obj = new CdeClientLigne();

        $obj->setNoPiece("noPiece");
        $this->assertEquals("noPiece", $obj->getNoPiece());
    }

    /**
     * Tests the setNumeroFacture() method.
     *
     * @return void
     */
    public function testSetNumeroFacture() {

        $obj = new CdeClientLigne();

        $obj->setNumeroFacture("numeroFacture");
        $this->assertEquals("numeroFacture", $obj->getNumeroFacture());
    }

    /**
     * Tests the setNumeroLigne() method.
     *
     * @return void
     */
    public function testSetNumeroLigne() {

        $obj = new CdeClientLigne();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests the setPrixAchat() method.
     *
     * @return void
     */
    public function testSetPrixAchat() {

        $obj = new CdeClientLigne();

        $obj->setPrixAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixAchat());
    }

    /**
     * Tests the setPrixbloque() method.
     *
     * @return void
     */
    public function testSetPrixbloque() {

        $obj = new CdeClientLigne();

        $obj->setPrixbloque(true);
        $this->assertEquals(true, $obj->getPrixbloque());
    }

    /**
     * Tests the setPuBrut() method.
     *
     * @return void
     */
    public function testSetPuBrut() {

        $obj = new CdeClientLigne();

        $obj->setPuBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getPuBrut());
    }

    /**
     * Tests the setQteOrigine() method.
     *
     * @return void
     */
    public function testSetQteOrigine() {

        $obj = new CdeClientLigne();

        $obj->setQteOrigine(10.092018);
        $this->assertEquals(10.092018, $obj->getQteOrigine());
    }

    /**
     * Tests the setQuantite() method.
     *
     * @return void
     */
    public function testSetQuantite() {

        $obj = new CdeClientLigne();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests the setRemiseLigne1() method.
     *
     * @return void
     */
    public function testSetRemiseLigne1() {

        $obj = new CdeClientLigne();

        $obj->setRemiseLigne1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne1());
    }

    /**
     * Tests the setRemiseLigne2() method.
     *
     * @return void
     */
    public function testSetRemiseLigne2() {

        $obj = new CdeClientLigne();

        $obj->setRemiseLigne2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne2());
    }

    /**
     * Tests the setRemiseLigne3() method.
     *
     * @return void
     */
    public function testSetRemiseLigne3() {

        $obj = new CdeClientLigne();

        $obj->setRemiseLigne3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne3());
    }

    /**
     * Tests the setTauxCommission() method.
     *
     * @return void
     */
    public function testSetTauxCommission() {

        $obj = new CdeClientLigne();

        $obj->setTauxCommission(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxCommission());
    }

    /**
     * Tests the setTauxTva() method.
     *
     * @return void
     */
    public function testSetTauxTva() {

        $obj = new CdeClientLigne();

        $obj->setTauxTva(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTva());
    }

    /**
     * Tests the setTypeLigne() method.
     *
     * @return void
     */
    public function testSetTypeLigne() {

        $obj = new CdeClientLigne();

        $obj->setTypeLigne("typeLigne");
        $this->assertEquals("typeLigne", $obj->getTypeLigne());
    }
}
