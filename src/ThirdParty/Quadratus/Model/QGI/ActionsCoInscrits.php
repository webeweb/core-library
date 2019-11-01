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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolConfirmeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPresentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumInterlocuteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumSeanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeActionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeManifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrenomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTelephoneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeInviteTrait;

/**
 * Actions co inscrits.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoInscrits {

    use StringCodeActionTrait;
    use StringCodeClientTrait;
    use StringCodeManifTrait;
    use BoolConfirmeTrait;
    use StringEmailTrait;
    use StringFaxTrait;
    use StringNomTrait;
    use IntNumInterlocuteurTrait;
    use IntNumSeanceTrait;
    use IntNumeroTrait;
    use StringPrenomTrait;
    use BoolPresentTrait;
    use StringTelephoneTrait;
    use StringTypeInviteTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
