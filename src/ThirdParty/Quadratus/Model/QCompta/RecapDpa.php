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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAleasClimatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAleasEcoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAutresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatFranchDommagesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMttAnneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrimesFranchTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAnneeDedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAnneeUtilisationTrait;

/**
 * Recap dpa.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class RecapDpa {

    use FloatAleasClimatTrait;
    use FloatAleasEcoTrait;
    use IntAnneeDedTrait;
    use IntAnneeUtilisationTrait;
    use FloatAutresTrait;
    use FloatFranchDommagesTrait;
    use FloatMttAnneeTrait;
    use FloatPrimesFranchTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
