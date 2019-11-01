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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolArEnvoyeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDeclenchementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateReponseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIdAlerteHistoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollabDstTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollabOrgTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteAlerteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteReponseTrait;

/**
 * Alertes historique.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AlertesHistorique {

    use BoolArEnvoyeTrait;
    use StringCodeClientTrait;
    use StringCodeCollabDstTrait;
    use StringCodeCollabOrgTrait;
    use DateTimeDateCreationTrait;
    use DateTimeDateDeclenchementTrait;
    use DateTimeDateReponseTrait;
    use IntIdAlerteHistoTrait;
    use StringTexteAlerteTrait;
    use StringTexteReponseTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
