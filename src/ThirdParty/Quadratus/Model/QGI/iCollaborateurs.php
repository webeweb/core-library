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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeValideATrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeValideDeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollabTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumiKeyTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPasswordTrait;

/**
 * i collaborateurs.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class iCollaborateurs {

    use StringCodeCollabTrait;
    use StringNumiKeyTrait;
    use StringPasswordTrait;
    use DateTimeValideATrait;
    use DateTimeValideDeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
