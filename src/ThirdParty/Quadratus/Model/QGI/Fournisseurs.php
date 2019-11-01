<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBloqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCodeBarreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCompteDeVenteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEcheanceFinDecadeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEcheanceFinQuinzaineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEtiquettesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFactureEurosTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFactureIsoleeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFraisFixes1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFraisFixes2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIgpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolReleveFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSiegeGroupeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisEscompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisTaxe1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisTaxe2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisTaxe3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisTaxe4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisTaxe5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTrsAffGrpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTrsGestionPalettesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTrsSuiviPlaningAffTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEntreeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSortieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDsDateRetourTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDsDateSortieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatChiffreAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDelaiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatFrancoPort1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatFrancoPort2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantFrancoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantMiniCdeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantPortLivTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemisePied2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemisePied3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemisePiedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatResultatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxCommTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxEscompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTrspCentPxTrsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMissionSurDossierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbJourIntervalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumFactureFTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPaiementDepartLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPaiementNombreDeJoursTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresseSiteFournisseurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringArticlePort1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringArticlePort2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeActiviteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAssistantJuridiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAssistantSocialTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAutre1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAutre2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAvocatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCategorieFournisseurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDepotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDeviseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEditionFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeExcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeExpertTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFamilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeGeoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeImputationAnalytiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLangueDesignationArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrigineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePortefeuilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeReglementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroupementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeSousFamilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTransporteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVentilComptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollectifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDomiciliationBancaire1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDomiciliationBancaire2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDossierComptableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDossierPaieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDsCodeCollabTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEanFrnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtat1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtat2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtat3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtat4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtat5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdentifiantTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringInspTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringModeleBrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringModeleCommandeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringModeleFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringModeleReleveTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNbBrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNbCommandeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNbFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNbMaxBrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNbReleveTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNombreEcheancesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringObservation1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringObservation2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPaiementLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrefixeFactureFTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRegimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRegroupementFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSoumisPort1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSoumisPort2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringToutesActivitesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTransporteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsAffMatDangTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsAffProdChimTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsAffRefriTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsCodeTarifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTrsEstUnAffreteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTvaRegimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeEditBrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeFournisseurTrait;

/**
 * Fournisseurs.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Fournisseurs {

    use StringAdresseSiteFournisseurTrait;
    use StringArticlePort1Trait;
    use StringArticlePort2Trait;
    use BoolBloqueTrait;
    use FloatChiffreAffaireTrait;
    use StringCodeTrait;
    use StringCodeActiviteTrait;
    use StringCodeAssistantJuridiqueTrait;
    use StringCodeAssistantSocialTrait;
    use StringCodeAutre1Trait;
    use StringCodeAutre2Trait;
    use StringCodeAvocatTrait;
    use BoolCodeBarreTrait;
    use StringCodeCategorieFournisseurTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeDepotTrait;
    use StringCodeDeviseTrait;
    use StringCodeEditionFactTrait;
    use StringCodeExcTrait;
    use StringCodeExpertTrait;
    use StringCodeFamilleTrait;
    use StringCodeGeoTrait;
    use StringCodeImputationAnalytiqueTrait;
    use StringCodeLangueDesignationArticleTrait;
    use StringCodeOrigineTrait;
    use StringCodePortefeuilleTrait;
    use StringCodeReglementTrait;
    use StringCodeRegroupementTrait;
    use StringCodeSousFamilleTrait;
    use StringCodeTvaTrait;
    use StringCodeTransporteurTrait;
    use StringCodeVentilComptaTrait;
    use StringCollectifTrait;
    use BoolCompteDeVenteTrait;
    use StringDsCodeCollabTrait;
    use DateTimeDsDateRetourTrait;
    use DateTimeDsDateSortieTrait;
    use DateTimeDateCreationTrait;
    use DateTimeDateEntreeTrait;
    use DateTimeDateModificationTrait;
    use DateTimeDateSortieTrait;
    use FloatDelaiTrait;
    use StringDomiciliationBancaire1Trait;
    use StringDomiciliationBancaire2Trait;
    use StringDossierComptableTrait;
    use StringDossierPaieTrait;
    use StringEanFrnTrait;
    use BoolEcheanceFinDecadeTrait;
    use BoolEcheanceFinQuinzaineTrait;
    use StringEtat1Trait;
    use StringEtat2Trait;
    use StringEtat3Trait;
    use StringEtat4Trait;
    use StringEtat5Trait;
    use BoolEtiquettesTrait;
    use BoolFactureEurosTrait;
    use BoolFactureIsoleeTrait;
    use BoolFraisFixes1Trait;
    use BoolFraisFixes2Trait;
    use FloatFrancoPort1Trait;
    use FloatFrancoPort2Trait;
    use BoolIgpTrait;
    use StringIdentifiantTvaTrait;
    use StringInspTrait;
    use IntMissionSurDossierTrait;
    use StringModeleBrTrait;
    use StringModeleCommandeTrait;
    use StringModeleFactureTrait;
    use StringModeleReleveTrait;
    use FloatMontantFrancoTrait;
    use FloatMontantMiniCdeTrait;
    use FloatMontantPortLivTrait;
    use StringNbBrTrait;
    use StringNbCommandeTrait;
    use StringNbFactureTrait;
    use IntNbJourIntervalTrait;
    use StringNbMaxBrTrait;
    use StringNbReleveTrait;
    use StringNombreEcheancesTrait;
    use IntNumFactureFTrait;
    use StringNumeroCompteTrait;
    use StringObservation1Trait;
    use StringObservation2Trait;
    use IntPaiementDepartLeTrait;
    use StringPaiementLeTrait;
    use IntPaiementNombreDeJoursTrait;
    use StringPrefixeFactureFTrait;
    use StringRibTrait;
    use StringRegimeTrait;
    use StringRegroupementFactTrait;
    use BoolReleveFactureTrait;
    use FloatRemiseLigne1Trait;
    use FloatRemiseLigne2Trait;
    use FloatRemiseLigne3Trait;
    use FloatRemisePiedTrait;
    use FloatRemisePied2Trait;
    use FloatRemisePied3Trait;
    use FloatResultatTrait;
    use BoolSiegeGroupeTrait;
    use BoolSoumisEscompteTrait;
    use StringSoumisPort1Trait;
    use StringSoumisPort2Trait;
    use BoolSoumisTvaTrait;
    use BoolSoumisTaxe1Trait;
    use BoolSoumisTaxe2Trait;
    use BoolSoumisTaxe3Trait;
    use BoolSoumisTaxe4Trait;
    use BoolSoumisTaxe5Trait;
    use BoolTrsAffGrpTrait;
    use StringTrsAffMatDangTrait;
    use StringTrsAffProdChimTrait;
    use StringTrsAffRefriTrait;
    use StringTrsCodeTarifTrait;
    use StringTrsEstUnAffreteTrait;
    use BoolTrsGestionPalettesTrait;
    use FloatTrspCentPxTrsTrait;
    use BoolTrsSuiviPlaningAffTrait;
    use StringTvaRegimeTrait;
    use FloatTauxCommTrait;
    use FloatTauxEscompteTrait;
    use StringToutesActivitesTrait;
    use StringTransporteurTrait;
    use StringTypeEditBrTrait;
    use StringTypeFournisseurTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
