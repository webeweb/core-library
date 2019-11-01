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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEnvoiMessageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTailleBaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntVersionTrait;

/**
 * Quadra db.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class QuadraDb {

    use DateTimeDateEnvoiMessageTrait;
    use FloatTailleBaseTrait;
    use IntVersionTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
