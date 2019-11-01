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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExceptTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMaiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNormalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatType2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTrait;

/**
 * Constantes majorations.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ConstantesMajorations {

    use FloatExceptTrait;
    use FloatMaiTrait;
    use FloatNormalTrait;
    use StringTypeTrait;
    use FloatType2Trait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
