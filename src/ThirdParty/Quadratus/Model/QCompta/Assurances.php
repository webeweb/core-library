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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMontantFixeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateInitialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSignature1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSignature2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSignature3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSignature4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSignature5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantAnnuel1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantAnnuel2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantAnnuel3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantAnnuel4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantAnnuel5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDureePreavisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDureeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroPjTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeNatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompagnieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCourtierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDateEcheanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumCptAssuranceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniteDureeTrait;

/**
 * Assurances.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Assurances {

    use StringCodeCentreTrait;
    use StringCodeNatureTrait;
    use StringCompagnieTrait;
    use StringCourtierTrait;
    use StringDateEcheanceTrait;
    use DateTimeDateInitialeTrait;
    use DateTimeDateSignature1Trait;
    use DateTimeDateSignature2Trait;
    use DateTimeDateSignature3Trait;
    use DateTimeDateSignature4Trait;
    use DateTimeDateSignature5Trait;
    use IntDureeTrait;
    use IntDureePreavisTrait;
    use StringLibelleTrait;
    use FloatMontantAnnuel1Trait;
    use FloatMontantAnnuel2Trait;
    use FloatMontantAnnuel3Trait;
    use FloatMontantAnnuel4Trait;
    use FloatMontantAnnuel5Trait;
    use BoolMontantFixeTrait;
    use StringNumContratTrait;
    use StringNumCptAssuranceTrait;
    use IntNumeroPjTrait;
    use StringUniteDureeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
