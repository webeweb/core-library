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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateHeureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIdActionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDescriptionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringResultatTrait;

/**
 * Suivi activite.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class SuiviActivite {

    use StringCodeCollTrait;
    use DateTimeDateHeureTrait;
    use StringDescriptionTrait;
    use IntIdActionTrait;
    use StringResultatTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
