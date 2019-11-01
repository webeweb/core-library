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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEuroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatArbitrageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBrutAlTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBrutAnlTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBrutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatChargesPatronalesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHeuresSupTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatImposTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatIndemniteCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatIndemnitePrecariteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatInteressementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtNetPayeTheoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHAbsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHBaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHRcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHSup1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHSup2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHSup3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatParticipationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatProvisionCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSalaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSBaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotRetTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTrATrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTrBTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTrCTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTxHnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;

/**
 * Charges paie.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ChargesPaie {

    use FloatArbitrageTrait;
    use FloatBrutTrait;
    use FloatBrutAlTrait;
    use FloatBrutAnlTrait;
    use FloatChargesPatronalesTrait;
    use StringCodeEmployeTrait;
    use BoolEuroTrait;
    use FloatHeuresSupTrait;
    use FloatImposTrait;
    use FloatIndemniteCpTrait;
    use FloatIndemnitePrecariteTrait;
    use FloatInteressementTrait;
    use FloatMtNetPayeTheoTrait;
    use FloatNbHAbsTrait;
    use FloatNbHBaseTrait;
    use FloatNbHnTrait;
    use FloatNbHRcTrait;
    use FloatNbHSup1Trait;
    use FloatNbHSup2Trait;
    use FloatNbHSup3Trait;
    use FloatNbHtTrait;
    use FloatParticipationTrait;
    use DateTimePeriodeTrait;
    use FloatProvisionCpTrait;
    use FloatSBaseTrait;
    use FloatSalaireTrait;
    use FloatTotRetTrait;
    use FloatTrATrait;
    use FloatTrBTrait;
    use FloatTrCTrait;
    use FloatTxHnTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
