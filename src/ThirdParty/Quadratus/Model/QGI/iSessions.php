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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateActiveTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAddedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIdTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresseIpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAppliTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeUserTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDossierTrait;

/**
 * i sessions.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class iSessions {

    use StringAdresseIpTrait;
    use StringAppliTrait;
    use StringCodeUserTrait;
    use DateTimeDateActiveTrait;
    use DateTimeDateAddedTrait;
    use StringDossierTrait;
    use IntIdTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
