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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEchEnMtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutPrevueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutReelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinPrevueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinReelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCoutHeureTheoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtCaPrevuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeuresInterimTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeuresPrevuesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeuresReelInterimTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeuresReelSousTraitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeuresSousTraitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbJoursPrevusTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbJoursReelsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbInscritsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntProchainNumArrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringClientDonneurOrdreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringClientPayeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAvenantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeColCreatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeColModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePhaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtat1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtat2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtat3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtat4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtat5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringListeCollabAccesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefDevisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringResponsableChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringResponsableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeFgTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTrait;

/**
 * Affaires.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Affaires {

    use StringClientDonneurOrdreTrait;
    use StringClientPayeurTrait;
    use StringCodeAffaireTrait;
    use StringCodeAvenantTrait;
    use StringCodeColCreatTrait;
    use StringCodeColModifTrait;
    use StringCodePhaseTrait;
    use FloatCoutHeureTheoTrait;
    use DateTimeDateCreationTrait;
    use DateTimeDateDebutPrevueTrait;
    use DateTimeDateDebutReelleTrait;
    use DateTimeDateFinPrevueTrait;
    use DateTimeDateFinReelleTrait;
    use DateTimeDateModificationTrait;
    use BoolEchEnMtTrait;
    use StringEtatTrait;
    use StringEtat1Trait;
    use StringEtat2Trait;
    use StringEtat3Trait;
    use StringEtat4Trait;
    use StringEtat5Trait;
    use StringIntituleTrait;
    use StringListeCollabAccesTrait;
    use FloatMtCaPrevuTrait;
    use FloatNbHeuresInterimTrait;
    use FloatNbHeuresPrevuesTrait;
    use FloatNbHeuresReelInterimTrait;
    use FloatNbHeuresReelSousTraitTrait;
    use FloatNbHeuresSousTraitTrait;
    use IntNbInscritsTrait;
    use FloatNbJoursPrevusTrait;
    use FloatNbJoursReelsTrait;
    use IntProchainNumArrTrait;
    use StringRefDevisTrait;
    use StringResponsableTrait;
    use StringResponsableChantierTrait;
    use StringTypeTrait;
    use StringTypeFgTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
