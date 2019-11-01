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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolExclureFusionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIsTauxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMarqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTypeBaseUniqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateApplicationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDeclaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtPatronalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtSalarialTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbCotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbPatronalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbSalarialTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSommeBaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxAtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxPatronalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxSalarialTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeAtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDucsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeInseeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringConditionSpecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdInstitutionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringQualifiantCotisTrait;

/**
 * Lignes ducs.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesDucs {

    use IntCodeAtTrait;
    use StringCodeCentreTrait;
    use StringCodeDucsTrait;
    use IntCodeEtablissementTrait;
    use StringCodeInseeTrait;
    use StringCodeLibelleTrait;
    use StringConditionSpecTrait;
    use DateTimeDateApplicationTrait;
    use BoolExclureFusionTrait;
    use StringIdInstitutionTrait;
    use StringIntituleTrait;
    use BoolIsTauxTrait;
    use BoolMarqueTrait;
    use FloatMontantTrait;
    use FloatMtPatronalTrait;
    use FloatMtSalarialTrait;
    use FloatNbCotTrait;
    use FloatNbPatronalTrait;
    use FloatNbSalarialTrait;
    use StringOrganismeTrait;
    use DateTimePeriodeDeclaTrait;
    use StringQualifiantCotisTrait;
    use FloatSommeBaseTrait;
    use FloatTauxAtTrait;
    use FloatTauxPatronalTrait;
    use FloatTauxSalarialTrait;
    use BoolTypeBaseUniqueTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
