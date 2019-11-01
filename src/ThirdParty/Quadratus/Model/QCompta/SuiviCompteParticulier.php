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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateOperationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeEcritureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTenuCreditTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTenuDebitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntFolioTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntLigneFolioTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumUniqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeJournalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLettrageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibelleAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOperateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringJourEcritureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroPieceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeOperationTrait;

/**
 * Suivi compte particulier.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class SuiviCompteParticulier {

    use StringCodeJournalTrait;
    use StringCodeLettrageTrait;
    use StringCodeLibelleAutoTrait;
    use StringCodeOperateurTrait;
    use DateTimeDateOperationTrait;
    use IntFolioTrait;
    use StringJourEcritureTrait;
    use StringLibelleTrait;
    use IntLigneFolioTrait;
    use FloatMontantTenuCreditTrait;
    use FloatMontantTenuDebitTrait;
    use IntNumUniqTrait;
    use StringNumeroCompteTrait;
    use StringNumeroPieceTrait;
    use DateTimePeriodeEcritureTrait;
    use StringTypeLigneTrait;
    use StringTypeOperationTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
