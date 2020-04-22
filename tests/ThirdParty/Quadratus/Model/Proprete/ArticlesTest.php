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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Articles;

/**
 * Articles test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ArticlesTest extends AbstractTestCase {

    /**
     * Tests the setActif() method.
     *
     * @return void
     */
    public function testSetActif() {

        $obj = new Articles();

        $obj->setActif(true);
        $this->assertEquals(true, $obj->getActif());
    }

    /**
     * Tests the setArticleRemplacement() method.
     *
     * @return void
     */
    public function testSetArticleRemplacement() {

        $obj = new Articles();

        $obj->setArticleRemplacement("articleRemplacement");
        $this->assertEquals("articleRemplacement", $obj->getArticleRemplacement());
    }

    /**
     * Tests the setClassificationFour() method.
     *
     * @return void
     */
    public function testSetClassificationFour() {

        $obj = new Articles();

        $obj->setClassificationFour("classificationFour");
        $this->assertEquals("classificationFour", $obj->getClassificationFour());
    }

    /**
     * Tests the setClassificationUtil() method.
     *
     * @return void
     */
    public function testSetClassificationUtil() {

        $obj = new Articles();

        $obj->setClassificationUtil("classificationUtil");
        $this->assertEquals("classificationUtil", $obj->getClassificationUtil());
    }

    /**
     * Tests the setCodeAffectRent() method.
     *
     * @return void
     */
    public function testSetCodeAffectRent() {

        $obj = new Articles();

        $obj->setCodeAffectRent("codeAffectRent");
        $this->assertEquals("codeAffectRent", $obj->getCodeAffectRent());
    }

    /**
     * Tests the setCodeAnalAchat() method.
     *
     * @return void
     */
    public function testSetCodeAnalAchat() {

        $obj = new Articles();

        $obj->setCodeAnalAchat("codeAnalAchat");
        $this->assertEquals("codeAnalAchat", $obj->getCodeAnalAchat());
    }

    /**
     * Tests the setCodeAnalVente() method.
     *
     * @return void
     */
    public function testSetCodeAnalVente() {

        $obj = new Articles();

        $obj->setCodeAnalVente("codeAnalVente");
        $this->assertEquals("codeAnalVente", $obj->getCodeAnalVente());
    }

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle() {

        $obj = new Articles();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setCodeFournisseur() method.
     *
     * @return void
     */
    public function testSetCodeFournisseur() {

        $obj = new Articles();

        $obj->setCodeFournisseur("codeFournisseur");
        $this->assertEquals("codeFournisseur", $obj->getCodeFournisseur());
    }

    /**
     * Tests the setCodeTvaAchat() method.
     *
     * @return void
     */
    public function testSetCodeTvaAchat() {

        $obj = new Articles();

        $obj->setCodeTvaAchat("codeTvaAchat");
        $this->assertEquals("codeTvaAchat", $obj->getCodeTvaAchat());
    }

    /**
     * Tests the setCodeTvaVente() method.
     *
     * @return void
     */
    public function testSetCodeTvaVente() {

        $obj = new Articles();

        $obj->setCodeTvaVente("codeTvaVente");
        $this->assertEquals("codeTvaVente", $obj->getCodeTvaVente());
    }

    /**
     * Tests the setCodeUnite() method.
     *
     * @return void
     */
    public function testSetCodeUnite() {

        $obj = new Articles();

        $obj->setCodeUnite("codeUnite");
        $this->assertEquals("codeUnite", $obj->getCodeUnite());
    }

    /**
     * Tests the setCodeVentilAchat() method.
     *
     * @return void
     */
    public function testSetCodeVentilAchat() {

        $obj = new Articles();

        $obj->setCodeVentilAchat("codeVentilAchat");
        $this->assertEquals("codeVentilAchat", $obj->getCodeVentilAchat());
    }

    /**
     * Tests the setCodeVentilVente() method.
     *
     * @return void
     */
    public function testSetCodeVentilVente() {

        $obj = new Articles();

        $obj->setCodeVentilVente("codeVentilVente");
        $this->assertEquals("codeVentilVente", $obj->getCodeVentilVente());
    }

    /**
     * Tests the setCoef() method.
     *
     * @return void
     */
    public function testSetCoef() {

        $obj = new Articles();

        $obj->setCoef(10.092018);
        $this->assertEquals(10.092018, $obj->getCoef());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation() {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new Articles();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests the setDateModification() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification() {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new Articles();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Tests the setDepuisDebFac() method.
     *
     * @return void
     */
    public function testSetDepuisDebFac() {

        $obj = new Articles();

        $obj->setDepuisDebFac(true);
        $this->assertEquals(true, $obj->getDepuisDebFac());
    }

    /**
     * Tests the setDernierPrixAchat() method.
     *
     * @return void
     */
    public function testSetDernierPrixAchat() {

        $obj = new Articles();

        $obj->setDernierPrixAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getDernierPrixAchat());
    }

    /**
     * Tests the setDesignation() method.
     *
     * @return void
     */
    public function testSetDesignation() {

        $obj = new Articles();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Tests the setDesignation2() method.
     *
     * @return void
     */
    public function testSetDesignation2() {

        $obj = new Articles();

        $obj->setDesignation2("designation2");
        $this->assertEquals("designation2", $obj->getDesignation2());
    }

    /**
     * Tests the setDesignation3() method.
     *
     * @return void
     */
    public function testSetDesignation3() {

        $obj = new Articles();

        $obj->setDesignation3("designation3");
        $this->assertEquals("designation3", $obj->getDesignation3());
    }

    /**
     * Tests the setDesignationRtf() method.
     *
     * @return void
     */
    public function testSetDesignationRtf() {

        $obj = new Articles();

        $obj->setDesignationRtf("designationRtf");
        $this->assertEquals("designationRtf", $obj->getDesignationRtf());
    }

    /**
     * Tests the setFamilleArticle() method.
     *
     * @return void
     */
    public function testSetFamilleArticle() {

        $obj = new Articles();

        $obj->setFamilleArticle("familleArticle");
        $this->assertEquals("familleArticle", $obj->getFamilleArticle());
    }

    /**
     * Tests the setImprimerDansPied() method.
     *
     * @return void
     */
    public function testSetImprimerDansPied() {

        $obj = new Articles();

        $obj->setImprimerDansPied(true);
        $this->assertEquals(true, $obj->getImprimerDansPied());
    }

    /**
     * Tests the setMontantUnitaireTaxe() method.
     *
     * @return void
     */
    public function testSetMontantUnitaireTaxe() {

        $obj = new Articles();

        $obj->setMontantUnitaireTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantUnitaireTaxe());
    }

    /**
     * Tests the setMotCleDansPied() method.
     *
     * @return void
     */
    public function testSetMotCleDansPied() {

        $obj = new Articles();

        $obj->setMotCleDansPied("motCleDansPied");
        $this->assertEquals("motCleDansPied", $obj->getMotCleDansPied());
    }

    /**
     * Tests the setNePasReviser() method.
     *
     * @return void
     */
    public function testSetNePasReviser() {

        $obj = new Articles();

        $obj->setNePasReviser(true);
        $this->assertEquals(true, $obj->getNePasReviser());
    }

    /**
     * Tests the setNombreEcheances() method.
     *
     * @return void
     */
    public function testSetNombreEcheances() {

        $obj = new Articles();

        $obj->setNombreEcheances("nombreEcheances");
        $this->assertEquals("nombreEcheances", $obj->getNombreEcheances());
    }

    /**
     * Tests the setNumeroPj() method.
     *
     * @return void
     */
    public function testSetNumeroPj() {

        $obj = new Articles();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Tests the setPamp() method.
     *
     * @return void
     */
    public function testSetPamp() {

        $obj = new Articles();

        $obj->setPamp(10.092018);
        $this->assertEquals(10.092018, $obj->getPamp());
    }

    /**
     * Tests the setPosteRent() method.
     *
     * @return void
     */
    public function testSetPosteRent() {

        $obj = new Articles();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Tests the setPrixNet() method.
     *
     * @return void
     */
    public function testSetPrixNet() {

        $obj = new Articles();

        $obj->setPrixNet(true);
        $this->assertEquals(true, $obj->getPrixNet());
    }

    /**
     * Tests the setPrixRevient() method.
     *
     * @return void
     */
    public function testSetPrixRevient() {

        $obj = new Articles();

        $obj->setPrixRevient(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixRevient());
    }

    /**
     * Tests the setPrixVente() method.
     *
     * @return void
     */
    public function testSetPrixVente() {

        $obj = new Articles();

        $obj->setPrixVente(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVente());
    }

    /**
     * Tests the setPrixVenteEuros() method.
     *
     * @return void
     */
    public function testSetPrixVenteEuros() {

        $obj = new Articles();

        $obj->setPrixVenteEuros(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVenteEuros());
    }

    /**
     * Tests the setProduit() method.
     *
     * @return void
     */
    public function testSetProduit() {

        $obj = new Articles();

        $obj->setProduit(true);
        $this->assertEquals(true, $obj->getProduit());
    }

    /**
     * Tests the setProduitChimique() method.
     *
     * @return void
     */
    public function testSetProduitChimique() {

        $obj = new Articles();

        $obj->setProduitChimique(true);
        $this->assertEquals(true, $obj->getProduitChimique());
    }

    /**
     * Tests the setPxFacture() method.
     *
     * @return void
     */
    public function testSetPxFacture() {

        $obj = new Articles();

        $obj->setPxFacture(true);
        $this->assertEquals(true, $obj->getPxFacture());
    }

    /**
     * Tests the setQteStockMini() method.
     *
     * @return void
     */
    public function testSetQteStockMini() {

        $obj = new Articles();

        $obj->setQteStockMini(10.092018);
        $this->assertEquals(10.092018, $obj->getQteStockMini());
    }

    /**
     * Tests the setQteStockReel() method.
     *
     * @return void
     */
    public function testSetQteStockReel() {

        $obj = new Articles();

        $obj->setQteStockReel(10.092018);
        $this->assertEquals(10.092018, $obj->getQteStockReel());
    }

    /**
     * Tests the setSoumisEscompte() method.
     *
     * @return void
     */
    public function testSetSoumisEscompte() {

        $obj = new Articles();

        $obj->setSoumisEscompte(true);
        $this->assertEquals(true, $obj->getSoumisEscompte());
    }

    /**
     * Tests the setSuiviStock() method.
     *
     * @return void
     */
    public function testSetSuiviStock() {

        $obj = new Articles();

        $obj->setSuiviStock(true);
        $this->assertEquals(true, $obj->getSuiviStock());
    }

    /**
     * Tests the setTauxEscompte() method.
     *
     * @return void
     */
    public function testSetTauxEscompte() {

        $obj = new Articles();

        $obj->setTauxEscompte(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxEscompte());
    }

    /**
     * Tests the setTypeArticle() method.
     *
     * @return void
     */
    public function testSetTypeArticle() {

        $obj = new Articles();

        $obj->setTypeArticle("typeArticle");
        $this->assertEquals("typeArticle", $obj->getTypeArticle());
    }

    /**
     * Tests the setVariante() method.
     *
     * @return void
     */
    public function testSetVariante() {

        $obj = new Articles();

        $obj->setVariante(true);
        $this->assertEquals(true, $obj->getVariante());
    }

    /**
     * Tests the setVentilMarge() method.
     *
     * @return void
     */
    public function testSetVentilMarge() {

        $obj = new Articles();

        $obj->setVentilMarge(true);
        $this->assertEquals(true, $obj->getVentilMarge());
    }

    /**
     * Tests the setVisuDansAttFisc() method.
     *
     * @return void
     */
    public function testSetVisuDansAttFisc() {

        $obj = new Articles();

        $obj->setVisuDansAttFisc(true);
        $this->assertEquals(true, $obj->getVisuDansAttFisc());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

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
