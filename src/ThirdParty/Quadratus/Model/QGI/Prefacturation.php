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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFacturableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIsTransfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSaisieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSysSaisieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIdPrefacturationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePhaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroupementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMonnaieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdFactureTrait;

/**
 * Prefacturation.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Prefacturation {

    use StringCodeArticleTrait;
    use StringCodeClientTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeMissionTrait;
    use StringCodePhaseTrait;
    use StringCodeRegroupementTrait;
    use DateTimeDateSaisieTrait;
    use DateTimeDateSysSaisieTrait;
    use BoolFacturableTrait;
    use IntIdPrefacturationTrait;
    use BoolIsTransfTrait;
    use StringLibelleTrait;
    use StringMonnaieTrait;
    use FloatPuTrait;
    use FloatQteTrait;
    use StringUniqIdFactureTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
