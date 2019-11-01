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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDelaiLocalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDelaiLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDelaiNombreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDelaiTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFournisseurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentairesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringConditionnementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefArticleFournisseurTrait;

/**
 * Articles frn.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ArticlesFrn {

    use StringCodeArticleTrait;
    use StringCodeFournisseurTrait;
    use StringCommentairesTrait;
    use StringConditionnementTrait;
    use IntDelaiLeTrait;
    use BoolDelaiLocalTrait;
    use IntDelaiNombreTrait;
    use IntDelaiTypeTrait;
    use StringRefArticleFournisseurTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
