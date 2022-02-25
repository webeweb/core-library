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
use Exception;
use WBW\Library\Quadratus\Model\Proprete\PlansFactBonTrav;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Plans fact bon trav test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class PlansFactBonTravTest extends AbstractTestCase {

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new PlansFactBonTrav();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new PlansFactBonTrav();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new PlansFactBonTrav();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new PlansFactBonTrav();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeRegroupement()
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new PlansFactBonTrav();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests setCoefficient()
     *
     * @return void
     */
    public function testSetCoefficient(): void {

        $obj = new PlansFactBonTrav();

        $obj->setCoefficient(10.092018);
        $this->assertEquals(10.092018, $obj->getCoefficient());
    }

    /**
     * Tests setDateBt()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateBt(): void {

        // Set a Date/time mock.
        $dateBt = new DateTime("2018-09-10");

        $obj = new PlansFactBonTrav();

        $obj->setDateBt($dateBt);
        $this->assertSame($dateBt, $obj->getDateBt());
    }

    /**
     * Tests setDesignation()
     *
     * @return void
     */
    public function testSetDesignation(): void {

        $obj = new PlansFactBonTrav();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Tests setDesignation2()
     *
     * @return void
     */
    public function testSetDesignation2(): void {

        $obj = new PlansFactBonTrav();

        $obj->setDesignation2("designation2");
        $this->assertEquals("designation2", $obj->getDesignation2());
    }

    /**
     * Tests setDesignation3()
     *
     * @return void
     */
    public function testSetDesignation3(): void {

        $obj = new PlansFactBonTrav();

        $obj->setDesignation3("designation3");
        $this->assertEquals("designation3", $obj->getDesignation3());
    }

    /**
     * Tests setDuree()
     *
     * @return void
     */
    public function testSetDuree(): void {

        $obj = new PlansFactBonTrav();

        $obj->setDuree(10.092018);
        $this->assertEquals(10.092018, $obj->getDuree());
    }

    /**
     * Tests setIndice()
     *
     * @return void
     */
    public function testSetIndice(): void {

        $obj = new PlansFactBonTrav();

        $obj->setIndice(10);
        $this->assertEquals(10, $obj->getIndice());
    }

    /**
     * Tests setNumBt()
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new PlansFactBonTrav();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Tests setPosteRent()
     *
     * @return void
     */
    public function testSetPosteRent(): void {

        $obj = new PlansFactBonTrav();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Tests setPrixAchat()
     *
     * @return void
     */
    public function testSetPrixAchat(): void {

        $obj = new PlansFactBonTrav();

        $obj->setPrixAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixAchat());
    }

    /**
     * Tests setPxFacture()
     *
     * @return void
     */
    public function testSetPxFacture(): void {

        $obj = new PlansFactBonTrav();

        $obj->setPxFacture(true);
        $this->assertEquals(true, $obj->getPxFacture());
    }

    /**
     * Tests setTaux()
     *
     * @return void
     */
    public function testSetTaux(): void {

        $obj = new PlansFactBonTrav();

        $obj->setTaux(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux());
    }

    /**
     * Tests setVentilMarge()
     *
     * @return void
     */
    public function testSetVentilMarge(): void {

        $obj = new PlansFactBonTrav();

        $obj->setVentilMarge(true);
        $this->assertEquals(true, $obj->getVentilMarge());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PlansFactBonTrav();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCoefficient());
        $this->assertNull($obj->getDateBt());
        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getPrixAchat());
        $this->assertNull($obj->getPxFacture());
        $this->assertNull($obj->getTaux());
        $this->assertNull($obj->getVentilMarge());
    }
}
