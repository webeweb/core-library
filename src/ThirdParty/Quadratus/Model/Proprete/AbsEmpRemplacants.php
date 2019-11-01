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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAjouterEnHComplTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAvenantHRemplTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRemplacantTravailleJfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRemplacementCompletTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRemplacementModifieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAbsDecaleeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutAbsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutRemplTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinRemplTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateValidationSynchroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeRemplacementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumBtRemplTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroAvenantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumRemplTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireRemplTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierRemplTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientRemplTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaboValidTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRemplacantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheRemplTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdSynchroTrait;

/**
 * Abs emp remplacants.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class AbsEmpRemplacants {

    use BoolAjouterEnHComplTrait;
    use BoolAvenantHRemplTrait;
    use StringCodeAffaireTrait;
    use StringCodeAffaireRemplTrait;
    use StringCodeChantierTrait;
    use StringCodeChantierRemplTrait;
    use StringCodeClientTrait;
    use StringCodeClientRemplTrait;
    use StringCodeCollaboValidTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeEmployeTrait;
    use StringCodeRemplacantTrait;
    use StringCodeTacheTrait;
    use StringCodeTacheRemplTrait;
    use DateTimeDateAbsDecaleeTrait;
    use DateTimeDateDebutAbsTrait;
    use DateTimeDateDebutRemplTrait;
    use DateTimeDateFinRemplTrait;
    use DateTimeDateValidationSynchroTrait;
    use FloatDureeRemplacementTrait;
    use StringEtatTrait;
    use IntNumBtTrait;
    use IntNumBtRemplTrait;
    use IntNumRemplTrait;
    use IntNumeroAvenantTrait;
    use BoolRemplacantTravailleJfTrait;
    use BoolRemplacementCompletTrait;
    use BoolRemplacementModifieTrait;
    use StringUniqIdSynchroTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
