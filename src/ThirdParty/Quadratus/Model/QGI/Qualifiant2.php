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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLiaisonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringColonneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringObjetRefTrait;

/**
 * Qualifiant2.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Qualifiant2 {

    use StringCodeTrait;
    use StringCodeLiaisonTrait;
    use StringCodeLibelleTrait;
    use StringColonneTrait;
    use IntNumLigTrait;
    use StringObjetRefTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
