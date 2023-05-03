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
use WBW\Library\Quadratus\Model\Proprete\CdeClientLigne;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Cde client ligne test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class CdeClientLigneTest extends AbstractTestCase {

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new CdeClientLigne();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new CdeClientLigne();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new CdeClientLigne();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new CdeClientLigne();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeDepot()
     *
     * @return void
     */
    public function testSetCodeDepot(): void {

        $obj = new CdeClientLigne();

        $obj->setCodeDepot("codeDepot");
        $this->assertEquals("codeDepot", $obj->getCodeDepot());
    }

    /**
     * Test setCodeRegroupement()
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new CdeClientLigne();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Test setCodeTva()
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new CdeClientLigne();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Test setCodeUnite()
     *
     * @return void
     */
    public function testSetCodeUnite(): void {

        $obj = new CdeClientLigne();

        $obj->setCodeUnite(10);
        $this->assertEquals(10, $obj->getCodeUnite());
    }

    /**
     * Test setCodeVariante()
     *
     * @return void
     */
    public function testSetCodeVariante(): void {

        $obj = new CdeClientLigne();

        $obj->setCodeVariante("codeVariante");
        $this->assertEquals("codeVariante", $obj->getCodeVariante());
    }

    /**
     * Test setCodeVentilVente()
     *
     * @return void
     */
    public function testSetCodeVentilVente(): void {

        $obj = new CdeClientLigne();

        $obj->setCodeVentilVente("codeVentilVente");
        $this->assertEquals("codeVentilVente", $obj->getCodeVentilVente());
    }

    /**
     * Test setCommandeRecue()
     *
     * @return void
     */
    public function testSetCommandeRecue(): void {

        $obj = new CdeClientLigne();

        $obj->setCommandeRecue(true);
        $this->assertTrue($obj->getCommandeRecue());
    }

    /**
     * Test setDateReceptionPrevue()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateReceptionPrevue(): void {

        // Set a Date/time mock.
        $dateReceptionPrevue = new DateTime("2018-09-10");

        $obj = new CdeClientLigne();

        $obj->setDateReceptionPrevue($dateReceptionPrevue);
        $this->assertSame($dateReceptionPrevue, $obj->getDateReceptionPrevue());
    }

    /**
     * Test setDesignation()
     *
     * @return void
     */
    public function testSetDesignation(): void {

        $obj = new CdeClientLigne();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Test setDesignation2()
     *
     * @return void
     */
    public function testSetDesignation2(): void {

        $obj = new CdeClientLigne();

        $obj->setDesignation2("designation2");
        $this->assertEquals("designation2", $obj->getDesignation2());
    }

    /**
     * Test setDesignation3()
     *
     * @return void
     */
    public function testSetDesignation3(): void {

        $obj = new CdeClientLigne();

        $obj->setDesignation3("designation3");
        $this->assertEquals("designation3", $obj->getDesignation3());
    }

    /**
     * Test setIndiceLigne()
     *
     * @return void
     */
    public function testSetIndiceLigne(): void {

        $obj = new CdeClientLigne();

        $obj->setIndiceLigne(10);
        $this->assertEquals(10, $obj->getIndiceLigne());
    }

    /**
     * Test setNoBl()
     *
     * @return void
     */
    public function testSetNoBl(): void {

        $obj = new CdeClientLigne();

        $obj->setNoBl("noBl");
        $this->assertEquals("noBl", $obj->getNoBl());
    }

    /**
     * Test setNoLigneBl()
     *
     * @return void
     */
    public function testSetNoLigneBl(): void {

        $obj = new CdeClientLigne();

        $obj->setNoLigneBl(10);
        $this->assertEquals(10, $obj->getNoLigneBl());
    }

    /**
     * Test setNoPiece()
     *
     * @return void
     */
    public function testSetNoPiece(): void {

        $obj = new CdeClientLigne();

        $obj->setNoPiece("noPiece");
        $this->assertEquals("noPiece", $obj->getNoPiece());
    }

    /**
     * Test setNumeroFacture()
     *
     * @return void
     */
    public function testSetNumeroFacture(): void {

        $obj = new CdeClientLigne();

        $obj->setNumeroFacture("numeroFacture");
        $this->assertEquals("numeroFacture", $obj->getNumeroFacture());
    }

    /**
     * Test setNumeroLigne()
     *
     * @return void
     */
    public function testSetNumeroLigne(): void {

        $obj = new CdeClientLigne();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Test setPrixAchat()
     *
     * @return void
     */
    public function testSetPrixAchat(): void {

        $obj = new CdeClientLigne();

        $obj->setPrixAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixAchat());
    }

    /**
     * Test setPrixbloque()
     *
     * @return void
     */
    public function testSetPrixbloque(): void {

        $obj = new CdeClientLigne();

        $obj->setPrixbloque(true);
        $this->assertTrue($obj->getPrixbloque());
    }

    /**
     * Test setPuBrut()
     *
     * @return void
     */
    public function testSetPuBrut(): void {

        $obj = new CdeClientLigne();

        $obj->setPuBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getPuBrut());
    }

    /**
     * Test setQteOrigine()
     *
     * @return void
     */
    public function testSetQteOrigine(): void {

        $obj = new CdeClientLigne();

        $obj->setQteOrigine(10.092018);
        $this->assertEquals(10.092018, $obj->getQteOrigine());
    }

    /**
     * Test setQuantite()
     *
     * @return void
     */
    public function testSetQuantite(): void {

        $obj = new CdeClientLigne();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Test setRemiseLigne1()
     *
     * @return void
     */
    public function testSetRemiseLigne1(): void {

        $obj = new CdeClientLigne();

        $obj->setRemiseLigne1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne1());
    }

    /**
     * Test setRemiseLigne2()
     *
     * @return void
     */
    public function testSetRemiseLigne2(): void {

        $obj = new CdeClientLigne();

        $obj->setRemiseLigne2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne2());
    }

    /**
     * Test setRemiseLigne3()
     *
     * @return void
     */
    public function testSetRemiseLigne3(): void {

        $obj = new CdeClientLigne();

        $obj->setRemiseLigne3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne3());
    }

    /**
     * Test setTauxCommission()
     *
     * @return void
     */
    public function testSetTauxCommission(): void {

        $obj = new CdeClientLigne();

        $obj->setTauxCommission(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxCommission());
    }

    /**
     * Test setTauxTva()
     *
     * @return void
     */
    public function testSetTauxTva(): void {

        $obj = new CdeClientLigne();

        $obj->setTauxTva(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTva());
    }

    /**
     * Test setTypeLigne()
     *
     * @return void
     */
    public function testSetTypeLigne(): void {

        $obj = new CdeClientLigne();

        $obj->setTypeLigne("typeLigne");
        $this->assertEquals("typeLigne", $obj->getTypeLigne());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
