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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolForceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCoeffTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHSupFillonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatReducFillonMajoHeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatReducFillonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRmbMajoHeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRmbTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSmicMTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndicePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;

/**
 * Fillon2012.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Fillon2012 {

    use FloatCoeffTrait;
    use BoolForceTrait;
    use IntIndicePeriodeTrait;
    use FloatNbHSupFillonTrait;
    use StringNumeroEmployeTrait;
    use DateTimePeriodeTrait;
    use FloatRmbTrait;
    use FloatRmbMajoHeTrait;
    use FloatReducFillonTrait;
    use FloatReducFillonMajoHeTrait;
    use FloatSmicMTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
