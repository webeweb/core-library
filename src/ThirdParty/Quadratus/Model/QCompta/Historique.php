<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFlgAnN1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFlgAnN2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFlgAnNTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFlgBudget1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFlgBudget2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNoConvEuroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAnN1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAnN2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAnNTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBudget1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBudget2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntFmtDecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntFmtIntTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAlphaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMemoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRegleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRubTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeZoneTrait;

/**
 * Historique.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Historique {

    use StringAlphaTrait;
    use FloatAnNTrait;
    use FloatAnN1Trait;
    use FloatAnN2Trait;
    use FloatBudget1Trait;
    use FloatBudget2Trait;
    use DateTimeDateTrait;
    use BoolFlgAnNTrait;
    use BoolFlgAnN1Trait;
    use BoolFlgAnN2Trait;
    use BoolFlgBudget1Trait;
    use BoolFlgBudget2Trait;
    use IntFmtDecTrait;
    use IntFmtIntTrait;
    use StringMemoTrait;
    use BoolNoConvEuroTrait;
    use StringRegleTrait;
    use StringRubTrait;
    use StringTypeZoneTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
