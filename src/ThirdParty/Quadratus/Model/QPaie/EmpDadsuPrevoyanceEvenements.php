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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolADeclarerDsnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEvenementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEvenementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOptionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePopulationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefContratTrait;

/**
 * Emp dadsu prevoyance evenements.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuPrevoyanceEvenements {

    use BoolADeclarerDsnTrait;
    use StringCodeEvenementTrait;
    use StringCodeOptionTrait;
    use StringCodeOrganismeTrait;
    use StringCodePopulationTrait;
    use DateTimeDateEvenementTrait;
    use StringNumeroEmployeTrait;
    use StringRefContratTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
