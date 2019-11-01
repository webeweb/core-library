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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollCreatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLstCollabTrait;

/**
 * Stats perso suivi client tetes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class StatsPersoSuiviClientTetes {

    use StringCodeTrait;
    use StringCollCreatTrait;
    use StringCollModifTrait;
    use DateTimeDateCreatTrait;
    use DateTimeDateModifTrait;
    use IntIndiceTrait;
    use StringLibelleTrait;
    use StringLstCollabTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
