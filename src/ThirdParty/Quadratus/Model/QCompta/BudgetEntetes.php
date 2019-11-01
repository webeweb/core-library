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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumColRefTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringArrondiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeBudgetTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefImageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeColRefTrait;

/**
 * Budget entetes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class BudgetEntetes {

    use StringArrondiTrait;
    use StringCodeBudgetTrait;
    use StringLibelleTrait;
    use IntNumColRefTrait;
    use DateTimePeriodeDebutTrait;
    use DateTimePeriodeFinTrait;
    use StringRefImageTrait;
    use StringTypeColRefTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
