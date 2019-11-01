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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroAyantDroitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAChargeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffilSecuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAutreCouvertureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeExtensionSecuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeScolariseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNirRattachementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNirTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrenomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRangNaissanceTrait;

/**
 * Emp dadsu prevoyance ayant droit.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuPrevoyanceAyantDroit {

    use StringCodeAChargeTrait;
    use StringCodeAffilSecuTrait;
    use StringCodeAutreCouvertureTrait;
    use StringCodeExtensionSecuTrait;
    use StringCodeScolariseTrait;
    use StringCodeTypeTrait;
    use DateTimeDateNaissanceTrait;
    use StringNirTrait;
    use StringNirRattachementTrait;
    use StringNomTrait;
    use IntNumeroAyantDroitTrait;
    use StringNumeroEmployeTrait;
    use StringPrenomTrait;
    use StringRangNaissanceTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
