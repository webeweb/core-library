<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAEditerDucsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDucsEuroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGrandDecalageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPaieDecaleeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPetitDecalageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTraiterEdiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateReglementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateVerseSalaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFinPerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePerDebCiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePerFinCiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDeclaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePremMoisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAcompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatEffectifMoyenTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTotalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtAideCtAidesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtBrutDadsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtRegulLodeomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbAutresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbFemmesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbFinContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHommesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRecapDucs10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRecapDucs11Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRecapDucs12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRecapDucs13Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRecapDucs1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRecapDucs2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRecapDucs3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRecapDucs4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRecapDucs5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRecapDucs6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRecapDucs7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRecapDucs8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRecapDucs9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRegulDucsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntEffectifInscritTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntEffectifPayeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringArrondiBaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringArrondiCotisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMethodeCalculCiceheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMotifEcartEffTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoAffiliationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRaisonSocialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSousTypeOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeOrganismeTrait;

/**
 * Recap ducs annuelle.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class RecapDucsAnnuelle {

    use BoolAEditerDucsTrait;
    use FloatAcompteTrait;
    use StringArrondiBaseTrait;
    use StringArrondiCotisTrait;
    use StringCodeCentreTrait;
    use IntCodeEtablissementTrait;
    use DateTimeDateReglementTrait;
    use DateTimeDateVerseSalaireTrait;
    use BoolDucsEuroTrait;
    use IntEffectifInscritTrait;
    use FloatEffectifMoyenTrait;
    use IntEffectifPayeTrait;
    use DateTimeFinPerTrait;
    use BoolGrandDecalageTrait;
    use StringLienDocumentTrait;
    use StringMethodeCalculCiceheTrait;
    use FloatMontantTotalTrait;
    use StringMotifEcartEffTrait;
    use FloatMtAideCtAidesTrait;
    use FloatMtBrutDadsTrait;
    use FloatMtRegulLodeomTrait;
    use FloatNbAutresTrait;
    use FloatNbFemmesTrait;
    use FloatNbFinContratTrait;
    use FloatNbHommesTrait;
    use StringNoAffiliationTrait;
    use StringOrganismeTrait;
    use BoolPaieDecaleeTrait;
    use DateTimePerDebCiceTrait;
    use DateTimePerFinCiceTrait;
    use StringPeriodeTrait;
    use DateTimePeriodeDeclaTrait;
    use BoolPetitDecalageTrait;
    use DateTimePremMoisTrait;
    use StringRaisonSocialeTrait;
    use FloatRecapDucs1Trait;
    use FloatRecapDucs10Trait;
    use FloatRecapDucs11Trait;
    use FloatRecapDucs12Trait;
    use FloatRecapDucs13Trait;
    use FloatRecapDucs2Trait;
    use FloatRecapDucs3Trait;
    use FloatRecapDucs4Trait;
    use FloatRecapDucs5Trait;
    use FloatRecapDucs6Trait;
    use FloatRecapDucs7Trait;
    use FloatRecapDucs8Trait;
    use FloatRecapDucs9Trait;
    use FloatRegulDucsTrait;
    use StringRibTrait;
    use StringSousTypeOrganismeTrait;
    use BoolTraiterEdiTrait;
    use StringTypeOrganismeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
