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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEffetTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeObligationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringParTrait;

/**
 * Obligations pointees.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ObligationsPointees {

    use StringCodeClientTrait;
    use StringCodeObligationTrait;
    use DateTimeDateEffetTrait;
    use DateTimeLeTrait;
    use StringParTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
