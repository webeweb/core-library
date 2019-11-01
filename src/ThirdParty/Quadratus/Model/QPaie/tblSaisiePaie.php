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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAddedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeRappelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntFlagTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIdTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndicePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPositTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeUserTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntitule2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMoisDebFixeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMoisFinFixeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeLigneTrait;

/**
 * tbl saisie paie.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class tblSaisiePaie {

    use StringCodeLibelleTrait;
    use StringCodeUserTrait;
    use DateTimeDateAddedTrait;
    use IntFlagTrait;
    use IntIdTrait;
    use IntIndicePeriodeTrait;
    use StringIntituleTrait;
    use StringIntitule2Trait;
    use StringMoisDebFixeTrait;
    use StringMoisFinFixeTrait;
    use StringNumeroEmployeTrait;
    use DateTimePeriodeTrait;
    use DateTimePeriodeRappelTrait;
    use IntPositTrait;
    use StringTypeLigneTrait;
    use FloatValeur1Trait;
    use FloatValeur2Trait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
