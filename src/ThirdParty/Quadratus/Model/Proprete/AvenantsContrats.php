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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSignatureEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAvenantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeAvenantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumAvenantSaisiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroAvenantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringChronoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringObservationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAvenantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeDocumentTrait;

/**
 * Avenants contrats.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class AvenantsContrats {

    use StringChronoTrait;
    use StringCodeEmployeTrait;
    use DateTimeDateAvenantTrait;
    use StringLienDocumentTrait;
    use IntNumAvenantSaisiTrait;
    use IntNumeroAvenantTrait;
    use StringObservationTrait;
    use DateTimePeriodeAvenantTrait;
    use BoolSignatureEmployeTrait;
    use StringTypeAvenantTrait;
    use StringTypeDocumentTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
