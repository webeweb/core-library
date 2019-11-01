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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeJournalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVentilationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteVentilationTrait;

/**
 * Ventilations auto.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class VentilationsAuto {

    use StringCodeJournalTrait;
    use StringCodeVentilationTrait;
    use StringCompteVentilationTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
