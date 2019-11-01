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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeReguleTraiteeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIdRecapTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroOrdreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollabTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIndiceBulTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;

/**
 * Emp recap penibilite.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpRecapPenibilite {

    use StringCodeCollabTrait;
    use DateTimeDateCreatTrait;
    use DateTimeDateDebutTrait;
    use DateTimeDateFinTrait;
    use DateTimeDateModifTrait;
    use StringEtatTrait;
    use IntIdRecapTrait;
    use StringIndiceBulTrait;
    use StringNumeroEmployeTrait;
    use IntNumeroOrdreTrait;
    use DateTimeReguleTraiteeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
