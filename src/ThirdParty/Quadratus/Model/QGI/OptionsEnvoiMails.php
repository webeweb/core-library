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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAvecEnteteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAvecPiedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollabTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeModuleTrait;

/**
 * Options envoi mails.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class OptionsEnvoiMails {

    use BoolAvecEnteteTrait;
    use BoolAvecPiedTrait;
    use StringCodeCollabTrait;
    use StringCodeModuleTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
