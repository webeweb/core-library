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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontant2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtBrutPerteSalaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbCTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbETrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSalaireRetTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSommeRegul1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSommeRegul2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMontantEuroOuFrancTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMotifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroAttestationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSalRetEuroOuFrancTrait;

/**
 * Lignes ijss.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesIjss {

    use FloatMontantTrait;
    use FloatMontant2Trait;
    use StringMontantEuroOuFrancTrait;
    use StringMotifTrait;
    use FloatMtBrutPerteSalaireTrait;
    use FloatNbCTrait;
    use FloatNbETrait;
    use StringNumLigneTrait;
    use StringNumeroAttestationTrait;
    use DateTimePeriodeDebTrait;
    use DateTimePeriodeFinTrait;
    use StringSalRetEuroOuFrancTrait;
    use FloatSalaireRetTrait;
    use FloatSommeRegul1Trait;
    use FloatSommeRegul2Trait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
