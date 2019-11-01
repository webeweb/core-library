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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCentreInactifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMargeDirecteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRepartitionAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSuiviAnneeRecolteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDevisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSuperficieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTypeSuiviAutreValeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntOrdreEditionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresseRue1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresseRue2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresseVilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCleRepartitionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDescriptionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNiveauRepartitionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRepartitionAnaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringResponsableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRestrictionsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeSuiviAutreTexteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeSuiviTrait;

/**
 * Centres.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Centres {

    use StringAdresseRue1Trait;
    use StringAdresseRue2Trait;
    use StringAdresseVilleTrait;
    use BoolCentreInactifTrait;
    use StringCleRepartitionTrait;
    use StringCodeTrait;
    use DateTimeDateCreationTrait;
    use DateTimeDateDevisTrait;
    use StringDescriptionTrait;
    use StringIntituleTrait;
    use BoolMargeDirecteTrait;
    use StringNiveauRepartitionTrait;
    use IntOrdreEditionTrait;
    use StringRepartitionAnaTrait;
    use BoolRepartitionAutoTrait;
    use StringResponsableTrait;
    use StringRestrictionsTrait;
    use BoolSuiviAnneeRecolteTrait;
    use FloatSuperficieTrait;
    use StringTypeCentreTrait;
    use StringTypeSuiviTrait;
    use StringTypeSuiviAutreTexteTrait;
    use FloatTypeSuiviAutreValeurTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
