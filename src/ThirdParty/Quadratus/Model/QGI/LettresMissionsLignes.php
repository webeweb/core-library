<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDeclarationARedigerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbrHeuresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNiveauTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroupementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFrequenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNbrOperationsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNiveauLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroLettreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringObservationsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPoliceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRealiseParTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAffectationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdTrait;

/**
 * Lettres missions lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class LettresMissionsLignes {

    use StringCodeClientTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeMissionTrait;
    use StringCodeRegroupementTrait;
    use StringCodeTravailTrait;
    use DateTimeDateDebutTrait;
    use DateTimeDateFinTrait;
    use BoolDeclarationARedigerTrait;
    use StringFrequenceTrait;
    use StringLibelleTrait;
    use FloatNbrHeuresTrait;
    use StringNbrOperationsTrait;
    use IntNiveauTrait;
    use StringNiveauLigneTrait;
    use StringNumeroLettreTrait;
    use IntNumeroLigneTrait;
    use StringObservationsTrait;
    use StringPoliceTrait;
    use StringRealiseParTrait;
    use StringTypeAffectationTrait;
    use StringUniqIdTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
