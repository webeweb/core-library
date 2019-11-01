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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIsRegroupementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheVisuTrait;

/**
 * Mission visu taches.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class MissionVisuTaches {

    use StringCodeMissionTrait;
    use StringCodeTacheVisuTrait;
    use BoolIsRegroupementTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
