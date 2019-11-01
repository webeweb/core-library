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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesIntervenantsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesTotalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbSmsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;

/**
 * Envoi sms.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class EnvoiSms {

    use BoolAccesCollaborateurTrait;
    use BoolAccesIntervenantsTrait;
    use BoolAccesTotalTrait;
    use StringCodeCollaborateurTrait;
    use IntNbSmsTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
