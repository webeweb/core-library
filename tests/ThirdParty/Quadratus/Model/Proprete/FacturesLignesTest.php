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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\FacturesLignes;

/**
 * Factures lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class FacturesLignesTest extends AbstractTestCase {

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new FacturesLignes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeAffaireLigne() method.
     *
     * @return void
     */
    public function testSetCodeAffaireLigne() {

        $obj = new FacturesLignes();

        $obj->setCodeAffaireLigne("codeAffaireLigne");
        $this->assertEquals("codeAffaireLigne", $obj->getCodeAffaireLigne());
    }

    /**
     * Tests the setCodeAnalArticle() method.
     *
     * @return void
     */
    public function testSetCodeAnalArticle() {

        $obj = new FacturesLignes();

        $obj->setCodeAnalArticle("codeAnalArticle");
        $this->assertEquals("codeAnalArticle", $obj->getCodeAnalArticle());
    }

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle() {

        $obj = new FacturesLignes();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new FacturesLignes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeChantierLigne() method.
     *
     * @return void
     */
    public function testSetCodeChantierLigne() {

        $obj = new FacturesLignes();

        $obj->setCodeChantierLigne("codeChantierLigne");
        $this->assertEquals("codeChantierLigne", $obj->getCodeChantierLigne());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new FacturesLignes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeRegroupement() method.
     *
     * @return void
     */
    public function testSetCodeRegroupement() {

        $obj = new FacturesLignes();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests the setCodeTvaArticle() method.
     *
     * @return void
     */
    public function testSetCodeTvaArticle() {

        $obj = new FacturesLignes();

        $obj->setCodeTvaArticle("codeTvaArticle");
        $this->assertEquals("codeTvaArticle", $obj->getCodeTvaArticle());
    }

    /**
     * Tests the setCodeUnite() method.
     *
     * @return void
     */
    public function testSetCodeUnite() {

        $obj = new FacturesLignes();

        $obj->setCodeUnite("codeUnite");
        $this->assertEquals("codeUnite", $obj->getCodeUnite());
    }

    /**
     * Tests the setCodeVentilArticle() method.
     *
     * @return void
     */
    public function testSetCodeVentilArticle() {

        $obj = new FacturesLignes();

        $obj->setCodeVentilArticle("codeVentilArticle");
        $this->assertEquals("codeVentilArticle", $obj->getCodeVentilArticle());
    }

    /**
     * Tests the setCoefficientBt() method.
     *
     * @return void
     */
    public function testSetCoefficientBt() {

        $obj = new FacturesLignes();

        $obj->setCoefficientBt(10.092018);
        $this->assertEquals(10.092018, $obj->getCoefficientBt());
    }

    /**
     * Tests the setDateBt() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateBt() {

        // Set a Date/time mock.
        $dateBt = new DateTime("2018-09-10");

        $obj = new FacturesLignes();

        $obj->setDateBt($dateBt);
        $this->assertSame($dateBt, $obj->getDateBt());
    }

    /**
     * Tests the setDatePreparation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePreparation() {

        // Set a Date/time mock.
        $datePreparation = new DateTime("2018-09-10");

        $obj = new FacturesLignes();

        $obj->setDatePreparation($datePreparation);
        $this->assertSame($datePreparation, $obj->getDatePreparation());
    }

    /**
     * Tests the setDepuisDebFac() method.
     *
     * @return void
     */
    public function testSetDepuisDebFac() {

        $obj = new FacturesLignes();

        $obj->setDepuisDebFac(true);
        $this->assertEquals(true, $obj->getDepuisDebFac());
    }

    /**
     * Tests the setDesignation() method.
     *
     * @return void
     */
    public function testSetDesignation() {

        $obj = new FacturesLignes();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Tests the setDesignation2() method.
     *
     * @return void
     */
    public function testSetDesignation2() {

        $obj = new FacturesLignes();

        $obj->setDesignation2("designation2");
        $this->assertEquals("designation2", $obj->getDesignation2());
    }

    /**
     * Tests the setDesignation3() method.
     *
     * @return void
     */
    public function testSetDesignation3() {

        $obj = new FacturesLignes();

        $obj->setDesignation3("designation3");
        $this->assertEquals("designation3", $obj->getDesignation3());
    }

    /**
     * Tests the setDesignationBis() method.
     *
     * @return void
     */
    public function testSetDesignationBis() {

        $obj = new FacturesLignes();

        $obj->setDesignationBis("designationBis");
        $this->assertEquals("designationBis", $obj->getDesignationBis());
    }

    /**
     * Tests the setDesignationBis2() method.
     *
     * @return void
     */
    public function testSetDesignationBis2() {

        $obj = new FacturesLignes();

        $obj->setDesignationBis2("designationBis2");
        $this->assertEquals("designationBis2", $obj->getDesignationBis2());
    }

    /**
     * Tests the setDesignationBis3() method.
     *
     * @return void
     */
    public function testSetDesignationBis3() {

        $obj = new FacturesLignes();

        $obj->setDesignationBis3("designationBis3");
        $this->assertEquals("designationBis3", $obj->getDesignationBis3());
    }

    /**
     * Tests the setDesignationRtf() method.
     *
     * @return void
     */
    public function testSetDesignationRtf() {

        $obj = new FacturesLignes();

        $obj->setDesignationRtf("designationRtf");
        $this->assertEquals("designationRtf", $obj->getDesignationRtf());
    }

    /**
     * Tests the setDureeBt() method.
     *
     * @return void
     */
    public function testSetDureeBt() {

        $obj = new FacturesLignes();

        $obj->setDureeBt(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeBt());
    }

    /**
     * Tests the setFromPointageBt() method.
     *
     * @return void
     */
    public function testSetFromPointageBt() {

        $obj = new FacturesLignes();

        $obj->setFromPointageBt(true);
        $this->assertEquals(true, $obj->getFromPointageBt());
    }

    /**
     * Tests the setHeuresPrev() method.
     *
     * @return void
     */
    public function testSetHeuresPrev() {

        $obj = new FacturesLignes();

        $obj->setHeuresPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresPrev());
    }

    /**
     * Tests the setHeuresReel() method.
     *
     * @return void
     */
    public function testSetHeuresReel() {

        $obj = new FacturesLignes();

        $obj->setHeuresReel(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresReel());
    }

    /**
     * Tests the setImprimerDansPied() method.
     *
     * @return void
     */
    public function testSetImprimerDansPied() {

        $obj = new FacturesLignes();

        $obj->setImprimerDansPied(true);
        $this->assertEquals(true, $obj->getImprimerDansPied());
    }

    /**
     * Tests the setMontantUnitaireTaxe() method.
     *
     * @return void
     */
    public function testSetMontantUnitaireTaxe() {

        $obj = new FacturesLignes();

        $obj->setMontantUnitaireTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantUnitaireTaxe());
    }

    /**
     * Tests the setMotCleDansPied() method.
     *
     * @return void
     */
    public function testSetMotCleDansPied() {

        $obj = new FacturesLignes();

        $obj->setMotCleDansPied("motCleDansPied");
        $this->assertEquals("motCleDansPied", $obj->getMotCleDansPied());
    }

    /**
     * Tests the setNoChronoPreparation() method.
     *
     * @return void
     */
    public function testSetNoChronoPreparation() {

        $obj = new FacturesLignes();

        $obj->setNoChronoPreparation(10);
        $this->assertEquals(10, $obj->getNoChronoPreparation());
    }

    /**
     * Tests the setNoLigneOri() method.
     *
     * @return void
     */
    public function testSetNoLigneOri() {

        $obj = new FacturesLignes();

        $obj->setNoLigneOri(10);
        $this->assertEquals(10, $obj->getNoLigneOri());
    }

    /**
     * Tests the setNoPieceOrigine() method.
     *
     * @return void
     */
    public function testSetNoPieceOrigine() {

        $obj = new FacturesLignes();

        $obj->setNoPieceOrigine("noPieceOrigine");
        $this->assertEquals("noPieceOrigine", $obj->getNoPieceOrigine());
    }

    /**
     * Tests the setNumeroBt() method.
     *
     * @return void
     */
    public function testSetNumeroBt() {

        $obj = new FacturesLignes();

        $obj->setNumeroBt(10);
        $this->assertEquals(10, $obj->getNumeroBt());
    }

    /**
     * Tests the setNumeroFacture() method.
     *
     * @return void
     */
    public function testSetNumeroFacture() {

        $obj = new FacturesLignes();

        $obj->setNumeroFacture("numeroFacture");
        $this->assertEquals("numeroFacture", $obj->getNumeroFacture());
    }

    /**
     * Tests the setNumeroLigne() method.
     *
     * @return void
     */
    public function testSetNumeroLigne() {

        $obj = new FacturesLignes();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests the setPeriodePreparation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodePreparation() {

        // Set a Date/time mock.
        $periodePreparation = new DateTime("2018-09-10");

        $obj = new FacturesLignes();

        $obj->setPeriodePreparation($periodePreparation);
        $this->assertSame($periodePreparation, $obj->getPeriodePreparation());
    }

    /**
     * Tests the setPeriodeVentilMarge() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeVentilMarge() {

        // Set a Date/time mock.
        $periodeVentilMarge = new DateTime("2018-09-10");

        $obj = new FacturesLignes();

        $obj->setPeriodeVentilMarge($periodeVentilMarge);
        $this->assertSame($periodeVentilMarge, $obj->getPeriodeVentilMarge());
    }

    /**
     * Tests the setPosteRent() method.
     *
     * @return void
     */
    public function testSetPosteRent() {

        $obj = new FacturesLignes();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Tests the setPrixAchat() method.
     *
     * @return void
     */
    public function testSetPrixAchat() {

        $obj = new FacturesLignes();

        $obj->setPrixAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixAchat());
    }

    /**
     * Tests the setPrixAchatBt() method.
     *
     * @return void
     */
    public function testSetPrixAchatBt() {

        $obj = new FacturesLignes();

        $obj->setPrixAchatBt(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixAchatBt());
    }

    /**
     * Tests the setPrixUnitaire() method.
     *
     * @return void
     */
    public function testSetPrixUnitaire() {

        $obj = new FacturesLignes();

        $obj->setPrixUnitaire(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixUnitaire());
    }

    /**
     * Tests the setPrixUnitairePdf() method.
     *
     * @return void
     */
    public function testSetPrixUnitairePdf() {

        $obj = new FacturesLignes();

        $obj->setPrixUnitairePdf(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixUnitairePdf());
    }

    /**
     * Tests the setPxFacture() method.
     *
     * @return void
     */
    public function testSetPxFacture() {

        $obj = new FacturesLignes();

        $obj->setPxFacture(true);
        $this->assertEquals(true, $obj->getPxFacture());
    }

    /**
     * Tests the setQuantite() method.
     *
     * @return void
     */
    public function testSetQuantite() {

        $obj = new FacturesLignes();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests the setRefPosteCdeWebFt() method.
     *
     * @return void
     */
    public function testSetRefPosteCdeWebFt() {

        $obj = new FacturesLignes();

        $obj->setRefPosteCdeWebFt("refPosteCdeWebFt");
        $this->assertEquals("refPosteCdeWebFt", $obj->getRefPosteCdeWebFt());
    }

    /**
     * Tests the setRemiseLigne1() method.
     *
     * @return void
     */
    public function testSetRemiseLigne1() {

        $obj = new FacturesLignes();

        $obj->setRemiseLigne1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne1());
    }

    /**
     * Tests the setRemiseLigne2() method.
     *
     * @return void
     */
    public function testSetRemiseLigne2() {

        $obj = new FacturesLignes();

        $obj->setRemiseLigne2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne2());
    }

    /**
     * Tests the setRemiseLigne3() method.
     *
     * @return void
     */
    public function testSetRemiseLigne3() {

        $obj = new FacturesLignes();

        $obj->setRemiseLigne3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne3());
    }

    /**
     * Tests the setTauxHoraireBt() method.
     *
     * @return void
     */
    public function testSetTauxHoraireBt() {

        $obj = new FacturesLignes();

        $obj->setTauxHoraireBt(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHoraireBt());
    }

    /**
     * Tests the setTauxTvaArticle() method.
     *
     * @return void
     */
    public function testSetTauxTvaArticle() {

        $obj = new FacturesLignes();

        $obj->setTauxTvaArticle(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTvaArticle());
    }

    /**
     * Tests the setTauxTvaTaxe() method.
     *
     * @return void
     */
    public function testSetTauxTvaTaxe() {

        $obj = new FacturesLignes();

        $obj->setTauxTvaTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTvaTaxe());
    }

    /**
     * Tests the setTypePiece() method.
     *
     * @return void
     */
    public function testSetTypePiece() {

        $obj = new FacturesLignes();

        $obj->setTypePiece("typePiece");
        $this->assertEquals("typePiece", $obj->getTypePiece());
    }

    /**
     * Tests the setVentilMarge() method.
     *
     * @return void
     */
    public function testSetVentilMarge() {

        $obj = new FacturesLignes();

        $obj->setVentilMarge(true);
        $this->assertEquals(true, $obj->getVentilMarge());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new FacturesLignes();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAffaireLigne());
        $this->assertNull($obj->getCodeAnalArticle());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeChantierLigne());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCodeTvaArticle());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getCodeVentilArticle());
        $this->assertNull($obj->getCoefficientBt());
        $this->assertNull($obj->getDateBt());
        $this->assertNull($obj->getDatePreparation());
        $this->assertNull($obj->getDepuisDebFac());
        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getDesignationBis());
        $this->assertNull($obj->getDesignationBis2());
        $this->assertNull($obj->getDesignationBis3());
        $this->assertNull($obj->getDesignationRtf());
        $this->assertNull($obj->getDureeBt());
        $this->assertNull($obj->getFromPointageBt());
        $this->assertNull($obj->getHeuresPrev());
        $this->assertNull($obj->getHeuresReel());
        $this->assertNull($obj->getImprimerDansPied());
        $this->assertNull($obj->getMontantUnitaireTaxe());
        $this->assertNull($obj->getMotCleDansPied());
        $this->assertNull($obj->getNoChronoPreparation());
        $this->assertNull($obj->getNoLigneOri());
        $this->assertNull($obj->getNoPieceOrigine());
        $this->assertNull($obj->getNumeroBt());
        $this->assertNull($obj->getNumeroFacture());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getPeriodePreparation());
        $this->assertNull($obj->getPeriodeVentilMarge());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getPrixAchat());
        $this->assertNull($obj->getPrixAchatBt());
        $this->assertNull($obj->getPrixUnitaire());
        $this->assertNull($obj->getPrixUnitairePdf());
        $this->assertNull($obj->getPxFacture());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getRefPosteCdeWebFt());
        $this->assertNull($obj->getRemiseLigne1());
        $this->assertNull($obj->getRemiseLigne2());
        $this->assertNull($obj->getRemiseLigne3());
        $this->assertNull($obj->getTauxHoraireBt());
        $this->assertNull($obj->getTauxTvaArticle());
        $this->assertNull($obj->getTauxTvaTaxe());
        $this->assertNull($obj->getTypePiece());
        $this->assertNull($obj->getVentilMarge());
    }
}
