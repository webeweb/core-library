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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTypeGrilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeConventionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeGrilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;

/**
 * Conventions col grilles anc.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class ConventionsColGrillesAnc {

    use StringCodeConventionTrait;
    use StringCodeGrilleTrait;
    use StringIntituleTrait;
    use IntTypeGrilleTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
