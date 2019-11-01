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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDecTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeEcritureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantHtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumUniqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringJourEcritureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeCdiTrait;

/**
 * Ecritures dec tva.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class EcrituresDecTva {

    use IntCodeTvaTrait;
    use DateTimeDateDecTvaTrait;
    use StringJourEcritureTrait;
    use StringLibelleTrait;
    use FloatMontantHtTrait;
    use IntNumUniqTrait;
    use StringNumeroCompteTrait;
    use DateTimePeriodeEcritureTrait;
    use StringTypeCdiTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
