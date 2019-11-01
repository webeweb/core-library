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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolActifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDans1GroupeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEcheanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantGroupeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSaisiCreditTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSaisiDebitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTenuCreditTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTenuDebitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumGroupeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLotLcrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLotLettrePTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLotTraiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumUniqEcritureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumUniqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAutreDomBanqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAutreRibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeJournalBanqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeModePaiementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoRibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReferenceTireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeReglementTrait;

/**
 * Reglements aux.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ReglementsAux {

    use BoolActifTrait;
    use StringAutreDomBanqueTrait;
    use StringAutreRibTrait;
    use StringCodeJournalBanqueTrait;
    use StringCodeModePaiementTrait;
    use BoolDans1GroupeTrait;
    use DateTimeDateEcheanceTrait;
    use FloatMontantGroupeTrait;
    use FloatMontantSaisiCreditTrait;
    use FloatMontantSaisiDebitTrait;
    use FloatMontantTenuCreditTrait;
    use FloatMontantTenuDebitTrait;
    use StringNoRibTrait;
    use IntNumGroupeTrait;
    use IntNumLotLcrTrait;
    use IntNumLotLettrePTrait;
    use IntNumLotTraiteTrait;
    use IntNumUniqTrait;
    use IntNumUniqEcritureTrait;
    use StringNumeroCompteTrait;
    use StringReferenceTireTrait;
    use StringTypeReglementTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
