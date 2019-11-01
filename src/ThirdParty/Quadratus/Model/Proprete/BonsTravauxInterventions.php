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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDimancheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolJeudiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolLundiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMardiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMercrediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSamediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolVendrediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumSemTrait;

/**
 * Bons travaux interventions.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class BonsTravauxInterventions {

    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use BoolDimancheTrait;
    use BoolJeudiTrait;
    use BoolLundiTrait;
    use BoolMardiTrait;
    use BoolMercrediTrait;
    use IntNumBtTrait;
    use StringNumSemTrait;
    use BoolSamediTrait;
    use BoolVendrediTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
