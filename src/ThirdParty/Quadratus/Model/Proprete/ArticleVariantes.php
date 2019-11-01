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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeBarreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVarianteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;

/**
 * Article variantes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ArticleVariantes {

    use StringCodeArticleTrait;
    use StringCodeBarreTrait;
    use StringCodeVarianteTrait;
    use StringLibelleTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
