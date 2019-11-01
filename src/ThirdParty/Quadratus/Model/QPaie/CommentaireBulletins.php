<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndicePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaire1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaire2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaire3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaire4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaire5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTxtCommentaireRtfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTxtCommentaireSaisiTrait;

/**
 * Commentaire bulletins.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class CommentaireBulletins {

    use StringCommentaire1Trait;
    use StringCommentaire2Trait;
    use StringCommentaire3Trait;
    use StringCommentaire4Trait;
    use StringCommentaire5Trait;
    use IntIndicePeriodeTrait;
    use StringNumeroEmployeTrait;
    use DateTimePeriodeTrait;
    use StringTxtCommentaireRtfTrait;
    use StringTxtCommentaireSaisiTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
