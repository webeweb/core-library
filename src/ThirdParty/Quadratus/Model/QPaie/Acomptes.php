<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCongesPayesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEnEuroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolInBulTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPayeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAddedCollTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAddedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumUniqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeUserTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypePaiementTrait;

/**
 * Acomptes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Acomptes {

    use StringCodeCollaborateurTrait;
    use StringCodeUserTrait;
    use BoolCongesPayesTrait;
    use DateTimeDateTrait;
    use DateTimeDateAddedTrait;
    use DateTimeDateAddedCollTrait;
    use BoolEnEuroTrait;
    use BoolInBulTrait;
    use StringIntituleTrait;
    use FloatMontantTrait;
    use IntNumUniqTrait;
    use StringNumeroEmployeTrait;
    use BoolPayeTrait;
    use StringTypePaiementTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
