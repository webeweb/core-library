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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVentilFournTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteVentilTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;

/**
 * Const tab ventil achat.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ConstTabVentilAchat {

    use StringCodeVentilArticleTrait;
    use StringCodeVentilFournTrait;
    use StringCompteVentilTrait;
    use StringLibelleTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
