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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCaution2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCaution3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCaution4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCaution5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCautionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSignature2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSignature3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSignature4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSignature5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSignatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCaution2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCaution3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCaution4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCaution5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCautionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantAnnuel2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantAnnuel3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantAnnuel4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantAnnuel5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantAnnuelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantCharges2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantCharges3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantCharges4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantCharges5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantChargesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDureePreavisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDureeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroPjTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumOrdreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringClausespecialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDateAnniversaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMonnaieCautionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMonnaieLoyerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumCptCautionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumCptChargesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumCptLoyerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefImageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringServiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniteDureeTrait;

/**
 * Contratslocatifs.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Contratslocatifs {

    use FloatCautionTrait;
    use FloatCaution2Trait;
    use FloatCaution3Trait;
    use FloatCaution4Trait;
    use FloatCaution5Trait;
    use StringClausespecialeTrait;
    use StringCodeCentreTrait;
    use StringDateAnniversaireTrait;
    use DateTimeDateCautionTrait;
    use DateTimeDateCaution2Trait;
    use DateTimeDateCaution3Trait;
    use DateTimeDateCaution4Trait;
    use DateTimeDateCaution5Trait;
    use DateTimeDateSignatureTrait;
    use DateTimeDateSignature2Trait;
    use DateTimeDateSignature3Trait;
    use DateTimeDateSignature4Trait;
    use DateTimeDateSignature5Trait;
    use IntDureeTrait;
    use IntDureePreavisTrait;
    use StringLibelleTrait;
    use StringMonnaieCautionTrait;
    use StringMonnaieLoyerTrait;
    use FloatMontantAnnuelTrait;
    use FloatMontantAnnuel2Trait;
    use FloatMontantAnnuel3Trait;
    use FloatMontantAnnuel4Trait;
    use FloatMontantAnnuel5Trait;
    use FloatMontantChargesTrait;
    use FloatMontantCharges2Trait;
    use FloatMontantCharges3Trait;
    use FloatMontantCharges4Trait;
    use FloatMontantCharges5Trait;
    use StringNumCptCautionTrait;
    use StringNumCptChargesTrait;
    use StringNumCptLoyerTrait;
    use IntNumOrdreTrait;
    use IntNumeroPjTrait;
    use StringRefImageTrait;
    use StringServiceTrait;
    use StringUniteDureeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
