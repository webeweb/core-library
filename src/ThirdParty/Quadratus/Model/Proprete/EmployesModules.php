<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDebutModulationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFinModulationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeEcartCumuleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatEcartCumuleInitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;

/**
 * Employes modules.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class EmployesModules {

    use StringCodeEmployeTrait;
    use DateTimeDebutModulationTrait;
    use FloatEcartCumuleInitTrait;
    use DateTimeFinModulationTrait;
    use DateTimePeriodeEcartCumuleTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
