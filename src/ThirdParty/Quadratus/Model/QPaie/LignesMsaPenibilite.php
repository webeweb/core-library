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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtDebPenibiliteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtDebPerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtFinPenibiliteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtFinPerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDeclaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRisque10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRisque1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRisque2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRisque3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRisque4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRisque5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRisque6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRisque7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRisque8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRisque9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeUniteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;

/**
 * Lignes msa penibilite.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesMsaPenibilite {

    use IntCodeEtablissementTrait;
    use StringCodeRisque1Trait;
    use StringCodeRisque10Trait;
    use StringCodeRisque2Trait;
    use StringCodeRisque3Trait;
    use StringCodeRisque4Trait;
    use StringCodeRisque5Trait;
    use StringCodeRisque6Trait;
    use StringCodeRisque7Trait;
    use StringCodeRisque8Trait;
    use StringCodeRisque9Trait;
    use StringCodeUniteTrait;
    use DateTimeDtDebPenibiliteTrait;
    use DateTimeDtDebPerTrait;
    use DateTimeDtFinPenibiliteTrait;
    use DateTimeDtFinPerTrait;
    use StringNumeroEmployeTrait;
    use DateTimePeriodeDeclaTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
