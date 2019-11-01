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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeuresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxMajorationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePrimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeDnjfTrait;

/**
 * Histo paie type2.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class HistoPaieType2 {

    use StringCodeEmployeTrait;
    use StringCodePrimeTrait;
    use FloatNbHeuresTrait;
    use DateTimePeriodeTrait;
    use FloatTauxMajorationTrait;
    use StringTypeDnjfTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
