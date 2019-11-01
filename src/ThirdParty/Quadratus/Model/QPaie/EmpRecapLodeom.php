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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBrutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDifferenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbhrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatReducBulTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatReducRecalcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatShbTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndicePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;

/**
 * Emp recap lodeom.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpRecapLodeom {

    use FloatBrutTrait;
    use StringCodeCentreTrait;
    use StringCodeEtablissementTrait;
    use StringCodeOrganismeTrait;
    use FloatDifferenceTrait;
    use IntIndicePeriodeTrait;
    use FloatNbhrTrait;
    use StringNomEmployeTrait;
    use StringNumeroEmployeTrait;
    use DateTimePeriodeTrait;
    use FloatReducBulTrait;
    use FloatReducRecalcTrait;
    use FloatShbTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
