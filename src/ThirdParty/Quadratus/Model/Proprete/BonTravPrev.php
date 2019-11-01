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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAdresseBtSaisieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAdresseFacturationSaisieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBtCopieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBtDevisDejaFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBtValideTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCritereBool1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCritereBool2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGestionPlanningTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNonTraiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolOccasionnelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPlusieursJoursTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPlusieursMoisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolProratiseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDatePassageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDatePremierPassageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTransfertTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeureDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCritereNumerique1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCritereNumerique2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureePointeeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureePrevueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeValideeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatLatitudeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatLongitudeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantHtDevisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbJoursPointesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbJoursPrevusTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNombreEmployesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroPjTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdBtbtqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdBtBureauDistributeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdBtCiviliteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdBtCodePaysTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdBtCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdBtComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdBtNomSuiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdBtNomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdBtNomVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdBtNumVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFbtqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFBureauDistributeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFCiviliteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFCodePaysTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFNomSuite2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFNomSuite3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFNomSuiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFNomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFNomVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdFNumVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEquipeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroupementDevisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTourneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCritereByte1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCritereListe1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCritereListe2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCritereTexte1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCritereTexte2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDescriptionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmployeSigneMobTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGuidMobTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroDevisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringObservationClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringObservationInterneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPosteRentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringreference1DevisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringreference2DevisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignataireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringStartMobTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeBtSaisiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdBlocageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringViaTrait;

/**
 * Bon trav prev.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class BonTravPrev {

    use StringAdBtbtqTrait;
    use StringAdBtBureauDistributeurTrait;
    use StringAdBtCiviliteTrait;
    use StringAdBtCodePaysTrait;
    use StringAdBtCodePostalTrait;
    use StringAdBtComplementTrait;
    use StringAdBtNomTrait;
    use StringAdBtNomSuiteTrait;
    use StringAdBtNomVoieTrait;
    use StringAdBtNumVoieTrait;
    use StringAdFbtqTrait;
    use StringAdFBureauDistributeurTrait;
    use StringAdFCiviliteTrait;
    use StringAdFCodePaysTrait;
    use StringAdFCodePostalTrait;
    use StringAdFComplementTrait;
    use StringAdFNomTrait;
    use StringAdFNomSuiteTrait;
    use StringAdFNomSuite2Trait;
    use StringAdFNomSuite3Trait;
    use StringAdFNomVoieTrait;
    use StringAdFNumVoieTrait;
    use BoolAdresseBtSaisieTrait;
    use BoolAdresseFacturationSaisieTrait;
    use BoolBtCopieTrait;
    use BoolBtDevisDejaFactureTrait;
    use BoolBtValideTrait;
    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeEquipeTrait;
    use StringCodeRegroupementDevisTrait;
    use StringCodeTacheTypeTrait;
    use StringCodeTourneeTrait;
    use BoolCritereBool1Trait;
    use BoolCritereBool2Trait;
    use StringCritereByte1Trait;
    use StringCritereListe1Trait;
    use StringCritereListe2Trait;
    use FloatCritereNumerique1Trait;
    use FloatCritereNumerique2Trait;
    use StringCritereTexte1Trait;
    use StringCritereTexte2Trait;
    use DateTimeDatePassageTrait;
    use DateTimeDatePremierPassageTrait;
    use DateTimeDateTransfertTrait;
    use StringDescriptionTrait;
    use FloatDureePointeeTrait;
    use FloatDureePrevueTrait;
    use FloatDureeValideeTrait;
    use StringEmployeSigneMobTrait;
    use BoolGestionPlanningTrait;
    use StringGuidMobTrait;
    use DateTimeHeureDebTrait;
    use FloatLatitudeTrait;
    use StringLibelleTrait;
    use StringLienDocumentTrait;
    use FloatLongitudeTrait;
    use FloatMontantHtDevisTrait;
    use FloatNbJoursPointesTrait;
    use FloatNbJoursPrevusTrait;
    use IntNombreEmployesTrait;
    use BoolNonTraiteTrait;
    use IntNumBtTrait;
    use StringNumeroDevisTrait;
    use StringNumeroFactureTrait;
    use IntNumeroPjTrait;
    use StringObservationClientTrait;
    use StringObservationInterneTrait;
    use BoolOccasionnelTrait;
    use BoolPlusieursJoursTrait;
    use BoolPlusieursMoisTrait;
    use StringPosteRentTrait;
    use BoolProratiseTrait;
    use StringSignataireTrait;
    use BoolSigneTrait;
    use StringStartMobTrait;
    use StringTypeBtTrait;
    use StringTypeBtSaisiTrait;
    use StringUniqIdBlocageTrait;
    use StringViaTrait;
    use Stringreference1DevisTrait;
    use Stringreference2DevisTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
