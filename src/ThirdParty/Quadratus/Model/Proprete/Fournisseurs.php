<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFactureEurosTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisTaxe1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisTaxe2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisTaxe3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatFraisFixes1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatFraisFixes2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatFraisFixes3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantAcompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPoidsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemisePied2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemisePied3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemisePiedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTxEscompteAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDelaiLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDelaiNombreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDelaiTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbColisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNombreEcheancesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPaiementDepartLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPaiementLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPaiementNombreDeJoursTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTvaRegimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringApeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBtqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBureauDistributeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDeviseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFamilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeImputationAnalytiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLangueDesignationArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOfficielCommuneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePaysTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeReglementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeSousFamilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTva1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTva2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVentilComptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollectifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentairesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDomiciliationBancaire1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDomiciliationBancaire2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdentTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomResponsableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomSuiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPortable1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPortable2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReferenceClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSiretTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTel1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTel2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTelexTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTelVoitureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTransporteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTvaCleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTvaCodeDossierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTvaCodeRecetteTrait;

/**
 * Fournisseurs.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Fournisseurs {

    use StringApeTrait;
    use StringBtqTrait;
    use StringBureauDistributeurTrait;
    use StringCodeTrait;
    use StringCodeDeviseTrait;
    use StringCodeFamilleTrait;
    use StringCodeImputationAnalytiqueTrait;
    use StringCodeLangueDesignationArticleTrait;
    use StringCodeOfficielCommuneTrait;
    use StringCodePaysTrait;
    use StringCodePostalTrait;
    use StringCodeReglementTrait;
    use StringCodeSousFamilleTrait;
    use StringCodeTvaTrait;
    use StringCodeTva1Trait;
    use StringCodeTva2Trait;
    use StringCodeVentilComptaTrait;
    use StringCollectifTrait;
    use StringCommentairesTrait;
    use StringComplementTrait;
    use DateTimeDateCreationTrait;
    use DateTimeDateModificationTrait;
    use IntDelaiLeTrait;
    use IntDelaiNombreTrait;
    use IntDelaiTypeTrait;
    use StringDomiciliationBancaire1Trait;
    use StringDomiciliationBancaire2Trait;
    use StringEmailTrait;
    use BoolFactureEurosTrait;
    use StringFaxTrait;
    use FloatFraisFixes1Trait;
    use FloatFraisFixes2Trait;
    use FloatFraisFixes3Trait;
    use StringIdentTvaTrait;
    use FloatMontantAcompteTrait;
    use IntNbColisTrait;
    use StringNomTrait;
    use StringNomResponsableTrait;
    use StringNomSuiteTrait;
    use StringNomVilleTrait;
    use StringNomVoieTrait;
    use IntNombreEcheancesTrait;
    use StringNumVoieTrait;
    use StringNumeroCompteTrait;
    use IntPaiementDepartLeTrait;
    use IntPaiementLeTrait;
    use IntPaiementNombreDeJoursTrait;
    use FloatPoidsTrait;
    use StringPortable1Trait;
    use StringPortable2Trait;
    use StringRibTrait;
    use StringRcTrait;
    use StringReferenceClientTrait;
    use FloatRemiseLigne1Trait;
    use FloatRemiseLigne2Trait;
    use FloatRemiseLigne3Trait;
    use FloatRemisePiedTrait;
    use FloatRemisePied2Trait;
    use FloatRemisePied3Trait;
    use StringSiretTrait;
    use BoolSoumisTaxe1Trait;
    use BoolSoumisTaxe2Trait;
    use BoolSoumisTaxe3Trait;
    use StringTvaCleTrait;
    use StringTvaCodeDossierTrait;
    use StringTvaCodeRecetteTrait;
    use IntTvaRegimeTrait;
    use StringTel1Trait;
    use StringTel2Trait;
    use StringTelVoitureTrait;
    use StringTelexTrait;
    use StringTransporteurTrait;
    use FloatTxEscompteAchatTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
