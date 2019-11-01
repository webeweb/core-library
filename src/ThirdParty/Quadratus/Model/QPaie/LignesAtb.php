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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateVersementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantCotisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMontantEuroOuFrancTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroAttestationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPsEuroOuFrancTrait;

/**
 * Lignes atb.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesAtb {

    use DateTimeDateVersementTrait;
    use FloatMontantTrait;
    use FloatMontantCotisTrait;
    use StringMontantEuroOuFrancTrait;
    use StringNumLigneTrait;
    use StringNumeroAttestationTrait;
    use StringPsEuroOuFrancTrait;
    use DateTimePeriodeDebTrait;
    use DateTimePeriodeFinTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
