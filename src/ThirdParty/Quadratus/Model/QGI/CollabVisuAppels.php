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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollabTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollabVisuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeCodeTrait;

/**
 * Collab visu appels.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class CollabVisuAppels {

    use StringCodeCollabTrait;
    use StringCodeCollabVisuTrait;
    use StringTypeCodeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
