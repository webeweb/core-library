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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinUtilTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceAffTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCarTecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCategorieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeIntervenantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefImageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSousCategorieTrait;

/**
 * Materiels.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Materiels {

    use StringCarTecTrait;
    use StringCategorieTrait;
    use StringCodeClientTrait;
    use StringCodeIntervenantTrait;
    use StringCommentaireTrait;
    use DateTimeDateAchatTrait;
    use DateTimeDateFinUtilTrait;
    use IntIndiceAffTrait;
    use StringLibelleTrait;
    use StringRefImageTrait;
    use StringSousCategorieTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
