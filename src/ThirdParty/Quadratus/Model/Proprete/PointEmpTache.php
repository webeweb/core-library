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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateValidationSynchroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHRemplMensTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMensualisationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtPrime1ChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtPrime2ChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtPrime3ChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeures1RsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeures1TpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeures2RsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeures2TpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbPaniersTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTxHoraire1RsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTxHoraire1TpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTxHoraire2RsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTxHoraire2TpTrait;
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
 * Point emp tache.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PointEmpTache {

    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeCollaboValidTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeEmployeTrait;
    use StringCodeTacheTrait;
    use DateTimeDateValidationSynchroTrait;
    use StringEtatTrait;
    use FloatHRemplMensTrait;
    use FloatMensualisationTrait;
    use FloatMtPrime1ChantierTrait;
    use FloatMtPrime2ChantierTrait;
    use FloatMtPrime3ChantierTrait;
    use FloatNbHeures1RsTrait;
    use FloatNbHeures1TpTrait;
    use FloatNbHeures2RsTrait;
    use FloatNbHeures2TpTrait;
    use FloatNbPaniersTrait;
    use IntNumBtTrait;
    use DateTimePeriodeTrait;
    use FloatTxHoraire1RsTrait;
    use FloatTxHoraire1TpTrait;
    use FloatTxHoraire2RsTrait;
    use FloatTxHoraire2TpTrait;
    use StringUniqIdSynchroTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
