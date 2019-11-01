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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAutoIncrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDiscrTacheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeSemaineTacheTrait;

/**
 * Taches semaine.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class TachesSemaine {

    use IntAutoIncrTrait;
    use StringCodeSemaineTacheTrait;
    use IntDiscrTacheTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
