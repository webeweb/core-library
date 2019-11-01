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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPv1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPv2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPv3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollabTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheTrait;

/**
 * Collab tache.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class CollabTache {

    use StringCodeCollabTrait;
    use StringCodeTacheTrait;
    use FloatPv1Trait;
    use FloatPv2Trait;
    use FloatPv3Trait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
