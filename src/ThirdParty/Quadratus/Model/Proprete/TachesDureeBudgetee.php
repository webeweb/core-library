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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeBudgetee10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeBudgetee11Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeBudgetee12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeBudgetee1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeBudgetee2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeBudgetee3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeBudgetee4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeBudgetee5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeBudgetee6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeBudgetee7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeBudgetee8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeBudgetee9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheTrait;

/**
 * Taches duree budgetee.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class TachesDureeBudgetee {

    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeTacheTrait;
    use FloatDureeBudgetee1Trait;
    use FloatDureeBudgetee10Trait;
    use FloatDureeBudgetee11Trait;
    use FloatDureeBudgetee12Trait;
    use FloatDureeBudgetee2Trait;
    use FloatDureeBudgetee3Trait;
    use FloatDureeBudgetee4Trait;
    use FloatDureeBudgetee5Trait;
    use FloatDureeBudgetee6Trait;
    use FloatDureeBudgetee7Trait;
    use FloatDureeBudgetee8Trait;
    use FloatDureeBudgetee9Trait;
    use IntNumBtTrait;
    use DateTimePeriodeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
