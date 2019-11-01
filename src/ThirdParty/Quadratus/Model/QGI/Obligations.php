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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFamilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeObligationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFrequenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;

/**
 * Obligations.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Obligations {

    use StringCodeFamilleTrait;
    use StringCodeObligationTrait;
    use StringFrequenceTrait;
    use StringIntituleTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
