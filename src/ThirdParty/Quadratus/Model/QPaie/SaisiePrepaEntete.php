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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDesactiveTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSaisieAbsCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSaisieAcompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntWidthBordTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;

/**
 * Saisie prepa entete.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class SaisiePrepaEntete {

    use StringCodeTrait;
    use BoolDesactiveTrait;
    use StringIntituleTrait;
    use BoolSaisieAbsCpTrait;
    use BoolSaisieAcompteTrait;
    use IntWidthBordTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
