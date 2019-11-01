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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAChargeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrenomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSexeTrait;

/**
 * Enfants.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Enfants {

    use BoolAChargeTrait;
    use DateTimeDateNaissanceTrait;
    use StringNomTrait;
    use IntNumLigneTrait;
    use StringNumeroEmployeTrait;
    use StringPrenomTrait;
    use StringSexeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
