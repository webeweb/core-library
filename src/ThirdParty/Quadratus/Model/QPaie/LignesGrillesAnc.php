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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbMoisEcoulesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeGrilleTrait;

/**
 * Lignes grilles anc.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesGrillesAnc {

    use StringCodeGrilleTrait;
    use IntNbMoisEcoulesTrait;
    use FloatValeurTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
