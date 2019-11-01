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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolActiveTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbhDifPrisHorsWTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbhDiFPrisWTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHFormationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTypeFormationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDescriptionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLieuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOrganismeTrait;

/**
 * Formations.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Formations {

    use BoolActiveTrait;
    use StringDescriptionTrait;
    use StringIdTrait;
    use StringLienDocumentTrait;
    use StringLieuTrait;
    use FloatNbHFormationTrait;
    use FloatNbhDifPrisHorsWTrait;
    use FloatNbhDiFPrisWTrait;
    use StringNumeroEmployeTrait;
    use StringOrganismeTrait;
    use DateTimePeriodeDebTrait;
    use DateTimePeriodeFinTrait;
    use IntTypeFormationTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
