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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTransfertEsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTravailTempTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinPeriodeEssaiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateNotificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateRenouvCdd1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateRenouvCdd2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMotifRuptureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEntrepriseTravailTempTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeEsTrait;

/**
 * Entree sortie emp.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EntreeSortieEmp {

    use StringCodeCollaborateurTrait;
    use StringCodeMotifRuptureTrait;
    use DateTimeDateEsTrait;
    use DateTimeDateFinPeriodeEssaiTrait;
    use DateTimeDateModificationTrait;
    use DateTimeDateNotificationTrait;
    use DateTimeDateRenouvCdd1Trait;
    use DateTimeDateRenouvCdd2Trait;
    use StringEntrepriseTravailTempTrait;
    use StringNumeroEmployeTrait;
    use BoolTransfertEsTrait;
    use BoolTravailTempTrait;
    use StringTypeEsTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
