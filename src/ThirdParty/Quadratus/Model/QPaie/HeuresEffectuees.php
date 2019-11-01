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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateJourTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHAbsenceCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHjfntTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHMajoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHNuitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHReposCompPrisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHReposRemplacePrisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHTravailReelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbJourCpPrisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbJReposRecupPrisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringHDebAmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringHDebPmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringHFinAmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringHFinPmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;

/**
 * Heures effectuees.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class HeuresEffectuees {

    use DateTimeDateJourTrait;
    use StringHDebAmTrait;
    use StringHDebPmTrait;
    use StringHFinAmTrait;
    use StringHFinPmTrait;
    use FloatNbHAbsenceCpTrait;
    use FloatNbHjfntTrait;
    use FloatNbHMajoTrait;
    use FloatNbHNuitTrait;
    use FloatNbHReposCompPrisTrait;
    use FloatNbHReposRemplacePrisTrait;
    use FloatNbHTravailReelTrait;
    use FloatNbJReposRecupPrisTrait;
    use FloatNbJourCpPrisTrait;
    use StringNumeroEmployeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
