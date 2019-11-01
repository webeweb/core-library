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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAssuranceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatEntretienTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatLoyerHtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeurRachatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroCbTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroDeuxCbTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;

/**
 * Tableaux paiements.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class TableauxPaiements {

    use FloatAssuranceTrait;
    use StringCodeTvaTrait;
    use DateTimeDateTrait;
    use FloatEntretienTrait;
    use FloatLoyerHtTrait;
    use IntNumLigneTrait;
    use IntNumeroCbTrait;
    use StringNumeroCompteTrait;
    use IntNumeroDeuxCbTrait;
    use FloatValeurRachatTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
