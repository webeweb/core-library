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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantIccpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantIpeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantPrecompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeureTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSalaireBrutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroAttestationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;

/**
 * Lignes attestation extras.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesAttestationExtras {

    use DateTimeDateDebutTrait;
    use DateTimeDateFinTrait;
    use FloatMontantIccpTrait;
    use FloatMontantIpeTrait;
    use FloatMontantPrecompteTrait;
    use FloatNbHeureTravTrait;
    use IntNumLigneTrait;
    use StringNumeroAttestationTrait;
    use StringNumeroEmployeTrait;
    use FloatSalaireBrutTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
