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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAFacturerHorsExTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAFacturerSurExTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeElementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCompteurHorsExTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCompteurSurExTrait;

/**
 * Info statistiques.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class InfoStatistiques {

    use IntAFacturerHorsExTrait;
    use IntAFacturerSurExTrait;
    use IntCodeElementTrait;
    use IntCompteurHorsExTrait;
    use IntCompteurSurExTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
