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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolChantierPonctuelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCommandeIsoleeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEcheanceAnnuelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFactNegoceIsoleeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFactureIsoleeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolLoiChatelSurFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMajStockByDaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPlanFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRuptDateLivraisonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEcheanceContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateRevisionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtAvantDernPrepaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtDernPrepaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtValiditeFactDebDebMoisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtValiditeFactDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtValiditeFactFinFinMoisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtValiditeFactFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBudgetCommandeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatLatitudeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatLongitudeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPourcConsoProduitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPourcMargePrevisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbControlesPrevusTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFbtqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFBureauDistributeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFCiviliteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFCodePaysTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFNomClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFNomSuite2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFNomSuite3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFNomSuiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFNomVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFNumVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFTypeAdresseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBtqLivraisonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBtqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBureauDistributeurLivraisonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBureauDistributeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringChefEquipeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCleAlphaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAgenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAnalytiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCommercialTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmpInspecteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFormuleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLivraisonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePaysTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalLivraisonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegMargeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRevisionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVentilComptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollectifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplementLivraisonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDescriptifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringJourFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNbMoisPreavisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomAdresseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomLivraisonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomResponsableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomSuiteLivraisonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomSuiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVoieLivraisonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumVoieLivraisonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReferenceFacture2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReferenceFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTelephoneTrait;

/**
 * Chantiers.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Chantiers {

    use StringAdFbtqTrait;
    use StringAdFBureauDistributeurTrait;
    use StringAdFCiviliteTrait;
    use StringAdFCodePaysTrait;
    use StringAdFCodePostalTrait;
    use StringAdFComplementTrait;
    use StringAdFNomClientTrait;
    use StringAdFNomSuiteTrait;
    use StringAdFNomSuite2Trait;
    use StringAdFNomSuite3Trait;
    use StringAdFNomVoieTrait;
    use StringAdFNumVoieTrait;
    use StringAdFTypeAdresseTrait;
    use StringAdresseTrait;
    use StringBtqTrait;
    use StringBtqLivraisonTrait;
    use FloatBudgetCommandeTrait;
    use StringBureauDistributeurTrait;
    use StringBureauDistributeurLivraisonTrait;
    use BoolChantierPonctuelTrait;
    use StringChefEquipeTrait;
    use StringCleAlphaTrait;
    use StringCodeAffaireTrait;
    use StringCodeAgenceTrait;
    use StringCodeAnalytiqueTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeCommercialTrait;
    use StringCodeEmpInspecteurTrait;
    use StringCodeFormuleTrait;
    use StringCodeLivraisonTrait;
    use StringCodePaysTrait;
    use StringCodePostalTrait;
    use StringCodePostalLivraisonTrait;
    use StringCodeRegMargeTrait;
    use StringCodeRevisionTrait;
    use StringCodeTvaTrait;
    use StringCodeVentilComptaTrait;
    use StringCollectifTrait;
    use BoolCommandeIsoleeTrait;
    use StringComplementLivraisonTrait;
    use StringComplementTrait;
    use DateTimeDateCreatTrait;
    use DateTimeDateDebutTrait;
    use DateTimeDateEcheanceContratTrait;
    use DateTimeDateFinTrait;
    use DateTimeDateModifTrait;
    use DateTimeDateRevisionTrait;
    use StringDescriptifTrait;
    use DateTimeDtAvantDernPrepaTrait;
    use DateTimeDtDernPrepaTrait;
    use DateTimeDtValiditeFactDebTrait;
    use DateTimeDtValiditeFactDebDebMoisTrait;
    use DateTimeDtValiditeFactFinTrait;
    use DateTimeDtValiditeFactFinFinMoisTrait;
    use BoolEcheanceAnnuelleTrait;
    use BoolFactNegoceIsoleeTrait;
    use BoolFactureIsoleeTrait;
    use StringJourFactTrait;
    use FloatLatitudeTrait;
    use BoolLoiChatelSurFactureTrait;
    use FloatLongitudeTrait;
    use BoolMajStockByDaTrait;
    use IntNbControlesPrevusTrait;
    use StringNbMoisPreavisTrait;
    use StringNomAdresseTrait;
    use StringNomChantierTrait;
    use StringNomLivraisonTrait;
    use StringNomResponsableTrait;
    use StringNomSuiteTrait;
    use StringNomSuiteLivraisonTrait;
    use StringNomVoieTrait;
    use StringNomVoieLivraisonTrait;
    use StringNumVoieTrait;
    use StringNumVoieLivraisonTrait;
    use StringNumeroCompteTrait;
    use BoolPlanFactTrait;
    use FloatPourcConsoProduitTrait;
    use FloatPourcMargePrevisTrait;
    use StringReferenceFactureTrait;
    use StringReferenceFacture2Trait;
    use BoolRuptDateLivraisonTrait;
    use StringTelephoneTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
