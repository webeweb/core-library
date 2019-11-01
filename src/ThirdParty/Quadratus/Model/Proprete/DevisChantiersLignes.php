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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantHtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSurfaceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLocalTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRevetementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumDevisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSolMurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdNoeudTrait;

/**
 * Devis chantiers lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class DevisChantiersLignes {

    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeLocalTypeTrait;
    use StringCodeRevetementTrait;
    use FloatMontantHtTrait;
    use StringNumDevisTrait;
    use IntNumLigneTrait;
    use StringSolMurTrait;
    use FloatSurfaceTrait;
    use StringUniqIdNoeudTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
