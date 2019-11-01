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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCreeParGenPrevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeTimeSuppressionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCleEnregTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomTableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdSynchroTrait;

/**
 * Pointage synchro supprime.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PointageSynchroSupprime {

    use StringCleEnregTrait;
    use BoolCreeParGenPrevTrait;
    use StringNomTableTrait;
    use DateTimeTimeSuppressionTrait;
    use StringUniqIdSynchroTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
