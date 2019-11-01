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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCessionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateMiseEnServiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCoeffDegressifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxLineaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDureeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntImmoNumeroDeuxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntImmoNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroPjTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringImmoNumeroCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumCptSubventionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAmortTrait;

/**
 * Subventions.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Subventions {

    use StringCodeCentreTrait;
    use FloatCoeffDegressifTrait;
    use DateTimeDateTrait;
    use DateTimeDateCessionTrait;
    use DateTimeDateMiseEnServiceTrait;
    use IntDureeTrait;
    use IntImmoNumeroTrait;
    use StringImmoNumeroCompteTrait;
    use IntImmoNumeroDeuxTrait;
    use StringLibelleTrait;
    use FloatMontantTrait;
    use StringNumContratTrait;
    use StringNumCptSubventionTrait;
    use IntNumeroPjTrait;
    use FloatTauxLineaireTrait;
    use StringTypeAmortTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
