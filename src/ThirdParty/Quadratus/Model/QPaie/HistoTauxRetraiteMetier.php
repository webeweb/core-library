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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFormatNonEtenduTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeAPartirDeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxPatronalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxSalarialTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCategSalarieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceCategTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeActiviteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMetierTrait;

/**
 * Histo taux retraite metier.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class HistoTauxRetraiteMetier {

    use DateTimeAPartirDeTrait;
    use IntCategSalarieTrait;
    use StringCodeActiviteTrait;
    use StringCodeLibelleTrait;
    use StringCodeMetierTrait;
    use BoolFormatNonEtenduTrait;
    use IntIndiceCategTrait;
    use FloatMontantTrait;
    use FloatTauxPatronalTrait;
    use FloatTauxSalarialTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
