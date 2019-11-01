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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesLibreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIncrementAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntProchainNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrefixeTrait;

/**
 * Type intervenants.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class TypeIntervenants {

    use BoolAccesLibreTrait;
    use StringCodeTrait;
    use BoolIncrementAutoTrait;
    use StringLibelleTrait;
    use StringPrefixeTrait;
    use IntProchainNumeroTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
