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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeRappelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNombrePrimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxPrimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroPrimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePrimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypePrimeTrait;

/**
 * Histo paie primes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class HistoPaiePrimes {

    use StringCodeEmployeTrait;
    use StringCodePrimeTrait;
    use FloatNombrePrimeTrait;
    use IntNumeroPrimeTrait;
    use DateTimePeriodeTrait;
    use DateTimePeriodeRappelTrait;
    use FloatTauxPrimeTrait;
    use StringTypePrimeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
