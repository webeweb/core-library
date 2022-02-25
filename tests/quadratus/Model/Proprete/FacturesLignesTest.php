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
use WBW\Library\Quadratus\Model\Proprete\FacturesLignes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Factures lignes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class FacturesLignesTest extends AbstractTestCase {

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new FacturesLignes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeAffaireLigne()
     *
     * @return void
     */
    public function testSetCodeAffaireLigne(): void {

        $obj = new FacturesLignes();

        $obj->setCodeAffaireLigne("codeAffaireLigne");
        $this->assertEquals("codeAffaireLigne", $obj->getCodeAffaireLigne());
    }

    /**
     * Tests setCodeAnalArticle()
     *
     * @return void
     */
    public function testSetCodeAnalArticle(): void {

        $obj = new FacturesLignes();

        $obj->setCodeAnalArticle("codeAnalArticle");
        $this->assertEquals("codeAnalArticle", $obj->getCodeAnalArticle());
    }

    /**
     * Tests setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new FacturesLignes();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new FacturesLignes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeChantierLigne()
     *
     * @return void
     */
    public function testSetCodeChantierLigne(): void {

        $obj = new FacturesLignes();

        $obj->setCodeChantierLigne("codeChantierLigne");
        $this->assertEquals("codeChantierLigne", $obj->getCodeChantierLigne());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new FacturesLignes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeRegroupement()
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new FacturesLignes();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests setCodeTvaArticle()
     *
     * @return void
     */
    public function testSetCodeTvaArticle(): void {

        $obj = new FacturesLignes();

        $obj->setCodeTvaArticle("codeTvaArticle");
        $this->assertEquals("codeTvaArticle", $obj->getCodeTvaArticle());
    }

    /**
     * Tests setCodeUnite()
     *
     * @return void
     */
    public function testSetCodeUnite(): void {

        $obj = new FacturesLignes();

        $obj->setCodeUnite("codeUnite");
        $this->assertEquals("codeUnite", $obj->getCodeUnite());
    }

    /**
     * Tests setCodeVentilArticle()
     *
     * @return void
     */
    public function testSetCodeVentilArticle(): void {

        $obj = new FacturesLignes();

        $obj->setCodeVentilArticle("codeVentilArticle");
        $this->assertEquals("codeVentilArticle", $obj->getCodeVentilArticle());
    }

    /**
     * Tests setCoefficientBt()
     *
     * @return void
     */
    public function testSetCoefficientBt(): void {

        $obj = new FacturesLignes();

        $obj->setCoefficientBt(10.092018);
        $this->assertEquals(10.092018, $obj->getCoefficientBt());
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

        $obj = new FacturesLignes();

        $obj->setDateBt($dateBt);
        $this->assertSame($dateBt, $obj->getDateBt());
    }

    /**
     * Tests setDatePreparation()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePreparation(): void {

        // Set a Date/time mock.
        $datePreparation = new DateTime("2018-09-10");

        $obj = new FacturesLignes();

        $obj->setDatePreparation($datePreparation);
        $this->assertSame($datePreparation, $obj->getDatePreparation());
    }

    /**
     * Tests setDepuisDebFac()
     *
     * @return void
     */
    public function testSetDepuisDebFac(): void {

        $obj = new FacturesLignes();

        $obj->setDepuisDebFac(true);
        $this->assertEquals(true, $obj->getDepuisDebFac());
    }

    /**
     * Tests setDesignation()
     *
     * @return void
     */
    public function testSetDesignation(): void {

        $obj = new FacturesLignes();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Tests setDesignation2()
     *
     * @return void
     */
    public function testSetDesignation2(): void {

        $obj = new FacturesLignes();

        $obj->setDesignation2("designation2");
        $this->assertEquals("designation2", $obj->getDesignation2());
    }

    /**
     * Tests setDesignation3()
     *
     * @return void
     */
    public function testSetDesignation3(): void {

        $obj = new FacturesLignes();

        $obj->setDesignation3("designation3");
        $this->assertEquals("designation3", $obj->getDesignation3());
    }

    /**
     * Tests setDesignationBis()
     *
     * @return void
     */
    public function testSetDesignationBis(): void {

        $obj = new FacturesLignes();

        $obj->setDesignationBis("designationBis");
        $this->assertEquals("designationBis", $obj->getDesignationBis());
    }

    /**
     * Tests setDesignationBis2()
     *
     * @return void
     */
    public function testSetDesignationBis2(): void {

        $obj = new FacturesLignes();

        $obj->setDesignationBis2("designationBis2");
        $this->assertEquals("designationBis2", $obj->getDesignationBis2());
    }

    /**
     * Tests setDesignationBis3()
     *
     * @return void
     */
    public function testSetDesignationBis3(): void {

        $obj = new FacturesLignes();

        $obj->setDesignationBis3("designationBis3");
        $this->assertEquals("designationBis3", $obj->getDesignationBis3());
    }

    /**
     * Tests setDesignationRtf()
     *
     * @return void
     */
    public function testSetDesignationRtf(): void {

        $obj = new FacturesLignes();

        $obj->setDesignationRtf("designationRtf");
        $this->assertEquals("designationRtf", $obj->getDesignationRtf());
    }

    /**
     * Tests setDureeBt()
     *
     * @return void
     */
    public function testSetDureeBt(): void {

        $obj = new FacturesLignes();

        $obj->setDureeBt(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeBt());
    }

    /**
     * Tests setFromPointageBt()
     *
     * @return void
     */
    public function testSetFromPointageBt(): void {

        $obj = new FacturesLignes();

        $obj->setFromPointageBt(true);
        $this->assertEquals(true, $obj->getFromPointageBt());
    }

    /**
     * Tests setHeuresPrev()
     *
     * @return void
     */
    public function testSetHeuresPrev(): void {

        $obj = new FacturesLignes();

        $obj->setHeuresPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresPrev());
    }

    /**
     * Tests setHeuresReel()
     *
     * @return void
     */
    public function testSetHeuresReel(): void {

        $obj = new FacturesLignes();

        $obj->setHeuresReel(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresReel());
    }

    /**
     * Tests setImprimerDansPied()
     *
     * @return void
     */
    public function testSetImprimerDansPied(): void {

        $obj = new FacturesLignes();

        $obj->setImprimerDansPied(true);
        $this->assertEquals(true, $obj->getImprimerDansPied());
    }

    /**
     * Tests setMontantUnitaireTaxe()
     *
     * @return void
     */
    public function testSetMontantUnitaireTaxe(): void {

        $obj = new FacturesLignes();

        $obj->setMontantUnitaireTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantUnitaireTaxe());
    }

    /**
     * Tests setMotCleDansPied()
     *
     * @return void
     */
    public function testSetMotCleDansPied(): void {

        $obj = new FacturesLignes();

        $obj->setMotCleDansPied("motCleDansPied");
        $this->assertEquals("motCleDansPied", $obj->getMotCleDansPied());
    }

    /**
     * Tests setNoChronoPreparation()
     *
     * @return void
     */
    public function testSetNoChronoPreparation(): void {

        $obj = new FacturesLignes();

        $obj->setNoChronoPreparation(10);
        $this->assertEquals(10, $obj->getNoChronoPreparation());
    }

    /**
     * Tests setNoLigneOri()
     *
     * @return void
     */
    public function testSetNoLigneOri(): void {

        $obj = new FacturesLignes();

        $obj->setNoLigneOri(10);
        $this->assertEquals(10, $obj->getNoLigneOri());
    }

    /**
     * Tests setNoPieceOrigine()
     *
     * @return void
     */
    public function testSetNoPieceOrigine(): void {

        $obj = new FacturesLignes();

        $obj->setNoPieceOrigine("noPieceOrigine");
        $this->assertEquals("noPieceOrigine", $obj->getNoPieceOrigine());
    }

    /**
     * Tests setNumeroBt()
     *
     * @return void
     */
    public function testSetNumeroBt(): void {

        $obj = new FacturesLignes();

        $obj->setNumeroBt(10);
        $this->assertEquals(10, $obj->getNumeroBt());
    }

    /**
     * Tests setNumeroFacture()
     *
     * @return void
     */
    public function testSetNumeroFacture(): void {

        $obj = new FacturesLignes();

        $obj->setNumeroFacture("numeroFacture");
        $this->assertEquals("numeroFacture", $obj->getNumeroFacture());
    }

    /**
     * Tests setNumeroLigne()
     *
     * @return void
     */
    public function testSetNumeroLigne(): void {

        $obj = new FacturesLignes();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests setPeriodePreparation()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodePreparation(): void {

        // Set a Date/time mock.
        $periodePreparation = new DateTime("2018-09-10");

        $obj = new FacturesLignes();

        $obj->setPeriodePreparation($periodePreparation);
        $this->assertSame($periodePreparation, $obj->getPeriodePreparation());
    }

    /**
     * Tests setPeriodeVentilMarge()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeVentilMarge(): void {

        // Set a Date/time mock.
        $periodeVentilMarge = new DateTime("2018-09-10");

        $obj = new FacturesLignes();

        $obj->setPeriodeVentilMarge($periodeVentilMarge);
        $this->assertSame($periodeVentilMarge, $obj->getPeriodeVentilMarge());
    }

    /**
     * Tests setPosteRent()
     *
     * @return void
     */
    public function testSetPosteRent(): void {

        $obj = new FacturesLignes();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Tests setPrixAchat()
     *
     * @return void
     */
    public function testSetPrixAchat(): void {

        $obj = new FacturesLignes();

        $obj->setPrixAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixAchat());
    }

    /**
     * Tests setPrixAchatBt()
     *
     * @return void
     */
    public function testSetPrixAchatBt(): void {

        $obj = new FacturesLignes();

        $obj->setPrixAchatBt(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixAchatBt());
    }

    /**
     * Tests setPrixUnitaire()
     *
     * @return void
     */
    public function testSetPrixUnitaire(): void {

        $obj = new FacturesLignes();

        $obj->setPrixUnitaire(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixUnitaire());
    }

    /**
     * Tests setPrixUnitairePdf()
     *
     * @return void
     */
    public function testSetPrixUnitairePdf(): void {

        $obj = new FacturesLignes();

        $obj->setPrixUnitairePdf(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixUnitairePdf());
    }

    /**
     * Tests setPxFacture()
     *
     * @return void
     */
    public function testSetPxFacture(): void {

        $obj = new FacturesLignes();

        $obj->setPxFacture(true);
        $this->assertEquals(true, $obj->getPxFacture());
    }

    /**
     * Tests setQuantite()
     *
     * @return void
     */
    public function testSetQuantite(): void {

        $obj = new FacturesLignes();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests setRefPosteCdeWebFt()
     *
     * @return void
     */
    public function testSetRefPosteCdeWebFt(): void {

        $obj = new FacturesLignes();

        $obj->setRefPosteCdeWebFt("refPosteCdeWebFt");
        $this->assertEquals("refPosteCdeWebFt", $obj->getRefPosteCdeWebFt());
    }

    /**
     * Tests setRemiseLigne1()
     *
     * @return void
     */
    public function testSetRemiseLigne1(): void {

        $obj = new FacturesLignes();

        $obj->setRemiseLigne1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne1());
    }

    /**
     * Tests setRemiseLigne2()
     *
     * @return void
     */
    public function testSetRemiseLigne2(): void {

        $obj = new FacturesLignes();

        $obj->setRemiseLigne2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne2());
    }

    /**
     * Tests setRemiseLigne3()
     *
     * @return void
     */
    public function testSetRemiseLigne3(): void {

        $obj = new FacturesLignes();

        $obj->setRemiseLigne3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne3());
    }

    /**
     * Tests setTauxHoraireBt()
     *
     * @return void
     */
    public function testSetTauxHoraireBt(): void {

        $obj = new FacturesLignes();

        $obj->setTauxHoraireBt(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHoraireBt());
    }

    /**
     * Tests setTauxTvaArticle()
     *
     * @return void
     */
    public function testSetTauxTvaArticle(): void {

        $obj = new FacturesLignes();

        $obj->setTauxTvaArticle(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTvaArticle());
    }

    /**
     * Tests setTauxTvaTaxe()
     *
     * @return void
     */
    public function testSetTauxTvaTaxe(): void {

        $obj = new FacturesLignes();

        $obj->setTauxTvaTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTvaTaxe());
    }

    /**
     * Tests setTypePiece()
     *
     * @return void
     */
    public function testSetTypePiece(): void {

        $obj = new FacturesLignes();

        $obj->setTypePiece("typePiece");
        $this->assertEquals("typePiece", $obj->getTypePiece());
    }

    /**
     * Tests setVentilMarge()
     *
     * @return void
     */
    public function testSetVentilMarge(): void {

        $obj = new FacturesLignes();

        $obj->setVentilMarge(true);
        $this->assertEquals(true, $obj->getVentilMarge());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
