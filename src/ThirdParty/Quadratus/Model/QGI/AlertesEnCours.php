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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolArDemandeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDeclenchementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIdAlerteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollabDstTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollabOrgTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteAlerteTrait;

/**
 * Alertes en cours.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AlertesEnCours {

    use BoolArDemandeTrait;
    use StringCodeClientTrait;
    use StringCodeCollabDstTrait;
    use StringCodeCollabOrgTrait;
    use DateTimeDateCreationTrait;
    use DateTimeDateDeclenchementTrait;
    use IntIdAlerteTrait;
    use StringTexteAlerteTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
