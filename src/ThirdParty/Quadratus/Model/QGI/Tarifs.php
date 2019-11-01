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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolComSurMargeBruteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPrixTtcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixUnitBaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxCommissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDeviseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeNatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeCodeClientTrait;

/**
 * Tarifs.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Tarifs {

    use StringCodeArticleTrait;
    use StringCodeClientTrait;
    use StringCodeDeviseTrait;
    use StringCodeNatureTrait;
    use BoolComSurMargeBruteTrait;
    use BoolPrixTtcTrait;
    use FloatPrixUnitBaseTrait;
    use FloatTauxCommissionTrait;
    use StringTypeCodeArticleTrait;
    use StringTypeCodeClientTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
