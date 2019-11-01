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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolLiaisonEcritureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeEcritureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTenuCreditTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTenuDebitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantite2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntFolioTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumEcrEcoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeJournalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibelleAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringJourEcritureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoLotTraceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;

/**
 * Ecritures eco.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class EcrituresEco {

    use StringCentreTrait;
    use StringCodeJournalTrait;
    use StringCodeLibelleAutoTrait;
    use IntFolioTrait;
    use StringJourEcritureTrait;
    use BoolLiaisonEcritureTrait;
    use StringLibelleTrait;
    use FloatMontantTenuCreditTrait;
    use FloatMontantTenuDebitTrait;
    use StringNatureTrait;
    use StringNoLotTraceTrait;
    use IntNumEcrEcoTrait;
    use StringNumeroCompteTrait;
    use DateTimePeriodeEcritureTrait;
    use FloatQuantiteTrait;
    use FloatQuantite2Trait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
