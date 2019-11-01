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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAnalDiffTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAvantageNatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCongePayeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCumulCoutGlobTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEditionBaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEditionCotPatronaleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEditionResultatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEditionTauxSalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFlagForceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIntegNetPayeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIntervientBrutAlTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIntervientIndemPrecaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNeutreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPasEditerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPpSoumisTaxeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPrimeNonProratiseeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisAbattementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisCrdsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisCsgTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBaseSansReintegrationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontant1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontant2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontant3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontant4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantGlobalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSalarialTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndicePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntLienTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumCumulBulletinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumCumulPatronTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneBulletinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCleLigBulTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCalculTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringConditionSpecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntervientTauxHAbCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRegleCalculTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRegleTauxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAbsenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAcompteTrait;

/**
 * Lignes bulletin.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesBulletin {

    use BoolAnalDiffTrait;
    use BoolAvantageNatureTrait;
    use FloatBaseSansReintegrationTrait;
    use StringCleLigBulTrait;
    use StringCodeTrait;
    use StringCodeCalculTrait;
    use StringConditionSpecTrait;
    use BoolCongePayeTrait;
    use BoolCumulCoutGlobTrait;
    use BoolEditionBaseTrait;
    use BoolEditionCotPatronaleTrait;
    use BoolEditionResultatTrait;
    use BoolEditionTauxSalTrait;
    use BoolFlagForceTrait;
    use IntIndicePeriodeTrait;
    use BoolIntegNetPayeTrait;
    use BoolIntervientBrutAlTrait;
    use BoolIntervientIndemPrecaTrait;
    use StringIntervientTauxHAbCpTrait;
    use StringLibelleTrait;
    use IntLienTrait;
    use FloatMontant1Trait;
    use FloatMontant2Trait;
    use FloatMontant3Trait;
    use FloatMontant4Trait;
    use FloatMontantGlobalTrait;
    use FloatMontantSalarialTrait;
    use BoolNeutreTrait;
    use IntNumCumulBulletinTrait;
    use IntNumCumulPatronTrait;
    use IntNumLigneBulletinTrait;
    use StringNumeroEmployeTrait;
    use BoolPpSoumisTaxeTrait;
    use BoolPasEditerTrait;
    use DateTimePeriodeTrait;
    use BoolPrimeNonProratiseeTrait;
    use StringRegleCalculTrait;
    use StringRegleTauxTrait;
    use BoolSoumisAbattementTrait;
    use BoolSoumisCsgTrait;
    use BoolSoumisCrdsTrait;
    use StringTypeAbsenceTrait;
    use StringTypeAcompteTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
