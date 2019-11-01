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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCreditClasse15Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCreditClasse67Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCreditClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCreditFournisseurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDebitClasse15Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDebitClasse67Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDebitClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDebitFournisseurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntFolioTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbLigneFolioTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntProchaineLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeJournalTrait;

/**
 * Centralisateur.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Centralisateur {

    use StringCodeJournalTrait;
    use FloatCreditClasse15Trait;
    use FloatCreditClasse67Trait;
    use FloatCreditClientTrait;
    use FloatCreditFournisseurTrait;
    use FloatDebitClasse15Trait;
    use FloatDebitClasse67Trait;
    use FloatDebitClientTrait;
    use FloatDebitFournisseurTrait;
    use IntFolioTrait;
    use IntNbLigneFolioTrait;
    use DateTimePeriodeTrait;
    use IntProchaineLigneTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
