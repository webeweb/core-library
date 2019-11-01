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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxPatronalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxSalarialTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroTauxTrait;

/**
 * Taux plan paie.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class TauxPlanPaie {

    use DateTimeAPartirDeTrait;
    use IntCodeEtablissementTrait;
    use BoolFormatNonEtenduTrait;
    use IntNumeroTauxTrait;
    use FloatTauxPatronalTrait;
    use FloatTauxSalarialTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
