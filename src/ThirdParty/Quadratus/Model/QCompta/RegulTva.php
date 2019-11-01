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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTtcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;

/**
 * Regul tva.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class RegulTva {

    use StringCodeTvaTrait;
    use FloatHtTrait;
    use StringLibelleTrait;
    use IntLigneTrait;
    use DateTimePeriodeTrait;
    use FloatTtcTrait;
    use FloatTvaTrait;
    use IntTypeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
