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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntConfirmesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntInscritsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumInterlocuteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumSeanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPresentsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPriseRdvTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeActionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeManifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeInviteTrait;

/**
 * Actions co suivi.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoSuivi {

    use StringCodeActionTrait;
    use StringCodeClientTrait;
    use StringCodeManifTrait;
    use IntConfirmesTrait;
    use IntContratTrait;
    use IntInscritsTrait;
    use IntNumInterlocuteurTrait;
    use IntNumSeanceTrait;
    use IntPresentsTrait;
    use IntPriseRdvTrait;
    use StringTypeInviteTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
