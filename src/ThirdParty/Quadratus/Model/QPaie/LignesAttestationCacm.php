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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDatePaiementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantPrecompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeureTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbJourTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSalaireBrutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTypeLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroAttestationTrait;

/**
 * Lignes attestation cacm.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesAttestationCacm {

    use DateTimeDateDebutTrait;
    use DateTimeDateFinTrait;
    use DateTimeDatePaiementTrait;
    use FloatMontantTrait;
    use FloatMontantPrecompteTrait;
    use FloatNbHeureTravTrait;
    use FloatNbJourTravTrait;
    use IntNumLigneTrait;
    use StringNumeroAttestationTrait;
    use FloatSalaireBrutTrait;
    use IntTypeLigneTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
