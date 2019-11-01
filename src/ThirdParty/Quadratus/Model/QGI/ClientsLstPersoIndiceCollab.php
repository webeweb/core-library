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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntOrigineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringChapitreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefGuidTrait;

/**
 * Clients lst perso indice collab.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ClientsLstPersoIndiceCollab {

    use StringChapitreTrait;
    use StringCodeCollaborateurTrait;
    use IntIndiceTrait;
    use IntOrigineTrait;
    use StringRefGuidTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
