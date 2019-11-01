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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateRemboursementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDontAssuranceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDontCapitalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDontInteretTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantRembourTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRestantDuAvantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;

/**
 * Emprunts lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class EmpruntsLignes {

    use DateTimeDateRemboursementTrait;
    use FloatDontAssuranceTrait;
    use FloatDontCapitalTrait;
    use FloatDontInteretTrait;
    use FloatMontantRembourTrait;
    use IntNumLigneTrait;
    use IntNumeroTrait;
    use FloatRestantDuAvantTrait;
    use FloatTauxLigneTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
