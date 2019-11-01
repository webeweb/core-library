<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAbsJourTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCongesPayesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolInBulTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolProlongationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRepriseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAddedCollTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAddedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeBulTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNb30Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHAbCpCalculeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHAbCpSaisiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbJhCalculeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbJhTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndicePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumEvenementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumUniqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeUserTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAbsTrait;

/**
 * Absences.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Absences {

    use BoolAbsJourTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeUserTrait;
    use BoolCongesPayesTrait;
    use DateTimeDateAddedTrait;
    use DateTimeDateAddedCollTrait;
    use BoolInBulTrait;
    use IntIndicePeriodeTrait;
    use FloatNb30Trait;
    use FloatNbHAbCpCalculeTrait;
    use FloatNbHAbCpSaisiTrait;
    use FloatNbJhTrait;
    use FloatNbJhCalculeTrait;
    use IntNumEvenementTrait;
    use IntNumUniqTrait;
    use StringNumeroEmployeTrait;
    use DateTimePeriodeBulTrait;
    use DateTimePeriodeDebTrait;
    use DateTimePeriodeFinTrait;
    use BoolProlongationTrait;
    use BoolRepriseTrait;
    use StringTypeAbsTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
