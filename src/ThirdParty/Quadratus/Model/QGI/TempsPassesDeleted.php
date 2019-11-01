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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSuppressionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringContexteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGUniqIdTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUserTrait;

/**
 * Temps passes deleted.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class TempsPassesDeleted {

    use StringContexteTrait;
    use DateTimeDateSuppressionTrait;
    use StringGUniqIdTrait;
    use StringUserTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
