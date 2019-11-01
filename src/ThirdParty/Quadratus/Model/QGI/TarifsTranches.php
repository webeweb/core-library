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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPrixNetTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCoeffTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixUnitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQteMiniTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDeviseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeNatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumTrancheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeCodeClientTrait;

/**
 * Tarifs tranches.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class TarifsTranches {

    use StringCodeArticleTrait;
    use StringCodeClientTrait;
    use StringCodeDeviseTrait;
    use StringCodeNatureTrait;
    use FloatCoeffTrait;
    use DateTimeDateDebutTrait;
    use DateTimeDateFinTrait;
    use StringNumTrancheTrait;
    use BoolPrixNetTrait;
    use FloatPrixUnitTrait;
    use FloatQteMiniTrait;
    use StringTypeCodeArticleTrait;
    use StringTypeCodeClientTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
