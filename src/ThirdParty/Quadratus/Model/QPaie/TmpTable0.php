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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolImputationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolInverseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBaseTotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatChargePatTotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatChargePatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatChargeSalTotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatChargeSalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxPatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxSalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndicePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntQuiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringClasseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringServiceTrait;

/**
 * Tmp table0.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class TmpTable0 {

    use FloatBaseTrait;
    use FloatBaseTotTrait;
    use FloatChargePatTrait;
    use FloatChargePatTotTrait;
    use FloatChargeSalTrait;
    use FloatChargeSalTotTrait;
    use StringClasseTrait;
    use StringCodeTrait;
    use StringCodeOrganismeTrait;
    use IntEtablissementTrait;
    use BoolImputationTrait;
    use IntIndicePeriodeTrait;
    use BoolInverseTrait;
    use StringLibelleTrait;
    use StringNumeroTrait;
    use DateTimePeriodeTrait;
    use IntQuiTrait;
    use StringServiceTrait;
    use FloatTauxPatTrait;
    use FloatTauxSalTrait;
    use IntTypeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
