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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNePasEditerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbUoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntJourTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNiveauTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFrequenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMissionsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRealiseParTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAffectationTrait;

/**
 * Travaux missions.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class TravauxMissions {

    use StringCodeArticleTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeTacheTrait;
    use StringCodeTravailTrait;
    use BoolDeclarationARedigerTrait;
    use StringFrequenceTrait;
    use IntJourTrait;
    use StringLibelleTrait;
    use StringMissionsTrait;
    use FloatNbUoTrait;
    use BoolNePasEditerTrait;
    use IntNiveauTrait;
    use StringRealiseParTrait;
    use StringTypeAffectationTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
