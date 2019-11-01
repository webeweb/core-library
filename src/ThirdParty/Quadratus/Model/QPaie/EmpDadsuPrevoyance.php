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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAncienBrancheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAncienCollegeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAncienPosteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePremDateEntreeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffilSecuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNbEnfantsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRangNaissanceTrait;

/**
 * Emp dadsu prevoyance.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuPrevoyance {

    use StringCodeAffilSecuTrait;
    use DateTimeDateAncienBrancheTrait;
    use DateTimeDateAncienCollegeTrait;
    use DateTimeDateAncienPosteTrait;
    use StringNbEnfantsTrait;
    use StringNumeroEmployeTrait;
    use DateTimePremDateEntreeTrait;
    use StringRangNaissanceTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
