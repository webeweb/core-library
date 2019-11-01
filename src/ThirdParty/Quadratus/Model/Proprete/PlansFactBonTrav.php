<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPxFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolVentilMargeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCoefficientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroupementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPosteRentTrait;

/**
 * Plans fact bon trav.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PlansFactBonTrav {

    use StringCodeAffaireTrait;
    use StringCodeArticleTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeRegroupementTrait;
    use FloatCoefficientTrait;
    use DateTimeDateBtTrait;
    use StringDesignationTrait;
    use StringDesignation2Trait;
    use StringDesignation3Trait;
    use FloatDureeTrait;
    use IntIndiceTrait;
    use IntNumBtTrait;
    use StringPosteRentTrait;
    use FloatPrixAchatTrait;
    use BoolPxFactureTrait;
    use FloatTauxTrait;
    use BoolVentilMargeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
