<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QGI\Articles;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Articles model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class ArticlesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

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
		$this->assertNull($obj->getFacturationTTC());
		$this->assertNull($obj->getFamilleAchat());
		$this->assertNull($obj->getFrais1());
		$this->assertNull($obj->getFrais2());
		$this->assertNull($obj->getFrais3());
		$this->assertNull($obj->getHA_CoeffPvPA());
		$this->assertNull($obj->getHA_CoeffSurPxAchat());
		$this->assertNull($obj->getHA_DatePA());
		$this->assertNull($obj->getHA_DatePV());
		$this->assertNull($obj->getHA_DernierPxAchat());
		$this->assertNull($obj->getHA_PrixRevient());
		$this->assertNull($obj->getHA_PrixRevientNet());
		$this->assertNull($obj->getHA_PrixVente());
		$this->assertNull($obj->getHA_PxAchatBrut());
		$this->assertNull($obj->getHA_RemiseAchat1());
		$this->assertNull($obj->getHA_RemiseAchat2());
		$this->assertNull($obj->getHA_RemiseAchat3());
		$this->assertNull($obj->getHA_RemiseSupAchat1());
		$this->assertNull($obj->getHA_RemiseSupAchat2());
		$this->assertNull($obj->getHA_RemiseSupAchat3());
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
		$this->assertNull($obj->getMargeMINI());
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
		$this->assertNull($obj->getNumeroPJ());
		$this->assertNull($obj->getPAMP());
		$this->assertNull($obj->getPRMP());
		$this->assertNull($obj->getParamCDE());
		$this->assertNull($obj->getPoidsUnitaire());
		$this->assertNull($obj->getPrixAchat_CKP());
		$this->assertNull($obj->getPrixFixe());
		$this->assertNull($obj->getPrixMINI());
		$this->assertNull($obj->getPrixNet());
		$this->assertNull($obj->getPrixRevient());
		$this->assertNull($obj->getPrixRevientNet());
		$this->assertNull($obj->getPrixVente_CKP());
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
		$this->assertNull($obj->getRegroupFactTP());
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
		$this->assertNull($obj->getTare_VAT());
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

	/**
	 * Tests the setAchatParColis() method.
	 *
	 * @return void
	 */
	public function testSetAchatParColis() {

		$obj = new Articles();

		$obj->setAchatParColis(true);
		$this->assertEquals(true, $obj->getAchatParColis());
	}

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
	 * Tests the setAlleeCasier() method.
	 *
	 * @return void
	 */
	public function testSetAlleeCasier() {

		$obj = new Articles();

		$obj->setAlleeCasier("alleeCasier");
		$this->assertEquals("alleeCasier", $obj->getAlleeCasier());
	}

	/**
	 * Tests the setArticleFrais() method.
	 *
	 * @return void
	 */
	public function testSetArticleFrais() {

		$obj = new Articles();

		$obj->setArticleFrais(true);
		$this->assertEquals(true, $obj->getArticleFrais());
	}

	/**
	 * Tests the setArticleRattache() method.
	 *
	 * @return void
	 */
	public function testSetArticleRattache() {

		$obj = new Articles();

		$obj->setArticleRattache("articleRattache");
		$this->assertEquals("articleRattache", $obj->getArticleRattache());
	}

	/**
	 * Tests the setArticleRegroupement() method.
	 *
	 * @return void
	 */
	public function testSetArticleRegroupement() {

		$obj = new Articles();

		$obj->setArticleRegroupement("articleRegroupement");
		$this->assertEquals("articleRegroupement", $obj->getArticleRegroupement());
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
	 * Tests the setArticleTaxe1() method.
	 *
	 * @return void
	 */
	public function testSetArticleTaxe1() {

		$obj = new Articles();

		$obj->setArticleTaxe1("articleTaxe1");
		$this->assertEquals("articleTaxe1", $obj->getArticleTaxe1());
	}

	/**
	 * Tests the setArticleTaxe2() method.
	 *
	 * @return void
	 */
	public function testSetArticleTaxe2() {

		$obj = new Articles();

		$obj->setArticleTaxe2("articleTaxe2");
		$this->assertEquals("articleTaxe2", $obj->getArticleTaxe2());
	}

	/**
	 * Tests the setArticleTaxe3() method.
	 *
	 * @return void
	 */
	public function testSetArticleTaxe3() {

		$obj = new Articles();

		$obj->setArticleTaxe3("articleTaxe3");
		$this->assertEquals("articleTaxe3", $obj->getArticleTaxe3());
	}

	/**
	 * Tests the setArticleTaxe4() method.
	 *
	 * @return void
	 */
	public function testSetArticleTaxe4() {

		$obj = new Articles();

		$obj->setArticleTaxe4("articleTaxe4");
		$this->assertEquals("articleTaxe4", $obj->getArticleTaxe4());
	}

	/**
	 * Tests the setArticleTaxe5() method.
	 *
	 * @return void
	 */
	public function testSetArticleTaxe5() {

		$obj = new Articles();

		$obj->setArticleTaxe5("articleTaxe5");
		$this->assertEquals("articleTaxe5", $obj->getArticleTaxe5());
	}

	/**
	 * Tests the setCalculCoeffPaPv() method.
	 *
	 * @return void
	 */
	public function testSetCalculCoeffPaPv() {

		$obj = new Articles();

		$obj->setCalculCoeffPaPv(true);
		$this->assertEquals(true, $obj->getCalculCoeffPaPv());
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
	 * Tests the setCodeArticle2() method.
	 *
	 * @return void
	 */
	public function testSetCodeArticle2() {

		$obj = new Articles();

		$obj->setCodeArticle2("codeArticle2");
		$this->assertEquals("codeArticle2", $obj->getCodeArticle2());
	}

	/**
	 * Tests the setCodeDeviseAchat() method.
	 *
	 * @return void
	 */
	public function testSetCodeDeviseAchat() {

		$obj = new Articles();

		$obj->setCodeDeviseAchat("codeDeviseAchat");
		$this->assertEquals("codeDeviseAchat", $obj->getCodeDeviseAchat());
	}

	/**
	 * Tests the setCodeFamille() method.
	 *
	 * @return void
	 */
	public function testSetCodeFamille() {

		$obj = new Articles();

		$obj->setCodeFamille("codeFamille");
		$this->assertEquals("codeFamille", $obj->getCodeFamille());
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
	 * Tests the setCodeGamme() method.
	 *
	 * @return void
	 */
	public function testSetCodeGamme() {

		$obj = new Articles();

		$obj->setCodeGamme("codeGamme");
		$this->assertEquals("codeGamme", $obj->getCodeGamme());
	}

	/**
	 * Tests the setCodeGrilleGamme() method.
	 *
	 * @return void
	 */
	public function testSetCodeGrilleGamme() {

		$obj = new Articles();

		$obj->setCodeGrilleGamme("codeGrilleGamme");
		$this->assertEquals("codeGrilleGamme", $obj->getCodeGrilleGamme());
	}

	/**
	 * Tests the setCodeHonoraire() method.
	 *
	 * @return void
	 */
	public function testSetCodeHonoraire() {

		$obj = new Articles();

		$obj->setCodeHonoraire("codeHonoraire");
		$this->assertEquals("codeHonoraire", $obj->getCodeHonoraire());
	}

	/**
	 * Tests the setCodeImputationAnalytique() method.
	 *
	 * @return void
	 */
	public function testSetCodeImputationAnalytique() {

		$obj = new Articles();

		$obj->setCodeImputationAnalytique("codeImputationAnalytique");
		$this->assertEquals("codeImputationAnalytique", $obj->getCodeImputationAnalytique());
	}

	/**
	 * Tests the setCodePresentation() method.
	 *
	 * @return void
	 */
	public function testSetCodePresentation() {

		$obj = new Articles();

		$obj->setCodePresentation("codePresentation");
		$this->assertEquals("codePresentation", $obj->getCodePresentation());
	}

	/**
	 * Tests the setCodeSsFamille() method.
	 *
	 * @return void
	 */
	public function testSetCodeSsFamille() {

		$obj = new Articles();

		$obj->setCodeSsFamille("codeSsFamille");
		$this->assertEquals("codeSsFamille", $obj->getCodeSsFamille());
	}

	/**
	 * Tests the setCodeTache() method.
	 *
	 * @return void
	 */
	public function testSetCodeTache() {

		$obj = new Articles();

		$obj->setCodeTache("codeTache");
		$this->assertEquals("codeTache", $obj->getCodeTache());
	}

	/**
	 * Tests the setCodeTarifArt() method.
	 *
	 * @return void
	 */
	public function testSetCodeTarifArt() {

		$obj = new Articles();

		$obj->setCodeTarifArt("codeTarifArt");
		$this->assertEquals("codeTarifArt", $obj->getCodeTarifArt());
	}

	/**
	 * Tests the setCodeTaxe() method.
	 *
	 * @return void
	 */
	public function testSetCodeTaxe() {

		$obj = new Articles();

		$obj->setCodeTaxe("codeTaxe");
		$this->assertEquals("codeTaxe", $obj->getCodeTaxe());
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
	 * Tests the setCodeTvaVente2() method.
	 *
	 * @return void
	 */
	public function testSetCodeTvaVente2() {

		$obj = new Articles();

		$obj->setCodeTvaVente2("codeTvaVente2");
		$this->assertEquals("codeTvaVente2", $obj->getCodeTvaVente2());
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
	 * Tests the setCodeVentilVente2() method.
	 *
	 * @return void
	 */
	public function testSetCodeVentilVente2() {

		$obj = new Articles();

		$obj->setCodeVentilVente2("codeVentilVente2");
		$this->assertEquals("codeVentilVente2", $obj->getCodeVentilVente2());
	}

	/**
	 * Tests the setCoeffPvPa() method.
	 *
	 * @return void
	 */
	public function testSetCoeffPvPa() {

		$obj = new Articles();

		$obj->setCoeffPvPa(10.092018);
		$this->assertEquals(10.092018, $obj->getCoeffPvPa());
	}

	/**
	 * Tests the setCoeffSurPxAchat() method.
	 *
	 * @return void
	 */
	public function testSetCoeffSurPxAchat() {

		$obj = new Articles();

		$obj->setCoeffSurPxAchat("coeffSurPxAchat");
		$this->assertEquals("coeffSurPxAchat", $obj->getCoeffSurPxAchat());
	}

	/**
	 * Tests the setCoeffSurPxAchatBrut() method.
	 *
	 * @return void
	 */
	public function testSetCoeffSurPxAchatBrut() {

		$obj = new Articles();

		$obj->setCoeffSurPxAchatBrut(true);
		$this->assertEquals(true, $obj->getCoeffSurPxAchatBrut());
	}

	/**
	 * Tests the setColisageAchat() method.
	 *
	 * @return void
	 */
	public function testSetColisageAchat() {

		$obj = new Articles();

		$obj->setColisageAchat(10.092018);
		$this->assertEquals(10.092018, $obj->getColisageAchat());
	}

	/**
	 * Tests the setColisagePxAchat() method.
	 *
	 * @return void
	 */
	public function testSetColisagePxAchat() {

		$obj = new Articles();

		$obj->setColisagePxAchat(10.092018);
		$this->assertEquals(10.092018, $obj->getColisagePxAchat());
	}

	/**
	 * Tests the setColisagePxVente() method.
	 *
	 * @return void
	 */
	public function testSetColisagePxVente() {

		$obj = new Articles();

		$obj->setColisagePxVente(10.092018);
		$this->assertEquals(10.092018, $obj->getColisagePxVente());
	}

	/**
	 * Tests the setColisageVente() method.
	 *
	 * @return void
	 */
	public function testSetColisageVente() {

		$obj = new Articles();

		$obj->setColisageVente(10.092018);
		$this->assertEquals(10.092018, $obj->getColisageVente());
	}

	/**
	 * Tests the setCommissionUnique() method.
	 *
	 * @return void
	 */
	public function testSetCommissionUnique() {

		$obj = new Articles();

		$obj->setCommissionUnique(true);
		$this->assertEquals(true, $obj->getCommissionUnique());
	}

	/**
	 * Tests the setComplement() method.
	 *
	 * @return void
	 */
	public function testSetComplement() {

		$obj = new Articles();

		$obj->setComplement("complement");
		$this->assertEquals("complement", $obj->getComplement());
	}

	/**
	 * Tests the setConditionnement1() method.
	 *
	 * @return void
	 */
	public function testSetConditionnement1() {

		$obj = new Articles();

		$obj->setConditionnement1(10.092018);
		$this->assertEquals(10.092018, $obj->getConditionnement1());
	}

	/**
	 * Tests the setConditionnement2() method.
	 *
	 * @return void
	 */
	public function testSetConditionnement2() {

		$obj = new Articles();

		$obj->setConditionnement2(10.092018);
		$this->assertEquals(10.092018, $obj->getConditionnement2());
	}

	/**
	 * Tests the setConditionnement3() method.
	 *
	 * @return void
	 */
	public function testSetConditionnement3() {

		$obj = new Articles();

		$obj->setConditionnement3(10.092018);
		$this->assertEquals(10.092018, $obj->getConditionnement3());
	}

	/**
	 * Tests the setContremarqueInterdite() method.
	 *
	 * @return void
	 */
	public function testSetContremarqueInterdite() {

		$obj = new Articles();

		$obj->setContremarqueInterdite(true);
		$this->assertEquals(true, $obj->getContremarqueInterdite());
	}

	/**
	 * Tests the setCoutSupp() method.
	 *
	 * @return void
	 */
	public function testSetCoutSupp() {

		$obj = new Articles();

		$obj->setCoutSupp(10.092018);
		$this->assertEquals(10.092018, $obj->getCoutSupp());
	}

	/**
	 * Tests the setDateCreation() method.
	 *
	 * @return void
	 */
	public function testSetDateCreation() {

		$obj = new Articles();

		$obj->setDateCreation(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreation());
	}

	/**
	 * Tests the setDateModification() method.
	 *
	 * @return void
	 */
	public function testSetDateModification() {

		$obj = new Articles();

		$obj->setDateModification(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModification());
	}

	/**
	 * Tests the setDebour() method.
	 *
	 * @return void
	 */
	public function testSetDebour() {

		$obj = new Articles();

		$obj->setDebour(true);
		$this->assertEquals(true, $obj->getDebour());
	}

	/**
	 * Tests the setDernierPxAchat() method.
	 *
	 * @return void
	 */
	public function testSetDernierPxAchat() {

		$obj = new Articles();

		$obj->setDernierPxAchat(10.092018);
		$this->assertEquals(10.092018, $obj->getDernierPxAchat());
	}

	/**
	 * Tests the setDesignationApres() method.
	 *
	 * @return void
	 */
	public function testSetDesignationApres() {

		$obj = new Articles();

		$obj->setDesignationApres("designationApres");
		$this->assertEquals("designationApres", $obj->getDesignationApres());
	}

	/**
	 * Tests the setDesignationAvant() method.
	 *
	 * @return void
	 */
	public function testSetDesignationAvant() {

		$obj = new Articles();

		$obj->setDesignationAvant("designationAvant");
		$this->assertEquals("designationAvant", $obj->getDesignationAvant());
	}

	/**
	 * Tests the setEditerArticleRattache() method.
	 *
	 * @return void
	 */
	public function testSetEditerArticleRattache() {

		$obj = new Articles();

		$obj->setEditerArticleRattache(true);
		$this->assertEquals(true, $obj->getEditerArticleRattache());
	}

	/**
	 * Tests the setEditerArticleRemplacement() method.
	 *
	 * @return void
	 */
	public function testSetEditerArticleRemplacement() {

		$obj = new Articles();

		$obj->setEditerArticleRemplacement(true);
		$this->assertEquals(true, $obj->getEditerArticleRemplacement());
	}

	/**
	 * Tests the setEnsemble() method.
	 *
	 * @return void
	 */
	public function testSetEnsemble() {

		$obj = new Articles();

		$obj->setEnsemble(true);
		$this->assertEquals(true, $obj->getEnsemble());
	}

	/**
	 * Tests the setEstMultiTva() method.
	 *
	 * @return void
	 */
	public function testSetEstMultiTva() {

		$obj = new Articles();

		$obj->setEstMultiTva(true);
		$this->assertEquals(true, $obj->getEstMultiTva());
	}

	/**
	 * Tests the setEstOccasion() method.
	 *
	 * @return void
	 */
	public function testSetEstOccasion() {

		$obj = new Articles();

		$obj->setEstOccasion(true);
		$this->assertEquals(true, $obj->getEstOccasion());
	}

	/**
	 * Tests the setFacturationTTC() method.
	 *
	 * @return void
	 */
	public function testSetFacturationTTC() {

		$obj = new Articles();

		$obj->setFacturationTTC(true);
		$this->assertEquals(true, $obj->getFacturationTTC());
	}

	/**
	 * Tests the setFamilleAchat() method.
	 *
	 * @return void
	 */
	public function testSetFamilleAchat() {

		$obj = new Articles();

		$obj->setFamilleAchat("familleAchat");
		$this->assertEquals("familleAchat", $obj->getFamilleAchat());
	}

	/**
	 * Tests the setFrais1() method.
	 *
	 * @return void
	 */
	public function testSetFrais1() {

		$obj = new Articles();

		$obj->setFrais1(10.092018);
		$this->assertEquals(10.092018, $obj->getFrais1());
	}

	/**
	 * Tests the setFrais2() method.
	 *
	 * @return void
	 */
	public function testSetFrais2() {

		$obj = new Articles();

		$obj->setFrais2(10.092018);
		$this->assertEquals(10.092018, $obj->getFrais2());
	}

	/**
	 * Tests the setFrais3() method.
	 *
	 * @return void
	 */
	public function testSetFrais3() {

		$obj = new Articles();

		$obj->setFrais3(10.092018);
		$this->assertEquals(10.092018, $obj->getFrais3());
	}

	/**
	 * Tests the setHA_CoeffPvPA() method.
	 *
	 * @return void
	 */
	public function testSetHA_CoeffPvPA() {

		$obj = new Articles();

		$obj->setHA_CoeffPvPA(10.092018);
		$this->assertEquals(10.092018, $obj->getHA_CoeffPvPA());
	}

	/**
	 * Tests the setHA_CoeffSurPxAchat() method.
	 *
	 * @return void
	 */
	public function testSetHA_CoeffSurPxAchat() {

		$obj = new Articles();

		$obj->setHA_CoeffSurPxAchat("hA_CoeffSurPxAchat");
		$this->assertEquals("hA_CoeffSurPxAchat", $obj->getHA_CoeffSurPxAchat());
	}

	/**
	 * Tests the setHA_DatePA() method.
	 *
	 * @return void
	 */
	public function testSetHA_DatePA() {

		$obj = new Articles();

		$obj->setHA_DatePA(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getHA_DatePA());
	}

	/**
	 * Tests the setHA_DatePV() method.
	 *
	 * @return void
	 */
	public function testSetHA_DatePV() {

		$obj = new Articles();

		$obj->setHA_DatePV(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getHA_DatePV());
	}

	/**
	 * Tests the setHA_DernierPxAchat() method.
	 *
	 * @return void
	 */
	public function testSetHA_DernierPxAchat() {

		$obj = new Articles();

		$obj->setHA_DernierPxAchat(10.092018);
		$this->assertEquals(10.092018, $obj->getHA_DernierPxAchat());
	}

	/**
	 * Tests the setHA_PrixRevient() method.
	 *
	 * @return void
	 */
	public function testSetHA_PrixRevient() {

		$obj = new Articles();

		$obj->setHA_PrixRevient(10.092018);
		$this->assertEquals(10.092018, $obj->getHA_PrixRevient());
	}

	/**
	 * Tests the setHA_PrixRevientNet() method.
	 *
	 * @return void
	 */
	public function testSetHA_PrixRevientNet() {

		$obj = new Articles();

		$obj->setHA_PrixRevientNet(10.092018);
		$this->assertEquals(10.092018, $obj->getHA_PrixRevientNet());
	}

	/**
	 * Tests the setHA_PrixVente() method.
	 *
	 * @return void
	 */
	public function testSetHA_PrixVente() {

		$obj = new Articles();

		$obj->setHA_PrixVente(10.092018);
		$this->assertEquals(10.092018, $obj->getHA_PrixVente());
	}

	/**
	 * Tests the setHA_PxAchatBrut() method.
	 *
	 * @return void
	 */
	public function testSetHA_PxAchatBrut() {

		$obj = new Articles();

		$obj->setHA_PxAchatBrut(10.092018);
		$this->assertEquals(10.092018, $obj->getHA_PxAchatBrut());
	}

	/**
	 * Tests the setHA_RemiseAchat1() method.
	 *
	 * @return void
	 */
	public function testSetHA_RemiseAchat1() {

		$obj = new Articles();

		$obj->setHA_RemiseAchat1(10.092018);
		$this->assertEquals(10.092018, $obj->getHA_RemiseAchat1());
	}

	/**
	 * Tests the setHA_RemiseAchat2() method.
	 *
	 * @return void
	 */
	public function testSetHA_RemiseAchat2() {

		$obj = new Articles();

		$obj->setHA_RemiseAchat2(10.092018);
		$this->assertEquals(10.092018, $obj->getHA_RemiseAchat2());
	}

	/**
	 * Tests the setHA_RemiseAchat3() method.
	 *
	 * @return void
	 */
	public function testSetHA_RemiseAchat3() {

		$obj = new Articles();

		$obj->setHA_RemiseAchat3(10.092018);
		$this->assertEquals(10.092018, $obj->getHA_RemiseAchat3());
	}

	/**
	 * Tests the setHA_RemiseSupAchat1() method.
	 *
	 * @return void
	 */
	public function testSetHA_RemiseSupAchat1() {

		$obj = new Articles();

		$obj->setHA_RemiseSupAchat1(10.092018);
		$this->assertEquals(10.092018, $obj->getHA_RemiseSupAchat1());
	}

	/**
	 * Tests the setHA_RemiseSupAchat2() method.
	 *
	 * @return void
	 */
	public function testSetHA_RemiseSupAchat2() {

		$obj = new Articles();

		$obj->setHA_RemiseSupAchat2(10.092018);
		$this->assertEquals(10.092018, $obj->getHA_RemiseSupAchat2());
	}

	/**
	 * Tests the setHA_RemiseSupAchat3() method.
	 *
	 * @return void
	 */
	public function testSetHA_RemiseSupAchat3() {

		$obj = new Articles();

		$obj->setHA_RemiseSupAchat3(10.092018);
		$this->assertEquals(10.092018, $obj->getHA_RemiseSupAchat3());
	}

	/**
	 * Tests the setHauteur() method.
	 *
	 * @return void
	 */
	public function testSetHauteur() {

		$obj = new Articles();

		$obj->setHauteur(10.092018);
		$this->assertEquals(10.092018, $obj->getHauteur());
	}

	/**
	 * Tests the setHonoraires() method.
	 *
	 * @return void
	 */
	public function testSetHonoraires() {

		$obj = new Articles();

		$obj->setHonoraires(true);
		$this->assertEquals(true, $obj->getHonoraires());
	}

	/**
	 * Tests the setHonorairesUniquement() method.
	 *
	 * @return void
	 */
	public function testSetHonorairesUniquement() {

		$obj = new Articles();

		$obj->setHonorairesUniquement(true);
		$this->assertEquals(true, $obj->getHonorairesUniquement());
	}

	/**
	 * Tests the setHorsStock() method.
	 *
	 * @return void
	 */
	public function testSetHorsStock() {

		$obj = new Articles();

		$obj->setHorsStock(true);
		$this->assertEquals(true, $obj->getHorsStock());
	}

	/**
	 * Tests the setIntitule1() method.
	 *
	 * @return void
	 */
	public function testSetIntitule1() {

		$obj = new Articles();

		$obj->setIntitule1("intitule1");
		$this->assertEquals("intitule1", $obj->getIntitule1());
	}

	/**
	 * Tests the setIntitule2() method.
	 *
	 * @return void
	 */
	public function testSetIntitule2() {

		$obj = new Articles();

		$obj->setIntitule2("intitule2");
		$this->assertEquals("intitule2", $obj->getIntitule2());
	}

	/**
	 * Tests the setIntitule3() method.
	 *
	 * @return void
	 */
	public function testSetIntitule3() {

		$obj = new Articles();

		$obj->setIntitule3("intitule3");
		$this->assertEquals("intitule3", $obj->getIntitule3());
	}

	/**
	 * Tests the setIntitule4() method.
	 *
	 * @return void
	 */
	public function testSetIntitule4() {

		$obj = new Articles();

		$obj->setIntitule4("intitule4");
		$this->assertEquals("intitule4", $obj->getIntitule4());
	}

	/**
	 * Tests the setLargeur() method.
	 *
	 * @return void
	 */
	public function testSetLargeur() {

		$obj = new Articles();

		$obj->setLargeur(10.092018);
		$this->assertEquals(10.092018, $obj->getLargeur());
	}

	/**
	 * Tests the setLibelleInterne() method.
	 *
	 * @return void
	 */
	public function testSetLibelleInterne() {

		$obj = new Articles();

		$obj->setLibelleInterne("libelleInterne");
		$this->assertEquals("libelleInterne", $obj->getLibelleInterne());
	}

	/**
	 * Tests the setLongueur() method.
	 *
	 * @return void
	 */
	public function testSetLongueur() {

		$obj = new Articles();

		$obj->setLongueur(10.092018);
		$this->assertEquals(10.092018, $obj->getLongueur());
	}

	/**
	 * Tests the setLotSerieAutre() method.
	 *
	 * @return void
	 */
	public function testSetLotSerieAutre() {

		$obj = new Articles();

		$obj->setLotSerieAutre(true);
		$this->assertEquals(true, $obj->getLotSerieAutre());
	}

	/**
	 * Tests the setMargeMINI() method.
	 *
	 * @return void
	 */
	public function testSetMargeMINI() {

		$obj = new Articles();

		$obj->setMargeMINI(10.092018);
		$this->assertEquals(10.092018, $obj->getMargeMINI());
	}

	/**
	 * Tests the setMiniFacturable() method.
	 *
	 * @return void
	 */
	public function testSetMiniFacturable() {

		$obj = new Articles();

		$obj->setMiniFacturable(10.092018);
		$this->assertEquals(10.092018, $obj->getMiniFacturable());
	}

	/**
	 * Tests the setModeleCodeBarre() method.
	 *
	 * @return void
	 */
	public function testSetModeleCodeBarre() {

		$obj = new Articles();

		$obj->setModeleCodeBarre("modeleCodeBarre");
		$this->assertEquals("modeleCodeBarre", $obj->getModeleCodeBarre());
	}

	/**
	 * Tests the setModeleCodeBarreF() method.
	 *
	 * @return void
	 */
	public function testSetModeleCodeBarreF() {

		$obj = new Articles();

		$obj->setModeleCodeBarreF("modeleCodeBarreF");
		$this->assertEquals("modeleCodeBarreF", $obj->getModeleCodeBarreF());
	}

	/**
	 * Tests the setMtSoumisTva2() method.
	 *
	 * @return void
	 */
	public function testSetMtSoumisTva2() {

		$obj = new Articles();

		$obj->setMtSoumisTva2(10.092018);
		$this->assertEquals(10.092018, $obj->getMtSoumisTva2());
	}

	/**
	 * Tests the setMtTare() method.
	 *
	 * @return void
	 */
	public function testSetMtTare() {

		$obj = new Articles();

		$obj->setMtTare(10.092018);
		$this->assertEquals(10.092018, $obj->getMtTare());
	}

	/**
	 * Tests the setMultiTvaAvecRemises() method.
	 *
	 * @return void
	 */
	public function testSetMultiTvaAvecRemises() {

		$obj = new Articles();

		$obj->setMultiTvaAvecRemises(true);
		$this->assertEquals(true, $obj->getMultiTvaAvecRemises());
	}

	/**
	 * Tests the setNatureProduit() method.
	 *
	 * @return void
	 */
	public function testSetNatureProduit() {

		$obj = new Articles();

		$obj->setNatureProduit("natureProduit");
		$this->assertEquals("natureProduit", $obj->getNatureProduit());
	}

	/**
	 * Tests the setNbHeures() method.
	 *
	 * @return void
	 */
	public function testSetNbHeures() {

		$obj = new Articles();

		$obj->setNbHeures(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHeures());
	}

	/**
	 * Tests the setNePasCumulerStats() method.
	 *
	 * @return void
	 */
	public function testSetNePasCumulerStats() {

		$obj = new Articles();

		$obj->setNePasCumulerStats(true);
		$this->assertEquals(true, $obj->getNePasCumulerStats());
	}

	/**
	 * Tests the setNePasEditer() method.
	 *
	 * @return void
	 */
	public function testSetNePasEditer() {

		$obj = new Articles();

		$obj->setNePasEditer(true);
		$this->assertEquals(true, $obj->getNePasEditer());
	}

	/**
	 * Tests the setNePlusCommander() method.
	 *
	 * @return void
	 */
	public function testSetNePlusCommander() {

		$obj = new Articles();

		$obj->setNePlusCommander(true);
		$this->assertEquals(true, $obj->getNePlusCommander());
	}

	/**
	 * Tests the setNeutre() method.
	 *
	 * @return void
	 */
	public function testSetNeutre() {

		$obj = new Articles();

		$obj->setNeutre(true);
		$this->assertEquals(true, $obj->getNeutre());
	}

	/**
	 * Tests the setNiveauApparition() method.
	 *
	 * @return void
	 */
	public function testSetNiveauApparition() {

		$obj = new Articles();

		$obj->setNiveauApparition(10);
		$this->assertEquals(10, $obj->getNiveauApparition());
	}

	/**
	 * Tests the setNiveauTotalisation() method.
	 *
	 * @return void
	 */
	public function testSetNiveauTotalisation() {

		$obj = new Articles();

		$obj->setNiveauTotalisation("niveauTotalisation");
		$this->assertEquals("niveauTotalisation", $obj->getNiveauTotalisation());
	}

	/**
	 * Tests the setNomenclatureEnsemble() method.
	 *
	 * @return void
	 */
	public function testSetNomenclatureEnsemble() {

		$obj = new Articles();

		$obj->setNomenclatureEnsemble(true);
		$this->assertEquals(true, $obj->getNomenclatureEnsemble());
	}

	/**
	 * Tests the setNomenclatureEurope() method.
	 *
	 * @return void
	 */
	public function testSetNomenclatureEurope() {

		$obj = new Articles();

		$obj->setNomenclatureEurope("nomenclatureEurope");
		$this->assertEquals("nomenclatureEurope", $obj->getNomenclatureEurope());
	}

	/**
	 * Tests the setNumCompteAchat() method.
	 *
	 * @return void
	 */
	public function testSetNumCompteAchat() {

		$obj = new Articles();

		$obj->setNumCompteAchat("numCompteAchat");
		$this->assertEquals("numCompteAchat", $obj->getNumCompteAchat());
	}

	/**
	 * Tests the setNumCompteVente() method.
	 *
	 * @return void
	 */
	public function testSetNumCompteVente() {

		$obj = new Articles();

		$obj->setNumCompteVente("numCompteVente");
		$this->assertEquals("numCompteVente", $obj->getNumCompteVente());
	}

	/**
	 * Tests the setNumeroPJ() method.
	 *
	 * @return void
	 */
	public function testSetNumeroPJ() {

		$obj = new Articles();

		$obj->setNumeroPJ(10);
		$this->assertEquals(10, $obj->getNumeroPJ());
	}

	/**
	 * Tests the setPAMP() method.
	 *
	 * @return void
	 */
	public function testSetPAMP() {

		$obj = new Articles();

		$obj->setPAMP(10.092018);
		$this->assertEquals(10.092018, $obj->getPAMP());
	}

	/**
	 * Tests the setPRMP() method.
	 *
	 * @return void
	 */
	public function testSetPRMP() {

		$obj = new Articles();

		$obj->setPRMP(10.092018);
		$this->assertEquals(10.092018, $obj->getPRMP());
	}

	/**
	 * Tests the setParamCDE() method.
	 *
	 * @return void
	 */
	public function testSetParamCDE() {

		$obj = new Articles();

		$obj->setParamCDE(10.092018);
		$this->assertEquals(10.092018, $obj->getParamCDE());
	}

	/**
	 * Tests the setPoidsUnitaire() method.
	 *
	 * @return void
	 */
	public function testSetPoidsUnitaire() {

		$obj = new Articles();

		$obj->setPoidsUnitaire(10.092018);
		$this->assertEquals(10.092018, $obj->getPoidsUnitaire());
	}

	/**
	 * Tests the setPrixAchat_CKP() method.
	 *
	 * @return void
	 */
	public function testSetPrixAchat_CKP() {

		$obj = new Articles();

		$obj->setPrixAchat_CKP("prixAchat_CKP");
		$this->assertEquals("prixAchat_CKP", $obj->getPrixAchat_CKP());
	}

	/**
	 * Tests the setPrixFixe() method.
	 *
	 * @return void
	 */
	public function testSetPrixFixe() {

		$obj = new Articles();

		$obj->setPrixFixe(true);
		$this->assertEquals(true, $obj->getPrixFixe());
	}

	/**
	 * Tests the setPrixMINI() method.
	 *
	 * @return void
	 */
	public function testSetPrixMINI() {

		$obj = new Articles();

		$obj->setPrixMINI(10.092018);
		$this->assertEquals(10.092018, $obj->getPrixMINI());
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
	 * Tests the setPrixRevientNet() method.
	 *
	 * @return void
	 */
	public function testSetPrixRevientNet() {

		$obj = new Articles();

		$obj->setPrixRevientNet(10.092018);
		$this->assertEquals(10.092018, $obj->getPrixRevientNet());
	}

	/**
	 * Tests the setPrixVente_CKP() method.
	 *
	 * @return void
	 */
	public function testSetPrixVente_CKP() {

		$obj = new Articles();

		$obj->setPrixVente_CKP("prixVente_CKP");
		$this->assertEquals("prixVente_CKP", $obj->getPrixVente_CKP());
	}

	/**
	 * Tests the setProvenance() method.
	 *
	 * @return void
	 */
	public function testSetProvenance() {

		$obj = new Articles();

		$obj->setProvenance("provenance");
		$this->assertEquals("provenance", $obj->getProvenance());
	}

	/**
	 * Tests the setPxAchatBrut() method.
	 *
	 * @return void
	 */
	public function testSetPxAchatBrut() {

		$obj = new Articles();

		$obj->setPxAchatBrut(10.092018);
		$this->assertEquals(10.092018, $obj->getPxAchatBrut());
	}

	/**
	 * Tests the setPxAchatColis() method.
	 *
	 * @return void
	 */
	public function testSetPxAchatColis() {

		$obj = new Articles();

		$obj->setPxAchatColis(true);
		$this->assertEquals(true, $obj->getPxAchatColis());
	}

	/**
	 * Tests the setPxAchatEnDevise() method.
	 *
	 * @return void
	 */
	public function testSetPxAchatEnDevise() {

		$obj = new Articles();

		$obj->setPxAchatEnDevise(10.092018);
		$this->assertEquals(10.092018, $obj->getPxAchatEnDevise());
	}

	/**
	 * Tests the setPxUnitAEditer() method.
	 *
	 * @return void
	 */
	public function testSetPxUnitAEditer() {

		$obj = new Articles();

		$obj->setPxUnitAEditer(true);
		$this->assertEquals(true, $obj->getPxUnitAEditer());
	}

	/**
	 * Tests the setPxVenteColis() method.
	 *
	 * @return void
	 */
	public function testSetPxVenteColis() {

		$obj = new Articles();

		$obj->setPxVenteColis(true);
		$this->assertEquals(true, $obj->getPxVenteColis());
	}

	/**
	 * Tests the setPxVenteHtEuro() method.
	 *
	 * @return void
	 */
	public function testSetPxVenteHtEuro() {

		$obj = new Articles();

		$obj->setPxVenteHtEuro(10.092018);
		$this->assertEquals(10.092018, $obj->getPxVenteHtEuro());
	}

	/**
	 * Tests the setPxVenteHtFrf() method.
	 *
	 * @return void
	 */
	public function testSetPxVenteHtFrf() {

		$obj = new Articles();

		$obj->setPxVenteHtFrf(10.092018);
		$this->assertEquals(10.092018, $obj->getPxVenteHtFrf());
	}

	/**
	 * Tests the setPxVenteTtcEuro() method.
	 *
	 * @return void
	 */
	public function testSetPxVenteTtcEuro() {

		$obj = new Articles();

		$obj->setPxVenteTtcEuro(10.092018);
		$this->assertEquals(10.092018, $obj->getPxVenteTtcEuro());
	}

	/**
	 * Tests the setPxVenteTtcFrf() method.
	 *
	 * @return void
	 */
	public function testSetPxVenteTtcFrf() {

		$obj = new Articles();

		$obj->setPxVenteTtcFrf(10.092018);
		$this->assertEquals(10.092018, $obj->getPxVenteTtcFrf());
	}

	/**
	 * Tests the setQteAEditer() method.
	 *
	 * @return void
	 */
	public function testSetQteAEditer() {

		$obj = new Articles();

		$obj->setQteAEditer(true);
		$this->assertEquals(true, $obj->getQteAEditer());
	}

	/**
	 * Tests the setQteEcoCommande() method.
	 *
	 * @return void
	 */
	public function testSetQteEcoCommande() {

		$obj = new Articles();

		$obj->setQteEcoCommande(10.092018);
		$this->assertEquals(10.092018, $obj->getQteEcoCommande());
	}

	/**
	 * Tests the setQteHabCommande() method.
	 *
	 * @return void
	 */
	public function testSetQteHabCommande() {

		$obj = new Articles();

		$obj->setQteHabCommande(10.092018);
		$this->assertEquals(10.092018, $obj->getQteHabCommande());
	}

	/**
	 * Tests the setQteMaxFacture() method.
	 *
	 * @return void
	 */
	public function testSetQteMaxFacture() {

		$obj = new Articles();

		$obj->setQteMaxFacture(10.092018);
		$this->assertEquals(10.092018, $obj->getQteMaxFacture());
	}

	/**
	 * Tests the setQteMinCommande() method.
	 *
	 * @return void
	 */
	public function testSetQteMinCommande() {

		$obj = new Articles();

		$obj->setQteMinCommande(10.092018);
		$this->assertEquals(10.092018, $obj->getQteMinCommande());
	}

	/**
	 * Tests the setRegroupFact() method.
	 *
	 * @return void
	 */
	public function testSetRegroupFact() {

		$obj = new Articles();

		$obj->setRegroupFact("regroupFact");
		$this->assertEquals("regroupFact", $obj->getRegroupFact());
	}

	/**
	 * Tests the setRegroupFactTP() method.
	 *
	 * @return void
	 */
	public function testSetRegroupFactTP() {

		$obj = new Articles();

		$obj->setRegroupFactTP(10);
		$this->assertEquals(10, $obj->getRegroupFactTP());
	}

	/**
	 * Tests the setRemise1enMontant() method.
	 *
	 * @return void
	 */
	public function testSetRemise1enMontant() {

		$obj = new Articles();

		$obj->setRemise1enMontant(true);
		$this->assertEquals(true, $obj->getRemise1enMontant());
	}

	/**
	 * Tests the setRemise2enMontant() method.
	 *
	 * @return void
	 */
	public function testSetRemise2enMontant() {

		$obj = new Articles();

		$obj->setRemise2enMontant(true);
		$this->assertEquals(true, $obj->getRemise2enMontant());
	}

	/**
	 * Tests the setRemiseAchat1() method.
	 *
	 * @return void
	 */
	public function testSetRemiseAchat1() {

		$obj = new Articles();

		$obj->setRemiseAchat1(10.092018);
		$this->assertEquals(10.092018, $obj->getRemiseAchat1());
	}

	/**
	 * Tests the setRemiseAchat2() method.
	 *
	 * @return void
	 */
	public function testSetRemiseAchat2() {

		$obj = new Articles();

		$obj->setRemiseAchat2(10.092018);
		$this->assertEquals(10.092018, $obj->getRemiseAchat2());
	}

	/**
	 * Tests the setRemiseAchat3() method.
	 *
	 * @return void
	 */
	public function testSetRemiseAchat3() {

		$obj = new Articles();

		$obj->setRemiseAchat3(10.092018);
		$this->assertEquals(10.092018, $obj->getRemiseAchat3());
	}

	/**
	 * Tests the setRemiseSupAchat1() method.
	 *
	 * @return void
	 */
	public function testSetRemiseSupAchat1() {

		$obj = new Articles();

		$obj->setRemiseSupAchat1(10.092018);
		$this->assertEquals(10.092018, $obj->getRemiseSupAchat1());
	}

	/**
	 * Tests the setRemiseSupAchat1EnMontant() method.
	 *
	 * @return void
	 */
	public function testSetRemiseSupAchat1EnMontant() {

		$obj = new Articles();

		$obj->setRemiseSupAchat1EnMontant(true);
		$this->assertEquals(true, $obj->getRemiseSupAchat1EnMontant());
	}

	/**
	 * Tests the setRemiseSupAchat2() method.
	 *
	 * @return void
	 */
	public function testSetRemiseSupAchat2() {

		$obj = new Articles();

		$obj->setRemiseSupAchat2(10.092018);
		$this->assertEquals(10.092018, $obj->getRemiseSupAchat2());
	}

	/**
	 * Tests the setRemiseSupAchat2EnMontant() method.
	 *
	 * @return void
	 */
	public function testSetRemiseSupAchat2EnMontant() {

		$obj = new Articles();

		$obj->setRemiseSupAchat2EnMontant(true);
		$this->assertEquals(true, $obj->getRemiseSupAchat2EnMontant());
	}

	/**
	 * Tests the setRemiseSupAchat3() method.
	 *
	 * @return void
	 */
	public function testSetRemiseSupAchat3() {

		$obj = new Articles();

		$obj->setRemiseSupAchat3(10.092018);
		$this->assertEquals(10.092018, $obj->getRemiseSupAchat3());
	}

	/**
	 * Tests the setRemiseSupAchat3EnMontant() method.
	 *
	 * @return void
	 */
	public function testSetRemiseSupAchat3EnMontant() {

		$obj = new Articles();

		$obj->setRemiseSupAchat3EnMontant(true);
		$this->assertEquals(true, $obj->getRemiseSupAchat3EnMontant());
	}

	/**
	 * Tests the setRemisesInterdites() method.
	 *
	 * @return void
	 */
	public function testSetRemisesInterdites() {

		$obj = new Articles();

		$obj->setRemisesInterdites(true);
		$this->assertEquals(true, $obj->getRemisesInterdites());
	}

	/**
	 * Tests the setSoumisCertif() method.
	 *
	 * @return void
	 */
	public function testSetSoumisCertif() {

		$obj = new Articles();

		$obj->setSoumisCertif(true);
		$this->assertEquals(true, $obj->getSoumisCertif());
	}

	/**
	 * Tests the setSsFamilleAchat() method.
	 *
	 * @return void
	 */
	public function testSetSsFamilleAchat() {

		$obj = new Articles();

		$obj->setSsFamilleAchat("ssFamilleAchat");
		$this->assertEquals("ssFamilleAchat", $obj->getSsFamilleAchat());
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
	 * Tests the setTare_VAT() method.
	 *
	 * @return void
	 */
	public function testSetTare_VAT() {

		$obj = new Articles();

		$obj->setTare_VAT("tare_VAT");
		$this->assertEquals("tare_VAT", $obj->getTare_VAT());
	}

	/**
	 * Tests the setTauxAlcool() method.
	 *
	 * @return void
	 */
	public function testSetTauxAlcool() {

		$obj = new Articles();

		$obj->setTauxAlcool(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxAlcool());
	}

	/**
	 * Tests the setTauxDeviseAchat() method.
	 *
	 * @return void
	 */
	public function testSetTauxDeviseAchat() {

		$obj = new Articles();

		$obj->setTauxDeviseAchat(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxDeviseAchat());
	}

	/**
	 * Tests the setTvaEncaissement() method.
	 *
	 * @return void
	 */
	public function testSetTvaEncaissement() {

		$obj = new Articles();

		$obj->setTvaEncaissement(true);
		$this->assertEquals(true, $obj->getTvaEncaissement());
	}

	/**
	 * Tests the setTxCommission() method.
	 *
	 * @return void
	 */
	public function testSetTxCommission() {

		$obj = new Articles();

		$obj->setTxCommission(10.092018);
		$this->assertEquals(10.092018, $obj->getTxCommission());
	}

	/**
	 * Tests the setTypeArrondi() method.
	 *
	 * @return void
	 */
	public function testSetTypeArrondi() {

		$obj = new Articles();

		$obj->setTypeArrondi("typeArrondi");
		$this->assertEquals("typeArrondi", $obj->getTypeArrondi());
	}

	/**
	 * Tests the setTypeHeure() method.
	 *
	 * @return void
	 */
	public function testSetTypeHeure() {

		$obj = new Articles();

		$obj->setTypeHeure(true);
		$this->assertEquals(true, $obj->getTypeHeure());
	}

	/**
	 * Tests the setTypeUnite() method.
	 *
	 * @return void
	 */
	public function testSetTypeUnite() {

		$obj = new Articles();

		$obj->setTypeUnite("typeUnite");
		$this->assertEquals("typeUnite", $obj->getTypeUnite());
	}

	/**
	 * Tests the setUniteActivite() method.
	 *
	 * @return void
	 */
	public function testSetUniteActivite() {

		$obj = new Articles();

		$obj->setUniteActivite(true);
		$this->assertEquals(true, $obj->getUniteActivite());
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
	 * Tests the setVenteParColis() method.
	 *
	 * @return void
	 */
	public function testSetVenteParColis() {

		$obj = new Articles();

		$obj->setVenteParColis(true);
		$this->assertEquals(true, $obj->getVenteParColis());
	}

	/**
	 * Tests the setVolume() method.
	 *
	 * @return void
	 */
	public function testSetVolume() {

		$obj = new Articles();

		$obj->setVolume(10.092018);
		$this->assertEquals(10.092018, $obj->getVolume());
	}

}
