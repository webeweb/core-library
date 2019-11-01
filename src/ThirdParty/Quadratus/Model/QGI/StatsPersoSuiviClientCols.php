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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAnNTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRegleAutresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRegleBarnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRegleBarsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRegleBicrnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRegleBicrsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRegleBncTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRegleSciTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRegleScmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRegleTousTrait;

/**
 * Stats perso suivi client cols.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class StatsPersoSuiviClientCols {

    use StringAnNTrait;
    use StringCodeTrait;
    use IntIndiceTrait;
    use StringIntituleTrait;
    use StringRegleAutresTrait;
    use StringRegleBarnTrait;
    use StringRegleBarsTrait;
    use StringRegleBicrnTrait;
    use StringRegleBicrsTrait;
    use StringRegleBncTrait;
    use StringRegleSciTrait;
    use StringRegleScmTrait;
    use StringRegleTousTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
