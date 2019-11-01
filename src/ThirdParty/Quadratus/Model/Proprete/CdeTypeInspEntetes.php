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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtValiditeDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtValiditeFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantBudgetTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantHtCdeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeInspecteurTrait;

/**
 * Cde type insp entetes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class CdeTypeInspEntetes {

    use StringCodeInspecteurTrait;
    use DateTimeDtValiditeDebutTrait;
    use DateTimeDtValiditeFinTrait;
    use FloatMontantBudgetTrait;
    use FloatMontantHtCdeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
