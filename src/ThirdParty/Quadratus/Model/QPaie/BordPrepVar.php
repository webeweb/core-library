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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFlagForceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndicePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeModeleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumColTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;

/**
 * Bord prep var.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class BordPrepVar {

    use StringCodeModeleTrait;
    use BoolFlagForceTrait;
    use IntIndicePeriodeTrait;
    use StringIntituleTrait;
    use StringNumColTrait;
    use StringNumeroEmployeTrait;
    use DateTimePeriodeTrait;
    use FloatValeurTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
