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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGratuitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantCommTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantCouponTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantFraisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixUnitaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSoldeQuantiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntFrancsEurosTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNoLotEcrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumUniqEcrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVmpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoLotTraceTrait;

/**
 * Vmp mouvements.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class VmpMouvements {

    use StringCodeVmpTrait;
    use DateTimeDateTrait;
    use IntFrancsEurosTrait;
    use BoolGratuitTrait;
    use FloatMontantCommTrait;
    use FloatMontantCouponTrait;
    use FloatMontantFraisTrait;
    use IntNoLotEcrTrait;
    use StringNoLotTraceTrait;
    use IntNumLigneTrait;
    use IntNumUniqEcrTrait;
    use FloatPrixUnitaireTrait;
    use FloatQuantiteTrait;
    use FloatSoldeQuantiteTrait;
    use IntTypeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
