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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntOrdreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeElementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGroupeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeElementTrait;

/**
 * Groupe lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class GroupeLignes {

    use StringCodeElementTrait;
    use StringGroupeTrait;
    use IntOrdreTrait;
    use StringTypeElementTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
