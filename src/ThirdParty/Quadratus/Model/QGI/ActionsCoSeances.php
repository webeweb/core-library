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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSeanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeureDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeureFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumSeanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeActionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeManifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleSeanceTrait;

/**
 * Actions co seances.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoSeances {

    use StringCodeActionTrait;
    use StringCodeManifTrait;
    use DateTimeDateSeanceTrait;
    use DateTimeHeureDebTrait;
    use DateTimeHeureFinTrait;
    use StringLibelleSeanceTrait;
    use IntNumSeanceTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
