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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateReceptionPrevueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPuBrutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQteOrigineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeUniteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNoLigneBrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntQteCondTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDepotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFournisseurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVarianteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVentilAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringConditionnementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoBrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoPieceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPosteRentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefArticleFournisseurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeLigneTrait;

/**
 * Cde fournisseur ligne.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class CdeFournisseurLigne {

    use StringCodeAffaireTrait;
    use StringCodeArticleTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeDepotTrait;
    use StringCodeFournisseurTrait;
    use StringCodeTvaTrait;
    use IntCodeUniteTrait;
    use StringCodeVarianteTrait;
    use StringCodeVentilAchatTrait;
    use BoolCommandeRecueTrait;
    use StringConditionnementTrait;
    use DateTimeDateReceptionPrevueTrait;
    use StringDesignationTrait;
    use StringDesignation2Trait;
    use StringDesignation3Trait;
    use IntIndiceLigneTrait;
    use StringNoBrTrait;
    use IntNoLigneBrTrait;
    use StringNoPieceTrait;
    use IntNumeroLigneTrait;
    use FloatPuBrutTrait;
    use StringPosteRentTrait;
    use IntQteCondTrait;
    use FloatQteOrigineTrait;
    use FloatQuantiteTrait;
    use StringRefArticleFournisseurTrait;
    use FloatRemiseLigne1Trait;
    use FloatRemiseLigne2Trait;
    use FloatRemiseLigne3Trait;
    use FloatTauxTvaTrait;
    use StringTypeLigneTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
