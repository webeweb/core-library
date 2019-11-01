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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolHSoldeesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbrHeuresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixHeureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNiveauTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollabTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumUniqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAffectationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdLmTrait;

/**
 * Budget l.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class BudgetL {

    use StringCodeClientTrait;
    use StringCodeCollabTrait;
    use StringCodeMissionTrait;
    use StringCodeTvaTrait;
    use StringCodeTravailTrait;
    use BoolHSoldeesTrait;
    use FloatNbrHeuresTrait;
    use IntNiveauTrait;
    use StringNomTravailTrait;
    use IntNumLigneTrait;
    use StringNumUniqTrait;
    use DateTimePeriodeTrait;
    use FloatPrixHeureTrait;
    use FloatQuantiteTrait;
    use StringTypeAffectationTrait;
    use StringUniqIdLmTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
