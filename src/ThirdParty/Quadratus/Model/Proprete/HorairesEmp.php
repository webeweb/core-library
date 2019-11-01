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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAouTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAvrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolJanTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolJuilTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolJuinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMaiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMarTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNovTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolOctTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSemaineCompleteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSepTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutAffectationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinAffectationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateValidationSynchroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDureeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeureDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDiscrSemTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumChronoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroAvenantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaboValidTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDimType2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringHNuitType2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringJfType2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoteMemoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroSemaineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumJourTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSaufSemaineCompleteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTravailleJfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeFreqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdSynchroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdTrait;

/**
 * Horaires emp.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class HorairesEmp {

    use BoolAouTrait;
    use BoolAvrTrait;
    use StringCodeCollaboValidTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeEmployeTrait;
    use DateTimeDateDebutAffectationTrait;
    use DateTimeDateFinAffectationTrait;
    use DateTimeDateValidationSynchroTrait;
    use BoolDecTrait;
    use StringDimType2Trait;
    use IntDiscrSemTrait;
    use DateTimeDureeTrait;
    use StringEtatTrait;
    use BoolFevTrait;
    use StringHNuitType2Trait;
    use DateTimeHeureDebTrait;
    use StringJfType2Trait;
    use BoolJanTrait;
    use BoolJuilTrait;
    use BoolJuinTrait;
    use BoolMaiTrait;
    use BoolMarTrait;
    use StringNoteMemoTrait;
    use BoolNovTrait;
    use IntNumChronoTrait;
    use StringNumJourTrait;
    use IntNumeroAvenantTrait;
    use StringNumeroSemaineTrait;
    use BoolOctTrait;
    use StringSaufSemaineCompleteTrait;
    use BoolSemaineCompleteTrait;
    use BoolSepTrait;
    use StringTravailleJfTrait;
    use StringTypeContratTrait;
    use StringTypeFreqTrait;
    use StringUniqIdTrait;
    use StringUniqIdSynchroTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
