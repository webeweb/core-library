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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAutoriseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAgenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDossierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMotControleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMotDePasseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTrait;

/**
 * Fiches confidentialites controles.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class FichesConfidentialitesControles {

    use StringAgenceTrait;
    use BoolAutoriseTrait;
    use StringCodeCollTrait;
    use StringDossierTrait;
    use StringMotControleTrait;
    use StringMotDePasseTrait;
    use StringTypeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
