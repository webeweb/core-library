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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGestionHotellerieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNonOeuvrantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPlanningDernSemPrioritaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSuiviHeuresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtDernSemGenTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCadenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeBudgetTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMajDimNormalType2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMajJfNormalType2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMajNuitNormalType2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAutoIncrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNiveauQualifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAnalytiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDernSemGenTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePrimeDimanche1Type2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePrimeJf1Type2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePrimeNuit1Type2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDescriptifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFichePosteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPosteRentTrait;

/**
 * Taches.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Taches {

    use IntAutoIncrTrait;
    use FloatCadenceTrait;
    use StringCodeAffaireTrait;
    use StringCodeAnalytiqueTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeDernSemGenTrait;
    use StringCodePrimeDimanche1Type2Trait;
    use StringCodePrimeJf1Type2Trait;
    use StringCodePrimeNuit1Type2Trait;
    use StringCodeTacheTrait;
    use StringCodeTacheTypeTrait;
    use StringDescriptifTrait;
    use DateTimeDtDernSemGenTrait;
    use FloatDureeBudgetTrait;
    use StringFichePosteTrait;
    use BoolGestionHotellerieTrait;
    use FloatMajDimNormalType2Trait;
    use FloatMajJfNormalType2Trait;
    use FloatMajNuitNormalType2Trait;
    use IntNiveauQualifTrait;
    use BoolNonOeuvrantTrait;
    use IntNumBtTrait;
    use BoolPlanningDernSemPrioritaireTrait;
    use StringPosteRentTrait;
    use BoolSuiviHeuresTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
