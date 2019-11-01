<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolHcrPayeesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatEcartCumuleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHnpComplHTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHnphc11Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHnphc25Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHnphc33Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbComplHTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHAbsJfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHAbsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHComplTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHprevuesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHRemplTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;

/**
 * Histo transf paie.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class HistoTransfPaie {

    use StringCodeEmployeTrait;
    use FloatEcartCumuleTrait;
    use BoolHcrPayeesTrait;
    use FloatHnpComplHTrait;
    use FloatHnphc11Trait;
    use FloatHnphc25Trait;
    use FloatHnphc33Trait;
    use FloatNbComplHTrait;
    use FloatNbHAbsTrait;
    use FloatNbHAbsJfTrait;
    use FloatNbHComplTrait;
    use FloatNbHRemplTrait;
    use FloatNbHprevuesTrait;
    use DateTimePeriodeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
