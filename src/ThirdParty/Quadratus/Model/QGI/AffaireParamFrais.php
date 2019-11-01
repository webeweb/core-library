<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPourcentageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtFg1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtFg2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrctFg1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrctFg2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAvenantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFraisFixeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePhaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComptesComptablesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTrait;

/**
 * Affaire param frais.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AffaireParamFrais {

    use StringCodeTrait;
    use StringCodeAffaireTrait;
    use StringCodeAvenantTrait;
    use StringCodeFraisFixeTrait;
    use StringCodePhaseTrait;
    use StringComptesComptablesTrait;
    use StringLibelleTrait;
    use FloatMontantTrait;
    use FloatMtFg1Trait;
    use FloatMtFg2Trait;
    use DateTimePeriodeTrait;
    use BoolPourcentageTrait;
    use FloatPrctFg1Trait;
    use FloatPrctFg2Trait;
    use StringTypeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
