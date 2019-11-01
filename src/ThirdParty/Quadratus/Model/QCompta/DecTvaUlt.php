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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePerDecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePerDecUltTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeEcritureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantHtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCompteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntFolioTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntLigneFolioTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumUniqEcrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeJournalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleEcrTrait;

/**
 * Dec tva ult.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DecTvaUlt {

    use StringCodeJournalTrait;
    use IntCodeTvaTrait;
    use IntCompteurTrait;
    use IntFolioTrait;
    use StringLibelleEcrTrait;
    use IntLigneFolioTrait;
    use FloatMontantHtTrait;
    use FloatMontantTvaTrait;
    use IntNumLigneTrait;
    use IntNumUniqEcrTrait;
    use DateTimePerDecTrait;
    use DateTimePerDecUltTrait;
    use DateTimePeriodeEcritureTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
