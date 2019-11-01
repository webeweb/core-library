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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIsDebitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEcheanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCreditTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDebitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteContrepartieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;

/**
 * Trames lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class TramesLignes {

    use IntCodeTrait;
    use StringCodeAffaireTrait;
    use StringCodeLibAutoTrait;
    use StringCompteTrait;
    use StringCompteContrepartieTrait;
    use FloatCreditTrait;
    use DateTimeDateEcheanceTrait;
    use FloatDebitTrait;
    use BoolIsDebitTrait;
    use StringLibelleTrait;
    use IntNumLigneTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
