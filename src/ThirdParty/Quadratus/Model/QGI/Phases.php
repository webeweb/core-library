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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSaisieFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSaisieTempsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumOrdreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroupementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;

/**
 * Phases.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Phases {

    use StringCodeTrait;
    use StringCodeRegroupementTrait;
    use StringLibelleTrait;
    use IntNumOrdreTrait;
    use BoolSaisieFactTrait;
    use BoolSaisieTempsTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
