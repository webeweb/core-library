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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRetourNegTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAjoutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumInterlocuteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTypeInvitationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeActionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomInterlocuteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeInviteTrait;

/**
 * Actions co invites.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoInvites {

    use StringCodeActionTrait;
    use StringCodeClientTrait;
    use StringCodeCollTrait;
    use DateTimeDateAjoutTrait;
    use StringNomInterlocuteurTrait;
    use IntNumInterlocuteurTrait;
    use BoolRetourNegTrait;
    use IntTypeInvitationTrait;
    use StringTypeInviteTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
