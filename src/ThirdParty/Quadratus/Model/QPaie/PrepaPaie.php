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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCpPrisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHMajoAcquisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHMajoPrisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHorairePrevuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHSupAComptabiliserRcitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHSupAComptabiliserRcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHSupBonifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHCompTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHNuitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPourcentHBonifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRcAcquisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRcPrisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRrAcquisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRRecupAcquisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRRecupPrisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRrPrisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotRealiseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTravailEffectifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSemaineTrait;

/**
 * Prepa paie.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class PrepaPaie {

    use FloatCpPrisTrait;
    use FloatHMajoAcquisTrait;
    use FloatHMajoPrisTrait;
    use FloatHSupAComptabiliserRcTrait;
    use FloatHSupAComptabiliserRcitTrait;
    use FloatHSupBonifTrait;
    use FloatHorairePrevuTrait;
    use FloatNbHCompTrait;
    use FloatNbHNuitTrait;
    use StringNumeroEmployeTrait;
    use DateTimePeriodeTrait;
    use FloatPourcentHBonifTrait;
    use FloatRcAcquisTrait;
    use FloatRcPrisTrait;
    use FloatRrAcquisTrait;
    use FloatRrPrisTrait;
    use FloatRRecupAcquisTrait;
    use FloatRRecupPrisTrait;
    use StringSemaineTrait;
    use FloatTotRealiseTrait;
    use FloatTravailEffectifTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
