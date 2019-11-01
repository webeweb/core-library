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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtBrutExoAbatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtBrutExoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbJhExoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPourcentMajoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndicePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeExoTrait;

/**
 * H sup tepa bul.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class HSupTepaBul {

    use IntIndicePeriodeTrait;
    use FloatMtBrutExoTrait;
    use FloatMtBrutExoAbatTrait;
    use FloatNbJhExoTrait;
    use IntNumLigneTrait;
    use StringNumeroEmployeTrait;
    use DateTimePeriodeTrait;
    use FloatPourcentMajoTrait;
    use StringTypeExoTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
