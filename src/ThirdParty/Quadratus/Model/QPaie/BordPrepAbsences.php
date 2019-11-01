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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbhSaisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbjSaisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIdTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAbsCpTrait;

/**
 * Bord prep absences.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class BordPrepAbsences {

    use IntIdTrait;
    use FloatNbhSaisTrait;
    use FloatNbjSaisTrait;
    use StringNumeroEmployeTrait;
    use DateTimePeriodeTrait;
    use DateTimePeriodeDebTrait;
    use DateTimePeriodeFinTrait;
    use StringTypeAbsCpTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
