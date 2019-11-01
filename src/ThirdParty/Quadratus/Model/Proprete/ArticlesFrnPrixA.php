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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPrixCondTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPxAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQteAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemise1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemise2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemise3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntQteCondTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFournisseurTrait;

/**
 * Articles frn prix a.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ArticlesFrnPrixA {

    use StringCodeArticleTrait;
    use StringCodeFournisseurTrait;
    use DateTimeDateDebutTrait;
    use BoolPrixCondTrait;
    use FloatPxAchatTrait;
    use FloatQteAchatTrait;
    use IntQteCondTrait;
    use FloatRemise1Trait;
    use FloatRemise2Trait;
    use FloatRemise3Trait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
