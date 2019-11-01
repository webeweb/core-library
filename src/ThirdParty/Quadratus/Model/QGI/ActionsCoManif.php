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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIsMontantHtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTypeFormationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolYaFeuillePresenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeDblTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantChequeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDureeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceAffTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbSeancesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeActionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeManifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringContactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleMemoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLieuBtqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLieuBureauDistributeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLieuCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLieuComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLieuEmailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLieuFaxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLieuNomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLieuNomVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLieuNumVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLieuPjTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLieuTelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomFormateurTrait;

/**
 * Actions co manif.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoManif {

    use StringCodeActionTrait;
    use StringCodeManifTrait;
    use StringContactTrait;
    use DateTimeDateDebTrait;
    use DateTimeDateFinTrait;
    use IntDureeTrait;
    use FloatDureeDblTrait;
    use IntIndiceAffTrait;
    use BoolIsMontantHtTrait;
    use StringLibelleTrait;
    use StringLibelleMemoTrait;
    use StringLieuBtqTrait;
    use StringLieuBureauDistributeurTrait;
    use StringLieuCodePostalTrait;
    use StringLieuComplementTrait;
    use StringLieuEmailTrait;
    use StringLieuFaxTrait;
    use StringLieuNomTrait;
    use StringLieuNomVoieTrait;
    use StringLieuNumVoieTrait;
    use StringLieuPjTrait;
    use StringLieuTelTrait;
    use FloatMontantChequeTrait;
    use IntNbSeancesTrait;
    use StringNomFormateurTrait;
    use BoolTypeFormationTrait;
    use BoolYaFeuillePresenceTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
