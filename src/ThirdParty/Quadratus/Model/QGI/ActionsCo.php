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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolOpConfirmationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolOpContratSigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolOpExplicationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolOpInvitationIndivTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolOpInvitationMasseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolOpPresenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolOpPriseRdvTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolOpRelanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolOpReponseInscripTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolOpReponseNegativeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolOpReservationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinVieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleMemoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;

/**
 * Actions co.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCo {

    use StringCodeTrait;
    use DateTimeDateCreationTrait;
    use DateTimeDateFinVieTrait;
    use DateTimeDateModificationTrait;
    use StringLibelleTrait;
    use StringLibelleMemoTrait;
    use BoolOpConfirmationTrait;
    use BoolOpContratSigneTrait;
    use BoolOpExplicationTrait;
    use BoolOpInvitationIndivTrait;
    use BoolOpInvitationMasseTrait;
    use BoolOpPresenceTrait;
    use BoolOpPriseRdvTrait;
    use BoolOpRelanceTrait;
    use BoolOpReponseInscripTrait;
    use BoolOpReponseNegativeTrait;
    use BoolOpReservationTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
