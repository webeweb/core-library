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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCategCadreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxPatTrATrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxPatTrBTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxPatTrCTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxSalTrATrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxSalTrBTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxSalTrCTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleBulTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumDossierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSousDossierTrait;

/**
 * Taux retraite.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class TauxRetraite {

    use BoolCategCadreTrait;
    use StringCodeCentreTrait;
    use IntCodeEtablissementTrait;
    use StringCodeOrganismeTrait;
    use IntIndiceContratTrait;
    use StringLibelleBulTrait;
    use StringNumDossierTrait;
    use StringSousDossierTrait;
    use FloatTauxPatTrATrait;
    use FloatTauxPatTrBTrait;
    use FloatTauxPatTrCTrait;
    use FloatTauxSalTrATrait;
    use FloatTauxSalTrBTrait;
    use FloatTauxSalTrCTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
