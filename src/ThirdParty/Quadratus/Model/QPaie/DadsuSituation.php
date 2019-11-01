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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDepuisCalculTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCtrlNormeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDebutPeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFinPeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontant1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontant2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantEmployeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTempsArretTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroOrdreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDebutPeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTempsArretTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatCtrlNormeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMotifSituationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringQualifUniteTempsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeBaseTrait;

/**
 * Dadsu situation.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuSituation {

    use StringCodeDebutPeriodeTrait;
    use StringCodeOrganismeTrait;
    use StringCodeTempsArretTrait;
    use DateTimeDateCtrlNormeTrait;
    use DateTimeDebutPeriodeTrait;
    use BoolDepuisCalculTrait;
    use StringEtatCtrlNormeTrait;
    use DateTimeFinPeriodeTrait;
    use FloatMontant1Trait;
    use FloatMontant2Trait;
    use FloatMontantEmployeurTrait;
    use StringMotifSituationTrait;
    use StringNumeroTrait;
    use IntNumeroOrdreTrait;
    use StringQualifUniteTempsTrait;
    use FloatTempsArretTrait;
    use StringTypeBaseTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
