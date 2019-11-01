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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEwsPublicationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolWebPublicationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringChainePublicationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypePublicationTrait;

/**
 * Regles publication.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ReglesPublication {

    use StringChainePublicationTrait;
    use StringCodeClientTrait;
    use BoolEwsPublicationTrait;
    use StringTypePublicationTrait;
    use BoolWebPublicationTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
