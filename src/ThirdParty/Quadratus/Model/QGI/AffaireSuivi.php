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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateBilanTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAvancementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeuresPrevisionnelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePhaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringListeCollabTrait;

/**
 * Affaire suivi.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AffaireSuivi {

    use FloatAvancementTrait;
    use StringCodeAffaireTrait;
    use StringCodePhaseTrait;
    use StringCommentaireTrait;
    use DateTimeDateBilanTrait;
    use StringListeCollabTrait;
    use FloatNbHeuresPrevisionnelTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
