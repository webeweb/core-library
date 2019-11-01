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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatImmobilisationsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMttAnneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPartsSocialesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatReintAnticipeeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatStocksTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAnneeDedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAnneeUtilisationTrait;

/**
 * Recap dfi.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class RecapDfi {

    use IntAnneeDedTrait;
    use IntAnneeUtilisationTrait;
    use FloatImmobilisationsTrait;
    use FloatMttAnneeTrait;
    use FloatPartsSocialesTrait;
    use FloatReintAnticipeeTrait;
    use FloatStocksTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
