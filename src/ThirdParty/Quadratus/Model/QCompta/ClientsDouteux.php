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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTxTvaCreanceForceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDouteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtCreanceBaseHtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtCreanceTtcDebExoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtCreanceTtcDevDoutExoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtCreanceTtcIrrecExoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtCreanceTtcReglExoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtProvisionDebExoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtProvisionDotExoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtRepProvisionIrrecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtRepProvisionReglTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxDouteDebExoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxDouteExoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTxTvaCreanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMentionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringObservationsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefImageTrait;

/**
 * Clients douteux.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ClientsDouteux {

    use DateTimeDateDouteTrait;
    use StringMentionTrait;
    use FloatMtCreanceBaseHtTrait;
    use FloatMtCreanceTtcDebExoTrait;
    use FloatMtCreanceTtcDevDoutExoTrait;
    use FloatMtCreanceTtcIrrecExoTrait;
    use FloatMtCreanceTtcReglExoTrait;
    use FloatMtProvisionDebExoTrait;
    use FloatMtProvisionDotExoTrait;
    use FloatMtRepProvisionIrrecTrait;
    use FloatMtRepProvisionReglTrait;
    use StringNumeroCompteTrait;
    use StringObservationsTrait;
    use StringRefImageTrait;
    use FloatTauxDouteDebExoTrait;
    use FloatTauxDouteExoTrait;
    use FloatTxTvaCreanceTrait;
    use BoolTxTvaCreanceForceTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
