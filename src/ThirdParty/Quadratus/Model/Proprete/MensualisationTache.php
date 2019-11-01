<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolHistoMensSaisiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateValidationSynchroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDebutValiditeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMensualisationCalculeeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMensualisationSaisieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtPrimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbPaniersTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaboValidTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdSynchroTrait;

/**
 * Mensualisation tache.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class MensualisationTache {

    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeCollaboValidTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeEmployeTrait;
    use StringCodeTacheTrait;
    use DateTimeDateValidationSynchroTrait;
    use StringEtatTrait;
    use BoolHistoMensSaisiTrait;
    use FloatMensualisationCalculeeTrait;
    use FloatMensualisationSaisieTrait;
    use FloatMtPrimeTrait;
    use FloatNbPaniersTrait;
    use IntNumBtTrait;
    use DateTimePeriodeDebutValiditeTrait;
    use StringUniqIdSynchroTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
