<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbLignesMvtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeJournalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteCommTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteCouponsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteFraisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdentifiantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumCompteTrait;

/**
 * Vmp.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Vmp {

    use StringCodeTrait;
    use StringCodeJournalTrait;
    use StringCommentaireTrait;
    use StringCompteCommTrait;
    use StringCompteCouponsTrait;
    use StringCompteFraisTrait;
    use StringIdentifiantTrait;
    use StringLibelleTrait;
    use IntNbLignesMvtTrait;
    use StringNumCompteTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
