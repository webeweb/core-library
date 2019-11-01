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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCocheClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCocheFournisseurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCocheIntervenantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCocheProspectTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCocheSortiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeColTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;

/**
 * Clients selection suite.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ClientsSelectionSuite {

    use BoolCocheClientTrait;
    use BoolCocheFournisseurTrait;
    use BoolCocheIntervenantTrait;
    use BoolCocheProspectTrait;
    use BoolCocheSortiTrait;
    use StringCodeColTrait;
    use StringLibelleTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
