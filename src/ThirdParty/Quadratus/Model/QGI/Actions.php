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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRelationQhTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantiteHeureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeCalculTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeActionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDescriptifCourtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDescriptifLongTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringObligationLieeTrait;

/**
 * Actions.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Actions {

    use StringCodeActionTrait;
    use IntCodeCalculTrait;
    use StringDescriptifCourtTrait;
    use StringDescriptifLongTrait;
    use StringObligationLieeTrait;
    use FloatQuantiteHeureTrait;
    use BoolRelationQhTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
