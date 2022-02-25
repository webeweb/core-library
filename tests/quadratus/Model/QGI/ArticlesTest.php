<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\Articles;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Articles test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ArticlesTest extends AbstractTestCase {

    /**
     * Tests setAchatParColis()
     *
     * @return void
     */
    public function testSetAchatParColis(): void {

        $obj = new Articles();

        $obj->setAchatParColis(true);
        $this->assertEquals(true, $obj->getAchatParColis());
    }

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
     * Tests setAlleeCasier()
     *
     * @return void
     */
    public function testSetAlleeCasier(): void {

        $obj = new Articles();

        $obj->setAlleeCasier("alleeCasier");
        $this->assertEquals("alleeCasier", $obj->getAlleeCasier());
    }

    /**
     * Tests setArticleFrais()
     *
     * @return void
     */
    public function testSetArticleFrais(): void {

        $obj = new Articles();

        $obj->setArticleFrais(true);
        $this->assertEquals(true, $obj->getArticleFrais());
    }

    /**
     * Tests setArticleRattache()
     *
     * @return void
     */
    public function testSetArticleRattache(): void {

        $obj = new Articles();

        $obj->setArticleRattache("articleRattache");
        $this->assertEquals("articleRattache", $obj->getArticleRattache());
    }

    /**
     * Tests setArticleRegroupement()
     *
     * @return void
     */
    public function testSetArticleRegroupement(): void {

        $obj = new Articles();

        $obj->setArticleRegroupement("articleRegroupement");
        $this->assertEquals("articleRegroupement", $obj->getArticleRegroupement());
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
     * Tests setArticleTaxe1()
     *
     * @return void
     */
    public function testSetArticleTaxe1(): void {

        $obj = new Articles();

        $obj->setArticleTaxe1("articleTaxe1");
        $this->assertEquals("articleTaxe1", $obj->getArticleTaxe1());
    }

    /**
     * Tests setArticleTaxe2()
     *
     * @return void
     */
    public function testSetArticleTaxe2(): void {

        $obj = new Articles();

        $obj->setArticleTaxe2("articleTaxe2");
        $this->assertEquals("articleTaxe2", $obj->getArticleTaxe2());
    }

    /**
     * Tests setArticleTaxe3()
     *
     * @return void
     */
    public function testSetArticleTaxe3(): void {

        $obj = new Articles();

        $obj->setArticleTaxe3("articleTaxe3");
        $this->assertEquals("articleTaxe3", $obj->getArticleTaxe3());
    }

    /**
     * Tests setArticleTaxe4()
     *
     * @return void
     */
    public function testSetArticleTaxe4(): void {

        $obj = new Articles();

        $obj->setArticleTaxe4("articleTaxe4");
        $this->assertEquals("articleTaxe4", $obj->getArticleTaxe4());
    }

    /**
     * Tests setArticleTaxe5()
     *
     * @return void
     */
    public function testSetArticleTaxe5(): void {

        $obj = new Articles();

        $obj->setArticleTaxe5("articleTaxe5");
        $this->assertEquals("articleTaxe5", $obj->getArticleTaxe5());
    }

    /**
     * Tests setCalculCoeffPaPv()
     *
     * @return void
     */
    public function testSetCalculCoeffPaPv(): void {

        $obj = new Articles();

        $obj->setCalculCoeffPaPv(true);
        $this->assertEquals(true, $obj->getCalculCoeffPaPv());
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
     * Tests setCodeArticle2()
     *
     * @return void
     */
    public function testSetCodeArticle2(): void {

        $obj = new Articles();

        $obj->setCodeArticle2("codeArticle2");
        $this->assertEquals("codeArticle2", $obj->getCodeArticle2());
    }

    /**
     * Tests setCodeDeviseAchat()
     *
     * @return void
     */
    public function testSetCodeDeviseAchat(): void {

        $obj = new Articles();

        $obj->setCodeDeviseAchat("codeDeviseAchat");
        $this->assertEquals("codeDeviseAchat", $obj->getCodeDeviseAchat());
    }

    /**
     * Tests setCodeFamille()
     *
     * @return void
     */
    public function testSetCodeFamille(): void {

        $obj = new Articles();

        $obj->setCodeFamille("codeFamille");
        $this->assertEquals("codeFamille", $obj->getCodeFamille());
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
     * Tests setCodeGamme()
     *
     * @return void
     */
    public function testSetCodeGamme(): void {

        $obj = new Articles();

        $obj->setCodeGamme("codeGamme");
        $this->assertEquals("codeGamme", $obj->getCodeGamme());
    }

    /**
     * Tests setCodeGrilleGamme()
     *
     * @return void
     */
    public function testSetCodeGrilleGamme(): void {

        $obj = new Articles();

        $obj->setCodeGrilleGamme("codeGrilleGamme");
        $this->assertEquals("codeGrilleGamme", $obj->getCodeGrilleGamme());
    }

    /**
     * Tests setCodeHonoraire()
     *
     * @return void
     */
    public function testSetCodeHonoraire(): void {

        $obj = new Articles();

        $obj->setCodeHonoraire("codeHonoraire");
        $this->assertEquals("codeHonoraire", $obj->getCodeHonoraire());
    }

    /**
     * Tests setCodeImputationAnalytique()
     *
     * @return void
     */
    public function testSetCodeImputationAnalytique(): void {

        $obj = new Articles();

        $obj->setCodeImputationAnalytique("codeImputationAnalytique");
        $this->assertEquals("codeImputationAnalytique", $obj->getCodeImputationAnalytique());
    }

    /**
     * Tests setCodePresentation()
     *
     * @return void
     */
    public function testSetCodePresentation(): void {

        $obj = new Articles();

        $obj->setCodePresentation("codePresentation");
        $this->assertEquals("codePresentation", $obj->getCodePresentation());
    }

    /**
     * Tests setCodeSsFamille()
     *
     * @return void
     */
    public function testSetCodeSsFamille(): void {

        $obj = new Articles();

        $obj->setCodeSsFamille("codeSsFamille");
        $this->assertEquals("codeSsFamille", $obj->getCodeSsFamille());
    }

    /**
     * Tests setCodeTache()
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new Articles();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests setCodeTarifArt()
     *
     * @return void
     */
    public function testSetCodeTarifArt(): void {

        $obj = new Articles();

        $obj->setCodeTarifArt("codeTarifArt");
        $this->assertEquals("codeTarifArt", $obj->getCodeTarifArt());
    }

    /**
     * Tests setCodeTaxe()
     *
     * @return void
     */
    public function testSetCodeTaxe(): void {

        $obj = new Articles();

        $obj->setCodeTaxe("codeTaxe");
        $this->assertEquals("codeTaxe", $obj->getCodeTaxe());
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
     * Tests setCodeTvaVente2()
     *
     * @return void
     */
    public function testSetCodeTvaVente2(): void {

        $obj = new Articles();

        $obj->setCodeTvaVente2("codeTvaVente2");
        $this->assertEquals("codeTvaVente2", $obj->getCodeTvaVente2());
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
     * Tests setCodeVentilVente2()
     *
     * @return void
     */
    public function testSetCodeVentilVente2(): void {

        $obj = new Articles();

        $obj->setCodeVentilVente2("codeVentilVente2");
        $this->assertEquals("codeVentilVente2", $obj->getCodeVentilVente2());
    }

    /**
     * Tests setCoeffPvPa()
     *
     * @return void
     */
    public function testSetCoeffPvPa(): void {

        $obj = new Articles();

        $obj->setCoeffPvPa(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffPvPa());
    }

    /**
     * Tests setCoeffSurPxAchat()
     *
     * @return void
     */
    public function testSetCoeffSurPxAchat(): void {

        $obj = new Articles();

        $obj->setCoeffSurPxAchat("coeffSurPxAchat");
        $this->assertEquals("coeffSurPxAchat", $obj->getCoeffSurPxAchat());
    }

    /**
     * Tests setCoeffSurPxAchatBrut()
     *
     * @return void
     */
    public function testSetCoeffSurPxAchatBrut(): void {

        $obj = new Articles();

        $obj->setCoeffSurPxAchatBrut(true);
        $this->assertEquals(true, $obj->getCoeffSurPxAchatBrut());
    }

    /**
     * Tests setColisageAchat()
     *
     * @return void
     */
    public function testSetColisageAchat(): void {

        $obj = new Articles();

        $obj->setColisageAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getColisageAchat());
    }

    /**
     * Tests setColisagePxAchat()
     *
     * @return void
     */
    public function testSetColisagePxAchat(): void {

        $obj = new Articles();

        $obj->setColisagePxAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getColisagePxAchat());
    }

    /**
     * Tests setColisagePxVente()
     *
     * @return void
     */
    public function testSetColisagePxVente(): void {

        $obj = new Articles();

        $obj->setColisagePxVente(10.092018);
        $this->assertEquals(10.092018, $obj->getColisagePxVente());
    }

    /**
     * Tests setColisageVente()
     *
     * @return void
     */
    public function testSetColisageVente(): void {

        $obj = new Articles();

        $obj->setColisageVente(10.092018);
        $this->assertEquals(10.092018, $obj->getColisageVente());
    }

    /**
     * Tests setCommissionUnique()
     *
     * @return void
     */
    public function testSetCommissionUnique(): void {

        $obj = new Articles();

        $obj->setCommissionUnique(true);
        $this->assertEquals(true, $obj->getCommissionUnique());
    }

    /**
     * Tests setComplement()
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new Articles();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests setConditionnement1()
     *
     * @return void
     */
    public function testSetConditionnement1(): void {

        $obj = new Articles();

        $obj->setConditionnement1(10.092018);
        $this->assertEquals(10.092018, $obj->getConditionnement1());
    }

    /**
     * Tests setConditionnement2()
     *
     * @return void
     */
    public function testSetConditionnement2(): void {

        $obj = new Articles();

        $obj->setConditionnement2(10.092018);
        $this->assertEquals(10.092018, $obj->getConditionnement2());
    }

    /**
     * Tests setConditionnement3()
     *
     * @return void
     */
    public function testSetConditionnement3(): void {

        $obj = new Articles();

        $obj->setConditionnement3(10.092018);
        $this->assertEquals(10.092018, $obj->getConditionnement3());
    }

    /**
     * Tests setContremarqueInterdite()
     *
     * @return void
     */
    public function testSetContremarqueInterdite(): void {

        $obj = new Articles();

        $obj->setContremarqueInterdite(true);
        $this->assertEquals(true, $obj->getContremarqueInterdite());
    }

    /**
     * Tests setCoutSupp()
     *
     * @return void
     */
    public function testSetCoutSupp(): void {

        $obj = new Articles();

        $obj->setCoutSupp(10.092018);
        $this->assertEquals(10.092018, $obj->getCoutSupp());
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
     * Tests setDebour()
     *
     * @return void
     */
    public function testSetDebour(): void {

        $obj = new Articles();

        $obj->setDebour(true);
        $this->assertEquals(true, $obj->getDebour());
    }

    /**
     * Tests setDernierPxAchat()
     *
     * @return void
     */
    public function testSetDernierPxAchat(): void {

        $obj = new Articles();

        $obj->setDernierPxAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getDernierPxAchat());
    }

    /**
     * Tests setDesignationApres()
     *
     * @return void
     */
    public function testSetDesignationApres(): void {

        $obj = new Articles();

        $obj->setDesignationApres("designationApres");
        $this->assertEquals("designationApres", $obj->getDesignationApres());
    }

    /**
     * Tests setDesignationAvant()
     *
     * @return void
     */
    public function testSetDesignationAvant(): void {

        $obj = new Articles();

        $obj->setDesignationAvant("designationAvant");
        $this->assertEquals("designationAvant", $obj->getDesignationAvant());
    }

    /**
     * Tests setEditerArticleRattache()
     *
     * @return void
     */
    public function testSetEditerArticleRattache(): void {

        $obj = new Articles();

        $obj->setEditerArticleRattache(true);
        $this->assertEquals(true, $obj->getEditerArticleRattache());
    }

    /**
     * Tests setEditerArticleRemplacement()
     *
     * @return void
     */
    public function testSetEditerArticleRemplacement(): void {

        $obj = new Articles();

        $obj->setEditerArticleRemplacement(true);
        $this->assertEquals(true, $obj->getEditerArticleRemplacement());
    }

    /**
     * Tests setEnsemble()
     *
     * @return void
     */
    public function testSetEnsemble(): void {

        $obj = new Articles();

        $obj->setEnsemble(true);
        $this->assertEquals(true, $obj->getEnsemble());
    }

    /**
     * Tests setEstMultiTva()
     *
     * @return void
     */
    public function testSetEstMultiTva(): void {

        $obj = new Articles();

        $obj->setEstMultiTva(true);
        $this->assertEquals(true, $obj->getEstMultiTva());
    }

    /**
     * Tests setEstOccasion()
     *
     * @return void
     */
    public function testSetEstOccasion(): void {

        $obj = new Articles();

        $obj->setEstOccasion(true);
        $this->assertEquals(true, $obj->getEstOccasion());
    }

    /**
     * Tests setFacturationTtc()
     *
     * @return void
     */
    public function testSetFacturationTtc(): void {

        $obj = new Articles();

        $obj->setFacturationTtc(true);
        $this->assertEquals(true, $obj->getFacturationTtc());
    }

    /**
     * Tests setFamilleAchat()
     *
     * @return void
     */
    public function testSetFamilleAchat(): void {

        $obj = new Articles();

        $obj->setFamilleAchat("familleAchat");
        $this->assertEquals("familleAchat", $obj->getFamilleAchat());
    }

    /**
     * Tests setFrais1()
     *
     * @return void
     */
    public function testSetFrais1(): void {

        $obj = new Articles();

        $obj->setFrais1(10.092018);
        $this->assertEquals(10.092018, $obj->getFrais1());
    }

    /**
     * Tests setFrais2()
     *
     * @return void
     */
    public function testSetFrais2(): void {

        $obj = new Articles();

        $obj->setFrais2(10.092018);
        $this->assertEquals(10.092018, $obj->getFrais2());
    }

    /**
     * Tests setFrais3()
     *
     * @return void
     */
    public function testSetFrais3(): void {

        $obj = new Articles();

        $obj->setFrais3(10.092018);
        $this->assertEquals(10.092018, $obj->getFrais3());
    }

    /**
     * Tests setHaCoeffPvPa()
     *
     * @return void
     */
    public function testSetHaCoeffPvPa(): void {

        $obj = new Articles();

        $obj->setHaCoeffPvPa(10.092018);
        $this->assertEquals(10.092018, $obj->getHaCoeffPvPa());
    }

    /**
     * Tests setHaCoeffSurPxAchat()
     *
     * @return void
     */
    public function testSetHaCoeffSurPxAchat(): void {

        $obj = new Articles();

        $obj->setHaCoeffSurPxAchat("haCoeffSurPxAchat");
        $this->assertEquals("haCoeffSurPxAchat", $obj->getHaCoeffSurPxAchat());
    }

    /**
     * Tests setHaDatePa()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHaDatePa(): void {

        // Set a Date/time mock.
        $haDatePa = new DateTime("2018-09-10");

        $obj = new Articles();

        $obj->setHaDatePa($haDatePa);
        $this->assertSame($haDatePa, $obj->getHaDatePa());
    }

    /**
     * Tests setHaDatePv()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHaDatePv(): void {

        // Set a Date/time mock.
        $haDatePv = new DateTime("2018-09-10");

        $obj = new Articles();

        $obj->setHaDatePv($haDatePv);
        $this->assertSame($haDatePv, $obj->getHaDatePv());
    }

    /**
     * Tests setHaDernierPxAchat()
     *
     * @return void
     */
    public function testSetHaDernierPxAchat(): void {

        $obj = new Articles();

        $obj->setHaDernierPxAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getHaDernierPxAchat());
    }

    /**
     * Tests setHaPrixRevient()
     *
     * @return void
     */
    public function testSetHaPrixRevient(): void {

        $obj = new Articles();

        $obj->setHaPrixRevient(10.092018);
        $this->assertEquals(10.092018, $obj->getHaPrixRevient());
    }

    /**
     * Tests setHaPrixRevientNet()
     *
     * @return void
     */
    public function testSetHaPrixRevientNet(): void {

        $obj = new Articles();

        $obj->setHaPrixRevientNet(10.092018);
        $this->assertEquals(10.092018, $obj->getHaPrixRevientNet());
    }

    /**
     * Tests setHaPrixVente()
     *
     * @return void
     */
    public function testSetHaPrixVente(): void {

        $obj = new Articles();

        $obj->setHaPrixVente(10.092018);
        $this->assertEquals(10.092018, $obj->getHaPrixVente());
    }

    /**
     * Tests setHaPxAchatBrut()
     *
     * @return void
     */
    public function testSetHaPxAchatBrut(): void {

        $obj = new Articles();

        $obj->setHaPxAchatBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getHaPxAchatBrut());
    }

    /**
     * Tests setHaRemiseAchat1()
     *
     * @return void
     */
    public function testSetHaRemiseAchat1(): void {

        $obj = new Articles();

        $obj->setHaRemiseAchat1(10.092018);
        $this->assertEquals(10.092018, $obj->getHaRemiseAchat1());
    }

    /**
     * Tests setHaRemiseAchat2()
     *
     * @return void
     */
    public function testSetHaRemiseAchat2(): void {

        $obj = new Articles();

        $obj->setHaRemiseAchat2(10.092018);
        $this->assertEquals(10.092018, $obj->getHaRemiseAchat2());
    }

    /**
     * Tests setHaRemiseAchat3()
     *
     * @return void
     */
    public function testSetHaRemiseAchat3(): void {

        $obj = new Articles();

        $obj->setHaRemiseAchat3(10.092018);
        $this->assertEquals(10.092018, $obj->getHaRemiseAchat3());
    }

    /**
     * Tests setHaRemiseSupAchat1()
     *
     * @return void
     */
    public function testSetHaRemiseSupAchat1(): void {

        $obj = new Articles();

        $obj->setHaRemiseSupAchat1(10.092018);
        $this->assertEquals(10.092018, $obj->getHaRemiseSupAchat1());
    }

    /**
     * Tests setHaRemiseSupAchat2()
     *
     * @return void
     */
    public function testSetHaRemiseSupAchat2(): void {

        $obj = new Articles();

        $obj->setHaRemiseSupAchat2(10.092018);
        $this->assertEquals(10.092018, $obj->getHaRemiseSupAchat2());
    }

    /**
     * Tests setHaRemiseSupAchat3()
     *
     * @return void
     */
    public function testSetHaRemiseSupAchat3(): void {

        $obj = new Articles();

        $obj->setHaRemiseSupAchat3(10.092018);
        $this->assertEquals(10.092018, $obj->getHaRemiseSupAchat3());
    }

    /**
     * Tests setHauteur()
     *
     * @return void
     */
    public function testSetHauteur(): void {

        $obj = new Articles();

        $obj->setHauteur(10.092018);
        $this->assertEquals(10.092018, $obj->getHauteur());
    }

    /**
     * Tests setHonoraires()
     *
     * @return void
     */
    public function testSetHonoraires(): void {

        $obj = new Articles();

        $obj->setHonoraires(true);
        $this->assertEquals(true, $obj->getHonoraires());
    }

    /**
     * Tests setHonorairesUniquement()
     *
     * @return void
     */
    public function testSetHonorairesUniquement(): void {

        $obj = new Articles();

        $obj->setHonorairesUniquement(true);
        $this->assertEquals(true, $obj->getHonorairesUniquement());
    }

    /**
     * Tests setHorsStock()
     *
     * @return void
     */
    public function testSetHorsStock(): void {

        $obj = new Articles();

        $obj->setHorsStock(true);
        $this->assertEquals(true, $obj->getHorsStock());
    }

    /**
     * Tests setIntitule1()
     *
     * @return void
     */
    public function testSetIntitule1(): void {

        $obj = new Articles();

        $obj->setIntitule1("intitule1");
        $this->assertEquals("intitule1", $obj->getIntitule1());
    }

    /**
     * Tests setIntitule2()
     *
     * @return void
     */
    public function testSetIntitule2(): void {

        $obj = new Articles();

        $obj->setIntitule2("intitule2");
        $this->assertEquals("intitule2", $obj->getIntitule2());
    }

    /**
     * Tests setIntitule3()
     *
     * @return void
     */
    public function testSetIntitule3(): void {

        $obj = new Articles();

        $obj->setIntitule3("intitule3");
        $this->assertEquals("intitule3", $obj->getIntitule3());
    }

    /**
     * Tests setIntitule4()
     *
     * @return void
     */
    public function testSetIntitule4(): void {

        $obj = new Articles();

        $obj->setIntitule4("intitule4");
        $this->assertEquals("intitule4", $obj->getIntitule4());
    }

    /**
     * Tests setLargeur()
     *
     * @return void
     */
    public function testSetLargeur(): void {

        $obj = new Articles();

        $obj->setLargeur(10.092018);
        $this->assertEquals(10.092018, $obj->getLargeur());
    }

    /**
     * Tests setLibelleInterne()
     *
     * @return void
     */
    public function testSetLibelleInterne(): void {

        $obj = new Articles();

        $obj->setLibelleInterne("libelleInterne");
        $this->assertEquals("libelleInterne", $obj->getLibelleInterne());
    }

    /**
     * Tests setLongueur()
     *
     * @return void
     */
    public function testSetLongueur(): void {

        $obj = new Articles();

        $obj->setLongueur(10.092018);
        $this->assertEquals(10.092018, $obj->getLongueur());
    }

    /**
     * Tests setLotSerieAutre()
     *
     * @return void
     */
    public function testSetLotSerieAutre(): void {

        $obj = new Articles();

        $obj->setLotSerieAutre(true);
        $this->assertEquals(true, $obj->getLotSerieAutre());
    }

    /**
     * Tests setMargeMini()
     *
     * @return void
     */
    public function testSetMargeMini(): void {

        $obj = new Articles();

        $obj->setMargeMini(10.092018);
        $this->assertEquals(10.092018, $obj->getMargeMini());
    }

    /**
     * Tests setMiniFacturable()
     *
     * @return void
     */
    public function testSetMiniFacturable(): void {

        $obj = new Articles();

        $obj->setMiniFacturable(10.092018);
        $this->assertEquals(10.092018, $obj->getMiniFacturable());
    }

    /**
     * Tests setModeleCodeBarre()
     *
     * @return void
     */
    public function testSetModeleCodeBarre(): void {

        $obj = new Articles();

        $obj->setModeleCodeBarre("modeleCodeBarre");
        $this->assertEquals("modeleCodeBarre", $obj->getModeleCodeBarre());
    }

    /**
     * Tests setModeleCodeBarreF()
     *
     * @return void
     */
    public function testSetModeleCodeBarreF(): void {

        $obj = new Articles();

        $obj->setModeleCodeBarreF("modeleCodeBarreF");
        $this->assertEquals("modeleCodeBarreF", $obj->getModeleCodeBarreF());
    }

    /**
     * Tests setMtSoumisTva2()
     *
     * @return void
     */
    public function testSetMtSoumisTva2(): void {

        $obj = new Articles();

        $obj->setMtSoumisTva2(10.092018);
        $this->assertEquals(10.092018, $obj->getMtSoumisTva2());
    }

    /**
     * Tests setMtTare()
     *
     * @return void
     */
    public function testSetMtTare(): void {

        $obj = new Articles();

        $obj->setMtTare(10.092018);
        $this->assertEquals(10.092018, $obj->getMtTare());
    }

    /**
     * Tests setMultiTvaAvecRemises()
     *
     * @return void
     */
    public function testSetMultiTvaAvecRemises(): void {

        $obj = new Articles();

        $obj->setMultiTvaAvecRemises(true);
        $this->assertEquals(true, $obj->getMultiTvaAvecRemises());
    }

    /**
     * Tests setNatureProduit()
     *
     * @return void
     */
    public function testSetNatureProduit(): void {

        $obj = new Articles();

        $obj->setNatureProduit("natureProduit");
        $this->assertEquals("natureProduit", $obj->getNatureProduit());
    }

    /**
     * Tests setNbHeures()
     *
     * @return void
     */
    public function testSetNbHeures(): void {

        $obj = new Articles();

        $obj->setNbHeures(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures());
    }

    /**
     * Tests setNePasCumulerStats()
     *
     * @return void
     */
    public function testSetNePasCumulerStats(): void {

        $obj = new Articles();

        $obj->setNePasCumulerStats(true);
        $this->assertEquals(true, $obj->getNePasCumulerStats());
    }

    /**
     * Tests setNePasEditer()
     *
     * @return void
     */
    public function testSetNePasEditer(): void {

        $obj = new Articles();

        $obj->setNePasEditer(true);
        $this->assertEquals(true, $obj->getNePasEditer());
    }

    /**
     * Tests setNePlusCommander()
     *
     * @return void
     */
    public function testSetNePlusCommander(): void {

        $obj = new Articles();

        $obj->setNePlusCommander(true);
        $this->assertEquals(true, $obj->getNePlusCommander());
    }

    /**
     * Tests setNeutre()
     *
     * @return void
     */
    public function testSetNeutre(): void {

        $obj = new Articles();

        $obj->setNeutre(true);
        $this->assertEquals(true, $obj->getNeutre());
    }

    /**
     * Tests setNiveauApparition()
     *
     * @return void
     */
    public function testSetNiveauApparition(): void {

        $obj = new Articles();

        $obj->setNiveauApparition(10);
        $this->assertEquals(10, $obj->getNiveauApparition());
    }

    /**
     * Tests setNiveauTotalisation()
     *
     * @return void
     */
    public function testSetNiveauTotalisation(): void {

        $obj = new Articles();

        $obj->setNiveauTotalisation("niveauTotalisation");
        $this->assertEquals("niveauTotalisation", $obj->getNiveauTotalisation());
    }

    /**
     * Tests setNomenclatureEnsemble()
     *
     * @return void
     */
    public function testSetNomenclatureEnsemble(): void {

        $obj = new Articles();

        $obj->setNomenclatureEnsemble(true);
        $this->assertEquals(true, $obj->getNomenclatureEnsemble());
    }

    /**
     * Tests setNomenclatureEurope()
     *
     * @return void
     */
    public function testSetNomenclatureEurope(): void {

        $obj = new Articles();

        $obj->setNomenclatureEurope("nomenclatureEurope");
        $this->assertEquals("nomenclatureEurope", $obj->getNomenclatureEurope());
    }

    /**
     * Tests setNumCompteAchat()
     *
     * @return void
     */
    public function testSetNumCompteAchat(): void {

        $obj = new Articles();

        $obj->setNumCompteAchat("numCompteAchat");
        $this->assertEquals("numCompteAchat", $obj->getNumCompteAchat());
    }

    /**
     * Tests setNumCompteVente()
     *
     * @return void
     */
    public function testSetNumCompteVente(): void {

        $obj = new Articles();

        $obj->setNumCompteVente("numCompteVente");
        $this->assertEquals("numCompteVente", $obj->getNumCompteVente());
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
     * Tests setParamCde()
     *
     * @return void
     */
    public function testSetParamCde(): void {

        $obj = new Articles();

        $obj->setParamCde(10.092018);
        $this->assertEquals(10.092018, $obj->getParamCde());
    }

    /**
     * Tests setPoidsUnitaire()
     *
     * @return void
     */
    public function testSetPoidsUnitaire(): void {

        $obj = new Articles();

        $obj->setPoidsUnitaire(10.092018);
        $this->assertEquals(10.092018, $obj->getPoidsUnitaire());
    }

    /**
     * Tests setPrixAchatCkp()
     *
     * @return void
     */
    public function testSetPrixAchatCkp(): void {

        $obj = new Articles();

        $obj->setPrixAchatCkp("prixAchatCkp");
        $this->assertEquals("prixAchatCkp", $obj->getPrixAchatCkp());
    }

    /**
     * Tests setPrixFixe()
     *
     * @return void
     */
    public function testSetPrixFixe(): void {

        $obj = new Articles();

        $obj->setPrixFixe(true);
        $this->assertEquals(true, $obj->getPrixFixe());
    }

    /**
     * Tests setPrixMini()
     *
     * @return void
     */
    public function testSetPrixMini(): void {

        $obj = new Articles();

        $obj->setPrixMini(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixMini());
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
     * Tests setPrixRevientNet()
     *
     * @return void
     */
    public function testSetPrixRevientNet(): void {

        $obj = new Articles();

        $obj->setPrixRevientNet(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixRevientNet());
    }

    /**
     * Tests setPrixVenteCkp()
     *
     * @return void
     */
    public function testSetPrixVenteCkp(): void {

        $obj = new Articles();

        $obj->setPrixVenteCkp("prixVenteCkp");
        $this->assertEquals("prixVenteCkp", $obj->getPrixVenteCkp());
    }

    /**
     * Tests setPrmp()
     *
     * @return void
     */
    public function testSetPrmp(): void {

        $obj = new Articles();

        $obj->setPrmp(10.092018);
        $this->assertEquals(10.092018, $obj->getPrmp());
    }

    /**
     * Tests setProvenance()
     *
     * @return void
     */
    public function testSetProvenance(): void {

        $obj = new Articles();

        $obj->setProvenance("provenance");
        $this->assertEquals("provenance", $obj->getProvenance());
    }

    /**
     * Tests setPxAchatBrut()
     *
     * @return void
     */
    public function testSetPxAchatBrut(): void {

        $obj = new Articles();

        $obj->setPxAchatBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getPxAchatBrut());
    }

    /**
     * Tests setPxAchatColis()
     *
     * @return void
     */
    public function testSetPxAchatColis(): void {

        $obj = new Articles();

        $obj->setPxAchatColis(true);
        $this->assertEquals(true, $obj->getPxAchatColis());
    }

    /**
     * Tests setPxAchatEnDevise()
     *
     * @return void
     */
    public function testSetPxAchatEnDevise(): void {

        $obj = new Articles();

        $obj->setPxAchatEnDevise(10.092018);
        $this->assertEquals(10.092018, $obj->getPxAchatEnDevise());
    }

    /**
     * Tests setPxUnitAEditer()
     *
     * @return void
     */
    public function testSetPxUnitAEditer(): void {

        $obj = new Articles();

        $obj->setPxUnitAEditer(true);
        $this->assertEquals(true, $obj->getPxUnitAEditer());
    }

    /**
     * Tests setPxVenteColis()
     *
     * @return void
     */
    public function testSetPxVenteColis(): void {

        $obj = new Articles();

        $obj->setPxVenteColis(true);
        $this->assertEquals(true, $obj->getPxVenteColis());
    }

    /**
     * Tests setPxVenteHtEuro()
     *
     * @return void
     */
    public function testSetPxVenteHtEuro(): void {

        $obj = new Articles();

        $obj->setPxVenteHtEuro(10.092018);
        $this->assertEquals(10.092018, $obj->getPxVenteHtEuro());
    }

    /**
     * Tests setPxVenteHtFrf()
     *
     * @return void
     */
    public function testSetPxVenteHtFrf(): void {

        $obj = new Articles();

        $obj->setPxVenteHtFrf(10.092018);
        $this->assertEquals(10.092018, $obj->getPxVenteHtFrf());
    }

    /**
     * Tests setPxVenteTtcEuro()
     *
     * @return void
     */
    public function testSetPxVenteTtcEuro(): void {

        $obj = new Articles();

        $obj->setPxVenteTtcEuro(10.092018);
        $this->assertEquals(10.092018, $obj->getPxVenteTtcEuro());
    }

    /**
     * Tests setPxVenteTtcFrf()
     *
     * @return void
     */
    public function testSetPxVenteTtcFrf(): void {

        $obj = new Articles();

        $obj->setPxVenteTtcFrf(10.092018);
        $this->assertEquals(10.092018, $obj->getPxVenteTtcFrf());
    }

    /**
     * Tests setQteAEditer()
     *
     * @return void
     */
    public function testSetQteAEditer(): void {

        $obj = new Articles();

        $obj->setQteAEditer(true);
        $this->assertEquals(true, $obj->getQteAEditer());
    }

    /**
     * Tests setQteEcoCommande()
     *
     * @return void
     */
    public function testSetQteEcoCommande(): void {

        $obj = new Articles();

        $obj->setQteEcoCommande(10.092018);
        $this->assertEquals(10.092018, $obj->getQteEcoCommande());
    }

    /**
     * Tests setQteHabCommande()
     *
     * @return void
     */
    public function testSetQteHabCommande(): void {

        $obj = new Articles();

        $obj->setQteHabCommande(10.092018);
        $this->assertEquals(10.092018, $obj->getQteHabCommande());
    }

    /**
     * Tests setQteMaxFacture()
     *
     * @return void
     */
    public function testSetQteMaxFacture(): void {

        $obj = new Articles();

        $obj->setQteMaxFacture(10.092018);
        $this->assertEquals(10.092018, $obj->getQteMaxFacture());
    }

    /**
     * Tests setQteMinCommande()
     *
     * @return void
     */
    public function testSetQteMinCommande(): void {

        $obj = new Articles();

        $obj->setQteMinCommande(10.092018);
        $this->assertEquals(10.092018, $obj->getQteMinCommande());
    }

    /**
     * Tests setRegroupFact()
     *
     * @return void
     */
    public function testSetRegroupFact(): void {

        $obj = new Articles();

        $obj->setRegroupFact("regroupFact");
        $this->assertEquals("regroupFact", $obj->getRegroupFact());
    }

    /**
     * Tests setRegroupFactTp()
     *
     * @return void
     */
    public function testSetRegroupFactTp(): void {

        $obj = new Articles();

        $obj->setRegroupFactTp(10);
        $this->assertEquals(10, $obj->getRegroupFactTp());
    }

    /**
     * Tests setRemise1enMontant()
     *
     * @return void
     */
    public function testSetRemise1enMontant(): void {

        $obj = new Articles();

        $obj->setRemise1enMontant(true);
        $this->assertEquals(true, $obj->getRemise1enMontant());
    }

    /**
     * Tests setRemise2enMontant()
     *
     * @return void
     */
    public function testSetRemise2enMontant(): void {

        $obj = new Articles();

        $obj->setRemise2enMontant(true);
        $this->assertEquals(true, $obj->getRemise2enMontant());
    }

    /**
     * Tests setRemiseAchat1()
     *
     * @return void
     */
    public function testSetRemiseAchat1(): void {

        $obj = new Articles();

        $obj->setRemiseAchat1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseAchat1());
    }

    /**
     * Tests setRemiseAchat2()
     *
     * @return void
     */
    public function testSetRemiseAchat2(): void {

        $obj = new Articles();

        $obj->setRemiseAchat2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseAchat2());
    }

    /**
     * Tests setRemiseAchat3()
     *
     * @return void
     */
    public function testSetRemiseAchat3(): void {

        $obj = new Articles();

        $obj->setRemiseAchat3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseAchat3());
    }

    /**
     * Tests setRemiseSupAchat1()
     *
     * @return void
     */
    public function testSetRemiseSupAchat1(): void {

        $obj = new Articles();

        $obj->setRemiseSupAchat1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseSupAchat1());
    }

    /**
     * Tests setRemiseSupAchat1EnMontant()
     *
     * @return void
     */
    public function testSetRemiseSupAchat1EnMontant(): void {

        $obj = new Articles();

        $obj->setRemiseSupAchat1EnMontant(true);
        $this->assertEquals(true, $obj->getRemiseSupAchat1EnMontant());
    }

    /**
     * Tests setRemiseSupAchat2()
     *
     * @return void
     */
    public function testSetRemiseSupAchat2(): void {

        $obj = new Articles();

        $obj->setRemiseSupAchat2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseSupAchat2());
    }

    /**
     * Tests setRemiseSupAchat2EnMontant()
     *
     * @return void
     */
    public function testSetRemiseSupAchat2EnMontant(): void {

        $obj = new Articles();

        $obj->setRemiseSupAchat2EnMontant(true);
        $this->assertEquals(true, $obj->getRemiseSupAchat2EnMontant());
    }

    /**
     * Tests setRemiseSupAchat3()
     *
     * @return void
     */
    public function testSetRemiseSupAchat3(): void {

        $obj = new Articles();

        $obj->setRemiseSupAchat3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseSupAchat3());
    }

    /**
     * Tests setRemiseSupAchat3EnMontant()
     *
     * @return void
     */
    public function testSetRemiseSupAchat3EnMontant(): void {

        $obj = new Articles();

        $obj->setRemiseSupAchat3EnMontant(true);
        $this->assertEquals(true, $obj->getRemiseSupAchat3EnMontant());
    }

    /**
     * Tests setRemisesInterdites()
     *
     * @return void
     */
    public function testSetRemisesInterdites(): void {

        $obj = new Articles();

        $obj->setRemisesInterdites(true);
        $this->assertEquals(true, $obj->getRemisesInterdites());
    }

    /**
     * Tests setSoumisCertif()
     *
     * @return void
     */
    public function testSetSoumisCertif(): void {

        $obj = new Articles();

        $obj->setSoumisCertif(true);
        $this->assertEquals(true, $obj->getSoumisCertif());
    }

    /**
     * Tests setSsFamilleAchat()
     *
     * @return void
     */
    public function testSetSsFamilleAchat(): void {

        $obj = new Articles();

        $obj->setSsFamilleAchat("ssFamilleAchat");
        $this->assertEquals("ssFamilleAchat", $obj->getSsFamilleAchat());
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
     * Tests setTareVat()
     *
     * @return void
     */
    public function testSetTareVat(): void {

        $obj = new Articles();

        $obj->setTareVat("tareVat");
        $this->assertEquals("tareVat", $obj->getTareVat());
    }

    /**
     * Tests setTauxAlcool()
     *
     * @return void
     */
    public function testSetTauxAlcool(): void {

        $obj = new Articles();

        $obj->setTauxAlcool(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxAlcool());
    }

    /**
     * Tests setTauxDeviseAchat()
     *
     * @return void
     */
    public function testSetTauxDeviseAchat(): void {

        $obj = new Articles();

        $obj->setTauxDeviseAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxDeviseAchat());
    }

    /**
     * Tests setTvaEncaissement()
     *
     * @return void
     */
    public function testSetTvaEncaissement(): void {

        $obj = new Articles();

        $obj->setTvaEncaissement(true);
        $this->assertEquals(true, $obj->getTvaEncaissement());
    }

    /**
     * Tests setTxCommission()
     *
     * @return void
     */
    public function testSetTxCommission(): void {

        $obj = new Articles();

        $obj->setTxCommission(10.092018);
        $this->assertEquals(10.092018, $obj->getTxCommission());
    }

    /**
     * Tests setTypeArrondi()
     *
     * @return void
     */
    public function testSetTypeArrondi(): void {

        $obj = new Articles();

        $obj->setTypeArrondi("typeArrondi");
        $this->assertEquals("typeArrondi", $obj->getTypeArrondi());
    }

    /**
     * Tests setTypeHeure()
     *
     * @return void
     */
    public function testSetTypeHeure(): void {

        $obj = new Articles();

        $obj->setTypeHeure(true);
        $this->assertEquals(true, $obj->getTypeHeure());
    }

    /**
     * Tests setTypeUnite()
     *
     * @return void
     */
    public function testSetTypeUnite(): void {

        $obj = new Articles();

        $obj->setTypeUnite("typeUnite");
        $this->assertEquals("typeUnite", $obj->getTypeUnite());
    }

    /**
     * Tests setUniteActivite()
     *
     * @return void
     */
    public function testSetUniteActivite(): void {

        $obj = new Articles();

        $obj->setUniteActivite(true);
        $this->assertEquals(true, $obj->getUniteActivite());
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
     * Tests setVenteParColis()
     *
     * @return void
     */
    public function testSetVenteParColis(): void {

        $obj = new Articles();

        $obj->setVenteParColis(true);
        $this->assertEquals(true, $obj->getVenteParColis());
    }

    /**
     * Tests setVolume()
     *
     * @return void
     */
    public function testSetVolume(): void {

        $obj = new Articles();

        $obj->setVolume(10.092018);
        $this->assertEquals(10.092018, $obj->getVolume());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Articles();

        $this->assertNull($obj->getAchatParColis());
        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getAlleeCasier());
        $this->assertNull($obj->getArticleFrais());
        $this->assertNull($obj->getArticleRattache());
        $this->assertNull($obj->getArticleRegroupement());
        $this->assertNull($obj->getArticleRemplacement());
        $this->assertNull($obj->getArticleTaxe1());
        $this->assertNull($obj->getArticleTaxe2());
        $this->assertNull($obj->getArticleTaxe3());
        $this->assertNull($obj->getArticleTaxe4());
        $this->assertNull($obj->getArticleTaxe5());
        $this->assertNull($obj->getCalculCoeffPaPv());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeArticle2());
        $this->assertNull($obj->getCodeDeviseAchat());
        $this->assertNull($obj->getCodeFamille());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getCodeGamme());
        $this->assertNull($obj->getCodeGrilleGamme());
        $this->assertNull($obj->getCodeHonoraire());
        $this->assertNull($obj->getCodeImputationAnalytique());
        $this->assertNull($obj->getCodePresentation());
        $this->assertNull($obj->getCodeSsFamille());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCodeTarifArt());
        $this->assertNull($obj->getCodeTaxe());
        $this->assertNull($obj->getCodeTvaAchat());
        $this->assertNull($obj->getCodeTvaVente());
        $this->assertNull($obj->getCodeTvaVente2());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getCodeVentilAchat());
        $this->assertNull($obj->getCodeVentilVente());
        $this->assertNull($obj->getCodeVentilVente2());
        $this->assertNull($obj->getCoeffPvPa());
        $this->assertNull($obj->getCoeffSurPxAchat());
        $this->assertNull($obj->getCoeffSurPxAchatBrut());
        $this->assertNull($obj->getColisageAchat());
        $this->assertNull($obj->getColisagePxAchat());
        $this->assertNull($obj->getColisagePxVente());
        $this->assertNull($obj->getColisageVente());
        $this->assertNull($obj->getCommissionUnique());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getConditionnement1());
        $this->assertNull($obj->getConditionnement2());
        $this->assertNull($obj->getConditionnement3());
        $this->assertNull($obj->getContremarqueInterdite());
        $this->assertNull($obj->getCoutSupp());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDebour());
        $this->assertNull($obj->getDernierPxAchat());
        $this->assertNull($obj->getDesignationApres());
        $this->assertNull($obj->getDesignationAvant());
        $this->assertNull($obj->getEditerArticleRattache());
        $this->assertNull($obj->getEditerArticleRemplacement());
        $this->assertNull($obj->getEnsemble());
        $this->assertNull($obj->getEstMultiTva());
        $this->assertNull($obj->getEstOccasion());
        $this->assertNull($obj->getFacturationTtc());
        $this->assertNull($obj->getFamilleAchat());
        $this->assertNull($obj->getFrais1());
        $this->assertNull($obj->getFrais2());
        $this->assertNull($obj->getFrais3());
        $this->assertNull($obj->getHaCoeffPvPa());
        $this->assertNull($obj->getHaCoeffSurPxAchat());
        $this->assertNull($obj->getHaDatePa());
        $this->assertNull($obj->getHaDatePv());
        $this->assertNull($obj->getHaDernierPxAchat());
        $this->assertNull($obj->getHaPrixRevient());
        $this->assertNull($obj->getHaPrixRevientNet());
        $this->assertNull($obj->getHaPrixVente());
        $this->assertNull($obj->getHaPxAchatBrut());
        $this->assertNull($obj->getHaRemiseAchat1());
        $this->assertNull($obj->getHaRemiseAchat2());
        $this->assertNull($obj->getHaRemiseAchat3());
        $this->assertNull($obj->getHaRemiseSupAchat1());
        $this->assertNull($obj->getHaRemiseSupAchat2());
        $this->assertNull($obj->getHaRemiseSupAchat3());
        $this->assertNull($obj->getHauteur());
        $this->assertNull($obj->getHonoraires());
        $this->assertNull($obj->getHonorairesUniquement());
        $this->assertNull($obj->getHorsStock());
        $this->assertNull($obj->getIntitule1());
        $this->assertNull($obj->getIntitule2());
        $this->assertNull($obj->getIntitule3());
        $this->assertNull($obj->getIntitule4());
        $this->assertNull($obj->getLargeur());
        $this->assertNull($obj->getLibelleInterne());
        $this->assertNull($obj->getLongueur());
        $this->assertNull($obj->getLotSerieAutre());
        $this->assertNull($obj->getMargeMini());
        $this->assertNull($obj->getMiniFacturable());
        $this->assertNull($obj->getModeleCodeBarre());
        $this->assertNull($obj->getModeleCodeBarreF());
        $this->assertNull($obj->getMtSoumisTva2());
        $this->assertNull($obj->getMtTare());
        $this->assertNull($obj->getMultiTvaAvecRemises());
        $this->assertNull($obj->getNatureProduit());
        $this->assertNull($obj->getNbHeures());
        $this->assertNull($obj->getNePasCumulerStats());
        $this->assertNull($obj->getNePasEditer());
        $this->assertNull($obj->getNePlusCommander());
        $this->assertNull($obj->getNeutre());
        $this->assertNull($obj->getNiveauApparition());
        $this->assertNull($obj->getNiveauTotalisation());
        $this->assertNull($obj->getNomenclatureEnsemble());
        $this->assertNull($obj->getNomenclatureEurope());
        $this->assertNull($obj->getNumCompteAchat());
        $this->assertNull($obj->getNumCompteVente());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getPamp());
        $this->assertNull($obj->getPrmp());
        $this->assertNull($obj->getParamCde());
        $this->assertNull($obj->getPoidsUnitaire());
        $this->assertNull($obj->getPrixAchatCkp());
        $this->assertNull($obj->getPrixFixe());
        $this->assertNull($obj->getPrixMini());
        $this->assertNull($obj->getPrixNet());
        $this->assertNull($obj->getPrixRevient());
        $this->assertNull($obj->getPrixRevientNet());
        $this->assertNull($obj->getPrixVenteCkp());
        $this->assertNull($obj->getProvenance());
        $this->assertNull($obj->getPxAchatBrut());
        $this->assertNull($obj->getPxAchatColis());
        $this->assertNull($obj->getPxAchatEnDevise());
        $this->assertNull($obj->getPxUnitAEditer());
        $this->assertNull($obj->getPxVenteColis());
        $this->assertNull($obj->getPxVenteHtEuro());
        $this->assertNull($obj->getPxVenteHtFrf());
        $this->assertNull($obj->getPxVenteTtcEuro());
        $this->assertNull($obj->getPxVenteTtcFrf());
        $this->assertNull($obj->getQteAEditer());
        $this->assertNull($obj->getQteEcoCommande());
        $this->assertNull($obj->getQteHabCommande());
        $this->assertNull($obj->getQteMaxFacture());
        $this->assertNull($obj->getQteMinCommande());
        $this->assertNull($obj->getRegroupFact());
        $this->assertNull($obj->getRegroupFactTp());
        $this->assertNull($obj->getRemise1enMontant());
        $this->assertNull($obj->getRemise2enMontant());
        $this->assertNull($obj->getRemiseAchat1());
        $this->assertNull($obj->getRemiseAchat2());
        $this->assertNull($obj->getRemiseAchat3());
        $this->assertNull($obj->getRemiseSupAchat1());
        $this->assertNull($obj->getRemiseSupAchat1EnMontant());
        $this->assertNull($obj->getRemiseSupAchat2());
        $this->assertNull($obj->getRemiseSupAchat2EnMontant());
        $this->assertNull($obj->getRemiseSupAchat3());
        $this->assertNull($obj->getRemiseSupAchat3EnMontant());
        $this->assertNull($obj->getRemisesInterdites());
        $this->assertNull($obj->getSoumisCertif());
        $this->assertNull($obj->getSsFamilleAchat());
        $this->assertNull($obj->getSuiviStock());
        $this->assertNull($obj->getTareVat());
        $this->assertNull($obj->getTauxAlcool());
        $this->assertNull($obj->getTauxDeviseAchat());
        $this->assertNull($obj->getTvaEncaissement());
        $this->assertNull($obj->getTxCommission());
        $this->assertNull($obj->getTypeArrondi());
        $this->assertNull($obj->getTypeHeure());
        $this->assertNull($obj->getTypeUnite());
        $this->assertNull($obj->getUniteActivite());
        $this->assertNull($obj->getVariante());
        $this->assertNull($obj->getVenteParColis());
        $this->assertNull($obj->getVolume());
    }
}
