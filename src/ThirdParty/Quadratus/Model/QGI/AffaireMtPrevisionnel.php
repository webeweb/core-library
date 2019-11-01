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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDatePrevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtPhaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtPrevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrctPhaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAvenantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePhaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTrait;

/**
 * Affaire mt previsionnel.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AffaireMtPrevisionnel {

    use StringCodeAffaireTrait;
    use StringCodeAvenantTrait;
    use StringCodePhaseTrait;
    use DateTimeDatePrevTrait;
    use FloatMtPhaseTrait;
    use FloatMtPrevTrait;
    use FloatPrctPhaseTrait;
    use StringTypeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
