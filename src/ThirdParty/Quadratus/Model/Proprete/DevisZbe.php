<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBatimentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumDevisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringZoneGeographiqueTrait;

/**
 * Devis zbe.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class DevisZbe {

    use StringBatimentTrait;
    use StringEtageTrait;
    use StringNumDevisTrait;
    use StringZoneGeographiqueTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
