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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVentilArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVentilClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteVentilTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;

/**
 * Const tab ventil vente.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ConstTabVentilVente {

    use StringCodeVentilArticleTrait;
    use StringCodeVentilClientTrait;
    use StringCompteVentilTrait;
    use StringLibelleTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
