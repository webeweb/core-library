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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAvenantSigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAbsDecaleeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateValidationSynchroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeureDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeuresJourTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeuresNuitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroAvenantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAbsenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaboValidTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmployeRemplaceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeHeureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdPlanningTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdSynchroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdTrait;

/**
 * Point emp heures abs compl rempl.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PointEmpHeuresAbsComplRempl {

    use BoolAvenantSigneTrait;
    use StringCodeAbsenceTrait;
    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeCollaboValidTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeEmployeTrait;
    use StringCodeTacheTrait;
    use DateTimeDateTrait;
    use DateTimeDateAbsDecaleeTrait;
    use DateTimeDateValidationSynchroTrait;
    use StringEmployeRemplaceTrait;
    use StringEtatTrait;
    use DateTimeHeureDebTrait;
    use DateTimeHeuresJourTrait;
    use DateTimeHeuresNuitTrait;
    use IntNumBtTrait;
    use IntNumeroAvenantTrait;
    use StringTypeHeureTrait;
    use StringUniqIdTrait;
    use StringUniqIdPlanningTrait;
    use StringUniqIdSynchroTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
