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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolActiveTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFraisSanteAmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCategSalarieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceCategTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPositionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeConventionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;

/**
 * Conventions col libelles.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class ConventionsColLibelles {

    use BoolActiveTrait;
    use IntCategSalarieTrait;
    use StringCodeConventionTrait;
    use StringCodeLibelleTrait;
    use BoolFraisSanteAmTrait;
    use IntIndiceCategTrait;
    use StringIntituleTrait;
    use IntPositionTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
