<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateComptageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodePreparationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbEcrituresADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbEcrituresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNoChronoPreparationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMillesimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdPdfTrait;

/**
 * Compteur ecritures.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class CompteurEcritures {

    use StringCodeClientTrait;
    use DateTimeDateComptageTrait;
    use StringMillesimeTrait;
    use IntNbEcrituresTrait;
    use FloatNbEcrituresADeduireTrait;
    use IntNoChronoPreparationTrait;
    use DateTimePeriodePreparationTrait;
    use StringTypeTrait;
    use StringUniqIdPdfTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
