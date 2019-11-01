<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Articles;

/**
 * Articles test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ArticlesTest extends AbstractTestCase {

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
