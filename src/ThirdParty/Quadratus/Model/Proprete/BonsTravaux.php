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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGestionPlanningTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSaisieInterJourTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTravailleDimancheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTravailleJoursFeriesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTravailleSamediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolUnBonParMoisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDernierPassageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinValiditeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDatePremierPassageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateValiditeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeureDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCritereNumerique1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCritereNumerique2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatLatitudeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatLongitudeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeuresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbJoursTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumBtTrait;
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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFrequenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTourneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCritereListe1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCritereListe2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCritereTexte1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCritereTexte2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDescriptionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEquipeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFrequenceSuiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFrequenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMentionSpecialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPosteRentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeFrequenceTrait;

/**
 * Bons travaux.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class BonsTravaux {

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
    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeFrequenceTrait;
    use StringCodeTacheBtTrait;
    use StringCodeTourneeTrait;
    use StringCritereListe1Trait;
    use StringCritereListe2Trait;
    use FloatCritereNumerique1Trait;
    use FloatCritereNumerique2Trait;
    use StringCritereTexte1Trait;
    use StringCritereTexte2Trait;
    use DateTimeDateDernierPassageTrait;
    use DateTimeDateFinValiditeTrait;
    use DateTimeDatePremierPassageTrait;
    use DateTimeDateValiditeTrait;
    use StringDescriptionTrait;
    use StringEquipeTrait;
    use StringFrequenceTrait;
    use StringFrequenceSuiteTrait;
    use BoolGestionPlanningTrait;
    use DateTimeHeureDebTrait;
    use FloatLatitudeTrait;
    use FloatLongitudeTrait;
    use StringMentionSpecialeTrait;
    use FloatNbHeuresTrait;
    use FloatNbJoursTrait;
    use IntNumBtTrait;
    use StringPosteRentTrait;
    use BoolSaisieInterJourTrait;
    use BoolTravailleDimancheTrait;
    use BoolTravailleJoursFeriesTrait;
    use BoolTravailleSamediTrait;
    use StringTypeFrequenceTrait;
    use BoolUnBonParMoisTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
