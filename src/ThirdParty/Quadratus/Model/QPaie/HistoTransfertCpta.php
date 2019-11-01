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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEcritureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTransfertTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeJournalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTransfertTrait;

/**
 * Histo transfert cpta.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class HistoTransfertCpta {

    use IntCodeEtablissementTrait;
    use StringCodeJournalTrait;
    use DateTimeDateEcritureTrait;
    use IntNumLotTrait;
    use DateTimePeriodeTransfertTrait;
    use StringTypeTransfertTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
