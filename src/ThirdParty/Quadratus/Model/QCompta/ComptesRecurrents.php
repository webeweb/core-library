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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDernierAccesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbAccesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteRecurrentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteTrait;

/**
 * Comptes recurrents.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ComptesRecurrents {

    use StringCompteTrait;
    use StringCompteRecurrentTrait;
    use DateTimeDateDernierAccesTrait;
    use IntNbAccesTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
