<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAfficherTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolExoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolQuadraTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroupEdBulTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTitreTrait;

/**
 * Regroupement ed bul.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class RegroupementEdBul {

    use BoolAfficherTrait;
    use StringCodeLibelleTrait;
    use StringCodeRegroupEdBulTrait;
    use StringCodeTitreTrait;
    use BoolExoTrait;
    use BoolQuadraTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
