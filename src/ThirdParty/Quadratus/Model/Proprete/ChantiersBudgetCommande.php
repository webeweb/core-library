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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBudgetCommande10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBudgetCommande11Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBudgetCommande12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBudgetCommande1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBudgetCommande2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBudgetCommande3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBudgetCommande4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBudgetCommande5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBudgetCommande6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBudgetCommande7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBudgetCommande8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBudgetCommande9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;

/**
 * Chantiers budget commande.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersBudgetCommande {

    use FloatBudgetCommande1Trait;
    use FloatBudgetCommande10Trait;
    use FloatBudgetCommande11Trait;
    use FloatBudgetCommande12Trait;
    use FloatBudgetCommande2Trait;
    use FloatBudgetCommande3Trait;
    use FloatBudgetCommande4Trait;
    use FloatBudgetCommande5Trait;
    use FloatBudgetCommande6Trait;
    use FloatBudgetCommande7Trait;
    use FloatBudgetCommande8Trait;
    use FloatBudgetCommande9Trait;
    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use DateTimePeriodeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
