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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNiveauTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFichiersPublierWebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIgnorerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeDonneesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringValeurOrigineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringValeurTrait;

/**
 * Rg correspondances.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class RgCorrespondances {

    use StringFichiersPublierWebTrait;
    use StringIgnorerTrait;
    use IntNiveauTrait;
    use StringTypeDonneesTrait;
    use StringUniqIdTrait;
    use StringValeurTrait;
    use StringValeurOrigineTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
