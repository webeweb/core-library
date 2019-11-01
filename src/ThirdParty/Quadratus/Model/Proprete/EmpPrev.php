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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPointageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAbsDecaleeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateValidationSynchroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDureeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeureDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbChambresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDiscrTacheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumChronoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaboValidTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDimType2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmployeRemplaceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringHNuitType2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringJfType2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoteMemoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdPlanningTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdSynchroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdTrait;

/**
 * Emp prev.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class EmpPrev {

    use StringCodeCollaboValidTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeEmployeTrait;
    use DateTimeDateTrait;
    use DateTimeDateAbsDecaleeTrait;
    use DateTimeDateValidationSynchroTrait;
    use StringDimType2Trait;
    use IntDiscrTacheTrait;
    use DateTimeDureeTrait;
    use StringEmployeRemplaceTrait;
    use StringEtatTrait;
    use StringHNuitType2Trait;
    use DateTimeHeureDebTrait;
    use StringJfType2Trait;
    use FloatNbChambresTrait;
    use StringNoteMemoTrait;
    use IntNumChronoTrait;
    use BoolPointageTrait;
    use StringUniqIdTrait;
    use StringUniqIdPlanningTrait;
    use StringUniqIdSynchroTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
