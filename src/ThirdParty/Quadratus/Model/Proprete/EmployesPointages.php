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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateValidationSynchroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodePointageClotureeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodePrevisionnelGenereeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaboValidTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdSynchroTrait;

/**
 * Employes pointages.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class EmployesPointages {

    use StringCodeCollaboValidTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeEmployeTrait;
    use DateTimeDateValidationSynchroTrait;
    use StringEtatTrait;
    use DateTimePeriodePointageClotureeTrait;
    use DateTimePeriodePrevisionnelGenereeTrait;
    use StringUniqIdSynchroTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
