<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDernierSalaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMoyenneSalairesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatProvisionTotaleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSalaireRefTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSoldeJoursN1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSoldeJoursNTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTxChargesSocTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringColPourSalRefTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomCompletEmpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmpTrait;

/**
 * Provisions cp.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ProvisionsCp {

    use StringCentreTrait;
    use StringColPourSalRefTrait;
    use FloatDernierSalaireTrait;
    use FloatMoyenneSalairesTrait;
    use StringNatureTrait;
    use StringNomCompletEmpTrait;
    use StringNumeroEmpTrait;
    use FloatProvisionTotaleTrait;
    use FloatSalaireRefTrait;
    use FloatSoldeJoursNTrait;
    use FloatSoldeJoursN1Trait;
    use FloatTxChargesSocTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
