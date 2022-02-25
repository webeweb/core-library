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
use WBW\Library\Quadratus\Model\Proprete\Articles;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Articles test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ArticlesTest extends AbstractTestCase {

    /**
     * Tests setActif()
     *
     * @return void
     */
    public function testSetActif(): void {

        $obj = new Articles();

        $obj->setActif(true);
        $this->assertEquals(true, $obj->getActif());
    }

    /**
     * Tests setArticleRemplacement()
     *
     * @return void
     */
    public function testSetArticleRemplacement(): void {

        $obj = new Articles();

        $obj->setArticleRemplacement("articleRemplacement");
        $this->assertEquals("articleRemplacement", $obj->getArticleRemplacement());
    }

    /**
     * Tests setClassificationFour()
     *
     * @return void
     */
    public function testSetClassificationFour(): void {

        $obj = new Articles();

        $obj->setClassificationFour("classificationFour");
        $this->assertEquals("classificationFour", $obj->getClassificationFour());
    }

    /**
     * Tests setClassificationUtil()
     *
     * @return void
     */
    public function testSetClassificationUtil(): void {

        $obj = new Articles();

        $obj->setClassificationUtil("classificationUtil");
        $this->assertEquals("classificationUtil", $obj->getClassificationUtil());
    }

    /**
     * Tests setCodeAffectRent()
     *
     * @return void
     */
    public function testSetCodeAffectRent(): void {

        $obj = new Articles();

        $obj->setCodeAffectRent("codeAffectRent");
        $this->assertEquals("codeAffectRent", $obj->getCodeAffectRent());
    }

    /**
     * Tests setCodeAnalAchat()
     *
     * @return void
     */
    public function testSetCodeAnalAchat(): void {

        $obj = new Articles();

        $obj->setCodeAnalAchat("codeAnalAchat");
        $this->assertEquals("codeAnalAchat", $obj->getCodeAnalAchat());
    }

    /**
     * Tests setCodeAnalVente()
     *
     * @return void
     */
    public function testSetCodeAnalVente(): void {

        $obj = new Articles();

        $obj->setCodeAnalVente("codeAnalVente");
        $this->assertEquals("codeAnalVente", $obj->getCodeAnalVente());
    }

    /**
     * Tests setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new Articles();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests setCodeFournisseur()
     *
     * @return void
     */
    public function testSetCodeFournisseur(): void {

        $obj = new Articles();

        $obj->setCodeFournisseur("codeFournisseur");
        $this->assertEquals("codeFournisseur", $obj->getCodeFournisseur());
    }

    /**
     * Tests setCodeTvaAchat()
     *
     * @return void
     */
    public function testSetCodeTvaAchat(): void {

        $obj = new Articles();

        $obj->setCodeTvaAchat("codeTvaAchat");
        $this->assertEquals("codeTvaAchat", $obj->getCodeTvaAchat());
    }

    /**
     * Tests setCodeTvaVente()
     *
     * @return void
     */
    public function testSetCodeTvaVente(): void {

        $obj = new Articles();

        $obj->setCodeTvaVente("codeTvaVente");
        $this->assertEquals("codeTvaVente", $obj->getCodeTvaVente());
    }

    /**
     * Tests setCodeUnite()
     *
     * @return void
     */
    public function testSetCodeUnite(): void {

        $obj = new Articles();

        $obj->setCodeUnite("codeUnite");
        $this->assertEquals("codeUnite", $obj->getCodeUnite());
    }

    /**
     * Tests setCodeVentilAchat()
     *
     * @return void
     */
    public function testSetCodeVentilAchat(): void {

        $obj = new Articles();

        $obj->setCodeVentilAchat("codeVentilAchat");
        $this->assertEquals("codeVentilAchat", $obj->getCodeVentilAchat());
    }

    /**
     * Tests setCodeVentilVente()
     *
     * @return void
     */
    public function testSetCodeVentilVente(): void {

        $obj = new Articles();

        $obj->setCodeVentilVente("codeVentilVente");
        $this->assertEquals("codeVentilVente", $obj->getCodeVentilVente());
    }

    /**
     * Tests setCoef()
     *
     * @return void
     */
    public function testSetCoef(): void {

        $obj = new Articles();

        $obj->setCoef(10.092018);
        $this->assertEquals(10.092018, $obj->getCoef());
    }

    /**
     * Tests setDateCreation()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new Articles();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests setDateModification()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification(): void {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new Articles();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Tests setDepuisDebFac()
     *
     * @return void
     */
    public function testSetDepuisDebFac(): void {

        $obj = new Articles();

        $obj->setDepuisDebFac(true);
        $this->assertEquals(true, $obj->getDepuisDebFac());
    }

    /**
     * Tests setDernierPrixAchat()
     *
     * @return void
     */
    public function testSetDernierPrixAchat(): void {

        $obj = new Articles();

        $obj->setDernierPrixAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getDernierPrixAchat());
    }

    /**
     * Tests setDesignation()
     *
     * @return void
     */
    public function testSetDesignation(): void {

        $obj = new Articles();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Tests setDesignation2()
     *
     * @return void
     */
    public function testSetDesignation2(): void {

        $obj = new Articles();

        $obj->setDesignation2("designation2");
        $this->assertEquals("designation2", $obj->getDesignation2());
    }

    /**
     * Tests setDesignation3()
     *
     * @return void
     */
    public function testSetDesignation3(): void {

        $obj = new Articles();

        $obj->setDesignation3("designation3");
        $this->assertEquals("designation3", $obj->getDesignation3());
    }

    /**
     * Tests setDesignationRtf()
     *
     * @return void
     */
    public function testSetDesignationRtf(): void {

        $obj = new Articles();

        $obj->setDesignationRtf("designationRtf");
        $this->assertEquals("designationRtf", $obj->getDesignationRtf());
    }

    /**
     * Tests setFamilleArticle()
     *
     * @return void
     */
    public function testSetFamilleArticle(): void {

        $obj = new Articles();

        $obj->setFamilleArticle("familleArticle");
        $this->assertEquals("familleArticle", $obj->getFamilleArticle());
    }

    /**
     * Tests setImprimerDansPied()
     *
     * @return void
     */
    public function testSetImprimerDansPied(): void {

        $obj = new Articles();

        $obj->setImprimerDansPied(true);
        $this->assertEquals(true, $obj->getImprimerDansPied());
    }

    /**
     * Tests setMontantUnitaireTaxe()
     *
     * @return void
     */
    public function testSetMontantUnitaireTaxe(): void {

        $obj = new Articles();

        $obj->setMontantUnitaireTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantUnitaireTaxe());
    }

    /**
     * Tests setMotCleDansPied()
     *
     * @return void
     */
    public function testSetMotCleDansPied(): void {

        $obj = new Articles();

        $obj->setMotCleDansPied("motCleDansPied");
        $this->assertEquals("motCleDansPied", $obj->getMotCleDansPied());
    }

    /**
     * Tests setNePasReviser()
     *
     * @return void
     */
    public function testSetNePasReviser(): void {

        $obj = new Articles();

        $obj->setNePasReviser(true);
        $this->assertEquals(true, $obj->getNePasReviser());
    }

    /**
     * Tests setNombreEcheances()
     *
     * @return void
     */
    public function testSetNombreEcheances(): void {

        $obj = new Articles();

        $obj->setNombreEcheances("nombreEcheances");
        $this->assertEquals("nombreEcheances", $obj->getNombreEcheances());
    }

    /**
     * Tests setNumeroPj()
     *
     * @return void
     */
    public function testSetNumeroPj(): void {

        $obj = new Articles();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Tests setPamp()
     *
     * @return void
     */
    public function testSetPamp(): void {

        $obj = new Articles();

        $obj->setPamp(10.092018);
        $this->assertEquals(10.092018, $obj->getPamp());
    }

    /**
     * Tests setPosteRent()
     *
     * @return void
     */
    public function testSetPosteRent(): void {

        $obj = new Articles();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Tests setPrixNet()
     *
     * @return void
     */
    public function testSetPrixNet(): void {

        $obj = new Articles();

        $obj->setPrixNet(true);
        $this->assertEquals(true, $obj->getPrixNet());
    }

    /**
     * Tests setPrixRevient()
     *
     * @return void
     */
    public function testSetPrixRevient(): void {

        $obj = new Articles();

        $obj->setPrixRevient(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixRevient());
    }

    /**
     * Tests setPrixVente()
     *
     * @return void
     */
    public function testSetPrixVente(): void {

        $obj = new Articles();

        $obj->setPrixVente(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVente());
    }

    /**
     * Tests setPrixVenteEuros()
     *
     * @return void
     */
    public function testSetPrixVenteEuros(): void {

        $obj = new Articles();

        $obj->setPrixVenteEuros(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVenteEuros());
    }

    /**
     * Tests setProduit()
     *
     * @return void
     */
    public function testSetProduit(): void {

        $obj = new Articles();

        $obj->setProduit(true);
        $this->assertEquals(true, $obj->getProduit());
    }

    /**
     * Tests setProduitChimique()
     *
     * @return void
     */
    public function testSetProduitChimique(): void {

        $obj = new Articles();

        $obj->setProduitChimique(true);
        $this->assertEquals(true, $obj->getProduitChimique());
    }

    /**
     * Tests setPxFacture()
     *
     * @return void
     */
    public function testSetPxFacture(): void {

        $obj = new Articles();

        $obj->setPxFacture(true);
        $this->assertEquals(true, $obj->getPxFacture());
    }

    /**
     * Tests setQteStockMini()
     *
     * @return void
     */
    public function testSetQteStockMini(): void {

        $obj = new Articles();

        $obj->setQteStockMini(10.092018);
        $this->assertEquals(10.092018, $obj->getQteStockMini());
    }

    /**
     * Tests setQteStockReel()
     *
     * @return void
     */
    public function testSetQteStockReel(): void {

        $obj = new Articles();

        $obj->setQteStockReel(10.092018);
        $this->assertEquals(10.092018, $obj->getQteStockReel());
    }

    /**
     * Tests setSoumisEscompte()
     *
     * @return void
     */
    public function testSetSoumisEscompte(): void {

        $obj = new Articles();

        $obj->setSoumisEscompte(true);
        $this->assertEquals(true, $obj->getSoumisEscompte());
    }

    /**
     * Tests setSuiviStock()
     *
     * @return void
     */
    public function testSetSuiviStock(): void {

        $obj = new Articles();

        $obj->setSuiviStock(true);
        $this->assertEquals(true, $obj->getSuiviStock());
    }

    /**
     * Tests setTauxEscompte()
     *
     * @return void
     */
    public function testSetTauxEscompte(): void {

        $obj = new Articles();

        $obj->setTauxEscompte(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxEscompte());
    }

    /**
     * Tests setTypeArticle()
     *
     * @return void
     */
    public function testSetTypeArticle(): void {

        $obj = new Articles();

        $obj->setTypeArticle("typeArticle");
        $this->assertEquals("typeArticle", $obj->getTypeArticle());
    }

    /**
     * Tests setVariante()
     *
     * @return void
     */
    public function testSetVariante(): void {

        $obj = new Articles();

        $obj->setVariante(true);
        $this->assertEquals(true, $obj->getVariante());
    }

    /**
     * Tests setVentilMarge()
     *
     * @return void
     */
    public function testSetVentilMarge(): void {

        $obj = new Articles();

        $obj->setVentilMarge(true);
        $this->assertEquals(true, $obj->getVentilMarge());
    }

    /**
     * Tests setVisuDansAttFisc()
     *
     * @return void
     */
    public function testSetVisuDansAttFisc(): void {

        $obj = new Articles();

        $obj->setVisuDansAttFisc(true);
        $this->assertEquals(true, $obj->getVisuDansAttFisc());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Articles();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getArticleRemplacement());
        $this->assertNull($obj->getClassificationFour());
        $this->assertNull($obj->getClassificationUtil());
        $this->assertNull($obj->getCodeAffectRent());
        $this->assertNull($obj->getCodeAnalAchat());
        $this->assertNull($obj->getCodeAnalVente());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getCodeTvaAchat());
        $this->assertNull($obj->getCodeTvaVente());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getCodeVentilAchat());
        $this->assertNull($obj->getCodeVentilVente());
        $this->assertNull($obj->getCoef());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDepuisDebFac());
        $this->assertNull($obj->getDernierPrixAchat());
        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getDesignationRtf());
        $this->assertNull($obj->getFamilleArticle());
        $this->assertNull($obj->getImprimerDansPied());
        $this->assertNull($obj->getMontantUnitaireTaxe());
        $this->assertNull($obj->getMotCleDansPied());
        $this->assertNull($obj->getNePasReviser());
        $this->assertNull($obj->getNombreEcheances());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getPamp());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getPrixNet());
        $this->assertNull($obj->getPrixRevient());
        $this->assertNull($obj->getPrixVente());
        $this->assertNull($obj->getPrixVenteEuros());
        $this->assertNull($obj->getProduit());
        $this->assertNull($obj->getProduitChimique());
        $this->assertNull($obj->getPxFacture());
        $this->assertNull($obj->getQteStockMini());
        $this->assertNull($obj->getQteStockReel());
        $this->assertNull($obj->getSoumisEscompte());
        $this->assertNull($obj->getSuiviStock());
        $this->assertNull($obj->getTauxEscompte());
        $this->assertNull($obj->getTypeArticle());
        $this->assertNull($obj->getVariante());
        $this->assertNull($obj->getVentilMarge());
        $this->assertNull($obj->getVisuDansAttFisc());
    }
}
