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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDebutAffectTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFinAffectTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBudgetDepenseEuroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBudgetDepenseFrfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPourcentUtiliseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMaterielTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheTrait;

/**
 * Affectation materiel.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class AffectationMateriel {

    use FloatBudgetDepenseEuroTrait;
    use FloatBudgetDepenseFrfTrait;
    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeMaterielTrait;
    use StringCodeTacheTrait;
    use DateTimeDebutAffectTrait;
    use DateTimeFinAffectTrait;
    use FloatPourcentUtiliseTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
