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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolInverseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeurTotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndicePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntQuiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringClasseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringServiceTrait;

/**
 * Tmp table1.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class TmpTable1 {

    use StringClasseTrait;
    use StringCodeOrganismeTrait;
    use IntEtablissementTrait;
    use IntIndicePeriodeTrait;
    use BoolInverseTrait;
    use DateTimePeriodeTrait;
    use IntQuiTrait;
    use StringServiceTrait;
    use IntTypeTrait;
    use FloatValeurTrait;
    use FloatValeurTotTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
