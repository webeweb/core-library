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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFromFermetureChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutAbsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinAbsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateValidationSynchroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAbsenceModifieeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAbsenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaboValidTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdSynchroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdTrait;

/**
 * Absences employe.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class AbsencesEmploye {

    use StringAbsenceModifieeTrait;
    use StringCodeAbsenceTrait;
    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeCollaboValidTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeEmployeTrait;
    use StringCodeTacheTrait;
    use DateTimeDateDebutAbsTrait;
    use DateTimeDateFinAbsTrait;
    use DateTimeDateValidationSynchroTrait;
    use StringEtatTrait;
    use BoolFromFermetureChantierTrait;
    use IntNumBtTrait;
    use StringUniqIdTrait;
    use StringUniqIdSynchroTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
