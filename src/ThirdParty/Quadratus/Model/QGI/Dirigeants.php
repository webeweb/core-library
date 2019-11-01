<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateNominationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDureeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIdTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDirigeantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFonctionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringObservationsTrait;

/**
 * Dirigeants.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Dirigeants {

    use StringCodeClientTrait;
    use StringCodeDirigeantTrait;
    use StringCodeFonctionTrait;
    use DateTimeDateNominationTrait;
    use IntDureeTrait;
    use IntIdTrait;
    use StringObservationsTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
