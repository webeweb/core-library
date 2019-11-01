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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQteStockAttenteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQteStockMaxiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQteStockMiniTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQteStockReelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQteStockReserveTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAlleeCasierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDepotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVarianteTrait;

/**
 * Art var depot.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ArtVarDepot {

    use StringAlleeCasierTrait;
    use StringCodeArticleTrait;
    use StringCodeDepotTrait;
    use StringCodeVarianteTrait;
    use FloatQteStockAttenteTrait;
    use FloatQteStockMaxiTrait;
    use FloatQteStockMiniTrait;
    use FloatQteStockReelTrait;
    use FloatQteStockReserveTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
