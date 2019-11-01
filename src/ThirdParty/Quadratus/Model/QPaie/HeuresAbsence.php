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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeAbsenceAuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeAbsenceDuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateJourTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHaReintegrerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHNonEffectueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHRetenueSalaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTransfereTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAbsenceTrait;

/**
 * Heures absence.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class HeuresAbsence {

    use DateTimeAbsenceAuTrait;
    use DateTimeAbsenceDuTrait;
    use DateTimeDateJourTrait;
    use FloatNbHaReintegrerTrait;
    use FloatNbHNonEffectueTrait;
    use FloatNbHRetenueSalaireTrait;
    use StringNumeroEmployeTrait;
    use StringTransfereTrait;
    use StringTypeAbsenceTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
