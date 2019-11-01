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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDebutPeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFinPeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantEmployeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTempsArretTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroOrdreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTempsArretTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringQualifUniteTempsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeArretTrait;

/**
 * Dadsubtp.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Dadsubtp {

    use IntCodeEtablissementTrait;
    use StringCodeOrganismeTrait;
    use StringCodeTempsArretTrait;
    use DateTimeDebutPeriodeTrait;
    use DateTimeFinPeriodeTrait;
    use FloatMontantEmployeurTrait;
    use StringNumeroTrait;
    use IntNumeroOrdreTrait;
    use StringQualifUniteTempsTrait;
    use FloatTempsArretTrait;
    use StringTypeArretTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
