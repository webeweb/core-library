<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtHtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtN1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTxTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLotEcritureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLotPeriodiciteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFeuilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentairesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringContrePartieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibEcritureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMoisRevisionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefImageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSensTrait;

/**
 * Charges produits.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ChargesProduits {

    use StringCentreTrait;
    use StringCodeFeuilleTrait;
    use StringCommentairesTrait;
    use StringContrePartieTrait;
    use StringEtatLigneTrait;
    use StringLibEcritureTrait;
    use StringMoisRevisionTrait;
    use FloatMtHtTrait;
    use FloatMtN1Trait;
    use StringNatureTrait;
    use IntNumLigneTrait;
    use IntNumLotEcritureTrait;
    use IntNumLotPeriodiciteTrait;
    use StringNumeroCompteTrait;
    use StringRefImageTrait;
    use StringSensTrait;
    use FloatTxTvaTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
