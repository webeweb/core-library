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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\DevisCommercialLignes;

/**
 * Devis commercial lignes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class DevisCommercialLignesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DevisCommercialLignes();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAffaireLigne());
        $this->assertNull($obj->getCodeAnalArticle());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeChantierLigne());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCodeTVAArticle());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getCodeVentilArticle());
        $this->assertNull($obj->getDepuisDebFac());
        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getDesignationBis());
        $this->assertNull($obj->getDesignationBis2());
        $this->assertNull($obj->getDesignationBis3());
        $this->assertNull($obj->getDesignationRTF());
        $this->assertNull($obj->getImprimerDansPied());
        $this->assertNull($obj->getMontantUnitaireTaxe());
        $this->assertNull($obj->getMotCleDansPied());
        $this->assertNull($obj->getNumeroDevis());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getPeriodeVentilMarge());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getPrixAchat());
        $this->assertNull($obj->getPrixUnitaire());
        $this->assertNull($obj->getPxDevis());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getRemiseLigne1());
        $this->assertNull($obj->getRemiseLigne2());
        $this->assertNull($obj->getRemiseLigne3());
        $this->assertNull($obj->getTauxTvaArticle());
        $this->assertNull($obj->getTauxTvaTaxe());
        $this->assertNull($obj->getVentilMarge());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new DevisCommercialLignes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeAffaireLigne() method.
     *
     * @return void
     */
    public function testSetCodeAffaireLigne() {

        $obj = new DevisCommercialLignes();

        $obj->setCodeAffaireLigne("codeAffaireLigne");
        $this->assertEquals("codeAffaireLigne", $obj->getCodeAffaireLigne());
    }

    /**
     * Tests the setCodeAnalArticle() method.
     *
     * @return void
     */
    public function testSetCodeAnalArticle() {

        $obj = new DevisCommercialLignes();

        $obj->setCodeAnalArticle("codeAnalArticle");
        $this->assertEquals("codeAnalArticle", $obj->getCodeAnalArticle());
    }

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle() {

        $obj = new DevisCommercialLignes();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new DevisCommercialLignes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeChantierLigne() method.
     *
     * @return void
     */
    public function testSetCodeChantierLigne() {

        $obj = new DevisCommercialLignes();

        $obj->setCodeChantierLigne("codeChantierLigne");
        $this->assertEquals("codeChantierLigne", $obj->getCodeChantierLigne());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new DevisCommercialLignes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeRegroupement() method.
     *
     * @return void
     */
    public function testSetCodeRegroupement() {

        $obj = new DevisCommercialLignes();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests the setCodeTVAArticle() method.
     *
     * @return void
     */
    public function testSetCodeTVAArticle() {

        $obj = new DevisCommercialLignes();

        $obj->setCodeTVAArticle("codeTVAArticle");
        $this->assertEquals("codeTVAArticle", $obj->getCodeTVAArticle());
    }

    /**
     * Tests the setCodeUnite() method.
     *
     * @return void
     */
    public function testSetCodeUnite() {

        $obj = new DevisCommercialLignes();

        $obj->setCodeUnite("codeUnite");
        $this->assertEquals("codeUnite", $obj->getCodeUnite());
    }

    /**
     * Tests the setCodeVentilArticle() method.
     *
     * @return void
     */
    public function testSetCodeVentilArticle() {

        $obj = new DevisCommercialLignes();

        $obj->setCodeVentilArticle("codeVentilArticle");
        $this->assertEquals("codeVentilArticle", $obj->getCodeVentilArticle());
    }

    /**
     * Tests the setDepuisDebFac() method.
     *
     * @return void
     */
    public function testSetDepuisDebFac() {

        $obj = new DevisCommercialLignes();

        $obj->setDepuisDebFac(true);
        $this->assertEquals(true, $obj->getDepuisDebFac());
    }

    /**
     * Tests the setDesignation() method.
     *
     * @return void
     */
    public function testSetDesignation() {

        $obj = new DevisCommercialLignes();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Tests the setDesignation2() method.
     *
     * @return void
     */
    public function testSetDesignation2() {

        $obj = new DevisCommercialLignes();

        $obj->setDesignation2("designation2");
        $this->assertEquals("designation2", $obj->getDesignation2());
    }

    /**
     * Tests the setDesignation3() method.
     *
     * @return void
     */
    public function testSetDesignation3() {

        $obj = new DevisCommercialLignes();

        $obj->setDesignation3("designation3");
        $this->assertEquals("designation3", $obj->getDesignation3());
    }

    /**
     * Tests the setDesignationBis() method.
     *
     * @return void
     */
    public function testSetDesignationBis() {

        $obj = new DevisCommercialLignes();

        $obj->setDesignationBis("designationBis");
        $this->assertEquals("designationBis", $obj->getDesignationBis());
    }

    /**
     * Tests the setDesignationBis2() method.
     *
     * @return void
     */
    public function testSetDesignationBis2() {

        $obj = new DevisCommercialLignes();

        $obj->setDesignationBis2("designationBis2");
        $this->assertEquals("designationBis2", $obj->getDesignationBis2());
    }

    /**
     * Tests the setDesignationBis3() method.
     *
     * @return void
     */
    public function testSetDesignationBis3() {

        $obj = new DevisCommercialLignes();

        $obj->setDesignationBis3("designationBis3");
        $this->assertEquals("designationBis3", $obj->getDesignationBis3());
    }

    /**
     * Tests the setDesignationRTF() method.
     *
     * @return void
     */
    public function testSetDesignationRTF() {

        $obj = new DevisCommercialLignes();

        $obj->setDesignationRTF("designationRTF");
        $this->assertEquals("designationRTF", $obj->getDesignationRTF());
    }

    /**
     * Tests the setImprimerDansPied() method.
     *
     * @return void
     */
    public function testSetImprimerDansPied() {

        $obj = new DevisCommercialLignes();

        $obj->setImprimerDansPied(true);
        $this->assertEquals(true, $obj->getImprimerDansPied());
    }

    /**
     * Tests the setMontantUnitaireTaxe() method.
     *
     * @return void
     */
    public function testSetMontantUnitaireTaxe() {

        $obj = new DevisCommercialLignes();

        $obj->setMontantUnitaireTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantUnitaireTaxe());
    }

    /**
     * Tests the setMotCleDansPied() method.
     *
     * @return void
     */
    public function testSetMotCleDansPied() {

        $obj = new DevisCommercialLignes();

        $obj->setMotCleDansPied("motCleDansPied");
        $this->assertEquals("motCleDansPied", $obj->getMotCleDansPied());
    }

    /**
     * Tests the setNumeroDevis() method.
     *
     * @return void
     */
    public function testSetNumeroDevis() {

        $obj = new DevisCommercialLignes();

        $obj->setNumeroDevis("numeroDevis");
        $this->assertEquals("numeroDevis", $obj->getNumeroDevis());
    }

    /**
     * Tests the setNumeroLigne() method.
     *
     * @return void
     */
    public function testSetNumeroLigne() {

        $obj = new DevisCommercialLignes();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests the setPeriodeVentilMarge() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeVentilMarge() {

        $obj = new DevisCommercialLignes();

        $obj->setPeriodeVentilMarge(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeVentilMarge());
    }

    /**
     * Tests the setPosteRent() method.
     *
     * @return void
     */
    public function testSetPosteRent() {

        $obj = new DevisCommercialLignes();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Tests the setPrixAchat() method.
     *
     * @return void
     */
    public function testSetPrixAchat() {

        $obj = new DevisCommercialLignes();

        $obj->setPrixAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixAchat());
    }

    /**
     * Tests the setPrixUnitaire() method.
     *
     * @return void
     */
    public function testSetPrixUnitaire() {

        $obj = new DevisCommercialLignes();

        $obj->setPrixUnitaire(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixUnitaire());
    }

    /**
     * Tests the setPxDevis() method.
     *
     * @return void
     */
    public function testSetPxDevis() {

        $obj = new DevisCommercialLignes();

        $obj->setPxDevis(true);
        $this->assertEquals(true, $obj->getPxDevis());
    }

    /**
     * Tests the setQuantite() method.
     *
     * @return void
     */
    public function testSetQuantite() {

        $obj = new DevisCommercialLignes();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests the setRemiseLigne1() method.
     *
     * @return void
     */
    public function testSetRemiseLigne1() {

        $obj = new DevisCommercialLignes();

        $obj->setRemiseLigne1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne1());
    }

    /**
     * Tests the setRemiseLigne2() method.
     *
     * @return void
     */
    public function testSetRemiseLigne2() {

        $obj = new DevisCommercialLignes();

        $obj->setRemiseLigne2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne2());
    }

    /**
     * Tests the setRemiseLigne3() method.
     *
     * @return void
     */
    public function testSetRemiseLigne3() {

        $obj = new DevisCommercialLignes();

        $obj->setRemiseLigne3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne3());
    }

    /**
     * Tests the setTauxTvaArticle() method.
     *
     * @return void
     */
    public function testSetTauxTvaArticle() {

        $obj = new DevisCommercialLignes();

        $obj->setTauxTvaArticle(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTvaArticle());
    }

    /**
     * Tests the setTauxTvaTaxe() method.
     *
     * @return void
     */
    public function testSetTauxTvaTaxe() {

        $obj = new DevisCommercialLignes();

        $obj->setTauxTvaTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTvaTaxe());
    }

    /**
     * Tests the setVentilMarge() method.
     *
     * @return void
     */
    public function testSetVentilMarge() {

        $obj = new DevisCommercialLignes();

        $obj->setVentilMarge(true);
        $this->assertEquals(true, $obj->getVentilMarge());
    }
}
