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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringChampTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeColTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringValeurTrait;

/**
 * Clients selection.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ClientsSelection {

    use StringChampTrait;
    use StringCodeColTrait;
    use StringLibelleTrait;
    use StringTypeTrait;
    use StringValeurTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
