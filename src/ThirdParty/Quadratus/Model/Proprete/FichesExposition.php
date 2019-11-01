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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCtrlTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebExpoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFicheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinExpoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTempsExpositionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePrestationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeProduitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLstCodePhaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLstCodePrevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringResuCtrlTrait;

/**
 * Fiches exposition.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class FichesExposition {

    use StringCodeEmployeTrait;
    use StringCodePrestationTrait;
    use StringCodeProduitTrait;
    use DateTimeDateCtrlTrait;
    use DateTimeDateDebExpoTrait;
    use DateTimeDateFicheTrait;
    use DateTimeDateFinExpoTrait;
    use StringLstCodePhaseTrait;
    use StringLstCodePrevTrait;
    use StringResuCtrlTrait;
    use FloatTempsExpositionTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
