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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeRefEcrPeriodeEcritureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixU2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixUTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantite2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntRefEcrFolioTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntRefEcrLigneFolioTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntRefEcrNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAnneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleEcritureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefEcrCodeJournalTrait;

/**
 * Stocks.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Stocks {

    use StringAnneeTrait;
    use StringCentreTrait;
    use StringLibelleEcritureTrait;
    use FloatMontantTrait;
    use StringNatureTrait;
    use IntNumLigneTrait;
    use StringNumeroCompteTrait;
    use DateTimePeriodeTrait;
    use FloatPrixUTrait;
    use FloatPrixU2Trait;
    use FloatQuantiteTrait;
    use FloatQuantite2Trait;
    use StringRefEcrCodeJournalTrait;
    use IntRefEcrFolioTrait;
    use IntRefEcrLigneFolioTrait;
    use IntRefEcrNumLigneTrait;
    use DateTimeRefEcrPeriodeEcritureTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
