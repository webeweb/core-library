<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteTvaAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteTvaImmoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteTvaVenteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteVentilationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAutoliquidationTrait;

/**
 * Tva.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Tva {

    use StringCodeTrait;
    use StringCompteTvaAchatTrait;
    use StringCompteTvaImmoTrait;
    use StringCompteTvaVenteTrait;
    use StringCompteVentilationTrait;
    use FloatTauxTvaTrait;
    use StringTypeAutoliquidationTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
