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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCommandeRecueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPrixbloqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateReceptionPrevueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPuBrutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQteOrigineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxCommissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeUniteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNoLigneBlTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDepotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroupementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVarianteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVentilVenteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoBlTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoPieceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeLigneTrait;

/**
 * Cde client ligne.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class CdeClientLigne {

    use StringCodeAffaireTrait;
    use StringCodeArticleTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeDepotTrait;
    use StringCodeRegroupementTrait;
    use StringCodeTvaTrait;
    use IntCodeUniteTrait;
    use StringCodeVarianteTrait;
    use StringCodeVentilVenteTrait;
    use BoolCommandeRecueTrait;
    use DateTimeDateReceptionPrevueTrait;
    use StringDesignationTrait;
    use StringDesignation2Trait;
    use StringDesignation3Trait;
    use IntIndiceLigneTrait;
    use StringNoBlTrait;
    use IntNoLigneBlTrait;
    use StringNoPieceTrait;
    use StringNumeroFactureTrait;
    use IntNumeroLigneTrait;
    use FloatPuBrutTrait;
    use FloatPrixAchatTrait;
    use BoolPrixbloqueTrait;
    use FloatQteOrigineTrait;
    use FloatQuantiteTrait;
    use FloatRemiseLigne1Trait;
    use FloatRemiseLigne2Trait;
    use FloatRemiseLigne3Trait;
    use FloatTauxCommissionTrait;
    use FloatTauxTvaTrait;
    use StringTypeLigneTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
