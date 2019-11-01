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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTotalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbAutresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbFemmesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbFinContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHommesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRegulDucsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntEffectifInscritTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntEffectifPayeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringArrondiBaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringArrondiCotisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMotifEcartEffTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoAffiliationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRaisonSocialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSousTypeOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeOrganismeTrait;

/**
 * Recap lignes ducs.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class RecapLignesDucs {

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
    use IntEffectifPayeTrait;
    use DateTimeFinPerTrait;
    use BoolGrandDecalageTrait;
    use StringLienDocumentTrait;
    use FloatMontantTotalTrait;
    use StringMotifEcartEffTrait;
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
