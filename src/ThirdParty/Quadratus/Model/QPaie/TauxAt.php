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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeAPartirDeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeAtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBureauTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRisqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSectionTrait;

/**
 * Taux at.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class TauxAt {

    use DateTimeAPartirDeTrait;
    use StringBureauTrait;
    use IntCodeAtTrait;
    use IntCodeEtablissementTrait;
    use StringRisqueTrait;
    use StringSectionTrait;
    use FloatTauxTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
