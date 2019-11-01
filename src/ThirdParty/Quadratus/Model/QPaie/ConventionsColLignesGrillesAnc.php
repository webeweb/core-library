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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeConventionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;

/**
 * Conventions col lignes grilles anc.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class ConventionsColLignesGrillesAnc {

    use StringCodeTrait;
    use StringCodeConventionTrait;
    use IntNbMoisEcoulesTrait;
    use FloatValeurTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
