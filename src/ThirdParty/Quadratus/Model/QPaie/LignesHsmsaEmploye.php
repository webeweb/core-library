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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePerDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDeclaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtHsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTauxHsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeUniteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmploye2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeRemunHsTrait;

/**
 * Lignes hsmsa employe.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesHsmsaEmploye {

    use IntCodeEtablissementTrait;
    use StringCodeUniteTrait;
    use IntMtHsTrait;
    use FloatNbHsTrait;
    use StringNumLigneTrait;
    use StringNumeroEmployeTrait;
    use StringNumeroEmploye2Trait;
    use DateTimePerDebTrait;
    use DateTimePeriodeDeclaTrait;
    use IntTauxHsTrait;
    use StringTypeRemunHsTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
