<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbUoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRepartitionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNiveauLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPoliceTrait;

/**
 * Travaux type lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class TravauxTypeLignes {

    use StringCodeRepartitionTrait;
    use StringCodeTravailTrait;
    use StringLibelleTrait;
    use FloatNbUoTrait;
    use StringNiveauLigneTrait;
    use IntNumeroLigneTrait;
    use StringPoliceTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
