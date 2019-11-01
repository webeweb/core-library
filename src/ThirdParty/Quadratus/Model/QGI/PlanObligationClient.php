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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntQuiLeFaitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollabSpecifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeObligationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFrequenceTrait;

/**
 * Plan obligation client.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class PlanObligationClient {

    use StringCodeClientTrait;
    use StringCodeCollabSpecifTrait;
    use StringCodeObligationTrait;
    use DateTimeDateDebutTrait;
    use DateTimeDateFinTrait;
    use StringFrequenceTrait;
    use IntNumLigneTrait;
    use IntQuiLeFaitTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
