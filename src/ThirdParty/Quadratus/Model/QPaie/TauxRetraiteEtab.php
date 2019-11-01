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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxRetTr2PpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxRetTr2PsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxRetTrAppTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxRetTrApsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxRetTrBppTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxRetTrBpsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxRetTrCppTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxRetTrCpsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxRetTrDppTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxRetTrDpsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;

/**
 * Taux retraite etab.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class TauxRetraiteEtab {

    use DateTimeAPartirDeTrait;
    use IntCodeEtablissementTrait;
    use FloatTauxRetTr2PpTrait;
    use FloatTauxRetTr2PsTrait;
    use FloatTauxRetTrAppTrait;
    use FloatTauxRetTrApsTrait;
    use FloatTauxRetTrBppTrait;
    use FloatTauxRetTrBpsTrait;
    use FloatTauxRetTrCppTrait;
    use FloatTauxRetTrCpsTrait;
    use FloatTauxRetTrDppTrait;
    use FloatTauxRetTrDpsTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
