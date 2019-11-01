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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroLigneAnalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroSousLigneCptHtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeNatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroupementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeDocumentTrait;

/**
 * Sous lignes analytiques.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class SousLignesAnalytiques {

    use StringCodeAffaireTrait;
    use StringCodeCentreTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeNatureTrait;
    use StringCodeRegroupementTrait;
    use FloatMontantTrait;
    use StringNumeroDocumentTrait;
    use IntNumeroLigneTrait;
    use IntNumeroLigneAnalTrait;
    use IntNumeroSousLigneCptHtTrait;
    use StringTypeDocumentTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
