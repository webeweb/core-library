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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRealiseParFcqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDatePrevueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateReelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateValidationSynchroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNoteGlobaleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroReclamTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaboValidTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeControleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdNoeudTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdSynchroTrait;

/**
 * Chantiers plan ctrl qualite.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersPlanCtrlQualite {

    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeCollaboValidTrait;
    use StringCodeCollaborateurTrait;
    use StringCommentaireTrait;
    use DateTimeDatePrevueTrait;
    use DateTimeDateReelleTrait;
    use DateTimeDateValidationSynchroTrait;
    use StringEtatTrait;
    use FloatNoteGlobaleTrait;
    use IntNumeroReclamTrait;
    use BoolRealiseParFcqTrait;
    use StringTypeControleTrait;
    use StringUniqIdSynchroTrait;
    use StringUniqIdNoeudTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
