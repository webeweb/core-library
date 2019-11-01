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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;

/**
 * Const tab tva vente.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ConstTabTvaVente {

    use StringCodeTvaArticleTrait;
    use StringCodeTvaClientTrait;
    use StringCompteTvaTrait;
    use StringLibelleTrait;
    use FloatTauxTvaTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
