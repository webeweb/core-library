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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAvantageNatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatIndemniteRbtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontant1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontant2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRetenueSourceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTvadaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNature1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNature2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeIrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeRsTrait;

/**
 * Comptes das2.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ComptesDas2 {

    use FloatAvantageNatureTrait;
    use FloatIndemniteRbtTrait;
    use FloatMontant1Trait;
    use FloatMontant2Trait;
    use StringNature1Trait;
    use StringNature2Trait;
    use StringNumeroCompteTrait;
    use FloatRetenueSourceTrait;
    use FloatTvadaTrait;
    use StringTypeAnTrait;
    use StringTypeIrTrait;
    use StringTypeRsTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
