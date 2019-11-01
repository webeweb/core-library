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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSaisieManuelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMttTauxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeurTauxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntColonneTauxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCalcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRacineCptTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeControleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeLigneTrait;

/**
 * Controle tva.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ControleTva {

    use StringCodeCalcTrait;
    use FloatCodeTvaTrait;
    use IntColonneTauxTrait;
    use StringIntituleTrait;
    use FloatMttTauxTrait;
    use IntNumLigneTrait;
    use StringRacineCptTrait;
    use BoolSaisieManuelleTrait;
    use StringTypeControleTrait;
    use StringTypeLigneTrait;
    use FloatValeurTauxTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
