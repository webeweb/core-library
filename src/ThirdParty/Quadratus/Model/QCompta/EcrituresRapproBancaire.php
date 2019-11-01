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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRapproBancaireOkTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateRapproBancaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeEcritureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSaisiCreditTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSaisiDebitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTenuCreditTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTenuDebitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumUniqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDeviseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringJourEcritureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringJrnRapproBancaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroPieceTrait;

/**
 * Ecritures rappro bancaire.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class EcrituresRapproBancaire {

    use StringCodeDeviseTrait;
    use DateTimeDateRapproBancaireTrait;
    use StringJourEcritureTrait;
    use StringJrnRapproBancaireTrait;
    use StringLibelleTrait;
    use FloatMontantSaisiCreditTrait;
    use FloatMontantSaisiDebitTrait;
    use FloatMontantTenuCreditTrait;
    use FloatMontantTenuDebitTrait;
    use IntNumUniqTrait;
    use StringNumeroPieceTrait;
    use DateTimePeriodeEcritureTrait;
    use BoolRapproBancaireOkTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
