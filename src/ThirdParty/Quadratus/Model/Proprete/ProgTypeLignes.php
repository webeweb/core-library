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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCoefficientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatVitesseReelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatVitesseTheoriqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumProgrammeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOperationTrait;

/**
 * Prog type lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ProgTypeLignes {

    use StringCodeOperationTrait;
    use FloatCoefficientTrait;
    use IntNumLigneTrait;
    use IntNumProgrammeTrait;
    use FloatVitesseReelleTrait;
    use FloatVitesseTheoriqueTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
