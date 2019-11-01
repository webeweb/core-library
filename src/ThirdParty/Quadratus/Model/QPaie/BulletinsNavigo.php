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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRbtNonProratiseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndicePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNbSemaineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAbonnementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringZoneTrait;

/**
 * Bulletins navigo.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class BulletinsNavigo {

    use IntIndicePeriodeTrait;
    use StringNbSemaineTrait;
    use StringNumeroEmployeTrait;
    use DateTimePeriodeTrait;
    use BoolRbtNonProratiseTrait;
    use StringTypeAbonnementTrait;
    use StringZoneTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
