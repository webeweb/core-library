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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolActiveConfMenusQb2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolActiveConfMenusQbTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolActiveConfMenusQcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolActiveConfMenusQfactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolActiveConfMenusQgiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolActiveConfMenusQpropTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolActiveConfMenusQpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolActiveConfMenusQtrsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMasquerBaseAccessTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntActivationLstRestriArtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntActivationLstRestriCliTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntActivationLstRestriFrnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSelLstRestriArtDefTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSelLstRestriCliDefTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSelLstRestriFrnDefTrait;

/**
 * Confidentialite.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Confidentialite {

    use IntActivationLstRestriArtTrait;
    use IntActivationLstRestriCliTrait;
    use IntActivationLstRestriFrnTrait;
    use BoolActiveConfMenusQbTrait;
    use BoolActiveConfMenusQb2Trait;
    use BoolActiveConfMenusQcTrait;
    use BoolActiveConfMenusQfactTrait;
    use BoolActiveConfMenusQgiTrait;
    use BoolActiveConfMenusQpTrait;
    use BoolActiveConfMenusQpropTrait;
    use BoolActiveConfMenusQtrsTrait;
    use BoolMasquerBaseAccessTrait;
    use StringSelLstRestriArtDefTrait;
    use StringSelLstRestriCliDefTrait;
    use StringSelLstRestriFrnDefTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
