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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMaintenanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinMaintTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantMaintTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceAffTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCategorieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeIntervenantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomLogicielTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumLicenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefImageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSousCategorieTrait;

/**
 * Logiciels.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Logiciels {

    use StringCategorieTrait;
    use StringCodeClientTrait;
    use StringCodeIntervenantTrait;
    use StringCommentaireTrait;
    use DateTimeDateAchatTrait;
    use DateTimeDateFinMaintTrait;
    use IntIndiceAffTrait;
    use BoolMaintenanceTrait;
    use FloatMontantMaintTrait;
    use StringNomLogicielTrait;
    use StringNumLicenceTrait;
    use StringRefImageTrait;
    use StringSousCategorieTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
