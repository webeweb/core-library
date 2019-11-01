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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSurfaceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumProgrammeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBatimentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLocalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRevetementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdentificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleLocalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleRevetementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumDevisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSolMurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringZoneGeographiqueTrait;

/**
 * Devis lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class DevisLignes {

    use StringBatimentTrait;
    use StringCodeLocalTrait;
    use StringCodeRevetementTrait;
    use StringEtageTrait;
    use StringIdentificationTrait;
    use StringLibelleLocalTrait;
    use StringLibelleRevetementTrait;
    use StringNumDevisTrait;
    use IntNumLigneTrait;
    use IntNumProgrammeTrait;
    use StringSolMurTrait;
    use FloatSurfaceTrait;
    use StringZoneGeographiqueTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
