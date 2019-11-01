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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBmCalculeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateBmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBonusTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMalusTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMonnaieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroBmTrait;

/**
 * Boni mali.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class BoniMali {

    use BoolBmCalculeTrait;
    use FloatBonusTrait;
    use StringCodeClientTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeMissionTrait;
    use DateTimeDateBmTrait;
    use StringLibelleTrait;
    use FloatMalusTrait;
    use StringMonnaieTrait;
    use StringNumeroBmTrait;
    use IntNumeroLigneTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
