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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPolice2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPolice3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPoliceTrait;

/**
 * Travaux type entetes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class TravauxTypeEntetes {

    use StringCodeTrait;
    use StringCodeMissionTrait;
    use StringLibelleTrait;
    use StringPoliceTrait;
    use StringPolice2Trait;
    use StringPolice3Trait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
