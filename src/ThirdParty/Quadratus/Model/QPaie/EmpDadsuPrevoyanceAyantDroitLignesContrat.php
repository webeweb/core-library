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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroAyantDroitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOptionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePopulationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefContratTrait;

/**
 * Emp dadsu prevoyance ayant droit lignes contrat.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuPrevoyanceAyantDroitLignesContrat {

    use StringCodeOptionTrait;
    use StringCodeOrganismeTrait;
    use StringCodePopulationTrait;
    use DateTimeDebutPeriodeTrait;
    use DateTimeFinPeriodeTrait;
    use IntNumeroAyantDroitTrait;
    use StringNumeroEmployeTrait;
    use StringRefContratTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
