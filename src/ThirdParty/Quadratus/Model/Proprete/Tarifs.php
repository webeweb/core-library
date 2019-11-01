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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPrixNetTr1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPrixNetTr2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPrixNetTr3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPrixNetTr4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPrixNetTr5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPuArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCoeffTr1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCoeffTr2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCoeffTr3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCoeffTr4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCoeffTr5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPuBaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPuTr1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPuTr2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPuTr3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPuTr4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPuTr5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQteTr1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQteTr2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQteTr3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQteTr4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQteTr5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeColCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeColModificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFamArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFamClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSousFamClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAppliCoefTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeArticleTrait;

/**
 * Tarifs.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Tarifs {

    use StringCodeAffaireTrait;
    use StringCodeArticleTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeColCreationTrait;
    use StringCodeColModificationTrait;
    use FloatCoeffTr1Trait;
    use FloatCoeffTr2Trait;
    use FloatCoeffTr3Trait;
    use FloatCoeffTr4Trait;
    use FloatCoeffTr5Trait;
    use DateTimeDateCreationTrait;
    use DateTimeDateDebutTrait;
    use DateTimeDateFinTrait;
    use DateTimeDateModificationTrait;
    use StringFamArticleTrait;
    use StringFamClientTrait;
    use BoolPuArticleTrait;
    use FloatPuBaseTrait;
    use FloatPuTr1Trait;
    use FloatPuTr2Trait;
    use FloatPuTr3Trait;
    use FloatPuTr4Trait;
    use FloatPuTr5Trait;
    use BoolPrixNetTr1Trait;
    use BoolPrixNetTr2Trait;
    use BoolPrixNetTr3Trait;
    use BoolPrixNetTr4Trait;
    use BoolPrixNetTr5Trait;
    use FloatQteTr1Trait;
    use FloatQteTr2Trait;
    use FloatQteTr3Trait;
    use FloatQteTr4Trait;
    use FloatQteTr5Trait;
    use StringSousFamClientTrait;
    use StringTypeAppliCoefTrait;
    use StringTypeArticleTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
