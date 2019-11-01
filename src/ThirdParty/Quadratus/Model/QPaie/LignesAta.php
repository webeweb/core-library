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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEcheanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatFraisProSoumisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantAvantagesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantCotisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantIndemnitesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxDedSupTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAvantagesEuroOuFrancTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCsEuroOuFrancTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFraisPsEuroOuFrancTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIndemnitesEuroOuFrancTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMontantEuroOuFrancTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroAttestationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumLigneTrait;

/**
 * Lignes ata.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesAta {

    use StringAvantagesEuroOuFrancTrait;
    use StringCsEuroOuFrancTrait;
    use DateTimeDateEcheanceTrait;
    use StringFraisPsEuroOuFrancTrait;
    use FloatFraisProSoumisTrait;
    use StringIndemnitesEuroOuFrancTrait;
    use FloatMontantTrait;
    use FloatMontantAvantagesTrait;
    use FloatMontantCotisTrait;
    use StringMontantEuroOuFrancTrait;
    use FloatMontantIndemnitesTrait;
    use FloatNbHTravTrait;
    use StringNumLigneTrait;
    use StringNumeroAttestationTrait;
    use DateTimePeriodeDebTrait;
    use DateTimePeriodeFinTrait;
    use FloatTauxDedSupTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
