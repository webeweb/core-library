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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolHybrideTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolLienComptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNonPolluantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSuperCarbuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolUsageAgricoleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCessionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateImmatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDatePmecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxEmissionCo2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPuissanceCvTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCategorieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGuidTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringImmatriculationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;

/**
 * Vehicules.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Vehicules {

    use StringCategorieTrait;
    use DateTimeDateCessionTrait;
    use DateTimeDateImmatTrait;
    use DateTimeDatePmecTrait;
    use StringGuidTrait;
    use BoolHybrideTrait;
    use StringImmatriculationTrait;
    use StringLibelleTrait;
    use BoolLienComptaTrait;
    use BoolNonPolluantTrait;
    use IntPuissanceCvTrait;
    use BoolSuperCarbuTrait;
    use FloatTauxEmissionCo2Trait;
    use BoolUsageAgricoleTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
