<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolActiveTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCategSalarieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceCategTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTypeLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeActiviteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDucsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEditionHistoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMetierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteChargeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringConditionSpecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringExclureLoiTepaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleBulTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringQualifiantCotisTrait;

/**
 * Taux retraite metier.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class TauxRetraiteMetier {

    use BoolActiveTrait;
    use IntCategSalarieTrait;
    use StringCodeActiviteTrait;
    use StringCodeDucsTrait;
    use StringCodeEditionHistoTrait;
    use StringCodeLibelleTrait;
    use StringCodeMetierTrait;
    use StringCodeOrganismeTrait;
    use StringCompteChargeTrait;
    use StringConditionSpecTrait;
    use StringExclureLoiTepaTrait;
    use IntIndiceCategTrait;
    use StringLibelleBulTrait;
    use IntNumLigneTrait;
    use StringQualifiantCotisTrait;
    use IntTypeLibelleTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
