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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtCourrierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtDebutSaisieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtFinSaisieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtCreanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtDejaPayeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNbAChargeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomTribunalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeSaisieTrait;

/**
 * Saisie arret.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class SaisieArret {

    use DateTimeDtCourrierTrait;
    use DateTimeDtDebutSaisieTrait;
    use DateTimeDtFinSaisieTrait;
    use StringLibelleTrait;
    use FloatMtCreanceTrait;
    use FloatMtDejaPayeTrait;
    use StringNbAChargeTrait;
    use StringNomTribunalTrait;
    use StringNumeroEmployeTrait;
    use StringTypeSaisieTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
