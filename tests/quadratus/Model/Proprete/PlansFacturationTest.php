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
use WBW\Library\Quadratus\Model\Proprete\PlansFacturation;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Plans facturation test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class PlansFacturationTest extends AbstractTestCase {

    /**
     * Test setAou()
     *
     * @return void
     */
    public function testSetAou(): void {

        $obj = new PlansFacturation();

        $obj->setAou(true);
        $this->assertTrue($obj->getAou());
    }

    /**
     * Test setAvr()
     *
     * @return void
     */
    public function testSetAvr(): void {

        $obj = new PlansFacturation();

        $obj->setAvr(true);
        $this->assertTrue($obj->getAvr());
    }

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new PlansFacturation();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new PlansFacturation();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new PlansFacturation();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new PlansFacturation();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeRegroupement()
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new PlansFacturation();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Test setCoefficient()
     *
     * @return void
     */
    public function testSetCoefficient(): void {

        $obj = new PlansFacturation();

        $obj->setCoefficient(10.092018);
        $this->assertEquals(10.092018, $obj->getCoefficient());
    }

    /**
     * Test setDateFinValidite()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFinValidite(): void {

        // Set a Date/time mock.
        $dateFinValidite = new DateTime("2018-09-10");

        $obj = new PlansFacturation();

        $obj->setDateFinValidite($dateFinValidite);
        $this->assertSame($dateFinValidite, $obj->getDateFinValidite());
    }

    /**
     * Test setDec()
     *
     * @return void
     */
    public function testSetDec(): void {

        $obj = new PlansFacturation();

        $obj->setDec(true);
        $this->assertTrue($obj->getDec());
    }

    /**
     * Test setDesignation()
     *
     * @return void
     */
    public function testSetDesignation(): void {

        $obj = new PlansFacturation();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Test setDesignation2()
     *
     * @return void
     */
    public function testSetDesignation2(): void {

        $obj = new PlansFacturation();

        $obj->setDesignation2("designation2");
        $this->assertEquals("designation2", $obj->getDesignation2());
    }

    /**
     * Test setDesignation3()
     *
     * @return void
     */
    public function testSetDesignation3(): void {

        $obj = new PlansFacturation();

        $obj->setDesignation3("designation3");
        $this->assertEquals("designation3", $obj->getDesignation3());
    }

    /**
     * Test setDesignationBis()
     *
     * @return void
     */
    public function testSetDesignationBis(): void {

        $obj = new PlansFacturation();

        $obj->setDesignationBis("designationBis");
        $this->assertEquals("designationBis", $obj->getDesignationBis());
    }

    /**
     * Test setDesignationBis2()
     *
     * @return void
     */
    public function testSetDesignationBis2(): void {

        $obj = new PlansFacturation();

        $obj->setDesignationBis2("designationBis2");
        $this->assertEquals("designationBis2", $obj->getDesignationBis2());
    }

    /**
     * Test setDesignationBis3()
     *
     * @return void
     */
    public function testSetDesignationBis3(): void {

        $obj = new PlansFacturation();

        $obj->setDesignationBis3("designationBis3");
        $this->assertEquals("designationBis3", $obj->getDesignationBis3());
    }

    /**
     * Test setDesignationRtf()
     *
     * @return void
     */
    public function testSetDesignationRtf(): void {

        $obj = new PlansFacturation();

        $obj->setDesignationRtf("designationRtf");
        $this->assertEquals("designationRtf", $obj->getDesignationRtf());
    }

    /**
     * Test setDuree()
     *
     * @return void
     */
    public function testSetDuree(): void {

        $obj = new PlansFacturation();

        $obj->setDuree(10.092018);
        $this->assertEquals(10.092018, $obj->getDuree());
    }

    /**
     * Test setFev()
     *
     * @return void
     */
    public function testSetFev(): void {

        $obj = new PlansFacturation();

        $obj->setFev(true);
        $this->assertTrue($obj->getFev());
    }

    /**
     * Test setFinPeriodeTarif()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetFinPeriodeTarif(): void {

        // Set a Date/time mock.
        $finPeriodeTarif = new DateTime("2018-09-10");

        $obj = new PlansFacturation();

        $obj->setFinPeriodeTarif($finPeriodeTarif);
        $this->assertSame($finPeriodeTarif, $obj->getFinPeriodeTarif());
    }

    /**
     * Test setIndice()
     *
     * @return void
     */
    public function testSetIndice(): void {

        $obj = new PlansFacturation();

        $obj->setIndice(10);
        $this->assertEquals(10, $obj->getIndice());
    }

    /**
     * Test setJan()
     *
     * @return void
     */
    public function testSetJan(): void {

        $obj = new PlansFacturation();

        $obj->setJan(true);
        $this->assertTrue($obj->getJan());
    }

    /**
     * Test setJui()
     *
     * @return void
     */
    public function testSetJui(): void {

        $obj = new PlansFacturation();

        $obj->setJui(true);
        $this->assertTrue($obj->getJui());
    }

    /**
     * Test setJuin()
     *
     * @return void
     */
    public function testSetJuin(): void {

        $obj = new PlansFacturation();

        $obj->setJuin(true);
        $this->assertTrue($obj->getJuin());
    }

    /**
     * Test setMai()
     *
     * @return void
     */
    public function testSetMai(): void {

        $obj = new PlansFacturation();

        $obj->setMai(true);
        $this->assertTrue($obj->getMai());
    }

    /**
     * Test setMar()
     *
     * @return void
     */
    public function testSetMar(): void {

        $obj = new PlansFacturation();

        $obj->setMar(true);
        $this->assertTrue($obj->getMar());
    }

    /**
     * Test setNov()
     *
     * @return void
     */
    public function testSetNov(): void {

        $obj = new PlansFacturation();

        $obj->setNov(true);
        $this->assertTrue($obj->getNov());
    }

    /**
     * Test setNumBt()
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new PlansFacturation();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Test setNumeroDevis()
     *
     * @return void
     */
    public function testSetNumeroDevis(): void {

        $obj = new PlansFacturation();

        $obj->setNumeroDevis("numeroDevis");
        $this->assertEquals("numeroDevis", $obj->getNumeroDevis());
    }

    /**
     * Test setNumeroHistorique()
     *
     * @return void
     */
    public function testSetNumeroHistorique(): void {

        $obj = new PlansFacturation();

        $obj->setNumeroHistorique(10);
        $this->assertEquals(10, $obj->getNumeroHistorique());
    }

    /**
     * Test setOct()
     *
     * @return void
     */
    public function testSetOct(): void {

        $obj = new PlansFacturation();

        $obj->setOct(true);
        $this->assertTrue($obj->getOct());
    }

    /**
     * Test setPeriodeTarif()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeTarif(): void {

        // Set a Date/time mock.
        $periodeTarif = new DateTime("2018-09-10");

        $obj = new PlansFacturation();

        $obj->setPeriodeTarif($periodeTarif);
        $this->assertSame($periodeTarif, $obj->getPeriodeTarif());
    }

    /**
     * Test setPosteRent()
     *
     * @return void
     */
    public function testSetPosteRent(): void {

        $obj = new PlansFacturation();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Test setPrixAchat()
     *
     * @return void
     */
    public function testSetPrixAchat(): void {

        $obj = new PlansFacturation();

        $obj->setPrixAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixAchat());
    }

    /**
     * Test setPrixVente()
     *
     * @return void
     */
    public function testSetPrixVente(): void {

        $obj = new PlansFacturation();

        $obj->setPrixVente(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVente());
    }

    /**
     * Test setPxFacture()
     *
     * @return void
     */
    public function testSetPxFacture(): void {

        $obj = new PlansFacturation();

        $obj->setPxFacture(true);
        $this->assertTrue($obj->getPxFacture());
    }

    /**
     * Test setQuantite()
     *
     * @return void
     */
    public function testSetQuantite(): void {

        $obj = new PlansFacturation();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Test setRefArticle()
     *
     * @return void
     */
    public function testSetRefArticle(): void {

        $obj = new PlansFacturation();

        $obj->setRefArticle(true);
        $this->assertTrue($obj->getRefArticle());
    }

    /**
     * Test setRefPosteCdeWebFt()
     *
     * @return void
     */
    public function testSetRefPosteCdeWebFt(): void {

        $obj = new PlansFacturation();

        $obj->setRefPosteCdeWebFt("refPosteCdeWebFt");
        $this->assertEquals("refPosteCdeWebFt", $obj->getRefPosteCdeWebFt());
    }

    /**
     * Test setSep()
     *
     * @return void
     */
    public function testSetSep(): void {

        $obj = new PlansFacturation();

        $obj->setSep(true);
        $this->assertTrue($obj->getSep());
    }

    /**
     * Test setTaux()
     *
     * @return void
     */
    public function testSetTaux(): void {

        $obj = new PlansFacturation();

        $obj->setTaux(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux());
    }

    /**
     * Test setVentilMarge()
     *
     * @return void
     */
    public function testSetVentilMarge(): void {

        $obj = new PlansFacturation();

        $obj->setVentilMarge(true);
        $this->assertTrue($obj->getVentilMarge());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PlansFacturation();

        $this->assertNull($obj->getAou());
        $this->assertNull($obj->getAvr());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCoefficient());
        $this->assertNull($obj->getDateFinValidite());
        $this->assertNull($obj->getDec());
        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getDesignationBis());
        $this->assertNull($obj->getDesignationBis2());
        $this->assertNull($obj->getDesignationBis3());
        $this->assertNull($obj->getDesignationRtf());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getFev());
        $this->assertNull($obj->getFinPeriodeTarif());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getJan());
        $this->assertNull($obj->getJui());
        $this->assertNull($obj->getJuin());
        $this->assertNull($obj->getMai());
        $this->assertNull($obj->getMar());
        $this->assertNull($obj->getNov());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getNumeroDevis());
        $this->assertNull($obj->getNumeroHistorique());
        $this->assertNull($obj->getOct());
        $this->assertNull($obj->getPeriodeTarif());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getPrixAchat());
        $this->assertNull($obj->getPrixVente());
        $this->assertNull($obj->getPxFacture());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getRefArticle());
        $this->assertNull($obj->getRefPosteCdeWebFt());
        $this->assertNull($obj->getSep());
        $this->assertNull($obj->getTaux());
        $this->assertNull($obj->getVentilMarge());
    }
}
