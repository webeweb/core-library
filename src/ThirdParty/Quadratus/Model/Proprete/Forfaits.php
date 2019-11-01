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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAouTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAvrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolJanTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolJuilTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolJuinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMaiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMarTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNovTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolOctTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSepTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumForfaitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePrimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeCodePrimeTrait;

/**
 * Forfaits.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Forfaits {

    use BoolAouTrait;
    use BoolAvrTrait;
    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeEmployeTrait;
    use StringCodePrimeTrait;
    use StringCodeTacheTypeTrait;
    use DateTimeDateDebutTrait;
    use DateTimeDateFinTrait;
    use BoolDecTrait;
    use BoolFevTrait;
    use BoolJanTrait;
    use BoolJuilTrait;
    use BoolJuinTrait;
    use BoolMaiTrait;
    use BoolMarTrait;
    use FloatMontantTrait;
    use BoolNovTrait;
    use IntNumForfaitTrait;
    use BoolOctTrait;
    use BoolSepTrait;
    use StringTypeCodePrimeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
