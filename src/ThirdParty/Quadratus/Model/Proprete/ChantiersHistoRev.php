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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRefusClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateRevisionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeReviseeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPourcentageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneRevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFormuleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroupementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFormuleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocumentTrait;

/**
 * Chantiers histo rev.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersHistoRev {

    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeFormuleTrait;
    use StringCodeRegroupementTrait;
    use StringCommentaireTrait;
    use DateTimeDateRevisionTrait;
    use StringFormuleTrait;
    use StringLienDocumentTrait;
    use IntNumBtTrait;
    use IntNumLigneRevTrait;
    use DateTimePeriodeReviseeTrait;
    use FloatPourcentageTrait;
    use BoolRefusClientTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
