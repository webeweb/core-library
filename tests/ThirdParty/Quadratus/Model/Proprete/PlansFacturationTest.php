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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\PlansFacturation;

/**
 * Plans facturation model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class PlansFacturationTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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
        $this->assertNull($obj->getDesignationRTF());
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
        $this->assertNull($obj->getNumBT());
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
        $this->assertNull($obj->getRefPosteCdeWebFT());
        $this->assertNull($obj->getSep());
        $this->assertNull($obj->getTaux());
        $this->assertNull($obj->getVentilMarge());
    }

    /**
     * Tests the setAou() method.
     *
     * @return void
     */
    public function testSetAou() {

        $obj = new PlansFacturation();

        $obj->setAou(true);
        $this->assertEquals(true, $obj->getAou());
    }

    /**
     * Tests the setAvr() method.
     *
     * @return void
     */
    public function testSetAvr() {

        $obj = new PlansFacturation();

        $obj->setAvr(true);
        $this->assertEquals(true, $obj->getAvr());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new PlansFacturation();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle() {

        $obj = new PlansFacturation();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new PlansFacturation();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new PlansFacturation();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeRegroupement() method.
     *
     * @return void
     */
    public function testSetCodeRegroupement() {

        $obj = new PlansFacturation();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests the setCoefficient() method.
     *
     * @return void
     */
    public function testSetCoefficient() {

        $obj = new PlansFacturation();

        $obj->setCoefficient(10.092018);
        $this->assertEquals(10.092018, $obj->getCoefficient());
    }

    /**
     * Tests the setDateFinValidite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinValidite() {

        $obj = new PlansFacturation();

        $obj->setDateFinValidite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinValidite());
    }

    /**
     * Tests the setDec() method.
     *
     * @return void
     */
    public function testSetDec() {

        $obj = new PlansFacturation();

        $obj->setDec(true);
        $this->assertEquals(true, $obj->getDec());
    }

    /**
     * Tests the setDesignation() method.
     *
     * @return void
     */
    public function testSetDesignation() {

        $obj = new PlansFacturation();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Tests the setDesignation2() method.
     *
     * @return void
     */
    public function testSetDesignation2() {

        $obj = new PlansFacturation();

        $obj->setDesignation2("designation2");
        $this->assertEquals("designation2", $obj->getDesignation2());
    }

    /**
     * Tests the setDesignation3() method.
     *
     * @return void
     */
    public function testSetDesignation3() {

        $obj = new PlansFacturation();

        $obj->setDesignation3("designation3");
        $this->assertEquals("designation3", $obj->getDesignation3());
    }

    /**
     * Tests the setDesignationBis() method.
     *
     * @return void
     */
    public function testSetDesignationBis() {

        $obj = new PlansFacturation();

        $obj->setDesignationBis("designationBis");
        $this->assertEquals("designationBis", $obj->getDesignationBis());
    }

    /**
     * Tests the setDesignationBis2() method.
     *
     * @return void
     */
    public function testSetDesignationBis2() {

        $obj = new PlansFacturation();

        $obj->setDesignationBis2("designationBis2");
        $this->assertEquals("designationBis2", $obj->getDesignationBis2());
    }

    /**
     * Tests the setDesignationBis3() method.
     *
     * @return void
     */
    public function testSetDesignationBis3() {

        $obj = new PlansFacturation();

        $obj->setDesignationBis3("designationBis3");
        $this->assertEquals("designationBis3", $obj->getDesignationBis3());
    }

    /**
     * Tests the setDesignationRTF() method.
     *
     * @return void
     */
    public function testSetDesignationRTF() {

        $obj = new PlansFacturation();

        $obj->setDesignationRTF("designationRTF");
        $this->assertEquals("designationRTF", $obj->getDesignationRTF());
    }

    /**
     * Tests the setDuree() method.
     *
     * @return void
     */
    public function testSetDuree() {

        $obj = new PlansFacturation();

        $obj->setDuree(10.092018);
        $this->assertEquals(10.092018, $obj->getDuree());
    }

    /**
     * Tests the setFev() method.
     *
     * @return void
     */
    public function testSetFev() {

        $obj = new PlansFacturation();

        $obj->setFev(true);
        $this->assertEquals(true, $obj->getFev());
    }

    /**
     * Tests the setFinPeriodeTarif() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinPeriodeTarif() {

        $obj = new PlansFacturation();

        $obj->setFinPeriodeTarif(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFinPeriodeTarif());
    }

    /**
     * Tests the setIndice() method.
     *
     * @return void
     */
    public function testSetIndice() {

        $obj = new PlansFacturation();

        $obj->setIndice(10);
        $this->assertEquals(10, $obj->getIndice());
    }

    /**
     * Tests the setJan() method.
     *
     * @return void
     */
    public function testSetJan() {

        $obj = new PlansFacturation();

        $obj->setJan(true);
        $this->assertEquals(true, $obj->getJan());
    }

    /**
     * Tests the setJui() method.
     *
     * @return void
     */
    public function testSetJui() {

        $obj = new PlansFacturation();

        $obj->setJui(true);
        $this->assertEquals(true, $obj->getJui());
    }

    /**
     * Tests the setJuin() method.
     *
     * @return void
     */
    public function testSetJuin() {

        $obj = new PlansFacturation();

        $obj->setJuin(true);
        $this->assertEquals(true, $obj->getJuin());
    }

    /**
     * Tests the setMai() method.
     *
     * @return void
     */
    public function testSetMai() {

        $obj = new PlansFacturation();

        $obj->setMai(true);
        $this->assertEquals(true, $obj->getMai());
    }

    /**
     * Tests the setMar() method.
     *
     * @return void
     */
    public function testSetMar() {

        $obj = new PlansFacturation();

        $obj->setMar(true);
        $this->assertEquals(true, $obj->getMar());
    }

    /**
     * Tests the setNov() method.
     *
     * @return void
     */
    public function testSetNov() {

        $obj = new PlansFacturation();

        $obj->setNov(true);
        $this->assertEquals(true, $obj->getNov());
    }

    /**
     * Tests the setNumBT() method.
     *
     * @return void
     */
    public function testSetNumBT() {

        $obj = new PlansFacturation();

        $obj->setNumBT(10);
        $this->assertEquals(10, $obj->getNumBT());
    }

    /**
     * Tests the setNumeroDevis() method.
     *
     * @return void
     */
    public function testSetNumeroDevis() {

        $obj = new PlansFacturation();

        $obj->setNumeroDevis("numeroDevis");
        $this->assertEquals("numeroDevis", $obj->getNumeroDevis());
    }

    /**
     * Tests the setNumeroHistorique() method.
     *
     * @return void
     */
    public function testSetNumeroHistorique() {

        $obj = new PlansFacturation();

        $obj->setNumeroHistorique(10);
        $this->assertEquals(10, $obj->getNumeroHistorique());
    }

    /**
     * Tests the setOct() method.
     *
     * @return void
     */
    public function testSetOct() {

        $obj = new PlansFacturation();

        $obj->setOct(true);
        $this->assertEquals(true, $obj->getOct());
    }

    /**
     * Tests the setPeriodeTarif() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeTarif() {

        $obj = new PlansFacturation();

        $obj->setPeriodeTarif(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeTarif());
    }

    /**
     * Tests the setPosteRent() method.
     *
     * @return void
     */
    public function testSetPosteRent() {

        $obj = new PlansFacturation();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Tests the setPrixAchat() method.
     *
     * @return void
     */
    public function testSetPrixAchat() {

        $obj = new PlansFacturation();

        $obj->setPrixAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixAchat());
    }

    /**
     * Tests the setPrixVente() method.
     *
     * @return void
     */
    public function testSetPrixVente() {

        $obj = new PlansFacturation();

        $obj->setPrixVente(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVente());
    }

    /**
     * Tests the setPxFacture() method.
     *
     * @return void
     */
    public function testSetPxFacture() {

        $obj = new PlansFacturation();

        $obj->setPxFacture(true);
        $this->assertEquals(true, $obj->getPxFacture());
    }

    /**
     * Tests the setQuantite() method.
     *
     * @return void
     */
    public function testSetQuantite() {

        $obj = new PlansFacturation();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests the setRefArticle() method.
     *
     * @return void
     */
    public function testSetRefArticle() {

        $obj = new PlansFacturation();

        $obj->setRefArticle(true);
        $this->assertEquals(true, $obj->getRefArticle());
    }

    /**
     * Tests the setRefPosteCdeWebFT() method.
     *
     * @return void
     */
    public function testSetRefPosteCdeWebFT() {

        $obj = new PlansFacturation();

        $obj->setRefPosteCdeWebFT("refPosteCdeWebFT");
        $this->assertEquals("refPosteCdeWebFT", $obj->getRefPosteCdeWebFT());
    }

    /**
     * Tests the setSep() method.
     *
     * @return void
     */
    public function testSetSep() {

        $obj = new PlansFacturation();

        $obj->setSep(true);
        $this->assertEquals(true, $obj->getSep());
    }

    /**
     * Tests the setTaux() method.
     *
     * @return void
     */
    public function testSetTaux() {

        $obj = new PlansFacturation();

        $obj->setTaux(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux());
    }

    /**
     * Tests the setVentilMarge() method.
     *
     * @return void
     */
    public function testSetVentilMarge() {

        $obj = new PlansFacturation();

        $obj->setVentilMarge(true);
        $this->assertEquals(true, $obj->getVentilMarge());
    }
}
