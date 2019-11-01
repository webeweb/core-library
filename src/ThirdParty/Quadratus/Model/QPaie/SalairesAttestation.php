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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDatePaieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHeuresTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatJoursNonPayesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrecompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSalaireBrutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEuroOuFrancTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroAttestationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringObservationTrait;

/**
 * Salaires attestation.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class SalairesAttestation {

    use DateTimeDatePaieTrait;
    use StringEuroOuFrancTrait;
    use FloatHeuresTravTrait;
    use FloatJoursNonPayesTrait;
    use StringNumLigneTrait;
    use StringNumeroAttestationTrait;
    use StringObservationTrait;
    use DateTimePeriodeDebTrait;
    use DateTimePeriodeFinTrait;
    use FloatPrecompteTrait;
    use FloatSalaireBrutTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
