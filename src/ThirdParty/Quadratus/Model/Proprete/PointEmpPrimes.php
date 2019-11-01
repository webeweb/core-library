<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDefautTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateApplicationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateValidationSynchroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeureMajorationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNombrePrimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxPrimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroPrimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaboValidTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePrimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheTypeBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeMajoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypePrimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdSynchroTrait;

/**
 * Point emp primes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PointEmpPrimes {

    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeCollaboValidTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeEmployeTrait;
    use StringCodePrimeTrait;
    use StringCodeTacheTrait;
    use StringCodeTacheTypeBtTrait;
    use DateTimeDateApplicationTrait;
    use DateTimeDateValidationSynchroTrait;
    use BoolDefautTrait;
    use StringEtatTrait;
    use FloatNbHeureMajorationTrait;
    use FloatNombrePrimeTrait;
    use IntNumBtTrait;
    use IntNumeroPrimeTrait;
    use DateTimePeriodeTrait;
    use FloatTauxPrimeTrait;
    use StringTypeMajoTrait;
    use StringTypePrimeTrait;
    use StringUniqIdSynchroTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
