<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptDerCapTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptDerDotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptDerMajTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptDerRepTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptDotCorTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptDotExcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptDotFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptDotIncTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptValCorTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptValExcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptValFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptValIncTrait;

/**
 * Transfert immos.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class TransfertImmos {

    use StringCptDerCapTrait;
    use StringCptDerDotTrait;
    use StringCptDerMajTrait;
    use StringCptDerRepTrait;
    use StringCptDotCorTrait;
    use StringCptDotExcTrait;
    use StringCptDotFinTrait;
    use StringCptDotIncTrait;
    use StringCptValCorTrait;
    use StringCptValExcTrait;
    use StringCptValFinTrait;
    use StringCptValIncTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
