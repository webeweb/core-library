<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPourcentageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantite1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantite2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAnneeRecolteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeNatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSensTrait;

/**
 * Affectation ana3.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class AffectationAna3 {

    use StringAnneeRecolteTrait;
    use StringCodeCentreTrait;
    use StringCodeNatureTrait;
    use FloatMontantTrait;
    use StringNumCompteTrait;
    use FloatPourcentageTrait;
    use FloatQuantite1Trait;
    use FloatQuantite2Trait;
    use StringSensTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
