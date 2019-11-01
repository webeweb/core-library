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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNatureInactiveTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSuiviAnneeRecolteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntOrdreEditionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringChapitreAffectTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringModeCalculRepartTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSuiviQuantiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeNatureTrait;

/**
 * Natures.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Natures {

    use StringChapitreAffectTrait;
    use StringCodeTrait;
    use StringIntituleTrait;
    use StringModeCalculRepartTrait;
    use BoolNatureInactiveTrait;
    use IntOrdreEditionTrait;
    use BoolSuiviAnneeRecolteTrait;
    use StringSuiviQuantiteTrait;
    use StringTypeNatureTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
