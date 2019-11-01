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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTransfertAbsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAddedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDebCorrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeFinCorrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePerPaieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbhSaisCorrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbhSaisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbjSaisCorrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbjSaisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumEvenementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAbsCpCorrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAbsCpTrait;

/**
 * Absences excel histo.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class AbsencesExcelHisto {

    use DateTimeDateAddedTrait;
    use StringIdTrait;
    use FloatNbhSaisTrait;
    use FloatNbhSaisCorrTrait;
    use FloatNbjSaisTrait;
    use FloatNbjSaisCorrTrait;
    use IntNumEvenementTrait;
    use StringNumeroEmployeTrait;
    use DateTimePerPaieTrait;
    use DateTimePeriodeDebTrait;
    use DateTimePeriodeDebCorrTrait;
    use DateTimePeriodeFinTrait;
    use DateTimePeriodeFinCorrTrait;
    use BoolTransfertAbsTrait;
    use StringTypeAbsCpTrait;
    use StringTypeAbsCpCorrTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
