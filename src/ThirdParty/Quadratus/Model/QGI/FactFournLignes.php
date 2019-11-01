<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantCreditTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantDebitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumEnteteTrait;

/**
 * Fact fourn lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class FactFournLignes {

    use StringCodeClientTrait;
    use StringCodeMissionTrait;
    use StringCollaborateurTrait;
    use StringCompteTrait;
    use StringLibelleTrait;
    use FloatMontantCreditTrait;
    use FloatMontantDebitTrait;
    use StringNumEnteteTrait;
    use IntNumLigneTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
