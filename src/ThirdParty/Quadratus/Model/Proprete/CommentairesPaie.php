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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCommTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateValidationSynchroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIdCommTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaboValidTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeCommTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdSynchroTrait;

/**
 * Commentaires paie.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class CommentairesPaie {

    use StringCodeCollaboValidTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeEmployeTrait;
    use StringCommentaireTrait;
    use DateTimeDateCommTrait;
    use DateTimeDateValidationSynchroTrait;
    use StringEtatTrait;
    use IntIdCommTrait;
    use DateTimePeriodeTrait;
    use StringTypeCommTrait;
    use StringUniqIdSynchroTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
