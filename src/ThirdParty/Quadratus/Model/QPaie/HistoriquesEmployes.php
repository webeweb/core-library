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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringChapitreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollCreatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDescriptionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGUniqIdTrait;

/**
 * Historiques employes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class HistoriquesEmployes {

    use StringChapitreTrait;
    use StringCollCreatTrait;
    use StringCollModifTrait;
    use DateTimeDateCreatTrait;
    use DateTimeDateModifTrait;
    use StringDescriptionTrait;
    use StringGUniqIdTrait;
    use IntIndiceTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
